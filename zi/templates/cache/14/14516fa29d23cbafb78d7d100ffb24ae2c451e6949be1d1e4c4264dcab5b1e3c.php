<?php

/* main.twig */
class __TwigTemplate_b90f676580f7e1f0cf0f62927e8162c86fded6aa105586fa671e19be95d65757 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'basecss' => array($this, 'block_basecss'),
            'css' => array($this, 'block_css'),
            'MsgBox' => array($this, 'block_MsgBox'),
            'content' => array($this, 'block_content'),
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
\t<title>Tekkadan - Health care management system</title>

\t<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/css/londinium-theme.css\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/css/styles.css\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/css/icons.css\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/css/font.css\" rel=\"stylesheet\" type=\"text/css\">

\t<link href=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/plugins/messenger/messenger.css\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/plugins/messenger/messenger-theme-flat.css\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/plugins/messenger/messenger-theme-block.css\" rel=\"stylesheet\" type=\"text/css\">

\t";
        // line 19
        $this->displayBlock('basecss', $context, $blocks);
        // line 20
        echo "\t";
        $this->displayBlock('css', $context, $blocks);
        // line 21
        echo "</head>

<body class=\"navbar-fixed sidebar-wide\">
\t
\t";
        // line 25
        $this->loadTemplate("navbar.twig", "main.twig", 25)->display($context);
        // line 26
        echo "
\t";
        // line 28
        echo "\t<div class=\"page-container\">

        ";
        // line 30
        $this->loadTemplate("sidebar.twig", "main.twig", 30)->display($context);
        // line 31
        echo "
\t\t";
        // line 33
        echo "\t\t<div class=\"page-content\">
\t\t\t
\t\t\t<!-- Page header -->
\t\t\t<div class=\"page-header\">
\t\t\t\t<div class=\"page-title\">
\t\t\t\t\t<h3>Tekkadan <small>Tekkadan Health Care Management System&trade;</small></h3>
\t\t\t\t</div>

\t\t\t\t<div class=\"range\" style=\"margin:10px;\">
\t\t\t\t\t<div class=\"date-range\">
\t\t\t\t\t\t<i>6</i> <b><i>May</i> <i>2014</i></b>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /page header -->

