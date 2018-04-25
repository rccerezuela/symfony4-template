<?php

/* admin/security/login.html.twig */
class __TwigTemplate_3a5c5b2787fd27733c9734c7c27b0e9543939f497400ae4d7b6b1811c09437f5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/security/login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    ";
        // line 5
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 5, $this->source); })())) {
            // line 6
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 6, $this->source); })()), "messageKey", array()), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 6, $this->source); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 8
        echo "
    ";
        // line 9
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_ANONYMOUSLY")) {
            // line 10
            echo "        <form action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_login_check");
            echo "\" method=\"post\" class=\"form-signin\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 11, $this->source); })()), "html", null, true);
            echo "\" />
            <div class=\"login-container\">
                <h1>Login to Your Admin Account</h1><br>
                <form>
                    <label for=\"email\">";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email"), "html", null, true);
            echo "</label>
                    <div class=\"ui fluid input\">
                      <input type=\"text\" id=\"email\" name=\"_username\"  value=\"";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 17, $this->source); })()), "html", null, true);
            echo "\" placeholder=\"Email\" required=\"required\">
                    </div>

                    <label for=\"password\">";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password"), "html", null, true);
            echo "</label>
                    <div class=\"ui fluid input\">
                        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\">
                    </div>

                    <label for=\"remember_me\">";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Remember me"), "html", null, true);
            echo "</label>
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                    
                    <input type=\"submit\" class=\"huge ui green button\" id=\"_submit\" name=\"_submit\" value=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Log in"), "html", null, true);
            echo "\"/>
                </form>
            </div>
        </form>
    ";
        } else {
            // line 33
            echo "        <div class=\"container\">
            <h1>Ya esta logueado</h1>
        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 33,  97 => 28,  91 => 25,  83 => 20,  77 => 17,  72 => 15,  65 => 11,  60 => 10,  58 => 9,  55 => 8,  49 => 6,  47 => 5,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block body %}

    {% if error %}
        <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    {% if is_granted('IS_AUTHENTICATED_ANONYMOUSLY') %}
        <form action=\"{{ path(\"admin_login_check\") }}\" method=\"post\" class=\"form-signin\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
            <div class=\"login-container\">
                <h1>Login to Your Admin Account</h1><br>
                <form>
                    <label for=\"email\">{{ 'Email'|trans }}</label>
                    <div class=\"ui fluid input\">
                      <input type=\"text\" id=\"email\" name=\"_username\"  value=\"{{ last_username }}\" placeholder=\"Email\" required=\"required\">
                    </div>

                    <label for=\"password\">{{ 'Password'|trans }}</label>
                    <div class=\"ui fluid input\">
                        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\">
                    </div>

                    <label for=\"remember_me\">{{ 'Remember me'|trans }}</label>
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                    
                    <input type=\"submit\" class=\"huge ui green button\" id=\"_submit\" name=\"_submit\" value=\"{{ 'Log in'|trans }}\"/>
                </form>
            </div>
        </form>
    {% else %}
        <div class=\"container\">
            <h1>Ya esta logueado</h1>
        </div>
    {% endif %}
{% endblock %}", "admin/security/login.html.twig", "/home/sergio/Escritorio/terminos/templates/admin/security/login.html.twig");
    }
}
