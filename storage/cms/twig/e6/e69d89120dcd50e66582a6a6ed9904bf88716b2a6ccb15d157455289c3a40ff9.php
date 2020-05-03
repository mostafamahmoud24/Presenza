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

/* H:\xampp\htdocs\presenza/plugins/mostafamahmoud/contact/components/contactform/default.htm */
class __TwigTemplate_dd469e39ce266d1b1176890528b18e407be3b1e55977eafa76e74e9fbda7f801 extends \Twig\Template
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
";
                $_type = isset($context["type"]) ? $context["type"] : null;                $_message = isset($context["message"]) ? $context["message"] : null;                // line 6
                foreach (Flash::getMessages() as $type => $messages) {
                    foreach ($messages as $message) {
                        $context["type"] = $type;                        $context["message"] = $message;                        // line 7
                        echo "<p data-control=\"flash-message\" class=\"flash-message fade ";
                        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
                        echo "\" data-interval=\"5\">
    ";
                        // line 8
                        echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
                        echo "
</p>
";
                    }
                }
                $context["type"] = $_type;                $context["message"] = $_message;                // line 11
                echo "

<div class=\"contact-container\" id=\"";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "link", [], "any", false, false, false, 13), "html", null, true);
                echo "\">
    <h1 class=\"contact-title\">Contact us</h1>
    <div class=\"contact-subtitle-container\">
        <p class=\"contact-subtitle\">";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["contact"], "subtitle", [], "any", false, false, false, 16);
                echo "</p>
    </div>
    <form data-request=\"onSend\" id=\"the_form\" data-request-validate data-request-flash>
        <div class=\"form__group field\">
            <input type=\"text\" class=\"form__field\" placeholder=\"Name\" name=\"name\" aria-label=\"name\" />
            <label for=\"name\" class=\"form__label\">Name</label>
            <div data-validate-for=\"name\" class=\"text-danger\"></div>

        </div>

        <div class=\"form__group field\">
            <input type=\"email\" class=\"form__field\" aria-label=\"email\" placeholder=\"email\" name=\"email\" />
            <label for=\"email\" class=\"form__label\">Email</label>
            <div data-validate-for=\"email\" class=\"text-danger\"></div>
        </div>


        <div class=\"form__group field1 mt-5\" style=\"z-index: 10;\">
            <textarea name=\"content\" id=\"textarea\" aria-label=\"content\" class=\"form__field\"
                placeholder=\"Message\"></textarea>
            <label for=\"content\" class=\"form__label\">Message</label>
            <div data-validate-for=\"content\" class=\"text-danger\"></div>
        </div>


        <div class=\"contact-button\">
            <a onclick=\"\$(this).closest('form').submit()\" class=\"contact-submit-text\" style=\"z-index: 10;\">
                <div style=\"margin-top: 8px; cursor: pointer;\">submit form</div>
            </a>
            <a onclick=\"\$(this).closest('form').submit()\" style=\"z-index: 10;\">
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
        return "H:\\xampp\\htdocs\\presenza/plugins/mostafamahmoud/contact/components/contactform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 16,  69 => 13,  65 => 11,  58 => 8,  53 => 7,  50 => 6,  47 => 5,  45 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "H:\\xampp\\htdocs\\presenza/plugins/mostafamahmoud/contact/components/contactform/default.htm", "");
    }
}
