<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_16f81aababb64102ebf223bc3f88038d70b8a167117a46a86fee760c718016dc extends Twig_Template
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
        $__internal_fbcab823541be98aa252f69723baa31afe53281f4b38e1b701d2299cce5cad8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbcab823541be98aa252f69723baa31afe53281f4b38e1b701d2299cce5cad8f->enter($__internal_fbcab823541be98aa252f69723baa31afe53281f4b38e1b701d2299cce5cad8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_e2ea2ac01015bfc47ad8b5d9de736f6a66df94154ebecbf8fd6eed4362c6521e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2ea2ac01015bfc47ad8b5d9de736f6a66df94154ebecbf8fd6eed4362c6521e->enter($__internal_e2ea2ac01015bfc47ad8b5d9de736f6a66df94154ebecbf8fd6eed4362c6521e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbcab823541be98aa252f69723baa31afe53281f4b38e1b701d2299cce5cad8f->leave($__internal_fbcab823541be98aa252f69723baa31afe53281f4b38e1b701d2299cce5cad8f_prof);

        
        $__internal_e2ea2ac01015bfc47ad8b5d9de736f6a66df94154ebecbf8fd6eed4362c6521e->leave($__internal_e2ea2ac01015bfc47ad8b5d9de736f6a66df94154ebecbf8fd6eed4362c6521e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d11042e3de47237dbd7ce93163f12b95aa4659bef27fd7c7c92eb58c1bcb22e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d11042e3de47237dbd7ce93163f12b95aa4659bef27fd7c7c92eb58c1bcb22e6->enter($__internal_d11042e3de47237dbd7ce93163f12b95aa4659bef27fd7c7c92eb58c1bcb22e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3755f8b1ff4353b0613b51ad55d2f3376f901cfe8ca0d0040d158d768f4b5727 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3755f8b1ff4353b0613b51ad55d2f3376f901cfe8ca0d0040d158d768f4b5727->enter($__internal_3755f8b1ff4353b0613b51ad55d2f3376f901cfe8ca0d0040d158d768f4b5727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_3755f8b1ff4353b0613b51ad55d2f3376f901cfe8ca0d0040d158d768f4b5727->leave($__internal_3755f8b1ff4353b0613b51ad55d2f3376f901cfe8ca0d0040d158d768f4b5727_prof);

        
        $__internal_d11042e3de47237dbd7ce93163f12b95aa4659bef27fd7c7c92eb58c1bcb22e6->leave($__internal_d11042e3de47237dbd7ce93163f12b95aa4659bef27fd7c7c92eb58c1bcb22e6_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5330e0fcfe5bb0f17ced44efbcbac7f741291c54ee03d9afd9c70a9a4ddae812 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5330e0fcfe5bb0f17ced44efbcbac7f741291c54ee03d9afd9c70a9a4ddae812->enter($__internal_5330e0fcfe5bb0f17ced44efbcbac7f741291c54ee03d9afd9c70a9a4ddae812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_397224f7cd235dd6f3ce6c0ed00ca86294170bba7e813a3c57c0a47e1f69f153 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_397224f7cd235dd6f3ce6c0ed00ca86294170bba7e813a3c57c0a47e1f69f153->enter($__internal_397224f7cd235dd6f3ce6c0ed00ca86294170bba7e813a3c57c0a47e1f69f153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_397224f7cd235dd6f3ce6c0ed00ca86294170bba7e813a3c57c0a47e1f69f153->leave($__internal_397224f7cd235dd6f3ce6c0ed00ca86294170bba7e813a3c57c0a47e1f69f153_prof);

        
        $__internal_5330e0fcfe5bb0f17ced44efbcbac7f741291c54ee03d9afd9c70a9a4ddae812->leave($__internal_5330e0fcfe5bb0f17ced44efbcbac7f741291c54ee03d9afd9c70a9a4ddae812_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7c8acb28d930338f43d979ac20a7c3365b5b80db709f1dfbbf2cfcd2b3d78722 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c8acb28d930338f43d979ac20a7c3365b5b80db709f1dfbbf2cfcd2b3d78722->enter($__internal_7c8acb28d930338f43d979ac20a7c3365b5b80db709f1dfbbf2cfcd2b3d78722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7053d91e5dad8533cf839be751e858ae85eff3494f245e86ab658b4ab6cecb51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7053d91e5dad8533cf839be751e858ae85eff3494f245e86ab658b4ab6cecb51->enter($__internal_7053d91e5dad8533cf839be751e858ae85eff3494f245e86ab658b4ab6cecb51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_7053d91e5dad8533cf839be751e858ae85eff3494f245e86ab658b4ab6cecb51->leave($__internal_7053d91e5dad8533cf839be751e858ae85eff3494f245e86ab658b4ab6cecb51_prof);

        
        $__internal_7c8acb28d930338f43d979ac20a7c3365b5b80db709f1dfbbf2cfcd2b3d78722->leave($__internal_7c8acb28d930338f43d979ac20a7c3365b5b80db709f1dfbbf2cfcd2b3d78722_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/home/maria/listapp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
