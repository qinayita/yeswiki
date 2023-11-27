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

/* @core/comment-for-page.twig */
class __TwigTemplate_cb7f7ce6fae7244e0ac54995c7a31342 extends Template
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
        if (($context["commentsClosed"] ?? null)) {
            // line 2
            echo "  ";
            if (($context["coms"] ?? null)) {
                // line 3
                echo "    ";
                echo ($context["coms"] ?? null);
                echo "
    <div class=\"alert alert-info comments-closed-info\">";
                // line 4
                echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("COMMENTS_CURRENTLY_CLOSED"), "html", null, true);
                echo ".</div>
  ";
            }
        } else {
            // line 7
            echo "  ";
            echo ($context["coms"] ?? null);
            echo "
  ";
            // line 8
            if (($context["form"] ?? null)) {
                // line 9
                echo "    ";
                echo ($context["form"] ?? null);
                echo "
  ";
            } elseif ( !            // line 10
($context["user"] ?? null)) {
                // line 11
                echo "    <div class=\"comments-connect-info\">
      <a href=\"#LoginModal\" role=\"button\" data-toggle=\"modal\"><i class=\"fa fa-user\"></i>";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("COMMENT_LOGIN"), "html", null, true);
                echo ".</a>
    </div>
  ";
            } else {
                // line 15
                echo "    <div class=\"alert alert-info comments-acls-info\">";
                echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("COMMENT_NOT_ENOUGH_RIGHTS"), "html", null, true);
                echo "</div>
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "@core/comment-for-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 15,  70 => 12,  67 => 11,  65 => 10,  60 => 9,  58 => 8,  53 => 7,  47 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@core/comment-for-page.twig", "C:\\xampp\\htdocs\\doryphore\\templates\\comment-for-page.twig");
    }
}
