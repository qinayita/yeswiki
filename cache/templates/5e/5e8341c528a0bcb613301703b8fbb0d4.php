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

/* @login/modal.twig */
class __TwigTemplate_2f25f47adc0c9a1824bf522439e3f33f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'logoutLinkClass' => [$this, 'block_logoutLinkClass'],
            'connected' => [$this, 'block_connected'],
            'formClass' => [$this, 'block_formClass'],
            'formTitle' => [$this, 'block_formTitle'],
            'notConnected' => [$this, 'block_notConnected'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@login/default.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@login/default.twig", "@login/modal.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_logoutLinkClass($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "btn btn-default";
    }

    // line 5
    public function block_connected($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <a href=\"#LoginModal\" role=\"button\" class=\"";
        (( !($context["nobtn"] ?? null)) ? (print (twig_escape_filter($this->env, ("btn btn-default " . ($context["btnclass"] ?? null)), "html", null, true))) : (print ("")));
        echo "\" data-toggle=\"modal\">
        <i class=\"fa fa-user\"></i> ";
        // line 7
        echo twig_escape_filter($this->env, ($context["user"] ?? null), "html", null, true);
        echo "
    </a>
    <div class=\"modal fade\" id=\"LoginModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"LoginModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h3 id=\"LoginModalLabel\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("LOGIN_CONNECTED_AS"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["user"] ?? null), "html", null, true);
        echo "</h3>
                </div>
                <div class=\"modal-body\">
                    <ul class=\"login-actions\">
                        ";
        // line 18
        $this->displayBlock("loginActionsPart1", $context, $blocks);
        echo "
                    </ul>
                </div>
                <div class=\"modal-footer\">
                    ";
        // line 22
        $this->displayBlock("logoutLink", $context, $blocks);
        echo "
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div> <!-- /#LoginModal-->
";
    }

    // line 29
    public function block_formClass($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "login-form-modal";
    }

    // line 30
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 32
    public function block_notConnected($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "    <a href=\"#LoginModal\" role=\"button\" class=\"";
        (( !($context["nobtn"] ?? null)) ? (print (twig_escape_filter($this->env, ("btn btn-default " . ($context["btnclass"] ?? null)), "html", null, true))) : (print ("")));
        echo "\" data-toggle=\"modal\">
        <i class=\"fa fa-user\"></i> ";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("LOGIN_LOGIN"), "html", null, true);
        echo "
    </a>
    <div class=\"modal fade\" id=\"LoginModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"LoginModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-sm\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h3 id=\"LoginModalLabel\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("LOGIN_LOGIN"), "html", null, true);
        echo "</h3>
                </div>
                <div class=\"modal-body\">
                    ";
        // line 44
        $this->displayBlock("form", $context, $blocks);
        echo "
                </div>
            </div>
        </div><!-- /.modal-dialog -->
    </div> <!-- /#LoginModal-->
";
    }

    public function getTemplateName()
    {
        return "@login/modal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 44,  134 => 41,  124 => 34,  119 => 33,  115 => 32,  109 => 30,  102 => 29,  92 => 22,  85 => 18,  76 => 14,  66 => 7,  61 => 6,  57 => 5,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@login/modal.twig", "C:\\xampp\\htdocs\\doryphore\\tools\\login\\templates\\modal.twig");
    }
}
