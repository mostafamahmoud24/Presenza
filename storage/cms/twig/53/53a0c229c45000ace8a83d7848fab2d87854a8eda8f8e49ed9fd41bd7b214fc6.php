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

/* C:\xampp\htdocs\presenza/plugins/mostafamahmoud/wedo/components/wedos/default.htm */
class __TwigTemplate_233d8b1b4d9fb543f8539de674493925f5b55f066321636d75a78da7b86d1bf4 extends \Twig\Template
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
        $context["wedos"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "wedos", [], "any", false, false, false, 1);
        // line 2
        $context["wedosname"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "results"], "method", false, false, false, 2);
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["wedos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["wedo"]) {
            // line 4
            if ((twig_get_attribute($this->env, $this->source, $context["wedo"], "name", [], "any", false, false, false, 4) == ($context["wedosname"] ?? null))) {
                // line 5
                echo "
<div class=\"wedo-container\" id=\"";
                // line 6
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["wedo"], "link", [], "any", false, false, false, 6), "html", null, true);
                echo "\">
    <h3 class=\"wedo-title\">What We Do</h3>
    <div class=\"wedo-content-container\">
        <p class=\"wedo-content\">";
                // line 9
                echo twig_get_attribute($this->env, $this->source, $context["wedo"], "subtitle", [], "any", false, false, false, 9);
                echo "</p>
    </div>

    ";
                // line 12
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 12)) == 1)) {
                    // line 13
                    echo "
    <div class='wedo-grid-container1'>
        <div class=\"row\">

            <div class=\"col col-md-1 col-xl-4\"></div>

            <div class=\"wedo-component-container col-12 col-md-10 col-xl-4\">
                <img src=\" ";
                    // line 20
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 20)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "wedoimg", [], "any", false, false, false, 20), "path", [], "any", false, false, false, 20), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
                <h4 class=\"wedo-component-title\">";
                    // line 21
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 21)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "title", [], "any", false, false, false, 21), "html", null, true);
                    echo "</h4>
                <div class=\"wedo-component-content-container\">
                    <p class=\"wedo-component-content\">";
                    // line 23
                    echo twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 23)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[0] ?? null) : null), "content", [], "any", false, false, false, 23);
                    echo "</p>
                </div>
            </div>

            <div class=\"col col-md-1 col-xl-4\"></div>
        </div>
    </div>
</div>

";
                } elseif ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,                 // line 32
$context["wedo"], "component", [], "any", false, false, false, 32)) == 2)) {
                    // line 33
                    echo "
<div class='wedo-grid-container2'>
    <div class=\"row\">
        <div class=\"col col-xl-2 col-md-0\"></div>
        <div class=\"wedo-component-container col-sm-12 col-12 col-xl-4 col-md-6\">
            <img src=\" ";
                    // line 38
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 38)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[0] ?? null) : null), "wedoimg", [], "any", false, false, false, 38), "path", [], "any", false, false, false, 38), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 39
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 39)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[0] ?? null) : null), "title", [], "any", false, false, false, 39), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 41
                    echo twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 41)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[0] ?? null) : null), "content", [], "any", false, false, false, 41);
                    echo "</p>
            </div>
        </div>

        <div class=\"wedo-component-container2 col-sm-12 col-12 col-xl-4 col col-md-6\">
            <img src=\" ";
                    // line 46
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 46)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[1] ?? null) : null), "wedoimg", [], "any", false, false, false, 46), "path", [], "any", false, false, false, 46), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 47
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 47)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[1] ?? null) : null), "title", [], "any", false, false, false, 47), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 49
                    echo twig_get_attribute($this->env, $this->source, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 49)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[1] ?? null) : null), "content", [], "any", false, false, false, 49);
                    echo "</p>
            </div>
        </div>
        <div class=\"col col-xl-2 col-md-0\"></div>
    </div>
</div>



";
                } elseif ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,                 // line 58
$context["wedo"], "component", [], "any", false, false, false, 58)) == 3)) {
                    // line 59
                    echo "
<div class='wedo-grid-container3'>
    <div class=\"row\">
        <div class=\"wedo-component-container col-12 col-md-12 col-lg-4\">
            <img src=\" ";
                    // line 63
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 63)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[0] ?? null) : null), "wedoimg", [], "any", false, false, false, 63), "path", [], "any", false, false, false, 63), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 64
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 64)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[0] ?? null) : null), "title", [], "any", false, false, false, 64), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 66
                    echo twig_get_attribute($this->env, $this->source, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 66)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[0] ?? null) : null), "content", [], "any", false, false, false, 66);
                    echo "</p>
            </div>
        </div>

        <div class=\"wedo-component-container3 col-12 col-md-12 col-lg-4\">
            <img src=\" ";
                    // line 71
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 71)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[1] ?? null) : null), "wedoimg", [], "any", false, false, false, 71), "path", [], "any", false, false, false, 71), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 72
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 72)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[1] ?? null) : null), "title", [], "any", false, false, false, 72), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 74
                    echo twig_get_attribute($this->env, $this->source, (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 74)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[1] ?? null) : null), "content", [], "any", false, false, false, 74);
                    echo "</p>
            </div>
        </div>

        <div class=\"wedo-component-container4 col-12 col-md-12 col-lg-4\">
            <img src=\" ";
                    // line 79
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 79)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[2] ?? null) : null), "wedoimg", [], "any", false, false, false, 79), "path", [], "any", false, false, false, 79), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 80
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 80)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[2] ?? null) : null), "title", [], "any", false, false, false, 80), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 82
                    echo twig_get_attribute($this->env, $this->source, (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 82)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[2] ?? null) : null), "content", [], "any", false, false, false, 82);
                    echo "</p>
            </div>
        </div>
    </div>
</div>
</div>


";
                } elseif ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,                 // line 90
$context["wedo"], "component", [], "any", false, false, false, 90)) == 4)) {
                    // line 91
                    echo "<div class='wedo-grid-container4'>
    <div class=\"row\">
        <div class=\"col col-xl-2 col-md-0\"></div>
        <div class=\"wedo-component-container5 col-sm-12 col-12 col-xl-4 col-md-6\">
            <img src=\" ";
                    // line 95
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 95)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[0] ?? null) : null), "wedoimg", [], "any", false, false, false, 95), "path", [], "any", false, false, false, 95), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 96
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 96)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[0] ?? null) : null), "title", [], "any", false, false, false, 96), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 98
                    echo twig_get_attribute($this->env, $this->source, (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 98)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[0] ?? null) : null), "content", [], "any", false, false, false, 98);
                    echo "</p>
            </div>
        </div>

        <div class=\"wedo-component-container6 col-sm-12 col-12 col-xl-4 col-md-6\">
            <img src=\" ";
                    // line 103
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 103)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[1] ?? null) : null), "wedoimg", [], "any", false, false, false, 103), "path", [], "any", false, false, false, 103), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 104
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 104)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[1] ?? null) : null), "title", [], "any", false, false, false, 104), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 106
                    echo twig_get_attribute($this->env, $this->source, (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 106)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[1] ?? null) : null), "content", [], "any", false, false, false, 106);
                    echo "</p>
            </div>
        </div>
        <div class=\"col col-xl-2 col-md-0\"></div>
    </div>

    <div class=\"row\">
        <div class=\"col col-xl-2 col-md-0\"></div>
        <div class=\"wedo-component-container col-sm-12 col-12 col-xl-4 col-md-6\">
            <img src=\" ";
                    // line 115
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 115)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[2] ?? null) : null), "wedoimg", [], "any", false, false, false, 115), "path", [], "any", false, false, false, 115), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 116
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 116)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[2] ?? null) : null), "title", [], "any", false, false, false, 116), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 118
                    echo twig_get_attribute($this->env, $this->source, (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 118)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[2] ?? null) : null), "content", [], "any", false, false, false, 118);
                    echo "</p>
            </div>
        </div>

        <div class=\"wedo-component-container7 col-sm-12 col-12 col-xl-4 col-md-6\">
            <img src=\" ";
                    // line 123
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 123)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[3] ?? null) : null), "wedoimg", [], "any", false, false, false, 123), "path", [], "any", false, false, false, 123), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 124
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 124)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de[3] ?? null) : null), "title", [], "any", false, false, false, 124), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 126
                    echo twig_get_attribute($this->env, $this->source, (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 126)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[3] ?? null) : null), "content", [], "any", false, false, false, 126);
                    echo "</p>
            </div>
        </div>
        <div class=\"col col-xl-2 col-md-0\"></div>
    </div>
