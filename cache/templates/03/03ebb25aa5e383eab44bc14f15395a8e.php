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

/* @templates/barreredaction_basic.twig */
class __TwigTemplate_78cfac8c2ca2758d07b934d0cd4126f9 extends Template
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
        echo "<div class=\"";
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo "\">
  ";
        // line 2
        if (array_key_exists("linkedit", $context)) {
            // line 3
            echo "    <a title=\"";
            echo twig_escape_filter($this->env, (($this->env->getFunction('_t')->getCallable()("TEMPLATE_EDIT_THIS_PAGE") . " ") . ($context["page"] ?? null)), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, ($context["linkedit"] ?? null), "html", null, true);
            echo "\" class=\"link-edit\">
      <i class=\"fa fa-pencil-alt\"></i><span>";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("TEMPLATE_EDIT_THIS_PAGE"), "html", null, true);
            echo "</span>
    </a>
  ";
        }
        // line 7
        echo "  ";
        if (($context["userIsAdminOrOwner"] ?? null)) {
            // line 8
            echo "    <a title=\"";
            echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("TEMPLATES_SEE_ATTACHED_FILES"), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getFunction('url')->getCallable()(["handler" => "filemanager"]), "html", null, true);
            echo "\" class=\"link-filemanager\">
      <i class=\"fa fa-folder-open\"></i>
    </a>
  ";
        }
        // line 12
        echo "  ";
        if (array_key_exists("linkdeletepage", $context)) {
            // line 13
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, ($context["linkdeletepage"] ?? null), "html", null, true);
            echo "\" class=\"link-deletepage modalbox\" title=\"";
            echo twig_escape_filter($this->env, (($this->env->getFunction('_t')->getCallable()("TEMPLATE_DELETE_PAGE") . " ") . ($context["page"] ?? null)), "html", null, true);
            echo "\">
      <i class=\"fa fa-trash\"></i><span>";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("TEMPLATE_DELETE"), "html", null, true);
            echo "</span>
    </a>
  ";
        }
        // line 17
        echo "  ";
        if (array_key_exists("time", $context)) {
            // line 18
            echo "    <a title=\"";
            echo twig_escape_filter($this->env, (($this->env->getFunction('_t')->getCallable()("TEMPLATE_CLICK_TO_SEE_REVISIONS") . " ") . ($context["page"] ?? null)), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, ($context["linkrevisions"] ?? null), "html", null, true);
            echo "\" class=\"link-revisions\">
      <i class=\"fa fa-history\"></i><span>";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("TEMPLATE_LAST_UPDATE"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["time"] ?? null), "html", null, true);
            echo "</span>
    </a>
  ";
        }
        // line 22
        echo "  ";
        if (array_key_exists("linkacls", $context)) {
            // line 23
            echo "    <a class=\"link-acls";
            echo (((twig_slice($this->env, ($context["linkacls"] ?? null),  -4) == "acls")) ? (" modalbox") : (""));
            echo "\" href=\"";
            echo twig_escape_filter($this->env, ($context["linkacls"] ?? null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, (($this->env->getFunction('_t')->getCallable()("TEMPLATE_CLICK_TO_CHANGE_PERMISSIONS") . " ") . ($context["page"] ?? null)), "html", null, true);
            echo "\">
      <i class=\"fa fa-unlock-alt\"></i><span>";
            // line 24
            (((array_key_exists("owner", $context) &&  !(null === ($context["owner"] ?? null)))) ? (print (twig_escape_filter($this->env, ($context["owner"] ?? null), "html", null, true))) : (print ("")));
            echo "</span>
    </a>
  ";
        }
        // line 27
        echo "  ";
        if (array_key_exists("linkclosecomments", $context)) {
            // line 28
            echo "    <a class=\"link-comments\" href=\"";
            echo twig_escape_filter($this->env, ($context["linkclosecomments"] ?? null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("TEMPLATE_CLICK_TO_CLOSE_COMMENTS"), "html", null, true);
            echo "\">
      <i class=\"fas fa-comment-slash\"></i><span> ";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("TEMPLATE_CLOSE_COMMENTS"), "html", null, true);
            echo "</span>
    </a>
  ";
        }
        // line 32
        echo "  ";
        if (array_key_exists("linkopencomments", $context)) {
            // line 33
            echo "    <span class=\"dropup\">
      <a href=\"#\" class=\"link-comments dropdown-toggle\" type=\"button\" id=\"opencommentsdropup\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        <i class=\"fas fa-comment\"></i> <span>";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("TEMPLATE_OPEN_COMMENTS"), "html", null, true);
            echo "</span>
        <span class=\"caret\"></span>
      </a>
      <ul class=\"dropdown-menu\" aria-labelledby=\"opencommentsdropup\">
        <li><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, ((($context["linkopencomments"] ?? null) . "&list=") . twig_escape_filter($this->env, "+", "url")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("TEMPLATE_FOR_CONNECTED_PEOPLE"), "html", null, true);
            echo "</a></li>
        ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["wikigroups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
                // line 41
                echo "          <li><a href=\"";
                echo twig_escape_filter($this->env, ((($context["linkopencomments"] ?? null) . "&list=") . $context["g"]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("TEMPLATE_FOR_MEMBERS_OF_GROUP"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $context["g"], "html", null, true);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "      </ul> ";
        }
        // line 44
        echo "\t<a title=\"";
        echo twig_escape_filter($this->env, (($this->env->getFunction('_t')->getCallable()("TEMPLATE_SEE_SHARING_OPTIONS") . " ") . ($context["page"] ?? null)), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, ($context["linkshare"] ?? null), "html", null, true);
        echo "\" class=\"link-share modalbox\">
\t\t<i class=\"fa fa-share-alt\"></i><span>";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("TEMPLATE_SHARE"), "html", null, true);
        echo "</span>
\t</a>
  ";
        // line 47
        if ( !twig_test_empty(($context["currentuser"] ?? null))) {
            // line 48
            echo "      ";
            echo twig_escape_filter($this->env, $this->env->getFunction('include_javascript')->getCallable()("javascripts/favorites.js"), "html", null, true);
            echo "
      <a href=\"#\"
         title=\"";
            // line 50
            echo twig_escape_filter($this->env, ((($context["isUserFavorite"] ?? null)) ? ($this->env->getFunction('_t')->getCallable()("FAVORITES_REMOVE")) : ($this->env->getFunction('_t')->getCallable()("FAVORITES_ADD"))), "html", null, true);
            echo "\"
         data-resource=\"";
            // line 51
            echo twig_escape_filter($this->env, ($context["page"] ?? null), "html", null, true);
            echo "\"
         data-user=\"";
            // line 52
            echo twig_escape_filter($this->env, ($context["currentuser"] ?? null), "html", null, true);
            echo "\"
         data-toggle=\"tooltip\"
         data-placement=\"top\"
         class=\"btn btn-icon favorites";
            // line 55
            echo ((($context["isUserFavorite"] ?? null)) ? (" user-favorite") : (""));
            echo "\">
      <i class=\"";
            // line 56
            echo ((($context["isUserFavorite"] ?? null)) ? ("fas") : ("far"));
            echo " fa-star\"></i>
      <span class=\"sr-only sr-only-focusable\">";
            // line 57
            echo twig_escape_filter($this->env, ((($context["isUserFavorite"] ?? null)) ? ($this->env->getFunction('_t')->getCallable()("FAVORITES_REMOVE")) : ($this->env->getFunction('_t')->getCallable()("FAVORITES_ADD"))), "html", null, true);
            echo "</span>
    </a>
  ";
        }
        // line 60
        echo "
        ";
        // line 61
        if ( !twig_test_empty(($context["currentuser"] ?? null))) {
            // line 62
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getFunction('include_javascript')->getCallable()("javascripts/pin.js"), "html", null, true);
            echo "
            <a href=\"#\"
               title=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("PIN_ADD"), "html", null, true);
            echo "\"
               data-resource=\"";
            // line 65
            echo twig_escape_filter($this->env, ($context["page"] ?? null), "html", null, true);
            echo "\"
               data-user=\"";
            // line 66
            echo twig_escape_filter($this->env, ($context["currentuser"] ?? null), "html", null, true);
            echo "\"
               class=\"btn btn-icon pinned\"
               onclick=\"PinHelper.managePins(event);\">
            <i class=\"far fa-thumbtack\"></i>
        </a>
        ";
        }
        // line 72
        echo "</div>
    </span>

";
    }

    public function getTemplateName()
    {
        return "@templates/barreredaction_basic.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 72,  245 => 66,  241 => 65,  237 => 64,  231 => 62,  229 => 61,  226 => 60,  220 => 57,  216 => 56,  212 => 55,  206 => 52,  202 => 51,  198 => 50,  192 => 48,  190 => 47,  185 => 45,  178 => 44,  175 => 43,  162 => 41,  158 => 40,  152 => 39,  145 => 35,  141 => 33,  138 => 32,  132 => 29,  125 => 28,  122 => 27,  116 => 24,  107 => 23,  104 => 22,  96 => 19,  89 => 18,  86 => 17,  80 => 14,  73 => 13,  70 => 12,  60 => 8,  57 => 7,  51 => 4,  44 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@templates/barreredaction_basic.twig", "C:\\xampp\\htdocs\\doryphore\\tools\\templates\\templates\\barreredaction_basic.twig");
    }
}
