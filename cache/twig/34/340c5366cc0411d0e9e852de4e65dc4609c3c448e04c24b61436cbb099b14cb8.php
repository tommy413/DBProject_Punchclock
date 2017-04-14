<?php

/* modal/update.twig */
class __TwigTemplate_7353d7dd40ebcaef6442d4014e2229b2c74304a006c8f16980420f7f2050751f extends Twig_Template
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
        echo "<div class=\"modal fade\" id=\"modal-update\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <form action=\"/punch\" method=\"post\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Punch</h4>
                </div>
                <div class=\"modal-body\">
                    <div class=\"input-group\">
                        <div class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <span data-bind=\"label\">Status</span>&nbsp;<span class=\"caret\"></span>
                            <input type=\"hidden\" name=\"state\" data-bind=\"input\" />
                            </button>
                            <ul class=\"dropdown-menu\" role=\"menu\">
                                ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["state_list"]) ? $context["state_list"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
            // line 18
            echo "                                    <li><a href=\"#\">";
            echo twig_escape_filter($this->env, $context["state"], "html", null, true);
            echo "</a></li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['state'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "                            </ul>
                        </div>
                        <input type=\"text\" name=\"note\" class=\"form-control\" placeholder=\"What did you do today?\">
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button class=\"btn btn-cancel\" data-dismiss=\"modal\">Close</button>
                    <input class=\"btn btn-default\" value=\"Punch\" type=\"submit\"/>
                    <input type=\"hidden\" name=\"account\" value=\"";
        // line 28
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
        return "modal/update.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 28,  50 => 20,  41 => 18,  37 => 17,  19 => 1,);
    }
}
/* <div class="modal fade" id="modal-update" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">*/
/*     <div class="modal-dialog" role="document">*/
/*         <div class="modal-content">*/
/*             <form action="/punch" method="post">*/
/*                 <div class="modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*                     <h4 class="modal-title" id="myModalLabel">Punch</h4>*/
/*                 </div>*/
/*                 <div class="modal-body">*/
/*                     <div class="input-group">*/
/*                         <div class="input-group-btn">*/
/*                             <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">*/
/*                             <span data-bind="label">Status</span>&nbsp;<span class="caret"></span>*/
/*                             <input type="hidden" name="state" data-bind="input" />*/
/*                             </button>*/
/*                             <ul class="dropdown-menu" role="menu">*/
/*                                 {% for state in state_list %}*/
/*                                     <li><a href="#">{{ state }}</a></li>*/
/*                                 {% endfor %}*/
/*                             </ul>*/
/*                         </div>*/
/*                         <input type="text" name="note" class="form-control" placeholder="What did you do today?">*/
/*                     </div>*/
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
