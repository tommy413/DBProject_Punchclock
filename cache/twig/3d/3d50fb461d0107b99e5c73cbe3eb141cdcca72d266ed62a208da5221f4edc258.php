<?php

/* display.twig */
class __TwigTemplate_8e4d049a2133f0a7e799185ff90ac8ca0745f0e0ef29723ca0fc83ad625519fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
    <head>
        <meta charset=\"utf-8\"/>
        <title>Slim 3</title>
    </head>
    <body>
        Hello ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo " !!
        ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["query"]) ? $context["query"] : null), "html", null, true);
        echo "
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["table"]) ? $context["table"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 10
            echo "            <button class=\"btn btn-success\">
                ";
            // line 11
            echo twig_escape_filter($this->env, $context["t"], "html", null, true);
            echo "
            </button>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    </body>
</html>
        
";
    }

    public function getTemplateName()
    {
        return "display.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 14,  42 => 11,  39 => 10,  35 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }
}
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8"/>*/
/*         <title>Slim 3</title>*/
/*     </head>*/
/*     <body>*/
/*         Hello {{ name }} !!*/
/*         {{ query }}*/
/*         {% for t in table %}*/
/*             <button class="btn btn-success">*/
/*                 {{ t }}*/
/*             </button>*/
/*         {% endfor %}*/
/*     </body>*/
/* </html>*/
/*         */
/* */
