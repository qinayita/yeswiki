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

/* @aceditor/actions-builder-modal.twig */
class __TwigTemplate_b21564cfd0acd5738674f1204f123e59 extends Template
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
        echo "<div class=\"modal\" id=\"actions-builder-modal\" tabindex=\"-1\" role=\"dialog\">
  <div class=\"modal-dialog modal-lg\">
    <div class=\"modal-content\" id=\"actions-builder-app\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
        <h2 class=\"modal-title\" v-text=\"actionGroup.label\"></h2>
      </div>

      <!-- Modal Body -->
      <div class=\"modal-body\">
        <!-- Choose form (only for bazar actions) -->
        <div v-if=\"needFormField\" class=\"form-group\">
          <label class=\"control-label\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("ACTION_BUILDER_CHOOSE_FORM"), "html", null, true);
        echo "</label>
          <select :value=\"getSelectedFormId()\" required class=\"form-control\" @change=\"setSelectedFormId\" ref=\"formSelection\">
            <option v-for=\"(name, id) in formIds\" :value=\"id\" v-text=\"name\"></option>
          </select>
          <span v-if=\"isBazarListeAction\" class=\"text-muted\">";
        // line 19
        echo $this->env->getFunction('_t')->getCallable()("ACTION_BUILDER_SEVERAL_FORMS_HINT");
        echo "</span>
        </div>

        <!-- Choose Action -->
        <div class=\"form-group\" v-show=\"Object.keys(this.actions).length > 1\">
          <label class=\"control-label\" v-text=\"isBazarListeAction ? '";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("ACTION_BUILDER_CHOOSE_TEMPLATE"), "html", null, true);
        echo "' : '";
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("ACTION_BUILDER_CHOOSE_ACTION"), "html", null, true);
        echo "'\"></label>
          <select v-model=\"selectedActionId\" required class=\"form-control\">
            <option v-for=\"(action, actionId) in actions\" v-if=\"action.label\" :value=\"actionId\" v-html=\"action.label\"></option>
          </select>
        </div>

        <!-- Action Configuration -->
        <div v-if=\"selectedAction && (!needFormField || selectedForms)\" class=\"action-parameters-container\">

          <div v-if=\"selectedAction.hint\" class=\"alert alert-info\" v-html=\"selectedAction.hint\"></div>

          <!-- Iframe Preview -->
          <preview-action :wiki-code=\"wikiCodeForIframe\" :height=\"actionGroup.previewHeight\"></preview-action>

          <div class=\"panels-config-container\">
            <div v-for=\"panel in configPanels\" class=\"config-panel\" :class=\"panel.params.class\" 
                 :style=\"{width: panel.params.width || (configPanels.length == 1 ? '50%' : '33%')}\" v-show=\"checkVisibility(panel.params)\">
              <h3 v-text=\"panel.params.title || '";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("ACTION_BUILDER_PARAMETERS"), "html", null, true);
        echo "'\"></h3>
              <div class=\"config-panel-content\">
                <template v-for=\"(config, propName) in panel.params.properties\">
                  <component :is=\"componentIdFrom(config)\" :key=\"propName\" :ref=\"refFrom(config)\"
                             :value=\"values[propName]\" v-on:input=\"updateValue(propName, \$event)\"
                             v-show=\"checkVisibility(config)\"
                             :name=\"propName\" :values=\"values\"
                             :config=\"config\" :selected-forms=\"selectedForms\">
                  </component>
                </template>
              </div>
            </div>
          </div>

          <!-- Advanced Params Checkbox -->
          <input-checkbox v-if=\"isSomeAdvancedParams\" v-model=\"displayAdvancedParams\" 
                          :config=\"{label: '";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("ACTION_BUILDER_ADVANCED_PARAMETERS"), "html", null, true);
        echo "'}\"
                          class=\"advanced-params\">
          </input-checkbox>

          <div class=\"col-md-12 result-container\">
            <h3>";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("ACTION_BUILDER_WIKI_CODE_TITLE"), "html", null, true);
        echo "</h3>
            <wiki-code-input :action-params=\"actionParams\" :is-editing=\"isEditingExistingAction\"
                             :editor=\"editor\" :wiki-code=\"wikiCode\"></wiki-code-input>
          </div>
        </div>
      </div>

      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default btn-block\" data-dismiss=\"modal\">Close</button>
      </div>

    </div>
  </div>
</div>

";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getFunction('include_css')->getCallable()("tools/templates/libs/vendor/font-picker/fontawesome-picker.min.css"), "html", null, true);
        echo "
";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getFunction('include_javascript')->getCallable()("tools/templates/libs/vendor/font-picker/fontawesome-picker.min.js"), "html", null, true);
        echo "

";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getFunction('include_javascript')->getCallable()("javascripts/vendor/spectrum-colorpicker2/spectrum.min.js"), "html", null, true);
        echo "
";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getFunction('include_css')->getCallable()("styles/vendor/spectrum-colorpicker2/spectrum.min.css"), "html", null, true);
        echo "

";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getFunction('include_css')->getCallable()("styles/vendor/leaflet/leaflet.css"), "html", null, true);
        echo "
";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getFunction('include_javascript')->getCallable()("javascripts/vendor/leaflet/leaflet.min.js"), "html", null, true);
        echo "

";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getFunction('include_javascript')->getCallable()("javascripts/vendor/vue/vue.js"), "html", null, true);
        echo "

";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getFunction('include_javascript')->getCallable()("javascripts/vendor/vue-select/vue-select.min.js"), "html", null, true);
        echo "
";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getFunction('include_css')->getCallable()("styles/vendor/vue-select/vue-select.css"), "html", null, true);
        echo "

";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getFunction('include_javascript')->getCallable()("tools/aceditor/presentation/javascripts/actions-builder.js", false, true), "html", null, true);
        echo "
";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getFunction('include_css')->getCallable()("tools/aceditor/presentation/styles/actions-builder.css"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@aceditor/actions-builder-modal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 92,  176 => 91,  171 => 89,  167 => 88,  162 => 86,  157 => 84,  153 => 83,  148 => 81,  144 => 80,  139 => 78,  135 => 77,  117 => 62,  109 => 57,  90 => 41,  68 => 24,  60 => 19,  53 => 15,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@aceditor/actions-builder-modal.twig", "C:\\xampp\\htdocs\\doryphore\\tools\\aceditor\\templates\\actions-builder-modal.twig");
    }
}
