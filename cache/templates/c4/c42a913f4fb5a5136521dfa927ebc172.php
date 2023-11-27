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

/* @core/_form-open.twig */
class __TwigTemplate_9eb40f835dc767b0b33278e34573f2e0 extends Template
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
        $context["formMethod"] = (((($context["formMethod"] ?? null) == "get")) ? ("get") : ("post"));
        // line 2
        $context["tag"] = ((twig_test_empty(($context["tag"] ?? null))) ? ("") : (($context["tag"] ?? null)));
        // line 3
        echo "<form ";
        if (((($context["method"] ?? null) == "edit") || (($context["method"] ?? null) == "editiframe"))) {
            // line 4
            echo "id=\"ACEditor\" name=\"ACEditor\" enctype=\"multipart/form-data\"";
        }
        // line 5
        echo "action=\"";
        echo twig_escape_filter($this->env, $this->env->getFunction('url')->getCallable()(["tag" => ($context["tag"] ?? null), "handler" => ($context["method"] ?? null)]), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, ($context["formMethod"] ?? null), "html", null, true);
        echo "\"";
        // line 6
        if ( !twig_test_empty(($context["class"] ?? null))) {
            echo " class=\"";
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            echo "\"";
        }
        // line 7
        echo ">";
        // line 8
        if ((((($context["method"] ?? null) == "edit") || (($context["method"] ?? null) == "editiframe")) && (( !twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 9
($context["config"] ?? null), "password_for_editing", [], "any", false, false, false, 9)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 10
($context["request"] ?? null), "post", [], "any", false, false, false, 10), "password_for_editing", [], "any", false, false, false, 10))) &&  !twig_test_iterable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 11
($context["request"] ?? null), "post", [], "any", false, false, false, 11), "password_for_editing", [], "any", false, false, false, 11))))) {
            echo "
        <input type=\"hidden\" name=\"password_for_editing\" value=\"";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "post", [], "any", false, false, false, 12), "password_for_editing", [], "any", false, false, false, 12), "html_attr");
            echo "\" />";
        }
        // line 14
        if (( !twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "rewrite_mode", [], "any", false, false, false, 14) && (($context["formMethod"] ?? null) == "get"))) {
            echo "
    <input 
        type=\"hidden\" 
        name=\"wiki\" 
        value=\"";
            // line 18
            echo twig_escape_filter($this->env, twig_replace_filter($this->env->getFunction('url')->getCallable()(["tag" => (($context["tag"]) ?? (""))]), [twig_slice($this->env, $this->env->getFunction('url')->getCallable()(["tag" => "not-existing-tag", "handler" => "iframe"]), 0,  -twig_length_filter($this->env, "not-existing-tag/iframe")) => "", twig_slice($this->env, $this->env->getFunction('url')->getCallable()(["tag" => "not-existing-tag"]), 0,  -twig_length_filter($this->env, "not-existing-tag")) => ""]), "html", null, true);
            // line 21
            echo "\"/>
        ";
        }
        // line 23
        echo "
";
    }

    public function getTemplateName()
    {
        return "@core/_form-open.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 23,  81 => 21,  79 => 18,  72 => 14,  68 => 12,  64 => 11,  63 => 10,  62 => 9,  61 => 8,  59 => 7,  53 => 6,  47 => 5,  44 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@core/_form-open.twig", "C:\\xampp\\htdocs\\doryphore\\templates\\_form-open.twig");
    }
}
