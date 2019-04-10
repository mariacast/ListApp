<?php

/* user/new.html.twig */
class __TwigTemplate_eec2857d827913d2dee4d96b5575bd6152995771a96f09bce79485d8d0f903ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/new.html.twig", 1);
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
        $__internal_4534d093e993f63aafe9573c16e4a4e5914646565c880191d0338dc975209fa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4534d093e993f63aafe9573c16e4a4e5914646565c880191d0338dc975209fa2->enter($__internal_4534d093e993f63aafe9573c16e4a4e5914646565c880191d0338dc975209fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $__internal_6f8263a74742cbd3dbd81c37d4fb901470629762e2618f0e8508660c0ef1d85f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f8263a74742cbd3dbd81c37d4fb901470629762e2618f0e8508660c0ef1d85f->enter($__internal_6f8263a74742cbd3dbd81c37d4fb901470629762e2618f0e8508660c0ef1d85f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4534d093e993f63aafe9573c16e4a4e5914646565c880191d0338dc975209fa2->leave($__internal_4534d093e993f63aafe9573c16e4a4e5914646565c880191d0338dc975209fa2_prof);

        
        $__internal_6f8263a74742cbd3dbd81c37d4fb901470629762e2618f0e8508660c0ef1d85f->leave($__internal_6f8263a74742cbd3dbd81c37d4fb901470629762e2618f0e8508660c0ef1d85f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_d941f69edd171e8685af9a06fcd8d5d44296bf2f9f5911a979df9bb47539f7b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d941f69edd171e8685af9a06fcd8d5d44296bf2f9f5911a979df9bb47539f7b7->enter($__internal_d941f69edd171e8685af9a06fcd8d5d44296bf2f9f5911a979df9bb47539f7b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4364c569a8eb4a3fe5d476e122dd5066d183881be6e033a9a5fc4d81b2cd3dbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4364c569a8eb4a3fe5d476e122dd5066d183881be6e033a9a5fc4d81b2cd3dbc->enter($__internal_4364c569a8eb4a3fe5d476e122dd5066d183881be6e033a9a5fc4d81b2cd3dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "New User";
        
        $__internal_4364c569a8eb4a3fe5d476e122dd5066d183881be6e033a9a5fc4d81b2cd3dbc->leave($__internal_4364c569a8eb4a3fe5d476e122dd5066d183881be6e033a9a5fc4d81b2cd3dbc_prof);

        
        $__internal_d941f69edd171e8685af9a06fcd8d5d44296bf2f9f5911a979df9bb47539f7b7->leave($__internal_d941f69edd171e8685af9a06fcd8d5d44296bf2f9f5911a979df9bb47539f7b7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_47b0c86e1ab82d967bf37497b94e62b589cda6d23e596f2c1512226f26f786b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47b0c86e1ab82d967bf37497b94e62b589cda6d23e596f2c1512226f26f786b5->enter($__internal_47b0c86e1ab82d967bf37497b94e62b589cda6d23e596f2c1512226f26f786b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_00bf5036923908af784d36eb8574c2f5e33569420cb49d532901597a6cab862c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00bf5036923908af784d36eb8574c2f5e33569420cb49d532901597a6cab862c->enter($__internal_00bf5036923908af784d36eb8574c2f5e33569420cb49d532901597a6cab862c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1 class=\"titulo3\">CREATE USER</h1>

    <div class=\"form-new_user\">
      <form name=\"appbundle_user\" id=\"form-user\" method=\"post\" action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_create");
        echo "\">
          <div id=\"appbundle_user\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 10
            echo "                <div class=\"flash-notice\">
                  <a>";
            // line 11
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "            <div class=\"div_name\">
                <label for=\"nombre\" class=\"lab_user\">Name:</label>
                <input class=\"txt_box_user1\" type=\"text\" id=\"text-nombre\" name=\"nombre\" required=\"required\" maxlength=\"50\" />
            </div>
            <div class=\"div_username\">
                <label for=\"username\" class=\"lab_user\">Username:</label>
                <input class=\"txt_box_user1\" type=\"text\" id=\"text-username\" name=\"username\" required=\"required\" maxlength=\"30\" />
            </div>
            <div class=\"div_pass\">
                <label for=\"password\" class=\"lab_user\">Password:</label>
                <input class=\"txt_box_user1\" type=\"password\" id=\"text-password\" name=\"password\" required=\"required\" />
            </div>
            <div class=\"div_confirpass\">
                <label for=\"confirmacion\" class=\"lab_user1\">Confirm <br>
                  Password:</label>
                <input class=\"txt_box_user1\" type=\"password\" id=\"text-confirmacion\" name=\"confirmacion\" required=\"required\" />
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
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) ? $context["categorias"] : $this->getContext($context, "categorias")));
        foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
            // line 45
            echo "                          <tr>
                              <td id=\"td_cat\">";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["categoria"], "nombre", array()), "html", null, true);
            echo "</td>
                              <td id=\"td_cat\"><input class=\"checked-btn\" id=\"checkMo_";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["categoria"], "nombre", array()), "html", null, true);
            echo "\" type =\"checkbox\" name=\"opciones\" value = \"Modificar_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categoria"], "nombre", array()), "html", null, true);
            echo "\" onclick=\"checks();\"></td>
                              <td id=\"td_cat\"><input class=\"checked-btn\" id=\"checkVe_";
            // line 48
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
        // line 52
        echo "                      </tbody>
                  </table>

              </div>
            </div>


            <div>
              <textarea id=\"appbundle_user_permisos\" name=\"permisos\" style=\" display:none;\" maxlength=\"65535\"></textarea>
              <input type=\"hidden\" name=\"_csrf_token\"value=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
            </div>

          </div>
      </form>

      <div id=\"mensaje_form\" style=\"display:none\">
        <a class=\"mensaje_form\">Faltan campos por diligenciar</a>
      </div><br>
      <br><div class=\"div_btn_crear\">
        <button onclick=\"validarUser();\" class=\"btn-crear1\" value=\"Create\">Create   <span class=\"icon-user-plus\"></span></button>
      </div>

    </div>
    <script type=\"text/javascript\">
        var fila = -1;
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
            if(document.getElementById('text-password').value == \"\" )
            {
              todo_correcto = false;
            }
            if(document.getElementById('text-confirmacion').value == \"\" )
            {
              todo_correcto = false;
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
        
        $__internal_00bf5036923908af784d36eb8574c2f5e33569420cb49d532901597a6cab862c->leave($__internal_00bf5036923908af784d36eb8574c2f5e33569420cb49d532901597a6cab862c_prof);

        
        $__internal_47b0c86e1ab82d967bf37497b94e62b589cda6d23e596f2c1512226f26f786b5->leave($__internal_47b0c86e1ab82d967bf37497b94e62b589cda6d23e596f2c1512226f26f786b5_prof);

    }

    public function getTemplateName()
    {
        return "user/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 61,  155 => 52,  143 => 48,  137 => 47,  133 => 46,  130 => 45,  126 => 44,  94 => 14,  85 => 11,  82 => 10,  78 => 9,  73 => 7,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
{% block title %}New User{% endblock %}
{% block body %}
    <h1 class=\"titulo3\">CREATE USER</h1>

    <div class=\"form-new_user\">
      <form name=\"appbundle_user\" id=\"form-user\" method=\"post\" action=\"{{ path('user_create')}}\">
          <div id=\"appbundle_user\">
            {% for flash_message in app.session.flashBag.get('notice') %}
                <div class=\"flash-notice\">
                  <a>{{ flash_message }}</a>
                </div>
            {% endfor %}
            <div class=\"div_name\">
                <label for=\"nombre\" class=\"lab_user\">Name:</label>
                <input class=\"txt_box_user1\" type=\"text\" id=\"text-nombre\" name=\"nombre\" required=\"required\" maxlength=\"50\" />
            </div>
            <div class=\"div_username\">
                <label for=\"username\" class=\"lab_user\">Username:</label>
                <input class=\"txt_box_user1\" type=\"text\" id=\"text-username\" name=\"username\" required=\"required\" maxlength=\"30\" />
            </div>
            <div class=\"div_pass\">
                <label for=\"password\" class=\"lab_user\">Password:</label>
                <input class=\"txt_box_user1\" type=\"password\" id=\"text-password\" name=\"password\" required=\"required\" />
            </div>
            <div class=\"div_confirpass\">
                <label for=\"confirmacion\" class=\"lab_user1\">Confirm <br>
                  Password:</label>
                <input class=\"txt_box_user1\" type=\"password\" id=\"text-confirmacion\" name=\"confirmacion\" required=\"required\" />
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


            <div>
              <textarea id=\"appbundle_user_permisos\" name=\"permisos\" style=\" display:none;\" maxlength=\"65535\"></textarea>
              <input type=\"hidden\" name=\"_csrf_token\"value=\"{{ csrf_token('authenticate') }}\">
            </div>

          </div>
      </form>

      <div id=\"mensaje_form\" style=\"display:none\">
        <a class=\"mensaje_form\">Faltan campos por diligenciar</a>
      </div><br>
      <br><div class=\"div_btn_crear\">
        <button onclick=\"validarUser();\" class=\"btn-crear1\" value=\"Create\">Create   <span class=\"icon-user-plus\"></span></button>
      </div>

    </div>
    <script type=\"text/javascript\">
        var fila = -1;
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
            if(document.getElementById('text-password').value == \"\" )
            {
              todo_correcto = false;
            }
            if(document.getElementById('text-confirmacion').value == \"\" )
            {
              todo_correcto = false;
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
", "user/new.html.twig", "/home/maria/listapp/app/Resources/views/user/new.html.twig");
    }
}
