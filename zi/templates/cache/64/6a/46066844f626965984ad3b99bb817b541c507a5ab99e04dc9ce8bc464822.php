<?php

/* base.twig */
class __TwigTemplate_646a46066844f626965984ad3b99bb817b541c507a5ab99e04dc9ce8bc464822 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("main.twig");

        $this->blocks = array(
            'MsgBox' => array($this, 'block_MsgBox'),
            'basejs' => array($this, 'block_basejs'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "main.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_MsgBox($context, array $blocks = array())
    {
        // line 19
        if (($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "info") || $this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "error"))) {
            // line 20
            if ($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "info")) {
                // line 21
                echo "<div class=\"callout callout-info fade in\">
\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
\t<h5>Info message</h5>
\t<p>";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "info"), "html", null, true);
                echo "</p>
</div>
";
            }
            // line 27
            if ($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "error")) {
                // line 28
                echo "<div class=\"callout callout-danger fade in\">
\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
\t<h5>Error message</h5>
\t<p>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "error"), "html", null, true);
                echo "</p>
</div>
";
            }
        }
    }

    // line 36
    public function block_basejs($context, array $blocks = array())
    {
        // line 37
        echo "<script type=\"text/javascript\">
var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-9312438-4']);
  // _gaq.push(<%=raw @pageview_url ? \"['_trackPageview', '#{@pageview_url}']\" : \"['_trackPageview']\" %>);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
\$(function() {
\t//===== Popover =====//

\t\$(\"[data-toggle=popover]\").popover().click(function(e) {
\t\te.preventDefault()
\t});
});
</script>
";
    }

    public function getTemplateName()
    {
        return "base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 37,  63 => 36,  54 => 31,  49 => 28,  47 => 27,  41 => 24,  36 => 21,  34 => 20,  32 => 19,  29 => 2,);
    }
}
