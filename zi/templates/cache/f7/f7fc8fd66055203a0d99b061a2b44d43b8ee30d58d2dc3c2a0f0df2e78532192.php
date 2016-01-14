<?php

/* navbar.twig */
class __TwigTemplate_8039212fa8b46bb83e5c9b3c2c3880c09142032889a80f2a1004eb402cf66d3f extends Twig_Template
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
        echo "<div class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
    <div class=\"navbar-header\">
        <a class=\"navbar-brand\" href=\"#\"><img src=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/images/logo.png\" alt=\"Londinium\"></a>
        <a class=\"sidebar-toggle\"><i class=\"icon-paragraph-justify2\"></i></a>
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-icons\">
            <span class=\"sr-only\">Toggle navbar</span>
            <i class=\"icon-grid3\"></i>
        </button>
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".sidebar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <i class=\"icon-paragraph-justify2\"></i>
        </button>
    </div>

\t<ul class=\"nav navbar-nav navbar-right collapse\" id=\"navbar-icons\">
\t\t<li class=\"user dropdown\">
\t\t\t<a class=\"dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t<img src=\"assets/images/nanang_small.png\" alt=\"\">
\t\t\t\t<span>Nanang Suryadi</span>
\t\t\t\t<i class=\"caret\"></i>
\t\t\t</a>
\t\t\t<ul class=\"dropdown-menu dropdown-menu-right icons-right\">
\t\t\t\t";
        // line 26
        echo "\t\t\t\t<li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->urlFor("logout"), "html", null, true);
        echo "\"><i class=\"icon-exit\"></i> Logout</a></li>
\t\t\t</ul>
\t\t</li>
\t</ul>
</div>";
    }

    public function getTemplateName()
    {
        return "navbar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 26,  23 => 3,  19 => 1,);
    }
}
/* <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">*/
/*     <div class="navbar-header">*/
/*         <a class="navbar-brand" href="#"><img src="{{baseurl}}assets/images/logo.png" alt="Londinium"></a>*/
/*         <a class="sidebar-toggle"><i class="icon-paragraph-justify2"></i></a>*/
/*         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-icons">*/
/*             <span class="sr-only">Toggle navbar</span>*/
/*             <i class="icon-grid3"></i>*/
/*         </button>*/
/*         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar">*/
/*             <span class="sr-only">Toggle navigation</span>*/
/*             <i class="icon-paragraph-justify2"></i>*/
/*         </button>*/
/*     </div>*/
/* */
/* 	<ul class="nav navbar-nav navbar-right collapse" id="navbar-icons">*/
/* 		<li class="user dropdown">*/
/* 			<a class="dropdown-toggle" data-toggle="dropdown">*/
/* 				<img src="assets/images/nanang_small.png" alt="">*/
/* 				<span>Nanang Suryadi</span>*/
/* 				<i class="caret"></i>*/
/* 			</a>*/
/* 			<ul class="dropdown-menu dropdown-menu-right icons-right">*/
/* 				{# <li><a href="#"><i class="icon-user"></i> Profile</a></li>*/
/* 				<li><a href="#"><i class="icon-bubble4"></i> Messages</a></li>*/
/* 				<li><a href="#"><i class="icon-cog"></i> Settings</a></li> #}*/
/* 				<li><a href="{{ urlFor('logout') }}"><i class="icon-exit"></i> Logout</a></li>*/
/* 			</ul>*/
/* 		</li>*/
/* 	</ul>*/
/* </div>*/
