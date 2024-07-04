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

/* post/index.html.twig */
class __TwigTemplate_bfb16ebe2b5a02d2f5008f1be4d207ca extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "post/index.html.twig", 1);
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

        echo "Voyagez naturellement";
        
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

        // line 7
        echo "<div>
    <div class=\"container-fluid main\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6 mt-5 mb-5\">
                    <div class=\"col-md-12\"><h1 class=\"h1-main display-1\">Choisissez <br>la destination</h1></div>
                    <div class=\"dropdown  mt-5 mb-5\">
                        <button class=\"btn dropdown-toggle buttontransp\" type=\"button\" id=\"dropdownMenuButton1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            Destination
                        </button>
                            <ul class=\"dropdown-menu\">
                                ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countriesMenu"]) || array_key_exists("countriesMenu", $context) ? $context["countriesMenu"] : (function () { throw new RuntimeError('Variable "countriesMenu" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 19
            echo "                                    <li><a class=\"dropdownmenu\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showonecountry", ["id" => twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 19)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 19), "html", null, true);
            echo "</a></li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "                            </ul>
                    </div>
                </div>
            <div class=\"col-md-6\"></div>
        </div>    
    </div>
</div>
";
        // line 29
        echo "
";
        // line 31
        echo "<div class=\"container mt-5 mb-5\">
    <div class=\"col-md-12 mb-3 d-flex justify-content-center\"><h2>Des idées de vacances pour cet été</h2></div>
    <div class=\"row mb-5\">
         <div class=\"col-md-4\">
            <div class=\"col-md-12 d-flex justify-content-center\"><a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showone", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cityList"]) || array_key_exists("cityList", $context) ? $context["cityList"] : (function () { throw new RuntimeError('Variable "cityList" does not exist.', 35, $this->source); })()), 0, [], "array", false, false, false, 35), "id", [], "any", false, false, false, 35)]), "html", null, true);
        echo "\"><img class=\"img-fluid img-blocks\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/destinations/villes/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cityList"]) || array_key_exists("cityList", $context) ? $context["cityList"] : (function () { throw new RuntimeError('Variable "cityList" does not exist.', 35, $this->source); })()), 0, [], "array", false, false, false, 35), "image", [], "any", false, false, false, 35))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cityList"]) || array_key_exists("cityList", $context) ? $context["cityList"] : (function () { throw new RuntimeError('Variable "cityList" does not exist.', 35, $this->source); })()), 0, [], "array", false, false, false, 35), "name", [], "any", false, false, false, 35), "html", null, true);
        echo "\"></a></div>
            <div class=\"col-md-12 guide-title d-flex justify-content-center\"><a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showone", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cityList"]) || array_key_exists("cityList", $context) ? $context["cityList"] : (function () { throw new RuntimeError('Variable "cityList" does not exist.', 36, $this->source); })()), 0, [], "array", false, false, false, 36), "id", [], "any", false, false, false, 36)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cityList"]) || array_key_exists("cityList", $context) ? $context["cityList"] : (function () { throw new RuntimeError('Variable "cityList" does not exist.', 36, $this->source); })()), 0, [], "array", false, false, false, 36), "name", [], "any", false, false, false, 36), "html", null, true);
        echo "</a></div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"col-md-12 d-flex justify-content-center\"><a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showone", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cityList"]) || array_key_exists("cityList", $context) ? $context["cityList"] : (function () { throw new RuntimeError('Variable "cityList" does not exist.', 39, $this->source); })()), 1, [], "array", false, false, false, 39), "id", [], "any", false, false, false, 39)]), "html", null, true);
        echo "\"><img class=\"img-fluid img-blocks\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/destinations/villes/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cityList"]) || array_key_exists("cityList", $context) ? $context["cityList"] : (function () { throw new RuntimeError('Variable "cityList" does not exist.', 39, $this->source); })()), 1, [], "array", false, false, false, 39), "image", [], "any", false, false, false, 39))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cityList"]) || array_key_exists("cityList", $context) ? $context["cityList"] : (function () { throw new RuntimeError('Variable "cityList" does not exist.', 39, $this->source); })()), 1, [], "array", false, false, false, 39), "name", [], "any", false, false, false, 39), "html", null, true);
        echo "\"></a></div>
            <div class=\"col-md-12 guide-title d-flex justify-content-center\"><a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showone", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cityList"]) || array_key_exists("cityList", $context) ? $context["cityList"] : (function () { throw new RuntimeError('Variable "cityList" does not exist.', 40, $this->source); })()), 1, [], "array", false, false, false, 40), "id", [], "any", false, false, false, 40)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cityList"]) || array_key_exists("cityList", $context) ? $context["cityList"] : (function () { throw new RuntimeError('Variable "cityList" does not exist.', 40, $this->source); })()), 1, [], "array", false, false, false, 40), "name", [], "any", false, false, false, 40), "html", null, true);
        echo "</a></div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"col-md-12 d-flex justify-content-center\"><a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showone", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cityList"]) || array_key_exists("cityList", $context) ? $context["cityList"] : (function () { throw new RuntimeError('Variable "cityList" does not exist.', 43, $this->source); })()), 2, [], "array", false, false, false, 43), "id", [], "any", false, false, false, 43)]), "html", null, true);
        echo "\"><img class=\"img-fluid img-blocks\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/destinations/villes/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cityList"]) || array_key_exists("cityList", $context) ? $context["cityList"] : (function () { throw new RuntimeError('Variable "cityList" does not exist.', 43, $this->source); })()), 2, [], "array", false, false, false, 43), "image", [], "any", false, false, false, 43))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cityList"]) || array_key_exists("cityList", $context) ? $context["cityList"] : (function () { throw new RuntimeError('Variable "cityList" does not exist.', 43, $this->source); })()), 2, [], "array", false, false, false, 43), "name", [], "any", false, false, false, 43), "html", null, true);
        echo "\"></a></div>
            <div class=\"col-md-12 guide-title d-flex justify-content-center\"><a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showone", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cityList"]) || array_key_exists("cityList", $context) ? $context["cityList"] : (function () { throw new RuntimeError('Variable "cityList" does not exist.', 44, $this->source); })()), 2, [], "array", false, false, false, 44), "id", [], "any", false, false, false, 44)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cityList"]) || array_key_exists("cityList", $context) ? $context["cityList"] : (function () { throw new RuntimeError('Variable "cityList" does not exist.', 44, $this->source); })()), 2, [], "array", false, false, false, 44), "name", [], "any", false, false, false, 44), "html", null, true);
        echo "</a></div>
        </div>
    </div>
