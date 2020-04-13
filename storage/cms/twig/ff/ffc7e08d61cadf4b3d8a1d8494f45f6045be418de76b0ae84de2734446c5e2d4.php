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

/* C:\xampp\htdocs\presenza/plugins/mostafamahmoud/clients/components/clients/default.htm */
class __TwigTemplate_8cd7087caad147250dde7c87483d256c9bc961b0bf3dba5ef7fbeaa28fee0e71 extends \Twig\Template
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
        $context["clients"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "clients", [], "any", false, false, false, 1);
        // line 2
        $context["clientname"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "results"], "method", false, false, false, 2);
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clients"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 4
            if ((twig_get_attribute($this->env, $this->source, $context["client"], "name", [], "any", false, false, false, 4) == ($context["clientname"] ?? null))) {
                // line 5
                echo "<div class=\"client-header-container\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "link", [], "any", false, false, false, 5), "html", null, true);
                echo "\">
    <div class=\"client-title-container\">
        <!-- <img src=\"../../../../../themes/presenza/assets/images/Presenza-icon@2x.png\" alt=\"\" class=\"client-title-img\"> -->
        <img src=\"../../../../../../presenza/themes/presenza/assets/images/Presenza-icon@2x.png\" alt=\"\"
            class=\"client-title-img\">
        <h2 class=\"client-title\">ur Clients</h2>
    </div>
    <div class=\"client-subtitle-container\">
        <p>";
                // line 13
                echo twig_get_attribute($this->env, $this->source, $context["client"], "subtitle", [], "any", false, false, false, 13);
                echo "</p>
    </div>
</div>

";
                // line 17
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["client"], "user", [], "any", false, false, false, 17));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                    // line 18
                    echo "
