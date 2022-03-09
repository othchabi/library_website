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

/* auteur/index.html.twig */
class __TwigTemplate_fceb7cbd106c49d37f4d430b2ca895d9305b994180a3cfb7eea414d73648a73f extends Template
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
        return "layoutgeneral.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auteur/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auteur/index.html.twig"));

        $this->parent = $this->loadTemplate("layoutgeneral.html.twig", "auteur/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Auteurs - bookland";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <section class=\"portfolio-block block-intro\">
        <div class=\"container\">
            <h1 style=\"text-align: left;\">Auteurs</h1>
            <div class=\"card\">
                <div class=\"card-header py-3\">
                    
                    <a class=\"btn btn-primary float-end\">Ajouter auteur</a>

                    
                    
                    
                    <a class=\"btn btn-primary float-end\" href=\"#\" style=\"
    margin-top: 2px;
    margin-right: 10px;
    width: 59px;
\"><i class=\"gg-filters\"></i></a>
                </div>
                <div class=\"card-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table\">
                            <thead>
                            <tr>
                                <th>Nom Prénom</th>
                                <th>Sexe</th>
                                <th>Date naissance</th>
                                <th>Nationalité</th>
                                <th>Détails</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["auteurs"]) || array_key_exists("auteurs", $context) ? $context["auteurs"] : (function () { throw new RuntimeError('Variable "auteurs" does not exist.', 37, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["auteur"]) {
            // line 38
            echo "                                <tr>
                                    <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auteur"], "getNomPrenom", [], "method", false, false, false, 39), "html", null, true);
            echo "</td>
                                    <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auteur"], "getSexe", [], "method", false, false, false, 40), "html", null, true);
            echo "</td>
                                    <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auteur"], "getDateDeNaissance", [], "method", false, false, false, 41), "Y-m-d"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auteur"], "getNationalite", [], "method", false, false, false, 42), "html", null, true);
            echo "</td>
                                    <td>
                                        <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("auteur_show", ["id" => twig_get_attribute($this->env, $this->source, $context["auteur"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\">
                                            <button class=\"btn btn-info btn-sm\" type=\"button\"><i class=\"fa fa-info\"></i>
                                            </button>
                                        </a>
                                    </td>
                                    <td>
                                        <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("auteur_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["auteur"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\">
                                            <button class=\"btn btn-primary btn-sm\" type=\"button\"><i
                                                        class=\"fa fa-edit\"></i></button>
                                        </a>
                                    </td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 57
            echo "                                <tr>
                                    <td colspan=\"6\">no records found</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['auteur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "auteur/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 61,  167 => 57,  155 => 50,  146 => 44,  141 => 42,  137 => 41,  133 => 40,  129 => 39,  126 => 38,  121 => 37,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layoutgeneral.html.twig' %}

{% block title %}Auteurs - bookland{% endblock %}

{% block body %}
    <section class=\"portfolio-block block-intro\">
        <div class=\"container\">
            <h1 style=\"text-align: left;\">Auteurs</h1>
            <div class=\"card\">
                <div class=\"card-header py-3\">
                    
                    <a class=\"btn btn-primary float-end\">Ajouter auteur</a>

                    
                    
                    
                    <a class=\"btn btn-primary float-end\" href=\"#\" style=\"
    margin-top: 2px;
    margin-right: 10px;
    width: 59px;
\"><i class=\"gg-filters\"></i></a>
                </div>
                <div class=\"card-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table\">
                            <thead>
                            <tr>
                                <th>Nom Prénom</th>
                                <th>Sexe</th>
                                <th>Date naissance</th>
                                <th>Nationalité</th>
                                <th>Détails</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for auteur in auteurs %}
                                <tr>
                                    <td>{{ auteur.getNomPrenom() }}</td>
                                    <td>{{ auteur.getSexe() }}</td>
                                    <td>{{ auteur.getDateDeNaissance()|date('Y-m-d') }}</td>
                                    <td>{{ auteur.getNationalite() }}</td>
                                    <td>
                                        <a href=\"{{ path('auteur_show', {'id': auteur.id}) }}\">
                                            <button class=\"btn btn-info btn-sm\" type=\"button\"><i class=\"fa fa-info\"></i>
                                            </button>
                                        </a>
                                    </td>
                                    <td>
                                        <a href=\"{{ path('auteur_edit', {'id': auteur.id}) }}\">
                                            <button class=\"btn btn-primary btn-sm\" type=\"button\"><i
                                                        class=\"fa fa-edit\"></i></button>
                                        </a>
                                    </td>
                                </tr>
                            {% else %}
                                <tr>
                                    <td colspan=\"6\">no records found</td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
", "auteur/index.html.twig", "C:\\Users\\abaio\\bookland\\templates\\auteur\\index.html.twig");
    }
}
