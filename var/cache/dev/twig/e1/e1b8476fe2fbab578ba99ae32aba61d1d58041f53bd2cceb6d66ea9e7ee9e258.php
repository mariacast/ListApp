<?php

/* user/index.html.twig */
class __TwigTemplate_0a0e4b96bbec35efa22a3fdb54b480ce1280e38e1711dc616492ef9749a79e6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
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
        $__internal_6575dd927789337520be5c42c20afaa5b7f78d944ceb6948c99dd70c6cc4a5ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6575dd927789337520be5c42c20afaa5b7f78d944ceb6948c99dd70c6cc4a5ce->enter($__internal_6575dd927789337520be5c42c20afaa5b7f78d944ceb6948c99dd70c6cc4a5ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_db03c275e714ae0c90cd85a1d7706325a365111d9ea4fa82192c2bcebc20b496 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db03c275e714ae0c90cd85a1d7706325a365111d9ea4fa82192c2bcebc20b496->enter($__internal_db03c275e714ae0c90cd85a1d7706325a365111d9ea4fa82192c2bcebc20b496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6575dd927789337520be5c42c20afaa5b7f78d944ceb6948c99dd70c6cc4a5ce->leave($__internal_6575dd927789337520be5c42c20afaa5b7f78d944ceb6948c99dd70c6cc4a5ce_prof);

        
        $__internal_db03c275e714ae0c90cd85a1d7706325a365111d9ea4fa82192c2bcebc20b496->leave($__internal_db03c275e714ae0c90cd85a1d7706325a365111d9ea4fa82192c2bcebc20b496_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_c94546dcdb0e2228b8899c3d96138a99ba53c4bd72db89d3222ae13326fb162f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c94546dcdb0e2228b8899c3d96138a99ba53c4bd72db89d3222ae13326fb162f->enter($__internal_c94546dcdb0e2228b8899c3d96138a99ba53c4bd72db89d3222ae13326fb162f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6ebd398b4da96ba99f144e58df992f11ebdffcd7f55caac12770425fb4ea7fa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ebd398b4da96ba99f144e58df992f11ebdffcd7f55caac12770425fb4ea7fa7->enter($__internal_6ebd398b4da96ba99f144e58df992f11ebdffcd7f55caac12770425fb4ea7fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Users";
        
        $__internal_6ebd398b4da96ba99f144e58df992f11ebdffcd7f55caac12770425fb4ea7fa7->leave($__internal_6ebd398b4da96ba99f144e58df992f11ebdffcd7f55caac12770425fb4ea7fa7_prof);

        
        $__internal_c94546dcdb0e2228b8899c3d96138a99ba53c4bd72db89d3222ae13326fb162f->leave($__internal_c94546dcdb0e2228b8899c3d96138a99ba53c4bd72db89d3222ae13326fb162f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3133f36e90d4b653725eaf4d748b30b8a8184c988e738cd4b6c968bbd2c9051 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3133f36e90d4b653725eaf4d748b30b8a8184c988e738cd4b6c968bbd2c9051->enter($__internal_b3133f36e90d4b653725eaf4d748b30b8a8184c988e738cd4b6c968bbd2c9051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2789ce179be81c602d0df31157fa92f4b677a2d2ae2f411732803869d09fe11d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2789ce179be81c602d0df31157fa92f4b677a2d2ae2f411732803869d09fe11d->enter($__internal_2789ce179be81c602d0df31157fa92f4b677a2d2ae2f411732803869d09fe11d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h1 class=\"titulo_list_user\">LIST USERS</h1>
    <div class=\"content\">
        <table id=\"list-users\"class=\"table table-hover\">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>NAME</th>
                    <th>USERNAME</th>
                    <th colspan=\"2\">ACTIONS</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 18
            echo "                <tr>
                    <td><a>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</a></td>
                    <td><a class=\"user\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nombre", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
                    <td><a class=\"b_editar\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\" ><span class=\"icon-eye\"> </span>Show</a></td>
                    <td><a class=\"b_editar\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
            </tbody>
        </table>
    </div>
    <ul>
        <li>
            <a class=\"b_create\" href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_new");
        echo "\">New User   <span class=\"icon-user-plus\"></span></a>
        </li>
    </ul>
";
        
        $__internal_2789ce179be81c602d0df31157fa92f4b677a2d2ae2f411732803869d09fe11d->leave($__internal_2789ce179be81c602d0df31157fa92f4b677a2d2ae2f411732803869d09fe11d_prof);

        
        $__internal_b3133f36e90d4b653725eaf4d748b30b8a8184c988e738cd4b6c968bbd2c9051->leave($__internal_b3133f36e90d4b653725eaf4d748b30b8a8184c988e738cd4b6c968bbd2c9051_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 33,  139 => 27,  121 => 23,  117 => 22,  113 => 21,  107 => 20,  103 => 19,  100 => 18,  83 => 17,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
{% block title %}Users{% endblock %}
{% block body %}

    <h1 class=\"titulo_list_user\">LIST USERS</h1>
    <div class=\"content\">
        <table id=\"list-users\"class=\"table table-hover\">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>NAME</th>
                    <th>USERNAME</th>
                    <th colspan=\"2\">ACTIONS</th>
                </tr>
            </thead>
            <tbody>
            {% for user in users %}
                <tr>
                    <td><a>{{ loop.index }}</a></td>
                    <td><a class=\"user\" href=\"{{ path('user_show', { 'id': user.id }) }}\">{{ user.nombre }}</a></td>
                    <td>{{ user.username }}</td>
                    <td><a class=\"b_editar\" href=\"{{ path('user_show', { 'id': user.id }) }}\" ><span class=\"icon-eye\"> </span>Show</a></td>
                    <td><a class=\"b_editar\" href=\"{{ path('user_edit', { 'id': user.id }) }}\"><span class=\"icon-pencil\"> </span>Edit</a></td>

                </tr>
            {% endfor %}

            </tbody>
        </table>
    </div>
    <ul>
        <li>
            <a class=\"b_create\" href=\"{{ path('user_new') }}\">New User   <span class=\"icon-user-plus\"></span></a>
        </li>
    </ul>
{% endblock %}
", "user/index.html.twig", "/home/maria/listapp/app/Resources/views/user/index.html.twig");
    }
}
