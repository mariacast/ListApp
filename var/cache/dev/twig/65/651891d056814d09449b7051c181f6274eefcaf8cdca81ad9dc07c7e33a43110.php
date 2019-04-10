<?php

/* default/login.html.twig */
class __TwigTemplate_2ee9cd34c502b342d3f7dcff408bab83b5ee2d028627efb94c530b2dc8ae34b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23743edf378bc1f6ae68f9063218e69055352efe091d7d70ff4edf8114fdd475 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23743edf378bc1f6ae68f9063218e69055352efe091d7d70ff4edf8114fdd475->enter($__internal_23743edf378bc1f6ae68f9063218e69055352efe091d7d70ff4edf8114fdd475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

        $__internal_abdf590e9c713215587abd841298e772a24dbff4b8294ab53f6cdcd672cbfdac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abdf590e9c713215587abd841298e772a24dbff4b8294ab53f6cdcd672cbfdac->enter($__internal_abdf590e9c713215587abd841298e772a24dbff4b8294ab53f6cdcd672cbfdac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

        // line 1
        echo "<head>
    <meta charset=\"UTF-8\" />
    <title>Login</title>
    ";
        // line 4
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 5
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/favicon.png"), "html", null, true);
        echo "\" />
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fonts/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"https://fonts.googleapis.com/css?family=Righteous\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Yesteryear\" rel=\"stylesheet\">
</head>
<div class=\"menu-vertical\">
    <div class=\"logo-centro\">
      <a><img class =\"logo-it-log\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo-white.png"), "html", null, true);
        echo "\"/></a>
    </div>
</div>
<body>
<a class=\"tit-app\">Titán</a><br>
<h1 class=\"titulo-sesion\">INICIAR SESION</h1>

<div class=\"form-edit-login\">
  ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 23
            echo "    <div class=\"flash-notice-login\">
      <a>";
            // line 24
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</a>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "<form  id=\"form_login\" name=\"form_log\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">

    <label class=\"required1\" for=\"username\">Username:</label>
    <input class=\"txt_box_log\" type=\"text\" id=\"username_id\" name=\"username\" placeholder=\"Username\" />

    <label class=\"required1\" for=\"password\">Password:</label>
    <input class=\"txt_box_log\" type=\"password\" id=\"password_id\" placeholder=\"Password\"name=\"password\"/>

    <input type=\"hidden\" name=\"_csrf_token\"value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

</form>
<button class=\"btn-login\" onclick=\"iniciar_session();\">Login   <span class=\"icon-key\"></span></button>

</body>
<script type=\"text/javascript\">
    function gId(id)
    {
        return document.getElementById(id);
    }
    function iniciar_session()
    {
      gId(\"form_login\").submit();
    }
</script>
";
        
        $__internal_23743edf378bc1f6ae68f9063218e69055352efe091d7d70ff4edf8114fdd475->leave($__internal_23743edf378bc1f6ae68f9063218e69055352efe091d7d70ff4edf8114fdd475_prof);

        
        $__internal_abdf590e9c713215587abd841298e772a24dbff4b8294ab53f6cdcd672cbfdac->leave($__internal_abdf590e9c713215587abd841298e772a24dbff4b8294ab53f6cdcd672cbfdac_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_91bab71b10934877d7aa160547378a5087f7102ef32d61785985ea9f04d8e87e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91bab71b10934877d7aa160547378a5087f7102ef32d61785985ea9f04d8e87e->enter($__internal_91bab71b10934877d7aa160547378a5087f7102ef32d61785985ea9f04d8e87e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a35294e1a04e5003a8940bcd225f853dfa08c71afe48baa2e93cb76b4e7b5316 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a35294e1a04e5003a8940bcd225f853dfa08c71afe48baa2e93cb76b4e7b5316->enter($__internal_a35294e1a04e5003a8940bcd225f853dfa08c71afe48baa2e93cb76b4e7b5316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a35294e1a04e5003a8940bcd225f853dfa08c71afe48baa2e93cb76b4e7b5316->leave($__internal_a35294e1a04e5003a8940bcd225f853dfa08c71afe48baa2e93cb76b4e7b5316_prof);

        
        $__internal_91bab71b10934877d7aa160547378a5087f7102ef32d61785985ea9f04d8e87e->leave($__internal_91bab71b10934877d7aa160547378a5087f7102ef32d61785985ea9f04d8e87e_prof);

    }

    public function getTemplateName()
    {
        return "default/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 4,  94 => 35,  82 => 27,  73 => 24,  70 => 23,  66 => 22,  55 => 14,  46 => 8,  42 => 7,  38 => 6,  33 => 5,  31 => 4,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<head>
    <meta charset=\"UTF-8\" />
    <title>Login</title>
    {% block stylesheets %}{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('images/favicon.png') }}\" />
    <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('css/bootstrap.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('fonts/style.css') }}\" rel=\"stylesheet\" />
    <link href=\"https://fonts.googleapis.com/css?family=Righteous\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Yesteryear\" rel=\"stylesheet\">
</head>
<div class=\"menu-vertical\">
    <div class=\"logo-centro\">
      <a><img class =\"logo-it-log\" src=\"{{ asset('images/logo-white.png') }}\"/></a>
    </div>
</div>
<body>
<a class=\"tit-app\">Titán</a><br>
<h1 class=\"titulo-sesion\">INICIAR SESION</h1>

<div class=\"form-edit-login\">
  {% for flash_message in app.session.flashBag.get('notice') %}
    <div class=\"flash-notice-login\">
      <a>{{ flash_message }}</a>
    </div>
  {% endfor %}
<form  id=\"form_login\" name=\"form_log\" action=\"{{ path('login') }}\" method=\"post\">

    <label class=\"required1\" for=\"username\">Username:</label>
    <input class=\"txt_box_log\" type=\"text\" id=\"username_id\" name=\"username\" placeholder=\"Username\" />

    <label class=\"required1\" for=\"password\">Password:</label>
    <input class=\"txt_box_log\" type=\"password\" id=\"password_id\" placeholder=\"Password\"name=\"password\"/>

    <input type=\"hidden\" name=\"_csrf_token\"value=\"{{ csrf_token('authenticate') }}\">

</form>
<button class=\"btn-login\" onclick=\"iniciar_session();\">Login   <span class=\"icon-key\"></span></button>

</body>
<script type=\"text/javascript\">
    function gId(id)
    {
        return document.getElementById(id);
    }
    function iniciar_session()
    {
      gId(\"form_login\").submit();
    }
</script>
", "default/login.html.twig", "/home/maria/listapp/app/Resources/views/default/login.html.twig");
    }
}
