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

/* @core/actions/my-favorites.twig */
class __TwigTemplate_039994f108b254c4fa5e04f209bb6dc6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'favorites' => [$this, 'block_favorites'],
            'deleteAllButton' => [$this, 'block_deleteAllButton'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<h4>";
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("FAVORITES_MY_FAVORITES"), "html", null, true);
        echo "</h4>";
        if ( !($context["areFavoritesActivated"] ?? null)) {
            // line 2
            echo "  ";
            echo twig_include($this->env, $context, "@templates/alert-message.twig", ["type" => "warning", "message" => $this->env->getFunction('_t')->getCallable()("FAVORITES_NOT_ACTIVATED")]);
            // line 5
            echo "
";
        } elseif (twig_test_empty(        // line 6
($context["currentUser"] ?? null))) {
            // line 7
            echo "  ";
            echo twig_include($this->env, $context, "@templates/alert-message.twig", ["type" => "warning", "message" => $this->env->getFunction('_t')->getCallable()("FAVORITES_NOT_CONNECTED")]);
            // line 10
            echo "
";
        } else {
            // line 12
            echo "\t";
            if (twig_test_empty(($context["favorites"] ?? null))) {
                // line 13
                echo "\t\t";
                echo twig_include($this->env, $context, "@templates/alert-message.twig", ["type" => "info", "message" => $this->env->getFunction('_t')->getCallable()("FAVORITES_NO_FAVORITE")]);
                // line 16
                echo "
\t";
            } else {
                // line 18
                echo "    ";
                echo twig_escape_filter($this->env, $this->env->getFunction('include_javascript')->getCallable()("javascripts/favorites.js"), "html", null, true);
                echo "
\t  \t";
                // line 19
                $this->displayBlock('favorites', $context, $blocks);
                // line 43
                echo "\t";
            }
        }
    }

    // line 19
    public function block_favorites($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "\t\t\t<ul>
\t\t\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["favorites"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["favorite"]) {
            // line 22
            echo "\t\t\t\t\t<li id=\"favoriteLi";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["favorite"], "resource", [], "any", false, false, false, 22), "html", null, true);
            echo "\">
\t\t\t\t\t\t<a href=\"#\"
\t\t\t\t\t\t\ttitle=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("FAVORITES_REMOVE"), "html", null, true);
            echo "\"
\t\t\t\t\t\t\tdata-resource=\"";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["favorite"], "resource", [], "any", false, false, false, 25), "html", null, true);
            echo "\" 
\t\t\t\t\t\t\tdata-user=\"";
            // line 26
            echo twig_escape_filter($this->env, ($context["currentUser"] ?? null), "html", null, true);
            echo "\"
\t\t\t\t\t\t\tdata-toggle=\"tooltip\"
\t\t\t\t\t\t\tdata-placement=\"right\"
\t\t\t\t\t\t\tdata-linkedFavoriteid=\"favoriteLi";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["favorite"], "resource", [], "any", false, false, false, 29), "html", null, true);
            echo "\"
\t\t\t\t\t\t\tclass=\"btn btn-icon btn-default btn-xs favorites user-favorite\">
\t\t\t\t\t\t\t<i class=\"fas fa-star\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getFunction('url')->getCallable()(["tag" => twig_get_attribute($this->env, $this->source, $context["favorite"], "resource", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\" class=\"modalbox\" data-size=\"modal-lg\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["favorite"], "resource", [], "any", false, false, false, 33), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["favorite"], "resource", [], "any", false, false, false, 34), "html", null, true);
            echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['favorite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "\t\t\t</ul>
\t\t\t";
        // line 39
        $this->displayBlock('deleteAllButton', $context, $blocks);
        // line 42
        echo "\t\t";
    }

    // line 39
    public function block_deleteAllButton($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "\t\t\t\t<button class=\"btn btn-danger btn-sm\" onclick=\"FavoritesHelper.deleteAll(";
        echo twig_escape_filter($this->env, json_encode(($context["currentUser"] ?? null)), "html", null, true);
        echo ");\"><i class=\"fa fa-trash\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("FAVORITES_DELETE_ALL"), "html", null, true);
        echo "</button>
\t\t\t";
    }

    public function getTemplateName()
    {
        return "@core/actions/my-favorites.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 40,  145 => 39,  141 => 42,  139 => 39,  136 => 38,  126 => 34,  120 => 33,  113 => 29,  107 => 26,  103 => 25,  99 => 24,  93 => 22,  89 => 21,  86 => 20,  82 => 19,  76 => 43,  74 => 19,  69 => 18,  65 => 16,  62 => 13,  59 => 12,  55 => 10,  52 => 7,  50 => 6,  47 => 5,  44 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@core/actions/my-favorites.twig", "C:\\xampp\\htdocs\\doryphore\\templates\\actions\\my-favorites.twig");
    }
}
