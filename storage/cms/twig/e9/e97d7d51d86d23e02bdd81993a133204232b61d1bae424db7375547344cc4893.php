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

/* C:\xampp\htdocs\presenza/plugins/mostafamahmoud/hero/components/heroo/default.htm */
class __TwigTemplate_bfcd1c53c47ff3de9d174ea1aba7f4bbb3fd08b8940884aeeabbdc170c4f1557 extends \Twig\Template
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
        $context["heros"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "hero", [], "any", false, false, false, 1);
        // line 2
        $context["heroname"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "results"], "method", false, false, false, 2);
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["heros"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["hero"]) {
            // line 4
            if ((twig_get_attribute($this->env, $this->source, $context["hero"], "name", [], "any", false, false, false, 4) == ($context["heroname"] ?? null))) {
                // line 5
                echo "<div class=\"hero-container text-center text-white\">
    <div class=\"hero-logo-container\">
        <img src=\"";
                // line 7
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["hero"], "heroLogo", [], "any", false, false, false, 7), "thumb", [0 => 250, 1 => ($context["auto"] ?? null)], "method", false, false, false, 7), "html", null, true);
                echo "\" alt=\"\">
    </div>
    <div class=\"hero-title-container\">
        <h2 class=\"hero-title\">";
                // line 10
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hero"], "title", [], "any", false, false, false, 10), "html", null, true);
                echo "</h2>
    </div>
    <div class=\"hero-subtitle-container\">
        <p class=\"hero-subtitle\">";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hero"], "subtitle", [], "any", false, false, false, 13), "html", null, true);
                echo "</p>
    </div>
    <a href=\"#about\" style=\"text-decoration: none;\">
        <div class=\"hero-button-container\">
            <p class=\"hero-button\">
                Get Started
            </p>
        </div>
    </a>
    <a href=\" #about\">
        <div class=\"hero-arrow-container\">
            <div class=\"hero-arrow\">
                <i class=\"fas fa-long-arrow-alt-down\"></i>
            </div>
        </div>
    </a>
</div>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hero'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\presenza/plugins/mostafamahmoud/hero/components/heroo/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 13,  57 => 10,  51 => 7,  47 => 5,  45 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set heros = __SELF__.hero %}
{% set heroname = __SELF__.property('results') %}
{% for hero in heros %}
{% if hero.name == heroname %}
<div class=\"hero-container text-center text-white\">
    <div class=\"hero-logo-container\">
        <img src=\"{{hero.heroLogo.thumb(250, auto)}}\" alt=\"\">
    </div>
    <div class=\"hero-title-container\">
        <h2 class=\"hero-title\">{{hero.title}}</h2>
    </div>
    <div class=\"hero-subtitle-container\">
        <p class=\"hero-subtitle\">{{hero.subtitle}}</p>
    </div>
    <a href=\"#about\" style=\"text-decoration: none;\">
        <div class=\"hero-button-container\">
            <p class=\"hero-button\">
                Get Started
            </p>
        </div>
    </a>
    <a href=\" #about\">
        <div class=\"hero-arrow-container\">
            <div class=\"hero-arrow\">
                <i class=\"fas fa-long-arrow-alt-down\"></i>
            </div>
        </div>
    </a>
</div>
{% endif %}
{% endfor %}", "C:\\xampp\\htdocs\\presenza/plugins/mostafamahmoud/hero/components/heroo/default.htm", "");
    }
}