</div>
</div>

";
                } elseif ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,                 // line 134
$context["wedo"], "component", [], "any", false, false, false, 134)) == 5)) {
                    // line 135
                    echo "
<div class='wedo-grid-container5'>
    <div class=\"row\">
        <div class=\"wedo-component-container col-12 col-md-12 col-lg-4\">
            <img src=\" ";
                    // line 139
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 139)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd[0] ?? null) : null), "wedoimg", [], "any", false, false, false, 139), "path", [], "any", false, false, false, 139), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 140
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 140)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6[0] ?? null) : null), "title", [], "any", false, false, false, 140), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 142
                    echo twig_get_attribute($this->env, $this->source, (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 142)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855[0] ?? null) : null), "content", [], "any", false, false, false, 142);
                    echo "</p>
            </div>
        </div>

        <div class=\"wedo-component-container8 col-12 col-md-12 col-lg-4\">
            <img src=\" ";
                    // line 147
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 147)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b[1] ?? null) : null), "wedoimg", [], "any", false, false, false, 147), "path", [], "any", false, false, false, 147), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 148
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 148)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f[1] ?? null) : null), "title", [], "any", false, false, false, 148), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 150
                    echo twig_get_attribute($this->env, $this->source, (($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 150)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0[1] ?? null) : null), "content", [], "any", false, false, false, 150);
                    echo "</p>
            </div>
        </div>

        <div class=\"wedo-component-container9 col-12 col-md-12 col-lg-4\">
            <img src=\" ";
                    // line 155
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 155)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55[2] ?? null) : null), "wedoimg", [], "any", false, false, false, 155), "path", [], "any", false, false, false, 155), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 156
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 156)) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a[2] ?? null) : null), "title", [], "any", false, false, false, 156), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 158
                    echo twig_get_attribute($this->env, $this->source, (($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 158)) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88[2] ?? null) : null), "content", [], "any", false, false, false, 158);
                    echo "</p>
            </div>
        </div>
    </div>


    <div class=\"row\">
        <div class=\"col col-lg-2 col-md-2\"></div>
        <div class=\"wedo-component-container10 col-12 col-md-12 col-lg-4\">
            <img src=\" ";
                    // line 167
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 167)) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758[3] ?? null) : null), "wedoimg", [], "any", false, false, false, 167), "path", [], "any", false, false, false, 167), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 168
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 168)) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35[3] ?? null) : null), "title", [], "any", false, false, false, 168), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 170
                    echo twig_get_attribute($this->env, $this->source, (($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 170)) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b[3] ?? null) : null), "content", [], "any", false, false, false, 170);
                    echo "</p>
            </div>
        </div>

        <div class=\"wedo-component-container11 col-12 col-md-12 col-lg-4\">
            <img src=\" ";
                    // line 175
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 175)) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae[4] ?? null) : null), "wedoimg", [], "any", false, false, false, 175), "path", [], "any", false, false, false, 175), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 176
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 176)) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54[4] ?? null) : null), "title", [], "any", false, false, false, 176), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 178
                    echo twig_get_attribute($this->env, $this->source, (($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 178)) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f[4] ?? null) : null), "content", [], "any", false, false, false, 178);
                    echo "</p>
            </div>
        </div>
        <div class=\"col col-lg-2 col-md-2\"></div>
    </div>
</div>
</div>

";
                } elseif ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,                 // line 186
$context["wedo"], "component", [], "any", false, false, false, 186)) == 6)) {
                    // line 187
                    echo "
<div class='wedo-grid-container5'>
    <div class=\"row\">
        <div class=\"wedo-component-container12 col-12 col-md-12 col-lg-4\">
            <img src=\" ";
                    // line 191
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 191)) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327[0] ?? null) : null), "wedoimg", [], "any", false, false, false, 191), "path", [], "any", false, false, false, 191), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 192
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 192)) && is_array($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412) || $__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 instanceof ArrayAccess ? ($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412[0] ?? null) : null), "title", [], "any", false, false, false, 192), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 194
                    echo twig_get_attribute($this->env, $this->source, (($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 194)) && is_array($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9) || $__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 instanceof ArrayAccess ? ($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9[0] ?? null) : null), "content", [], "any", false, false, false, 194);
                    echo "</p>
            </div>
        </div>

        <div class=\"wedo-component-container13 col-12 col-md-12 col-lg-4\">
            <img src=\" ";
                    // line 199
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 199)) && is_array($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e) || $__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e instanceof ArrayAccess ? ($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e[1] ?? null) : null), "wedoimg", [], "any", false, false, false, 199), "path", [], "any", false, false, false, 199), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 200
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 200)) && is_array($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5) || $__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 instanceof ArrayAccess ? ($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5[1] ?? null) : null), "title", [], "any", false, false, false, 200), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 202
                    echo twig_get_attribute($this->env, $this->source, (($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 202)) && is_array($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a) || $__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a instanceof ArrayAccess ? ($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a[1] ?? null) : null), "content", [], "any", false, false, false, 202);
                    echo "</p>
            </div>
        </div>

        <div class=\"wedo-component-container13 col-12 col-md-12 col-lg-4\">
            <img src=\" ";
                    // line 207
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 207)) && is_array($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4) || $__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 instanceof ArrayAccess ? ($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4[2] ?? null) : null), "wedoimg", [], "any", false, false, false, 207), "path", [], "any", false, false, false, 207), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 208
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 208)) && is_array($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d) || $__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d instanceof ArrayAccess ? ($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d[2] ?? null) : null), "title", [], "any", false, false, false, 208), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 210
                    echo twig_get_attribute($this->env, $this->source, (($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 210)) && is_array($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5) || $__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 instanceof ArrayAccess ? ($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5[2] ?? null) : null), "content", [], "any", false, false, false, 210);
                    echo "</p>
            </div>
        </div>
    </div>


    <div class=\"row\">

        <div class=\"wedo-component-container col-12 col-md-12 col-lg-4\">
            <img src=\" ";
                    // line 219
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 219)) && is_array($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a) || $__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a instanceof ArrayAccess ? ($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a[3] ?? null) : null), "wedoimg", [], "any", false, false, false, 219), "path", [], "any", false, false, false, 219), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 220
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 220)) && is_array($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da) || $__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da instanceof ArrayAccess ? ($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da[3] ?? null) : null), "title", [], "any", false, false, false, 220), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 222
                    echo twig_get_attribute($this->env, $this->source, (($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 222)) && is_array($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38) || $__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 instanceof ArrayAccess ? ($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38[3] ?? null) : null), "content", [], "any", false, false, false, 222);
                    echo "</p>
            </div>
        </div>

        <div class=\"wedo-component-container14 col-12 col-md-12 col-lg-4\">
            <img src=\" ";
                    // line 227
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 227)) && is_array($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec) || $__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec instanceof ArrayAccess ? ($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec[4] ?? null) : null), "wedoimg", [], "any", false, false, false, 227), "path", [], "any", false, false, false, 227), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 228
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 228)) && is_array($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574) || $__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 instanceof ArrayAccess ? ($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574[4] ?? null) : null), "title", [], "any", false, false, false, 228), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 230
                    echo twig_get_attribute($this->env, $this->source, (($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 230)) && is_array($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c) || $__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c instanceof ArrayAccess ? ($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c[4] ?? null) : null), "content", [], "any", false, false, false, 230);
                    echo "</p>
            </div>
        </div>

        <div class=\"wedo-component-container14 col-12 col-md-12 col-lg-4\">
            <img src=\" ";
                    // line 235
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 235)) && is_array($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0) || $__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 instanceof ArrayAccess ? ($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0[5] ?? null) : null), "wedoimg", [], "any", false, false, false, 235), "path", [], "any", false, false, false, 235), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 236
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 236)) && is_array($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc) || $__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc instanceof ArrayAccess ? ($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc[5] ?? null) : null), "title", [], "any", false, false, false, 236), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 238
                    echo twig_get_attribute($this->env, $this->source, (($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 238)) && is_array($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd) || $__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd instanceof ArrayAccess ? ($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd[5] ?? null) : null), "content", [], "any", false, false, false, 238);
                    echo "</p>
            </div>
        </div>


    </div>
