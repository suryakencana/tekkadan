<?php

/* ruang/fruang.twig */
class __TwigTemplate_a9e6e10fefa654db810715ddeaea835231e983adfb18f3118f5cce23aa6bdd32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("index.twig");

        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<form class=\"form-horizontal\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->urlFor("ruang.s003"), "html", null, true);
        echo "\" method=\"POST\" role=\"form\">
\t<div class=\"block\">
\t\t<h6 class=\"heading-hr\"><i class=\"icon-paragraph-right2\"></i>";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["ftitle"]) ? $context["ftitle"] : null), "html", null, true);
        echo "</h6>

\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\">Nama Ruang:</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"nama\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fruang"]) ? $context["fruang"] : null), "lokasi_ruang"), "html", null, true);
        echo "\" />
\t\t\t\t<input type=\"hidden\" name=\"gen_id\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fruang"]) ? $context["fruang"] : null), "ruang_id"), "html", null, true);
        echo "\" />
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-actions text-right\">
\t\t\t<input type=\"submit\" value=\"Submit\" class=\"btn btn-primary\">
\t\t</div>

\t</div>
</form>
";
    }

    public function getTemplateName()
    {
        return "ruang/fruang.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 11,  45 => 10,  37 => 5,  31 => 3,  28 => 2,);
    }
}