<div class=\"Testimony-container\">
    <div class=\"row\">
        ";
                    // line 21
                    if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 21) % 2) == 0)) {
                        // line 22
                        echo "        <div class=\"col-12 col-lg-6 testimony-img-container\">
            <img src=\"";
                        // line 23
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "clientimg", [], "any", false, false, false, 23), "path", [], "any", false, false, false, 23), "html", null, true);
                        echo "\" class=\"testimony-img\">
        </div>
        <div class=\"col-12 col-lg-6\">
            <!-- The data-interval attribute disables auto sliding when set to false, add class carousel-fade for fade effect on sliding-->

            <div id=\"test";
                        // line 28
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 28), "html", null, true);
                        echo "\" class=\"carousel slide\" data-ride=\"carousel\" data-touch=\"true\"
                data-interval=\"false\">
                <div class=\" carousel-inner\">
                    ";
                        // line 31
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "slide", [], "any", false, false, false, 31));
                        $context['loop'] = [
                          'parent' => $context['_parent'],
                          'index0' => 0,
                          'index'  => 1,
                          'first'  => true,
                        ];
                        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                            $length = count($context['_seq']);
                            $context['loop']['revindex0'] = $length - 1;
                            $context['loop']['revindex'] = $length;
                            $context['loop']['length'] = $length;
                            $context['loop']['last'] = 1 === $length;
                        }
                        foreach ($context['_seq'] as $context["_key"] => $context["use"]) {
                            // line 32
                            echo "                    ";
                            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 32) == 0)) {
                                // line 33
                                echo "                    <div class=\"carousel-item active\">
                        <img src=\"";
                                // line 34
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["use"], "coimg", [], "any", false, false, false, 34), "path", [], "any", false, false, false, 34), "html", null, true);
                                echo "\" alt=\"\" class=\"testimony-co-img\">
                        <div class=\"client-testimony-content\">
                            <p>";
                                // line 36
                                echo twig_get_attribute($this->env, $this->source, $context["use"], "testimony", [], "any", false, false, false, 36);
                                echo "</p>
                        </div>
                        <h5 class=\"testimony-author\">";
                                // line 38
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["use"], "author", [], "any", false, false, false, 38), "html", null, true);
                                echo "</h5>
                        <div class=\"testimony-author-title\">
                            <span>
                                ";
                                // line 41
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["use"], "author_title", [], "any", false, false, false, 41), "html", null, true);
                                echo " / ";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["use"], "coname", [], "any", false, false, false, 41), "html", null, true);
                                echo "
                            </span>
                        </div>
                    </div>
                    ";
                            } else {
                                // line 46
                                echo "                    <div class=\"carousel-item\">
                        <img src=\"";
                                // line 47
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["use"], "coimg", [], "any", false, false, false, 47), "thumb", [0 => 100, 1 => ($context["auto"] ?? null)], "method", false, false, false, 47), "html", null, true);
                                echo "\" alt=\"\" class=\"testimony-co-img\">
                        <div class=\"client-testimony-content\">
                            <p>";
                                // line 49
                                echo twig_get_attribute($this->env, $this->source, $context["use"], "testimony", [], "any", false, false, false, 49);
                                echo "</p>
                        </div>
                        <h5 class=\"testimony-author\">";
                                // line 51
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["use"], "author", [], "any", false, false, false, 51), "html", null, true);
                                echo "</h5>
                        <div class=\"testimony-author-title\">
                            <span>
                                ";
                                // line 54
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["use"], "author_title", [], "any", false, false, false, 54), "html", null, true);
                                echo " / ";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["use"], "coname", [], "any", false, false, false, 54), "html", null, true);
                                echo "
                            </span>
                        </div>
                    </div>
                    ";
                            }
                            // line 59
                            echo "                    ";
                            ++$context['loop']['index0'];
                            ++$context['loop']['index'];
                            $context['loop']['first'] = false;
                            if (isset($context['loop']['length'])) {
                                --$context['loop']['revindex0'];
                                --$context['loop']['revindex'];
                                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['use'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 60
                        echo "                </div>

                <div class=\"spacer\">
                    <a class=\"carousel-control-next\" href=\"#test";
                        // line 63
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 63), "html", null, true);
                        echo "\" role=\"button\" data-slide=\"next\">
                        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Next</span>
                    </a>
                    <a class=\"carousel-control-prev\" href=\"#test";
                        // line 67
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 67), "html", null, true);
                        echo "\" role=\"button\" data-slide=\"prev\">
                        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Previous</span>
                    </a>
                </div>
            </div>

        </div>


        ";
                    } else {
                        // line 78
                        echo "

        <div class=\"col-lg-6 order-12 order-lg-1 \">
            <!-- The data-interval attribute disables auto sliding when set to false, add class carousel-fade for fade effect on sliding-->

            <div id=\"another";
                        // line 83
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 83), "html", null, true);
                        echo "\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"false\"\">
            <div class=\" carousel-inner\">
                ";
                        // line 85
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "slide", [], "any", false, false, false, 85));
                        $context['loop'] = [
                          'parent' => $context['_parent'],
                          'index0' => 0,
                          'index'  => 1,
                          'first'  => true,
                        ];
                        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                            $length = count($context['_seq']);
                            $context['loop']['revindex0'] = $length - 1;
                            $context['loop']['revindex'] = $length;
                            $context['loop']['length'] = $length;
                            $context['loop']['last'] = 1 === $length;
                        }
                        foreach ($context['_seq'] as $context["_key"] => $context["use"]) {
                            // line 86
                            echo "                ";
                            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 86) == 0)) {
                                // line 87
                                echo "                <div class=\"carousel-item active\">
                    <img src=\"";
                                // line 88
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["use"], "coimg", [], "any", false, false, false, 88), "path", [], "any", false, false, false, 88), "html", null, true);
                                echo "\" alt=\"\" class=\"testimony-co-img\">
                    <div class=\"client-testimony-content\">
                        <p>";
                                // line 90
                                echo twig_get_attribute($this->env, $this->source, $context["use"], "testimony", [], "any", false, false, false, 90);
                                echo "</p>
                    </div>
                    <h5 class=\"testimony-author\">";
                                // line 92
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["use"], "author", [], "any", false, false, false, 92), "html", null, true);
                                echo "</h5>
                    <div class=\"testimony-author-title\">
                        <span>
                            ";
                                // line 95
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["use"], "author_title", [], "any", false, false, false, 95), "html", null, true);
                                echo " / ";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["use"], "coname", [], "any", false, false, false, 95), "html", null, true);
                                echo "
                        </span>
                    </div>
                </div>
                ";
                            } else {
                                // line 100
                                echo "                <div class=\"carousel-item\">
                    <img src=\"";
                                // line 101
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["use"], "coimg", [], "any", false, false, false, 101), "path", [], "any", false, false, false, 101), "html", null, true);
                                echo "\" alt=\"\" class=\"testimony-co-img\">
                    <div class=\"client-testimony-content\">
                        <p>";
                                // line 103
                                echo twig_get_attribute($this->env, $this->source, $context["use"], "testimony", [], "any", false, false, false, 103);
                                echo "</p>
                    </div>
                    <h5 class=\"testimony-author\">";
                                // line 105
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["use"], "author", [], "any", false, false, false, 105), "html", null, true);
                                echo "</h5>
                    <div class=\"testimony-author-title\">
                        <span>
                            ";
                                // line 108
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["use"], "author_title", [], "any", false, false, false, 108), "html", null, true);
                                echo " / ";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["use"], "coname", [], "any", false, false, false, 108), "html", null, true);
                                echo "
                        </span>
                    </div>
                </div>
                ";
                            }
                            // line 113
                            echo "                ";
                            ++$context['loop']['index0'];
                            ++$context['loop']['index'];
                            $context['loop']['first'] = false;
                            if (isset($context['loop']['length'])) {
                                --$context['loop']['revindex0'];
                                --$context['loop']['revindex'];
                                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['use'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 114
                        echo "            </div>

            <div class=\"spacer\">
                <a class=\"carousel-control-next\" href=\"#another";
                        // line 117
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 117), "html", null, true);
                        echo "\" role=\"button\" data-slide=\"next\">
                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Next</span>
                </a>
                <a class=\"carousel-control-prev\" href=\"#another";
                        // line 121
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 121), "html", null, true);
                        echo "\" role=\"button\" data-slide=\"prev\">
                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Previous</span>
                </a>
            </div>
        </div>
    </div>

    <div class=\"col-12 col-lg-6 order-1 order-lg-12 testimony-img-container\">
        <img src=\"";
                        // line 130
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "clientimg", [], "any", false, false, false, 130), "path", [], "any", false, false, false, 130), "html", null, true);
                        echo "\" class=\"testimony-img\">
    </div>

