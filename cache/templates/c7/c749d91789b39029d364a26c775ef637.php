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

/* @templates/alert-message.twig */
class __TwigTemplate_b5d5e04424caff68973cf5fda101c2a5 extends Template
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
        // line 2
        echo "<div class=\"alert alert-";
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "\">";
        echo ($context["message"] ?? null);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@templates/alert-message.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@templates/alert-message.twig", "C:\\xampp\\htdocs\\doryphore\\tools\\templates\\templates\\alert-message.twig");
    }
}
