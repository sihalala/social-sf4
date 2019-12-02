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

/* micro-post/user-posts.html.twig */
class __TwigTemplate_563ef25c8a12d070f44c5aedca36ff61b1e9772711b66a31e1ffd5ee2cc7bda9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "micro-post/user-posts.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "micro-post/user-posts.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "micro-post/user-posts.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"card-group py-2\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">
                    ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 8, $this->source); })()), "fullName", [], "any", false, false, false, 8), "html", null, true);
        echo "
                    <small class=\"text-muted\">· @";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 9, $this->source); })()), "username", [], "any", false, false, false, 9), "html", null, true);
        echo "</small>
                </h5>

                ";
        // line 12
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") && ((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 12, $this->source); })()) != twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12)))) {
            // line 13
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 13, $this->source); })()), "followers", [], "any", false, false, false, 13), "contains", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13)], "method", false, false, false, 13) == false)) {
                // line 14
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("following_follow", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14)]), "html", null, true);
                echo "\"
                           class=\"btn btn-outline-primary\">Follow</a>
                    ";
            } else {
                // line 17
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("following_unfollow", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17)]), "html", null, true);
                echo "\"
                           class=\"btn btn-outline-danger\">Unfollow</a>
                    ";
            }
            // line 20
            echo "                ";
        }
        // line 21
        echo "            </div>
        </div>
    </div>

    <div class=\"card-group py-2\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h5>";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->transchoice("Followers", twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 28, $this->source); })()), "followers", [], "any", false, false, false, 28))), "html", null, true);
        echo "</h5>
            </div>
            <ul class=\"list-group list-group-flush\">
                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 31, $this->source); })()), "followers", [], "any", false, false, false, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["follower"]) {
            // line 32
            echo "                    <li class=\"list-group-item\">
                        <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("micro_post_user", ["username" => twig_get_attribute($this->env, $this->source,             // line 34
$context["follower"], "username", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\">
                            @";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["follower"], "username", [], "any", false, false, false, 35), "html", null, true);
            echo "
                        </a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['follower'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "            </ul>
        </div>
        <div class=\"card\">
            <div class=\"card-body\">
                <h5>";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->transchoice("Following", twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 43, $this->source); })()), "following", [], "any", false, false, false, 43))), "html", null, true);
        echo "</h5>
            </div>
            <ul class=\"list-group list-group-flush\">
                ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 46, $this->source); })()), "following", [], "any", false, false, false, 46));
        foreach ($context['_seq'] as $context["_key"] => $context["following"]) {
            // line 47
            echo "                    <li class=\"list-group-item\">
                        <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("micro_post_user", ["username" => twig_get_attribute($this->env, $this->source,             // line 49
$context["following"], "username", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\">
                            @";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["following"], "username", [], "any", false, false, false, 50), "html", null, true);
            echo "
                        </a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['following'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "            </ul>
        </div>
    </div>

    ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 58, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 59
            echo "        ";
            echo twig_include($this->env, $context, "micro-post/raw-post.html.twig", ["post" => $context["post"]]);
            echo "

        <small class=\"d-block text-right mt-3\">
            ";
            // line 62
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit", $context["post"])) {
                // line 63
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("micro_post_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 63)]), "html", null, true);
                echo "\">Edit</a>
            ";
            }
            // line 65
            echo "            ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("delete", $context["post"])) {
                // line 66
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("micro_post_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 66)]), "html", null, true);
                echo "\">Delete</a>
            ";
            }
            // line 68
            echo "        </small>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "micro-post/user-posts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 68,  218 => 66,  215 => 65,  209 => 63,  207 => 62,  200 => 59,  183 => 58,  177 => 54,  167 => 50,  163 => 49,  162 => 48,  159 => 47,  155 => 46,  149 => 43,  143 => 39,  133 => 35,  129 => 34,  128 => 33,  125 => 32,  121 => 31,  115 => 28,  106 => 21,  103 => 20,  96 => 17,  89 => 14,  86 => 13,  84 => 12,  78 => 9,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"card-group py-2\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">
                    {{ user.fullName }}
                    <small class=\"text-muted\">· @{{ user.username }}</small>
                </h5>

                {% if is_granted('ROLE_USER') and user != app.user %}
                    {% if user.followers.contains(app.user) == false %}
                        <a href=\"{{ path('following_follow', {'id': user.id}) }}\"
                           class=\"btn btn-outline-primary\">Follow</a>
                    {% else %}
                        <a href=\"{{ path('following_unfollow', {'id': user.id}) }}\"
                           class=\"btn btn-outline-danger\">Unfollow</a>
                    {% endif %}
                {% endif %}
            </div>
        </div>
    </div>

    <div class=\"card-group py-2\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h5>{{ 'Followers'|transchoice(user.followers|length) }}</h5>
            </div>
            <ul class=\"list-group list-group-flush\">
                {% for follower in user.followers %}
                    <li class=\"list-group-item\">
                        <a href=\"{{ path('micro_post_user',
                            {'username': follower.username}) }}\">
                            @{{ follower.username }}
                        </a>
                    </li>
                {% endfor %}
            </ul>
        </div>
        <div class=\"card\">
            <div class=\"card-body\">
                <h5>{{ 'Following'|transchoice(user.following|length) }}</h5>
            </div>
            <ul class=\"list-group list-group-flush\">
                {% for following in user.following %}
                    <li class=\"list-group-item\">
                        <a href=\"{{ path('micro_post_user',
                            {'username': following.username}) }}\">
                            @{{ following.username }}
                        </a>
                    </li>
                {% endfor %}
            </ul>
        </div>
    </div>

    {% for post in posts %}
        {{ include('micro-post/raw-post.html.twig', { 'post': post }) }}

        <small class=\"d-block text-right mt-3\">
            {% if is_granted('edit', post) %}
                <a href=\"{{ path('micro_post_edit', {'id': post.id}) }}\">Edit</a>
            {% endif %}
            {% if is_granted('delete', post) %}
                <a href=\"{{ path('micro_post_delete', {'id': post.id}) }}\">Delete</a>
            {% endif %}
        </small>
    {% endfor %}
{% endblock %}", "micro-post/user-posts.html.twig", "/home/vagrant/social-sf4/templates/micro-post/user-posts.html.twig");
    }
}
