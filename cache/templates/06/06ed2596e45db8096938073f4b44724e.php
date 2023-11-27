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

/* @login/lost-password-email-form.twig */
class __TwigTemplate_82757d7362abd3507bba922caf4f3b8c extends Template
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
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("LOGIN_CHANGE_PASSWORD"), "html", null, true);
        echo "</h2>

<form class=\"form-horizontal\" method=\"post\">
  ";
        // line 4
        if ((($context["errorType"] ?? null) == "emptyEmail")) {
            // line 5
            echo "    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("LOGIN_ADD_EMAIL_TO_CONTINUE"), "html", null, true);
            echo ".</div>
  ";
        } elseif (        // line 6
($context["errorType"] ?? null)) {
            // line 7
            echo "    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, ($context["errorType"] ?? null), "html", null, true);
            echo "</div>
  ";
        }
        // line 9
        echo "  <div class=\"control-group form-group\">
    <label class=\"control-label col-sm-3\" for=\"email\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("LOGIN_EMAIL"), "html", null, true);
        echo "</label>
    <div class=\"controls col-sm-9\">
      <input type=\"email\" class=\"form-control\" name=\"email\" required value=\"\" placeholder=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("LOGIN_EMAIL"), "html", null, true);
        echo "\">
    </div>
  </div>
  <div class=\"control-group form-group\">
    <input type=\"hidden\" name=\"subStep\" value=\"1\" />
    <div class=\"controls col-sm-9 col-sm-offset-3\">
      <button type=\"submit\" class=\"btn btn-primary\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("LOGIN_SEND"), "html", null, true);
        echo "</button>
    </div>
  </div>
</form>";
    }

    public function getTemplateName()
    {
        return "@login/lost-password-email-form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 18,  67 => 12,  62 => 10,  59 => 9,  53 => 7,  51 => 6,  46 => 5,  44 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@login/lost-password-email-form.twig", "C:\\xampp\\htdocs\\doryphore\\tools\\login\\templates\\lost-password-email-form.twig");
    }
}
