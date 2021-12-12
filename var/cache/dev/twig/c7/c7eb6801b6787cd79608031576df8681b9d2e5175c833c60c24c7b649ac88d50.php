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

/* article.html.twig */
class __TwigTemplate_e638eff1bbc2720d0e5aaeb327618c69f56276960ec09cab7ee7b8e7e54eab8b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "article.html.twig", 1);
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
        echo "    <a href=\"/\">< Home</a>
    <br>
    <h2 style=\"text-align: center\">";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 6, $this->source); })()), "title", [], "any", false, false, false, 6), "html", null, true);
        echo "</h2>
    <br>
    <p><i>Last modified : ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "</i></p>
    <br>
    <p>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 10, $this->source); })()), "content", [], "any", false, false, false, 10), "html", null, true);
        echo "</p>
    ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 11, $this->source); })()), "img", [], "any", false, false, false, 11)) {
            // line 12
            echo "        <img style=\"width: 100%\" src=\"../picture_uploaded/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
            echo ".jpg\">
    ";
        }
        // line 14
        echo "    <br><br>
    <hr>
    <h2 style=\"text-align: center\">Comment</h2>
    <div class=\"form-group\">
        ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_start');
        echo "
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'rest');
        echo "
        <input value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "\" name=\"id\" type=\"hidden\">
        <button type=\"submit\" class=\"btn btn-outline-primary\">Submit</button>
        ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'form_end');
        echo "
        <br><br>
    </div>
    <hr>
    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 27
            echo "        <h4><i style=\"font-weight: 300\">Comment by</i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "name", [], "any", false, false, false, 27), "html", null, true);
            echo "</h4>
        ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "comment", [], "any", false, false, false, 28), "html", null, true);
            echo "
        <form action=\"/removeComment/";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo "\" method=\"post\" style=\"margin-right: 10px\">
            <input value=\"";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 30, $this->source); })()), "html", null, true);
            echo "\" name=\"id\" type=\"hidden\">
            <input type=\"hidden\" name=\"token\" value=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("token" . twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 31))), "html", null, true);
            echo "\"/>
            <button type=\"submit\" style=\"color:red; float: right\" class=\"btn btn-link\"><i>Remove</i></button>
        </form>
        <br>
        <hr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
    <br><br>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 37,  141 => 31,  137 => 30,  133 => 29,  129 => 28,  124 => 27,  120 => 26,  113 => 22,  108 => 20,  104 => 19,  100 => 18,  94 => 14,  88 => 12,  86 => 11,  82 => 10,  77 => 8,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <a href=\"/\">< Home</a>
    <br>
    <h2 style=\"text-align: center\">{{ blog.title }}</h2>
    <br>
    <p><i>Last modified : {{ date }}</i></p>
    <br>
    <p>{{ blog.content }}</p>
    {% if blog.img %}
        <img style=\"width: 100%\" src=\"../picture_uploaded/{{ blog.id }}.jpg\">
    {% endif %}
    <br><br>
    <hr>
    <h2 style=\"text-align: center\">Comment</h2>
    <div class=\"form-group\">
        {{ form_start(form) }}
        {{ form_rest(form) }}
        <input value=\"{{ id }}\" name=\"id\" type=\"hidden\">
        <button type=\"submit\" class=\"btn btn-outline-primary\">Submit</button>
        {{ form_end(form) }}
        <br><br>
    </div>
    <hr>
    {% for comment in comments %}
        <h4><i style=\"font-weight: 300\">Comment by</i> {{ comment.name }}</h4>
        {{ comment.comment }}
        <form action=\"/removeComment/{{ comment.id }}\" method=\"post\" style=\"margin-right: 10px\">
            <input value=\"{{ id }}\" name=\"id\" type=\"hidden\">
            <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('token'~comment.id) }}\"/>
            <button type=\"submit\" style=\"color:red; float: right\" class=\"btn btn-link\"><i>Remove</i></button>
        </form>
        <br>
        <hr>
    {% endfor %}

    <br><br>
{% endblock %}", "article.html.twig", "C:\\wamp64\\www\\partiel_symfony\\templates\\article.html.twig");
    }
}
