<?php

/* symfonyCinemaBundle::layout.html.twig */
class __TwigTemplate_06b3f38f822bfd0e9763eca5d4c03d0449a96f41dadae7aba8b361777d60eff9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0fe0ffd5c7d33c6f22f46f74d0be96454a644954dd6536f93041ab7bb38ee3c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fe0ffd5c7d33c6f22f46f74d0be96454a644954dd6536f93041ab7bb38ee3c0->enter($__internal_0fe0ffd5c7d33c6f22f46f74d0be96454a644954dd6536f93041ab7bb38ee3c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "symfonyCinemaBundle::layout.html.twig"));

        $__internal_5992463850d517c896ca5a132ddc5f40b098c53c0ff3da086e06200cafa29485 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5992463850d517c896ca5a132ddc5f40b098c53c0ff3da086e06200cafa29485->enter($__internal_5992463850d517c896ca5a132ddc5f40b098c53c0ff3da086e06200cafa29485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "symfonyCinemaBundle::layout.html.twig"));

        // line 2
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <ul class=\"menu\">
            <li><a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_accueil");
        echo "\">Accueil</a></li>
            <li><a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_films");
        echo "\">films</a></li>
        </ul>

        <div id=\"content\">
            ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "        </div>
    </body>
</html>";
        
        $__internal_0fe0ffd5c7d33c6f22f46f74d0be96454a644954dd6536f93041ab7bb38ee3c0->leave($__internal_0fe0ffd5c7d33c6f22f46f74d0be96454a644954dd6536f93041ab7bb38ee3c0_prof);

        
        $__internal_5992463850d517c896ca5a132ddc5f40b098c53c0ff3da086e06200cafa29485->leave($__internal_5992463850d517c896ca5a132ddc5f40b098c53c0ff3da086e06200cafa29485_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_fd33fe001b6839b18f3718c6b34de7bed489dc54483709c342efde49194abc1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd33fe001b6839b18f3718c6b34de7bed489dc54483709c342efde49194abc1e->enter($__internal_fd33fe001b6839b18f3718c6b34de7bed489dc54483709c342efde49194abc1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6bd3abe975824d25ce7142e822b051b568bb520601e5f10bdffde7713dff870a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bd3abe975824d25ce7142e822b051b568bb520601e5f10bdffde7713dff870a->enter($__internal_6bd3abe975824d25ce7142e822b051b568bb520601e5f10bdffde7713dff870a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symfony Cinema";
        
        $__internal_6bd3abe975824d25ce7142e822b051b568bb520601e5f10bdffde7713dff870a->leave($__internal_6bd3abe975824d25ce7142e822b051b568bb520601e5f10bdffde7713dff870a_prof);

        
        $__internal_fd33fe001b6839b18f3718c6b34de7bed489dc54483709c342efde49194abc1e->leave($__internal_fd33fe001b6839b18f3718c6b34de7bed489dc54483709c342efde49194abc1e_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_f799e9cc927c27d99d6813937db241ce277e72804056415dbcf1561e27dc6883 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f799e9cc927c27d99d6813937db241ce277e72804056415dbcf1561e27dc6883->enter($__internal_f799e9cc927c27d99d6813937db241ce277e72804056415dbcf1561e27dc6883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_97f63965a67786e8e460926d5c1deaa91f008f3a50996929537d5a604fab1742 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97f63965a67786e8e460926d5c1deaa91f008f3a50996929537d5a604fab1742->enter($__internal_97f63965a67786e8e460926d5c1deaa91f008f3a50996929537d5a604fab1742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_97f63965a67786e8e460926d5c1deaa91f008f3a50996929537d5a604fab1742->leave($__internal_97f63965a67786e8e460926d5c1deaa91f008f3a50996929537d5a604fab1742_prof);

        
        $__internal_f799e9cc927c27d99d6813937db241ce277e72804056415dbcf1561e27dc6883->leave($__internal_f799e9cc927c27d99d6813937db241ce277e72804056415dbcf1561e27dc6883_prof);

    }

    public function getTemplateName()
    {
        return "symfonyCinemaBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 16,  69 => 6,  57 => 17,  55 => 16,  48 => 12,  44 => 11,  37 => 7,  33 => 6,  27 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src\\symfony\\CinemaBundle\\Resources\\views\\layout.html.twig #}
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}symfony Cinema{% endblock %}</title>
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\" />
    </head>
    <body>
        <ul class=\"menu\">
            <li><a href=\"{{ path('page_accueil') }}\">Accueil</a></li>
            <li><a href=\"{{ path('page_films') }}\">films</a></li>
        </ul>

        <div id=\"content\">
            {% block body %}{% endblock %}
        </div>
    </body>
</html>", "symfonyCinemaBundle::layout.html.twig", "/Applications/MAMP/htdocs/tdSymfony/src/symfony/CinemaBundle/Resources/views/layout.html.twig");
    }
}
