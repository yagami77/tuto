<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_cf162f25fa3b6f82cee69ba6f883fb7c82621dcf246f7c18429b115a3511835f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_f96e9bea0e21f93832012eebe59f502aa757d35da5de4f41ffdc9c10ec5973df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f96e9bea0e21f93832012eebe59f502aa757d35da5de4f41ffdc9c10ec5973df->enter($__internal_f96e9bea0e21f93832012eebe59f502aa757d35da5de4f41ffdc9c10ec5973df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_e941c124b54f03bb24269017dec8077fceb302376762db2ea6bc46d03c17b299 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e941c124b54f03bb24269017dec8077fceb302376762db2ea6bc46d03c17b299->enter($__internal_e941c124b54f03bb24269017dec8077fceb302376762db2ea6bc46d03c17b299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f96e9bea0e21f93832012eebe59f502aa757d35da5de4f41ffdc9c10ec5973df->leave($__internal_f96e9bea0e21f93832012eebe59f502aa757d35da5de4f41ffdc9c10ec5973df_prof);

        
        $__internal_e941c124b54f03bb24269017dec8077fceb302376762db2ea6bc46d03c17b299->leave($__internal_e941c124b54f03bb24269017dec8077fceb302376762db2ea6bc46d03c17b299_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5cd8dc5def392dcf913fb03f72b6138e314b4271a77ce0931a597d1db6d7f521 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cd8dc5def392dcf913fb03f72b6138e314b4271a77ce0931a597d1db6d7f521->enter($__internal_5cd8dc5def392dcf913fb03f72b6138e314b4271a77ce0931a597d1db6d7f521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8bf61d5660c2a2acc4bfe527196ce5dd7f23e330047bf033f7c920836b75410d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bf61d5660c2a2acc4bfe527196ce5dd7f23e330047bf033f7c920836b75410d->enter($__internal_8bf61d5660c2a2acc4bfe527196ce5dd7f23e330047bf033f7c920836b75410d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_8bf61d5660c2a2acc4bfe527196ce5dd7f23e330047bf033f7c920836b75410d->leave($__internal_8bf61d5660c2a2acc4bfe527196ce5dd7f23e330047bf033f7c920836b75410d_prof);

        
        $__internal_5cd8dc5def392dcf913fb03f72b6138e314b4271a77ce0931a597d1db6d7f521->leave($__internal_5cd8dc5def392dcf913fb03f72b6138e314b4271a77ce0931a597d1db6d7f521_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7edebfa409e2ae25e03c98755fe2bf46c5b1b4a7fd03609f7c75b2fe204b56c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7edebfa409e2ae25e03c98755fe2bf46c5b1b4a7fd03609f7c75b2fe204b56c9->enter($__internal_7edebfa409e2ae25e03c98755fe2bf46c5b1b4a7fd03609f7c75b2fe204b56c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_30b084c511667ed19e916652f257e1fd1bcc202c417f4a318e9624f6c19c96ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30b084c511667ed19e916652f257e1fd1bcc202c417f4a318e9624f6c19c96ad->enter($__internal_30b084c511667ed19e916652f257e1fd1bcc202c417f4a318e9624f6c19c96ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_30b084c511667ed19e916652f257e1fd1bcc202c417f4a318e9624f6c19c96ad->leave($__internal_30b084c511667ed19e916652f257e1fd1bcc202c417f4a318e9624f6c19c96ad_prof);

        
        $__internal_7edebfa409e2ae25e03c98755fe2bf46c5b1b4a7fd03609f7c75b2fe204b56c9->leave($__internal_7edebfa409e2ae25e03c98755fe2bf46c5b1b4a7fd03609f7c75b2fe204b56c9_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_483deacf5a7caa728fe96d3fe61e7bfb82c8f58be4171598a7385fb7ba892189 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_483deacf5a7caa728fe96d3fe61e7bfb82c8f58be4171598a7385fb7ba892189->enter($__internal_483deacf5a7caa728fe96d3fe61e7bfb82c8f58be4171598a7385fb7ba892189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dcd6bf9ebe44b8878be3dfd2bbe58278593a1491e561f8097d8d37def8a6701a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcd6bf9ebe44b8878be3dfd2bbe58278593a1491e561f8097d8d37def8a6701a->enter($__internal_dcd6bf9ebe44b8878be3dfd2bbe58278593a1491e561f8097d8d37def8a6701a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_dcd6bf9ebe44b8878be3dfd2bbe58278593a1491e561f8097d8d37def8a6701a->leave($__internal_dcd6bf9ebe44b8878be3dfd2bbe58278593a1491e561f8097d8d37def8a6701a_prof);

        
        $__internal_483deacf5a7caa728fe96d3fe61e7bfb82c8f58be4171598a7385fb7ba892189->leave($__internal_483deacf5a7caa728fe96d3fe61e7bfb82c8f58be4171598a7385fb7ba892189_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/aalrahmani/projets/tuto/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
