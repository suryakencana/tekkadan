<?php

/* stock/form_item_entry.twig */
class __TwigTemplate_4db9144f7f4bcca102c68ca81ecd795b9d7baa747eee5f5b2171bb2dc0aa26bc extends Twig_Template
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
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/plugins/price.js\"></script>
<script type=\"text/javascript\">
var \$rate = \$(\"input[name=item_price]\");
var \$qty = \$(\"input[name=item_qty]\");
var value_item_kode = null;
var value_warehouse = null;
var validForm = {valid: false, msg: \"Harap data diisi terlebih dahulu\"};
var constraints = {
    item_kode: {presence: true},
    item_nama: {presence: true},
    item_qty: {presence: true},
    item_uom: {presence: true},
    item_price: {presence: true},
    actual_qty: {presence: true}
};

function _pilihEntryDetail(pilih)
{
    var input = \$('.from_warehouse--label');
    var output = \$('.to_warehouse--label');

    // set switch stok entry tipe
    switch(pilih){
        case ACTION_RECEIPT:
            input.hide();
            output.show();
            constraints[\"from_warehouse\"] = {presence: false};
            constraints[\"to_warehouse\"] = {presence: true};
            break;
        case ACTION_ISSUE:
            input.show();
            output.hide();
            constraints[\"from_warehouse\"] = {presence: true};
            constraints[\"to_warehouse\"] = {presence: false};
            break;
        case ACTION_TRANSFER:
            input.show();
            output.show();
            constraints[\"from_warehouse\"] = {
                presence: true,
                equality: {
                    attribute: \"to_warehouse\",
                    message: \"gudang asal dan tujuan tidak boleh sama\",
                    comparator: function(v1, v2) {
                        return JSON.stringify(v1) === JSON.stringify(v2) ? false : true;
                    }
                }
            };
            constraints[\"to_warehouse\"] = {presence: true};
            break;
        default:
            input.show();
            output.show();
            constraints[\"from_warehouse\"] = {presence: false};
            constraints[\"to_warehouse\"] = {presence: false};
            break;
    }
}
function cekStok(itemKode, warehouse)
{
    if(warehouse && itemKode) {
        console.log(warehouse);
        \$.get(\"";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["url_stok_balance"]) ? $context["url_stok_balance"] : null), "html", null, true);
        echo "\", {item_kode: itemKode, warehouse: warehouse})
                .done(function (data) {
                    var actual_qty = data.rows.length > 0 ? round(data.rows[0].balance, 0) : 0,
                            val_rate = data.rows.length > 0 ? round(data.rows[0].valuation_rate, 0) : 0;

                    \$('input[name=actual_qty]').val(actual_qty);
                    \$('input[name=item_price_rate]').val(val_rate);
                    \$('input[name=item_price]').val(val_rate);
                    \$rate.focus();
                    \$qty.focus();
                });
    }
}
function cekBatch(itemKode, warehouse, batch)
{
    if(warehouse && itemKode && batch) {
        \$.get(\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->urlFor("stok.balancebatch"), "html", null, true);
        echo "\", {item_kode: itemKode, warehouse: warehouse, batch_no:batch})
                .done(function (data) {
                    var actual_qty = data.rows.length > 0 ? data.rows[0].balance : 0;
                    \$('input[name=actual_batch]').val(round(actual_qty, 0));
                    \$('#actual_batch').html(\"Batch Aktual Item Stok \" + round(actual_qty, 2));
                });
    }
}
function cekDefaultGudang(action, parent, wid){

    if(parent != \"to_warehouse\" && action == ACTION_RECEIPT) { console.log(parent); return; }

    if(parent != \"from_warehouse\" && action == ACTION_ISSUE) { console.log(parent); return; }

    if(parent != \"from_warehouse\" && action == ACTION_TRANSFER) { console.log(parent); return; }

    value_warehouse = wid;
    cekStok(value_item_kode, value_warehouse);
}

function showErrors(form, errors) {
    _.each(form.querySelectorAll(\"input[name], select[name]\"), function(input) {
        if(errors && errors[input.name]) {
            Messenger().post({
                message: errors[input.name],
                type: 'error',
                showCloseButton: true
            });
        }
    });
}
\$(function(){

    _pilihEntryDetail(self.parent.warehouse['tipe']);

    \$(\".label_has_batch_no\").hide();
    \$('form#form-item-entry').submit(function(e){
        e.preventDefault();
        var errors = validate(\$(this), constraints);
        if(validForm[\"valid\"] && !errors) {
            var formArray = \$(this).serializeArray();
            var result = {};
            _.map(formArray, function (k, v) {
                var name = k['name'],
                        objs = {};
                objs[name] = k['value'];
                _.assign(result, objs);
            });

            if(parseInt(result[\"item_qty\"]) <= 0) {
                Messenger().post({
                    message: \"Jumlah Item Harus diisi\",
                    type: 'error',
                    showCloseButton: true
                });
                return;
            }

            if (self.parent.warehouse['tipe'] !== ACTION_RECEIPT) {
                if (self.parent.warehouse['tipe'] === ACTION_REPACK && empties(result['from_warehouse']))
                {
                   console.log(ACTION_REPACK);
                } else if (result[\"item_batch\"] !== \"\") {
                    if (parseInt(result[\"actual_batch\"]) < parseInt(result[\"item_qty\"])) {
                        Messenger().post({
                            message: \"Jumlah Stok Item tidak mencukupi\",
                            type: 'error',
                            showCloseButton: true
                        });
                        return;
                    }
                } else {
                    if (parseInt(result[\"actual_qty\"]) < parseInt(result[\"item_qty\"])) {
                        Messenger().post({
                            message: \"Jumlah Stok Item tidak mencukupi\",
                            type: 'error',
                            showCloseButton: true
                        });

                        return;
                    }
                }
            }
            self.parent.insertData(result);
            tb_remove();
        } else {
            var form = document.querySelector(\"form#form-item-entry\");
            showErrors(form, errors);
        }
    });

    \$('input[name=actual_qty]').priceFormat({prefix:'',thousandsSeparator:',',centsSeparator:'.',centsLimit: 2});
    \$rate.priceFormat({prefix:'',thousandsSeparator:',',centsSeparator:'',centsLimit: ''});
    \$qty.priceFormat({prefix:'',thousandsSeparator:',',centsSeparator:'',centsLimit: ''});
    \$rate.focus();
    \$qty.focus();

    \$(\".item_kode\").select2({
        width: \"100%\",
        minimumInputLength: 0,
        placeholder: \"Cari Item\",
        id: function (bond) {
            return bond.item_kode;
        },
        ajax: {
            url: '";
        // line 184
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
        // line 198
        echo twig_escape_filter($this->env, (isset($context["url_item"]) ? $context["url_item"] : null), "html", null, true);
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
        \$(\"input[name=item_nama]\").val(data.item_nama);
        \$(\".item_uom\").select2(\"val\", data.item_uom);
        \$(\".item_batch\").select2(\"val\", \"\");
        \$(\".label_has_batch_no\").hide();
        validForm['valid'] = true;
        constraints[\"item_batch\"] = {presence: false};
        if(data.has_batch_no) {
            \$(\".label_has_batch_no\").show();
            constraints[\"item_batch\"] = {presence: true};
            validForm['msg'] = 'harap diisi batch no item';
            validForm['valid'] = false;
        }
        value_item_kode = data.item_kode;
        cekStok(value_item_kode, value_warehouse);
    });
    \$(\".detail_gudang\").select2({
        allowClear: true,
        width: \"100%\",
        minimumInputLength: 0,
        placeholder: \"Cari lokasi gudang\",
        id: function (bond) {
            return bond.id;
        },
        ajax: {
            url: '";
        // line 251
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
                cekDefaultGudang(self.parent.warehouse['tipe'], parent, id);
                \$.ajax(\"";
        // line 267
        echo twig_escape_filter($this->env, (isset($context["url_gudang"]) ? $context["url_gudang"] : null), "html", null, true);
        echo "\", {
                    dataType: \"json\",
                    method: 'POST',
                    data: { search: id, offset: 0, limit: 1 }
                }).done(function(data) {
                    \$(\"input[name=\"+parent+\"_nama]\").val(data.rows[0].warehouse_nama);
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
    \$(\".detail_gudang\").on(\"change\", function(e) {
        var data = e.added,
                parent = \$(this).attr(\"name\");
        \$(\"input[name=\"+parent+\"_nama]\").val(data.warehouse_nama);
        cekDefaultGudang(self.parent.warehouse['tipe'], parent, data.id);
    });
    \$(\".item_uom\").select2({
        width: \"100%\",
        minimumInputLength: 0,
        placeholder: \"Cari Item Satuan\",
        id: function (bond) {
            return bond.uom_nama;
        },
        ajax: {
            url: '";
        // line 302
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
        // line 316
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
    \$(\".item_batch\").select2({
        width: \"100%\",
        minimumInputLength: 0,
        placeholder: \"Cari Batch no.\",
        id: function (bond) {
            return bond.id;
        },
        ajax: {
            url: '";
        // line 340
        echo twig_escape_filter($this->env, (isset($context["url_item_batch"]) ? $context["url_item_batch"] : null), "html", null, true);
        echo "',
            dataType: 'json',
            quietMillis: 100,
            data: function (term, page) {
                return {
                    search: term,
                    offset: (page - 1) * 15,
                    limit: 15,
                    item_kode: value_item_kode
                };
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
        // line 359
        echo twig_escape_filter($this->env, (isset($context["url_item_batch"]) ? $context["url_item_batch"] : null), "html", null, true);
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
            return repo.id;
        },
        formatResult: function (repo) {
            return repo.id;
        }
    });
    \$(\".item_batch\").on(\"change\", function(e){
        var data = e.added;
        validForm['valid'] = true;
        validForm['msg'] = \"Harap data diisi terlebih dahulu\";
        cekBatch(value_item_kode, value_warehouse, data.id);
    });
    console.log(self.parent.warehouse['to_warehouse']);
    \$(\"#to_warehouse\").select2(\"val\", self.parent.warehouse['to_warehouse']);
    \$(\"#from_warehouse\").select2(\"val\", self.parent.warehouse['from_warehouse']);
});
</script>
<form id=\"form-item-entry\" class=\"form-horizontal\" role=\"form\">
    <h6 class=\"heading-hr\"><i class=\"icon-paragraph-right2\"></i>";
        // line 387
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
                        <i class=\"icon-user\"></i> Input Item<small class=\"display-block\">Form Input Item</small>
                    </h6>
                </div>
                <div class=\"panel-body\">
                    <div class=\"form-group\">
                        <div class=\"row\">
                            <div class=\"col-sm-4\">
                                <label>Barcode:</label>
                                <input type=\"text\" name=\"barcode\" class=\"form-control\" value=\"";
        // line 406
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "barcode", array()), "html", null, true);
        echo "\"/>
                            </div>
                            <div class=\"col-sm-6 label_has_batch_no\">
                                <div class=\"chat\">
                                    <div class=\"message\">
                                        <div class=\"message-body\">
                                            Field Batch no. harus diisi
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"row\">
                            <div class=\"col-sm-4\">
                                <label>Kode Item:</label>
                                <input type=\"text\" name=\"item_kode\" class=\"item_kode\" value=\"";
        // line 423
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "item_kode", array()), "html", null, true);
        echo "\"/>
                            </div>

                            <div class=\"col-sm-6\">
                                <label>Nama Item:</label>
                                <input type=\"text\" name=\"item_nama\" class=\"form-control\" value=\"";
        // line 428
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "item_nama", array()), "html", null, true);
        echo "\" readonly/>
                            </div>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"row\">
                            <div class=\"col-sm-4\">
                                <span class=\"from_warehouse--label\">
                                    <label>Lokasi Gudang Item Asal:</label>
                                    <input type=\"hidden\" id=\"from_warehouse\" name=\"from_warehouse\" class=\"detail_gudang\" value=\"";
        // line 438
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "from_warehouse", array()), "html", null, true);
        echo "\" readonly/>
                                    <input type=\"hidden\" name=\"from_warehouse_nama\"/>
                                </span>
                            </div>

                            <div class=\"col-sm-4\">
                                <span class=\"to_warehouse--label\">
                                    <label>Lokasi Gudang Item Tujuan:</label>
                                    <input type=\"hidden\" id=\"to_warehouse\" name=\"to_warehouse\" class=\"detail_gudang\" value=\"";
        // line 446
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "to_warehouse", array()), "html", null, true);
        echo "\" readonly/>
                                    <input type=\"hidden\" name=\"to_warehouse_nama\" />
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <label>Keterangan:</label>
                                <textarea type=\"text\" name=\"keterangan\" class=\"form-control\">";
        // line 457
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
                        <i class=\"icon-notebook\"></i> Harga dan Quantity  <small class=\"display-block\">Harga dan Quantity Item</small>
                    </h6>
                </div>
                <div class=\"panel-body\">
                    <div class=\"form-group\">
                        <div class=\"row\">
                            <div class=\"col-sm-4\">
                                <label>Quantity / Jumlah:</label>
                                <input type=\"text\" name=\"item_qty\" class=\"form-control cls-number\" value=\"";
        // line 480
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "item_qty", array()), "html", null, true);
        echo "\"/>
                                <span class=\"help-block\">Total banyak item</span>
                            </div>
                            <div class=\"col-sm-4\">
                                <label>Satuan Item | Unit of Measure:</label>
                                <input type=\"hidden\" name=\"item_uom\" class=\"item_uom\" value=\"";
        // line 485
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "item_uom", array()), "html", null, true);
        echo "\"/>
                                <span class=\"help-block\">Satuan per item</span>
                            </div>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"row\">
                            <div class=\"col-sm-4\">
                                <label>Harga Item:</label>
                                <input type=\"text\" name=\"item_price\" class=\"form-control cls-number\" value=\"";
        // line 495
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "item_price", array()), "html", null, true);
        echo "\"/>
                                <input type=\"hidden\" name=\"item_price_rate\" class=\"form-control\" value=\"";
        // line 496
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "item_price", array()), "html", null, true);
        echo "\"/>
                                <span class=\"help-block\">Harga per Satuan Item </span>
                            </div>
                            <div class=\"col-sm-4\">
                                <label>Aktual Stok:</label>
                                <input type=\"text\" name=\"actual_qty\" class=\"form-control\" value=\"";
        // line 501
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "actual_qty", array()), "html", null, true);
        echo "\" readonly/>
                                <span class=\"help-block\">Jumlah Aktual Item Stok </span>
                            </div>
                            <div class=\"col-sm-4\">
                                <label>&nbsp;</label>
                                <a class=\"btn btn-default\" href=\"";
        // line 506
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->urlFor("batch.a001"), "html", null, true);
        echo "\" target=\"_blank\"><i class=\"icon-folder-plus3\"></i></a>
                                <span class=\"help-block\">Digunakan untuk membuat Batch no. baru</span>
                            </div>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"row\">
                            <div class=\"col-sm-4\">
                                <label>Serial no:</label>
                                <input type=\"hidden\" name=\"item_serial\" class=\"item_serial\" value=\"";
        // line 516
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "item_serial", array()), "html", null, true);
        echo "\"/>
                                <span class=\"help-block\">Harga per Satuan Item </span>
                            </div>
                            <div class=\"col-sm-4\">
                                <label>Batch no:</label>
                                <input type=\"hidden\" name=\"item_batch\" class=\"item_batch\" value=\"";
        // line 521
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "item_batch", array()), "html", null, true);
        echo "\"/>
                                <span class=\"help-block\">Batch item stok </span>
                                <span id=\"actual_batch\"></span>
                                <input type=\"hidden\" name=\"actual_batch\"/>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "stock/form_item_entry.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  615 => 521,  607 => 516,  594 => 506,  586 => 501,  578 => 496,  574 => 495,  561 => 485,  553 => 480,  527 => 457,  513 => 446,  502 => 438,  489 => 428,  481 => 423,  461 => 406,  439 => 387,  408 => 359,  386 => 340,  359 => 316,  342 => 302,  304 => 267,  285 => 251,  229 => 198,  212 => 184,  104 => 79,  85 => 63,  19 => 1,);
    }
}
/* <script type="text/javascript" src="{{baseurl}}assets/plugins/price.js"></script>*/
/* <script type="text/javascript">*/
/* var $rate = $("input[name=item_price]");*/
/* var $qty = $("input[name=item_qty]");*/
/* var value_item_kode = null;*/
/* var value_warehouse = null;*/
/* var validForm = {valid: false, msg: "Harap data diisi terlebih dahulu"};*/
/* var constraints = {*/
/*     item_kode: {presence: true},*/
/*     item_nama: {presence: true},*/
/*     item_qty: {presence: true},*/
/*     item_uom: {presence: true},*/
/*     item_price: {presence: true},*/
/*     actual_qty: {presence: true}*/
/* };*/
/* */
/* function _pilihEntryDetail(pilih)*/
/* {*/
/*     var input = $('.from_warehouse--label');*/
/*     var output = $('.to_warehouse--label');*/
/* */
/*     // set switch stok entry tipe*/
/*     switch(pilih){*/
/*         case ACTION_RECEIPT:*/
/*             input.hide();*/
/*             output.show();*/
/*             constraints["from_warehouse"] = {presence: false};*/
/*             constraints["to_warehouse"] = {presence: true};*/
/*             break;*/
/*         case ACTION_ISSUE:*/
/*             input.show();*/
/*             output.hide();*/
/*             constraints["from_warehouse"] = {presence: true};*/
/*             constraints["to_warehouse"] = {presence: false};*/
/*             break;*/
/*         case ACTION_TRANSFER:*/
/*             input.show();*/
/*             output.show();*/
/*             constraints["from_warehouse"] = {*/
/*                 presence: true,*/
/*                 equality: {*/
/*                     attribute: "to_warehouse",*/
/*                     message: "gudang asal dan tujuan tidak boleh sama",*/
/*                     comparator: function(v1, v2) {*/
/*                         return JSON.stringify(v1) === JSON.stringify(v2) ? false : true;*/
/*                     }*/
/*                 }*/
/*             };*/
/*             constraints["to_warehouse"] = {presence: true};*/
/*             break;*/
/*         default:*/
/*             input.show();*/
/*             output.show();*/
/*             constraints["from_warehouse"] = {presence: false};*/
/*             constraints["to_warehouse"] = {presence: false};*/
/*             break;*/
/*     }*/
/* }*/
/* function cekStok(itemKode, warehouse)*/
/* {*/
/*     if(warehouse && itemKode) {*/
/*         console.log(warehouse);*/
/*         $.get("{{ url_stok_balance }}", {item_kode: itemKode, warehouse: warehouse})*/
/*                 .done(function (data) {*/
/*                     var actual_qty = data.rows.length > 0 ? round(data.rows[0].balance, 0) : 0,*/
/*                             val_rate = data.rows.length > 0 ? round(data.rows[0].valuation_rate, 0) : 0;*/
/* */
/*                     $('input[name=actual_qty]').val(actual_qty);*/
/*                     $('input[name=item_price_rate]').val(val_rate);*/
/*                     $('input[name=item_price]').val(val_rate);*/
/*                     $rate.focus();*/
/*                     $qty.focus();*/
/*                 });*/
/*     }*/
/* }*/
/* function cekBatch(itemKode, warehouse, batch)*/
/* {*/
/*     if(warehouse && itemKode && batch) {*/
/*         $.get("{{ urlFor('stok.balancebatch') }}", {item_kode: itemKode, warehouse: warehouse, batch_no:batch})*/
/*                 .done(function (data) {*/
/*                     var actual_qty = data.rows.length > 0 ? data.rows[0].balance : 0;*/
/*                     $('input[name=actual_batch]').val(round(actual_qty, 0));*/
/*                     $('#actual_batch').html("Batch Aktual Item Stok " + round(actual_qty, 2));*/
/*                 });*/
/*     }*/
/* }*/
/* function cekDefaultGudang(action, parent, wid){*/
/* */
/*     if(parent != "to_warehouse" && action == ACTION_RECEIPT) { console.log(parent); return; }*/
/* */
/*     if(parent != "from_warehouse" && action == ACTION_ISSUE) { console.log(parent); return; }*/
/* */
/*     if(parent != "from_warehouse" && action == ACTION_TRANSFER) { console.log(parent); return; }*/
/* */
/*     value_warehouse = wid;*/
/*     cekStok(value_item_kode, value_warehouse);*/
/* }*/
/* */
/* function showErrors(form, errors) {*/
/*     _.each(form.querySelectorAll("input[name], select[name]"), function(input) {*/
/*         if(errors && errors[input.name]) {*/
/*             Messenger().post({*/
/*                 message: errors[input.name],*/
/*                 type: 'error',*/
/*                 showCloseButton: true*/
/*             });*/
/*         }*/
/*     });*/
/* }*/
/* $(function(){*/
/* */
/*     _pilihEntryDetail(self.parent.warehouse['tipe']);*/
/* */
/*     $(".label_has_batch_no").hide();*/
/*     $('form#form-item-entry').submit(function(e){*/
/*         e.preventDefault();*/
/*         var errors = validate($(this), constraints);*/
/*         if(validForm["valid"] && !errors) {*/
/*             var formArray = $(this).serializeArray();*/
/*             var result = {};*/
/*             _.map(formArray, function (k, v) {*/
/*                 var name = k['name'],*/
/*                         objs = {};*/
/*                 objs[name] = k['value'];*/
/*                 _.assign(result, objs);*/
/*             });*/
/* */
/*             if(parseInt(result["item_qty"]) <= 0) {*/
/*                 Messenger().post({*/
/*                     message: "Jumlah Item Harus diisi",*/
/*                     type: 'error',*/
/*                     showCloseButton: true*/
/*                 });*/
/*                 return;*/
/*             }*/
/* */
/*             if (self.parent.warehouse['tipe'] !== ACTION_RECEIPT) {*/
/*                 if (self.parent.warehouse['tipe'] === ACTION_REPACK && empties(result['from_warehouse']))*/
/*                 {*/
/*                    console.log(ACTION_REPACK);*/
/*                 } else if (result["item_batch"] !== "") {*/
/*                     if (parseInt(result["actual_batch"]) < parseInt(result["item_qty"])) {*/
/*                         Messenger().post({*/
/*                             message: "Jumlah Stok Item tidak mencukupi",*/
/*                             type: 'error',*/
/*                             showCloseButton: true*/
/*                         });*/
/*                         return;*/
/*                     }*/
/*                 } else {*/
/*                     if (parseInt(result["actual_qty"]) < parseInt(result["item_qty"])) {*/
/*                         Messenger().post({*/
/*                             message: "Jumlah Stok Item tidak mencukupi",*/
/*                             type: 'error',*/
/*                             showCloseButton: true*/
/*                         });*/
/* */
/*                         return;*/
/*                     }*/
/*                 }*/
/*             }*/
/*             self.parent.insertData(result);*/
/*             tb_remove();*/
/*         } else {*/
/*             var form = document.querySelector("form#form-item-entry");*/
/*             showErrors(form, errors);*/
/*         }*/
/*     });*/
/* */
/*     $('input[name=actual_qty]').priceFormat({prefix:'',thousandsSeparator:',',centsSeparator:'.',centsLimit: 2});*/
/*     $rate.priceFormat({prefix:'',thousandsSeparator:',',centsSeparator:'',centsLimit: ''});*/
/*     $qty.priceFormat({prefix:'',thousandsSeparator:',',centsSeparator:'',centsLimit: ''});*/
/*     $rate.focus();*/
/*     $qty.focus();*/
/* */
/*     $(".item_kode").select2({*/
/*         width: "100%",*/
/*         minimumInputLength: 0,*/
/*         placeholder: "Cari Item",*/
/*         id: function (bond) {*/
/*             return bond.item_kode;*/
/*         },*/
/*         ajax: {*/
/*             url: '{{url_item}}',*/
/*             dataType: 'json',*/
/*             quietMillis: 100,*/
/*             data: function (term, page) {*/
/*                 return { search: term, offset: (page - 1) * 15, limit: 15 };*/
/*             },*/
/*             results: function (data, page) {*/
/*                 var more = (page * 15) < data.total;*/
/*                 return {results: data.rows, more: more};*/
/*             }*/
/*         },*/
/*         initSelection: function(element, callback) {*/
/*             var id = $(element).val();*/
/*             if (id !== "") {*/
/*                 $.ajax("{{url_item}}", {*/
/*                     dataType: "json",*/
/*                     data: { search: id, offset: 0, limit: 1 }*/
/*                 }).done(function(data) { callback(data.rows[0]); });*/
/*             }*/
/*         },*/
/*         escapeMarkup: function (markup) {*/
/*             return markup;*/
/*         },*/
/*         formatSelection: function (repo) {*/
/*             return repo.item_kode;*/
/*         },*/
/*         formatResult: function (repo) {*/
/*             var markup = '<div class="row">' +*/
/*                     '<div class="col-sm-12">' + repo.item_nama + '</div>' +*/
/*                     '<ul style="font-size: 8px;">' +*/
/*                     '<li class="col-sm-12">'+ repo.item_kode +'</li>' +*/
/*                     '<li class="col-sm-12">'+ repo.item_uom +'</li>' +*/
/*                     '<li class="col-sm-12">'+ repo.item_principal +'</li>' +*/
/*                     '<li class="col-sm-12">'+ repo.item_grup+'</li>' +*/
/*                     '</ul>';*/
/* */
/*             markup += '</div>';*/
/* */
/*             return markup;*/
/*         }*/
/*     });*/
/*     $(".item_kode").on("change", function(e) {*/
/*         var data = e.added;*/
/*         $("input[name=item_nama]").val(data.item_nama);*/
/*         $(".item_uom").select2("val", data.item_uom);*/
/*         $(".item_batch").select2("val", "");*/
/*         $(".label_has_batch_no").hide();*/
/*         validForm['valid'] = true;*/
/*         constraints["item_batch"] = {presence: false};*/
/*         if(data.has_batch_no) {*/
/*             $(".label_has_batch_no").show();*/
/*             constraints["item_batch"] = {presence: true};*/
/*             validForm['msg'] = 'harap diisi batch no item';*/
/*             validForm['valid'] = false;*/
/*         }*/
/*         value_item_kode = data.item_kode;*/
/*         cekStok(value_item_kode, value_warehouse);*/
/*     });*/
/*     $(".detail_gudang").select2({*/
/*         allowClear: true,*/
/*         width: "100%",*/
/*         minimumInputLength: 0,*/
/*         placeholder: "Cari lokasi gudang",*/
/*         id: function (bond) {*/
/*             return bond.id;*/
/*         },*/
/*         ajax: {*/
/*             url: '{{url_gudang}}',*/
/*             dataType: 'json',*/
/*             quietMillis: 100,*/
/*             data: function (term, page) {*/
/*                 return { search: term, offset: (page - 1) * 15, limit: 15 };*/
/*             },*/
/*             results: function (data, page) {*/
/*                 var more = (page * 15) < data.total;*/
/*                 return {results: data.rows, more: more};*/
/*             }*/
/*         },*/
/*         initSelection: function(element, callback) {*/
/*             var id = $(element).val();*/
/*             if (id !== "") {*/
/*                 var parent = $(element).attr("name");*/
/*                 cekDefaultGudang(self.parent.warehouse['tipe'], parent, id);*/
/*                 $.ajax("{{url_gudang}}", {*/
/*                     dataType: "json",*/
/*                     method: 'POST',*/
/*                     data: { search: id, offset: 0, limit: 1 }*/
/*                 }).done(function(data) {*/
/*                     $("input[name="+parent+"_nama]").val(data.rows[0].warehouse_nama);*/
/*                     callback(data.rows[0]);*/
/*                 });*/
/* */
/*             }*/
/*         },*/
/*         escapeMarkup: function (markup) {*/
/*             return markup;*/
/*         },*/
/*         formatSelection: function (repo) {*/
/*             return repo.warehouse_nama;*/
/*         },*/
/*         formatResult: function (repo) {*/
/*             return repo.warehouse_nama;*/
/*         }*/
/*     });*/
/*     $(".detail_gudang").on("change", function(e) {*/
/*         var data = e.added,*/
/*                 parent = $(this).attr("name");*/
/*         $("input[name="+parent+"_nama]").val(data.warehouse_nama);*/
/*         cekDefaultGudang(self.parent.warehouse['tipe'], parent, data.id);*/
/*     });*/
/*     $(".item_uom").select2({*/
/*         width: "100%",*/
/*         minimumInputLength: 0,*/
/*         placeholder: "Cari Item Satuan",*/
/*         id: function (bond) {*/
/*             return bond.uom_nama;*/
/*         },*/
/*         ajax: {*/
/*             url: '{{url_item_uom}}',*/
/*             dataType: 'json',*/
/*             quietMillis: 100,*/
/*             data: function (term, page) {*/
/*                 return { search: term, offset: (page - 1) * 15, limit: 15 };*/
/*             },*/
/*             results: function (data, page) {*/
/*                 var more = (page * 15) < data.total;*/
/*                 return {results: data.rows, more: more};*/
/*             }*/
/*         },*/
/*         initSelection: function(element, callback) {*/
/*             var id = $(element).val();*/
/*             if (id !== "") {*/
/*                 $.ajax("{{url_item_uom}}", {*/
/*                     dataType: "json",*/
/*                     data: { search: id, offset: 0, limit: 1 }*/
/*                 }).done(function(data) { callback(data.rows[0]); });*/
/*             }*/
/*         },*/
/*         escapeMarkup: function (markup) {*/
/*             return markup;*/
/*         },*/
/*         formatSelection: function (repo) {*/
/*             return repo.uom_nama;*/
/*         },*/
/*         formatResult: function (repo) {*/
/*             return repo.uom_nama;*/
/*         }*/
/*     });*/
/*     $(".item_batch").select2({*/
/*         width: "100%",*/
/*         minimumInputLength: 0,*/
/*         placeholder: "Cari Batch no.",*/
/*         id: function (bond) {*/
/*             return bond.id;*/
/*         },*/
/*         ajax: {*/
/*             url: '{{url_item_batch}}',*/
/*             dataType: 'json',*/
/*             quietMillis: 100,*/
/*             data: function (term, page) {*/
/*                 return {*/
/*                     search: term,*/
/*                     offset: (page - 1) * 15,*/
/*                     limit: 15,*/
/*                     item_kode: value_item_kode*/
/*                 };*/
/*             },*/
/*             results: function (data, page) {*/
/*                 var more = (page * 15) < data.total;*/
/*                 return {results: data.rows, more: more};*/
/*             }*/
/*         },*/
/*         initSelection: function(element, callback) {*/
/*             var id = $(element).val();*/
/*             if (id !== "") {*/
/*                 $.ajax("{{url_item_batch}}", {*/
/*                     dataType: "json",*/
/*                     data: { search: id, offset: 0, limit: 1 }*/
/*                 }).done(function(data) { callback(data.rows[0]); });*/
/*             }*/
/*         },*/
/*         escapeMarkup: function (markup) {*/
/*             return markup;*/
/*         },*/
/*         formatSelection: function (repo) {*/
/*             return repo.id;*/
/*         },*/
/*         formatResult: function (repo) {*/
/*             return repo.id;*/
/*         }*/
/*     });*/
/*     $(".item_batch").on("change", function(e){*/
/*         var data = e.added;*/
/*         validForm['valid'] = true;*/
/*         validForm['msg'] = "Harap data diisi terlebih dahulu";*/
/*         cekBatch(value_item_kode, value_warehouse, data.id);*/
/*     });*/
/*     console.log(self.parent.warehouse['to_warehouse']);*/
/*     $("#to_warehouse").select2("val", self.parent.warehouse['to_warehouse']);*/
/*     $("#from_warehouse").select2("val", self.parent.warehouse['from_warehouse']);*/
/* });*/
/* </script>*/
/* <form id="form-item-entry" class="form-horizontal" role="form">*/
/*     <h6 class="heading-hr"><i class="icon-paragraph-right2"></i>{{ title }}</h6>*/
/* */
/*     <div class="form-actions text-right">*/
/*         <input type="submit" value="Submit" class="btn btn-primary">*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <div class="col-sm-12">*/
/*             <div class="block-inner">*/
/*                 <div class="block-inner">*/
/*                     <h6 class="heading-hr">*/
/*                         <i class="icon-user"></i> Input Item<small class="display-block">Form Input Item</small>*/
/*                     </h6>*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     <div class="form-group">*/
/*                         <div class="row">*/
/*                             <div class="col-sm-4">*/
/*                                 <label>Barcode:</label>*/
/*                                 <input type="text" name="barcode" class="form-control" value="{{ data.barcode }}"/>*/
/*                             </div>*/
/*                             <div class="col-sm-6 label_has_batch_no">*/
/*                                 <div class="chat">*/
/*                                     <div class="message">*/
/*                                         <div class="message-body">*/
/*                                             Field Batch no. harus diisi*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <div class="row">*/
/*                             <div class="col-sm-4">*/
/*                                 <label>Kode Item:</label>*/
/*                                 <input type="text" name="item_kode" class="item_kode" value="{{ data.item_kode }}"/>*/
/*                             </div>*/
/* */
/*                             <div class="col-sm-6">*/
/*                                 <label>Nama Item:</label>*/
/*                                 <input type="text" name="item_nama" class="form-control" value="{{ data.item_nama }}" readonly/>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <div class="row">*/
/*                             <div class="col-sm-4">*/
/*                                 <span class="from_warehouse--label">*/
/*                                     <label>Lokasi Gudang Item Asal:</label>*/
/*                                     <input type="hidden" id="from_warehouse" name="from_warehouse" class="detail_gudang" value="{{data.from_warehouse}}" readonly/>*/
/*                                     <input type="hidden" name="from_warehouse_nama"/>*/
/*                                 </span>*/
/*                             </div>*/
/* */
/*                             <div class="col-sm-4">*/
/*                                 <span class="to_warehouse--label">*/
/*                                     <label>Lokasi Gudang Item Tujuan:</label>*/
/*                                     <input type="hidden" id="to_warehouse" name="to_warehouse" class="detail_gudang" value="{{data.to_warehouse}}" readonly/>*/
/*                                     <input type="hidden" name="to_warehouse_nama" />*/
/*                                 </span>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <div class="row">*/
/*                             <div class="col-sm-12">*/
/*                                 <label>Keterangan:</label>*/
/*                                 <textarea type="text" name="keterangan" class="form-control">{{data.keterangan}}</textarea>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <div class="col-sm-12">*/
/*             <div class="block-inner">*/
/*                 <div class="block-inner">*/
/*                     <h6 class="heading-hr">*/
/*                         <i class="icon-notebook"></i> Harga dan Quantity  <small class="display-block">Harga dan Quantity Item</small>*/
/*                     </h6>*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     <div class="form-group">*/
/*                         <div class="row">*/
/*                             <div class="col-sm-4">*/
/*                                 <label>Quantity / Jumlah:</label>*/
/*                                 <input type="text" name="item_qty" class="form-control cls-number" value="{{data.item_qty}}"/>*/
/*                                 <span class="help-block">Total banyak item</span>*/
/*                             </div>*/
/*                             <div class="col-sm-4">*/
/*                                 <label>Satuan Item | Unit of Measure:</label>*/
/*                                 <input type="hidden" name="item_uom" class="item_uom" value="{{data.item_uom}}"/>*/
/*                                 <span class="help-block">Satuan per item</span>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <div class="row">*/
/*                             <div class="col-sm-4">*/
/*                                 <label>Harga Item:</label>*/
/*                                 <input type="text" name="item_price" class="form-control cls-number" value="{{data.item_price}}"/>*/
/*                                 <input type="hidden" name="item_price_rate" class="form-control" value="{{data.item_price}}"/>*/
/*                                 <span class="help-block">Harga per Satuan Item </span>*/
/*                             </div>*/
/*                             <div class="col-sm-4">*/
/*                                 <label>Aktual Stok:</label>*/
/*                                 <input type="text" name="actual_qty" class="form-control" value="{{data.actual_qty}}" readonly/>*/
/*                                 <span class="help-block">Jumlah Aktual Item Stok </span>*/
/*                             </div>*/
/*                             <div class="col-sm-4">*/
/*                                 <label>&nbsp;</label>*/
/*                                 <a class="btn btn-default" href="{{ urlFor('batch.a001') }}" target="_blank"><i class="icon-folder-plus3"></i></a>*/
/*                                 <span class="help-block">Digunakan untuk membuat Batch no. baru</span>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <div class="row">*/
/*                             <div class="col-sm-4">*/
/*                                 <label>Serial no:</label>*/
/*                                 <input type="hidden" name="item_serial" class="item_serial" value="{{data.item_serial}}"/>*/
/*                                 <span class="help-block">Harga per Satuan Item </span>*/
/*                             </div>*/
/*                             <div class="col-sm-4">*/
/*                                 <label>Batch no:</label>*/
/*                                 <input type="hidden" name="item_batch" class="item_batch" value="{{data.item_batch}}"/>*/
/*                                 <span class="help-block">Batch item stok </span>*/
/*                                 <span id="actual_batch"></span>*/
/*                                 <input type="hidden" name="actual_batch"/>*/
/*                             </div>*/
/* */
/*                         </div>*/
/*                     </div>*/
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </form>*/
