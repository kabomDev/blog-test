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

/* hello.html.twig */
class __TwigTemplate_a9fbf634a3b2ab0fbf2405255c52ced9adcda429961878e3f0900ff809f7a065 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hello.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "hello.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Prenoms";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<h1>Hello</1>

\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prenoms"]) || array_key_exists("prenoms", $context) ? $context["prenoms"] : (function () { throw new RuntimeError('Variable "prenoms" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 9
            echo "\t\t<p>";
            echo twig_escape_filter($this->env, $context["p"], "html", null, true);
            echo "</p>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
\t<h2>Notre formateur</h2>
\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formateur"]) || array_key_exists("formateur", $context) ? $context["formateur"] : (function () { throw new RuntimeError('Variable "formateur" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 14
            echo "\t<p>";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "</p>

\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
\t<strong>Prénom:</strong> ";
        // line 18
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formateur"]) || array_key_exists("formateur", $context) ? $context["formateur"] : (function () { throw new RuntimeError('Variable "formateur" does not exist.', 18, $this->source); })()), "prenom", [], "any", false, false, false, 18)), "html", null, true);
        echo "

\t<h2>Liste des élèves (";
        // line 20
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["eleves"]) || array_key_exists("eleves", $context) ? $context["eleves"] : (function () { throw new RuntimeError('Variable "eleves" does not exist.', 20, $this->source); })())), "html", null, true);
        echo ")</h2>

\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["eleves"]) || array_key_exists("eleves", $context) ? $context["eleves"] : (function () { throw new RuntimeError('Variable "eleves" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["eleve"]) {
            // line 23
            echo "\t\t<p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eleve"], "prenom", [], "any", false, false, false, 23), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eleve"], "nom", [], "any", false, false, false, 23)), "html", null, true);
            echo "</p>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eleve'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
\t<h2>Liste des animaux</h2>
\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 28
            echo "\t\t<p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "nom", [], "any", false, false, false, 28), "html", null, true);
            echo "</p>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 30,  146 => 28,  142 => 27,  138 => 25,  127 => 23,  123 => 22,  118 => 20,  113 => 18,  110 => 17,  98 => 14,  94 => 13,  90 => 11,  81 => 9,  77 => 8,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Prenoms{% endblock %}

{% block body %}
\t<h1>Hello</1>

\t{% for p in prenoms %}
\t\t<p>{{p}}</p>
\t{% endfor %}

\t<h2>Notre formateur</h2>
\t{% for key, value in formateur %}
\t<p>{{key}} : {{value}}</p>

\t{% endfor %}

\t<strong>Prénom:</strong> {{formateur.prenom|upper}}

\t<h2>Liste des élèves ({{eleves | length}})</h2>

\t{% for eleve in eleves %}
\t\t<p>{{ eleve.prenom }} {{ eleve.nom | upper }}</p>
\t{% endfor %}

\t<h2>Liste des animaux</h2>
\t{% for product in products %}
\t\t<p>{{product.nom}}</p>
\t{% endfor %}

{% endblock %}", "hello.html.twig", "/Users/kabomyonghoua/Desktop/ang-sym/_symfony/blog-test/templates/hello.html.twig");
    }
}
