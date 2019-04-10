<?php

/* categoria/show.html.twig */
class __TwigTemplate_261fb06210b2d2349821c3dca47a961edac457fa073200184a17d86b3d837c6c extends Twig_Template
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
        $__internal_73cb547691f913501a98fc8e49e05de99c536bd3fd8d3f108be15c38215163bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73cb547691f913501a98fc8e49e05de99c536bd3fd8d3f108be15c38215163bf->enter($__internal_73cb547691f913501a98fc8e49e05de99c536bd3fd8d3f108be15c38215163bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "categoria/show.html.twig"));

        $__internal_819d0b145f826ce5f654cf2adf7e3a40dcb02f7f72985034f0858bf4d1eda0c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_819d0b145f826ce5f654cf2adf7e3a40dcb02f7f72985034f0858bf4d1eda0c1->enter($__internal_819d0b145f826ce5f654cf2adf7e3a40dcb02f7f72985034f0858bf4d1eda0c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "categoria/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73cb547691f913501a98fc8e49e05de99c536bd3fd8d3f108be15c38215163bf->leave($__internal_73cb547691f913501a98fc8e49e05de99c536bd3fd8d3f108be15c38215163bf_prof);

        
        $__internal_819d0b145f826ce5f654cf2adf7e3a40dcb02f7f72985034f0858bf4d1eda0c1->leave($__internal_819d0b145f826ce5f654cf2adf7e3a40dcb02f7f72985034f0858bf4d1eda0c1_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_36c8a95c5cec27c584d7e88f34c2fb76e0807fb6f05c8949c1a60ef0ece8e822 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36c8a95c5cec27c584d7e88f34c2fb76e0807fb6f05c8949c1a60ef0ece8e822->enter($__internal_36c8a95c5cec27c584d7e88f34c2fb76e0807fb6f05c8949c1a60ef0ece8e822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7f73d676dfea207f2df54e03e732a9b672d7eb2438d494b18b7da034d7ee73ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f73d676dfea207f2df54e03e732a9b672d7eb2438d494b18b7da034d7ee73ce->enter($__internal_7f73d676dfea207f2df54e03e732a9b672d7eb2438d494b18b7da034d7ee73ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Show Category";
        
        $__internal_7f73d676dfea207f2df54e03e732a9b672d7eb2438d494b18b7da034d7ee73ce->leave($__internal_7f73d676dfea207f2df54e03e732a9b672d7eb2438d494b18b7da034d7ee73ce_prof);

        
        $__internal_36c8a95c5cec27c584d7e88f34c2fb76e0807fb6f05c8949c1a60ef0ece8e822->leave($__internal_36c8a95c5cec27c584d7e88f34c2fb76e0807fb6f05c8949c1a60ef0ece8e822_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f0d81cb5ef9bc75f880a21a8dccb12c0ff48448d42e0351d1b9a919e966689c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f0d81cb5ef9bc75f880a21a8dccb12c0ff48448d42e0351d1b9a919e966689c->enter($__internal_3f0d81cb5ef9bc75f880a21a8dccb12c0ff48448d42e0351d1b9a919e966689c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e100d01c41cc7bfbe0ea2c6cb38f582b042c5bcc44eb820736683977e49e331f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e100d01c41cc7bfbe0ea2c6cb38f582b042c5bcc44eb820736683977e49e331f->enter($__internal_e100d01c41cc7bfbe0ea2c6cb38f582b042c5bcc44eb820736683977e49e331f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorium"]) ? $context["categorium"] : $this->getContext($context, "categorium")), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
    <div class=\"btns_show\">
        <a class=\"btn-editarCat\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categoria_edit", array("id" => $this->getAttribute((isset($context["categorium"]) ? $context["categorium"] : $this->getContext($context, "categorium")), "id", array()))), "html", null, true);
        echo "\"><span class=\"icon-pencil\"> </span>Edit</a>

            ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <button  type=\"submit\" class=\"btn-borrarCat\" value=\"Delete\"><span class=\"icon-cross\"> </span>Delete</button>
            ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "

    </div>
";
        
        $__internal_e100d01c41cc7bfbe0ea2c6cb38f582b042c5bcc44eb820736683977e49e331f->leave($__internal_e100d01c41cc7bfbe0ea2c6cb38f582b042c5bcc44eb820736683977e49e331f_prof);

        
        $__internal_3f0d81cb5ef9bc75f880a21a8dccb12c0ff48448d42e0351d1b9a919e966689c->leave($__internal_3f0d81cb5ef9bc75f880a21a8dccb12c0ff48448d42e0351d1b9a919e966689c_prof);

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
