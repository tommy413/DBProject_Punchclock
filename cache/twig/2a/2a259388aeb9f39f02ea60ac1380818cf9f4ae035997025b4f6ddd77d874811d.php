<?php

/* section/list.twig */
class __TwigTemplate_aa3bed09e3e30fcaf470d2b0a7c348a6d6f8e9fafb63c94ecea4eefd0b06c3fb extends Twig_Template
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
        echo "<section id=\"list\" class=\"container content-section text-center\">
    <div class=\"row\">
        <div class=\"col-lg-6\" align=\"center\">
            <h2>List <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal-punch\"><i class=\"fa fa-edit\"></i></a></h2>
            <table class=\"table\">
                <thead align=\"center\">
                    <tr>
                        <th>Account</th>
                        <th>Status</th>
                        <th>Updated</th>
                        <th>Note</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["records"]) ? $context["records"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 16
            echo "                        <tr>
                            <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "account", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "state", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "updated", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "note", array()), "html", null, true);
            echo "</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                </tbody>
            </table>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "section/list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 23,  54 => 20,  50 => 19,  46 => 18,  42 => 17,  39 => 16,  35 => 15,  19 => 1,);
    }
}
/* <section id="list" class="container content-section text-center">*/
/*     <div class="row">*/
/*         <div class="col-lg-6" align="center">*/
/*             <h2>List <a href="#" data-toggle="modal" data-target="#modal-punch"><i class="fa fa-edit"></i></a></h2>*/
/*             <table class="table">*/
/*                 <thead align="center">*/
/*                     <tr>*/
/*                         <th>Account</th>*/
/*                         <th>Status</th>*/
/*                         <th>Updated</th>*/
/*                         <th>Note</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     {% for record in records %}*/
/*                         <tr>*/
/*                             <td>{{ record.account }}</td>*/
/*                             <td>{{ record.state }}</td>*/
/*                             <td>{{ record.updated }}</td>*/
/*                             <td>{{ record.note }}</td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