</div>
</div>


";
                } elseif ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,                 // line 248
$context["wedo"], "component", [], "any", false, false, false, 248)) == 7)) {
                    // line 249
                    echo "
<div class='wedo-grid-container5'>
    <div class=\"row\">
        <div class=\"wedo-component-container12 col-12 col-md-12 col-lg-4\">
            <img src=\" ";
                    // line 253
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 253)) && is_array($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81) || $__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 instanceof ArrayAccess ? ($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81[0] ?? null) : null), "wedoimg", [], "any", false, false, false, 253), "path", [], "any", false, false, false, 253), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 254
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 254)) && is_array($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007) || $__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 instanceof ArrayAccess ? ($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007[0] ?? null) : null), "title", [], "any", false, false, false, 254), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 256
                    echo twig_get_attribute($this->env, $this->source, (($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 256)) && is_array($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d) || $__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d instanceof ArrayAccess ? ($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d[0] ?? null) : null), "content", [], "any", false, false, false, 256);
                    echo "</p>
            </div>
        </div>

        <div class=\"wedo-component-container13 col-12 col-md-12 col-lg-4\">
            <img src=\" ";
                    // line 261
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 261)) && is_array($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba) || $__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba instanceof ArrayAccess ? ($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba[1] ?? null) : null), "wedoimg", [], "any", false, false, false, 261), "path", [], "any", false, false, false, 261), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 262
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 262)) && is_array($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49) || $__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 instanceof ArrayAccess ? ($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49[1] ?? null) : null), "title", [], "any", false, false, false, 262), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 264
                    echo twig_get_attribute($this->env, $this->source, (($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 264)) && is_array($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639) || $__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 instanceof ArrayAccess ? ($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639[1] ?? null) : null), "content", [], "any", false, false, false, 264);
                    echo "</p>
            </div>
        </div>

        <div class=\"wedo-component-container13 col-12 col-md-12 col-lg-4\">
            <img src=\" ";
                    // line 269
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 269)) && is_array($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf) || $__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf instanceof ArrayAccess ? ($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf[2] ?? null) : null), "wedoimg", [], "any", false, false, false, 269), "path", [], "any", false, false, false, 269), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 270
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 270)) && is_array($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921) || $__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 instanceof ArrayAccess ? ($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921[2] ?? null) : null), "title", [], "any", false, false, false, 270), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 272
                    echo twig_get_attribute($this->env, $this->source, (($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 272)) && is_array($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a) || $__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a instanceof ArrayAccess ? ($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a[2] ?? null) : null), "content", [], "any", false, false, false, 272);
                    echo "</p>
            </div>
        </div>
    </div>



    <div class=\"row\">

        <div class=\"wedo-component-container col-12 col-md-12 col-lg-4\">
            <img src=\" ";
                    // line 282
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 282)) && is_array($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4) || $__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 instanceof ArrayAccess ? ($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4[3] ?? null) : null), "wedoimg", [], "any", false, false, false, 282), "path", [], "any", false, false, false, 282), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 283
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 283)) && is_array($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985) || $__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 instanceof ArrayAccess ? ($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985[3] ?? null) : null), "title", [], "any", false, false, false, 283), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 285
                    echo twig_get_attribute($this->env, $this->source, (($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 285)) && is_array($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51) || $__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 instanceof ArrayAccess ? ($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51[3] ?? null) : null), "content", [], "any", false, false, false, 285);
                    echo "</p>
            </div>
        </div>

        <div class=\"wedo-component-container14 col-12 col-md-12 col-lg-4\">
            <img src=\" ";
                    // line 290
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 290)) && is_array($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a) || $__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a instanceof ArrayAccess ? ($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a[4] ?? null) : null), "wedoimg", [], "any", false, false, false, 290), "path", [], "any", false, false, false, 290), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 291
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 291)) && is_array($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762) || $__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 instanceof ArrayAccess ? ($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762[4] ?? null) : null), "title", [], "any", false, false, false, 291), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 293
                    echo twig_get_attribute($this->env, $this->source, (($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 293)) && is_array($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053) || $__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 instanceof ArrayAccess ? ($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053[4] ?? null) : null), "content", [], "any", false, false, false, 293);
                    echo "</p>
            </div>
        </div>

        <div class=\"wedo-component-container14 col-12 col-md-12 col-lg-4\">
            <img src=\" ";
                    // line 298
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 298)) && is_array($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c) || $__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c instanceof ArrayAccess ? ($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c[5] ?? null) : null), "wedoimg", [], "any", false, false, false, 298), "path", [], "any", false, false, false, 298), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 299
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 299)) && is_array($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c) || $__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c instanceof ArrayAccess ? ($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c[5] ?? null) : null), "title", [], "any", false, false, false, 299), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 301
                    echo twig_get_attribute($this->env, $this->source, (($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 301)) && is_array($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030) || $__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 instanceof ArrayAccess ? ($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030[5] ?? null) : null), "content", [], "any", false, false, false, 301);
                    echo "</p>
            </div>
        </div>


    </div>

    <div class=\"row\">
        <div class=\"col col-lg-4 col-md-4 col-md-none wedo-component-container15\"></div>

        <div class=\"wedo-component-container16 col-12 col-md-12 col-lg-4\">
            <img src=\" ";
                    // line 312
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 312)) && is_array($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8) || $__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 instanceof ArrayAccess ? ($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8[6] ?? null) : null), "wedoimg", [], "any", false, false, false, 312), "path", [], "any", false, false, false, 312), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 313
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 313)) && is_array($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86) || $__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 instanceof ArrayAccess ? ($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86[6] ?? null) : null), "title", [], "any", false, false, false, 313), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 315
                    echo twig_get_attribute($this->env, $this->source, (($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 315)) && is_array($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9) || $__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 instanceof ArrayAccess ? ($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9[6] ?? null) : null), "content", [], "any", false, false, false, 315);
                    echo "</p>
            </div>
        </div>
        <div class=\"col col-lg-4 col-md-4 wedo-component-container17\">
        </div>

    </div>
