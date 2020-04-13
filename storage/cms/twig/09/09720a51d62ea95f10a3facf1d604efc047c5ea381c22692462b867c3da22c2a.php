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

/* C:\xampp\htdocs\presenza/plugins/mostafamahmoud/footer/components/footers/default.htm */
class __TwigTemplate_9095cba4541149b6b3205129a0c73998cdb79d5fd2e02d7c5d87a632135637b8 extends \Twig\Template
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
        $context["footers"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "footer", [], "any", false, false, false, 1);
        // line 2
        $context["footername"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "results"], "method", false, false, false, 2);
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["footers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["footer"]) {
            // line 4
            if ((twig_get_attribute($this->env, $this->source, $context["footer"], "name", [], "any", false, false, false, 4) == ($context["footername"] ?? null))) {
                // line 5
                echo "
<div class=\"footer-container\">
    <ul class=\"footer-list\">
        <li>
            <a href=\"";
                // line 9
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["footer"], "facebook_link", [], "any", false, false, false, 9), "html", null, true);
                echo "\" target=\"_blank\" class=\"footer-link\">
                <i class=\"fab fa-twitter\"></i>

            </a>
        </li>
        <li>
            <a href=\"";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["footer"], "twitter_link", [], "any", false, false, false, 15), "html", null, true);
                echo "\" target=\"_blank\" class=\"footer-link\">
                <i class=\"fab fa-facebook-square\"></i>
            </a>
        </li>
        <li>
            <a href=\"";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["footer"], "youtube_link", [], "any", false, false, false, 20), "html", null, true);
                echo "\" target=\"_blank\" class=\"footer-link\">
                <i class=\"fab fa-youtube\"></i>
            </a>
        </li>
    </ul>

    <p class=\"footer-copyrights\">Copyright 2020 All rights reserved - Designed by John Esamt</p>

    <p class=\"footer-copyrights-mobile\">Copyright 2020 All rights reserved</p>

    <!-- <img src=\"../../../../../themes/presenza/assets/images/Triangle@2x.png\" alt=\"\" class=\"footer-triangle\">
    <img src=\"../../../../../themes/presenza/assets/images/footer.png\" alt=\"\" class=\"footer-styling\">
    <img src=\"../../../../../themes/presenza/assets/images/footer2.png\" alt=\"\" class=\"footer-styling-mobile\"> -->
    <img src=\"../../../../../../presenza/themes/presenza/assets/images/Triangle@2x.png\" alt=\"\" class=\"footer-triangle\">
    <img src=\"../../../../../../presenza/themes/presenza/assets/images/footer.png\" alt=\"\" class=\"footer-styling\">
    <img src=\"../../../../../../presenza/themes/presenza/assets/images/footer2.png\" alt=\"\"
        class=\"footer-styling-mobile\">

</div>


";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['footer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\presenza/plugins/mostafamahmoud/footer/components/footers/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 20,  62 => 15,  53 => 9,  47 => 5,  45 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set footers = __SELF__.footer %}
{% set footername = __SELF__.property('results') %}
{% for footer in footers %}
{% if footer.name == footername %}

<div class=\"footer-container\">
    <ul class=\"footer-list\">
        <li>
            <a href=\"{{footer.facebook_link}}\" target=\"_blank\" class=\"footer-link\">
                <i class=\"fab fa-twitter\"></i>

            </a>
        </li>
        <li>
            <a href=\"{{footer.twitter_link}}\" target=\"_blank\" class=\"footer-link\">
                <i class=\"fab fa-facebook-square\"></i>
            </a>
        </li>
        <li>
            <a href=\"{{footer.youtube_link}}\" target=\"_blank\" class=\"footer-link\">
                <i class=\"fab fa-youtube\"></i>
            </a>
        </li>
    </ul>

    <p class=\"footer-copyrights\">Copyright 2020 All rights reserved - Designed by John Esamt</p>

    <p class=\"footer-copyrights-mobile\">Copyright 2020 All rights reserved</p>

    <!-- <img src=\"../../../../../themes/presenza/assets/images/Triangle@2x.png\" alt=\"\" class=\"footer-triangle\">
    <img src=\"../../../../../themes/presenza/assets/images/footer.png\" alt=\"\" class=\"footer-styling\">
    <img src=\"../../../../../themes/presenza/assets/images/footer2.png\" alt=\"\" class=\"footer-styling-mobile\"> -->
    <img src=\"../../../../../../presenza/themes/presenza/assets/images/Triangle@2x.png\" alt=\"\" class=\"footer-triangle\">
    <img src=\"../../../../../../presenza/themes/presenza/assets/images/footer.png\" alt=\"\" class=\"footer-styling\">
    <img src=\"../../../../../../presenza/themes/presenza/assets/images/footer2.png\" alt=\"\"
        class=\"footer-styling-mobile\">

</div>


{% endif %}
{% endfor %}", "C:\\xampp\\htdocs\\presenza/plugins/mostafamahmoud/footer/components/footers/default.htm", "");
    }
}
