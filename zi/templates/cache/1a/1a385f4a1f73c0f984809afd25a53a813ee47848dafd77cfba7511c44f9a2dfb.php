<?php

/* itemprice/form_itemprice.twig */
class __TwigTemplate_ad8ebf306b1c3ca4aaf56fe3c39fc5403b9cb1a2ec9df659fe10831103328224 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("itemprice/index.twig", "itemprice/form_itemprice.twig", 1);
        $this->blocks = array(
            'sub_css' => array($this, 'block_sub_css'),
            'sub_js' => array($this, 'block_sub_js'),
            'sub_content' => array($this, 'block_sub_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "itemprice/index.twig";
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
        echo "assets/plugins/num.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/plugins/accounting.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/js/plugins/forms/select2.min.js\"></script>
    <script type=\"text/javascript\">
        var \$rate = \$(\"input[name=price_mask]\");
        \$(function(){
            ";
        // line 11
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "price_list_rate", array())) {
            // line 12
            echo "            \$rate.val(accounting.formatMoney(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "price_list_rate", array()), "html", null, true);
            echo ", \"Rp. \", 2, \".\", \",\"));
            ";
        }
        // line 14
        echo "            \$rate.numeric({ decimalPlaces : 2, negative : false }).on(\"change\", function(e){
                var val = e.target.value;
                \$(\"input[name=price_list_rate]\").val(val);
                \$rate.val(accounting.formatMoney(val, \"Rp. \", 2, \".\", \",\"));
            });
            \$(\".price_list\").select2({
                width: \"250\",
                minimumInputLength: 0,
                placeholder: \"Cari Daftar Harga\",
                id: function (bond) {
                    return bond.price_list_nama;
                },
                ajax: {
                    url: '";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["url_price_list"]) ? $context["url_price_list"] : null), "html", null, true);
        echo "',
                    dataType: 'json',
                    quietMillis: 100,
                    data: function (term, page) {
                        return { search: term, offset: (page - 1) * 15, limit: 15 };
                    },
                    results: function (data, page) {
                        var more = (page * 15) < data.total;
                        return {results: data.rows, more: more};
                    }
                },
                initSelection: function(element, callback) {
                    var id = \$(element).val();
                    if (id !== \"\") {
                        \$.ajax(\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["url_price_list"]) ? $context["url_price_list"] : null), "html", null, true);
        echo "\", {
                            dataType: \"json\",
                            data: { search: id, offset: 0, limit: 1 }
                        }).done(function(data) { callback(data.rows[0]); });
                    }
                },
                escapeMarkup: function (markup) {
                    return markup;
                },
                formatSelection: function (repo) {
                    return repo.price_list_nama;
                },
                formatResult: function (repo) {
                    return repo.price_list_nama;
                }
            });
            \$(\".item_kode\").select2({
                width: \"250\",
                minimumInputLength: 0,
                placeholder: \"Cari Item\",
                id: function (bond) {
                    return bond.item_kode;
                },
                ajax: {
                    url: '";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["url_item"]) ? $context["url_item"] : null), "html", null, true);
        echo "',
                    dataType: 'json',
                    quietMillis: 100,
                    data: function (term, page) {
                        return { search: term, offset: (page - 1) * 15, limit: 15 };
                    },
                    results: function (data, page) {
                        var more = (page * 15) < data.total;
                        return {results: data.rows, more: more};
                    }
                },
                initSelection: function(element, callback) {
                    var id = \$(element).val();
                    if (id !== \"\") {
                        \$.ajax(\"";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["url_item"]) ? $context["url_item"] : null), "html", null, true);
        echo "\", {
                            dataType: \"json\",
                            method: 'POST',
                            data: { search: id, offset: 0, limit: 1 }
                        }).done(function(data) { callback(data.rows[0]); });
                    }
                },
                escapeMarkup: function (markup) {
                    return markup;
                },
                formatSelection: function (repo) {
                    return repo.item_kode;
                },
                formatResult: function (repo) {
                    var markup = '<div class=\"row\">' +
                            '<div class=\"col-sm-12\">' + repo.item_nama + '</div>' +
                            '<ul style=\"font-size: 8px;\">' +
                            '<li class=\"col-sm-12\">'+ repo.item_kode +'</li>' +
                            '<li class=\"col-sm-12\">'+ repo.item_uom +'</li>' +
                            '<li class=\"col-sm-12\">'+ repo.item_principal +'</li>' +
                            '<li class=\"col-sm-12\">'+ repo.item_grup+'</li>' +
                            '</ul>';

                    markup += '</div>';

                    return markup;
                }
            });
            \$(\".item_kode\").on(\"change\", function(e) {
                var data = e.added;
                \$(\"input[name=item]\").val(data.id);
            });
        });
    </script>
