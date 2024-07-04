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

/* show/readOneCity.html.twig */
class __TwigTemplate_6c9481d541c86b6fbaca248d94a0f17b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "show/readOneCity.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "show/readOneCity.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "show/readOneCity.html.twig", 1);
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

        echo "Voyagez naturellement";
        
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
    <div style=\"background-image: linear-gradient(rgba(4, 56, 19, 0.8), rgba(0, 0, 0, 0.4)), url('";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/destinations/villes/" . twig_get_attribute($this->env, $this->source, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 6, $this->source); })()), "image", [], "any", false, false, false, 6))), "html", null, true);
        echo "')\" class=\"mainpagecity d-flex justify-content-center\">
        <h1 class=\"h1-main\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7), "html", null, true);
        echo "</h1>
        
    </div>

<div class=\"container mb-3\">
  <div class=\"col-md-12 city-title d-flex justify-content-center\">";
        // line 12
        echo twig_nl2br(twig_get_attribute($this->env, $this->source, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 12, $this->source); })()), "description", [], "any", false, false, false, 12));
        echo "</a></div>
</div>
<div class=\"col-md-12 mt-5 d-flex justify-content-center\"><h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14), "html", null, true);
        echo " : à decouvrir </h2></div>
<div class=\"container d-flex justify-content-center\">
  <div class=\"row\">
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["places"]) || array_key_exists("places", $context) ? $context["places"] : (function () { throw new RuntimeError('Variable "places" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["place"]) {
            // line 18
            echo "      <div class=\"col-md-4 mt-5\">
        <div class=\"col-md-12 d-flex justify-content-center mb-3\"><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showoneplace", ["id" => twig_get_attribute($this->env, $this->source, $context["place"], "id", [], "any", false, false, false, 19)]), "html", null, true);
            echo "\"><img class=\"img-fluid img-blocks\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/destinations/places/" . twig_get_attribute($this->env, $this->source, $context["place"], "image", [], "any", false, false, false, 19))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["place"], "name", [], "any", false, false, false, 19), "html", null, true);
            echo "\"></a></div>
        <div class=\"col-md-12 guide-title d-flex justify-content-center\"><a class=\"guide-title\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showoneplace", ["id" => twig_get_attribute($this->env, $this->source, $context["place"], "id", [], "any", false, false, false, 20)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["place"], "name", [], "any", false, false, false, 20), "html", null, true);
            echo "</a></div>
        <div class=\"col-md-12 d-flex justify-content-center\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["place"], "category", [], "any", false, false, false, 21), "html", null, true);
            echo "</div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['place'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "  </div>
</div>
<h4 class=\"d-flex justify-content-center mt-5 mb-5\"><a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showonecountry", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 26, $this->source); })()), "country", [], "any", false, false, false, 26), "id", [], "any", false, false, false, 26)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 26, $this->source); })()), "country", [], "any", false, false, false, 26), "html", null, true);
        echo "</a>&nbsp;: d'autres villes à visiter </h4></div>
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
        return "show/readOneCity.html.twig";
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
        return array (  148 => 26,  144 => 24,  135 => 21,  129 => 20,  121 => 19,  118 => 18,  114 => 17,  108 => 14,  103 => 12,  95 => 7,  91 => 6,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Voyagez naturellement{% endblock %}

{% block body %}

    <div style=\"background-image: linear-gradient(rgba(4, 56, 19, 0.8), rgba(0, 0, 0, 0.4)), url('{{asset('images/destinations/villes/' ~ city.image)}}')\" class=\"mainpagecity d-flex justify-content-center\">
        <h1 class=\"h1-main\">{{city.name}}</h1>
        
    </div>

<div class=\"container mb-3\">
  <div class=\"col-md-12 city-title d-flex justify-content-center\">{{city.description|raw|nl2br}}</a></div>
</div>
<div class=\"col-md-12 mt-5 d-flex justify-content-center\"><h2>{{city.name}} : à decouvrir </h2></div>
<div class=\"container d-flex justify-content-center\">
  <div class=\"row\">
    {% for place in places %}
      <div class=\"col-md-4 mt-5\">
        <div class=\"col-md-12 d-flex justify-content-center mb-3\"><a href=\"{{ path('showoneplace', {'id' : place.id}) }}\"><img class=\"img-fluid img-blocks\" src=\"{{ asset('images/destinations/places/'~place.image) }}\" alt=\"{{ place.name }}\"></a></div>
        <div class=\"col-md-12 guide-title d-flex justify-content-center\"><a class=\"guide-title\" href=\"{{ path('showoneplace', {'id' : place.id}) }}\">{{ place.name }}</a></div>
        <div class=\"col-md-12 d-flex justify-content-center\">{{ place.category }}</div>
      </div>
    {% endfor %}
  </div>
</div>
<h4 class=\"d-flex justify-content-center mt-5 mb-5\"><a href=\"{{ path('showonecountry', {'id' : city.country.id}) }}\">{{city.country}}</a>&nbsp;: d'autres villes à visiter </h4></div>
</div>
{% endblock %}", "show/readOneCity.html.twig", "C:\\symfony\\travel_project\\templates\\show\\readOneCity.html.twig");
    }
}
