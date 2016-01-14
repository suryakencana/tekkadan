<?php

/* sidebar.twig */
class __TwigTemplate_8fe2c585ae3d343a7180de623dc916b7cc2f844a1633173e2f1eeb93673aa3ed extends Twig_Template
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
        // line 2
        echo "<div class=\"sidebar collapse\">
    <div class=\"sidebar-content\">

        ";
        // line 6
        echo "        <div class=\"user-menu dropdown\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/images/logo-square.png\" alt=\"\">
                <div class=\"user-info\">
                    <span>Health Care </span><span>Management System</span>
                </div>
            </a>
        </div>
        ";
        // line 15
        echo "

        ";
        // line 18
        echo "        <ul class=\"navigation navigation-icons-left\">
            <li><a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->urlFor("home"), "html", null, true);
        echo "\"><span>Dashboard</span> <i class=\"icon-screen2\"></i></a></li>
            <li>
                <a href=\"#\" class=\"expand\"><span>Master</span> <i class=\"icon-anchor\"></i></a>
                <ul>
                    <li><a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->urlFor("item.index"), "html", null, true);
        echo "\">Item</a></li>
                    <li><a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->urlFor("warehouse.index"), "html", null, true);
        echo "\">Gudang</a></li>
                    <li><a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->urlFor("unitOM.index"), "html", null, true);
        echo "\">Unit of Measure(UOM)/Satuan</a></li>
                    <li><a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->urlFor("principal.index"), "html", null, true);
        echo "\">Principal(Merk)</a></li>
                    <li><a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->urlFor("pricelist.index"), "html", null, true);
        echo "\">Daftar Harga</a></li>
                    <li><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->urlFor("itemprice.index"), "html", null, true);
        echo "\">Harga Item</a></li>
                </ul>
            </li>
            <li>
                <a href=\"#\" class=\"expand\"><span>Mutasi</span> <i class=\"icon-box-add\"></i></a>
                <ul>
                    <li><a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->urlFor("stok.entry", array("tipe" => "MASUK")), "html", null, true);
        echo "\">Mutasi Masuk</a></li>
                    <li><a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->urlFor("stok.entry", array("tipe" => "KELUAR")), "html", null, true);
        echo "\">Mutasi Keluar</a></li>
                    <li><a href=\"#\" class=\"expand\">Laporan</a>
                        <ul>
                            <li><a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->urlFor("stok.viewbalance"), "html", null, true);
        echo "\">Saldo Stok</a></li>
                            <li><a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->urlFor("stok.list_stock_entry"), "html", null, true);
        echo "\">Mutasi</a></li>
                            <li><a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->urlFor("stok.list_stock_ledger"), "html", null, true);
        echo "\">Jurnal Stok</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href=\"#\" class=\"expand\"><span>Penjualan</span> <i class=\"icon-cart\"></i></a>
                <ul>
                    <li><a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->urlFor("selling.pos"), "html", null, true);
        echo "\">Kasir (POS)</a></li>
                    ";
        // line 50
        echo "                    <li><a href=\"#\">Customer & Pasien</a></li>
                    <li><a href=\"#\" class=\"expand\">Laporan</a>
                        <ul>
                            <li><a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->urlFor("selling.list_penjualan"), "html", null, true);
        echo "\">Penjualan</a></li>
                            <li><a href=\"#\">Laba/Rugi</a></li>
                        </ul>
                    </li>
                </ul>
            </li>


        </ul>
        ";
        // line 63
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "sidebar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 63,  118 => 53,  113 => 50,  109 => 48,  98 => 40,  94 => 39,  90 => 38,  84 => 35,  80 => 34,  71 => 28,  67 => 27,  63 => 26,  59 => 25,  55 => 24,  51 => 23,  44 => 19,  41 => 18,  37 => 15,  28 => 8,  24 => 6,  19 => 2,);
    }
}
/* {#<!-- Sidebar -->#}*/
/* <div class="sidebar collapse">*/
/*     <div class="sidebar-content">*/
/* */
/*         {#<!-- User dropdown -->#}*/
/*         <div class="user-menu dropdown">*/
/*             <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                 <img src="{{baseurl}}assets/images/logo-square.png" alt="">*/
/*                 <div class="user-info">*/
/*                     <span>Health Care </span><span>Management System</span>*/
/*                 </div>*/
/*             </a>*/
/*         </div>*/
/*         {#<!-- /user dropdown -->#}*/
/* */
/* */
/*         {#<!-- Main navigation -->#}*/
/*         <ul class="navigation navigation-icons-left">*/
/*             <li><a href="{{ urlFor('home') }}"><span>Dashboard</span> <i class="icon-screen2"></i></a></li>*/
/*             <li>*/
/*                 <a href="#" class="expand"><span>Master</span> <i class="icon-anchor"></i></a>*/
/*                 <ul>*/
/*                     <li><a href="{{ urlFor('item.index') }}">Item</a></li>*/
/*                     <li><a href="{{ urlFor('warehouse.index') }}">Gudang</a></li>*/
/*                     <li><a href="{{ urlFor('unitOM.index') }}">Unit of Measure(UOM)/Satuan</a></li>*/
/*                     <li><a href="{{ urlFor('principal.index') }}">Principal(Merk)</a></li>*/
/*                     <li><a href="{{ urlFor('pricelist.index') }}">Daftar Harga</a></li>*/
/*                     <li><a href="{{ urlFor('itemprice.index') }}">Harga Item</a></li>*/
/*                 </ul>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="#" class="expand"><span>Mutasi</span> <i class="icon-box-add"></i></a>*/
/*                 <ul>*/
/*                     <li><a href="{{ urlFor('stok.entry', {'tipe': 'MASUK'}) }}">Mutasi Masuk</a></li>*/
/*                     <li><a href="{{ urlFor('stok.entry', {'tipe': 'KELUAR'}) }}">Mutasi Keluar</a></li>*/
/*                     <li><a href="#" class="expand">Laporan</a>*/
/*                         <ul>*/
/*                             <li><a href="{{ urlFor('stok.viewbalance') }}">Saldo Stok</a></li>*/
/*                             <li><a href="{{ urlFor('stok.list_stock_entry') }}">Mutasi</a></li>*/
/*                             <li><a href="{{ urlFor('stok.list_stock_ledger') }}">Jurnal Stok</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                 </ul>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="#" class="expand"><span>Penjualan</span> <i class="icon-cart"></i></a>*/
/*                 <ul>*/
/*                     <li><a href="{{ urlFor('selling.pos') }}">Kasir (POS)</a></li>*/
/*                     {#<li><a href="navs.html">Sales Order</a></li>#}*/
/*                     <li><a href="#">Customer & Pasien</a></li>*/
/*                     <li><a href="#" class="expand">Laporan</a>*/
/*                         <ul>*/
/*                             <li><a href="{{ urlFor('selling.list_penjualan') }}">Penjualan</a></li>*/
/*                             <li><a href="#">Laba/Rugi</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                 </ul>*/
/*             </li>*/
/* */
/* */
/*         </ul>*/
/*         {#<!-- /main navigation -->#}*/
/* */
/*     </div>*/
/* </div>*/
/* {#<!-- /sidebar -->#}*/
