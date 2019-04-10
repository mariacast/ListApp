<?php

/* user/index.html.twig */
class __TwigTemplate_c5c6b82df04b06da4b471d67cada50291be4166171205e8d0a6c4f19717a93f7 extends Twig_Template
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
        $__internal_a478d7ea789c70cbd1d476e9fdd84f45deb0b04a59336f1dafb7b16fc5522310 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a478d7ea789c70cbd1d476e9fdd84f45deb0b04a59336f1dafb7b16fc5522310->enter($__internal_a478d7ea789c70cbd1d476e9fdd84f45deb0b04a59336f1dafb7b16fc5522310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_4cd10c49185a3f1513fb7dadb990af977537402e2e15d01c357954ba6813b3b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cd10c49185a3f1513fb7dadb990af977537402e2e15d01c357954ba6813b3b5->enter($__internal_4cd10c49185a3f1513fb7dadb990af977537402e2e15d01c357954ba6813b3b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a478d7ea789c70cbd1d476e9fdd84f45deb0b04a59336f1dafb7b16fc5522310->leave($__internal_a478d7ea789c70cbd1d476e9fdd84f45deb0b04a59336f1dafb7b16fc5522310_prof);

        
        $__internal_4cd10c49185a3f1513fb7dadb990af977537402e2e15d01c357954ba6813b3b5->leave($__internal_4cd10c49185a3f1513fb7dadb990af977537402e2e15d01c357954ba6813b3b5_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_d4193e5adc05e4aa7727fba217f872e87acca2ef1cadb3bfccdf1fb32c6de886 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4193e5adc05e4aa7727fba217f872e87acca2ef1cadb3bfccdf1fb32c6de886->enter($__internal_d4193e5adc05e4aa7727fba217f872e87acca2ef1cadb3bfccdf1fb32c6de886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a79576ba4287c748408c7fea243f4fa77f54961b473bc372570c413c97f2288d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a79576ba4287c748408c7fea243f4fa77f54961b473bc372570c413c97f2288d->enter($__internal_a79576ba4287c748408c7fea243f4fa77f54961b473bc372570c413c97f2288d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Users";
        
        $__internal_a79576ba4287c748408c7fea243f4fa77f54961b473bc372570c413c97f2288d->leave($__internal_a79576ba4287c748408c7fea243f4fa77f54961b473bc372570c413c97f2288d_prof);

        
        $__internal_d4193e5adc05e4aa7727fba217f872e87acca2ef1cadb3bfccdf1fb32c6de886->leave($__internal_d4193e5adc05e4aa7727fba217f872e87acca2ef1cadb3bfccdf1fb32c6de886_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_090b6723365d565a9ad2923e7cfdb68644f70b914f3ef3dac85d84021e9962c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_090b6723365d565a9ad2923e7cfdb68644f70b914f3ef3dac85d84021e9962c1->enter($__internal_090b6723365d565a9ad2923e7cfdb68644f70b914f3ef3dac85d84021e9962c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_44e76ada42822eb146b9b83d989fa24d954303bcceddc4b054383e1cca74f0a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44e76ada42822eb146b9b83d989fa24d954303bcceddc4b054383e1cca74f0a5->enter($__internal_44e76ada42822eb146b9b83d989fa24d954303bcceddc4b054383e1cca74f0a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
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
        
        $__internal_44e76ada42822eb146b9b83d989fa24d954303bcceddc4b054383e1cca74f0a5->leave($__internal_44e76ada42822eb146b9b83d989fa24d954303bcceddc4b054383e1cca74f0a5_prof);

        
        $__internal_090b6723365d565a9ad2923e7cfdb68644f70b914f3ef3dac85d84021e9962c1->leave($__internal_090b6723365d565a9ad2923e7cfdb68644f70b914f3ef3dac85d84021e9962c1_prof);

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
