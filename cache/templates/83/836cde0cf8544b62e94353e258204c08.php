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

/* @templates/theme-selector-with-form.twig */
class __TwigTemplate_ee85945b10ae974f2bc2c9d0a5138e07 extends Template
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
        echo "<form class=\"";
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">
    ";
        // line 2
        $this->loadTemplate("@templates/theme-selector-with-form.twig", "@templates/theme-selector-with-form.twig", 2, "1612750400")->display($context);
        // line 58
        echo "
    ";
        // line 59
        if (((($context["mode"] ?? null) != "edit") && ($context["showAdminActions"] ?? null))) {
            // line 60
            echo "        <button class=\"btn btn-success btn-block \" type=\"button\" onclick=\"saveTheme(event,'";
            echo twig_escape_filter($this->env, $this->env->getFunction('url')->getCallable()(["params" => []]), "html", null, true);
            echo "')\">
          ";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("TEMPLATE_APPLY_ALL"), "html", null, true);
            echo "
        </button>    
    ";
        }
        // line 64
        echo "
    
    ";
        // line 66
        echo ($context["bgselector"] ?? null);
        echo "

    ";
        // line 68
        if ((($context["mode"] ?? null) == "edit")) {
            // line 69
            echo "
    <div>
        <a 
            title=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("SEE_THE_ADVANCED_PARAMETERS"), "html", null, true);
            echo "\" 
            href=\"#avanced-page-settings\" 
            data-toggle=\"collapse\" 
            class=\"btn btn-default\">
            ";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("ADVANCED_PARAMETERS"), "html", null, true);
            echo "
        </a>
    </div>
    <div id=\"avanced-page-settings\" class=\"collapse\">
        <hr>
        <div class=\"control-group form-group\">
        <label class=\"control-label\">";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("PAGE_LANGUAGE"), "html", null, true);
            echo "</label>
        <div class=\"controls\">
            <select class=\"form-control\" name=\"lang\">
                <option value=\"\"></option>
                ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["availableLanguages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 87
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\"";
                if (($context["value"] == ($context["preferedLanguage"] ?? null))) {
                    echo " selected=\"selected\"";
                }
                echo ">
                    ";
                // line 88
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_escape_filter($this->env, (($__internal_compile_0 = (($__internal_compile_1 = ($context["languagesList"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["value"]] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["nativeName"] ?? null) : null))), "html", null, true);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "            </select>
        </div>
        </div>

        <fieldset>
            <h4>";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("CHOOSE_PAGE_FOR"), "html", null, true);
            echo ": </h4>
            ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(["PageMenuHaut" => "HORIZONTAL_MENU_PAGE", "PageRapideHaut" => "FAST_ACCESS_RIGHT_PAGE", "PageHeader" => "HEADER_PAGE", "PageFooter" => "FOOTER_PAGE", "PageMenu" => "VERTICAL_MENU_PAGE"]);
            foreach ($context['_seq'] as $context["tag"] => $context["t"]) {
                // line 103
                echo "                <div class=\"control-group form-group\">
                    <label class=\"control-label\">";
                // line 104
                echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()($context["t"]), "html", null, true);
                echo "</label>
                    <div class=\"controls\">
                        <input 
                            class=\"form-control typeahead\" 
                            type=\"text\" 
                            autocomplete=\"off\" 
                            name=\"";
                // line 110
                echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
                echo "\" 
                            data-provide=\"typeahead\" 
                            data-items=\"5\" 
                            data-source='";
                // line 113
                echo twig_escape_filter($this->env, ($context["listWikinames"] ?? null), "html", null, true);
                echo "' 
                            value=\"";
                // line 114
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metadatas", [], "any", false, true, false, 114), $context["tag"], [], "array", true, true, false, 114)) ? ((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metadatas", [], "any", false, false, false, 114)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["tag"]] ?? null) : null)) : ($context["tag"])), "html", null, true);
                echo "\" />
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tag'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "        </fieldset>
    </div> <!-- /#avanced-page-settings -->
    ";
        }
        // line 121
        echo "</form>
