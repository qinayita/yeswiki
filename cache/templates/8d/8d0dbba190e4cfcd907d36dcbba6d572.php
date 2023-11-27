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

/* @attach/attach-filemanager.twig */
class __TwigTemplate_e0ac5179fa4ef58d145268797262c70d extends Template
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
        echo twig_escape_filter($this->env, $this->env->getFunction('include_javascript')->getCallable()("javascripts/vendor/datatables-full/jquery.dataTables.min.js"), "html", null, true);
        echo "
";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getFunction('include_css')->getCallable()("styles/vendor/datatables-full/dataTables.bootstrap.min.css"), "html", null, true);
        echo "
<ul id=\"fmtab";
        // line 3
        echo twig_escape_filter($this->env, ($context["tag"] ?? null), "html", null, true);
        echo "\" class=\"nav nav-tabs\">
  <li ";
        // line 4
        if ( !($context["trash"] ?? null)) {
            echo " class=\"active\"";
        }
        echo ">
    <a 
      href=\"";
        // line 6
        echo twig_escape_filter($this->env, (($this->env->getFunction('url')->getCallable()(["tag" => ($context["tag"] ?? null), "handler" => ($context["method"] ?? null)]) . "#fmtab") . ($context["tag"] ?? null)), "html", null, true);
        echo "\" 
      title=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("ATTACH_FILE_MANAGEMENT"), "html", null, true);
        echo "\">
      <i class=\"fa fa-file icon-file\"></i>&nbsp;";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("ATTACH_FILE_MANAGEMENT"), "html", null, true);
        echo "
    </a>
  </li>
\t<li ";
        // line 11
        if (($context["trash"] ?? null)) {
            echo " class=\"active\"";
        }
        echo ">
    <a 
      href=\"";
        // line 13
        echo twig_escape_filter($this->env, (($this->env->getFunction('url')->getCallable()(["tag" => ($context["tag"] ?? null), "handler" => ($context["method"] ?? null), "params" => ["do" => "trash"]]) . "#fmtab") . ($context["tag"] ?? null)), "html", null, true);
        echo "\"
      title=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("ATTACH_TRASH"), "html", null, true);
        echo "\">
      <i class=\"fa fa-trash icon-trash\"></i>&nbsp;";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("ATTACH_TRASH"), "html", null, true);
        echo "</a>
    </li>
