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

/* H:\xampp\htdocs\presenza/themes/presenza/partials/header.htm */
class __TwigTemplate_dbf217a041a74f58c5b89d1c0638a47107740288fff67e715acabd5680cb5031 extends \Twig\Template
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

<div class=\"navbar-container\">
    <div class=\"navbar-logo\">
        <img src=\" ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["navs"] ?? null), "logo", [], "any", false, false, false, 7), "path", [], "any", false, false, false, 7), "html", null, true);
        echo "\" alt=\"\" class=\"navbar-logo-img\">

    </div>
    <div class=\" burger\" onclick=\"handleSideMenuToggle()\">
        <i class=\"fas fa-bars\" style=\"color: white; font-size: 27px;\"></i>
    </div>

    <div class=\"navigation-links\" id=\"burger\">
        <div class=\" burger\" onclick=\"document.getElementById('burger').classList.remove('navigation-links-set');
        document.getElementById('burger').classList.add('navigation-links');
            document.documentElement.style.overflowY='scroll' ;\" id=\"hamburger-icon\">
            <i class=\"fas fa-times\" style=\"color: white; font-size: 27px;\"></i>

        </div>

        <div class=\" nav\" id=\"nav\">
            <ul class=\"navbar-links\">
                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["navs"] ?? null), "link", [], "any", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["nav"]) {
            // line 25
            echo "                <a href=\"#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nav"], "link", [], "any", false, false, false, 25), "html", null, true);
            echo "\" class=\"navbar-link\" onclick=\"handleSideMenu()\">
                    <li class=\"link-item\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nav"], "name", [], "any", false, false, false, 26), "html", null, true);
            echo "</li>
                </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nav'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "            </ul>
        </div>

        <div class=\"navbar-logo-burger\">
            <img src=\" ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["navs"] ?? null), "logo", [], "any", false, false, false, 33), "path", [], "any", false, false, false, 33), "html", null, true);
        echo "\" alt=\"\" class=\"navbar-logo-img-second\">

        </div>
    </div>
</div>


<!-- The below script toggles the hamburger menu when pressing outside its container -->
<script>
    window.addEventListener('mouseup', function (event) {
        let box = document.getElementById('nav');
        let sideMenu = document.getElementById('burger');
        let icon = document.getElementById('hamburger-icon');
        if (event.target != sideMenu && event.target.parentNode != box) {
            sideMenu.classList.remove('navigation-links-set');
            sideMenu.classList.add('navigation-links');
            document.documentElement.style.overflowY = 'scroll';
        }
    });
</script>";
    }

    public function getTemplateName()
    {
        return "H:\\xampp\\htdocs\\presenza/themes/presenza/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 33,  85 => 29,  76 => 26,  71 => 25,  67 => 24,  47 => 7,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "H:\\xampp\\htdocs\\presenza/themes/presenza/partials/header.htm", "");
    }
}