</div>

";
                } elseif ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,                 // line 324
$context["wedo"], "component", [], "any", false, false, false, 324)) == 8)) {
                    // line 325
                    echo "
<div class='wedo-grid-container5'>
    <div class=\"row\">
        <div class=\"wedo-component-container12 col-12 col-md-12 col-lg-4\">
            <img src=\" ";
                    // line 329
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 329)) && is_array($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac) || $__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac instanceof ArrayAccess ? ($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac[0] ?? null) : null), "wedoimg", [], "any", false, false, false, 329), "path", [], "any", false, false, false, 329), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 330
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 330)) && is_array($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768) || $__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 instanceof ArrayAccess ? ($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768[0] ?? null) : null), "title", [], "any", false, false, false, 330), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 332
                    echo twig_get_attribute($this->env, $this->source, (($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 332)) && is_array($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57) || $__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 instanceof ArrayAccess ? ($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57[0] ?? null) : null), "content", [], "any", false, false, false, 332);
                    echo "</p>
            </div>
        </div>

        <div class=\"wedo-component-container13 col-12 col-md-12 col-lg-4\">
            <img src=\" ";
                    // line 337
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 337)) && is_array($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898) || $__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 instanceof ArrayAccess ? ($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898[1] ?? null) : null), "wedoimg", [], "any", false, false, false, 337), "path", [], "any", false, false, false, 337), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 338
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 338)) && is_array($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283) || $__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283 instanceof ArrayAccess ? ($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283[1] ?? null) : null), "title", [], "any", false, false, false, 338), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 340
                    echo twig_get_attribute($this->env, $this->source, (($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 340)) && is_array($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a) || $__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a instanceof ArrayAccess ? ($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a[1] ?? null) : null), "content", [], "any", false, false, false, 340);
                    echo "</p>
            </div>
        </div>

        <div class=\"wedo-component-container13 col-12 col-md-12 col-lg-4\">
            <img src=\" ";
                    // line 345
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 345)) && is_array($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3) || $__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3 instanceof ArrayAccess ? ($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3[2] ?? null) : null), "wedoimg", [], "any", false, false, false, 345), "path", [], "any", false, false, false, 345), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 346
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 346)) && is_array($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4) || $__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4 instanceof ArrayAccess ? ($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4[2] ?? null) : null), "title", [], "any", false, false, false, 346), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 348
                    echo twig_get_attribute($this->env, $this->source, (($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 348)) && is_array($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9) || $__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9 instanceof ArrayAccess ? ($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9[2] ?? null) : null), "content", [], "any", false, false, false, 348);
                    echo "</p>
            </div>
        </div>
    </div>



    <div class=\"row\">

        <div class=\"wedo-component-container col-12 col-md-12 col-lg-4\">
            <img src=\" ";
                    // line 358
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 358)) && is_array($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7) || $__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7 instanceof ArrayAccess ? ($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7[3] ?? null) : null), "wedoimg", [], "any", false, false, false, 358), "path", [], "any", false, false, false, 358), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 359
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 359)) && is_array($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416) || $__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416 instanceof ArrayAccess ? ($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416[3] ?? null) : null), "title", [], "any", false, false, false, 359), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 361
                    echo twig_get_attribute($this->env, $this->source, (($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 361)) && is_array($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e) || $__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e instanceof ArrayAccess ? ($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e[3] ?? null) : null), "content", [], "any", false, false, false, 361);
                    echo "</p>
            </div>
        </div>

        <div class=\"wedo-component-container14 col-12 col-md-12 col-lg-4\">
            <img src=\" ";
                    // line 366
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 366)) && is_array($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f) || $__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f instanceof ArrayAccess ? ($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f[4] ?? null) : null), "wedoimg", [], "any", false, false, false, 366), "path", [], "any", false, false, false, 366), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 367
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 367)) && is_array($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b) || $__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b instanceof ArrayAccess ? ($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b[4] ?? null) : null), "title", [], "any", false, false, false, 367), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 369
                    echo twig_get_attribute($this->env, $this->source, (($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 369)) && is_array($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75) || $__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75 instanceof ArrayAccess ? ($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75[4] ?? null) : null), "content", [], "any", false, false, false, 369);
                    echo "</p>
            </div>
        </div>

        <div class=\"wedo-component-container14 col-12 col-md-12 col-lg-4\">
            <img src=\" ";
                    // line 374
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 374)) && is_array($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c) || $__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c instanceof ArrayAccess ? ($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c[5] ?? null) : null), "wedoimg", [], "any", false, false, false, 374), "path", [], "any", false, false, false, 374), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 375
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 375)) && is_array($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1) || $__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1 instanceof ArrayAccess ? ($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1[5] ?? null) : null), "title", [], "any", false, false, false, 375), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 377
                    echo twig_get_attribute($this->env, $this->source, (($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 377)) && is_array($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24) || $__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24 instanceof ArrayAccess ? ($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24[5] ?? null) : null), "content", [], "any", false, false, false, 377);
                    echo "</p>
            </div>
        </div>


    </div>

    <div class=\"row\">
        <div class=\"col col-lg-2 col-md-2\"></div>

        <div class=\"wedo-component-container10 col-12 col-md-12 col-lg-4\">
            <img src=\" ";
                    // line 388
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 388)) && is_array($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850) || $__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850 instanceof ArrayAccess ? ($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850[6] ?? null) : null), "wedoimg", [], "any", false, false, false, 388), "path", [], "any", false, false, false, 388), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 389
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 389)) && is_array($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34) || $__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34 instanceof ArrayAccess ? ($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34[6] ?? null) : null), "title", [], "any", false, false, false, 389), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 391
                    echo twig_get_attribute($this->env, $this->source, (($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 391)) && is_array($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df) || $__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df instanceof ArrayAccess ? ($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df[6] ?? null) : null), "content", [], "any", false, false, false, 391);
                    echo "</p>
            </div>
        </div>
        <div class=\"wedo-component-container16 col-12 col-md-12 col-lg-4\">
            <img src=\" ";
                    // line 395
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 395)) && is_array($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4) || $__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4 instanceof ArrayAccess ? ($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4[7] ?? null) : null), "wedoimg", [], "any", false, false, false, 395), "path", [], "any", false, false, false, 395), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 396
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 396)) && is_array($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36) || $__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36 instanceof ArrayAccess ? ($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36[7] ?? null) : null), "title", [], "any", false, false, false, 396), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 398
                    echo twig_get_attribute($this->env, $this->source, (($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 398)) && is_array($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b) || $__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b instanceof ArrayAccess ? ($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b[7] ?? null) : null), "content", [], "any", false, false, false, 398);
                    echo "</p>
            </div>
        </div>
        <div class=\"col col-lg-2 col-md-2\">
        </div>
    </div>
