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

/* index.html.twig */
class __TwigTemplate_03a809b7e803f1e37b01e1041cffbc525c682b4013386899fb720d30d7c5ba7b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
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
        echo "    <h1>Article List</h1>
    <br>
        <div class=\"accordion\" id=\"accordionExample\">
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blogs"]) || array_key_exists("blogs", $context) ? $context["blogs"] : (function () { throw new RuntimeError('Variable "blogs" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 8
            echo "            <div class=\"card\">
                <div class=\"card-header\" id=\"heading";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "id", [], "any", false, false, false, 9), "html", null, true);
            echo "\">
                    <h5>
                        <form action=\"/article/";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "id", [], "any", false, false, false, 11), "html", null, true);
            echo "\" method=\"post\" style=\"display: inline\">
                            <input type=\"hidden\" name=\"id\" value=\"";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "id", [], "any", false, false, false, 12), "html", null, true);
            echo "\">
                            <button type=\"submit\" style=\"outline: none; background: none; border: none\" class=\"btn-link\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "title", [], "any", false, false, false, 13), "html", null, true);
            echo "</button>
                        </form>

                        <span style=\"float: right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapse";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "id", [], "any", false, false, false, 16), "html", null, true);
            echo "\" aria-expanded=\"true\" aria-controls=\"collapse";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "id", [], "any", false, false, false, 16), "html", null, true);
            echo "\">
                            •••
                        </span>
                    </h5>
                    <img src=\"./picture_uploaded/";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "img", [], "any", false, false, false, 20), "html", null, true);
            echo "\" style=\"width: 100%; height: 400px; object-fit: cover;\">
                </div>
                <div id=\"collapse";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "id", [], "any", false, false, false, 22), "html", null, true);
            echo "\" class=\"collapse\" data-parent=\"#accordionExample\">
                    <div class=\"card-body\" style=\"display: inline-flex\">
                        <form action=\"/editBlog/";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo "\" method=\"post\" style=\"margin-right: 10px\">
                            <input type=\"hidden\" name=\"id\" value=\"";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "\">
                            <button type=\"submit\" class=\"btn btn-outline-secondary\">Edit</button>
                        </form>
                        <form action=\"/removeBlog/";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "\" method=\"post\" style=\"margin-right: 10px\">
                            <input type=\"hidden\" name=\"token\" value=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("token" . twig_get_attribute($this->env, $this->source, $context["blog"], "id", [], "any", false, false, false, 29))), "html", null, true);
            echo "\"/>
                            <button type=\"submit\" class=\"btn btn-outline-danger\">Remove</button>
                        </form>
                    </div>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </div>
    <br>
    <a href=\"/addBlog\"><button class=\"btn btn-outline-primary\">Add new article</button></a>
    <br><br>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 36,  132 => 29,  128 => 28,  122 => 25,  118 => 24,  113 => 22,  108 => 20,  99 => 16,  93 => 13,  89 => 12,  85 => 11,  80 => 9,  77 => 8,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Article List</h1>
    <br>
        <div class=\"accordion\" id=\"accordionExample\">
            {% for blog in blogs %}
            <div class=\"card\">
                <div class=\"card-header\" id=\"heading{{ blog.id }}\">
                    <h5>
                        <form action=\"/article/{{ blog.id }}\" method=\"post\" style=\"display: inline\">
                            <input type=\"hidden\" name=\"id\" value=\"{{ blog.id }}\">
                            <button type=\"submit\" style=\"outline: none; background: none; border: none\" class=\"btn-link\">{{ blog.title }}</button>
                        </form>

                        <span style=\"float: right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapse{{ blog.id }}\" aria-expanded=\"true\" aria-controls=\"collapse{{ blog.id }}\">
                            •••
                        </span>
                    </h5>
                    <img src=\"./picture_uploaded/{{ blog.img }}\" style=\"width: 100%; height: 400px; object-fit: cover;\">
                </div>
                <div id=\"collapse{{ blog.id }}\" class=\"collapse\" data-parent=\"#accordionExample\">
                    <div class=\"card-body\" style=\"display: inline-flex\">
                        <form action=\"/editBlog/{{ blog.id }}\" method=\"post\" style=\"margin-right: 10px\">
                            <input type=\"hidden\" name=\"id\" value=\"{{ blog.id }}\">
                            <button type=\"submit\" class=\"btn btn-outline-secondary\">Edit</button>
                        </form>
                        <form action=\"/removeBlog/{{ blog.id }}\" method=\"post\" style=\"margin-right: 10px\">
                            <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('token'~blog.id) }}\"/>
                            <button type=\"submit\" class=\"btn btn-outline-danger\">Remove</button>
                        </form>
                    </div>
                </div>
            </div>
            {% endfor %}
        </div>
    <br>
    <a href=\"/addBlog\"><button class=\"btn btn-outline-primary\">Add new article</button></a>
    <br><br>
{% endblock %}", "index.html.twig", "C:\\wamp64\\www\\partiel_symfony\\templates\\index.html.twig");
    }
}
