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

/* @aceditor/aceditor-modals.twig */
class __TwigTemplate_302bb42d3d2eb45c4c94eea4ffe2378e extends Template
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
        echo "
";
        // line 4
        echo "
";
        // line 5
        echo twig_include($this->env, $context, "@aceditor/actions-builder-modal.twig");
        echo "
";
        // line 6
        echo twig_include($this->env, $context, "@aceditor/link-modal.twig");
        echo "
";
        // line 7
        echo twig_include($this->env, $context, "@attach/file-upload-modal.twig");
    }

    public function getTemplateName()
    {
        return "@aceditor/aceditor-modals.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  47 => 6,  43 => 5,  40 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@aceditor/aceditor-modals.twig", "C:\\xampp\\htdocs\\doryphore\\tools\\aceditor\\templates\\aceditor-modals.twig");
    }
}
