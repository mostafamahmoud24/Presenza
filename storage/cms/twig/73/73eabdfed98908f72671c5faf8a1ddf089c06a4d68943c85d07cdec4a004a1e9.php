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
<div class=\"about-body\" id=\"about\">
    <div class=\"about-container-container\">
        <div class=\"purple-icon\"></div>
        <img src=\"../../../../../../presenza/themes/presenza/assets/images/square1.png\" alt=\"\" class=\"about-square1\">
        <img src=\"../../../../../../presenza/themes/presenza/assets/images/square1.png\" alt=\"\" class=\"about-square2\">

        <div class=\"about-container\">

            <div class=\"about-video-container\"\">
            <video class=\" afterglow about-video\" id=\"myvideo\" width=\"597\" height=\"336\" src=\"";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["about"], "video", [], "any", false, false, false, 15), "path", [], "any", false, false, false, 15), "html", null, true);
                echo "\"
                poster=\"";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["about"], "videoimg", [], "any", false, false, false, 16), "thumb", [0 => 1194, 1 => 672, 2 => ["mode" => "crop"]], "method", false, false, false, 16), "html", null, true);
                echo "\" />
            </video>
            <img src=\"../../../../../../presenza/themes/presenza/assets/images/Path 492@2x.png\" alt=\"\"
                class=\"line-icon\">
            <img src=\"../../../../../../presenza/themes/presenza/assets/images/Path 493@2x.png\" alt=\"\"
                class=\"big-curve-icon\">
            <img src=\"../../../../../../presenza/themes/presenza/assets/images/Path 494@2x.png\" alt=\"\"
                class=\"small-curve-icon-icon\">
            <img src=\"../../../../../../presenza/themes/presenza/assets/images/Group 451@2x.png\" alt=\"\"
                class=\"square-icon\">
        </div>

        <div class=\"about-header\">
            <div class=\"about-styling-title-container\">
                <!-- <h1 class=\"about-styling-title\">About</h1> -->
                <img src=\"../../../../../../presenza/themes/presenza/assets/images/About.png\" alt=\"\">
                <h1 class=\"about-title\">About us</h1>
            </div>

        </div>
        <div class=\"about-social-container\">
            <i class=\"fab fa-facebook-square\"></i>
            <i class=\"fab fa-twitter\"></i>
            <i class=\"fab fa-instagram\"></i>
        </div>

        <div class=\"about-content-container\">
            <p class=\"about-content product-sans\">
                ";
                // line 44
                echo twig_get_attribute($this->env, $this->source, $context["about"], "description", [], "any", false, false, false, 44);
                echo "
            </p>
        </div>




    </div>
</div>

<img src=\"../../../../../../presenza/themes/presenza/assets/images/Ellipse 212.png\" alt=\"\" class=\"about-arch\">


</div>
<!-- <div class=\"styling-container\"></div>
    <div class=\"about-content-container\">
        <div class=\"about-video-container\" style=\"width: 600px;\">
            <video class=\"afterglow about-video\" id=\"myvideo\" width=\"640\" height=\"360\" src=\"";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["about"], "video", [], "any", false, false, false, 61), "path", [], "any", false, false, false, 61), "html", null, true);
                echo "\"
                poster=\"";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["about"], "videoimg", [], "any", false, false, false, 62), "thumb", [0 => 1280, 1 => 720, 2 => ["mode" => "crop"]], "method", false, false, false, 62), "html", null, true);
                echo "\" /></video>
        </div>
        <div class=\"about-content-header\">
            <div class=\"about-title\">
                <h3 style=\"font-weight: bold;\">About us</h3>
            </div>
            <div class=\"about-title-sec\">

                <h3 style=\"font-size: 100px; color: rgba(214, 214, 214, 0.555); font-weight:bolder; z-index:0;\">About
                </h3>
            </div>
            <div class=\"about-social\">
                <a href=\"";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["about"], "facebook_link", [], "any", false, false, false, 74), "html", null, true);
                echo "\" target=\"_blank\" class=\"about-social-link\">
                    <i class=\"fab fa-facebook-square\" style=\"display:flex; margin-top:20px;\"></i>
                </a>
                <a class=\"about-social-link\" href=\"";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["about"], "twitter_link", [], "any", false, false, false, 77), "html", null, true);
                echo "\" target=\"_blank\">
                    <i class=\"fab fa-twitter\" style=\"display:flex; margin-top:20px;\"></i>
                </a>
                <a class=\"about-social-link\" href=\"";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["about"], "instagram_link", [], "any", false, false, false, 80), "html", null, true);
                echo "\" target=\"_blank\">
                    <i class=\"fab fa-instagram\" style=\"display:flex; margin-top:20px;\"></i>
                </a>
            </div>
        </div>
        <div class=\"about-content-description\">
            <p>";
                // line 86
                echo twig_get_attribute($this->env, $this->source, $context["about"], "description", [], "any", false, false, false, 86);
                echo "</p>
        </div>

    </div> -->


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
        return array (  154 => 86,  145 => 80,  139 => 77,  133 => 74,  118 => 62,  114 => 61,  94 => 44,  63 => 16,  59 => 15,  47 => 5,  45 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set aboutus = __SELF__.aboutus %}
{% set aboutname = __SELF__.property('results') %}
{% for about in aboutus %}
{% if about.name == aboutname %}

