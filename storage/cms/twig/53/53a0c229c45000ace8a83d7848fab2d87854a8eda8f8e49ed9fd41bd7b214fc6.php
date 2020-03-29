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
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 12)) == 2)) {
                    // line 13
                    echo "
    <div class=\"\" style=\"width: 80% !important; margin: auto;\">
        <div class=\"row mt-5\" style=\"margin-top: 150px !important; \">
            <div class=\"col-2\"></div>
            <div class=\"wedo-component-container col-4\">
                <img src=\" ";
                    // line 18
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 18)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "wedoimg", [], "any", false, false, false, 18), "path", [], "any", false, false, false, 18), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
                <h4 class=\"wedo-component-title\">";
                    // line 19
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 19)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "title", [], "any", false, false, false, 19), "html", null, true);
                    echo "</h4>
                <div class=\"wedo-component-content-container\">
                    <p class=\"wedo-component-content\">";
                    // line 21
                    echo twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 21)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[0] ?? null) : null), "content", [], "any", false, false, false, 21);
                    echo "</p>
                </div>
            </div>

            <div class=\"wedo-component-container col-4\" style=\"border-left: 1px solid rgb(165, 165, 165);\">
                <img src=\" ";
                    // line 26
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 26)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[1] ?? null) : null), "wedoimg", [], "any", false, false, false, 26), "path", [], "any", false, false, false, 26), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
                <h4 class=\"wedo-component-title\">";
                    // line 27
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 27)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[1] ?? null) : null), "title", [], "any", false, false, false, 27), "html", null, true);
                    echo "</h4>
                <div class=\"wedo-component-content-container\">
                    <p class=\"wedo-component-content\">";
                    // line 29
                    echo twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 29)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[1] ?? null) : null), "content", [], "any", false, false, false, 29);
                    echo "</p>
                </div>
            </div>
            <div class=\"col-2\"></div>
        </div>
    </div>
</div>



";
                } elseif ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,                 // line 39
$context["wedo"], "component", [], "any", false, false, false, 39)) == 3)) {
                    // line 40
                    echo "
<div class=\"\" style=\"width: 70% !important; margin: auto;\">
    <div class=\"row mt-5\" style=\"margin-top: 150px !important; \">
        <div class=\"wedo-component-container col-4\">
            <img src=\" ";
                    // line 44
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 44)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[0] ?? null) : null), "wedoimg", [], "any", false, false, false, 44), "path", [], "any", false, false, false, 44), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 45
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 45)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[0] ?? null) : null), "title", [], "any", false, false, false, 45), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 47
                    echo twig_get_attribute($this->env, $this->source, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 47)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[0] ?? null) : null), "content", [], "any", false, false, false, 47);
                    echo "</p>
            </div>
        </div>

        <div class=\"wedo-component-container col-4\" style=\"border-left: 1px solid rgb(165, 165, 165);\">
            <img src=\" ";
                    // line 52
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 52)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[1] ?? null) : null), "wedoimg", [], "any", false, false, false, 52), "path", [], "any", false, false, false, 52), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 53
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 53)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[1] ?? null) : null), "title", [], "any", false, false, false, 53), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 55
                    echo twig_get_attribute($this->env, $this->source, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 55)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[1] ?? null) : null), "content", [], "any", false, false, false, 55);
                    echo "</p>
            </div>
        </div>

        <div class=\"wedo-component-container col-4\" style=\"border-left: 1px solid rgb(165, 165, 165); \">
            <img src=\" ";
                    // line 60
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 60)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[2] ?? null) : null), "wedoimg", [], "any", false, false, false, 60), "path", [], "any", false, false, false, 60), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 61
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 61)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[2] ?? null) : null), "title", [], "any", false, false, false, 61), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 63
                    echo twig_get_attribute($this->env, $this->source, (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 63)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[2] ?? null) : null), "content", [], "any", false, false, false, 63);
                    echo "</p>
            </div>
        </div>
    </div>
