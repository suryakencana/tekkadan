<?php

/* warehouse/index.twig */
class __TwigTemplate_8397cbf5b119002de000296106b629df223f679cc4d3b51259cde31cf950467f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("index.twig", "warehouse/index.twig", 2);
        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'sub_css' => array($this, 'block_sub_css'),
            'js' => array($this, 'block_js'),
            'sub_js' => array($this, 'block_sub_js'),
            'content' => array($this, 'block_content'),
            'sub_content' => array($this, 'block_sub_content'),
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

    // line 3
    public function block_css($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        $this->displayBlock('sub_css', $context, $blocks);
    }

    public function block_sub_css($context, array $blocks = array())
    {
    }

    // line 7
    public function block_js($context, array $blocks = array())
    {
        // line 8
        echo "
    ";
        // line 9
        $this->displayBlock('sub_js', $context, $blocks);
    }

    public function block_sub_js($context, array $blocks = array())
    {
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->displayBlock('sub_content', $context, $blocks);
    }

    public function block_sub_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "warehouse/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 12,  61 => 11,  53 => 9,  50 => 8,  47 => 7,  39 => 5,  36 => 4,  33 => 3,  11 => 2,);
    }
}
/* {# controller index #}*/
/* {% extends 'index.twig' %}*/
/* {% block css %}*/
/* */
/*     {% block sub_css %}{% endblock %}*/
/* {% endblock %}*/
/* {% block js %}*/
/* */
/*     {% block sub_js %}{% endblock %}*/
/* {% endblock %}*/
/* {% block content %}*/
/*     {% block sub_content %}{% endblock %}*/
/* {% endblock %}*/