";
        // line 122
        if ((($context["mode"] ?? null) != "edit")) {
            // line 124
            echo "    <div id=\"preset-sidenav\" class=\"sidenav\">

        <form id=\"preset-form\" action=\"#\" method=\"post\">
            <h4>";
            // line 127
            echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("TEMPLATE_CUSTOMIZE_PRESET"), "html", null, true);
            echo "<span class=\"closebtn\" onclick=\"closeNav()\">&times;</span></h4>

            ";
            // line 129
            echo twig_escape_filter($this->env, $this->env->getFunction('include_javascript')->getCallable()("javascripts/vendor/spectrum-colorpicker2/spectrum.min.js"), "html", null, true);
            echo "
            ";
            // line 130
            echo twig_escape_filter($this->env, $this->env->getFunction('include_javascript')->getCallable()("tools/templates/libs/vendor/jquery.fontselect.js"), "html", null, true);
            echo "
            ";
            // line 131
            echo twig_escape_filter($this->env, $this->env->getFunction('include_javascript')->getCallable()("tools/templates/presentation/javascripts/preset-sidenav.js"), "html", null, true);
            echo "
            ";
            // line 132
            echo twig_escape_filter($this->env, $this->env->getFunction('include_css')->getCallable()("styles/vendor/spectrum-colorpicker2/spectrum.min.css"), "html", null, true);
            echo "
            ";
            // line 133
            echo twig_escape_filter($this->env, $this->env->getFunction('include_css')->getCallable()("tools/templates/presentation/styles/preset-sidenav.css"), "html", null, true);
            echo "

            ";
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(["primary-color" => ["color" => "#1A89A0", "t" => "TEMPLATE_PRIMARY_COLOR"], "secondary-color-1" => ["color" => "#d8604c", "t" => "TEMPLATE_SECONDARY_COLOR_1"], "secondary-color-2" => ["color" => "#D78958", "t" => "TEMPLATE_SECONDARY_COLOR_2"], "neutral-color" => ["color" => "#4E5056", "t" => "TEMPLATE_NEUTRAL_COLOR"], "neutral-soft-color" => ["color" => "#b0b1b3", "t" => "TEMPLATE_SOFT_COLOR"], "neutral-light-color" => ["color" => "#ffffff", "t" => "TEMPLATE_LIGHT_COLOR"]]);
            foreach ($context['_seq'] as $context["name"] => $context["data"]) {
                // line 143
                echo "                <div class=\"form-group\">
                    <input 
                        class=\"form-input colorpicker\"
                        type=\"color\" name=\"";
                // line 146
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "\"
                        value=\"";
                // line 147
                echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["presetsData"] ?? null), "currentCSSValues", [], "any", false, true, false, 147), $context["name"], [], "array", true, true, false, 147) &&  !(null === (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["presetsData"] ?? null), "currentCSSValues", [], "any", false, true, false, 147)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[$context["name"]] ?? null) : null)))) ? ((($__internal_compile_4 = twig_get_attribute($this->env, $this->source, ($context["presetsData"] ?? null), "currentCSSValues", [], "any", false, true, false, 147)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[$context["name"]] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["data"], "color", [], "any", false, false, false, 147))), "html", null, true);
                echo "\" />
                    <label>";
                // line 148
                echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()(twig_get_attribute($this->env, $this->source, $context["data"], "t", [], "any", false, false, false, 148)), "html", null, true);
                echo "</label>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            echo "            
            <div class=\"form-group\">
                <label>";
            // line 153
            echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("TEMPLATE_MAIN_TEXT_SIZE"), "html", null, true);
            echo "</label>
                <input class=\"form-input range\" type=\"range\" min=\"9\" max=\"34\" step=\"1\" name=\"main-text-fontsize\"
                    value=\"";
            // line 156
            ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 155
