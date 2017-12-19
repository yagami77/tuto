<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1878275fdbc32b660cfbee6afea5d6e15c55adb100b0dbddcb4be415750c22a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2270796903910cf9d5f985f07ca938c25a390f29a441c72d438ebcd5469900bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2270796903910cf9d5f985f07ca938c25a390f29a441c72d438ebcd5469900bd->enter($__internal_2270796903910cf9d5f985f07ca938c25a390f29a441c72d438ebcd5469900bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_e9c3495dc14b474dfbd946cc29a26d28d7a21f2cdf63b2071e0efb7d1becdc07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9c3495dc14b474dfbd946cc29a26d28d7a21f2cdf63b2071e0efb7d1becdc07->enter($__internal_e9c3495dc14b474dfbd946cc29a26d28d7a21f2cdf63b2071e0efb7d1becdc07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2270796903910cf9d5f985f07ca938c25a390f29a441c72d438ebcd5469900bd->leave($__internal_2270796903910cf9d5f985f07ca938c25a390f29a441c72d438ebcd5469900bd_prof);

        
        $__internal_e9c3495dc14b474dfbd946cc29a26d28d7a21f2cdf63b2071e0efb7d1becdc07->leave($__internal_e9c3495dc14b474dfbd946cc29a26d28d7a21f2cdf63b2071e0efb7d1becdc07_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_38be7b4fe386475c055bc87ce1d0942470790412ce725527348f49776e23ad32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38be7b4fe386475c055bc87ce1d0942470790412ce725527348f49776e23ad32->enter($__internal_38be7b4fe386475c055bc87ce1d0942470790412ce725527348f49776e23ad32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5a34559d6547e22ce173e5eb1ada46caee796e36f563014197336a1011695501 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a34559d6547e22ce173e5eb1ada46caee796e36f563014197336a1011695501->enter($__internal_5a34559d6547e22ce173e5eb1ada46caee796e36f563014197336a1011695501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_5a34559d6547e22ce173e5eb1ada46caee796e36f563014197336a1011695501->leave($__internal_5a34559d6547e22ce173e5eb1ada46caee796e36f563014197336a1011695501_prof);

        
        $__internal_38be7b4fe386475c055bc87ce1d0942470790412ce725527348f49776e23ad32->leave($__internal_38be7b4fe386475c055bc87ce1d0942470790412ce725527348f49776e23ad32_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_630d1549704a052bdb17ef80521bdde3f4f32578167010a419bf0a0abbb6e817 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_630d1549704a052bdb17ef80521bdde3f4f32578167010a419bf0a0abbb6e817->enter($__internal_630d1549704a052bdb17ef80521bdde3f4f32578167010a419bf0a0abbb6e817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c26f2263176232b670212a4810354c1b456c62cb021a971fab2ec9590c3bec8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c26f2263176232b670212a4810354c1b456c62cb021a971fab2ec9590c3bec8e->enter($__internal_c26f2263176232b670212a4810354c1b456c62cb021a971fab2ec9590c3bec8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c26f2263176232b670212a4810354c1b456c62cb021a971fab2ec9590c3bec8e->leave($__internal_c26f2263176232b670212a4810354c1b456c62cb021a971fab2ec9590c3bec8e_prof);

        
        $__internal_630d1549704a052bdb17ef80521bdde3f4f32578167010a419bf0a0abbb6e817->leave($__internal_630d1549704a052bdb17ef80521bdde3f4f32578167010a419bf0a0abbb6e817_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_281dc9911d1ea71f73ab4e1d034a94510bd2c03e99285f4758c0d2d6179bd961 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_281dc9911d1ea71f73ab4e1d034a94510bd2c03e99285f4758c0d2d6179bd961->enter($__internal_281dc9911d1ea71f73ab4e1d034a94510bd2c03e99285f4758c0d2d6179bd961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_64507bec2b6c07838271d38df407468c583749938c2e4c4b7078ee16bbd65dbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64507bec2b6c07838271d38df407468c583749938c2e4c4b7078ee16bbd65dbd->enter($__internal_64507bec2b6c07838271d38df407468c583749938c2e4c4b7078ee16bbd65dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_64507bec2b6c07838271d38df407468c583749938c2e4c4b7078ee16bbd65dbd->leave($__internal_64507bec2b6c07838271d38df407468c583749938c2e4c4b7078ee16bbd65dbd_prof);

        
        $__internal_281dc9911d1ea71f73ab4e1d034a94510bd2c03e99285f4758c0d2d6179bd961->leave($__internal_281dc9911d1ea71f73ab4e1d034a94510bd2c03e99285f4758c0d2d6179bd961_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/aalrahmani/projets/tuto/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
