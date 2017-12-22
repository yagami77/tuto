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
        $__internal_fe57452f3c93090573e91b4e9968a7abfed1c5aa026a492118d29f4f6e4a3e3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe57452f3c93090573e91b4e9968a7abfed1c5aa026a492118d29f4f6e4a3e3e->enter($__internal_fe57452f3c93090573e91b4e9968a7abfed1c5aa026a492118d29f4f6e4a3e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_7fdcf39b937b0b1aff87755102b258350a1893da9e54463215f1cd0917d0f09d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fdcf39b937b0b1aff87755102b258350a1893da9e54463215f1cd0917d0f09d->enter($__internal_7fdcf39b937b0b1aff87755102b258350a1893da9e54463215f1cd0917d0f09d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_fe57452f3c93090573e91b4e9968a7abfed1c5aa026a492118d29f4f6e4a3e3e->leave($__internal_fe57452f3c93090573e91b4e9968a7abfed1c5aa026a492118d29f4f6e4a3e3e_prof);

        
        $__internal_7fdcf39b937b0b1aff87755102b258350a1893da9e54463215f1cd0917d0f09d->leave($__internal_7fdcf39b937b0b1aff87755102b258350a1893da9e54463215f1cd0917d0f09d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d32a0c724de4d13ef6e459e938e6fddb9a1aa009ad99243430e4780df4ccd3f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d32a0c724de4d13ef6e459e938e6fddb9a1aa009ad99243430e4780df4ccd3f4->enter($__internal_d32a0c724de4d13ef6e459e938e6fddb9a1aa009ad99243430e4780df4ccd3f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e9519fa2c176a86a5cdd033499e607ad08216469628fb8147e5bd71b5550daca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9519fa2c176a86a5cdd033499e607ad08216469628fb8147e5bd71b5550daca->enter($__internal_e9519fa2c176a86a5cdd033499e607ad08216469628fb8147e5bd71b5550daca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e9519fa2c176a86a5cdd033499e607ad08216469628fb8147e5bd71b5550daca->leave($__internal_e9519fa2c176a86a5cdd033499e607ad08216469628fb8147e5bd71b5550daca_prof);

        
        $__internal_d32a0c724de4d13ef6e459e938e6fddb9a1aa009ad99243430e4780df4ccd3f4->leave($__internal_d32a0c724de4d13ef6e459e938e6fddb9a1aa009ad99243430e4780df4ccd3f4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_539b9682c5eafeb1e382ec0e31fa66dd6f2eb134aee58138e46f730cb50c5262 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_539b9682c5eafeb1e382ec0e31fa66dd6f2eb134aee58138e46f730cb50c5262->enter($__internal_539b9682c5eafeb1e382ec0e31fa66dd6f2eb134aee58138e46f730cb50c5262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_bbf86bcbc82ef53322413cfa3d9224f8296805f39dc70fe4f3f8ea6c11257478 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbf86bcbc82ef53322413cfa3d9224f8296805f39dc70fe4f3f8ea6c11257478->enter($__internal_bbf86bcbc82ef53322413cfa3d9224f8296805f39dc70fe4f3f8ea6c11257478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_bbf86bcbc82ef53322413cfa3d9224f8296805f39dc70fe4f3f8ea6c11257478->leave($__internal_bbf86bcbc82ef53322413cfa3d9224f8296805f39dc70fe4f3f8ea6c11257478_prof);

        
        $__internal_539b9682c5eafeb1e382ec0e31fa66dd6f2eb134aee58138e46f730cb50c5262->leave($__internal_539b9682c5eafeb1e382ec0e31fa66dd6f2eb134aee58138e46f730cb50c5262_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3e0cfd97e8f1679dac3dcd064746f9dc01c7e25ce7abd775ba4f09d4708c1d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3e0cfd97e8f1679dac3dcd064746f9dc01c7e25ce7abd775ba4f09d4708c1d6->enter($__internal_d3e0cfd97e8f1679dac3dcd064746f9dc01c7e25ce7abd775ba4f09d4708c1d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a72847f787c871bc978b0ccfc9068a8e209534b1d9bde015317b4410e6c25dc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a72847f787c871bc978b0ccfc9068a8e209534b1d9bde015317b4410e6c25dc5->enter($__internal_a72847f787c871bc978b0ccfc9068a8e209534b1d9bde015317b4410e6c25dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a72847f787c871bc978b0ccfc9068a8e209534b1d9bde015317b4410e6c25dc5->leave($__internal_a72847f787c871bc978b0ccfc9068a8e209534b1d9bde015317b4410e6c25dc5_prof);

        
        $__internal_d3e0cfd97e8f1679dac3dcd064746f9dc01c7e25ce7abd775ba4f09d4708c1d6->leave($__internal_d3e0cfd97e8f1679dac3dcd064746f9dc01c7e25ce7abd775ba4f09d4708c1d6_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085025b3ace84dd3e9ff4db3f5a1cd36b2ab590607387ae54ae9e08a4b86c029 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085025b3ace84dd3e9ff4db3f5a1cd36b2ab590607387ae54ae9e08a4b86c029->enter($__internal_085025b3ace84dd3e9ff4db3f5a1cd36b2ab590607387ae54ae9e08a4b86c029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6a9919fb9cda3f49ffb03baaef6309583c85207d1b7cada30368537c95a60732 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a9919fb9cda3f49ffb03baaef6309583c85207d1b7cada30368537c95a60732->enter($__internal_6a9919fb9cda3f49ffb03baaef6309583c85207d1b7cada30368537c95a60732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6a9919fb9cda3f49ffb03baaef6309583c85207d1b7cada30368537c95a60732->leave($__internal_6a9919fb9cda3f49ffb03baaef6309583c85207d1b7cada30368537c95a60732_prof);

        
        $__internal_085025b3ace84dd3e9ff4db3f5a1cd36b2ab590607387ae54ae9e08a4b86c029->leave($__internal_085025b3ace84dd3e9ff4db3f5a1cd36b2ab590607387ae54ae9e08a4b86c029_prof);

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
