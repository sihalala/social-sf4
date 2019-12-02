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

/* base.html.twig */
class __TwigTemplate_0b5cc534be2146d4fe986d958c643060c7596b519ab3e53f64b26cde25e2ecc0 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "</head>
<body class=\"bg-light\">

<nav class=\"navbar navbar-dark navbar-expand-md sticky-top bg-dark p-0\">
    <a class=\"navbar-brand col-sm-3 col-md-2 mr-0\"
       href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("micro_post_index");
        echo "\">Micro Post App</a>
    <div class=\"w-100 order-1 order-md-0\">
        <ul class=\"navbar-nav px-3\">
            ";
        // line 19
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 20
            echo "                <li class=\"nav-item text-nowrap\">
                    <a class=\"nav-link\" href=\"";
            // line 21
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("micro_post_add");
            echo "\">
                        ";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add new"), "html", null, true);
            echo "
                    </a>
                </li>
            ";
        }
        // line 26
        echo "        </ul>
    </div>

    <div class=\"order-2 order-md-1\">
        <ul class=\"navbar-nav px-3\">
            ";
        // line 31
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 32
            echo "                <li class=\"nav-item text-nowrap border-right border-secondary\">
                    <a class=\"nav-link\" href=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("notification_all");
            echo "\">
                        ";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Notifications"), "html", null, true);
            echo "
                        <span class=\"badge badge-light\" id=\"notification-count\">
                            <i class=\"fa fa-circle fa-circle-o-notch fa-spin\"></i>
                        </span>
                    </a>
                </li>
                <li class=\"nav-item text-nowrap\">
                    <a class=\"nav-link\"
                       href=\"#\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42), "fullName", [], "any", false, false, false, 42), "html", null, true);
            echo "</a>
                </li>
                <li class=\"nav-item text-nowrap\">
                    <a class=\"nav-link\"
                       href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\LogoutUrlExtension']->getLogoutPath(), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sign out"), "html", null, true);
            echo "</a>
                </li>
            ";
        } else {
            // line 49
            echo "                <li class=\"nav-item text-nowrap\">
                    <a class=\"nav-link\"
                       href=\"";
            // line 51
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sign in"), "html", null, true);
            echo "</a>
                </li>
            ";
        }
        // line 54
        echo "        </ul>
    </div>
</nav>

<main role=\"main\" class=\"container\">
    <div class=\"my-3 p-3 bg-white rounded box-shadow\">
        ";
        // line 60
        $this->displayBlock('body', $context, $blocks);
        // line 62
        echo "    </div>
</main>
";
        // line 64
        $this->displayBlock('javascripts', $context, $blocks);
        // line 87
        echo "</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/app.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\"
              href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 60
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 61
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 64
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 65
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/app.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 67
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 68
            echo "    <script>
        function fetchNotificationCount() {
            fetch(
                '";
            // line 71
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("notification_unread");
            echo "',
                {'credentials': 'include'}
            ).then(function (response) {
                response.json().then(function (json) {
                    document.getElementById('notification-count').innerText = json.count;
                    setTimeout(fetchNotificationCount, 5000);
                });
            }).catch(function (reason) {

            });
        }

        fetchNotificationCount();
    </script>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 71,  252 => 68,  250 => 67,  244 => 65,  234 => 64,  224 => 61,  214 => 60,  199 => 7,  189 => 6,  170 => 5,  158 => 87,  156 => 64,  152 => 62,  150 => 60,  142 => 54,  134 => 51,  130 => 49,  122 => 46,  115 => 42,  104 => 34,  100 => 33,  97 => 32,  95 => 31,  88 => 26,  81 => 22,  77 => 21,  74 => 20,  72 => 19,  66 => 16,  59 => 11,  57 => 6,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('build/css/app.css') }}\">
        <link rel=\"stylesheet\"
              href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    {% endblock %}
</head>
<body class=\"bg-light\">

<nav class=\"navbar navbar-dark navbar-expand-md sticky-top bg-dark p-0\">
    <a class=\"navbar-brand col-sm-3 col-md-2 mr-0\"
       href=\"{{ path('micro_post_index') }}\">Micro Post App</a>
    <div class=\"w-100 order-1 order-md-0\">
        <ul class=\"navbar-nav px-3\">
            {% if is_granted('ROLE_USER') %}
                <li class=\"nav-item text-nowrap\">
                    <a class=\"nav-link\" href=\"{{ path('micro_post_add') }}\">
                        {{ 'Add new'|trans }}
                    </a>
                </li>
            {% endif %}
        </ul>
    </div>

    <div class=\"order-2 order-md-1\">
        <ul class=\"navbar-nav px-3\">
            {% if is_granted('ROLE_USER') %}
                <li class=\"nav-item text-nowrap border-right border-secondary\">
                    <a class=\"nav-link\" href=\"{{ path('notification_all') }}\">
                        {{ 'Notifications'|trans }}
                        <span class=\"badge badge-light\" id=\"notification-count\">
                            <i class=\"fa fa-circle fa-circle-o-notch fa-spin\"></i>
                        </span>
                    </a>
                </li>
                <li class=\"nav-item text-nowrap\">
                    <a class=\"nav-link\"
                       href=\"#\">{{ app.user.fullName }}</a>
                </li>
                <li class=\"nav-item text-nowrap\">
                    <a class=\"nav-link\"
                       href=\"{{ logout_path() }}\">{{ 'Sign out'|trans }}</a>
                </li>
            {% else %}
                <li class=\"nav-item text-nowrap\">
                    <a class=\"nav-link\"
                       href=\"{{ path('security_login') }}\">{{ 'Sign in'|trans }}</a>
                </li>
            {% endif %}
        </ul>
    </div>
</nav>

<main role=\"main\" class=\"container\">
    <div class=\"my-3 p-3 bg-white rounded box-shadow\">
        {% block body %}
        {% endblock %}
    </div>
</main>
{% block javascripts %}
    <script src=\"{{ asset('build/js/app.js') }}\"></script>

    {% if is_granted('ROLE_USER') %}
    <script>
        function fetchNotificationCount() {
            fetch(
                '{{ path('notification_unread') }}',
                {'credentials': 'include'}
            ).then(function (response) {
                response.json().then(function (json) {
                    document.getElementById('notification-count').innerText = json.count;
                    setTimeout(fetchNotificationCount, 5000);
                });
            }).catch(function (reason) {

            });
        }

        fetchNotificationCount();
    </script>
    {% endif %}
{% endblock %}
</body>
</html>
", "base.html.twig", "/home/vagrant/social-sf4/templates/base.html.twig");
    }
}
