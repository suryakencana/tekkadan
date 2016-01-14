<?php

/* jurusan/fjurusan.twig */
class __TwigTemplate_8a39add6c59cb7056c180b700bc71d5fa35618eb516aac8379fafcf0f23e08d1 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->urlFor("jurusan.s003"), "html", null, true);
        echo "\" method=\"POST\" role=\"form\">
\t<div class=\"block\">
\t\t<h6 class=\"heading-hr\"><i class=\"icon-paragraph-right2\"></i>";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["ftitle"]) ? $context["ftitle"] : null), "html", null, true);
        echo "</h6>

\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\">Nama Jurusan:</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"nama\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fjurusan"]) ? $context["fjurusan"] : null), "jurusan_nama"), "html", null, true);
        echo "\" />
\t\t\t\t";
        // line 12
        echo "\t\t\t\t";
        // line 13
        echo "\t\t\t\t<input type=\"hidden\" name=\"gen_id\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fjurusan"]) ? $context["fjurusan"] : null), "id_jurusan"), "html", null, true);
        echo "\" />
\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\">Nama Fakultas: </label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<select class=\"multi-select\" tabindex=\"2\" name=\"id_fakultas\">
\t\t\t\t\t";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fakultas"]) ? $context["fakultas"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["fk"]) {
            // line 21
            echo "\t\t\t\t\t";
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first") && (null === (isset($context["fakid"]) ? $context["fakid"] : null)))) {
                // line 22
                echo "\t\t\t\t\t<option selected=\"selected\"
\t\t\t\t\tvalue=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fk"]) ? $context["fk"] : null), "id_fakultas"), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fk"]) ? $context["fk"] : null), "fakultas_nama"), "html", null, true);
                echo " | ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fk"]) ? $context["fk"] : null), "id_fakultas"), "html", null, true);
                echo "</option>
\t\t\t\t\t";
            } elseif (((isset($context["fakid"]) ? $context["fakid"] : null) == $this->getAttribute((isset($context["fk"]) ? $context["fk"] : null), "id_fakultas"))) {
                // line 25
                echo "\t\t\t\t\t<option selected=\"selected\"
\t\t\t\t\tvalue=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fk"]) ? $context["fk"] : null), "id_fakultas"), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fk"]) ? $context["fk"] : null), "fakultas_nama"), "html", null, true);
                echo " | ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fk"]) ? $context["fk"] : null), "id_fakultas"), "html", null, true);
                echo "</option>
\t\t\t\t\t";
            } else {
                // line 28
                echo "\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fk"]) ? $context["fk"] : null), "id_fakultas"), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fk"]) ? $context["fk"] : null), "fakultas_nama"), "html", null, true);
                echo " | ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fk"]) ? $context["fk"] : null), "id_fakultas"), "html", null, true);
                echo "</option>
\t\t\t\t\t";
            }
            // line 30
            echo "\t\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fk'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "\t\t\t\t</select>
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
        return "jurusan/fjurusan.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 31,  116 => 30,  106 => 28,  97 => 26,  94 => 25,  85 => 23,  82 => 22,  79 => 21,  62 => 20,  51 => 13,  49 => 12,  45 => 10,  37 => 5,  31 => 3,  28 => 2,);
    }
}
