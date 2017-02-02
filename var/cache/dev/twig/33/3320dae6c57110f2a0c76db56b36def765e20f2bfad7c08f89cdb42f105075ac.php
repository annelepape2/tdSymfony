<?php

/* symfonyCinemaBundle:Film:list.html.twig */
class __TwigTemplate_26c393fdf6c33d117af11d3859e824b818742f8083456aa3a6e85d6e74095988 extends Twig_Template
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
        $__internal_801525114405945e745965f59566d0e9fff3ab4c7c8932ea5abf86e5908154fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_801525114405945e745965f59566d0e9fff3ab4c7c8932ea5abf86e5908154fd->enter($__internal_801525114405945e745965f59566d0e9fff3ab4c7c8932ea5abf86e5908154fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "symfonyCinemaBundle:Film:list.html.twig"));

        $__internal_bf34a52d029c9ccb887f8533c60fe8992610aba9a586f1b7caf1e5e90a77d4d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf34a52d029c9ccb887f8533c60fe8992610aba9a586f1b7caf1e5e90a77d4d2->enter($__internal_bf34a52d029c9ccb887f8533c60fe8992610aba9a586f1b7caf1e5e90a77d4d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "symfonyCinemaBundle:Film:list.html.twig"));

        // line 2
        echo "<h1>";
        echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre")), "html", null, true);
        echo "</h1>

<ul class=\"liste\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["films"]) ? $context["films"] : $this->getContext($context, "films")));
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            // line 6
            echo "        <li>
            <h2>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "titre", array()), "html", null, true);
            echo "</h2>
            <span>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "auteur", array()), "html", null, true);
            echo "</span>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</ul>";
        
        $__internal_801525114405945e745965f59566d0e9fff3ab4c7c8932ea5abf86e5908154fd->leave($__internal_801525114405945e745965f59566d0e9fff3ab4c7c8932ea5abf86e5908154fd_prof);

        
        $__internal_bf34a52d029c9ccb887f8533c60fe8992610aba9a586f1b7caf1e5e90a77d4d2->leave($__internal_bf34a52d029c9ccb887f8533c60fe8992610aba9a586f1b7caf1e5e90a77d4d2_prof);

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
        return array (  52 => 11,  43 => 8,  39 => 7,  36 => 6,  32 => 5,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src\\symfony\\CinemaBundle\\Resources\\views\\Film\\list.html.twig #}
<h1>{{ titre }}</h1>

<ul class=\"liste\">
    {% for film in films %}
        <li>
            <h2>{{ film.titre }}</h2>
            <span>{{ film.auteur }}</span>
        </li>
    {% endfor %}
</ul>", "symfonyCinemaBundle:Film:list.html.twig", "/Applications/MAMP/htdocs/symfony/src/symfony/CinemaBundle/Resources/views/Film/list.html.twig");
    }
}
