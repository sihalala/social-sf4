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

/* micro-post/raw-post.html.twig */
class __TwigTemplate_e6847094e7324a8df1c224e0055662b1fa8b43478dde24b23c258588486fe56f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "micro-post/raw-post.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "micro-post/raw-post.html.twig"));

        // line 1
        echo "<div class=\"media text-muted pt-3\">
    ";
        // line 2
        $context["initials"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 2, $this->source); })()), "user", [], "any", false, false, false, 2), "fullName", [], "any", false, false, false, 2), " ");
        // line 3
        echo "    <img data-src=\"holder.js/32x32?text=";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, (isset($context["initials"]) || array_key_exists("initials", $context) ? $context["initials"] : (function () { throw new RuntimeError('Variable "initials" does not exist.', 3, $this->source); })()), 0, [], "any", false, false, false, 3)), "html", null, true);
        echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, (isset($context["initials"]) || array_key_exists("initials", $context) ? $context["initials"] : (function () { throw new RuntimeError('Variable "initials" does not exist.', 3, $this->source); })()), 1, [], "any", false, false, false, 3)), "html", null, true);
        echo "&bg=e83e8c&fg=fff&size=8\" alt=\"\" class=\"mr-2 rounded\">
    <p class=\"media-body pb-3 mb-0 small lh-125 border-bottom border-gray\">
        <span class=\"d-block\">
            <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("micro_post_user", ["username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 6, $this->source); })()), "user", [], "any", false, false, false, 6), "username", [], "any", false, false, false, 6)]), "html", null, true);
        echo "\">
                <strong class=\"text-gray-dark\">@";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7), "username", [], "any", false, false, false, 7), "html", null, true);
        echo "</strong>
            </a>
            <small>· ";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 9, $this->source); })()), "time", [], "any", false, false, false, 9), "d/m/Y"), "html", null, true);
        echo "</small></span>
        <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("micro_post_post", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 10, $this->source); })()), "text", [], "any", false, false, false, 10), "html", null, true);
        echo "</a>
    </p>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "micro-post/raw-post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 10,  65 => 9,  60 => 7,  56 => 6,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"media text-muted pt-3\">
    {% set initials = post.user.fullName|split(' ') %}
    <img data-src=\"holder.js/32x32?text={{ attribute(initials, 0)|first }}{{ attribute(initials, 1)|first }}&bg=e83e8c&fg=fff&size=8\" alt=\"\" class=\"mr-2 rounded\">
    <p class=\"media-body pb-3 mb-0 small lh-125 border-bottom border-gray\">
        <span class=\"d-block\">
            <a href=\"{{ path('micro_post_user', {'username': post.user.username}) }}\">
                <strong class=\"text-gray-dark\">@{{ post.user.username }}</strong>
            </a>
            <small>· {{ post.time|date(\"d/m/Y\") }}</small></span>
        <a href=\"{{ path('micro_post_post', {'id': post.id }) }}\">{{ post.text }}</a>
    </p>
</div>", "micro-post/raw-post.html.twig", "/home/vagrant/social-sf4/templates/micro-post/raw-post.html.twig");
    }
}