</div>
</div>


";
                } elseif ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,                 // line 71
$context["wedo"], "component", [], "any", false, false, false, 71)) == 4)) {
                    // line 72
                    echo "<div class=\"\" style=\"width: 50% !important; margin: auto;\">
    <div class=\"row mt-5\">
        <div class=\"wedo-component-container col-6\" style=\"border-bottom: 1px solid rgb(165, 165, 165);\">
            <img src=\" ";
                    // line 75
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 75)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[0] ?? null) : null), "wedoimg", [], "any", false, false, false, 75), "path", [], "any", false, false, false, 75), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 76
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 76)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[0] ?? null) : null), "title", [], "any", false, false, false, 76), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 78
                    echo twig_get_attribute($this->env, $this->source, (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 78)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[0] ?? null) : null), "content", [], "any", false, false, false, 78);
                    echo "</p>
            </div>
        </div>

        <div class=\"wedo-component-container col-6\"
            style=\"border-bottom: 1px solid rgb(165, 165, 165); border-left: 1px solid rgb(165, 165, 165)\">
            <img src=\" ";
                    // line 84
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 84)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[1] ?? null) : null), "wedoimg", [], "any", false, false, false, 84), "path", [], "any", false, false, false, 84), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 85
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 85)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[1] ?? null) : null), "title", [], "any", false, false, false, 85), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 87
                    echo twig_get_attribute($this->env, $this->source, (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 87)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[1] ?? null) : null), "content", [], "any", false, false, false, 87);
                    echo "</p>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"wedo-component-container col-6\">
            <img src=\" ";
                    // line 94
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 94)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[2] ?? null) : null), "wedoimg", [], "any", false, false, false, 94), "path", [], "any", false, false, false, 94), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 95
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 95)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[2] ?? null) : null), "title", [], "any", false, false, false, 95), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 97
                    echo twig_get_attribute($this->env, $this->source, (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 97)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[2] ?? null) : null), "content", [], "any", false, false, false, 97);
                    echo "</p>
            </div>
        </div>

        <div class=\"wedo-component-container col-6\" style=\"border-left: 1px solid rgb(165, 165, 165);\">
            <img src=\" ";
                    // line 102
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 102)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[3] ?? null) : null), "wedoimg", [], "any", false, false, false, 102), "path", [], "any", false, false, false, 102), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 103
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 103)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[3] ?? null) : null), "title", [], "any", false, false, false, 103), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 105
                    echo twig_get_attribute($this->env, $this->source, (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 105)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[3] ?? null) : null), "content", [], "any", false, false, false, 105);
                    echo "</p>
            </div>
        </div>
    </div>
</div>
</div>

";
                } elseif ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,                 // line 112
