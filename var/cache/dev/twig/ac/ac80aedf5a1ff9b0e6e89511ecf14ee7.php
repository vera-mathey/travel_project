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

/* elements/header.html.twig */
class __TwigTemplate_a25b1eab5a122d175314aa9552ee52c0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elements/header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elements/header.html.twig"));

        // line 1
        echo "<div class=\"container-fluid\">
    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 5
        echo "            <div class=\"col-md-5 col-xs-4 col-sm-4 fixed-top-navbar menu\">
                <nav class=\"navbar navbar-expand-lg navbar-dark shadow-5-strong\">
                    <div class=\"container-fluid mt-5\">
                        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\" data-bs-theme=\"dark\">
                            <span class=\"navbar-toggler-icon\"></span>
                        </button>
                        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                            <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                                <li class=\"nav-item me-2\">
                                    <a class=\"nav-link\" aria-current=\"page\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post");
        echo "\">Accueil</a>
                                </li>
                                <li class=\"nav-item dropdown me-2\">
                                    <a class=\"nav-link dropdown-toggle\" aria-current=\"page\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_countries");
        echo "\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Pays</a>
                                    <ul class=\"dropdown-menu\">
                                        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countriesMenu"]) || array_key_exists("countriesMenu", $context) ? $context["countriesMenu"] : (function () { throw new RuntimeError('Variable "countriesMenu" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 20
            echo "                                            <li><a class=\"dropdownmenu\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showonecountry", ["id" => twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 20)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 20), "html", null, true);
            echo "</a></li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                                        <li><a class=\"dropdownmenu\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_countries");
        echo "\">Tous les pays</a></li>
                                    </ul>
                                </li>
                                <li class=\"nav-item dropdown me-2\">
                                    <a class=\"nav-link dropdown-toggle\" aria-current=\"page\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Où partir</a>
                                    <ul class=\"dropdown-menu\">
                                        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ouPartirList"]) || array_key_exists("ouPartirList", $context) ? $context["ouPartirList"] : (function () { throw new RuntimeError('Variable "ouPartirList" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            echo " 
                                            <li><a class=\"dropdownmenu\" href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showonepost", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 29), "html", null, true);
            echo "</a></li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    
                                    </ul>
                                </li>
                                <li class=\"nav-item me-2\">
                                    <a class=\"nav-link\" aria-current=\"page\" href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_actualites");
        echo "\">Actualités</a>
                                </li>
                                <li class=\"nav-item me-2\">
                                    <a class=\"nav-link\" aria-current=\"page\" href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guides");
        echo "\">Guides</a>
                                </li>
                            </ul>
                        </div>
                    </div>            
                </nav>
            </div>
        
            ";
        // line 46
        echo "            ";
        echo "     
            <div class=\"col-md-2 col-xs-4 col-sm-4 logo mt-5 d-flex justify-content-end\"><a class=\"connexion\" href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post");
        echo "\"><img class=\"img-fluid\" src=\"/images/Logo_blanc_det.png\"></a></div>
            ";
        // line 49
        echo "            ";
        // line 50
        echo "            <div class=\"col-md-5 col-xs-4 col-sm-4 margin-top connexion-mobile\">
                <div class=\"row\">
                    ";
        // line 53
        echo "                    <div class=\"connexion d-flex flex-row-reverse col-md-10 col-xs-3 col-sm-3\">
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                ";
        // line 56
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56)) {
            // line 57
            echo "                                ";
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "user", [], "any", false, false, false, 57), "avatar", [], "any", false, false, false, 57))) {
                // line 58
                echo "                                <div class=\"dropdown\">
                                    <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                         <small class=\"connexion-white me-2\">";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "user", [], "any", false, false, false, 60), "firstname", [], "any", false, false, false, 60), "html", null, true);
                echo "</small><span class=\"connexion-white me-2\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "user", [], "any", false, false, false, 60), "lastname", [], "any", false, false, false, 60), "html", null, true);
                echo "</span>   
                                    </button>
                                    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton1\">
                                        <li><a class=\"dropdown-item\" href=\"";
                // line 63
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
                echo "\"><i class=\"fa-solid fa-arrow-right-from-bracket\" aria-hidden=\"true\"></i>&ensp;Deconnexion</a></li>
                                        <li><a class=\"dropdown-item\" href=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "user", [], "any", false, false, false, 64), "id", [], "any", false, false, false, 64)]), "html", null, true);
                echo "\"><i class=\"fa-solid fa-user\"></i>&ensp;Profil</a></li>
                                    </ul>
                                </div>
                                ";
            } elseif (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 67
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67), "roleadmin", [], "any", false, false, false, 67))) {
                // line 68
                echo "                                <div class=\"dropdown\">
                                    <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                        <img class=\"roundedImage me-1\" src=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/avatars/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70), "avatar", [], "any", false, false, false, 70))), "html", null, true);
                echo "\"> <small class=\"connexion-white me-2\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70), "firstname", [], "any", false, false, false, 70), "html", null, true);
                echo "</small><span class=\"connexion-white me-2\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70), "lastname", [], "any", false, false, false, 70), "html", null, true);
                echo "</span>
                                        
                                    </button>
                                    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton1\">  
                                        <li><a class=\"dropdown-item\" href=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "user", [], "any", false, false, false, 74), "id", [], "any", false, false, false, 74)]), "html", null, true);
                echo "\"><i class=\"fa-solid fa-user\"></i>&ensp;Profil</a></li>
                                        <li><a class=\"dropdown-item\" href=\"";
                // line 75
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
                echo "\"><i class=\"fa-solid fa-arrow-right-from-bracket\" aria-hidden=\"true\"></i>&ensp;Deconnexion</a></li>
                                    </ul>
                                </div>
                                ";
            } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 78
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "user", [], "any", false, false, false, 78), "roleadmin", [], "any", false, false, false, 78))) {
                // line 79
                echo "                                <div class=\"dropdown\">
                                    <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                        <img class=\"roundedImage me-1\" src=\"";
                // line 81
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/avatars/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "user", [], "any", false, false, false, 81), "avatar", [], "any", false, false, false, 81))), "html", null, true);
                echo "\"> <small class=\"connexion-white me-2\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "user", [], "any", false, false, false, 81), "firstname", [], "any", false, false, false, 81), "html", null, true);
                echo "</small><span class=\"connexion-white me-2\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "user", [], "any", false, false, false, 81), "lastname", [], "any", false, false, false, 81), "html", null, true);
                echo "</span>                                        
                                    </button>
                                    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton1\">
                                        <li><a class=\"dropdown-item\" href=\"";
                // line 84
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
                echo "\"><i class=\"fa-solid fa-laptop-code connexion me-2\"></i>Tableau de bord</a></li>
                                        <li><a class=\"dropdown-item\" href=\"";
                // line 85
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "user", [], "any", false, false, false, 85), "id", [], "any", false, false, false, 85)]), "html", null, true);
                echo "\"><i class=\"fa-solid fa-user\"></i>&ensp;Profil</a></li>
                                        <li><a class=\"dropdown-item\" href=\"";
                // line 86
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
                echo "\"><i class=\"fa-solid fa-arrow-right-from-bracket\" aria-hidden=\"true\"></i>&ensp;Deconnexion</a></li>
                                    </ul>
                                </div>                               
                                ";
            } else {
                // line 90
                echo "                                <img class=\"roundedImage me-1\" style=\"width:25px; height:25px; border-radius:50%\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/avatars/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "user", [], "any", false, false, false, 90), "avatar", [], "any", false, false, false, 90))), "html", null, true);
                echo "\"> <small>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "user", [], "any", false, false, false, 90), "firstname", [], "any", false, false, false, 90), "html", null, true);
                echo "</small>&ensp;<span class=\"connexion me-3\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "user", [], "any", false, false, false, 90), "lastname", [], "any", false, false, false, 90), "html", null, true);
                echo "</span>
                                <i class=\"fa-solid fa-arrow-right-from-bracket\" aria-hidden=\"true\"></i>
                                ";
            }
            // line 92
            echo " 
                                ";
        } else {
            // line 94
            echo "                                <a class=\"connexion-white me-3\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" style=\"cursor:pointer\">
                                    <i class=\"fa-solid fa-user connexion-white me-2\" cursor:pointer></i>Connexion
                                </a>
                                <a class=\"connexion-white me-3 mobile-hiden\" href=\"";
            // line 97
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\" style=\"cursor:pointer\">
                                    <i class=\"fa-solid fa-user-plus connexion-white me-2\" cursor:pointer></i>Inscription
                                </a>
                                ";
        }
        // line 101
        echo "                            </div>
                        </div>  
                    </div>
                
                ";
        // line 106
        echo "                ";
        // line 107
        echo "                <div class=\"col-md-2 col-2 d-flex flex-row-reverse mobile-hiden\">
                    <button type=\"button\" class=\"btn search\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">
                        <i class=\"fa-solid fa-magnifying-glass mobile-hiden\"></i>
                    </button>
                </div> 
                <!-- Modal -->
                <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\">
                        <div class=\"modal-content\">
                            <div class=\"modal-dialog modal-lg\"><input class=\"form-control\" type=\"search\" placeholder='Par example \"Portugal\"'></div>
                                <div class=\"modal-footer\">
                                    <button class=\"btn buttons\" type=\"submit\">Rechercher</i></button>
                                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>            
            </div>
        </div>
        </div>
        ";
        // line 129
        echo "    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "elements/header.html.twig";
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
        return array (  298 => 129,  275 => 107,  273 => 106,  267 => 101,  260 => 97,  253 => 94,  249 => 92,  238 => 90,  231 => 86,  227 => 85,  223 => 84,  213 => 81,  209 => 79,  207 => 78,  201 => 75,  197 => 74,  186 => 70,  182 => 68,  180 => 67,  174 => 64,  170 => 63,  162 => 60,  158 => 58,  155 => 57,  153 => 56,  148 => 53,  144 => 50,  142 => 49,  138 => 47,  134 => 46,  123 => 37,  117 => 34,  111 => 30,  101 => 29,  95 => 28,  85 => 22,  74 => 20,  70 => 19,  65 => 17,  59 => 14,  48 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid\">
    <div class=\"container\">
        <div class=\"row\">
            {#menu#}
            <div class=\"col-md-5 col-xs-4 col-sm-4 fixed-top-navbar menu\">
                <nav class=\"navbar navbar-expand-lg navbar-dark shadow-5-strong\">
                    <div class=\"container-fluid mt-5\">
                        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\" data-bs-theme=\"dark\">
                            <span class=\"navbar-toggler-icon\"></span>
                        </button>
                        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                            <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                                <li class=\"nav-item me-2\">
                                    <a class=\"nav-link\" aria-current=\"page\" href=\"{{path('app_post')}}\">Accueil</a>
                                </li>
                                <li class=\"nav-item dropdown me-2\">
                                    <a class=\"nav-link dropdown-toggle\" aria-current=\"page\" href=\"{{path('app_countries')}}\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Pays</a>
                                    <ul class=\"dropdown-menu\">
                                        {% for country in countriesMenu %}
                                            <li><a class=\"dropdownmenu\" href=\"{{ path('showonecountry', {'id' : country.id }) }}\">{{ country.name }}</a></li>
                                        {% endfor %}
                                        <li><a class=\"dropdownmenu\" href=\"{{ path('app_countries') }}\">Tous les pays</a></li>
                                    </ul>
                                </li>
                                <li class=\"nav-item dropdown me-2\">
                                    <a class=\"nav-link dropdown-toggle\" aria-current=\"page\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Où partir</a>
                                    <ul class=\"dropdown-menu\">
                                        {% for post in ouPartirList %} 
                                            <li><a class=\"dropdownmenu\" href=\"{{ path('showonepost', {'id' : post.id }) }}\">{{ post.title }}</a></li>
                                        {% endfor %}    
                                    </ul>
                                </li>
                                <li class=\"nav-item me-2\">
                                    <a class=\"nav-link\" aria-current=\"page\" href=\"{{path('app_actualites')}}\">Actualités</a>
                                </li>
                                <li class=\"nav-item me-2\">
                                    <a class=\"nav-link\" aria-current=\"page\" href=\"{{path('app_guides')}}\">Guides</a>
                                </li>
                            </ul>
                        </div>
                    </div>            
                </nav>
            </div>
        
            {#end menu#}
            {#logo#}     
            <div class=\"col-md-2 col-xs-4 col-sm-4 logo mt-5 d-flex justify-content-end\"><a class=\"connexion\" href=\"{{path('app_post')}}\"><img class=\"img-fluid\" src=\"/images/Logo_blanc_det.png\"></a></div>
            {#end logo#}
            {#login logout search#}
            <div class=\"col-md-5 col-xs-4 col-sm-4 margin-top connexion-mobile\">
                <div class=\"row\">
                    {#login logout#}
                    <div class=\"connexion d-flex flex-row-reverse col-md-10 col-xs-3 col-sm-3\">
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                {% if app.user %}
                                {% if app.user.avatar is empty %}
                                <div class=\"dropdown\">
                                    <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                         <small class=\"connexion-white me-2\">{{ app.user.firstname }}</small><span class=\"connexion-white me-2\">{{ app.user.lastname }}</span>   
                                    </button>
                                    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton1\">
                                        <li><a class=\"dropdown-item\" href=\"{{path('app_logout')}}\"><i class=\"fa-solid fa-arrow-right-from-bracket\" aria-hidden=\"true\"></i>&ensp;Deconnexion</a></li>
                                        <li><a class=\"dropdown-item\" href=\"{{path('user.edit', {'id': app.user.id})}}\"><i class=\"fa-solid fa-user\"></i>&ensp;Profil</a></li>
                                    </ul>
                                </div>
                                {% elseif app.user.roleadmin is empty %}
                                <div class=\"dropdown\">
                                    <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                        <img class=\"roundedImage me-1\" src=\"{{asset('images/avatars/' ~ app.user.avatar)}}\"> <small class=\"connexion-white me-2\">{{ app.user.firstname }}</small><span class=\"connexion-white me-2\">{{ app.user.lastname }}</span>
                                        
                                    </button>
                                    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton1\">  
                                        <li><a class=\"dropdown-item\" href=\"{{path('user.edit', {'id': app.user.id})}}\"><i class=\"fa-solid fa-user\"></i>&ensp;Profil</a></li>
                                        <li><a class=\"dropdown-item\" href=\"{{path('app_logout')}}\"><i class=\"fa-solid fa-arrow-right-from-bracket\" aria-hidden=\"true\"></i>&ensp;Deconnexion</a></li>
                                    </ul>
                                </div>
                                {% elseif app.user.roleadmin is not empty %}
                                <div class=\"dropdown\">
                                    <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                        <img class=\"roundedImage me-1\" src=\"{{asset('images/avatars/' ~ app.user.avatar)}}\"> <small class=\"connexion-white me-2\">{{ app.user.firstname }}</small><span class=\"connexion-white me-2\">{{ app.user.lastname }}</span>                                        
                                    </button>
                                    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton1\">
                                        <li><a class=\"dropdown-item\" href=\"{{path('admin')}}\"><i class=\"fa-solid fa-laptop-code connexion me-2\"></i>Tableau de bord</a></li>
                                        <li><a class=\"dropdown-item\" href=\"{{path('user.edit', {'id': app.user.id})}}\"><i class=\"fa-solid fa-user\"></i>&ensp;Profil</a></li>
                                        <li><a class=\"dropdown-item\" href=\"{{path('app_logout')}}\"><i class=\"fa-solid fa-arrow-right-from-bracket\" aria-hidden=\"true\"></i>&ensp;Deconnexion</a></li>
                                    </ul>
                                </div>                               
                                {% else %}
                                <img class=\"roundedImage me-1\" style=\"width:25px; height:25px; border-radius:50%\" src=\"{{asset('images/avatars/' ~ app.user.avatar)}}\"> <small>{{ app.user.firstname }}</small>&ensp;<span class=\"connexion me-3\">{{ app.user.lastname }}</span>
                                <i class=\"fa-solid fa-arrow-right-from-bracket\" aria-hidden=\"true\"></i>
                                {% endif %} 
                                {% else %}
                                <a class=\"connexion-white me-3\" href=\"{{path('app_login')}}\" style=\"cursor:pointer\">
                                    <i class=\"fa-solid fa-user connexion-white me-2\" cursor:pointer></i>Connexion
                                </a>
                                <a class=\"connexion-white me-3 mobile-hiden\" href=\"{{path('app_register')}}\" style=\"cursor:pointer\">
                                    <i class=\"fa-solid fa-user-plus connexion-white me-2\" cursor:pointer></i>Inscription
                                </a>
                                {% endif %}
                            </div>
                        </div>  
                    </div>
                
                {#end login logout#}
                {#search#}
                <div class=\"col-md-2 col-2 d-flex flex-row-reverse mobile-hiden\">
                    <button type=\"button\" class=\"btn search\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">
                        <i class=\"fa-solid fa-magnifying-glass mobile-hiden\"></i>
                    </button>
                </div> 
                <!-- Modal -->
                <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\">
                        <div class=\"modal-content\">
                            <div class=\"modal-dialog modal-lg\"><input class=\"form-control\" type=\"search\" placeholder='Par example \"Portugal\"'></div>
                                <div class=\"modal-footer\">
                                    <button class=\"btn buttons\" type=\"submit\">Rechercher</i></button>
                                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>            
            </div>
        </div>
        </div>
        {#end login logout search#}
    </div>
</div>
", "elements/header.html.twig", "C:\\symfony\\travel_project\\templates\\elements\\header.html.twig");
    }
}
