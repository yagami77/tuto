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
        $__internal_581d25218bc496a65d445ec87f1564ad13ae421a116f1e8ad668911cb5979ef0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_581d25218bc496a65d445ec87f1564ad13ae421a116f1e8ad668911cb5979ef0->enter($__internal_581d25218bc496a65d445ec87f1564ad13ae421a116f1e8ad668911cb5979ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ef97c7e4ae08550fa421e1852568ac36fa2b2ff279912af319cbff7235109a2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef97c7e4ae08550fa421e1852568ac36fa2b2ff279912af319cbff7235109a2e->enter($__internal_ef97c7e4ae08550fa421e1852568ac36fa2b2ff279912af319cbff7235109a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_581d25218bc496a65d445ec87f1564ad13ae421a116f1e8ad668911cb5979ef0->leave($__internal_581d25218bc496a65d445ec87f1564ad13ae421a116f1e8ad668911cb5979ef0_prof);

        
        $__internal_ef97c7e4ae08550fa421e1852568ac36fa2b2ff279912af319cbff7235109a2e->leave($__internal_ef97c7e4ae08550fa421e1852568ac36fa2b2ff279912af319cbff7235109a2e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4e343ed80776b1726942ed81264a094294454c21b1212aa1a5fb72d93c51f68a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e343ed80776b1726942ed81264a094294454c21b1212aa1a5fb72d93c51f68a->enter($__internal_4e343ed80776b1726942ed81264a094294454c21b1212aa1a5fb72d93c51f68a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f74737c695b0e09c803c1e00b1686342914b2de6b80787beb5098f9be31c4b52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f74737c695b0e09c803c1e00b1686342914b2de6b80787beb5098f9be31c4b52->enter($__internal_f74737c695b0e09c803c1e00b1686342914b2de6b80787beb5098f9be31c4b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f74737c695b0e09c803c1e00b1686342914b2de6b80787beb5098f9be31c4b52->leave($__internal_f74737c695b0e09c803c1e00b1686342914b2de6b80787beb5098f9be31c4b52_prof);

        
        $__internal_4e343ed80776b1726942ed81264a094294454c21b1212aa1a5fb72d93c51f68a->leave($__internal_4e343ed80776b1726942ed81264a094294454c21b1212aa1a5fb72d93c51f68a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3b03fa1d7ab4ffb210abd84b91dc23e4020d9498572816fb095b6d994b8b5de3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b03fa1d7ab4ffb210abd84b91dc23e4020d9498572816fb095b6d994b8b5de3->enter($__internal_3b03fa1d7ab4ffb210abd84b91dc23e4020d9498572816fb095b6d994b8b5de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_05d1f35752c427a5ee6304e02f9d60b8ade0eb391d1432551749a1356fd2b9b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05d1f35752c427a5ee6304e02f9d60b8ade0eb391d1432551749a1356fd2b9b0->enter($__internal_05d1f35752c427a5ee6304e02f9d60b8ade0eb391d1432551749a1356fd2b9b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_05d1f35752c427a5ee6304e02f9d60b8ade0eb391d1432551749a1356fd2b9b0->leave($__internal_05d1f35752c427a5ee6304e02f9d60b8ade0eb391d1432551749a1356fd2b9b0_prof);

        
        $__internal_3b03fa1d7ab4ffb210abd84b91dc23e4020d9498572816fb095b6d994b8b5de3->leave($__internal_3b03fa1d7ab4ffb210abd84b91dc23e4020d9498572816fb095b6d994b8b5de3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4272a04ae44c42bb3799eb83cd616d230d3e94389c540f64e8e7866c5aa0d61d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4272a04ae44c42bb3799eb83cd616d230d3e94389c540f64e8e7866c5aa0d61d->enter($__internal_4272a04ae44c42bb3799eb83cd616d230d3e94389c540f64e8e7866c5aa0d61d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cf6229f4c7fa8766bbc538e9341ed8aa41def53b1ec28a6a20902e275085030d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf6229f4c7fa8766bbc538e9341ed8aa41def53b1ec28a6a20902e275085030d->enter($__internal_cf6229f4c7fa8766bbc538e9341ed8aa41def53b1ec28a6a20902e275085030d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cf6229f4c7fa8766bbc538e9341ed8aa41def53b1ec28a6a20902e275085030d->leave($__internal_cf6229f4c7fa8766bbc538e9341ed8aa41def53b1ec28a6a20902e275085030d_prof);

        
        $__internal_4272a04ae44c42bb3799eb83cd616d230d3e94389c540f64e8e7866c5aa0d61d->leave($__internal_4272a04ae44c42bb3799eb83cd616d230d3e94389c540f64e8e7866c5aa0d61d_prof);

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
