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
        $__internal_71e75bbe26c923412d2bfa01ad06a872779311e6167207423c00acb9a7b7948c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71e75bbe26c923412d2bfa01ad06a872779311e6167207423c00acb9a7b7948c->enter($__internal_71e75bbe26c923412d2bfa01ad06a872779311e6167207423c00acb9a7b7948c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_3e63b0bd9936274d543cf80414748216392d8e691ea8f45e1a4dc762ad469728 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e63b0bd9936274d543cf80414748216392d8e691ea8f45e1a4dc762ad469728->enter($__internal_3e63b0bd9936274d543cf80414748216392d8e691ea8f45e1a4dc762ad469728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_71e75bbe26c923412d2bfa01ad06a872779311e6167207423c00acb9a7b7948c->leave($__internal_71e75bbe26c923412d2bfa01ad06a872779311e6167207423c00acb9a7b7948c_prof);

        
        $__internal_3e63b0bd9936274d543cf80414748216392d8e691ea8f45e1a4dc762ad469728->leave($__internal_3e63b0bd9936274d543cf80414748216392d8e691ea8f45e1a4dc762ad469728_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b57a977c8131404ade91df54c9a897c36749de01a7740b92f6955c69f31bf35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b57a977c8131404ade91df54c9a897c36749de01a7740b92f6955c69f31bf35->enter($__internal_7b57a977c8131404ade91df54c9a897c36749de01a7740b92f6955c69f31bf35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5feea7e6e83a9c4e444738c56620fa71f37102a6d4fd9e80a944cfca7852ec10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5feea7e6e83a9c4e444738c56620fa71f37102a6d4fd9e80a944cfca7852ec10->enter($__internal_5feea7e6e83a9c4e444738c56620fa71f37102a6d4fd9e80a944cfca7852ec10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_5feea7e6e83a9c4e444738c56620fa71f37102a6d4fd9e80a944cfca7852ec10->leave($__internal_5feea7e6e83a9c4e444738c56620fa71f37102a6d4fd9e80a944cfca7852ec10_prof);

        
        $__internal_7b57a977c8131404ade91df54c9a897c36749de01a7740b92f6955c69f31bf35->leave($__internal_7b57a977c8131404ade91df54c9a897c36749de01a7740b92f6955c69f31bf35_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_4f5606ca14cf484cf21d86d8d4137a3269f17dcd3023a7d3f4e14f37f980ae8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f5606ca14cf484cf21d86d8d4137a3269f17dcd3023a7d3f4e14f37f980ae8a->enter($__internal_4f5606ca14cf484cf21d86d8d4137a3269f17dcd3023a7d3f4e14f37f980ae8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d5f0946d4d7e64217146496adaa31256370771f7c4378f93958510aaf8eec546 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5f0946d4d7e64217146496adaa31256370771f7c4378f93958510aaf8eec546->enter($__internal_d5f0946d4d7e64217146496adaa31256370771f7c4378f93958510aaf8eec546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_d5f0946d4d7e64217146496adaa31256370771f7c4378f93958510aaf8eec546->leave($__internal_d5f0946d4d7e64217146496adaa31256370771f7c4378f93958510aaf8eec546_prof);

        
        $__internal_4f5606ca14cf484cf21d86d8d4137a3269f17dcd3023a7d3f4e14f37f980ae8a->leave($__internal_4f5606ca14cf484cf21d86d8d4137a3269f17dcd3023a7d3f4e14f37f980ae8a_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9927697f890783fb2a6bc909290c9fc9d5ba002c7430314174606fa2f1fe8b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9927697f890783fb2a6bc909290c9fc9d5ba002c7430314174606fa2f1fe8b8->enter($__internal_a9927697f890783fb2a6bc909290c9fc9d5ba002c7430314174606fa2f1fe8b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cdc0ad009cfa6d3f9185d5e8ac6019128158bd261eefd73d4c83125e61abe26a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdc0ad009cfa6d3f9185d5e8ac6019128158bd261eefd73d4c83125e61abe26a->enter($__internal_cdc0ad009cfa6d3f9185d5e8ac6019128158bd261eefd73d4c83125e61abe26a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cdc0ad009cfa6d3f9185d5e8ac6019128158bd261eefd73d4c83125e61abe26a->leave($__internal_cdc0ad009cfa6d3f9185d5e8ac6019128158bd261eefd73d4c83125e61abe26a_prof);

        
        $__internal_a9927697f890783fb2a6bc909290c9fc9d5ba002c7430314174606fa2f1fe8b8->leave($__internal_a9927697f890783fb2a6bc909290c9fc9d5ba002c7430314174606fa2f1fe8b8_prof);

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
