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
        $tags = array();
        $filters = array();
        $functions = array("attach_library" => 1);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
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
 <h3>
   ";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["parent_element"] ?? null), "title", array()), "html", null, true));
        echo "
 </h3>
    ";
        // line 7
        echo "      ";
        // line 8
        echo "        ";
        // line 9
        echo "          ";
        // line 10
        echo "            ";
        // line 11
        echo "            ";
        // line 12
        echo "              ";
        // line 13
        echo "            ";
        // line 14
        echo "          ";
        // line 15
        echo "        ";
        // line 16
        echo "      ";
        // line 17
        echo "    ";
        // line 18
        echo "
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
        return array (  76 => 18,  74 => 17,  72 => 16,  70 => 15,  68 => 14,  66 => 13,  64 => 12,  62 => 11,  60 => 10,  58 => 9,  56 => 8,  54 => 7,  49 => 4,  43 => 1,);
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
 <h3>
   {{ parent_element.title }}
 </h3>
    {# AJAX part #}
      {#<ul>#}
        {#{% for child in children_bush  %}#}
          {#<li>#}
            {#<div><a href=\"/node/{{ child.nid }}\">{{ child.title}}</a></div>#}
            {#<div>#}
              {#<img src=\"{{ child.image }}\" alt=\"Image of '{{ child.title}}'\">#}
            {#</div>#}
          {#</li>#}
        {#{% endfor %}#}
      {#</ul>#}
    {# AJAX part end#}

</div>
", "modules/custom/hierarchy_menu/templates/hierarchy-menu-template.html.twig", "/var/www/morgan/modules/custom/hierarchy_menu/templates/hierarchy-menu-template.html.twig");
    }
}
