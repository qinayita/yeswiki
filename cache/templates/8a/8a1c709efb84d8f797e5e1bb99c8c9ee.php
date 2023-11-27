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

/* @core/actions/my-favorites-with-titles.twig */
class __TwigTemplate_bf034d281140f0c59c519cdab8a77df9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'favorites' => [$this, 'block_favorites'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@core/actions/my-favorites.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@core/actions/my-favorites.twig", "@core/actions/my-favorites-with-titles.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_favorites($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <ul>
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["favorites"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["favorite"]) {
            // line 6
            echo "            <li id=\"favoriteLi";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["favorite"], "resource", [], "any", false, false, false, 6), "html", null, true);
            echo "\">
                <a href=\"#\"
                    title=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("FAVORITES_REMOVE"), "html", null, true);
            echo "\"
                    data-resource=\"";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["favorite"], "resource", [], "any", false, false, false, 9), "html", null, true);
            echo "\" 
                    data-user=\"";
            // line 10
            echo twig_escape_filter($this->env, ($context["currentUser"] ?? null), "html", null, true);
            echo "\"
                    data-toggle=\"tooltip\"
                    data-placement=\"right\"
                    data-linkedFavoriteid=\"favoriteLi";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["favorite"], "resource", [], "any", false, false, false, 13), "html", null, true);
            echo "\"
                    class=\"btn btn-icon btn-default btn-xs favorites user-favorite\">
                    <i class=\"fas fa-star\"></i>
                </a>
                <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getFunction('url')->getCallable()(["tag" => twig_get_attribute($this->env, $this->source, $context["favorite"], "resource", [], "any", false, false, false, 17)]), "html", null, true);
            echo "\" class=\"modalbox\" data-size=\"modal-lg\" title=\"";
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["favorite"], "title", [], "any", true, true, false, 17) &&  !(null === twig_get_attribute($this->env, $this->source, $context["favorite"], "title", [], "any", false, false, false, 17)))) ? (twig_get_attribute($this->env, $this->source, $context["favorite"], "title", [], "any", false, false, false, 17)) : (twig_get_attribute($this->env, $this->source, $context["favorite"], "resource", [], "any", false, false, false, 17))), "html", null, true);
            echo "\">
                    ";
            // line 18
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["favorite"], "title", [], "any", true, true, false, 18) &&  !(null === twig_get_attribute($this->env, $this->source, $context["favorite"], "title", [], "any", false, false, false, 18)))) ? (twig_get_attribute($this->env, $this->source, $context["favorite"], "title", [], "any", false, false, false, 18)) : (twig_get_attribute($this->env, $this->source, $context["favorite"], "resource", [], "any", false, false, false, 18))), "html", null, true);
            echo "
                </a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['favorite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    </ul>
    ";
        // line 23
        $this->displayBlock("deleteAllButton", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@core/actions/my-favorites-with-titles.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 23,  100 => 22,  90 => 18,  84 => 17,  77 => 13,  71 => 10,  67 => 9,  63 => 8,  57 => 6,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@core/actions/my-favorites-with-titles.twig", "C:\\xampp\\htdocs\\doryphore\\templates\\actions\\my-favorites-with-titles.twig");
    }
}
