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

/* @core/actions/my-favorites-tiles.twig */
class __TwigTemplate_f5cbac22abda9366803e846251935187 extends Template
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
        $this->parent = $this->loadTemplate("@core/actions/my-favorites.twig", "@core/actions/my-favorites-tiles.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_favorites($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getFunction('include_css')->getCallable()("tools/bazar/presentation/styles/trombinoscope.css"), "html", null, true);
        echo "
    ";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getFunction('include_css')->getCallable()("styles/actions/my-favorites.css"), "html", null, true);
        echo "

    <div class=\"trombi-container my-favorites\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["favorites"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["favorite"]) {
            // line 9
            echo "            ";
            $context["favoriteTitle"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["favorite"], "title", [], "any", false, false, false, 9))) ? (twig_get_attribute($this->env, $this->source, $context["favorite"], "title", [], "any", false, false, false, 9)) : (twig_get_attribute($this->env, $this->source, $context["favorite"], "resource", [], "any", false, false, false, 9)));
            // line 10
            echo "            <a class=\"bazar-entry modalbox \" data-size=\"modal-lg\" 
                ";
            // line 11
            echo ((( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["favorite"], "entry", [], "any", false, false, false, 11)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["favorite"], "entry", [], "any", false, false, false, 11), "html_data", [], "any", false, false, false, 11)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["favorite"], "entry", [], "any", false, false, false, 11), "html_data", [], "any", false, false, false, 11)) : (""));
            echo "
                href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getFunction('url')->getCallable()(["tag" => twig_get_attribute($this->env, $this->source, $context["favorite"], "resource", [], "any", false, false, false, 12)]), "html", null, true);
            echo "\"
                title=\"";
            // line 13
            echo twig_escape_filter($this->env, ($context["favoriteTitle"] ?? null), "html", null, true);
            echo "\"
                id=\"favoriteTile";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["favorite"], "resource", [], "any", false, false, false, 14), "html", null, true);
            echo "\">
                <div class=\"image-container\">
                    <img loading=\"lazy\" class=\"trombi-image img-placeholder\"
                    src=\"tools/bazar/libs/vendor/placeholder.php?size=140x140&amp;bg=efefef&amp;text=\">
                    ";
            // line 18
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["favorite"], "image", [], "any", false, false, false, 18))) {
                // line 19
                echo "                        <img loading=\"lazy\" class=\"trombi-image for-my-favorites\" alt=\"";
                echo twig_escape_filter($this->env, ($context["favoriteTitle"] ?? null), "html", null, true);
                echo "\"
                            src=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getFunction('urlImage')->getCallable()(["fileName" => ("files/" . twig_get_attribute($this->env, $this->source, $context["favorite"], "image", [], "any", false, false, false, 20)), "width" => 140, "height" => 140, "mode" => "fit"]), "html", null, true);
                echo "\"
                            onerror=\"javascripts:this.src='";
                // line 21
                echo twig_escape_filter($this->env, ("files/" . twig_get_attribute($this->env, $this->source, $context["favorite"], "image", [], "any", false, false, false, 21)), "html", null, true);
                echo "';this.removeAttribute('onerror');\"
                        >
                    ";
            } else {
                // line 24
                echo "                        <i class=\"trombi-image icon-placeholder far fa-question-circle\"></i>
                    ";
            }
            // line 26
            echo "                </div>

                <div class=\"caption trombi-content\">
                    <div class=\"title\">";
            // line 29
            echo twig_escape_filter($this->env, ($context["favoriteTitle"] ?? null), "html", null, true);
            echo "</div>
                </div>
            </a>
            <div class=\"favorite-container\">
                <a href=\"#\"
                    title=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("FAVORITES_REMOVE"), "html", null, true);
            echo "\"
                    data-resource=\"";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["favorite"], "resource", [], "any", false, false, false, 35), "html", null, true);
            echo "\" 
                    data-user=\"";
            // line 36
            echo twig_escape_filter($this->env, ($context["currentUser"] ?? null), "html", null, true);
            echo "\"
                    data-linkedFavoriteid=\"favoriteTile";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["favorite"], "resource", [], "any", false, false, false, 37), "html", null, true);
            echo "\"
                    class=\"btn btn-icon btn-default btn-xs favorites user-favorite\">
                    <i class=\"fas fa-star\"></i>
                </a>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['favorite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "    </div>
    ";
        // line 44
        $this->displayBlock("deleteAllButton", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@core/actions/my-favorites-tiles.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 44,  148 => 43,  136 => 37,  132 => 36,  128 => 35,  124 => 34,  116 => 29,  111 => 26,  107 => 24,  101 => 21,  97 => 20,  92 => 19,  90 => 18,  83 => 14,  79 => 13,  75 => 12,  71 => 11,  68 => 10,  65 => 9,  61 => 8,  55 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@core/actions/my-favorites-tiles.twig", "C:\\xampp\\htdocs\\doryphore\\templates\\actions\\my-favorites-tiles.twig");
    }
}
