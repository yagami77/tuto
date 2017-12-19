<?php

/* base.html.twig */
class __TwigTemplate_e7512925d8fb00307cc049a1006d437f3028b1723b810d6e2acede88a13e1891 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca7da2cf93d313c4046a20ad6078d1793d477abfdf1dbc4c8e000c532ce024dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca7da2cf93d313c4046a20ad6078d1793d477abfdf1dbc4c8e000c532ce024dd->enter($__internal_ca7da2cf93d313c4046a20ad6078d1793d477abfdf1dbc4c8e000c532ce024dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_d655236b3dacaa2c7cfeb04f08038ab35d84b03c2af7ef3dcfe335c5d2289183 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d655236b3dacaa2c7cfeb04f08038ab35d84b03c2af7ef3dcfe335c5d2289183->enter($__internal_d655236b3dacaa2c7cfeb04f08038ab35d84b03c2af7ef3dcfe335c5d2289183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_ca7da2cf93d313c4046a20ad6078d1793d477abfdf1dbc4c8e000c532ce024dd->leave($__internal_ca7da2cf93d313c4046a20ad6078d1793d477abfdf1dbc4c8e000c532ce024dd_prof);

        
        $__internal_d655236b3dacaa2c7cfeb04f08038ab35d84b03c2af7ef3dcfe335c5d2289183->leave($__internal_d655236b3dacaa2c7cfeb04f08038ab35d84b03c2af7ef3dcfe335c5d2289183_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_275b3c5083bee17912ec06bfa517b41ce08fa7a9f97016f9dc597a435a451d38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_275b3c5083bee17912ec06bfa517b41ce08fa7a9f97016f9dc597a435a451d38->enter($__internal_275b3c5083bee17912ec06bfa517b41ce08fa7a9f97016f9dc597a435a451d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8bcf4498efaa03628ae114322e7545d868dacafc4945d7631b34a673f387e91e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bcf4498efaa03628ae114322e7545d868dacafc4945d7631b34a673f387e91e->enter($__internal_8bcf4498efaa03628ae114322e7545d868dacafc4945d7631b34a673f387e91e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8bcf4498efaa03628ae114322e7545d868dacafc4945d7631b34a673f387e91e->leave($__internal_8bcf4498efaa03628ae114322e7545d868dacafc4945d7631b34a673f387e91e_prof);

        
        $__internal_275b3c5083bee17912ec06bfa517b41ce08fa7a9f97016f9dc597a435a451d38->leave($__internal_275b3c5083bee17912ec06bfa517b41ce08fa7a9f97016f9dc597a435a451d38_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_138da0d23ce159309de02ab0ad69aa1aa37db197779e26036d2fcb8f4e16ab37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_138da0d23ce159309de02ab0ad69aa1aa37db197779e26036d2fcb8f4e16ab37->enter($__internal_138da0d23ce159309de02ab0ad69aa1aa37db197779e26036d2fcb8f4e16ab37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3801aa4f4754741471aa2e19fed9b915830848df9ff88ce6736a0d0bdf9d3413 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3801aa4f4754741471aa2e19fed9b915830848df9ff88ce6736a0d0bdf9d3413->enter($__internal_3801aa4f4754741471aa2e19fed9b915830848df9ff88ce6736a0d0bdf9d3413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3801aa4f4754741471aa2e19fed9b915830848df9ff88ce6736a0d0bdf9d3413->leave($__internal_3801aa4f4754741471aa2e19fed9b915830848df9ff88ce6736a0d0bdf9d3413_prof);

        
        $__internal_138da0d23ce159309de02ab0ad69aa1aa37db197779e26036d2fcb8f4e16ab37->leave($__internal_138da0d23ce159309de02ab0ad69aa1aa37db197779e26036d2fcb8f4e16ab37_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b50ae3432492488d1ea2feae8dbd3c8c21e11e396f264961573ea86f8e135545 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b50ae3432492488d1ea2feae8dbd3c8c21e11e396f264961573ea86f8e135545->enter($__internal_b50ae3432492488d1ea2feae8dbd3c8c21e11e396f264961573ea86f8e135545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c08fbafd2329487c67d913f9a51fe4b5022c455708fcc82bf9a1738bd7f639da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c08fbafd2329487c67d913f9a51fe4b5022c455708fcc82bf9a1738bd7f639da->enter($__internal_c08fbafd2329487c67d913f9a51fe4b5022c455708fcc82bf9a1738bd7f639da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c08fbafd2329487c67d913f9a51fe4b5022c455708fcc82bf9a1738bd7f639da->leave($__internal_c08fbafd2329487c67d913f9a51fe4b5022c455708fcc82bf9a1738bd7f639da_prof);

        
        $__internal_b50ae3432492488d1ea2feae8dbd3c8c21e11e396f264961573ea86f8e135545->leave($__internal_b50ae3432492488d1ea2feae8dbd3c8c21e11e396f264961573ea86f8e135545_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ac68c3370a5aa83610bf18f6ec3dd63710ed5d5daee1bfc6d057e90c7eda1a7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac68c3370a5aa83610bf18f6ec3dd63710ed5d5daee1bfc6d057e90c7eda1a7e->enter($__internal_ac68c3370a5aa83610bf18f6ec3dd63710ed5d5daee1bfc6d057e90c7eda1a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4a2e5c5af7f89668f69fb6bdd4a83d0be3340107da25976bc5a1f34c743b560f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a2e5c5af7f89668f69fb6bdd4a83d0be3340107da25976bc5a1f34c743b560f->enter($__internal_4a2e5c5af7f89668f69fb6bdd4a83d0be3340107da25976bc5a1f34c743b560f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4a2e5c5af7f89668f69fb6bdd4a83d0be3340107da25976bc5a1f34c743b560f->leave($__internal_4a2e5c5af7f89668f69fb6bdd4a83d0be3340107da25976bc5a1f34c743b560f_prof);

        
        $__internal_ac68c3370a5aa83610bf18f6ec3dd63710ed5d5daee1bfc6d057e90c7eda1a7e->leave($__internal_ac68c3370a5aa83610bf18f6ec3dd63710ed5d5daee1bfc6d057e90c7eda1a7e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/aalrahmani/projets/tuto/app/Resources/views/base.html.twig");
    }
}
