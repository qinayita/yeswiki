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

/* @login/usersettings.twig */
class __TwigTemplate_75d5ea36f690454796154f67e8b172ae extends Template
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
        echo "<h2>";
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("USER_SETTINGS"), "html", null, true);
        ((($context["adminIsActing"] ?? null)) ? (print (twig_escape_filter($this->env, (" — " . twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 1)), "html", null, true))) : (print ("")));
        echo "</h2>

";
        // line 3
        if ( !twig_test_empty(($context["errorUpdate"] ?? null))) {
            // line 4
            echo "  <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, ($context["errorUpdate"] ?? null), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "
<form
  action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getFunction('url')->getCallable()(twig_array_merge(["tag" => ""], ((        // line 9
($context["adminIsActing"] ?? null)) ? (["params" => ["user" => twig_get_attribute($this->env, $this->source,         // line 10
($context["user"] ?? null), "name", [], "any", false, false, false, 10), "from" => ($context["referrer"] ?? null)]]) : ([])))), "html", null, true);
        // line 12
        echo "\"
  method=\"post\"
  class=\"form-horizontal\">
  <input type=\"hidden\" name=\"usersettings_action\" value=\"update";
        // line 15
        echo ((($context["adminIsActing"] ?? null)) ? ("ByAdmin") : (""));
        echo "\" />
  <div class=\"control-group form-group\">
\t\t<label class=\"control-label col-sm-3\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("USER_EMAIL_ADDRESS"), "html", null, true);
        echo "</label>
\t\t<div class=\"controls col-sm-9\">
\t\t\t<input class=\"form-control\" name=\"email\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 19), "html", null, true);
        echo "\" size=\"40\" />
\t\t</div>
\t</div>
  ";
        // line 28
        echo "  <div class=\"control-group form-group\">
\t\t<div class=\"controls col-sm-9 col-sm-offset-3\">
      <input type=\"hidden\" name=\"csrf-token-update\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getFunction('csrfToken')->getCallable()(["id" => "main", "refresh" => false]), "html", null, true);
        echo "\">
\t\t\t<input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("USER_UPDATE"), "html_attr");
        echo "\" />
      ";
        // line 32
        if (($context["userLoggedIn"] ?? null)) {
            // line 33
            echo "        <input 
          class=\"btn btn-warning\" 
          type=\"button\" 
          value=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("USER_DISCONNECT"), "html_attr");
            echo "\" 
          onclick=\"document.location='";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getFunction('url')->getCallable()(["params" => ["action" => "logout"]]), "html_attr");
            echo "'\" />
      ";
        }
        // line 39
        echo "\t\t</div>
\t</div>
</form>

";
        // line 44
        if (($context["adminIsActing"] ?? null)) {
            // line 45
            echo "  <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getFunction('url')->getCallable()(["params" => ["user" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 45), "from" => ($context["referrer"] ?? null)]]), "html", null, true);
            echo "\" method=\"post\" class=\"form-horizontal\">
    <input type=\"hidden\" name=\"csrf-token-delete\" value=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getFunction('csrfToken')->getCallable()(["id" => "main", "refresh" => false]), "html_attr");
            echo "\">
    <input type=\"hidden\" name=\"usersettings_action\" value=\"deleteByAdmin\" />
    <input class=\"btn btn-danger\" type=\"submit\" value=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("USER_DELETE"), "html_attr");
            echo "\" />
  </form>
";
        }
        // line 51
        echo "
";
        // line 53
        if (($context["userLoggedIn"] ?? null)) {
            // line 54
            echo "  <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getFunction('url')->getCallable()(["tag" => ""]), "html", null, true);
            echo "\" method=\"post\" class=\"form-horizontal\">
\t  <hr>
\t  <input type=\"hidden\" name=\"usersettings_action\" value=\"changepass\" />
\t  <h2>";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("USER_CHANGE_THE_PASSWORD"), "html", null, true);
            echo "</h2>
    ";
            // line 58
            if ( !twig_test_empty(($context["errorPasswordChange"] ?? null))) {
                // line 59
                echo "      <div class=\"alert alert-danger\">";
                echo twig_escape_filter($this->env, ($context["errorPasswordChange"] ?? null), "html", null, true);
                echo "</div>
    ";
            }
            // line 61
            echo "    ";
            if (($context["inIframe"] ?? null)) {
                // line 62
                echo "      ";
                $context["urlWithoutIframe"] = twig_replace_filter($this->env->getFunction('url')->getCallable()(["handler" => "show"]), ["/show" => ""]);
                // line 63
                echo "      <div class=\"alert alert-warning\">";
                echo twig_replace_filter(twig_nl2br(twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("USERSETTINGS_CHANGE_PWD_IN_IFRAME"), "html", null, true)), ["{baseUrl}" =>                 // line 65
($context["urlWithoutIframe"] ?? null), "{link}" => (((("<a target=\"_blank\" href=\"" .                 // line 66
($context["urlWithoutIframe"] ?? null)) . "\">") . ($context["urlWithoutIframe"] ?? null)) . "</a>")]);
                // line 67
                echo "</div>
    ";
            }
            // line 69
            echo "    <div class=\"control-group form-group\">
      <label class=\"control-label col-sm-3\">";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("USER_OLD_PASSWORD"), "html", null, true);
            echo "</label>
      <div class=\"controls col-sm-9\">
        <input class=\"form-control\" type=\"password\" name=\"oldpass\" size=\"40\" />
      </div>
    </div>
    <div class=\"control-group form-group\">
      <label class=\"control-label col-sm-3\">";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("USER_NEW_PASSWORD"), "html", null, true);
            echo "</label>
      <div class=\"controls col-sm-9\">
        <input class=\"form-control\" type=\"password\" name=\"password\" size=\"40\" />
      </div>
    </div>
    <div class=\"control-group form-group\">
      <div class=\"controls col-sm-9 col-sm-offset-3\">
        <input type=\"hidden\" name=\"csrf-token-changepass\" value=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getFunction('csrfToken')->getCallable()(["id" => "main", "refresh" => false]), "html_attr");
            echo "\">
        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("USER_CHANGE"), "html_attr");
            echo "\" size=\"40\" />
      </div>
    </div>
  </form>
";
        }
    }

    public function getTemplateName()
    {
        return "@login/usersettings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 84,  194 => 83,  184 => 76,  175 => 70,  172 => 69,  168 => 67,  166 => 66,  165 => 65,  163 => 63,  160 => 62,  157 => 61,  151 => 59,  149 => 58,  145 => 57,  138 => 54,  136 => 53,  133 => 51,  127 => 48,  122 => 46,  117 => 45,  115 => 44,  109 => 39,  104 => 37,  100 => 36,  95 => 33,  93 => 32,  89 => 31,  85 => 30,  81 => 28,  75 => 19,  70 => 17,  65 => 15,  60 => 12,  58 => 10,  57 => 9,  56 => 8,  52 => 6,  46 => 4,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@login/usersettings.twig", "C:\\xampp\\htdocs\\doryphore\\tools\\login\\templates\\usersettings.twig");
    }
}
