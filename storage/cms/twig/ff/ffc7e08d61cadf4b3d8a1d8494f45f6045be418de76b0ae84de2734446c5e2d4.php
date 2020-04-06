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
                echo "<div class=\"client-header-container\" id=\"clients\">
    <div class=\"client-title-container\">
        <img src=\"../../../../../../presenza/themes/presenza/assets/images/Presenza-icon@2x.png\" alt=\"\"
            class=\"client-title-img\">
        <h2 class=\"client-title\">ur Clients</h2>
    </div>
    <div class=\"client-subtitle-container\">
        <p>";
                // line 12
                echo twig_get_attribute($this->env, $this->source, $context["client"], "subtitle", [], "any", false, false, false, 12);
                echo "</p>
    </div>
</div>

";
                // line 16
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["client"], "user", [], "any", false, false, false, 16));
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
                    // line 17
                    echo "
<div class=\"Testimony-container\">
    <div class=\"row\">
        ";
                    // line 20
                    if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 20) % 2) == 0)) {
                        // line 21
                        echo "        <div class=\"col-12 col-lg-6 testimony-img-container\">
            <img src=\"";
                        // line 22
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "clientimg", [], "any", false, false, false, 22), "path", [], "any", false, false, false, 22), "html", null, true);
                        echo "\" class=\"testimony-img\">
        </div>
        <div class=\"col-12 col-lg-6\">
            <!-- The data-interval attribute disables auto sliding when set to false-->

            <div id=\"";
                        // line 27
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 27), "html", null, true);
                        echo "\" class=\"carousel slide carousel-fade \" data-ride=\"carousel\" data-interval=\"false\"\">
                <div class=\" carousel-inner\">
                ";
                        // line 29
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "slide", [], "any", false, false, false, 29));
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
                            // line 30
                            echo "                ";
                            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 30) == 0)) {
                                // line 31
                                echo "                <div class=\"carousel-item active\">
                    <img src=\"";
                                // line 32
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["use"], "coimg", [], "any", false, false, false, 32), "path", [], "any", false, false, false, 32), "html", null, true);
                                echo "\" alt=\"\" class=\"testimony-co-img\">
                    <div class=\"client-testimony-content\">
                        <p>";
                                // line 34
                                echo twig_get_attribute($this->env, $this->source, $context["use"], "testimony", [], "any", false, false, false, 34);
                                echo "</p>
                    </div>
                    <h5 class=\"testimony-author\">";
                                // line 36
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["use"], "author", [], "any", false, false, false, 36), "html", null, true);
                                echo "</h5>
                    <div class=\"testimony-author-title\">
                        <span>
                            ";
                                // line 39
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["use"], "author_title", [], "any", false, false, false, 39), "html", null, true);
                                echo " / ";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["use"], "coname", [], "any", false, false, false, 39), "html", null, true);
                                echo "
                        </span>
                    </div>
                </div>
                ";
                            } else {
                                // line 44
                                echo "                <div class=\"carousel-item\">
                    <img src=\"";
                                // line 45
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["use"], "coimg", [], "any", false, false, false, 45), "thumb", [0 => 100, 1 => ($context["auto"] ?? null)], "method", false, false, false, 45), "html", null, true);
                                echo "\" alt=\"\">
                    <div class=\"client-testimony-content\">
                        <p>";
                                // line 47
                                echo twig_get_attribute($this->env, $this->source, $context["use"], "testimony", [], "any", false, false, false, 47);
                                echo "</p>
                    </div>
                    <h5 class=\"testimony-author\">";
                                // line 49
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["use"], "author", [], "any", false, false, false, 49), "html", null, true);
                                echo "</h5>
                    <div class=\"testimony-author-title\">
                        <span>
                            ";
                                // line 52
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["use"], "author_title", [], "any", false, false, false, 52), "html", null, true);
                                echo " / ";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["use"], "coname", [], "any", false, false, false, 52), "html", null, true);
                                echo "
                        </span>
                    </div>
                </div>
                ";
                            }
                            // line 57
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
                        // line 58
                        echo "            </div>

            <div class=\"spacer\">
                <a class=\"carousel-control-next\" href=\"#";
                        // line 61
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 61), "html", null, true);
                        echo "\" role=\"button\" data-slide=\"next\">
                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Next</span>
                </a>
                <a class=\"carousel-control-prev\" href=\"#";
                        // line 65
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 65), "html", null, true);
                        echo "\" role=\"button\" data-slide=\"prev\">
                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Previous</span>
                </a>
            </div>
        </div>

    </div>


    ";
                    } else {
                        // line 76
                        echo "

    <div class=\"col-lg-6 order-12 order-lg-1 \">
        <!-- The data-interval attribute disables auto sliding when set to false-->

        <div id=\"";
                        // line 81
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 81), "html", null, true);
                        echo "\" class=\"carousel slide carousel-fade \" data-ride=\"carousel\" data-interval=\"false\"\">
            <div class=\" carousel-inner\">
            ";
                        // line 83
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "slide", [], "any", false, false, false, 83));
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
                            // line 84
                            echo "            ";
                            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 84) == 0)) {
                                // line 85
                                echo "            <div class=\"carousel-item active\">
                <img src=\"";
                                // line 86
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["use"], "coimg", [], "any", false, false, false, 86), "path", [], "any", false, false, false, 86), "html", null, true);
                                echo "\" alt=\"\" class=\"testimony-co-img\">
                <div class=\"client-testimony-content\">
                    <p>";
                                // line 88
                                echo twig_get_attribute($this->env, $this->source, $context["use"], "testimony", [], "any", false, false, false, 88);
                                echo "</p>
                </div>
                <h5 class=\"testimony-author\">";
                                // line 90
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["use"], "author", [], "any", false, false, false, 90), "html", null, true);
                                echo "</h5>
                <div class=\"testimony-author-title\">
                    <span>
                        ";
                                // line 93
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["use"], "author_title", [], "any", false, false, false, 93), "html", null, true);
                                echo " / ";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["use"], "coname", [], "any", false, false, false, 93), "html", null, true);
                                echo "
                    </span>
                </div>
            </div>
            ";
                            } else {
                                // line 98
                                echo "            <div class=\"carousel-item\">
                <img src=\"";
                                // line 99
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["use"], "coimg", [], "any", false, false, false, 99), "path", [], "any", false, false, false, 99), "html", null, true);
                                echo "\" alt=\"\" class=\"testimony-co-img\">
                <div class=\"client-testimony-content\">
                    <p>";
                                // line 101
                                echo twig_get_attribute($this->env, $this->source, $context["use"], "testimony", [], "any", false, false, false, 101);
                                echo "</p>
                </div>
                <h5 class=\"testimony-author\">";
                                // line 103
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["use"], "author", [], "any", false, false, false, 103), "html", null, true);
                                echo "</h5>
                <div class=\"testimony-author-title\">
                    <span>
                        ";
                                // line 106
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["use"], "author_title", [], "any", false, false, false, 106), "html", null, true);
                                echo " / ";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["use"], "coname", [], "any", false, false, false, 106), "html", null, true);
                                echo "
                    </span>
                </div>
            </div>
            ";
                            }
                            // line 111
                            echo "            ";
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
                        // line 112
                        echo "        </div>

        <div class=\"spacer\">
            <a class=\"carousel-control-next\" href=\"#";
                        // line 115
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 115), "html", null, true);
                        echo "\" role=\"button\" data-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Next</span>
            </a>
            <a class=\"carousel-control-prev\" href=\"#";
                        // line 119
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 119), "html", null, true);
                        echo "\" role=\"button\" data-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Previous</span>
            </a>
        </div>
    </div>
