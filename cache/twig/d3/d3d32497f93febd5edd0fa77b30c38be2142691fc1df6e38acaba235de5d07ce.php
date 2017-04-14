<?php

/* modal/user.twig */
class __TwigTemplate_73dd1b40bc3fe97827c27fc3f4f0945c0d8a7c418be6ba313c56ab2ad4897588 extends Twig_Template
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
        echo "<div class=\"modal fade\" id=\"modal-user\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <form action=\"/punch\" method=\"post\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">User</h4>
                </div>
                <div class=\"modal-body\">
                    <form class=\"form-horizontal\" role=\"form\" method=\"post\" action=\"/export\">
                        <div class=\"form-group\">
                            <div class=\"btn-group\">
                                <div class=\"btn-group\">
                                    <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                                    <span data-bind=\"label\">Orginization</span>&nbsp;<span class=\"caret\"></span>
                                    <input type=\"hidden\" name=\"account\" data-bind=\"input\" />
                                    </button>
                                    <ul class=\"dropdown-menu\" role=\"menu\">
                                        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orginization"]) ? $context["orginization"] : null));
        foreach ($context['_seq'] as $context["office"] => $context["groups"]) {
            // line 20
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["groups"]);
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 21
                echo "                                                <li><a href=\"#\">";
                echo twig_escape_filter($this->env, $context["office"], "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, $context["group"], "html", null, true);
                echo "</a></li>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['office'], $context['groups'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                                    </ul>
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
                <div class=\"modal-footer\">
                    <button class=\"btn btn-cancel\" data-dismiss=\"modal\">Close</button>
                    <input class=\"btn btn-default\" value=\"Punch\" type=\"submit\"/>
                    <input type=\"hidden\" name=\"account\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["account"]) ? $context["account"] : null), "html", null, true);
        echo "\">
                </div>
            </form>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "modal/user.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 44,  65 => 24,  59 => 23,  48 => 21,  43 => 20,  39 => 19,  19 => 1,);
    }
}
/* <div class="modal fade" id="modal-user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">*/
/*     <div class="modal-dialog" role="document">*/
/*         <div class="modal-content">*/
/*             <form action="/punch" method="post">*/
/*                 <div class="modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*                     <h4 class="modal-title" id="myModalLabel">User</h4>*/
/*                 </div>*/
/*                 <div class="modal-body">*/
/*                     <form class="form-horizontal" role="form" method="post" action="/export">*/
/*                         <div class="form-group">*/
/*                             <div class="btn-group">*/
/*                                 <div class="btn-group">*/
/*                                     <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">*/
/*                                     <span data-bind="label">Orginization</span>&nbsp;<span class="caret"></span>*/
/*                                     <input type="hidden" name="account" data-bind="input" />*/
/*                                     </button>*/
/*                                     <ul class="dropdown-menu" role="menu">*/
/*                                         {% for office,groups in orginization %}*/
/*                                             {% for group in groups %}*/
/*                                                 <li><a href="#">{{ office }} / {{ group }}</a></li>*/
/*                                             {% endfor %}*/
/*                                         {% endfor %}*/
/*                                     </ul>*/
/*                                 </div>*/
/*                                 <div class="btn-group">*/
/*                                     <div id="reportrange" class="drp" >*/
/*                                         <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;*/
/*                                         <span></span>*/
/*                                         <input type="hidden" name="start" data-bind="input" />*/
/*                                         <input type="hidden" name="end" data-bind="input" />*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="btn-group">*/
/*                                     <input type="submit" class="btn btn-default" value="Export"/>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </form>*/
/*                 </div>*/
/*                 <div class="modal-footer">*/
/*                     <button class="btn btn-cancel" data-dismiss="modal">Close</button>*/
/*                     <input class="btn btn-default" value="Punch" type="submit"/>*/
/*                     <input type="hidden" name="account" value="{{ account }}">*/
/*                 </div>*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
