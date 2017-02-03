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
        $__internal_f00dfd76f3854fcf2a7f941a4a4298323afc06b155c12b44b26488ad5408f3ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f00dfd76f3854fcf2a7f941a4a4298323afc06b155c12b44b26488ad5408f3ca->enter($__internal_f00dfd76f3854fcf2a7f941a4a4298323afc06b155c12b44b26488ad5408f3ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "symfonyCinemaBundle:Film:list.html.twig"));

        $__internal_b96e687270ce552eb8c66a946149db8308fe168ab0a22a8a38d812465916c03d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b96e687270ce552eb8c66a946149db8308fe168ab0a22a8a38d812465916c03d->enter($__internal_b96e687270ce552eb8c66a946149db8308fe168ab0a22a8a38d812465916c03d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "symfonyCinemaBundle:Film:list.html.twig"));

        // line 1
        echo "
";
        // line 3
        echo "<h1>";
        echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre")), "html", null, true);
        echo "</h1>

<ul class=\"liste\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["films"]) ? $context["films"] : $this->getContext($context, "films")));
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            // line 7
            echo "        <li>
            <h2><a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_film", array("id" => $this->getAttribute($context["film"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "titre", array()), "html", null, true);
            echo "</a></h2>
            ";
            // line 9
            if (($this->getAttribute($context["film"], "auteur", array()) == "James Cameron")) {
                // line 10
                echo "                <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "auteur", array()), "html", null, true);
                echo "</strong>
            ";
            } else {
                // line 12
                echo "                <span>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "auteur", array()), "html", null, true);
                echo "</span>
            ";
            }
            // line 14
            echo "        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</ul>
";
        
        $__internal_f00dfd76f3854fcf2a7f941a4a4298323afc06b155c12b44b26488ad5408f3ca->leave($__internal_f00dfd76f3854fcf2a7f941a4a4298323afc06b155c12b44b26488ad5408f3ca_prof);

        
        $__internal_b96e687270ce552eb8c66a946149db8308fe168ab0a22a8a38d812465916c03d->leave($__internal_b96e687270ce552eb8c66a946149db8308fe168ab0a22a8a38d812465916c03d_prof);

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
        return array (  69 => 16,  62 => 14,  56 => 12,  50 => 10,  48 => 9,  42 => 8,  39 => 7,  35 => 6,  28 => 3,  25 => 1,);
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
", "symfonyCinemaBundle:Film:list.html.twig", "/Applications/MAMP/htdocs/tdSymfony/src/symfony/CinemaBundle/Resources/views/Film/list.html.twig");
    }
}
