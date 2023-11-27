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

/* @aceditor/link-modal.twig */
class __TwigTemplate_ce872f1799b5314b93161f7bc9b69496 extends Template
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
        echo "<div class=\"modal fade\" id=\"YesWikiLinkModal\">
\t<div class=\"modal-dialog modal-sm\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h3 data-show=\"newlink\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("ACEDITOR_LINK"), "html", null, true);
        echo "</h3>
\t\t\t\t<h3 data-show=\"edit\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("ACEDITOR_LINK_EDIT"), "html", null, true);
        echo "</h3>
\t\t\t\t<h3 data-show=\"newpage\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("ACEDITOR_NEWPAGE"), "html", null, true);
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<form>
\t\t\t\t\t";
        // line 13
        echo "\t\t\t\t\t<div class=\"control-group form-group internal-link\">
\t\t\t\t\t\t<label class=\"control-label\" data-show=\"newlink,edit\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("ACEDITOR_LINK_PAGE_OR_URL"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t<label class=\"control-label\" data-show=\"newpage\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("ACEDITOR_LINK_NEW_PAGE_NAME"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"url\" autocomplete=\"off\">
\t\t\t\t\t\t\t<span class=\"link-error help-block text-danger hidden\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("ACEDITOR_LINK_ERROR"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t<span class=\"help-block\" data-show=\"newlink,edit\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("ACEDITOR_LINK_HINT_NEW_PAGE_NAME"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 22
        echo "\t\t\t\t\t\t<div class=\"text-danger help-block\" id=\"page-already-exist-alert\" style=\"display: none;\">
\t\t\t\t\t\t\t";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("ACEDITOR_LINK_PAGE_ALREADY_EXISTS"), "html", null, true);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 27
        echo "\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t<label class=\"control-label\" data-show=\"newlink,edit\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("ACEDITOR_LINK_TEXT"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t<label class=\"control-label\" data-show=\"newpage\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("ACEDITOR_LINK_NEW_PAGE_TEXT"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"text\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"more-options\" data-show=\"newlink,edit\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t";
        // line 38
        echo "\t\t\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("ACEDITOR_LINK_TITLE"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"title\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t\t\t";
        // line 48
        echo "\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"target\" data-show=\"newlink,edit\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\" selected>";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("ACEDITOR_LINK_OPEN_IN_CURRENT_TAB"), "html", null, true);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"newtab\">";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("ACEDITOR_LINK_OPEN_IN_NEW_TAB"), "html", null, true);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"modalbox\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("ACEDITOR_LINK_OPEN_IN_MODAL"), "html", null, true);
        echo "</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<a href=\"#\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("ACEDITOR_LINK_CANCEL"), "html", null, true);
        echo "</a>
\t\t\t\t<a href=\"#\" class=\"btn btn-primary btn-insert\" data-dismiss=\"modal\">";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("ACEDITOR_LINK_INSERT"), "html", null, true);
        echo "</a>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@aceditor/link-modal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 61,  145 => 60,  133 => 51,  129 => 50,  125 => 49,  122 => 48,  111 => 39,  108 => 38,  97 => 29,  93 => 28,  90 => 27,  84 => 23,  81 => 22,  76 => 19,  72 => 18,  66 => 15,  62 => 14,  59 => 13,  52 => 8,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@aceditor/link-modal.twig", "C:\\xampp\\htdocs\\doryphore\\tools\\aceditor\\templates\\link-modal.twig");
    }
}
