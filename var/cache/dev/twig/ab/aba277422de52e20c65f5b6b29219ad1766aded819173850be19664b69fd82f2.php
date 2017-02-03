<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_f4e1a530875719e2a321231d3e9ebcc2435b31852ba14835009c158ce5499c84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_48ca8c7800c8267f750dc757e7eb63b67199eec4901311f922eb7bbf3316e58e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48ca8c7800c8267f750dc757e7eb63b67199eec4901311f922eb7bbf3316e58e->enter($__internal_48ca8c7800c8267f750dc757e7eb63b67199eec4901311f922eb7bbf3316e58e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_500594ae7327d11934317a60264c10c7d95892dea7cd8b658ca1ba1abf2a7a14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_500594ae7327d11934317a60264c10c7d95892dea7cd8b658ca1ba1abf2a7a14->enter($__internal_500594ae7327d11934317a60264c10c7d95892dea7cd8b658ca1ba1abf2a7a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48ca8c7800c8267f750dc757e7eb63b67199eec4901311f922eb7bbf3316e58e->leave($__internal_48ca8c7800c8267f750dc757e7eb63b67199eec4901311f922eb7bbf3316e58e_prof);

        
        $__internal_500594ae7327d11934317a60264c10c7d95892dea7cd8b658ca1ba1abf2a7a14->leave($__internal_500594ae7327d11934317a60264c10c7d95892dea7cd8b658ca1ba1abf2a7a14_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_596661eb2e89debcdfe71c721eb70a7255d3b09af68009c0347c0c09ff6d2b3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_596661eb2e89debcdfe71c721eb70a7255d3b09af68009c0347c0c09ff6d2b3b->enter($__internal_596661eb2e89debcdfe71c721eb70a7255d3b09af68009c0347c0c09ff6d2b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_178d5307fe8b49b21a7a8e18092c42d3164e3bc4a75649a0aa9afa117ef7fbd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_178d5307fe8b49b21a7a8e18092c42d3164e3bc4a75649a0aa9afa117ef7fbd7->enter($__internal_178d5307fe8b49b21a7a8e18092c42d3164e3bc4a75649a0aa9afa117ef7fbd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_178d5307fe8b49b21a7a8e18092c42d3164e3bc4a75649a0aa9afa117ef7fbd7->leave($__internal_178d5307fe8b49b21a7a8e18092c42d3164e3bc4a75649a0aa9afa117ef7fbd7_prof);

        
        $__internal_596661eb2e89debcdfe71c721eb70a7255d3b09af68009c0347c0c09ff6d2b3b->leave($__internal_596661eb2e89debcdfe71c721eb70a7255d3b09af68009c0347c0c09ff6d2b3b_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_110713adbe7d9b08ad2941ed5336a2e75a09a793ff7a17de81577a01df7b65c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_110713adbe7d9b08ad2941ed5336a2e75a09a793ff7a17de81577a01df7b65c6->enter($__internal_110713adbe7d9b08ad2941ed5336a2e75a09a793ff7a17de81577a01df7b65c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b7d78c3819705ed91b785c33885fd9c523f4f2bed3d892a818d84dbb5cb18a83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7d78c3819705ed91b785c33885fd9c523f4f2bed3d892a818d84dbb5cb18a83->enter($__internal_b7d78c3819705ed91b785c33885fd9c523f4f2bed3d892a818d84dbb5cb18a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_b7d78c3819705ed91b785c33885fd9c523f4f2bed3d892a818d84dbb5cb18a83->leave($__internal_b7d78c3819705ed91b785c33885fd9c523f4f2bed3d892a818d84dbb5cb18a83_prof);

        
        $__internal_110713adbe7d9b08ad2941ed5336a2e75a09a793ff7a17de81577a01df7b65c6->leave($__internal_110713adbe7d9b08ad2941ed5336a2e75a09a793ff7a17de81577a01df7b65c6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "C:\\Users\\annel\\Desktop\\TdSymfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