$context["wedo"], "component", [], "any", false, false, false, 112)) == 5)) {
                    // line 113
                    echo "
<div class=\"\" style=\"width: 60% !important; margin: auto;\">
    <div class=\"row mt-5\">
        <div class=\"wedo-component-container col-4\" style=\"border-bottom: 1px solid rgb(165, 165, 165);\">
            <img src=\" ";
                    // line 117
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 117)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[0] ?? null) : null), "wedoimg", [], "any", false, false, false, 117), "path", [], "any", false, false, false, 117), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 118
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 118)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de[0] ?? null) : null), "title", [], "any", false, false, false, 118), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 120
                    echo twig_get_attribute($this->env, $this->source, (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 120)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[0] ?? null) : null), "content", [], "any", false, false, false, 120);
                    echo "</p>
            </div>
        </div>

        <div class=\"wedo-component-container col-4\"
            style=\"border-bottom: 1px solid rgb(165, 165, 165); border-left: 1px solid rgb(165, 165, 165);\">
            <img src=\" ";
                    // line 126
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 126)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd[1] ?? null) : null), "wedoimg", [], "any", false, false, false, 126), "path", [], "any", false, false, false, 126), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 127
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 127)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6[1] ?? null) : null), "title", [], "any", false, false, false, 127), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 129
                    echo twig_get_attribute($this->env, $this->source, (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 129)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855[1] ?? null) : null), "content", [], "any", false, false, false, 129);
                    echo "</p>
            </div>
        </div>

        <div class=\"wedo-component-container col-4\"
            style=\"border-bottom: 1px solid rgb(165, 165, 165); border-left: 1px solid rgb(165, 165, 165); \">
            <img src=\" ";
                    // line 135
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 135)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b[2] ?? null) : null), "wedoimg", [], "any", false, false, false, 135), "path", [], "any", false, false, false, 135), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 136
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 136)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f[2] ?? null) : null), "title", [], "any", false, false, false, 136), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 138
                    echo twig_get_attribute($this->env, $this->source, (($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 138)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0[2] ?? null) : null), "content", [], "any", false, false, false, 138);
                    echo "</p>
            </div>
        </div>
    </div>


    <div class=\"row\">
        <div class=\"col-2\"></div>
        <div class=\"wedo-component-container col-4\" style=\"border-left: 1px solid rgb(165, 165, 165);\">
            <img src=\" ";
                    // line 147
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 147)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55[3] ?? null) : null), "wedoimg", [], "any", false, false, false, 147), "path", [], "any", false, false, false, 147), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 148
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 148)) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a[3] ?? null) : null), "title", [], "any", false, false, false, 148), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 150
                    echo twig_get_attribute($this->env, $this->source, (($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 150)) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88[3] ?? null) : null), "content", [], "any", false, false, false, 150);
                    echo "</p>
            </div>
        </div>

        <div class=\"wedo-component-container col-4\"
            style=\"border-left: 1px solid rgb(165, 165, 165); border-right: 1px solid rgb(165, 165, 165);\">
            <img src=\" ";
                    // line 156
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 156)) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758[4] ?? null) : null), "wedoimg", [], "any", false, false, false, 156), "path", [], "any", false, false, false, 156), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 157
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 157)) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35[4] ?? null) : null), "title", [], "any", false, false, false, 157), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 159
                    echo twig_get_attribute($this->env, $this->source, (($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 159)) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b[4] ?? null) : null), "content", [], "any", false, false, false, 159);
                    echo "</p>
            </div>
        </div>
        <div class=\"col-2\"></div>
    </div>
</div>
</div>

";
                } elseif ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,                 // line 167