</div>




";
                    }
                    // line 139
                    echo "
</div>


";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 144
                echo "

";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\presenza/plugins/mostafamahmoud/clients/components/clients/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  383 => 144,  365 => 139,  353 => 130,  341 => 121,  334 => 117,  329 => 114,  315 => 113,  305 => 108,  299 => 105,  294 => 103,  289 => 101,  286 => 100,  276 => 95,  270 => 92,  265 => 90,  260 => 88,  257 => 87,  254 => 86,  237 => 85,  232 => 83,  225 => 78,  211 => 67,  204 => 63,  199 => 60,  185 => 59,  175 => 54,  169 => 51,  164 => 49,  159 => 47,  156 => 46,  146 => 41,  140 => 38,  135 => 36,  130 => 34,  127 => 33,  124 => 32,  107 => 31,  101 => 28,  93 => 23,  90 => 22,  88 => 21,  83 => 18,  66 => 17,  59 => 13,  47 => 5,  45 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set clients = __SELF__.clients %}
{% set clientname = __SELF__.property('results') %}
{% for client in clients %}
{% if client.name == clientname %}
<div class=\"client-header-container\" id=\"{{client.link}}\">
    <div class=\"client-title-container\">
        <!-- <img src=\"../../../../../themes/presenza/assets/images/Presenza-icon@2x.png\" alt=\"\" class=\"client-title-img\"> -->
        <img src=\"../../../../../../presenza/themes/presenza/assets/images/Presenza-icon@2x.png\" alt=\"\"
            class=\"client-title-img\">
        <h2 class=\"client-title\">ur Clients</h2>
    </div>
    <div class=\"client-subtitle-container\">
        <p>{{client.subtitle|raw}}</p>
    </div>
</div>

{% for user in client.user %}

