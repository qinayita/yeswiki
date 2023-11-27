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

/* @login/default.twig */
class __TwigTemplate_b1b3b09c0fb7c3b867ef70929a036ef1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'main' => [$this, 'block_main'],
            'connected' => [$this, 'block_connected'],
            'loginActions' => [$this, 'block_loginActions'],
            'loginActionsPart1' => [$this, 'block_loginActionsPart1'],
            'logoutLink' => [$this, 'block_logoutLink'],
            'logoutLinkClass' => [$this, 'block_logoutLinkClass'],
            'notConnected' => [$this, 'block_notConnected'],
            'form' => [$this, 'block_form'],
            'formClass' => [$this, 'block_formClass'],
            'formContent' => [$this, 'block_formContent'],
            'formTitle' => [$this, 'block_formTitle'],
            'wikiNameInputGroup' => [$this, 'block_wikiNameInputGroup'],
            'passwordInputGroup' => [$this, 'block_passwordInputGroup'],
            'lostPassword' => [$this, 'block_lostPassword'],
            'hidden' => [$this, 'block_hidden'],
            'signupurl' => [$this, 'block_signupurl'],
            'signupurlhead' => [$this, 'block_signupurlhead'],
            'signupurlbtnclass' => [$this, 'block_signupurlbtnclass'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if (twig_test_empty(($context["class"] ?? null))) {
            // line 2
            echo "\t";
            $this->displayBlock('main', $context, $blocks);
        } else {
            // line 71
            echo "\t<div class=\"";
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            echo "\">
\t\t";
            // line 72
            $this->displayBlock("main", $context, $blocks);
            echo "
\t</div>
";
        }
    }

    // line 2
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "\t\t";
        if (($context["connected"] ?? null)) {
            // line 4
            echo "\t\t\t";
            $this->displayBlock('connected', $context, $blocks);
            // line 20
            echo "\t\t";
        } else {
            // line 21
            echo "\t\t\t";
            $this->displayBlock('notConnected', $context, $blocks);
            // line 68
            echo "\t\t";
        }
        // line 69
        echo "\t";
    }

    // line 4
    public function block_connected($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "\t\t\t\t<h5><i class=\"fa fa-user\"></i>&nbsp;";
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("LOGIN_CONNECTED_AS"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["user"] ?? null), "html", null, true);
        echo "</h5>
\t\t\t\t<ul class=\"login-actions\">
\t\t\t\t\t";
        // line 7
        $this->displayBlock('loginActions', $context, $blocks);
        // line 18
        echo "\t\t\t\t</ul>
\t\t\t";
    }

    // line 7
    public function block_loginActions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "\t\t\t\t\t\t";
        $this->displayBlock('loginActionsPart1', $context, $blocks);
        // line 12
        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t";
        // line 13
        $this->displayBlock('logoutLink', $context, $blocks);
        // line 16
        echo "\t\t\t\t\t\t</li>
\t\t\t\t\t";
    }

    // line 8
    public function block_loginActionsPart1($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "\t\t\t\t\t\t\t";
        echo ($context["PageMenuUser"] ?? null);
        echo "
\t\t\t\t\t\t\t<li><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["profileurl"] ?? null), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("LOGIN_MODIFY_USER"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("LOGIN_MODIFY_USER"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t";
    }

    // line 13
    public function block_logoutLink($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "\t\t\t\t\t\t\t\t<a href=\"";
        echo twig_escape_filter($this->env, (($context["incomingurl"] ?? null) . ((twig_matches("/\\?/", ($context["incomingurl"] ?? null))) ? ("&") : ("?"))), "html", null, true);
        echo "action=logout\" class=\"";
        $this->displayBlock('logoutLinkClass', $context, $blocks);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("LOGIN_LOGOUT"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("LOGIN_LOGOUT"), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t";
    }

    public function block_logoutLinkClass($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "login-signout-link";
    }

    // line 21
    public function block_notConnected($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "\t\t\t\t";
        if ( !twig_test_empty(($context["error"] ?? null))) {
            // line 23
            echo "\t\t\t\t\t<div class=\"alert alert-danger\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>";
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "</div>
\t\t\t\t";
        }
        // line 25
        echo "\t\t\t\t";
        $this->displayBlock('form', $context, $blocks);
        // line 67
        echo "\t\t\t";
    }

    // line 25
    public function block_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "\t\t\t\t\t<form class=\"";
        $this->displayBlock('formClass', $context, $blocks);
        echo "\" action=\"";
        echo twig_escape_filter($this->env, ($context["incomingurl"] ?? null), "html", null, true);
        echo "\" method=\"post\">
\t\t\t\t\t\t";
        // line 27
        $this->displayBlock('formContent', $context, $blocks);
        // line 65
        echo "\t\t\t\t\t</form>
\t\t\t\t";
    }

    // line 26
    public function block_formClass($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "login-form";
    }

    // line 27
    public function block_formContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "\t\t\t\t\t\t\t";
        $this->displayBlock('formTitle', $context, $blocks);
        // line 29
        echo "\t\t\t\t\t\t\t";
        $this->displayBlock('wikiNameInputGroup', $context, $blocks);
        // line 35
        echo "\t\t\t\t\t\t\t";
        $this->displayBlock('passwordInputGroup', $context, $blocks);
        // line 41
        echo "\t\t\t\t\t\t\t";
        $this->displayBlock('lostPassword', $context, $blocks);
        // line 46
        echo "\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"remember-default\" name=\"remember\" value=\"1\"> 
\t\t\t\t\t\t\t\t\t<span>";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("LOGIN_REMEMBER_ME"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-block ";
        // line 52
        echo twig_escape_filter($this->env, ($context["btnclass"] ?? null), "html", null, true);
        echo " btn-primary\">";
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("LOGIN_LOGIN"), "html", null, true);
        echo "</button>