($context["presetsData"] ?? null), "currentCSSValues", [], "any", false, true, false, 155), "main-text-fontsize", [], "array", true, true, false, 155)) ? (print (twig_escape_filter($this->env, (($__internal_compile_5 = twig_split_filter($this->env, (($__internal_compile_6 = twig_get_attribute($this->env, $this->source,             // line 156
($context["presetsData"] ?? null), "currentCSSValues", [], "any", false, false, false, 156)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["main-text-fontsize"] ?? null) : null), "px")) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[0] ?? null) : null), "html", null, true))) : (print ("17")));
            echo "\" />
            </div>
            <div class=\"form-group\">
                <label>";
            // line 159
            echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("TEMPLATE_MAIN_TEXT_FONT"), "html", null, true);
            echo "</label>
                <input class=\"form-input fontpicker\" type=\"text\" name=\"main-text-fontfamily\"
                    value=\"";
            // line 161
            (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["presetsData"] ?? null), "currentCSSValues", [], "any", false, true, false, 161), "main-text-fontfamily", [], "array", true, true, false, 161) &&  !(null === (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, ($context["presetsData"] ?? null), "currentCSSValues", [], "any", false, true, false, 161)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["main-text-fontfamily"] ?? null) : null)))) ? (print (twig_escape_filter($this->env, (($__internal_compile_8 = twig_get_attribute($this->env, $this->source, ($context["presetsData"] ?? null), "currentCSSValues", [], "any", false, true, false, 161)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["main-text-fontfamily"] ?? null) : null), "html", null, true))) : (print ("Nunito")));
            echo "\" />
                </div>
            <div class=\"form-group\">
                <label>";
            // line 164
            echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("TEMPLATE_MAIN_TITLE_FONT"), "html", null, true);
            echo "</label>
                <input class=\"form-input fontpicker\" type=\"text\" name=\"main-title-fontfamily\"
                    value=\"";
            // line 166
            (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["presetsData"] ?? null), "currentCSSValues", [], "any", false, true, false, 166), "main-title-fontfamily", [], "array", true, true, false, 166) &&  !(null === (($__internal_compile_9 = twig_get_attribute($this->env, $this->source, ($context["presetsData"] ?? null), "currentCSSValues", [], "any", false, true, false, 166)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["main-title-fontfamily"] ?? null) : null)))) ? (print (twig_escape_filter($this->env, (($__internal_compile_10 = twig_get_attribute($this->env, $this->source, ($context["presetsData"] ?? null), "currentCSSValues", [], "any", false, true, false, 166)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["main-title-fontfamily"] ?? null) : null), "html", null, true))) : (print ("Nunito")));
            echo "\" />
            </div>
            ";
            // line 168
            if ($this->env->getFunction('hasAcl')->getCallable()("+")) {
                // line 169
                echo "                <div class=\"form-group\">
                    <label>";
                // line 170
                echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("TEMPLATE_PRESET_FILENAME"), "html", null, true);
                echo "</label>
                    <input class=\"form-input form-control\" type=\"text\" name=\"filename\"
                    value=\"";
                // line 172
                echo twig_escape_filter($this->env, (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["presetsData"] ?? null), "selectedPresetName", [], "any", false, false, false, 172))) ? (twig_replace_filter(twig_get_attribute($this->env, $this->source,                 // line 173
($context["presetsData"] ?? null), "selectedPresetName", [], "any", false, false, false, 173), [".css" => ""])) : ((( !twig_test_empty(twig_get_attribute($this->env, $this->source,                 // line 175
($context["presetsData"] ?? null), "selectedCustomPresetName", [], "any", false, false, false, 175))) ? (twig_replace_filter(twig_get_attribute($this->env, $this->source,                 // line 176
($context["presetsData"] ?? null), "selectedCustomPresetName", [], "any", false, false, false, 176), [".css" => ""])) : (twig_get_attribute($this->env, $this->source, "custom-", "date", ["Y-m-d_H-i"], "method", false, false, false, 177))))), "html", null, true);
                // line 178
                echo "\" />
                </div>
                <button type=\"button\" class=\"btn btn-primary btn-block\"
                    onclick=\"javascript:saveCSSPreset(this,'";
                // line 181
                echo twig_escape_filter($this->env, $this->env->getFunction('url')->getCallable()(["tag" => "api/templates/custom-presets/"]), "html", null, true);
                echo "');\">
                    ";
                // line 182
                echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("TEMPLATE_SAVE"), "html", null, true);
                echo "
                </button>
            ";
            }
            // line 185
            echo "        </form>
    </div>
";
        }
        // line 188
        echo "<script>
  var themeSelectorTranslation = ";
        // line 189
        echo json_encode(($context["themeSelectorTranslation"] ?? null));
        echo ";
  var customCSSPresetsPrefix = ";
        // line 190
        echo json_encode(($context["customCSSPresetsPrefix"] ?? null));
        echo ";
