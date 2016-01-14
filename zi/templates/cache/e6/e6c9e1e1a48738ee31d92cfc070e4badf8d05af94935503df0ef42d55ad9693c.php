<?php

/* component/gridbootstrap.twig */
class __TwigTemplate_20670b30d57d82fde4650c6cb088343ee8b7651b40fad01ca1916e41e82bc3d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "component/gridbootstrap.twig", 1);
        $this->blocks = array(
            'css' => array($this, 'block_css'),
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
    public function block_css($context, array $blocks = array())
    {
        // line 3
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/plugins/bootstrap-table/dist/bootstrap-table.css\"/>
<link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/plugins/thickbox/css/thickbox.css\"/>
";
    }

    // line 6
    public function block_js($context, array $blocks = array())
    {
        // line 7
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/plugins/bootstrap-table/dist/bootstrap-table.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/plugins/thickbox/js/thickbox.js\"></script>
<script type=\"text/javascript\" charset=\"utf-8\">
 var tb_pathToImage = \"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/plugins/thickbox/img/ico_waiting.gif\";
  \$(function () {
    var \$grid = \$('#table');
    \$grid.bootstrapTable({
      url: '";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["source_url"]) ? $context["source_url"] : null), "html", null, true);
        echo "',
      method: '";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["method"]) ? $context["method"] : null), "html", null, true);
        echo "',
      columns: ";
        // line 16
        echo (isset($context["cols"]) ? $context["cols"] : null);
        echo "
    });
  });
</script>
";
    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        // line 22
        echo "<div class=\"block\">
  <h6 class=\"heading-hr\">
    <i class=\"icon-table\"></i> ";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "
  </h6>
  ";
        // line 26
        if ((isset($context["urlAdd"]) ? $context["urlAdd"] : null)) {
            // line 27
            echo "  <div class=\"well\">
    <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["urlAdd"]) ? $context["urlAdd"] : null), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i class=\"icon-box-add\"></i>Tambah Data</a>
  </div>
  ";
        }
        // line 31
        echo "  <div class=\"datatable\">
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
";
    }

    public function getTemplateName()
    {
        return "component/gridbootstrap.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 31,  98 => 28,  95 => 27,  93 => 26,  88 => 24,  84 => 22,  81 => 21,  72 => 16,  68 => 15,  64 => 14,  57 => 10,  52 => 8,  47 => 7,  44 => 6,  38 => 4,  33 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'index.twig' %}*/
/* {% block css %}*/
/* <link rel="stylesheet" href="{{baseurl}}assets/plugins/bootstrap-table/dist/bootstrap-table.css"/>*/
/* <link rel="stylesheet" href="{{baseurl}}assets/plugins/thickbox/css/thickbox.css"/>*/
/* {% endblock %}*/
/* {% block js %}*/
/* <script type="text/javascript" src="{{baseurl}}assets/plugins/bootstrap-table/dist/bootstrap-table.js"></script>*/
/* <script type="text/javascript" src="{{baseurl}}assets/plugins/thickbox/js/thickbox.js"></script>*/
/* <script type="text/javascript" charset="utf-8">*/
/*  var tb_pathToImage = "{{baseurl}}assets/plugins/thickbox/img/ico_waiting.gif";*/
/*   $(function () {*/
/*     var $grid = $('#table');*/
/*     $grid.bootstrapTable({*/
/*       url: '{{source_url}}',*/
/*       method: '{{method}}',*/
/*       columns: {{cols | raw}}*/
/*     });*/
/*   });*/
/* </script>*/
/* {% endblock %}*/
/* {% block content %}*/
/* <div class="block">*/
/*   <h6 class="heading-hr">*/
/*     <i class="icon-table"></i> {{ title }}*/
/*   </h6>*/
/*   {% if urlAdd %}*/
/*   <div class="well">*/
/*     <a href="{{urlAdd}}" class="btn btn-primary"><i class="icon-box-add"></i>Tambah Data</a>*/
/*   </div>*/
/*   {% endif %}*/
/*   <div class="datatable">*/
/*     <table id="table"*/
/*     data-toolbar="#post"*/
/*     data-show-refresh="true"*/
/*     data-search-align="left"*/
/*     data-buttons-align="left"*/
/*     data-toolbar-align="right"*/
/*     data-pagination="true"*/
/*     data-side-pagination="server"*/
/*     data-page-list="[5, 10, 20, 50, 100, 200]"*/
/*     data-search="true"*/
/*     data-check-on-init="true"*/
/*     data-click-to-select="true"*/
/*     data-single-select="true"*/
/*     data-height="480">*/
/*   </table>*/
/* </div>*/
/* </div>*/
/* {% endblock %}*/
