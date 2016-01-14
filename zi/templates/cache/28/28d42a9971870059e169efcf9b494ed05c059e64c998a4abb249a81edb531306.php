<?php

/* pricelist/form_pricelist.twig */
class __TwigTemplate_90680d2c12fac4f2d50aa7feeefa2204168d25d78a64f43dbe9779bf59389e05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("pricelist/index.twig", "pricelist/form_pricelist.twig", 1);
        $this->blocks = array(
            'sub_css' => array($this, 'block_sub_css'),
            'sub_js' => array($this, 'block_sub_js'),
            'sub_content' => array($this, 'block_sub_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "pricelist/index.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_sub_css($context, array $blocks = array())
    {
    }

    // line 4
    public function block_sub_js($context, array $blocks = array())
    {
        // line 5
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/js/plugins/forms/inputmask.js\"></script>
    <script type=\"text/javascript\">
        var constraints = {
            kode_invoice: {
                length: {
                    minimum: 3,
                    tooShort: \"Kode Tagihan harus 3 digit\"
                }
            },
            price_list_nama: {presence: true}
        };
        \$(function () {
            \$('form').submit(function(e) {
                var errors = validate(\$(this), constraints);
                if(errors){
                    Messenger().post({
                        message: \"Kode Tagihan harus 3 digit\",
                        type: 'error',
                        showCloseButton: true
                    });
                    e.preventDefault();
                }
            });
        });
    </script>
";
    }

    // line 31
    public function block_sub_content($context, array $blocks = array())
    {
        // line 32
        echo "    <form class=\"form-horizontal\" action=\"";
        echo twig_escape_filter($this->env, (isset($context["url_submit"]) ? $context["url_submit"] : null), "html", null, true);
        echo "\" method=\"POST\" role=\"form\">
        <h6 class=\"heading-hr\"><i class=\"icon-paragraph-right2\"></i> ";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</h6>

        <div class=\"form-actions text-right\">
            <input type=\"submit\" value=\"Submit\" class=\"btn btn-primary\">
        </div>

        <div class=\"block-inner\">
            <div class=\"block-inner\">
                <h6 class=\"heading-hr\">
                    <i class=\"icon-anchor\"></i> Informasi Umum <small class=\"display-block\">Informasi Umum Tentang Price list / Daftar Harga </small>
                </h6>
            </div>

            <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">Kode Tagihan :</label>
                <div class=\"col-sm-10\">
                    <input type=\"text\" class=\"form-control\" name=\"kode_invoice\"  data-mask=\"999\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "kode_invoice", array()), "html", null, true);
        echo "\" ";
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "price_list_nama", array())) {
            echo "readonly";
        }
        echo "/>
                    <span class=\"help-block\">Kode digunakan untuk nota pada penjualan e.g 030, 070</span>
                </div>
            </div>

            <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">Price list :</label>
                <div class=\"col-sm-10\">
                    <input type=\"text\" class=\"form-control\" name=\"price_list_nama\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "price_list_nama", array()), "html", null, true);
        echo "\" ";
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "price_list_nama", array())) {
            echo "readonly";
        }
        echo "/>
                    <input type=\"hidden\" name=\"gen_id\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "price_list_nama", array()), "html", null, true);
        echo "\" />
                </div>
            </div>

            <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">Price list :</label>
                <div class=\"col-sm-10\">
                    <div class=\"checkbox\">
                        <label>
                            <input type=\"checkbox\" name=\"pembelian\" class=\"styled\" ";
        // line 67
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "pembelian", array()) > 0)) {
            echo "checked=\"checked\"";
        }
        echo "/>
                            Pembelian
                        </label>
                    </div>
                    <div class=\"checkbox\">
                        <label>
                            <input type=\"checkbox\" name=\"penjualan\" class=\"styled\" ";
        // line 73
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "penjualan", array()) > 0)) {
            echo "checked=\"checked\"";
        }
        echo "/>
                            Penjualan
                        </label>
                    </div>
                    <div class=\"checkbox\">
                        <label>
                            <input type=\"checkbox\" name=\"aktif\" class=\"styled\" ";
        // line 79
        if ((($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "aktif", array()) > 0) || twig_test_empty($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array())))) {
            echo "checked=\"checked\"";
        }
        echo "/>
                            Aktif
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </form>
";
    }

    public function getTemplateName()
    {
        return "pricelist/form_pricelist.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 79,  142 => 73,  131 => 67,  119 => 58,  111 => 57,  96 => 49,  77 => 33,  72 => 32,  69 => 31,  38 => 5,  35 => 4,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'pricelist/index.twig' %}*/
/* {% block sub_css %}*/
/* {% endblock %}*/
/* {% block sub_js %}*/
/*     <script type="text/javascript" src="{{baseurl}}assets/js/plugins/forms/inputmask.js"></script>*/
/*     <script type="text/javascript">*/
/*         var constraints = {*/
/*             kode_invoice: {*/
/*                 length: {*/
/*                     minimum: 3,*/
/*                     tooShort: "Kode Tagihan harus 3 digit"*/
/*                 }*/
/*             },*/
/*             price_list_nama: {presence: true}*/
/*         };*/
/*         $(function () {*/
/*             $('form').submit(function(e) {*/
/*                 var errors = validate($(this), constraints);*/
/*                 if(errors){*/
/*                     Messenger().post({*/
/*                         message: "Kode Tagihan harus 3 digit",*/
/*                         type: 'error',*/
/*                         showCloseButton: true*/
/*                     });*/
/*                     e.preventDefault();*/
/*                 }*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* {% block sub_content %}*/
/*     <form class="form-horizontal" action="{{ url_submit }}" method="POST" role="form">*/
/*         <h6 class="heading-hr"><i class="icon-paragraph-right2"></i> {{ title }}</h6>*/
/* */
/*         <div class="form-actions text-right">*/
/*             <input type="submit" value="Submit" class="btn btn-primary">*/
/*         </div>*/
/* */
/*         <div class="block-inner">*/
/*             <div class="block-inner">*/
/*                 <h6 class="heading-hr">*/
/*                     <i class="icon-anchor"></i> Informasi Umum <small class="display-block">Informasi Umum Tentang Price list / Daftar Harga </small>*/
/*                 </h6>*/
/*             </div>*/
/* */
/*             <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">Kode Tagihan :</label>*/
/*                 <div class="col-sm-10">*/
/*                     <input type="text" class="form-control" name="kode_invoice"  data-mask="999" value="{{ data.kode_invoice }}" {% if data.price_list_nama %}readonly{% endif %}/>*/
/*                     <span class="help-block">Kode digunakan untuk nota pada penjualan e.g 030, 070</span>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">Price list :</label>*/
/*                 <div class="col-sm-10">*/
/*                     <input type="text" class="form-control" name="price_list_nama" value="{{ data.price_list_nama }}" {% if data.price_list_nama %}readonly{% endif %}/>*/
/*                     <input type="hidden" name="gen_id" value="{{ data.price_list_nama }}" />*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">Price list :</label>*/
/*                 <div class="col-sm-10">*/
/*                     <div class="checkbox">*/
/*                         <label>*/
/*                             <input type="checkbox" name="pembelian" class="styled" {% if data.pembelian > 0 %}checked="checked"{% endif %}/>*/
/*                             Pembelian*/
/*                         </label>*/
/*                     </div>*/
/*                     <div class="checkbox">*/
/*                         <label>*/
/*                             <input type="checkbox" name="penjualan" class="styled" {% if data.penjualan > 0 %}checked="checked"{% endif %}/>*/
/*                             Penjualan*/
/*                         </label>*/
/*                     </div>*/
/*                     <div class="checkbox">*/
/*                         <label>*/
/*                             <input type="checkbox" name="aktif" class="styled" {% if data.aktif > 0 or data.id is empty %}checked="checked"{% endif %}/>*/
/*                             Aktif*/
/*                         </label>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </form>*/
/* {% endblock %}*/
