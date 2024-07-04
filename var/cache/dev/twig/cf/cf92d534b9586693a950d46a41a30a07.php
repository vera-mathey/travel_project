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

/* registration/register.html.twig */
class __TwigTemplate_a60e8cc7492d5578249b70f79f601547 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Register";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container-fluid main\">
        
        <div class=\"container mt-5 mb-5\">
        <div class=\"row mt-5 mb-5\">
        <div class=\"col-md-3 mt-5\"></div>
        <div class=\"col-md-6 mt-5\">
            <h1 class=\"h1-carusel mt-5 mb-5\">Inscrivez-vous</h1>

            <form method=\"post\" enctype=\"multipart/form-data\" class=\"row g-3 mb-6\">
                ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 15, $this->source); })()), 'errors');
        echo "
                ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 16, $this->source); })()), 'form_start');
        echo "

                <div class=\"col-md-6 mb-3 mt-3 text-carusel\">
                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 19, $this->source); })()), "firstname", [], "any", false, false, false, 19), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Prénom"], "label" => false]);
        echo "
                </div>

                <div class=\"col-md-6 mb-3 mt-3 text-carusel\">
                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 23, $this->source); })()), "lastname", [], "any", false, false, false, 23), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Nom"], "label" => false]);
        echo "
                </div>

                <div class=\"col-md-12 mb-3 text-carusel\">
                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 27, $this->source); })()), "avatar", [], "any", false, false, false, 27), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Photo de profil"], "label" => false]);
        echo "
                </div>

                <div class=\"col-md-6 mb-3 text-carusel\">
                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 31, $this->source); })()), "email", [], "any", false, false, false, 31), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Email"], "label" => false]);
        echo "
                </div>
                <div class=\"col-md-6 mb-3 text-carusel\">
                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 34, $this->source); })()), "city", [], "any", false, false, false, 34), 'row', ["attr" => ["id" => "city", "class" => "form-control", "placeholder" => "Ville"], "label" => false]);
        echo "
                </div>
                <div class=\"col-md-12 mb-3 text-carusel\">
                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 37, $this->source); })()), "plainPassword", [], "any", false, false, false, 37), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Mot de passe"], "label" => false]);
        echo "
                </div>
                
                ";
        // line 41
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 41, $this->source); })()), "_token", [], "any", false, false, false, 41), 'row');
        echo "

                <div class=\"col-12\">
                    <div class=\"row mb-5\">

                        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 46, $this->source); })()), "agreeTerms", [], "any", false, false, false, 46), 'row');
        echo "
                        <div class=\"col-md-5 mt-4 mb-5\"><button type=\"submit\" class=\"btn buttons button-color\">S'inscrire</button></div>
                        <div class=\"col-md-5 mt-5 mb-5\"><a class=\"text-carusel\" href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Connexion</a></div>
                        <div class=\"col-md-2 mt-5 mb-5\"></div>
                    </div>
                </div>

                ";
        // line 53
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 53, $this->source); })()), 'form_end');
        echo "
            </form>
            </div>
            <div class=\"col-md-3\"></div>
            </div>
        </div>
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
        return "registration/register.html.twig";
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
        return array (  170 => 53,  162 => 48,  157 => 46,  148 => 41,  142 => 37,  136 => 34,  130 => 31,  123 => 27,  116 => 23,  109 => 19,  103 => 16,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Register{% endblock %}

{% block body %}
    <div class=\"container-fluid main\">
        
        <div class=\"container mt-5 mb-5\">
        <div class=\"row mt-5 mb-5\">
        <div class=\"col-md-3 mt-5\"></div>
        <div class=\"col-md-6 mt-5\">
            <h1 class=\"h1-carusel mt-5 mb-5\">Inscrivez-vous</h1>

            <form method=\"post\" enctype=\"multipart/form-data\" class=\"row g-3 mb-6\">
                {{ form_errors(registrationForm) }}
                {{ form_start(registrationForm) }}

                <div class=\"col-md-6 mb-3 mt-3 text-carusel\">
                    {{ form_row(registrationForm.firstname, {'attr': {'class': 'form-control', 'placeholder': 'Prénom'}, 'label': false}) }}
                </div>

                <div class=\"col-md-6 mb-3 mt-3 text-carusel\">
                    {{ form_row(registrationForm.lastname, {'attr': {'class': 'form-control', 'placeholder': 'Nom'}, 'label': false}) }}
                </div>

                <div class=\"col-md-12 mb-3 text-carusel\">
                    {{ form_row(registrationForm.avatar, {'attr': {'class': 'form-control', 'placeholder': 'Photo de profil'}, 'label': false}) }}
                </div>

                <div class=\"col-md-6 mb-3 text-carusel\">
                    {{ form_row(registrationForm.email, {'attr': {'class': 'form-control', 'placeholder': 'Email'}, 'label': false}) }}
                </div>
                <div class=\"col-md-6 mb-3 text-carusel\">
                    {{ form_row(registrationForm.city, {'attr': {'id': 'city', 'class': 'form-control', 'placeholder': 'Ville'}, 'label': false}) }}
                </div>
                <div class=\"col-md-12 mb-3 text-carusel\">
                    {{ form_row(registrationForm.plainPassword, {'attr': {'class': 'form-control', 'placeholder': 'Mot de passe'}, 'label': false}) }}
                </div>
                
                {# Ajout du champ CSRF token #}
                {{ form_row(registrationForm._token) }}

                <div class=\"col-12\">
                    <div class=\"row mb-5\">

                        {{ form_row(registrationForm.agreeTerms) }}
                        <div class=\"col-md-5 mt-4 mb-5\"><button type=\"submit\" class=\"btn buttons button-color\">S'inscrire</button></div>
                        <div class=\"col-md-5 mt-5 mb-5\"><a class=\"text-carusel\" href=\"{{ path('app_login') }}\">Connexion</a></div>
                        <div class=\"col-md-2 mt-5 mb-5\"></div>
                    </div>
                </div>

                {{ form_end(registrationForm) }}
            </form>
            </div>
            <div class=\"col-md-3\"></div>
            </div>
        </div>
    </div>
{% endblock %}
", "registration/register.html.twig", "C:\\symfony\\travel_project\\templates\\registration\\register.html.twig");
    }
}
