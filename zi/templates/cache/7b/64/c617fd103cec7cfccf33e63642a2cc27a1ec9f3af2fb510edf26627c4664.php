<?php

/* auth/login.twig */
class __TwigTemplate_7b64c617fd103cec7cfccf33e63642a2cc27a1ec9f3af2fb510edf26627c4664 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'MsgBox' => array($this, 'block_MsgBox'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<title>ZiFinger</title>

\t<link href=\"asset/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"asset/css/londinium-theme.css\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"asset/css/styles.css\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"asset/css/icons.css\" rel=\"stylesheet\" type=\"text/css\">

\t<script type=\"text/javascript\" src=\"asset/js/jquery-1.10.1.min.js\"></script>
\t<script type=\"text/javascript\" src=\"asset/js/bootstrap.min.js\"></script>
</head>

<body class=\"full-width page-condensed\">
\t
\t<!-- Login wrapper -->
\t<div class=\"login-wrapper\">
\t\t<!-- Callout Message Box-->
\t\t";
        // line 24
        $this->displayBlock('MsgBox', $context, $blocks);
        // line 42
        echo "\t\t<form action=\"";
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "u0\" method=\"POST\" role=\"form\">
\t\t\t<div class=\"popup-header\">
\t\t\t\t<a href=\"#\" class=\"pull-left\"><i class=\"icon-user-plus\"></i></a>
\t\t\t\t<span class=\"text-semibold\">ZiFinger LOGIN</span>
\t\t\t</div>
\t\t\t<div class=\"well\">
\t\t\t\t<div class=\"form-group has-feedback\">
\t\t\t\t\t<label>Username</label>
\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"user\" placeholder=\"Username\">
\t\t\t\t\t<i class=\"icon-users form-control-feedback\"></i>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group has-feedback\">
\t\t\t\t\t<label>Password</label>
\t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"passwd\" placeholder=\"Password\">
\t\t\t\t\t<i class=\"icon-lock form-control-feedback\"></i>
\t\t\t\t</div>

\t\t\t\t<div class=\"row form-actions\">
\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t<div class=\"checkbox checkbox-success\">
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"styled\">
\t\t\t\t\t\t\t\tRemember me
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-warning pull-right\"><i class=\"icon-menu2\"></i> Sign in</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>
\t</div>  
\t<!-- /login wrapper -->
\t<!-- Footer -->
\t<div class=\"footer clearfix\">
\t\t<div class=\"pull-left\">&copy; 2014. ZiFinger by Nanang Suryadi</div>
\t</div>
\t<!-- /footer -->
</body>
</html>";
    }

    // line 24
    public function block_MsgBox($context, array $blocks = array())
    {
        // line 25
        echo "\t\t";
        if (($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "info") || $this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "error"))) {
            // line 26
            echo "\t\t";
            if ($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "info")) {
                // line 27
                echo "\t\t<div class=\"callout callout-info fade in\">
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
\t\t\t<h5>Info message</h5>
\t\t\t<p>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "info"), "html", null, true);
                echo "</p>
\t\t</div>
\t\t";
            }
            // line 33
            echo "\t\t";
            if ($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "error")) {
                // line 34
                echo "\t\t<div class=\"callout callout-danger fade in\">
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
\t\t\t<h5>Error message</h5>
\t\t\t<p>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "error"), "html", null, true);
                echo "</p>
\t\t</div>
\t\t";
            }
            // line 40
            echo "\t\t";
        }
        // line 41
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "auth/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 41,  127 => 40,  121 => 37,  116 => 34,  113 => 33,  107 => 30,  102 => 27,  99 => 26,  96 => 25,  93 => 24,  46 => 42,  44 => 24,  20 => 2,);
    }
}
