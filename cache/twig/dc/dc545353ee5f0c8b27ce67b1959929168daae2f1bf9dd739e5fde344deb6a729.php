<?php

/* base.twig */
class __TwigTemplate_3298f1692a5c75de09951ce54e194e4e601f501e63c67ecf655ebd6e1bf177d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"final project for database class\">
    <meta name=\"author\" content=\"Kevin, Tommy\">

    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Bootstrap Core CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"lib/bootstrap/dist/css/bootstrap.min.css\">

    <!-- Daterangepicker -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"lib/bootstrap-daterangepicker/daterangepicker.css\">

    <!-- Custom Fonts -->
    <link href=\"lib/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">

    <!-- Custom CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/grayscale.css\">


</head>

";
        // line 29
        $this->displayBlock('body', $context, $blocks);
        // line 30
        echo "
<!-- jQuery -->
<script src=\"lib/jquery/dist/jquery.min.js\"></script>

<!-- Bootstrap Core JavaScript -->
<script src=\"lib/bootstrap/dist/js/bootstrap.min.js\"></script>

<!-- Plugin JavaScript -->
<script src=\"lib/jquery-easing/jquery.easing.min.js\"></script>

<!-- MomentJS -->
<script src=\"lib/moment/moment.js\"></script>

<!-- Daterangepicker -->
<script src=\"lib/bootstrap-daterangepicker/daterangepicker.js\"></script>

<!-- Custom Theme JavaScript -->
<script src=\"js/grayscale.js\"></script>

";
        // line 49
        $this->displayBlock('js', $context, $blocks);
        // line 50
        echo "
</html>
";
    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
    }

    // line 49
    public function block_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.twig";
    }

    public function getDebugInfo()
    {
        return array (  96 => 49,  91 => 29,  86 => 12,  80 => 50,  78 => 49,  57 => 30,  55 => 29,  35 => 12,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/* <head>*/
/* */
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <meta name="description" content="final project for database class">*/
/*     <meta name="author" content="Kevin, Tommy">*/
/* */
/*     <title>{% block title %}{% endblock %}</title>*/
/* */
/*     <!-- Bootstrap Core CSS -->*/
/*     <link rel="stylesheet" type="text/css" href="lib/bootstrap/dist/css/bootstrap.min.css">*/
/* */
/*     <!-- Daterangepicker -->*/
/*     <link rel="stylesheet" type="text/css" href="lib/bootstrap-daterangepicker/daterangepicker.css">*/
/* */
/*     <!-- Custom Fonts -->*/
/*     <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">*/
/* */
/*     <!-- Custom CSS -->*/
/*     <link rel="stylesheet" type="text/css" href="css/grayscale.css">*/
/* */
/* */
/* </head>*/
/* */
/* {% block body %}{% endblock %}*/
/* */
/* <!-- jQuery -->*/
/* <script src="lib/jquery/dist/jquery.min.js"></script>*/
/* */
/* <!-- Bootstrap Core JavaScript -->*/
/* <script src="lib/bootstrap/dist/js/bootstrap.min.js"></script>*/
/* */
/* <!-- Plugin JavaScript -->*/
/* <script src="lib/jquery-easing/jquery.easing.min.js"></script>*/
/* */
/* <!-- MomentJS -->*/
/* <script src="lib/moment/moment.js"></script>*/
/* */
/* <!-- Daterangepicker -->*/
/* <script src="lib/bootstrap-daterangepicker/daterangepicker.js"></script>*/
/* */
/* <!-- Custom Theme JavaScript -->*/
/* <script src="js/grayscale.js"></script>*/
/* */
/* {% block js %}{% endblock %}*/
/* */
/* </html>*/
/* */
