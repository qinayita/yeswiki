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

/* @core/actions/my-favorites-table.twig */
class __TwigTemplate_63ad43bfe40e4c26264e667a2cb16376 extends Template
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
        $this->parent = $this->loadTemplate("@core/actions/my-favorites.twig", "@core/actions/my-favorites-table.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_favorites($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getFunction('include_javascript')->getCallable()("javascripts/vendor/datatables-full/jquery.dataTables.min.js"), "html", null, true);
        echo "
    ";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getFunction('include_css')->getCallable()("styles/vendor/datatables-full/dataTables.bootstrap.min.css"), "html", null, true);
        echo "

    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th></th>
                <th>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("FAVORITES_TITLE"), "html", null, true);
        echo "</th>
                <th>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("FAVORITES_LINK"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["favorites"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["favorite"]) {
            // line 17
            echo "                ";
            $context["favoriteTitle"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["favorite"], "title", [], "any", false, false, false, 17))) ? (twig_get_attribute($this->env, $this->source, $context["favorite"], "title", [], "any", false, false, false, 17)) : (twig_get_attribute($this->env, $this->source, $context["favorite"], "resource", [], "any", false, false, false, 17)));
            // line 18
            echo "                <tr id=\"favoriteRow";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["favorite"], "resource", [], "any", false, false, false, 18), "html", null, true);
            echo "\">
                    <td>
                        <a href=\"#\"
                            title=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("FAVORITES_REMOVE"), "html", null, true);
            echo "\"
                            data-resource=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["favorite"], "resource", [], "any", false, false, false, 22), "html", null, true);
            echo "\" 
                            data-user=\"";
            // line 23
            echo twig_escape_filter($this->env, ($context["currentUser"] ?? null), "html", null, true);
            echo "\"
                            data-linkedFavoriteid=\"favoriteRow";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["favorite"], "resource", [], "any", false, false, false, 24), "html", null, true);
            echo "\"
                            class=\"btn btn-icon btn-default btn-xs favorites user-favorite\">
                            <i class=\"fas fa-star\"></i>
                        </a>
                    </td>
                    <td>
                        <a class=\"bazar-entry modalbox \" data-size=\"modal-lg\" 
                            href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getFunction('url')->getCallable()(["tag" => twig_get_attribute($this->env, $this->source, $context["favorite"], "resource", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\"
                            title=\"";
            // line 32
            echo twig_escape_filter($this->env, ($context["favoriteTitle"] ?? null), "html", null, true);
            echo "\">
                            ";
            // line 33
            echo twig_escape_filter($this->env, ($context["favoriteTitle"] ?? null), "html", null, true);
            echo "
                        </a>
                    </td>
                    <td>
                        <a class=\"bazar-entry modalbox \" data-size=\"modal-lg\" 
                            href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getFunction('url')->getCallable()(["tag" => twig_get_attribute($this->env, $this->source, $context["favorite"], "resource", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\"
                            title=\"";
            // line 39
            echo twig_escape_filter($this->env, ($context["favoriteTitle"] ?? null), "html", null, true);
            echo "\">
                            ";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getFunction('url')->getCallable()(["tag" => twig_get_attribute($this->env, $this->source, $context["favorite"], "resource", [], "any", false, false, false, 40)]), "html", null, true);
            echo "
                        </a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['favorite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </tbody>
    </table>

    ";
        // line 48
        $this->displayBlock("deleteAllButton", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@core/actions/my-favorites-table.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 48,  146 => 45,  135 => 40,  131 => 39,  127 => 38,  119 => 33,  115 => 32,  111 => 31,  101 => 24,  97 => 23,  93 => 22,  89 => 21,  82 => 18,  79 => 17,  75 => 16,  68 => 12,  64 => 11,  55 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@core/actions/my-favorites-table.twig", "C:\\xampp\\htdocs\\doryphore\\templates\\actions\\my-favorites-table.twig");
    }
}