$context["wedo"], "component", [], "any", false, false, false, 167)) == 6)) {
                    // line 168
                    echo "
<div class=\"\" style=\"width: 60% !important; margin: auto;\">
    <div class=\"row mt-5\">
        <div class=\"wedo-component-container col-4\" style=\"border-bottom: 1px solid rgb(165, 165, 165);\">
            <img src=\" ";
                    // line 172
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 172)) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae[0] ?? null) : null), "wedoimg", [], "any", false, false, false, 172), "path", [], "any", false, false, false, 172), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 173
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 173)) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54[0] ?? null) : null), "title", [], "any", false, false, false, 173), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 175
                    echo twig_get_attribute($this->env, $this->source, (($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 175)) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f[0] ?? null) : null), "content", [], "any", false, false, false, 175);
                    echo "</p>
            </div>
        </div>

        <div class=\"wedo-component-container col-4\"
            style=\"border-bottom: 1px solid rgb(165, 165, 165); border-left: 1px solid rgb(165, 165, 165);\">
            <img src=\" ";
                    // line 181
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 181)) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327[1] ?? null) : null), "wedoimg", [], "any", false, false, false, 181), "path", [], "any", false, false, false, 181), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 182
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 182)) && is_array($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412) || $__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 instanceof ArrayAccess ? ($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412[1] ?? null) : null), "title", [], "any", false, false, false, 182), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 184
                    echo twig_get_attribute($this->env, $this->source, (($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 184)) && is_array($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9) || $__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 instanceof ArrayAccess ? ($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9[1] ?? null) : null), "content", [], "any", false, false, false, 184);
                    echo "</p>
            </div>
        </div>

        <div class=\"wedo-component-container col-4\"
            style=\"border-bottom: 1px solid rgb(165, 165, 165); border-left: 1px solid rgb(165, 165, 165); \">
            <img src=\" ";
                    // line 190
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 190)) && is_array($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e) || $__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e instanceof ArrayAccess ? ($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e[2] ?? null) : null), "wedoimg", [], "any", false, false, false, 190), "path", [], "any", false, false, false, 190), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 191
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 191)) && is_array($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5) || $__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 instanceof ArrayAccess ? ($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5[2] ?? null) : null), "title", [], "any", false, false, false, 191), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 193
                    echo twig_get_attribute($this->env, $this->source, (($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 193)) && is_array($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a) || $__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a instanceof ArrayAccess ? ($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a[2] ?? null) : null), "content", [], "any", false, false, false, 193);
                    echo "</p>
            </div>
        </div>
    </div>


    <div class=\"row\">

        <div class=\"wedo-component-container col-4\">
            <img src=\" ";
                    // line 202
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 202)) && is_array($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4) || $__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 instanceof ArrayAccess ? ($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4[3] ?? null) : null), "wedoimg", [], "any", false, false, false, 202), "path", [], "any", false, false, false, 202), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 203
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 203)) && is_array($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d) || $__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d instanceof ArrayAccess ? ($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d[3] ?? null) : null), "title", [], "any", false, false, false, 203), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 205
                    echo twig_get_attribute($this->env, $this->source, (($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 205)) && is_array($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5) || $__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 instanceof ArrayAccess ? ($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5[3] ?? null) : null), "content", [], "any", false, false, false, 205);
                    echo "</p>
            </div>
        </div>

        <div class=\"wedo-component-container col-4\" style=\"border-left: 1px solid rgb(165, 165, 165); \">
            <img src=\" ";
                    // line 210
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 210)) && is_array($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a) || $__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a instanceof ArrayAccess ? ($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a[4] ?? null) : null), "wedoimg", [], "any", false, false, false, 210), "path", [], "any", false, false, false, 210), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 211
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 211)) && is_array($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da) || $__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da instanceof ArrayAccess ? ($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da[4] ?? null) : null), "title", [], "any", false, false, false, 211), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 213
                    echo twig_get_attribute($this->env, $this->source, (($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 213)) && is_array($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38) || $__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 instanceof ArrayAccess ? ($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38[4] ?? null) : null), "content", [], "any", false, false, false, 213);
                    echo "</p>
            </div>
        </div>

        <div class=\"wedo-component-container col-4\" style=\"border-left: 1px solid rgb(165, 165, 165); \">
            <img src=\" ";
                    // line 218
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 218)) && is_array($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec) || $__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec instanceof ArrayAccess ? ($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec[5] ?? null) : null), "wedoimg", [], "any", false, false, false, 218), "path", [], "any", false, false, false, 218), "html", null, true);
                    echo "\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">";
                    // line 219
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 219)) && is_array($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574) || $__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 instanceof ArrayAccess ? ($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574[5] ?? null) : null), "title", [], "any", false, false, false, 219), "html", null, true);
                    echo "</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">";
                    // line 221
                    echo twig_get_attribute($this->env, $this->source, (($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c = twig_get_attribute($this->env, $this->source, $context["wedo"], "component", [], "any", false, false, false, 221)) && is_array($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c) || $__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c instanceof ArrayAccess ? ($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c[5] ?? null) : null), "content", [], "any", false, false, false, 221);
                    echo "</p>
            </div>
        </div>


    </div>