</div>

<div class=\"col-12 col-lg-6 order-1 order-lg-12 testimony-img-container\">
    <img src=\"";
                        // line 128
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "clientimg", [], "any", false, false, false, 128), "path", [], "any", false, false, false, 128), "html", null, true);
                        echo "\" class=\"testimony-img\">
</div>

</div>




";
                    }
                    // line 137
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
                // line 142
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
        return array (  379 => 142,  361 => 137,  349 => 128,  337 => 119,  330 => 115,  325 => 112,  311 => 111,  301 => 106,  295 => 103,  290 => 101,  285 => 99,  282 => 98,  272 => 93,  266 => 90,  261 => 88,  256 => 86,  253 => 85,  250 => 84,  233 => 83,  228 => 81,  221 => 76,  207 => 65,  200 => 61,  195 => 58,  181 => 57,  171 => 52,  165 => 49,  160 => 47,  155 => 45,  152 => 44,  142 => 39,  136 => 36,  131 => 34,  126 => 32,  123 => 31,  120 => 30,  103 => 29,  98 => 27,  90 => 22,  87 => 21,  85 => 20,  80 => 17,  63 => 16,  56 => 12,  47 => 5,  45 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set clients = __SELF__.clients %}
{% set clientname = __SELF__.property('results') %}
{% for client in clients %}
{% if client.name == clientname %}
<div class=\"client-header-container\" id=\"clients\">
    <div class=\"client-title-container\">
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
            <!-- The data-interval attribute disables auto sliding when set to false-->

            <div id=\"{{user.id}}\" class=\"carousel slide carousel-fade \" data-ride=\"carousel\" data-interval=\"false\"\">
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
                    <img src=\"{{use.coimg.thumb(100,auto)}}\" alt=\"\">
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
                <a class=\"carousel-control-next\" href=\"#{{user.id}}\" role=\"button\" data-slide=\"next\">
                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Next</span>
                </a>
                <a class=\"carousel-control-prev\" href=\"#{{user.id}}\" role=\"button\" data-slide=\"prev\">
                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Previous</span>
                </a>
            </div>
        </div>

    </div>


    {% else %}


    <div class=\"col-lg-6 order-12 order-lg-1 \">
        <!-- The data-interval attribute disables auto sliding when set to false-->

        <div id=\"{{user.id}}\" class=\"carousel slide carousel-fade \" data-ride=\"carousel\" data-interval=\"false\"\">
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
            <a class=\"carousel-control-next\" href=\"#{{user.id}}\" role=\"button\" data-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Next</span>
            </a>
            <a class=\"carousel-control-prev\" href=\"#{{user.id}}\" role=\"button\" data-slide=\"prev\">
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
