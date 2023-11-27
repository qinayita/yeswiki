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

/* @core/user-reactions.twig */
class __TwigTemplate_48fc03c81f5ff33eca9f68bad5db674a extends Template
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
        echo "<h2>";
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("REACTION_YOUR_REACTIONS"), "html", null, true);
        echo "</h2>
";
        // line 2
        if (($context["userReactions"] ?? null)) {
            // line 3
            echo "<ul class=\"timeline\">
";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["userReactions"] ?? null));
            foreach ($context['_seq'] as $context["k"] => $context["reactions"]) {
                // line 5
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["reactions"], "reactions", [], "any", false, false, false, 5));
                foreach ($context['_seq'] as $context["key"] => $context["userReaction"]) {
                    // line 6
                    echo "    <li>
        <h4>";
                    // line 7
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["userReaction"], "date", [], "any", false, false, false, 7), "html", null, true);
                    echo "</h4>
        <p>";
                    // line 8
                    echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("REACTION_YOU_VOTED"), "html", null, true);
                    echo " <span class=\"mini-react\">";
                    echo (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reactions"], "parameters", [], "any", false, false, false, 8), "images", [], "any", false, false, false, 8)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["userReaction"], "id", [], "any", false, false, false, 8)] ?? null) : null);
                    echo " ";
                    echo twig_escape_filter($this->env, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reactions"], "parameters", [], "any", false, false, false, 8), "labels", [], "any", false, false, false, 8)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["userReaction"], "id", [], "any", false, false, false, 8)] ?? null) : null), "html", null, true);
                    echo "</span> ";
                    echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("REACTION_FOR_POLL"), "html", null, true);
                    echo " <strong>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reactions"], "parameters", [], "any", false, false, false, 8), "title", [], "any", false, false, false, 8), "html", null, true);
                    echo "</strong> ";
                    echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("REACTION_FROM_PAGE"), "html", null, true);
                    echo " <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getFunction('url')->getCallable()(["tag" => twig_get_attribute($this->env, $this->source, $context["userReaction"], "pageTag", [], "any", false, false, false, 8)]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["userReaction"], "pageTag", [], "any", false, false, false, 8), "html", null, true);
                    echo "</a></p>
    </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['userReaction'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['reactions'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "@core/user-reactions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 12,  63 => 8,  59 => 7,  56 => 6,  51 => 5,  47 => 4,  44 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@core/user-reactions.twig", "C:\\xampp\\htdocs\\doryphore\\templates\\user-reactions.twig");
    }
}
