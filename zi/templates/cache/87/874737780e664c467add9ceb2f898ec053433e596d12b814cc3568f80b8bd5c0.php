<?php

/* item/form_item.twig */
class __TwigTemplate_fadc79abda5eb5ad3d66707be6a5465518dd1b8cbb1dc39fbadb3f6b16c70c6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("item/index.twig", "item/form_item.twig", 1);
        $this->blocks = array(
            'sub_css' => array($this, 'block_sub_css'),
            'sub_js' => array($this, 'block_sub_js'),
            'sub_content' => array($this, 'block_sub_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "item/index.twig";
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
        echo "assets/js/plugins/forms/select2.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/js/plugins/forms/switch.min.js\"></script>
    <script type=\"text/javascript\">
        var \$rate = \$(\".isnum\");
        function onItemSubmit()
        {
            \$('#form-item').submit();
        }
        \$(function () {
            \$rate.numeric({ decimalPlaces : 3, negative : false });
            \$('.switch').bootstrapSwitch();

            \$(\".item_grup\").select2({
                width: \"250\",
                minimumInputLength: 2,
                placeholder: \"Cari Grup Item\",
                id: function (bond) {
                    return bond.item_grup_nama;
                },
                ajax: {
                    url: '";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["url_item_grup"]) ? $context["url_item_grup"] : null), "html", null, true);
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
        // line 40
        echo twig_escape_filter($this->env, (isset($context["url_item_grup"]) ? $context["url_item_grup"] : null), "html", null, true);
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
                    return repo.item_grup_nama;
                },
                formatResult: function (repo) {
                    return repo.item_grup_nama;
                }
            });

            \$(\".item_uom\").select2({
                width: \"250\",
                minimumInputLength: 0,
                placeholder: \"Cari Item Satuan\",
                id: function (bond) {
                    return bond.uom_nama;
                },
                ajax: {
                    url: '";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["url_item_uom"]) ? $context["url_item_uom"] : null), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["url_item_uom"]) ? $context["url_item_uom"] : null), "html", null, true);
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
                    return repo.uom_nama;
                },
                formatResult: function (repo) {
                    return repo.uom_nama;
                }
            });
            \$(\".item_principal\").select2({
                width: \"250\",
                minimumInputLength: 0,
                placeholder: \"Cari Brand MERK Item\",
                id: function (bond) {
                    return bond.nama;
                },
                ajax: {
                    url: '";
        // line 103
        echo twig_escape_filter($this->env, (isset($context["url_principal"]) ? $context["url_principal"] : null), "html", null, true);
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
        // line 117
        echo twig_escape_filter($this->env, (isset($context["url_principal"]) ? $context["url_principal"] : null), "html", null, true);
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
                    return repo.nama;
                },
                formatResult: function (repo) {
                    return repo.nama;
                }
            });
            \$(\".default_gudang\").select2({
                width: \"250\",
                minimumInputLength: 0,
                placeholder: \"Cari lokasi gudang\",
                id: function (bond) {
                    return bond.id;
                },
                ajax: {
                    url: '";
        // line 141
        echo twig_escape_filter($this->env, (isset($context["url_gudang"]) ? $context["url_gudang"] : null), "html", null, true);
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
        // line 155
        echo twig_escape_filter($this->env, (isset($context["url_gudang"]) ? $context["url_gudang"] : null), "html", null, true);
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
                    return repo.warehouse_nama;
                },
                formatResult: function (repo) {
                    return repo.warehouse_nama;
                }
            });
        });
    </script>
