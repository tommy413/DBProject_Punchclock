<?php

/* home.twig */
class __TwigTemplate_fd9cf074010dd7dcb6882db683fde23555dac4c4a0264e2ad1ac460b25b79dd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "home.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Home";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <body id=\"page-top\" data-spy=\"scroll\" data-target=\".navbar-fixed-top\">
        ";
        // line 6
        echo "        ";
        $this->loadTemplate("section/navigation.twig", "home.twig", 6)->display($context);
        // line 7
        echo "        
        ";
        // line 8
        if ((isset($context["admin"]) ? $context["admin"] : null)) {
            // line 9
            echo "            ";
            // line 10
            echo "            ";
            $this->loadTemplate("section/admin.twig", "home.twig", 10)->display($context);
            // line 11
            echo "            ";
            // line 12
            echo "            ";
            $this->loadTemplate("modal/user.twig", "home.twig", 12)->display($context);
            // line 13
            echo "        ";
        } else {
            // line 14
            echo "            ";
            // line 15
            echo "            ";
            $this->loadTemplate("section/punch.twig", "home.twig", 15)->display($context);
            echo "        
            ";
            // line 17
            echo "            ";
            $this->loadTemplate("modal/punch.twig", "home.twig", 17)->display($context);
            // line 18
            echo "        ";
        }
        // line 19
        echo "
        ";
        // line 21
        echo "        ";
        $this->loadTemplate("section/list.twig", "home.twig", 21)->display($context);
        // line 22
        echo "        ";
        // line 23
        echo "        ";
        $this->loadTemplate("section/export.twig", "home.twig", 23)->display($context);
        // line 24
        echo "        ";
        // line 25
        echo "        ";
        $this->loadTemplate("section/footer.twig", "home.twig", 25)->display($context);
        // line 26
        echo "        
        ";
        // line 28
        echo "        ";
        $this->loadTemplate("modal/update.twig", "home.twig", 28)->display($context);
        // line 29
        echo "

    </body>
";
    }

    // line 33
    public function block_js($context, array $blocks = array())
    {
        // line 34
        echo "    <script src=\"js/main.home.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 34,  105 => 33,  98 => 29,  95 => 28,  92 => 26,  89 => 25,  87 => 24,  84 => 23,  82 => 22,  79 => 21,  76 => 19,  73 => 18,  70 => 17,  65 => 15,  63 => 14,  60 => 13,  57 => 12,  55 => 11,  52 => 10,  50 => 9,  48 => 8,  45 => 7,  42 => 6,  39 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'base.twig' %}*/
/* {% block title %}Home{% endblock %}*/
/* {% block body %}*/
/*     <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">*/
/*         {# Navigation #}*/
/*         {% include 'section/navigation.twig' %}*/
/*         */
/*         {% if admin %}*/
/*             {# Admin Section #}*/
/*             {% include 'section/admin.twig' %}*/
/*             {# Update Modal #}*/
/*             {% include 'modal/user.twig' %}*/
/*         {% else %}*/
/*             {# Intro Section #}*/
/*             {% include 'section/punch.twig' %}        */
/*             {# Punch Modal #}*/
/*             {% include 'modal/punch.twig' %}*/
/*         {% endif %}*/
/* */
/*         {# List Section #}*/
/*         {% include 'section/list.twig' %}*/
/*         {# Exoport Section #}*/
/*         {% include 'section/export.twig' %}*/
/*         {# Footer #}*/
/*         {% include 'section/footer.twig' %}*/
/*         */
/*         {# Update Modal #}*/
/*         {% include 'modal/update.twig' %}*/
/* */
/* */
/*     </body>*/
/* {% endblock %}*/
/* {% block js %}*/
/*     <script src="js/main.home.js"></script>*/
/* {% endblock %}*/