</div>
</div>
";
                }
                // line 230
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
        return array (  475 => 230,  463 => 221,  458 => 219,  454 => 218,  446 => 213,  441 => 211,  437 => 210,  429 => 205,  424 => 203,  420 => 202,  408 => 193,  403 => 191,  399 => 190,  390 => 184,  385 => 182,  381 => 181,  372 => 175,  367 => 173,  363 => 172,  357 => 168,  355 => 167,  344 => 159,  339 => 157,  335 => 156,  326 => 150,  321 => 148,  317 => 147,  305 => 138,  300 => 136,  296 => 135,  287 => 129,  282 => 127,  278 => 126,  269 => 120,  264 => 118,  260 => 117,  254 => 113,  252 => 112,  242 => 105,  237 => 103,  233 => 102,  225 => 97,  220 => 95,  216 => 94,  206 => 87,  201 => 85,  197 => 84,  188 => 78,  183 => 76,  179 => 75,  174 => 72,  172 => 71,  161 => 63,  156 => 61,  152 => 60,  144 => 55,  139 => 53,  135 => 52,  127 => 47,  122 => 45,  118 => 44,  112 => 40,  110 => 39,  97 => 29,  92 => 27,  88 => 26,  80 => 21,  75 => 19,  71 => 18,  64 => 13,  62 => 12,  56 => 9,  50 => 6,  47 => 5,  45 => 4,  41 => 3,  39 => 2,  37 => 1,);
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

    {% if wedo.component|length == 2 %}

    <div class=\"\" style=\"width: 80% !important; margin: auto;\">
        <div class=\"row mt-5\" style=\"margin-top: 150px !important; \">
            <div class=\"col-2\"></div>
            <div class=\"wedo-component-container col-4\">
                <img src=\" {{wedo.component[0].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
                <h4 class=\"wedo-component-title\">{{wedo.component[0].title}}</h4>
                <div class=\"wedo-component-content-container\">
                    <p class=\"wedo-component-content\">{{wedo.component[0].content|raw}}</p>
                </div>
            </div>

            <div class=\"wedo-component-container col-4\" style=\"border-left: 1px solid rgb(165, 165, 165);\">
                <img src=\" {{wedo.component[1].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
                <h4 class=\"wedo-component-title\">{{wedo.component[1].title}}</h4>
                <div class=\"wedo-component-content-container\">
                    <p class=\"wedo-component-content\">{{wedo.component[1].content|raw}}</p>
                </div>
            </div>
            <div class=\"col-2\"></div>
        </div>
    </div>
</div>



{% elseif wedo.component|length == 3 %}

<div class=\"\" style=\"width: 70% !important; margin: auto;\">
    <div class=\"row mt-5\" style=\"margin-top: 150px !important; \">
        <div class=\"wedo-component-container col-4\">
            <img src=\" {{wedo.component[0].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[0].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[0].content|raw}}</p>
            </div>
        </div>

        <div class=\"wedo-component-container col-4\" style=\"border-left: 1px solid rgb(165, 165, 165);\">
            <img src=\" {{wedo.component[1].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[1].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[1].content|raw}}</p>
            </div>
        </div>

        <div class=\"wedo-component-container col-4\" style=\"border-left: 1px solid rgb(165, 165, 165); \">
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
<div class=\"\" style=\"width: 50% !important; margin: auto;\">
    <div class=\"row mt-5\">
        <div class=\"wedo-component-container col-6\" style=\"border-bottom: 1px solid rgb(165, 165, 165);\">
            <img src=\" {{wedo.component[0].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[0].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[0].content|raw}}</p>
            </div>
        </div>

        <div class=\"wedo-component-container col-6\"
            style=\"border-bottom: 1px solid rgb(165, 165, 165); border-left: 1px solid rgb(165, 165, 165)\">
            <img src=\" {{wedo.component[1].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[1].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[1].content|raw}}</p>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"wedo-component-container col-6\">
            <img src=\" {{wedo.component[2].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[2].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[2].content|raw}}</p>
            </div>
        </div>

        <div class=\"wedo-component-container col-6\" style=\"border-left: 1px solid rgb(165, 165, 165);\">
            <img src=\" {{wedo.component[3].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[3].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[3].content|raw}}</p>
            </div>
        </div>
    </div>
