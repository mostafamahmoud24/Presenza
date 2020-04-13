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

/* C:\xampp\htdocs\presenza/themes/presenza/layouts/default.htm */
class __TwigTemplate_3dfb3da1da9a036d5e6353e7af3b77ed709dd8e51f8f6eb1749883c9f55e251f extends \Twig\Template
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
        echo "<!-- description = \"Default layout\" == -->
<!DOCTYPE html>
<html>

<head>
  <meta charset=\"utf-8\" />
  <title>October CMS - ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "title", [], "any", false, false, false, 7), "html", null, true);
        echo "</title>
  <meta name=\"description\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 8), "meta_description", [], "any", false, false, false, 8), "html", null, true);
        echo "\" />
  <meta name=\"title\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 9), "meta_title", [], "any", false, false, false, 9), "html", null, true);
        echo "\" />
  <meta name=\"author\" content=\"OctoberCMS\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
  <meta name=\"generator\" content=\"OctoberCMS\" />
  <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap\" rel=\"stylesheet\">
  <link
    href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&family=Open+Sans&family=Lora:ital@1&display=swap\"
    rel=\"stylesheet\">
  <link href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/styles.css"]);
        echo "\" rel=\"stylesheet\" />
  <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" rel=\"stylesheet\"
    integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
  <link rel=\"stylesheet\" href=\"https://unpkg.com/flickity@2/dist/flickity.min.css\">

  <script src=\"https://kit.fontawesome.com/dbcf87c66d.js\" crossorigin=\"anonymous\"></script>
  <script src=\"//cdn.jsdelivr.net/npm/afterglowplayer@1.x\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/javascript/index.js"]);
        echo "\"></script>



  ";
        // line 28
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 29
        echo "</head>

<body>

  <!-- Header -->
  ";
        // line 34
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 35
        echo "
  <!-- Content -->
  <section>
    ";
        // line 38
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 39
        echo "  </section>

  <!-- Footer -->
  ";
        // line 42
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 43
        echo "



  <script src=\" https://code.jquery.com/jquery-3.2.1.slim.min.js\"
    integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\"
    crossorigin=\"anonymous\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\"
    integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\"
    crossorigin=\"anonymous\"></script>
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\"
    integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
  <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js\"
    integrity=\"sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm\"
    crossorigin=\"anonymous\"></script>
  <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\"
    integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\"
    crossorigin=\"anonymous\"></script>
  <script src=\"https://code.jquery.com/jquery-3.4.1.js\" integrity=\"sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=\"
    crossorigin=\"anonymous\"></script>

  ";
        // line 64
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework'.($_minify ? '-min' : '').'.js"></script>'.PHP_EOL;
        unset($_minify);
        // line 65
        echo "</body>

</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\presenza/themes/presenza/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 65,  134 => 64,  111 => 43,  107 => 42,  102 => 39,  100 => 38,  95 => 35,  91 => 34,  84 => 29,  81 => 28,  74 => 24,  64 => 17,  53 => 9,  49 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- description = \"Default layout\" == -->
<!DOCTYPE html>
<html>

<head>
  <meta charset=\"utf-8\" />
  <title>October CMS - {{ this.page.title }}</title>
  <meta name=\"description\" content=\"{{ this.page.meta_description }}\" />
  <meta name=\"title\" content=\"{{ this.page.meta_title }}\" />
  <meta name=\"author\" content=\"OctoberCMS\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
  <meta name=\"generator\" content=\"OctoberCMS\" />
  <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap\" rel=\"stylesheet\">
  <link
    href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&family=Open+Sans&family=Lora:ital@1&display=swap\"
    rel=\"stylesheet\">
  <link href=\"{{ ['assets/css/styles.css']|theme }}\" rel=\"stylesheet\" />
  <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" rel=\"stylesheet\"
    integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
  <link rel=\"stylesheet\" href=\"https://unpkg.com/flickity@2/dist/flickity.min.css\">

  <script src=\"https://kit.fontawesome.com/dbcf87c66d.js\" crossorigin=\"anonymous\"></script>
  <script src=\"//cdn.jsdelivr.net/npm/afterglowplayer@1.x\"></script>
  <script type=\"text/javascript\" src=\"{{ ['assets/javascript/index.js']|theme }}\"></script>



  {% styles %}
</head>

<body>

  <!-- Header -->
  {% partial 'header' %}

  <!-- Content -->
  <section>
    {% page %}
  </section>

  <!-- Footer -->
  {% partial 'footer' %}




  <script src=\" https://code.jquery.com/jquery-3.2.1.slim.min.js\"
    integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\"
    crossorigin=\"anonymous\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\"
    integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\"
    crossorigin=\"anonymous\"></script>
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\"
    integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
  <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js\"
    integrity=\"sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm\"
    crossorigin=\"anonymous\"></script>
  <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\"
    integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\"
    crossorigin=\"anonymous\"></script>
  <script src=\"https://code.jquery.com/jquery-3.4.1.js\" integrity=\"sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=\"
    crossorigin=\"anonymous\"></script>

  {% framework %}
</body>

</html>", "C:\\xampp\\htdocs\\presenza/themes/presenza/layouts/default.htm", "");
    }
}
