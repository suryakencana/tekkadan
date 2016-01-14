<?php

/* dashboard.twig */
class __TwigTemplate_2ba5eb7bcb8b3a5da8b8b6f06b84a1c39039b926103d744cbab9aee468728853 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "dashboard.twig", 1);
        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'js' => array($this, 'block_js'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "index.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_css($context, array $blocks = array())
    {
        // line 3
        echo "
";
    }

    // line 5
    public function block_js($context, array $blocks = array())
    {
        // line 6
        echo "
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "<!-- Info blocks -->
<ul class=\"info-blocks\">
    <li class=\"bg-primary\">
        <div class=\"top-info\">
            <a href=\"#\">Total Pendapatan</a>
            <small>pendapatan dari penjualan</small>
        </div>
        <a href=\"#\"><i class=\"icon-coin\"></i></a>
        <span class=\"bottom-info bg-danger\">123.000.00,00 Rupiah</span>
    </li>

    <li class=\"bg-danger\">
        <div class=\"top-info\">
            <a href=\"#\">Pendaftaran Apotik</a>
            <small>Total Pendaftar Apotik</small>
        </div>
        <a href=\"#\"><i class=\"icon-people\"></i></a>
        <span class=\"bottom-info bg-primary\">3 Pendaftar</span>
    </li>
    <li class=\"bg-info\">
        <div class=\"top-info\">
            <a href=\"#\">Stok Saldo</a>
            <small>total saldo seluruh stok</small>
        </div>
        <a href=\"#\"><i class=\"icon-stack\"></i></a>
        <span class=\"bottom-info bg-primary\">24 Total Seluruh Stok</span>
    </li>

    <li class=\"bg-primary\">
        <div class=\"top-info\">
            <a href=\"#\">Penjualan</a>
            <small>Tagihan penjualan</small>
        </div>
        <a href=\"#\"><i class=\"icon-cart5\"></i></a>
        <span class=\"bottom-info bg-danger\">9 Tagihan penjualan</span>
    </li>
</ul>
<!-- /info blocks -->
";
    }

    public function getTemplateName()
    {
        return "dashboard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 9,  46 => 8,  41 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'index.twig' %}*/
/* {% block css %}*/
/* */
/* {% endblock %}*/
/* {% block js %}*/
/* */
/* {% endblock %}*/
/* {% block content %}*/
/* <!-- Info blocks -->*/
/* <ul class="info-blocks">*/
/*     <li class="bg-primary">*/
/*         <div class="top-info">*/
/*             <a href="#">Total Pendapatan</a>*/
/*             <small>pendapatan dari penjualan</small>*/
/*         </div>*/
/*         <a href="#"><i class="icon-coin"></i></a>*/
/*         <span class="bottom-info bg-danger">123.000.00,00 Rupiah</span>*/
/*     </li>*/
/* */
/*     <li class="bg-danger">*/
/*         <div class="top-info">*/
/*             <a href="#">Pendaftaran Apotik</a>*/
/*             <small>Total Pendaftar Apotik</small>*/
/*         </div>*/
/*         <a href="#"><i class="icon-people"></i></a>*/
/*         <span class="bottom-info bg-primary">3 Pendaftar</span>*/
/*     </li>*/
/*     <li class="bg-info">*/
/*         <div class="top-info">*/
/*             <a href="#">Stok Saldo</a>*/
/*             <small>total saldo seluruh stok</small>*/
/*         </div>*/
/*         <a href="#"><i class="icon-stack"></i></a>*/
/*         <span class="bottom-info bg-primary">24 Total Seluruh Stok</span>*/
/*     </li>*/
/* */
/*     <li class="bg-primary">*/
/*         <div class="top-info">*/
/*             <a href="#">Penjualan</a>*/
/*             <small>Tagihan penjualan</small>*/
/*         </div>*/
/*         <a href="#"><i class="icon-cart5"></i></a>*/
/*         <span class="bottom-info bg-danger">9 Tagihan penjualan</span>*/
/*     </li>*/
/* </ul>*/
/* <!-- /info blocks -->*/
/* {% endblock %}*/
