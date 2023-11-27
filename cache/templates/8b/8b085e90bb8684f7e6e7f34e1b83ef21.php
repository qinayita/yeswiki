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

/* @aceditor/aceditor.twig */
class __TwigTemplate_e1cf59e016afe6a6a6fb5a7dd44bffbe extends Template
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
        echo "<div class=\"aceditor-container\" data-name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["arguments"] ?? null), "name", [], "any", false, false, false, 1), "html", null, true);
        echo "\">
  <div class=\"scroll-container-toolbar\">
    <div class=\"btn-toolbar aceditor-toolbar\">
      ";
        // line 4
        echo twig_include($this->env, $context, "@aceditor/aceditor-toolbar.twig");
        echo "
    </div>
  </div>

  <div class=\"ace-container ace-editor-container\">
    <pre class=\"ace-body\"></pre>
  </div>

  <div class=\"flying-edit-button\">
    <a class=\"open-actions-builder-btn btn btn-primary btn-icon\">
      <i class=\"fa fa-pencil-alt\"></i>
    </a>
  </div>

  <textarea id=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["arguments"] ?? null), "name", [], "any", false, false, false, 18), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["arguments"] ?? null), "name", [], "any", false, false, false, 18), "html", null, true);
        echo "\" rows=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["arguments"] ?? null), "rows", [], "any", false, false, false, 18), "html", null, true);
        echo "\"
            class=\"aceditor-textarea\">";
        // line 20
        echo twig_get_attribute($this->env, $this->source, ($context["arguments"] ?? null), "value", [], "any", false, false, false, 20);
        // line 21
        echo "</textarea>

</div>

<script>
  // Send data to javascript
  var actionsBuilderData = ";
        // line 27
        echo json_encode(($context["actionsBuilderData"] ?? null));
        echo ";
  var pageTags = ";
        // line 28
        echo json_encode(($context["pageTags"] ?? null));
        echo "
</script>

";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getFunction('include_javascript')->getCallable()("javascripts/vendor/vue/vue.js"), "html", null, true);
        echo "
";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getFunction('include_javascript')->getCallable()("javascripts/vendor/vue-select/vue-select.min.js"), "html", null, true);
        echo "
";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getFunction('include_css')->getCallable()("styles/vendor/vue-select/vue-select.css"), "html", null, true);
        echo "

";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getFunction('include_javascript')->getCallable()("tools/aceditor/presentation/javascripts/aceditor.js", false, true), "html", null, true);
        echo "
";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getFunction('include_css')->getCallable()("tools/aceditor/presentation/styles/aceditor.css"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "@aceditor/aceditor.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 36,  102 => 35,  97 => 33,  93 => 32,  89 => 31,  83 => 28,  79 => 27,  71 => 21,  69 => 20,  61 => 18,  44 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@aceditor/aceditor.twig", "C:\\xampp\\htdocs\\doryphore\\tools\\aceditor\\templates\\aceditor.twig");
    }
}
