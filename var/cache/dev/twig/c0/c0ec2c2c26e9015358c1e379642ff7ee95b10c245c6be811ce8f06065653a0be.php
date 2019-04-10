<?php

/* listapp/new.html.twig */
class __TwigTemplate_803feecb6c4b540fa600a8a9fb689b28089618a1bc18deb8487e46bb8e5c99c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "listapp/new.html.twig", 1);
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
        $__internal_ad1e7283c40d430ddc8d570c4d2dac731656692fcbe2474187461066b1b015af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad1e7283c40d430ddc8d570c4d2dac731656692fcbe2474187461066b1b015af->enter($__internal_ad1e7283c40d430ddc8d570c4d2dac731656692fcbe2474187461066b1b015af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "listapp/new.html.twig"));

        $__internal_68fe92efff9b0d50838deafc0e292b25875ee85a46c305bf44ec05c9ca60b164 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68fe92efff9b0d50838deafc0e292b25875ee85a46c305bf44ec05c9ca60b164->enter($__internal_68fe92efff9b0d50838deafc0e292b25875ee85a46c305bf44ec05c9ca60b164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "listapp/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad1e7283c40d430ddc8d570c4d2dac731656692fcbe2474187461066b1b015af->leave($__internal_ad1e7283c40d430ddc8d570c4d2dac731656692fcbe2474187461066b1b015af_prof);

        
        $__internal_68fe92efff9b0d50838deafc0e292b25875ee85a46c305bf44ec05c9ca60b164->leave($__internal_68fe92efff9b0d50838deafc0e292b25875ee85a46c305bf44ec05c9ca60b164_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ef38a9ce771170dd1778a77f019bafe7ac1c7e4a5fbe169b3d4be3c4704b82a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ef38a9ce771170dd1778a77f019bafe7ac1c7e4a5fbe169b3d4be3c4704b82a->enter($__internal_5ef38a9ce771170dd1778a77f019bafe7ac1c7e4a5fbe169b3d4be3c4704b82a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7d145e254b0a9703a512bb8aec25da2627f346431eb49d61b45f0f047a0a4f17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d145e254b0a9703a512bb8aec25da2627f346431eb49d61b45f0f047a0a4f17->enter($__internal_7d145e254b0a9703a512bb8aec25da2627f346431eb49d61b45f0f047a0a4f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "New App";
        
        $__internal_7d145e254b0a9703a512bb8aec25da2627f346431eb49d61b45f0f047a0a4f17->leave($__internal_7d145e254b0a9703a512bb8aec25da2627f346431eb49d61b45f0f047a0a4f17_prof);

        
        $__internal_5ef38a9ce771170dd1778a77f019bafe7ac1c7e4a5fbe169b3d4be3c4704b82a->leave($__internal_5ef38a9ce771170dd1778a77f019bafe7ac1c7e4a5fbe169b3d4be3c4704b82a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5eb8fd0dd817142a79c0990ea5193b07663ec819dfa07fadc7cd782622f287ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5eb8fd0dd817142a79c0990ea5193b07663ec819dfa07fadc7cd782622f287ce->enter($__internal_5eb8fd0dd817142a79c0990ea5193b07663ec819dfa07fadc7cd782622f287ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0211a848e0ea8203fa4509891f3f577ec5920aba7f05b6f95d9b74a018a6c19a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0211a848e0ea8203fa4509891f3f577ec5920aba7f05b6f95d9b74a018a6c19a->enter($__internal_0211a848e0ea8203fa4509891f3f577ec5920aba7f05b6f95d9b74a018a6c19a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $context["j"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "permisos"), "method");
        // line 5
        echo "    <input type=\"hidden\" id=\"tip_user\" name=\"tip_user\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")), "html", null, true);
        echo "\">
    <h1 class=\"new-app-tit\">NEW APP</h1>
      <div id=\"carga\" style=\"display: none\">
        <div id=\"cascara\" align=\"left\">
          <div id=\"barra\" align=\"left\"></div>
        </div>
        <a id=\"mensajeCascara\">Cargando... </a>
      </div>
      <div class=\"form-app\">
      <form name=\"appbundle_user\" id=\"form-listapp\"method=\"post\" action=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listapp_create");
        echo "\">
        <div id=\"appbundle_user\">
          <div>
              <label for=\"text-nombre\" class=\"required\">Name:</label>
              <input class=\"txt_box\" type=\"text\" id=\"text-nombre\" name=\"text-nombre\" required=\"required\" />
              <label for=\"text-url\" class=\"required\">Url:</label>
              <input class=\"txt_box\" type=\"text\" id=\"text-url\" name=\"text-url\" required=\"required\" /><br>
              <label for=\"text-data\" class=\"required\">Data:</label><br><br><br>
              <textarea class=\"edit-text-data\" type=\"text\" id=\"text-data\" name=\"text-data\" required=\"required\" >";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listapp"]) ? $context["listapp"] : $this->getContext($context, "listapp")), "data", array()), "html", null, true);
        echo "</textarea>
            </div>
          <div>
              <a class=\"required\">Select Category: </a><br>
          </div>
            <div class=\"per-tab\">
              <div class=\"div_permisos\">
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) ? $context["categorias"] : $this->getContext($context, "categorias")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorium"]) {
            // line 30
            echo "                <a class=\"opt_cat\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorium"], "nombre", array()), "html", null, true);
            echo "</a><input id=\"int_box\" type=\"radio\" name=\"category\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorium"], "id", array()), "html", null, true);
            echo "\"><br><br>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorium'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "              </div>

            </div><br><br>
          <input type=\"hidden\" id=\"name_file\" name=\"name_file\"/>
          <input type=\"hidden\" id=\"file_extension\" name=\"file_extension\"/>
          <textarea id=\"text-categoria\" name=\"categoria\" style=\" display:none;\" maxlength=\"65535\"></textarea>
          <input type=\"hidden\" id=\"_csrf_token\" name=\"_csrf_token\"value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
          </div>

    </form>


    <input class=\"arch_adjunto\" type=\"file\" name=\"archivo_adjunto\" id=\"archivo_adjunto\" onchange=\"cargar_archivo();\"/>
    <input type=\"hidden\" id=\"arch\" name=\"arch\"/><br>
    <input type=\"hidden\" id=\"adj\" name=\"adju\" value=\"\"/><br>
    <div id=\"mensaje_formapp\" style=\"display:none\">
      <a class=\"mensaje_form\">Faltan campos por diligenciar</a>
    </div><br>
    <button onclick=\"validar();\" class=\"btn-crear\" >Save  <span class=\"icon-clipboard\"> </span></button>

  </div>
  <script>
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
        // line 68
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
        
        $__internal_0211a848e0ea8203fa4509891f3f577ec5920aba7f05b6f95d9b74a018a6c19a->leave($__internal_0211a848e0ea8203fa4509891f3f577ec5920aba7f05b6f95d9b74a018a6c19a_prof);

        
        $__internal_5eb8fd0dd817142a79c0990ea5193b07663ec819dfa07fadc7cd782622f287ce->leave($__internal_5eb8fd0dd817142a79c0990ea5193b07663ec819dfa07fadc7cd782622f287ce_prof);

    }

    public function getTemplateName()
    {
        return "listapp/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 68,  128 => 38,  120 => 32,  109 => 30,  105 => 29,  95 => 22,  84 => 14,  71 => 5,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
{% block title %}New App{% endblock %}
{% block body %}
    {% set j = app.session.get(\"permisos\") %}
    <input type=\"hidden\" id=\"tip_user\" name=\"tip_user\" value=\"{{ j }}\">
    <h1 class=\"new-app-tit\">NEW APP</h1>
      <div id=\"carga\" style=\"display: none\">
        <div id=\"cascara\" align=\"left\">
          <div id=\"barra\" align=\"left\"></div>
        </div>
        <a id=\"mensajeCascara\">Cargando... </a>
      </div>
      <div class=\"form-app\">
      <form name=\"appbundle_user\" id=\"form-listapp\"method=\"post\" action=\"{{ path('listapp_create')}}\">
        <div id=\"appbundle_user\">
          <div>
              <label for=\"text-nombre\" class=\"required\">Name:</label>
              <input class=\"txt_box\" type=\"text\" id=\"text-nombre\" name=\"text-nombre\" required=\"required\" />
              <label for=\"text-url\" class=\"required\">Url:</label>
              <input class=\"txt_box\" type=\"text\" id=\"text-url\" name=\"text-url\" required=\"required\" /><br>
              <label for=\"text-data\" class=\"required\">Data:</label><br><br><br>
              <textarea class=\"edit-text-data\" type=\"text\" id=\"text-data\" name=\"text-data\" required=\"required\" >{{ listapp.data }}</textarea>
            </div>
          <div>
              <a class=\"required\">Select Category: </a><br>
          </div>
            <div class=\"per-tab\">
              <div class=\"div_permisos\">
                {% for categorium in categorias %}
                <a class=\"opt_cat\">{{ categorium.nombre }}</a><input id=\"int_box\" type=\"radio\" name=\"category\" value=\"{{ categorium.id }}\"><br><br>
                {% endfor %}
              </div>

            </div><br><br>
          <input type=\"hidden\" id=\"name_file\" name=\"name_file\"/>
          <input type=\"hidden\" id=\"file_extension\" name=\"file_extension\"/>
          <textarea id=\"text-categoria\" name=\"categoria\" style=\" display:none;\" maxlength=\"65535\"></textarea>
          <input type=\"hidden\" id=\"_csrf_token\" name=\"_csrf_token\"value=\"{{ csrf_token('authenticate') }}\">
          </div>

    </form>


    <input class=\"arch_adjunto\" type=\"file\" name=\"archivo_adjunto\" id=\"archivo_adjunto\" onchange=\"cargar_archivo();\"/>
    <input type=\"hidden\" id=\"arch\" name=\"arch\"/><br>
    <input type=\"hidden\" id=\"adj\" name=\"adju\" value=\"\"/><br>
    <div id=\"mensaje_formapp\" style=\"display:none\">
      <a class=\"mensaje_form\">Faltan campos por diligenciar</a>
    </div><br>
    <button onclick=\"validar();\" class=\"btn-crear\" >Save  <span class=\"icon-clipboard\"> </span></button>

  </div>
  <script>
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
", "listapp/new.html.twig", "/home/maria/listapp/app/Resources/views/listapp/new.html.twig");
    }
}
