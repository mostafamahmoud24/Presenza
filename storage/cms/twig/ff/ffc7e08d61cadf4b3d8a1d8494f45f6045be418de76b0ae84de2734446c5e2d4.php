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
                echo "<div class=\"client-header-container w-100 text-center pt-4 pb-4\" id=\"clients\">
    <h2 class=\"client-title\">Our Clients</h2>
    <div class=\"client-subtitle-container\">
        <p>";
                // line 8
                echo twig_get_attribute($this->env, $this->source, $context["client"], "subtitle", [], "any", false, false, false, 8);
                echo "</p>
    </div>
</div>

";
                // line 12
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["client"], "user", [], "any", false, false, false, 12));
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
                    // line 13
                    echo "
<div class=\"Testimony-container\">
    <div class=\"row w-100 m-auto\">
        ";
                    // line 16
                    if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 16) % 2) == 0)) {
                        // line 17
                        echo "        <div class=\"col-6 h-100\" style=\"padding: 0 !important\">
            <img src=\"";
                        // line 18
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "clientimg", [], "any", false, false, false, 18), "path", [], "any", false, false, false, 18), "html", null, true);
                        echo "\" alt=\"\" style=\"height: 550px; object-fit: cover; width:100%;\">
        </div>
        <div class=\"col-6 h-100\">
            <div class=\"nav-container w-100\">
                <div class=\"spacer\" style=\"position:relative\">
                    <a class=\"carousel-control-next\" href=\"#";
                        // line 23
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 23), "html", null, true);
                        echo "\" role=\"button\" data-slide=\"next\">
                        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Next</span>
                    </a>
                    <a class=\"carousel-control-prev\" href=\"#";
                        // line 27
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 27), "html", null, true);
                        echo "\" role=\"button\" data-slide=\"prev\">
                        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Previous</span>
                    </a>
                </div>
            </div>

            <!-- The data-interval attribute disables auto sliding when set to false-->

            <div id=\"";
                        // line 36
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 36), "html", null, true);
                        echo "\" class=\"carousel slide carousel-fade \" data-ride=\"carousel\" data-interval=\"false\"
                style=\"height: 550px !important; width:100% !important\">
                <div class=\" carousel-inner\">
                    ";
                        // line 39
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "slide", [], "any", false, false, false, 39));
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
                            // line 40
                            echo "                    ";
                            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 40) == 0)) {
                                // line 41
                                echo "                    <div class=\"carousel-item active\">
                        <img src=\"";
                                // line 42
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["use"], "coimg", [], "any", false, false, false, 42), "thumb", [0 => 100, 1 => ($context["auto"] ?? null)], "method", false, false, false, 42), "html", null, true);
                                echo "\" alt=\"\">
                        <div class=\"client-testimony-content mt-4\" style=\"width: 70%;\">
                            <p>";
                                // line 44
                                echo twig_get_attribute($this->env, $this->source, $context["use"], "testimony", [], "any", false, false, false, 44);
                                echo "</p>
                        </div>
                        <h5 class=\"mt-4\">";
                                // line 46
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["use"], "author", [], "any", false, false, false, 46), "html", null, true);
                                echo "</h5>
                        <span>
                            ";
                                // line 48
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["use"], "author_title", [], "any", false, false, false, 48), "html", null, true);
                                echo " / ";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["use"], "coname", [], "any", false, false, false, 48), "html", null, true);
                                echo "
                        </span>
                    </div>
                    ";
                            } else {
                                // line 52
                                echo "                    <div class=\"carousel-item\">
                        <img src=\"";
                                // line 53
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["use"], "coimg", [], "any", false, false, false, 53), "thumb", [0 => 100, 1 => ($context["auto"] ?? null)], "method", false, false, false, 53), "html", null, true);
                                echo "\" alt=\"\">
                        <div class=\"client-testimony-content mt-4\" style=\"width: 70%;\">
                            <p>";
                                // line 55
                                echo twig_get_attribute($this->env, $this->source, $context["use"], "testimony", [], "any", false, false, false, 55);
                                echo "</p>
                        </div>
                        <h5 class=\"mt-4\">";
                                // line 57
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["use"], "author", [], "any", false, false, false, 57), "html", null, true);
                                echo "</h5>
                        <span>
                            ";
                                // line 59
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["use"], "author_title", [], "any", false, false, false, 59), "html", null, true);
                                echo " / ";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["use"], "coname", [], "any", false, false, false, 59), "html", null, true);
                                echo "
                        </span>
                    </div>
                    ";
                            }
                            // line 63
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
                        // line 64
                        echo "                </div>
            </div>
        </div>


        ";
                    } else {
                        // line 70
                        echo "

        <div class=\"col-6 h-100\">
            <div class=\"nav-container w-100\">
                <div class=\"spacer\" style=\"position:relative;\">
                    <a class=\"carousel-control-next\" href=\"#";
                        // line 75
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 75), "html", null, true);
                        echo "\" role=\"button\" data-slide=\"next\">
                        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Next</span>
                    </a>
                    <a class=\"carousel-control-prev\" href=\"#";
                        // line 79
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 79), "html", null, true);
                        echo "\" role=\"button\" data-slide=\"prev\">
                        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Previous</span>
                    </a>
                </div>
            </div>

            <!-- The data-interval attribute disables auto sliding when set to false-->


            <div id=\"";
                        // line 89
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 89), "html", null, true);
                        echo "\" class=\"carousel slide carousel-fade\" data-ride=\"carousel\" data-interval=\"false\"
                style=\"height: 550px !important; width:100% !important\">
                <div class=\" carousel-inner\">
                    ";
                        // line 92
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "slide", [], "any", false, false, false, 92));
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
                            // line 93
                            echo "                    ";
                            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 93) == 0)) {
                                // line 94
                                echo "                    <div class=\"carousel-item active\">
                        <img src=\"";
                                // line 95
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["use"], "coimg", [], "any", false, false, false, 95), "thumb", [0 => 100, 1 => ($context["auto"] ?? null)], "method", false, false, false, 95), "html", null, true);
                                echo "\" alt=\"\">
                        <div class=\"client-testimony-content mt-4\" style=\"width: 70%;\">
                            <p>";
                                // line 97
                                echo twig_get_attribute($this->env, $this->source, $context["use"], "testimony", [], "any", false, false, false, 97);
                                echo "</p>
                        </div>
                        <h5 class=\"mt-4\">";
                                // line 99
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["use"], "author", [], "any", false, false, false, 99), "html", null, true);
                                echo "</h5>
                        <span>
                            ";
                                // line 101
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["use"], "author_title", [], "any", false, false, false, 101), "html", null, true);
                                echo " / ";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["use"], "coname", [], "any", false, false, false, 101), "html", null, true);
                                echo "
                        </span>
                    </div>
                    ";
                            } else {
                                // line 105
                                echo "                    <div class=\"carousel-item\">
                        <img src=\"";
                                // line 106
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["use"], "coimg", [], "any", false, false, false, 106), "thumb", [0 => 100, 1 => ($context["auto"] ?? null)], "method", false, false, false, 106), "html", null, true);
                                echo "\" alt=\"\">
                        <div class=\"client-testimony-content mt-4\" style=\"width: 70%;\">
                            <p>";
                                // line 108
                                echo twig_get_attribute($this->env, $this->source, $context["use"], "testimony", [], "any", false, false, false, 108);
                                echo "</p>
                        </div>
                        <h5 class=\"mt-4\">";
                                // line 110
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["use"], "author", [], "any", false, false, false, 110), "html", null, true);
                                echo "</h5>
                        <span>
                            ";
                                // line 112
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["use"], "author_title", [], "any", false, false, false, 112), "html", null, true);
                                echo " / ";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["use"], "coname", [], "any", false, false, false, 112), "html", null, true);
                                echo "
                        </span>
                    </div>
                    ";
                            }
                            // line 116
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
                        // line 117
                        echo "                </div>
            </div>
        </div>
        <div class=\"col-6 h-100\" style=\"padding: 0 !important\">
            <img src=\"";
                        // line 121
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "clientimg", [], "any", false, false, false, 121), "path", [], "any", false, false, false, 121), "html", null, true);
                        echo "\" alt=\"\" style=\"height: 550px; object-fit: cover; width:100%;\">
        </div>
    </div>




    ";
                    }
                    // line 129
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
                // line 134
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
        return array (  371 => 134,  353 => 129,  342 => 121,  336 => 117,  322 => 116,  313 => 112,  308 => 110,  303 => 108,  298 => 106,  295 => 105,  286 => 101,  281 => 99,  276 => 97,  271 => 95,  268 => 94,  265 => 93,  248 => 92,  242 => 89,  229 => 79,  222 => 75,  215 => 70,  207 => 64,  193 => 63,  184 => 59,  179 => 57,  174 => 55,  169 => 53,  166 => 52,  157 => 48,  152 => 46,  147 => 44,  142 => 42,  139 => 41,  136 => 40,  119 => 39,  113 => 36,  101 => 27,  94 => 23,  86 => 18,  83 => 17,  81 => 16,  76 => 13,  59 => 12,  52 => 8,  47 => 5,  45 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set clients = __SELF__.clients %}
{% set clientname = __SELF__.property('results') %}
{% for client in clients %}
{% if client.name == clientname %}
<div class=\"client-header-container w-100 text-center pt-4 pb-4\" id=\"clients\">
    <h2 class=\"client-title\">Our Clients</h2>
    <div class=\"client-subtitle-container\">
        <p>{{client.subtitle|raw}}</p>
    </div>
