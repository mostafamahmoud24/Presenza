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
class __TwigTemplate_65b20dc0163c1496503b0828286053797e11917b7c8145ce06bfda8ada4d90d4 extends \Twig\Template
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
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
  <meta name=\"generator\" content=\"OctoberCMS\" />
  <link rel=\"icon\" type=\"image/png\" href=\"../../../../presenza/themes/presenza/assets/images/favicon.png\" />
  <link
    href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&family=Open+Sans&family=Lora:ital@1&family=Poppins:wght@300;400;500;700&display=swap\"
    rel=\"stylesheet\">
  <link href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/styles.css"]);
        echo "\" rel=\"stylesheet\" />
  <!-- <link href=\"../../../../presenza/themes/presenza/assets/css/styles.css\" rel=\"stylesheet\" /> -->
  <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" rel=\"stylesheet\"
    integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
  <script src=\"https://kit.fontawesome.com/dbcf87c66d.js\" crossorigin=\"anonymous\"></script>
  <!-- <script src=\"//cdn.jsdelivr.net/npm/afterglowplayer@1.x\"></script> -->
  <script type=\"text/javascript\" src=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/javascript/index.js"]);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/javascript/afterglow.min.js"]);
        echo "\"></script>
  <!-- <script type=\"text/javascript\" src=\"../../../../presenza/themes/presenza/assets/javascript/index.js\"></script> -->



  ";
        // line 27
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 28
        echo "</head>

<body>

  <!-- Header -->
  ";
        // line 33
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 34
        echo "
  <!-- Content -->
  <section>
    ";
        // line 37
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 38
        echo "  </section>

  <!-- Footer -->
  ";
        // line 41
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 42
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
        // line 64
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
        // line 65
        echo "  ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 66
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
        return array (  143 => 66,  139 => 65,  128 => 64,  104 => 42,  100 => 41,  95 => 38,  93 => 37,  88 => 34,  84 => 33,  77 => 28,  74 => 27,  66 => 22,  62 => 21,  53 => 15,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "C:\\xampp\\htdocs\\presenza/themes/presenza/layouts/default.htm", "");
    }
}
