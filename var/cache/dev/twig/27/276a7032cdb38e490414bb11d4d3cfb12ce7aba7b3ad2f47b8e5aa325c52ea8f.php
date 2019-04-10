<?php

/* categoria/show.html.twig */
class __TwigTemplate_262e952e4123d3842db0c9571710db958e710509ed2b261a987475b890851f2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "categoria/show.html.twig", 1);
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
        $__internal_255828cb68b426ae1b440ca384153856a81303a20502c99e5d5de9986f75184b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_255828cb68b426ae1b440ca384153856a81303a20502c99e5d5de9986f75184b->enter($__internal_255828cb68b426ae1b440ca384153856a81303a20502c99e5d5de9986f75184b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "categoria/show.html.twig"));

        $__internal_bffe9aa8566e030f4d5c2b293877b3e1a25b4d7bcdd97218d1eba43d2e013eff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bffe9aa8566e030f4d5c2b293877b3e1a25b4d7bcdd97218d1eba43d2e013eff->enter($__internal_bffe9aa8566e030f4d5c2b293877b3e1a25b4d7bcdd97218d1eba43d2e013eff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "categoria/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_255828cb68b426ae1b440ca384153856a81303a20502c99e5d5de9986f75184b->leave($__internal_255828cb68b426ae1b440ca384153856a81303a20502c99e5d5de9986f75184b_prof);

        
        $__internal_bffe9aa8566e030f4d5c2b293877b3e1a25b4d7bcdd97218d1eba43d2e013eff->leave($__internal_bffe9aa8566e030f4d5c2b293877b3e1a25b4d7bcdd97218d1eba43d2e013eff_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_993718a5db06adc6f685ccba7fbc2a6352ff28c2846c7c0a06c099059ec31752 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_993718a5db06adc6f685ccba7fbc2a6352ff28c2846c7c0a06c099059ec31752->enter($__internal_993718a5db06adc6f685ccba7fbc2a6352ff28c2846c7c0a06c099059ec31752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_718f6a3da119d463a363f154cd20018f7537a01acbbfa76073c13e13804d0fbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_718f6a3da119d463a363f154cd20018f7537a01acbbfa76073c13e13804d0fbc->enter($__internal_718f6a3da119d463a363f154cd20018f7537a01acbbfa76073c13e13804d0fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Show Category";
        
        $__internal_718f6a3da119d463a363f154cd20018f7537a01acbbfa76073c13e13804d0fbc->leave($__internal_718f6a3da119d463a363f154cd20018f7537a01acbbfa76073c13e13804d0fbc_prof);

        
        $__internal_993718a5db06adc6f685ccba7fbc2a6352ff28c2846c7c0a06c099059ec31752->leave($__internal_993718a5db06adc6f685ccba7fbc2a6352ff28c2846c7c0a06c099059ec31752_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ce8bd7d659ce1b68ea155b27f1620dd83efa4ab70e4be81b56839dedb11d9a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ce8bd7d659ce1b68ea155b27f1620dd83efa4ab70e4be81b56839dedb11d9a9->enter($__internal_2ce8bd7d659ce1b68ea155b27f1620dd83efa4ab70e4be81b56839dedb11d9a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e380968846a9eaec7aff6952655eda1abac14ac398c4d0dfd718ea152ee57852 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e380968846a9eaec7aff6952655eda1abac14ac398c4d0dfd718ea152ee57852->enter($__internal_e380968846a9eaec7aff6952655eda1abac14ac398c4d0dfd718ea152ee57852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h1 class=\"show-cate-tit\">CATEGORY</h1>
<div class=\"content\">
    <table id=\"list-catego-show\"class=\"table table-hover\">
        <thead>
          <tr>
              <th>Nombre</th>
          </tr>
        <tbody>
            <tr>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["categorium"] ?? $this->getContext($context, "categorium")), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
    <div class=\"btns_show\">
        <a class=\"btn-editarCat\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categoria_edit", array("id" => $this->getAttribute(($context["categorium"] ?? $this->getContext($context, "categorium")), "id", array()))), "html", null, true);
        echo "\"><span class=\"icon-pencil\"> </span>Edit</a>

            ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <button  type=\"submit\" class=\"btn-borrarCat\" value=\"Delete\"><span class=\"icon-cross\"> </span>Delete</button>
            ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "

    </div>
";
        
        $__internal_e380968846a9eaec7aff6952655eda1abac14ac398c4d0dfd718ea152ee57852->leave($__internal_e380968846a9eaec7aff6952655eda1abac14ac398c4d0dfd718ea152ee57852_prof);

        
        $__internal_2ce8bd7d659ce1b68ea155b27f1620dd83efa4ab70e4be81b56839dedb11d9a9->leave($__internal_2ce8bd7d659ce1b68ea155b27f1620dd83efa4ab70e4be81b56839dedb11d9a9_prof);

    }

    public function getTemplateName()
    {
        return "categoria/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 23,  93 => 21,  88 => 19,  80 => 14,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
{% block title %}Show Category{% endblock %}
{% block body %}

<h1 class=\"show-cate-tit\">CATEGORY</h1>
<div class=\"content\">
    <table id=\"list-catego-show\"class=\"table table-hover\">
        <thead>
          <tr>
              <th>Nombre</th>
          </tr>
        <tbody>
            <tr>
                <td>{{ categorium.nombre }}</td>
            </tr>
        </tbody>
    </table>
    <div class=\"btns_show\">
        <a class=\"btn-editarCat\" href=\"{{ path('categoria_edit', { 'id': categorium.id }) }}\"><span class=\"icon-pencil\"> </span>Edit</a>

            {{ form_start(delete_form) }}
                <button  type=\"submit\" class=\"btn-borrarCat\" value=\"Delete\"><span class=\"icon-cross\"> </span>Delete</button>
            {{ form_end(delete_form) }}

    </div>
{% endblock %}
", "categoria/show.html.twig", "/home/maria/listapp/app/Resources/views/categoria/show.html.twig");
    }
}