";
    }

    // line 114
    public function block_sub_content($context, array $blocks = array())
    {
        // line 115
        echo "    <form class=\"form-horizontal\" action=\"";
        echo twig_escape_filter($this->env, (isset($context["url_submit"]) ? $context["url_submit"] : null), "html", null, true);
        echo "\" method=\"POST\" role=\"form\">
        <h6 class=\"heading-hr\"><i class=\"icon-paragraph-right2\"></i> ";
        // line 116
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</h6>

        <div class=\"form-actions text-right\">
            <input type=\"submit\" value=\"Submit\" class=\"btn btn-primary\">
        </div>
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div class=\"block-inner\">
                    <div class=\"block-inner\">
                        <h6 class=\"heading-hr\">
                            <i class=\"icon-coin\"></i> Informasi Umum <small class=\"display-block\">Informasi Umum Tentang Harga Item</small>
                        </h6>
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"form-group\">
                            <div class=\"row\">
                                <div class=\"col-sm-4\">
                                    <label>Price List:</label>
                                    <input type=\"hidden\" name=\"price_list\" class=\"price_list\" value=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "price_list", array()), "html", null, true);
        echo "\"/>
                                    <span class=\"help-block\">Daftar Harga per Item e.g ASKES, JAMKESDA, BPJS</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"row\">
                                <div class=\"col-sm-4\">
                                    <label>Kode Item:</label>
                                    <input type=\"hidden\" name=\"item_kode\" class=\"item_kode\" value=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "item_kode", array()), "html", null, true);
        echo "\"/>
                                    <input type=\"hidden\" name=\"item\" value=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "item", array()), "html", null, true);
        echo "\" />
                                    <input type=\"hidden\" name=\"gen_id\" value=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array()), "html", null, true);
        echo "\" />
                                    <span class=\"help-block\">Kode Item e.g ITEM-AB001</span>
                                </div>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <div class=\"row\">
                                <div class=\"col-sm-6\">
                                    <label>Rate / Harga</label>
                                    <input type=\"text\" name=\"price_mask\" class=\"form-control\" />
                                    <input type=\"hidden\" name=\"price_list_rate\" class=\"form-control\" value=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "price_list_rate", array()), "html", null, true);
        echo "\"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
";
    }

    public function getTemplateName()
    {
        return "itemprice/form_itemprice.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 156,  226 => 145,  222 => 144,  218 => 143,  206 => 134,  185 => 116,  180 => 115,  177 => 114,  138 => 79,  121 => 65,  94 => 41,  77 => 27,  62 => 14,  56 => 12,  54 => 11,  47 => 7,  43 => 6,  38 => 5,  35 => 4,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'itemprice/index.twig' %}*/
/* {% block sub_css %}*/
/* {% endblock %}*/
/* {% block sub_js %}*/
/*     <script type="text/javascript" src="{{baseurl}}assets/plugins/num.min.js"></script>*/
/*     <script type="text/javascript" src="{{baseurl}}assets/plugins/accounting.min.js"></script>*/
/*     <script type="text/javascript" src="{{baseurl}}assets/js/plugins/forms/select2.min.js"></script>*/
/*     <script type="text/javascript">*/
/*         var $rate = $("input[name=price_mask]");*/
/*         $(function(){*/
/*             {% if data.price_list_rate %}*/
/*             $rate.val(accounting.formatMoney({{ data.price_list_rate }}, "Rp. ", 2, ".", ","));*/
/*             {% endif %}*/
/*             $rate.numeric({ decimalPlaces : 2, negative : false }).on("change", function(e){*/
/*                 var val = e.target.value;*/
/*                 $("input[name=price_list_rate]").val(val);*/
/*                 $rate.val(accounting.formatMoney(val, "Rp. ", 2, ".", ","));*/
/*             });*/
/*             $(".price_list").select2({*/
/*                 width: "250",*/
/*                 minimumInputLength: 0,*/
/*                 placeholder: "Cari Daftar Harga",*/
/*                 id: function (bond) {*/
/*                     return bond.price_list_nama;*/
/*                 },*/
/*                 ajax: {*/
/*                     url: '{{url_price_list}}',*/
/*                     dataType: 'json',*/
/*                     quietMillis: 100,*/
/*                     data: function (term, page) {*/
/*                         return { search: term, offset: (page - 1) * 15, limit: 15 };*/
/*                     },*/
/*                     results: function (data, page) {*/
/*                         var more = (page * 15) < data.total;*/
/*                         return {results: data.rows, more: more};*/
/*                     }*/
/*                 },*/
/*                 initSelection: function(element, callback) {*/
/*                     var id = $(element).val();*/
/*                     if (id !== "") {*/
/*                         $.ajax("{{url_price_list}}", {*/
/*                             dataType: "json",*/
/*                             data: { search: id, offset: 0, limit: 1 }*/
/*                         }).done(function(data) { callback(data.rows[0]); });*/
/*                     }*/
/*                 },*/
/*                 escapeMarkup: function (markup) {*/
/*                     return markup;*/
/*                 },*/
/*                 formatSelection: function (repo) {*/
/*                     return repo.price_list_nama;*/
/*                 },*/
/*                 formatResult: function (repo) {*/
/*                     return repo.price_list_nama;*/
/*                 }*/
/*             });*/
/*             $(".item_kode").select2({*/
/*                 width: "250",*/
/*                 minimumInputLength: 0,*/
/*                 placeholder: "Cari Item",*/
/*                 id: function (bond) {*/
/*                     return bond.item_kode;*/
/*                 },*/
/*                 ajax: {*/
/*                     url: '{{url_item}}',*/
/*                     dataType: 'json',*/
/*                     quietMillis: 100,*/
/*                     data: function (term, page) {*/
/*                         return { search: term, offset: (page - 1) * 15, limit: 15 };*/
/*                     },*/
/*                     results: function (data, page) {*/
/*                         var more = (page * 15) < data.total;*/
/*                         return {results: data.rows, more: more};*/
/*                     }*/
/*                 },*/
/*                 initSelection: function(element, callback) {*/
/*                     var id = $(element).val();*/
/*                     if (id !== "") {*/
/*                         $.ajax("{{url_item}}", {*/
/*                             dataType: "json",*/
/*                             method: 'POST',*/
/*                             data: { search: id, offset: 0, limit: 1 }*/
/*                         }).done(function(data) { callback(data.rows[0]); });*/
/*                     }*/
/*                 },*/
/*                 escapeMarkup: function (markup) {*/
/*                     return markup;*/
/*                 },*/
/*                 formatSelection: function (repo) {*/
/*                     return repo.item_kode;*/
/*                 },*/
/*                 formatResult: function (repo) {*/
/*                     var markup = '<div class="row">' +*/
/*                             '<div class="col-sm-12">' + repo.item_nama + '</div>' +*/
/*                             '<ul style="font-size: 8px;">' +*/
/*                             '<li class="col-sm-12">'+ repo.item_kode +'</li>' +*/
/*                             '<li class="col-sm-12">'+ repo.item_uom +'</li>' +*/
/*                             '<li class="col-sm-12">'+ repo.item_principal +'</li>' +*/
/*                             '<li class="col-sm-12">'+ repo.item_grup+'</li>' +*/
/*                             '</ul>';*/
/* */
/*                     markup += '</div>';*/
/* */
/*                     return markup;*/
/*                 }*/
/*             });*/
/*             $(".item_kode").on("change", function(e) {*/
/*                 var data = e.added;*/
/*                 $("input[name=item]").val(data.id);*/
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
/*         <div class="row">*/
/*             <div class="col-sm-12">*/
/*                 <div class="block-inner">*/
/*                     <div class="block-inner">*/
/*                         <h6 class="heading-hr">*/
/*                             <i class="icon-coin"></i> Informasi Umum <small class="display-block">Informasi Umum Tentang Harga Item</small>*/
/*                         </h6>*/
/*                     </div>*/
/*                     <div class="panel-body">*/
/*                         <div class="form-group">*/
/*                             <div class="row">*/
/*                                 <div class="col-sm-4">*/
/*                                     <label>Price List:</label>*/
/*                                     <input type="hidden" name="price_list" class="price_list" value="{{data.price_list}}"/>*/
/*                                     <span class="help-block">Daftar Harga per Item e.g ASKES, JAMKESDA, BPJS</span>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <div class="row">*/
/*                                 <div class="col-sm-4">*/
/*                                     <label>Kode Item:</label>*/
/*                                     <input type="hidden" name="item_kode" class="item_kode" value="{{data.item_kode}}"/>*/
/*                                     <input type="hidden" name="item" value="{{ data.item }}" />*/
/*                                     <input type="hidden" name="gen_id" value="{{ data.id }}" />*/
/*                                     <span class="help-block">Kode Item e.g ITEM-AB001</span>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="form-group">*/
/*                             <div class="row">*/
/*                                 <div class="col-sm-6">*/
/*                                     <label>Rate / Harga</label>*/
/*                                     <input type="text" name="price_mask" class="form-control" />*/
/*                                     <input type="hidden" name="price_list_rate" class="form-control" value="{{data.price_list_rate}}"/>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </form>*/
/* {% endblock %}*/
