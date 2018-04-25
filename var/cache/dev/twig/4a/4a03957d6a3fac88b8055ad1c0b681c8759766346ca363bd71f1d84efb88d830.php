<?php

/* base.html.twig */
class __TwigTemplate_b53e7bb0dd85623c4d4b4b1d142aade5713079f4af7e63f94551098848deb50b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<meta charset=\"UTF-8\" />
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
\t<title>Nozzeo ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t
\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/main.css"), "html", null, true);
        echo "\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/semantic.min.css"), "html", null, true);
        echo "\" media=\"screen\" type=\"text/css\"/>
\t
\t<link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Roboto\" />
\t<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.0.9/css/all.css\">
\t
\t";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "
\t<nav>
\t\t<div class=\"ui large fixed menu\">
\t\t\t<div class=\"header item\">
\t\t\t\t<a class=\"link\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\" style=\"color: black;\">
\t\t\t\t\tPlantilla
\t\t\t\t</a>
\t\t\t</div>
\t\t\t";
        // line 23
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 24
            echo "\t\t\t<div class=\"right menu\">
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<a class=\"ui red button\" href=\"";
            // line 26
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_logout");
            echo "\">Cerrar sesión</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 30
        echo "\t\t</div>
\t</nav>
</head>
<body>
\t";
        // line 34
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "
\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/semantic.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\">
\t\t\$('.ui.dropdown')
\t\t\t.dropdown()
\t\t;
\t</script>

\t";
        // line 44
        $this->displayBlock('javascripts', $context, $blocks);
        // line 45
        echo "</body>
</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  147 => 44,  136 => 34,  125 => 14,  114 => 6,  106 => 45,  104 => 44,  94 => 37,  90 => 35,  88 => 34,  82 => 30,  75 => 26,  71 => 24,  69 => 23,  62 => 19,  56 => 15,  54 => 14,  46 => 9,  42 => 8,  37 => 6,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
\t<meta charset=\"UTF-8\" />
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
\t<title>Nozzeo {% block title %}{% endblock %}</title>
\t
\t<link rel=\"stylesheet\" href=\"{{ asset('build/css/main.css') }}\" />
\t<link rel=\"stylesheet\" href=\"{{ asset('build/css/semantic.min.css') }}\" media=\"screen\" type=\"text/css\"/>
\t
\t<link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Roboto\" />
\t<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.0.9/css/all.css\">
\t
\t{% block stylesheets %}{% endblock %}

\t<nav>
\t\t<div class=\"ui large fixed menu\">
\t\t\t<div class=\"header item\">
\t\t\t\t<a class=\"link\" href=\"{{ path('index') }}\" style=\"color: black;\">
\t\t\t\t\tPlantilla
\t\t\t\t</a>
\t\t\t</div>
\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t<div class=\"right menu\">
\t\t\t\t<div class=\"item\">
\t\t\t\t\t<a class=\"ui red button\" href=\"{{ path('admin_logout') }}\">Cerrar sesión</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{% endif %}
\t\t</div>
\t</nav>
</head>
<body>
\t{% block body %}{% endblock %}

\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
\t<script type=\"text/javascript\" src=\"{{ asset('build/js/semantic.min.js') }}\"></script>
\t<script type=\"text/javascript\">
\t\t\$('.ui.dropdown')
\t\t\t.dropdown()
\t\t;
\t</script>

\t{% block javascripts %}{% endblock %}
</body>
</html>", "base.html.twig", "/home/sergio/Escritorio/terminos/templates/base.html.twig");
    }
}