</div>
";
        // line 50
        echo "
";
        // line 52
        $context["i"] = 0;
        // line 53
        echo "
<div class=\"container-fluid carusel mt-5 mb-5\">
  <div class=\"container\"> <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-bs-ride=\"carousel\"> 
    <div class=\"carousel-indicators\"> ";
        // line 56
        $context["i"] = 0;
        echo " 
    ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ouPartirList"]) || array_key_exists("ouPartirList", $context) ? $context["ouPartirList"] : (function () { throw new RuntimeError('Variable "ouPartirList" does not exist.', 57, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            echo " 
        ";
            // line 58
            if (((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 58, $this->source); })()) == 0)) {
                echo " 
        <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"";
                // line 59
                echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 59, $this->source); })()), "html", null, true);
                echo "\" class=\"active\" aria-current=\"true\" aria-label=\"Slide ";
                echo twig_escape_filter($this->env, ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 59, $this->source); })()) + 1), "html", null, true);
                echo "\"></button> 
        ";
            } else {
                // line 60
                echo " 
        <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"";
                // line 61
                echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 61, $this->source); })()), "html", null, true);
                echo "\" aria-label=\"Slide ";
                echo twig_escape_filter($this->env, ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 61, $this->source); })()) + 1), "html", null, true);
                echo "\"></button> 
      ";
            }
            // line 62
            echo " ";
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 62, $this->source); })()) + 1);
            echo " 
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo " 
    </div> 
    <div class=\"carousel-inner\"> 
    ";
        // line 66
        $context["j"] = 0;
        echo " 
    ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ouPartirList"]) || array_key_exists("ouPartirList", $context) ? $context["ouPartirList"] : (function () { throw new RuntimeError('Variable "ouPartirList" does not exist.', 67, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            echo " 
      ";
            // line 68
            if (((isset($context["j"]) || array_key_exists("j", $context) ? $context["j"] : (function () { throw new RuntimeError('Variable "j" does not exist.', 68, $this->source); })()) == 0)) {
                echo " 
        <div class=\"carousel-item active\"> 
      ";
            } else {
                // line 70
                echo " 
          <div class=\"carousel-item\"> 
      ";
            }
            // line 72
            echo " 
            <div class=\"row mt-5 mb-5\"> 
              <div class=\"col-md-6 mt-5\">
                <div class=\"row\"><div class=\"col-md-8 d-flex align-items-center\"><a class=\"h1-carusel\" href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showonepost", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 75)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 75), "html", null, true);
            echo "</a></div><div class=\"col-md-4\"></div></div>
                <div class=\"col-md-12 d-flex align-items-center\"><a class=\"text-carusel\" href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showonepost", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 76)]), "html", null, true);
            echo "\">";
            echo twig_nl2br(twig_get_attribute($this->env, $this->source, $context["post"], "abstract", [], "any", false, false, false, 76));
            echo "</a></div>
                <div class=\"col-md-12 d-flex align-items-center\"><a class=\"text-carusel\" href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showonepost", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 77)]), "html", null, true);
            echo "\">";
            echo twig_nl2br(twig_get_attribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 77));
            echo "</a></div>
                <div class=\"mt-5\"><a class=\"btn button-carusel\" href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showonepost", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 78)]), "html", null, true);
            echo "\" role=\"button\">Lire plus</a></div> 
              </div>
              <div class=\"col-md-6 mt-5 mb-5 d-flex flex-row-reverse\"><a href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showonepost", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 80)]), "html", null, true);
            echo "\"><img class=\"img-carusel img-fluid d-block w-100\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/posts/" . twig_get_attribute($this->env, $this->source, $context["post"], "image", [], "any", false, false, false, 80))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 80), "html", null, true);
            echo "\"></a></div> 
            </div>
          </div> ";
            // line 82
            $context["j"] = ((isset($context["j"]) || array_key_exists("j", $context) ? $context["j"] : (function () { throw new RuntimeError('Variable "j" does not exist.', 82, $this->source); })()) + 1);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
      </div>
      ";
        // line 85
        echo " 
    </div> 
  </div> 
