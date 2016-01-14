<?php

/* uom/form_uom.twig */
class __TwigTemplate_1246b1ed7c88824854772f082c06dfd1f4eec009b6db107e79c5a0808998f8bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("uom/index.twig", "uom/form_uom.twig", 1);
        $this->blocks = array(
            'sub_css' => array($this, 'block_sub_css'),
            'sub_js' => array($this, 'block_sub_js'),
            'sub_content' => array($this, 'block_sub_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "uom/index.twig";
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
                    <i class=\"icon-anchor\"></i> Informasi Umum <small class=\"display-block\">Informasi Umum Tentang Unit Of Measure / Satuan Item</small>
                </h6>
            </div>

            <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">Nama UOM / Satuan:</label>
                <div class=\"col-sm-10\">
                    <input type=\"text\" class=\"form-control\" name=\"uom_nama\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "uom_nama", array()), "html", null, true);
        echo "\" />
                    <input type=\"hidden\" name=\"gen_id\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "uom_nama", array()), "html", null, true);
        echo "\" />
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">Status :</label>
                <div class=\"col-sm-10\">
                    <div class=\"checkbox\">
                        <label>
                            <input type=\"checkbox\" name=\"aktif\" class=\"styled\" ";
        // line 33
        if ((($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "aktif", array()) > 0) || twig_test_empty($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "uom_nama", array())))) {
            echo " checked=\"checked\"";
        }
        echo "/>
                            Aktif
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </form>
";
    }

    public function getTemplateName()
    {
        return "uom/form_uom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 33,  71 => 25,  67 => 24,  48 => 8,  43 => 7,  40 => 6,  35 => 4,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'uom/index.twig' %}*/
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
/*                     <i class="icon-anchor"></i> Informasi Umum <small class="display-block">Informasi Umum Tentang Unit Of Measure / Satuan Item</small>*/
/*                 </h6>*/
/*             </div>*/
/* */
/*             <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">Nama UOM / Satuan:</label>*/
/*                 <div class="col-sm-10">*/
/*                     <input type="text" class="form-control" name="uom_nama" value="{{ data.uom_nama }}" />*/
/*                     <input type="hidden" name="gen_id" value="{{ data.uom_nama }}" />*/
/*                 </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">Status :</label>*/
/*                 <div class="col-sm-10">*/
/*                     <div class="checkbox">*/
/*                         <label>*/
/*                             <input type="checkbox" name="aktif" class="styled" {% if data.aktif > 0 or data.uom_nama is empty%} checked="checked"{% endif %}/>*/
/*                             Aktif*/
/*                         </label>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </form>*/
/* {% endblock %}*/
/* */
