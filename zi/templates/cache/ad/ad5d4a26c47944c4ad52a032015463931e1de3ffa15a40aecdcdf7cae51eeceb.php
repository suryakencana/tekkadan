<?php

/* js/index.twig */
class __TwigTemplate_1ccccbecf029bb5d8fa77b88ac26a379acf8fd6607793e709fa3f03ba2eefa52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
    <title>React Quick Start</title>
    <meta name='description' content=''>
    <meta name='viewport' content='user-scalable=no width=device-width, initial-scale=1.0 maximum-scale=1.0'>
    <link rel=\"stylesheet\" href=\"//brick.a.ssl.fastly.net/Open+Sans:400/Lato:700\">
  </head>
  <body>
    <div id=\"app-container\"></div>
    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/web.js\"></script>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "js/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 13,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*   <head>*/
/*     <meta charset='utf-8'>*/
/*     <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>*/
/*     <title>React Quick Start</title>*/
/*     <meta name='description' content=''>*/
/*     <meta name='viewport' content='user-scalable=no width=device-width, initial-scale=1.0 maximum-scale=1.0'>*/
/*     <link rel="stylesheet" href="//brick.a.ssl.fastly.net/Open+Sans:400/Lato:700">*/
/*   </head>*/
/*   <body>*/
/*     <div id="app-container"></div>*/
/*     <script src="{{baseurl}}assets/web.js"></script>*/
/*   </body>*/
/* </html>*/
/* */
