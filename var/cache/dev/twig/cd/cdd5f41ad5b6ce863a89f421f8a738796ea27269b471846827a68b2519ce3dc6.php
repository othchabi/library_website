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

/* auteurs.html.twig */
class __TwigTemplate_ce0f4f4d42f9c487377af88fe0c42d1e9ad375ed263e66e6dff55a58f464a0d5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'contenu' => [$this, 'block_contenu'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auteurs.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auteurs.html.twig"));

        $this->parent = $this->loadTemplate("layoutgeneral.html.twig", "auteurs.html.twig", 1);
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

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " : Genres - bookland
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_contenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        // line 9
        echo "    <section class=\"portfolio-block block-intro\">
        <div class=\"container\">
            <h1 style=\"text-align: left;\">Auteurs</h1>
            <div class=\"card\">
                <div class=\"card-header py-3\"><a class=\"btn btn-primary float-end\" role=\"button\" data-bs-toggle=\"modal\"
                                                 href=\"#\" data-bs-target=\"\">Ajouter auteur</a>
                    ";
        // line 18
        echo "                    <div id=\"detailsAuteurModal\" class=\"modal fade\" role=\"dialog\" tabindex=\"-1\">
                        <div class=\"modal-dialog\" role=\"document\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <h4 class=\"modal-title\">Détails auteur</h4>
                                    <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\"
                                            aria-label=\"Close\"></button>
                                </div>
                                <div class=\"modal-body\"></div>
                                <div class=\"modal-footer\">
                                    <button class=\"btn btn-light\" type=\"button\" data-bs-dismiss=\"modal\">Fermer</button>
                                </div>
                            </div>
                        </div>
                    </div>
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
        // line 54
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["auteurs"]) || array_key_exists("auteurs", $context) ? $context["auteurs"] : (function () { throw new RuntimeError('Variable "auteurs" does not exist.', 54, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["auteur"]) {
            // line 55
            echo "                                <tr>
                                    <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auteur"], "getNomPrenom", [], "method", false, false, false, 56), "html", null, true);
            echo "</td>
                                    <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auteur"], "getSexe", [], "method", false, false, false, 57), "html", null, true);
            echo "</td>
                                    <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auteur"], "getDateDeNaissance", [], "method", false, false, false, 58), "Y-m-d"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auteur"], "getNationalite", [], "method", false, false, false, 59), "html", null, true);
            echo "</td>
                                    <td>
                                        <a class=\"btn btn-info btn-sm\" role=\"button\" data-bs-toggle=\"modal\"
                                           href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("auteur", ["id" => twig_get_attribute($this->env, $this->source, $context["auteur"], "id", [], "any", false, false, false, 62)]), "html", null, true);
            echo "\" data-bs-target=\"#detailsAuteurModal\">
                                            <i class=\"fas fa-info\"></i>
                                        </a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['auteur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
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
        return "auteurs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 68,  158 => 62,  152 => 59,  148 => 58,  144 => 57,  140 => 56,  137 => 55,  132 => 54,  100 => 18,  92 => 9,  82 => 8,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layoutgeneral.html.twig\" %}

{% block title %}
    {{ parent() }} : Genres - bookland
{% endblock %}


{% block contenu %}
    <section class=\"portfolio-block block-intro\">
        <div class=\"container\">
            <h1 style=\"text-align: left;\">Auteurs</h1>
            <div class=\"card\">
                <div class=\"card-header py-3\"><a class=\"btn btn-primary float-end\" role=\"button\" data-bs-toggle=\"modal\"
                                                 href=\"#\" data-bs-target=\"\">Ajouter auteur</a>
                    {#
                    Modal pour afficher les détails d'un auteur
                    #}
                    <div id=\"detailsAuteurModal\" class=\"modal fade\" role=\"dialog\" tabindex=\"-1\">
                        <div class=\"modal-dialog\" role=\"document\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <h4 class=\"modal-title\">Détails auteur</h4>
                                    <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\"
                                            aria-label=\"Close\"></button>
                                </div>
                                <div class=\"modal-body\"></div>
                                <div class=\"modal-footer\">
                                    <button class=\"btn btn-light\" type=\"button\" data-bs-dismiss=\"modal\">Fermer</button>
                                </div>
                            </div>
                        </div>
                    </div>
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
                            {#
                            -La méthode auteur() du controlleur renvoie un tableau 'auteurs'
                                qui contient tous les auteurs trouvés dans la base de données
                                -On fait une loupe, pour afficher les propriété de chaque auteur
                                dans une ligne du tableau html
                            #}
                            {% for auteur in auteurs %}
                                <tr>
                                    <td>{{ auteur.getNomPrenom() }}</td>
                                    <td>{{ auteur.getSexe() }}</td>
                                    <td>{{ auteur.getDateDeNaissance()|date('Y-m-d') }}</td>
                                    <td>{{ auteur.getNationalite() }}</td>
                                    <td>
                                        <a class=\"btn btn-info btn-sm\" role=\"button\" data-bs-toggle=\"modal\"
                                           href=\"{{ path('auteur', {'id' : auteur.id}) }}\" data-bs-target=\"#detailsAuteurModal\">
                                            <i class=\"fas fa-info\"></i>
                                        </a>
                                    </td>
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
", "auteurs.html.twig", "C:\\Users\\abaio\\bookland\\templates\\auteurs.html.twig");
    }
}
