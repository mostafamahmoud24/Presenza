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

/* C:\xampp\htdocs\presenza/plugins/mostafamahmoud/aboutus/components/about/default.htm */
class __TwigTemplate_e51ce75d663863575c906da5b36173dbf4c759eb0bedee30fca48bdac191eb35 extends \Twig\Template
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
        $context["aboutus"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "aboutus", [], "any", false, false, false, 1);
        // line 2
        $context["aboutname"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "results"], "method", false, false, false, 2);
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["aboutus"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["about"]) {
            // line 4
            if ((twig_get_attribute($this->env, $this->source, $context["about"], "name", [], "any", false, false, false, 4) == ($context["aboutname"] ?? null))) {
                // line 5
                echo "
<div class=\"about-body\" id=\"";
                // line 6
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["about"], "link", [], "any", false, false, false, 6), "html", null, true);
                echo "\">
    <div class=\"about-container-container\">
        <div class=\"purple-icon\"></div>
        <img src=\"../../../../../themes/presenza/assets/images/square1.png\" alt=\"\" class=\"about-square1\">
        <img src=\"../../../../../themes/presenza/assets/images/square1.png\" alt=\"\" class=\"about-square2\">
        <!-- <img src=\"../../../../../../presenza/themes/presenza/assets/images/square1.png\" alt=\"\" class=\"about-square1\">
        <img src=\"../../../../../../presenza/themes/presenza/assets/images/square1.png\" alt=\"\" class=\"about-square2\"> -->

        <div class=\"about-container\">

            <div class=\"about-video-container\"\">
            <video class=\" afterglow about-video\" id=\"myvideo\" width=\"597\" height=\"336\" src=\"";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["about"], "video", [], "any", false, false, false, 17), "path", [], "any", false, false, false, 17), "html", null, true);
                echo "\"
                poster=\"";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["about"], "videoimg", [], "any", false, false, false, 18), "thumb", [0 => 1194, 1 => 672, 2 => ["mode" => "crop"]], "method", false, false, false, 18), "html", null, true);
                echo "\" />
            </video>
            <img src=\"../../../../../themes/presenza/assets/images/Path 492@2x.png\" alt=\"\" class=\"line-icon\">
            <img src=\"../../../../../themes/presenza/assets/images/Path 493@2x.png\" alt=\"\" class=\"big-curve-icon\">
            <img src=\"../../../../../themes/presenza/assets/images/Path 494@2x.png\" alt=\"\"
                class=\"small-curve-icon-icon\">
            <img src=\"../../../../../themes/presenza/assets/images/Group 451@2x.png\" alt=\"\" class=\"square-icon\">
            <!-- <img src=\"../../../../../../presenza/themes/presenza/assets/images/Path 492@2x.png\" alt=\"\"
                class=\"line-icon\">
            <img src=\"../../../../../../presenza/themes/presenza/assets/images/Path 493@2x.png\" alt=\"\"
                class=\"big-curve-icon\">
            <img src=\"../../../../../../presenza/themes/presenza/assets/images/Path 494@2x.png\" alt=\"\"
                class=\"small-curve-icon-icon\">
            <img src=\"../../../../../../presenza/themes/presenza/assets/images/Group 451@2x.png\" alt=\"\"
                class=\"square-icon\"> -->
        </div>

        <div class=\"about-header\">
            <div class=\"about-styling-title-container\">
                <!-- <h1 class=\"about-styling-title\">About</h1> -->
                <img src=\"../../../../../themes/presenza/assets/images/About.png\" alt=\"\">
                <!-- <img src=\"../../../../../../presenza/themes/presenza/assets/images/About.png\" alt=\"\"> -->
                <h1 class=\"about-title\">About us</h1>
            </div>

        </div>
        <div class=\"about-social-container\">
            <a href=\"";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["about"], "facebook_link", [], "any", false, false, false, 45), "html", null, true);
                echo "\" style=\"text-decoration: none;\" target=\"_blank\" name=\"facebook icon\">
                <i class=\"fab fa-facebook-square\"></i>
            </a>
            <a href=\"";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["about"], "twitter_link", [], "any", false, false, false, 48), "html", null, true);
                echo "\" style=\"text-decoration: none;\" target=\"_blank\" name=\"twitter icon\">
                <i class=\"fab fa-twitter\"></i>
            </a>
            <a href=\"";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["about"], "instagram_link", [], "any", false, false, false, 51), "html", null, true);
                echo "\" style=\"text-decoration: none;\" target=\"_blank\" name=\"instagram icon\">
                <i class=\"fab fa-instagram\"></i>
            </a>
        </div>

        <div class=\"about-content-container\">
            <p class=\"about-content product-sans\">
                ";
                // line 58
                echo twig_get_attribute($this->env, $this->source, $context["about"], "description", [], "any", false, false, false, 58);
                echo "
            </p>
        </div>




    </div>
