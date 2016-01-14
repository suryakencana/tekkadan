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
define('ROOT', __DIR__);
require 'zi/bootstrap/autoload.php';
$cfg = require ZICONFIG.'/app.php';
//var_dump($cfg);
$app = new \Zi\Zi($cfg);
/*$app->hook('slim.before',function() use ($app){
	var_dump("slim.before");
});
$app->hook('slim.before.router',function() use ($app){
	var_dump("slim.before.router");
});
$app->hook('slim.before.dispatch',function() use ($app){
	var_dump("slim.before.dispatch");
	$route = $app->route;
	var_dump($route->getName());
});
$app->hook('slim.after.dispatch',function() use ($app){
	var_dump("slim.after.dispatch");
});
$app->hook('slim.after.router',function() use ($app){
	var_dump("slim.after.router");
});
$app->hook('slim.after',function() use ($app){
	var_dump("slim.after");
});*/
//setting DB config
// var_dump(new \Zi\ZiRoute());
//$db = require ZICONFIG.'/database.php';
require ZI.'routes.php';
$app->run();