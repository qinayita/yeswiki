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

/* @attach/attach-filemanager-handler.twig */
class __TwigTemplate_a8355d4ca247a33d59ee66a4abb8aa7b extends Template
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
        // line 2
        echo $this->env->getFunction('format')->getCallable()((("====" . twig_replace_filter($this->env->getFunction('_t')->getCallable()("ATTACH_FILE_MANAGEMENT_TITLE"), ["{tag}" => ($context["tag"] ?? null)])) . "====
---"));
        echo "
";
        // line 4
        echo twig_include($this->env, $context, "@attach/attach-filemanager.twig");
        echo "
";
        // line 6
        echo $this->env->getFunction('format')->getCallable()((((("
-----
[[" . ($context["tag"] ?? null)) . " ") . $this->env->getFunction('_t')->getCallable()("ATTACH_BACK_TO_PAGE")) . ((" " . ($context["tag"] ?? null)) . "]]
")));
    }

    public function getTemplateName()
    {
        return "@attach/attach-filemanager-handler.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 6,  42 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@attach/attach-filemanager-handler.twig", "C:\\xampp\\htdocs\\doryphore\\tools\\attach\\templates\\attach-filemanager-handler.twig");
    }
}
