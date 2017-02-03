<?php

/* symfonyCinemaBundle:Film:show.html.twig */
class __TwigTemplate_9b824bf6823ed895550d0c6c2148603048d553097c00a0d54e571193a0299ca7 extends Twig_Template
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
        $__internal_7eb28892d2aa006ef41251524de309960ccf92e006a06d0e2fd94a3aa5efd772 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eb28892d2aa006ef41251524de309960ccf92e006a06d0e2fd94a3aa5efd772->enter($__internal_7eb28892d2aa006ef41251524de309960ccf92e006a06d0e2fd94a3aa5efd772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "symfonyCinemaBundle:Film:show.html.twig"));

        $__internal_c08e26a78302ec7edefd7c4d9b15ede62d2c20aa1aa1b31375f36efab7432cbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c08e26a78302ec7edefd7c4d9b15ede62d2c20aa1aa1b31375f36efab7432cbd->enter($__internal_c08e26a78302ec7edefd7c4d9b15ede62d2c20aa1aa1b31375f36efab7432cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "symfonyCinemaBundle:Film:show.html.twig"));

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
        
        $__internal_7eb28892d2aa006ef41251524de309960ccf92e006a06d0e2fd94a3aa5efd772->leave($__internal_7eb28892d2aa006ef41251524de309960ccf92e006a06d0e2fd94a3aa5efd772_prof);

        
        $__internal_c08e26a78302ec7edefd7c4d9b15ede62d2c20aa1aa1b31375f36efab7432cbd->leave($__internal_c08e26a78302ec7edefd7c4d9b15ede62d2c20aa1aa1b31375f36efab7432cbd_prof);

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




<p><a href=\"{{ path('page_films') }}\">Retour</a></p>", "symfonyCinemaBundle:Film:show.html.twig", "C:\\Users\\annel\\Desktop\\TdSymfony\\src\\symfony\\CinemaBundle/Resources/views/Film/show.html.twig");
    }
}
