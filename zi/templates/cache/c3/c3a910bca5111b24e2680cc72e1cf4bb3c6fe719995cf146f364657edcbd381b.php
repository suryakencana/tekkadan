<?php

/* itemprice/grid_itemprice.twig */
class __TwigTemplate_6312e29d52e831889742068a62224f585f7d3296bffb745f08446bdca0abf543 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("itemprice/index.twig", "itemprice/grid_itemprice.twig", 1);
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

    // line 6
    public function block_sub_js($context, array $blocks = array())
    {
        // line 7
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/plugins/bootstrap-table/dist/bootstrap-table.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/plugins/thickbox/js/thickbox.js\"></script>
    <script type=\"text/javascript\" charset=\"utf-8\">
        const ACTION_REMOVE = 'ACTION_REMOVE';
        const ACTION_EDIT = 'ACTION_EDIT';
        var tb_pathToImage = \"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/plugins/thickbox/img/ico_waiting.gif\";
        var \$grid = \$('#table');

        ";
        // line 15
        if ((isset($context["modal"]) ? $context["modal"] : null)) {
            // line 16
            echo "        function buttonOK()
        {
            var rows = \$grid.bootstrapTable('getSelections');
            if(rows.length > 0) {
                _.assign(rows[0], {\"item_qty\": \$(\"#item_jumlah\").val()});
                self.parent.insertData(rows[0]);
                console.log(rows);
                tb_remove();
            }
        }
        ";
        }
        // line 27
        echo "
        function action(type)
        {
            var rows = \$grid.bootstrapTable('getSelections');
            if(rows.length > 0) {
                switch (type) {
                    case ACTION_REMOVE:
                        bootbox.confirm(\"Sudah yakin anda?\", function(action) {
                            if(!action) {
                                return;
                            }
                            Messenger({
                                extraClasses: 'messenger-fixed messenger-on-top'
                            }).run({
                                successMessage: 'Data terhapus.',
                                errorMessage: 'Terjadi kesalahan pada data atau server.',
                                progressMessage: 'Sedang proses simpan data...'
                            }, {
                                url: \"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["url_remove"]) ? $context["url_remove"] : null), "html", null, true);
        echo "/\" + rows[0].id,
                                method: \"POST\",
                                success: function() {
                                    \$grid.bootstrapTable('refresh', {url: '";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["source_url"]) ? $context["source_url"] : null), "html", null, true);
        echo "'});
                                }
                            });
                            console.log(\"ACTION_REMOVE\");
                        });
                        return;
                    case ACTION_EDIT:
                        window.location = \"";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["url_edit"]) ? $context["url_edit"] : null), "html", null, true);
        echo "/\" + rows[0].id;
                        return;
                }
            } else {
                Messenger().post({
                    message: 'Pilih data terlebih dahulu.',
                    type: 'info',
                    showCloseButton: true
                });
            }
        }
        function pQueryParams(params)
        {
            params.anchor = \"";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["anchor"]) ? $context["anchor"] : null), "html", null, true);
        echo "\";
            params.value = \"";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "\";
            return JSON.stringify(params);
        }
        \$(function () {
            \$grid.bootstrapTable({
                url: '";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["source_url"]) ? $context["source_url"] : null), "html", null, true);
        echo "',
                method: '";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["method"]) ? $context["method"] : null), "html", null, true);
        echo "',
                columns: ";
        // line 76
        echo (isset($context["cols"]) ? $context["cols"] : null);
        echo "
            });
            \$grid.on('check.bs.table', function (\$el, data) {
                console.log(data);
            });
        });
    </script>
