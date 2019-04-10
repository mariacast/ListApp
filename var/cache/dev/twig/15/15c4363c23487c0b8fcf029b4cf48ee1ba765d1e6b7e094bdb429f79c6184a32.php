<?php

/* categoria/edit.html.twig */
class __TwigTemplate_399d4fab849d50ddb686b78a6ddd8295da54a4d934e278e1e9d373baaeb27dcc extends Twig_Template
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
        $__internal_9cd812734b4780883adda782182243833357ed7f91b075356b6c56d033040eec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cd812734b4780883adda782182243833357ed7f91b075356b6c56d033040eec->enter($__internal_9cd812734b4780883adda782182243833357ed7f91b075356b6c56d033040eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "categoria/edit.html.twig"));

        $__internal_8b8d8f2ef71fc998e8fe8edb1524bfd162a1b371dd78300005736b4b21bf9af1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b8d8f2ef71fc998e8fe8edb1524bfd162a1b371dd78300005736b4b21bf9af1->enter($__internal_8b8d8f2ef71fc998e8fe8edb1524bfd162a1b371dd78300005736b4b21bf9af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "categoria/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cd812734b4780883adda782182243833357ed7f91b075356b6c56d033040eec->leave($__internal_9cd812734b4780883adda782182243833357ed7f91b075356b6c56d033040eec_prof);

        
        $__internal_8b8d8f2ef71fc998e8fe8edb1524bfd162a1b371dd78300005736b4b21bf9af1->leave($__internal_8b8d8f2ef71fc998e8fe8edb1524bfd162a1b371dd78300005736b4b21bf9af1_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_0cb1724ec9bdfd9c782682993af62431bf1899f8e30a5f3be6b54eaa8c73de90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cb1724ec9bdfd9c782682993af62431bf1899f8e30a5f3be6b54eaa8c73de90->enter($__internal_0cb1724ec9bdfd9c782682993af62431bf1899f8e30a5f3be6b54eaa8c73de90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4991bb28e7f62190dd12a7f577c90ac63688fdb76102276e7938054140d36794 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4991bb28e7f62190dd12a7f577c90ac63688fdb76102276e7938054140d36794->enter($__internal_4991bb28e7f62190dd12a7f577c90ac63688fdb76102276e7938054140d36794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Edit Category";
        
        $__internal_4991bb28e7f62190dd12a7f577c90ac63688fdb76102276e7938054140d36794->leave($__internal_4991bb28e7f62190dd12a7f577c90ac63688fdb76102276e7938054140d36794_prof);

        
        $__internal_0cb1724ec9bdfd9c782682993af62431bf1899f8e30a5f3be6b54eaa8c73de90->leave($__internal_0cb1724ec9bdfd9c782682993af62431bf1899f8e30a5f3be6b54eaa8c73de90_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e7fabc4c35bdaba354b154205c793d29bf4131287b95c51ad05cc1c698d287f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e7fabc4c35bdaba354b154205c793d29bf4131287b95c51ad05cc1c698d287f->enter($__internal_0e7fabc4c35bdaba354b154205c793d29bf4131287b95c51ad05cc1c698d287f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d99ce541a16aaa44a98c04a8608b63bc01c17ccca27ea2cb5ff9807dfd0fda1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d99ce541a16aaa44a98c04a8608b63bc01c17ccca27ea2cb5ff9807dfd0fda1c->enter($__internal_d99ce541a16aaa44a98c04a8608b63bc01c17ccca27ea2cb5ff9807dfd0fda1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <h1 class=\"edit-cate-tit\">EDIT CATEGORY</h1>
    <div class=\"form-edit-catego\">
      ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
          ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
          <button  type=\"submit\" value=\"Edit\" class=\"btn-save-cate\"><span class=\"icon-clipboard\"> </span>Save</button>
      ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
              ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                  <button  type=\"submit\" class=\"btn-borrar-cate\" value=\"Delete\"><span class=\"icon-cross\"> </span>Delete</button>
              ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_d99ce541a16aaa44a98c04a8608b63bc01c17ccca27ea2cb5ff9807dfd0fda1c->leave($__internal_d99ce541a16aaa44a98c04a8608b63bc01c17ccca27ea2cb5ff9807dfd0fda1c_prof);

        
        $__internal_0e7fabc4c35bdaba354b154205c793d29bf4131287b95c51ad05cc1c698d287f->leave($__internal_0e7fabc4c35bdaba354b154205c793d29bf4131287b95c51ad05cc1c698d287f_prof);

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