</script>";
    }

    public function getTemplateName()
    {
        return "@templates/theme-selector-with-form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 190,  312 => 189,  309 => 188,  304 => 185,  298 => 182,  294 => 181,  289 => 178,  287 => 176,  286 => 175,  285 => 173,  284 => 172,  279 => 170,  276 => 169,  274 => 168,  269 => 166,  264 => 164,  258 => 161,  253 => 159,  247 => 156,  246 => 155,  245 => 156,  240 => 153,  236 => 151,  227 => 148,  223 => 147,  219 => 146,  214 => 143,  210 => 135,  205 => 133,  201 => 132,  197 => 131,  193 => 130,  189 => 129,  184 => 127,  179 => 124,  177 => 122,  174 => 121,  169 => 118,  159 => 114,  155 => 113,  149 => 110,  140 => 104,  137 => 103,  133 => 96,  129 => 95,  122 => 90,  114 => 88,  105 => 87,  101 => 86,  94 => 82,  85 => 76,  78 => 72,  73 => 69,  71 => 68,  66 => 66,  62 => 64,  56 => 61,  51 => 60,  49 => 59,  46 => 58,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@templates/theme-selector-with-form.twig", "C:\\xampp\\htdocs\\doryphore\\tools\\templates\\templates\\theme-selector-with-form.twig");
    }
}


