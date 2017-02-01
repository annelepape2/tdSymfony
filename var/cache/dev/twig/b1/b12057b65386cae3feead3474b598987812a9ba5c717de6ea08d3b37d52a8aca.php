<?php

/* symfonyCinemaBundle:Default:index.html.twig */
class __TwigTemplate_672f1f48eb3f211b31f602b1e5a4da47262d5ca3259aeeb9440627cdda0f429f extends Twig_Template
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
        $__internal_e8d49c759d53391e3351310e35e98ee6fdb2097703892a50e434a50764e3ba6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8d49c759d53391e3351310e35e98ee6fdb2097703892a50e434a50764e3ba6f->enter($__internal_e8d49c759d53391e3351310e35e98ee6fdb2097703892a50e434a50764e3ba6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "symfonyCinemaBundle:Default:index.html.twig"));

        $__internal_798a52071322e281df474e1360486dd2294cb014b16f54fc8ad1aed6717ace00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_798a52071322e281df474e1360486dd2294cb014b16f54fc8ad1aed6717ace00->enter($__internal_798a52071322e281df474e1360486dd2294cb014b16f54fc8ad1aed6717ace00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "symfonyCinemaBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_e8d49c759d53391e3351310e35e98ee6fdb2097703892a50e434a50764e3ba6f->leave($__internal_e8d49c759d53391e3351310e35e98ee6fdb2097703892a50e434a50764e3ba6f_prof);

        
        $__internal_798a52071322e281df474e1360486dd2294cb014b16f54fc8ad1aed6717ace00->leave($__internal_798a52071322e281df474e1360486dd2294cb014b16f54fc8ad1aed6717ace00_prof);

    }

    public function getTemplateName()
    {
        return "symfonyCinemaBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "symfonyCinemaBundle:Default:index.html.twig", "C:\\Users\\annel\\Desktop\\TdSymfony\\src\\symfony\\CinemaBundle/Resources/views/Default/index.html.twig");
    }
}