</div>

<img src=\"../../../../../themes/presenza/assets/images/Ellipse 212.png\" alt=\"\" class=\"about-arch\">
<!-- <img src=\"../../../../../../presenza/themes/presenza/assets/images/Ellipse 212.png\" alt=\"\" class=\"about-arch\"> -->


</div>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['about'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\presenza/plugins/mostafamahmoud/aboutus/components/about/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 58,  110 => 51,  104 => 48,  98 => 45,  68 => 18,  64 => 17,  50 => 6,  47 => 5,  45 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set aboutus = __SELF__.aboutus %}
{% set aboutname = __SELF__.property('results') %}
{% for about in aboutus %}
{% if about.name == aboutname %}

<div class=\"about-body\" id=\"{{about.link}}\">
    <div class=\"about-container-container\">
        <div class=\"purple-icon\"></div>
        <img src=\"../../../../../themes/presenza/assets/images/square1.png\" alt=\"\" class=\"about-square1\">
        <img src=\"../../../../../themes/presenza/assets/images/square1.png\" alt=\"\" class=\"about-square2\">
        <!-- <img src=\"../../../../../../presenza/themes/presenza/assets/images/square1.png\" alt=\"\" class=\"about-square1\">
        <img src=\"../../../../../../presenza/themes/presenza/assets/images/square1.png\" alt=\"\" class=\"about-square2\"> -->

        <div class=\"about-container\">

            <div class=\"about-video-container\"\">
            <video class=\" afterglow about-video\" id=\"myvideo\" width=\"597\" height=\"336\" src=\"{{about.video.path}}\"
                poster=\"{{about.videoimg.thumb(1194, 672, {'mode': 'crop'})}}\" />
            </video>
            <img src=\"../../../../../themes/presenza/assets/images/Path 492@2x.png\" alt=\"\" class=\"line-icon\">
            <img src=\"../../../../../themes/presenza/assets/images/Path 493@2x.png\" alt=\"\" class=\"big-curve-icon\">
            <img src=\"../../../../../themes/presenza/assets/images/Path 494@2x.png\" alt=\"\"
                class=\"small-curve-icon-icon\">
            <img src=\"../../../../../themes/presenza/assets/images/Group 451@2x.png\" alt=\"\" class=\"square-icon\">
            <!-- <img src=\"../../../../../../presenza/themes/presenza/assets/images/Path 492@2x.png\" alt=\"\"
                class=\"line-icon\">
            <img src=\"../../../../../../presenza/themes/presenza/assets/images/Path 493@2x.png\" alt=\"\"
                class=\"big-curve-icon\">
            <img src=\"../../../../../../presenza/themes/presenza/assets/images/Path 494@2x.png\" alt=\"\"
                class=\"small-curve-icon-icon\">
            <img src=\"../../../../../../presenza/themes/presenza/assets/images/Group 451@2x.png\" alt=\"\"
                class=\"square-icon\"> -->
        </div>

        <div class=\"about-header\">
            <div class=\"about-styling-title-container\">
                <!-- <h1 class=\"about-styling-title\">About</h1> -->
                <img src=\"../../../../../themes/presenza/assets/images/About.png\" alt=\"\">
                <!-- <img src=\"../../../../../../presenza/themes/presenza/assets/images/About.png\" alt=\"\"> -->
                <h1 class=\"about-title\">About us</h1>
            </div>

        </div>
        <div class=\"about-social-container\">
            <a href=\"{{about.facebook_link}}\" style=\"text-decoration: none;\" target=\"_blank\" name=\"facebook icon\">
                <i class=\"fab fa-facebook-square\"></i>
            </a>
            <a href=\"{{about.twitter_link}}\" style=\"text-decoration: none;\" target=\"_blank\" name=\"twitter icon\">
                <i class=\"fab fa-twitter\"></i>
            </a>
            <a href=\"{{about.instagram_link}}\" style=\"text-decoration: none;\" target=\"_blank\" name=\"instagram icon\">
                <i class=\"fab fa-instagram\"></i>
            </a>
        </div>

        <div class=\"about-content-container\">
            <p class=\"about-content product-sans\">
                {{about.description|raw}}
            </p>
        </div>




    </div>
</div>

<img src=\"../../../../../themes/presenza/assets/images/Ellipse 212.png\" alt=\"\" class=\"about-arch\">
<!-- <img src=\"../../../../../../presenza/themes/presenza/assets/images/Ellipse 212.png\" alt=\"\" class=\"about-arch\"> -->


</div>
{% endif %}
{% endfor %}", "C:\\xampp\\htdocs\\presenza/plugins/mostafamahmoud/aboutus/components/about/default.htm", "");
    }
}
