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

/* @bazar/entries/index-dynamic-templates/list.twig */
class __TwigTemplate_50779620c63d4a6f6e5576b72d90253d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'display_entries' => [$this, 'block_display_entries'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@bazar/entries/index-dynamic.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@bazar/entries/index-dynamic.twig", "@bazar/entries/index-dynamic-templates/list.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_display_entries($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "  ";
        $context["imWidth"] = 170;
        // line 5
        echo "  ";
        $context["imHeight"] = 170;
        // line 6
        echo "  ";
        $context["firstTokenCrop"] = $this->env->getFunction('csrfToken')->getCallable()((((("POST api/images/cache/" . ($context["imWidth"] ?? null)) . "/") . ($context["imHeight"] ?? null)) . "/crop"));
        // line 7
        echo "  <div class=\"panel-group no-dblclick\" style=\"opacity: 0;\" :class=\"{ready: ready}\" v-if=\"ready\">
    <div v-if=\"entriesToDisplay.length == 0\" class=\"alert alert-info\">
      ";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("BAZ_NO_RESULT"), "html", null, true);
        echo "
    </div>
    <Panel v-for=\"entry in entriesToDisplay\" :key=\"entry.id_fiche\" class=\"bazar-entry\" 
           @opened=\"getEntryRender(entry)\">
      <template #header>
        <div class=\"panel-heading-container\" :class=\"{'with-image': entry.visual}\">
          ";
        // line 16
        echo "          <div class=\"visual-area\" v-if=\"entry.visual\">
            <img
              loading=\"lazy\"
              :src=\"urlImage(entry,'visual',";
        // line 19
        echo twig_escape_filter($this->env, ($context["imWidth"] ?? null), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, ($context["imHeight"] ?? null), "html", null, true);
        echo ",'crop')\"
              @error=\"urlImageResizedOnError(entry,'visual',";
        // line 20
        echo twig_escape_filter($this->env, ($context["imWidth"] ?? null), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, ($context["imHeight"] ?? null), "html", null, true);
        echo ",'crop',";
        echo twig_escape_filter($this->env, json_encode(($context["firstTokenCrop"] ?? null)), "html", null, true);
        echo ")\">
            </img>
          </div>
          ";
        // line 24
        echo "          <h4 div class=\"title-area panel-title\">
            <span v-show=\"entry.color\" class=\"pellet\" :style=\"{'background-color': entry.color}\"></span>
            <i v-show=\"entry.icon\" :class=\"entry.icon\"></i>
            <span class=\"title\" v-html=\"entry.title || entry.bf_titre\"></span>
          </h4>
          ";
        // line 30
        echo "          <entry-field :entry=\"entry\" prop=\"floating\" class=\"floating-area\"></entry-field>
          ";
        // line 32
        echo "          <entry-field :entry=\"entry\" prop=\"subtitle\" class=\"subtitle-area\"></entry-field>
        </div>
      </template>
      <template #body>
        <div v-if=\"entry.html_render\" v-html=\"entry.html_render\"></div>
        <spinner-loader v-else height=\"300\"></spinner-loader>
      </template>
    </Panel>
    <spinner-loader v-if=\"isLoading\" class=\"overlay\"></spinner-loader>
  </div>
  <spinner-loader v-else height=\"500\"></spinner-loader>
";
    }

    public function getTemplateName()
    {
        return "@bazar/entries/index-dynamic-templates/list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 32,  100 => 30,  93 => 24,  83 => 20,  77 => 19,  72 => 16,  63 => 9,  59 => 7,  56 => 6,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@bazar/entries/index-dynamic-templates/list.twig", "C:\\xampp\\htdocs\\doryphore\\tools\\bazar\\templates\\entries\\index-dynamic-templates\\list.twig");
    }
}
