<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3fb27f5e9ef4a84442211cf7338302146adb256ef8a175298ef4aacec4ff8c8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f410198c8e3e58b9d5dbd99938d01e7f2bf5bb8f6a606cf647121eafa03f323 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f410198c8e3e58b9d5dbd99938d01e7f2bf5bb8f6a606cf647121eafa03f323->enter($__internal_5f410198c8e3e58b9d5dbd99938d01e7f2bf5bb8f6a606cf647121eafa03f323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_5bc053582082f05f199df017f2386fa785ae0bed94e3c1596eabeaa1e93fac88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bc053582082f05f199df017f2386fa785ae0bed94e3c1596eabeaa1e93fac88->enter($__internal_5bc053582082f05f199df017f2386fa785ae0bed94e3c1596eabeaa1e93fac88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f410198c8e3e58b9d5dbd99938d01e7f2bf5bb8f6a606cf647121eafa03f323->leave($__internal_5f410198c8e3e58b9d5dbd99938d01e7f2bf5bb8f6a606cf647121eafa03f323_prof);

        
        $__internal_5bc053582082f05f199df017f2386fa785ae0bed94e3c1596eabeaa1e93fac88->leave($__internal_5bc053582082f05f199df017f2386fa785ae0bed94e3c1596eabeaa1e93fac88_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dfbfd8cb711d67c4e558814d66ce36a9e1f009d4f8dbf32711a92b87a5851e83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfbfd8cb711d67c4e558814d66ce36a9e1f009d4f8dbf32711a92b87a5851e83->enter($__internal_dfbfd8cb711d67c4e558814d66ce36a9e1f009d4f8dbf32711a92b87a5851e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f30b02832218ad507b4a62b92d3be8a188a23ebad5716ff6ad9184cc0372bab1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f30b02832218ad507b4a62b92d3be8a188a23ebad5716ff6ad9184cc0372bab1->enter($__internal_f30b02832218ad507b4a62b92d3be8a188a23ebad5716ff6ad9184cc0372bab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_f30b02832218ad507b4a62b92d3be8a188a23ebad5716ff6ad9184cc0372bab1->leave($__internal_f30b02832218ad507b4a62b92d3be8a188a23ebad5716ff6ad9184cc0372bab1_prof);

        
        $__internal_dfbfd8cb711d67c4e558814d66ce36a9e1f009d4f8dbf32711a92b87a5851e83->leave($__internal_dfbfd8cb711d67c4e558814d66ce36a9e1f009d4f8dbf32711a92b87a5851e83_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_aaf30209b9ed119580e8ef33c7d21d4ef6a9cda68b1dde0ca8af42b057cbc6fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaf30209b9ed119580e8ef33c7d21d4ef6a9cda68b1dde0ca8af42b057cbc6fd->enter($__internal_aaf30209b9ed119580e8ef33c7d21d4ef6a9cda68b1dde0ca8af42b057cbc6fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_da82301e1033c0991ed27168eae7fb3f8bd52d5c24d1b3b44057e85ce7de07c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da82301e1033c0991ed27168eae7fb3f8bd52d5c24d1b3b44057e85ce7de07c4->enter($__internal_da82301e1033c0991ed27168eae7fb3f8bd52d5c24d1b3b44057e85ce7de07c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_da82301e1033c0991ed27168eae7fb3f8bd52d5c24d1b3b44057e85ce7de07c4->leave($__internal_da82301e1033c0991ed27168eae7fb3f8bd52d5c24d1b3b44057e85ce7de07c4_prof);

        
        $__internal_aaf30209b9ed119580e8ef33c7d21d4ef6a9cda68b1dde0ca8af42b057cbc6fd->leave($__internal_aaf30209b9ed119580e8ef33c7d21d4ef6a9cda68b1dde0ca8af42b057cbc6fd_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b6dd24716386178cf9c6964766f825a1e5adf994f9fb467c30ef2acdc8c5454 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b6dd24716386178cf9c6964766f825a1e5adf994f9fb467c30ef2acdc8c5454->enter($__internal_7b6dd24716386178cf9c6964766f825a1e5adf994f9fb467c30ef2acdc8c5454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1ae15ec03422cf397e7c3a0a5230e8388182290ec45aa3cc3161dcb073e554d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ae15ec03422cf397e7c3a0a5230e8388182290ec45aa3cc3161dcb073e554d2->enter($__internal_1ae15ec03422cf397e7c3a0a5230e8388182290ec45aa3cc3161dcb073e554d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_1ae15ec03422cf397e7c3a0a5230e8388182290ec45aa3cc3161dcb073e554d2->leave($__internal_1ae15ec03422cf397e7c3a0a5230e8388182290ec45aa3cc3161dcb073e554d2_prof);

        
        $__internal_7b6dd24716386178cf9c6964766f825a1e5adf994f9fb467c30ef2acdc8c5454->leave($__internal_7b6dd24716386178cf9c6964766f825a1e5adf994f9fb467c30ef2acdc8c5454_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/maria/listapp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