</div>
";
        // line 91
        echo "<div class=\"container mt-5\">
    <div class=\"col-md-12 mt-5 mb-2 d-flex justify-content-center\"><h2>Actualités</h2></div>
    <div class=\"row mt-3\">
         <div class=\"col-md-3\">
            <div class=\"col-md-12 d-flex justify-content-center\"><a href=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showonepost", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["actualites"]) || array_key_exists("actualites", $context) ? $context["actualites"] : (function () { throw new RuntimeError('Variable "actualites" does not exist.', 95, $this->source); })()), 0, [], "array", false, false, false, 95), "id", [], "any", false, false, false, 95)]), "html", null, true);
        echo "\"><img class=\"img-fluid img-blocks\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/posts/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["actualites"]) || array_key_exists("actualites", $context) ? $context["actualites"] : (function () { throw new RuntimeError('Variable "actualites" does not exist.', 95, $this->source); })()), 0, [], "array", false, false, false, 95), "image", [], "any", false, false, false, 95))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["actualites"]) || array_key_exists("actualites", $context) ? $context["actualites"] : (function () { throw new RuntimeError('Variable "actualites" does not exist.', 95, $this->source); })()), 0, [], "array", false, false, false, 95), "title", [], "any", false, false, false, 95), "html", null, true);
        echo "\"></a></div>
            <div class=\"col-md-12 city-title d-flex justify-content-center\"><a href=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showonepost", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["actualites"]) || array_key_exists("actualites", $context) ? $context["actualites"] : (function () { throw new RuntimeError('Variable "actualites" does not exist.', 96, $this->source); })()), 0, [], "array", false, false, false, 96), "id", [], "any", false, false, false, 96)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["actualites"]) || array_key_exists("actualites", $context) ? $context["actualites"] : (function () { throw new RuntimeError('Variable "actualites" does not exist.', 96, $this->source); })()), 0, [], "array", false, false, false, 96), "title", [], "any", false, false, false, 96), "html", null, true);
        echo "</a></div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"col-md-12 d-flex justify-content-center\"><a href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showonepost", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["actualites"]) || array_key_exists("actualites", $context) ? $context["actualites"] : (function () { throw new RuntimeError('Variable "actualites" does not exist.', 99, $this->source); })()), 1, [], "array", false, false, false, 99), "id", [], "any", false, false, false, 99)]), "html", null, true);
        echo "\"><img class=\"img-fluid img-blocks\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/posts/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["actualites"]) || array_key_exists("actualites", $context) ? $context["actualites"] : (function () { throw new RuntimeError('Variable "actualites" does not exist.', 99, $this->source); })()), 1, [], "array", false, false, false, 99), "image", [], "any", false, false, false, 99))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["actualites"]) || array_key_exists("actualites", $context) ? $context["actualites"] : (function () { throw new RuntimeError('Variable "actualites" does not exist.', 99, $this->source); })()), 1, [], "array", false, false, false, 99), "title", [], "any", false, false, false, 99), "html", null, true);
        echo "\"></a></div>
            <div class=\"col-md-12 city-title d-flex justify-content-center\"><a href=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showonepost", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["actualites"]) || array_key_exists("actualites", $context) ? $context["actualites"] : (function () { throw new RuntimeError('Variable "actualites" does not exist.', 100, $this->source); })()), 1, [], "array", false, false, false, 100), "id", [], "any", false, false, false, 100)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["actualites"]) || array_key_exists("actualites", $context) ? $context["actualites"] : (function () { throw new RuntimeError('Variable "actualites" does not exist.', 100, $this->source); })()), 1, [], "array", false, false, false, 100), "title", [], "any", false, false, false, 100), "html", null, true);
        echo "</a></div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"col-md-12 d-flex justify-content-center\"><a href=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showonepost", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["actualites"]) || array_key_exists("actualites", $context) ? $context["actualites"] : (function () { throw new RuntimeError('Variable "actualites" does not exist.', 103, $this->source); })()), 2, [], "array", false, false, false, 103), "id", [], "any", false, false, false, 103)]), "html", null, true);
        echo "\"><img class=\"img-fluid img-blocks\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/posts/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["actualites"]) || array_key_exists("actualites", $context) ? $context["actualites"] : (function () { throw new RuntimeError('Variable "actualites" does not exist.', 103, $this->source); })()), 2, [], "array", false, false, false, 103), "image", [], "any", false, false, false, 103))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["actualites"]) || array_key_exists("actualites", $context) ? $context["actualites"] : (function () { throw new RuntimeError('Variable "actualites" does not exist.', 103, $this->source); })()), 2, [], "array", false, false, false, 103), "title", [], "any", false, false, false, 103), "html", null, true);
        echo "\"></a></div>
            <div class=\"col-md-12 city-title d-flex justify-content-center\"><a href=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showonepost", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["actualites"]) || array_key_exists("actualites", $context) ? $context["actualites"] : (function () { throw new RuntimeError('Variable "actualites" does not exist.', 104, $this->source); })()), 2, [], "array", false, false, false, 104), "id", [], "any", false, false, false, 104)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["actualites"]) || array_key_exists("actualites", $context) ? $context["actualites"] : (function () { throw new RuntimeError('Variable "actualites" does not exist.', 104, $this->source); })()), 2, [], "array", false, false, false, 104), "title", [], "any", false, false, false, 104), "html", null, true);
        echo "</a></div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"col-md-12 d-flex justify-content-center\"><a href=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showonepost", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["actualites"]) || array_key_exists("actualites", $context) ? $context["actualites"] : (function () { throw new RuntimeError('Variable "actualites" does not exist.', 107, $this->source); })()), 3, [], "array", false, false, false, 107), "id", [], "any", false, false, false, 107)]), "html", null, true);
        echo "\"><img class=\"img-fluid img-blocks\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/posts/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["actualites"]) || array_key_exists("actualites", $context) ? $context["actualites"] : (function () { throw new RuntimeError('Variable "actualites" does not exist.', 107, $this->source); })()), 3, [], "array", false, false, false, 107), "image", [], "any", false, false, false, 107))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["actualites"]) || array_key_exists("actualites", $context) ? $context["actualites"] : (function () { throw new RuntimeError('Variable "actualites" does not exist.', 107, $this->source); })()), 3, [], "array", false, false, false, 107), "title", [], "any", false, false, false, 107), "html", null, true);
        echo "\"></a></div>
            <div class=\"col-md-12 city-title d-flex justify-content-center\"><a href=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showonepost", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["actualites"]) || array_key_exists("actualites", $context) ? $context["actualites"] : (function () { throw new RuntimeError('Variable "actualites" does not exist.', 108, $this->source); })()), 3, [], "array", false, false, false, 108), "id", [], "any", false, false, false, 108)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["actualites"]) || array_key_exists("actualites", $context) ? $context["actualites"] : (function () { throw new RuntimeError('Variable "actualites" does not exist.', 108, $this->source); })()), 3, [], "array", false, false, false, 108), "title", [], "any", false, false, false, 108), "html", null, true);
        echo "</a></div>
        </div>
    </div>
