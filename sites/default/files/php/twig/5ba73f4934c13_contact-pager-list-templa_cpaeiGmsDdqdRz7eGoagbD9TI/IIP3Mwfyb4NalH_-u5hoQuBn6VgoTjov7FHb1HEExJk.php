<?php

/* modules/custom/contact_pager/templates/contact-pager-list-template.html.twig */
class __TwigTemplate_bfdd5d8c2dde74f3e03710988431706db2150397ebaf28382e4f890957e18ca4 extends Twig_Template
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
        $tags = array("for" => 10, "if" => 11);
        $filters = array();
        $functions = array("attach_library" => 1);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for', 'if'),
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
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("contact_pager/contact_pager"), "html", null, true));
        echo "
<table id=\"question-list\">
  <tr>
    <th>Number</th>
    <th>Subject</th>
    <th>Question</th>
    <th>Answered</th>
  </tr>
  ";
        // line 10
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["questions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 11
            echo "    ";
            if ($this->getAttribute($context["question"], "link", array())) {
                // line 12
                echo "      <tr onclick=\"document.location='";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["question"], "link", array()), "html", null, true));
                echo "'\" >
    ";
            } else {
                // line 14
                echo "      <tr>
    ";
            }
            // line 16
            echo "      <td>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["question"], "pid", array()), "html", null, true));
            echo "</td>
      <td>
        <div>
          ";
            // line 19
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["question"], "title", array()), "html", null, true));
            echo "
        </div>
      </td>
      <td>
        <div>
          ";
            // line 24
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["question"], "text", array()), "html", null, true));
            echo "
        </div>
      </td>
      <td>
        <div>
          ";
            // line 29
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["question"], "answered", array()), "html", null, true));
            echo "
        </div>
      </td>
    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</table>

";
    }

    public function getTemplateName()
    {
        return "modules/custom/contact_pager/templates/contact-pager-list-template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 34,  95 => 29,  87 => 24,  79 => 19,  72 => 16,  68 => 14,  62 => 12,  59 => 11,  54 => 10,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ attach_library('contact_pager/contact_pager') }}
<table id=\"question-list\">
  <tr>
    <th>Number</th>
    <th>Subject</th>
    <th>Question</th>
    <th>Answered</th>
  </tr>
  {#{{ kint(questions) }}#}
  {% for question in questions  %}
    {% if question.link %}
      <tr onclick=\"document.location='{{ question.link }}'\" >
    {% else %}
      <tr>
    {% endif %}
      <td>{{ question.pid }}</td>
      <td>
        <div>
          {{ question.title }}
        </div>
      </td>
      <td>
        <div>
          {{ question.text }}
        </div>
      </td>
      <td>
        <div>
          {{ question.answered }}
        </div>
      </td>
    </tr>
  {% endfor %}
</table>

", "modules/custom/contact_pager/templates/contact-pager-list-template.html.twig", "/var/www/morgan/modules/custom/contact_pager/templates/contact-pager-list-template.html.twig");
    }
}