/* @templates/theme-selector-with-form.twig */
class __TwigTemplate_ee85945b10ae974f2bc2c9d0a5138e07___1612750400 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'firstoptionpreset' => [$this, 'block_firstoptionpreset'],
            'presetpart' => [$this, 'block_presetpart'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@templates/theme-selector.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@templates/theme-selector.twig", "@templates/theme-selector-with-form.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_firstoptionpreset($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "            ";
        if ((($context["mode"] ?? null) === "edit")) {
            // line 6
            echo "                <option value=\"\" ";
            if ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["presetsData"] ?? null), "selectedPresetName", [], "any", false, false, false, 6)) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["presetsData"] ?? null), "selectedCustomPresetName", [], "any", false, false, false, 6)))) {
                echo "selected=\"selected\"";
            }
            echo ">
                    ";
            // line 7
            echo twig_escape_filter($this->env, ($this->env->getFunction('_t')->getCallable()("TEMPLATE_DEFAULT_PRESET") . ((twig_test_empty(($context["favoritePreset"] ?? null))) ? ("") : (((" (" . twig_replace_filter(($context["favoritePreset"] ?? null), [".css" => ""])) . ")")))), "html", null, true);
            echo "
                </option>
            ";
        }
        // line 10
        echo "        ";
    }

    // line 11
    public function block_presetpart($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "            ";
        if ((($context["mode"] ?? null) === "edit")) {
            // line 13
            echo "                ";
            $this->displayParentBlock("presetpart", $context, $blocks);
            echo "
            ";
        } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (($__internal_compile_11 =         // line 14
($context["templates"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[($context["favoriteTheme"] ?? null)] ?? null) : null), "presets", [], "any", false, false, false, 14))) {
            // line 15
            echo "                <div class=\"preset-settings-container\">
                    <h4>";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("TEMPLATE_PRESETS"), "html", null, true);
            echo "</h4>
                    <ul class=\"css-preset-list list-inline\">
                    ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (($__internal_compile_12 = ($context["templates"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[($context["favoriteTheme"] ?? null)] ?? null) : null), "presets", [], "any", false, false, false, 18));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 19
                echo "                        <li>
                            <a
                                class=\"css-preset";
                // line 21
                echo ((($context["key"] == twig_get_attribute($this->env, $this->source, ($context["presetsData"] ?? null), "selectedPresetName", [], "any", false, false, false, 21))) ? (" active") : (""));
                echo "\" 
                                href=\"";
                // line 22
                echo ((twig_get_attribute($this->env, $this->source, (($__internal_compile_13 = ($context["templates"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[($context["favoriteTheme"] ?? null)] ?? null) : null), "isCustom", [], "any", false, false, false, 22)) ? ("custom/") : (""));
                // line 24
                echo "themes/";
                echo twig_escape_filter($this->env, ($context["favoriteTheme"] ?? null), "html", null, true);
                echo "/presets/";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\"
                                data-key=\"";
                // line 25
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\"
                                ";
                // line 26
                echo (($__internal_compile_14 = twig_get_attribute($this->env, $this->source, ($context["presetsData"] ?? null), "dataHtmlForPresets", [], "any", false, false, false, 26)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[$context["key"]] ?? null) : null);
                echo ">
                            ";
                // line 27
                echo twig_escape_filter($this->env, twig_replace_filter($context["key"], [".css" => ""]), "html", null, true);
                echo "
                            </a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["presetsData"] ?? null), "customCSSPresets", [], "any", false, false, false, 31));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 32
                echo "                        <li>
                            <a  
                                class=\"css-preset custom";
                // line 34
                echo ((($context["key"] == twig_get_attribute($this->env, $this->source, ($context["presetsData"] ?? null), "selectedCustomPresetName", [], "any", false, false, false, 34))) ? (" active") : (""));
                echo "\"
                                href=\"";
                // line 35
                echo twig_escape_filter($this->env, ((($context["customCSSPresetsPath"] ?? null) . "/") . $context["key"]), "html", null, true);
                echo "\"
                                data-key=\"";
                // line 36
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\"
                                ";
                // line 37
                echo (($__internal_compile_15 = twig_get_attribute($this->env, $this->source, ($context["presetsData"] ?? null), "dataHtmlForCustomCSSPresets", [], "any", false, false, false, 37)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[$context["key"]] ?? null) : null);
                echo ">
                                ";
                // line 38
                echo twig_escape_filter($this->env, twig_replace_filter($context["key"], [".css" => ""]), "html", null, true);
                echo "
                            </a>
                            ";
                // line 40
                if (($context["showAdminActions"] ?? null)) {
                    // line 41
                    echo "                                <button class=\"btn btn-default btn-xs\"
                                    data-key=\"";
                    // line 42
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\"
                                    onclick=\"javascript:deleteCSSPreset(this,'";
                    // line 43
                    echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("TEMPLATE_DELETE_CSS_PRESET"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo " ?',
                                    '";
                    // line 44
                    echo twig_escape_filter($this->env, $this->env->getFunction('url')->getCallable()(["tag" => ("api/templates/custom-presets/" . $context["key"])]), "html", null, true);
                    echo "');\">
                                    <i class=\"fas fa-trash\"></i>
                                </button>
                            ";
                }
                // line 47
                echo "  
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                    </ul>
                    <a class=\"btn btn-xs btn-primary btn-block btn-new-preset\" href=\"javascript:void(0)\" onclick=\"openNav()\">
                    </i>";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("TEMPLATE_CREATE_PRESET"), "html", null, true);
            echo "
                    </a>
                </div>
            ";
        }
        // line 56
        echo "        ";
    }

    public function getTemplateName()
    {
        return "@templates/theme-selector-with-form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  531 => 56,  524 => 52,  520 => 50,  512 => 47,  505 => 44,  499 => 43,  495 => 42,  492 => 41,  490 => 40,  485 => 38,  481 => 37,  477 => 36,  473 => 35,  469 => 34,  465 => 32,  460 => 31,  450 => 27,  446 => 26,  442 => 25,  435 => 24,  433 => 22,  429 => 21,  425 => 19,  421 => 18,  416 => 16,  413 => 15,  411 => 14,  406 => 13,  403 => 12,  399 => 11,  395 => 10,  389 => 7,  382 => 6,  379 => 5,  375 => 4,  364 => 2,  316 => 190,  312 => 189,  309 => 188,  304 => 185,  298 => 182,  294 => 181,  289 => 178,  287 => 176,  286 => 175,  285 => 173,  284 => 172,  279 => 170,  276 => 169,  274 => 168,  269 => 166,  264 => 164,  258 => 161,  253 => 159,  247 => 156,  246 => 155,  245 => 156,  240 => 153,  236 => 151,  227 => 148,  223 => 147,  219 => 146,  214 => 143,  210 => 135,  205 => 133,  201 => 132,  197 => 131,  193 => 130,  189 => 129,  184 => 127,  179 => 124,  177 => 122,  174 => 121,  169 => 118,  159 => 114,  155 => 113,  149 => 110,  140 => 104,  137 => 103,  133 => 96,  129 => 95,  122 => 90,  114 => 88,  105 => 87,  101 => 86,  94 => 82,  85 => 76,  78 => 72,  73 => 69,  71 => 68,  66 => 66,  62 => 64,  56 => 61,  51 => 60,  49 => 59,  46 => 58,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@templates/theme-selector-with-form.twig", "C:\\xampp\\htdocs\\doryphore\\tools\\templates\\templates\\theme-selector-with-form.twig");
    }
}
