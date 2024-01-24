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
class __TwigTemplate_0f6e6d66887b6aea3bd4cd0bcfe385ce extends Template
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
        return "login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("login.html.twig", "registration/register.html.twig", 1);
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

        // line 4
        echo "  Inscription
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <div class=\"card o-hidden border-0 shadow-lg my-5\">
    <div class=\"card-body p-0\">
      <div class=\"row\">
        <div class=\"col-lg-6 d-none d-lg-block bg-login-image\"></div>
        <div class=\"col-lg-6\">
          <div class=\"p-3\">
            <div class=\"text-center\">
              <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo2.png"), "html", null, true);
        echo "\" alt=\"logo\" class=\"login-logo\" />
            </div>
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "flashes", ["verify_email_error"], "method", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 18
            echo "              <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flash_error"], "html", null, true);
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
            <div class=\"text-center\">
              <h1 class=\"h4 text-gray-900 mb-4\">Créer un compte</h1>
            </div>
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 24, $this->source); })()), 'errors');
        echo "

            ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 26, $this->source); })()), 'form_start');
        echo "
              <div class=\"form-group\">
                  <div class=\"custom-control custom-radio small\">

                      ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 30, $this->source); })()), "status", [], "any", false, false, false, 30), 'label');
        echo "
                      ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 31, $this->source); })()), "status", [], "any", false, false, false, 31), 'widget');
        echo "
                      ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 32, $this->source); })()), "status", [], "any", false, false, false, 32), 'errors');
        echo "
                  </div>
              </div>
            <div class=\"form-group row\">
              <div class=\"col-sm-6 mb-3 mb-sm-0\">
                <input name=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 37, $this->source); })()), "lastname", [], "any", false, false, false, 37)), "html", null, true);
        echo "\" placeholder=\"nom\" class=\"form-control\" />
              </div>
              <div class=\"col-sm-6\">
                <input name=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 40, $this->source); })()), "firstname", [], "any", false, false, false, 40)), "html", null, true);
        echo "\" placeholder=\"prénom\" class=\"form-control\" />
              </div>
            </div>
            <div class=\"form-group row\">
              <div class=\"col-sm-12 mb-3 mb-sm-0\">
              <input name=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 45, $this->source); })()), "address", [], "any", false, false, false, 45)), "html", null, true);
        echo "\" placeholder=\"code postal\" class=\"form-control\" /></div>
            </div>
            <div class=\"form-group row\">
              <div class=\"col-sm-6 mb-3 mb-sm-0\">
                <input name=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 49, $this->source); })()), "zipcode", [], "any", false, false, false, 49)), "html", null, true);
        echo "\" placeholder=\"code postal\" class=\"form-control\" />
              </div>
              <div class=\"col-sm-6\">
                <input name=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 52, $this->source); })()), "city", [], "any", false, false, false, 52)), "html", null, true);
        echo "\" placeholder=\"ville\" class=\"form-control\" />
              </div>
            </div>
            <div class=\"form-group row\">
              <div class=\"col-sm-12 mb-3 mb-sm-0\">
                <input name=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 57, $this->source); })()), "email", [], "any", false, false, false, 57)), "html", null, true);
        echo "\" placeholder=\"email\" class=\"form-control\" />
              </div>
             
            </div>
                        <div class=\"form-group row\">
              <div class=\"col-sm-12 mb-3 mb-sm-0\">
                <input name=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 63, $this->source); })()), "plainPassword", [], "any", false, false, false, 63)), "html", null, true);
        echo "\" placeholder=\"mot de passe\" class=\"form-control\" />
              </div>
             
            </div>

     <div class=\"form-group\">
                    <div class=\"custom-control custom-checkbox small\">
                      <input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck\" name=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 70, $this->source); })()), "agreeTerms", [], "any", false, false, false, 70)), "html", null, true);
        echo "\" />
                      <label class=\"custom-control-label\" for=\"customCheck\">agreeTerms</label>
                    </div>
                  </div>

            <button class=\"btn btn-primary btn-user btn-block\" type=\"submit\">Envoyer</button>

            ";
        // line 77
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 77, $this->source); })()), 'form_end');
        echo "

            <hr />
            <div class=\"text-center\">
              <a class=\"small\" href=\"forgot-password.html\">Forgot Password?</a>
            </div>
            <div class=\"text-center\">
              <a class=\"small\" href=\"register.html\">Create an Account!</a>
            </div>
          </div>
        </div>
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
        return array (  215 => 77,  205 => 70,  195 => 63,  186 => 57,  178 => 52,  172 => 49,  165 => 45,  157 => 40,  151 => 37,  143 => 32,  139 => 31,  135 => 30,  128 => 26,  123 => 24,  117 => 20,  108 => 18,  104 => 17,  99 => 15,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'login.html.twig' %}

