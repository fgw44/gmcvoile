<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_259e7b6c0b8f8bbd5c612359c0f2a067ad6f45e1be4385b6a681984206229ce7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_a085a2f272c6f3563d480e31312fe9bef0b527c67e7fcad133f4adc66bb288c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a085a2f272c6f3563d480e31312fe9bef0b527c67e7fcad133f4adc66bb288c6->enter($__internal_a085a2f272c6f3563d480e31312fe9bef0b527c67e7fcad133f4adc66bb288c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a085a2f272c6f3563d480e31312fe9bef0b527c67e7fcad133f4adc66bb288c6->leave($__internal_a085a2f272c6f3563d480e31312fe9bef0b527c67e7fcad133f4adc66bb288c6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4de6ad4285a47444fdca73ca4619bf972e49552f3327c679da1ac7c474f40a53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4de6ad4285a47444fdca73ca4619bf972e49552f3327c679da1ac7c474f40a53->enter($__internal_4de6ad4285a47444fdca73ca4619bf972e49552f3327c679da1ac7c474f40a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_4de6ad4285a47444fdca73ca4619bf972e49552f3327c679da1ac7c474f40a53->leave($__internal_4de6ad4285a47444fdca73ca4619bf972e49552f3327c679da1ac7c474f40a53_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6eead41f8f2f0b1b60fb22e5cc1cd7f782895772d0f9dc73c82dd7949f3cbc49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eead41f8f2f0b1b60fb22e5cc1cd7f782895772d0f9dc73c82dd7949f3cbc49->enter($__internal_6eead41f8f2f0b1b60fb22e5cc1cd7f782895772d0f9dc73c82dd7949f3cbc49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6eead41f8f2f0b1b60fb22e5cc1cd7f782895772d0f9dc73c82dd7949f3cbc49->leave($__internal_6eead41f8f2f0b1b60fb22e5cc1cd7f782895772d0f9dc73c82dd7949f3cbc49_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a1489f1e0523812f5d134746f4e6e51d4f6110151ceadc988d5f0505c829031f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1489f1e0523812f5d134746f4e6e51d4f6110151ceadc988d5f0505c829031f->enter($__internal_a1489f1e0523812f5d134746f4e6e51d4f6110151ceadc988d5f0505c829031f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a1489f1e0523812f5d134746f4e6e51d4f6110151ceadc988d5f0505c829031f->leave($__internal_a1489f1e0523812f5d134746f4e6e51d4f6110151ceadc988d5f0505c829031f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/fred/Drive/Documents/99_VOI/GMC/NewSite/root/touline/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
