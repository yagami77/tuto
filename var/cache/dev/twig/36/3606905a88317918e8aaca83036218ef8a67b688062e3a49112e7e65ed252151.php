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
        $__internal_e8f84a42fbcaa789da8278b793bc80b85d3d896a7ac1efc220efe6a77d0aa8ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8f84a42fbcaa789da8278b793bc80b85d3d896a7ac1efc220efe6a77d0aa8ae->enter($__internal_e8f84a42fbcaa789da8278b793bc80b85d3d896a7ac1efc220efe6a77d0aa8ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_edb0e35c980664e292e9966a8ffb6598c279949746174eb5ccff69aff696df11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edb0e35c980664e292e9966a8ffb6598c279949746174eb5ccff69aff696df11->enter($__internal_edb0e35c980664e292e9966a8ffb6598c279949746174eb5ccff69aff696df11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8f84a42fbcaa789da8278b793bc80b85d3d896a7ac1efc220efe6a77d0aa8ae->leave($__internal_e8f84a42fbcaa789da8278b793bc80b85d3d896a7ac1efc220efe6a77d0aa8ae_prof);

        
        $__internal_edb0e35c980664e292e9966a8ffb6598c279949746174eb5ccff69aff696df11->leave($__internal_edb0e35c980664e292e9966a8ffb6598c279949746174eb5ccff69aff696df11_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d726a7a7f2cf727c6adfa12585ab9f2a8f6a1e08bfff1ff915211244762a0681 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d726a7a7f2cf727c6adfa12585ab9f2a8f6a1e08bfff1ff915211244762a0681->enter($__internal_d726a7a7f2cf727c6adfa12585ab9f2a8f6a1e08bfff1ff915211244762a0681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_748e980810a49c760603ee6113d7dccdc6e5397f4996c00a897e85ee3b0bee94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_748e980810a49c760603ee6113d7dccdc6e5397f4996c00a897e85ee3b0bee94->enter($__internal_748e980810a49c760603ee6113d7dccdc6e5397f4996c00a897e85ee3b0bee94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_748e980810a49c760603ee6113d7dccdc6e5397f4996c00a897e85ee3b0bee94->leave($__internal_748e980810a49c760603ee6113d7dccdc6e5397f4996c00a897e85ee3b0bee94_prof);

        
        $__internal_d726a7a7f2cf727c6adfa12585ab9f2a8f6a1e08bfff1ff915211244762a0681->leave($__internal_d726a7a7f2cf727c6adfa12585ab9f2a8f6a1e08bfff1ff915211244762a0681_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3b1cc1f26ab0146356d7307b5620de0b470334346c682a67a2d398c855e0c2cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b1cc1f26ab0146356d7307b5620de0b470334346c682a67a2d398c855e0c2cd->enter($__internal_3b1cc1f26ab0146356d7307b5620de0b470334346c682a67a2d398c855e0c2cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_813c418b0242aa534c95719d7dab79818a96f7696b77886cbcf8f45a939fd4ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_813c418b0242aa534c95719d7dab79818a96f7696b77886cbcf8f45a939fd4ed->enter($__internal_813c418b0242aa534c95719d7dab79818a96f7696b77886cbcf8f45a939fd4ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_813c418b0242aa534c95719d7dab79818a96f7696b77886cbcf8f45a939fd4ed->leave($__internal_813c418b0242aa534c95719d7dab79818a96f7696b77886cbcf8f45a939fd4ed_prof);

        
        $__internal_3b1cc1f26ab0146356d7307b5620de0b470334346c682a67a2d398c855e0c2cd->leave($__internal_3b1cc1f26ab0146356d7307b5620de0b470334346c682a67a2d398c855e0c2cd_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9559b5f805b0666c77f0ea392c473366db4e38e0ebe08a6cc0d274a7ce30f541 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9559b5f805b0666c77f0ea392c473366db4e38e0ebe08a6cc0d274a7ce30f541->enter($__internal_9559b5f805b0666c77f0ea392c473366db4e38e0ebe08a6cc0d274a7ce30f541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_09f8462c45b4aa522efaf9ea7132cfd8a5f1af1de84abb3015e565b465f27e0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09f8462c45b4aa522efaf9ea7132cfd8a5f1af1de84abb3015e565b465f27e0c->enter($__internal_09f8462c45b4aa522efaf9ea7132cfd8a5f1af1de84abb3015e565b465f27e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_09f8462c45b4aa522efaf9ea7132cfd8a5f1af1de84abb3015e565b465f27e0c->leave($__internal_09f8462c45b4aa522efaf9ea7132cfd8a5f1af1de84abb3015e565b465f27e0c_prof);

        
        $__internal_9559b5f805b0666c77f0ea392c473366db4e38e0ebe08a6cc0d274a7ce30f541->leave($__internal_9559b5f805b0666c77f0ea392c473366db4e38e0ebe08a6cc0d274a7ce30f541_prof);

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
