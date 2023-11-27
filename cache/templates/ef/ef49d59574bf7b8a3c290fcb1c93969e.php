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

/* @core/comment-table.twig */
class __TwigTemplate_d6e12e18c2e21c0a7bb9fb1cd380eb52 extends Template
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
        $macros["multidelete"] = $this->macros["multidelete"] = $this->loadTemplate("@core/multidelete-macro.twig", "@core/comment-table.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getFunction('include_javascript')->getCallable()("javascripts/vendor/datatables-full/jquery.dataTables.min.js"), "html", null, true);
        echo "
";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getFunction('include_css')->getCallable()("styles/vendor/datatables-full/dataTables.bootstrap.min.css"), "html", null, true);
        echo "

<div id='comments-table-action'>
  ";
        // line 8
        echo "  <table class=\"table table-striped\" data-order='[[ 0, \"desc\" ]]'>
    <thead>
      <tr>
        ";
        // line 11
        echo twig_call_macro($macros["multidelete"], "macro_insertSelectAll", ["comments-table-action", "top"], 11, $context, $this->getSourceContext());
        echo "
        <th>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("COMMENT_DATE"), "html", null, true);
        echo "</th>
        ";
        // line 14
        echo "        <th data-content-padding=\"mmmmmmmmmmmmmmmmmmmmmmmmmm\">";
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("COMMENT_CONTENT"), "html", null, true);
        echo "</th>
        <th data-class-name=\"comments-table-break-word-column\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("COMMENT_USER"), "html", null, true);
        echo "</th>
        <th data-class-name=\"comments-table-break-word-column\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("COMMENT_TAG"), "html", null, true);
        echo "</th>
        <th data-class-name=\"comments-table-break-word-column\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("COMMENT_ON_PAGE"), "html", null, true);
        echo "</th>
        <th>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("MODIFY"), "html", null, true);
        echo "</th>
        <th>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("DELETE"), "html", null, true);
        echo "</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
            // line 24
            echo "        <tr>
          ";
            // line 25
            echo twig_call_macro($macros["multidelete"], "macro_insertSelectLine", ["comments-table-action", twig_get_attribute($this->env, $this->source,             // line 27
$context["com"], "tag", [], "any", false, false, false, 27),  !$this->env->getFunction('hasAcl')->getCallable()(twig_get_attribute($this->env, $this->source,             // line 28
$context["com"], "owner", [], "any", false, false, false, 28)), "comments"], 25, $context, $this->getSourceContext());
            // line 29
            echo "
          <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["com"], "time", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
          <td>";
            // line 31
            echo $this->env->getFunction('format')->getCallable()(twig_get_attribute($this->env, $this->source, $context["com"], "body", [], "any", false, false, false, 31));
            echo "</td>
          <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["com"], "owner", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
          <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["com"], "tag", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
          <td>";
            // line 34
            $context["tagAnchor"] = (((twig_get_attribute($this->env, $this->source, $context["com"], "parentTag", [], "any", true, true, false, 34) &&  !(null === twig_get_attribute($this->env, $this->source, $context["com"], "parentTag", [], "any", false, false, false, 34)))) ? (twig_get_attribute($this->env, $this->source, $context["com"], "parentTag", [], "any", false, false, false, 34)) : (twig_get_attribute($this->env, $this->source, $context["com"], "comment_on", [], "any", false, false, false, 34)));
            echo "<a class=\"new-window\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getFunction('url')->getCallable()(["tag" => ($context["tagAnchor"] ?? null)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["tagAnchor"] ?? null), "html", null, true);
            echo "</a></td>
          <td>
            ";
            // line 37
            echo "            ";
            if ($this->env->getFunction('hasAcl')->getCallable()(twig_get_attribute($this->env, $this->source, $context["com"], "owner", [], "any", false, false, false, 37))) {
                echo " 
              <a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getFunction('url')->getCallable()(["tag" => twig_get_attribute($this->env, $this->source, $context["com"], "tag", [], "any", false, false, false, 38), "handler" => "edit"]), "html", null, true);
                echo "\"
                class=\"btn btn-sm btn-warning new-window\" role=\"button\"
                title=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("MODIFY"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["com"], "tag", [], "any", false, false, false, 40), "html", null, true);
                echo "\">
                ";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("MODIFY"), "html", null, true);
                echo "
              </a>
            ";
            }
            // line 44
            echo "          </td>
          <td>
            ";
            // line 46
            if ($this->env->getFunction('hasAcl')->getCallable()(twig_get_attribute($this->env, $this->source, $context["com"], "owner", [], "any", false, false, false, 46))) {
                // line 47
                echo "              <a 
                data-toggle=\"modal\"
                role=\"button\"
                href=\"#commentsTableDeleteModal\"
                class=\"btn btn-sm btn-danger\" 
                data-name=\"";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["com"], "tag", [], "any", false, false, false, 52), "html", null, true);
                echo "\"
                title=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("COMMENT_DELETE"), "html", null, true);
                echo "\">
                ";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("DELETE"), "html", null, true);
                echo "
              </a>
            ";
            }
            // line 57
            echo "          </td>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['com'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "    </tbody>
    <tfooter>
      <tr>
        ";
        // line 62
        echo twig_call_macro($macros["multidelete"], "macro_insertSelectAll", ["comments-table-action", "bottom"], 62, $context, $this->getSourceContext());
        echo "
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
    </tfooter>
  </table>
  ";
        // line 72
        echo twig_call_macro($macros["multidelete"], "macro_insertButton", ["comments-table-action", "comments"], 72, $context, $this->getSourceContext());
        echo "
</div>

<div class=\"modal fade\" 
  id=\"commentsTableDeleteModal\" 
  tabindex=\"-1\" 
  role=\"dialog\" 
  aria-labelledby=\"commentsTableDeleteModalLabel\" 
  aria-hidden=\"true\">
  <div class=\"modal-dialog modal-lg\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
        <h3 id=\"commentsTableDeleteModalLabel\">";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("COMMENT_DELETE"), "html", null, true);
        echo " : <span id=\"commentToDelete\"></span></h3>
      </div>
      <div class=\"modal-body\">
        <div class=\"alert alert-warning\">
          ";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("COMMENT_CONFIRM_DELETE"), "html", null, true);
        echo "
        </div>
        <button class=\"btn btn-sm btn-warning start-btn-delete-comment\">";
        // line 91
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
        // line 104
        echo "  </div>";
        // line 105
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "@core/comment-table.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 105,  249 => 104,  234 => 91,  229 => 89,  222 => 85,  206 => 72,  193 => 62,  188 => 59,  181 => 57,  175 => 54,  171 => 53,  167 => 52,  160 => 47,  158 => 46,  154 => 44,  148 => 41,  142 => 40,  137 => 38,  132 => 37,  123 => 34,  119 => 33,  115 => 32,  111 => 31,  107 => 30,  104 => 29,  102 => 28,  101 => 27,  100 => 25,  97 => 24,  93 => 23,  86 => 19,  82 => 18,  78 => 17,  74 => 16,  70 => 15,  65 => 14,  61 => 12,  57 => 11,  52 => 8,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@core/comment-table.twig", "C:\\xampp\\htdocs\\doryphore\\templates\\comment-table.twig");
    }
}