\t\t\t\t\t\t\t";
        // line 53
        $this->displayBlock('hidden', $context, $blocks);
        // line 58
        echo "\t\t\t\t\t\t\t";
        $this->displayBlock('signupurl', $context, $blocks);
        // line 64
        echo "\t\t\t\t\t\t";
    }

    // line 28
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "<h2>";
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("LOGIN_LOGIN"), "html", null, true);
        echo "</h2>";
    }

    // line 29
    public function block_wikiNameInputGroup($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"inputWikiName\" class=\"control-label\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("LOGIN_WIKINAME"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t\t\t\t<input id=\"inputWikiName\" class=\"form-control\" type=\"text\" name=\"name\" value=\"";
        // line 32
        echo ((($context["user"] ?? null)) ? (twig_escape_filter($this->env, ($context["user"] ?? null), "html_attr")) : (""));
        echo "\" required/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
    }

    // line 35
    public function block_passwordInputGroup($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"inputPassword\" class=\"control-label\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("LOGIN_PASSWORD"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t\t\t\t<input id=\"inputPassword\" class=\"form-control\" name=\"password\" type=\"password\" required/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
    }

    // line 41
    public function block_lostPassword($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "\t\t\t\t\t\t\t\t";
        if ( !twig_test_empty(($context["lostpasswordurl"] ?? null))) {
            // line 43
            echo "\t\t\t\t\t\t\t\t\t<small><a href=\"";
            echo twig_escape_filter($this->env, ($context["lostpasswordurl"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("LOGIN_LOST_PASSWORD"), "html", null, true);
            echo "</a></small>
\t\t\t\t\t\t\t\t";
        }
        // line 45
        echo "\t\t\t\t\t\t\t";
    }

    // line 53
    public function block_hidden($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"login\" />
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"incomingurl\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, (((($context["userpage"] ?? null) == "user")) ? (($context["incomingurl"] ?? null)) : (($context["userpage"] ?? null))), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"userpage\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, ($context["userpage"] ?? null), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t";
    }

    // line 58
    public function block_signupurl($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "\t\t\t\t\t\t\t\t";
        if (( !twig_test_empty(($context["signupurl"] ?? null)) && (($context["signupurl"] ?? null) != "0"))) {
            // line 60
            echo "\t\t\t\t\t\t\t\t\t";
            $this->displayBlock('signupurlhead', $context, $blocks);
            // line 61
            echo "\t\t\t\t\t\t\t\t\t<a class=\"";
            $this->displayBlock('signupurlbtnclass', $context, $blocks);
            echo " ";
            echo twig_escape_filter($this->env, ($context["btnclass"] ?? null), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, ($context["signupurl"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getFunction('_t')->getCallable()("LOGIN_SIGNUP"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t";
        }
        // line 63
        echo "\t\t\t\t\t\t\t";
    }

    // line 60
    public function block_signupurlhead($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "<hr>";
    }

    // line 61
    public function block_signupurlbtnclass($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "btn btn-block btn-default";
    }

    public function getTemplateName()
    {
        return "@login/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  373 => 61,  366 => 60,  362 => 63,  350 => 61,  347 => 60,  344 => 59,  340 => 58,  334 => 56,  330 => 55,  327 => 54,  323 => 53,  319 => 45,  311 => 43,  308 => 42,  304 => 41,  296 => 37,  293 => 36,  289 => 35,  282 => 32,  278 => 31,  275 => 30,  271 => 29,  262 => 28,  258 => 64,  255 => 58,  253 => 53,  247 => 52,  241 => 49,  236 => 46,  233 => 41,  230 => 35,  227 => 29,  224 => 28,  220 => 27,  213 => 26,  208 => 65,  206 => 27,  199 => 26,  195 => 25,  191 => 67,  188 => 25,  182 => 23,  179 => 22,  175 => 21,  156 => 14,  152 => 13,  142 => 10,  137 => 9,  133 => 8,  128 => 16,  126 => 13,  123 => 12,  120 => 8,  116 => 7,  111 => 18,  109 => 7,  101 => 5,  97 => 4,  93 => 69,  90 => 68,  87 => 21,  84 => 20,  81 => 4,  78 => 3,  74 => 2,  66 => 72,  61 => 71,  57 => 2,  55 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@login/default.twig", "C:\\xampp\\htdocs\\doryphore\\tools\\login\\templates\\default.twig");
    }
}
