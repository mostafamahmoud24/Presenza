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

/* H:\xampp\htdocs\presenza/themes/presenza/layouts/default.htm */
class __TwigTemplate_86a98ebac6e247436f5b0471aaeb1facc33840b27352977e7e4457907659a9d0 extends \Twig\Template
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
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\" />
  <title>Presenza</title>
  <meta name=\"title\" content=\"Presenza\" />
  <meta name=\"description\" content=\"Presenza's website\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
  <meta name=\"generator\" content=\"OctoberCMS\" />
  <link rel=\"icon\" type=\"image/png\" href=\"../../../themes/presenza/assets/images/favicon.png\" />
  <link
    href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&family=Open+Sans&family=Lora:ital@1&family=Poppins:wght@300;400;500;700&display=swap\"
    rel=\"stylesheet\">
  <!-- <link href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/styles.css"]);
        echo "\" rel=\"stylesheet\" /> -->
  <link href=\"../../../../presenza/themes/presenza/assets/css/styles.css\" rel=\"stylesheet\" />
  <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" rel=\"stylesheet\"
    integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
  <script src=\"https://kit.fontawesome.com/dbcf87c66d.js\" crossorigin=\"anonymous\"></script>
  <script src=\"//cdn.jsdelivr.net/npm/afterglowplayer@1.x\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/javascript/index.js"]);
        echo "\"></script>
  <!-- <script type=\"text/javascript\" src=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/javascript/afterglow.min.js"]);
        echo "\"></script> -->
  <!-- <script type=\"text/javascript\" src=\"../../../../presenza/themes/presenza/assets/javascript/index.js\"></script> -->



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
  <!-- <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\"
    integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\"> -->
  <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js\"
    integrity=\"sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm\"
    crossorigin=\"anonymous\"></script>
  <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\"
    integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\"
    crossorigin=\"anonymous\"></script>
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
  <!-- <script src=\"https://code.jquery.com/jquery-3.4.1.js\" integrity=\"sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=\"
    crossorigin=\"anonymous\"></script> -->

  ";
        // line 65
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 66
        echo "  ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 67
        echo "</body>

</html>";
    }

    public function getTemplateName()
    {
        return "H:\\xampp\\htdocs\\presenza/themes/presenza/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 67,  140 => 66,  129 => 65,  105 => 43,  101 => 42,  96 => 39,  94 => 38,  89 => 35,  85 => 34,  78 => 29,  75 => 28,  67 => 23,  63 => 22,  54 => 16,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "H:\\xampp\\htdocs\\presenza/themes/presenza/layouts/default.htm", "");
    }
}
