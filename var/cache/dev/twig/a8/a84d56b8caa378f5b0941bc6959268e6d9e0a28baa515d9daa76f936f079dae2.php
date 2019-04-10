<?php

/* base.html.twig */
class __TwigTemplate_46ec375f9412574a4b1648f4d27c7e0c4c3693fb4dba3003e23cdbf45b02ddb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ee4bc5e0dcc39a0a2fd30c05616a9e548eb92335213fef0da871017d76f0f51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ee4bc5e0dcc39a0a2fd30c05616a9e548eb92335213fef0da871017d76f0f51->enter($__internal_2ee4bc5e0dcc39a0a2fd30c05616a9e548eb92335213fef0da871017d76f0f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_f76931b8b6a7965bec9439deb0c83fe7a0ccbf9251c9fe5f98a16d3115d9e3cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f76931b8b6a7965bec9439deb0c83fe7a0ccbf9251c9fe5f98a16d3115d9e3cd->enter($__internal_f76931b8b6a7965bec9439deb0c83fe7a0ccbf9251c9fe5f98a16d3115d9e3cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/favicon.png"), "html", null, true);
        echo "\" />
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fonts/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ajax.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/dom.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/basico.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/upload.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/funciones.js"), "html", null, true);
        echo "\"></script>
        <link href=\"https://fonts.googleapis.com/css?family=Righteous\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Yesteryear\" rel=\"stylesheet\">
        <script type=\"text/javascript\" src=\"http://code.jquery.com/jquery-1.11.0.min.js\"></script>
    </head>
    <header>
        <div class=\"wrapper\">

            <div class=\"btns\">
                <div class=\"user_btn\">
                <a class=\"bt\" href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\">Exit   <span class=\"icon-exit\"></span></a>
                <a class=\"bt\" id=\"btn_fold_grupo\"><span class=\"icon-user\"> </span>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "nombre"), "method"), "html", null, true);
        echo "</a>
                <div>

                ";
        // line 29
        $context["j"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "permisos"), "method"), ";");
        // line 30
        echo "                ";
        if (($this->getAttribute((isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")), 0, array(), "array") == "Administrador")) {
            // line 31
            echo "
                    <a class=\"bt\" href=\"";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categoria_index");
            echo "\"><span class=\"icon-stack\"> </span>CATEGORIES</a>
                    <a class=\"bt\" href=\"";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("viwCat");
            echo "\"><span class=\"icon-list2\"> </span>LISTAPP</a>
                    <a class=\"bt\" href=\"";
            // line 34
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
            echo "\"><span class=\"icon-users\"> </span>USERS</a>

                ";
        } else {
            // line 37
            echo "
                    <a class=\"bt\" href=\"";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("viwCat");
            echo "\"><span class=\"icon-list2\"> </span>LISTAPP</a>
                ";
        }
        // line 40
        echo "


                <a class=\"tit-app1\"><img class =\"logo-it\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo-white.png"), "html", null, true);
        echo "\"/></a>
          </div>

        </div>
    </header>

    <body>

     <div id=\"modal\" class=\"modal\">

       <!-- Modal content -->
       <div class=\"modal-content\">
         <span class=\"close\">x</span>
         <!-- Formulari -->
         <form action=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("data_pass", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "id"), "method"))), "html", null, true);
        echo "\" method=post name=\"formulariopass\" id=\"formulariopass\" class=\"form_pass\">

             <div class=\"contenido\">
                  <label class=\"tit-pass\" style=\"text-align:center\">CHANGE PASSWORD</label>
                 <div  class=\"div_password\">
                     <label for=\"password\" class=\"lab_user\">Password Acutal:</label>
                     <input class=\"txt_box\" type=\"password\" id=\"password_actual\" value=\"\" name=\"password_actual\" required=\"required\" />
                 </div>
                 <div  class=\"div_passnew\">
                     <label for=\"password\" class=\"lab_user\">Password:</label>
                     <input class=\"txt_box\" type=\"password\" id=\"password_new\" value=\"\" name=\"password_new\" required=\"required\" />
                 </div>
                 <div class=\"div_confirmar\">
                     <label for=\"confirmacion\" class=\"lab_user1\">Confirm <br>
                       Password:</label><br>
                     <input class=\"txt_box\" type=\"password\" id=\"confirmacion\" value=\"\" name=\"confirmacion\" required=\"required\" />
                 </div>
               <div>
                 <input type=\"hidden\" name=\"_csrf_token\"value=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
               </div>
             </div>
         </form>
         <div id=\"mensaje_form\" style=\"display:none\">
           <a class=\"mensaje_form\">Faltan campos por diligenciar</a>
         </div><br>
         <br><div class=\"div_btn_crear\">
            <button onclick=\"validarCampos();\" class=\"btn-crear1\" value=\"Create\">Save   <span class=\"icon-user-plus\"></span></button>
          </div>
       </div>
     </div>
     ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 88
            echo "         <div class=\"flash-notice22\">
           <a>";
            // line 89
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</a>
         </div>
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 93
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 94
        echo "    </body>


