<?php

/* component/gridview_o.twig */
class __TwigTemplate_a9afb1c921a17bb38be1d43ac855f1094a26b8439c96787fb2375bb52aa9e3f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("index.twig");

        $this->blocks = array(
            'basecss' => array($this, 'block_basecss'),
            'basejs' => array($this, 'block_basejs'),
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
        echo "<link rel=\"stylesheet\" href=\"asset/plugins/data-tables/DT_bootstrap.css\"/>
";
    }

    // line 5
    public function block_basejs($context, array $blocks = array())
    {
        // line 6
        echo "<script type=\"text/javascript\" src=\"asset/plugins/data-tables/jquery.dataTables.js\"></script>
<script type=\"text/javascript\" src=\"asset/plugins/data-tables/DT_bootstrap.js\"></script>
<script type=\"text/javascript\" charset=\"utf-8\">
\$(function () {
  oTable = \$('#dTable').dataTable({
    \"bJQueryUI\": false,
    \"bAutoWidth\": false,
    \"sPaginationType\": \"full_numbers\",
    \"sDom\": '<\"datatable-header\"fl><\"datatable-scroll\"t><\"datatable-footer\"ip>',
    \"oLanguage\": {
        \"sSearch\": \"<span>Filter:</span> _INPUT_\",
        \"sLengthMenu\": \"<span>Show entries:</span> _MENU_\",
        \"oPaginate\": { \"sFirst\": \"First\", \"sLast\": \"Last\", \"sNext\": \">\", \"sPrevious\": \"<\" }
    }
});
});
</script>
";
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        // line 25
        echo "<div class=\"panel panel-default\">
    <div class=\"panel-heading\"><h6 class=\"panel-title\"><i class=\"icon-table\"></i> ";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</h6></div>

        <div class=\"well\">
            <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["urlAdd"]) ? $context["urlAdd"] : null), "html", null, true);
        echo "\" class=\"btn btn-primary\"><i class=\"icon-box-add\"></i>Tambah Data</a>
        </div>
 
    <div class=\"datatable\">
        <table class=\"table table-striped table-bordered\" id=\"dTable\">
            <thead>
                <tr>
                    ";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["colnames"]) ? $context["colnames"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
            // line 37
            echo "                    <th>";
            echo twig_escape_filter($this->env, (isset($context["col"]) ? $context["col"] : null), "html", null, true);
            echo "</th>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cols"]) ? $context["cols"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
            // line 44
            echo "                <tr>
                    ";
            // line 45
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["col"]) ? $context["col"] : null), "field"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["cl"]) {
                // line 46
                echo "                    ";
                if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) {
                    // line 47
                    echo "                    ";
                    $context["fid"] = (isset($context["cl"]) ? $context["cl"] : null);
                    // line 48
                    echo "                    ";
                }
                // line 49
                echo "                    ";
                if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last")) {
                    // line 50
                    echo "                    ";
                    // line 51
                    echo "                    <td>";
                    echo twig_escape_filter($this->env, (isset($context["cl"]) ? $context["cl"] : null), "html", null, true);
                    echo "</td>
                    <td>
                        <div class=\"table-controls\">
                            <a href=\"";
                    // line 54
                    echo twig_escape_filter($this->env, (isset($context["urlEdit"]) ? $context["urlEdit"] : null), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, (isset($context["fid"]) ? $context["fid"] : null), "html", null, true);
                    echo "\" class=\"btn btn-default btn-icon btn-xs tip\" title=\"Edit entry\"><i class=\"icon-pencil\"></i></a>
                            <a href=\"";
                    // line 55
                    echo twig_escape_filter($this->env, (isset($context["urlDel"]) ? $context["urlDel"] : null), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, (isset($context["fid"]) ? $context["fid"] : null), "html", null, true);
                    echo "\" class=\"btn btn-default btn-icon btn-xs tip\" title=\"Remove entry\"><i class=\"icon-remove\"></i></a>
                            ";
                    // line 56
                    if ((!(null === (isset($context["print"]) ? $context["print"] : null)))) {
                        // line 57
                        echo "                            <a name=\"printid\" href=\"";
                        echo twig_escape_filter($this->env, (isset($context["urlPrint"]) ? $context["urlPrint"] : null), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, (isset($context["fid"]) ? $context["fid"] : null), "html", null, true);
                        echo "\" class=\"buttonS bBlack\">
                                <span class=\"icon-printer\" style=\"float: none;\"></span></a>

                                ";
                    }
                    // line 61
                    echo "                            </div>
                        </td>
                        ";
                } else {
                    // line 64
                    echo "                        <td>";
                    echo twig_escape_filter($this->env, (isset($context["cl"]) ? $context["cl"] : null), "html", null, true);
                    echo "</td>
                        ";
                }
                // line 66
                echo "                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cl'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                </tbody>
            </table>
        </div>
    </div>
    ";
    }

    public function getTemplateName()
    {
        return "component/gridview_o.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 69,  197 => 67,  183 => 66,  177 => 64,  172 => 61,  162 => 57,  160 => 56,  154 => 55,  148 => 54,  141 => 51,  139 => 50,  136 => 49,  133 => 48,  130 => 47,  127 => 46,  110 => 45,  107 => 44,  103 => 43,  97 => 39,  88 => 37,  84 => 36,  74 => 29,  68 => 26,  65 => 25,  62 => 24,  41 => 6,  38 => 5,  33 => 3,  30 => 2,);
    }
}
