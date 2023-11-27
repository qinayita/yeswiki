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

/* @aceditor/aceditor-toolbar.twig */
class __TwigTemplate_1b41bd67f16097dae030758bc31c3f76 extends Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["arguments"] ?? null), "saveButton", [], "any", false, false, false, 2)) {
            // line 3
            echo "  ";
            $context["action"] = (((($__internal_compile_0 = ($context["config"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["preview_before_save"] ?? null) : null)) ? ("preview") : (($context["saveValue"] ?? null)));
            // line 4
            echo "  <div class=\"btn-group\">
    <button type=\"submit\" name=\"submit\" value=\"";
            // line 5
            echo twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
            echo "\" class=\"aceditor-btn-save btn btn-primary\">
      ";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("ACEDITOR_SAVE"), "html", null, true);
            echo "
    </button>
  </div>
";
        }
        // line 10
        echo "
";
        // line 12
        echo "<div class=\"btn-group format-menu\">
  <a class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
    ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("ACEDITOR_FORMAT"), "html", null, true);
        echo "
    <span class=\"caret\"></span>
  </a>
  <ul class=\"dropdown-menu\">
    <li>";
        // line 18
        echo twig_call_macro($macros["_self"], "macro_button", ["title1", ""], 18, $context, $this->getSourceContext());
        echo "</li>
    <li>";
        // line 19
        echo twig_call_macro($macros["_self"], "macro_button", ["title2", ""], 19, $context, $this->getSourceContext());
        echo "</li>
    <li>";
        // line 20
        echo twig_call_macro($macros["_self"], "macro_button", ["title3", ""], 20, $context, $this->getSourceContext());
        echo "</li>
    <li>";
        // line 21
        echo twig_call_macro($macros["_self"], "macro_button", ["title4", ""], 21, $context, $this->getSourceContext());
        echo "</li>
    <li class=\"divider\"></li>
    <li>";
        // line 23
        echo twig_call_macro($macros["_self"], "macro_button", ["center", ""], 23, $context, $this->getSourceContext());
        echo "</li>
    <li>";
        // line 24
        echo twig_call_macro($macros["_self"], "macro_button", ["lead", ""], 24, $context, $this->getSourceContext());
        echo "</li>
    <li>";
        // line 25
        echo twig_call_macro($macros["_self"], "macro_button", ["highlight", ""], 25, $context, $this->getSourceContext());
        echo "</li>
    <li>";
        // line 26
        echo twig_call_macro($macros["_self"], "macro_button", ["code", ""], 26, $context, $this->getSourceContext());
        echo "</li>
    <li>";
        // line 27
        echo twig_call_macro($macros["_self"], "macro_button", ["inline_code", ""], 27, $context, $this->getSourceContext());
        echo "</li>
    <li>";
        // line 28
        echo twig_call_macro($macros["_self"], "macro_button", ["comment", ""], 28, $context, $this->getSourceContext());
        echo "</li>
  </ul>
</div>
<div class=\"btn-group format-buttons\">
  ";
        // line 32
        echo twig_call_macro($macros["_self"], "macro_button", ["bold"], 32, $context, $this->getSourceContext());
        echo "
  ";
        // line 33
        echo twig_call_macro($macros["_self"], "macro_button", ["italic"], 33, $context, $this->getSourceContext());
        echo "
  ";
        // line 34
        echo twig_call_macro($macros["_self"], "macro_button", ["underline"], 34, $context, $this->getSourceContext());
        echo "
  ";
        // line 35
        echo twig_call_macro($macros["_self"], "macro_button", ["strike"], 35, $context, $this->getSourceContext());
        echo "
</div>
<div class=\"btn-group more-styles\">
  ";
        // line 38
        echo twig_call_macro($macros["_self"], "macro_button", ["list"], 38, $context, $this->getSourceContext());
        echo "
  ";
        // line 39
        echo twig_call_macro($macros["_self"], "macro_button", ["line"], 39, $context, $this->getSourceContext());
        echo "
</div>
<div class=\"btn-group pages\">
  ";
        // line 42
        echo twig_call_macro($macros["_self"], "macro_button", ["link"], 42, $context, $this->getSourceContext());
        echo "
  ";
        // line 43
        echo twig_call_macro($macros["_self"], "macro_button", ["newpage"], 43, $context, $this->getSourceContext());
        echo "
</div>

";
        // line 47
        echo twig_include($this->env, $context, "@attach/file-upload-button.twig");
        echo "

";
        // line 50
        echo "<div class=\"btn-group actions-builder-button\">
  <a class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
    ";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("ACEDITOR_ACTIONS"), "html", null, true);
        echo "
    <span class=\"caret\"></span>
  </a>
  <ul class=\"dropdown-menu component-action-list\">
    <li class=\"open-actions-builder-btn open-existing-action\">
      <a>";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("ACEDITOR_ACTIONS_EDIT_CURRENT"), "html", null, true);
        echo "</a>
    </li>

    ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["actionsBuilderData"] ?? null), "action_groups", [], "any", false, false, false, 60));
        foreach ($context['_seq'] as $context["groupName"] => $context["groupConfig"]) {
            // line 61
            echo "      ";
            if ( !twig_get_attribute($this->env, $this->source, $context["groupConfig"], "onlyEdit", [], "any", false, false, false, 61)) {
                // line 62
                echo "        <li>
          <a class=\"open-actions-builder-btn\" data-group-name=\"";
                // line 63
                echo twig_escape_filter($this->env, $context["groupName"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["groupConfig"], "label", [], "any", false, false, false, 63), "html", null, true);
                echo "</a>
        </li>
      ";
            }
            // line 66
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['groupName'], $context['groupConfig'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "  </ul>
</div>

";
        // line 71
        echo "<div class=\"btn-group\">
  <a class=\"btn btn-default btn-icon aceditor-btn aceditor-btn-help\" data-remote=\"true\"
     href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getFunction('url')->getCallable()(["tag" => "ReglesDeFormatage"]), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("ACEDITOR_HELP"), "html", null, true);
        echo "\">
    <i class=\"fa fa-question-circle\"></i>
  </a>
</div>

";
    }

    // line 78
    public function macro_button($__name__ = null, $__btnClass__ = "btn btn-default btn-icon", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "btnClass" => $__btnClass__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 79
            echo "
  ";
            // line 80
            $context["DELIMITERS"] = ["TITLE1" => ["yeswiki" => ["======", "======"], "html" => ["<h1>", "</h1>"]], "TITLE2" => ["yeswiki" => ["=====", "====="], "html" => ["<h2>", "</h2>"]], "TITLE3" => ["yeswiki" => ["====", "===="], "html" => ["<h3>", "</h3>"]], "TITLE4" => ["yeswiki" => ["===", "==="], "html" => ["<h4>", "</h4>"]], "CENTER" => ["yeswiki" => ["\"\"<center>\"\"", "\"\"</center>\"\""], "html" => ["<center>", "</center>"]], "LEAD" => ["yeswiki" => ["\"\"<div class=\"lead\">\"\"", "\"\"</div>\"\""], "html" => ["<div class=\"lead\">", "</div>"]], "HIGHLIGHT" => ["yeswiki" => ["{{section bgcolor=\"var(--primary-color)\" class=\"shape-rounded\" pattern=\"border-solid\" }}", "{{end elem=\"section\"}}"], "html" => ["<div class=\"well\">", "</div>"]], "CODE" => ["yeswiki" => ["%%", "%%"], "html" => ["<pre>", "</pre>"]], "INLINE_CODE" => ["yeswiki" => ["`", "`"], "html" => ["<code>", "</code>"]], "COMMENT" => ["yeswiki" => ["{#", "#}"]], "BOLD" => ["yeswiki" => ["**", "**"], "icon" => "fa fa-bold"], "ITALIC" => ["yeswiki" => ["//", "//"], "icon" => "fa fa-italic"], "UNDERLINE" => ["yeswiki" => ["__", "__"], "icon" => "fa fa-underline"], "STRIKE" => ["yeswiki" => ["@@", "@@"], "icon" => "fa fa-strikethrough"], "LIST" => ["yeswiki" => [" - ", ""], "icon" => "fa fa-list"], "LINE" => ["yeswiki" => ["
------
", ""], "icon" => "fa fa-minus icon-minus"], "LINK" => ["icon" => "fa fa-link"], "NEWPAGE" => ["icon" => "fa fa-plus-square"]];
            // line 103
            echo "
  ";
            // line 104
            $context["syntax"] = (($__internal_compile_1 = ($context["DELIMITERS"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_upper_filter($this->env, ($context["name"] ?? null))] ?? null) : null);
            // line 105
            echo "  ";
            $context["label"] = $this->env->getFunction('_t')->getCallable()(("ACEDITOR_" . twig_upper_filter($this->env, ($context["name"] ?? null))));
            // line 106
            echo "
  <a title=\"";
            // line 107
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, ($context["btnClass"] ?? null), "html", null, true);
            echo " aceditor-btn aceditor-btn-";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\"
     data-lft=\"";
            // line 108
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["syntax"] ?? null), "yeswiki", [], "any", false, false, false, 108)), "html", null, true);
            echo "\" data-rgt=\"";
            echo twig_escape_filter($this->env, twig_last($this->env, twig_get_attribute($this->env, $this->source, ($context["syntax"] ?? null), "yeswiki", [], "any", false, false, false, 108)), "html", null, true);
            echo "\">
    ";
            // line 109
            if (twig_get_attribute($this->env, $this->source, ($context["syntax"] ?? null), "icon", [], "any", false, false, false, 109)) {
                // line 110
                echo "      <i class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["syntax"] ?? null), "icon", [], "any", false, false, false, 110), "html", null, true);
                echo "\"></i>
    ";
            } else {
                // line 112
                echo "      ";
                echo ((twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["syntax"] ?? null), "html", [], "any", false, false, false, 112)) . ($context["label"] ?? null)) . twig_last($this->env, twig_get_attribute($this->env, $this->source, ($context["syntax"] ?? null), "html", [], "any", false, false, false, 112)));
                echo "
    ";
            }
            // line 114
            echo "  </a>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@aceditor/aceditor-toolbar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 114,  275 => 112,  269 => 110,  267 => 109,  261 => 108,  253 => 107,  250 => 106,  247 => 105,  245 => 104,  242 => 103,  238 => 80,  235 => 79,  221 => 78,  209 => 73,  205 => 71,  200 => 67,  194 => 66,  186 => 63,  183 => 62,  180 => 61,  176 => 60,  170 => 57,  162 => 52,  158 => 50,  153 => 47,  147 => 43,  143 => 42,  137 => 39,  133 => 38,  127 => 35,  123 => 34,  119 => 33,  115 => 32,  108 => 28,  104 => 27,  100 => 26,  96 => 25,  92 => 24,  88 => 23,  83 => 21,  79 => 20,  75 => 19,  71 => 18,  64 => 14,  60 => 12,  57 => 10,  50 => 6,  46 => 5,  43 => 4,  40 => 3,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@aceditor/aceditor-toolbar.twig", "C:\\xampp\\htdocs\\doryphore\\tools\\aceditor\\templates\\aceditor-toolbar.twig");
    }
}