</div>

";
                } elseif ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,                 // line 406
$context["wedo"], "component", [], "any", false, false, false, 406)) == 9)) {
                    // line 407
                    echo "
<div class='wedo-grid-container5'>
    <div class=\"row\">
        <div class=\"wedo-component-container12 col-12 col-md-12 col-lg-4\">
            <img src=\" ";
                    // line 411
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 411)) && is_array($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e) || $__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e instanceof ArrayAccess ? ($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e[0] ?? null) : null), "wedoimg", [], "any", false, false, false, 411), "path", [], "any", false, false, false, 411), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 412
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 412)) && is_array($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7) || $__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7 instanceof ArrayAccess ? ($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7[0] ?? null) : null), "title", [], "any", false, false, false, 412), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 414
                    echo twig_get_attribute($this->env, $this->source, (($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 414)) && is_array($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606) || $__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606 instanceof ArrayAccess ? ($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606[0] ?? null) : null), "content", [], "any", false, false, false, 414);
                    echo "</p>
            </div>
        </div>

        <div class=\"wedo-component-container13 col-12 col-md-12 col-lg-4\">
            <img src=\" ";
                    // line 419
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 419)) && is_array($__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd) || $__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd instanceof ArrayAccess ? ($__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd[1] ?? null) : null), "wedoimg", [], "any", false, false, false, 419), "path", [], "any", false, false, false, 419), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 420
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 420)) && is_array($__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e) || $__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e instanceof ArrayAccess ? ($__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e[1] ?? null) : null), "title", [], "any", false, false, false, 420), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 422
                    echo twig_get_attribute($this->env, $this->source, (($__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 422)) && is_array($__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1) || $__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1 instanceof ArrayAccess ? ($__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1[1] ?? null) : null), "content", [], "any", false, false, false, 422);
                    echo "</p>
            </div>
        </div>

        <div class=\"wedo-component-container13 col-12 col-md-12 col-lg-4\">
            <img src=\" ";
                    // line 427
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 427)) && is_array($__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb) || $__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb instanceof ArrayAccess ? ($__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb[2] ?? null) : null), "wedoimg", [], "any", false, false, false, 427), "path", [], "any", false, false, false, 427), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 428
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 428)) && is_array($__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf) || $__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf instanceof ArrayAccess ? ($__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf[2] ?? null) : null), "title", [], "any", false, false, false, 428), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 430
                    echo twig_get_attribute($this->env, $this->source, (($__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 430)) && is_array($__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b) || $__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b instanceof ArrayAccess ? ($__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b[2] ?? null) : null), "content", [], "any", false, false, false, 430);
                    echo "</p>
            </div>
        </div>
    </div>



    <div class=\"row\">

        <div class=\"wedo-component-container col-12 col-md-12 col-lg-4\">
            <img src=\" ";
                    // line 440
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 440)) && is_array($__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980) || $__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980 instanceof ArrayAccess ? ($__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980[3] ?? null) : null), "wedoimg", [], "any", false, false, false, 440), "path", [], "any", false, false, false, 440), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 441
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 441)) && is_array($__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345) || $__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345 instanceof ArrayAccess ? ($__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345[3] ?? null) : null), "title", [], "any", false, false, false, 441), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 443
                    echo twig_get_attribute($this->env, $this->source, (($__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 443)) && is_array($__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3) || $__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3 instanceof ArrayAccess ? ($__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3[3] ?? null) : null), "content", [], "any", false, false, false, 443);
                    echo "</p>
            </div>
        </div>

        <div class=\"wedo-component-container14 col-12 col-md-12 col-lg-4\">
            <img src=\" ";
                    // line 448
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 448)) && is_array($__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0) || $__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0 instanceof ArrayAccess ? ($__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0[4] ?? null) : null), "wedoimg", [], "any", false, false, false, 448), "path", [], "any", false, false, false, 448), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 449
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 449)) && is_array($__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938) || $__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938 instanceof ArrayAccess ? ($__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938[4] ?? null) : null), "title", [], "any", false, false, false, 449), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 451
                    echo twig_get_attribute($this->env, $this->source, (($__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 451)) && is_array($__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3) || $__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3 instanceof ArrayAccess ? ($__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3[4] ?? null) : null), "content", [], "any", false, false, false, 451);
                    echo "</p>
            </div>
        </div>

        <div class=\"wedo-component-container14 col-12 col-md-12 col-lg-4\">
            <img src=\" ";
                    // line 456
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 456)) && is_array($__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa) || $__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa instanceof ArrayAccess ? ($__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa[5] ?? null) : null), "wedoimg", [], "any", false, false, false, 456), "path", [], "any", false, false, false, 456), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 457
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_04e2723480818cf7e4ae08c1e7380310abe34ee48600ebabbfbaca3a62b4f1fb = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 457)) && is_array($__internal_04e2723480818cf7e4ae08c1e7380310abe34ee48600ebabbfbaca3a62b4f1fb) || $__internal_04e2723480818cf7e4ae08c1e7380310abe34ee48600ebabbfbaca3a62b4f1fb instanceof ArrayAccess ? ($__internal_04e2723480818cf7e4ae08c1e7380310abe34ee48600ebabbfbaca3a62b4f1fb[5] ?? null) : null), "title", [], "any", false, false, false, 457), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 459
                    echo twig_get_attribute($this->env, $this->source, (($__internal_9dfe9126eb6cb3d8182bbdebdcbf291354ce41935a4d52134757b624790fe26c = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 459)) && is_array($__internal_9dfe9126eb6cb3d8182bbdebdcbf291354ce41935a4d52134757b624790fe26c) || $__internal_9dfe9126eb6cb3d8182bbdebdcbf291354ce41935a4d52134757b624790fe26c instanceof ArrayAccess ? ($__internal_9dfe9126eb6cb3d8182bbdebdcbf291354ce41935a4d52134757b624790fe26c[5] ?? null) : null), "content", [], "any", false, false, false, 459);
                    echo "</p>
            </div>
        </div>


    </div>

    <div class=\"row\">

        <div class=\"wedo-component-container15 col-12 col-md-12 col-lg-4\">
            <img src=\" ";
                    // line 469
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_7886d104df990d4d01343e15743b569d1995f6a6a8de3ead740a6091880b629a = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 469)) && is_array($__internal_7886d104df990d4d01343e15743b569d1995f6a6a8de3ead740a6091880b629a) || $__internal_7886d104df990d4d01343e15743b569d1995f6a6a8de3ead740a6091880b629a instanceof ArrayAccess ? ($__internal_7886d104df990d4d01343e15743b569d1995f6a6a8de3ead740a6091880b629a[6] ?? null) : null), "wedoimg", [], "any", false, false, false, 469), "path", [], "any", false, false, false, 469), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 470
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_bf8548f45bc193921ffb4426690048a7605b21cb5873c3e67934670fc157bcb6 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 470)) && is_array($__internal_bf8548f45bc193921ffb4426690048a7605b21cb5873c3e67934670fc157bcb6) || $__internal_bf8548f45bc193921ffb4426690048a7605b21cb5873c3e67934670fc157bcb6 instanceof ArrayAccess ? ($__internal_bf8548f45bc193921ffb4426690048a7605b21cb5873c3e67934670fc157bcb6[6] ?? null) : null), "title", [], "any", false, false, false, 470), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 472
                    echo twig_get_attribute($this->env, $this->source, (($__internal_d9d33b22591102d2e461af9c204c3c40751fa247b0275a5e9ac02a242b6b099b = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 472)) && is_array($__internal_d9d33b22591102d2e461af9c204c3c40751fa247b0275a5e9ac02a242b6b099b) || $__internal_d9d33b22591102d2e461af9c204c3c40751fa247b0275a5e9ac02a242b6b099b instanceof ArrayAccess ? ($__internal_d9d33b22591102d2e461af9c204c3c40751fa247b0275a5e9ac02a242b6b099b[6] ?? null) : null), "content", [], "any", false, false, false, 472);
                    echo "</p>
            </div>
        </div>

        <div class=\"wedo-component-container16 col-12 col-md-12 col-lg-4\">
            <img src=\" ";
                    // line 477
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_eed548cde44c216c917d86f1b41aeead16364f508b904d138a9861b48cf18526 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 477)) && is_array($__internal_eed548cde44c216c917d86f1b41aeead16364f508b904d138a9861b48cf18526) || $__internal_eed548cde44c216c917d86f1b41aeead16364f508b904d138a9861b48cf18526 instanceof ArrayAccess ? ($__internal_eed548cde44c216c917d86f1b41aeead16364f508b904d138a9861b48cf18526[7] ?? null) : null), "wedoimg", [], "any", false, false, false, 477), "path", [], "any", false, false, false, 477), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 478
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_69673c0dda0724bda92ca0f89665181eb299815d5bf0d9166a7fa457f623049f = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 478)) && is_array($__internal_69673c0dda0724bda92ca0f89665181eb299815d5bf0d9166a7fa457f623049f) || $__internal_69673c0dda0724bda92ca0f89665181eb299815d5bf0d9166a7fa457f623049f instanceof ArrayAccess ? ($__internal_69673c0dda0724bda92ca0f89665181eb299815d5bf0d9166a7fa457f623049f[7] ?? null) : null), "title", [], "any", false, false, false, 478), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 480
                    echo twig_get_attribute($this->env, $this->source, (($__internal_98e7c66b1d8077f0adf5874b6a626a0256df01315d35d9e34fe7dbdf2b1f397c = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 480)) && is_array($__internal_98e7c66b1d8077f0adf5874b6a626a0256df01315d35d9e34fe7dbdf2b1f397c) || $__internal_98e7c66b1d8077f0adf5874b6a626a0256df01315d35d9e34fe7dbdf2b1f397c instanceof ArrayAccess ? ($__internal_98e7c66b1d8077f0adf5874b6a626a0256df01315d35d9e34fe7dbdf2b1f397c[7] ?? null) : null), "content", [], "any", false, false, false, 480);
                    echo "</p>
            </div>
        </div>

        <div class=\"wedo-component-container16 col-12 col-md-12 col-lg-4\">
            <img src=\" ";
                    // line 485
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_b34f576c9690a300f94652a12516183f72eacabacea74206fd0ebac5164ede74 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 485)) && is_array($__internal_b34f576c9690a300f94652a12516183f72eacabacea74206fd0ebac5164ede74) || $__internal_b34f576c9690a300f94652a12516183f72eacabacea74206fd0ebac5164ede74 instanceof ArrayAccess ? ($__internal_b34f576c9690a300f94652a12516183f72eacabacea74206fd0ebac5164ede74[8] ?? null) : null), "wedoimg", [], "any", false, false, false, 485), "path", [], "any", false, false, false, 485), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 486
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_4a561b149f190c3cf54242a61f4c7f0df2a717b925f2c7a775371ef55c39caff = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 486)) && is_array($__internal_4a561b149f190c3cf54242a61f4c7f0df2a717b925f2c7a775371ef55c39caff) || $__internal_4a561b149f190c3cf54242a61f4c7f0df2a717b925f2c7a775371ef55c39caff instanceof ArrayAccess ? ($__internal_4a561b149f190c3cf54242a61f4c7f0df2a717b925f2c7a775371ef55c39caff[8] ?? null) : null), "title", [], "any", false, false, false, 486), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 488
                    echo twig_get_attribute($this->env, $this->source, (($__internal_7f64f85f9301de90a5b045895fc6e5587d70b65ebc68918344f8c25d458d3918 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 488)) && is_array($__internal_7f64f85f9301de90a5b045895fc6e5587d70b65ebc68918344f8c25d458d3918) || $__internal_7f64f85f9301de90a5b045895fc6e5587d70b65ebc68918344f8c25d458d3918 instanceof ArrayAccess ? ($__internal_7f64f85f9301de90a5b045895fc6e5587d70b65ebc68918344f8c25d458d3918[8] ?? null) : null), "content", [], "any", false, false, false, 488);
                    echo "</p>
            </div>
        </div>


    </div>