";
    }

    // line 175
    public function block_sub_content($context, array $blocks = array())
    {
        // line 176
        echo "
    <h6 class=\"heading-hr\"><i class=\"icon-paragraph-right2\"></i> ";
        // line 177
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</h6>
    <div class=\"block-inner\">
        <div class=\"form-actions\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    ";
        // line 182
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array())) {
            // line 183
            echo "                        <a href=\"#\" class=\"btn btn-default\"><i class=\"icon-stack\"></i>Lihat Saldo</a>
                        <form action=\"";
            // line 184
            echo twig_escape_filter($this->env, (isset($context["url_itemprice"]) ? $context["url_itemprice"] : null), "html", null, true);
            echo "\" method=\"post\">
                            <button type=\"submit\" class=\"btn btn-default\"><i class=\"icon-file-plus\"></i>Tambah Harga Item</button>
                            <input type=\"hidden\" name=\"anchor\" value=\"item_kode\"/>
                            <input type=\"hidden\" name=\"value\" value=\"";
            // line 187
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "item_kode", array()), "html", null, true);
            echo "\"/>
                        </form>
                    ";
        }
        // line 190
        echo "                </div>
                <div class=\"col-sm-6 text-right\">
                    <a href=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->urlFor("item.index"), "html", null, true);
        echo "\" class=\"btn btn-default\"><i class=\"icon-grid\"></i></a>
                    <button type=\"button\" onclick=\"onItemSubmit();\" class=\"btn btn-primary\"><i class=\"icon-upload2\"></i>Submit</button>
                </div>
            </div>
        </div>
    </div>
    <form id=\"form-item\" class=\"form-horizontal\" action=\"";
        // line 198
        echo twig_escape_filter($this->env, (isset($context["url_submit"]) ? $context["url_submit"] : null), "html", null, true);
        echo "\" method=\"POST\" role=\"form\">
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div class=\"block-inner\">
                    <div class=\"block-inner\">
                        <h6 class=\"heading-hr\">
                            <i class=\"icon-user\"></i> Informasi Umum <small class=\"display-block\">Informasi Umum Tentang Item Barang</small>
                        </h6>
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"form-group\">
                            <div class=\"row\">
                                <div class=\"col-sm-6\">
                                    <label>Kode Item:</label>
                                    <input type=\"text\" class=\"form-control\" name=\"item_kode\" value=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "item_kode", array()), "html", null, true);
        echo "\" ";
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array())) {
            echo "readonly";
        }
        echo " />
                                    <input type=\"hidden\" name=\"gen_id\" value=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array()), "html", null, true);
        echo "\" />
                                    <span class=\"help-block\">Kode Item e.g ITEM-AB001</span>
                                </div>
                                <div class=\"col-sm-6\">
                                    <label>
                                        Obat:
                                        <input type=\"checkbox\" name=\"is_obat\" class=\"switch switch-mini\" data-on-label=\"<i class='icon-checkmark3'></i>\" data-off-label=\"<i class='icon-close'></i>\" ";
        // line 219
        if ((($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "is_obat", array()) > 0) || twig_test_empty($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array())))) {
            echo "checked=\"checked\"";
        }
        echo "/>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <div class=\"row\">
                                <div class=\"col-sm-6\">
                                    <label>Nama Item:</label>
                                    <input type=\"text\" class=\"form-control\" name=\"item_nama\" value=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "item_nama", array()), "html", null, true);
        echo "\" />
                                </div>
                                <div class=\"col-sm-6\">
                                    <label>
                                        Status Item:
                                        <input type=\"checkbox\" name=\"disabled\" class=\"switch switch-mini\" data-on-label=\"Disabled\" data-off-label=\"Enabled\" ";
        // line 234
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "disabled", array()) > 0)) {
            echo "checked=\"checked\"";
        }
        echo " />
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <div class=\"row\">
                                <div class=\"col-sm-4\">
                                    <label>Grup Item:</label>
                                    <input type=\"hidden\" name=\"item_grup\" class=\"item_grup\" value=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "item_grup", array()), "html", null, true);
        echo "\"/>
                                </div>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <div class=\"row\">
                                <div class=\"col-sm-6\">
                                    <label>Satuan Item | Unit of Measure (default):</label>
                                    <input type=\"hidden\" name=\"item_uom\" class=\"item_uom\" value=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "item_uom", array()), "html", null, true);
        echo "\"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div class=\"block-inner\">
                    <div class=\"block-inner\">
                        <h6 class=\"heading-hr\">
                            <i class=\"icon-notebook\"></i> Keterangan  <small class=\"display-block\">Keterangan Item Barang</small>
                        </h6>
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"form-group\">
                            <div class=\"row\">
                                <div class=\"col-sm-4\">
                                    <label>Principal:</label>
                                    <input type=\"hidden\" name=\"item_principal\" class=\"item_principal\" value=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "item_principal", array()), "html", null, true);
        echo "\"/>
                                    <span class=\"help-block\">Merk / Brand Produksi Item</span>
                                </div>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <div class=\"row\">
                                <div class=\"col-sm-6\">
                                    <label>Barcode:</label>
                                    <input type=\"text\" class=\"form-control\" name=\"barcode\" value=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "barcode", array()), "html", null, true);
        echo "\" />
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"row\">
                                <div class=\"col-sm-12\">
                                    <label>Keterangan:</label>
                                    <textarea rows=\"10\" class=\"form-control\" name=\"keterangan\">";
        // line 293
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "keterangan", array()), "html", null, true);
        echo "</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div class=\"block-inner\">
                    <div class=\"block-inner\">
                        <h6 class=\"heading-hr\">
                            <i class=\"icon-notebook\"></i> Inventori  <small class=\"display-block\">Informasi inventori item</small>
                        </h6>
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"form-group\">
                            <div class=\"row\">
                                <div class=\"col-sm-4\">
                                    <label>Default Warehouse(gudang):</label>
                                    <input type=\"hidden\" name=\"default_gudang\" class=\"default_gudang\" value=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "default_gudang", array()), "html", null, true);
        echo "\" readonly/>
                                </div>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <div class=\"row\">
                                <div class=\"col-sm-6\">
                                    <label>re-order level:</label>
                                    <input type=\"text\" class=\"form-control isnum\" name=\"re_order_level\" value=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "re_order_level", array()), "html", null, true);
        echo "\" />
                                    <span class=\"help-block\">Batas minimum item untuk pemesanan kembali</span>
                                </div>
                                <div class=\"col-sm-6\">
                                    <label>minimum re-order qty:</label>
                                    <input type=\"text\" class=\"form-control isnum\" name=\"min_order_qty\" value=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "min_order_qty", array()), "html", null, true);
        echo "\" />
                                    <span class=\"help-block\">Jumlah minimum item untuk pemesanan kembali </span>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"row\">
                                <div class=\"col-sm-6\">
                                    <label>re-order qty:</label>
                                    <input type=\"text\" class=\"form-control isnum\" name=\"re_order_qty\" value=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "re_order_qty", array()), "html", null, true);
        echo "\" />
                                    <span class=\"help-block\">Jumlah item untuk pemesanan kembali </span>
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
        return "item/form_item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  477 => 338,  465 => 329,  457 => 324,  445 => 315,  420 => 293,  409 => 285,  396 => 275,  371 => 253,  359 => 244,  344 => 234,  336 => 229,  321 => 219,  312 => 213,  304 => 212,  287 => 198,  278 => 192,  274 => 190,  268 => 187,  262 => 184,  259 => 183,  257 => 182,  249 => 177,  246 => 176,  243 => 175,  219 => 155,  202 => 141,  175 => 117,  158 => 103,  131 => 79,  114 => 65,  86 => 40,  69 => 26,  47 => 7,  43 => 6,  38 => 5,  35 => 4,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'item/index.twig' %}*/
