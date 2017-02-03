<?php

/* base.html.twig */
class __TwigTemplate_16a23e782c877cef47f574aedb0825f8bdb2fcf5aed0bf15a527a227eee5d38c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb89de66fa65d3ef6a34a7984400c16c4070d2d45ae7873f22ed1c06172996d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb89de66fa65d3ef6a34a7984400c16c4070d2d45ae7873f22ed1c06172996d0->enter($__internal_fb89de66fa65d3ef6a34a7984400c16c4070d2d45ae7873f22ed1c06172996d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_3ac4df7d004aaabd0cab4ae079f594d4863e5f928d04af1d4ca84cfdcc4196ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ac4df7d004aaabd0cab4ae079f594d4863e5f928d04af1d4ca84cfdcc4196ef->enter($__internal_3ac4df7d004aaabd0cab4ae079f594d4863e5f928d04af1d4ca84cfdcc4196ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_fb89de66fa65d3ef6a34a7984400c16c4070d2d45ae7873f22ed1c06172996d0->leave($__internal_fb89de66fa65d3ef6a34a7984400c16c4070d2d45ae7873f22ed1c06172996d0_prof);

        
        $__internal_3ac4df7d004aaabd0cab4ae079f594d4863e5f928d04af1d4ca84cfdcc4196ef->leave($__internal_3ac4df7d004aaabd0cab4ae079f594d4863e5f928d04af1d4ca84cfdcc4196ef_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_523d8a4f12568fef6258d4462a26b17a002386ef0679d29261dbdd6ac8dd9fe8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_523d8a4f12568fef6258d4462a26b17a002386ef0679d29261dbdd6ac8dd9fe8->enter($__internal_523d8a4f12568fef6258d4462a26b17a002386ef0679d29261dbdd6ac8dd9fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cda9d2f35ae446d168d10828d1b803d1707f5e4eb23b7f2ebfd38d7b91a2e2ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cda9d2f35ae446d168d10828d1b803d1707f5e4eb23b7f2ebfd38d7b91a2e2ed->enter($__internal_cda9d2f35ae446d168d10828d1b803d1707f5e4eb23b7f2ebfd38d7b91a2e2ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_cda9d2f35ae446d168d10828d1b803d1707f5e4eb23b7f2ebfd38d7b91a2e2ed->leave($__internal_cda9d2f35ae446d168d10828d1b803d1707f5e4eb23b7f2ebfd38d7b91a2e2ed_prof);

        
        $__internal_523d8a4f12568fef6258d4462a26b17a002386ef0679d29261dbdd6ac8dd9fe8->leave($__internal_523d8a4f12568fef6258d4462a26b17a002386ef0679d29261dbdd6ac8dd9fe8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_252b8558af26000cf17de8db062e7efdd75aa981a3cc9595e7ddd06e56033f95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_252b8558af26000cf17de8db062e7efdd75aa981a3cc9595e7ddd06e56033f95->enter($__internal_252b8558af26000cf17de8db062e7efdd75aa981a3cc9595e7ddd06e56033f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_91988f70b2a885a831cd9d48267712db9eb29be397e44b33fea90eace08e8391 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91988f70b2a885a831cd9d48267712db9eb29be397e44b33fea90eace08e8391->enter($__internal_91988f70b2a885a831cd9d48267712db9eb29be397e44b33fea90eace08e8391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_91988f70b2a885a831cd9d48267712db9eb29be397e44b33fea90eace08e8391->leave($__internal_91988f70b2a885a831cd9d48267712db9eb29be397e44b33fea90eace08e8391_prof);

        
        $__internal_252b8558af26000cf17de8db062e7efdd75aa981a3cc9595e7ddd06e56033f95->leave($__internal_252b8558af26000cf17de8db062e7efdd75aa981a3cc9595e7ddd06e56033f95_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3f802de09f83e0de7091c16b2ad1adbac8e4499831f77575559a729b7718c09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3f802de09f83e0de7091c16b2ad1adbac8e4499831f77575559a729b7718c09->enter($__internal_a3f802de09f83e0de7091c16b2ad1adbac8e4499831f77575559a729b7718c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_796e186bc5d84e62d8fd0c573d4cd745eb0b0b8186c0e0aeb825bc25e088f359 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_796e186bc5d84e62d8fd0c573d4cd745eb0b0b8186c0e0aeb825bc25e088f359->enter($__internal_796e186bc5d84e62d8fd0c573d4cd745eb0b0b8186c0e0aeb825bc25e088f359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_796e186bc5d84e62d8fd0c573d4cd745eb0b0b8186c0e0aeb825bc25e088f359->leave($__internal_796e186bc5d84e62d8fd0c573d4cd745eb0b0b8186c0e0aeb825bc25e088f359_prof);

        
        $__internal_a3f802de09f83e0de7091c16b2ad1adbac8e4499831f77575559a729b7718c09->leave($__internal_a3f802de09f83e0de7091c16b2ad1adbac8e4499831f77575559a729b7718c09_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_31a6469d301583020b81450ff9259e37ea1f9bebccf30d4db2bea6315362799c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31a6469d301583020b81450ff9259e37ea1f9bebccf30d4db2bea6315362799c->enter($__internal_31a6469d301583020b81450ff9259e37ea1f9bebccf30d4db2bea6315362799c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6cc3de9145eb9137172b871882d523696456d0ebab6dac1123bf71fa6bd9281d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cc3de9145eb9137172b871882d523696456d0ebab6dac1123bf71fa6bd9281d->enter($__internal_6cc3de9145eb9137172b871882d523696456d0ebab6dac1123bf71fa6bd9281d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6cc3de9145eb9137172b871882d523696456d0ebab6dac1123bf71fa6bd9281d->leave($__internal_6cc3de9145eb9137172b871882d523696456d0ebab6dac1123bf71fa6bd9281d_prof);

        
        $__internal_31a6469d301583020b81450ff9259e37ea1f9bebccf30d4db2bea6315362799c->leave($__internal_31a6469d301583020b81450ff9259e37ea1f9bebccf30d4db2bea6315362799c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Applications/MAMP/htdocs/symfony/app/Resources/views/base.html.twig");
    }
}