</div>

{% for user in client.user %}

<div class=\"Testimony-container\">
    <div class=\"row w-100 m-auto\">
        {% if loop.index0 % 2 == 0 %}
        <div class=\"col-6 h-100\" style=\"padding: 0 !important\">
            <img src=\"{{user.clientimg.path}}\" alt=\"\" style=\"height: 550px; object-fit: cover; width:100%;\">
        </div>
        <div class=\"col-6 h-100\">
            <div class=\"nav-container w-100\">
                <div class=\"spacer\" style=\"position:relative\">
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

            <!-- The data-interval attribute disables auto sliding when set to false-->

            <div id=\"{{user.id}}\" class=\"carousel slide carousel-fade \" data-ride=\"carousel\" data-interval=\"false\"
                style=\"height: 550px !important; width:100% !important\">
                <div class=\" carousel-inner\">
                    {% for use in user.slide %}
                    {% if loop.index0 == 0 %}
                    <div class=\"carousel-item active\">
                        <img src=\"{{use.coimg.thumb(100,auto)}}\" alt=\"\">
                        <div class=\"client-testimony-content mt-4\" style=\"width: 70%;\">
                            <p>{{use.testimony|raw}}</p>
                        </div>
                        <h5 class=\"mt-4\">{{use.author}}</h5>
                        <span>
                            {{use.author_title}} / {{use.coname}}
                        </span>
                    </div>
                    {% else %}
                    <div class=\"carousel-item\">
                        <img src=\"{{use.coimg.thumb(100,auto)}}\" alt=\"\">
                        <div class=\"client-testimony-content mt-4\" style=\"width: 70%;\">
                            <p>{{use.testimony|raw}}</p>
                        </div>
                        <h5 class=\"mt-4\">{{use.author}}</h5>
                        <span>
                            {{use.author_title}} / {{use.coname}}
                        </span>
                    </div>
                    {% endif %}
                    {% endfor %}
                </div>
            </div>
        </div>


        {% else %}


        <div class=\"col-6 h-100\">
            <div class=\"nav-container w-100\">
                <div class=\"spacer\" style=\"position:relative;\">
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

            <!-- The data-interval attribute disables auto sliding when set to false-->


            <div id=\"{{user.id}}\" class=\"carousel slide carousel-fade\" data-ride=\"carousel\" data-interval=\"false\"
                style=\"height: 550px !important; width:100% !important\">
                <div class=\" carousel-inner\">
                    {% for use in user.slide %}
                    {% if loop.index0 == 0 %}
                    <div class=\"carousel-item active\">
                        <img src=\"{{use.coimg.thumb(100,auto)}}\" alt=\"\">
                        <div class=\"client-testimony-content mt-4\" style=\"width: 70%;\">
                            <p>{{use.testimony|raw}}</p>
                        </div>
                        <h5 class=\"mt-4\">{{use.author}}</h5>
                        <span>
                            {{use.author_title}} / {{use.coname}}
                        </span>
                    </div>
                    {% else %}
                    <div class=\"carousel-item\">
                        <img src=\"{{use.coimg.thumb(100,auto)}}\" alt=\"\">
                        <div class=\"client-testimony-content mt-4\" style=\"width: 70%;\">
                            <p>{{use.testimony|raw}}</p>
                        </div>
                        <h5 class=\"mt-4\">{{use.author}}</h5>
                        <span>
                            {{use.author_title}} / {{use.coname}}
                        </span>
                    </div>
                    {% endif %}
                    {% endfor %}
                </div>
            </div>
        </div>
        <div class=\"col-6 h-100\" style=\"padding: 0 !important\">
            <img src=\"{{user.clientimg.path}}\" alt=\"\" style=\"height: 550px; object-fit: cover; width:100%;\">
        </div>
    </div>




    {% endif %}

</div>


{% endfor %}


{% endif %}
{% endfor %}", "C:\\xampp\\htdocs\\presenza/plugins/mostafamahmoud/clients/components/clients/default.htm", "");
    }
}
