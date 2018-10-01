<?php

/* modules/custom/video_channel/templates/video-channel-template.html.twig */
class __TwigTemplate_ed7dc90e34a6f837a2d7517f9029bd3fb319b60a9d01b759ca678eefd4f4a526 extends Twig_Template
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
        $tags = array("for" => 7);
        $filters = array("keys" => 7);
        $functions = array("attach_library" => 1);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for'),
                array('keys'),
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
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("video_channel/video_channel"), "html", null, true));
        echo "
<div id=\"youtubechannel-player\" style=\"width:";
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["youtube_content"] ?? null), "width", array()), "html", null, true));
        echo "px; height:";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["youtube_content"] ?? null), "height", array()), "html", null, true));
        echo "px;\">
  <iframe id=\"youtubechannel-frame\" title=\"Youtube Video Player\" width=\"";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["youtube_content"] ?? null), "width", array()), "html", null, true));
        echo "px\" height=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["youtube_content"] ?? null), "height", array()), "html", null, true));
        echo "px;\" src=\"\" frameborder=\"0\" allowfullscreen></iframe>
</div>
<div id=\"youtubechannel-list\" style=\"width: ";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["youtube_content"] ?? null), "width", array()), "html", null, true));
        echo "px; height: ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["youtube_content"] ?? null), "height", array()), "html", null, true));
        echo "px;\">
  <ul>
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute(($context["youtube_content"] ?? null), "content", array())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 8
            echo "      <li><a href=\"#";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["i"], "html", null, true));
            echo "\"><img src=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["youtube_content"] ?? null), "content", array()), $context["i"], array(), "array"), "html", null, true));
            echo "\"></a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "  </ul>
</div>

 ";
        // line 14
        echo "
";
        // line 16
        echo "  ";
        // line 17
        echo "    ";
        // line 18
        echo "  ";
    }

    public function getTemplateName()
    {
        return "modules/custom/video_channel/templates/video-channel-template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 18,  92 => 17,  90 => 16,  87 => 14,  82 => 10,  71 => 8,  67 => 7,  60 => 5,  53 => 3,  47 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ attach_library('video_channel/video_channel') }}
<div id=\"youtubechannel-player\" style=\"width:{{youtube_content.width}}px; height:{{youtube_content.height}}px;\">
  <iframe id=\"youtubechannel-frame\" title=\"Youtube Video Player\" width=\"{{youtube_content.width}}px\" height=\"{{youtube_content.height}}px;\" src=\"\" frameborder=\"0\" allowfullscreen></iframe>
</div>
<div id=\"youtubechannel-list\" style=\"width: {{youtube_content.width}}px; height: {{youtube_content.height}}px;\">
  <ul>
    {% for i in youtube_content.content|keys %}
      <li><a href=\"#{{i}}\"><img src=\"{{youtube_content.content[i]}}\"></a></li>
    {% endfor %}
  </ul>
</div>

 {#The list of this videos#}

{#{% for i in youtube_content.content|keys %}#}
  {#<div style=\"width:{{youtube_content.width}}px; height:{{youtube_content.height}}px;\">#}
    {#<iframe  width=\"{{youtube_content.width}}px\" height=\"{{youtube_content.height}}px;\" src=\"http://www.youtube.com/embed/{{ i }}\" frameborder=\"0\" allowfullscreen></iframe>#}
  {#</div>#}
{#{% endfor %}#}
", "modules/custom/video_channel/templates/video-channel-template.html.twig", "/var/www/morgan/modules/custom/video_channel/templates/video-channel-template.html.twig");
    }
}
