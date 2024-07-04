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

/* show/readOnePlace.html.twig */
class __TwigTemplate_70f7aa43e7941467d887bcee8993b46c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "show/readOnePlace.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "show/readOnePlace.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "show/readOnePlace.html.twig", 1);
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
        echo "<div style=\"background-image: linear-gradient(rgba(4, 56, 19, 0.8), rgba(0, 0, 0, 0.4)), url('";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/destinations/places/" . twig_get_attribute($this->env, $this->source, (isset($context["place"]) || array_key_exists("place", $context) ? $context["place"] : (function () { throw new RuntimeError('Variable "place" does not exist.', 5, $this->source); })()), "image", [], "any", false, false, false, 5))), "html", null, true);
        echo "')\" class=\"mainpagecity d-flex justify-content-center\">
  <h1 class=\"h1-main\">";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["place"]) || array_key_exists("place", $context) ? $context["place"] : (function () { throw new RuntimeError('Variable "place" does not exist.', 6, $this->source); })()), "category", [], "any", false, false, false, 6), "html", null, true);
        echo "&ensp;";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["place"]) || array_key_exists("place", $context) ? $context["place"] : (function () { throw new RuntimeError('Variable "place" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>      
</div>
<div class=\"container post\">
  <div class=\"col-md-12 mt-5 d-flex justify-content-center\"><h2>A propos</h2></div>
  <div class=\"col-md-12 d-flex justify-content-center\"><p>Adresse :&nbsp; ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["place"]) || array_key_exists("place", $context) ? $context["place"] : (function () { throw new RuntimeError('Variable "place" does not exist.', 10, $this->source); })()), "address", [], "any", false, false, false, 10), "html", null, true);
        echo "</p1></div>
  <div class=\"col-md-12 city-title d-flex justify-content-center\">";
        // line 11
        echo twig_nl2br(twig_get_attribute($this->env, $this->source, (isset($context["place"]) || array_key_exists("place", $context) ? $context["place"] : (function () { throw new RuntimeError('Variable "place" does not exist.', 11, $this->source); })()), "description", [], "any", false, false, false, 11));
        echo "</div>
</div>
<div class=\"container\">
  <div class=\"row mb-5\">
  ";
        // line 16
        echo "    <div class=\"col-md-12 mt-5\"><h5>Commentaires</h5></div>
      ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 18
            echo "        <div class=\"row mt-5 d-flex align-content-center flex-wrap\">
          <div class=\"col-md-1 d-flex align-content-center flex-wrap\">
            <img class=\"img-fluid roundedImageComment\" src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/avatars/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 20), "avatar", [], "any", false, false, false, 20))), "html", null, true);
            echo "\" alt=\"avatar\"> 
          </div>
          <div class=\"col-md-11 d-flex align-content-center flex-wrap\">
            <span>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 23), "firstname", [], "any", false, false, false, 23), "html", null, true);
            echo " &nbsp; ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 23), "lastname", [], "any", false, false, false, 23), "html", null, true);
            echo "</span> &ensp;
            <span>";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 24), "D d M Y H:i"), "html", null, true);
            echo "</span> 
          </div>
        </div>
        <div class=\"col-md-12 mt-3\">";
            // line 27
            echo twig_nl2br(twig_striptags(twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 27)));
            echo "</div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    </div>
  </div>
  ";
        // line 32
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 33
            echo "      <div class=\"container\">
        <div class=\"row mb-3\">
          ";
            // line 35
            $this->loadTemplate("comment/comment.html.twig", "show/readOnePlace.html.twig", 35)->display(twig_array_merge($context, ["parentcommentForm" => (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 35, $this->source); })())]));
            // line 36
            echo "        </div>
      </div>
    ";
        }
        // line 39
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
        return "show/readOnePlace.html.twig";
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
        return array (  168 => 39,  163 => 36,  161 => 35,  157 => 33,  154 => 32,  150 => 29,  142 => 27,  136 => 24,  130 => 23,  124 => 20,  120 => 18,  116 => 17,  113 => 16,  106 => 11,  102 => 10,  93 => 6,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Voyagez naturellement{% endblock %}

{% block body %}
<div style=\"background-image: linear-gradient(rgba(4, 56, 19, 0.8), rgba(0, 0, 0, 0.4)), url('{{asset('images/destinations/places/' ~ place.image)}}')\" class=\"mainpagecity d-flex justify-content-center\">
  <h1 class=\"h1-main\">{{place.category}}&ensp;{{place.name}}</h1>      
</div>
<div class=\"container post\">
  <div class=\"col-md-12 mt-5 d-flex justify-content-center\"><h2>A propos</h2></div>
  <div class=\"col-md-12 d-flex justify-content-center\"><p>Adresse :&nbsp; {{place.address}}</p1></div>
  <div class=\"col-md-12 city-title d-flex justify-content-center\">{{place.description|raw|nl2br}}</div>
</div>
<div class=\"container\">
  <div class=\"row mb-5\">
  {#Affichage des commentaires#}
    <div class=\"col-md-12 mt-5\"><h5>Commentaires</h5></div>
      {% for comment in comments %}
        <div class=\"row mt-5 d-flex align-content-center flex-wrap\">
          <div class=\"col-md-1 d-flex align-content-center flex-wrap\">
            <img class=\"img-fluid roundedImageComment\" src=\"{{asset('images/avatars/' ~ comment.user.avatar)}}\" alt=\"avatar\"> 
          </div>
          <div class=\"col-md-11 d-flex align-content-center flex-wrap\">
            <span>{{ comment.user.firstname }} &nbsp; {{comment.user.lastname}}</span> &ensp;
            <span>{{ comment.createdAt|date('D d M Y H:i') }}</span> 
          </div>
        </div>
        <div class=\"col-md-12 mt-3\">{{ comment.content|striptags|raw|nl2br }}</div>
      {% endfor %}
    </div>
  </div>
  {#Appel du formulaire#}
    {% if is_granted('ROLE_USER') %}
      <div class=\"container\">
        <div class=\"row mb-3\">
          {% include \"comment/comment.html.twig\" with{'parentcommentForm' : commentForm} %}
        </div>
      </div>
    {% endif %}
</div>        
{% endblock %}", "show/readOnePlace.html.twig", "C:\\symfony\\travel_project\\templates\\show\\readOnePlace.html.twig");
    }
}
