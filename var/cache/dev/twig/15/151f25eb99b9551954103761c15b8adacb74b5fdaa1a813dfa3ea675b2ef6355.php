<?php

/* listapp/index.html.twig */
class __TwigTemplate_3b1c2110369b14e685cfd79278169ec50092b0c4ed7ba45108f9476893b0757b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "listapp/index.html.twig", 1);
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
        $__internal_d370833bd62b91e76574e5b5be6af2d327caa721876bd0ace19a4d401fda89f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d370833bd62b91e76574e5b5be6af2d327caa721876bd0ace19a4d401fda89f4->enter($__internal_d370833bd62b91e76574e5b5be6af2d327caa721876bd0ace19a4d401fda89f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "listapp/index.html.twig"));

        $__internal_bae51aaaacf4d2bc9d60fe72b70f9e39a7db86425282f838c1d7e89ccc020f8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bae51aaaacf4d2bc9d60fe72b70f9e39a7db86425282f838c1d7e89ccc020f8e->enter($__internal_bae51aaaacf4d2bc9d60fe72b70f9e39a7db86425282f838c1d7e89ccc020f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "listapp/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d370833bd62b91e76574e5b5be6af2d327caa721876bd0ace19a4d401fda89f4->leave($__internal_d370833bd62b91e76574e5b5be6af2d327caa721876bd0ace19a4d401fda89f4_prof);

        
        $__internal_bae51aaaacf4d2bc9d60fe72b70f9e39a7db86425282f838c1d7e89ccc020f8e->leave($__internal_bae51aaaacf4d2bc9d60fe72b70f9e39a7db86425282f838c1d7e89ccc020f8e_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_2b88c6371e5c966c00b5503abbb35ab47a7b1e35e189f4edbe1ffc19bfc742fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b88c6371e5c966c00b5503abbb35ab47a7b1e35e189f4edbe1ffc19bfc742fe->enter($__internal_2b88c6371e5c966c00b5503abbb35ab47a7b1e35e189f4edbe1ffc19bfc742fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9259d55295dcc491bae735acc3639b82359d3c2a594831e45851e912afeeff74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9259d55295dcc491bae735acc3639b82359d3c2a594831e45851e912afeeff74->enter($__internal_9259d55295dcc491bae735acc3639b82359d3c2a594831e45851e912afeeff74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "List App";
        
        $__internal_9259d55295dcc491bae735acc3639b82359d3c2a594831e45851e912afeeff74->leave($__internal_9259d55295dcc491bae735acc3639b82359d3c2a594831e45851e912afeeff74_prof);

        
        $__internal_2b88c6371e5c966c00b5503abbb35ab47a7b1e35e189f4edbe1ffc19bfc742fe->leave($__internal_2b88c6371e5c966c00b5503abbb35ab47a7b1e35e189f4edbe1ffc19bfc742fe_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb37cf05a66b6ce763500542e421971b143148ebd59806f252e6fd8d448e303a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb37cf05a66b6ce763500542e421971b143148ebd59806f252e6fd8d448e303a->enter($__internal_cb37cf05a66b6ce763500542e421971b143148ebd59806f252e6fd8d448e303a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_af854a3ccaaf2a73e466e14981d40623c38dd3678fa3889833851e00c6dcb4cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af854a3ccaaf2a73e466e14981d40623c38dd3678fa3889833851e00c6dcb4cd->enter($__internal_af854a3ccaaf2a73e466e14981d40623c38dd3678fa3889833851e00c6dcb4cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1 class=\"list-tit\">LIST APP</h1>
    <div class=\"content\">
    <table id=\"list-users\"class=\"table table-hover\">
        <thead>
            <tr>
                <th>N°</th>
                <th>NAME</th>
                <th>URL</th>
                <th colspan=\"2\">ACTIONS</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context["brek"] = false;
        // line 17
        echo "        ";
        $context["counter"] = 1;
        // line 18
        echo "
          ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listapps"] ?? $this->getContext($context, "listapps")));
        foreach ($context['_seq'] as $context["_key"] => $context["listapp"]) {
            // line 20
            echo "          <tr>

              ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["perms"] ?? $this->getContext($context, "perms")));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 23
                echo "
                  ";
                // line 24
                if (($context["p"] != "")) {
                    // line 25
                    echo "
                      ";
                    // line 26
                    $context["url"] = $this->getAttribute($context["listapp"], "url", array());
                    // line 27
                    echo "
                        ";
                    // line 28
                    if (($context["p"] == ("Modificar_" . $this->getAttribute($this->getAttribute($context["listapp"], "categoria", array()), "nombre", array())))) {
                        // line 29
                        echo "                            <td><a class=\"user\">";
                        echo twig_escape_filter($this->env, ($context["counter"] ?? $this->getContext($context, "counter")), "html", null, true);
                        echo "</a></td>
                            <td><a class=\"user\" href=\"";
                        // line 30
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listapp_show", array("id" => $this->getAttribute($context["listapp"], "id", array()))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["listapp"], "nombre", array()), "html", null, true);
                        echo "</a></td>
                            <td><a style=\"cursor:pointer\" onclick=\"new_pest('";
                        // line 31
                        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
                        echo "');\">";
                        echo twig_escape_filter($this->env, twig_slice($this->env, ($context["url"] ?? $this->getContext($context, "url")), 0, 25), "html", null, true);
                        echo "</a></td>
                            <td><a class=\"b_editar\" href=\"";
                        // line 32
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listapp_show", array("id" => $this->getAttribute($context["listapp"], "id", array()))), "html", null, true);
                        echo "\"><span class=\"icon-eye\"> </span>Show</a></td>
                            <td><a class=\"b_editar\" href=\"";
                        // line 33
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listapp_edit", array("id" => $this->getAttribute($context["listapp"], "id", array()))), "html", null, true);
                        echo "\"><span class=\"icon-pencil\"> </span>Edit</a></td>
                            ";
                        // line 34
                        $context["counter"] = (($context["counter"] ?? $this->getContext($context, "counter")) + 1);
                        // line 35
                        echo "                        ";
                    }
                    // line 36
                    echo "                        ";
                    if (($context["p"] == ("Ver_" . $this->getAttribute($this->getAttribute($context["listapp"], "categoria", array()), "nombre", array())))) {
                        // line 37
                        echo "                            <td><a class=\"user\">";
                        echo twig_escape_filter($this->env, ($context["counter"] ?? $this->getContext($context, "counter")), "html", null, true);
                        echo "</a></td>
                            <td><a class=\"user\" href=\"";
                        // line 38
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listapp_show", array("id" => $this->getAttribute($context["listapp"], "id", array()))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["listapp"], "nombre", array()), "html", null, true);
                        echo "</a></td>
                            <td><a style=\"cursor: pointer; \" onclick=\"new_pest('";
                        // line 39
                        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
                        echo "');\">";
                        echo twig_escape_filter($this->env, twig_slice($this->env, ($context["url"] ?? $this->getContext($context, "url")), 0, 25), "html", null, true);
                        echo "</a></td>
                            <td colspan=\"2\"><a class=\"b_editar\" href=\"";
                        // line 40
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listapp_show", array("id" => $this->getAttribute($context["listapp"], "id", array()))), "html", null, true);
                        echo "\"><span class=\"icon-eye\"> </span>Show</a></td>
                            ";
                        // line 41
                        $context["counter"] = (($context["counter"] ?? $this->getContext($context, "counter")) + 1);
                        // line 42
                        echo "                        ";
                    }
                    // line 43
                    echo "
                        ";
                    // line 44
                    if (($context["p"] == "Administrador")) {
                        // line 45
                        echo "                            <td><a class=\"user\">";
                        echo twig_escape_filter($this->env, ($context["counter"] ?? $this->getContext($context, "counter")), "html", null, true);
                        echo "</a></td>
                            <td><a class=\"user\" href=\"";
                        // line 46
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listapp_show", array("id" => $this->getAttribute($context["listapp"], "id", array()))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["listapp"], "nombre", array()), "html", null, true);
                        echo "</a></td>
                            <td><a  style=\"cursor:pointer\" onclick=\"new_pest('";
                        // line 47
                        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
                        echo "');\">";
                        echo twig_escape_filter($this->env, twig_slice($this->env, ($context["url"] ?? $this->getContext($context, "url")), 0, 25), "html", null, true);
                        echo "</a ></td>
                            <td><a class=\"b_editar\" href=\"";
                        // line 48
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listapp_show", array("id" => $this->getAttribute($context["listapp"], "id", array()))), "html", null, true);
                        echo "\"><span class=\"icon-eye\"> </span>Show</a></td>
                            <td><a class=\"b_editar\" href=\"";
                        // line 49
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listapp_edit", array("id" => $this->getAttribute($context["listapp"], "id", array()))), "html", null, true);
                        echo "\"><span class=\"icon-pencil\"> </span>Edit</a></td>
                            ";
                        // line 50
                        $context["counter"] = (($context["counter"] ?? $this->getContext($context, "counter")) + 1);
                        // line 51
                        echo "                        ";
                    }
                    // line 52
                    echo "
                ";
                }
                // line 54
                echo "
              </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listapp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "        </tbody>
    </table><br><br><br><br>
  </div>
  <ul>
      <li>
  ";
        // line 63
        $context["break"] = false;
        // line 64
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["perms"] ?? $this->getContext($context, "perms")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            if ( !($context["break"] ?? $this->getContext($context, "break"))) {
                // line 65
                echo "        ";
                if ((($context["c"] == "Administrador") || ($context["c"] == ("Modificar_" . ($context["categ"] ?? $this->getContext($context, "categ")))))) {
                    // line 66
                    echo "            <a class=\"b_create\" href=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listapp_new");
                    echo "\">New App +</a>
            ";
                    // line 67
                    $context["break"] = true;
                    // line 68
                    echo "        ";
                }
                // line 69
                echo "  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "    </li>
  </ul>
";
        
        $__internal_af854a3ccaaf2a73e466e14981d40623c38dd3678fa3889833851e00c6dcb4cd->leave($__internal_af854a3ccaaf2a73e466e14981d40623c38dd3678fa3889833851e00c6dcb4cd_prof);

        
        $__internal_cb37cf05a66b6ce763500542e421971b143148ebd59806f252e6fd8d448e303a->leave($__internal_cb37cf05a66b6ce763500542e421971b143148ebd59806f252e6fd8d448e303a_prof);

    }

    public function getTemplateName()
    {
        return "listapp/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 70,  257 => 69,  254 => 68,  252 => 67,  247 => 66,  244 => 65,  238 => 64,  236 => 63,  229 => 58,  223 => 57,  215 => 54,  211 => 52,  208 => 51,  206 => 50,  202 => 49,  198 => 48,  192 => 47,  186 => 46,  181 => 45,  179 => 44,  176 => 43,  173 => 42,  171 => 41,  167 => 40,  161 => 39,  155 => 38,  150 => 37,  147 => 36,  144 => 35,  142 => 34,  138 => 33,  134 => 32,  128 => 31,  122 => 30,  117 => 29,  115 => 28,  112 => 27,  110 => 26,  107 => 25,  105 => 24,  102 => 23,  98 => 22,  94 => 20,  90 => 19,  87 => 18,  84 => 17,  82 => 16,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
{% block title %}List App{% endblock %}
{% block body %}
    <h1 class=\"list-tit\">LIST APP</h1>
    <div class=\"content\">
    <table id=\"list-users\"class=\"table table-hover\">
        <thead>
            <tr>
                <th>N°</th>
                <th>NAME</th>
                <th>URL</th>
                <th colspan=\"2\">ACTIONS</th>
            </tr>
        </thead>
        <tbody>
        {% set brek = false %}
        {% set counter = 1 %}

          {% for listapp in listapps %}
          <tr>

              {% for p in perms %}

                  {% if p != \"\" %}

                      {% set url =  listapp.url %}

                        {% if p ==  \"Modificar_#{ listapp.categoria.nombre }\" %}
                            <td><a class=\"user\">{{ counter }}</a></td>
                            <td><a class=\"user\" href=\"{{ path('listapp_show', { 'id': listapp.id }) }}\">{{ listapp.nombre }}</a></td>
                            <td><a style=\"cursor:pointer\" onclick=\"new_pest('{{ url }}');\">{{ url |slice(0, 25) }}</a></td>
                            <td><a class=\"b_editar\" href=\"{{ path('listapp_show', { 'id': listapp.id }) }}\"><span class=\"icon-eye\"> </span>Show</a></td>
                            <td><a class=\"b_editar\" href=\"{{ path('listapp_edit', { 'id': listapp.id }) }}\"><span class=\"icon-pencil\"> </span>Edit</a></td>
                            {% set counter = counter + 1 %}
                        {% endif %}
                        {% if p ==  \"Ver_#{ listapp.categoria.nombre }\" %}
                            <td><a class=\"user\">{{ counter }}</a></td>
                            <td><a class=\"user\" href=\"{{ path('listapp_show', { 'id': listapp.id }) }}\">{{ listapp.nombre }}</a></td>
                            <td><a style=\"cursor: pointer; \" onclick=\"new_pest('{{ url }}');\">{{ url |slice(0, 25) }}</a></td>
                            <td colspan=\"2\"><a class=\"b_editar\" href=\"{{ path('listapp_show', { 'id': listapp.id }) }}\"><span class=\"icon-eye\"> </span>Show</a></td>
                            {% set counter = counter + 1 %}
                        {% endif %}

                        {% if p == \"Administrador\" %}
                            <td><a class=\"user\">{{ counter }}</a></td>
                            <td><a class=\"user\" href=\"{{ path('listapp_show', { 'id': listapp.id }) }}\">{{ listapp.nombre }}</a></td>
                            <td><a  style=\"cursor:pointer\" onclick=\"new_pest('{{ url }}');\">{{ url |slice(0, 25) }}</a ></td>
                            <td><a class=\"b_editar\" href=\"{{ path('listapp_show', { 'id': listapp.id }) }}\"><span class=\"icon-eye\"> </span>Show</a></td>
                            <td><a class=\"b_editar\" href=\"{{ path('listapp_edit', { 'id': listapp.id }) }}\"><span class=\"icon-pencil\"> </span>Edit</a></td>
                            {% set counter = counter + 1 %}
                        {% endif %}

                {% endif %}

              </tr>
          {% endfor %}
        {% endfor %}
        </tbody>
    </table><br><br><br><br>
  </div>
  <ul>
      <li>
  {% set break = false %}
  {% for c in perms if not break %}
        {% if c == \"Administrador\" or c ==  \"Modificar_#{ categ }\" %}
            <a class=\"b_create\" href=\"{{ path('listapp_new') }}\">New App +</a>
            {% set break = true %}
        {% endif %}
  {% endfor %}
    </li>
  </ul>
{% endblock %}
", "listapp/index.html.twig", "/home/maria/listapp/app/Resources/views/listapp/index.html.twig");
    }
}
