<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_591587cf3d250cb6a75144042f9ed364511a48f8d1e4425a30d8a632482553fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_e11d83801637e00e4145151efa7741bea8c50fd36293fcbc891aad08eaa76799 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e11d83801637e00e4145151efa7741bea8c50fd36293fcbc891aad08eaa76799->enter($__internal_e11d83801637e00e4145151efa7741bea8c50fd36293fcbc891aad08eaa76799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_7edc529c136509dadfc57d2158793c8a09f8f00ffaf0bf5259c388cf6ab01dc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7edc529c136509dadfc57d2158793c8a09f8f00ffaf0bf5259c388cf6ab01dc1->enter($__internal_7edc529c136509dadfc57d2158793c8a09f8f00ffaf0bf5259c388cf6ab01dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e11d83801637e00e4145151efa7741bea8c50fd36293fcbc891aad08eaa76799->leave($__internal_e11d83801637e00e4145151efa7741bea8c50fd36293fcbc891aad08eaa76799_prof);

        
        $__internal_7edc529c136509dadfc57d2158793c8a09f8f00ffaf0bf5259c388cf6ab01dc1->leave($__internal_7edc529c136509dadfc57d2158793c8a09f8f00ffaf0bf5259c388cf6ab01dc1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7d1f8a98ef2d6479036eb0daa521183d1835dd49ef4ff407d93d80fd7320cf63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d1f8a98ef2d6479036eb0daa521183d1835dd49ef4ff407d93d80fd7320cf63->enter($__internal_7d1f8a98ef2d6479036eb0daa521183d1835dd49ef4ff407d93d80fd7320cf63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b592bea885f666494f9eba9a221dc968f4c12cbb7e7d91ce3f5299a6f8397ad4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b592bea885f666494f9eba9a221dc968f4c12cbb7e7d91ce3f5299a6f8397ad4->enter($__internal_b592bea885f666494f9eba9a221dc968f4c12cbb7e7d91ce3f5299a6f8397ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_b592bea885f666494f9eba9a221dc968f4c12cbb7e7d91ce3f5299a6f8397ad4->leave($__internal_b592bea885f666494f9eba9a221dc968f4c12cbb7e7d91ce3f5299a6f8397ad4_prof);

        
        $__internal_7d1f8a98ef2d6479036eb0daa521183d1835dd49ef4ff407d93d80fd7320cf63->leave($__internal_7d1f8a98ef2d6479036eb0daa521183d1835dd49ef4ff407d93d80fd7320cf63_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e4819884bb6c1deed074466c08819ef8c7c4ff50b09701f378fa755e579917b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4819884bb6c1deed074466c08819ef8c7c4ff50b09701f378fa755e579917b6->enter($__internal_e4819884bb6c1deed074466c08819ef8c7c4ff50b09701f378fa755e579917b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4dfe78f112890a866a68345fc3c81e66424e7268a71f771485e14e73a91efbed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dfe78f112890a866a68345fc3c81e66424e7268a71f771485e14e73a91efbed->enter($__internal_4dfe78f112890a866a68345fc3c81e66424e7268a71f771485e14e73a91efbed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_4dfe78f112890a866a68345fc3c81e66424e7268a71f771485e14e73a91efbed->leave($__internal_4dfe78f112890a866a68345fc3c81e66424e7268a71f771485e14e73a91efbed_prof);

        
        $__internal_e4819884bb6c1deed074466c08819ef8c7c4ff50b09701f378fa755e579917b6->leave($__internal_e4819884bb6c1deed074466c08819ef8c7c4ff50b09701f378fa755e579917b6_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7c1de12082b6d071a4bc2ec500ab4f310951e77ee72e264926866c5fd4005d09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c1de12082b6d071a4bc2ec500ab4f310951e77ee72e264926866c5fd4005d09->enter($__internal_7c1de12082b6d071a4bc2ec500ab4f310951e77ee72e264926866c5fd4005d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_298c8a1ac9bbc3d7615160223616014b068a5a1f445e10ec607d11c5aad3b3a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_298c8a1ac9bbc3d7615160223616014b068a5a1f445e10ec607d11c5aad3b3a4->enter($__internal_298c8a1ac9bbc3d7615160223616014b068a5a1f445e10ec607d11c5aad3b3a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_298c8a1ac9bbc3d7615160223616014b068a5a1f445e10ec607d11c5aad3b3a4->leave($__internal_298c8a1ac9bbc3d7615160223616014b068a5a1f445e10ec607d11c5aad3b3a4_prof);

        
        $__internal_7c1de12082b6d071a4bc2ec500ab4f310951e77ee72e264926866c5fd4005d09->leave($__internal_7c1de12082b6d071a4bc2ec500ab4f310951e77ee72e264926866c5fd4005d09_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
