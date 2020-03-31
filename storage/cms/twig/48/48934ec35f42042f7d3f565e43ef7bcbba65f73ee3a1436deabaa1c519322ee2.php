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

/* C:\xampp\htdocs\presenza/plugins/mostafamahmoud/contact/components/contactform/default.htm */
class __TwigTemplate_c3538076b4214192c9cb04685a4cec57681ad982405b162a95c58604e53ed5df extends \Twig\Template
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
        $context["contacts"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "contact", [], "any", false, false, false, 1);
        // line 2
        $context["contactname"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "results"], "method", false, false, false, 2);
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["contacts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 4
            if ((twig_get_attribute($this->env, $this->source, $context["contact"], "name", [], "any", false, false, false, 4) == ($context["contactname"] ?? null))) {
                // line 5
                echo "

<div class=\"contact-container\" id=\"";
                // line 7
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "link", [], "any", false, false, false, 7), "html", null, true);
                echo "\">
    <h1 class=\"contact-title\">Contact us</h1>
    <div class=\"contact-subtitle-container\">
        <p class=\"contact-subtitle\">";
                // line 10
                echo twig_get_attribute($this->env, $this->source, $context["contact"], "subtitle", [], "any", false, false, false, 10);
                echo "</p>
    </div>
    <form data-request=\"onSend\" id=\"the_form\">
        <div class=\"form__group field\">
            <input type=\"text\" class=\"form__field\" placeholder=\"Name\" name=\"name\" />
            <label for=\"name\" class=\"form__label\">Name</label>
        </div>

        <div class=\"form__group field\">
            <input type=\"email\" class=\"form__field\" placeholder=\"email\" name=\"email\" />
            <label for=\"email\" class=\"form__label\">Email</label>
        </div>

        <div class=\"form__group field\">
            <textarea name=\"content\" cols=\"30\" rows=\"5\" class=\"form__field\" placeholder=\"Message\"
                style=\"resize: none;\"></textarea>
            <label for=\"content\" class=\"form__label\">Message</label>
        </div>

        <a href=\"#contact\" onclick=\"\$(this).closest('form').submit()\" class=\"contact-button\">
            <div style=\"margin-top: 7px;\">submit form</div>
            <div class=\"contact-submit-icon\">
                <i class=\"fas fa-arrow-right\" style=\"position: absolute; top:11px; right: 12px\"></i>
            </div>
        </a>

        <ul>
            ";
                // line 37
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "all", [], "method", false, false, false, 37));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 38
                    echo "            <!-- displays specific error -->
            <li>";
                    // line 39
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "name"], "method", false, false, false, 39), "html", null, true);
                    echo "</li>
            <!-- displays all errors  -->
            <li>";
                    // line 41
                    echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                    echo "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "        </ul>


    </form>

</div>

";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\presenza/plugins/mostafamahmoud/contact/components/contactform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 43,  99 => 41,  94 => 39,  91 => 38,  87 => 37,  57 => 10,  51 => 7,  47 => 5,  45 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set contacts = __SELF__.contact %}
{% set contactname = __SELF__.property('results') %}
{% for contact in contacts %}
{% if contact.name == contactname %}


<div class=\"contact-container\" id=\"{{contact.link}}\">
    <h1 class=\"contact-title\">Contact us</h1>
    <div class=\"contact-subtitle-container\">
        <p class=\"contact-subtitle\">{{contact.subtitle|raw}}</p>
    </div>
    <form data-request=\"onSend\" id=\"the_form\">
        <div class=\"form__group field\">
            <input type=\"text\" class=\"form__field\" placeholder=\"Name\" name=\"name\" />
            <label for=\"name\" class=\"form__label\">Name</label>
        </div>

        <div class=\"form__group field\">
            <input type=\"email\" class=\"form__field\" placeholder=\"email\" name=\"email\" />
            <label for=\"email\" class=\"form__label\">Email</label>
        </div>

        <div class=\"form__group field\">
            <textarea name=\"content\" cols=\"30\" rows=\"5\" class=\"form__field\" placeholder=\"Message\"
                style=\"resize: none;\"></textarea>
            <label for=\"content\" class=\"form__label\">Message</label>
        </div>

        <a href=\"#contact\" onclick=\"\$(this).closest('form').submit()\" class=\"contact-button\">
            <div style=\"margin-top: 7px;\">submit form</div>
            <div class=\"contact-submit-icon\">
                <i class=\"fas fa-arrow-right\" style=\"position: absolute; top:11px; right: 12px\"></i>
            </div>
        </a>

        <ul>
            {% for error in errors.all() %}
            <!-- displays specific error -->
            <li>{{ errors.first('name') }}</li>
            <!-- displays all errors  -->
            <li>{{ error }}</li>
            {% endfor %}
        </ul>


    </form>

</div>

{% endif %}
{% endfor %}", "C:\\xampp\\htdocs\\presenza/plugins/mostafamahmoud/contact/components/contactform/default.htm", "");
    }
}