<div class=\"Testimony-container\">
    <div class=\"row\">
        {% if loop.index0 % 2 == 0 %}
        <div class=\"col-12 col-lg-6 testimony-img-container\">
            <img src=\"{{user.clientimg.path}}\" class=\"testimony-img\">
        </div>
        <div class=\"col-12 col-lg-6\">
            <!-- The data-interval attribute disables auto sliding when set to false, add class carousel-fade for fade effect on sliding-->

            <div id=\"test{{user.id}}\" class=\"carousel slide\" data-ride=\"carousel\" data-touch=\"true\"
                data-interval=\"false\">
                <div class=\" carousel-inner\">
                    {% for use in user.slide %}
                    {% if loop.index0 == 0 %}
                    <div class=\"carousel-item active\">
                        <img src=\"{{use.coimg.path}}\" alt=\"\" class=\"testimony-co-img\">
                        <div class=\"client-testimony-content\">
                            <p>{{use.testimony|raw}}</p>
                        </div>
                        <h5 class=\"testimony-author\">{{use.author}}</h5>
                        <div class=\"testimony-author-title\">
                            <span>
                                {{use.author_title}} / {{use.coname}}
                            </span>
                        </div>
                    </div>
                    {% else %}
                    <div class=\"carousel-item\">
                        <img src=\"{{use.coimg.thumb(100,auto)}}\" alt=\"\" class=\"testimony-co-img\">
                        <div class=\"client-testimony-content\">
                            <p>{{use.testimony|raw}}</p>
                        </div>
                        <h5 class=\"testimony-author\">{{use.author}}</h5>
                        <div class=\"testimony-author-title\">
                            <span>
                                {{use.author_title}} / {{use.coname}}
                            </span>
                        </div>
                    </div>
                    {% endif %}
                    {% endfor %}
                </div>

                <div class=\"spacer\">
                    <a class=\"carousel-control-next\" href=\"#test{{user.id}}\" role=\"button\" data-slide=\"next\">
                        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Next</span>
                    </a>
                    <a class=\"carousel-control-prev\" href=\"#test{{user.id}}\" role=\"button\" data-slide=\"prev\">
                        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Previous</span>
                    </a>
                </div>
            </div>

        </div>


        {% else %}


        <div class=\"col-lg-6 order-12 order-lg-1 \">
            <!-- The data-interval attribute disables auto sliding when set to false, add class carousel-fade for fade effect on sliding-->

            <div id=\"another{{user.id}}\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"false\"\">
            <div class=\" carousel-inner\">
                {% for use in user.slide %}
                {% if loop.index0 == 0 %}
                <div class=\"carousel-item active\">
                    <img src=\"{{use.coimg.path}}\" alt=\"\" class=\"testimony-co-img\">
                    <div class=\"client-testimony-content\">
                        <p>{{use.testimony|raw}}</p>
                    </div>
                    <h5 class=\"testimony-author\">{{use.author}}</h5>
                    <div class=\"testimony-author-title\">
                        <span>
                            {{use.author_title}} / {{use.coname}}
                        </span>
                    </div>
                </div>
                {% else %}
                <div class=\"carousel-item\">
                    <img src=\"{{use.coimg.path}}\" alt=\"\" class=\"testimony-co-img\">
                    <div class=\"client-testimony-content\">
                        <p>{{use.testimony|raw}}</p>
                    </div>
                    <h5 class=\"testimony-author\">{{use.author}}</h5>
                    <div class=\"testimony-author-title\">
                        <span>
                            {{use.author_title}} / {{use.coname}}
                        </span>
                    </div>
                </div>
                {% endif %}
                {% endfor %}
            </div>

            <div class=\"spacer\">
                <a class=\"carousel-control-next\" href=\"#another{{user.id}}\" role=\"button\" data-slide=\"next\">
                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Next</span>
                </a>
                <a class=\"carousel-control-prev\" href=\"#another{{user.id}}\" role=\"button\" data-slide=\"prev\">
                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Previous</span>
                </a>
            </div>
        </div>
    </div>

    <div class=\"col-12 col-lg-6 order-1 order-lg-12 testimony-img-container\">
        <img src=\"{{user.clientimg.path}}\" class=\"testimony-img\">
    </div>

</div>




{% endif %}

</div>


{% endfor %}


{% endif %}
{% endfor %}", "C:\\xampp\\htdocs\\presenza/plugins/mostafamahmoud/clients/components/clients/default.htm", "");
    }
}
