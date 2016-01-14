<?php

/* main.twig */
class __TwigTemplate_8b8be33d533d9e3b2038a5251cec29c34f7113c1d77aa64ec3cc50b74de06717 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'basecss' => array($this, 'block_basecss'),
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
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<title>ZiFinger | Sistim Manajemen Absensi</title>

\t<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "/asset/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "/asset/css/londinium-theme.css\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "/asset/css/styles.css\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "/asset/css/icons.css\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "/asset/css/font.css\" rel=\"stylesheet\" type=\"text/css\">

\t";
        // line 15
        $this->displayBlock('basecss', $context, $blocks);
        // line 16
        echo "</head>

<body class=\"full-width\">
\t";
        // line 20
        echo "\t<div class=\"navbar\" style=\"background: #9AACD4 url(";
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "/asset/images/halfbg.jpg) no-repeat center center;background-attachment: scroll;min-height:75px;z-index:9999;\">
\t\t<a class=\"navbar-brand\" href=\"#\"><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "/asset/images/logo.png\" style=\"position:absolute;top:5px;left:35px;width:135px;\" alt=\"Londinium\" /></a>
\t</div>
\t";
        // line 24
        echo "\t
\t";
        // line 25
        $this->env->loadTemplate("navbar.twig")->display($context);
        // line 26
        echo "
\t<!-- Page container -->
\t<div class=\"page-container\">


\t\t<!-- Page content -->
\t\t<div class=\"page-content\">
\t\t\t
\t\t\t<!-- Page header -->
\t\t\t<div class=\"page-header\">
\t\t\t\t<div class=\"page-title\">
\t\t\t\t\t<h3>ZiFinger <small>Sistem Manajemen Absensi</small></h3>
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
        echo twig_escape_filter($this->env, (isset($context["folder"]) ? $context["folder"] : null), "html", null, true);
        echo "</li>
\t\t\t\t\t<li class=\"active\">";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["bread"]) ? $context["bread"] : null), "html", null, true);
        echo "</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<!-- /breadcrumbs line -->

\t\t\t<!-- Callout Message Box-->
\t\t\t";
        // line 60
        $this->displayBlock('MsgBox', $context, $blocks);
        // line 61
        echo "\t\t\t<!-- /callout Message Box -->
\t\t\t<div class=\"block\">
\t\t\t\t";
        // line 63
        $this->displayBlock('content', $context, $blocks);
        // line 64
        echo "\t\t\t</div>
\t\t\t<!-- Footer -->
\t\t\t";
        // line 66
        $this->env->loadTemplate("footer.twig")->display($context);
        // line 67
        echo "\t\t\t<!-- /footer -->

\t\t</div>
\t\t<!-- /page content -->

\t</div>
\t<!-- /page container -->
\t<script type=\"text/javascript\" src=\"";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "/asset/js/jquery-1.10.1.min.js\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "/asset/js/jquery-1.10.1.min.map.js\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "/asset/js/bootstrap.min.js\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "/asset/js/bootbox.min.js\"></script> 
\t<script type=\"text/javascript\">
\tvar month = new Array();
\tmonth[0] = \"January\";
\tmonth[1] = \"February\";
\tmonth[2] = \"March\";
\tmonth[3] = \"April\";
\tmonth[4] = \"May\";
\tmonth[5] = \"June\";
\tmonth[6] = \"July\";
\tmonth[7] = \"August\";
\tmonth[8] = \"September\";
\tmonth[9] = \"October\";
\tmonth[10] = \"November\";
\tmonth[11] = \"December\";
\tvar tdate = new Date();
\t\$('.date-range').html('<i>'+tdate.getDate()+'</i>'+'<b><i>'+month[tdate.getMonth()]+'</i> <i>'+tdate.getFullYear()+'</i></b>');
\t</script>
\t";
        // line 95
        $this->displayBlock('basejs', $context, $blocks);
        // line 96
        echo "\t";
        $this->displayBlock('js', $context, $blocks);
        // line 97
        echo "</body>
</html>";
    }

    // line 15
    public function block_basecss($context, array $blocks = array())
    {
    }

    // line 60
    public function block_MsgBox($context, array $blocks = array())
    {
    }

    // line 63
    public function block_content($context, array $blocks = array())
    {
    }

    // line 95
    public function block_basejs($context, array $blocks = array())
    {
    }

    // line 96
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
        return array (  205 => 96,  200 => 95,  195 => 63,  190 => 60,  185 => 15,  180 => 97,  177 => 96,  175 => 95,  154 => 77,  150 => 76,  146 => 75,  142 => 74,  133 => 67,  131 => 66,  127 => 64,  125 => 63,  121 => 61,  119 => 60,  110 => 54,  106 => 53,  77 => 26,  75 => 25,  72 => 24,  67 => 21,  62 => 20,  57 => 16,  55 => 15,  50 => 13,  46 => 12,  42 => 11,  38 => 10,  34 => 9,  24 => 1,);
    }
}
