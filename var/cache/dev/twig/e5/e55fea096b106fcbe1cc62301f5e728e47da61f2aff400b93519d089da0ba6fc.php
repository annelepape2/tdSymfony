<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_62938ca9792154be04d8ad3db80d38c70e93edfea284e5879f215bd9ced413f9 extends Twig_Template
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
        $__internal_d06ec2e983eb4427577e7d9df25ee4209e34f2294ab4284a8bedb53251055521 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d06ec2e983eb4427577e7d9df25ee4209e34f2294ab4284a8bedb53251055521->enter($__internal_d06ec2e983eb4427577e7d9df25ee4209e34f2294ab4284a8bedb53251055521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_fa7a027a872695afc5acc55a9164ecdd9f5cc9a60454cc65602acc2ba7eb8f5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa7a027a872695afc5acc55a9164ecdd9f5cc9a60454cc65602acc2ba7eb8f5c->enter($__internal_fa7a027a872695afc5acc55a9164ecdd9f5cc9a60454cc65602acc2ba7eb8f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_d06ec2e983eb4427577e7d9df25ee4209e34f2294ab4284a8bedb53251055521->leave($__internal_d06ec2e983eb4427577e7d9df25ee4209e34f2294ab4284a8bedb53251055521_prof);

        
        $__internal_fa7a027a872695afc5acc55a9164ecdd9f5cc9a60454cc65602acc2ba7eb8f5c->leave($__internal_fa7a027a872695afc5acc55a9164ecdd9f5cc9a60454cc65602acc2ba7eb8f5c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\Users\\annel\\Desktop\\TdSymfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
