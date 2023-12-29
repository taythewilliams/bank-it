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

/* play.html.twig */
class __TwigTemplate_9870ab80b3c9af37227d49dc9b4552a4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "play.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "play.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "play.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"current-die\">
        <img src=\"/images/die/die_";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["currentDie"]) || array_key_exists("currentDie", $context) ? $context["currentDie"] : (function () { throw new RuntimeError('Variable "currentDie" does not exist.', 6, $this->source); })()), "html", null, true);
        echo ".png\">
    </div>
    <a class=\"play-button\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("roll", ["totalRounds" => (isset($context["totalRounds"]) || array_key_exists("totalRounds", $context) ? $context["totalRounds"] : (function () { throw new RuntimeError('Variable "totalRounds" does not exist.', 8, $this->source); })()), "round" => (isset($context["round"]) || array_key_exists("round", $context) ? $context["round"] : (function () { throw new RuntimeError('Variable "round" does not exist.', 8, $this->source); })()), "current" => (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 8, $this->source); })())]), "html", null, true);
        echo "\">roll!</a>
    <div class=\"stats\">
        <div class=\"row\">
            <div class=\"label\">";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "</div>
            <div class=\"stat\">";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "</div>
        </div>
        <div class=\"row\">
            <div class=\"label\">previous</div>
            <div class=\"stat\">";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["previous"]) || array_key_exists("previous", $context) ? $context["previous"] : (function () { throw new RuntimeError('Variable "previous" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "</div>
        </div>
        <div class=\"row\">
            <div class=\"label\">round</div>
            <div class=\"stat\">";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["round"]) || array_key_exists("round", $context) ? $context["round"] : (function () { throw new RuntimeError('Variable "round" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["totalRounds"]) || array_key_exists("totalRounds", $context) ? $context["totalRounds"] : (function () { throw new RuntimeError('Variable "totalRounds" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "</div>
        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "play.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  101 => 20,  94 => 16,  87 => 12,  83 => 11,  77 => 8,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"current-die\">
        <img src=\"/images/die/die_{{ currentDie }}.png\">
    </div>
    <a class=\"play-button\" href=\"{{ path('roll', { totalRounds: totalRounds, round: round, current: current }) }}\">roll!</a>
    <div class=\"stats\">
        <div class=\"row\">
            <div class=\"label\">{{ status }}</div>
            <div class=\"stat\">{{ current }}</div>
        </div>
        <div class=\"row\">
            <div class=\"label\">previous</div>
            <div class=\"stat\">{{ previous }}</div>
        </div>
        <div class=\"row\">
            <div class=\"label\">round</div>
            <div class=\"stat\">{{ round }}/{{ totalRounds }}</div>
        </div>
    </div>

{%  endblock %}", "play.html.twig", "/Users/taylorwilliams/git/bank/my_project/templates/play.html.twig");
    }
}
