<?php

/* user/show.html.twig */
class __TwigTemplate_7712cfcf347dbcdcdb95a530904b78fe0c049a4b9e19499b2731d9594b6368ab extends Twig_Template
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
        $__internal_3419385af294c59e0460b3d3e46f2b8fa51b8cbd8d0685178b9e552748b5e631 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3419385af294c59e0460b3d3e46f2b8fa51b8cbd8d0685178b9e552748b5e631->enter($__internal_3419385af294c59e0460b3d3e46f2b8fa51b8cbd8d0685178b9e552748b5e631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $__internal_a24bf6bf28ff8949b32bbdf9c6bce2ef4e356ce2f11ea14623a4228d96673410 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a24bf6bf28ff8949b32bbdf9c6bce2ef4e356ce2f11ea14623a4228d96673410->enter($__internal_a24bf6bf28ff8949b32bbdf9c6bce2ef4e356ce2f11ea14623a4228d96673410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3419385af294c59e0460b3d3e46f2b8fa51b8cbd8d0685178b9e552748b5e631->leave($__internal_3419385af294c59e0460b3d3e46f2b8fa51b8cbd8d0685178b9e552748b5e631_prof);

        
        $__internal_a24bf6bf28ff8949b32bbdf9c6bce2ef4e356ce2f11ea14623a4228d96673410->leave($__internal_a24bf6bf28ff8949b32bbdf9c6bce2ef4e356ce2f11ea14623a4228d96673410_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_540db36f0ef452a22be510ce68713694187b2078860d98de6a6a476908385ea8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_540db36f0ef452a22be510ce68713694187b2078860d98de6a6a476908385ea8->enter($__internal_540db36f0ef452a22be510ce68713694187b2078860d98de6a6a476908385ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e444b37253b55c551933443ae7e9aee05cecd285f34159581844dc5c86b841f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e444b37253b55c551933443ae7e9aee05cecd285f34159581844dc5c86b841f7->enter($__internal_e444b37253b55c551933443ae7e9aee05cecd285f34159581844dc5c86b841f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Show User";
        
        $__internal_e444b37253b55c551933443ae7e9aee05cecd285f34159581844dc5c86b841f7->leave($__internal_e444b37253b55c551933443ae7e9aee05cecd285f34159581844dc5c86b841f7_prof);

        
        $__internal_540db36f0ef452a22be510ce68713694187b2078860d98de6a6a476908385ea8->leave($__internal_540db36f0ef452a22be510ce68713694187b2078860d98de6a6a476908385ea8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_660a086288c6137f4942fc473903dedb3d6a8c49f96a97ef55ac1145388daece = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_660a086288c6137f4942fc473903dedb3d6a8c49f96a97ef55ac1145388daece->enter($__internal_660a086288c6137f4942fc473903dedb3d6a8c49f96a97ef55ac1145388daece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_23c76002bf3f8429b8022d2210c537d967eaabe9f5b7b53ac349b72660f6d926 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23c76002bf3f8429b8022d2210c537d967eaabe9f5b7b53ac349b72660f6d926->enter($__internal_23c76002bf3f8429b8022d2210c537d967eaabe9f5b7b53ac349b72660f6d926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "nombre", array()), "html", null, true);
        echo "</td>
                    <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
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
        $context["perm"] = twig_split_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "permisos", array()), ";");
        // line 31
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(($context["perm"] ?? $this->getContext($context, "perm"))));
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\"><span class=\"icon-pencil\"> </span>Edit</a>

            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <button  type=\"submit\" class=\"btn-borrar-user\" value=\"Delete\"><span class=\"icon-cross\"> </span>Delete</button>
            ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_23c76002bf3f8429b8022d2210c537d967eaabe9f5b7b53ac349b72660f6d926->leave($__internal_23c76002bf3f8429b8022d2210c537d967eaabe9f5b7b53ac349b72660f6d926_prof);

        
        $__internal_660a086288c6137f4942fc473903dedb3d6a8c49f96a97ef55ac1145388daece->leave($__internal_660a086288c6137f4942fc473903dedb3d6a8c49f96a97ef55ac1145388daece_prof);

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
