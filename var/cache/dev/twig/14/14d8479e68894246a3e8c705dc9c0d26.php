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

/* show/readOnePost.html.twig */
class __TwigTemplate_93af7a800fc443610aedbfa9b36e5946 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "show/readOnePost.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "show/readOnePost.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "show/readOnePost.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/posts/" . twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 6, $this->source); })()), "image", [], "any", false, false, false, 6))), "html", null, true);
        echo "')\" class=\"mainpagecity d-flex justify-content-center\">
        <div class=\"container d-flex justify-content-center\">
            <h1 class=\"h1-main\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 8, $this->source); })()), "title", [], "any", false, false, false, 8), "html", null, true);
        echo "</h1>
        </div>
    </div>

<div class=\"container post\">
   ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 14
            echo "    <div class=\"col-md-12 mb-2 d-flex justify-content-center\"><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showonecountry", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "post", [], "any", false, false, false, 14), "id", [], "any", false, false, false, 14)]), "html", null, true);
            echo "\"><p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "post", [], "any", false, false, false, 14), "name", [], "any", false, false, false, 14), "html", null, true);
            echo "</p></a></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    <div class=\"col-md-12 d-flex justify-content-center\"><strong>";
        echo twig_nl2br(twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 16, $this->source); })()), "abstract", [], "any", false, false, false, 16));
        echo "</strong></div>
    <div class=\"col-md-12 d-flex justify-content-center mt-5 mb-5\">";
        // line 17
        echo twig_nl2br(twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 17, $this->source); })()), "content", [], "any", false, false, false, 17));
        echo "</div>
    
</div>
";
        // line 20
        if ((twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 20, $this->source); })()), "article", [], "any", false, false, false, 20) == false)) {
            // line 21
            echo "<div class=\"container\">
    <div class=\"row\">
        ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cities"]) || array_key_exists("cities", $context) ? $context["cities"] : (function () { throw new RuntimeError('Variable "cities" does not exist.', 23, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
                // line 24
                echo "            <div class=\"col-md-4 mb-5\">
                <div class=\"col-md-12 d-flex justify-content-center\"><a href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showone", ["id" => twig_get_attribute($this->env, $this->source, $context["city"], "id", [], "any", false, false, false, 25)]), "html", null, true);
                echo "\"><img class=\"img-fluid img-blocks\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/destinations/villes/" . twig_get_attribute($this->env, $this->source, $context["city"], "image", [], "any", false, false, false, 25))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "name", [], "any", false, false, false, 25), "html", null, true);
                echo "\"></a></div>
                <div class=\"col-md-12 city-title d-flex justify-content-center\"><a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showone", ["id" => twig_get_attribute($this->env, $this->source, $context["city"], "id", [], "any", false, false, false, 26)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "name", [], "any", false, false, false, 26), "html", null, true);
                echo "</a></div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "    </div>
";
        }
        // line 31
        echo "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "show/readOnePost.html.twig";
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
        return array (  166 => 31,  162 => 29,  151 => 26,  143 => 25,  140 => 24,  136 => 23,  132 => 21,  130 => 20,  124 => 17,  119 => 16,  108 => 14,  104 => 13,  96 => 8,  91 => 6,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Voyagez naturellement{% endblock %}

{% block body %}

    <div style=\"background-image: linear-gradient(rgba(4, 56, 19, 0.8), rgba(0, 0, 0, 0.4)), url('{{asset('images/posts/' ~ post.image)}}')\" class=\"mainpagecity d-flex justify-content-center\">
        <div class=\"container d-flex justify-content-center\">
            <h1 class=\"h1-main\">{{post.title}}</h1>
        </div>
    </div>

<div class=\"container post\">
   {% for country in post %}
    <div class=\"col-md-12 mb-2 d-flex justify-content-center\"><a href=\"{{path('showonecountry', {'id' :country.post.id}) }}\"><p>{{country.post.name}}</p></a></div>
    {% endfor %}
    <div class=\"col-md-12 d-flex justify-content-center\"><strong>{{post.abstract|raw|nl2br}}</strong></div>
    <div class=\"col-md-12 d-flex justify-content-center mt-5 mb-5\">{{post.content|raw|nl2br}}</div>
    
</div>
{% if post.article == false %}
<div class=\"container\">
    <div class=\"row\">
        {% for city in cities %}
            <div class=\"col-md-4 mb-5\">
                <div class=\"col-md-12 d-flex justify-content-center\"><a href=\"{{ path('showone', {'id' : city.id}) }}\"><img class=\"img-fluid img-blocks\" src=\"{{ asset('images/destinations/villes/'~city.image) }}\" alt=\"{{ city.name }}\"></a></div>
                <div class=\"col-md-12 city-title d-flex justify-content-center\"><a href=\"{{ path('showone', {'id' : city.id}) }}\">{{city.name}}</a></div>
            </div>
        {% endfor %}
    </div>
{% endif %}
</div>
{% endblock %}", "show/readOnePost.html.twig", "C:\\symfony\\travel_project\\templates\\show\\readOnePost.html.twig");
    }
}
