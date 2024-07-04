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

/* comment/comment.html.twig */
class __TwigTemplate_4d224f9691284961f1e344b9f3ebd382 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comment/comment.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comment/comment.html.twig"));

        // line 1
        echo "<div class=\"row\">
    <div class=\"col-md-4\">
        <button type=\"button\" class=\"button-color btn-info\" id=\"toggle-parent-comment-form\">Laisser un commentaire</button>
    </div>
    <div class=\"col-md-4\"></div>
    <div class=\"col-md-4\"></div>
</div>
<div  class=\"parent-comment-form\" style=\"height: 0; overflow: hidden;\">
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 9, $this->source); })()), 'form_start');
        echo "
    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 10, $this->source); })()), 'widget');
        echo "
    <button type=\"submit\" class=\"button-color btn-sm btn-success mt-3 mb-3\">Envoyer votre commentaire</button>
    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 12, $this->source); })()), 'form_end');
        echo "
</div>

<script>
    // Ouvrir ou fermer le formulaire de commentaire
    document.getElementById('toggle-parent-comment-form').addEventListener('click', function () {
        var commentForm = document.querySelector('.parent-comment-form');
            if (commentForm) {
                var isFormVisible = commentForm.style.height === 'auto';
                commentForm.style.height = isFormVisible ? '0' : 'auto';
                }
            });

    // Réinitialiser le formulaire après la soumission
    document.addEventListener('submit', function (event) {
        if (event.target.classList.contains('parent-comment-form')) {
            var contentField = document.getElementById('comment-form-content');
                if (contentField) {
                        contentField.value = '';
                    }
                }
            });
</script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "comment/comment.html.twig";
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
        return array (  62 => 12,  57 => 10,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
    <div class=\"col-md-4\">
        <button type=\"button\" class=\"button-color btn-info\" id=\"toggle-parent-comment-form\">Laisser un commentaire</button>
    </div>
    <div class=\"col-md-4\"></div>
    <div class=\"col-md-4\"></div>
</div>
<div  class=\"parent-comment-form\" style=\"height: 0; overflow: hidden;\">
    {{ form_start(commentForm) }}
    {{ form_widget(commentForm) }}
    <button type=\"submit\" class=\"button-color btn-sm btn-success mt-3 mb-3\">Envoyer votre commentaire</button>
    {{ form_end(commentForm) }}
</div>

<script>
    // Ouvrir ou fermer le formulaire de commentaire
    document.getElementById('toggle-parent-comment-form').addEventListener('click', function () {
        var commentForm = document.querySelector('.parent-comment-form');
            if (commentForm) {
                var isFormVisible = commentForm.style.height === 'auto';
                commentForm.style.height = isFormVisible ? '0' : 'auto';
                }
            });

    // Réinitialiser le formulaire après la soumission
    document.addEventListener('submit', function (event) {
        if (event.target.classList.contains('parent-comment-form')) {
            var contentField = document.getElementById('comment-form-content');
                if (contentField) {
                        contentField.value = '';
                    }
                }
            });
</script>", "comment/comment.html.twig", "C:\\symfony\\travel_project\\templates\\comment\\comment.html.twig");
    }
}
