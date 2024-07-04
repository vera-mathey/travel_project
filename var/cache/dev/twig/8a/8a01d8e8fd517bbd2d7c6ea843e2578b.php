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

/* elements/footer.html.twig */
class __TwigTemplate_4a5f3130afbb60d315f8d9118884fac9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elements/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elements/footer.html.twig"));

        // line 1
        echo "  <footer class=\"text-center text-lg-start footer\">
    <div class=\"container\">
      <section class=\"p-3 pt-0 text-black\">
        <div class=\"row d-flex align-items-center\">
          <div class=\"col-md-12 col-lg-12 text-center\">
            <div class=\"p-3\">
              © Création du site :
              <a class=\"text-black\" href=\"https://www.linkedin.com/in/vera-mathey\" target=\"_blank\">Vera Mathey</a>
            </div>

          </div>
        </div>
      </section>
    </div>
  </div>
  </footer>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "elements/footer.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("  <footer class=\"text-center text-lg-start footer\">
    <div class=\"container\">
      <section class=\"p-3 pt-0 text-black\">
        <div class=\"row d-flex align-items-center\">
          <div class=\"col-md-12 col-lg-12 text-center\">
            <div class=\"p-3\">
              © Création du site :
              <a class=\"text-black\" href=\"https://www.linkedin.com/in/vera-mathey\" target=\"_blank\">Vera Mathey</a>
            </div>

          </div>
        </div>
      </section>
    </div>
  </div>
  </footer>", "elements/footer.html.twig", "C:\\symfony\\travel_project\\templates\\elements\\footer.html.twig");
    }
}
