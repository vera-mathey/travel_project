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

/* show/readoneGuide.html.twig */
class __TwigTemplate_9a6bb337cdb10a5dc8ef81355c660220 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "show/readoneGuide.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "show/readoneGuide.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "show/readoneGuide.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/avatars/" . twig_get_attribute($this->env, $this->source, (isset($context["guide"]) || array_key_exists("guide", $context) ? $context["guide"] : (function () { throw new RuntimeError('Variable "guide" does not exist.', 6, $this->source); })()), "avatar", [], "any", false, false, false, 6))), "html", null, true);
        echo "')\" class=\"col-md-12 mainpagecity d-flex justify-content-center\">
  <div><h1 class=\"h1-main d-flex justify-content-center\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["guide"]) || array_key_exists("guide", $context) ? $context["guide"] : (function () { throw new RuntimeError('Variable "guide" does not exist.', 7, $this->source); })()), "firstname", [], "any", false, false, false, 7), "html", null, true);
        echo "</h1><br>
    <h4 class=\"h2-main d-flex justify-content-center\">Guide locale à ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["guide"]) || array_key_exists("guide", $context) ? $context["guide"] : (function () { throw new RuntimeError('Variable "guide" does not exist.', 8, $this->source); })()), "city", [], "any", false, false, false, 8), "html", null, true);
        echo "</h4></div>
  </div>
</div>

<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-md-4\"><img class=\"img-fluid avatar\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/images/avatars/" . twig_get_attribute($this->env, $this->source, (isset($context["guide"]) || array_key_exists("guide", $context) ? $context["guide"] : (function () { throw new RuntimeError('Variable "guide" does not exist.', 14, $this->source); })()), "avatar", [], "any", false, false, false, 14))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["guide"]) || array_key_exists("guide", $context) ? $context["guide"] : (function () { throw new RuntimeError('Variable "guide" does not exist.', 14, $this->source); })()), "firstname", [], "any", false, false, false, 14), "html", null, true);
        echo "\"></div>
    <div class=\"col-md-8 d-flex align-content-center flex-wrap bio\">";
        // line 15
        echo twig_nl2br(twig_get_attribute($this->env, $this->source, (isset($context["guide"]) || array_key_exists("guide", $context) ? $context["guide"] : (function () { throw new RuntimeError('Variable "guide" does not exist.', 15, $this->source); })()), "description", [], "any", false, false, false, 15));
        echo "</div>
  </div>
  <div class\"col-md-12\">
    <!-- Formulaire de contact -->
<section class=\"py-3 py-md-5\">
  <div class=\"container\">
    <div class=\"row justify-content-md-center\">
      <div class=\"col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6\">
        <h2 class=\"mb-4 display-5 text-center\">Contactez-moi !</h2>
      </div>
    </div>
  </div>
  <div class=\"container\">
    <div class=\"row justify-content-lg-center\">
      <div class=\"col-12 col-lg-9\">
        <div class=\"bg-white overflow-hidden\">
          <form action=\"#!\">
            <div class=\"row gy-4 gy-xl-5 p-4 p-xl-5\">
              <div class=\"col-12\">
                <label for=\"fullname\" class=\"form-label\">Votre nom <span class=\"text-danger\">*</span></label>
                <input type=\"text\" class=\"form-control\" id=\"fullname\" name=\"fullname\" value=\"\" required>
              </div>
              <div class=\"col-12 col-md-6\">
                <label for=\"email\" class=\"form-label\">Email <span class=\"text-danger\">*</span></label>
                <div class=\"input-group\">
                  <span class=\"input-group-text\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-envelope\" viewBox=\"0 0 16 16\">
                      <path d=\"M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z\" />
                    </svg>
                  </span>
                  <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" value=\"\" required>
                </div>
              </div>
              <div class=\"col-12 col-md-6\">
                <label for=\"phone\" class=\"form-label\">Numéro de téléphone</label>
                <div class=\"input-group\">
                  <span class=\"input-group-text\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-telephone\" viewBox=\"0 0 16 16\">
                      <path d=\"M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z\" />
                    </svg>
                  </span>
                  <input type=\"tel\" class=\"form-control\" id=\"phone\" name=\"phone\" value=\"\">
                </div>
              </div>
              <div class=\"col-12\">
                <label for=\"message\" class=\"form-label\">Votre message <span class=\"text-danger\">*</span></label>
                <textarea class=\"form-control\" id=\"message\" name=\"message\" rows=\"3\" required></textarea>
              </div>
              <div class=\"col-12\">
                <div class=\"d-grid\">
                  <button class=\"button-color\" type=\"submit\">Envoyer</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
  </div>
