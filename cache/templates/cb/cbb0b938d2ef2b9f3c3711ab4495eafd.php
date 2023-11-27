<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @core/comment-list.twig */
class __TwigTemplate_59b12b13c39e302d49c42892fab3bf6d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if ((($context["first"] ?? null) == true)) {
            // line 2
            echo "<div id=\"yeswiki-comments-";
            echo twig_escape_filter($this->env, ($context["tag"] ?? null), "html", null, true);
            echo "\" class=\"yeswiki-page-comments\">
\t<p><strong><i class=\"fa fa-comments\"></i> ";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("COMMENTS"), "html", null, true);
            echo "</strong></p>
";
        }
        // line 5
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["idcom"] => $context["comment"]) {
            // line 6
            echo "\t  ";
            $this->loadTemplate("@core/comment.twig", "@core/comment-list.twig", 6)->display(twig_array_merge($context, $context["comment"]));
            // line 7
            echo "\t";
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
        unset($context['_seq'], $context['_iterated'], $context['idcom'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        if ((($context["first"] ?? null) == true)) {
            // line 9
            echo "</div><!-- /#yeswiki-comments-";
            echo twig_escape_filter($this->env, ($context["tag"] ?? null), "html", null, true);
            echo " -->
";
        }
    }

    public function getTemplateName()
    {
        return "@core/comment-list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 9,  84 => 8,  70 => 7,  67 => 6,  49 => 5,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@core/comment-list.twig", "C:\\xampp\\htdocs\\doryphore\\templates\\comment-list.twig");
    }
}
