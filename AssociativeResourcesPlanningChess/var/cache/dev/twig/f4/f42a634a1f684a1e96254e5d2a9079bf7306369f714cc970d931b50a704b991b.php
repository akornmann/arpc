<?php

/* base.html.twig */
class __TwigTemplate_e6c523dcdf254e012fe3fa4c7b2d3fd74c83f869387af7735c7d6715c04e61a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

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
        $__internal_1dc745717d446b0b4f7dbee04ae5ca67bf206cf48f7663280eae174a833192c7 = $this->env->getExtension("native_profiler");
        $__internal_1dc745717d446b0b4f7dbee04ae5ca67bf206cf48f7663280eae174a833192c7->enter($__internal_1dc745717d446b0b4f7dbee04ae5ca67bf206cf48f7663280eae174a833192c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_1dc745717d446b0b4f7dbee04ae5ca67bf206cf48f7663280eae174a833192c7->leave($__internal_1dc745717d446b0b4f7dbee04ae5ca67bf206cf48f7663280eae174a833192c7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9cfa43588e1c07be36573b50ac911b84ec3f4bdc7936aa625388a2ed36f81830 = $this->env->getExtension("native_profiler");
        $__internal_9cfa43588e1c07be36573b50ac911b84ec3f4bdc7936aa625388a2ed36f81830->enter($__internal_9cfa43588e1c07be36573b50ac911b84ec3f4bdc7936aa625388a2ed36f81830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9cfa43588e1c07be36573b50ac911b84ec3f4bdc7936aa625388a2ed36f81830->leave($__internal_9cfa43588e1c07be36573b50ac911b84ec3f4bdc7936aa625388a2ed36f81830_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_00a912866a58f43aea2c994af4a2eac963f230bfc06c8143dbc758fe05185144 = $this->env->getExtension("native_profiler");
        $__internal_00a912866a58f43aea2c994af4a2eac963f230bfc06c8143dbc758fe05185144->enter($__internal_00a912866a58f43aea2c994af4a2eac963f230bfc06c8143dbc758fe05185144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_00a912866a58f43aea2c994af4a2eac963f230bfc06c8143dbc758fe05185144->leave($__internal_00a912866a58f43aea2c994af4a2eac963f230bfc06c8143dbc758fe05185144_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_507a1bc828b3a7525b90a9a44780b4e4fe6e75b7f5f83b035cabf795696c0d29 = $this->env->getExtension("native_profiler");
        $__internal_507a1bc828b3a7525b90a9a44780b4e4fe6e75b7f5f83b035cabf795696c0d29->enter($__internal_507a1bc828b3a7525b90a9a44780b4e4fe6e75b7f5f83b035cabf795696c0d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_507a1bc828b3a7525b90a9a44780b4e4fe6e75b7f5f83b035cabf795696c0d29->leave($__internal_507a1bc828b3a7525b90a9a44780b4e4fe6e75b7f5f83b035cabf795696c0d29_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_62682c08a1f4d7e7935245e8aebff20cae109ffcf9048b6b139d6576a5754c5a = $this->env->getExtension("native_profiler");
        $__internal_62682c08a1f4d7e7935245e8aebff20cae109ffcf9048b6b139d6576a5754c5a->enter($__internal_62682c08a1f4d7e7935245e8aebff20cae109ffcf9048b6b139d6576a5754c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_62682c08a1f4d7e7935245e8aebff20cae109ffcf9048b6b139d6576a5754c5a->leave($__internal_62682c08a1f4d7e7935245e8aebff20cae109ffcf9048b6b139d6576a5754c5a_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
