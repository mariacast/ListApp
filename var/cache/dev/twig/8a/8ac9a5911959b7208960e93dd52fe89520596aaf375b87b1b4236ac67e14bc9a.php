<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_12f738d54aff3bf3f6a56dc81f2505fdcba5d762d3d028c6a50f1a44ad74da5e extends Twig_Template
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
        $__internal_03b0f07e17133e4d8d523f2a27a7b845e14c2dc8fdd65a975341f403d0e797e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03b0f07e17133e4d8d523f2a27a7b845e14c2dc8fdd65a975341f403d0e797e4->enter($__internal_03b0f07e17133e4d8d523f2a27a7b845e14c2dc8fdd65a975341f403d0e797e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_a62fe005ba1508c3412b57acdfb72624cb05a20effb1ea3a5abf3fdf0d9622b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a62fe005ba1508c3412b57acdfb72624cb05a20effb1ea3a5abf3fdf0d9622b3->enter($__internal_a62fe005ba1508c3412b57acdfb72624cb05a20effb1ea3a5abf3fdf0d9622b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03b0f07e17133e4d8d523f2a27a7b845e14c2dc8fdd65a975341f403d0e797e4->leave($__internal_03b0f07e17133e4d8d523f2a27a7b845e14c2dc8fdd65a975341f403d0e797e4_prof);

        
        $__internal_a62fe005ba1508c3412b57acdfb72624cb05a20effb1ea3a5abf3fdf0d9622b3->leave($__internal_a62fe005ba1508c3412b57acdfb72624cb05a20effb1ea3a5abf3fdf0d9622b3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5401c7a8d09eb2cbf295ec6d110c30bb48bd23384824fe507656265c6825d035 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5401c7a8d09eb2cbf295ec6d110c30bb48bd23384824fe507656265c6825d035->enter($__internal_5401c7a8d09eb2cbf295ec6d110c30bb48bd23384824fe507656265c6825d035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_78d3047918d233c977041fc0ab20a6628a21b172625ce95a0881255aa4642c51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78d3047918d233c977041fc0ab20a6628a21b172625ce95a0881255aa4642c51->enter($__internal_78d3047918d233c977041fc0ab20a6628a21b172625ce95a0881255aa4642c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_78d3047918d233c977041fc0ab20a6628a21b172625ce95a0881255aa4642c51->leave($__internal_78d3047918d233c977041fc0ab20a6628a21b172625ce95a0881255aa4642c51_prof);

        
        $__internal_5401c7a8d09eb2cbf295ec6d110c30bb48bd23384824fe507656265c6825d035->leave($__internal_5401c7a8d09eb2cbf295ec6d110c30bb48bd23384824fe507656265c6825d035_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_837e7c2fe53db5e76c7e331f8188d12a6e006572df2b0977bd7b199d4b1d6534 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_837e7c2fe53db5e76c7e331f8188d12a6e006572df2b0977bd7b199d4b1d6534->enter($__internal_837e7c2fe53db5e76c7e331f8188d12a6e006572df2b0977bd7b199d4b1d6534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_867fb9198343966e896711a0e522bc22b483d9f9d9b7f216652d527ba03d0635 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_867fb9198343966e896711a0e522bc22b483d9f9d9b7f216652d527ba03d0635->enter($__internal_867fb9198343966e896711a0e522bc22b483d9f9d9b7f216652d527ba03d0635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_867fb9198343966e896711a0e522bc22b483d9f9d9b7f216652d527ba03d0635->leave($__internal_867fb9198343966e896711a0e522bc22b483d9f9d9b7f216652d527ba03d0635_prof);

        
        $__internal_837e7c2fe53db5e76c7e331f8188d12a6e006572df2b0977bd7b199d4b1d6534->leave($__internal_837e7c2fe53db5e76c7e331f8188d12a6e006572df2b0977bd7b199d4b1d6534_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4f765413eaad03e14ba532c1cf51fb3f2559b95aa5d57d752c7f41cd85692c26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f765413eaad03e14ba532c1cf51fb3f2559b95aa5d57d752c7f41cd85692c26->enter($__internal_4f765413eaad03e14ba532c1cf51fb3f2559b95aa5d57d752c7f41cd85692c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e108da10ba022ff0ddc3ba2c6aa2ff6969787c4c3b2fe26dba988da4b11acab2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e108da10ba022ff0ddc3ba2c6aa2ff6969787c4c3b2fe26dba988da4b11acab2->enter($__internal_e108da10ba022ff0ddc3ba2c6aa2ff6969787c4c3b2fe26dba988da4b11acab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_e108da10ba022ff0ddc3ba2c6aa2ff6969787c4c3b2fe26dba988da4b11acab2->leave($__internal_e108da10ba022ff0ddc3ba2c6aa2ff6969787c4c3b2fe26dba988da4b11acab2_prof);

        
        $__internal_4f765413eaad03e14ba532c1cf51fb3f2559b95aa5d57d752c7f41cd85692c26->leave($__internal_4f765413eaad03e14ba532c1cf51fb3f2559b95aa5d57d752c7f41cd85692c26_prof);

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
