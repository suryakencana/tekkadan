<?php

/* stock/form_entry.twig */
class __TwigTemplate_7dd89dccdf5c586bb3200c3fcf9ec6d407d457ea156fd319def42867bc63bd80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "stock/form_entry.twig", 1);
        $this->blocks = array(
            'basecss' => array($this, 'block_basecss'),
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
    public function block_basecss($context, array $blocks = array())
    {
        // line 3
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/plugins/bootstrap-table/dist/bootstrap-table.css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/plugins/thickbox/css/thickbox.css\"/>
";
    }

    // line 7
    public function block_js($context, array $blocks = array())
    {
        // line 8
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/js/jquery-ui.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/plugins/bootstrap-table/dist/bootstrap-table.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/js/plugins/forms/select2.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/js/plugins/interface/moment.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/js/plugins/interface/timepicker.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/plugins/thickbox/js/thickbox.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/plugins/validate.min.js\"></script>
    <script type=\"text/javascript\" charset=\"utf-8\">
        validate.validators.presence.options = {message: \"Harap data diisi terlebih dahulu\"};
        const ACTION_RECEIPT = 'MASUK';
        const ACTION_ISSUE = 'KELUAR';
        const ACTION_TRANSFER = 'TRANSFER';
        const ACTION_REPACK = 'REPACK';
        var tb_pathToImage = \"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/plugins/thickbox/img/ico_waiting.gif\";
        var \$griddetail = \$('#table-detail');
        var warehouse = [];

        function insertData(data)
        {
            var results = [],
                    price = warehouse['tipe'] == ACTION_RECEIPT || warehouse['tipe'] === ACTION_REPACK && data['to_warehouse'] !== \"\" ? data['item_price'].replace(/,/gi, \"\") : data['item_price_rate'].replace(/,/gi, \"\"),
                    qty = data['item_qty'].replace(/,/gi, \"\"),
                    actual_qty = data['actual_qty'],
                    total_amount = parseInt(price) * parseInt(qty);
            var _id = Math.floor((Math.random() * 100000) + 1);
            _.assign(data, {id:_id,item_amount: total_amount, item_price: price, item_qty: qty, actual_qty: actual_qty});
            results.push(data);
            \$griddetail.bootstrapTable('append', results);
            \$griddetail.bootstrapTable('scrollTo', 'bottom');
            \$griddetail.bootstrapTable('refresh');
        }
        function _handleRemoveRows()
        {
            var rows = \$griddetail.bootstrapTable('getSelections');
            if(rows.length > 0) {
                var data = [];
                _.map(rows, function (row) {
                    data.push(row['id']);
                });
                console.log(data);
                \$griddetail.bootstrapTable('remove', {field: 'id', values: data});
            }
            \$griddetail.bootstrapTable('uncheckAll');
            \$griddetail.bootstrapTable('refresh');
        }
        function _pilihEntry(pilih)
        {
            var input = \$('.from_warehouse');
            var output = \$('.to_warehouse');
            \$(\".default_gudang\").select2(\"val\", \"\");

            // set switch stok entry tipe
            switch(pilih){
                case ACTION_RECEIPT:
                    input.hide();
                    output.show();
                    break;
                case ACTION_ISSUE:
                    input.show();
                    output.hide();
                    break;
                default:
                    input.show();
                    output.show();
                    break;
            }
        }
        \$(function () {
            var constraints = {
                posting_date: {presence: true},
                posting_time: {presence: true}
            };
            \$('form#form-entry').submit(function(e) {
                var dtset = \$griddetail.bootstrapTable(\"getData\");
                var dd = validate.single(dtset, {presence: true});
                var errors = validate(\$(this), constraints);
                // cek data gudang
                // jika RECEIPT syarat gudang tujuan harus diisi dan gudang asal harus kosong

                // jika ISSUE syarat gudang asal harus disi dan gudang tujuan harus kosong
                if(!errors && !dd){
                    var input = \$(\"<input>\")
                            .attr(\"type\", \"hidden\")
                            .attr(\"name\", \"rows\").val(JSON.stringify(dtset));
                    \$('form#form-entry').append(\$(input));
                    console.log(\"ok\");
                } else {
                    Messenger().post({
                        message: \"Data harap diisi terlebih dahulu\",
                        type: 'error',
                        showCloseButton: true
                    });
                    e.preventDefault();
                }
            });
            warehouse['tipe'] = \"";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "stok_entry_tipe", array()), "html", null, true);
        echo "\";
            \$griddetail.bootstrapTable({
                url: '";
        // line 105
        echo twig_escape_filter($this->env, (isset($context["source_url"]) ? $context["source_url"] : null), "html", null, true);
        echo "',
                method: '";
        // line 106
        echo twig_escape_filter($this->env, (isset($context["method"]) ? $context["method"] : null), "html", null, true);
        echo "',
                columns: ";
        // line 107
        echo (isset($context["cols"]) ? $context["cols"] : null);
        echo "
            });
            \$(\".datepicker\").datepicker({
                defaultDate: \"now\",
                dateFormat: \"yy-mm-dd\",
                showOtherMonths: true
            });
            \$('.timepicker').timepicker({ 'scrollDefaultNow': true });
            \$(\".stok_entry_tipe\").select2({
                width: \"100%\",
                minimumInputLength: 0,
                placeholder: \"Pilih Tipe Entry Stok\",
                id: function (bond) {
                    return bond.entry_tipe_nama;
                },
                ajax: {
                    url: '";
        // line 123
        echo twig_escape_filter($this->env, (isset($context["url_entry_tipe"]) ? $context["url_entry_tipe"] : null), "html", null, true);
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
                        _pilihEntry(id);
                        \$.ajax(\"";
        // line 138
        echo twig_escape_filter($this->env, (isset($context["url_entry_tipe"]) ? $context["url_entry_tipe"] : null), "html", null, true);
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
                    return repo.entry_tipe_nama;
                },
                formatResult: function (repo) {
                    return repo.entry_tipe_nama;
                }
            });
            \$(\".stok_entry_tipe\").on(\"change\", function(e) {
                var data = e.added;
                _pilihEntry(data.entry_tipe_nama);
                warehouse = [];
                warehouse[\"tipe\"] = data.entry_tipe_nama;
            });
            \$(\".default_gudang\").select2({
                allowClear: true,
                width: \"100%\",
                minimumInputLength: 0,
                placeholder: \"Cari lokasi gudang\",
                id: function (bond) {
                    return bond.id;
                },
                ajax: {
                    url: '";
        // line 169
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
                        var parent = \$(element).attr(\"name\");
                        \$.ajax(\"";
        // line 184
        echo twig_escape_filter($this->env, (isset($context["url_gudang"]) ? $context["url_gudang"] : null), "html", null, true);
        echo "\", {
                            dataType: \"json\",
                            method: 'POST',
                            data: { search: id, offset: 0, limit: 1 }
                        }).done(function(data) {
                            warehouse[parent] = data.rows[0].id;
                            callback(data.rows[0]);
                        });
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
            \$(\".default_gudang\").on(\"change\", function(e) {
                var data = e.added,
                        parent = \$(this).attr(\"name\");
                warehouse[parent] = data.id;
            });
        });
    </script>
";
    }

    // line 212
    public function block_content($context, array $blocks = array())
    {
        // line 213
        echo "    <form id=\"form-entry\" class=\"form-horizontal\" action=\"";
        echo twig_escape_filter($this->env, (isset($context["url_submit"]) ? $context["url_submit"] : null), "html", null, true);
        echo "\" method=\"POST\" role=\"form\">
        <h6 class=\"heading-hr\"><i class=\"icon-paragraph-right2\"></i>";
        // line 214
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
                            <i class=\"icon-user\"></i> Entry Posting<small class=\"display-block\">Form Entry Posting</small>
                        </h6>
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"form-group\">
                            <div class=\"row\">
                                <div class=\"col-sm-6\">
                                    <label>Kode Entry:</label>
                                    <input type=\"text\" class=\"form-control\" name=\"entry_kode\" value=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "entry_kode", array()), "html", null, true);
        echo "\" readonly/>
                                    <input type=\"hidden\" name=\"gen_id\" value=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array()), "html", null, true);
        echo "\" />
                                </div>

                                <div class=\"col-sm-6\">
                                    <label>Tanggal Posting:</label>
                                    <input type=\"text\" class=\"datepicker form-control\" placeholder=\"Tanggal Posting Item\"
                                           name=\"posting_date\" value=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "posting_date", array()), "html", null, true);
        echo "\" />

                                </div>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"row\">
                                <div class=\"col-sm-6\">
                                    <label>Jenis Entry:</label>
                                    <input type=\"hidden\" name=\"stok_entry_tipe\" class=\"stok_entry_tipe\" value=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "stok_entry_tipe", array()), "html", null, true);
        echo "\" readonly/>
                                </div>

                                <div class=\"col-sm-6\">
                                    <label>Waktu Posting:</label>
                                    <input type=\"text\" placeholder=\"Waktu Posting Item\" class=\"timepicker form-control\"
                                           name=\"posting_time\" value=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "posting_time", array()), "html", null, true);
        echo "\"/>
                                </div>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <div class=\"row\">
                                <div class=\"col-sm-6\">
                                    <span class=\"from_warehouse\">
                                    <label>Lokasi Gudang Item Asal:</label>
                                    <input type=\"hidden\" name=\"from_warehouse\" class=\"default_gudang\" value=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "from_warehouse", array()), "html", null, true);
        echo "\" readonly/>
                                    </span>
                                </div>

                                <div class=\"col-sm-6\">
                                    <span class=\"to_warehouse\">
                                    <label>Lokasi Gudang Item Tujuan:</label>
                                    <input type=\"hidden\" name=\"to_warehouse\" class=\"default_gudang\" value=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "to_warehouse", array()), "html", null, true);
        echo "\" readonly/>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class=\"block\">
        <h6 class=\"heading-hr\">
            <i class=\"icon-table\"></i> ";
        // line 284
        echo twig_escape_filter($this->env, (isset($context["gridtitle"]) ? $context["gridtitle"] : null), "html", null, true);
        echo "
        </h6>

        <div class=\"well\">
            <a id=\"item-add\" href=\"";
        // line 288
        echo twig_escape_filter($this->env, (isset($context["modal_form"]) ? $context["modal_form"] : null), "html", null, true);
        echo "?height=600&width=800\"  title=\"Form Item\" class=\"thickbox btn btn-primary\"><i class=\"icon-box-add\"></i>Tambah Data</a>
            <button onclick=\"_handleRemoveRows();\" class=\"btn btn-primary\"><i class=\"icon-box-add\"></i>Hapus Item</button>
        </div>
        ";
        // line 291
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array())) {
            // line 292
            echo "            <div class=\"panel-body\">
                <div class=\"form-group\">
                    <div class=\"row\">
                        <div class=\"col-sm-4\">
                            <label>Total harga masuk:</label>
                            <input type=\"text\" name=\"total_incoming\" class=\"total_incoming form-control cls-number\" value=\"";
            // line 297
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "total_incoming", array()), "html", null, true);
            echo "\" readonly/>
                        </div>

                        <div class=\"col-sm-4\">
                            <label>Total harga keluar:</label>
                            <input type=\"text\" name=\"total_outgoing\" class=\"total_outgoing form-control cls-number\" value=\"";
            // line 302
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "total_outgoing", array()), "html", null, true);
            echo "\" readonly/>
                        </div>
                    </div>
                </div>
                <div class=\"form-group\">
                    <div class=\"row\">
                        <div class=\"col-sm-4\">
                            <label>Selisih harga keluar masuk (out - in):</label>
                            <input type=\"text\" name=\"value_difference\" class=\"value_difference form-control cls-number\" value=\"";
            // line 310
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "value_difference", array()), "html", null, true);
            echo "\" readonly/>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        // line 316
        echo "        <div class=\"datatable\">
            <table id=\"table-detail\"
                   data-toolbar=\"#post\"
                   data-buttons-align=\"left\"
                   data-toolbar-align=\"right\"
                   data-click-to-select=\"true\"
                   data-single-select=\"true\"
                   data-height=\"480\">
            </table>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "stock/form_entry.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  453 => 316,  444 => 310,  433 => 302,  425 => 297,  418 => 292,  416 => 291,  410 => 288,  403 => 284,  388 => 272,  378 => 265,  365 => 255,  356 => 249,  344 => 240,  335 => 234,  331 => 233,  309 => 214,  304 => 213,  301 => 212,  269 => 184,  251 => 169,  217 => 138,  199 => 123,  180 => 107,  176 => 106,  172 => 105,  167 => 103,  82 => 21,  72 => 14,  68 => 13,  64 => 12,  60 => 11,  56 => 10,  52 => 9,  47 => 8,  44 => 7,  38 => 4,  33 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'index.twig' %}*/
/* {% block basecss %}*/
/*     <link rel="stylesheet" href="{{baseurl}}assets/plugins/bootstrap-table/dist/bootstrap-table.css"/>*/
/*     <link rel="stylesheet" href="{{baseurl}}assets/plugins/thickbox/css/thickbox.css"/>*/
/* {% endblock %}*/
/* */
/* {% block js %}*/
/*     <script type="text/javascript" src="{{baseurl}}assets/js/jquery-ui.min.js"></script>*/
/*     <script type="text/javascript" src="{{baseurl}}assets/plugins/bootstrap-table/dist/bootstrap-table.js"></script>*/
/*     <script type="text/javascript" src="{{baseurl}}assets/js/plugins/forms/select2.min.js"></script>*/
/*     <script type="text/javascript" src="{{baseurl}}assets/js/plugins/interface/moment.js"></script>*/
/*     <script type="text/javascript" src="{{baseurl}}assets/js/plugins/interface/timepicker.min.js"></script>*/
/*     <script type="text/javascript" src="{{baseurl}}assets/plugins/thickbox/js/thickbox.js"></script>*/
/*     <script type="text/javascript" src="{{baseurl}}assets/plugins/validate.min.js"></script>*/
/*     <script type="text/javascript" charset="utf-8">*/
/*         validate.validators.presence.options = {message: "Harap data diisi terlebih dahulu"};*/
/*         const ACTION_RECEIPT = 'MASUK';*/
/*         const ACTION_ISSUE = 'KELUAR';*/
/*         const ACTION_TRANSFER = 'TRANSFER';*/
/*         const ACTION_REPACK = 'REPACK';*/
/*         var tb_pathToImage = "{{baseurl}}assets/plugins/thickbox/img/ico_waiting.gif";*/
/*         var $griddetail = $('#table-detail');*/
/*         var warehouse = [];*/
/* */
/*         function insertData(data)*/
/*         {*/
/*             var results = [],*/
/*                     price = warehouse['tipe'] == ACTION_RECEIPT || warehouse['tipe'] === ACTION_REPACK && data['to_warehouse'] !== "" ? data['item_price'].replace(/,/gi, "") : data['item_price_rate'].replace(/,/gi, ""),*/
/*                     qty = data['item_qty'].replace(/,/gi, ""),*/
/*                     actual_qty = data['actual_qty'],*/
/*                     total_amount = parseInt(price) * parseInt(qty);*/
/*             var _id = Math.floor((Math.random() * 100000) + 1);*/
/*             _.assign(data, {id:_id,item_amount: total_amount, item_price: price, item_qty: qty, actual_qty: actual_qty});*/
/*             results.push(data);*/
/*             $griddetail.bootstrapTable('append', results);*/
/*             $griddetail.bootstrapTable('scrollTo', 'bottom');*/
/*             $griddetail.bootstrapTable('refresh');*/
/*         }*/
/*         function _handleRemoveRows()*/
/*         {*/
/*             var rows = $griddetail.bootstrapTable('getSelections');*/
/*             if(rows.length > 0) {*/
/*                 var data = [];*/
/*                 _.map(rows, function (row) {*/
/*                     data.push(row['id']);*/
/*                 });*/
/*                 console.log(data);*/
/*                 $griddetail.bootstrapTable('remove', {field: 'id', values: data});*/
/*             }*/
/*             $griddetail.bootstrapTable('uncheckAll');*/
/*             $griddetail.bootstrapTable('refresh');*/
/*         }*/
/*         function _pilihEntry(pilih)*/
/*         {*/
/*             var input = $('.from_warehouse');*/
/*             var output = $('.to_warehouse');*/
/*             $(".default_gudang").select2("val", "");*/
/* */
/*             // set switch stok entry tipe*/
/*             switch(pilih){*/
/*                 case ACTION_RECEIPT:*/
/*                     input.hide();*/
/*                     output.show();*/
/*                     break;*/
/*                 case ACTION_ISSUE:*/
/*                     input.show();*/
/*                     output.hide();*/
/*                     break;*/
/*                 default:*/
/*                     input.show();*/
/*                     output.show();*/
/*                     break;*/
/*             }*/
/*         }*/
/*         $(function () {*/
/*             var constraints = {*/
/*                 posting_date: {presence: true},*/
/*                 posting_time: {presence: true}*/
/*             };*/
/*             $('form#form-entry').submit(function(e) {*/
/*                 var dtset = $griddetail.bootstrapTable("getData");*/
/*                 var dd = validate.single(dtset, {presence: true});*/
/*                 var errors = validate($(this), constraints);*/
/*                 // cek data gudang*/
/*                 // jika RECEIPT syarat gudang tujuan harus diisi dan gudang asal harus kosong*/
/* */
/*                 // jika ISSUE syarat gudang asal harus disi dan gudang tujuan harus kosong*/
/*                 if(!errors && !dd){*/
/*                     var input = $("<input>")*/
/*                             .attr("type", "hidden")*/
/*                             .attr("name", "rows").val(JSON.stringify(dtset));*/
/*                     $('form#form-entry').append($(input));*/
/*                     console.log("ok");*/
/*                 } else {*/
/*                     Messenger().post({*/
/*                         message: "Data harap diisi terlebih dahulu",*/
/*                         type: 'error',*/
/*                         showCloseButton: true*/
/*                     });*/
/*                     e.preventDefault();*/
/*                 }*/
/*             });*/
/*             warehouse['tipe'] = "{{data.stok_entry_tipe}}";*/
/*             $griddetail.bootstrapTable({*/
/*                 url: '{{source_url}}',*/
/*                 method: '{{method}}',*/
/*                 columns: {{cols | raw}}*/
/*             });*/
/*             $(".datepicker").datepicker({*/
/*                 defaultDate: "now",*/
/*                 dateFormat: "yy-mm-dd",*/
/*                 showOtherMonths: true*/
/*             });*/
/*             $('.timepicker').timepicker({ 'scrollDefaultNow': true });*/
/*             $(".stok_entry_tipe").select2({*/
/*                 width: "100%",*/
/*                 minimumInputLength: 0,*/
/*                 placeholder: "Pilih Tipe Entry Stok",*/
/*                 id: function (bond) {*/
/*                     return bond.entry_tipe_nama;*/
/*                 },*/
/*                 ajax: {*/
/*                     url: '{{url_entry_tipe}}',*/
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
/*                         _pilihEntry(id);*/
/*                         $.ajax("{{url_entry_tipe}}", {*/
/*                             dataType: "json",*/
/*                             data: { search: id, offset: 0, limit: 1 }*/
/*                         }).done(function(data) { callback(data.rows[0]); });*/
/*                     }*/
/*                 },*/
/*                 escapeMarkup: function (markup) {*/
/*                     return markup;*/
/*                 },*/
/*                 formatSelection: function (repo) {*/
/*                     return repo.entry_tipe_nama;*/
/*                 },*/
/*                 formatResult: function (repo) {*/
/*                     return repo.entry_tipe_nama;*/
/*                 }*/
/*             });*/
/*             $(".stok_entry_tipe").on("change", function(e) {*/
/*                 var data = e.added;*/
/*                 _pilihEntry(data.entry_tipe_nama);*/
/*                 warehouse = [];*/
/*                 warehouse["tipe"] = data.entry_tipe_nama;*/
/*             });*/
/*             $(".default_gudang").select2({*/
/*                 allowClear: true,*/
/*                 width: "100%",*/
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
/*                         var parent = $(element).attr("name");*/
/*                         $.ajax("{{url_gudang}}", {*/
/*                             dataType: "json",*/
/*                             method: 'POST',*/
/*                             data: { search: id, offset: 0, limit: 1 }*/
/*                         }).done(function(data) {*/
/*                             warehouse[parent] = data.rows[0].id;*/
/*                             callback(data.rows[0]);*/
/*                         });*/
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
/*             $(".default_gudang").on("change", function(e) {*/
/*                 var data = e.added,*/
/*                         parent = $(this).attr("name");*/
/*                 warehouse[parent] = data.id;*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* {% block content %}*/
/*     <form id="form-entry" class="form-horizontal" action="{{url_submit}}" method="POST" role="form">*/
/*         <h6 class="heading-hr"><i class="icon-paragraph-right2"></i>{{ title }}</h6>*/
/* */
/*         <div class="form-actions text-right">*/
/*             <input type="submit" value="Submit" class="btn btn-primary">*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="col-sm-12">*/
/*                 <div class="block-inner">*/
/*                     <div class="block-inner">*/
/*                         <h6 class="heading-hr">*/
/*                             <i class="icon-user"></i> Entry Posting<small class="display-block">Form Entry Posting</small>*/
/*                         </h6>*/
/*                     </div>*/
/*                     <div class="panel-body">*/
/*                         <div class="form-group">*/
/*                             <div class="row">*/
/*                                 <div class="col-sm-6">*/
/*                                     <label>Kode Entry:</label>*/
/*                                     <input type="text" class="form-control" name="entry_kode" value="{{ data.entry_kode }}" readonly/>*/
/*                                     <input type="hidden" name="gen_id" value="{{ data.id }}" />*/
/*                                 </div>*/
/* */
/*                                 <div class="col-sm-6">*/
/*                                     <label>Tanggal Posting:</label>*/
/*                                     <input type="text" class="datepicker form-control" placeholder="Tanggal Posting Item"*/
/*                                            name="posting_date" value="{{ data.posting_date }}" />*/
/* */
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <div class="row">*/
/*                                 <div class="col-sm-6">*/
/*                                     <label>Jenis Entry:</label>*/
/*                                     <input type="hidden" name="stok_entry_tipe" class="stok_entry_tipe" value="{{data.stok_entry_tipe}}" readonly/>*/
/*                                 </div>*/
/* */
/*                                 <div class="col-sm-6">*/
/*                                     <label>Waktu Posting:</label>*/
/*                                     <input type="text" placeholder="Waktu Posting Item" class="timepicker form-control"*/
/*                                            name="posting_time" value="{{ data.posting_time }}"/>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="form-group">*/
/*                             <div class="row">*/
/*                                 <div class="col-sm-6">*/
/*                                     <span class="from_warehouse">*/
/*                                     <label>Lokasi Gudang Item Asal:</label>*/
/*                                     <input type="hidden" name="from_warehouse" class="default_gudang" value="{{data.from_warehouse}}" readonly/>*/
/*                                     </span>*/
/*                                 </div>*/
/* */
/*                                 <div class="col-sm-6">*/
/*                                     <span class="to_warehouse">*/
/*                                     <label>Lokasi Gudang Item Tujuan:</label>*/
/*                                     <input type="hidden" name="to_warehouse" class="default_gudang" value="{{data.to_warehouse}}" readonly/>*/
/*                                     </span>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </form>*/
/*     <div class="block">*/
/*         <h6 class="heading-hr">*/
/*             <i class="icon-table"></i> {{ gridtitle }}*/
/*         </h6>*/
/* */
/*         <div class="well">*/
/*             <a id="item-add" href="{{ modal_form }}?height=600&width=800"  title="Form Item" class="thickbox btn btn-primary"><i class="icon-box-add"></i>Tambah Data</a>*/
/*             <button onclick="_handleRemoveRows();" class="btn btn-primary"><i class="icon-box-add"></i>Hapus Item</button>*/
/*         </div>*/
/*         {% if data.id %}*/
/*             <div class="panel-body">*/
/*                 <div class="form-group">*/
/*                     <div class="row">*/
/*                         <div class="col-sm-4">*/
/*                             <label>Total harga masuk:</label>*/
/*                             <input type="text" name="total_incoming" class="total_incoming form-control cls-number" value="{{data.total_incoming}}" readonly/>*/
/*                         </div>*/
/* */
/*                         <div class="col-sm-4">*/
/*                             <label>Total harga keluar:</label>*/
/*                             <input type="text" name="total_outgoing" class="total_outgoing form-control cls-number" value="{{data.total_outgoing}}" readonly/>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <div class="row">*/
/*                         <div class="col-sm-4">*/
/*                             <label>Selisih harga keluar masuk (out - in):</label>*/
/*                             <input type="text" name="value_difference" class="value_difference form-control cls-number" value="{{data.value_difference}}" readonly/>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         {% endif %}*/
/*         <div class="datatable">*/
/*             <table id="table-detail"*/
/*                    data-toolbar="#post"*/
/*                    data-buttons-align="left"*/
/*                    data-toolbar-align="right"*/
/*                    data-click-to-select="true"*/
/*                    data-single-select="true"*/
/*                    data-height="480">*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
