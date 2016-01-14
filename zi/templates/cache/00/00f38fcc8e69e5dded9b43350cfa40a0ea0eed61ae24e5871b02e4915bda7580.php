<?php

/* notFound.twig */
class __TwigTemplate_25a58b47a4ee65372d05805ecd230a9a1d67babd107b4ca891ea0caaf118794c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'basecss' => array($this, 'block_basecss'),
            'css' => array($this, 'block_css'),
            'basejs' => array($this, 'block_basejs'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Tekkadan - Health care management system</title>

    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/css/londinium-theme.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/css/styles.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/css/icons.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/css/font.css\" rel=\"stylesheet\" type=\"text/css\">

    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/plugins/messenger/messenger.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/plugins/messenger/messenger-theme-flat.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/plugins/messenger/messenger-theme-block.css\" rel=\"stylesheet\" type=\"text/css\">

    ";
        // line 19
        $this->displayBlock('basecss', $context, $blocks);
        // line 20
        echo "    ";
        $this->displayBlock('css', $context, $blocks);
        // line 21
        echo "</head>
<body class=\"navbar-fixed sidebar-wide\">

";
        // line 24
        $this->loadTemplate("navbar.twig", "notFound.twig", 24)->display($context);
        // line 25
        echo "
";
        // line 27
        echo "<div class=\"page-container\">

    ";
        // line 30
        echo "    <div class=\"error-wrapper text-center\">
        <div><img src=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/images/notFound.png\" alt=\"\" /></div>
        <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->urlFor("home"), "html", null, true);
        echo "\">Visit the Home Page</a>
    </div>
</div>
<script type=\"text/javascript\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/js/jquery-1.10.1.min.js\"></script>

<script type=\"text/javascript\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/js/plugins/interface/moment.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/js/plugins/interface/collapsible.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/js/bootstrap.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/js/bootbox.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/plugins/lodash.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/plugins/messenger/messenger.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/plugins/messenger/messenger-theme-flat.js\"></script>

";
        // line 45
        $this->displayBlock('basejs', $context, $blocks);
        // line 46
        $this->displayBlock('js', $context, $blocks);
        // line 47
        echo "</body>
</html>";
    }

    // line 19
    public function block_basecss($context, array $blocks = array())
    {
    }

    // line 20
    public function block_css($context, array $blocks = array())
    {
    }

    // line 45
    public function block_basejs($context, array $blocks = array())
    {
    }

    // line 46
    public function block_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "notFound.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 46,  152 => 45,  147 => 20,  142 => 19,  137 => 47,  135 => 46,  133 => 45,  128 => 43,  124 => 42,  120 => 41,  116 => 40,  112 => 39,  108 => 38,  104 => 37,  99 => 35,  93 => 32,  89 => 31,  86 => 30,  82 => 27,  79 => 25,  77 => 24,  72 => 21,  69 => 20,  67 => 19,  62 => 17,  58 => 16,  54 => 15,  49 => 13,  45 => 12,  41 => 11,  37 => 10,  33 => 9,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <title>Tekkadan - Health care management system</title>*/
/* */
/*     <link href="{{baseurl}}assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">*/
/*     <link href="{{baseurl}}assets/css/londinium-theme.css" rel="stylesheet" type="text/css">*/
/*     <link href="{{baseurl}}assets/css/styles.css" rel="stylesheet" type="text/css">*/
/*     <link href="{{baseurl}}assets/css/icons.css" rel="stylesheet" type="text/css">*/
/*     <link href="{{baseurl}}assets/css/font.css" rel="stylesheet" type="text/css">*/
/* */
/*     <link href="{{baseurl}}assets/plugins/messenger/messenger.css" rel="stylesheet" type="text/css">*/
/*     <link href="{{baseurl}}assets/plugins/messenger/messenger-theme-flat.css" rel="stylesheet" type="text/css">*/
/*     <link href="{{baseurl}}assets/plugins/messenger/messenger-theme-block.css" rel="stylesheet" type="text/css">*/
/* */
/*     {% block basecss %}{% endblock %}*/
/*     {% block css %}{% endblock %}*/
/* </head>*/
/* <body class="navbar-fixed sidebar-wide">*/
/* */
/* {% include 'navbar.twig'%}*/
/* */
/* {#<!-- Page container -->#}*/
/* <div class="page-container">*/
/* */
/*     {#<!-- Page content -->#}*/
/*     <div class="error-wrapper text-center">*/
/*         <div><img src="{{baseurl}}assets/images/notFound.png" alt="" /></div>*/
/*         <a href="{{ urlFor('home') }}">Visit the Home Page</a>*/
/*     </div>*/
/* </div>*/
/* <script type="text/javascript" src="{{baseurl}}assets/js/jquery-1.10.1.min.js"></script>*/
/* */
/* <script type="text/javascript" src="{{baseurl}}assets/js/plugins/interface/moment.js"></script>*/
/* <script type="text/javascript" src="{{baseurl}}assets/js/plugins/interface/collapsible.min.js"></script>*/
/* <script type="text/javascript" src="{{baseurl}}assets/js/bootstrap.min.js"></script>*/
/* <script type="text/javascript" src="{{baseurl}}assets/js/bootbox.min.js"></script>*/
/* <script type="text/javascript" src="{{baseurl}}assets/plugins/lodash.min.js"></script>*/
/* <script type="text/javascript" src="{{baseurl}}assets/plugins/messenger/messenger.min.js"></script>*/
/* <script type="text/javascript" src="{{baseurl}}assets/plugins/messenger/messenger-theme-flat.js"></script>*/
/* */
/* {% block basejs %}{% endblock %}*/
/* {% block js %}{% endblock %}*/
/* </body>*/
/* </html>*/
