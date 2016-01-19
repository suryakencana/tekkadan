<?php
/*
 * Copyright (C) 2014 surya || nanang.ask@gmail.com
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the NGNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */

/**
 * User: surya
 * Date: 2/17/14
 * Time: 1:30 PM
 */
namespace Zi;

class Zi extends \Slim\Slim
{
  /**
   * @var string
   */
  protected $conn;

  public function __construct($userSettings = array())
  {
    parent::__construct($userSettings);
    ZiFacade::setFacadeApplication($this);
    ZiFacade::registerAliases();
    $this->view(new \Slim\Views\Twig());
    $this->view->parserOptions = array(
      'charset' => 'utf-8',
      'cache' => realpath('zi/templates/cache'),
      'auto_reload' => true,
      'strict_variables' => false,
      'autoescape' => true
    );
    $this->view->parserExtensions = array(
      new \Slim\Views\TwigExtension(),
      new ZiTwigExtension());
    $this->container->singleton('db', function($c) {
      return require ZICONFIG.'/database.php';
    });
    $this->setORM();
    $this->setAuth();
  }

  protected function setORM()
  {
    $app = $this;
    \ActiveRecord\Config::initialize(function($cfg) use($app)
    {
      $cfg->set_model_directory(ZI.'/models');
      $cfg->set_connections(
        array_combine(array_keys($app->db),
          array_map(function($cfg){
            if ($cfg['driver'] == 'sqlite') {
              return $cfg['driver']."://".$cfg['database'];
            } else {
              return $cfg['driver']."://".$cfg['username'].":".$cfg['password']."@".$cfg['host']."/".$cfg['database'];
            }
          }, $app->db))
      );
      $cfg->set_default_connection($app->mode);
    });
    $app->conn = \ActiveRecord\ConnectionManager::get_connection($app->mode);
  }

  protected function setAuth()
  {
    $smode = $this->db[$this->mode];
    $dsn = sprintf($smode['driver'].':host=%s;dbname=%s', $smode['host'], $smode['database']);
    // $dsn = sprintf($smode['driver'].':%s', $smode['database']);
    // Authentication //, $smode['username'], $smode['password']),
    $cfg = array(
      'provider' => 'Activerecord',
      'pdo' => new \PDO($dsn, $smode['username'], $smode['password']),
      'auth.type' => 'form',
      'login.url' =>  $this->container['settings']['auth.url'],
      'security.urls' => require ZICONFIG.'/authFilter.php'
    );
    $this->add(new StrongAuth($cfg, new \Strong\Strong($cfg)));
  }

  protected function mapRoute($args)
  {
    $pattern = array_shift($args);
    $callable = array_pop($args);
    $route = new ZiRoute($pattern, $callable, $this->settings['routes.case_sensitive']);
    $this->router->map($route);
    if (count($args) > 0) {
      $route->setMiddleware($args);
    }
    $this->route = $route;
    return $route;
  }

  /**
   * Add CONTROLLERS route
   * ('/user','User@index','POST'||default('GET')->name('user.index')->post()
   * @see  mapRoute()
   * @return \Slim\Route
   */
  public function controller()
  {
    $args = func_get_args();
    // var_dump($args);
    $arrArgs = $this->makeController($args);
    return $this->mapRoute($arrArgs['args'])->name($arrArgs['name']);
  }

  protected function makeController($args)
  {
    //validasi args kesalahan input fucking user
    $uriGen = array();

    $uriGen['path'] = array_shift($args);
    $uriGen['controller'] = array_pop($args);

    if(is_callable($uriGen['controller'])){
      throw new \Exception("this callable arguments, please input controller RouteName as like => home@index");
    }
    //array callable
    $uriGen['crtlact'] = explode('@', $uriGen['controller']);
    $uriGen['name'] = $uriGen['crtlact'][0].".".$uriGen['crtlact'][1];
    //generate controller class
    $uriGen['class'] = ucfirst($uriGen['crtlact'][0]).'_Controller';
    // var_dump($uriGen['class']);
    $instanceCon = new $uriGen['class'];
    //------

    //var_dump($instanceCon);
    $uriGen['args'] = array($uriGen['path'],array($instanceCon,$uriGen['crtlact'][1]));
    // var_dump($uriGen['args']);
    return $uriGen;
  }

  public function flash($key, $value)
  {
    parent::flash($key,$value);
    return $this;
  }

  public function flashNow($key, $value)
  {
    parent::flashNow($key,$value);
    return $this;
  }

  public function redirect($name, $params = array(), $routeName = true)
  {
    $url = $routeName ? $this->urlFor($name, $params) : $name;
    parent::redirect($url);
  }

  public function render($template, $data = array(), $status = null)
  {
    $this->html_render($template);
    parent::render($template . EXT, $data, $status);
  }

  public function html_render($template)
  {
    if ($len = strpos(strrev($template), '.')) {
      $template = substr($template, 0, -($len + 1));
    }
    $auth=null;
    $this->auth = \Strong\Strong::getInstance();
    if ($this->auth->loggedIn()) {
			$auth = $this->auth->getUser();
		}
    $uri = explode("/", substr($this->request()->getResourceUri(), 1));
    $var_append = array('baseurl' => BASEURL,'asset' => ASSET, 'bread' => $uri, 'auth' => $auth);
    $this->view->appendData($var_append);
  }

  public function print_render($template, $data = array(), $paper = array("A4", "portrait"))
  {
    $dompdf = new \Dompdf\Dompdf();
    $options = new \Dompdf\Options();
    // set options indvidiually
    $options->set('isPhpEnabled', true);
    
    $dompdf->setOptions($options);

    
    $dompdf->set_paper($paper[0], $paper[1]);

    $this->html_render($template);
    $html = $this->view->render($template . EXT, $data);

    $dompdf->load_html($html);
    $dompdf->render();

    return $dompdf;
  }

  /**
   * Get and/or set the Router
   *
   * This method declares the Router to be used by the Slim application.
   * If the argument is a string, Slim will instantiate a new object
   * of the same class. If the argument is an instance of Router or a subclass
   * of Router, Slim will use the argument as the Router.
   *
   * If a Router already exists and this method is called to create a
   * new Router, data already set in the existing Router will be
   * transferred to the new Router.
   *
   * @param  string|\Slim\Router $router The name or instance of a \Slim\Router subclass
   * @return \Slim\Router
   */
  public function routers($routerClass = null)
  {
    if (!is_null($routerClass)) {
      $this->router = new $routerClass();
    }
    return $this->router;
  }

  /**
   * @Override
   * Default Not Found handler
   */
  protected function defaultNotFound()
  {
//    $html = "<div><center><img src=\"".ASSET.'images/404.png" alt=""/></center></div>'; //'<p>The page you are looking for could not be found. Check the address bar to ensure your URL is spelled correctly. If all else fails, you can visit our home page at the link below.</p><a href="' . $this->request->getRootUri() . '/">Visit the Home Page</a>';
//    echo static::generateTemplateMarkup('', $html);
    $template = 'notFound';
    $this->render($template);
  }

  /**
   * Default Error handler
   */
  protected function defaultError($e)
  {
    $template = 'error';
    $this->getLog()->error($e);
    $this->render($template);
  }
  public function flashIt($key, $value)
  {
    // Load Session
    if(session_id() === "") {
      session_start();
    }
    $_SESSION['flash'][$key] = $value;
  }
}
