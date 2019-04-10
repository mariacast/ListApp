<?php

/* listapp/showCat.html.twig */
class __TwigTemplate_78a235911e5215aaca0725184da3ef8b6b7b5aa5ac3f707b7d86d76223ef6c02 extends Twig_Template
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
        $__internal_096c23e8d2bdcd6711f4b64a2bb3069a695245ee01ab338f5c5030fec53a0b5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_096c23e8d2bdcd6711f4b64a2bb3069a695245ee01ab338f5c5030fec53a0b5a->enter($__internal_096c23e8d2bdcd6711f4b64a2bb3069a695245ee01ab338f5c5030fec53a0b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "listapp/showCat.html.twig"));

        $__internal_505aa7d8de35efe7c8a9093af42fa81edc80824066d286e7e7badd42ff52ed48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_505aa7d8de35efe7c8a9093af42fa81edc80824066d286e7e7badd42ff52ed48->enter($__internal_505aa7d8de35efe7c8a9093af42fa81edc80824066d286e7e7badd42ff52ed48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "listapp/showCat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_096c23e8d2bdcd6711f4b64a2bb3069a695245ee01ab338f5c5030fec53a0b5a->leave($__internal_096c23e8d2bdcd6711f4b64a2bb3069a695245ee01ab338f5c5030fec53a0b5a_prof);

        
        $__internal_505aa7d8de35efe7c8a9093af42fa81edc80824066d286e7e7badd42ff52ed48->leave($__internal_505aa7d8de35efe7c8a9093af42fa81edc80824066d286e7e7badd42ff52ed48_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_99e1b0f758e5712d60e3d766e2abbe4e4bab2f054835b5214334d43dc3e4ad50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99e1b0f758e5712d60e3d766e2abbe4e4bab2f054835b5214334d43dc3e4ad50->enter($__internal_99e1b0f758e5712d60e3d766e2abbe4e4bab2f054835b5214334d43dc3e4ad50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0961c2b8cf1407e2c2f4943e31260c840ca57427d54818f132fa489013209dd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0961c2b8cf1407e2c2f4943e31260c840ca57427d54818f132fa489013209dd8->enter($__internal_0961c2b8cf1407e2c2f4943e31260c840ca57427d54818f132fa489013209dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "List Categories";
        
        $__internal_0961c2b8cf1407e2c2f4943e31260c840ca57427d54818f132fa489013209dd8->leave($__internal_0961c2b8cf1407e2c2f4943e31260c840ca57427d54818f132fa489013209dd8_prof);

        
        $__internal_99e1b0f758e5712d60e3d766e2abbe4e4bab2f054835b5214334d43dc3e4ad50->leave($__internal_99e1b0f758e5712d60e3d766e2abbe4e4bab2f054835b5214334d43dc3e4ad50_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_19c6b4bef11f9d3c9a507ae6664d0e746f721e8af60b558f938b62a578e2dc88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19c6b4bef11f9d3c9a507ae6664d0e746f721e8af60b558f938b62a578e2dc88->enter($__internal_19c6b4bef11f9d3c9a507ae6664d0e746f721e8af60b558f938b62a578e2dc88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e34912a7c4fe675e1832a6f30b23960ddfb12531a91d5f13ed21fdd85f16772f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e34912a7c4fe675e1832a6f30b23960ddfb12531a91d5f13ed21fdd85f16772f->enter($__internal_e34912a7c4fe675e1832a6f30b23960ddfb12531a91d5f13ed21fdd85f16772f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable(($context["perms"] ?? $this->getContext($context, "perms")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 16
            echo "            ";
            if (($context["p"] == "Administrador")) {
                // line 17
                echo "                ";
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
                    echo twig_escape_filter($this->env, ($context["cat"] ?? $this->getContext($context, "cat")), "html", null, true);
                    echo "</a></td>
                    <td style=\"cursor:pointer\"><a class=\"b_editar\" id=\"val\" onclick=\"Cate('";
                    // line 22
                    echo twig_escape_filter($this->env, ($context["cat"] ?? $this->getContext($context, "cat")), "html", null, true);
                    echo "');\" value=\"";
                    echo twig_escape_filter($this->env, ($context["cat"] ?? $this->getContext($context, "cat")), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(($context["perms"] ?? $this->getContext($context, "perms"))));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 30
            echo "          <tr>
            ";
            // line 31
            $context["perm"] = twig_split_filter($this->env, $context["c"], "_");
            // line 32
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["perm"] ?? $this->getContext($context, "perm")));
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
                                echo twig_escape_filter($this->env, ($context["counter"] ?? $this->getContext($context, "counter")), "html", null, true);
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
                                $context["counter"] = (($context["counter"] ?? $this->getContext($context, "counter")) + 1);
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
        
        $__internal_e34912a7c4fe675e1832a6f30b23960ddfb12531a91d5f13ed21fdd85f16772f->leave($__internal_e34912a7c4fe675e1832a6f30b23960ddfb12531a91d5f13ed21fdd85f16772f_prof);

        
        $__internal_19c6b4bef11f9d3c9a507ae6664d0e746f721e8af60b558f938b62a578e2dc88->leave($__internal_19c6b4bef11f9d3c9a507ae6664d0e746f721e8af60b558f938b62a578e2dc88_prof);

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