{% block title %}
  Inscription
{% endblock %}

{% block body %}
  <div class=\"card o-hidden border-0 shadow-lg my-5\">
    <div class=\"card-body p-0\">
      <div class=\"row\">
        <div class=\"col-lg-6 d-none d-lg-block bg-login-image\"></div>
        <div class=\"col-lg-6\">
          <div class=\"p-3\">
            <div class=\"text-center\">
              <img src=\"{{ asset('images/logo2.png') }}\" alt=\"logo\" class=\"login-logo\" />
            </div>
            {% for flash_error in app.flashes('verify_email_error') %}
              <div class=\"alert alert-danger\" role=\"alert\">{{ flash_error }}</div>
            {% endfor %}

            <div class=\"text-center\">
              <h1 class=\"h4 text-gray-900 mb-4\">Créer un compte</h1>
            </div>
            {{ form_errors(registrationForm) }}

            {{ form_start(registrationForm) }}
              <div class=\"form-group\">
                  <div class=\"custom-control custom-radio small\">

                      {{ form_label(registrationForm.status) }}
                      {{ form_widget(registrationForm.status) }}
                      {{ form_errors(registrationForm.status) }}
                  </div>
              </div>
            <div class=\"form-group row\">
              <div class=\"col-sm-6 mb-3 mb-sm-0\">
                <input name=\"{{ field_name(registrationForm.lastname) }}\" placeholder=\"nom\" class=\"form-control\" />
              </div>
              <div class=\"col-sm-6\">
                <input name=\"{{ field_name(registrationForm.firstname) }}\" placeholder=\"prénom\" class=\"form-control\" />
              </div>
            </div>
            <div class=\"form-group row\">
              <div class=\"col-sm-12 mb-3 mb-sm-0\">
              <input name=\"{{ field_name(registrationForm.address) }}\" placeholder=\"code postal\" class=\"form-control\" /></div>
            </div>
            <div class=\"form-group row\">
              <div class=\"col-sm-6 mb-3 mb-sm-0\">
                <input name=\"{{ field_name(registrationForm.zipcode) }}\" placeholder=\"code postal\" class=\"form-control\" />
              </div>
              <div class=\"col-sm-6\">
                <input name=\"{{ field_name(registrationForm.city) }}\" placeholder=\"ville\" class=\"form-control\" />
              </div>
            </div>
            <div class=\"form-group row\">
              <div class=\"col-sm-12 mb-3 mb-sm-0\">
                <input name=\"{{ field_name(registrationForm.email) }}\" placeholder=\"email\" class=\"form-control\" />
              </div>
             
            </div>
                        <div class=\"form-group row\">
              <div class=\"col-sm-12 mb-3 mb-sm-0\">
                <input name=\"{{ field_name(registrationForm.plainPassword) }}\" placeholder=\"mot de passe\" class=\"form-control\" />
              </div>
             
            </div>

     <div class=\"form-group\">
                    <div class=\"custom-control custom-checkbox small\">
                      <input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck\" name=\"{{ field_name(registrationForm.agreeTerms) }}\" />
                      <label class=\"custom-control-label\" for=\"customCheck\">agreeTerms</label>
                    </div>
                  </div>

            <button class=\"btn btn-primary btn-user btn-block\" type=\"submit\">Envoyer</button>

            {{ form_end(registrationForm) }}

            <hr />
            <div class=\"text-center\">
              <a class=\"small\" href=\"forgot-password.html\">Forgot Password?</a>
            </div>
            <div class=\"text-center\">
              <a class=\"small\" href=\"register.html\">Create an Account!</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
{% endblock %}
", "registration/register.html.twig", "C:\\wamp64\\www\\kardini_app\\templates\\registration\\register.html.twig");
    }
}