<!-- Fin de formulaire de contact -->
  <div class=\"col-md-12 mt-5 mb-3\"><h5>Commentaires</h5></div>
  ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commentsUser"]) || array_key_exists("commentsUser", $context) ? $context["commentsUser"] : (function () { throw new RuntimeError('Variable "commentsUser" does not exist.', 78, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 79
            echo "  <div class=\"row mt-5 d-flex align-content-center flex-wrap\">
    <div class=\"col-md-1 d-flex align-content-center flex-wrap\">
      <img class=\"img-fluid roundedImageComment\" src=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/avatars/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 81), "avatar", [], "any", false, false, false, 81))), "html", null, true);
            echo "\" alt=\"avatar\">
    </div>
    <div class=\"col-md-11 d-flex align-content-center flex-wrap\">
      <span>";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 84), "firstname", [], "any", false, false, false, 84), "html", null, true);
            echo " &nbsp; ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 84), "lastname", [], "any", false, false, false, 84), "html", null, true);
            echo "</span> &ensp;
      <span>";
            // line 85
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 85), "D d M Y H:i"), "html", null, true);
            echo "</span>
    </div>
  </div>
  <div class=\"col-md-12 mt-3 mb-5\">";
            // line 88
            echo twig_nl2br(twig_striptags(twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 88)));
            echo "</div>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 90
            echo "  <div class=\"col-md-12 mt-3 mb-5\">Il n'y pas de commentaires pour l'instant</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "
  ";
        // line 94
        echo "  ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 95
            echo "  <div class=\"container\">
    <div class=\"row mt-5 mb-3\">
      ";
            // line 97
            $this->loadTemplate("comment/commentUser.html.twig", "show/readoneGuide.html.twig", 97)->display(twig_array_merge($context, ["parentcommentUserForm" => (isset($context["commentUserForm"]) || array_key_exists("commentUserForm", $context) ? $context["commentUserForm"] : (function () { throw new RuntimeError('Variable "commentUserForm" does not exist.', 97, $this->source); })())]));
            // line 98
            echo "    </div>
  </div>
  ";
        }
        // line 100
        echo "      
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
        return "show/readoneGuide.html.twig";
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
        return array (  238 => 100,  233 => 98,  231 => 97,  227 => 95,  224 => 94,  221 => 92,  214 => 90,  207 => 88,  201 => 85,  195 => 84,  189 => 81,  185 => 79,  180 => 78,  114 => 15,  108 => 14,  99 => 8,  95 => 7,  91 => 6,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Voyagez naturellement{% endblock %}

{% block body %}
  
<div style=\"background-image: linear-gradient(rgba(4, 56, 19, 0.8), rgba(0, 0, 0, 0.4)), url('{{ asset('images/avatars/' ~ guide.avatar) }}')\" class=\"col-md-12 mainpagecity d-flex justify-content-center\">
  <div><h1 class=\"h1-main d-flex justify-content-center\">{{guide.firstname}}</h1><br>
    <h4 class=\"h2-main d-flex justify-content-center\">Guide locale à {{guide.city}}</h4></div>
  </div>
</div>

<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-md-4\"><img class=\"img-fluid avatar\" src=\"{{ asset('/images/avatars/'~ guide.avatar) }}\" alt=\"{{ guide.firstname }}\"></div>
    <div class=\"col-md-8 d-flex align-content-center flex-wrap bio\">{{guide.description|raw|nl2br}}</div>
  </div>
  <div class\"col-md-12\">
    <!-- Formulaire de contact -->
<section class=\"py-3 py-md-5\">
  <div class=\"container\">
    <div class=\"row justify-content-md-center\">
      <div class=\"col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6\">
        <h2 class=\"mb-4 display-5 text-center\">Contactez-moi !</h2>
      </div>
    </div>
  </div>
  <div class=\"container\">
    <div class=\"row justify-content-lg-center\">
      <div class=\"col-12 col-lg-9\">
        <div class=\"bg-white overflow-hidden\">
          <form action=\"#!\">
            <div class=\"row gy-4 gy-xl-5 p-4 p-xl-5\">
              <div class=\"col-12\">
                <label for=\"fullname\" class=\"form-label\">Votre nom <span class=\"text-danger\">*</span></label>
                <input type=\"text\" class=\"form-control\" id=\"fullname\" name=\"fullname\" value=\"\" required>
              </div>
              <div class=\"col-12 col-md-6\">
                <label for=\"email\" class=\"form-label\">Email <span class=\"text-danger\">*</span></label>
                <div class=\"input-group\">
                  <span class=\"input-group-text\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-envelope\" viewBox=\"0 0 16 16\">
                      <path d=\"M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z\" />
                    </svg>
                  </span>
                  <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" value=\"\" required>
                </div>
              </div>
              <div class=\"col-12 col-md-6\">
                <label for=\"phone\" class=\"form-label\">Numéro de téléphone</label>
                <div class=\"input-group\">
                  <span class=\"input-group-text\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-telephone\" viewBox=\"0 0 16 16\">
                      <path d=\"M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z\" />
                    </svg>
                  </span>
                  <input type=\"tel\" class=\"form-control\" id=\"phone\" name=\"phone\" value=\"\">
                </div>
              </div>
              <div class=\"col-12\">
                <label for=\"message\" class=\"form-label\">Votre message <span class=\"text-danger\">*</span></label>
                <textarea class=\"form-control\" id=\"message\" name=\"message\" rows=\"3\" required></textarea>
              </div>
              <div class=\"col-12\">
                <div class=\"d-grid\">
                  <button class=\"button-color\" type=\"submit\">Envoyer</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
  </div>
<!-- Fin de formulaire de contact -->
  <div class=\"col-md-12 mt-5 mb-3\"><h5>Commentaires</h5></div>
  {% for comment in commentsUser %}
  <div class=\"row mt-5 d-flex align-content-center flex-wrap\">
    <div class=\"col-md-1 d-flex align-content-center flex-wrap\">
      <img class=\"img-fluid roundedImageComment\" src=\"{{asset('images/avatars/' ~ comment.user.avatar)}}\" alt=\"avatar\">
    </div>
    <div class=\"col-md-11 d-flex align-content-center flex-wrap\">
      <span>{{ comment.user.firstname }} &nbsp; {{comment.user.lastname}}</span> &ensp;
      <span>{{ comment.createdAt|date('D d M Y H:i') }}</span>
    </div>
  </div>
  <div class=\"col-md-12 mt-3 mb-5\">{{ comment.content|striptags|raw|nl2br }}</div>
{% else %}
  <div class=\"col-md-12 mt-3 mb-5\">Il n'y pas de commentaires pour l'instant</div>
{% endfor %}

  {#Appel du formulaire#}
  {% if is_granted('ROLE_USER') %}
  <div class=\"container\">
    <div class=\"row mt-5 mb-3\">
      {% include \"comment/commentUser.html.twig\" with{'parentcommentUserForm' : commentUserForm} %}
    </div>
  </div>
  {% endif %}      
</div>
{% endblock %}", "show/readoneGuide.html.twig", "C:\\symfony\\travel_project\\templates\\show\\readoneGuide.html.twig");
    }
}
