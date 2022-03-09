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

/* genres.html.twig */
class __TwigTemplate_2f0aaf7f3a41c4e6c1e817d7f3aae97927a15c21e356c36a897160ec8c688685 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "genres.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "genres.html.twig"));

        $this->parent = $this->loadTemplate("layoutgeneral.html.twig", "genres.html.twig", 1);
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
            <h1 style=\"text-align: left;\">Genres</h1>
            <div class=\"card\">
                <div class=\"card-header py-3\"><a class=\"btn btn-primary float-end\" role=\"button\" data-bs-toggle=\"modal\"
                                                 href=\"#\" data-bs-target=\"#ajouterGenreModal\">Ajouter genre</a>

                    ";
        // line 17
        echo "                    <div id=\"ajouterGenreModal\" class=\"modal fade\" role=\"dialog\" tabindex=\"-1\">
                        <div class=\"modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable\"
                             role=\"document\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <h4 class=\"modal-title\">Ajouter genre</h4>
                                    <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\"
                                            aria-label=\"Close\"></button>
                                </div>
                                <div class=\"modal-body\">
                                    ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["ajouterGenreForm"]) || array_key_exists("ajouterGenreForm", $context) ? $context["ajouterGenreForm"] : (function () { throw new RuntimeError('Variable "ajouterGenreForm" does not exist.', 27, $this->source); })()), 'form_start');
        echo "
                                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["ajouterGenreForm"]) || array_key_exists("ajouterGenreForm", $context) ? $context["ajouterGenreForm"] : (function () { throw new RuntimeError('Variable "ajouterGenreForm" does not exist.', 28, $this->source); })()), 'widget');
        echo "
                                    <br>
                                    <button class=\"btn btn-primary float-end\" type=\"submit\">Ajouter</button>
                                    ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["ajouterGenreForm"]) || array_key_exists("ajouterGenreForm", $context) ? $context["ajouterGenreForm"] : (function () { throw new RuntimeError('Variable "ajouterGenreForm" does not exist.', 31, $this->source); })()), 'form_end');
        echo "
                                </div>
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
                                <th>Note</th>
                                <th>Détails</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 58
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["genres"]) || array_key_exists("genres", $context) ? $context["genres"] : (function () { throw new RuntimeError('Variable "genres" does not exist.', 58, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 59
            echo "                                <tr>
                                    <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "getNom", [], "method", false, false, false, 60), "html", null, true);
            echo "</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
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
        return "genres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 63,  155 => 60,  152 => 59,  147 => 58,  123 => 31,  117 => 28,  113 => 27,  101 => 17,  92 => 9,  82 => 8,  69 => 4,  59 => 3,  36 => 1,);
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
            <h1 style=\"text-align: left;\">Genres</h1>
            <div class=\"card\">
                <div class=\"card-header py-3\"><a class=\"btn btn-primary float-end\" role=\"button\" data-bs-toggle=\"modal\"
                                                 href=\"#\" data-bs-target=\"#ajouterGenreModal\">Ajouter genre</a>

                    {# Formulaire d'ajout d'un genre #}
                    <div id=\"ajouterGenreModal\" class=\"modal fade\" role=\"dialog\" tabindex=\"-1\">
                        <div class=\"modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable\"
                             role=\"document\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <h4 class=\"modal-title\">Ajouter genre</h4>
                                    <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\"
                                            aria-label=\"Close\"></button>
                                </div>
                                <div class=\"modal-body\">
                                    {{ form_start(ajouterGenreForm) }}
                                    {{ form_widget(ajouterGenreForm) }}
                                    <br>
                                    <button class=\"btn btn-primary float-end\" type=\"submit\">Ajouter</button>
                                    {{ form_end(ajouterGenreForm) }}
                                </div>
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
                                <th>Note</th>
                                <th>Détails</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            {#
                            -La méthode genre() du controlleur renvoie un tableau 'genres'
                                qui contient tous les genres trouvés dans la base de données
                                -On fait une loupe, pour afficher les propriété de chaque genre
                                dans une ligne du tableau html
                            #}
                            {% for genre in genres %}
                                <tr>
                                    <td>{{ genre.getNom() }}</td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}", "genres.html.twig", "C:\\Users\\abaio\\bookland\\templates\\genres.html.twig");
    }
}
