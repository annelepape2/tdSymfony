<?php

/* symfonyCinemaBundle:Film:list.html.twig */
class __TwigTemplate_26c393fdf6c33d117af11d3859e824b818742f8083456aa3a6e85d6e74095988 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("symfonyCinemaBundle::layout.html.twig", "symfonyCinemaBundle:Film:list.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "symfonyCinemaBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7023b76c3d9d3f35dcdfaf1864a53ca64bfa21cfa013d7658f88ceef38323d57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7023b76c3d9d3f35dcdfaf1864a53ca64bfa21cfa013d7658f88ceef38323d57->enter($__internal_7023b76c3d9d3f35dcdfaf1864a53ca64bfa21cfa013d7658f88ceef38323d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "symfonyCinemaBundle:Film:list.html.twig"));

        $__internal_e927e2e765ad8e3fa06a0193feb7691c3fad1e77a13ede22d2eac33e191c1393 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e927e2e765ad8e3fa06a0193feb7691c3fad1e77a13ede22d2eac33e191c1393->enter($__internal_e927e2e765ad8e3fa06a0193feb7691c3fad1e77a13ede22d2eac33e191c1393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "symfonyCinemaBundle:Film:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7023b76c3d9d3f35dcdfaf1864a53ca64bfa21cfa013d7658f88ceef38323d57->leave($__internal_7023b76c3d9d3f35dcdfaf1864a53ca64bfa21cfa013d7658f88ceef38323d57_prof);

        
        $__internal_e927e2e765ad8e3fa06a0193feb7691c3fad1e77a13ede22d2eac33e191c1393->leave($__internal_e927e2e765ad8e3fa06a0193feb7691c3fad1e77a13ede22d2eac33e191c1393_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_a798d31fb94737239bbc76157abe8c74995c1ac4c784b4be55834600dfe128f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a798d31fb94737239bbc76157abe8c74995c1ac4c784b4be55834600dfe128f6->enter($__internal_a798d31fb94737239bbc76157abe8c74995c1ac4c784b4be55834600dfe128f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d12a0e2ad2a0d5c1768f151c5541fdb1daf64ee4cb7140d6a448d4f78569a88a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d12a0e2ad2a0d5c1768f151c5541fdb1daf64ee4cb7140d6a448d4f78569a88a->enter($__internal_d12a0e2ad2a0d5c1768f151c5541fdb1daf64ee4cb7140d6a448d4f78569a88a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des films";
        
        $__internal_d12a0e2ad2a0d5c1768f151c5541fdb1daf64ee4cb7140d6a448d4f78569a88a->leave($__internal_d12a0e2ad2a0d5c1768f151c5541fdb1daf64ee4cb7140d6a448d4f78569a88a_prof);

        
        $__internal_a798d31fb94737239bbc76157abe8c74995c1ac4c784b4be55834600dfe128f6->leave($__internal_a798d31fb94737239bbc76157abe8c74995c1ac4c784b4be55834600dfe128f6_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_45b290d0c31a21ee7620b9ba3530335ae0872481a4fd5e111ecc26cd459c8d26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45b290d0c31a21ee7620b9ba3530335ae0872481a4fd5e111ecc26cd459c8d26->enter($__internal_45b290d0c31a21ee7620b9ba3530335ae0872481a4fd5e111ecc26cd459c8d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_83f3799a35818a1321c919e1a5647b683467992996791900239768842196a75d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83f3799a35818a1321c919e1a5647b683467992996791900239768842196a75d->enter($__internal_83f3799a35818a1321c919e1a5647b683467992996791900239768842196a75d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
<h1>";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre")), "html", null, true);
        echo "</h1>

<ul class=\"liste\">
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["films"]) ? $context["films"] : $this->getContext($context, "films")));
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            // line 12
            echo "        <li>
            <h2><a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_film", array("id" => $this->getAttribute($context["film"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "titre", array()), "html", null, true);
            echo "</a></h2>
            ";
            // line 14
            if (($this->getAttribute($context["film"], "auteur", array()) == "James Cameron")) {
                // line 15
                echo "                <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "auteur", array()), "html", null, true);
                echo "</strong>
            ";
            } else {
                // line 17
                echo "                <span>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "auteur", array()), "html", null, true);
                echo "</span>
            ";
            }
            // line 19
            echo "        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "</ul>
";
        
        $__internal_83f3799a35818a1321c919e1a5647b683467992996791900239768842196a75d->leave($__internal_83f3799a35818a1321c919e1a5647b683467992996791900239768842196a75d_prof);

        
        $__internal_45b290d0c31a21ee7620b9ba3530335ae0872481a4fd5e111ecc26cd459c8d26->leave($__internal_45b290d0c31a21ee7620b9ba3530335ae0872481a4fd5e111ecc26cd459c8d26_prof);

    }

    public function getTemplateName()
    {
        return "symfonyCinemaBundle:Film:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 21,  104 => 19,  98 => 17,  92 => 15,  90 => 14,  84 => 13,  81 => 12,  77 => 11,  71 => 8,  68 => 7,  59 => 6,  41 => 4,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{# src\\symfony\\CinemaBundle\\Resources\\views\\Film\\list.html.twig #}
{% extends 'symfonyCinemaBundle::layout.html.twig' %}
{% block title %}Liste des films{% endblock %}

{% block body %}

<h1>{{ titre }}</h1>

<ul class=\"liste\">
    {% for film in films %}
        <li>
            <h2><a href=\"{{ path('page_film', {'id': film.id}) }}\">{{ film.titre }}</a></h2>
            {% if film.auteur == \"James Cameron\" %}
                <strong>{{ film.auteur }}</strong>
            {% else %}
                <span>{{ film.auteur }}</span>
            {% endif %}
        </li>
    {% endfor %}
</ul>
{% endblock %}
", "symfonyCinemaBundle:Film:list.html.twig", "/Applications/MAMP/htdocs/tdSymfony/src/symfony/CinemaBundle/Resources/views/Film/list.html.twig");
    }
}
