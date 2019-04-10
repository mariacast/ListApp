<?php

/* categoria/index.html.twig */
class __TwigTemplate_24256363ac5f0b15b76c772e02d56e486957b84627257e2dd75be4238dba315e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "categoria/index.html.twig", 1);
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
        $__internal_190958585d921bdea6943a557c263c3978f5688f7079f9a0f3f7d9f130db6ffb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_190958585d921bdea6943a557c263c3978f5688f7079f9a0f3f7d9f130db6ffb->enter($__internal_190958585d921bdea6943a557c263c3978f5688f7079f9a0f3f7d9f130db6ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "categoria/index.html.twig"));

        $__internal_30b8f26b70901b3fe9695ffae95ddd1bf07fe10e554724679c0a6eb80e114e59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30b8f26b70901b3fe9695ffae95ddd1bf07fe10e554724679c0a6eb80e114e59->enter($__internal_30b8f26b70901b3fe9695ffae95ddd1bf07fe10e554724679c0a6eb80e114e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "categoria/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_190958585d921bdea6943a557c263c3978f5688f7079f9a0f3f7d9f130db6ffb->leave($__internal_190958585d921bdea6943a557c263c3978f5688f7079f9a0f3f7d9f130db6ffb_prof);

        
        $__internal_30b8f26b70901b3fe9695ffae95ddd1bf07fe10e554724679c0a6eb80e114e59->leave($__internal_30b8f26b70901b3fe9695ffae95ddd1bf07fe10e554724679c0a6eb80e114e59_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_d8658c3ee1c801cf9818b6f3a06adcae0803eef86545908c5484b3b26089777f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8658c3ee1c801cf9818b6f3a06adcae0803eef86545908c5484b3b26089777f->enter($__internal_d8658c3ee1c801cf9818b6f3a06adcae0803eef86545908c5484b3b26089777f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bb55395082bdf75711fb5ea86adba870a3d39109efbe65726e7033feee1433e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb55395082bdf75711fb5ea86adba870a3d39109efbe65726e7033feee1433e1->enter($__internal_bb55395082bdf75711fb5ea86adba870a3d39109efbe65726e7033feee1433e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Categories";
        
        $__internal_bb55395082bdf75711fb5ea86adba870a3d39109efbe65726e7033feee1433e1->leave($__internal_bb55395082bdf75711fb5ea86adba870a3d39109efbe65726e7033feee1433e1_prof);

        
        $__internal_d8658c3ee1c801cf9818b6f3a06adcae0803eef86545908c5484b3b26089777f->leave($__internal_d8658c3ee1c801cf9818b6f3a06adcae0803eef86545908c5484b3b26089777f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_08ff23e172b9219436578df72411c0b53857464bcda8bc972bdb6f83ca160291 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08ff23e172b9219436578df72411c0b53857464bcda8bc972bdb6f83ca160291->enter($__internal_08ff23e172b9219436578df72411c0b53857464bcda8bc972bdb6f83ca160291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_472b6b70c63e50102e52e4073fa3e683dfd3b29a2efaedc64386b717ce84979a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_472b6b70c63e50102e52e4073fa3e683dfd3b29a2efaedc64386b717ce84979a->enter($__internal_472b6b70c63e50102e52e4073fa3e683dfd3b29a2efaedc64386b717ce84979a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1 class=\"titulo2\">CATEGORIES</h1>
<div class=\"content\">
    <table id=\"list-catego\"class=\"table table-hover\">
        <thead>
            <tr>
                <th>N°</th>
                <th>NAME</th>
                <th colspan=\"2\">ACTIONS</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categorias"] ?? $this->getContext($context, "categorias")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["categorium"]) {
            // line 16
            echo "            <tr>
                <td><a>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</a></td>
                <td><a class=\"user\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categoria_show", array("id" => $this->getAttribute($context["categorium"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorium"], "nombre", array()), "html", null, true);
            echo "</a></td>
                <td><a class=\"b_editar\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categoria_show", array("id" => $this->getAttribute($context["categorium"], "id", array()))), "html", null, true);
            echo "\"><span class=\"icon-eye\"> </span>Show</a></td>
                <td><a class=\"b_editar\"  href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categoria_edit", array("id" => $this->getAttribute($context["categorium"], "id", array()))), "html", null, true);
            echo "\"><span class=\"icon-pencil\"> </span>Edit</a></td>
            </tr>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorium'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </tbody>
    </table>
</div>
    <ul>
        <li>
            <a class=\"b_create\" href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categoria_new");
        echo "\">New Category  <span class=\"icon-stack\"> </span></a>
        </li>
    </ul>


";
        
        $__internal_472b6b70c63e50102e52e4073fa3e683dfd3b29a2efaedc64386b717ce84979a->leave($__internal_472b6b70c63e50102e52e4073fa3e683dfd3b29a2efaedc64386b717ce84979a_prof);

        
        $__internal_08ff23e172b9219436578df72411c0b53857464bcda8bc972bdb6f83ca160291->leave($__internal_08ff23e172b9219436578df72411c0b53857464bcda8bc972bdb6f83ca160291_prof);

    }

    public function getTemplateName()
    {
        return "categoria/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 28,  132 => 23,  115 => 20,  111 => 19,  105 => 18,  101 => 17,  98 => 16,  81 => 15,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
{% block title %}Categories{% endblock %}
{% block body %}
<h1 class=\"titulo2\">CATEGORIES</h1>
<div class=\"content\">
    <table id=\"list-catego\"class=\"table table-hover\">
        <thead>
            <tr>
                <th>N°</th>
                <th>NAME</th>
                <th colspan=\"2\">ACTIONS</th>
            </tr>
        </thead>
        <tbody>
        {% for categorium in categorias %}
            <tr>
                <td><a>{{ loop.index }}</a></td>
                <td><a class=\"user\" href=\"{{ path('categoria_show', { 'id': categorium.id }) }}\">{{ categorium.nombre }}</a></td>
                <td><a class=\"b_editar\" href=\"{{ path('categoria_show', { 'id': categorium.id }) }}\"><span class=\"icon-eye\"> </span>Show</a></td>
                <td><a class=\"b_editar\"  href=\"{{ path('categoria_edit', { 'id': categorium.id }) }}\"><span class=\"icon-pencil\"> </span>Edit</a></td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>
    <ul>
        <li>
            <a class=\"b_create\" href=\"{{ path('categoria_new') }}\">New Category  <span class=\"icon-stack\"> </span></a>
        </li>
    </ul>


{% endblock %}
", "categoria/index.html.twig", "/home/maria/listapp/app/Resources/views/categoria/index.html.twig");
    }
}
