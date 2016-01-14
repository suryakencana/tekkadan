<?php

/* navbar.twig */
class __TwigTemplate_7b0bad7a47924afa14ebd548421954732abb0e557c427e0f4afaf93f92afd3f4 extends Twig_Template
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
        echo "
<!-- Navbar -->
<div class=\"navbar navbar-inverse\" role=\"navigation\">
\t<div class=\"navbar-header\">
\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-icons\">
\t\t\t<span class=\"sr-only\">Toggle right icons</span>
\t\t\t<i class=\"icon-grid\"></i>
\t\t</button>
\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-menu\">
\t\t\t<span class=\"sr-only\">Toggle menu</span>
\t\t\t<i class=\"icon-paragraph-justify2\"></i>
\t\t</button>
\t\t<a class=\"navbar-brand\" href=\"#\"></a>
\t</div>

\t<ul class=\"nav navbar-nav collapse\" id=\"navbar-menu\">

\t\t<li><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "\"><i class=\"icon-screen2\"></i> <span>Dashboard</span></a></li>
\t\t<li class=\"dropdown\">
\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-paragraph-justify2\"></i> <span>Master</span> <b class=\"caret\"></b></a>
\t\t\t<ul class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t<li><a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->urlFor("ruang.index"), "html", null, true);
        echo "\">Ruang</a></li>
\t\t\t\t<li><a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->urlFor("fakultas.index"), "html", null, true);
        echo "\">Fakultas</a></li>
\t\t\t\t<li><a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->urlFor("jurusan.index"), "html", null, true);
        echo "\">Jurusan</a></li>
\t\t\t\t<li><a href=\"form_grid.html\">List Mahasiswa</a></li>
\t\t\t\t<li><a href=\"form_grid.html\">List Dosen</a></li>
\t\t\t</ul>
\t\t</li>
\t\t<li class=\"dropdown\">
\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-grid\"></i><span>Mahasiswa</span> <b class=\"caret\"></b></a>
\t\t\t<ul class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t<li><a href=\"visuals.html\">Absensi</a></li>
\t\t\t\t<li><a href=\"navs.html\">KRS</a></li>
\t\t\t\t<li><a href=\"panel_options.html\">KHS</a></li>
\t\t\t</ul>
\t\t</li>
\t\t<li class=\"dropdown\">
\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-copy\"></i> <span>Dosen</span>  <b class=\"caret\"></b></a>
\t\t\t<ul class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t<li><a href=\"sidebar_wide_left.html\">Jadwal</a></li>
\t\t\t\t<li><a href=\"sidebar_wide_right.html\">Absen Harian</a></li>
\t\t\t</ul>
\t\t</li>
\t</ul>

\t<ul class=\"nav navbar-nav navbar-right collapse\" id=\"navbar-icons\">
\t\t<li class=\"user dropdown\">
\t\t\t<a class=\"dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t<img src=\"asset/images/nanang_small.png\" alt=\"\">
\t\t\t\t<span>Nanang Suryadi</span>
\t\t\t\t<i class=\"caret\"></i>
\t\t\t</a>
\t\t\t<ul class=\"dropdown-menu dropdown-menu-right icons-right\">
\t\t\t\t";
        // line 57
        echo "\t\t\t\t<li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->urlFor("logout"), "html", null, true);
        echo "\"><i class=\"icon-exit\"></i> Logout</a></li>
\t\t\t</ul>
\t\t</li>
\t</ul>
</div>
\t<!-- /navbar -->";
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
        return array (  86 => 57,  53 => 24,  49 => 23,  45 => 22,  38 => 18,  19 => 1,);
    }
}
