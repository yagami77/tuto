<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3af4a99c1cb655a4825f0a6e01551d674b52d52b622e47d73e3845cb1496152a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_429999f5e741914660ceae90763b28a9a00b31e9892fa0494c8a6e70d33309ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_429999f5e741914660ceae90763b28a9a00b31e9892fa0494c8a6e70d33309ea->enter($__internal_429999f5e741914660ceae90763b28a9a00b31e9892fa0494c8a6e70d33309ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8e414534798725c12d183c47d07e4f061d58748fc79b41431dccd2a0390ff3bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e414534798725c12d183c47d07e4f061d58748fc79b41431dccd2a0390ff3bb->enter($__internal_8e414534798725c12d183c47d07e4f061d58748fc79b41431dccd2a0390ff3bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_429999f5e741914660ceae90763b28a9a00b31e9892fa0494c8a6e70d33309ea->leave($__internal_429999f5e741914660ceae90763b28a9a00b31e9892fa0494c8a6e70d33309ea_prof);

        
        $__internal_8e414534798725c12d183c47d07e4f061d58748fc79b41431dccd2a0390ff3bb->leave($__internal_8e414534798725c12d183c47d07e4f061d58748fc79b41431dccd2a0390ff3bb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a7f2bad66689f2dbc85e7370109fedde45c642e5990982d033fd14bd8590333e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7f2bad66689f2dbc85e7370109fedde45c642e5990982d033fd14bd8590333e->enter($__internal_a7f2bad66689f2dbc85e7370109fedde45c642e5990982d033fd14bd8590333e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9056b7dd4224bda62c9fa6dc9a14387abab83fdd526a5afe7045983f214d95aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9056b7dd4224bda62c9fa6dc9a14387abab83fdd526a5afe7045983f214d95aa->enter($__internal_9056b7dd4224bda62c9fa6dc9a14387abab83fdd526a5afe7045983f214d95aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9056b7dd4224bda62c9fa6dc9a14387abab83fdd526a5afe7045983f214d95aa->leave($__internal_9056b7dd4224bda62c9fa6dc9a14387abab83fdd526a5afe7045983f214d95aa_prof);

        
        $__internal_a7f2bad66689f2dbc85e7370109fedde45c642e5990982d033fd14bd8590333e->leave($__internal_a7f2bad66689f2dbc85e7370109fedde45c642e5990982d033fd14bd8590333e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f033c1fe47d7404ab99fa787d143b6fbd246f8f59490189e2e9a083972dc1592 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f033c1fe47d7404ab99fa787d143b6fbd246f8f59490189e2e9a083972dc1592->enter($__internal_f033c1fe47d7404ab99fa787d143b6fbd246f8f59490189e2e9a083972dc1592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e1101a60f718406eb49277c3595dc4f9920bb7cea97f84017e17cf45699c162f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1101a60f718406eb49277c3595dc4f9920bb7cea97f84017e17cf45699c162f->enter($__internal_e1101a60f718406eb49277c3595dc4f9920bb7cea97f84017e17cf45699c162f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e1101a60f718406eb49277c3595dc4f9920bb7cea97f84017e17cf45699c162f->leave($__internal_e1101a60f718406eb49277c3595dc4f9920bb7cea97f84017e17cf45699c162f_prof);

        
        $__internal_f033c1fe47d7404ab99fa787d143b6fbd246f8f59490189e2e9a083972dc1592->leave($__internal_f033c1fe47d7404ab99fa787d143b6fbd246f8f59490189e2e9a083972dc1592_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2c2a1a4c25f9763f6c73070b26ff508d5dd5272eac56e18d9550295c6c09d265 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c2a1a4c25f9763f6c73070b26ff508d5dd5272eac56e18d9550295c6c09d265->enter($__internal_2c2a1a4c25f9763f6c73070b26ff508d5dd5272eac56e18d9550295c6c09d265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6ac332c94eb71e9b2a90c997f2ccad76ed88fa73c17285e27223f1da84c316b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ac332c94eb71e9b2a90c997f2ccad76ed88fa73c17285e27223f1da84c316b3->enter($__internal_6ac332c94eb71e9b2a90c997f2ccad76ed88fa73c17285e27223f1da84c316b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6ac332c94eb71e9b2a90c997f2ccad76ed88fa73c17285e27223f1da84c316b3->leave($__internal_6ac332c94eb71e9b2a90c997f2ccad76ed88fa73c17285e27223f1da84c316b3_prof);

        
        $__internal_2c2a1a4c25f9763f6c73070b26ff508d5dd5272eac56e18d9550295c6c09d265->leave($__internal_2c2a1a4c25f9763f6c73070b26ff508d5dd5272eac56e18d9550295c6c09d265_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/aalrahmani/projets/tuto/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
