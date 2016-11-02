<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c372a7cf4a40f45acfde84f51d92434fb24b6fc7ca0c619b50abf02e6e9fd656 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aaf8193ffc257d2e647b462f48ab1296dc2f748679d5502bc3d7e8178651a9ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaf8193ffc257d2e647b462f48ab1296dc2f748679d5502bc3d7e8178651a9ff->enter($__internal_aaf8193ffc257d2e647b462f48ab1296dc2f748679d5502bc3d7e8178651a9ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aaf8193ffc257d2e647b462f48ab1296dc2f748679d5502bc3d7e8178651a9ff->leave($__internal_aaf8193ffc257d2e647b462f48ab1296dc2f748679d5502bc3d7e8178651a9ff_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4c9738a59290788b62923a75f5392054570043755609b9abb40c8106770b735c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c9738a59290788b62923a75f5392054570043755609b9abb40c8106770b735c->enter($__internal_4c9738a59290788b62923a75f5392054570043755609b9abb40c8106770b735c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4c9738a59290788b62923a75f5392054570043755609b9abb40c8106770b735c->leave($__internal_4c9738a59290788b62923a75f5392054570043755609b9abb40c8106770b735c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_dbb3bb43fbbeebd032909360dc71541064ac864b320af40bf03b4a5fc5a1c060 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbb3bb43fbbeebd032909360dc71541064ac864b320af40bf03b4a5fc5a1c060->enter($__internal_dbb3bb43fbbeebd032909360dc71541064ac864b320af40bf03b4a5fc5a1c060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_dbb3bb43fbbeebd032909360dc71541064ac864b320af40bf03b4a5fc5a1c060->leave($__internal_dbb3bb43fbbeebd032909360dc71541064ac864b320af40bf03b4a5fc5a1c060_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_05c1b507bc86356862ccdbfdf206c187e3524c96c3230a48c612a413cc4f12f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05c1b507bc86356862ccdbfdf206c187e3524c96c3230a48c612a413cc4f12f9->enter($__internal_05c1b507bc86356862ccdbfdf206c187e3524c96c3230a48c612a413cc4f12f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_05c1b507bc86356862ccdbfdf206c187e3524c96c3230a48c612a413cc4f12f9->leave($__internal_05c1b507bc86356862ccdbfdf206c187e3524c96c3230a48c612a413cc4f12f9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/fred/Drive/Documents/99_VOI/GMC/NewSite/root/touline/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
