<?php

/* warehouse/form_warehouse.twig */
class __TwigTemplate_6bd9d26e0a98ac831eb71d47b71187ea3d75572f52da054c50d7db5c75019db1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("warehouse/index.twig", "warehouse/form_warehouse.twig", 1);
        $this->blocks = array(
            'sub_css' => array($this, 'block_sub_css'),
            'sub_js' => array($this, 'block_sub_js'),
            'sub_content' => array($this, 'block_sub_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "warehouse/index.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_sub_css($context, array $blocks = array())
    {
    }

    // line 4
    public function block_sub_js($context, array $blocks = array())
    {
    }

    // line 6
    public function block_sub_content($context, array $blocks = array())
    {
        // line 7
        echo "    <form class=\"form-horizontal\" action=\"";
        echo twig_escape_filter($this->env, (isset($context["url_submit"]) ? $context["url_submit"] : null), "html", null, true);
        echo "\" method=\"POST\" role=\"form\">
        <h6 class=\"heading-hr\"><i class=\"icon-paragraph-right2\"></i> ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</h6>

        <div class=\"form-actions text-right\">
            <input type=\"submit\" value=\"Submit\" class=\"btn btn-primary\">
        </div>

        <div class=\"block-inner\">
            <div class=\"block-inner\">
                <h6 class=\"heading-hr\">
                    <i class=\"icon-user\"></i> Informasi Umum <small class=\"display-block\">Informasi Umum Tentang Gudang</small>
                </h6>
            </div>

            <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">Nama Gudang:</label>
                <div class=\"col-sm-10\">
                    <input type=\"text\" class=\"form-control\" name=\"warehouse_nama\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "warehouse_nama", array()), "html", null, true);
        echo "\" />
                    <input type=\"hidden\" name=\"gen_id\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array()), "html", null, true);
        echo "\" />
                </div>
            </div>

            <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">Keterangan Gudang:</label>
                <div class=\"col-sm-10\">
                    <textarea class=\"form-control\" name=\"keterangan\" >";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "keterangan", array()), "html", null, true);
        echo "</textarea>
                </div>
            </div>
        </div>
    </form>
";
    }

    public function getTemplateName()
    {
        return "warehouse/form_warehouse.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 32,  71 => 25,  67 => 24,  48 => 8,  43 => 7,  40 => 6,  35 => 4,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'warehouse/index.twig' %}*/
/* {% block sub_css %}*/
/* {% endblock %}*/
/* {% block sub_js %}*/
/* {% endblock %}*/
/* {% block sub_content %}*/
/*     <form class="form-horizontal" action="{{ url_submit }}" method="POST" role="form">*/
/*         <h6 class="heading-hr"><i class="icon-paragraph-right2"></i> {{ title }}</h6>*/
/* */
/*         <div class="form-actions text-right">*/
/*             <input type="submit" value="Submit" class="btn btn-primary">*/
/*         </div>*/
/* */
/*         <div class="block-inner">*/
/*             <div class="block-inner">*/
/*                 <h6 class="heading-hr">*/
/*                     <i class="icon-user"></i> Informasi Umum <small class="display-block">Informasi Umum Tentang Gudang</small>*/
/*                 </h6>*/
/*             </div>*/
/* */
/*             <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">Nama Gudang:</label>*/
/*                 <div class="col-sm-10">*/
/*                     <input type="text" class="form-control" name="warehouse_nama" value="{{ data.warehouse_nama }}" />*/
/*                     <input type="hidden" name="gen_id" value="{{ data.id }}" />*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">Keterangan Gudang:</label>*/
/*                 <div class="col-sm-10">*/
/*                     <textarea class="form-control" name="keterangan" >{{ data.keterangan }}</textarea>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </form>*/
/* {% endblock %}*/
