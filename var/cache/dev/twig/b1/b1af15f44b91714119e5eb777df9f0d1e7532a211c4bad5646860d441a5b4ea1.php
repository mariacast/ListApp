<?php

/* categoria/new.html.twig */
class __TwigTemplate_d1c50bb6b8333bcb2112a79107d09b914287192d20c3f64d7d3c9727478b1492 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "categoria/new.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_252958cb19a3b4718038318215b01873142ce130ba20a4ea5b649a1254b09fe3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_252958cb19a3b4718038318215b01873142ce130ba20a4ea5b649a1254b09fe3->enter($__internal_252958cb19a3b4718038318215b01873142ce130ba20a4ea5b649a1254b09fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "categoria/new.html.twig"));

        $__internal_c10a1c1caca5c11d9547d08b899f24bcc6f5debc13d57785f2e0058eca3d9692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c10a1c1caca5c11d9547d08b899f24bcc6f5debc13d57785f2e0058eca3d9692->enter($__internal_c10a1c1caca5c11d9547d08b899f24bcc6f5debc13d57785f2e0058eca3d9692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "categoria/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_252958cb19a3b4718038318215b01873142ce130ba20a4ea5b649a1254b09fe3->leave($__internal_252958cb19a3b4718038318215b01873142ce130ba20a4ea5b649a1254b09fe3_prof);

        
        $__internal_c10a1c1caca5c11d9547d08b899f24bcc6f5debc13d57785f2e0058eca3d9692->leave($__internal_c10a1c1caca5c11d9547d08b899f24bcc6f5debc13d57785f2e0058eca3d9692_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_a536f6dc55e5ff44fc0df98d3cfbfd3ba5794f9d8c56562d9be201e94d4636d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a536f6dc55e5ff44fc0df98d3cfbfd3ba5794f9d8c56562d9be201e94d4636d2->enter($__internal_a536f6dc55e5ff44fc0df98d3cfbfd3ba5794f9d8c56562d9be201e94d4636d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_35c0ef4f5c6fbf4dc0a79bb74cd2fc248b4fd31605121b694b0cb9dc032bfbe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35c0ef4f5c6fbf4dc0a79bb74cd2fc248b4fd31605121b694b0cb9dc032bfbe9->enter($__internal_35c0ef4f5c6fbf4dc0a79bb74cd2fc248b4fd31605121b694b0cb9dc032bfbe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "New Category";
        
        $__internal_35c0ef4f5c6fbf4dc0a79bb74cd2fc248b4fd31605121b694b0cb9dc032bfbe9->leave($__internal_35c0ef4f5c6fbf4dc0a79bb74cd2fc248b4fd31605121b694b0cb9dc032bfbe9_prof);

        
        $__internal_a536f6dc55e5ff44fc0df98d3cfbfd3ba5794f9d8c56562d9be201e94d4636d2->leave($__internal_a536f6dc55e5ff44fc0df98d3cfbfd3ba5794f9d8c56562d9be201e94d4636d2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_df163487c5f678a447381feed2e7dae3078b7d7bc2729a36c3edfcc36ccd58ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df163487c5f678a447381feed2e7dae3078b7d7bc2729a36c3edfcc36ccd58ae->enter($__internal_df163487c5f678a447381feed2e7dae3078b7d7bc2729a36c3edfcc36ccd58ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_20c2eccbbd6a819687360b5b92b412ff3caad44ed652daa9547d0b6e5b33a34a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20c2eccbbd6a819687360b5b92b412ff3caad44ed652daa9547d0b6e5b33a34a->enter($__internal_20c2eccbbd6a819687360b5b92b412ff3caad44ed652daa9547d0b6e5b33a34a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1 class=\"new-cate-tit\">CREATE CATEGORY</h1>
    <div class=\"form-edit-catego\">
      ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
          ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
          <button  type=\"submit\" class=\"btn-crear\" value=\"Create\">Create <span class=\"icon-stack\"> </span></button>
      ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_20c2eccbbd6a819687360b5b92b412ff3caad44ed652daa9547d0b6e5b33a34a->leave($__internal_20c2eccbbd6a819687360b5b92b412ff3caad44ed652daa9547d0b6e5b33a34a_prof);

        
        $__internal_df163487c5f678a447381feed2e7dae3078b7d7bc2729a36c3edfcc36ccd58ae->leave($__internal_df163487c5f678a447381feed2e7dae3078b7d7bc2729a36c3edfcc36ccd58ae_prof);

    }

    public function getTemplateName()
    {
        return "categoria/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 9,  76 => 7,  72 => 6,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}New Category{% endblock %}
{% block body %}
    <h1 class=\"new-cate-tit\">CREATE CATEGORY</h1>
    <div class=\"form-edit-catego\">
      {{ form_start(form) }}
          {{ form_widget(form) }}
          <button  type=\"submit\" class=\"btn-crear\" value=\"Create\">Create <span class=\"icon-stack\"> </span></button>
      {{ form_end(form) }}

{% endblock %}
", "categoria/new.html.twig", "/home/maria/listapp/app/Resources/views/categoria/new.html.twig");
    }
}
