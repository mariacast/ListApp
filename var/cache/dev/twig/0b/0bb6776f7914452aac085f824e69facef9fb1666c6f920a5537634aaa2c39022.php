<?php

/* user/edit.html.twig */
class __TwigTemplate_09fcf7baf6a232da832a734062daceec97231db0a5e830e408ce7753e2fa5681 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/edit.html.twig", 1);
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
        $__internal_45219e3e2ae82006c566ffbd665f57120388c2dfa305187ecbf33127fe2106bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45219e3e2ae82006c566ffbd665f57120388c2dfa305187ecbf33127fe2106bf->enter($__internal_45219e3e2ae82006c566ffbd665f57120388c2dfa305187ecbf33127fe2106bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $__internal_0f1dda2a6f07dd36fda82d2a1177f6ae38afb1b28d7c2425284a0504cffaa9c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f1dda2a6f07dd36fda82d2a1177f6ae38afb1b28d7c2425284a0504cffaa9c7->enter($__internal_0f1dda2a6f07dd36fda82d2a1177f6ae38afb1b28d7c2425284a0504cffaa9c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45219e3e2ae82006c566ffbd665f57120388c2dfa305187ecbf33127fe2106bf->leave($__internal_45219e3e2ae82006c566ffbd665f57120388c2dfa305187ecbf33127fe2106bf_prof);

        
        $__internal_0f1dda2a6f07dd36fda82d2a1177f6ae38afb1b28d7c2425284a0504cffaa9c7->leave($__internal_0f1dda2a6f07dd36fda82d2a1177f6ae38afb1b28d7c2425284a0504cffaa9c7_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_b2d122a3ba4d2f486db0f0dd532d44dedb4eab8012e5ef2e2fb8e8746a193db2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2d122a3ba4d2f486db0f0dd532d44dedb4eab8012e5ef2e2fb8e8746a193db2->enter($__internal_b2d122a3ba4d2f486db0f0dd532d44dedb4eab8012e5ef2e2fb8e8746a193db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_18cad681d11e1b01804c5a66b0510617d5297a0cdfbf88872d22baff04e15eb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18cad681d11e1b01804c5a66b0510617d5297a0cdfbf88872d22baff04e15eb3->enter($__internal_18cad681d11e1b01804c5a66b0510617d5297a0cdfbf88872d22baff04e15eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Edit User";
        
        $__internal_18cad681d11e1b01804c5a66b0510617d5297a0cdfbf88872d22baff04e15eb3->leave($__internal_18cad681d11e1b01804c5a66b0510617d5297a0cdfbf88872d22baff04e15eb3_prof);

        
        $__internal_b2d122a3ba4d2f486db0f0dd532d44dedb4eab8012e5ef2e2fb8e8746a193db2->leave($__internal_b2d122a3ba4d2f486db0f0dd532d44dedb4eab8012e5ef2e2fb8e8746a193db2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_39bf42420b32c63e920034206da19259ca0235ab5dd9871c6ce2ba97c0d7c3c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39bf42420b32c63e920034206da19259ca0235ab5dd9871c6ce2ba97c0d7c3c2->enter($__internal_39bf42420b32c63e920034206da19259ca0235ab5dd9871c6ce2ba97c0d7c3c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_44aeaf2451e768f1950ba159a2b5d303b365ceda22f784d3c023cdc85cb4d095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44aeaf2451e768f1950ba159a2b5d303b365ceda22f784d3c023cdc85cb4d095->enter($__internal_44aeaf2451e768f1950ba159a2b5d303b365ceda22f784d3c023cdc85cb4d095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h1 class=\"edit-user-tit\">EDIT USER</h1>

    <div class=\"form-new_user\">
      <form name=\"appbundle_user\" id=\"form-user\" method=\"post\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_update", array("id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">
          <div id=\"appbundle_user\">
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 11
            echo "            <div class=\"flash-notice\">
              <a>";
            // line 12
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</a>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "            <div class=\"div_name\">
                <label for=\"nombre\" class=\"lab_user\">Name:</label>
                <input class=\"txt_box\" type=\"text\" id=\"text-nombre\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "nombre", array()), "html", null, true);
        echo "\" name=\"nombre\" required=\"required\" maxlength=\"50\" />
            </div>
            <div class=\"div_username\">
                <label for=\"username\" class=\"lab_user\">Username:</label>
                <input class=\"txt_box\" type=\"text\" id=\"text-username\"  value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "\" name=\"username\" required=\"required\" maxlength=\"20\" />
            </div>
            <div id=\"div_cambiar\" class=\"div_cambiar\">
              <a class=\"b_editar_pass\" onclick=\"cambia_pass();\"<span class=\"icon-eye\"> </span>Cambiar Password</a>
              <input type=\"hidden\" name=\"cambioP\" id=\"cambioPass\" value=\"no\">
            </div>
            <div id=\"div_pass\" style=\"display:none\">
              <div  class=\"div_pass\">
                  <label for=\"password\" class=\"lab_user\">Password:</label>
                  <input class=\"txt_box\" type=\"password\" id=\"text-password\" value=\"\" name=\"password\" required=\"required\" />
              </div>
              <div class=\"div_confirpass\">
                  <label for=\"confirmacion\" class=\"lab_user1\">Confirm <br>
                    Password:</label><br>
                  <input class=\"txt_box\" type=\"password\" id=\"text-confirmacion\" value=\"\" name=\"confirmacion\" required=\"required\" />
              </div>
            </div>
            <div class=\"contenedor_permisos\">
              <a class=\"required\">Select User Permissions:  <span class=\"icon-key2\"></a><br>
              <div class=\"per-tab\">
                <a id=\"op\" class=\"optAd\">Administrador </a><input class=\"checked-btn\" id=\"checkAdm\" type =\"checkbox\" name=\"opcionAdmin\" value = \"Administrador\" onclick=\"checkAdmin();\"></input>
                  <table id=\"list-perm\"class=\"table table-hover\">
                      <thead>
                          <tr>
                              <th><a id=\"op\" class=\"opt1\">Categorias</a></th>
                              <th><a id=\"op\" class=\"opt1\">Modificar</a></th>
                              <th><a id=\"op\" class=\"opt1\">Ver</a></th>
                          </tr>
                      </thead>
                      <tbody>
                        ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categorias"] ?? $this->getContext($context, "categorias")));
        foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
            // line 52
            echo "                          <tr>
                              <td id=\"td_cat\">";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["categoria"], "nombre", array()), "html", null, true);
            echo "</td>
                              <td id=\"td_cat\"><input class=\"checked-btn\" id=\"checkMo_";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["categoria"], "nombre", array()), "html", null, true);
            echo "\" type =\"checkbox\" name=\"opciones\" value = \"Modificar_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categoria"], "nombre", array()), "html", null, true);
            echo "\" onclick=\"checks();\"></td>
                              <td id=\"td_cat\"><input class=\"checked-btn\" id=\"checkVe_";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["categoria"], "nombre", array()), "html", null, true);
            echo "\" type =\"checkbox\" name=\"opciones\" value = \"Ver_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categoria"], "nombre", array()), "html", null, true);
            echo "\" onclick=\"checks();\" ></td>
                          </tr>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "

                      </tbody>
                  </table>

              </div>
            </div>
            <textarea id=\"appbundle_user_permisos\" name=\"permisos\" style=\" display:none;\" maxlength=\"65535\"></textarea>

            <div>
              <input type=\"hidden\" name=\"_csrf_token\"value=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
            </div>

          </div>
      </form>
      <div id=\"mensaje_formulario\" style=\"display:none\">
        <a class=\"mensaje_form\">Faltan campos por diligenciar</a>
      </div><br>
      <br><div class=\"div_btn_crear\">
        <button onclick=\"validarUser();\" class=\"btn-crear1\" value=\"Create\">Save   <span class=\"icon-user-plus\"></span></button>
      </div>
    </div>
    <script type=\"text/javascript\">
        window.onload=inicio;
        function inicio() {
          var permisos = \"";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "permisos", array()), "html", null, true);
        echo "\";
          permisos = permisos.split(\";\");
          if(permisos == \"Administrador\")
            gId(\"checkAdm\").checked=true;
            checkAdmin();

          for(var i=0; i<permisos.length; i++)
          {
            var op=permisos[i].split(\"_\");
            if(op[0] == \"Modificar\")
            {
              gId(\"checkMo_\"+op[1]).checked=true;
              ch();
            }

            else if (op[0] == \"Ver\")
            {
              gId(\"checkVe_\"+op[1]).checked=true;
              ch();
            }
          }

        }

        function gId(id)
        {
            return document.getElementById(id);
        }
        function checkAdmin() {
          var inputElements = document.getElementsByName('opciones');
          if (document.getElementsByName('opcionAdmin').checked = true)
          {
            for(var i=0; inputElements[i]; ++i){
\t\t\t\t\t\t\t  if(inputElements[i].checked){
\t\t\t\t\t\t\t\t   inputElements[i].checked = false;
\t\t\t\t\t\t\t  }

            gId(\"appbundle_user_permisos\").value = \"Administrador\";
\t\t\t\t\t\t}
          }
        }
        function ch() {
          var checkedValue = null;
          var inputElements = document.getElementsByName('opciones');
          var opc =\"\";
          for(var i=0; inputElements[i]; ++i){
              if(inputElements[i].checked){
                 gId(\"checkAdm\").checked = false;
                 checkedValue = inputElements[i].value;
                 opc= opc+checkedValue+\";\";

              }
          }

          gId(\"appbundle_user_permisos\").value = \"\";
          gId(\"appbundle_user_permisos\").value = opc;

        }
        function checks()
        {
          var chek= event.target.id.split(\"_\");

          if (chek[0] == \"checkMo\"){
            if (gId(\"checkMo_\"+chek[1]).checked){
              gId(\"checkVe_\"+chek[1]).checked=false;
            }
          }
          if (chek[0] == \"checkVe\"){
            if (gId(\"checkVe_\"+chek[1]).checked){
              gId(\"checkMo_\"+chek[1]).checked=false;
            }
          }
          var checkedValue = null;
          var inputElements = document.getElementsByName('opciones');
          var opc =\"\";
          for(var i=0; inputElements[i]; ++i){
              if(inputElements[i].checked){
                 gId(\"checkAdm\").checked = false;
                 checkedValue = inputElements[i].value;
                 opc= opc+checkedValue+\";\";

              }
          }

          gId(\"appbundle_user_permisos\").value = \"\";
          gId(\"appbundle_user_permisos\").value = opc;
        }

        function validarUser(){
            var todo_correcto = true;

            if(document.getElementById('text-nombre').value == \"\" )
            {
              todo_correcto = false;
            }

            if(document.getElementById('text-username').value == \"\" )
            {
              todo_correcto = false;
            }

            if(document.getElementById('cambioPass').value == \"si\" )
            {
              if(document.getElementById('text-password').value == \"\" )
              {
                todo_correcto = false;
              }
              if(document.getElementById('text-confirmacion').value == \"\" )
              {
                todo_correcto = false;
              }
            }

            if(document.getElementById('appbundle_user_permisos').value == \"\")
            {
              todo_correcto = false;
            }
            var campo = document.getElementById('appbundle_user_permisos').value;
            if(!document.getElementById('checkAdm').checked && campo == \"Administrador\")
            {
              todo_correcto = false;
            }
            if(!todo_correcto)
            {
              gId(\"mensaje_formulario\").style.display='block';
            }
            if(todo_correcto)
            {

              gId(\"form-user\").submit();
            }

            return todo_correcto;
        }
        function permiso()
        {

          var checkedValue = null;
          var inputElements = document.getElementsByName('opciones');
          var opc =\"\";
          for(var i=0; inputElements[i]; ++i){

              if(inputElements[i].checked){
                 checkedValue = inputElements[i].value;

                 gId(\"appbundle_user_permisos\").value += checkedValue+\";\";

              }
          }
          gId(\"form-user\").submit();

        }
    </script>
";
        
        $__internal_44aeaf2451e768f1950ba159a2b5d303b365ceda22f784d3c023cdc85cb4d095->leave($__internal_44aeaf2451e768f1950ba159a2b5d303b365ceda22f784d3c023cdc85cb4d095_prof);

        
        $__internal_39bf42420b32c63e920034206da19259ca0235ab5dd9871c6ce2ba97c0d7c3c2->leave($__internal_39bf42420b32c63e920034206da19259ca0235ab5dd9871c6ce2ba97c0d7c3c2_prof);

    }

    public function getTemplateName()
    {
        return "user/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 84,  180 => 69,  168 => 59,  156 => 55,  150 => 54,  146 => 53,  143 => 52,  139 => 51,  106 => 21,  99 => 17,  95 => 15,  86 => 12,  83 => 11,  79 => 10,  74 => 8,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
{% block title %}Edit User{% endblock %}
{% block body %}

    <h1 class=\"edit-user-tit\">EDIT USER</h1>

    <div class=\"form-new_user\">
      <form name=\"appbundle_user\" id=\"form-user\" method=\"post\" action=\"{{ path('user_update', { 'id': user.id }) }}\">
          <div id=\"appbundle_user\">
            {% for flash_message in app.session.flashBag.get('notice') %}
            <div class=\"flash-notice\">
              <a>{{ flash_message }}</a>
            </div>
            {% endfor %}
            <div class=\"div_name\">
                <label for=\"nombre\" class=\"lab_user\">Name:</label>
                <input class=\"txt_box\" type=\"text\" id=\"text-nombre\" value=\"{{ user.nombre }}\" name=\"nombre\" required=\"required\" maxlength=\"50\" />
            </div>
            <div class=\"div_username\">
                <label for=\"username\" class=\"lab_user\">Username:</label>
                <input class=\"txt_box\" type=\"text\" id=\"text-username\"  value=\"{{ user.username }}\" name=\"username\" required=\"required\" maxlength=\"20\" />
            </div>
            <div id=\"div_cambiar\" class=\"div_cambiar\">
              <a class=\"b_editar_pass\" onclick=\"cambia_pass();\"<span class=\"icon-eye\"> </span>Cambiar Password</a>
              <input type=\"hidden\" name=\"cambioP\" id=\"cambioPass\" value=\"no\">
            </div>
            <div id=\"div_pass\" style=\"display:none\">
              <div  class=\"div_pass\">
                  <label for=\"password\" class=\"lab_user\">Password:</label>
                  <input class=\"txt_box\" type=\"password\" id=\"text-password\" value=\"\" name=\"password\" required=\"required\" />
              </div>
              <div class=\"div_confirpass\">
                  <label for=\"confirmacion\" class=\"lab_user1\">Confirm <br>
                    Password:</label><br>
                  <input class=\"txt_box\" type=\"password\" id=\"text-confirmacion\" value=\"\" name=\"confirmacion\" required=\"required\" />
              </div>
            </div>
            <div class=\"contenedor_permisos\">
              <a class=\"required\">Select User Permissions:  <span class=\"icon-key2\"></a><br>
              <div class=\"per-tab\">
                <a id=\"op\" class=\"optAd\">Administrador </a><input class=\"checked-btn\" id=\"checkAdm\" type =\"checkbox\" name=\"opcionAdmin\" value = \"Administrador\" onclick=\"checkAdmin();\"></input>
                  <table id=\"list-perm\"class=\"table table-hover\">
                      <thead>
                          <tr>
                              <th><a id=\"op\" class=\"opt1\">Categorias</a></th>
                              <th><a id=\"op\" class=\"opt1\">Modificar</a></th>
                              <th><a id=\"op\" class=\"opt1\">Ver</a></th>
                          </tr>
                      </thead>
                      <tbody>
                        {% for categoria in categorias %}
                          <tr>
                              <td id=\"td_cat\">{{ categoria.nombre}}</td>
                              <td id=\"td_cat\"><input class=\"checked-btn\" id=\"checkMo_{{ categoria.nombre }}\" type =\"checkbox\" name=\"opciones\" value = \"Modificar_{{ categoria.nombre}}\" onclick=\"checks();\"></td>
                              <td id=\"td_cat\"><input class=\"checked-btn\" id=\"checkVe_{{ categoria.nombre }}\" type =\"checkbox\" name=\"opciones\" value = \"Ver_{{ categoria.nombre}}\" onclick=\"checks();\" ></td>
                          </tr>

                        {% endfor %}


                      </tbody>
                  </table>

              </div>
            </div>
            <textarea id=\"appbundle_user_permisos\" name=\"permisos\" style=\" display:none;\" maxlength=\"65535\"></textarea>

            <div>
              <input type=\"hidden\" name=\"_csrf_token\"value=\"{{ csrf_token('authenticate') }}\">
            </div>

          </div>
      </form>
      <div id=\"mensaje_formulario\" style=\"display:none\">
        <a class=\"mensaje_form\">Faltan campos por diligenciar</a>
      </div><br>
      <br><div class=\"div_btn_crear\">
        <button onclick=\"validarUser();\" class=\"btn-crear1\" value=\"Create\">Save   <span class=\"icon-user-plus\"></span></button>
      </div>
    </div>
    <script type=\"text/javascript\">
        window.onload=inicio;
        function inicio() {
          var permisos = \"{{ user.permisos }}\";
          permisos = permisos.split(\";\");
          if(permisos == \"Administrador\")
            gId(\"checkAdm\").checked=true;
            checkAdmin();

          for(var i=0; i<permisos.length; i++)
          {
            var op=permisos[i].split(\"_\");
            if(op[0] == \"Modificar\")
            {
              gId(\"checkMo_\"+op[1]).checked=true;
              ch();
            }

            else if (op[0] == \"Ver\")
            {
              gId(\"checkVe_\"+op[1]).checked=true;
              ch();
            }
          }

        }

        function gId(id)
        {
            return document.getElementById(id);
        }
        function checkAdmin() {
          var inputElements = document.getElementsByName('opciones');
          if (document.getElementsByName('opcionAdmin').checked = true)
          {
            for(var i=0; inputElements[i]; ++i){
\t\t\t\t\t\t\t  if(inputElements[i].checked){
\t\t\t\t\t\t\t\t   inputElements[i].checked = false;
\t\t\t\t\t\t\t  }

            gId(\"appbundle_user_permisos\").value = \"Administrador\";
\t\t\t\t\t\t}
          }
        }
        function ch() {
          var checkedValue = null;
          var inputElements = document.getElementsByName('opciones');
          var opc =\"\";
          for(var i=0; inputElements[i]; ++i){
              if(inputElements[i].checked){
                 gId(\"checkAdm\").checked = false;
                 checkedValue = inputElements[i].value;
                 opc= opc+checkedValue+\";\";

              }
          }

          gId(\"appbundle_user_permisos\").value = \"\";
          gId(\"appbundle_user_permisos\").value = opc;

        }
        function checks()
        {
          var chek= event.target.id.split(\"_\");

          if (chek[0] == \"checkMo\"){
            if (gId(\"checkMo_\"+chek[1]).checked){
              gId(\"checkVe_\"+chek[1]).checked=false;
            }
          }
          if (chek[0] == \"checkVe\"){
            if (gId(\"checkVe_\"+chek[1]).checked){
              gId(\"checkMo_\"+chek[1]).checked=false;
            }
          }
          var checkedValue = null;
          var inputElements = document.getElementsByName('opciones');
          var opc =\"\";
          for(var i=0; inputElements[i]; ++i){
              if(inputElements[i].checked){
                 gId(\"checkAdm\").checked = false;
                 checkedValue = inputElements[i].value;
                 opc= opc+checkedValue+\";\";

              }
          }

          gId(\"appbundle_user_permisos\").value = \"\";
          gId(\"appbundle_user_permisos\").value = opc;
        }

        function validarUser(){
            var todo_correcto = true;

            if(document.getElementById('text-nombre').value == \"\" )
            {
              todo_correcto = false;
            }

            if(document.getElementById('text-username').value == \"\" )
            {
              todo_correcto = false;
            }

            if(document.getElementById('cambioPass').value == \"si\" )
            {
              if(document.getElementById('text-password').value == \"\" )
              {
                todo_correcto = false;
              }
              if(document.getElementById('text-confirmacion').value == \"\" )
              {
                todo_correcto = false;
              }
            }

            if(document.getElementById('appbundle_user_permisos').value == \"\")
            {
              todo_correcto = false;
            }
            var campo = document.getElementById('appbundle_user_permisos').value;
            if(!document.getElementById('checkAdm').checked && campo == \"Administrador\")
            {
              todo_correcto = false;
            }
            if(!todo_correcto)
            {
              gId(\"mensaje_formulario\").style.display='block';
            }
            if(todo_correcto)
            {

              gId(\"form-user\").submit();
            }

            return todo_correcto;
        }
        function permiso()
        {

          var checkedValue = null;
          var inputElements = document.getElementsByName('opciones');
          var opc =\"\";
          for(var i=0; inputElements[i]; ++i){

              if(inputElements[i].checked){
                 checkedValue = inputElements[i].value;

                 gId(\"appbundle_user_permisos\").value += checkedValue+\";\";

              }
          }
          gId(\"form-user\").submit();

        }
    </script>
{% endblock %}
", "user/edit.html.twig", "/home/maria/listapp/app/Resources/views/user/edit.html.twig");
    }
}
