<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_490088ef8c2d536ba9aa3e4da532e3c9d5d6875dde7bb492995d7d77f4e311f2 extends Twig_Template
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
        $__internal_1e317c204282982f32557e07ebd7c5aeb811040a57a69ef8631edd0d7de4eac9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e317c204282982f32557e07ebd7c5aeb811040a57a69ef8631edd0d7de4eac9->enter($__internal_1e317c204282982f32557e07ebd7c5aeb811040a57a69ef8631edd0d7de4eac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_210c6a6741534a0ea97b0972bb51efa2025607fd6272eabd37b1e7f78f816880 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_210c6a6741534a0ea97b0972bb51efa2025607fd6272eabd37b1e7f78f816880->enter($__internal_210c6a6741534a0ea97b0972bb51efa2025607fd6272eabd37b1e7f78f816880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e317c204282982f32557e07ebd7c5aeb811040a57a69ef8631edd0d7de4eac9->leave($__internal_1e317c204282982f32557e07ebd7c5aeb811040a57a69ef8631edd0d7de4eac9_prof);

        
        $__internal_210c6a6741534a0ea97b0972bb51efa2025607fd6272eabd37b1e7f78f816880->leave($__internal_210c6a6741534a0ea97b0972bb51efa2025607fd6272eabd37b1e7f78f816880_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_865415f949969f80ecafafa3a0f013efb2b6869f81ce762a7a9c38e727d616f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_865415f949969f80ecafafa3a0f013efb2b6869f81ce762a7a9c38e727d616f3->enter($__internal_865415f949969f80ecafafa3a0f013efb2b6869f81ce762a7a9c38e727d616f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f416be144f0e9369fdae26494544d2aab89a709407b99a9cf53f92b2e2409531 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f416be144f0e9369fdae26494544d2aab89a709407b99a9cf53f92b2e2409531->enter($__internal_f416be144f0e9369fdae26494544d2aab89a709407b99a9cf53f92b2e2409531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f416be144f0e9369fdae26494544d2aab89a709407b99a9cf53f92b2e2409531->leave($__internal_f416be144f0e9369fdae26494544d2aab89a709407b99a9cf53f92b2e2409531_prof);

        
        $__internal_865415f949969f80ecafafa3a0f013efb2b6869f81ce762a7a9c38e727d616f3->leave($__internal_865415f949969f80ecafafa3a0f013efb2b6869f81ce762a7a9c38e727d616f3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7ee1be80c49ee3ea71a348a2d6a18fbb2ec86b8bf1fd2b4fa5de7e0cc2fb5a20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ee1be80c49ee3ea71a348a2d6a18fbb2ec86b8bf1fd2b4fa5de7e0cc2fb5a20->enter($__internal_7ee1be80c49ee3ea71a348a2d6a18fbb2ec86b8bf1fd2b4fa5de7e0cc2fb5a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_18f4de8f6e2b440bc73ce092fd65d40908dce6a81b206380f5698928af7e94aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18f4de8f6e2b440bc73ce092fd65d40908dce6a81b206380f5698928af7e94aa->enter($__internal_18f4de8f6e2b440bc73ce092fd65d40908dce6a81b206380f5698928af7e94aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_18f4de8f6e2b440bc73ce092fd65d40908dce6a81b206380f5698928af7e94aa->leave($__internal_18f4de8f6e2b440bc73ce092fd65d40908dce6a81b206380f5698928af7e94aa_prof);

        
        $__internal_7ee1be80c49ee3ea71a348a2d6a18fbb2ec86b8bf1fd2b4fa5de7e0cc2fb5a20->leave($__internal_7ee1be80c49ee3ea71a348a2d6a18fbb2ec86b8bf1fd2b4fa5de7e0cc2fb5a20_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8195d9781547eade56fabb54d27111dd81c650e29d870637b4187923cbc9c789 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8195d9781547eade56fabb54d27111dd81c650e29d870637b4187923cbc9c789->enter($__internal_8195d9781547eade56fabb54d27111dd81c650e29d870637b4187923cbc9c789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3a6e7518e38193df2e1af40a0bbff7073d4952f21e73e4199f964ae116fa5908 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a6e7518e38193df2e1af40a0bbff7073d4952f21e73e4199f964ae116fa5908->enter($__internal_3a6e7518e38193df2e1af40a0bbff7073d4952f21e73e4199f964ae116fa5908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3a6e7518e38193df2e1af40a0bbff7073d4952f21e73e4199f964ae116fa5908->leave($__internal_3a6e7518e38193df2e1af40a0bbff7073d4952f21e73e4199f964ae116fa5908_prof);

        
        $__internal_8195d9781547eade56fabb54d27111dd81c650e29d870637b4187923cbc9c789->leave($__internal_8195d9781547eade56fabb54d27111dd81c650e29d870637b4187923cbc9c789_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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
", "@WebProfiler/Collector/router.html.twig", "/home/maria/listapp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
