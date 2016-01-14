<?php

/* batch/form_batch.twig */
class __TwigTemplate_8171a48c3373ef933ce9aa735814425aa5d918814f5fed2ed096b84f9b01ac48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("batch/index.twig", "batch/form_batch.twig", 1);
        $this->blocks = array(
            'sub_css' => array($this, 'block_sub_css'),
            'sub_js' => array($this, 'block_sub_js'),
            'sub_content' => array($this, 'block_sub_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "batch/index.twig";
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
        echo "assets/js/jquery-ui.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/js/plugins/forms/select2.min.js\"></script>
    <script type=\"text/javascript\">

        \$(function(){
            \$(\".datepicker\").datepicker({
                defaultDate: \"now\",
                dateFormat: \"yy-mm-dd\",
                showOtherMonths: true
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
        // line 24
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
        // line 38
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
                \$(\"input[name=batch_kode]\").val(data.item_kode+\"-\");
                \$(\"input[name=batch_kode]\").focus();
            });
        });
    </script>
";
    }

    // line 75
    public function block_sub_content($context, array $blocks = array())
    {
        // line 76
        echo "    <form class=\"form-horizontal\" action=\"";
        echo twig_escape_filter($this->env, (isset($context["url_submit"]) ? $context["url_submit"] : null), "html", null, true);
        echo "\" method=\"POST\" role=\"form\">
        <h6 class=\"heading-hr\"><i class=\"icon-paragraph-right2\"></i> ";
        // line 77
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
                                    <label>Batch no:</label>
                                    <input type=\"text\" name=\"batch_kode\" class=\"batch_kode form-control\" value=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array()), "html", null, true);
        echo "\" ";
        if ((isset($context["is_read_only"]) ? $context["is_read_only"] : null)) {
            echo "readonly";
        }
        echo "/>
                                    <input type=\"hidden\" name=\"gen_id\" value=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array()), "html", null, true);
        echo "\" />
                                    <span class=\"help-block\">Batch no. e.g ITEM-ABOTIL-CAIR-0001, ITEM-INZIANA-STRIP-20181105</span>
                                </div>
                                <div class=\"col-sm-4\">
                                    <label>Tanggal Berakhir:</label>
                                    <input type=\"text\" class=\"datepicker form-control\" placeholder=\"Tanggal Posting Item\"
                                           name=\"expiry_date\" value=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "expiry_date", array()), "html", null, true);
        echo "\" />
                                    <span class=\"help-block\">Tanggal akhir berlaku Batch no. item</span>
                                </div>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <div class=\"row\">
                                <div class=\"col-sm-4\">
                                    <label>Kode Item:</label>
                                    <input type=\"hidden\" name=\"item_kode\" class=\"item_kode\" value=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "item_kode", array()), "html", null, true);
        echo "\" ";
        if ((isset($context["is_read_only"]) ? $context["is_read_only"] : null)) {
            echo "readonly";
        }
        echo "/>
                                    <input type=\"hidden\" name=\"item\" class=\"item\" value=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "item", array()), "html", null, true);
        echo "\"/>
                                    <span class=\"help-block\">Kode Item e.g ITEM-INZIANA-STRIP</span>
                                </div>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <div class=\"row\">
                                <div class=\"col-sm-6\">
                                    <label>Keterangan</label>
                                    <textarea type=\"text\" name=\"keterangan\" class=\"form-control\" >";
        // line 124
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "keterangan", array()), "html", null, true);
        echo "</textarea>
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
        return "batch/form_batch.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 124,  190 => 114,  182 => 113,  169 => 103,  160 => 97,  152 => 96,  130 => 77,  125 => 76,  122 => 75,  81 => 38,  64 => 24,  43 => 6,  38 => 5,  35 => 4,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'batch/index.twig' %}*/
/* {% block sub_css %}*/
/* {% endblock %}*/
/* {% block sub_js %}*/
/*     <script type="text/javascript" src="{{baseurl}}assets/js/jquery-ui.min.js"></script>*/
/*     <script type="text/javascript" src="{{baseurl}}assets/js/plugins/forms/select2.min.js"></script>*/
/*     <script type="text/javascript">*/
/* */
/*         $(function(){*/
/*             $(".datepicker").datepicker({*/
/*                 defaultDate: "now",*/
/*                 dateFormat: "yy-mm-dd",*/
/*                 showOtherMonths: true*/
/*             });*/
/* */
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
/*                 $("input[name=batch_kode]").val(data.item_kode+"-");*/
/*                 $("input[name=batch_kode]").focus();*/
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
/* */
/*                         <div class="form-group">*/
/*                             <div class="row">*/
/*                                 <div class="col-sm-4">*/
/*                                     <label>Batch no:</label>*/
/*                                     <input type="text" name="batch_kode" class="batch_kode form-control" value="{{data.id}}" {% if is_read_only %}readonly{% endif %}/>*/
/*                                     <input type="hidden" name="gen_id" value="{{ data.id }}" />*/
/*                                     <span class="help-block">Batch no. e.g ITEM-ABOTIL-CAIR-0001, ITEM-INZIANA-STRIP-20181105</span>*/
/*                                 </div>*/
/*                                 <div class="col-sm-4">*/
/*                                     <label>Tanggal Berakhir:</label>*/
/*                                     <input type="text" class="datepicker form-control" placeholder="Tanggal Posting Item"*/
/*                                            name="expiry_date" value="{{ data.expiry_date }}" />*/
/*                                     <span class="help-block">Tanggal akhir berlaku Batch no. item</span>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="form-group">*/
/*                             <div class="row">*/
/*                                 <div class="col-sm-4">*/
/*                                     <label>Kode Item:</label>*/
/*                                     <input type="hidden" name="item_kode" class="item_kode" value="{{data.item_kode}}" {% if is_read_only %}readonly{% endif %}/>*/
/*                                     <input type="hidden" name="item" class="item" value="{{data.item}}"/>*/
/*                                     <span class="help-block">Kode Item e.g ITEM-INZIANA-STRIP</span>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="form-group">*/
/*                             <div class="row">*/
/*                                 <div class="col-sm-6">*/
/*                                     <label>Keterangan</label>*/
/*                                     <textarea type="text" name="keterangan" class="form-control" >{{ data.keterangan }}</textarea>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </form>*/
/* {% endblock %}*/
