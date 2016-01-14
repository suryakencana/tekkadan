<?php

/* principal/form_principal.twig */
class __TwigTemplate_87067d025c886c9a114bfee7f6adf306d2d41114e4fb26aa2bdf2448ea74b1ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("uom/index.twig", "principal/form_principal.twig", 1);
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
                    <i class=\"icon-anchor\"></i> Informasi Umum <small class=\"display-block\">Informasi Umum Tentang Brand Item</small>
                </h6>
            </div>

            <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">Nama Brand:</label>
                <div class=\"col-sm-10\">
                    <input type=\"text\" class=\"form-control\" name=\"nama\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "nama", array()), "html", null, true);
        echo "\" />
                    <input type=\"hidden\" name=\"gen_id\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "nama", array()), "html", null, true);
        echo "\" />
                </div>
            </div>
        </div>
    </form>
";
    }

    public function getTemplateName()
    {
        return "principal/form_principal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 25,  67 => 24,  48 => 8,  43 => 7,  40 => 6,  35 => 4,  30 => 2,  11 => 1,);
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
/*                     <i class="icon-anchor"></i> Informasi Umum <small class="display-block">Informasi Umum Tentang Brand Item</small>*/
/*                 </h6>*/
/*             </div>*/
/* */
/*             <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">Nama Brand:</label>*/
/*                 <div class="col-sm-10">*/
/*                     <input type="text" class="form-control" name="nama" value="{{ data.nama }}" />*/
/*                     <input type="hidden" name="gen_id" value="{{ data.nama }}" />*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </form>*/
/* {% endblock %}*/
