<?php

/* symfonyCinemaBundle:Film:show.html.twig */
class __TwigTemplate_3de1610d4b4495b188c61ff9e701c8b56432233852d89ef77abd58a2a7283960 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("symfonyCinemaBundle::layout.html.twig", "symfonyCinemaBundle:Film:show.html.twig", 2);
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
        $__internal_2aa59c509939051ebad8e1be072dc78626df3492b1d00feee1bca0428217b43e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2aa59c509939051ebad8e1be072dc78626df3492b1d00feee1bca0428217b43e->enter($__internal_2aa59c509939051ebad8e1be072dc78626df3492b1d00feee1bca0428217b43e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "symfonyCinemaBundle:Film:show.html.twig"));

        $__internal_c9fb9faa84fbd37e6832bf2f53b9734e9f1df3731d6125be1704aad41fec3826 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9fb9faa84fbd37e6832bf2f53b9734e9f1df3731d6125be1704aad41fec3826->enter($__internal_c9fb9faa84fbd37e6832bf2f53b9734e9f1df3731d6125be1704aad41fec3826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "symfonyCinemaBundle:Film:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2aa59c509939051ebad8e1be072dc78626df3492b1d00feee1bca0428217b43e->leave($__internal_2aa59c509939051ebad8e1be072dc78626df3492b1d00feee1bca0428217b43e_prof);

        
        $__internal_c9fb9faa84fbd37e6832bf2f53b9734e9f1df3731d6125be1704aad41fec3826->leave($__internal_c9fb9faa84fbd37e6832bf2f53b9734e9f1df3731d6125be1704aad41fec3826_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2aae5a6b3fc44aa0e12752d6367af3fc9d8c401ef7d706d84d3bf1f2963b7c29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2aae5a6b3fc44aa0e12752d6367af3fc9d8c401ef7d706d84d3bf1f2963b7c29->enter($__internal_2aae5a6b3fc44aa0e12752d6367af3fc9d8c401ef7d706d84d3bf1f2963b7c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b15857ebb67e10d1d23d73f0654ec689ff37e76503df92930c86ec05d42927b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b15857ebb67e10d1d23d73f0654ec689ff37e76503df92930c86ec05d42927b4->enter($__internal_b15857ebb67e10d1d23d73f0654ec689ff37e76503df92930c86ec05d42927b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "titre", array()), "html", null, true);
        
        $__internal_b15857ebb67e10d1d23d73f0654ec689ff37e76503df92930c86ec05d42927b4->leave($__internal_b15857ebb67e10d1d23d73f0654ec689ff37e76503df92930c86ec05d42927b4_prof);

        
        $__internal_2aae5a6b3fc44aa0e12752d6367af3fc9d8c401ef7d706d84d3bf1f2963b7c29->leave($__internal_2aae5a6b3fc44aa0e12752d6367af3fc9d8c401ef7d706d84d3bf1f2963b7c29_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_da83c0ef791da2a241aa98d8693a4583b5976e1b7e1fd49e32004b514432311b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da83c0ef791da2a241aa98d8693a4583b5976e1b7e1fd49e32004b514432311b->enter($__internal_da83c0ef791da2a241aa98d8693a4583b5976e1b7e1fd49e32004b514432311b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8131a29519baa2be9917b670d3f3054269fc4057aa42c2534031eae825f49360 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8131a29519baa2be9917b670d3f3054269fc4057aa42c2534031eae825f49360->enter($__internal_8131a29519baa2be9917b670d3f3054269fc4057aa42c2534031eae825f49360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "titre", array()), "html", null, true);
        echo "</h1>

<span>Réalisé par ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "auteur", array()), "html", null, true);
        echo "</span>

<p>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "synopsis", array()), "html", null, true);
        echo "</p>




<p><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_films");
        echo "\">Retour</a></p>
";
        
        $__internal_8131a29519baa2be9917b670d3f3054269fc4057aa42c2534031eae825f49360->leave($__internal_8131a29519baa2be9917b670d3f3054269fc4057aa42c2534031eae825f49360_prof);

        
        $__internal_da83c0ef791da2a241aa98d8693a4583b5976e1b7e1fd49e32004b514432311b->leave($__internal_da83c0ef791da2a241aa98d8693a4583b5976e1b7e1fd49e32004b514432311b_prof);

    }

    public function getTemplateName()
    {
        return "symfonyCinemaBundle:Film:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 14,  79 => 9,  74 => 7,  68 => 5,  59 => 4,  41 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src\\symfony\\CinemaBundle\\Resources\\views\\Film\\show.html.twig #}
{% extends 'symfonyCinemaBundle::layout.html.twig' %}
{% block title %}{{ film.titre }}{% endblock %}
{% block body %}
<h1>{{ film.titre }}</h1>

<span>Réalisé par {{ film.auteur }}</span>

<p>{{ film.synopsis }}</p>




<p><a href=\"{{ path('page_films') }}\">Retour</a></p>
{% endblock %}", "symfonyCinemaBundle:Film:show.html.twig", "/Applications/MAMP/htdocs/tdSymfony/src/symfony/CinemaBundle/Resources/views/Film/show.html.twig");
    }
}
