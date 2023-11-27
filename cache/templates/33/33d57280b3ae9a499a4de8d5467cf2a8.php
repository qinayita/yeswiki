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

/* @core/multidelete-macro.twig */
class __TwigTemplate_7f5f911a94b46f9c3e748551445c8f5f extends Template
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
        // line 47
        echo "
";
        // line 67
        echo "
";
    }

    // line 1
    public function macro_insertButton($__targetId__ = null, $__type__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "targetId" => $__targetId__,
            "type" => $__type__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 2
            echo "  ";
            echo twig_escape_filter($this->env, $this->env->getFunction('include_javascript')->getCallable()("javascripts/multidelete.js"), "html", null, true);
            echo "
  ";
            // line 3
            $context["modalId"] = (( !twig_test_empty(($context["modalId"] ?? null))) ? (($context["modalId"] ?? null)) : (("MultiDeleteModal" . ($context["targetId"] ?? null))));
            // line 4
            echo "  <a 
    class=\"btn btn-sm btn-danger\" 
    title=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("DELETE_ALL_SELECTED_ITEMS"), "html_attr");
            echo "\"
    data-toggle=\"modal\"
    role=\"button\"
    href=\"#";
            // line 9
            echo twig_escape_filter($this->env, ($context["modalId"] ?? null), "html", null, true);
            echo "\"\t
    onclick=\"multiDeleteService.updateNbSelected('";
            // line 10
            echo twig_escape_filter($this->env, ($context["modalId"] ?? null), "html", null, true);
            echo "')\">
    <i class=\"fa fa-trash\"></i>
    ";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("DELETE_SELECTION"), "html", null, true);
            echo "
  </a>
  <div class=\"modal fade multidelete\" 
    id=\"";
            // line 15
            echo twig_escape_filter($this->env, ($context["modalId"] ?? null), "html", null, true);
            echo "\" 
    tabindex=\"-1\" 
    role=\"dialog\" 
    aria-labelledby=\"";
            // line 18
            echo twig_escape_filter($this->env, ($context["modalId"] ?? null), "html", null, true);
            echo "Label\" 
    aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
          <h3 id=\"";
            // line 24
            echo twig_escape_filter($this->env, ($context["modalId"] ?? null), "html", null, true);
            echo "Label\">";
            echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("DELETE_ALL_SELECTED_ITEMS"), "html", null, true);
            echo "</h3>
        </div>
        <div class=\"modal-body\">
          <div class=\"alert alert-info\">
            <b>";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("NUMBER_OF_ELEMENTS"), "html", null, true);
            echo "&nbsp;:</b>
            <span class=\"nb-elem-selected\"></span>
          </div>
          <button class=\"btn btn-sm btn-warning start-btn-delete-all\" data-target=\"";
            // line 31
            echo twig_escape_filter($this->env, ($context["targetId"] ?? null), "html", null, true);
            echo "\" data-type=\"";
            echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("DELETE"), "html", null, true);
            echo "</button>
          <br/><br/>
          <div class=\"multi-delete-results\"></div>
        </div>
        <div class=\"modal-footer\">
          <div class=\"progressbar progress\">
            <div class=\"progress-bar\" role=\"progressbar\"
              style=\"width: 0%;\"
              aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\">
            </div>
          </div>
        </div>
      </div>";
            // line 44
            echo "    </div>";
            // line 45
            echo "  </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 48
    public function macro_insertSelectLine($__targetId__ = null, $__itemId__ = null, $__disabled__ = false, $__type__ = "pages", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "targetId" => $__targetId__,
            "itemId" => $__itemId__,
            "disabled" => $__disabled__,
            "type" => $__type__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 49
            echo "  <td>
    ";
            // line 50
            $context["id"] = ((("selectline_" . ($context["targetId"] ?? null)) . "_") . twig_escape_filter($this->env, ($context["itemId"] ?? null), "html_attr"));
            // line 51
            echo "    <label for=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\">
      <input
        ";
            // line 53
            if (($context["disabled"] ?? null)) {
                // line 54
                echo "          disabled
        ";
            } else {
                // line 56
                echo "          class=\"selectline\"
          data-itemid=\"";
                // line 57
                echo twig_escape_filter($this->env, ($context["itemId"] ?? null), "html", null, true);
                echo "\"
        ";
            }
            // line 59
            echo "        type=\"checkbox\"
        id=\"";
            // line 60
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" 
        name=\"";
            // line 61
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" 
        value=\"\">
      <span></span>
    </label>
  </td>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 68
    public function macro_insertSelectAll($__targetId__ = null, $__selectAllType__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "targetId" => $__targetId__,
            "selectAllType" => $__selectAllType__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 69
            echo "  ";
            echo twig_escape_filter($this->env, $this->env->getFunction('include_javascript')->getCallable()("javascripts/multidelete.js"), "html", null, true);
            echo "
  <th class=\"prevent-sorting not-export-this-col\">
    <label class=\"check-all-container\" for=\"checkbox_checkall_";
            // line 71
            echo twig_escape_filter($this->env, ($context["selectAllType"] ?? null), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, ($context["targetId"] ?? null), "html", null, true);
            echo "\">
      <input
        type=\"checkbox\"
        id=\"checkbox_checkall_";
            // line 74
            echo twig_escape_filter($this->env, ($context["selectAllType"] ?? null), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, ($context["targetId"] ?? null), "html", null, true);
            echo "\" 
        name=\"checkbox_checkall_";
            // line 75
            echo twig_escape_filter($this->env, ($context["selectAllType"] ?? null), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, ($context["targetId"] ?? null), "html", null, true);
            echo "\" 
        value=\"\" onclick=\"checkAllFirstCol(this)\">
      <span></span>
    </label>
  </th>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@core/multidelete-macro.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 75,  243 => 74,  235 => 71,  229 => 69,  215 => 68,  200 => 61,  196 => 60,  193 => 59,  188 => 57,  185 => 56,  181 => 54,  179 => 53,  173 => 51,  171 => 50,  168 => 49,  152 => 48,  142 => 45,  140 => 44,  121 => 31,  115 => 28,  106 => 24,  97 => 18,  91 => 15,  85 => 12,  80 => 10,  76 => 9,  70 => 6,  66 => 4,  64 => 3,  59 => 2,  45 => 1,  40 => 67,  37 => 47,);
    }

    public function getSourceContext()
    {
        return new Source("", "@core/multidelete-macro.twig", "C:\\xampp\\htdocs\\doryphore\\templates\\multidelete-macro.twig");
    }
}
