<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_083988da4f08613904f85c9e9bb6d3dc8ba85859c6c4073cea1f20774b74d0c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_773b62bc098e183fd1d223713f58feb8116e83d5a89f9e487fec49779ab8e9c9 = $this->env->getExtension("native_profiler");
        $__internal_773b62bc098e183fd1d223713f58feb8116e83d5a89f9e487fec49779ab8e9c9->enter($__internal_773b62bc098e183fd1d223713f58feb8116e83d5a89f9e487fec49779ab8e9c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_773b62bc098e183fd1d223713f58feb8116e83d5a89f9e487fec49779ab8e9c9->leave($__internal_773b62bc098e183fd1d223713f58feb8116e83d5a89f9e487fec49779ab8e9c9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6650c34a642acb38d30c8c42ed5148c95d4465204880bc4e888c95faf1f4e272 = $this->env->getExtension("native_profiler");
        $__internal_6650c34a642acb38d30c8c42ed5148c95d4465204880bc4e888c95faf1f4e272->enter($__internal_6650c34a642acb38d30c8c42ed5148c95d4465204880bc4e888c95faf1f4e272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6650c34a642acb38d30c8c42ed5148c95d4465204880bc4e888c95faf1f4e272->leave($__internal_6650c34a642acb38d30c8c42ed5148c95d4465204880bc4e888c95faf1f4e272_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e4bfa58e74d8f2c491fd56054d8891e4c345b1c6ad2aabbe941fd7b5aa87cdbe = $this->env->getExtension("native_profiler");
        $__internal_e4bfa58e74d8f2c491fd56054d8891e4c345b1c6ad2aabbe941fd7b5aa87cdbe->enter($__internal_e4bfa58e74d8f2c491fd56054d8891e4c345b1c6ad2aabbe941fd7b5aa87cdbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e4bfa58e74d8f2c491fd56054d8891e4c345b1c6ad2aabbe941fd7b5aa87cdbe->leave($__internal_e4bfa58e74d8f2c491fd56054d8891e4c345b1c6ad2aabbe941fd7b5aa87cdbe_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_68c9c23cedbb171c482b3e238c9e7ab945e1a2daee9392410d78ed7fb977f4c3 = $this->env->getExtension("native_profiler");
        $__internal_68c9c23cedbb171c482b3e238c9e7ab945e1a2daee9392410d78ed7fb977f4c3->enter($__internal_68c9c23cedbb171c482b3e238c9e7ab945e1a2daee9392410d78ed7fb977f4c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_68c9c23cedbb171c482b3e238c9e7ab945e1a2daee9392410d78ed7fb977f4c3->leave($__internal_68c9c23cedbb171c482b3e238c9e7ab945e1a2daee9392410d78ed7fb977f4c3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
