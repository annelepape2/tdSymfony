<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f032ca10893d3d2453ba1f3cd7598481f940f7fd5137d010f38b14ad1b6a30d0 extends Twig_Template
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
        $__internal_be15ad12e4678c788c692f419a5a31b10bff11a8868f83f1f512f7a9d79e6f92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be15ad12e4678c788c692f419a5a31b10bff11a8868f83f1f512f7a9d79e6f92->enter($__internal_be15ad12e4678c788c692f419a5a31b10bff11a8868f83f1f512f7a9d79e6f92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_14297c5da927358b3cff136f6ad045bd5cf2494dd899c180d31e7fa2020fc7d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14297c5da927358b3cff136f6ad045bd5cf2494dd899c180d31e7fa2020fc7d5->enter($__internal_14297c5da927358b3cff136f6ad045bd5cf2494dd899c180d31e7fa2020fc7d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be15ad12e4678c788c692f419a5a31b10bff11a8868f83f1f512f7a9d79e6f92->leave($__internal_be15ad12e4678c788c692f419a5a31b10bff11a8868f83f1f512f7a9d79e6f92_prof);

        
        $__internal_14297c5da927358b3cff136f6ad045bd5cf2494dd899c180d31e7fa2020fc7d5->leave($__internal_14297c5da927358b3cff136f6ad045bd5cf2494dd899c180d31e7fa2020fc7d5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_276815c572b56cc40641230a02170030af9fcaff198ef7df388b49ab3838ecf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_276815c572b56cc40641230a02170030af9fcaff198ef7df388b49ab3838ecf4->enter($__internal_276815c572b56cc40641230a02170030af9fcaff198ef7df388b49ab3838ecf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9afe86fd177ff8861c2efd6934e926029facaac788abf92aba11759e19737e22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9afe86fd177ff8861c2efd6934e926029facaac788abf92aba11759e19737e22->enter($__internal_9afe86fd177ff8861c2efd6934e926029facaac788abf92aba11759e19737e22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9afe86fd177ff8861c2efd6934e926029facaac788abf92aba11759e19737e22->leave($__internal_9afe86fd177ff8861c2efd6934e926029facaac788abf92aba11759e19737e22_prof);

        
        $__internal_276815c572b56cc40641230a02170030af9fcaff198ef7df388b49ab3838ecf4->leave($__internal_276815c572b56cc40641230a02170030af9fcaff198ef7df388b49ab3838ecf4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_45b9d94942ba34b70090cf313f23f8e1cf1a7a8e2feb4e5671ab32642471843c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45b9d94942ba34b70090cf313f23f8e1cf1a7a8e2feb4e5671ab32642471843c->enter($__internal_45b9d94942ba34b70090cf313f23f8e1cf1a7a8e2feb4e5671ab32642471843c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_baf6c1b158b1e67f30e787ce4c2de0757aad52a72ec87739b398974632626e4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baf6c1b158b1e67f30e787ce4c2de0757aad52a72ec87739b398974632626e4e->enter($__internal_baf6c1b158b1e67f30e787ce4c2de0757aad52a72ec87739b398974632626e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_baf6c1b158b1e67f30e787ce4c2de0757aad52a72ec87739b398974632626e4e->leave($__internal_baf6c1b158b1e67f30e787ce4c2de0757aad52a72ec87739b398974632626e4e_prof);

        
        $__internal_45b9d94942ba34b70090cf313f23f8e1cf1a7a8e2feb4e5671ab32642471843c->leave($__internal_45b9d94942ba34b70090cf313f23f8e1cf1a7a8e2feb4e5671ab32642471843c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_29ef5b560caf06b0266983aec9fb4c100e08bf0cfae18e58bb60a07b03211326 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29ef5b560caf06b0266983aec9fb4c100e08bf0cfae18e58bb60a07b03211326->enter($__internal_29ef5b560caf06b0266983aec9fb4c100e08bf0cfae18e58bb60a07b03211326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_815f1ccb20f1dde2417c211e17813afa06a6b01e485d06a24f7ba77f1d824d4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_815f1ccb20f1dde2417c211e17813afa06a6b01e485d06a24f7ba77f1d824d4a->enter($__internal_815f1ccb20f1dde2417c211e17813afa06a6b01e485d06a24f7ba77f1d824d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_815f1ccb20f1dde2417c211e17813afa06a6b01e485d06a24f7ba77f1d824d4a->leave($__internal_815f1ccb20f1dde2417c211e17813afa06a6b01e485d06a24f7ba77f1d824d4a_prof);

        
        $__internal_29ef5b560caf06b0266983aec9fb4c100e08bf0cfae18e58bb60a07b03211326->leave($__internal_29ef5b560caf06b0266983aec9fb4c100e08bf0cfae18e58bb60a07b03211326_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