</ul>
";
        // line 18
        if (twig_test_empty(($context["files"] ?? null))) {
            // line 19
            echo "  <div class=\"alert alert-info\">
    ";
            // line 20
            echo twig_replace_filter($this->env->getFunction('_t')->getCallable()("ATTACH_NO_ATTACHED_FILES"), ["{tag}" => $this->env->getFunction('format')->getCallable()(($context["tag"] ?? null))]);
            echo "
  </div>
";
        } else {
            // line 23
            echo "  <table class=\"fmtable table table-condensed table-hover table-striped\">
    <thead>
      <tr>
        <td class=\"fmfilename\">";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("ATTACH_FILENAME"), "html", null, true);
            echo "</td>
        <td class=\"fmfilesize\">";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("ATTACH_SIZE"), "html", null, true);
            echo "</td>
        <td class=\"fmfiledate\">";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("ATTACH_DATE_OF_MODIFICATION"), "html", null, true);
            echo "</td>
        ";
            // line 29
            if (($context["trash"] ?? null)) {
                echo "<td class=\"fmfiletrashdate\">";
                echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("ATTACH_DELETION"), "html", null, true);
                echo "</td>";
            }
            // line 30
            echo "        <td class=\"fmfileactions\">&nbsp;</td>
      </tr>
    </thead>
    <tbody>
      ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["files"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 35
                echo "        <tr class=\"";
                echo ((((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 35) % 2) == 1)) ? ("tableFMCol1") : ("tableFMCol2"));
                echo "\"> ";
                // line 36
                echo "          <td class=\"fmfilename\">
            <a 
              class=\"filenamelink\" 
              href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getFunction('url')->getCallable()(["tag" => ($context["tag"] ?? null), "handler" => "download", "params" => ["file" => twig_get_attribute($this->env, $this->source, $context["file"], "realname", [], "any", false, false, false, 39)]]), "html", null, true);
                echo "\"
              title=\"";
                // line 40
                echo twig_escape_filter($this->env, (twig_replace_filter($this->env->getFunction('_t')->getCallable()("ATTACH_REAL_FILENAME"), ["{file}" => twig_get_attribute($this->env, $this->source, $context["file"], "realname", [], "any", false, false, false, 40)]) . ((                // line 42
($context["trash"] ?? null)) ? (twig_replace_filter($this->env->getFunction('_t')->getCallable()("ATTACH_DELETED_ON"), ["{date}" => twig_get_attribute($this->env, $this->source,                 // line 43
$context["file"], "parsedTrashDate", [], "any", false, false, false, 43)])) : (""))), "html", null, true);
                // line 46
                echo "\"
            >
              ";
                // line 48
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "name", [], "any", false, false, false, 48)) < 26)) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "name", [], "any", false, false, false, 48), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "name", [], "any", false, false, false, 48), 0, 25), "html", null, true);
                    echo "&hellip;";
                }
                echo ".";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "ext", [], "any", false, false, false, 48), "html", null, true);
                echo "
            </a>
          </td>
          <td class=\"fmfilesize\">";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "readableSize", [], "any", false, false, false, 51), "html", null, true);
                echo "</td>
          <td class=\"fmfiledate\">";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "parsedDateUpload", [], "any", false, false, false, 52), "html", null, true);
                echo "</td>
          ";
                // line 53
                if (($context["trash"] ?? null)) {
                    echo "<td class=\"fmfiletrashdate\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "parsedTrashDate", [], "any", false, false, false, 53), "html", null, true);
                    echo "</td>";
                }
                // line 54
                echo "          <td class=\"fmfileactions\">
            ";
                // line 55
                if (($context["trash"] ?? null)) {
                    // line 56
                    echo "              ";
                    // line 57
                    echo "              <a 
                class=\"btn btn-sm btn-primary\"
                href=\"";
                    // line 59
                    echo twig_escape_filter($this->env, $this->env->getFunction('url')->getCallable()(["tag" => ($context["tag"] ?? null), "handler" => ($context["method"] ?? null), "params" => ["do" => "restore", "file" => twig_get_attribute($this->env, $this->source, $context["file"], "realname", [], "any", false, false, false, 59)]]), "html", null, true);
                    echo "\"
                title=\"";
                    // line 60
                    echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("ATTACH_RESTORE"), "html", null, true);
                    echo "\"
              >
                <i class=\"fas fa-redo\"></i>&nbsp;";
                    // line 62
                    echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("ATTACH_RESTORE"), "html", null, true);
                    echo "
              </a>
            ";
                }
                // line 65
                echo "            ";
                // line 66
                echo "            <a
              class=\"btn btn-sm btn-danger btn-icon\"
              href=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getFunction('url')->getCallable()(["tag" => ($context["tag"] ?? null), "handler" => ($context["method"] ?? null), "params" => ["do" => ((($context["trash"] ?? null)) ? ("erase") : ("del")), "file" => twig_get_attribute($this->env, $this->source, $context["file"], "realname", [], "any", false, false, false, 68)]]), "html", null, true);
                echo "\"
              title=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("DELETE"), "html", null, true);
                echo "\">
              <i class=\"";
                // line 70
                echo ((($context["trash"] ?? null)) ? ("fa fa-remove icon-remove") : ("fa fa-trash icon-trash"));
                echo " icon-white\"></i>
            </a>
          </td>
        </tr>
      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "    </tbody>
  </table>
  ";
            // line 77
            if (($context["trash"] ?? null)) {
                // line 78
                echo "    <div class=\"alert alert-danger\">
      <a
        href=\"";
                // line 80
                echo twig_escape_filter($this->env, $this->env->getFunction('url')->getCallable()(["tag" => ($context["tag"] ?? null), "handler" => ($context["method"] ?? null), "params" => ["do" => "emptytrash"]]), "html", null, true);
                echo "\"
        class=\"btn btn-danger pull-right\">
        <i class=\"fa fa-remove icon-remove icon-white\"></i>&nbsp;";
                // line 82
                echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("ATTACH_EMPTY_TRASH"), "html", null, true);
                echo "
      </a>
      <strong>";
                // line 84
                echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("CAUTION"), "html", null, true);
                echo " :</strong> ";
                echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("ATTACH_EMPTY_TRASH_NOTICE"), "html", null, true);
                echo "
      <div class=\"clearfix\"></div>
    </div>
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "@attach/attach-filemanager.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 84,  270 => 82,  265 => 80,  261 => 78,  259 => 77,  255 => 75,  236 => 70,  232 => 69,  228 => 68,  224 => 66,  222 => 65,  216 => 62,  211 => 60,  207 => 59,  203 => 57,  201 => 56,  199 => 55,  196 => 54,  190 => 53,  186 => 52,  182 => 51,  169 => 48,  165 => 46,  163 => 43,  162 => 42,  161 => 40,  157 => 39,  152 => 36,  148 => 35,  131 => 34,  125 => 30,  119 => 29,  115 => 28,  111 => 27,  107 => 26,  102 => 23,  96 => 20,  93 => 19,  91 => 18,  85 => 15,  81 => 14,  77 => 13,  70 => 11,  64 => 8,  60 => 7,  56 => 6,  49 => 4,  45 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@attach/attach-filemanager.twig", "C:\\xampp\\htdocs\\doryphore\\tools\\attach\\templates\\attach-filemanager.twig");
    }
}