</div>
</div>
";
                } else {
                    // line 497
                    echo "
<h1 class=\"text-danger\" style=\"font: 50px !important;\">warning</h1>

<div class=\"container\">
    <h1 class=\"text-danger\" style=\" margin-top: 50px;;\">
        Please limit the number of Components to a minimum of 1 component and a maximum of 9 components (you can change
        the
        number of
        components from the
        What We Do plugin in your backend)
    </h1>
</div>

";
                }
                // line 511
                echo "</div>

";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['wedo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\presenza/plugins/mostafamahmoud/wedo/components/wedos/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  995 => 511,  979 => 497,  967 => 488,  962 => 486,  958 => 485,  950 => 480,  945 => 478,  941 => 477,  933 => 472,  928 => 470,  924 => 469,  911 => 459,  906 => 457,  902 => 456,  894 => 451,  889 => 449,  885 => 448,  877 => 443,  872 => 441,  868 => 440,  855 => 430,  850 => 428,  846 => 427,  838 => 422,  833 => 420,  829 => 419,  821 => 414,  816 => 412,  812 => 411,  806 => 407,  804 => 406,  793 => 398,  788 => 396,  784 => 395,  777 => 391,  772 => 389,  768 => 388,  754 => 377,  749 => 375,  745 => 374,  737 => 369,  732 => 367,  728 => 366,  720 => 361,  715 => 359,  711 => 358,  698 => 348,  693 => 346,  689 => 345,  681 => 340,  676 => 338,  672 => 337,  664 => 332,  659 => 330,  655 => 329,  649 => 325,  647 => 324,  635 => 315,  630 => 313,  626 => 312,  612 => 301,  607 => 299,  603 => 298,  595 => 293,  590 => 291,  586 => 290,  578 => 285,  573 => 283,  569 => 282,  556 => 272,  551 => 270,  547 => 269,  539 => 264,  534 => 262,  530 => 261,  522 => 256,  517 => 254,  513 => 253,  507 => 249,  505 => 248,  492 => 238,  487 => 236,  483 => 235,  475 => 230,  470 => 228,  466 => 227,  458 => 222,  453 => 220,  449 => 219,  437 => 210,  432 => 208,  428 => 207,  420 => 202,  415 => 200,  411 => 199,  403 => 194,  398 => 192,  394 => 191,  388 => 187,  386 => 186,  375 => 178,  370 => 176,  366 => 175,  358 => 170,  353 => 168,  349 => 167,  337 => 158,  332 => 156,  328 => 155,  320 => 150,  315 => 148,  311 => 147,  303 => 142,  298 => 140,  294 => 139,  288 => 135,  286 => 134,  275 => 126,  270 => 124,  266 => 123,  258 => 118,  253 => 116,  249 => 115,  237 => 106,  232 => 104,  228 => 103,  220 => 98,  215 => 96,  211 => 95,  205 => 91,  203 => 90,  192 => 82,  187 => 80,  183 => 79,  175 => 74,  170 => 72,  166 => 71,  158 => 66,  153 => 64,  149 => 63,  143 => 59,  141 => 58,  129 => 49,  124 => 47,  120 => 46,  112 => 41,  107 => 39,  103 => 38,  96 => 33,  94 => 32,  82 => 23,  77 => 21,  73 => 20,  64 => 13,  62 => 12,  56 => 9,  50 => 6,  47 => 5,  45 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set wedos = __SELF__.wedos %}
{% set wedosname = __SELF__.property('results') %}
{% for wedo in wedos %}
{% if wedo.name == wedosname %}

