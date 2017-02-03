<?php

/* symfonyCinemaBundle:Film:show.html.twig */
class __TwigTemplate_3de1610d4b4495b188c61ff9e701c8b56432233852d89ef77abd58a2a7283960 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dcda960911a221060bdbec65fa8eb97da1474ac4e7d534851396b8f2d36ac7b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcda960911a221060bdbec65fa8eb97da1474ac4e7d534851396b8f2d36ac7b5->enter($__internal_dcda960911a221060bdbec65fa8eb97da1474ac4e7d534851396b8f2d36ac7b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "symfonyCinemaBundle:Film:show.html.twig"));

        $__internal_ef7ce6a2fcbc95961d0190dd85db6bd7a2174c6bfabb49018d6b5227c914cd6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef7ce6a2fcbc95961d0190dd85db6bd7a2174c6bfabb49018d6b5227c914cd6f->enter($__internal_ef7ce6a2fcbc95961d0190dd85db6bd7a2174c6bfabb49018d6b5227c914cd6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "symfonyCinemaBundle:Film:show.html.twig"));

        // line 2
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "titre", array()), "html", null, true);
        echo "</h1>

<span>Réalisé par ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "auteur", array()), "html", null, true);
        echo "</span>

<p>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "synopsis", array()), "html", null, true);
        echo "</p>




<p><a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_films");
        echo "\">Retour</a></p>";
        
        $__internal_dcda960911a221060bdbec65fa8eb97da1474ac4e7d534851396b8f2d36ac7b5->leave($__internal_dcda960911a221060bdbec65fa8eb97da1474ac4e7d534851396b8f2d36ac7b5_prof);

        
        $__internal_ef7ce6a2fcbc95961d0190dd85db6bd7a2174c6bfabb49018d6b5227c914cd6f->leave($__internal_ef7ce6a2fcbc95961d0190dd85db6bd7a2174c6bfabb49018d6b5227c914cd6f_prof);

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
        return array (  44 => 11,  36 => 6,  31 => 4,  25 => 2,);
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
<h1>{{ film.titre }}</h1>

<span>Réalisé par {{ film.auteur }}</span>

<p>{{ film.synopsis }}</p>




<p><a href=\"{{ path('page_films') }}\">Retour</a></p>", "symfonyCinemaBundle:Film:show.html.twig", "/Applications/MAMP/htdocs/tdSymfony/src/symfony/CinemaBundle/Resources/views/Film/show.html.twig");
    }
}
