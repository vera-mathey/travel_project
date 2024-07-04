<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* post/sansAvion.html.twig */
class __TwigTemplate_badae1530eac80d3e795469a1dfdbc9d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/sansAvion.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/sansAvion.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "post/sansAvion.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Où partir sans avion ?";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<div class=\"col-md-12 mb-2 d-flex justify-content-center mainsansavion\"><h1 class=\"h1-main mb-5\">Où partir sans avion ?</h1></div>
<div class=\"container mt-5\">
    <div class=\"col-md-12\">
        <p>Envie de voyager sans prendre l'avion ? Découvrez les plus belles destinations accessibles en bateau, en train, voiture ou en bus et des idées de voyage écoresponsables en France, 
            en Europe et même au bout du monde pour réduire votre impact écologique. De quelques jours ou quelques semaines, en famille ou en amoureux, en hiver ou en été... il y a en pour 
            tous les goûts et les budgets !
        </p>
    </div>
    <div class=\"row mt-5\">
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cityList"]) || array_key_exists("cityList", $context) ? $context["cityList"] : (function () { throw new RuntimeError('Variable "cityList" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
            // line 16
            echo "         <div class=\"col-md-4\">
            <div class=\"col-md-12 d-flex justify-content-center\"><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showone", ["id" => twig_get_attribute($this->env, $this->source, $context["city"], "id", [], "any", false, false, false, 17)]), "html", null, true);
            echo "\"><img class=\"img-fluid img-blocks\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/destinations/villes/" . twig_get_attribute($this->env, $this->source, $context["city"], "image", [], "any", false, false, false, 17))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "name", [], "any", false, false, false, 17), "html", null, true);
            echo "\"></a></div>
            <div class=\"col-md-12 city-title d-flex justify-content-center\"><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showone", ["id" => twig_get_attribute($this->env, $this->source, $context["city"], "id", [], "any", false, false, false, 18)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "name", [], "any", false, false, false, 18), "html", null, true);
            echo "</a></div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "post/sansAvion.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  126 => 21,  115 => 18,  107 => 17,  104 => 16,  100 => 15,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Où partir sans avion ?{% endblock %}

{% block body %}

<div class=\"col-md-12 mb-2 d-flex justify-content-center mainsansavion\"><h1 class=\"h1-main mb-5\">Où partir sans avion ?</h1></div>
<div class=\"container mt-5\">
    <div class=\"col-md-12\">
        <p>Envie de voyager sans prendre l'avion ? Découvrez les plus belles destinations accessibles en bateau, en train, voiture ou en bus et des idées de voyage écoresponsables en France, 
            en Europe et même au bout du monde pour réduire votre impact écologique. De quelques jours ou quelques semaines, en famille ou en amoureux, en hiver ou en été... il y a en pour 
            tous les goûts et les budgets !
        </p>
    </div>
    <div class=\"row mt-5\">
    {% for city in cityList %}
         <div class=\"col-md-4\">
            <div class=\"col-md-12 d-flex justify-content-center\"><a href=\"{{ path('showone', {'id' : city.id}) }}\"><img class=\"img-fluid img-blocks\" src=\"{{ asset('images/destinations/villes/'~city.image) }}\" alt=\"{{ city.name }}\"></a></div>
            <div class=\"col-md-12 city-title d-flex justify-content-center\"><a href=\"{{ path('showone', {'id' : city.id}) }}\">{{city.name}}</a></div>
        </div>
    {% endfor %}
    </div>
</div>
{% endblock %}", "post/sansAvion.html.twig", "C:\\symfony\\travel_project\\templates\\post\\sansAvion.html.twig");
    }
}
