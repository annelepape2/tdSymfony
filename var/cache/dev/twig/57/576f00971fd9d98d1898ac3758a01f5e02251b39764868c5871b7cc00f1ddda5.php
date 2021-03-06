<?php

/* symfonyCinemaBundle:Film:list.html.twig */
class __TwigTemplate_539648ca3d89047b41217fa918a56ef9a6ff2da0dd27176bb73660f918594d95 extends Twig_Template
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
        $__internal_64484fd733c4a4a84e776c32818175a5a1992c1988f481c4a26e753c8275c2c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64484fd733c4a4a84e776c32818175a5a1992c1988f481c4a26e753c8275c2c2->enter($__internal_64484fd733c4a4a84e776c32818175a5a1992c1988f481c4a26e753c8275c2c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "symfonyCinemaBundle:Film:list.html.twig"));

        $__internal_b727ab1699481600cfde0031b6a0fb3ef87682d76b2f1d8bbc6335e98f5a9ea7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b727ab1699481600cfde0031b6a0fb3ef87682d76b2f1d8bbc6335e98f5a9ea7->enter($__internal_b727ab1699481600cfde0031b6a0fb3ef87682d76b2f1d8bbc6335e98f5a9ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "symfonyCinemaBundle:Film:list.html.twig"));

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
        
        $__internal_64484fd733c4a4a84e776c32818175a5a1992c1988f481c4a26e753c8275c2c2->leave($__internal_64484fd733c4a4a84e776c32818175a5a1992c1988f481c4a26e753c8275c2c2_prof);

        
        $__internal_b727ab1699481600cfde0031b6a0fb3ef87682d76b2f1d8bbc6335e98f5a9ea7->leave($__internal_b727ab1699481600cfde0031b6a0fb3ef87682d76b2f1d8bbc6335e98f5a9ea7_prof);

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
", "symfonyCinemaBundle:Film:list.html.twig", "C:\\Users\\annel\\Desktop\\TdSymfony\\src\\symfony\\CinemaBundle/Resources/views/Film/list.html.twig");
    }
}
