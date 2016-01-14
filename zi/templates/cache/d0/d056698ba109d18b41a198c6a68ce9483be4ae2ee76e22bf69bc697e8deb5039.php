<?php

/* item/griditem.twig */
class __TwigTemplate_f764e82c34ed63cb2270b0781b18a5342fba2eb1bc49d575a19dc51ac98bcb4d extends Twig_Template
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
        echo "<link href=\"";
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/css/londinium-theme.css\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/css/styles.css\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/css/icons.css\" rel=\"stylesheet\" type=\"text/css\">
<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/plugins/bootstrap-table/dist/bootstrap-table.css\"/>
<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/plugins/thickbox/css/thickbox.css\"/>
<script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/js/jquery-1.10.1.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/plugins/bootstrap-table/dist/bootstrap-table.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/plugins/thickbox/js/thickbox.js\"></script>
<script type=\"text/javascript\" charset=\"utf-8\">
    var tb_pathToImage = \"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/plugins/thickbox/img/ico_waiting.gif\";
    var data = null;
    var \$grid = \$('#table');
    function pilihItemOK()
    {
        var rows = \$grid.bootstrapTable('getSelections');
        if(rows.length > 0) {
            _.assign(rows[0], {\"item_qty\": \$(\"#item_jumlah\").val()});
            self.parent.insertData(rows[0]);
            console.log(rows);
            tb_remove();
        }
    }
    \$(function () {

        \$grid.bootstrapTable({
            url: '";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["source_url"]) ? $context["source_url"] : null), "html", null, true);
        echo "',
            method: '";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["method"]) ? $context["method"] : null), "html", null, true);
        echo "',
            columns: ";
        // line 29
        echo (isset($context["cols"]) ? $context["cols"] : null);
        echo "
        });
        \$grid.on('check.bs.table', function (\$el, data) {
//            pilihItemOK();
//            self.parent.insertData(data);
        });

    });
</script>

<!-- Page container -->
<div class=\"page-container\">
    <!-- Page content -->
    <div class=\"content\">
        <div class=\"block\">
            <h6 class=\"heading-hr\">
                <i class=\"icon-table\"></i> ";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "
            </h6>
            <div class=\"well\">
                <button onclick=\"tb_remove();\" class=\"btn btn-primary\"><i class=\"icon-box-cancel\"></i>Batal</button>
                <button onclick=\"pilihItemOK();\" class=\"btn btn-primary\"><i class=\"icon-box-cancel\"></i>Pilih</button>
            </div>
            <div class=\"form-group\">
                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <label>Jumlah Item:</label>
                        <input id=\"item_jumlah\" type=\"text\" class=\"form-control\" name=\"item_jumlah\" />
                    </div>
                </div>
            </div>
            <div class=\"datatable\">
                <table id=\"table\"
                       data-toolbar=\"#post\"
                       data-show-refresh=\"true\"
                       data-search-align=\"left\"
                       data-buttons-align=\"left\"
                       data-toolbar-align=\"right\"
                       data-pagination=\"true\"
                       data-side-pagination=\"server\"
                       data-page-list=\"[5, 10, 20, 50, 100, 200]\"
                       data-search=\"true\"
                       data-check-on-init=\"true\"
                       data-click-to-select=\"true\"
                       data-single-select=\"true\"
                       data-height=\"480\">
                </table>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "item/griditem.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 45,  84 => 29,  80 => 28,  76 => 27,  57 => 11,  52 => 9,  48 => 8,  44 => 7,  40 => 6,  36 => 5,  32 => 4,  28 => 3,  24 => 2,  19 => 1,);
    }
}
/* <link href="{{baseurl}}assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">*/
/* <link href="{{baseurl}}assets/css/londinium-theme.css" rel="stylesheet" type="text/css">*/
/* <link href="{{baseurl}}assets/css/styles.css" rel="stylesheet" type="text/css">*/
/* <link href="{{baseurl}}assets/css/icons.css" rel="stylesheet" type="text/css">*/
/* <link rel="stylesheet" href="{{baseurl}}assets/plugins/bootstrap-table/dist/bootstrap-table.css"/>*/
/* <link rel="stylesheet" href="{{baseurl}}assets/plugins/thickbox/css/thickbox.css"/>*/
/* <script type="text/javascript" src="{{baseurl}}assets/js/jquery-1.10.1.min.js"></script>*/
/* <script type="text/javascript" src="{{baseurl}}assets/plugins/bootstrap-table/dist/bootstrap-table.js"></script>*/
/* <script type="text/javascript" src="{{baseurl}}assets/plugins/thickbox/js/thickbox.js"></script>*/
/* <script type="text/javascript" charset="utf-8">*/
/*     var tb_pathToImage = "{{baseurl}}assets/plugins/thickbox/img/ico_waiting.gif";*/
/*     var data = null;*/
/*     var $grid = $('#table');*/
/*     function pilihItemOK()*/
/*     {*/
/*         var rows = $grid.bootstrapTable('getSelections');*/
/*         if(rows.length > 0) {*/
/*             _.assign(rows[0], {"item_qty": $("#item_jumlah").val()});*/
/*             self.parent.insertData(rows[0]);*/
/*             console.log(rows);*/
/*             tb_remove();*/
/*         }*/
/*     }*/
/*     $(function () {*/
/* */
/*         $grid.bootstrapTable({*/
/*             url: '{{source_url}}',*/
/*             method: '{{method}}',*/
/*             columns: {{cols | raw}}*/
/*         });*/
/*         $grid.on('check.bs.table', function ($el, data) {*/
/* //            pilihItemOK();*/
/* //            self.parent.insertData(data);*/
/*         });*/
/* */
/*     });*/
/* </script>*/
/* */
/* <!-- Page container -->*/
/* <div class="page-container">*/
/*     <!-- Page content -->*/
/*     <div class="content">*/
/*         <div class="block">*/
/*             <h6 class="heading-hr">*/
/*                 <i class="icon-table"></i> {{ title }}*/
/*             </h6>*/
/*             <div class="well">*/
/*                 <button onclick="tb_remove();" class="btn btn-primary"><i class="icon-box-cancel"></i>Batal</button>*/
/*                 <button onclick="pilihItemOK();" class="btn btn-primary"><i class="icon-box-cancel"></i>Pilih</button>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <div class="row">*/
/*                     <div class="col-sm-6">*/
/*                         <label>Jumlah Item:</label>*/
/*                         <input id="item_jumlah" type="text" class="form-control" name="item_jumlah" />*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="datatable">*/
/*                 <table id="table"*/
/*                        data-toolbar="#post"*/
/*                        data-show-refresh="true"*/
/*                        data-search-align="left"*/
/*                        data-buttons-align="left"*/
/*                        data-toolbar-align="right"*/
/*                        data-pagination="true"*/
/*                        data-side-pagination="server"*/
/*                        data-page-list="[5, 10, 20, 50, 100, 200]"*/
/*                        data-search="true"*/
/*                        data-check-on-init="true"*/
/*                        data-click-to-select="true"*/
/*                        data-single-select="true"*/
/*                        data-height="480">*/
/*                 </table>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