<div class=\"wedo-container\" id=\"{{wedo.link}}\">
    <h3 class=\"wedo-title\">What We Do</h3>
    <div class=\"wedo-content-container\">
        <p class=\"wedo-content\">{{wedo.subtitle|raw}}</p>
    </div>

    {% if wedo.component|length == 1 %}

    <div class='wedo-grid-container1'>
        <div class=\"row\">

            <div class=\"col col-md-1 col-xl-4\"></div>

            <div class=\"wedo-component-container col-12 col-md-10 col-xl-4\">
                <img src=\" {{wedo.component[0].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
                <h4 class=\"wedo-component-title\">{{wedo.component[0].title}}</h4>
                <div class=\"wedo-component-content-container\">
                    <p class=\"wedo-component-content\">{{wedo.component[0].content|raw}}</p>
                </div>
            </div>

            <div class=\"col col-md-1 col-xl-4\"></div>
        </div>
    </div>
</div>

{% elseif wedo.component|length == 2 %}

<div class='wedo-grid-container2'>
    <div class=\"row\">
        <div class=\"col col-xl-2 col-md-0\"></div>
        <div class=\"wedo-component-container col-sm-12 col-12 col-xl-4 col-md-6\">
            <img src=\" {{wedo.component[0].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[0].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[0].content|raw}}</p>
            </div>
        </div>

        <div class=\"wedo-component-container2 col-sm-12 col-12 col-xl-4 col col-md-6\">
            <img src=\" {{wedo.component[1].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[1].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[1].content|raw}}</p>
            </div>
        </div>
        <div class=\"col col-xl-2 col-md-0\"></div>
    </div>
</div>



{% elseif wedo.component|length == 3 %}

<div class='wedo-grid-container3'>
    <div class=\"row\">
        <div class=\"wedo-component-container col-12 col-md-12 col-lg-4\">
            <img src=\" {{wedo.component[0].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[0].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[0].content|raw}}</p>
            </div>
        </div>

        <div class=\"wedo-component-container3 col-12 col-md-12 col-lg-4\">
            <img src=\" {{wedo.component[1].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[1].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[1].content|raw}}</p>
            </div>
        </div>

        <div class=\"wedo-component-container4 col-12 col-md-12 col-lg-4\">
            <img src=\" {{wedo.component[2].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[2].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[2].content|raw}}</p>
            </div>
        </div>
    </div>
</div>
</div>


{% elseif wedo.component|length == 4 %}
<div class='wedo-grid-container4'>
    <div class=\"row\">
        <div class=\"col col-xl-2 col-md-0\"></div>
        <div class=\"wedo-component-container5 col-sm-12 col-12 col-xl-4 col-md-6\">
            <img src=\" {{wedo.component[0].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[0].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[0].content|raw}}</p>
            </div>
        </div>

        <div class=\"wedo-component-container6 col-sm-12 col-12 col-xl-4 col-md-6\">
            <img src=\" {{wedo.component[1].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[1].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[1].content|raw}}</p>
            </div>
        </div>
        <div class=\"col col-xl-2 col-md-0\"></div>
    </div>

    <div class=\"row\">
        <div class=\"col col-xl-2 col-md-0\"></div>
        <div class=\"wedo-component-container col-sm-12 col-12 col-xl-4 col-md-6\">
            <img src=\" {{wedo.component[2].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[2].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[2].content|raw}}</p>
            </div>
        </div>

        <div class=\"wedo-component-container7 col-sm-12 col-12 col-xl-4 col-md-6\">
            <img src=\" {{wedo.component[3].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[3].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[3].content|raw}}</p>
            </div>
        </div>
        <div class=\"col col-xl-2 col-md-0\"></div>
    </div>
</div>
</div>

{% elseif wedo.component|length == 5 %}

<div class='wedo-grid-container5'>
    <div class=\"row\">
        <div class=\"wedo-component-container col-12 col-md-12 col-lg-4\">
            <img src=\" {{wedo.component[0].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[0].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[0].content|raw}}</p>
            </div>
        </div>

        <div class=\"wedo-component-container8 col-12 col-md-12 col-lg-4\">
            <img src=\" {{wedo.component[1].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[1].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[1].content|raw}}</p>
            </div>
        </div>

        <div class=\"wedo-component-container9 col-12 col-md-12 col-lg-4\">
            <img src=\" {{wedo.component[2].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[2].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[2].content|raw}}</p>
            </div>
        </div>
    </div>


    <div class=\"row\">
        <div class=\"col col-lg-2 col-md-2\"></div>
        <div class=\"wedo-component-container10 col-12 col-md-12 col-lg-4\">
            <img src=\" {{wedo.component[3].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[3].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[3].content|raw}}</p>
            </div>
        </div>

        <div class=\"wedo-component-container11 col-12 col-md-12 col-lg-4\">
            <img src=\" {{wedo.component[4].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[4].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[4].content|raw}}</p>
            </div>
        </div>
        <div class=\"col col-lg-2 col-md-2\"></div>
    </div>
</div>
</div>

{% elseif wedo.component|length == 6 %}

