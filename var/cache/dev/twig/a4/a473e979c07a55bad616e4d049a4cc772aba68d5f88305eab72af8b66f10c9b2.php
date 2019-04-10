<?php

/* listapp/showCat.html.twig */
class __TwigTemplate_1dd82416bf9125aee5f9b20b507bb84f85cb889cfc9fda3fe2723ff966bc1ffe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "listapp/showCat.html.twig", 1);
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
        $__internal_738e1a138f5ccfe51b9b800f31e0f180d38bf4471159aae91ad7a33e0ffc7dd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_738e1a138f5ccfe51b9b800f31e0f180d38bf4471159aae91ad7a33e0ffc7dd7->enter($__internal_738e1a138f5ccfe51b9b800f31e0f180d38bf4471159aae91ad7a33e0ffc7dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "listapp/showCat.html.twig"));

        $__internal_7a20c57fc1dc713d724d2ee59ef07243275dbc61d587f8861d9b4033dc0a49bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a20c57fc1dc713d724d2ee59ef07243275dbc61d587f8861d9b4033dc0a49bb->enter($__internal_7a20c57fc1dc713d724d2ee59ef07243275dbc61d587f8861d9b4033dc0a49bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "listapp/showCat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_738e1a138f5ccfe51b9b800f31e0f180d38bf4471159aae91ad7a33e0ffc7dd7->leave($__internal_738e1a138f5ccfe51b9b800f31e0f180d38bf4471159aae91ad7a33e0ffc7dd7_prof);

        
        $__internal_7a20c57fc1dc713d724d2ee59ef07243275dbc61d587f8861d9b4033dc0a49bb->leave($__internal_7a20c57fc1dc713d724d2ee59ef07243275dbc61d587f8861d9b4033dc0a49bb_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_59c689128255458f3572ddff89b9171dcb5d1f34b393c435d000a6534682c465 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59c689128255458f3572ddff89b9171dcb5d1f34b393c435d000a6534682c465->enter($__internal_59c689128255458f3572ddff89b9171dcb5d1f34b393c435d000a6534682c465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_83e4d4227fa62cc1b8faed059a987701525e20afd7abc75af294419dde178bf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83e4d4227fa62cc1b8faed059a987701525e20afd7abc75af294419dde178bf3->enter($__internal_83e4d4227fa62cc1b8faed059a987701525e20afd7abc75af294419dde178bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "List Categories";
        
        $__internal_83e4d4227fa62cc1b8faed059a987701525e20afd7abc75af294419dde178bf3->leave($__internal_83e4d4227fa62cc1b8faed059a987701525e20afd7abc75af294419dde178bf3_prof);

        
        $__internal_59c689128255458f3572ddff89b9171dcb5d1f34b393c435d000a6534682c465->leave($__internal_59c689128255458f3572ddff89b9171dcb5d1f34b393c435d000a6534682c465_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ea2dd42238c89606d0b75dd521c4385d724de6a0e86cc1ba729d5eff0506de6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ea2dd42238c89606d0b75dd521c4385d724de6a0e86cc1ba729d5eff0506de6->enter($__internal_9ea2dd42238c89606d0b75dd521c4385d724de6a0e86cc1ba729d5eff0506de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c30e11d7e1e5fae1a0c2b1b24fadea393fbcd90735ab1108dd4bb8909a5fe153 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c30e11d7e1e5fae1a0c2b1b24fadea393fbcd90735ab1108dd4bb8909a5fe153->enter($__internal_c30e11d7e1e5fae1a0c2b1b24fadea393fbcd90735ab1108dd4bb8909a5fe153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1 class=\"tit_cate_app\">LIST CATEGORIES </h1>
    <div class=\"content\">
    <table id=\"list-users\"class=\"table table-hover\">
        <thead>
            <tr>
                <th>N°</th>
                <th>NAME CATEGORY</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
          ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["perms"]) ? $context["perms"] : $this->getContext($context, "perms")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 16
            echo "            ";
            if (($context["p"] == "Administrador")) {
                // line 17
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) ? $context["categorias"] : $this->getContext($context, "categorias")));
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
                foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                    // line 18
                    echo "                  <tr>
                    <td><a>";
                    // line 19
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "</a></td>
                    ";
                    // line 20
                    $context["cat"] = $this->getAttribute($context["c"], "nombre", array());
                    // line 21
                    echo "                    <td><a class=\"user\">";
                    echo twig_escape_filter($this->env, (isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "html", null, true);
                    echo "</a></td>
                    <td style=\"cursor:pointer\"><a class=\"b_editar\" id=\"val\" onclick=\"Cate('";
                    // line 22
                    echo twig_escape_filter($this->env, (isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "html", null, true);
                    echo "');\" value=\"";
                    echo twig_escape_filter($this->env, (isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "html", null, true);
                    echo "\"><span class=\"icon-eye\"> </span>Show</a></td>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "
            ";
            }
            // line 27
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "          ";
        $context["counter"] = 1;
        // line 29
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter((isset($context["perms"]) ? $context["perms"] : $this->getContext($context, "perms"))));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 30
            echo "          <tr>
            ";
            // line 31
            $context["perm"] = twig_split_filter($this->env, $context["c"], "_");
            // line 32
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["perm"]) ? $context["perm"] : $this->getContext($context, "perm")));
            foreach ($context['_seq'] as $context["_key"] => $context["op"]) {
                // line 33
                echo "
                    ";
                // line 34
                if (($context["op"] != "Administrador")) {
                    // line 35
                    echo "                      ";
                    if (($context["op"] != "Modificar")) {
                        // line 36
                        echo "                        ";
                        if (($context["op"] != "Ver")) {
                            // line 37
                            echo "                          ";
                            if (($context["op"] != "")) {
                                // line 38
                                echo "
                              ";
                                // line 39
                                $context["opc"] = $context["op"];
                                // line 40
                                echo "                              <td><a class=\"user\">";
                                echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
                                echo "</a></td>
                              <td><a class=\"user\">";
                                // line 41
                                echo twig_escape_filter($this->env, $context["op"], "html", null, true);
                                echo "</a></td>
                              <td style=\"cursor:pointer\"><a class=\"b_editar\" id=\"val\" onclick=\"AppCategoria('";
                                // line 42
                                echo twig_escape_filter($this->env, $context["op"], "html", null, true);
                                echo "');\" value=\"";
                                echo twig_escape_filter($this->env, $context["op"], "html", null, true);
                                echo "\"><span class=\"icon-eye\"> </span>Show</a></td>
                              ";
                                // line 43
                                $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) + 1);
                                // line 44
                                echo "                          ";
                            }
                            // line 45
                            echo "                        ";
                        }
                        // line 46
                        echo "                      ";
                    }
                    // line 47
                    echo "                    ";
                }
                // line 48
                echo "              </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['op'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "
        </tbody>
    </table><br><br><br><br>
    <form style=\" display:none;\" name=\"form_cat\" id=\"form_cat\" method=\"post\" action=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AppCat");
        echo "\">
      <input type=\"hidden\" id=\"Category\" name=\"Category\" value=\"\" >
      <input type=\"hidden\" name=\"_csrf_token\"value=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
    </form>
  </div>

    <script type=\"text/javascript\">
        var o;
        function gId(id)
        {
            return document.getElementById(id);
        }
        function AppCategoria(op) {
            var cat = op;
            gId(\"Category\").value = cat;
            gId(\"form_cat\").submit();
        }
        function Cate(cat) {
            var ca = cat;
            gId(\"Category\").value = ca;
            gId(\"form_cat\").submit();
        }
    </script>
";
        
        $__internal_c30e11d7e1e5fae1a0c2b1b24fadea393fbcd90735ab1108dd4bb8909a5fe153->leave($__internal_c30e11d7e1e5fae1a0c2b1b24fadea393fbcd90735ab1108dd4bb8909a5fe153_prof);

        
        $__internal_9ea2dd42238c89606d0b75dd521c4385d724de6a0e86cc1ba729d5eff0506de6->leave($__internal_9ea2dd42238c89606d0b75dd521c4385d724de6a0e86cc1ba729d5eff0506de6_prof);

    }

    public function getTemplateName()
    {
        return "listapp/showCat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 57,  234 => 55,  229 => 52,  222 => 50,  215 => 48,  212 => 47,  209 => 46,  206 => 45,  203 => 44,  201 => 43,  195 => 42,  191 => 41,  186 => 40,  184 => 39,  181 => 38,  178 => 37,  175 => 36,  172 => 35,  170 => 34,  167 => 33,  162 => 32,  160 => 31,  157 => 30,  152 => 29,  149 => 28,  143 => 27,  139 => 25,  120 => 22,  115 => 21,  113 => 20,  109 => 19,  106 => 18,  88 => 17,  85 => 16,  81 => 15,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
{% block title %}List Categories{% endblock %}
{% block body %}
    <h1 class=\"tit_cate_app\">LIST CATEGORIES </h1>
    <div class=\"content\">
    <table id=\"list-users\"class=\"table table-hover\">
        <thead>
            <tr>
                <th>N°</th>
                <th>NAME CATEGORY</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
          {% for p in perms %}
            {% if p == \"Administrador\" %}
                {% for c in categorias %}
                  <tr>
                    <td><a>{{ loop.index }}</a></td>
                    {% set cat = c.nombre %}
                    <td><a class=\"user\">{{ cat }}</a></td>
                    <td style=\"cursor:pointer\"><a class=\"b_editar\" id=\"val\" onclick=\"Cate('{{ cat }}');\" value=\"{{ cat }}\"><span class=\"icon-eye\"> </span>Show</a></td>
                  </tr>
                {% endfor %}

            {% endif %}
          {% endfor %}
          {% set counter = 1 %}
          {% for c in perms|sort  %}
          <tr>
            {% set perm = c|split('_') %}
            {% for op in perm %}

                    {% if (op != \"Administrador\") %}
                      {% if (op != \"Modificar\") %}
                        {% if (op != \"Ver\") %}
                          {% if (op != \"\") %}

                              {% set opc = op %}
                              <td><a class=\"user\">{{ counter }}</a></td>
                              <td><a class=\"user\">{{ op }}</a></td>
                              <td style=\"cursor:pointer\"><a class=\"b_editar\" id=\"val\" onclick=\"AppCategoria('{{ op }}');\" value=\"{{ op }}\"><span class=\"icon-eye\"> </span>Show</a></td>
                              {% set counter = counter + 1 %}
                          {% endif %}
                        {% endif %}
                      {% endif %}
                    {% endif %}
              </tr>
            {% endfor %}

          {% endfor %}

        </tbody>
    </table><br><br><br><br>
    <form style=\" display:none;\" name=\"form_cat\" id=\"form_cat\" method=\"post\" action=\"{{ path('AppCat') }}\">
      <input type=\"hidden\" id=\"Category\" name=\"Category\" value=\"\" >
      <input type=\"hidden\" name=\"_csrf_token\"value=\"{{ csrf_token('authenticate') }}\">
    </form>
  </div>

    <script type=\"text/javascript\">
        var o;
        function gId(id)
        {
            return document.getElementById(id);
        }
        function AppCategoria(op) {
            var cat = op;
            gId(\"Category\").value = cat;
            gId(\"form_cat\").submit();
        }
        function Cate(cat) {
            var ca = cat;
            gId(\"Category\").value = ca;
            gId(\"form_cat\").submit();
        }
    </script>
{% endblock %}
", "listapp/showCat.html.twig", "/home/maria/listapp/app/Resources/views/listapp/showCat.html.twig");
    }
}
