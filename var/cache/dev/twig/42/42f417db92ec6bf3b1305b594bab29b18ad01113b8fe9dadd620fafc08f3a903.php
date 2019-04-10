<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c04aae403a0f20b772cf8876df3d12a345a6f2d0fc4211b26c942dd4104714b3 extends Twig_Template
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
        $__internal_c204bdc7a868ff3a0e38916860817f6803c2ccd4121075c92b40af526dc5fdb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c204bdc7a868ff3a0e38916860817f6803c2ccd4121075c92b40af526dc5fdb9->enter($__internal_c204bdc7a868ff3a0e38916860817f6803c2ccd4121075c92b40af526dc5fdb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e1562527bbbd699060fdbbd6a94f7e447e48b094289fbd4632c350dee7bb0d68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1562527bbbd699060fdbbd6a94f7e447e48b094289fbd4632c350dee7bb0d68->enter($__internal_e1562527bbbd699060fdbbd6a94f7e447e48b094289fbd4632c350dee7bb0d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c204bdc7a868ff3a0e38916860817f6803c2ccd4121075c92b40af526dc5fdb9->leave($__internal_c204bdc7a868ff3a0e38916860817f6803c2ccd4121075c92b40af526dc5fdb9_prof);

        
        $__internal_e1562527bbbd699060fdbbd6a94f7e447e48b094289fbd4632c350dee7bb0d68->leave($__internal_e1562527bbbd699060fdbbd6a94f7e447e48b094289fbd4632c350dee7bb0d68_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6444e08dc2d57cc0b3e629767a4107328f84401539646db75a4cd2cc5b42b7de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6444e08dc2d57cc0b3e629767a4107328f84401539646db75a4cd2cc5b42b7de->enter($__internal_6444e08dc2d57cc0b3e629767a4107328f84401539646db75a4cd2cc5b42b7de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a9eb707d0c6f0968b0f000654ae00770f9d9d776d67b46cdced819dc93fabba5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9eb707d0c6f0968b0f000654ae00770f9d9d776d67b46cdced819dc93fabba5->enter($__internal_a9eb707d0c6f0968b0f000654ae00770f9d9d776d67b46cdced819dc93fabba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a9eb707d0c6f0968b0f000654ae00770f9d9d776d67b46cdced819dc93fabba5->leave($__internal_a9eb707d0c6f0968b0f000654ae00770f9d9d776d67b46cdced819dc93fabba5_prof);

        
        $__internal_6444e08dc2d57cc0b3e629767a4107328f84401539646db75a4cd2cc5b42b7de->leave($__internal_6444e08dc2d57cc0b3e629767a4107328f84401539646db75a4cd2cc5b42b7de_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bab530f035c4e0949c2392c5c81f47cb1cc3e5fc3596527e198f914e7ab05fcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bab530f035c4e0949c2392c5c81f47cb1cc3e5fc3596527e198f914e7ab05fcb->enter($__internal_bab530f035c4e0949c2392c5c81f47cb1cc3e5fc3596527e198f914e7ab05fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4a04978fca9d99d7243102d6c70d3f3b4b517e2f876a67f43443663fc2d552a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a04978fca9d99d7243102d6c70d3f3b4b517e2f876a67f43443663fc2d552a8->enter($__internal_4a04978fca9d99d7243102d6c70d3f3b4b517e2f876a67f43443663fc2d552a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4a04978fca9d99d7243102d6c70d3f3b4b517e2f876a67f43443663fc2d552a8->leave($__internal_4a04978fca9d99d7243102d6c70d3f3b4b517e2f876a67f43443663fc2d552a8_prof);

        
        $__internal_bab530f035c4e0949c2392c5c81f47cb1cc3e5fc3596527e198f914e7ab05fcb->leave($__internal_bab530f035c4e0949c2392c5c81f47cb1cc3e5fc3596527e198f914e7ab05fcb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ffffa187fe881d1e1d6d77b5f7babdd78804866333152154a71d8649dc9319b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffffa187fe881d1e1d6d77b5f7babdd78804866333152154a71d8649dc9319b7->enter($__internal_ffffa187fe881d1e1d6d77b5f7babdd78804866333152154a71d8649dc9319b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d1dd4da296c7dd163b91817c85562fe844e38f9c0a3dca5e31afb229a8f5e871 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1dd4da296c7dd163b91817c85562fe844e38f9c0a3dca5e31afb229a8f5e871->enter($__internal_d1dd4da296c7dd163b91817c85562fe844e38f9c0a3dca5e31afb229a8f5e871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d1dd4da296c7dd163b91817c85562fe844e38f9c0a3dca5e31afb229a8f5e871->leave($__internal_d1dd4da296c7dd163b91817c85562fe844e38f9c0a3dca5e31afb229a8f5e871_prof);

        
        $__internal_ffffa187fe881d1e1d6d77b5f7babdd78804866333152154a71d8649dc9319b7->leave($__internal_ffffa187fe881d1e1d6d77b5f7babdd78804866333152154a71d8649dc9319b7_prof);

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