<div class='wedo-grid-container5'>
    <div class=\"row\">
        <div class=\"wedo-component-container12 col-12 col-md-12 col-lg-4\">
            <img src=\" {{wedo.component[0].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[0].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[0].content|raw}}</p>
            </div>
        </div>

        <div class=\"wedo-component-container13 col-12 col-md-12 col-lg-4\">
            <img src=\" {{wedo.component[1].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[1].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[1].content|raw}}</p>
            </div>
        </div>

        <div class=\"wedo-component-container13 col-12 col-md-12 col-lg-4\">
            <img src=\" {{wedo.component[2].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[2].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[2].content|raw}}</p>
            </div>
        </div>
    </div>


    <div class=\"row\">

        <div class=\"wedo-component-container col-12 col-md-12 col-lg-4\">
            <img src=\" {{wedo.component[3].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[3].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[3].content|raw}}</p>
            </div>
        </div>

        <div class=\"wedo-component-container14 col-12 col-md-12 col-lg-4\">
            <img src=\" {{wedo.component[4].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[4].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[4].content|raw}}</p>
            </div>
        </div>

        <div class=\"wedo-component-container14 col-12 col-md-12 col-lg-4\">
            <img src=\" {{wedo.component[5].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[5].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[5].content|raw}}</p>
            </div>
        </div>


    </div>
</div>
</div>


{% elseif wedo.component|length == 7 %}

<div class='wedo-grid-container5'>
    <div class=\"row\">
        <div class=\"wedo-component-container12 col-12 col-md-12 col-lg-4\">
            <img src=\" {{wedo.component[0].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[0].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[0].content|raw}}</p>
            </div>
        </div>

        <div class=\"wedo-component-container13 col-12 col-md-12 col-lg-4\">
            <img src=\" {{wedo.component[1].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[1].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[1].content|raw}}</p>
            </div>
        </div>

        <div class=\"wedo-component-container13 col-12 col-md-12 col-lg-4\">
            <img src=\" {{wedo.component[2].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[2].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[2].content|raw}}</p>
            </div>
        </div>
    </div>



    <div class=\"row\">

        <div class=\"wedo-component-container col-12 col-md-12 col-lg-4\">
            <img src=\" {{wedo.component[3].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[3].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[3].content|raw}}</p>
            </div>
        </div>

        <div class=\"wedo-component-container14 col-12 col-md-12 col-lg-4\">
            <img src=\" {{wedo.component[4].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[4].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[4].content|raw}}</p>
            </div>
        </div>

        <div class=\"wedo-component-container14 col-12 col-md-12 col-lg-4\">
            <img src=\" {{wedo.component[5].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[5].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[5].content|raw}}</p>
            </div>
        </div>


    </div>

    <div class=\"row\">
        <div class=\"col col-lg-4 col-md-4 col-md-none wedo-component-container15\"></div>

        <div class=\"wedo-component-container16 col-12 col-md-12 col-lg-4\">
            <img src=\" {{wedo.component[6].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[6].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[6].content|raw}}</p>
            </div>
        </div>
        <div class=\"col col-lg-4 col-md-4 wedo-component-container17\">
        </div>

    </div>
</div>

{% elseif wedo.component|length == 8 %}

<div class='wedo-grid-container5'>
    <div class=\"row\">
        <div class=\"wedo-component-container12 col-12 col-md-12 col-lg-4\">
            <img src=\" {{wedo.component[0].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[0].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[0].content|raw}}</p>
            </div>
        </div>

        <div class=\"wedo-component-container13 col-12 col-md-12 col-lg-4\">
            <img src=\" {{wedo.component[1].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[1].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[1].content|raw}}</p>
            </div>
        </div>

        <div class=\"wedo-component-container13 col-12 col-md-12 col-lg-4\">
            <img src=\" {{wedo.component[2].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[2].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[2].content|raw}}</p>
            </div>
        </div>
    </div>



    <div class=\"row\">

        <div class=\"wedo-component-container col-12 col-md-12 col-lg-4\">
            <img src=\" {{wedo.component[3].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[3].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[3].content|raw}}</p>
            </div>
        </div>

        <div class=\"wedo-component-container14 col-12 col-md-12 col-lg-4\">
            <img src=\" {{wedo.component[4].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[4].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[4].content|raw}}</p>
            </div>
        </div>

        <div class=\"wedo-component-container14 col-12 col-md-12 col-lg-4\">
            <img src=\" {{wedo.component[5].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[5].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[5].content|raw}}</p>
            </div>
        </div>


    </div>

    <div class=\"row\">
        <div class=\"col col-lg-2 col-md-2\"></div>

        <div class=\"wedo-component-container10 col-12 col-md-12 col-lg-4\">
            <img src=\" {{wedo.component[6].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[6].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[6].content|raw}}</p>
            </div>
        </div>
        <div class=\"wedo-component-container16 col-12 col-md-12 col-lg-4\">
            <img src=\" {{wedo.component[7].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[7].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[7].content|raw}}</p>
            </div>
        </div>
        <div class=\"col col-lg-2 col-md-2\">
        </div>
    </div>
</div>

{% elseif wedo.component|length == 9 %}

<div class='wedo-grid-container5'>
    <div class=\"row\">
        <div class=\"wedo-component-container12 col-12 col-md-12 col-lg-4\">
            <img src=\" {{wedo.component[0].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[0].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[0].content|raw}}</p>
            </div>
        </div>

        <div class=\"wedo-component-container13 col-12 col-md-12 col-lg-4\">
            <img src=\" {{wedo.component[1].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[1].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[1].content|raw}}</p>
            </div>
        </div>

        <div class=\"wedo-component-container13 col-12 col-md-12 col-lg-4\">
            <img src=\" {{wedo.component[2].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[2].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[2].content|raw}}</p>
            </div>
        </div>
    </div>



    <div class=\"row\">

        <div class=\"wedo-component-container col-12 col-md-12 col-lg-4\">
            <img src=\" {{wedo.component[3].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[3].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[3].content|raw}}</p>
            </div>
        </div>

        <div class=\"wedo-component-container14 col-12 col-md-12 col-lg-4\">
            <img src=\" {{wedo.component[4].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[4].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[4].content|raw}}</p>
            </div>
        </div>

        <div class=\"wedo-component-container14 col-12 col-md-12 col-lg-4\">
            <img src=\" {{wedo.component[5].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[5].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[5].content|raw}}</p>
            </div>
        </div>


    </div>

    <div class=\"row\">

        <div class=\"wedo-component-container15 col-12 col-md-12 col-lg-4\">
            <img src=\" {{wedo.component[6].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[6].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[6].content|raw}}</p>
            </div>
        </div>

        <div class=\"wedo-component-container16 col-12 col-md-12 col-lg-4\">
            <img src=\" {{wedo.component[7].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[7].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[7].content|raw}}</p>
            </div>
        </div>

        <div class=\"wedo-component-container16 col-12 col-md-12 col-lg-4\">
            <img src=\" {{wedo.component[8].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[8].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[8].content|raw}}</p>
            </div>
        </div>


    </div>
</div>
</div>
{% else %}

<h1 class=\"text-danger\" style=\"font: 50px !important;\">warning</h1>

<div class=\"container\">
    <h1 class=\"text-danger\" style=\" margin-top: 50px;;\">
        Please limit the number of Components to a minimum of 1 component and a maximum of 9 components (you can change
        the
        number of
        components from the
        What We Do plugin in your backend)
    </h1>
</div>

{% endif %}
</div>

{% endif %}
{% endfor %}", "C:\\xampp\\htdocs\\presenza/plugins/mostafamahmoud/wedo/components/wedos/default.htm", "");
    }
}
