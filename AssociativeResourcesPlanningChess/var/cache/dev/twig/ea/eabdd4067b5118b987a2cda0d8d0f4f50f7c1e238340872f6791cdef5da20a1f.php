<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c283bd830f038c30fb817f074f5c71a424dc7951497dead029026700d1f7cffa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e887e562d1cc668b84500629e77c85bfb5ce5b819e3494d8c424837c61c1acd9 = $this->env->getExtension("native_profiler");
        $__internal_e887e562d1cc668b84500629e77c85bfb5ce5b819e3494d8c424837c61c1acd9->enter($__internal_e887e562d1cc668b84500629e77c85bfb5ce5b819e3494d8c424837c61c1acd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e887e562d1cc668b84500629e77c85bfb5ce5b819e3494d8c424837c61c1acd9->leave($__internal_e887e562d1cc668b84500629e77c85bfb5ce5b819e3494d8c424837c61c1acd9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_706a6d89ede4f4b09896d56a181a9edc38726cf96a847a3fe0a74922dbf0988c = $this->env->getExtension("native_profiler");
        $__internal_706a6d89ede4f4b09896d56a181a9edc38726cf96a847a3fe0a74922dbf0988c->enter($__internal_706a6d89ede4f4b09896d56a181a9edc38726cf96a847a3fe0a74922dbf0988c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_706a6d89ede4f4b09896d56a181a9edc38726cf96a847a3fe0a74922dbf0988c->leave($__internal_706a6d89ede4f4b09896d56a181a9edc38726cf96a847a3fe0a74922dbf0988c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_09385fc45495c8044e2b9404a20f7d97a60ab3604d59f326b9dbef27ce9515c3 = $this->env->getExtension("native_profiler");
        $__internal_09385fc45495c8044e2b9404a20f7d97a60ab3604d59f326b9dbef27ce9515c3->enter($__internal_09385fc45495c8044e2b9404a20f7d97a60ab3604d59f326b9dbef27ce9515c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_09385fc45495c8044e2b9404a20f7d97a60ab3604d59f326b9dbef27ce9515c3->leave($__internal_09385fc45495c8044e2b9404a20f7d97a60ab3604d59f326b9dbef27ce9515c3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1ca44474bb62c78717fb5a01eb89ca97f8dd5024e1d941c11e420aea64641dd0 = $this->env->getExtension("native_profiler");
        $__internal_1ca44474bb62c78717fb5a01eb89ca97f8dd5024e1d941c11e420aea64641dd0->enter($__internal_1ca44474bb62c78717fb5a01eb89ca97f8dd5024e1d941c11e420aea64641dd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1ca44474bb62c78717fb5a01eb89ca97f8dd5024e1d941c11e420aea64641dd0->leave($__internal_1ca44474bb62c78717fb5a01eb89ca97f8dd5024e1d941c11e420aea64641dd0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
