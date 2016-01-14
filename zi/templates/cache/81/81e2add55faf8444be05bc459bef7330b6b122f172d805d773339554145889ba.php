<?php

/* selling/form_penjualan.twig */
class __TwigTemplate_3796a72113c85c7c55dd21b527dca51927f4a7e297e7b5a3ba56ff193dc43eb5 extends Twig_Template
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
        echo "<script type=\"text/javascript\">
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
    actual_qty: {presence: true},
    dosis: {presence: true}
};
function cekStok(itemKode, warehouse)
{

    if(warehouse && itemKode) {
        console.log(warehouse);
        \$.get(\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["url_stok_balance"]) ? $context["url_stok_balance"] : null), "html", null, true);
        echo "\", {item_kode: itemKode, warehouse: warehouse})
                .done(function (data) {
                    var actual_qty = data.rows.length > 0 ? round(data.rows[0].balance, 0) : 0;
                    \$('input[name=actual_qty]').val(actual_qty);
                });
    }
}

function cekBatch(itemKode, warehouse, batch)
{

    if(warehouse && itemKode && batch) {
        \$.get(\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->urlFor("stok.balancebatch"), "html", null, true);
        echo "\", {item_kode: itemKode, warehouse: warehouse, batch_no:batch})
                .done(function (data) {
                    var actual_qty = data.rows.length > 0 ? data.rows[0].balance : 0;
                    \$('input[name=actual_batch]').val(round(actual_qty, 0));
                    \$('#actual_batch').html(\"Batch Aktual Item Stok \" + round(actual_qty, 2));
                });
    }
}//self.parent.paramsPage[\"jenis-tagihan\"]
function cekPricelist(id, pricelist)
{
    if(id) {
        \$.ajax(\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["url_price_list"]) ? $context["url_price_list"] : null), "html", null, true);
        echo "\", {
            dataType: \"json\",
            data: {item_kode: id, price_list: pricelist}
        }).done(function (data) {
            //basic_rate
            var basic_rate = data.rows.length > 0 ? data.rows[0].price_list_rate : 0;
            \$('input[name=basic_rate]').val(round(basic_rate, 0));
            \$('input[name=basic_rate]').focus();
            \$('input[name=item_price]').val(round(basic_rate, 0));
            \$('input[name=item_price]').focus();
            \$('input[name=item_qty]').focus();
        });
    }
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

    \$(\".label_has_batch_no\").hide();
    \$('form#form_item_entry').submit(function(e){
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

            if (result[\"item_batch\"] !== \"\") {
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
            self.parent.insertData(result);
            self.parent.focus();
            tb_remove();

        } else {
            var form = document.querySelector(\"form#form_item_entry\");
            showErrors(form, errors);
        }

    });
    \$('input[name=actual_qty]').priceFormat({prefix:'',thousandsSeparator:',',centsSeparator:'',centsLimit: ''});
    \$('input[name=basic_rate]').priceFormat({prefix:'',thousandsSeparator:',',centsSeparator:'',centsLimit: ''});
    \$rate.priceFormat({prefix:'',thousandsSeparator:',',centsSeparator:'',centsLimit: ''});
    \$qty.priceFormat({prefix:'',thousandsSeparator:',',centsSeparator:'',centsLimit: ''});
    \$('input[name=basic_rate]').focus();
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
        // line 140
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
        // line 154
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
        if(data.has_batch_no) {
            \$(\".label_has_batch_no\").show();
            constraints[\"item_batch\"] = {presence: true};
            validForm['msg'] = 'harap diisi batch no item';
            validForm['valid'] = false;
        }
        value_item_kode = data.item_kode;
        cekStok(value_item_kode, value_warehouse);
        cekPricelist(data.item_kode, self.parent.paramsPage[\"jenis-tagihan\"]);
    });
    \$(\".detail_gudang\").select2({
        width: \"100%\",
        minimumInputLength: 0,
        placeholder: \"Cari lokasi gudang\",
        id: function (bond) {
            return bond.id;
        },
        ajax: {
            url: '";
        // line 206
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
                value_warehouse = id;
                var parent = \$(element).attr(\"name\");
                \$.ajax(\"";
        // line 222
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
        value_warehouse = data.id;
        cekStok(value_item_kode, value_warehouse);
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
        // line 258
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
        // line 272
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
        // line 296
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
        // line 315
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
        cekPricelist(value_item_kode, self.parent.paramsPage[\"jenis-tagihan\"]);
    });
    \$(\"input[name=dosis]\").select2({
        width: \"100%\",
        minimumInputLength: 0,
        placeholder: \"Pilih Dosis\",
        id: function (bond) {
            return bond.dosis;
        },
        ajax: {
            url: '";
        // line 346
        echo twig_escape_filter($this->env, (isset($context["url_dosis"]) ? $context["url_dosis"] : null), "html", null, true);
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
        // line 360
        echo twig_escape_filter($this->env, (isset($context["url_dosis"]) ? $context["url_dosis"] : null), "html", null, true);
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
            return repo.dosis;
        },
        formatResult: function (repo) {
            return repo.dosis;
        }
    });
    \$(\"#from_warehouse\").select2(\"val\", \"7c87a8d69bc21df012ae8e3b17c5fff7\");
    \$(\"#jenis_tagihan\").html(self.parent.paramsPage[\"jenis-tagihan\"]);
    /*    \$(\"#to_warehouse\").select2(\"val\", self.parent.warehouse['to_warehouse']);
     \$(\"#from_warehouse\").select2(\"val\", self.parent.warehouse['from_warehouse']);*/
});
</script>
<form id=\"form_item_entry\" class=\"form-horizontal\" role=\"form\">
    <h6 class=\"heading-hr\"><i class=\"icon-paragraph-right2\"></i>";
        // line 383
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</h6>
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"block-inner\">
                <div class=\"statistics-info\">
                    <a href=\"#\" title=\"\" class=\"bg-info\"><i class=\"icon-cart-plus\"></i></a>
                    <strong id=\"jenis_tagihan\"></strong>
                </div>
                <div class=\"progress progress-micro\">
                    <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"90\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 35%;\">
                        <span class=\"sr-only\">30% Complete</span>
                    </div>
                </div>
                <span>Jenis Tagihan</span>
            </div>
        </div>
    </div>

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
        // line 418
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
        // line 435
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "item_kode", array()), "html", null, true);
        echo "\"/>
                            </div>

                            <div class=\"col-sm-6\">
                                <label>Nama Item:</label>
                                <input type=\"text\" name=\"item_nama\" class=\"form-control\" value=\"";
        // line 440
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
        // line 450
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "from_warehouse", array()), "html", null, true);
        echo "\" readonly/>
                                    <input type=\"hidden\" name=\"from_warehouse_nama\"/>
                                    </span>
                            </div>

                            <div class=\"col-sm-4\">
                                <label>Dosis:</label>
                                <input type=\"hidden\" id=\"dosis\" name=\"dosis\" class=\"dosis\" value=\"";
        // line 457
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "dosis", array()), "html", null, true);
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
                                <label>Aktual Stok:</label>
                                <input type=\"text\" name=\"actual_qty\" class=\"form-control cls-number\" value=\"";
        // line 495
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "actual_qty", array()), "html", null, true);
        echo "\" readonly/>
                                <span class=\"help-block\">Jumlah Aktual Item Stok </span>
                            </div>
                            <div class=\"col-sm-4\">
                                <label>Harga Dasar Item Obat:</label>
                                <input type=\"text\" name=\"basic_rate\" class=\"form-control cls-number\" value=\"";
        // line 500
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "basic_rate", array()), "html", null, true);
        echo "\" readonly/>
                                <span class=\"help-block\">Harga Dasar Item Obat </span>
                            </div>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"row\">
                            <div class=\"col-sm-4\">
                                <label>Harga Item:</label>
                                <input type=\"text\" name=\"item_price\" class=\"form-control cls-number\" value=\"";
        // line 510
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "item_price", array()), "html", null, true);
        echo "\"/>
                                <span class=\"help-block\">Harga per Satuan Item </span>
                            </div>
                            <div class=\"col-sm-4\">
                                <label>&nbsp;</label>
                                <a class=\"btn btn-default\" href=\"";
        // line 515
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
        // line 525
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "item_serial", array()), "html", null, true);
        echo "\"/>
                                <span class=\"help-block\">Harga per Satuan Item </span>
                            </div>
                            <div class=\"col-sm-4\">
                                <label>Batch no:</label>
                                <input type=\"hidden\" name=\"item_batch\" class=\"item_batch\" value=\"";
        // line 530
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
        return "selling/form_penjualan.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  628 => 530,  620 => 525,  607 => 515,  599 => 510,  586 => 500,  578 => 495,  565 => 485,  557 => 480,  531 => 457,  521 => 450,  508 => 440,  500 => 435,  480 => 418,  442 => 383,  416 => 360,  399 => 346,  365 => 315,  343 => 296,  316 => 272,  299 => 258,  260 => 222,  241 => 206,  186 => 154,  169 => 140,  70 => 44,  56 => 33,  41 => 21,  19 => 1,);
    }
}
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
/*     actual_qty: {presence: true},*/
/*     dosis: {presence: true}*/
/* };*/
/* function cekStok(itemKode, warehouse)*/
/* {*/
/* */
/*     if(warehouse && itemKode) {*/
/*         console.log(warehouse);*/
/*         $.get("{{ url_stok_balance }}", {item_kode: itemKode, warehouse: warehouse})*/
/*                 .done(function (data) {*/
/*                     var actual_qty = data.rows.length > 0 ? round(data.rows[0].balance, 0) : 0;*/
/*                     $('input[name=actual_qty]').val(actual_qty);*/
/*                 });*/
/*     }*/
/* }*/
/* */
/* function cekBatch(itemKode, warehouse, batch)*/
/* {*/
/* */
/*     if(warehouse && itemKode && batch) {*/
/*         $.get("{{ urlFor('stok.balancebatch') }}", {item_kode: itemKode, warehouse: warehouse, batch_no:batch})*/
/*                 .done(function (data) {*/
/*                     var actual_qty = data.rows.length > 0 ? data.rows[0].balance : 0;*/
/*                     $('input[name=actual_batch]').val(round(actual_qty, 0));*/
/*                     $('#actual_batch').html("Batch Aktual Item Stok " + round(actual_qty, 2));*/
/*                 });*/
/*     }*/
/* }//self.parent.paramsPage["jenis-tagihan"]*/
/* function cekPricelist(id, pricelist)*/
/* {*/
/*     if(id) {*/
/*         $.ajax("{{url_price_list}}", {*/
/*             dataType: "json",*/
/*             data: {item_kode: id, price_list: pricelist}*/
/*         }).done(function (data) {*/
/*             //basic_rate*/
/*             var basic_rate = data.rows.length > 0 ? data.rows[0].price_list_rate : 0;*/
/*             $('input[name=basic_rate]').val(round(basic_rate, 0));*/
/*             $('input[name=basic_rate]').focus();*/
/*             $('input[name=item_price]').val(round(basic_rate, 0));*/
/*             $('input[name=item_price]').focus();*/
/*             $('input[name=item_qty]').focus();*/
/*         });*/
/*     }*/
/* }*/
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
/*     $(".label_has_batch_no").hide();*/
/*     $('form#form_item_entry').submit(function(e){*/
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
/*             if (result["item_batch"] !== "") {*/
/*                 if (parseInt(result["actual_batch"]) < parseInt(result["item_qty"])) {*/
/*                     Messenger().post({*/
/*                         message: "Jumlah Stok Item tidak mencukupi",*/
/*                         type: 'error',*/
/*                         showCloseButton: true*/
/*                     });*/
/*                     return;*/
/*                 }*/
/*             } else {*/
/*                 if (parseInt(result["actual_qty"]) < parseInt(result["item_qty"])) {*/
/*                     Messenger().post({*/
/*                         message: "Jumlah Stok Item tidak mencukupi",*/
/*                         type: 'error',*/
/*                         showCloseButton: true*/
/*                     });*/
/* */
/*                     return;*/
/*                 }*/
/*             }*/
/*             self.parent.insertData(result);*/
/*             self.parent.focus();*/
/*             tb_remove();*/
/* */
/*         } else {*/
/*             var form = document.querySelector("form#form_item_entry");*/
/*             showErrors(form, errors);*/
/*         }*/
/* */
/*     });*/
/*     $('input[name=actual_qty]').priceFormat({prefix:'',thousandsSeparator:',',centsSeparator:'',centsLimit: ''});*/
/*     $('input[name=basic_rate]').priceFormat({prefix:'',thousandsSeparator:',',centsSeparator:'',centsLimit: ''});*/
/*     $rate.priceFormat({prefix:'',thousandsSeparator:',',centsSeparator:'',centsLimit: ''});*/
/*     $qty.priceFormat({prefix:'',thousandsSeparator:',',centsSeparator:'',centsLimit: ''});*/
/*     $('input[name=basic_rate]').focus();*/
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
/*         if(data.has_batch_no) {*/
/*             $(".label_has_batch_no").show();*/
/*             constraints["item_batch"] = {presence: true};*/
/*             validForm['msg'] = 'harap diisi batch no item';*/
/*             validForm['valid'] = false;*/
/*         }*/
/*         value_item_kode = data.item_kode;*/
/*         cekStok(value_item_kode, value_warehouse);*/
/*         cekPricelist(data.item_kode, self.parent.paramsPage["jenis-tagihan"]);*/
/*     });*/
/*     $(".detail_gudang").select2({*/
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
/*                 value_warehouse = id;*/
/*                 var parent = $(element).attr("name");*/
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
/*         value_warehouse = data.id;*/
/*         cekStok(value_item_kode, value_warehouse);*/
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
/*         cekPricelist(value_item_kode, self.parent.paramsPage["jenis-tagihan"]);*/
/*     });*/
/*     $("input[name=dosis]").select2({*/
/*         width: "100%",*/
/*         minimumInputLength: 0,*/
/*         placeholder: "Pilih Dosis",*/
/*         id: function (bond) {*/
/*             return bond.dosis;*/
/*         },*/
/*         ajax: {*/
/*             url: '{{url_dosis}}',*/
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
/*                 $.ajax("{{url_dosis}}", {*/
/*                     dataType: "json",*/
/*                     data: { search: id, offset: 0, limit: 1 }*/
/*                 }).done(function(data) { callback(data.rows[0]); });*/
/*             }*/
/*         },*/
/*         escapeMarkup: function (markup) {*/
/*             return markup;*/
/*         },*/
/*         formatSelection: function (repo) {*/
/*             return repo.dosis;*/
/*         },*/
/*         formatResult: function (repo) {*/
/*             return repo.dosis;*/
/*         }*/
/*     });*/
/*     $("#from_warehouse").select2("val", "7c87a8d69bc21df012ae8e3b17c5fff7");*/
/*     $("#jenis_tagihan").html(self.parent.paramsPage["jenis-tagihan"]);*/
/*     /*    $("#to_warehouse").select2("val", self.parent.warehouse['to_warehouse']);*/
/*      $("#from_warehouse").select2("val", self.parent.warehouse['from_warehouse']);*//* */
/* });*/
/* </script>*/
/* <form id="form_item_entry" class="form-horizontal" role="form">*/
/*     <h6 class="heading-hr"><i class="icon-paragraph-right2"></i>{{ title }}</h6>*/
/*     <div class="row">*/
/*         <div class="col-sm-12">*/
/*             <div class="block-inner">*/
/*                 <div class="statistics-info">*/
/*                     <a href="#" title="" class="bg-info"><i class="icon-cart-plus"></i></a>*/
/*                     <strong id="jenis_tagihan"></strong>*/
/*                 </div>*/
/*                 <div class="progress progress-micro">*/
/*                     <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 35%;">*/
/*                         <span class="sr-only">30% Complete</span>*/
/*                     </div>*/
/*                 </div>*/
/*                 <span>Jenis Tagihan</span>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
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
/*                                     <span class="from_warehouse--label">*/
/*                                     <label>Lokasi Gudang Item Asal:</label>*/
/*                                     <input type="hidden" id="from_warehouse" name="from_warehouse" class="detail_gudang" value="{{data.from_warehouse}}" readonly/>*/
/*                                     <input type="hidden" name="from_warehouse_nama"/>*/
/*                                     </span>*/
/*                             </div>*/
/* */
/*                             <div class="col-sm-4">*/
/*                                 <label>Dosis:</label>*/
/*                                 <input type="hidden" id="dosis" name="dosis" class="dosis" value="{{data.dosis}}"/>*/
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
/*                                 <label>Aktual Stok:</label>*/
/*                                 <input type="text" name="actual_qty" class="form-control cls-number" value="{{data.actual_qty}}" readonly/>*/
/*                                 <span class="help-block">Jumlah Aktual Item Stok </span>*/
/*                             </div>*/
/*                             <div class="col-sm-4">*/
/*                                 <label>Harga Dasar Item Obat:</label>*/
/*                                 <input type="text" name="basic_rate" class="form-control cls-number" value="{{data.basic_rate}}" readonly/>*/
/*                                 <span class="help-block">Harga Dasar Item Obat </span>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <div class="row">*/
/*                             <div class="col-sm-4">*/
/*                                 <label>Harga Item:</label>*/
/*                                 <input type="text" name="item_price" class="form-control cls-number" value="{{data.item_price}}"/>*/
/*                                 <span class="help-block">Harga per Satuan Item </span>*/
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
/*                         </div>*/
/*                     </div>*/
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </form>*/
