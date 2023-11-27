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

/* @bazar/entries/index-dynamic.twig */
class __TwigTemplate_2effa2932b8de4d2ad53b863c147b4ee extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'assets' => [$this, 'block_assets'],
            'display_entries' => [$this, 'block_display_entries'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo twig_escape_filter($this->env, $this->env->getFunction('include_javascript')->getCallable()("javascripts/vendor/vue/vue.js"), "html", null, true);
        echo "

";
        // line 3
        $this->displayBlock('assets', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getFunction('include_javascript')->getCallable()("tools/bazar/presentation/javascripts/bazar-list-dynamic.js", false, true), "html", null, true);
        echo "
";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getFunction('include_css')->getCallable()("tools/bazar/presentation/styles/bazar-list-dynamic.css"), "html", null, true);
        echo "

";
        // line 15
        if (array_key_exists("necessary_fields", $context)) {
            // line 16
            echo "  ";
            $context["necessary_fields"] = twig_array_merge(($context["necessary_fields"] ?? null), ["url"]);
        } else {
            // line 18
            echo "  ";
            $context["necessary_fields"] = ["url"];
        }
        // line 20
        $context["params"] = twig_array_merge(($context["params"] ?? null), ["necessary_fields" => ($context["necessary_fields"] ?? null)]);
        // line 21
        echo "
<div class=\"bazar-list-dynamic-container no-dblclick ";
        // line 22
        ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "class", [], "any", false, false, false, 22)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "class", [], "any", false, false, false, 22), "html", null, true))) : (print ("")));
        echo "\" data-params=\"";
        echo twig_escape_filter($this->env, json_encode(($context["params"] ?? null)), "html", null, true);
        echo "\"
     style=\"opacity: 0\" :class=\"{mounted: mounted}\">

  ";
        // line 25
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "search", [], "any", false, false, false, 25) &&  !twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "groups", [], "any", false, false, false, 25))) {
            // line 26
            echo "    ";
            echo twig_include($this->env, $context, "@bazar/entries/index-dynamic/_search_input.twig");
            echo "
  ";
        }
        // line 28
        echo "
  ";
        // line 29
        $context["resultsColSize"] = (((twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "filtercolsize", [], "any", false, false, false, 29)) == 12)) ? (12) : ((12 - twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "filtercolsize", [], "any", false, false, false, 29)))));
        // line 30
        echo "  ";
        $context["resultsColSize"] = ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "groups", [], "any", false, false, false, 30)) ? (($context["resultsColSize"] ?? null)) : (12));
        // line 31
        echo "
  <div class=\"facette-container dynamic row ";
        // line 32
        echo (((($context["resultsColSize"] ?? null) == 12)) ? ("facette-container-fullwidth") : (""));
        echo "\" data-filter-align=\"";
        ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "groups", [], "any", false, false, false, 32)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "filterposition", [], "any", false, false, false, 32), "html", null, true))) : (print ("")));
        echo "\">

    ";
        // line 34
        if (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "groups", [], "any", false, false, false, 34)) {
            // line 35
            echo "      ";
            echo twig_include($this->env, $context, "@bazar/entries/index-dynamic/_filters.twig");
            echo "
    ";
        }
        // line 37
        echo "
    <div class=\"results-col col-sm-";
        // line 38
        echo twig_escape_filter($this->env, ($context["resultsColSize"] ?? null), "html", null, true);
        echo "\">
      <div class=\"bazar-list dynamic\" ref=\"entriesContainer\">
        ";
        // line 40
        $this->displayBlock('display_entries', $context, $blocks);
        // line 42
        echo "      </div>
      ";
        // line 43
        echo twig_include($this->env, $context, "@bazar/entries/index-dynamic/_pagination.twig");
        echo "
    </div>

  </div>

  ";
        // line 48
        if (( !twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "isInIframe", [], "any", false, false, false, 48) && twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "showexportbuttons", [], "any", false, false, false, 48))) {
            // line 49
            echo "    ";
            echo twig_include($this->env, $context, "@bazar/entries/index/_export_buttons.twig");
            echo "
  ";
        }
        // line 51
        echo "
  <modal-entry ref=\"modal\"></modal-entry>
</div>
";
    }

    // line 3
    public function block_assets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        if (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "showmapinlistview", [], "any", false, false, false, 4)) {
            // line 5
            echo "  ";
            echo twig_escape_filter($this->env, $this->env->getFunction('include_css')->getCallable()("styles/vendor/leaflet/leaflet.css"), "html", null, true);
            echo "
  ";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getFunction('include_javascript')->getCallable()("javascripts/vendor/leaflet/leaflet.min.js"), "html", null, true);
            echo "
  ";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getFunction('include_javascript')->getCallable()("javascripts/vendor/leaflet-providers/leaflet-providers.js"), "html", null, true);
            echo "
";
        }
    }

    // line 40
    public function block_display_entries($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "        ";
    }

    public function getTemplateName()
    {
        return "@bazar/entries/index-dynamic.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 41,  173 => 40,  166 => 7,  162 => 6,  157 => 5,  155 => 4,  151 => 3,  144 => 51,  138 => 49,  136 => 48,  128 => 43,  125 => 42,  123 => 40,  118 => 38,  115 => 37,  109 => 35,  107 => 34,  100 => 32,  97 => 31,  94 => 30,  92 => 29,  89 => 28,  83 => 26,  81 => 25,  73 => 22,  70 => 21,  68 => 20,  64 => 18,  60 => 16,  58 => 15,  53 => 12,  49 => 11,  46 => 10,  44 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@bazar/entries/index-dynamic.twig", "C:\\xampp\\htdocs\\doryphore\\tools\\bazar\\templates\\entries\\index-dynamic.twig");
    }
}
