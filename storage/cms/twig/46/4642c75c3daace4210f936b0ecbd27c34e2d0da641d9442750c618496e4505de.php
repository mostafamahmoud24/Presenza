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

/* C:\xampp\htdocs\presenza/plugins/mostafamahmoud/navbar/components/nav/default.htm */
class __TwigTemplate_da9cc0ee8d15119fef1dbfc7e162e8782c2244de5768dfd7e2b4bea27b397c35 extends \Twig\Template
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
        echo "<!-- ";
        $context["navbars"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "navbar", [], "any", false, false, false, 1);
        // line 2
        $context["navname"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "results"], "method", false, false, false, 2);
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["navbars"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["navbar"]) {
            // line 4
            if ((twig_get_attribute($this->env, $this->source, $context["navbar"], "name", [], "any", false, false, false, 4) == ($context["navname"] ?? null))) {
                // line 5
                echo "
<div class=\"navbar-container\">
    <div class=\"navbar-logo\">
        <img src=\"";
                // line 8
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["navba"] ?? null), "logo", [], "any", false, false, false, 8), "thumb", [0 => 150, 1 => ($context["auto"] ?? null)], "method", false, false, false, 8), "html", null, true);
                echo "\" alt=\"\">
    </div>
    <div class=\"navigation-links\">
        <ul class=\"navbar-links\">
            ";
                // line 12
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["navba"] ?? null), "link", [], "any", false, false, false, 12));
                foreach ($context['_seq'] as $context["_key"] => $context["nav"]) {
                    // line 13
                    echo "            <a href=\"#";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nav"], "link", [], "any", false, false, false, 13), "html", null, true);
                    echo "\" class=\"navbar-link\">
                <li>";
                    // line 14
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nav"], "name", [], "any", false, false, false, 14), "html", null, true);
                    echo "</li>
            </a>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nav'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 17
                echo "        </ul>
    </div>
</div>

";
                // line 21
                echo twig_escape_filter($this->env, $context["navbar"], "html", null, true);
                echo "



";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navbar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo " -->

Hello";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\presenza/plugins/mostafamahmoud/navbar/components/nav/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 26,  84 => 21,  78 => 17,  69 => 14,  64 => 13,  60 => 12,  53 => 8,  48 => 5,  46 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- {% set navbars =  __SELF__.navbar %}
{% set navname = __SELF__.property('results') %}
{% for navbar in navbars %}
{% if navbar.name == navname %}

<div class=\"navbar-container\">
    <div class=\"navbar-logo\">
        <img src=\"{{navba.logo.thumb(150, auto)}}\" alt=\"\">
    </div>
    <div class=\"navigation-links\">
        <ul class=\"navbar-links\">
            {% for nav in navba.link %}
            <a href=\"#{{nav.link}}\" class=\"navbar-link\">
                <li>{{nav.name}}</li>
            </a>
            {% endfor %}
        </ul>
    </div>
</div>

{{navbar}}



{% endif %}
{% endfor %} -->

Hello", "C:\\xampp\\htdocs\\presenza/plugins/mostafamahmoud/navbar/components/nav/default.htm", "");
    }
}
