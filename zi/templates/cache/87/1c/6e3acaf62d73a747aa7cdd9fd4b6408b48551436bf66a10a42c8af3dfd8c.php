<?php

/* notif.twig */
class __TwigTemplate_871c6e3acaf62d73a747aa7cdd9fd4b6408b48551436bf66a10a42c8af3dfd8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'MsgBox' => array($this, 'block_MsgBox'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('MsgBox', $context, $blocks);
    }

    public function block_MsgBox($context, array $blocks = array())
    {
        // line 2
        if (($this->env->getExtension('zi_extension')->flashIt("info") || $this->env->getExtension('zi_extension')->flashIt("error"))) {
            // line 3
            if ($this->env->getExtension('zi_extension')->flashIt("info")) {
                // line 4
                echo "<div class=\"callout callout-info fade in\">
\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
\t<h5>Info message</h5>
\t<p>";
                // line 7
                echo twig_escape_filter($this->env, $this->env->getExtension('zi_extension')->flashIt("info"), "html", null, true);
                echo "</p>
</div>
";
            }
            // line 10
            if ($this->env->getExtension('zi_extension')->flashIt("error")) {
                // line 11
                echo "<div class=\"callout callout-danger fade in\">
\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
\t<h5>Error message</h5>
\t<p>";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('zi_extension')->flashIt("error"), "html", null, true);
                echo "</p>
</div>
";
            }
        }
    }

    public function getTemplateName()
    {
        return "notif.twig";
    }

    public function getDebugInfo()
    {
        return array (  48 => 14,  43 => 11,  41 => 10,  35 => 7,  30 => 4,  26 => 2,  20 => 1,  31 => 3,  28 => 3,);
    }
}
