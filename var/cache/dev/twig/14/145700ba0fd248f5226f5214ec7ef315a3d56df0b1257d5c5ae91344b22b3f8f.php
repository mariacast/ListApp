<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_84e82b5be0ec632505aa6a7578682d5e838af20b51f1958494f4daed74d61192 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_86251e6c36af712d5936e73647980a8d90865bc6c6bb5dfe3e6c683c6a25d9b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86251e6c36af712d5936e73647980a8d90865bc6c6bb5dfe3e6c683c6a25d9b3->enter($__internal_86251e6c36af712d5936e73647980a8d90865bc6c6bb5dfe3e6c683c6a25d9b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_2d66e901140df4ae98d3f45adda211705383972f7ae25b378fc8c33213a88687 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d66e901140df4ae98d3f45adda211705383972f7ae25b378fc8c33213a88687->enter($__internal_2d66e901140df4ae98d3f45adda211705383972f7ae25b378fc8c33213a88687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_86251e6c36af712d5936e73647980a8d90865bc6c6bb5dfe3e6c683c6a25d9b3->leave($__internal_86251e6c36af712d5936e73647980a8d90865bc6c6bb5dfe3e6c683c6a25d9b3_prof);

        
        $__internal_2d66e901140df4ae98d3f45adda211705383972f7ae25b378fc8c33213a88687->leave($__internal_2d66e901140df4ae98d3f45adda211705383972f7ae25b378fc8c33213a88687_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/home/maria/listapp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
