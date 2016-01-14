<?php

/* stock/grid_stock_entry.twig */
class __TwigTemplate_8570103ebaed83a6460b1c9129ac62e3715d03217b521c0d64e3fb9d0079e0a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("stock/index.twig", "stock/grid_stock_entry.twig", 1);
        $this->blocks = array(
            'sub_css' => array($this, 'block_sub_css'),
            'sub_js' => array($this, 'block_sub_js'),
            'sub_content' => array($this, 'block_sub_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "stock/index.twig";
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

        var tb_pathToImage = \"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/plugins/thickbox/img/ico_waiting.gif\";
        var \$grid = \$('#table');


        \$(function () {
            \$grid.bootstrapTable({
                url: '";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["source_url"]) ? $context["source_url"] : null), "html", null, true);
        echo "',
                method: '";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["method"]) ? $context["method"] : null), "html", null, true);
        echo "',
                columns: ";
        // line 19
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

    // line 27
    public function block_sub_content($context, array $blocks = array())
    {
        // line 28
        echo "    <div class=\"block\">
        <h6 class=\"heading-hr\">
            <i class=\"icon-table\"></i> ";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "
        </h6>

        <div class=\"datatable\">
            <table id=\"table\"
                   data-toolbar=\"#";
        // line 35
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
        return "stock/grid_stock_entry.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 35,  94 => 30,  90 => 28,  87 => 27,  75 => 19,  71 => 18,  67 => 17,  58 => 11,  52 => 8,  47 => 7,  44 => 6,  38 => 4,  33 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'stock/index.twig' %}*/
/* {% block sub_css %}*/
/*     <link rel="stylesheet" href="{{baseurl}}assets/plugins/bootstrap-table/dist/bootstrap-table.css"/>*/
/*     <link rel="stylesheet" href="{{baseurl}}assets/plugins/thickbox/css/thickbox.css"/>*/
/* {% endblock %}*/
/* {% block sub_js %}*/
/*     <script type="text/javascript" src="{{baseurl}}assets/plugins/bootstrap-table/dist/bootstrap-table.js"></script>*/
/*     <script type="text/javascript" src="{{baseurl}}assets/plugins/thickbox/js/thickbox.js"></script>*/
/*     <script type="text/javascript" charset="utf-8">*/
/* */
/*         var tb_pathToImage = "{{baseurl}}assets/plugins/thickbox/img/ico_waiting.gif";*/
/*         var $grid = $('#table');*/
/* */
/* */
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
/* */
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
