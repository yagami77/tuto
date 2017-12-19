<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_40d17f889cda0e9198fdd0de6a45002f4e95d20d7f1dda71b6e52967dec960e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d9142f69f2468f8858a6f0daf5f60f4d6f859ca6a7fca83dca943709d5a394e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d9142f69f2468f8858a6f0daf5f60f4d6f859ca6a7fca83dca943709d5a394e->enter($__internal_5d9142f69f2468f8858a6f0daf5f60f4d6f859ca6a7fca83dca943709d5a394e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_b21623a0892abf740e88d0781b06bb3d823138207f448ccf2cc7b67866f1f2ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b21623a0892abf740e88d0781b06bb3d823138207f448ccf2cc7b67866f1f2ce->enter($__internal_b21623a0892abf740e88d0781b06bb3d823138207f448ccf2cc7b67866f1f2ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_5d9142f69f2468f8858a6f0daf5f60f4d6f859ca6a7fca83dca943709d5a394e->leave($__internal_5d9142f69f2468f8858a6f0daf5f60f4d6f859ca6a7fca83dca943709d5a394e_prof);

        
        $__internal_b21623a0892abf740e88d0781b06bb3d823138207f448ccf2cc7b67866f1f2ce->leave($__internal_b21623a0892abf740e88d0781b06bb3d823138207f448ccf2cc7b67866f1f2ce_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b7e8d0035c12629e07a821d0f96ac85ef34617e46142665dd0d9f4af514d17ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7e8d0035c12629e07a821d0f96ac85ef34617e46142665dd0d9f4af514d17ac->enter($__internal_b7e8d0035c12629e07a821d0f96ac85ef34617e46142665dd0d9f4af514d17ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ff7483b2b1ac2d31b688c90c00f9ae8358528cf0820c2a43ebfb2495646d7af4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff7483b2b1ac2d31b688c90c00f9ae8358528cf0820c2a43ebfb2495646d7af4->enter($__internal_ff7483b2b1ac2d31b688c90c00f9ae8358528cf0820c2a43ebfb2495646d7af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ff7483b2b1ac2d31b688c90c00f9ae8358528cf0820c2a43ebfb2495646d7af4->leave($__internal_ff7483b2b1ac2d31b688c90c00f9ae8358528cf0820c2a43ebfb2495646d7af4_prof);

        
        $__internal_b7e8d0035c12629e07a821d0f96ac85ef34617e46142665dd0d9f4af514d17ac->leave($__internal_b7e8d0035c12629e07a821d0f96ac85ef34617e46142665dd0d9f4af514d17ac_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_41180bbaaef42c7625570e894f4ab44f88550658fe1a5ace6691210625ef544e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41180bbaaef42c7625570e894f4ab44f88550658fe1a5ace6691210625ef544e->enter($__internal_41180bbaaef42c7625570e894f4ab44f88550658fe1a5ace6691210625ef544e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_05b8effb04243f357feb6c339d324a218556117e451e867104e072df0b78696e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05b8effb04243f357feb6c339d324a218556117e451e867104e072df0b78696e->enter($__internal_05b8effb04243f357feb6c339d324a218556117e451e867104e072df0b78696e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_05b8effb04243f357feb6c339d324a218556117e451e867104e072df0b78696e->leave($__internal_05b8effb04243f357feb6c339d324a218556117e451e867104e072df0b78696e_prof);

        
        $__internal_41180bbaaef42c7625570e894f4ab44f88550658fe1a5ace6691210625ef544e->leave($__internal_41180bbaaef42c7625570e894f4ab44f88550658fe1a5ace6691210625ef544e_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_5569c55f283c6e3be8789f64acafce3e1e069c51b329d3192217aab7906ac9ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5569c55f283c6e3be8789f64acafce3e1e069c51b329d3192217aab7906ac9ba->enter($__internal_5569c55f283c6e3be8789f64acafce3e1e069c51b329d3192217aab7906ac9ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0caddfa5f16e636575fd4f5bf317376a0970460275b468ba3426160796f20763 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0caddfa5f16e636575fd4f5bf317376a0970460275b468ba3426160796f20763->enter($__internal_0caddfa5f16e636575fd4f5bf317376a0970460275b468ba3426160796f20763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0caddfa5f16e636575fd4f5bf317376a0970460275b468ba3426160796f20763->leave($__internal_0caddfa5f16e636575fd4f5bf317376a0970460275b468ba3426160796f20763_prof);

        
        $__internal_5569c55f283c6e3be8789f64acafce3e1e069c51b329d3192217aab7906ac9ba->leave($__internal_5569c55f283c6e3be8789f64acafce3e1e069c51b329d3192217aab7906ac9ba_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/aalrahmani/projets/tuto/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
