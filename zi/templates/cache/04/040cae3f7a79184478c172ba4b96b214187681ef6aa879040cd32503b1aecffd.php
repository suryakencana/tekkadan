<?php

/* selling/pos.twig */
class __TwigTemplate_4f854d2f0c5cae78599fcfcd734a6daa7de140e9353c1a6e9769784b9c2758dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("selling/index.twig", "selling/pos.twig", 1);
        $this->blocks = array(
            'sub_css' => array($this, 'block_sub_css'),
            'sub_js' => array($this, 'block_sub_js'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "selling/index.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_sub_css($context, array $blocks = array())
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
    public function block_sub_js($context, array $blocks = array())
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
        echo "assets/plugins/thickbox/js/thickbox.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/plugins/validate.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/plugins/price.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/plugins/accounting.min.js\"></script>
    <script type=\"text/javascript\" charset=\"utf-8\">
    validate.validators.presence.options = {message: \"Harap data diisi terlebih dahulu\"};
    const ACTION_RECEIPT = 'RECEIPT';
    const ACTION_ISSUE = 'ISSUE';
    var tb_pathToImage = \"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/plugins/thickbox/img/ico_waiting.gif\";
    var \$gridpos = \$('#table-pos');
    var paramsPage = [];
    paramsPage[\"jenis-tagihan\"] = \"SWADANA\";
    paramsPage[\"kode-tagihan\"] = \"070\";
    var constraints_parent = {
        bayar_total: {presence: true},
        price_list: {presence: true},
        reg_no: {presence: true}
    };

    var reg_status_pasien = [];
    reg_status_pasien.push(\"PASIEN_BAYAR_ASKES\"); //0
    reg_status_pasien.push(\"PASIEN_BAYAR_ASKES\"); //1
    reg_status_pasien.push(\"PASIEN_BAYAR_PNS\"); //2
    reg_status_pasien.push(\"Swadana\"); //3
    reg_status_pasien.push(\"PASIEN_BAYAR_JAMKESNAS_PUSAT\"); //4
    reg_status_pasien.push(\"PASIEN_BAYAR_JAMKESNAS_DAERAH\"); //5
    reg_status_pasien.push(\"Komplimen\"); //6
    reg_status_pasien.push(\"PASIEN_DINASLUAR\"); //7
    reg_status_pasien.push(\"PASIEN_BAYAR_JAMKESNAS_KOTA\"); //8
    reg_status_pasien.push(\"PASIEN_BAYAR_JAMKESNAS\"); //9
    reg_status_pasien.push(\"Jamkesda Provinsi\"); //10
    reg_status_pasien.push(\"Jamkesda Kabupaten/Kota\"); //11
    reg_status_pasien.push(\"BPJS PNS/Pal/AB\"); //12
    reg_status_pasien.push(\"BPJS ASTEK\"); //13
    reg_status_pasien.push(\"BPJS Jamkesmas\"); //14
    reg_status_pasien.push(\"Lain - Lain\"); //15
    \$(\"#form_payment, input[name=bayar]\").on('keydown', function (e) {
        switch(e.which) {
            case 116:
                // F5
                \$('#pay-nota').trigger(\"click\");
                e.preventDefault();
        }
    });
    function printpos(kode){
        var w = window.open(\"";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["print_nota"]) ? $context["print_nota"] : null), "html", null, true);
        echo "\"+\"/\"+kode);
        w.print();
        //w.close();
    }


    \$('#pay-nota').on('click', function() {
        var \$form = \$('form#form-pos');
        var dtset = \$gridpos.bootstrapTable(\"getData\");
        var dd = validate.single(dtset, {presence: true});

        var errors = validate(\$form, constraints_parent);
        if (!errors && !dd) {
            var vbayar = \$('input[name=bayar]').val().replace(/,/gi, \"\");
            var total = \$('input[name=total]').val().replace(/,/gi, \"\");
            if (parseFloat(vbayar) <= parseFloat(total)) {
                Messenger().post({
                    message: \"Total Uang Bayar: \" + accounting.formatMoney(vbayar.replace(/,/gi, ''), \"Rp \", 2, \".\", \",\") + \" Tidak Mencukupi\",
                    type: 'error',
                    showCloseButton: true
                });
                return false;
            }
            bootbox.confirm(\"Sudah yakin anda memproses transaksi ini?\", function (action) {
                if (!action) {
                    return false;
                }
                var input = \$(\"<input>\")
                                .attr(\"type\", \"hidden\")
                                .attr(\"name\", \"rows\").val(JSON.stringify(dtset)),
                        chasier = \$(\"<input>\")
                                .attr(\"type\", \"hidden\")
                                .attr(\"name\", \"kasir\").val(\"";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["cashier"]) ? $context["cashier"] : null), "html", null, true);
        echo "\"),
                        invoice = \$(\"<input>\")
                                .attr(\"type\", \"hidden\")
                                .attr(\"name\", \"kode_invoice\").val(paramsPage[\"kode-tagihan\"]);
                \$form.append(\$(chasier));
                \$form.append(\$(input));
                \$form.append(\$(invoice));

                var formArray = \$form.serializeArray();
                var result = {};
                _.map(formArray, function (k, v) {
                    var name = k['name'],
                            objs = {};
                    objs[name] = k['value'];
                    _.assign(result, objs);
                });
                \$.ajax({
                    url: \"";
        // line 105
        echo twig_escape_filter($this->env, (isset($context["url_submit"]) ? $context["url_submit"] : null), "html", null, true);
        echo "\",
                    method: \"POST\",
                    dataType: \"json\",
                    data: result,
                    success: function (data) {
                        console.log(data);
                        var kode_tagihan = \$(\"<input>\")
                                .attr(\"type\", \"hidden\")
                                .attr(\"name\", \"kode_tagihan\").val(data.kode_invoice);
                        \$form.append(\$(kode_tagihan));
                        bootbox.confirm(\"Print Nota?\", function (action) {
                            if (!action) {
                                return false;
                            }
                            printpos(data.kode_invoice);
                        });
                    },
                    complete: function () {

                    }
                });
                console.log(result);
                // form submit
                setTimeout(function(){
                    \$form.submit();
                }, 5000);
            });
        } else {
            Messenger().post({
                message: \"Data harap diisi terlebih dahulu\",
                type: 'error',
                showCloseButton: true
            });
        }
    });
    \$(document).on('keydown', function (e) {

        switch(e.which) {
            case 114:
                // F3
                e.preventDefault();
                calcBayar();
                \$('#form_payment').modal({
                    show: true
                });
                return;
            case 112:
                // F1
                e.preventDefault();
                return;
            case 113:
                // F2
                \$(\"input[name=cari_pasien]\").select2(\"open\");
                \$(\"input[name=cari_pasien]\").focus();
                e.preventDefault();
                return;
            case 115:
                // F4
                \$(\"input[name=price_list]\").select2(\"open\");
                \$(\"input[name=price_list]\").focus();
                e.preventDefault();
                return;
            case 116:
                // F5
                \$('input[name=bayar]').trigger(\"click\");
                e.preventDefault();
                return;

        }
        if (e.shiftKey && e.which == 80) {
            //add new tab

            e.preventDefault();
        }
        if (e.shiftKey && e.which == 88) {
            //close tab
            e.preventDefault();
        }
    });
    function insertData(data)
    {
        var results = [],
                price = data['item_price'].replace(/,/gi, \"\"),
                basic = data['basic_rate'].replace(/,/gi, \"\"),
                qty = data['item_qty'].replace(/,/gi, \"\"),
                actual_qty = data['actual_qty'],
                total_amount = parseInt(price) * parseInt(qty);
        var _id = Math.floor((Math.random() * 100000) + 1);
        _.assign(data, {id:_id,item_amount: total_amount,
            item_price: price, item_qty: qty,
            basic_rate: basic,
            actual_qty: actual_qty});
        console.log(data);
        results.push(data);
        \$gridpos.bootstrapTable('append', results);
        \$gridpos.bootstrapTable('scrollTo', 'bottom');
        \$gridpos.bootstrapTable('refresh');
        calcBayar();
    }
    function _handleRemoveRows()
    {
        var rows = \$gridpos.bootstrapTable('getSelections');
        if(rows.length > 0) {
            var data = [];
            _.map(rows, function (row) {
                data.push(row['id']);
            });
            console.log(data);
            \$gridpos.bootstrapTable('remove', {field: 'id', values: data});
        }
        \$gridpos.bootstrapTable('uncheckAll');
        \$gridpos.bootstrapTable('refresh');
    }

    \$(function () {
        \$gridpos.bootstrapTable({
            url: '";
        // line 221
        echo twig_escape_filter($this->env, (isset($context["source_url"]) ? $context["source_url"] : null), "html", null, true);
        echo "',
            method: '";
        // line 222
        echo twig_escape_filter($this->env, (isset($context["method"]) ? $context["method"] : null), "html", null, true);
        echo "',
            columns: ";
        // line 223
        echo (isset($context["cols"]) ? $context["cols"] : null);
        echo "
        });
        \$('input[name=bayar]').priceFormat({prefix:'',thousandsSeparator:',',centsSeparator:'',centsLimit: ''});
        \$('input[name=total]').priceFormat({prefix:'',thousandsSeparator:',',centsSeparator:'',centsLimit: ''});

        /*
         * var dtset = \$griddetail.bootstrapTable(\"getData\");
         * var dd = validate.single(dtset, {presence: true});
         * var errors = validate(\$(this), constraints);
         * */
        /*\$(document).on('submit', 'form#form-pos', function(e) {
            e.preventDefault();
            var dtset = \$gridpos.bootstrapTable(\"getData\");
            var dd = validate.single(dtset, {presence: true});
            var errors = validate(\$(this), constraints_parent);

            if(!errors && !dd){
                var input = \$(\"<input>\")
                                .attr(\"type\", \"hidden\")
                                .attr(\"name\", \"rows\").val(JSON.stringify(dtset)),
                        chasier = \$(\"<input>\")
                                .attr(\"type\", \"hidden\")
                                .attr(\"name\", \"kasir\").val(\"\"),
                        invoice = \$(\"<input>\")
                                .attr(\"type\", \"hidden\")
                                .attr(\"name\", \"kode_invoice\").val(paramsPage[\"kode-tagihan\"]);
                \$(this).append(\$(chasier));
                \$(this).append(\$(input));
                \$(this).append(\$(invoice));

                var formArray = \$(this).serializeArray();
                var result = {};
                _.map(formArray, function (k, v) {
                    var name = k['name'],
                            objs = {};
                    objs[name] = k['value'];
                    _.assign(result, objs);
                });
                \$.ajax({
                    url: \"\",
                    method: \"POST\",
                    dataType: \"json\",
                    data: result,
                    success: function (data) {
                        console.log(data);
                        bootbox.confirm(\"Print Nota?\", function(action) {
                            if (action) {
                                var tagihan = \$(\"<input>\")
                                        .attr(\"type\", \"hidden\")
                                        .attr(\"name\", \"tagihan\").val(data.kode_invoice);
                                \$(this).append(\$(tagihan));
                                window.open(\"\"+\"/\"+data.kode_invoice);
                                return true;
                            }
                        });
                    },
                    complete: function() {

                    }
                });
                console.log(result);
            } else {
                Messenger().post({
                    message: \"Data harap diisi terlebih dahulu\",
                    type: 'error',
                    showCloseButton: true
                });
                e.preventDefault();
            }
        });*/
        \$(\"input[name=cari_pasien]\").select2({
            minimumResultsForSearch: Infinity,
            width: \"100%\",
            minimumInputLength: 0,
            placeholder: \"Cari nama atau No.Reg Pasien\",
            id: function (bond) {
                return bond.cust_usr_kode;
            },
            ajax: {
                url: '";
        // line 302
        echo twig_escape_filter($this->env, (isset($context["url_pasien"]) ? $context["url_pasien"] : null), "html", null, true);
        echo "',
                dataType: 'json',
                quietMillis: 100,
                data: function (term, page) {
                    return { search: term, offset: (page - 1) * 20, limit: 20 };
                },
                results: function (data, page) {
                    var more = (page * 20) < data.total;
                    return {results: data.rows, more: more};
                }
            },
            initSelection: function(element, callback) {
                var id = \$(element).val();
                if (id !== \"\") {
                    \$.ajax(\"";
        // line 316
        echo twig_escape_filter($this->env, (isset($context["url_pasien"]) ? $context["url_pasien"] : null), "html", null, true);
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
                return repo.cust_usr_nama;
            },
            formatResult: function (repo) {
                var markup = '<div class=\"row\">' +
                        '<div class=\"col-sm-12\">' + repo.cust_usr_nama + '</div>' +
                        '<ul style=\"font-size: 8px;\">' +
                        '<li class=\"col-sm-12\">'+ repo.cust_usr_kode +'</li>' +
                        '<li class=\"col-sm-12\">'+ repo.cust_usr_alamat +'</li>'
                '</ul>';

                markup += '</div>';
                return markup;
            }
        });
        \$(\"input[name=cari_pasien]\").on(\"change\", function(e) {
            var data = e.added;
            var dataset = {};
            dataset[\"nama\"] = data.cust_usr_nama;
            dataset[\"alamat\"] = data.cust_usr_alamat;
            dataset[\"regno\"] = data.cust_usr_kode;
            dataset[\"jpasien\"] = data.reg_jenis_pasien;
            dataPasien(dataset);
        });
        \$(\"input[name=price_list]\").select2({
            width: \"100%\",
            minimumInputLength: 0,
            placeholder: \"Cari Daftar Harga\",
            id: function (bond) {
                return bond.price_list_nama;
            },
            ajax: {
                url: '";
        // line 357
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
        // line 371
        echo twig_escape_filter($this->env, (isset($context["url_price_list"]) ? $context["url_price_list"] : null), "html", null, true);
        echo "\", {
                        dataType: \"json\",
                        data: { search: id, offset: 0, limit: 1 }
                    }).done(function(data) {
                        \$(\"#invoice_no\").html(\"SINV-\" + data.rows[0].kode_invoice);
                        paramsPage[\"jenis-tagihan\"] = data.rows[0].price_list_nama;
                        callback(data.rows[0]);
                    });
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
        \$(\"input[name=price_list]\").on(\"change\", function(e) {
            var data = e.added;
            \$(\"#invoice_no\").html(\"SINV-\" + data.kode_invoice);
            paramsPage[\"jenis-tagihan\"] = data.price_list_nama;
            paramsPage[\"kode-tagihan\"] = data.kode_invoice;
        });
        \$(\"input[name=dokter]\").select2({
            width: \"100%\",
            minimumInputLength: 0,
            placeholder: \"Cari Daftar Harga\",
            id: function (bond) {
                return bond.pgw_id;
            },
            ajax: {
                url: '";
        // line 405
        echo twig_escape_filter($this->env, (isset($context["url_dokter"]) ? $context["url_dokter"] : null), "html", null, true);
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
        // line 419
        echo twig_escape_filter($this->env, (isset($context["url_dokter"]) ? $context["url_dokter"] : null), "html", null, true);
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
                return repo.pgw_nama;
            },
            formatResult: function (repo) {
                return repo.pgw_nama;
            }
        });
        \$('input[name=bayar]').on(\"keyup\", function(){
            \$('input[name=bayar_total]').val(\$(this).val().replace(/,/gi, ''));
            calc();
        });
        ";
        // line 442
        echo "        \$('#form_payment').on('show.bs.modal', function(){
            \$('input[name=bayar]').focus();
            \$('input[name=total-calc]').val(accounting.formatMoney(\$('input[name=total]').val().replace(/,/gi, ''), \"Rp \", 2, \".\", \",\"));
        });
    });
    function dataPasien(data)
    {
        var nama = \$('input[name=pasien_nama]'),
                alamat = \$('textarea[name=pasien_alamat]'),
                regno = \$('input[name=reg_no]'),
                jpasien = \$('input[name=pasien_jenis]');
        nama.val(data.nama);
        alamat.text(data.alamat);
        regno.val(data.regno);
        jpasien.val(reg_status_pasien[data.jpasien]);

        \$(\"input[name=price_list]\").select2(\"val\",data.jpasien == 3 ? \"SWADANA\" : \"BPJS\" );
    }
    function calc(){
        var vbayar = \$('input[name=bayar]').val().replace(/,/gi, \"\");
        var total = \$('input[name=total]').val().replace(/,/gi, \"\");
        console.log(vbayar);
        var bayar = vbayar > -1 ? vbayar : 0;
        var kembali = parseInt(bayar) - parseInt(total);

        \$('input[name=kembali]').val(accounting.formatMoney((kembali > -1 ? kembali : 0), \"Rp \", 2, \".\", \",\"));
    }
    function calcBayar(){
        var total = 0;
        var rows = \$gridpos.bootstrapTable('getData');
        console.log(\"wolezzzzs\");
        if(rows.length > 0) {
            _.map(rows, function (row) {
                total +=parseInt(row['item_amount']);
            });
            console.log(total);
        }

        \$('input[name=total]').val(parseInt(total));
        \$('input[name=total]').focus();
    }
    </script>
";
    }

    // line 485
    public function block_content($context, array $blocks = array())
    {
        // line 486
        echo "    <form id=\"form-pos\" class=\"form-horizontal\" action=\"";
        echo twig_escape_filter($this->env, (isset($context["url_submit_status"]) ? $context["url_submit_status"] : null), "html", null, true);
        echo "\" method=\"POST\" role=\"form\">

        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div class=\"block-inner\">
                    <div class=\"statistics-info\">
                        <a href=\"#\" title=\"\" class=\"bg-danger\"><i class=\"icon-cart-plus\"></i></a>
                        <strong id=\"invoice_no\">";
        // line 493
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "invoice", array()), "html", null, true);
        echo "</strong><span class=\"pull-right\"><strong>Kasir: ";
        echo twig_escape_filter($this->env, (isset($context["cashier"]) ? $context["cashier"] : null), "html", null, true);
        echo "</strong></span>
                    </div>
                    <div class=\"progress progress-micro\">
                        <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"90\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 35%;\">
                            <span class=\"sr-only\">30% Complete</span>
                        </div>
                    </div>
                    <span>Sales Invoice #</span>
                </div>
            </div>
        </div>

        <h6 class=\"heading-hr\"><i class=\"icon-paragraph-right2\"></i>";
        // line 505
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</h6>
        <div class=\"block\">
            <div class=\"input-group input-group-lg\">
                <span class=\"input-group-addon\"><i class=\"icon-calculate2\"></i></span>
                <input name=\"total\" type=\"text\" class=\"form-control\" placeholder=\"0,00\" value=\"0,00\" style=\"text-align:right;\" readonly/>
                <input name=\"bayar_total\" type=\"hidden\" class=\"form-control\" />
                <span class=\"input-group-btn\"><button type=\"button\" data-toggle=\"modal\" role=\"button\" href=\"#form_payment\" class=\"btn btn-info\" >Bayar [F3]</button></span>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div class=\"block-inner\">
                    <div class=\"panel-body\">
                        <div class=\"form-group\">
                            <div class=\"row\">
                                <div class=\"col-sm-3\">
                                    <label>Nomer Pendaftaran:</label>
                                    <input type=\"text\" placeholder=\"Pasien No.Reg\" class=\"form-control\"
                                           name=\"reg_no\" value=\"";
        // line 524
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "reg_no", array()), "html", null, true);
        echo "\" />
                                </div>
                                <div class=\"col-sm-3\">
                                    <label>Pasien nama:</label>
                                    <input type=\"text\" placeholder=\"Pasien Nama\" class=\"form-control\"
                                           name=\"pasien_nama\" value=\"";
        // line 529
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "pasien_nama", array()), "html", null, true);
        echo "\" />
                                </div>
                                <div class=\"col-sm-6\">
                                    <label>Pencarian Pasien:</label>
                                    <div class=\"input-group input-group\">
                                        <span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
                                        <input name=\"cari_pasien\" type=\"hidden\" class=\"cari_pasien\" value=\"";
        // line 535
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "cari_pasien", array()), "html", null, true);
        echo "\" />
                                        <span class=\"input-group-btn\"><button class=\"btn btn-danger\" type=\"button\">Pasien [F2]</button></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"row\">
                                <div class=\"col-sm-6\">
                                    <label>Pasien Alamat:</label>
                                    <textarea rows=\"5\" placeholder=\"Pasien Alamat\" class=\"form-control\"
                                              name=\"pasien_alamat\" >";
        // line 546
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "pasien_alamat", array()), "html", null, true);
        echo "</textarea>
                                </div>
                                <div class=\"col-sm-6\">
                                    <label>Tagihan [F4]:</label>
                                    <input type=\"hidden\" placeholder=\"Jenis Tagihan\"
                                           name=\"price_list\" value=\"";
        // line 551
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "price_list", array()), "html", null, true);
        echo "\"/>
                                    <span class=\"help-block\">e.g UMUM, ASKES, STMJ, JAMKESMAS</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"row\">
                                <div class=\"col-sm-3\">
                                    <label>Jenis Pasien:</label>
                                    <input type=\"text\" placeholder=\"Jenis Pasien\" class=\"form-control\"
                                           name=\"pasien_jenis\" value=\"";
        // line 561
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "pasien_jenis", array()), "html", null, true);
        echo "\" />
                                    <span class=\"help-block\">jenis pasien saat registrasi. e.g SWADANA, BPJS ASKES, STMJ, JAMKESMAS</span>
                                </div>
                                <div class=\"col-sm-3\">
                                    <label>Dokter :</label>
                                    <input type=\"hidden\" placeholder=\"Cari nama Dokter\"
                                           name=\"dokter\" value=\"";
        // line 567
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "dokter", array()), "html", null, true);
        echo "\"/>
                                </div>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <div class=\"row\">
                                <div class=\"col-sm-12\">
                                    <label>Keterangan:</label>
                                    <textarea type=\"text\" name=\"keterangan\" class=\"form-control\" rows=\"5\">";
        // line 576
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
    <div class=\"block\">
        <h6 class=\"heading-hr\">
            <i class=\"icon-table\"></i> ";
        // line 587
        echo twig_escape_filter($this->env, (isset($context["gridtitle"]) ? $context["gridtitle"] : null), "html", null, true);
        echo "
        </h6>

        <div class=\"well\">
            <a id=\"item-add\" href=\"";
        // line 591
        echo twig_escape_filter($this->env, (isset($context["modal_form"]) ? $context["modal_form"] : null), "html", null, true);
        echo "?height=600&width=800\" title=\"Form Penjualan Item Obat\" class=\"thickbox btn btn-primary\"><i class=\"icon-box-add\"></i>Tambah Data</a>
            <button onclick=\"_handleRemoveRows();\" class=\"btn btn-primary\"><i class=\"icon-box-add\"></i>Hapus Item</button>
        </div>

        <div class=\"datatable\">
            <table id=\"table-pos\"
                   data-toolbar=\"#post\"
                   data-buttons-align=\"left\"
                   data-toolbar-align=\"right\"
                   data-pagination=\"true\"
                   data-side-pagination=\"server\"
                   data-page-list=\"[5, 10, 20, 50, 100, 200]\"
                   data-click-to-select=\"true\"
                   data-single-select=\"true\"
                   data-height=\"480\">
            </table>
        </div>
    </div>
    <!-- Form modal -->
    <div id=\"form_payment\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h4 class=\"modal-title\"><i class=\"icon-cart-checkout\"></i> Pembayaran tagihan</h4>
                </div>

                <!-- Form inside modal -->
                <form action=\"#\" role=\"form\">

                    <div class=\"modal-body with-padding\">
                        <div class=\"block-inner text-danger\">
                            <h6 class=\"heading-hr\">Kasir: ";
        // line 623
        echo twig_escape_filter($this->env, (isset($context["cashier"]) ? $context["cashier"] : null), "html", null, true);
        echo " <small class=\"display-block\">Mohon diisi dengan teliti detail pembayaran tagihan</small></h6>
                        </div>

                        <div class=\"block\">
                            <div class=\"input-group input-group-lg\">
                                <span class=\"input-group-addon\"><i class=\"icon-calculate2\"></i></span>
                                <input name=\"total-calc\" type=\"text\" class=\"form-control\" placeholder=\"0,00\" style=\"text-align:right;\" readonly/>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <div class=\"row\">
                                <div class=\"col-sm-12\">
                                    <label>Bayar</label>
                                    <input name=\"bayar\" type=\"text\" placeholder=\"0,00\" style=\"text-align:right;\" class=\"form-control\" />
                                </div>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <div class=\"row\">
                                <div class=\"col-sm-12\">
                                    <label>kembali</label>
                                    <input name=\"kembali\" type=\"text\" placeholder=\"0,00\" style=\"text-align:right;\" class=\"form-control\" readonly/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-warning\" data-dismiss=\"modal\">Keluar [ESC]</button>
                        <button id=\"pay-nota\" type=\"button\" class=\"btn btn-primary\">Bayar [F5]</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!-- /form modal -->
    <!-- Form modal -->
    <div id=\"form_item\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content modal-body with-padding\"></div>
        </div>
    </div>
    <!-- /form modal -->
";
    }

    public function getTemplateName()
    {
        return "selling/pos.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  767 => 623,  732 => 591,  725 => 587,  711 => 576,  699 => 567,  690 => 561,  677 => 551,  669 => 546,  655 => 535,  646 => 529,  638 => 524,  616 => 505,  599 => 493,  588 => 486,  585 => 485,  539 => 442,  516 => 419,  499 => 405,  462 => 371,  445 => 357,  401 => 316,  384 => 302,  302 => 223,  298 => 222,  294 => 221,  175 => 105,  155 => 88,  120 => 56,  80 => 19,  72 => 14,  68 => 13,  64 => 12,  60 => 11,  56 => 10,  52 => 9,  47 => 8,  44 => 7,  38 => 4,  33 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'selling/index.twig' %}*/
/* {% block sub_css %}*/
/*     <link rel="stylesheet" href="{{baseurl}}assets/plugins/bootstrap-table/dist/bootstrap-table.css"/>*/
/*     <link rel="stylesheet" href="{{baseurl}}assets/plugins/thickbox/css/thickbox.css"/>*/
/* {% endblock %}*/
/* */
/* {% block sub_js %}*/
/*     <script type="text/javascript" src="{{baseurl}}assets/js/jquery-ui.min.js"></script>*/
/*     <script type="text/javascript" src="{{baseurl}}assets/plugins/bootstrap-table/dist/bootstrap-table.js"></script>*/
/*     <script type="text/javascript" src="{{baseurl}}assets/js/plugins/forms/select2.min.js"></script>*/
/*     <script type="text/javascript" src="{{baseurl}}assets/plugins/thickbox/js/thickbox.js"></script>*/
/*     <script type="text/javascript" src="{{baseurl}}assets/plugins/validate.min.js"></script>*/
/*     <script type="text/javascript" src="{{baseurl}}assets/plugins/price.js"></script>*/
/*     <script type="text/javascript" src="{{baseurl}}assets/plugins/accounting.min.js"></script>*/
/*     <script type="text/javascript" charset="utf-8">*/
/*     validate.validators.presence.options = {message: "Harap data diisi terlebih dahulu"};*/
/*     const ACTION_RECEIPT = 'RECEIPT';*/
/*     const ACTION_ISSUE = 'ISSUE';*/
/*     var tb_pathToImage = "{{baseurl}}assets/plugins/thickbox/img/ico_waiting.gif";*/
/*     var $gridpos = $('#table-pos');*/
/*     var paramsPage = [];*/
/*     paramsPage["jenis-tagihan"] = "SWADANA";*/
/*     paramsPage["kode-tagihan"] = "070";*/
/*     var constraints_parent = {*/
/*         bayar_total: {presence: true},*/
/*         price_list: {presence: true},*/
/*         reg_no: {presence: true}*/
/*     };*/
/* */
/*     var reg_status_pasien = [];*/
/*     reg_status_pasien.push("PASIEN_BAYAR_ASKES"); //0*/
/*     reg_status_pasien.push("PASIEN_BAYAR_ASKES"); //1*/
/*     reg_status_pasien.push("PASIEN_BAYAR_PNS"); //2*/
/*     reg_status_pasien.push("Swadana"); //3*/
/*     reg_status_pasien.push("PASIEN_BAYAR_JAMKESNAS_PUSAT"); //4*/
/*     reg_status_pasien.push("PASIEN_BAYAR_JAMKESNAS_DAERAH"); //5*/
/*     reg_status_pasien.push("Komplimen"); //6*/
/*     reg_status_pasien.push("PASIEN_DINASLUAR"); //7*/
/*     reg_status_pasien.push("PASIEN_BAYAR_JAMKESNAS_KOTA"); //8*/
/*     reg_status_pasien.push("PASIEN_BAYAR_JAMKESNAS"); //9*/
/*     reg_status_pasien.push("Jamkesda Provinsi"); //10*/
/*     reg_status_pasien.push("Jamkesda Kabupaten/Kota"); //11*/
/*     reg_status_pasien.push("BPJS PNS/Pal/AB"); //12*/
/*     reg_status_pasien.push("BPJS ASTEK"); //13*/
/*     reg_status_pasien.push("BPJS Jamkesmas"); //14*/
/*     reg_status_pasien.push("Lain - Lain"); //15*/
/*     $("#form_payment, input[name=bayar]").on('keydown', function (e) {*/
/*         switch(e.which) {*/
/*             case 116:*/
/*                 // F5*/
/*                 $('#pay-nota').trigger("click");*/
/*                 e.preventDefault();*/
/*         }*/
/*     });*/
/*     function printpos(kode){*/
/*         var w = window.open("{{ print_nota }}"+"/"+kode);*/
/*         w.print();*/
/*         //w.close();*/
/*     }*/
/* */
/* */
/*     $('#pay-nota').on('click', function() {*/
/*         var $form = $('form#form-pos');*/
/*         var dtset = $gridpos.bootstrapTable("getData");*/
/*         var dd = validate.single(dtset, {presence: true});*/
/* */
/*         var errors = validate($form, constraints_parent);*/
/*         if (!errors && !dd) {*/
/*             var vbayar = $('input[name=bayar]').val().replace(/,/gi, "");*/
/*             var total = $('input[name=total]').val().replace(/,/gi, "");*/
/*             if (parseFloat(vbayar) <= parseFloat(total)) {*/
/*                 Messenger().post({*/
/*                     message: "Total Uang Bayar: " + accounting.formatMoney(vbayar.replace(/,/gi, ''), "Rp ", 2, ".", ",") + " Tidak Mencukupi",*/
/*                     type: 'error',*/
/*                     showCloseButton: true*/
/*                 });*/
/*                 return false;*/
/*             }*/
/*             bootbox.confirm("Sudah yakin anda memproses transaksi ini?", function (action) {*/
/*                 if (!action) {*/
/*                     return false;*/
/*                 }*/
/*                 var input = $("<input>")*/
/*                                 .attr("type", "hidden")*/
/*                                 .attr("name", "rows").val(JSON.stringify(dtset)),*/
/*                         chasier = $("<input>")*/
/*                                 .attr("type", "hidden")*/
/*                                 .attr("name", "kasir").val("{{ cashier }}"),*/
/*                         invoice = $("<input>")*/
/*                                 .attr("type", "hidden")*/
/*                                 .attr("name", "kode_invoice").val(paramsPage["kode-tagihan"]);*/
/*                 $form.append($(chasier));*/
/*                 $form.append($(input));*/
/*                 $form.append($(invoice));*/
/* */
/*                 var formArray = $form.serializeArray();*/
/*                 var result = {};*/
/*                 _.map(formArray, function (k, v) {*/
/*                     var name = k['name'],*/
/*                             objs = {};*/
/*                     objs[name] = k['value'];*/
/*                     _.assign(result, objs);*/
/*                 });*/
/*                 $.ajax({*/
/*                     url: "{{url_submit}}",*/
/*                     method: "POST",*/
/*                     dataType: "json",*/
/*                     data: result,*/
/*                     success: function (data) {*/
/*                         console.log(data);*/
/*                         var kode_tagihan = $("<input>")*/
/*                                 .attr("type", "hidden")*/
/*                                 .attr("name", "kode_tagihan").val(data.kode_invoice);*/
/*                         $form.append($(kode_tagihan));*/
/*                         bootbox.confirm("Print Nota?", function (action) {*/
/*                             if (!action) {*/
/*                                 return false;*/
/*                             }*/
/*                             printpos(data.kode_invoice);*/
/*                         });*/
/*                     },*/
/*                     complete: function () {*/
/* */
/*                     }*/
/*                 });*/
/*                 console.log(result);*/
/*                 // form submit*/
/*                 setTimeout(function(){*/
/*                     $form.submit();*/
/*                 }, 5000);*/
/*             });*/
/*         } else {*/
/*             Messenger().post({*/
/*                 message: "Data harap diisi terlebih dahulu",*/
/*                 type: 'error',*/
/*                 showCloseButton: true*/
/*             });*/
/*         }*/
/*     });*/
/*     $(document).on('keydown', function (e) {*/
/* */
/*         switch(e.which) {*/
/*             case 114:*/
/*                 // F3*/
/*                 e.preventDefault();*/
/*                 calcBayar();*/
/*                 $('#form_payment').modal({*/
/*                     show: true*/
/*                 });*/
/*                 return;*/
/*             case 112:*/
/*                 // F1*/
/*                 e.preventDefault();*/
/*                 return;*/
/*             case 113:*/
/*                 // F2*/
/*                 $("input[name=cari_pasien]").select2("open");*/
/*                 $("input[name=cari_pasien]").focus();*/
/*                 e.preventDefault();*/
/*                 return;*/
/*             case 115:*/
/*                 // F4*/
/*                 $("input[name=price_list]").select2("open");*/
/*                 $("input[name=price_list]").focus();*/
/*                 e.preventDefault();*/
/*                 return;*/
/*             case 116:*/
/*                 // F5*/
/*                 $('input[name=bayar]').trigger("click");*/
/*                 e.preventDefault();*/
/*                 return;*/
/* */
/*         }*/
/*         if (e.shiftKey && e.which == 80) {*/
/*             //add new tab*/
/* */
/*             e.preventDefault();*/
/*         }*/
/*         if (e.shiftKey && e.which == 88) {*/
/*             //close tab*/
/*             e.preventDefault();*/
/*         }*/
/*     });*/
/*     function insertData(data)*/
/*     {*/
/*         var results = [],*/
/*                 price = data['item_price'].replace(/,/gi, ""),*/
/*                 basic = data['basic_rate'].replace(/,/gi, ""),*/
/*                 qty = data['item_qty'].replace(/,/gi, ""),*/
/*                 actual_qty = data['actual_qty'],*/
/*                 total_amount = parseInt(price) * parseInt(qty);*/
/*         var _id = Math.floor((Math.random() * 100000) + 1);*/
/*         _.assign(data, {id:_id,item_amount: total_amount,*/
/*             item_price: price, item_qty: qty,*/
/*             basic_rate: basic,*/
/*             actual_qty: actual_qty});*/
/*         console.log(data);*/
/*         results.push(data);*/
/*         $gridpos.bootstrapTable('append', results);*/
/*         $gridpos.bootstrapTable('scrollTo', 'bottom');*/
/*         $gridpos.bootstrapTable('refresh');*/
/*         calcBayar();*/
/*     }*/
/*     function _handleRemoveRows()*/
/*     {*/
/*         var rows = $gridpos.bootstrapTable('getSelections');*/
/*         if(rows.length > 0) {*/
/*             var data = [];*/
/*             _.map(rows, function (row) {*/
/*                 data.push(row['id']);*/
/*             });*/
/*             console.log(data);*/
/*             $gridpos.bootstrapTable('remove', {field: 'id', values: data});*/
/*         }*/
/*         $gridpos.bootstrapTable('uncheckAll');*/
/*         $gridpos.bootstrapTable('refresh');*/
/*     }*/
/* */
/*     $(function () {*/
/*         $gridpos.bootstrapTable({*/
/*             url: '{{source_url}}',*/
/*             method: '{{method}}',*/
/*             columns: {{cols | raw}}*/
/*         });*/
/*         $('input[name=bayar]').priceFormat({prefix:'',thousandsSeparator:',',centsSeparator:'',centsLimit: ''});*/
/*         $('input[name=total]').priceFormat({prefix:'',thousandsSeparator:',',centsSeparator:'',centsLimit: ''});*/
/* */
/*         /**/
/*          * var dtset = $griddetail.bootstrapTable("getData");*/
/*          * var dd = validate.single(dtset, {presence: true});*/
/*          * var errors = validate($(this), constraints);*/
/*          * *//* */
/*         /*$(document).on('submit', 'form#form-pos', function(e) {*/
/*             e.preventDefault();*/
/*             var dtset = $gridpos.bootstrapTable("getData");*/
/*             var dd = validate.single(dtset, {presence: true});*/
/*             var errors = validate($(this), constraints_parent);*/
/* */
/*             if(!errors && !dd){*/
/*                 var input = $("<input>")*/
/*                                 .attr("type", "hidden")*/
/*                                 .attr("name", "rows").val(JSON.stringify(dtset)),*/
/*                         chasier = $("<input>")*/
/*                                 .attr("type", "hidden")*/
/*                                 .attr("name", "kasir").val(""),*/
/*                         invoice = $("<input>")*/
/*                                 .attr("type", "hidden")*/
/*                                 .attr("name", "kode_invoice").val(paramsPage["kode-tagihan"]);*/
/*                 $(this).append($(chasier));*/
/*                 $(this).append($(input));*/
/*                 $(this).append($(invoice));*/
/* */
/*                 var formArray = $(this).serializeArray();*/
/*                 var result = {};*/
/*                 _.map(formArray, function (k, v) {*/
/*                     var name = k['name'],*/
/*                             objs = {};*/
/*                     objs[name] = k['value'];*/
/*                     _.assign(result, objs);*/
/*                 });*/
/*                 $.ajax({*/
/*                     url: "",*/
/*                     method: "POST",*/
/*                     dataType: "json",*/
/*                     data: result,*/
/*                     success: function (data) {*/
/*                         console.log(data);*/
/*                         bootbox.confirm("Print Nota?", function(action) {*/
/*                             if (action) {*/
/*                                 var tagihan = $("<input>")*/
/*                                         .attr("type", "hidden")*/
/*                                         .attr("name", "tagihan").val(data.kode_invoice);*/
/*                                 $(this).append($(tagihan));*/
/*                                 window.open(""+"/"+data.kode_invoice);*/
/*                                 return true;*/
/*                             }*/
/*                         });*/
/*                     },*/
/*                     complete: function() {*/
/* */
/*                     }*/
/*                 });*/
/*                 console.log(result);*/
/*             } else {*/
/*                 Messenger().post({*/
/*                     message: "Data harap diisi terlebih dahulu",*/
/*                     type: 'error',*/
/*                     showCloseButton: true*/
/*                 });*/
/*                 e.preventDefault();*/
/*             }*/
/*         });*//* */
/*         $("input[name=cari_pasien]").select2({*/
/*             minimumResultsForSearch: Infinity,*/
/*             width: "100%",*/
/*             minimumInputLength: 0,*/
/*             placeholder: "Cari nama atau No.Reg Pasien",*/
/*             id: function (bond) {*/
/*                 return bond.cust_usr_kode;*/
/*             },*/
/*             ajax: {*/
/*                 url: '{{url_pasien}}',*/
/*                 dataType: 'json',*/
/*                 quietMillis: 100,*/
/*                 data: function (term, page) {*/
/*                     return { search: term, offset: (page - 1) * 20, limit: 20 };*/
/*                 },*/
/*                 results: function (data, page) {*/
/*                     var more = (page * 20) < data.total;*/
/*                     return {results: data.rows, more: more};*/
/*                 }*/
/*             },*/
/*             initSelection: function(element, callback) {*/
/*                 var id = $(element).val();*/
/*                 if (id !== "") {*/
/*                     $.ajax("{{url_pasien}}", {*/
/*                         dataType: "json",*/
/*                         data: { search: id, offset: 0, limit: 1 }*/
/*                     }).done(function(data) { callback(data.rows[0]); });*/
/*                 }*/
/*             },*/
/*             escapeMarkup: function (markup) {*/
/*                 return markup;*/
/*             },*/
/*             formatSelection: function (repo) {*/
/*                 return repo.cust_usr_nama;*/
/*             },*/
/*             formatResult: function (repo) {*/
/*                 var markup = '<div class="row">' +*/
/*                         '<div class="col-sm-12">' + repo.cust_usr_nama + '</div>' +*/
/*                         '<ul style="font-size: 8px;">' +*/
/*                         '<li class="col-sm-12">'+ repo.cust_usr_kode +'</li>' +*/
/*                         '<li class="col-sm-12">'+ repo.cust_usr_alamat +'</li>'*/
/*                 '</ul>';*/
/* */
/*                 markup += '</div>';*/
/*                 return markup;*/
/*             }*/
/*         });*/
/*         $("input[name=cari_pasien]").on("change", function(e) {*/
/*             var data = e.added;*/
/*             var dataset = {};*/
/*             dataset["nama"] = data.cust_usr_nama;*/
/*             dataset["alamat"] = data.cust_usr_alamat;*/
/*             dataset["regno"] = data.cust_usr_kode;*/
/*             dataset["jpasien"] = data.reg_jenis_pasien;*/
/*             dataPasien(dataset);*/
/*         });*/
/*         $("input[name=price_list]").select2({*/
/*             width: "100%",*/
/*             minimumInputLength: 0,*/
/*             placeholder: "Cari Daftar Harga",*/
/*             id: function (bond) {*/
/*                 return bond.price_list_nama;*/
/*             },*/
/*             ajax: {*/
/*                 url: '{{url_price_list}}',*/
/*                 dataType: 'json',*/
/*                 quietMillis: 100,*/
/*                 data: function (term, page) {*/
/*                     return { search: term, offset: (page - 1) * 15, limit: 15 };*/
/*                 },*/
/*                 results: function (data, page) {*/
/*                     var more = (page * 15) < data.total;*/
/*                     return {results: data.rows, more: more};*/
/*                 }*/
/*             },*/
/*             initSelection: function(element, callback) {*/
/*                 var id = $(element).val();*/
/*                 if (id !== "") {*/
/*                     $.ajax("{{url_price_list}}", {*/
/*                         dataType: "json",*/
/*                         data: { search: id, offset: 0, limit: 1 }*/
/*                     }).done(function(data) {*/
/*                         $("#invoice_no").html("SINV-" + data.rows[0].kode_invoice);*/
/*                         paramsPage["jenis-tagihan"] = data.rows[0].price_list_nama;*/
/*                         callback(data.rows[0]);*/
/*                     });*/
/*                 }*/
/*             },*/
/*             escapeMarkup: function (markup) {*/
/*                 return markup;*/
/*             },*/
/*             formatSelection: function (repo) {*/
/*                 return repo.price_list_nama;*/
/*             },*/
/*             formatResult: function (repo) {*/
/*                 return repo.price_list_nama;*/
/*             }*/
/*         });*/
/*         $("input[name=price_list]").on("change", function(e) {*/
/*             var data = e.added;*/
/*             $("#invoice_no").html("SINV-" + data.kode_invoice);*/
/*             paramsPage["jenis-tagihan"] = data.price_list_nama;*/
/*             paramsPage["kode-tagihan"] = data.kode_invoice;*/
/*         });*/
/*         $("input[name=dokter]").select2({*/
/*             width: "100%",*/
/*             minimumInputLength: 0,*/
/*             placeholder: "Cari Daftar Harga",*/
/*             id: function (bond) {*/
/*                 return bond.pgw_id;*/
/*             },*/
/*             ajax: {*/
/*                 url: '{{url_dokter}}',*/
/*                 dataType: 'json',*/
/*                 quietMillis: 100,*/
/*                 data: function (term, page) {*/
/*                     return { search: term, offset: (page - 1) * 15, limit: 15 };*/
/*                 },*/
/*                 results: function (data, page) {*/
/*                     var more = (page * 15) < data.total;*/
/*                     return {results: data.rows, more: more};*/
/*                 }*/
/*             },*/
/*             initSelection: function(element, callback) {*/
/*                 var id = $(element).val();*/
/*                 if (id !== "") {*/
/*                     $.ajax("{{url_dokter}}", {*/
/*                         dataType: "json",*/
/*                         data: { search: id, offset: 0, limit: 1 }*/
/*                     }).done(function(data) { callback(data.rows[0]); });*/
/*                 }*/
/*             },*/
/*             escapeMarkup: function (markup) {*/
/*                 return markup;*/
/*             },*/
/*             formatSelection: function (repo) {*/
/*                 return repo.pgw_nama;*/
/*             },*/
/*             formatResult: function (repo) {*/
/*                 return repo.pgw_nama;*/
/*             }*/
/*         });*/
/*         $('input[name=bayar]').on("keyup", function(){*/
/*             $('input[name=bayar_total]').val($(this).val().replace(/,/gi, ''));*/
/*             calc();*/
/*         });*/
/*         {# $('#form_item').on('show.bs.modal', function(){*/
/*             $(this).find('.modal-content').load($('#item-add').data("href"));*/
/*         });#}*/
/*         $('#form_payment').on('show.bs.modal', function(){*/
/*             $('input[name=bayar]').focus();*/
/*             $('input[name=total-calc]').val(accounting.formatMoney($('input[name=total]').val().replace(/,/gi, ''), "Rp ", 2, ".", ","));*/
/*         });*/
/*     });*/
/*     function dataPasien(data)*/
/*     {*/
/*         var nama = $('input[name=pasien_nama]'),*/
/*                 alamat = $('textarea[name=pasien_alamat]'),*/
/*                 regno = $('input[name=reg_no]'),*/
/*                 jpasien = $('input[name=pasien_jenis]');*/
/*         nama.val(data.nama);*/
/*         alamat.text(data.alamat);*/
/*         regno.val(data.regno);*/
/*         jpasien.val(reg_status_pasien[data.jpasien]);*/
/* */
/*         $("input[name=price_list]").select2("val",data.jpasien == 3 ? "SWADANA" : "BPJS" );*/
/*     }*/
/*     function calc(){*/
/*         var vbayar = $('input[name=bayar]').val().replace(/,/gi, "");*/
/*         var total = $('input[name=total]').val().replace(/,/gi, "");*/
/*         console.log(vbayar);*/
/*         var bayar = vbayar > -1 ? vbayar : 0;*/
/*         var kembali = parseInt(bayar) - parseInt(total);*/
/* */
/*         $('input[name=kembali]').val(accounting.formatMoney((kembali > -1 ? kembali : 0), "Rp ", 2, ".", ","));*/
/*     }*/
/*     function calcBayar(){*/
/*         var total = 0;*/
/*         var rows = $gridpos.bootstrapTable('getData');*/
/*         console.log("wolezzzzs");*/
/*         if(rows.length > 0) {*/
/*             _.map(rows, function (row) {*/
/*                 total +=parseInt(row['item_amount']);*/
/*             });*/
/*             console.log(total);*/
/*         }*/
/* */
/*         $('input[name=total]').val(parseInt(total));*/
/*         $('input[name=total]').focus();*/
/*     }*/
/*     </script>*/
/* {% endblock %}*/
/* {% block content %}*/
/*     <form id="form-pos" class="form-horizontal" action="{{url_submit_status}}" method="POST" role="form">*/
/* */
/*         <div class="row">*/
/*             <div class="col-sm-12">*/
/*                 <div class="block-inner">*/
/*                     <div class="statistics-info">*/
/*                         <a href="#" title="" class="bg-danger"><i class="icon-cart-plus"></i></a>*/
/*                         <strong id="invoice_no">{{ data.invoice }}</strong><span class="pull-right"><strong>Kasir: {{ cashier }}</strong></span>*/
/*                     </div>*/
/*                     <div class="progress progress-micro">*/
/*                         <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 35%;">*/
/*                             <span class="sr-only">30% Complete</span>*/
/*                         </div>*/
/*                     </div>*/
/*                     <span>Sales Invoice #</span>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <h6 class="heading-hr"><i class="icon-paragraph-right2"></i>{{ title }}</h6>*/
/*         <div class="block">*/
/*             <div class="input-group input-group-lg">*/
/*                 <span class="input-group-addon"><i class="icon-calculate2"></i></span>*/
/*                 <input name="total" type="text" class="form-control" placeholder="0,00" value="0,00" style="text-align:right;" readonly/>*/
/*                 <input name="bayar_total" type="hidden" class="form-control" />*/
/*                 <span class="input-group-btn"><button type="button" data-toggle="modal" role="button" href="#form_payment" class="btn btn-info" >Bayar [F3]</button></span>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="col-sm-12">*/
/*                 <div class="block-inner">*/
/*                     <div class="panel-body">*/
/*                         <div class="form-group">*/
/*                             <div class="row">*/
/*                                 <div class="col-sm-3">*/
/*                                     <label>Nomer Pendaftaran:</label>*/
/*                                     <input type="text" placeholder="Pasien No.Reg" class="form-control"*/
/*                                            name="reg_no" value="{{ data.reg_no }}" />*/
/*                                 </div>*/
/*                                 <div class="col-sm-3">*/
/*                                     <label>Pasien nama:</label>*/
/*                                     <input type="text" placeholder="Pasien Nama" class="form-control"*/
/*                                            name="pasien_nama" value="{{ data.pasien_nama }}" />*/
/*                                 </div>*/
/*                                 <div class="col-sm-6">*/
/*                                     <label>Pencarian Pasien:</label>*/
/*                                     <div class="input-group input-group">*/
/*                                         <span class="input-group-addon"><i class="icon-user"></i></span>*/
/*                                         <input name="cari_pasien" type="hidden" class="cari_pasien" value="{{ data.cari_pasien }}" />*/
/*                                         <span class="input-group-btn"><button class="btn btn-danger" type="button">Pasien [F2]</button></span>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <div class="row">*/
/*                                 <div class="col-sm-6">*/
/*                                     <label>Pasien Alamat:</label>*/
/*                                     <textarea rows="5" placeholder="Pasien Alamat" class="form-control"*/
/*                                               name="pasien_alamat" >{{ data.pasien_alamat }}</textarea>*/
/*                                 </div>*/
/*                                 <div class="col-sm-6">*/
/*                                     <label>Tagihan [F4]:</label>*/
/*                                     <input type="hidden" placeholder="Jenis Tagihan"*/
/*                                            name="price_list" value="{{ data.price_list }}"/>*/
/*                                     <span class="help-block">e.g UMUM, ASKES, STMJ, JAMKESMAS</span>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <div class="row">*/
/*                                 <div class="col-sm-3">*/
/*                                     <label>Jenis Pasien:</label>*/
/*                                     <input type="text" placeholder="Jenis Pasien" class="form-control"*/
/*                                            name="pasien_jenis" value="{{ data.pasien_jenis }}" />*/
/*                                     <span class="help-block">jenis pasien saat registrasi. e.g SWADANA, BPJS ASKES, STMJ, JAMKESMAS</span>*/
/*                                 </div>*/
/*                                 <div class="col-sm-3">*/
/*                                     <label>Dokter :</label>*/
/*                                     <input type="hidden" placeholder="Cari nama Dokter"*/
/*                                            name="dokter" value="{{ data.dokter }}"/>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="form-group">*/
/*                             <div class="row">*/
/*                                 <div class="col-sm-12">*/
/*                                     <label>Keterangan:</label>*/
/*                                     <textarea type="text" name="keterangan" class="form-control" rows="5">{{data.keterangan}}</textarea>*/
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
/*             <a id="item-add" href="{{ modal_form }}?height=600&width=800" title="Form Penjualan Item Obat" class="thickbox btn btn-primary"><i class="icon-box-add"></i>Tambah Data</a>*/
/*             <button onclick="_handleRemoveRows();" class="btn btn-primary"><i class="icon-box-add"></i>Hapus Item</button>*/
/*         </div>*/
/* */
/*         <div class="datatable">*/
/*             <table id="table-pos"*/
/*                    data-toolbar="#post"*/
/*                    data-buttons-align="left"*/
/*                    data-toolbar-align="right"*/
/*                    data-pagination="true"*/
/*                    data-side-pagination="server"*/
/*                    data-page-list="[5, 10, 20, 50, 100, 200]"*/
/*                    data-click-to-select="true"*/
/*                    data-single-select="true"*/
/*                    data-height="480">*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/*     <!-- Form modal -->*/
/*     <div id="form_payment" class="modal fade" tabindex="-1" role="dialog">*/
/*         <div class="modal-dialog">*/
/*             <div class="modal-content">*/
/*                 <div class="modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*                     <h4 class="modal-title"><i class="icon-cart-checkout"></i> Pembayaran tagihan</h4>*/
/*                 </div>*/
/* */
/*                 <!-- Form inside modal -->*/
/*                 <form action="#" role="form">*/
/* */
/*                     <div class="modal-body with-padding">*/
/*                         <div class="block-inner text-danger">*/
/*                             <h6 class="heading-hr">Kasir: {{ cashier }} <small class="display-block">Mohon diisi dengan teliti detail pembayaran tagihan</small></h6>*/
/*                         </div>*/
/* */
/*                         <div class="block">*/
/*                             <div class="input-group input-group-lg">*/
/*                                 <span class="input-group-addon"><i class="icon-calculate2"></i></span>*/
/*                                 <input name="total-calc" type="text" class="form-control" placeholder="0,00" style="text-align:right;" readonly/>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="form-group">*/
/*                             <div class="row">*/
/*                                 <div class="col-sm-12">*/
/*                                     <label>Bayar</label>*/
/*                                     <input name="bayar" type="text" placeholder="0,00" style="text-align:right;" class="form-control" />*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="form-group">*/
/*                             <div class="row">*/
/*                                 <div class="col-sm-12">*/
/*                                     <label>kembali</label>*/
/*                                     <input name="kembali" type="text" placeholder="0,00" style="text-align:right;" class="form-control" readonly/>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="modal-footer">*/
/*                         <button type="button" class="btn btn-warning" data-dismiss="modal">Keluar [ESC]</button>*/
/*                         <button id="pay-nota" type="button" class="btn btn-primary">Bayar [F5]</button>*/
/*                     </div>*/
/* */
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <!-- /form modal -->*/
/*     <!-- Form modal -->*/
/*     <div id="form_item" class="modal fade" tabindex="-1" role="dialog">*/
/*         <div class="modal-dialog modal-lg">*/
/*             <div class="modal-content modal-body with-padding"></div>*/
/*         </div>*/
/*     </div>*/
/*     <!-- /form modal -->*/
/* {% endblock %}*/
