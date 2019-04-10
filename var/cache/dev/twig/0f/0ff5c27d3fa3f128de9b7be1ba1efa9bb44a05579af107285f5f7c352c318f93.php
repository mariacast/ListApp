<?php

/* categoria/edit.html.twig */
class __TwigTemplate_a4365f22132e0b535fc5ddf0e860fc0f422877ef889ef965dc44706aa77e76a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "categoria/edit.html.twig", 1);
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
        $__internal_b7fedb607c85159eaf50f668d2b9086d02841b8c53757ae8741762d4f3a3a107 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7fedb607c85159eaf50f668d2b9086d02841b8c53757ae8741762d4f3a3a107->enter($__internal_b7fedb607c85159eaf50f668d2b9086d02841b8c53757ae8741762d4f3a3a107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "categoria/edit.html.twig"));

        $__internal_c16cc061f802efbb50d2f602ad80304e428175aad86ca56e20ebacab24ca5561 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c16cc061f802efbb50d2f602ad80304e428175aad86ca56e20ebacab24ca5561->enter($__internal_c16cc061f802efbb50d2f602ad80304e428175aad86ca56e20ebacab24ca5561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "categoria/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7fedb607c85159eaf50f668d2b9086d02841b8c53757ae8741762d4f3a3a107->leave($__internal_b7fedb607c85159eaf50f668d2b9086d02841b8c53757ae8741762d4f3a3a107_prof);

        
        $__internal_c16cc061f802efbb50d2f602ad80304e428175aad86ca56e20ebacab24ca5561->leave($__internal_c16cc061f802efbb50d2f602ad80304e428175aad86ca56e20ebacab24ca5561_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f615c8c4bdbfa763cfb73118fd8f1a3dac478948b92f5aa5ff51d579d7e3797 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f615c8c4bdbfa763cfb73118fd8f1a3dac478948b92f5aa5ff51d579d7e3797->enter($__internal_6f615c8c4bdbfa763cfb73118fd8f1a3dac478948b92f5aa5ff51d579d7e3797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7154dab09ac46114a28e682c3e63df0c3e6cf635e21a33bd21cd313a22eeac72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7154dab09ac46114a28e682c3e63df0c3e6cf635e21a33bd21cd313a22eeac72->enter($__internal_7154dab09ac46114a28e682c3e63df0c3e6cf635e21a33bd21cd313a22eeac72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Edit Category";
        
        $__internal_7154dab09ac46114a28e682c3e63df0c3e6cf635e21a33bd21cd313a22eeac72->leave($__internal_7154dab09ac46114a28e682c3e63df0c3e6cf635e21a33bd21cd313a22eeac72_prof);

        
        $__internal_6f615c8c4bdbfa763cfb73118fd8f1a3dac478948b92f5aa5ff51d579d7e3797->leave($__internal_6f615c8c4bdbfa763cfb73118fd8f1a3dac478948b92f5aa5ff51d579d7e3797_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_02432a31532f80c89917a447fb558209fc71dcd585cafdead370eadf29caa026 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02432a31532f80c89917a447fb558209fc71dcd585cafdead370eadf29caa026->enter($__internal_02432a31532f80c89917a447fb558209fc71dcd585cafdead370eadf29caa026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_11c0d96a4ab3882547280b2f5d428f9e1cdd0e458d547ae947f7ef0b2b543c35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11c0d96a4ab3882547280b2f5d428f9e1cdd0e458d547ae947f7ef0b2b543c35->enter($__internal_11c0d96a4ab3882547280b2f5d428f9e1cdd0e458d547ae947f7ef0b2b543c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <h1 class=\"edit-cate-tit\">EDIT CATEGORY</h1>
    <div class=\"form-edit-catego\">
      ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
          ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
          <button  type=\"submit\" value=\"Edit\" class=\"btn-save-cate\"><span class=\"icon-clipboard\"> </span>Save</button>
      ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
              ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                  <button  type=\"submit\" class=\"btn-borrar-cate\" value=\"Delete\"><span class=\"icon-cross\"> </span>Delete</button>
              ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_11c0d96a4ab3882547280b2f5d428f9e1cdd0e458d547ae947f7ef0b2b543c35->leave($__internal_11c0d96a4ab3882547280b2f5d428f9e1cdd0e458d547ae947f7ef0b2b543c35_prof);

        
        $__internal_02432a31532f80c89917a447fb558209fc71dcd585cafdead370eadf29caa026->leave($__internal_02432a31532f80c89917a447fb558209fc71dcd585cafdead370eadf29caa026_prof);

    }

    public function getTemplateName()
    {
        return "categoria/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 12,  85 => 10,  81 => 9,  76 => 7,  72 => 6,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
{% block title %}Edit Category{% endblock %}
{% block body %}
  <h1 class=\"edit-cate-tit\">EDIT CATEGORY</h1>
    <div class=\"form-edit-catego\">
      {{ form_start(edit_form) }}
          {{ form_widget(edit_form) }}
          <button  type=\"submit\" value=\"Edit\" class=\"btn-save-cate\"><span class=\"icon-clipboard\"> </span>Save</button>
      {{ form_end(edit_form) }}
              {{ form_start(delete_form) }}
                  <button  type=\"submit\" class=\"btn-borrar-cate\" value=\"Delete\"><span class=\"icon-cross\"> </span>Delete</button>
              {{ form_end(delete_form) }}
    </div>
{% endblock %}
", "categoria/edit.html.twig", "/home/maria/listapp/app/Resources/views/categoria/edit.html.twig");
    }
}
