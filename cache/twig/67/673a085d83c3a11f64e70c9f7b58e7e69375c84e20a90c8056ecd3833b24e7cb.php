<?php

/* login.twig */
class __TwigTemplate_81000a297c03bb0c98de011811a21e90ef04ff799177c6a252246bdab7e59ba2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "login.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
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
        echo "Login";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <body id=\"page-top\" data-spy=\"scroll\" data-target=\".navbar-fixed-top\">
        <!-- Intro Header -->
        <header class=\"intro\">
            <div class=\"intro-body\">
                <div class=\"container\">
                    <form action=\"/login\" method=\"post\">
                        <h1 class=\"brand-heading\">Timeclock</h1>
                        <div class=\"col-md-6 col-md-offset-3\">
                            ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
        echo "
                            <div class=\"form-group\">
                                <input type=\"text\" name=\"account\" class=\"form-control\" placeholder=\"Account\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["account"]) ? $context["account"] : null), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"Password\">
                            </div>
                            <div class=\"form-group\">
                                <input class=\"btn btn-default\" value=\"Login\" type=\"submit\"/>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </header>
</body>
";
    }

    public function getTemplateName()
    {
        return "login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 14,  48 => 12,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'base.twig' %}*/
/* {% block title %}Login{% endblock %}*/
/* {% block body %}*/
/*     <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">*/
/*         <!-- Intro Header -->*/
/*         <header class="intro">*/
/*             <div class="intro-body">*/
/*                 <div class="container">*/
/*                     <form action="/login" method="post">*/
/*                         <h1 class="brand-heading">Timeclock</h1>*/
/*                         <div class="col-md-6 col-md-offset-3">*/
/*                             {{ error }}*/
/*                             <div class="form-group">*/
/*                                 <input type="text" name="account" class="form-control" placeholder="Account" value="{{ account }}">*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <input type="password" name="password" class="form-control" placeholder="Password">*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <input class="btn btn-default" value="Login" type="submit"/>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </header>*/
/* </body>*/
/* {% endblock %}*/
