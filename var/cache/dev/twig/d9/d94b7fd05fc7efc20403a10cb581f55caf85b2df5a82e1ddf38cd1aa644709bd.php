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

/* layoutgeneral.html.twig */
class __TwigTemplate_5269692177b198cabcc62d5a17e57e90c299a06be2c763ba56d3a5a603b94ae1 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layoutgeneral.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layoutgeneral.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, shrink-to-fit=no\">
    <title>
        ";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 10
        echo "    </title>
    <link rel=\"stylesheet\" href=\"/assets/bootstrap/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Lato:300,400,700\">
    <link rel=\"stylesheet\" href=\"/assets/fonts/fontawesome-all.min.css\">
    <link rel=\"stylesheet\" href=\"/assets/fonts/ionicons.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css\">
   <link href='https://css.gg/filters.css' rel='stylesheet'>
</head>

<body>
<nav class=\"navbar navbar-dark navbar-expand-lg fixed-top bg-white portfolio-navbar gradient\">
    <div class=\"container\"><a class=\"navbar-brand logo\" href=\"/bookland\">BOOKLAND</a>
        <button data-bs-toggle=\"collapse\" class=\"navbar-toggler\" data-bs-target=\"#navbarNav\"><span
                    class=\"visually-hidden\">Toggle navigation</span><span class=\"navbar-toggler-icon\"></span></button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav ms-auto\">
                <li class=\"nav-item\"><a class=\"nav-link active\" href=\"/bookland\">Accueil</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"/bookland/genre\">Genres</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"/bookland/auteur\">Auteurs</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"/bookland/livre\">Livres</a></li>
            </ul>
        </div>
    </div>
</nav>
<main class=\"page lanidng-page\">
    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 35));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 36
            echo "        <div class=\"alert alert-success\">
            ";
            // line 37
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 42
        echo "</main>
<footer class=\"page-footer\">
    <div class=\"container\">
        <div class=\"page-footer\">
            <a href=\"/bookland\">Accueil</a>
            <a href=\"/bookland/genre\">Genres</a>
            <a href=\"/bookland/auteur\">Auteurs</a>
            <a href=\"/bookland/livre\">Livres</a>
        </div>
        <div class=\"links\">
            <ul class=\"list-group list-group-horizontal\">
                <li class=\"list-group-item\"><span>LOUDAGH Ali</span></li>
                <li class=\"list-group-item\"><span>BOUZARZAIT Oumaima</span></li>
                <li class=\"list-group-item\"><span>CHABI Othman</span></li>
                <li class=\"list-group-item\"><span>MULUMBA Isaac</span></li>
            </ul>
            <span><br>© 2021 upjv<br></span>
        </div>
    </div>
</footer>
<script src=\"/assets/bootstrap/js/bootstrap.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js\"></script>
<script src=\"/assets/js/theme.js\"></script>
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 9
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 40
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 41
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "layoutgeneral.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 41,  157 => 40,  147 => 9,  137 => 8,  102 => 42,  99 => 40,  90 => 37,  87 => 36,  83 => 35,  56 => 10,  54 => 8,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, shrink-to-fit=no\">
    <title>
        {% block title %}
        {% endblock %}
    </title>
    <link rel=\"stylesheet\" href=\"/assets/bootstrap/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Lato:300,400,700\">
    <link rel=\"stylesheet\" href=\"/assets/fonts/fontawesome-all.min.css\">
    <link rel=\"stylesheet\" href=\"/assets/fonts/ionicons.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css\">
   <link href='https://css.gg/filters.css' rel='stylesheet'>
</head>

<body>
<nav class=\"navbar navbar-dark navbar-expand-lg fixed-top bg-white portfolio-navbar gradient\">
    <div class=\"container\"><a class=\"navbar-brand logo\" href=\"/bookland\">BOOKLAND</a>
        <button data-bs-toggle=\"collapse\" class=\"navbar-toggler\" data-bs-target=\"#navbarNav\"><span
                    class=\"visually-hidden\">Toggle navigation</span><span class=\"navbar-toggler-icon\"></span></button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav ms-auto\">
                <li class=\"nav-item\"><a class=\"nav-link active\" href=\"/bookland\">Accueil</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"/bookland/genre\">Genres</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"/bookland/auteur\">Auteurs</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"/bookland/livre\">Livres</a></li>
            </ul>
        </div>
    </div>
</nav>
<main class=\"page lanidng-page\">
    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success\">
            {{ message }}
        </div>
    {% endfor %}
    {% block body %}
    {% endblock %}
</main>
<footer class=\"page-footer\">
    <div class=\"container\">
        <div class=\"page-footer\">
            <a href=\"/bookland\">Accueil</a>
            <a href=\"/bookland/genre\">Genres</a>
            <a href=\"/bookland/auteur\">Auteurs</a>
            <a href=\"/bookland/livre\">Livres</a>
        </div>
        <div class=\"links\">
            <ul class=\"list-group list-group-horizontal\">
                <li class=\"list-group-item\"><span>LOUDAGH Ali</span></li>
                <li class=\"list-group-item\"><span>BOUZARZAIT Oumaima</span></li>
                <li class=\"list-group-item\"><span>CHABI Othman</span></li>
                <li class=\"list-group-item\"><span>MULUMBA Isaac</span></li>
            </ul>
            <span><br>© 2021 upjv<br></span>
        </div>
    </div>
</footer>
<script src=\"/assets/bootstrap/js/bootstrap.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js\"></script>
<script src=\"/assets/js/theme.js\"></script>
</body>

</html>", "layoutgeneral.html.twig", "C:\\Users\\abaio\\bookland\\templates\\layoutgeneral.html.twig");
    }
}
