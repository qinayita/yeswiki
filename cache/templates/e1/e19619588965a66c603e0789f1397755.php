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

/* @core/handlers/edit.twig */
class __TwigTemplate_acc2e7adc52eb91dbd3b131dc7707b6a extends Template
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
        if (($context["error"] ?? null)) {
            // line 2
            echo "  <div class=\"alert alert-danger\">";
            echo ($context["error"] ?? null);
            echo "</div>
";
        }
        // line 4
        echo "
";
        // line 6
        if (($context["preview"] ?? null)) {
            // line 7
            echo "  <h1>";
            echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("EDIT_PREVIEW"), "html", null, true);
            echo "</h1>
  <div class=\"page_preview\">
    ";
            // line 9
            echo ($context["bodyPreview"] ?? null);
            echo "
  </div>
";
        }
        // line 12
        echo "
<form id=\"ACEditor\" name=\"ACEditor\" enctype=\"multipart/form-data\"
      action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getFunction('url')->getCallable()(["handler" => ($context["handler"] ?? null)]), "html", null, true);
        echo "\" method=\"POST\">

  ";
        // line 16
        if (($context["passwordForEditing"] ?? null)) {
            // line 17
            echo "    <input type=\"hidden\" name=\"password_for_editing\" value=\"";
            echo twig_escape_filter($this->env, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "post", [], "any", false, false, false, 17)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["password_for_editing"] ?? null) : null), "html", null, true);
            echo "\" />
  ";
        }
        // line 19
        echo "
  <input type=\"hidden\" name=\"previous\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["previous"] ?? null), "html", null, true);
        echo "\" />

  ";
        // line 22
        if (($context["preview"] ?? null)) {
            // line 23
            echo "    <input type=\"hidden\" name=\"body\" value=\"";
            echo ($context["body"] ?? null);
            echo "\" />
  ";
        } else {
            // line 25
            echo "    ";
            echo $this->env->getFunction('renderAction')->getCallable()("aceditor", ["saveButton" => true, "name" => "body", "value" => ($context["body"] ?? null)]);
            echo "
  ";
        }
        // line 27
        echo "
  ";
        // line 29
        echo "  ";
        // line 30
        echo "  <div class=\"tags-container\"></div>

  <div class=\"form-actions\">
    ";
        // line 34
        echo "    ";
        $context["action"] = ((( !($context["bodyPreview"] ?? null) && (($__internal_compile_1 = ($context["config"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["preview_before_save"] ?? null) : null))) ? ("preview") : (($context["saveValue"] ?? null)));
        // line 35
        echo "    <button type=\"submit\" name=\"submit\" value=\"";
        echo twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
        echo "\" class=\"btn btn-primary\">
      ";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("TEMPLATE_SAVE"), "html", null, true);
        echo "
    </button>

    ";
        // line 40
        echo "    ";
        if (($context["preview"] ?? null)) {
            // line 41
            echo "      <button type=\"submit\" name=\"submit\" value=\"reedit\" class=\"btn btn-primary\">
        ";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("TEMPLATE_REEDIT"), "html", null, true);
            echo "
      </button>
    ";
        }
        // line 45
        echo "
    ";
        // line 47
        echo "    <a class=\"btn btn-default\" onclick=\"document.location = '";
        echo twig_escape_filter($this->env, ($context["cancelUrl"] ?? null), "html", null, true);
        echo "'\">
      ";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("TEMPLATE_CANCEL"), "html", null, true);
        echo "
    </a>

    ";
        // line 52
        echo "    ";
        if ( !($context["preview"] ?? null)) {
            // line 53
            echo "      <span class=\"theme-container\">
        ";
            // line 55
            echo "        ";
            // line 56
            echo "      </span>
    ";
        }
        // line 58
        echo "  </div>

</form>

";
        // line 63
        echo twig_include($this->env, $context, "@aceditor/aceditor-modals.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "@core/handlers/edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 63,  163 => 58,  159 => 56,  157 => 55,  154 => 53,  151 => 52,  145 => 48,  140 => 47,  137 => 45,  131 => 42,  128 => 41,  125 => 40,  119 => 36,  114 => 35,  111 => 34,  106 => 30,  104 => 29,  101 => 27,  95 => 25,  89 => 23,  87 => 22,  82 => 20,  79 => 19,  73 => 17,  71 => 16,  66 => 14,  62 => 12,  56 => 9,  50 => 7,  48 => 6,  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@core/handlers/edit.twig", "C:\\xampp\\htdocs\\doryphore\\templates\\handlers\\edit.twig");
    }
}
