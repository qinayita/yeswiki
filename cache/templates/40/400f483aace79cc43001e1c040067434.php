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

/* @bazar/entries/index-dynamic/_pagination.twig */
class __TwigTemplate_af8c40c4c5ca959e450aa5a337a43e24 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'pagination' => [$this, 'block_pagination'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('pagination', $context, $blocks);
    }

    public function block_pagination($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "  <ul class=\"pagination\" v-if=\"pagination && entriesToDisplay.length > 0 && pages.length > 1\">
    <li @click=\"currentPage = 0\" :class=\"{disabled: currentPage == 0}\">
      <i class=\"fa fa-chevron-left\"></i>
    </li>
    <template v-for=\"page in pages\">
      <li v-if=\"page == 'divider'\">...</li>
      <li v-else :class=\"{active: currentPage == page}\" @click=\"currentPage = page\">
        ";
        // line 9
        echo "{{ page + 1 }}";
        echo "
      </li>
    </template>          
    <li @click=\"currentPage = pages.length - 1\" :class=\"{disabled: currentPage == pages.length - 1}\">
      <i class=\"fa fa-chevron-right\"></i>
    </li>
  </ul>
";
    }

    public function getTemplateName()
    {
        return "@bazar/entries/index-dynamic/_pagination.twig";
    }

    public function getDebugInfo()
    {
        return array (  54 => 9,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@bazar/entries/index-dynamic/_pagination.twig", "C:\\xampp\\htdocs\\doryphore\\tools\\bazar\\templates\\entries\\index-dynamic\\_pagination.twig");
    }
}