";
    }

    // line 84
    public function block_sub_content($context, array $blocks = array())
    {
        // line 85
        echo "    <div class=\"block\">
        <h6 class=\"heading-hr\">
            <i class=\"icon-table\"></i> ";
        // line 87
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "
        </h6>
        ";
        // line 89
        if ((isset($context["url_add"]) ? $context["url_add"] : null)) {
            // line 90
            echo "            <div class=\"well\">
                ";
            // line 91
            if ((isset($context["modal"]) ? $context["modal"] : null)) {
                // line 92
                echo "                    <button onclick=\"tb_remove();\" class=\"btn btn-primary\"><i class=\"icon-box-cancel\"></i>Batal</button>
                    <button onclick=\"buttonOK();\" class=\"btn btn-primary\"><i class=\"icon-box-cancel\"></i>Pilih</button>
                ";
            } else {
                // line 95
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, (isset($context["url_add"]) ? $context["url_add"] : null), "html", null, true);
                echo "\" class=\"btn btn-primary\"><i class=\"icon-box-add\"></i>Tambah Data</a>
                    <button onclick=\"action('ACTION_EDIT');\" class=\"btn btn-default\"><i class=\"icon-box-add\"></i>Ubah Data</button>
                    <button onclick=\"action('ACTION_REMOVE');\" class=\"btn btn-danger\"><i class=\"icon-box-remove\"></i>Hapus Data</button>
                ";
            }
            // line 99
            echo "
            </div>
        ";
        }
        // line 102
        echo "        <div class=\"datatable\">
            <table id=\"table\"
                   data-toolbar=\"#";
        // line 104
        echo twig_escape_filter($this->env, (isset($context["method"]) ? $context["method"] : null), "html", null, true);
        echo "\"
                   data-show-refresh=\"true\"
                   data-search-align=\"left\"
                   data-buttons-align=\"left\"
                   data-toolbar-align=\"right\"
                   data-pagination=\"true\"
                   data-side-pagination=\"server\"
                   data-page-list=\"[5, 10, 20, 50, 100, 200]\"
                   data-search=\"true\"
                   data-click-to-select=\"true\"
                   data-single-select=\"true\"
                   data-height=\"480\"
                   ";
        // line 116
        if (((isset($context["method"]) ? $context["method"] : null) == "POST")) {
            echo " data-query-params=\"pQueryParams\" ";
        }
        echo ">
            </table>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "itemprice/grid_itemprice.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 116,  205 => 104,  201 => 102,  196 => 99,  188 => 95,  183 => 92,  181 => 91,  178 => 90,  176 => 89,  171 => 87,  167 => 85,  164 => 84,  152 => 76,  148 => 75,  144 => 74,  136 => 69,  132 => 68,  116 => 55,  106 => 48,  100 => 45,  80 => 27,  67 => 16,  65 => 15,  59 => 12,  52 => 8,  47 => 7,  44 => 6,  38 => 4,  33 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'itemprice/index.twig' %}*/
