<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_ab1f65048f55046fe345ff0646d00f65f0f5672874e81fd7fd877f21dfdf8431 extends Twig_Template
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
        $__internal_9acc4521a5e29bd522d365fb130bc72592a88b621a18f9b65c3c884b8b1ced98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9acc4521a5e29bd522d365fb130bc72592a88b621a18f9b65c3c884b8b1ced98->enter($__internal_9acc4521a5e29bd522d365fb130bc72592a88b621a18f9b65c3c884b8b1ced98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_ccb4c26c14dab01dd9f25d2fcdad28809eef0cb034492878a68caabf91c91b19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccb4c26c14dab01dd9f25d2fcdad28809eef0cb034492878a68caabf91c91b19->enter($__internal_ccb4c26c14dab01dd9f25d2fcdad28809eef0cb034492878a68caabf91c91b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_9acc4521a5e29bd522d365fb130bc72592a88b621a18f9b65c3c884b8b1ced98->leave($__internal_9acc4521a5e29bd522d365fb130bc72592a88b621a18f9b65c3c884b8b1ced98_prof);

        
        $__internal_ccb4c26c14dab01dd9f25d2fcdad28809eef0cb034492878a68caabf91c91b19->leave($__internal_ccb4c26c14dab01dd9f25d2fcdad28809eef0cb034492878a68caabf91c91b19_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\htdocs\\stagemarkt\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
