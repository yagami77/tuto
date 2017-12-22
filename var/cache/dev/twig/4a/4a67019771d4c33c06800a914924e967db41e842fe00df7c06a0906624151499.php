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
        $__internal_c64af709f9971f56fc80d3f6e848a15f8b4184e7cfaf8eacfd72b3e47080a4e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c64af709f9971f56fc80d3f6e848a15f8b4184e7cfaf8eacfd72b3e47080a4e4->enter($__internal_c64af709f9971f56fc80d3f6e848a15f8b4184e7cfaf8eacfd72b3e47080a4e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_59db6a19907f2a0064fb273b91632aa5aaeb741c00b39ab299c4b58b4dd98ec0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59db6a19907f2a0064fb273b91632aa5aaeb741c00b39ab299c4b58b4dd98ec0->enter($__internal_59db6a19907f2a0064fb273b91632aa5aaeb741c00b39ab299c4b58b4dd98ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c64af709f9971f56fc80d3f6e848a15f8b4184e7cfaf8eacfd72b3e47080a4e4->leave($__internal_c64af709f9971f56fc80d3f6e848a15f8b4184e7cfaf8eacfd72b3e47080a4e4_prof);

        
        $__internal_59db6a19907f2a0064fb273b91632aa5aaeb741c00b39ab299c4b58b4dd98ec0->leave($__internal_59db6a19907f2a0064fb273b91632aa5aaeb741c00b39ab299c4b58b4dd98ec0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_542bbe973ff838246ae3d15b3595b09cdd96534444a4d859551b788047af6970 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_542bbe973ff838246ae3d15b3595b09cdd96534444a4d859551b788047af6970->enter($__internal_542bbe973ff838246ae3d15b3595b09cdd96534444a4d859551b788047af6970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_49ae22374f311fa5c0f15a2fc5491c740ef51887b35c5513357692d71bcdc07b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49ae22374f311fa5c0f15a2fc5491c740ef51887b35c5513357692d71bcdc07b->enter($__internal_49ae22374f311fa5c0f15a2fc5491c740ef51887b35c5513357692d71bcdc07b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_49ae22374f311fa5c0f15a2fc5491c740ef51887b35c5513357692d71bcdc07b->leave($__internal_49ae22374f311fa5c0f15a2fc5491c740ef51887b35c5513357692d71bcdc07b_prof);

        
        $__internal_542bbe973ff838246ae3d15b3595b09cdd96534444a4d859551b788047af6970->leave($__internal_542bbe973ff838246ae3d15b3595b09cdd96534444a4d859551b788047af6970_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_57633f8e451a465ebf30b5b67ec2cd3397323c6e010e1b96fd10ac350c274f94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57633f8e451a465ebf30b5b67ec2cd3397323c6e010e1b96fd10ac350c274f94->enter($__internal_57633f8e451a465ebf30b5b67ec2cd3397323c6e010e1b96fd10ac350c274f94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e8d9593e1c86b95e43c09e53ee8a95792fb2e7f8ce6bb40ed2cd6cbf638e988a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8d9593e1c86b95e43c09e53ee8a95792fb2e7f8ce6bb40ed2cd6cbf638e988a->enter($__internal_e8d9593e1c86b95e43c09e53ee8a95792fb2e7f8ce6bb40ed2cd6cbf638e988a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e8d9593e1c86b95e43c09e53ee8a95792fb2e7f8ce6bb40ed2cd6cbf638e988a->leave($__internal_e8d9593e1c86b95e43c09e53ee8a95792fb2e7f8ce6bb40ed2cd6cbf638e988a_prof);

        
        $__internal_57633f8e451a465ebf30b5b67ec2cd3397323c6e010e1b96fd10ac350c274f94->leave($__internal_57633f8e451a465ebf30b5b67ec2cd3397323c6e010e1b96fd10ac350c274f94_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf3950cf96a24a67563b3db38ab4b64c5b5b3978cd637e0341f5e352b657395b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf3950cf96a24a67563b3db38ab4b64c5b5b3978cd637e0341f5e352b657395b->enter($__internal_cf3950cf96a24a67563b3db38ab4b64c5b5b3978cd637e0341f5e352b657395b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7d11da04cce40a263c7b66cb158b1b12e384a53f66a8c80f79aadaba1a84f806 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d11da04cce40a263c7b66cb158b1b12e384a53f66a8c80f79aadaba1a84f806->enter($__internal_7d11da04cce40a263c7b66cb158b1b12e384a53f66a8c80f79aadaba1a84f806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_7d11da04cce40a263c7b66cb158b1b12e384a53f66a8c80f79aadaba1a84f806->leave($__internal_7d11da04cce40a263c7b66cb158b1b12e384a53f66a8c80f79aadaba1a84f806_prof);

        
        $__internal_cf3950cf96a24a67563b3db38ab4b64c5b5b3978cd637e0341f5e352b657395b->leave($__internal_cf3950cf96a24a67563b3db38ab4b64c5b5b3978cd637e0341f5e352b657395b_prof);

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