</div>
</div>

{% elseif wedo.component|length == 5 %}

<div class=\"\" style=\"width: 60% !important; margin: auto;\">
    <div class=\"row mt-5\">
        <div class=\"wedo-component-container col-4\" style=\"border-bottom: 1px solid rgb(165, 165, 165);\">
            <img src=\" {{wedo.component[0].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[0].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[0].content|raw}}</p>
            </div>
        </div>

        <div class=\"wedo-component-container col-4\"
            style=\"border-bottom: 1px solid rgb(165, 165, 165); border-left: 1px solid rgb(165, 165, 165);\">
            <img src=\" {{wedo.component[1].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[1].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[1].content|raw}}</p>
            </div>
        </div>

        <div class=\"wedo-component-container col-4\"
            style=\"border-bottom: 1px solid rgb(165, 165, 165); border-left: 1px solid rgb(165, 165, 165); \">
            <img src=\" {{wedo.component[2].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[2].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[2].content|raw}}</p>
            </div>
        </div>
    </div>


    <div class=\"row\">
        <div class=\"col-2\"></div>
        <div class=\"wedo-component-container col-4\" style=\"border-left: 1px solid rgb(165, 165, 165);\">
            <img src=\" {{wedo.component[3].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[3].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[3].content|raw}}</p>
            </div>
        </div>

        <div class=\"wedo-component-container col-4\"
            style=\"border-left: 1px solid rgb(165, 165, 165); border-right: 1px solid rgb(165, 165, 165);\">
            <img src=\" {{wedo.component[4].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[4].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[4].content|raw}}</p>
            </div>
        </div>
        <div class=\"col-2\"></div>
    </div>
</div>
</div>

{% elseif wedo.component|length == 6 %}

<div class=\"\" style=\"width: 60% !important; margin: auto;\">
    <div class=\"row mt-5\">
        <div class=\"wedo-component-container col-4\" style=\"border-bottom: 1px solid rgb(165, 165, 165);\">
            <img src=\" {{wedo.component[0].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[0].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[0].content|raw}}</p>
            </div>
        </div>

        <div class=\"wedo-component-container col-4\"
            style=\"border-bottom: 1px solid rgb(165, 165, 165); border-left: 1px solid rgb(165, 165, 165);\">
            <img src=\" {{wedo.component[1].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[1].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[1].content|raw}}</p>
            </div>
        </div>

        <div class=\"wedo-component-container col-4\"
            style=\"border-bottom: 1px solid rgb(165, 165, 165); border-left: 1px solid rgb(165, 165, 165); \">
            <img src=\" {{wedo.component[2].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[2].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[2].content|raw}}</p>
            </div>
        </div>
    </div>


    <div class=\"row\">

        <div class=\"wedo-component-container col-4\">
            <img src=\" {{wedo.component[3].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[3].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[3].content|raw}}</p>
            </div>
        </div>

        <div class=\"wedo-component-container col-4\" style=\"border-left: 1px solid rgb(165, 165, 165); \">
            <img src=\" {{wedo.component[4].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[4].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[4].content|raw}}</p>
            </div>
        </div>

        <div class=\"wedo-component-container col-4\" style=\"border-left: 1px solid rgb(165, 165, 165); \">
            <img src=\" {{wedo.component[5].wedoimg.path}}\" alt=\"\" class=\"wedo-icon\">
            <h4 class=\"wedo-component-title\">{{wedo.component[5].title}}</h4>
            <div class=\"wedo-component-content-container\">
                <p class=\"wedo-component-content\">{{wedo.component[5].content|raw}}</p>
            </div>
        </div>


    </div>
</div>
</div>
{% endif %}
</div>

{% endif %}
{% endfor %}", "C:\\xampp\\htdocs\\presenza/plugins/mostafamahmoud/wedo/components/wedos/default.htm", "");
    }
}
