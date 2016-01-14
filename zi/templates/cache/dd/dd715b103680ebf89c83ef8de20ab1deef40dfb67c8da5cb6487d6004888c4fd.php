<?php

/* /viewku/test_chat.twig */
class __TwigTemplate_e2ce05d8c5359f0b34cb9e277aea4c95acc2aa8364be6c92490a46fdb0fdf8b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.twig", "/viewku/test_chat.twig", 1);
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
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/plugins/bootstrap-table/dist/bootstrap-table.css\"/>
";
    }

    // line 5
    public function block_basejs($context, array $blocks = array())
    {
        // line 6
        echo "    <script type=\"text/javascript\">
        var urlAPI = \"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "api/comments\";
    </script>
    <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/js/12057011_R.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/plugins/bootstrap-table/dist/bootstrap-table.js\"></script>
    ";
        // line 12
        echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/marked/0.3.2/marked.min.js\"></script>
    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/js/react/components/gridtable.js\"></script>
    <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["baseurl"]) ? $context["baseurl"] : null), "html", null, true);
        echo "assets/js/react/example.js\"></script>
";
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "
<div id=\"content\"></div>

";
    }

    public function getTemplateName()
    {
        return "/viewku/test_chat.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 17,  72 => 16,  66 => 14,  62 => 13,  59 => 12,  55 => 10,  51 => 9,  46 => 7,  43 => 6,  40 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'index.twig' %}*/
/* {% block basecss %}*/
/*     <link rel="stylesheet" href="{{baseurl}}assets/plugins/bootstrap-table/dist/bootstrap-table.css"/>*/
/* {% endblock %}*/
/* {% block basejs %}*/
/*     <script type="text/javascript">*/
/*         var urlAPI = "{{ baseurl }}api/comments";*/
/*     </script>*/
/*     <script src="{{ baseurl }}assets/js/12057011_R.js"></script>*/
/*     <script type="text/javascript" src="{{baseurl}}assets/plugins/bootstrap-table/dist/bootstrap-table.js"></script>*/
/*     {#<script src="{{ baseurl }}assets/js/12057032_D.js"></script>#}*/
/*     <script src="https://cdnjs.cloudflare.com/ajax/libs/marked/0.3.2/marked.min.js"></script>*/
/*     <script src="{{ baseurl }}assets/js/react/components/gridtable.js"></script>*/
/*     <script src="{{ baseurl }}assets/js/react/example.js"></script>*/
/* {% endblock %}*/
/* {% block content %}*/
/* */
/* <div id="content"></div>*/
/* */
/* {% endblock %}*/
/* */
