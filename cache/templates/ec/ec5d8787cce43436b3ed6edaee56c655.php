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

/* @attach/file-upload-modal.twig */
class __TwigTemplate_c9624ea0c9b4cc8155f92db59a68082d extends Template
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
        echo "<div class=\"modal fade\" id=\"UploadModal\">
  <div class=\"modal-dialog modal-lg\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h4 class=\"modal-title\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("UPLOAD_FILE"), "html", null, true);
        echo " </h4>
      </div>
      <div class=\"modal-body\">
        <form role=\"form\" id=\"form-modal-upload\" class=\"form-horizontal\">
          <input type=\"hidden\" value=\"\" name=\"filename\" class=\"filename\" />

          <div class=\"form-group file-option\">
            <label class=\"control-label col-sm-3\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("DOWNLOAD_LINK_TEXT"), "html", null, true);
        echo "</label>
            <div class=\"controls col-sm-9\">
              <input type=\"text\" name=\"attach_link_text\" value=\"\" class=\"attach_link_text form-control\">
            </div>
          </div>

          <div class=\"form-group pdf-option\">
            <label class=\"control-label col-sm-3\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("ATTACH_ACTION_DISPLAY_PDF_TEXT"), "html", null, true);
        echo "</label>
            <div class=\"controls col-sm-9\">
              <div class=\"radio inline-container\">
                <label>
                  <input type=\"radio\" name=\"attach_action_display_pdf\" value=\"0\" checked=\"checked\">
                  <span>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("ATTACH_ACTION_DISPLAY_PDF_LINK_TEXT"), "html", null, true);
        echo "</span>
                </label>
                <label>
                  <input type=\"radio\" name=\"attach_action_display_pdf\" value=\"1\">
                  <span>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("ATTACH_ACTION_DISPLAY_PDF_INCLUDED_TEXT"), "html", null, true);
        echo "</span>
                </label>
              </div>
            </div>
          </div>

          <div class=\"form-group image-option\">
            <label class=\"control-label col-sm-3\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("IMAGE_ALIGN"), "html", null, true);
        echo "</label>
            <div class=\"controls col-sm-9\">
              <div class=\"radio inline-container\">
                <label class=\"label-image-align-none\" for=\"image-align-none\">
                  <input type=\"radio\" id=\"image-align-none\" checked=\"checked\" value=\"\" name=\"attach_align\" class=\"input_radio image-align-none\" />
                  <span>
                    <img loading=\"lazy\" src=\"tools/attach/presentation/images/align-none.png\" alt=\"align-none\" />
                    ";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("NONE"), "html", null, true);
        echo "
                  </span>
                </label>
                <label class=\"label-image-align-left\" for=\"image-align-left\">
                  <input type=\"radio\" id=\"image-align-left\"value=\"left\" name=\"attach_align\" class=\"input_radio image-align-left\" />
                  <span>
                    <img loading=\"lazy\" src=\"tools/attach/presentation/images/align-left.png\" alt=\"align-left\" />
                    ";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("LEFT"), "html", null, true);
        echo "
                  </span>
                </label>
                <label class=\"label-image-align-center\" for=\"image-align-center\">
                  <input type=\"radio\" id=\"image-align-center\" value=\"center\" name=\"attach_align\" class=\"input_radio image-align-center\" />
                  <span>
                    <img loading=\"lazy\" src=\"tools/attach/presentation/images/align-center.png\" alt=\"align-center\" />
                    ";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("CENTER"), "html", null, true);
        echo "
                  </span>
                </label>
                <label class=\"label-image-align-right\" for=\"image-align-right\">
                  <input type=\"radio\" id=\"image-align-right\" value=\"right\" name=\"attach_align\" class=\"input_radio image-align-right\">
                  <span>
                    <img loading=\"lazy\" src=\"tools/attach/presentation/images/align-right.png\" alt=\"align-right\" />
                    ";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("RIGHT"), "html", null, true);
        echo "
                  </span>
                </label>
              </div>
            </div>
          </div>

          <div class=\"form-group image-option\">
            <label class=\"control-label col-sm-3\">";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("IMAGE_SIZE"), "html", null, true);
        echo "</label>
            <div class=\"controls col-sm-9\">
              <div class=\"radio inline-container\">
                <label for=\"image-size-small\">
                  <input type=\"radio\" id=\"image-size-small\" value=\"small\" name=\"attach_imagesize\" class=\"input_radio image-size-small\">
                  <span>
                    ";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("THUMBNAIL"), "html", null, true);
        echo "&nbsp;(";
        echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["config"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["image-small-width"] ?? null) : null), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (($__internal_compile_1 = ($context["config"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["image-small-height"] ?? null) : null), "html", null, true);
        echo ")
                  </span>
                </label>
                <label for=\"image-size-medium\">
                  <input type=\"radio\" id=\"image-size-medium\" value=\"medium\" name=\"attach_imagesize\" class=\"input_radio image-size-medium\">
                  <span>
                    ";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("MEDIUM"), "html", null, true);
        echo "&nbsp;(";
        echo twig_escape_filter($this->env, (($__internal_compile_2 = ($context["config"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["image-medium-width"] ?? null) : null), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (($__internal_compile_3 = ($context["config"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["image-medium-height"] ?? null) : null), "html", null, true);
        echo ")
                  </span>
                </label>
                <label for=\"image-size-big\">
                  <input type=\"radio\" id=\"image-size-big\" value=\"big\" name=\"attach_imagesize\" class=\"input_radio image-size-big\">
                  <span>
                    ";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("BIG"), "html", null, true);
        echo "&nbsp;(";
        echo twig_escape_filter($this->env, (($__internal_compile_4 = ($context["config"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["image-big-width"] ?? null) : null), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (($__internal_compile_5 = ($context["config"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["image-big-height"] ?? null) : null), "html", null, true);
        echo ")
                  </span>
                </label>
                <label for=\"image-size-original\">
                  <input type=\"radio\" id=\"image-size-original\" checked=\"checked\" value=\"original\" name=\"attach_imagesize\" class=\"input_radio image-size-original\">
                  <span>
                    ";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("ORIGINAL_SIZE"), "html", null, true);
        echo "
                  </span>
                </label>
              </div>
            </div>
          </div>

          <div class=\"form-group image-option\">
            <label class=\"control-label col-sm-3\" for=\"attach_caption\">";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("CAPTION"), "html", null, true);
        echo "</label>
            <div class=\"controls col-sm-9\">
              <input type=\"text\" id=\"attach_caption\" name=\"attach_caption\" value=\"\" class=\"attach_caption form-control\">
            </div>
          </div>

          <a title=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("SEE_THE_ADVANCED_PARAMETERS"), "html", null, true);
        echo "\" href=\"#avanced-settings\" data-toggle=\"collapse\" class=\"btn btn-default\">";
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("ADVANCED_PARAMETERS"), "html", null, true);
        echo "</a>
          <div id=\"avanced-settings\" class=\"collapse\">
            <hr>
            <div class=\"form-group\">
              <label class=\"control-label col-sm-3\" for=\"attach_link\">";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("ASSOCIATED_LINK"), "html", null, true);
        echo "</label>
              <div class=\"controls col-sm-9\">
                <input type=\"text\" id=\"attach_link\" name=\"attach_link\" value=\"\" class=\"attach_link form-control\">
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label col-sm-3\">";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("GRAPHICAL_EFFECTS"), "html", null, true);
        echo "</label>
              <div class=\"controls col-sm-9\">
                <div class=\"checkbox inline-container\">
                  <label>
                    <input type=\"checkbox\" name=\"attach_css_class\" value=\"whiteborder\" />
                    <span>";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("WHITE_BORDER"), "html", null, true);
        echo "</span>
                  </label>
                  <label>
                    <input type=\"checkbox\" name=\"attach_css_class\" value=\"lightshadow\" />
                    <span>";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("DROP_SHADOW"), "html", null, true);
        echo "</span>
                  </label>
                  <label>
                    <input type=\"checkbox\" name=\"attach_css_class\" value=\"zoom\" />
                    <span>";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("ZOOM_HOVER"), "html", null, true);
        echo "</span>
                  </label>
                </div>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label col-sm-3\">";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("ATTACH_ACTION_FULLIMAGELINK_TEXT"), "html", null, true);
        echo "</label>
              <div class=\"controls col-sm-9\">
                <div class=\"radio inline-container\">
                  <label>
                    <input type=\"radio\" name=\"attach_nofullimagelink\" value=\"0\" checked=\"checked\">
                    <span>";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("YES"), "html", null, true);
        echo "</span>
                  </label>
                  <label>
                    <input type=\"radio\" name=\"attach_nofullimagelink\" value=\"1\">
                    <span>";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("NO"), "html", null, true);
        echo "</span>
                  </label>
                </div>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label col-sm-3\" title=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("ALT_INFOS"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("ALTERNATIVE_TEXT"), "html", null, true);
        echo "</label>
              <div class=\"controls col-sm-9\">
                <input type=\"text\" name=\"attach_alt\" value=\"\" class=\"attach_alt form-control\">
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class=\"modal-footer\">
        <a href=\"#\" data-dismiss=\"modal\" role=\"button\" class=\"btn btn-default btn-cancel-upload\">";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("CANCEL_THIS_UPLOAD"), "html", null, true);
        echo "</a>
        <button name=\"insert\" class=\"btn btn-primary btn-insert-upload\">";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("INSERT"), "html", null, true);
        echo "</button>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@attach/file-upload-modal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 164,  295 => 163,  281 => 154,  272 => 148,  265 => 144,  257 => 139,  248 => 133,  241 => 129,  234 => 125,  226 => 120,  217 => 114,  208 => 110,  199 => 104,  188 => 96,  175 => 90,  162 => 84,  149 => 78,  140 => 72,  129 => 64,  119 => 57,  109 => 50,  99 => 43,  89 => 36,  79 => 29,  72 => 25,  64 => 20,  54 => 13,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@attach/file-upload-modal.twig", "C:\\xampp\\htdocs\\doryphore\\tools\\attach\\templates\\file-upload-modal.twig");
    }
}
