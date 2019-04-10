<?php

/* user/show.html.twig */
class __TwigTemplate_d3d1b138e0129fbacf216a5bf7652ee08501529c9ad8b00b4f11509bd27ff4b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/show.html.twig", 1);
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
        $__internal_edaf980a5a237f446077d7d6fe25e93e926a642a2d6bc63b8d0e709feb707f1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edaf980a5a237f446077d7d6fe25e93e926a642a2d6bc63b8d0e709feb707f1b->enter($__internal_edaf980a5a237f446077d7d6fe25e93e926a642a2d6bc63b8d0e709feb707f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $__internal_029612fbf99d3cab90503c6e2dfc0a7f59af130ae39a40e2696ee9cef3add755 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_029612fbf99d3cab90503c6e2dfc0a7f59af130ae39a40e2696ee9cef3add755->enter($__internal_029612fbf99d3cab90503c6e2dfc0a7f59af130ae39a40e2696ee9cef3add755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edaf980a5a237f446077d7d6fe25e93e926a642a2d6bc63b8d0e709feb707f1b->leave($__internal_edaf980a5a237f446077d7d6fe25e93e926a642a2d6bc63b8d0e709feb707f1b_prof);

        
        $__internal_029612fbf99d3cab90503c6e2dfc0a7f59af130ae39a40e2696ee9cef3add755->leave($__internal_029612fbf99d3cab90503c6e2dfc0a7f59af130ae39a40e2696ee9cef3add755_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e60c6dc8efb7aed76ac3a1084bff50b33aefda00b05b46adf1332b9d796150f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e60c6dc8efb7aed76ac3a1084bff50b33aefda00b05b46adf1332b9d796150f1->enter($__internal_e60c6dc8efb7aed76ac3a1084bff50b33aefda00b05b46adf1332b9d796150f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f734f18ee9226b101db2f0ca3e3e12da109c73bf72b3c4163816196b14895009 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f734f18ee9226b101db2f0ca3e3e12da109c73bf72b3c4163816196b14895009->enter($__internal_f734f18ee9226b101db2f0ca3e3e12da109c73bf72b3c4163816196b14895009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Show User";
        
        $__internal_f734f18ee9226b101db2f0ca3e3e12da109c73bf72b3c4163816196b14895009->leave($__internal_f734f18ee9226b101db2f0ca3e3e12da109c73bf72b3c4163816196b14895009_prof);

        
        $__internal_e60c6dc8efb7aed76ac3a1084bff50b33aefda00b05b46adf1332b9d796150f1->leave($__internal_e60c6dc8efb7aed76ac3a1084bff50b33aefda00b05b46adf1332b9d796150f1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1226ea3c83a41df4920bec35f76ba2e824a896c7fb8ce799650137c1de1c596d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1226ea3c83a41df4920bec35f76ba2e824a896c7fb8ce799650137c1de1c596d->enter($__internal_1226ea3c83a41df4920bec35f76ba2e824a896c7fb8ce799650137c1de1c596d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d6383f5fd5c81963a6d481670e1763f7fe56ee00fe1ea9b6ebf498bacc81bab6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6383f5fd5c81963a6d481670e1763f7fe56ee00fe1ea9b6ebf498bacc81bab6->enter($__internal_d6383f5fd5c81963a6d481670e1763f7fe56ee00fe1ea9b6ebf498bacc81bab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1 class=\"show-user-tit\">USER</h1>
    <div class=\"div_user\">
        <table id=\"show-user\" class=\"table table-hover\">
          <thead>
              <tr>
                  <th>NAME</th>
                  <th>USERNAME</th>

              </tr>
          </thead>
          <tbody>
                <tr>
                    <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nombre", array()), "html", null, true);
        echo "</td>
                    <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</td>
                </tr>

            </tbody>
        </table>
    </div>
    <table id=\"show-permissions\" class=\"table table-hover\">
      <thead>
          <tr>
            <th><span class=\"icon-key2\">  </span>PERMISSIONS</th>
          </tr>
      </thead>
      <tbody>
        ";
        // line 30
        $context["perm"] = twig_split_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "permisos", array()), ";");
        // line 31
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter((isset($context["perm"]) ? $context["perm"] : $this->getContext($context, "perm"))));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 32
            echo "          ";
            if (($context["p"] != "")) {
                // line 33
                echo "            <tr>
                  <td>";
                // line 34
                echo twig_escape_filter($this->env, twig_replace_filter($context["p"], array("_" => " ")), "html", null, true);
                echo "</td>
            </tr>
          ";
            }
            // line 37
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "      </tbody>
  </table>

          <a class=\"btn-editar-user\" class=\"etiqueta\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\"><span class=\"icon-pencil\"> </span>Edit</a>

            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <button  type=\"submit\" class=\"btn-borrar-user\" value=\"Delete\"><span class=\"icon-cross\"> </span>Delete</button>
            ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_d6383f5fd5c81963a6d481670e1763f7fe56ee00fe1ea9b6ebf498bacc81bab6->leave($__internal_d6383f5fd5c81963a6d481670e1763f7fe56ee00fe1ea9b6ebf498bacc81bab6_prof);

        
        $__internal_1226ea3c83a41df4920bec35f76ba2e824a896c7fb8ce799650137c1de1c596d->leave($__internal_1226ea3c83a41df4920bec35f76ba2e824a896c7fb8ce799650137c1de1c596d_prof);

    }

    public function getTemplateName()
    {
        return "user/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 45,  137 => 43,  132 => 41,  127 => 38,  121 => 37,  115 => 34,  112 => 33,  109 => 32,  104 => 31,  102 => 30,  86 => 17,  82 => 16,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
{% block title %}Show User{% endblock %}
{% block body %}
    <h1 class=\"show-user-tit\">USER</h1>
    <div class=\"div_user\">
        <table id=\"show-user\" class=\"table table-hover\">
          <thead>
              <tr>
                  <th>NAME</th>
                  <th>USERNAME</th>

              </tr>
          </thead>
          <tbody>
                <tr>
                    <td>{{ user.nombre }}</td>
                    <td>{{ user.username }}</td>
                </tr>

            </tbody>
        </table>
    </div>
    <table id=\"show-permissions\" class=\"table table-hover\">
      <thead>
          <tr>
            <th><span class=\"icon-key2\">  </span>PERMISSIONS</th>
          </tr>
      </thead>
      <tbody>
        {% set perm = user.permisos|split(';') %}
        {% for p in perm|sort  %}
          {% if p != \"\" %}
            <tr>
                  <td>{{ p|replace({ (\"_\"): \" \" }) }}</td>
            </tr>
          {% endif %}
        {% endfor %}
      </tbody>
  </table>

          <a class=\"btn-editar-user\" class=\"etiqueta\" href=\"{{ path('user_edit', { 'id': user.id }) }}\"><span class=\"icon-pencil\"> </span>Edit</a>

            {{ form_start(delete_form) }}
                <button  type=\"submit\" class=\"btn-borrar-user\" value=\"Delete\"><span class=\"icon-cross\"> </span>Delete</button>
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "user/show.html.twig", "/home/maria/listapp/app/Resources/views/user/show.html.twig");
    }
}
