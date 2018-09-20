<?php

/* modules/custom/hierarchy_menu/templates/hierarchy-menu-template.html.twig */
class __TwigTemplate_6ca5c5528d451c406b5406ba43102802e00b400727f8ee9e09c9bdb0d169217c extends Twig_Template
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
        $tags = array("for" => 6);
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
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("hierarchy_menu/hierarchy_menu"), "html", null, true));
        echo "
<div id=\"block_hierarchy_menu\">
  <ul>
    <li> ";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["parent_element"] ?? null), "title", array()), "html", null, true));
        echo " </li>
    <ul>
      ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["children_bush"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 7
            echo "        <li>
          <div><a href=\"/node/";
            // line 8
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["child"], "nid", array()), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["child"], "title", array()), "html", null, true));
            echo "</a></div>
          <div>
            <img src=\"";
            // line 10
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["child"], "image", array()), "html", null, true));
            echo "\" alt=\"Image of '";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["child"], "title", array()), "html", null, true));
            echo "'\">
          </div>
        </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    </ul>
  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/hierarchy_menu/templates/hierarchy-menu-template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 14,  68 => 10,  61 => 8,  58 => 7,  54 => 6,  49 => 4,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ attach_library('hierarchy_menu/hierarchy_menu') }}
<div id=\"block_hierarchy_menu\">
  <ul>
    <li> {{ parent_element.title }} </li>
    <ul>
      {% for child in children_bush  %}
        <li>
          <div><a href=\"/node/{{ child.nid }}\">{{ child.title}}</a></div>
          <div>
            <img src=\"{{ child.image }}\" alt=\"Image of '{{ child.title}}'\">
          </div>
        </li>
      {% endfor %}
    </ul>
  </ul>
</div>
", "modules/custom/hierarchy_menu/templates/hierarchy-menu-template.html.twig", "/var/www/morgan/modules/custom/hierarchy_menu/templates/hierarchy-menu-template.html.twig");
    }
}
