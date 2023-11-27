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

/* @templates/theme-selector.twig */
class __TwigTemplate_25a20a8fe8f8e36742f33cb79bb42f6d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'presetpart' => [$this, 'block_presetpart'],
            'firstoptionpreset' => [$this, 'block_firstoptionpreset'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div 
  class=\"control-group form-group\"
  data-templates=\"";
        // line 3
        echo twig_escape_filter($this->env, json_encode(($context["dataTemplates"] ?? null)), "html", null, true);
        echo "\"
  data-favorites=\"";
        // line 4
        echo twig_escape_filter($this->env, json_encode(["squelette" => ($context["favoriteSquelette"] ?? null), "style" => ($context["favoriteStyle"] ?? null), "preset" => ($context["favoritePreset"] ?? null)]), "html", null, true);
        echo "\"
  data-presets=\"";
        // line 5
        echo twig_escape_filter($this->env, json_encode(($context["presets"] ?? null)), "html", null, true);
        echo "\"
  data-update-url=\"";
        // line 6
        echo (((($context["updateUrl"] ?? null) === true)) ? ("true") : ("false"));
        echo "\"
  >
  <label class=\"control-label ";
        // line 8
        echo twig_escape_filter($this->env, ($context["sizeClass"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("TEMPLATE_THEME"), "html", null, true);
        echo "</label>
  <div class=\"controls ";
        // line 9
        echo twig_escape_filter($this->env, ($context["sizeClass"] ?? null), "html", null, true);
        echo "\">
    <select class=\"form-control\" name=\"theme_select\">
      ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["templates"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 12
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\"";
            if (($context["key"] == ($context["favoriteTheme"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</option>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    </select>
  </div>
</div>

<div class=\"control-group form-group\">
  <label class=\"control-label ";
        // line 19
        echo twig_escape_filter($this->env, ($context["sizeClass"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("TEMPLATE_SQUELETTE"), "html", null, true);
        echo "</label>
  <div class=\"controls ";
        // line 20
        echo twig_escape_filter($this->env, ($context["sizeClass"] ?? null), "html", null, true);
        echo "\">
    <select class=\"form-control\" name=\"squelette_select\">
      ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, ($context["squelettes"] ?? null)));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 23
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
            if (($context["key"] == ($context["favoriteSquelette"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "</option>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </select>
  </div>
</div>

<div class=\"control-group form-group\">
  <label class=\"control-label ";
        // line 30
        echo twig_escape_filter($this->env, ($context["sizeClass"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("TEMPLATE_STYLE"), "html", null, true);
        echo "</label>
  <div class=\"controls ";
        // line 31
        echo twig_escape_filter($this->env, ($context["sizeClass"] ?? null), "html", null, true);
        echo "\">
    <select class=\"form-control\" name=\"style_select\">
      ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 34
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\"";
            if (($context["key"] == ($context["favoriteStyle"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_replace_filter($context["value"], [".css" => ""]), "html", null, true);
            echo "</option>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    </select>
  </div>
</div>

";
        // line 40
        if ( !twig_test_empty(($context["presets"] ?? null))) {
            // line 41
            echo " ";
            $this->displayBlock('presetpart', $context, $blocks);
        }
        // line 55
        echo "
";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getFunction('include_javascript')->getCallable()("tools/templates/javascripts/change-theme.js"), "html", null, true);
    }

    // line 41
    public function block_presetpart($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "  <div class=\"control-group form-group\"";
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["templates"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["favoriteTheme"] ?? null)] ?? null) : null), "presets", [], "any", false, false, false, 42))) {
            echo " style=\"display:none;\"";
        }
        echo ">
    <label class=\"control-label ";
        // line 43
        echo twig_escape_filter($this->env, ($context["sizeClass"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("TEMPLATE_PRESET"), "html", null, true);
        echo "</label>
    <div class=\"controls ";
        // line 44
        echo twig_escape_filter($this->env, ($context["sizeClass"] ?? null), "html", null, true);
        echo "\">
      <select class=\"form-control\" name=\"preset_select\">
        ";
        // line 46
        $this->displayBlock('firstoptionpreset', $context, $blocks);
        // line 47
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["presets"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 48
            echo "          <option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\"";
            if (($context["key"] == ($context["favoritePreset"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_replace_filter($context["value"], [".css" => ""]), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "      </select>
    </div>
  </div>
 ";
    }

    // line 46
    public function block_firstoptionpreset($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "@templates/theme-selector.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 46,  227 => 50,  212 => 48,  207 => 47,  205 => 46,  200 => 44,  194 => 43,  187 => 42,  183 => 41,  179 => 56,  176 => 55,  172 => 41,  170 => 40,  164 => 36,  149 => 34,  145 => 33,  140 => 31,  134 => 30,  127 => 25,  112 => 23,  108 => 22,  103 => 20,  97 => 19,  90 => 14,  75 => 12,  71 => 11,  66 => 9,  60 => 8,  55 => 6,  51 => 5,  47 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@templates/theme-selector.twig", "C:\\xampp\\htdocs\\doryphore\\tools\\templates\\templates\\theme-selector.twig");
    }
}