/* {% block sub_css %}*/
/* {% endblock %}*/
/* {% block sub_js %}*/
/*     <script type="text/javascript" src="{{baseurl}}assets/plugins/num.min.js"></script>*/
/*     <script type="text/javascript" src="{{baseurl}}assets/js/plugins/forms/select2.min.js"></script>*/
/*     <script type="text/javascript" src="{{baseurl}}assets/js/plugins/forms/switch.min.js"></script>*/
/*     <script type="text/javascript">*/
/*         var $rate = $(".isnum");*/
/*         function onItemSubmit()*/
/*         {*/
/*             $('#form-item').submit();*/
/*         }*/
/*         $(function () {*/
/*             $rate.numeric({ decimalPlaces : 3, negative : false });*/
/*             $('.switch').bootstrapSwitch();*/
/* */
/*             $(".item_grup").select2({*/
/*                 width: "250",*/
/*                 minimumInputLength: 2,*/
/*                 placeholder: "Cari Grup Item",*/
/*                 id: function (bond) {*/
/*                     return bond.item_grup_nama;*/
/*                 },*/
/*                 ajax: {*/
/*                     url: '{{url_item_grup}}',*/
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
/*                         $.ajax("{{url_item_grup}}", {*/
/*                             dataType: "json",*/
/*                             data: { search: id, offset: 0, limit: 1 }*/
/*                         }).done(function(data) { callback(data.rows[0]); });*/
/*                     }*/
/*                 },*/
/*                 escapeMarkup: function (markup) {*/
/*                     return markup;*/
/*                 },*/
/*                 formatSelection: function (repo) {*/
/*                     return repo.item_grup_nama;*/
/*                 },*/
/*                 formatResult: function (repo) {*/
/*                     return repo.item_grup_nama;*/
/*                 }*/
/*             });*/
/* */
/*             $(".item_uom").select2({*/
/*                 width: "250",*/
/*                 minimumInputLength: 0,*/
/*                 placeholder: "Cari Item Satuan",*/
/*                 id: function (bond) {*/
/*                     return bond.uom_nama;*/
/*                 },*/
/*                 ajax: {*/
/*                     url: '{{url_item_uom}}',*/
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
/*                         $.ajax("{{url_item_uom}}", {*/
/*                             dataType: "json",*/
/*                             data: { search: id, offset: 0, limit: 1 }*/
/*                         }).done(function(data) { callback(data.rows[0]); });*/
/*                     }*/
/*                 },*/
/*                 escapeMarkup: function (markup) {*/
/*                     return markup;*/
/*                 },*/
/*                 formatSelection: function (repo) {*/
/*                     return repo.uom_nama;*/
/*                 },*/
/*                 formatResult: function (repo) {*/
/*                     return repo.uom_nama;*/
/*                 }*/
/*             });*/
/*             $(".item_principal").select2({*/
/*                 width: "250",*/
/*                 minimumInputLength: 0,*/
/*                 placeholder: "Cari Brand MERK Item",*/
/*                 id: function (bond) {*/
/*                     return bond.nama;*/
/*                 },*/
/*                 ajax: {*/
/*                     url: '{{url_principal}}',*/
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
/*                         $.ajax("{{url_principal}}", {*/
/*                             dataType: "json",*/
/*                             data: { search: id, offset: 0, limit: 1 }*/
/*                         }).done(function(data) { callback(data.rows[0]); });*/
/*                     }*/
/*                 },*/
/*                 escapeMarkup: function (markup) {*/
/*                     return markup;*/
/*                 },*/
/*                 formatSelection: function (repo) {*/
/*                     return repo.nama;*/
/*                 },*/
/*                 formatResult: function (repo) {*/
/*                     return repo.nama;*/
/*                 }*/
/*             });*/
/*             $(".default_gudang").select2({*/
/*                 width: "250",*/
/*                 minimumInputLength: 0,*/
/*                 placeholder: "Cari lokasi gudang",*/
/*                 id: function (bond) {*/
/*                     return bond.id;*/
/*                 },*/
/*                 ajax: {*/
/*                     url: '{{url_gudang}}',*/
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
/*                         $.ajax("{{url_gudang}}", {*/
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
/*                     return repo.warehouse_nama;*/
/*                 },*/
/*                 formatResult: function (repo) {*/
/*                     return repo.warehouse_nama;*/
/*                 }*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* {% block sub_content %}*/
/* */
/*     <h6 class="heading-hr"><i class="icon-paragraph-right2"></i> {{ title }}</h6>*/
/*     <div class="block-inner">*/
/*         <div class="form-actions">*/
/*             <div class="row">*/
/*                 <div class="col-sm-6">*/
/*                     {% if data.id %}*/
/*                         <a href="#" class="btn btn-default"><i class="icon-stack"></i>Lihat Saldo</a>*/
/*                         <form action="{{ url_itemprice }}" method="post">*/
/*                             <button type="submit" class="btn btn-default"><i class="icon-file-plus"></i>Tambah Harga Item</button>*/
/*                             <input type="hidden" name="anchor" value="item_kode"/>*/
/*                             <input type="hidden" name="value" value="{{ data.item_kode }}"/>*/
/*                         </form>*/
/*                     {% endif %}*/
/*                 </div>*/
/*                 <div class="col-sm-6 text-right">*/
/*                     <a href="{{ urlFor('item.index') }}" class="btn btn-default"><i class="icon-grid"></i></a>*/
/*                     <button type="button" onclick="onItemSubmit();" class="btn btn-primary"><i class="icon-upload2"></i>Submit</button>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <form id="form-item" class="form-horizontal" action="{{ url_submit }}" method="POST" role="form">*/
/*         <div class="row">*/
/*             <div class="col-sm-12">*/
/*                 <div class="block-inner">*/
/*                     <div class="block-inner">*/
/*                         <h6 class="heading-hr">*/
/*                             <i class="icon-user"></i> Informasi Umum <small class="display-block">Informasi Umum Tentang Item Barang</small>*/
/*                         </h6>*/
/*                     </div>*/
/*                     <div class="panel-body">*/
/*                         <div class="form-group">*/
/*                             <div class="row">*/
/*                                 <div class="col-sm-6">*/
/*                                     <label>Kode Item:</label>*/
/*                                     <input type="text" class="form-control" name="item_kode" value="{{ data.item_kode }}" {% if data.id %}readonly{% endif %} />*/
/*                                     <input type="hidden" name="gen_id" value="{{ data.id }}" />*/
/*                                     <span class="help-block">Kode Item e.g ITEM-AB001</span>*/
/*                                 </div>*/
/*                                 <div class="col-sm-6">*/
/*                                     <label>*/
/*                                         Obat:*/
/*                                         <input type="checkbox" name="is_obat" class="switch switch-mini" data-on-label="<i class='icon-checkmark3'></i>" data-off-label="<i class='icon-close'></i>" {% if data.is_obat > 0 or data.id is empty%}checked="checked"{% endif %}/>*/
/*                                     </label>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="form-group">*/
/*                             <div class="row">*/
/*                                 <div class="col-sm-6">*/
/*                                     <label>Nama Item:</label>*/
/*                                     <input type="text" class="form-control" name="item_nama" value="{{ data.item_nama }}" />*/
/*                                 </div>*/
/*                                 <div class="col-sm-6">*/
/*                                     <label>*/
/*                                         Status Item:*/
/*                                         <input type="checkbox" name="disabled" class="switch switch-mini" data-on-label="Disabled" data-off-label="Enabled" {% if data.disabled > 0 %}checked="checked"{% endif %} />*/
/*                                     </label>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="form-group">*/
/*                             <div class="row">*/
/*                                 <div class="col-sm-4">*/
/*                                     <label>Grup Item:</label>*/
/*                                     <input type="hidden" name="item_grup" class="item_grup" value="{{data.item_grup}}"/>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="form-group">*/
/*                             <div class="row">*/
/*                                 <div class="col-sm-6">*/
/*                                     <label>Satuan Item | Unit of Measure (default):</label>*/
/*                                     <input type="hidden" name="item_uom" class="item_uom" value="{{data.item_uom}}"/>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="col-sm-12">*/
/*                 <div class="block-inner">*/
/*                     <div class="block-inner">*/
/*                         <h6 class="heading-hr">*/
/*                             <i class="icon-notebook"></i> Keterangan  <small class="display-block">Keterangan Item Barang</small>*/
/*                         </h6>*/
/*                     </div>*/
/*                     <div class="panel-body">*/
/*                         <div class="form-group">*/
/*                             <div class="row">*/
/*                                 <div class="col-sm-4">*/
/*                                     <label>Principal:</label>*/
/*                                     <input type="hidden" name="item_principal" class="item_principal" value="{{data.item_principal}}"/>*/
/*                                     <span class="help-block">Merk / Brand Produksi Item</span>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="form-group">*/
/*                             <div class="row">*/
/*                                 <div class="col-sm-6">*/
/*                                     <label>Barcode:</label>*/
/*                                     <input type="text" class="form-control" name="barcode" value="{{ data.barcode }}" />*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <div class="row">*/
/*                                 <div class="col-sm-12">*/
/*                                     <label>Keterangan:</label>*/
/*                                     <textarea rows="10" class="form-control" name="keterangan">{{ data.keterangan }}</textarea>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="col-sm-12">*/
/*                 <div class="block-inner">*/
/*                     <div class="block-inner">*/
/*                         <h6 class="heading-hr">*/
/*                             <i class="icon-notebook"></i> Inventori  <small class="display-block">Informasi inventori item</small>*/
/*                         </h6>*/
/*                     </div>*/
/*                     <div class="panel-body">*/
/*                         <div class="form-group">*/
/*                             <div class="row">*/
/*                                 <div class="col-sm-4">*/
/*                                     <label>Default Warehouse(gudang):</label>*/
/*                                     <input type="hidden" name="default_gudang" class="default_gudang" value="{{data.default_gudang}}" readonly/>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="form-group">*/
/*                             <div class="row">*/
/*                                 <div class="col-sm-6">*/
/*                                     <label>re-order level:</label>*/
/*                                     <input type="text" class="form-control isnum" name="re_order_level" value="{{ data.re_order_level }}" />*/
/*                                     <span class="help-block">Batas minimum item untuk pemesanan kembali</span>*/
/*                                 </div>*/
/*                                 <div class="col-sm-6">*/
/*                                     <label>minimum re-order qty:</label>*/
/*                                     <input type="text" class="form-control isnum" name="min_order_qty" value="{{ data.min_order_qty }}" />*/
/*                                     <span class="help-block">Jumlah minimum item untuk pemesanan kembali </span>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <div class="row">*/
/*                                 <div class="col-sm-6">*/
/*                                     <label>re-order qty:</label>*/
/*                                     <input type="text" class="form-control isnum" name="re_order_qty" value="{{ data.re_order_qty }}" />*/
/*                                     <span class="help-block">Jumlah item untuk pemesanan kembali </span>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </form>*/
/* {% endblock %}*/
