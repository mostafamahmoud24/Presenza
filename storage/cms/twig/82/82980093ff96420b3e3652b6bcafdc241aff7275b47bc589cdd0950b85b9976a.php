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

/* C:\xampp\htdocs\presenza/themes/presenza/partials/header.htm */
class __TwigTemplate_ffef64beaf29775f992c0e1482884c4e299c8ae845efc78e4d1d81e941a4eeff extends \Twig\Template
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
        $context["navbar"] = twig_get_attribute($this->env, $this->source, ($context["navbar"] ?? null), "navbar", [], "any", false, false, false, 1);
        // line 2
        $context["navs"] = twig_last($this->env, ($context["navbar"] ?? null));
        // line 3
        echo "
<!-- <div class=\"navbar-container\">
    <div class=\"navbar-logo\">
        <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["navs"] ?? null), "logo", [], "any", false, false, false, 6), "thumb", [0 => 150, 1 => ($context["auto"] ?? null)], "method", false, false, false, 6), "html", null, true);
        echo "\" alt=\"\">
    </div>
    <div class=\"navigation-links\">
        <ul class=\"navbar-links\">
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["navs"] ?? null), "link", [], "any", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["nav"]) {
            // line 11
            echo "            <a href=\"#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nav"], "link", [], "any", false, false, false, 11), "html", null, true);
            echo "\" class=\"navbar-link\">
                <li>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nav"], "name", [], "any", false, false, false, 12), "html", null, true);
            echo "</li>
            </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nav'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "        </ul>
    </div>
    
</div> -->

<div class=\"navbar-container\">
    <div class=\"navbar-logo\">
        <img src=\" ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["navs"] ?? null), "logo", [], "any", false, false, false, 22), "path", [], "any", false, false, false, 22), "html", null, true);
        echo "\" alt=\"\" class=\"navbar-logo-img\">

    </div>
    <div class=\" burger\" onclick=\"handleSideMenuToggle()\">
    </div>

    <div class=\"navigation-links\" id=\"burger\">
        <div class=\" burger\" onclick=\"handleSideMenuToggle()\">
        </div>

        <div class=\" nav\">
            <ul class=\"navbar-links\">
                ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["navs"] ?? null), "link", [], "any", false, false, false, 34));
        foreach ($context['_seq'] as $context["_key"] => $context["nav"]) {
            // line 35
            echo "                <a href=\"#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nav"], "link", [], "any", false, false, false, 35), "html", null, true);
            echo "\" class=\"navbar-link\" onclick=\"handleSideMenuToggle()\">
                    <li class=\"link-item\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nav"], "name", [], "any", false, false, false, 36), "html", null, true);
            echo "</li>
                </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nav'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "            </ul>
        </div>

        <div class=\"navbar-logo-burger\">
            <img src=\" ";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["navs"] ?? null), "logo", [], "any", false, false, false, 43), "path", [], "any", false, false, false, 43), "html", null, true);
        echo "\" alt=\"\" class=\"navbar-logo-img-second\">

        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\presenza/themes/presenza/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 43,  113 => 39,  104 => 36,  99 => 35,  95 => 34,  80 => 22,  71 => 15,  62 => 12,  57 => 11,  53 => 10,  46 => 6,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set navbar = navbar.navbar%}
{% set navs = navbar|last %}

<!-- <div class=\"navbar-container\">
    <div class=\"navbar-logo\">
        <img src=\"{{navs.logo.thumb(150, auto)}}\" alt=\"\">
    </div>
    <div class=\"navigation-links\">
        <ul class=\"navbar-links\">
            {% for nav in navs.link %}
            <a href=\"#{{nav.link}}\" class=\"navbar-link\">
                <li>{{nav.name}}</li>
            </a>
            {% endfor %}
        </ul>
    </div>
    
</div> -->

<div class=\"navbar-container\">
    <div class=\"navbar-logo\">
        <img src=\" {{navs.logo.path}}\" alt=\"\" class=\"navbar-logo-img\">

    </div>
    <div class=\" burger\" onclick=\"handleSideMenuToggle()\">
    </div>

    <div class=\"navigation-links\" id=\"burger\">
        <div class=\" burger\" onclick=\"handleSideMenuToggle()\">
        </div>

        <div class=\" nav\">
            <ul class=\"navbar-links\">
                {% for nav in navs.link %}
                <a href=\"#{{nav.link}}\" class=\"navbar-link\" onclick=\"handleSideMenuToggle()\">
                    <li class=\"link-item\">{{nav.name}}</li>
                </a>
                {% endfor %}
            </ul>
        </div>

        <div class=\"navbar-logo-burger\">
            <img src=\" {{navs.logo.path}}\" alt=\"\" class=\"navbar-logo-img-second\">

        </div>
    </div>
</div>", "C:\\xampp\\htdocs\\presenza/themes/presenza/partials/header.htm", "");
    }
}
