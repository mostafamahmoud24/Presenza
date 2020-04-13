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
    <form data-request=\"onSend\" id=\"the_form\" data-request-validate data-request-flash>
        <div class=\"form__group field\">
            <input type=\"text\" class=\"form__field\" placeholder=\"Name\" name=\"name\" />
            <label for=\"name\" class=\"form__label\">Name</label>
            <p class=\"text-danger\" style=\"padding-top: 0px !important;\">
                ";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "name"], "method", false, false, false, 17), "html", null, true);
                echo "</p>
        </div>

        <div class=\"form__group field\">
            <input type=\"email\" class=\"form__field\" placeholder=\"email\" name=\"email\" />
            <label for=\"email\" class=\"form__label\">Email</label>
            <p class=\"text-danger\" style=\"padding-top: 0px !important;\">";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "email"], "method", false, false, false, 23), "html", null, true);
                echo "</p>
            <div data-validate-for=\"name\" class=\"text-danger\"></div>
        </div>


        <div class=\"form__group field1 mt-5\">
            <textarea name=\"content\" id=\"textarea\" class=\"form__field\" placeholder=\"Message\"></textarea>
            <label for=\"content\" class=\"form__label\">Message</label>
            <p class=\"text-danger\" style=\"padding-top: 0px !important;\">";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "content"], "method", false, false, false, 31), "html", null, true);
                echo "</p>
        </div>


        <div class=\"contact-button\">
            <a onclick=\"\$(this).closest('form').submit()\" class=\"contact-submit-text\">
                <div style=\"margin-top: 8px; cursor: pointer;\">submit form</div>
            </a>
            <a onclick=\"\$(this).closest('form').submit()\">
                <div class=\"contact-submit-icon\" style=\"cursor: pointer;\">
                    <i class=\"fas fa-arrow-right\"
                        style=\"position: absolute; top:11px; right: 12px; cursor: pointer\"></i>
                </div>
            </a>

        </div>
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
        return array (  87 => 31,  76 => 23,  67 => 17,  57 => 10,  51 => 7,  47 => 5,  45 => 4,  41 => 3,  39 => 2,  37 => 1,);
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
    <form data-request=\"onSend\" id=\"the_form\" data-request-validate data-request-flash>
        <div class=\"form__group field\">
            <input type=\"text\" class=\"form__field\" placeholder=\"Name\" name=\"name\" />
            <label for=\"name\" class=\"form__label\">Name</label>
            <p class=\"text-danger\" style=\"padding-top: 0px !important;\">
                {{errors.first('name')}}</p>
        </div>

        <div class=\"form__group field\">
            <input type=\"email\" class=\"form__field\" placeholder=\"email\" name=\"email\" />
            <label for=\"email\" class=\"form__label\">Email</label>
            <p class=\"text-danger\" style=\"padding-top: 0px !important;\">{{errors.first('email')}}</p>
            <div data-validate-for=\"name\" class=\"text-danger\"></div>
        </div>


        <div class=\"form__group field1 mt-5\">
            <textarea name=\"content\" id=\"textarea\" class=\"form__field\" placeholder=\"Message\"></textarea>
            <label for=\"content\" class=\"form__label\">Message</label>
            <p class=\"text-danger\" style=\"padding-top: 0px !important;\">{{errors.first('content')}}</p>
        </div>


        <div class=\"contact-button\">
            <a onclick=\"\$(this).closest('form').submit()\" class=\"contact-submit-text\">
                <div style=\"margin-top: 8px; cursor: pointer;\">submit form</div>
            </a>
            <a onclick=\"\$(this).closest('form').submit()\">
                <div class=\"contact-submit-icon\" style=\"cursor: pointer;\">
                    <i class=\"fas fa-arrow-right\"
                        style=\"position: absolute; top:11px; right: 12px; cursor: pointer\"></i>
                </div>
            </a>

        </div>
    </form>
</div>

{% endif %}
{% endfor %}", "C:\\xampp\\htdocs\\presenza/plugins/mostafamahmoud/contact/components/contactform/default.htm", "");
    }
}
