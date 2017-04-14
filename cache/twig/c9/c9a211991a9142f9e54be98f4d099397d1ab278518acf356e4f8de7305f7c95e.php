<?php

/* signup.twig */
class __TwigTemplate_ea9ec559c3fac71ac689bb1580ca76042e9886b1084501308384daf6f77563f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "signup.twig", 1);
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
        echo "Signup";
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
                    <form action=\"/signup\" method=\"post\">
                        <h1 class=\"brand-heading\">Timeclock</h1>
                        <div class=\"col-md-6\" align=\"center\">
                            <div class=\"form-group\">
                                <input type=\"text\" name=\"office\" class=\"form-control\" placeholder=\"Office\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"text\" name=\"group\" class=\"form-control\" placeholder=\"Group\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"text\" name=\"account\" class=\"form-control\" placeholder=\"Account\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"Password\">
                            </div> 
                            <div class=\"form-group\">
                                <input class=\"btn btn-default\" value=\"Signup\" type=\"submit\"/>
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
        return "signup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'base.twig' %}*/
/* {% block title %}Signup{% endblock %}*/
/* {% block body %}*/
/*     <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">*/
/*         <!-- Intro Header -->*/
/*         <header class="intro">*/
/*             <div class="intro-body">*/
/*                 <div class="container">*/
/*                     <form action="/signup" method="post">*/
/*                         <h1 class="brand-heading">Timeclock</h1>*/
/*                         <div class="col-md-6" align="center">*/
/*                             <div class="form-group">*/
/*                                 <input type="text" name="office" class="form-control" placeholder="Office">*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <input type="text" name="group" class="form-control" placeholder="Group">*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <input type="text" name="account" class="form-control" placeholder="Account">*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <input type="password" name="password" class="form-control" placeholder="Password">*/
/*                             </div> */
/*                             <div class="form-group">*/
/*                                 <input class="btn btn-default" value="Signup" type="submit"/>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </header>*/
/* </body>*/
/* {% endblock %}*/