\t<script type=\"text/javascript\">

     function gId(id)
     {
         return document.getElementById(id);
     }

     var modal = document.getElementById('modal');

     // Get the button that opens the modal
     var btn = document.getElementById(\"btn_fold_grupo\");

     // Get the <span> element that closes the modal
     var span = document.getElementsByClassName(\"close\")[0];

     // When the user clicks on the button, open the modal
     btn.onclick = function()
     {
       modal.style.display = \"block\";
     }

     // When the user clicks on <span> (x), close the modal
     span.onclick = function()
     {
       modal.style.display = \"none\";
     }

     // When the user clicks anywhere outside of the modal, close it
     window.onclick = function(event)
     {
       if (event.target == modal)
       {
         modal.style.display = \"none\";
       }
     }
     function validarCampos()
     {
         var act = gId(\"password_actual\").value;
         var nue = gId(\"password_new\").value;
         var conf = gId(\"confirmacion\").value;
         if(act != \"\"){
           if(nue != \"\"){
             if(conf != \"\")
             {
                 gId(\"formulariopass\").submit();
             }
             else {
               gId(\"mensaje_form\").style.display = \"block\";
             }
           }
           else {
             {
               gId(\"mensaje_form\").style.display = \"block\";
             }
           }
         }
         else
         {
           gId(\"mensaje_form\").style.display = \"block\";
         }
     }

\t</script>

</html>
";
        
        $__internal_2ee4bc5e0dcc39a0a2fd30c05616a9e548eb92335213fef0da871017d76f0f51->leave($__internal_2ee4bc5e0dcc39a0a2fd30c05616a9e548eb92335213fef0da871017d76f0f51_prof);

        
        $__internal_f76931b8b6a7965bec9439deb0c83fe7a0ccbf9251c9fe5f98a16d3115d9e3cd->leave($__internal_f76931b8b6a7965bec9439deb0c83fe7a0ccbf9251c9fe5f98a16d3115d9e3cd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cbde53af584167e3c225af9c7f3eed4934832596257fff24b18f709c027fab12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbde53af584167e3c225af9c7f3eed4934832596257fff24b18f709c027fab12->enter($__internal_cbde53af584167e3c225af9c7f3eed4934832596257fff24b18f709c027fab12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5de966fd3dc14f1eab4b8ba1a6fada76a8300b1949740cc636c5840446684587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5de966fd3dc14f1eab4b8ba1a6fada76a8300b1949740cc636c5840446684587->enter($__internal_5de966fd3dc14f1eab4b8ba1a6fada76a8300b1949740cc636c5840446684587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ITCorporation";
        
        $__internal_5de966fd3dc14f1eab4b8ba1a6fada76a8300b1949740cc636c5840446684587->leave($__internal_5de966fd3dc14f1eab4b8ba1a6fada76a8300b1949740cc636c5840446684587_prof);

        
        $__internal_cbde53af584167e3c225af9c7f3eed4934832596257fff24b18f709c027fab12->leave($__internal_cbde53af584167e3c225af9c7f3eed4934832596257fff24b18f709c027fab12_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_16a4f158614ef272cac05584a957e05a91ad52bf76be55f726c07d448b6aba5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16a4f158614ef272cac05584a957e05a91ad52bf76be55f726c07d448b6aba5d->enter($__internal_16a4f158614ef272cac05584a957e05a91ad52bf76be55f726c07d448b6aba5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e632c72b739dd7f322829c4fe72f983e61584aa0a2a4cdcc7b7ae67d5cb0eab5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e632c72b739dd7f322829c4fe72f983e61584aa0a2a4cdcc7b7ae67d5cb0eab5->enter($__internal_e632c72b739dd7f322829c4fe72f983e61584aa0a2a4cdcc7b7ae67d5cb0eab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e632c72b739dd7f322829c4fe72f983e61584aa0a2a4cdcc7b7ae67d5cb0eab5->leave($__internal_e632c72b739dd7f322829c4fe72f983e61584aa0a2a4cdcc7b7ae67d5cb0eab5_prof);

        
        $__internal_16a4f158614ef272cac05584a957e05a91ad52bf76be55f726c07d448b6aba5d->leave($__internal_16a4f158614ef272cac05584a957e05a91ad52bf76be55f726c07d448b6aba5d_prof);

    }

    // line 92
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d3cc32b6ad4660a036ce8f3e6548757b52ed2c609c19aabbdc73d5ed7eab801 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d3cc32b6ad4660a036ce8f3e6548757b52ed2c609c19aabbdc73d5ed7eab801->enter($__internal_7d3cc32b6ad4660a036ce8f3e6548757b52ed2c609c19aabbdc73d5ed7eab801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_123a4fa638b5a21c0dd6a9358fa5d5aed1c46c632ba63b77537d5b477b81d9d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_123a4fa638b5a21c0dd6a9358fa5d5aed1c46c632ba63b77537d5b477b81d9d4->enter($__internal_123a4fa638b5a21c0dd6a9358fa5d5aed1c46c632ba63b77537d5b477b81d9d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_123a4fa638b5a21c0dd6a9358fa5d5aed1c46c632ba63b77537d5b477b81d9d4->leave($__internal_123a4fa638b5a21c0dd6a9358fa5d5aed1c46c632ba63b77537d5b477b81d9d4_prof);

        
        $__internal_7d3cc32b6ad4660a036ce8f3e6548757b52ed2c609c19aabbdc73d5ed7eab801->leave($__internal_7d3cc32b6ad4660a036ce8f3e6548757b52ed2c609c19aabbdc73d5ed7eab801_prof);

    }

    // line 93
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ac8162dc98e6ce1ee52ebf794c926a910c5f167bf253b3e3c7d41fac8cdc1b0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac8162dc98e6ce1ee52ebf794c926a910c5f167bf253b3e3c7d41fac8cdc1b0a->enter($__internal_ac8162dc98e6ce1ee52ebf794c926a910c5f167bf253b3e3c7d41fac8cdc1b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6179b962ec369c3c41d506ac171b1f9ca1df61a451db66c2333999d9700fbdf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6179b962ec369c3c41d506ac171b1f9ca1df61a451db66c2333999d9700fbdf1->enter($__internal_6179b962ec369c3c41d506ac171b1f9ca1df61a451db66c2333999d9700fbdf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6179b962ec369c3c41d506ac171b1f9ca1df61a451db66c2333999d9700fbdf1->leave($__internal_6179b962ec369c3c41d506ac171b1f9ca1df61a451db66c2333999d9700fbdf1_prof);

        
        $__internal_ac8162dc98e6ce1ee52ebf794c926a910c5f167bf253b3e3c7d41fac8cdc1b0a->leave($__internal_ac8162dc98e6ce1ee52ebf794c926a910c5f167bf253b3e3c7d41fac8cdc1b0a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  337 => 93,  320 => 92,  303 => 6,  285 => 5,  207 => 94,  204 => 93,  201 => 92,  192 => 89,  189 => 88,  185 => 87,  170 => 75,  149 => 57,  132 => 43,  127 => 40,  122 => 38,  119 => 37,  113 => 34,  109 => 33,  105 => 32,  102 => 31,  99 => 30,  97 => 29,  91 => 26,  87 => 25,  74 => 15,  70 => 14,  66 => 13,  62 => 12,  58 => 11,  54 => 10,  50 => 9,  46 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}ITCorporation{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('images/favicon.png') }}\" />
        <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\" />
        <link href=\"{{ asset('css/bootstrap.css') }}\" rel=\"stylesheet\" />
        <link href=\"{{ asset('fonts/style.css') }}\" rel=\"stylesheet\" />
        <script type=\"text/javascript\" src=\"{{ asset('js/ajax.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('js/dom.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('js/basico.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('js/upload.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('js/funciones.js') }}\"></script>
        <link href=\"https://fonts.googleapis.com/css?family=Righteous\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Yesteryear\" rel=\"stylesheet\">
        <script type=\"text/javascript\" src=\"http://code.jquery.com/jquery-1.11.0.min.js\"></script>
    </head>
    <header>
        <div class=\"wrapper\">

            <div class=\"btns\">
                <div class=\"user_btn\">
                <a class=\"bt\" href=\"{{ path('login') }}\">Exit   <span class=\"icon-exit\"></span></a>
                <a class=\"bt\" id=\"btn_fold_grupo\"><span class=\"icon-user\"> </span>{{ app.session.get(\"nombre\") }}</a>
                <div>

                {% set j = app.session.get(\"permisos\")|split(';') %}
                {% if j[0] == \"Administrador\" %}

                    <a class=\"bt\" href=\"{{ path('categoria_index') }}\"><span class=\"icon-stack\"> </span>CATEGORIES</a>
                    <a class=\"bt\" href=\"{{ path('viwCat') }}\"><span class=\"icon-list2\"> </span>LISTAPP</a>
                    <a class=\"bt\" href=\"{{ path('user_index') }}\"><span class=\"icon-users\"> </span>USERS</a>

                {% else %}

                    <a class=\"bt\" href=\"{{ path('viwCat') }}\"><span class=\"icon-list2\"> </span>LISTAPP</a>
                {% endif %}



                <a class=\"tit-app1\"><img class =\"logo-it\" src=\"{{ asset('images/logo-white.png') }}\"/></a>
          </div>

        </div>
    </header>

    <body>

     <div id=\"modal\" class=\"modal\">

       <!-- Modal content -->
       <div class=\"modal-content\">
         <span class=\"close\">x</span>
         <!-- Formulari -->
         <form action=\"{{ path('data_pass', { 'id': app.session.get(\"id\")  }) }}\" method=post name=\"formulariopass\" id=\"formulariopass\" class=\"form_pass\">

             <div class=\"contenido\">
                  <label class=\"tit-pass\" style=\"text-align:center\">CHANGE PASSWORD</label>
                 <div  class=\"div_password\">
                     <label for=\"password\" class=\"lab_user\">Password Acutal:</label>
                     <input class=\"txt_box\" type=\"password\" id=\"password_actual\" value=\"\" name=\"password_actual\" required=\"required\" />
                 </div>
                 <div  class=\"div_passnew\">
                     <label for=\"password\" class=\"lab_user\">Password:</label>
                     <input class=\"txt_box\" type=\"password\" id=\"password_new\" value=\"\" name=\"password_new\" required=\"required\" />
                 </div>
                 <div class=\"div_confirmar\">
                     <label for=\"confirmacion\" class=\"lab_user1\">Confirm <br>
                       Password:</label><br>
                     <input class=\"txt_box\" type=\"password\" id=\"confirmacion\" value=\"\" name=\"confirmacion\" required=\"required\" />
                 </div>
               <div>
                 <input type=\"hidden\" name=\"_csrf_token\"value=\"{{ csrf_token('authenticate') }}\">
               </div>
             </div>
         </form>
         <div id=\"mensaje_form\" style=\"display:none\">
           <a class=\"mensaje_form\">Faltan campos por diligenciar</a>
         </div><br>
         <br><div class=\"div_btn_crear\">
            <button onclick=\"validarCampos();\" class=\"btn-crear1\" value=\"Create\">Save   <span class=\"icon-user-plus\"></span></button>
          </div>
       </div>
     </div>
     {% for flash_message in app.session.flashBag.get('notice') %}
         <div class=\"flash-notice22\">
           <a>{{ flash_message }}</a>
         </div>
     {% endfor %}
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>


\t<script type=\"text/javascript\">

     function gId(id)
     {
         return document.getElementById(id);
     }

     var modal = document.getElementById('modal');

     // Get the button that opens the modal
     var btn = document.getElementById(\"btn_fold_grupo\");

     // Get the <span> element that closes the modal
     var span = document.getElementsByClassName(\"close\")[0];

     // When the user clicks on the button, open the modal
     btn.onclick = function()
     {
       modal.style.display = \"block\";
     }

     // When the user clicks on <span> (x), close the modal
     span.onclick = function()
     {
       modal.style.display = \"none\";
     }

     // When the user clicks anywhere outside of the modal, close it
     window.onclick = function(event)
     {
       if (event.target == modal)
       {
         modal.style.display = \"none\";
       }
     }
     function validarCampos()
     {
         var act = gId(\"password_actual\").value;
         var nue = gId(\"password_new\").value;
         var conf = gId(\"confirmacion\").value;
         if(act != \"\"){
           if(nue != \"\"){
             if(conf != \"\")
             {
                 gId(\"formulariopass\").submit();
             }
             else {
               gId(\"mensaje_form\").style.display = \"block\";
             }
           }
           else {
             {
               gId(\"mensaje_form\").style.display = \"block\";
             }
           }
         }
         else
         {
           gId(\"mensaje_form\").style.display = \"block\";
         }
     }

\t</script>

</html>
", "base.html.twig", "/home/maria/listapp/app/Resources/views/base.html.twig");
    }
}
