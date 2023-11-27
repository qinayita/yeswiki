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

/* @bazar/entries/index/_entries.twig */
class __TwigTemplate_4bb82fc7591afd259e1a85072dc478e5 extends Template
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
        echo "<div id=\"bazar-list-";
        echo twig_escape_filter($this->env, ($context["listId"] ?? null), "html", null, true);
        echo "\" class=\"bazar-list ";
        ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "class", [], "any", false, false, false, 1)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "class", [], "any", false, false, false, 1), "html", null, true))) : (print ("")));
        echo "\" data-template=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "template", [], "any", false, false, false, 1), "html", null, true);
        echo "\">
  <div class=\"list\">";
        // line 2
        echo ($context["renderedEntries"] ?? null);
        echo "</div>
</div>";
    }

    public function getTemplateName()
    {
        return "@bazar/entries/index/_entries.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@bazar/entries/index/_entries.twig", "C:\\xampp\\htdocs\\doryphore\\tools\\bazar\\templates\\entries\\index\\_entries.twig");
    }
}
