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

/* @bazar/entries/index.twig */
class __TwigTemplate_7661e434ed41c6cdda551137468d8828 extends Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "search", [], "any", false, false, false, 1)) {
            // line 2
            echo "  ";
            echo twig_include($this->env, $context, "@bazar/entries/index/_search_input.twig");
            echo "
";
        }
        // line 4
        echo "
";
        // line 5
        if (($context["filters"] ?? null)) {
            // line 6
            echo "  ";
            $context["resultsColSize"] = (((twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "filtercolsize", [], "any", false, false, false, 6)) == 12)) ? (12) : ((12 - twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "filtercolsize", [], "any", false, false, false, 6)))));
            // line 7
            echo "  <div class=\"facette-container row ";
            echo (((($context["resultsColSize"] ?? null) == 12)) ? ("facette-container-fullwidth") : (""));
            echo "\" data-filter-align=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "filterposition", [], "any", false, false, false, 7), "html", null, true);
            echo "\" data-template=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "template", [], "any", false, false, false, 7), "html", null, true);
            echo "\">

    ";
            // line 9
            if (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "groups", [], "any", false, false, false, 9)) {
                // line 10
                echo "      ";
                echo twig_include($this->env, $context, "@bazar/entries/index/_filters.twig");
                echo "
    ";
            }
            // line 12
            echo "
    <div class=\"results-col col-sm-";
            // line 13
            echo twig_escape_filter($this->env, ($context["resultsColSize"] ?? null), "html", null, true);
            echo "\">
      ";
            // line 14
            echo twig_include($this->env, $context, "@bazar/entries/index/_entries.twig");
            echo "
    </div>

  </div>
";
        } else {
            // line 19
            echo "  ";
            echo twig_include($this->env, $context, "@bazar/entries/index/_entries.twig");
            echo "
";
        }
        // line 21
        echo "
";
        // line 23
        if (( !twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "isInIframe", [], "any", false, false, false, 23) && twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "showexportbuttons", [], "any", false, false, false, 23))) {
            // line 24
            echo "  ";
            echo twig_include($this->env, $context, "@bazar/entries/index/_export_buttons.twig");
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "@bazar/entries/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 24,  95 => 23,  92 => 21,  86 => 19,  78 => 14,  74 => 13,  71 => 12,  65 => 10,  63 => 9,  53 => 7,  50 => 6,  48 => 5,  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@bazar/entries/index.twig", "C:\\xampp\\htdocs\\doryphore\\tools\\bazar\\templates\\entries\\index.twig");
    }
}
