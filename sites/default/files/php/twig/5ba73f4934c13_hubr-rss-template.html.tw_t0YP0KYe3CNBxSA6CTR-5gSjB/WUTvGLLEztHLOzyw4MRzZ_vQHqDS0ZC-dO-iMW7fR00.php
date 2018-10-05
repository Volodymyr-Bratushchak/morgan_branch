<?php

/* modules/custom/hubr_rss/templates/hubr-rss-template.html.twig */
class __TwigTemplate_220612b5af8ef811337687505565323a91a7f6eb46e40d4c174ab568e27bad08 extends Twig_Template
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
        $tags = array("for" => 13);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for'),
                array(),
                array()
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

        // line 2
        echo "
<div>
  <h3>";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["main_info"] ?? null), "title", array()), "html", null, true));
        echo "</h3>
  <a href=\"";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["main_info"] ?? null), "link", array()), "html", null, true));
        echo "\">
    <p>";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["main_info"] ?? null), "description", array()), "html", null, true));
        echo "</p>
  </a>
  ";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["image"] ?? null), "html", null, true));
        echo "
</div>
<div>
  <h2>Selected items</h2>
  <ul>
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["selected_items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 14
            echo "      <li>
        <a href=\"";
            // line 15
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "link", array()), "html", null, true));
            echo "\">
          <p>";
            // line 16
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
            echo "</p>
        </a>
      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "  </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "modules/custom/hubr_rss/templates/hubr-rss-template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 20,  79 => 16,  75 => 15,  72 => 14,  68 => 13,  60 => 8,  55 => 6,  51 => 5,  47 => 4,  43 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#{{ attach_library('video_channel/video_channel') }}#}

<div>
  <h3>{{ main_info.title }}</h3>
  <a href=\"{{ main_info.link }}\">
    <p>{{ main_info.description }}</p>
  </a>
  {{ image }}
</div>
<div>
  <h2>Selected items</h2>
  <ul>
    {% for item in selected_items %}
      <li>
        <a href=\"{{ item.link }}\">
          <p>{{ item.title }}</p>
        </a>
      </li>
    {% endfor %}
  </ul>
</div>", "modules/custom/hubr_rss/templates/hubr-rss-template.html.twig", "/var/www/morgan/modules/custom/hubr_rss/templates/hubr-rss-template.html.twig");
    }
}
