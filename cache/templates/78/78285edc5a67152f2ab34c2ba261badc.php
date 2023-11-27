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

/* @attach/file-upload-button.twig */
class __TwigTemplate_29fde6b3e5d8a2b8ba44945ca38ee427 extends Template
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
        echo "<div class=\"btn-group attach-file-uploader\"
     ";
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["arguments"] ?? null), "tempTag", [], "any", false, false, false, 2)) {
            echo " data-temptag=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["arguments"] ?? null), "tempTag", [], "any", false, false, false, 2), "html", null, true);
            echo "\"";
        }
        echo ">
  <noscript>
    <span class=\"alert alert-danger alert-error\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("ACTIVATE_JS_TO_UPLOAD_FILES"), "html", null, true);
        echo ".</span>
  </noscript>
  <div class=\"qq-uploader\">
    <div class=\"qq-upload-button btn btn-default\" title=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("UPLOAD_A_FILE"), "html", null, true);
        echo "\">
      <i class=\"fa fa-upload icon-upload\"></i>
      <span>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("UPLOAD_A_FILE_SHORT"), "html", null, true);
        echo "</span>
    </div>
    <ul class=\"qq-upload-list\"></ul>
  </div>

  ";
        // line 15
        echo "  <div class=\"sample-upload-list hide\">
    <li>
      <span class=\"qq-upload-file\"></span>
      <span class=\"qq-upload-spinner\"></span>
      <span class=\"qq-upload-size\"></span>
      <a class=\"qq-upload-cancel\" href=\"#\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("ATTACH_CANCEL"), "html", null, true);
        echo "</a>
      <span class=\"qq-upload-failed-text\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("FAILED"), "html", null, true);
        echo "</span>
    </li>
  </div>
</div>

<script>
  var imagesExtensions = ";
        // line 27
        echo json_encode(twig_split_filter($this->env, (($__internal_compile_0 = (($__internal_compile_1 = ($context["config"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["attach_config"] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["ext_images"] ?? null) : null), "|"));
        echo ";
</script>

";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getFunction('include_javascript')->getCallable()("tools/attach/presentation/javascripts/qq.js"), "html", null, true);
        echo "
";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getFunction('include_javascript')->getCallable()("tools/attach/presentation/javascripts/file-upload-button.js"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "@attach/file-upload-button.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 31,  94 => 30,  88 => 27,  79 => 21,  75 => 20,  68 => 15,  60 => 9,  55 => 7,  49 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@attach/file-upload-button.twig", "C:\\xampp\\htdocs\\doryphore\\tools\\attach\\templates\\file-upload-button.twig");
    }
}
