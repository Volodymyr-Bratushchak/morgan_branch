<?php

/* themes/custom/agave/templates/views-view-unformatted--chess-view.html.twig */
class __TwigTemplate_61d6733fab9dd05832c26df254184ee4a5f7751f23a043cbce80bdaeea0a183e extends Twig_Template
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
        $tags = array("if" => 20, "for" => 23, "set" => 25);
        $filters = array();
        $functions = array("file_url" => 47);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for', 'set'),
                array(),
                array('file_url')
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

        // line 20
        if (($context["title"] ?? null)) {
            // line 21
            echo "  <h3>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
            echo "</h3>
";
        }
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 24
            echo "  ";
            // line 25
            $context["row_classes"] = array(0 => ((            // line 26
($context["default_row_class"] ?? null)) ? ("views-row") : ("")));
            // line 29
            echo "  ";
            if ((($this->getAttribute($context["loop"], "index", array()) == 1) || ($this->getAttribute($context["loop"], "index", array()) == 4))) {
                // line 30
                echo "    ";
                // line 31
                $context["row_classes"] = array(0 => "views-small views-small-left");
                // line 33
                echo "  ";
            } elseif ((($this->getAttribute($context["loop"], "index", array()) == 2) || ($this->getAttribute($context["loop"], "index", array()) == 5))) {
                // line 34
                echo "    ";
                // line 35
                $context["row_classes"] = array(0 => "views-small views-small-right");
                // line 37
                echo "  ";
            } elseif (($this->getAttribute($context["loop"], "index", array()) == 3)) {
                // line 38
                echo "    ";
                // line 39
                $context["row_classes"] = array(0 => "views-big");
                // line 41
                echo "  ";
            }
            // line 42
            echo "

    <div";
            // line 44
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["row"], "attributes", array()), "addClass", array(0 => ($context["row_classes"] ?? null)), "method"), "html", null, true));
            echo ">
      ";
            // line 45
            if (($this->getAttribute($context["loop"], "index", array()) == 3)) {
                // line 46
                echo "        <p>name: ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["row"], "content", array()), "#view", array(), "array"), "style_plugin", array()), "render_tokens", array()), $this->getAttribute($context["loop"], "index0", array()), array(), "array"), "{{ name }}", array(), "array"), "html", null, true));
                echo "</p>
        ";
                // line 47
                $context["photo"] = call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["row"], "content", array(), "array"), "#row", array(), "array"), "_entity", array()), "image", array()), "entity", array()), "fileuri", array())));
                echo "          
        <img src=";
                // line 48
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["photo"] ?? null), "html", null, true));
                echo " class=\"chess_img\">
        <p>age: ";
                // line 49
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["row"], "content", array()), "#view", array(), "array"), "style_plugin", array()), "render_tokens", array()), $this->getAttribute($context["loop"], "index0", array()), array(), "array"), "{{ age }}", array(), "array"), "html", null, true));
                echo "</p>
      ";
            } else {
                // line 51
                echo "        <p>name: ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["row"], "content", array()), "#view", array(), "array"), "style_plugin", array()), "render_tokens", array()), $this->getAttribute($context["loop"], "index0", array()), array(), "array"), "{{ name }}", array(), "array"), "html", null, true));
                echo "</p>
        <p>age: ";
                // line 52
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["row"], "content", array()), "#view", array(), "array"), "style_plugin", array()), "render_tokens", array()), $this->getAttribute($context["loop"], "index0", array()), array(), "array"), "{{ age }}", array(), "array"), "html", null, true));
                echo "</p>
      ";
            }
            // line 54
            echo "    </div>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "  ";
        // line 61
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/custom/agave/templates/views-view-unformatted--chess-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 61,  150 => 59,  135 => 54,  130 => 52,  125 => 51,  120 => 49,  116 => 48,  112 => 47,  107 => 46,  105 => 45,  101 => 44,  97 => 42,  94 => 41,  92 => 39,  90 => 38,  87 => 37,  85 => 35,  83 => 34,  80 => 33,  78 => 31,  76 => 30,  73 => 29,  71 => 26,  70 => 25,  68 => 24,  51 => 23,  45 => 21,  43 => 20,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Default theme implementation to display a view of unformatted rows.
 *
 * Available variables:
 * - title: The title of this group of rows. May be empty.
 * - rows: A list of the view's row items.
 *   - attributes: The row's HTML attributes.
 *   - content: The row's content.
 * - view: The view object.
 * - default_row_class: A flag indicating whether default classes should be
 *   used on rows.
 *
 * @see template_preprocess_views_view_unformatted()
 *
 * @ingroup themeable
 */
#}
{% if title %}
  <h3>{{ title }}</h3>
{% endif %}
{% for row in rows %}
  {%
    set row_classes = [
      default_row_class ? 'views-row',
    ]
  %}
  {% if loop.index == 1 or loop.index == 4 %}
    {%
      set row_classes = ['views-small views-small-left',]
    %}
  {% elseif loop.index == 2 or loop.index == 5  %}
    {%
      set row_classes = ['views-small views-small-right',]
    %}
  {% elseif loop.index == 3  %}
    {%
    set row_classes = ['views-big',]
    %}
  {% endif %}


    <div{{ row.attributes.addClass(row_classes) }}>
      {% if loop.index == 3 %}
        <p>name: {{ row.content['#view'].style_plugin.render_tokens[ loop.index0 ]['{{ name }}'] }}</p>
        {% set photo = file_url(row['content']['#row']._entity.image.entity.fileuri) %}          
        <img src={{ photo }} class=\"chess_img\">
        <p>age: {{ row.content['#view'].style_plugin.render_tokens[ loop.index0 ]['{{ age }}'] }}</p>
      {% else %}
        <p>name: {{ row.content['#view'].style_plugin.render_tokens[ loop.index0 ]['{{ name }}'] }}</p>
        <p>age: {{ row.content['#view'].style_plugin.render_tokens[ loop.index0 ]['{{ age }}'] }}</p>
      {% endif %}
    </div>
{% endfor %}
{#<div  id=\"chess-view-content\">#}
{#</div>#}
{#<div class=\"load_more_chess\">#}
  {#<a href=\"/chess-view?page=1\" id=\"load_more_chess\">Load more</a>#}
{#</div>#}

", "themes/custom/agave/templates/views-view-unformatted--chess-view.html.twig", "/var/www/morgan/themes/custom/agave/templates/views-view-unformatted--chess-view.html.twig");
    }
}
