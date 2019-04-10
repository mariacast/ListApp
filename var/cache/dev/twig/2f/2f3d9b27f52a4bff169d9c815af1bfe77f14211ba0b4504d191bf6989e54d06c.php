<?php

/* listapp/edit.html.twig */
class __TwigTemplate_c159c05891d363fa05e7ccd8116371ea85fe659073e7726b73bee2955f48cece extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "listapp/edit.html.twig", 1);
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
        $__internal_75725c99951ff72af8b0c3fa2fd408fd94661b7a98835b2a89ec920816a38799 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75725c99951ff72af8b0c3fa2fd408fd94661b7a98835b2a89ec920816a38799->enter($__internal_75725c99951ff72af8b0c3fa2fd408fd94661b7a98835b2a89ec920816a38799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "listapp/edit.html.twig"));

        $__internal_c80c68706df932da39451888bc879c2434da237257c78e45d8a98d18e5fb0d87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c80c68706df932da39451888bc879c2434da237257c78e45d8a98d18e5fb0d87->enter($__internal_c80c68706df932da39451888bc879c2434da237257c78e45d8a98d18e5fb0d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "listapp/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75725c99951ff72af8b0c3fa2fd408fd94661b7a98835b2a89ec920816a38799->leave($__internal_75725c99951ff72af8b0c3fa2fd408fd94661b7a98835b2a89ec920816a38799_prof);

        
        $__internal_c80c68706df932da39451888bc879c2434da237257c78e45d8a98d18e5fb0d87->leave($__internal_c80c68706df932da39451888bc879c2434da237257c78e45d8a98d18e5fb0d87_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_248912a0d66d40e80f11e7b7718cb4d29d5a6988a78cfc0d5c00a278b04257d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_248912a0d66d40e80f11e7b7718cb4d29d5a6988a78cfc0d5c00a278b04257d4->enter($__internal_248912a0d66d40e80f11e7b7718cb4d29d5a6988a78cfc0d5c00a278b04257d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a967e7324166cdbf9fa8516b4101c4542224f9b2cf01a985859856eeee2678a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a967e7324166cdbf9fa8516b4101c4542224f9b2cf01a985859856eeee2678a5->enter($__internal_a967e7324166cdbf9fa8516b4101c4542224f9b2cf01a985859856eeee2678a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Edit App";
        
        $__internal_a967e7324166cdbf9fa8516b4101c4542224f9b2cf01a985859856eeee2678a5->leave($__internal_a967e7324166cdbf9fa8516b4101c4542224f9b2cf01a985859856eeee2678a5_prof);

        
        $__internal_248912a0d66d40e80f11e7b7718cb4d29d5a6988a78cfc0d5c00a278b04257d4->leave($__internal_248912a0d66d40e80f11e7b7718cb4d29d5a6988a78cfc0d5c00a278b04257d4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f14cbe2b4f79030fb6cb55f0d603d29bbf334430cc43e9103898b332bf45645b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f14cbe2b4f79030fb6cb55f0d603d29bbf334430cc43e9103898b332bf45645b->enter($__internal_f14cbe2b4f79030fb6cb55f0d603d29bbf334430cc43e9103898b332bf45645b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_83c524bb9beadcd4453e7b469d25153906627651c36034129eaf14d49457f404 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83c524bb9beadcd4453e7b469d25153906627651c36034129eaf14d49457f404->enter($__internal_83c524bb9beadcd4453e7b469d25153906627651c36034129eaf14d49457f404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $context["j"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "permisos"), "method");
        // line 5
        echo "    <input type=\"hidden\" id=\"tip_user\" name=\"tip_user\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")), "html", null, true);
        echo "\">
    <h1 class=\"edit-app-tit\">EDIT APP</h1>
    <div id=\"carga\" style=\"display: none\">
      <div id=\"cascara\" align=\"left\">
        <div id=\"barra\" align=\"left\"></div>
      </div>
      <a id=\"mensajeCascara\">Cargando... </a>
    </div>
    ";
        // line 13
        if (((isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")) == "Administrador")) {
            // line 14
            echo "            <div class=\"form-edit-app\">
              <form name=\"appbundle_user\" id=\"form-listapp\" method=\"post\" action=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listapp_update", array("id" => $this->getAttribute((isset($context["listapp"]) ? $context["listapp"] : $this->getContext($context, "listapp")), "id", array()))), "html", null, true);
            echo "\">
                  <div id=\"appbundle_user\">
                    <div>
                        <label for=\"text-nombre\" class=\"required\">Name:</label>
                        <input class=\"txt_box\" type=\"text\" id=\"text-nombre\" value=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listapp"]) ? $context["listapp"] : $this->getContext($context, "listapp")), "nombre", array()), "html", null, true);
            echo "\" name=\"text-nombre\" required=\"required\" />
                        <label for=\"text-url\" class=\"required\">Url:</label>
                        <input class=\"txt_box\" type=\"text\" id=\"text-url\" value=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listapp"]) ? $context["listapp"] : $this->getContext($context, "listapp")), "url", array()), "html", null, true);
            echo "\" name=\"text-url\" required=\"required\" /><br>
                        <label for=\"text-data\" class=\"required\">Data:</label><br><br><br>
                        <textarea class=\"edit-text-data\" type=\"text\" id=\"text-data\" value=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listapp"]) ? $context["listapp"] : $this->getContext($context, "listapp")), "data", array()), "html", null, true);
            echo "\" name=\"text-data\" required=\"required\" >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listapp"]) ? $context["listapp"] : $this->getContext($context, "listapp")), "data", array()), "html", null, true);
            echo "</textarea>
                      </div>


                        <div>
                            <a class=\"required\">Select Category: </a><br>
                        </div>
                          <div class=\"per-tab\">
                            <div class=\"div_permisos\">
                              ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) ? $context["categorias"] : $this->getContext($context, "categorias")));
            foreach ($context['_seq'] as $context["_key"] => $context["categorium"]) {
                // line 33
                echo "                                ";
                if (($this->getAttribute($context["categorium"], "nombre", array()) == $this->getAttribute($this->getAttribute((isset($context["listapp"]) ? $context["listapp"] : $this->getContext($context, "listapp")), "categoria", array()), "nombre", array()))) {
                    // line 34
                    echo "                                  <a class=\"opt_cat\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["categorium"], "nombre", array()), "html", null, true);
                    echo "</a><input id=\"int_box\" type=\"radio\" name=\"category\" checked=\"checked\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["categorium"], "id", array()), "html", null, true);
                    echo "\"><br><br>
                                ";
                } else {
                    // line 36
                    echo "                                  <a class=\"opt_cat\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["categorium"], "nombre", array()), "html", null, true);
                    echo "</a><input id=\"int_box\" type=\"radio\" name=\"category\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["categorium"], "id", array()), "html", null, true);
                    echo "\"><br><br>
                                ";
                }
                // line 38
                echo "                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorium'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                            </div>

                          </div><br><br>

                    ";
            // line 43
            if (($this->getAttribute((isset($context["listapp"]) ? $context["listapp"] : $this->getContext($context, "listapp")), "adjunto", array()) != "")) {
                // line 44
                echo "                      <div class=\"panel-btns1\">

                          <a class=\"btn-download\" onclick=\"descargar_file();\">View File  <span class=\"icon-eye\"> </span></a>
                          <a class=\"btn-reemplazo\" id=\"btn-reemplazar\" onclick=\"reemplazo();\">¿Replace File? <span class=\"icon-upload2\"> </span></a>
                      </div>

                    ";
            } else {
                // line 51
                echo "                      <div class=\"panel-btns1\">
                          <a class=\"btn-download\" id=\"btn-reemplazar\" onclick=\"reemplazo();\">¿ File? <span class=\"icon-upload2\"> </span></a>
                      </div>
                    ";
            }
            // line 55
            echo "
                    <input type=\"hidden\" id=\"file_extension\" name=\"file_extension\"/>
                    <input type=\"hidden\" id=\"name_file\" name=\"name_file\"/>
                    <textarea id=\"text-categoria\" name=\"categoria\" style=\" display:none;\" value=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["listapp"]) ? $context["listapp"] : $this->getContext($context, "listapp")), "categoria", array()), "id", array()), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["listapp"]) ? $context["listapp"] : $this->getContext($context, "listapp")), "categoria", array()), "id", array()), "html", null, true);
            echo "</textarea>
                    <input type=\"hidden\" id=\"_csrf_token\" name=\"_csrf_token\"value=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("authenticate"), "html", null, true);
            echo "\">
                    </div>

              </form>


              <input class=\"arch_adjunto\" type=\"file\" name=\"archivo_adjunto\" id=\"archivo_adjunto\" onchange=\"cargar_archivo();\" style=\" display:none;\"/>
              <input type=\"hidden\" id=\"adj\" name=\"adju\" value=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listapp"]) ? $context["listapp"] : $this->getContext($context, "listapp")), "adjunto", array()), "html", null, true);
            echo "\"/><br>
              <input type=\"hidden\" id=\"arch\" name=\"arch\"/><br>
              <br><br><div class=\"men_app1\" id=\"mensaje_formapp\" style=\"display:none\">
                <a class=\"mensaje_form\">Faltan campos por diligenciar</a>
              </div><br>
              <button onclick=\"validar();\" class=\"btn-crear\" >Save  <span class=\"icon-clipboard\"> </span></button>
            </div>
    ";
        } else {
            // line 74
            echo "      <div class=\"form-edit-app-user\">
        <form name=\"appbundle_user\" id=\"form-listapp\" method=\"post\" action=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listapp_update", array("id" => $this->getAttribute((isset($context["listapp"]) ? $context["listapp"] : $this->getContext($context, "listapp")), "id", array()))), "html", null, true);
            echo "\">
            <div id=\"appbundle_user\">
              <div>
                  <label for=\"text-nombre\" class=\"required\">Name:</label>
                  <input class=\"txt_box\" type=\"text\" id=\"text-nombre\" value=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listapp"]) ? $context["listapp"] : $this->getContext($context, "listapp")), "nombre", array()), "html", null, true);
            echo "\" name=\"text-nombre\" required=\"required\" />
                  <label for=\"text-url\" class=\"required\">Url:</label>
                  <input class=\"txt_box\" type=\"text\" id=\"text-url\" value=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listapp"]) ? $context["listapp"] : $this->getContext($context, "listapp")), "url", array()), "html", null, true);
            echo "\" name=\"text-url\" required=\"required\" /><br>
                  <label for=\"text-data\" class=\"required\">Data:</label><br><br><br>
                  <textarea class=\"edit-text-data\" type=\"text\" id=\"text-data\" value=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listapp"]) ? $context["listapp"] : $this->getContext($context, "listapp")), "data", array()), "html", null, true);
            echo "\" name=\"text-data\" required=\"required\" >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listapp"]) ? $context["listapp"] : $this->getContext($context, "listapp")), "data", array()), "html", null, true);
            echo "</textarea>
                </div>

              ";
            // line 86
            if (($this->getAttribute((isset($context["listapp"]) ? $context["listapp"] : $this->getContext($context, "listapp")), "adjunto", array()) != "")) {
                // line 87
                echo "                <div class=\"panel-btns\">

                    <a class=\"btn-download\" onclick=\"descargar_file();\">View File  <span class=\"icon-eye\"> </span></a>
                    <a class=\"btn-reemplazo\" id=\"btn-reemplazar\" onclick=\"reemplazo();\">¿Replace File? <span class=\"icon-upload2\"> </span></a>
                </div>

              ";
            } else {
                // line 94
                echo "                <div class=\"panel-btns\">
                    <a class=\"btn-download2\" id=\"btn-reemplazar\" onclick=\"reemplazo();\">¿ File? <span class=\"icon-upload2\"> </span></a>
                </div>
              ";
            }
            // line 98
            echo "
              <input type=\"hidden\" id=\"file_extension\" name=\"file_extension\"/>
              <input type=\"hidden\" id=\"name_file\" name=\"name_file\"/>
              <textarea id=\"text-categoria\" name=\"categoria\" style=\" display:none;\" value=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["listapp"]) ? $context["listapp"] : $this->getContext($context, "listapp")), "categoria", array()), "id", array()), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["listapp"]) ? $context["listapp"] : $this->getContext($context, "listapp")), "categoria", array()), "id", array()), "html", null, true);
            echo "</textarea>
              <input type=\"hidden\" id=\"_csrf_token\" name=\"_csrf_token\"value=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("authenticate"), "html", null, true);
            echo "\">
              </div>

        </form>


        <input class=\"arch_adjunto1\" type=\"file\" name=\"archivo_adjunto\" id=\"archivo_adjunto\" onchange=\"cargar_archivo();\" style=\" display:none;\"/>
        <input type=\"hidden\" id=\"adj\" name=\"adju\" value=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listapp"]) ? $context["listapp"] : $this->getContext($context, "listapp")), "adjunto", array()), "html", null, true);
            echo "\"/><br>
        <input type=\"hidden\" id=\"arch\" name=\"arch\"/><br>
        <br><br><div class=\"men_app2\" id=\"mensaje_formapp\" style=\"display:none\">
          <a class=\"mensaje_form\">Faltan campos por diligenciar</a>
        </div><br>
        <button onclick=\"validar();\" class=\"btn-crear-user\" >Save  <span class=\"icon-clipboard\"> </span></button>


      </div>
      <form id=\"form_adjunto\"  name=\"foooo\" method=\"post\" action=\"";
            // line 118
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("file_adjunto");
            echo "\">
        <input  style=\" display:none;\" id=\"file_name\" name=\"file_name\" value=\"";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listapp"]) ? $context["listapp"] : $this->getContext($context, "listapp")), "adjunto", array()), "html", null, true);
            echo "\"/>
        <input type=\"hidden\" name=\"_csrf_token\"value=\"";
            // line 120
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("authenticate"), "html", null, true);
            echo "\">
      <form>
    ";
        }
        // line 123
        echo "
    <script>
    function gId(id)
    {
        return document.getElementById(id);
    }
    function rec(r)
    {

        window.scrollTo(0,0)
        gId(\"mensajeCascara\").innerHTML=\"Cargando...\";

        document.getElementById(\"carga\").style.display = \"block\"
        document.getElementById(\"cascara\").style.display = \"block\"
        document.getElementById(\"barra\").style.display = \"block\"

        partialClear()
        upName = gId(\"name_file\").value.toString();
        upData = r;
        \$tam = upData.length;
        upUrl = '*'+'";
        // line 143
        echo twig_escape_filter($this->env, (isset($context["base1"]) ? $context["base1"] : $this->getContext($context, "base1")), "html", null, true);
        echo "'+'";
        echo twig_escape_filter($this->env, (isset($context["rutaAj"]) ? $context["rutaAj"] : $this->getContext($context, "rutaAj")), "html", null, true);
        echo "';
        console.log(upUrl);
        upAction = progreso;
        partialUpload('');
    }

    function progreso()
    {
        var pro = (((\$tam-upData.length)/\$tam)*100).toFixed(0)
        gId(\"barra\").style.width = pro+\"%\";
        console.log(pro);

        if(upFin == 1)
        {

          gId(\"text-nombre\").value=gId(\"text-nombre\").value;
          gId(\"text-url\").value=gId(\"text-url\").value;
          gId(\"text-data\").value=gId(\"text-data\").value;
          gId(\"file_extension\").value=gId(\"file_extension\").value;
          gId(\"text-categoria\").value=gId(\"text-categoria\").value;

          gId(\"form-listapp\").submit();
          hide('cascara');
        }
    }


    </script>


";
        
        $__internal_83c524bb9beadcd4453e7b469d25153906627651c36034129eaf14d49457f404->leave($__internal_83c524bb9beadcd4453e7b469d25153906627651c36034129eaf14d49457f404_prof);

        
        $__internal_f14cbe2b4f79030fb6cb55f0d603d29bbf334430cc43e9103898b332bf45645b->leave($__internal_f14cbe2b4f79030fb6cb55f0d603d29bbf334430cc43e9103898b332bf45645b_prof);

    }

    public function getTemplateName()
    {
        return "listapp/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 143,  295 => 123,  289 => 120,  285 => 119,  281 => 118,  269 => 109,  259 => 102,  253 => 101,  248 => 98,  242 => 94,  233 => 87,  231 => 86,  223 => 83,  218 => 81,  213 => 79,  206 => 75,  203 => 74,  192 => 66,  182 => 59,  176 => 58,  171 => 55,  165 => 51,  156 => 44,  154 => 43,  148 => 39,  142 => 38,  134 => 36,  126 => 34,  123 => 33,  119 => 32,  105 => 23,  100 => 21,  95 => 19,  88 => 15,  85 => 14,  83 => 13,  71 => 5,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
{% block title %}Edit App{% endblock %}
{% block body %}
    {% set j = app.session.get(\"permisos\") %}
    <input type=\"hidden\" id=\"tip_user\" name=\"tip_user\" value=\"{{ j }}\">
    <h1 class=\"edit-app-tit\">EDIT APP</h1>
    <div id=\"carga\" style=\"display: none\">
      <div id=\"cascara\" align=\"left\">
        <div id=\"barra\" align=\"left\"></div>
      </div>
      <a id=\"mensajeCascara\">Cargando... </a>
    </div>
    {% if j == \"Administrador\" %}
            <div class=\"form-edit-app\">
              <form name=\"appbundle_user\" id=\"form-listapp\" method=\"post\" action=\"{{ path('listapp_update', { 'id': listapp.id }) }}\">
                  <div id=\"appbundle_user\">
                    <div>
                        <label for=\"text-nombre\" class=\"required\">Name:</label>
                        <input class=\"txt_box\" type=\"text\" id=\"text-nombre\" value=\"{{ listapp.nombre }}\" name=\"text-nombre\" required=\"required\" />
                        <label for=\"text-url\" class=\"required\">Url:</label>
                        <input class=\"txt_box\" type=\"text\" id=\"text-url\" value=\"{{ listapp.url }}\" name=\"text-url\" required=\"required\" /><br>
                        <label for=\"text-data\" class=\"required\">Data:</label><br><br><br>
                        <textarea class=\"edit-text-data\" type=\"text\" id=\"text-data\" value=\"{{ listapp.data }}\" name=\"text-data\" required=\"required\" >{{ listapp.data }}</textarea>
                      </div>


                        <div>
                            <a class=\"required\">Select Category: </a><br>
                        </div>
                          <div class=\"per-tab\">
                            <div class=\"div_permisos\">
                              {% for categorium in categorias %}
                                {% if categorium.nombre == listapp.categoria.nombre %}
                                  <a class=\"opt_cat\">{{ categorium.nombre }}</a><input id=\"int_box\" type=\"radio\" name=\"category\" checked=\"checked\" value=\"{{ categorium.id }}\"><br><br>
                                {% else %}
                                  <a class=\"opt_cat\">{{ categorium.nombre }}</a><input id=\"int_box\" type=\"radio\" name=\"category\" value=\"{{ categorium.id }}\"><br><br>
                                {% endif %}
                              {% endfor %}
                            </div>

                          </div><br><br>

                    {% if listapp.adjunto != \"\" %}
                      <div class=\"panel-btns1\">

                          <a class=\"btn-download\" onclick=\"descargar_file();\">View File  <span class=\"icon-eye\"> </span></a>
                          <a class=\"btn-reemplazo\" id=\"btn-reemplazar\" onclick=\"reemplazo();\">¿Replace File? <span class=\"icon-upload2\"> </span></a>
                      </div>

                    {% else %}
                      <div class=\"panel-btns1\">
                          <a class=\"btn-download\" id=\"btn-reemplazar\" onclick=\"reemplazo();\">¿ File? <span class=\"icon-upload2\"> </span></a>
                      </div>
                    {% endif %}

                    <input type=\"hidden\" id=\"file_extension\" name=\"file_extension\"/>
                    <input type=\"hidden\" id=\"name_file\" name=\"name_file\"/>
                    <textarea id=\"text-categoria\" name=\"categoria\" style=\" display:none;\" value=\"{{ listapp.categoria.id }}\" >{{ listapp.categoria.id }}</textarea>
                    <input type=\"hidden\" id=\"_csrf_token\" name=\"_csrf_token\"value=\"{{ csrf_token('authenticate') }}\">
                    </div>

              </form>


              <input class=\"arch_adjunto\" type=\"file\" name=\"archivo_adjunto\" id=\"archivo_adjunto\" onchange=\"cargar_archivo();\" style=\" display:none;\"/>
              <input type=\"hidden\" id=\"adj\" name=\"adju\" value=\"{{ listapp.adjunto }}\"/><br>
              <input type=\"hidden\" id=\"arch\" name=\"arch\"/><br>
              <br><br><div class=\"men_app1\" id=\"mensaje_formapp\" style=\"display:none\">
                <a class=\"mensaje_form\">Faltan campos por diligenciar</a>
              </div><br>
              <button onclick=\"validar();\" class=\"btn-crear\" >Save  <span class=\"icon-clipboard\"> </span></button>
            </div>
    {% else %}
      <div class=\"form-edit-app-user\">
        <form name=\"appbundle_user\" id=\"form-listapp\" method=\"post\" action=\"{{ path('listapp_update', { 'id': listapp.id }) }}\">
            <div id=\"appbundle_user\">
              <div>
                  <label for=\"text-nombre\" class=\"required\">Name:</label>
                  <input class=\"txt_box\" type=\"text\" id=\"text-nombre\" value=\"{{ listapp.nombre }}\" name=\"text-nombre\" required=\"required\" />
                  <label for=\"text-url\" class=\"required\">Url:</label>
                  <input class=\"txt_box\" type=\"text\" id=\"text-url\" value=\"{{ listapp.url }}\" name=\"text-url\" required=\"required\" /><br>
                  <label for=\"text-data\" class=\"required\">Data:</label><br><br><br>
                  <textarea class=\"edit-text-data\" type=\"text\" id=\"text-data\" value=\"{{ listapp.data }}\" name=\"text-data\" required=\"required\" >{{ listapp.data }}</textarea>
                </div>

              {% if listapp.adjunto != \"\" %}
                <div class=\"panel-btns\">

                    <a class=\"btn-download\" onclick=\"descargar_file();\">View File  <span class=\"icon-eye\"> </span></a>
                    <a class=\"btn-reemplazo\" id=\"btn-reemplazar\" onclick=\"reemplazo();\">¿Replace File? <span class=\"icon-upload2\"> </span></a>
                </div>

              {% else %}
                <div class=\"panel-btns\">
                    <a class=\"btn-download2\" id=\"btn-reemplazar\" onclick=\"reemplazo();\">¿ File? <span class=\"icon-upload2\"> </span></a>
                </div>
              {% endif %}

              <input type=\"hidden\" id=\"file_extension\" name=\"file_extension\"/>
              <input type=\"hidden\" id=\"name_file\" name=\"name_file\"/>
              <textarea id=\"text-categoria\" name=\"categoria\" style=\" display:none;\" value=\"{{ listapp.categoria.id }}\" >{{ listapp.categoria.id }}</textarea>
              <input type=\"hidden\" id=\"_csrf_token\" name=\"_csrf_token\"value=\"{{ csrf_token('authenticate') }}\">
              </div>

        </form>


        <input class=\"arch_adjunto1\" type=\"file\" name=\"archivo_adjunto\" id=\"archivo_adjunto\" onchange=\"cargar_archivo();\" style=\" display:none;\"/>
        <input type=\"hidden\" id=\"adj\" name=\"adju\" value=\"{{ listapp.adjunto }}\"/><br>
        <input type=\"hidden\" id=\"arch\" name=\"arch\"/><br>
        <br><br><div class=\"men_app2\" id=\"mensaje_formapp\" style=\"display:none\">
          <a class=\"mensaje_form\">Faltan campos por diligenciar</a>
        </div><br>
        <button onclick=\"validar();\" class=\"btn-crear-user\" >Save  <span class=\"icon-clipboard\"> </span></button>


      </div>
      <form id=\"form_adjunto\"  name=\"foooo\" method=\"post\" action=\"{{ path('file_adjunto') }}\">
        <input  style=\" display:none;\" id=\"file_name\" name=\"file_name\" value=\"{{ listapp.adjunto }}\"/>
        <input type=\"hidden\" name=\"_csrf_token\"value=\"{{ csrf_token('authenticate') }}\">
      <form>
    {% endif %}

    <script>
    function gId(id)
    {
        return document.getElementById(id);
    }
    function rec(r)
    {

        window.scrollTo(0,0)
        gId(\"mensajeCascara\").innerHTML=\"Cargando...\";

        document.getElementById(\"carga\").style.display = \"block\"
        document.getElementById(\"cascara\").style.display = \"block\"
        document.getElementById(\"barra\").style.display = \"block\"

        partialClear()
        upName = gId(\"name_file\").value.toString();
        upData = r;
        \$tam = upData.length;
        upUrl = '*'+'{{ base1 }}'+'{{ rutaAj}}';
        console.log(upUrl);
        upAction = progreso;
        partialUpload('');
    }

    function progreso()
    {
        var pro = (((\$tam-upData.length)/\$tam)*100).toFixed(0)
        gId(\"barra\").style.width = pro+\"%\";
        console.log(pro);

        if(upFin == 1)
        {

          gId(\"text-nombre\").value=gId(\"text-nombre\").value;
          gId(\"text-url\").value=gId(\"text-url\").value;
          gId(\"text-data\").value=gId(\"text-data\").value;
          gId(\"file_extension\").value=gId(\"file_extension\").value;
          gId(\"text-categoria\").value=gId(\"text-categoria\").value;

          gId(\"form-listapp\").submit();
          hide('cascara');
        }
    }


    </script>


{% endblock %}
", "listapp/edit.html.twig", "/home/maria/listapp/app/Resources/views/listapp/edit.html.twig");
    }
}
