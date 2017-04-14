<?php

/* section/export.twig */
class __TwigTemplate_68c9360faf98c491c75c003d0773238c9292a8565f103482a20b35931c89a432 extends Twig_Template
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
        echo "<section id=\"export\" class=\"content-section text-center\">
    <div class=\"download-section\">
        <div class=\"container\">
            <h2>Export Report</h2>
            <div class=\"col-lg-6\" align=\"center\">
                <form class=\"form-horizontal\" role=\"form\" method=\"post\" action=\"/export\">
                    <div class=\"form-group\">
                        <div class=\"btn-group\">
                            <div class=\"btn-group\">
                                <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                                <span data-bind=\"label\">Account</span>&nbsp;<span class=\"caret\"></span>
                                <input type=\"hidden\" name=\"account\" data-bind=\"input\" />
                                </button>
                                <ul class=\"dropdown-menu\" role=\"menu\">
                                    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["records"]) ? $context["records"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 16
            echo "                                        <li><a href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "account", array()), "html", null, true);
            echo "</a></li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "                                </ul>
                            </div>
                            <div class=\"btn-group\">
                                <div id=\"reportrange\" class=\"drp\" >
                                    <i class=\"glyphicon glyphicon-calendar fa fa-calendar\"></i>&nbsp;
                                    <span></span>
                                    <input type=\"hidden\" name=\"start\" data-bind=\"input\" />
                                    <input type=\"hidden\" name=\"end\" data-bind=\"input\" />
                                </div>
                            </div>
                            <div class=\"btn-group\">
                                <input type=\"submit\" class=\"btn btn-default\" value=\"Export\"/>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "section/export.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 18,  39 => 16,  35 => 15,  19 => 1,);
    }
}
/* <section id="export" class="content-section text-center">*/
/*     <div class="download-section">*/
/*         <div class="container">*/
/*             <h2>Export Report</h2>*/
/*             <div class="col-lg-6" align="center">*/
/*                 <form class="form-horizontal" role="form" method="post" action="/export">*/
/*                     <div class="form-group">*/
/*                         <div class="btn-group">*/
/*                             <div class="btn-group">*/
/*                                 <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">*/
/*                                 <span data-bind="label">Account</span>&nbsp;<span class="caret"></span>*/
/*                                 <input type="hidden" name="account" data-bind="input" />*/
/*                                 </button>*/
/*                                 <ul class="dropdown-menu" role="menu">*/
/*                                     {% for record in records %}*/
/*                                         <li><a href="#">{{ record.account }}</a></li>*/
/*                                     {% endfor %}*/
/*                                 </ul>*/
/*                             </div>*/
/*                             <div class="btn-group">*/
/*                                 <div id="reportrange" class="drp" >*/
/*                                     <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;*/
/*                                     <span></span>*/
/*                                     <input type="hidden" name="start" data-bind="input" />*/
/*                                     <input type="hidden" name="end" data-bind="input" />*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="btn-group">*/
/*                                 <input type="submit" class="btn btn-default" value="Export"/>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*             */
/*         </div>*/
/*     </div>*/
/* </section>*/