</div>
<div class=\"d-flex justify-content-center mt-4 mb-5\"><a class=\"btn button-color\" href=\"";
        // line 112
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_actualites");
        echo "\" role=\"button\">Toutes les actualités</a></div>
";
        // line 115
        echo "<div class=\"container mt-5 mb-5\">
<div class=\"col-md-12 mb-4 d-flex justify-content-center\"><h2>Guide dans votre destination</h2></div>
    <div class=\"row\">
    ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["guides"]) || array_key_exists("guides", $context) ? $context["guides"] : (function () { throw new RuntimeError('Variable "guides" does not exist.', 118, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["guide"]) {
            // line 119
            echo "         <div class=\"col-md-3\">
            <div class=\"col-md-12 d-flex justify-content-center\"><a href=\"";
            // line 120
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showoneguide", ["id" => twig_get_attribute($this->env, $this->source, $context["guide"], "id", [], "any", false, false, false, 120)]), "html", null, true);
            echo "\"><img class=\"img-fluid avatar\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/avatars/" . twig_get_attribute($this->env, $this->source, $context["guide"], "avatar", [], "any", false, false, false, 120))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["guide"], "firstname", [], "any", false, false, false, 120), "html", null, true);
            echo "\"></a></div>
            <div class=\"col-md-12 guide-title d-flex justify-content-center\"><a href=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showoneguide", ["id" => twig_get_attribute($this->env, $this->source, $context["guide"], "id", [], "any", false, false, false, 121)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["guide"], "firstname", [], "any", false, false, false, 121), "html", null, true);
            echo "</a></div>
            <div class=\"col-md-12 d-flex justify-content-center\"><a class=\"text\" href=\"";
            // line 122
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showoneguide", ["id" => twig_get_attribute($this->env, $this->source, $context["guide"], "id", [], "any", false, false, false, 122)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["guide"], "city", [], "any", false, false, false, 122), "html", null, true);
            echo "</a></div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['guide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "    </div>