\t\t\t<!-- Breadcrumbs line -->
\t\t\t<div class=\"breadcrumb-line\">
\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t<li><a href=\"\">Home</a></li>
\t\t\t\t\t<li>";
        // line 53
        echo (isset($context["folder"]) ? $context["folder"] : null);
        echo "</li>
                    ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bread"]) ? $context["bread"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["uri"]) {
            // line 55
            echo "\t\t\t\t\t<li ";
            if ($this->getAttribute($context["loop"], "last", array())) {
                echo "class=\"active\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $context["uri"]), "html", null, true);
            echo "</li>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uri'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<!-- /breadcrumbs line -->

\t\t\t<!-- Callout Message Box-->
\t\t\t";
        // line 62
        $this->displayBlock('MsgBox', $context, $blocks);
        // line 63
        echo "\t\t\t<!-- /callout Message Box -->
\t\t\t<div class=\"panel-body\">
\t\t\t\t";
        // line 65
        $this->displayBlock('content', $context, $blocks);
        // line 66
        echo "\t\t\t</div>
\t\t\t<!-- Footer -->
\t\t\t";
        // line 68
        $this->loadTemplate("footer.twig", "main.twig", 68)->display($context);
        // line 69
        echo "\t\t\t<!-- /footer -->

\t\t</div>
\t\t";
        // line 73
        echo "
\t</div>
\t";
        // line 76
        echo "\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/js/jquery-1.10.1.min.js\"></script>

    <script type=\"text/javascript\" src=\"";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/js/plugins/interface/moment.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/js/plugins/interface/collapsible.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 80
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/js/bootstrap.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/js/bootbox.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 82
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/plugins/lodash.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/plugins/messenger/messenger.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/plugins/messenger/messenger-theme-flat.js\"></script>

\t";
        // line 86
        $this->displayBlock('basejs', $context, $blocks);
        // line 87
        echo "\t";
        $this->displayBlock('js', $context, $blocks);
        // line 88
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

    // line 62
    public function block_MsgBox($context, array $blocks = array())
    {
    }

    // line 65
    public function block_content($context, array $blocks = array())
    {
    }

    // line 86
    public function block_basejs($context, array $blocks = array())
    {
    }

    // line 87
    public function block_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 87,  253 => 86,  248 => 65,  243 => 62,  238 => 20,  233 => 19,  228 => 88,  225 => 87,  223 => 86,  218 => 84,  214 => 83,  210 => 82,  206 => 81,  202 => 80,  198 => 79,  194 => 78,  188 => 76,  184 => 73,  179 => 69,  177 => 68,  173 => 66,  171 => 65,  167 => 63,  165 => 62,  158 => 57,  137 => 55,  120 => 54,  116 => 53,  94 => 33,  91 => 31,  89 => 30,  85 => 28,  82 => 26,  80 => 25,  74 => 21,  71 => 20,  69 => 19,  64 => 17,  60 => 16,  56 => 15,  51 => 13,  47 => 12,  43 => 11,  39 => 10,  35 => 9,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* 	<title>Tekkadan - Health care management system</title>*/
/* */
/* 	<link href="{{baseurl}}assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">*/
/* 	<link href="{{baseurl}}assets/css/londinium-theme.css" rel="stylesheet" type="text/css">*/
/* 	<link href="{{baseurl}}assets/css/styles.css" rel="stylesheet" type="text/css">*/
/* 	<link href="{{baseurl}}assets/css/icons.css" rel="stylesheet" type="text/css">*/
/* 	<link href="{{baseurl}}assets/css/font.css" rel="stylesheet" type="text/css">*/
/* */
/* 	<link href="{{baseurl}}assets/plugins/messenger/messenger.css" rel="stylesheet" type="text/css">*/
/* 	<link href="{{baseurl}}assets/plugins/messenger/messenger-theme-flat.css" rel="stylesheet" type="text/css">*/
/* 	<link href="{{baseurl}}assets/plugins/messenger/messenger-theme-block.css" rel="stylesheet" type="text/css">*/
/* */
/* 	{% block basecss %}{% endblock %}*/
/* 	{% block css %}{% endblock %}*/
/* </head>*/
/* */
/* <body class="navbar-fixed sidebar-wide">*/
/* 	*/
/* 	{% include 'navbar.twig'%}*/
/* */
/* 	{#<!-- Page container -->#}*/
/* 	<div class="page-container">*/
/* */
/*         {% include 'sidebar.twig' %}*/
/* */
/* 		{#<!-- Page content -->#}*/
/* 		<div class="page-content">*/
/* 			*/
/* 			<!-- Page header -->*/
/* 			<div class="page-header">*/
/* 				<div class="page-title">*/
/* 					<h3>Tekkadan <small>Tekkadan Health Care Management System&trade;</small></h3>*/
/* 				</div>*/
/* */
/* 				<div class="range" style="margin:10px;">*/
/* 					<div class="date-range">*/
/* 						<i>6</i> <b><i>May</i> <i>2014</i></b>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<!-- /page header -->*/
/* */
/* 			<!-- Breadcrumbs line -->*/
/* 			<div class="breadcrumb-line">*/
/* 				<ul class="breadcrumb">*/
/* 					<li><a href="">Home</a></li>*/
/* 					<li>{{ folder | raw }}</li>*/
/*                     {% for uri in bread %}*/
/* 					<li {% if loop.last %}class="active"{% endif %}>{{ uri | raw | upper }}</li>*/
/*                     {% endfor %}*/
/* 				</ul>*/
/* 			</div>*/
/* 			<!-- /breadcrumbs line -->*/
/* */
/* 			<!-- Callout Message Box-->*/
/* 			{% block MsgBox %}{% endblock %}*/
/* 			<!-- /callout Message Box -->*/
/* 			<div class="panel-body">*/
/* 				{% block content %}{% endblock %}*/
/* 			</div>*/
/* 			<!-- Footer -->*/
/* 			{% include 'footer.twig' %}*/
/* 			<!-- /footer -->*/
/* */
/* 		</div>*/
/* 		{#<!-- /page content -->#}*/
/* */
/* 	</div>*/
/* 	{#<!-- /page container -->#}*/
/* 	<script type="text/javascript" src="{{baseurl}}assets/js/jquery-1.10.1.min.js"></script>*/
/* */
/*     <script type="text/javascript" src="{{baseurl}}assets/js/plugins/interface/moment.js"></script>*/
/*     <script type="text/javascript" src="{{baseurl}}assets/js/plugins/interface/collapsible.min.js"></script>*/
/*     <script type="text/javascript" src="{{baseurl}}assets/js/bootstrap.min.js"></script>*/
/*     <script type="text/javascript" src="{{baseurl}}assets/js/bootbox.min.js"></script>*/
/*     <script type="text/javascript" src="{{baseurl}}assets/plugins/lodash.min.js"></script>*/
/*     <script type="text/javascript" src="{{baseurl}}assets/plugins/messenger/messenger.min.js"></script>*/
/*     <script type="text/javascript" src="{{baseurl}}assets/plugins/messenger/messenger-theme-flat.js"></script>*/
/* */
/* 	{% block basejs %}{% endblock %}*/
/* 	{% block js %}{% endblock %}*/
/* </body>*/
/* </html>*/
