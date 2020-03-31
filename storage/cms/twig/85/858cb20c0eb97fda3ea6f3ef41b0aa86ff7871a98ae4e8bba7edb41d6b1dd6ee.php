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

/* C:\xampp\htdocs\presenza/themes/presenza/pages/homepage.htm */
class __TwigTemplate_e64c00679aff5e771022ab88ec62f4a03bda7f51eca3e2a00005b3be8d008fe8 extends \Twig\Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("hero"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("Aboutus"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("wedos"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("clients"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contactform"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\presenza/themes/presenza/pages/homepage.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% component 'hero' %}{% component 'Aboutus' %}{% component 'wedos' %}{% component 'clients' %}{% component 'contactform' %}", "C:\\xampp\\htdocs\\presenza/themes/presenza/pages/homepage.htm", "");
    }
}
