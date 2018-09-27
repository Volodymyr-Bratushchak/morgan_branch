<?php

/* modules/custom/promote_persons/templates/promote-persons-template.html.twig */
class __TwigTemplate_be885535351b84f697e50861c2090aec720f8af9c34e76a7450965eae0689255 extends Twig_Template
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
        $tags = array("for" => 3);
        $filters = array();
        $functions = array("attach_library" => 1);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for'),
                array(),
                array('attach_library')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("promote_persons/promote_persons"), "html", null, true));
        echo "
<div class=\"b-carousel slick-slider slick-dotted\">
  ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["slides"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 4
            echo "    <div class=\"b-carousel__slide\"
         style=\"background: url('";
            // line 5
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["slide"], "image", array()), "html", null, true));
            echo "');
           background-position: 50% 50%;
           background-repeat: no-repeat;
           /*background-size: 50% 50%;*/
           height: 220px\">
      <div class=\"b-example__label\"
           style=\"
           margin-left: auto;
           margin-right: auto;
           text-align: center;
           vertical-align: middle;
           font-size: 250%;
           color: whitesmoke;
      \">
        ";
            // line 19
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["slide"], "name", array()), "html", null, true));
            echo "
      </div>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/promote_persons/templates/promote-persons-template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 23,  72 => 19,  55 => 5,  52 => 4,  48 => 3,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ attach_library('promote_persons/promote_persons') }}
<div class=\"b-carousel slick-slider slick-dotted\">
  {% for slide in slides %}
    <div class=\"b-carousel__slide\"
         style=\"background: url('{{ slide.image }}');
           background-position: 50% 50%;
           background-repeat: no-repeat;
           /*background-size: 50% 50%;*/
           height: 220px\">
      <div class=\"b-example__label\"
           style=\"
           margin-left: auto;
           margin-right: auto;
           text-align: center;
           vertical-align: middle;
           font-size: 250%;
           color: whitesmoke;
      \">
        {{ slide.name }}
      </div>
    </div>
  {% endfor %}
</div>
", "modules/custom/promote_persons/templates/promote-persons-template.html.twig", "/var/www/morgan/modules/custom/promote_persons/templates/promote-persons-template.html.twig");
    }
}
