<?php

/* principal/grid_principal.twig */
class __TwigTemplate_79a7c125d155c35387b8323cbb007bd6c615fae4e58cc91fa7c2f28880805cee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("principal/index.twig", "principal/grid_principal.twig", 1);
        $this->blocks = array(
            'sub_css' => array($this, 'block_sub_css'),
            'sub_js' => array($this, 'block_sub_js'),
            'sub_content' => array($this, 'block_sub_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "principal/index.twig";
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
        echo "/\" + rows[0].nama,
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
        echo "/\" + rows[0].nama;
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
        \$(function () {
            \$grid.bootstrapTable({
                url: '";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["source_url"]) ? $context["source_url"] : null), "html", null, true);
        echo "',
                method: '";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["method"]) ? $context["method"] : null), "html", null, true);
        echo "',
                columns: ";
        // line 70
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

    // line 78
    public function block_sub_content($context, array $blocks = array())
    {
        // line 79
        echo "    <div class=\"block\">
        <h6 class=\"heading-hr\">
            <i class=\"icon-table\"></i> ";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "
        </h6>
        ";
        // line 83
        if ((isset($context["url_add"]) ? $context["url_add"] : null)) {
            // line 84
            echo "            <div class=\"well\">
                ";
            // line 85
            if ((isset($context["modal"]) ? $context["modal"] : null)) {
                // line 86
                echo "                    <button onclick=\"tb_remove();\" class=\"btn btn-primary\"><i class=\"icon-box-cancel\"></i>Batal</button>
                    <button onclick=\"buttonOK();\" class=\"btn btn-primary\"><i class=\"icon-box-cancel\"></i>Pilih</button>
                ";
            } else {
                // line 89
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, (isset($context["url_add"]) ? $context["url_add"] : null), "html", null, true);
                echo "\" class=\"btn btn-primary\"><i class=\"icon-box-add\"></i>Tambah Data</a>
                    <button onclick=\"action('ACTION_EDIT');\" class=\"btn btn-default\"><i class=\"icon-box-add\"></i>Ubah Data</button>
                    <button onclick=\"action('ACTION_REMOVE');\" class=\"btn btn-danger\"><i class=\"icon-box-remove\"></i>Hapus Data</button>
                ";
            }
            // line 93
            echo "
            </div>
        ";
        }
        // line 96
        echo "        <div class=\"datatable\">
            <table id=\"table\"
                   data-toolbar=\"#";
        // line 98
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
                   data-height=\"480\">
            </table>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "principal/grid_principal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 98,  189 => 96,  184 => 93,  176 => 89,  171 => 86,  169 => 85,  166 => 84,  164 => 83,  159 => 81,  155 => 79,  152 => 78,  140 => 70,  136 => 69,  132 => 68,  116 => 55,  106 => 48,  100 => 45,  80 => 27,  67 => 16,  65 => 15,  59 => 12,  52 => 8,  47 => 7,  44 => 6,  38 => 4,  33 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'principal/index.twig' %}*/
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
/*                                 url: "{{  url_remove }}/" + rows[0].nama,*/
/*                                 method: "POST",*/
/*                                 success: function() {*/
/*                                     $grid.bootstrapTable('refresh', {url: '{{source_url}}'});*/
/*                                 }*/
/*                             });*/
/*                             console.log("ACTION_REMOVE");*/
/*                         });*/
/*                         return;*/
/*                     case ACTION_EDIT:*/
/*                         window.location = "{{  url_edit }}/" + rows[0].nama;*/
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
/*                    data-height="480">*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