<div class=\"about-body\" id=\"about\">
    <div class=\"about-container-container\">
        <div class=\"purple-icon\"></div>
        <img src=\"../../../../../../presenza/themes/presenza/assets/images/square1.png\" alt=\"\" class=\"about-square1\">
        <img src=\"../../../../../../presenza/themes/presenza/assets/images/square1.png\" alt=\"\" class=\"about-square2\">

        <div class=\"about-container\">

            <div class=\"about-video-container\"\">
            <video class=\" afterglow about-video\" id=\"myvideo\" width=\"597\" height=\"336\" src=\"{{about.video.path}}\"
                poster=\"{{about.videoimg.thumb(1194, 672, {'mode': 'crop'})}}\" />
            </video>
            <img src=\"../../../../../../presenza/themes/presenza/assets/images/Path 492@2x.png\" alt=\"\"
                class=\"line-icon\">
            <img src=\"../../../../../../presenza/themes/presenza/assets/images/Path 493@2x.png\" alt=\"\"
                class=\"big-curve-icon\">
            <img src=\"../../../../../../presenza/themes/presenza/assets/images/Path 494@2x.png\" alt=\"\"
                class=\"small-curve-icon-icon\">
            <img src=\"../../../../../../presenza/themes/presenza/assets/images/Group 451@2x.png\" alt=\"\"
                class=\"square-icon\">
        </div>

        <div class=\"about-header\">
            <div class=\"about-styling-title-container\">
                <!-- <h1 class=\"about-styling-title\">About</h1> -->
                <img src=\"../../../../../../presenza/themes/presenza/assets/images/About.png\" alt=\"\">
                <h1 class=\"about-title\">About us</h1>
            </div>

        </div>
        <div class=\"about-social-container\">
            <i class=\"fab fa-facebook-square\"></i>
            <i class=\"fab fa-twitter\"></i>
            <i class=\"fab fa-instagram\"></i>
        </div>

        <div class=\"about-content-container\">
            <p class=\"about-content product-sans\">
                {{about.description|raw}}
            </p>
        </div>




    </div>
</div>

<img src=\"../../../../../../presenza/themes/presenza/assets/images/Ellipse 212.png\" alt=\"\" class=\"about-arch\">


</div>
<!-- <div class=\"styling-container\"></div>
    <div class=\"about-content-container\">
        <div class=\"about-video-container\" style=\"width: 600px;\">
            <video class=\"afterglow about-video\" id=\"myvideo\" width=\"640\" height=\"360\" src=\"{{about.video.path}}\"
                poster=\"{{about.videoimg.thumb(1280, 720, {'mode': 'crop'})}}\" /></video>
        </div>
        <div class=\"about-content-header\">
            <div class=\"about-title\">
                <h3 style=\"font-weight: bold;\">About us</h3>
            </div>
            <div class=\"about-title-sec\">

                <h3 style=\"font-size: 100px; color: rgba(214, 214, 214, 0.555); font-weight:bolder; z-index:0;\">About
                </h3>
            </div>
            <div class=\"about-social\">
                <a href=\"{{about.facebook_link}}\" target=\"_blank\" class=\"about-social-link\">
                    <i class=\"fab fa-facebook-square\" style=\"display:flex; margin-top:20px;\"></i>
                </a>
                <a class=\"about-social-link\" href=\"{{about.twitter_link}}\" target=\"_blank\">
                    <i class=\"fab fa-twitter\" style=\"display:flex; margin-top:20px;\"></i>
                </a>
                <a class=\"about-social-link\" href=\"{{about.instagram_link}}\" target=\"_blank\">
                    <i class=\"fab fa-instagram\" style=\"display:flex; margin-top:20px;\"></i>
                </a>
            </div>
        </div>
        <div class=\"about-content-description\">
            <p>{{about.description|raw}}</p>
        </div>

    </div> -->


{% endif %}
{% endfor %}", "C:\\xampp\\htdocs\\presenza/plugins/mostafamahmoud/aboutus/components/about/default.htm", "");
    }
}