</div>
</div>
<div class=\"d-flex justify-content-center mt-4 mb-5\"><a class=\"btn button-color\" href=\"";
        // line 128
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guides");
        echo "\" role=\"button\">Trouver un guide</a></div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "post/index.html.twig";
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
        return array (  429 => 128,  424 => 125,  413 => 122,  407 => 121,  399 => 120,  396 => 119,  392 => 118,  387 => 115,  383 => 112,  374 => 108,  366 => 107,  358 => 104,  350 => 103,  342 => 100,  334 => 99,  326 => 96,  318 => 95,  312 => 91,  306 => 85,  296 => 82,  287 => 80,  282 => 78,  276 => 77,  270 => 76,  264 => 75,  259 => 72,  254 => 70,  248 => 68,  242 => 67,  238 => 66,  233 => 63,  224 => 62,  217 => 61,  214 => 60,  207 => 59,  203 => 58,  197 => 57,  193 => 56,  188 => 53,  186 => 52,  183 => 50,  174 => 44,  166 => 43,  158 => 40,  150 => 39,  142 => 36,  134 => 35,  128 => 31,  125 => 29,  116 => 21,  105 => 19,  101 => 18,  88 => 7,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Voyagez naturellement{% endblock %}

{% block body %}
{#main screen#}
<div>
    <div class=\"container-fluid main\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6 mt-5 mb-5\">
                    <div class=\"col-md-12\"><h1 class=\"h1-main display-1\">Choisissez <br>la destination</h1></div>
                    <div class=\"dropdown  mt-5 mb-5\">
                        <button class=\"btn dropdown-toggle buttontransp\" type=\"button\" id=\"dropdownMenuButton1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            Destination
                        </button>
                            <ul class=\"dropdown-menu\">
                                {% for country in countriesMenu %}
                                    <li><a class=\"dropdownmenu\" href=\"{{ path('showonecountry', {'id' : country.id }) }}\">{{ country.name }}</a></li>
                                {% endfor %}
                            </ul>
                    </div>
                </div>
            <div class=\"col-md-6\"></div>
        </div>    
    </div>
</div>
{#end main screen#}

{#first block#}
<div class=\"container mt-5 mb-5\">
    <div class=\"col-md-12 mb-3 d-flex justify-content-center\"><h2>Des idées de vacances pour cet été</h2></div>
    <div class=\"row mb-5\">
         <div class=\"col-md-4\">
            <div class=\"col-md-12 d-flex justify-content-center\"><a href=\"{{ path('showone', {'id' : cityList[0].id}) }}\"><img class=\"img-fluid img-blocks\" src=\"{{ asset('images/destinations/villes/'~cityList[0].image) }}\" alt=\"{{ cityList[0].name }}\"></a></div>
            <div class=\"col-md-12 guide-title d-flex justify-content-center\"><a href=\"{{ path('showone', {'id' : cityList[0].id}) }}\">{{cityList[0].name}}</a></div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"col-md-12 d-flex justify-content-center\"><a href=\"{{ path('showone', {'id' : cityList[1].id}) }}\"><img class=\"img-fluid img-blocks\" src=\"{{ asset('images/destinations/villes/'~cityList[1].image) }}\" alt=\"{{ cityList[1].name }}\"></a></div>
            <div class=\"col-md-12 guide-title d-flex justify-content-center\"><a href=\"{{ path('showone', {'id' : cityList[1].id}) }}\">{{cityList[1].name}}</a></div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"col-md-12 d-flex justify-content-center\"><a href=\"{{ path('showone', {'id' : cityList[2].id}) }}\"><img class=\"img-fluid img-blocks\" src=\"{{ asset('images/destinations/villes/'~cityList[2].image) }}\" alt=\"{{ cityList[2].name }}\"></a></div>
            <div class=\"col-md-12 guide-title d-flex justify-content-center\"><a href=\"{{ path('showone', {'id' : cityList[2].id}) }}\">{{cityList[2].name}}</a></div>
        </div>
    </div>
</div>
{#<div class=\"d-flex justify-content-center mt-3\"><a class=\"btn button-color\" href=\"{{path('app_sansavion')}}\" role=\"button\">Voir plus de destinations</a></div>#}
{#end first block#}

{#carusel#}
{% set i = 0 %}

<div class=\"container-fluid carusel mt-5 mb-5\">
  <div class=\"container\"> <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-bs-ride=\"carousel\"> 
    <div class=\"carousel-indicators\"> {% set i = 0 %} 
    {% for post in ouPartirList %} 
        {% if i == 0 %} 
        <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"{{ i }}\" class=\"active\" aria-current=\"true\" aria-label=\"Slide {{ i + 1 }}\"></button> 
        {% else %} 
        <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"{{ i }}\" aria-label=\"Slide {{ i + 1 }}\"></button> 
      {% endif %} {% set i = i + 1 %} 
      {% endfor %} 
    </div> 
    <div class=\"carousel-inner\"> 
    {% set j = 0 %} 
    {% for post in ouPartirList %} 
      {% if j == 0 %} 
        <div class=\"carousel-item active\"> 
      {% else %} 
          <div class=\"carousel-item\"> 
      {% endif %} 
            <div class=\"row mt-5 mb-5\"> 
              <div class=\"col-md-6 mt-5\">
                <div class=\"row\"><div class=\"col-md-8 d-flex align-items-center\"><a class=\"h1-carusel\" href=\"{{ path('showonepost', {'id' : post.id}) }}\">{{ post.title }}</a></div><div class=\"col-md-4\"></div></div>
                <div class=\"col-md-12 d-flex align-items-center\"><a class=\"text-carusel\" href=\"{{ path('showonepost', {'id' : post.id}) }}\">{{ post.abstract|raw|nl2br }}</a></div>
                <div class=\"col-md-12 d-flex align-items-center\"><a class=\"text-carusel\" href=\"{{ path('showonepost', {'id' : post.id}) }}\">{{ post.content|raw|nl2br }}</a></div>
                <div class=\"mt-5\"><a class=\"btn button-carusel\" href=\"{{ path('showonepost', {'id' : post.id}) }}\" role=\"button\">Lire plus</a></div> 
              </div>
              <div class=\"col-md-6 mt-5 mb-5 d-flex flex-row-reverse\"><a href=\"{{ path('showonepost', {'id' : post.id}) }}\"><img class=\"img-carusel img-fluid d-block w-100\" src=\"{{ asset('images/posts/'~ post.image) }}\" alt=\"{{ post.title }}\"></a></div> 
            </div>
          </div> {% set j = j + 1 %} {% endfor %} 
      </div>
      {#<button class=\"carousel-control-prev d-flex flex-row\" type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide=\"prev\"> <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span> <span class=\"visually-hidden\">Previous</span> </button> 
      <button class=\"carousel-control-next d-flex flex-row-reverse\" type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide=\"next\"> <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span> <span class=\"visually-hidden\">Next</span> </button>#} 
    </div> 
  </div> 
</div>
{#end carusel#}
{#actualites#}
<div class=\"container mt-5\">
    <div class=\"col-md-12 mt-5 mb-2 d-flex justify-content-center\"><h2>Actualités</h2></div>
    <div class=\"row mt-3\">
         <div class=\"col-md-3\">
            <div class=\"col-md-12 d-flex justify-content-center\"><a href=\"{{ path('showonepost', {'id' : actualites[0].id}) }}\"><img class=\"img-fluid img-blocks\" src=\"{{ asset('images/posts/'~actualites[0].image) }}\" alt=\"{{ actualites[0].title }}\"></a></div>
            <div class=\"col-md-12 city-title d-flex justify-content-center\"><a href=\"{{ path('showonepost', {'id' : actualites[0].id}) }}\">{{actualites[0].title}}</a></div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"col-md-12 d-flex justify-content-center\"><a href=\"{{ path('showonepost', {'id' : actualites[1].id}) }}\"><img class=\"img-fluid img-blocks\" src=\"{{ asset('images/posts/'~actualites[1].image) }}\" alt=\"{{ actualites[1].title }}\"></a></div>
            <div class=\"col-md-12 city-title d-flex justify-content-center\"><a href=\"{{ path('showonepost', {'id' : actualites[1].id}) }}\">{{actualites[1].title}}</a></div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"col-md-12 d-flex justify-content-center\"><a href=\"{{ path('showonepost', {'id' : actualites[2].id}) }}\"><img class=\"img-fluid img-blocks\" src=\"{{ asset('images/posts/'~actualites[2].image) }}\" alt=\"{{ actualites[2].title }}\"></a></div>
            <div class=\"col-md-12 city-title d-flex justify-content-center\"><a href=\"{{ path('showonepost', {'id' : actualites[2].id}) }}\">{{actualites[2].title}}</a></div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"col-md-12 d-flex justify-content-center\"><a href=\"{{ path('showonepost', {'id' : actualites[3].id}) }}\"><img class=\"img-fluid img-blocks\" src=\"{{ asset('images/posts/'~actualites[3].image) }}\" alt=\"{{ actualites[3].title }}\"></a></div>
            <div class=\"col-md-12 city-title d-flex justify-content-center\"><a href=\"{{ path('showonepost', {'id' : actualites[3].id}) }}\">{{actualites[3].title}}</a></div>
        </div>
    </div>
</div>
<div class=\"d-flex justify-content-center mt-4 mb-5\"><a class=\"btn button-color\" href=\"{{path('app_actualites')}}\" role=\"button\">Toutes les actualités</a></div>
{#end actualites#}
{#guides#}
<div class=\"container mt-5 mb-5\">
<div class=\"col-md-12 mb-4 d-flex justify-content-center\"><h2>Guide dans votre destination</h2></div>
    <div class=\"row\">
    {% for guide in guides %}
         <div class=\"col-md-3\">
            <div class=\"col-md-12 d-flex justify-content-center\"><a href=\"{{ path('showoneguide', {'id' : guide.id}) }}\"><img class=\"img-fluid avatar\" src=\"{{ asset('images/avatars/'~guide.avatar) }}\" alt=\"{{ guide.firstname }}\"></a></div>
            <div class=\"col-md-12 guide-title d-flex justify-content-center\"><a href=\"{{ path('showoneguide', {'id' : guide.id}) }}\">{{guide.firstname}}</a></div>
            <div class=\"col-md-12 d-flex justify-content-center\"><a class=\"text\" href=\"{{ path('showoneguide', {'id' : guide.id}) }}\">{{guide.city}}</a></div>
        </div>
        {% endfor %}
    </div>
</div>
</div>
<div class=\"d-flex justify-content-center mt-4 mb-5\"><a class=\"btn button-color\" href=\"{{path('app_guides')}}\" role=\"button\">Trouver un guide</a></div>
{#end guides#}
{% endblock %}
", "post/index.html.twig", "C:\\symfony\\travel_project\\templates\\post\\index.html.twig");
    }
}