/* {% block sub_css %}*/
/*     <link rel="stylesheet" href="{{baseurl}}assets/plugins/bootstrap-table/dist/bootstrap-table.css"/>*/
/*     <link rel="stylesheet" href="{{baseurl}}assets/plugins/thickbox/css/thickbox.css"/>*/
/* {% endblock %}*/
/* {% block sub_js %}*/
/*     <script type="text/javascript" src="{{baseurl}}assets/plugins/bootstrap-table/dist/bootstrap-table.js"></script>*/
/*     <script type="text/javascript" src="{{baseurl}}assets/plugins/thickbox/js/thickbox.js"></script>*/
/*     <script type="text/javascript" charset="utf-8">*/
/*         const ACTION_REMOVE = 'ACTION_REMOVE';*/
/*         const ACTION_EDIT = 'ACTION_EDIT';*/
/*         var tb_pathToImage = "{{baseurl}}assets/plugins/thickbox/img/ico_waiting.gif";*/
/*         var $grid = $('#table');*/
/* */
/*         {% if modal %}*/
/*         function buttonOK()*/
/*         {*/
/*             var rows = $grid.bootstrapTable('getSelections');*/
/*             if(rows.length > 0) {*/
/*                 _.assign(rows[0], {"item_qty": $("#item_jumlah").val()});*/
/*                 self.parent.insertData(rows[0]);*/
/*                 console.log(rows);*/
/*                 tb_remove();*/
/*             }*/
/*         }*/
/*         {% endif %}*/
/* */
/*         function action(type)*/
/*         {*/
/*             var rows = $grid.bootstrapTable('getSelections');*/
/*             if(rows.length > 0) {*/
/*                 switch (type) {*/
/*                     case ACTION_REMOVE:*/
/*                         bootbox.confirm("Sudah yakin anda?", function(action) {*/
/*                             if(!action) {*/
/*                                 return;*/
/*                             }*/
/*                             Messenger({*/
/*                                 extraClasses: 'messenger-fixed messenger-on-top'*/
/*                             }).run({*/
/*                                 successMessage: 'Data terhapus.',*/
/*                                 errorMessage: 'Terjadi kesalahan pada data atau server.',*/
/*                                 progressMessage: 'Sedang proses simpan data...'*/
/*                             }, {*/
/*                                 url: "{{  url_remove }}/" + rows[0].id,*/
/*                                 method: "POST",*/
/*                                 success: function() {*/
/*                                     $grid.bootstrapTable('refresh', {url: '{{source_url}}'});*/
/*                                 }*/
/*                             });*/
/*                             console.log("ACTION_REMOVE");*/
/*                         });*/
/*                         return;*/
/*                     case ACTION_EDIT:*/
/*                         window.location = "{{  url_edit }}/" + rows[0].id;*/
/*                         return;*/
/*                 }*/
/*             } else {*/
/*                 Messenger().post({*/
/*                     message: 'Pilih data terlebih dahulu.',*/
/*                     type: 'info',*/
/*                     showCloseButton: true*/
/*                 });*/
/*             }*/
/*         }*/
/*         function pQueryParams(params)*/
/*         {*/
/*             params.anchor = "{{ anchor }}";*/
/*             params.value = "{{ value }}";*/
/*             return JSON.stringify(params);*/
/*         }*/
/*         $(function () {*/
/*             $grid.bootstrapTable({*/
/*                 url: '{{source_url}}',*/
/*                 method: '{{method}}',*/
/*                 columns: {{cols | raw}}*/
/*             });*/
/*             $grid.on('check.bs.table', function ($el, data) {*/
/*                 console.log(data);*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* {% block sub_content %}*/
/*     <div class="block">*/
/*         <h6 class="heading-hr">*/
/*             <i class="icon-table"></i> {{ title }}*/
/*         </h6>*/
/*         {% if url_add %}*/
/*             <div class="well">*/
/*                 {% if modal %}*/
/*                     <button onclick="tb_remove();" class="btn btn-primary"><i class="icon-box-cancel"></i>Batal</button>*/
/*                     <button onclick="buttonOK();" class="btn btn-primary"><i class="icon-box-cancel"></i>Pilih</button>*/
/*                 {% else %}*/
/*                     <a href="{{url_add}}" class="btn btn-primary"><i class="icon-box-add"></i>Tambah Data</a>*/
/*                     <button onclick="action('ACTION_EDIT');" class="btn btn-default"><i class="icon-box-add"></i>Ubah Data</button>*/
/*                     <button onclick="action('ACTION_REMOVE');" class="btn btn-danger"><i class="icon-box-remove"></i>Hapus Data</button>*/
/*                 {% endif %}*/
/* */
/*             </div>*/
/*         {% endif %}*/
/*         <div class="datatable">*/
/*             <table id="table"*/
/*                    data-toolbar="#{{method}}"*/
/*                    data-show-refresh="true"*/
/*                    data-search-align="left"*/
/*                    data-buttons-align="left"*/
/*                    data-toolbar-align="right"*/
/*                    data-pagination="true"*/
/*                    data-side-pagination="server"*/
/*                    data-page-list="[5, 10, 20, 50, 100, 200]"*/
/*                    data-search="true"*/
/*                    data-click-to-select="true"*/
/*                    data-single-select="true"*/
/*                    data-height="480"*/
/*                    {% if method == "POST" %} data-query-params="pQueryParams" {% endif %}>*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
