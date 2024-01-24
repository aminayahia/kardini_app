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

/* admin/index.html.twig */
class __TwigTemplate_d5c8665c5c5c21ab206fb06eb6be43c5 extends Template
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
            'PageTitle' => [$this, 'block_PageTitle'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent = $this->loadTemplate("template.html.twig", "admin/index.html.twig", 1);
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

        echo "to do page";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"container-fluid\">

        <!-- Page Heading -->
        <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
            <h1 class=\"h3 mb-0 text-gray-800\">  ";
        // line 9
        $this->displayBlock('PageTitle', $context, $blocks);
        echo "</h1>

        </div>

        <!-- Content Row -->
        <div class=\"row\">

            <!-- Earnings (Monthly) Card Example -->
            <div class=\"col-xl-3 col-md-6 mb-4\">
                <div class=\"card border-left-primary shadow h-100 py-2\">
                    <div class=\"card-body\">
                        <div class=\"row no-gutters align-items-center\">
                            <div class=\"col mr-2\">
                                <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                                    Nombre des clients</div>
                                <div class=\"h5 mb-0 font-weight-bold text-gray-800\">";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["clientCount"]) || array_key_exists("clientCount", $context) ? $context["clientCount"] : (function () { throw new RuntimeError('Variable "clientCount" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"col-auto\">
                                <i class=\"fas fa-calendar fa-2x text-gray-300\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class=\"col-xl-3 col-md-6 mb-4\">
                <div class=\"card border-left-success shadow h-100 py-2\">
                    <div class=\"card-body\">
                        <div class=\"row no-gutters align-items-center\">
                            <div class=\"col mr-2\">
                                <div class=\"text-xs font-weight-bold text-success text-uppercase mb-1\">
                                    Nombre des vendeurs</div>
                                <div class=\"h5 mb-0 font-weight-bold text-gray-800\">";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["vendeurCount"]) || array_key_exists("vendeurCount", $context) ? $context["vendeurCount"] : (function () { throw new RuntimeError('Variable "vendeurCount" does not exist.', 42, $this->source); })()), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"col-auto\">
                                <i class=\"fas fa-dollar-sign fa-2x text-gray-300\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class=\"col-xl-3 col-md-6 mb-4\">
                <div class=\"card border-left-info shadow h-100 py-2\">
                    <div class=\"card-body\">
                        <div class=\"row no-gutters align-items-center\">
                            <div class=\"col mr-2\">
                                <div class=\"text-xs font-weight-bold text-info text-uppercase mb-1\">Tasks
                                </div>
                                <div class=\"row no-gutters align-items-center\">
                                    <div class=\"col-auto\">
                                        <div class=\"h5 mb-0 mr-3 font-weight-bold text-gray-800\">50%</div>
                                    </div>
                                    <div class=\"col\">
                                        <div class=\"progress progress-sm mr-2\">
                                            <div class=\"progress-bar bg-info\" role=\"progressbar\"
                                                 style=\"width: 50%\" aria-valuenow=\"50\" aria-valuemin=\"0\"
                                                 aria-valuemax=\"100\"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-auto\">
                                <i class=\"fas fa-clipboard-list fa-2x text-gray-300\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class=\"col-xl-3 col-md-6 mb-4\">
                <div class=\"card border-left-warning shadow h-100 py-2\">
                    <div class=\"card-body\">
                        <div class=\"row no-gutters align-items-center\">
                            <div class=\"col mr-2\">
                                <div class=\"text-xs font-weight-bold text-warning text-uppercase mb-1\">
                                    Pending Requests</div>
                                <div class=\"h5 mb-0 font-weight-bold text-gray-800\">18</div>
                            </div>
                            <div class=\"col-auto\">
                                <i class=\"fas fa-comments fa-2x text-gray-300\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Row -->


        <!-- Content Row -->
        <div class=\"row\">


                <!-- Illustrations -->
                <div class=\"card shadow mb-4\">
                    <div class=\"card-header py-3\">
                        <h6 class=\"m-0 font-weight-bold text-primary\">Illustrations</h6>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"text-center\">
                            <img class=\"img-fluid px-3 px-sm-4 mt-3 mb-4\" style=\"width: 25rem;\"
                                 src=\"img/undraw_posting_photo.svg\" alt=\"...\">
                        </div>
                        <p>Add some quality, svg illustrations to your project courtesy of <a
                                    target=\"_blank\" rel=\"nofollow\" href=\"https://undraw.co/\">unDraw</a>, a
                            constantly updated collection of beautiful svg images that you can use
                            completely free and without attribution!</p>
                        <a target=\"_blank\" rel=\"nofollow\" href=\"https://undraw.co/\">Browse Illustrations on
                            unDraw &rarr;</a>
                    </div>
                </div>

                <!-- Approach -->
                <div class=\"card shadow mb-4\">
                    <div class=\"card-header py-3\">
                        <h6 class=\"m-0 font-weight-bold text-primary\">Development Approach</h6>
                    </div>
                    <div class=\"card-body\">
                        <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce
                            CSS bloat and poor page performance. Custom CSS classes are used to create
                            custom components and custom utility classes.</p>
                        <p class=\"mb-0\">Before working with this theme, you should become familiar with the
                            Bootstrap framework, especially the utility classes.</p>
                    </div>
                </div>

            </div>


    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_PageTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "PageTitle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "PageTitle"));

        echo "Dashboards";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/index.html.twig";
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
        return array (  248 => 9,  135 => 42,  114 => 24,  96 => 9,  89 => 4,  79 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'template.html.twig' %}
{% block title %}to do page{% endblock %}
{% block body %}

    <div class=\"container-fluid\">

        <!-- Page Heading -->
        <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
            <h1 class=\"h3 mb-0 text-gray-800\">  {% block PageTitle %}Dashboards{% endblock %}</h1>

        </div>

        <!-- Content Row -->
        <div class=\"row\">

            <!-- Earnings (Monthly) Card Example -->
            <div class=\"col-xl-3 col-md-6 mb-4\">
                <div class=\"card border-left-primary shadow h-100 py-2\">
                    <div class=\"card-body\">
                        <div class=\"row no-gutters align-items-center\">
                            <div class=\"col mr-2\">
                                <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                                    Nombre des clients</div>
                                <div class=\"h5 mb-0 font-weight-bold text-gray-800\">{{clientCount}}</div>
                            </div>
                            <div class=\"col-auto\">
                                <i class=\"fas fa-calendar fa-2x text-gray-300\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class=\"col-xl-3 col-md-6 mb-4\">
                <div class=\"card border-left-success shadow h-100 py-2\">
                    <div class=\"card-body\">
                        <div class=\"row no-gutters align-items-center\">
                            <div class=\"col mr-2\">
                                <div class=\"text-xs font-weight-bold text-success text-uppercase mb-1\">
                                    Nombre des vendeurs</div>
                                <div class=\"h5 mb-0 font-weight-bold text-gray-800\">{{vendeurCount}}</div>
                            </div>
                            <div class=\"col-auto\">
                                <i class=\"fas fa-dollar-sign fa-2x text-gray-300\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class=\"col-xl-3 col-md-6 mb-4\">
                <div class=\"card border-left-info shadow h-100 py-2\">
                    <div class=\"card-body\">
                        <div class=\"row no-gutters align-items-center\">
                            <div class=\"col mr-2\">
                                <div class=\"text-xs font-weight-bold text-info text-uppercase mb-1\">Tasks
                                </div>
                                <div class=\"row no-gutters align-items-center\">
                                    <div class=\"col-auto\">
                                        <div class=\"h5 mb-0 mr-3 font-weight-bold text-gray-800\">50%</div>
                                    </div>
                                    <div class=\"col\">
                                        <div class=\"progress progress-sm mr-2\">
                                            <div class=\"progress-bar bg-info\" role=\"progressbar\"
                                                 style=\"width: 50%\" aria-valuenow=\"50\" aria-valuemin=\"0\"
                                                 aria-valuemax=\"100\"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-auto\">
                                <i class=\"fas fa-clipboard-list fa-2x text-gray-300\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class=\"col-xl-3 col-md-6 mb-4\">
                <div class=\"card border-left-warning shadow h-100 py-2\">
                    <div class=\"card-body\">
                        <div class=\"row no-gutters align-items-center\">
                            <div class=\"col mr-2\">
                                <div class=\"text-xs font-weight-bold text-warning text-uppercase mb-1\">
                                    Pending Requests</div>
                                <div class=\"h5 mb-0 font-weight-bold text-gray-800\">18</div>
                            </div>
                            <div class=\"col-auto\">
                                <i class=\"fas fa-comments fa-2x text-gray-300\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Row -->


        <!-- Content Row -->
        <div class=\"row\">


                <!-- Illustrations -->
                <div class=\"card shadow mb-4\">
                    <div class=\"card-header py-3\">
                        <h6 class=\"m-0 font-weight-bold text-primary\">Illustrations</h6>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"text-center\">
                            <img class=\"img-fluid px-3 px-sm-4 mt-3 mb-4\" style=\"width: 25rem;\"
                                 src=\"img/undraw_posting_photo.svg\" alt=\"...\">
                        </div>
                        <p>Add some quality, svg illustrations to your project courtesy of <a
                                    target=\"_blank\" rel=\"nofollow\" href=\"https://undraw.co/\">unDraw</a>, a
                            constantly updated collection of beautiful svg images that you can use
                            completely free and without attribution!</p>
                        <a target=\"_blank\" rel=\"nofollow\" href=\"https://undraw.co/\">Browse Illustrations on
                            unDraw &rarr;</a>
                    </div>
                </div>

                <!-- Approach -->
                <div class=\"card shadow mb-4\">
                    <div class=\"card-header py-3\">
                        <h6 class=\"m-0 font-weight-bold text-primary\">Development Approach</h6>
                    </div>
                    <div class=\"card-body\">
                        <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce
                            CSS bloat and poor page performance. Custom CSS classes are used to create
                            custom components and custom utility classes.</p>
                        <p class=\"mb-0\">Before working with this theme, you should become familiar with the
                            Bootstrap framework, especially the utility classes.</p>
                    </div>
                </div>

            </div>


    </div>
{% endblock %}
", "admin/index.html.twig", "C:\\wamp64\\www\\kardini_app\\templates\\admin\\index.html.twig");
    }
}
