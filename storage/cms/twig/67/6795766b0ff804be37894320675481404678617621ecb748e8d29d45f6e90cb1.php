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

/* H:\xampp\htdocs\presenza/plugins/mostafamahmoud/footer/components/footers/default.htm */
class __TwigTemplate_b901e7dc794733c3cd2696352597ba2cf3216b74d4cffd2bc62d224acf6228f4 extends \Twig\Template
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
                echo "\" target=\"_blank\" class=\"footer-link\" name=\"twitter link\">
                <i class=\"fab fa-twitter\"></i>

            </a>
        </li>
        <li>
            <a href=\"";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["footer"], "twitter_link", [], "any", false, false, false, 15), "html", null, true);
                echo "\" target=\"_blank\" class=\"footer-link\" name=\"facebook link\">
                <i class=\"fab fa-facebook-square\"></i>
            </a>
        </li>
        <li>
            <a href=\"";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["footer"], "youtube_link", [], "any", false, false, false, 20), "html", null, true);
                echo "\" target=\"_blank\" class=\"footer-link\">
                <i class=\"fab fa-youtube\" name=\"youtube link\"></i>
            </a>
        </li>
    </ul>

    <p class=\"footer-copyrights\">Copyright © 2020 Presenza – All rights reserved</p>

    <p class=\"footer-copyrights-mobile\">Copyright © 2020 Presenza – All rights reserved</p>

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
        return "H:\\xampp\\htdocs\\presenza/plugins/mostafamahmoud/footer/components/footers/default.htm";
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
        return new Source("", "H:\\xampp\\htdocs\\presenza/plugins/mostafamahmoud/footer/components/footers/default.htm", "");
    }
}
