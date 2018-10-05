<?php

/* themes/custom/agave/templates/page.html.twig */
class __TwigTemplate_837e8f0a55488b435e4e70ae25e3f8aa223aee82e2232a0affab017a6ede0fed extends Twig_Template
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
        $tags = array("if" => 87);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
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

        // line 76
        echo "<div id=\"page-wrapper\" class=\"clearfix\" style=\"background-image:url(";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["font_image"] ?? null), "html", null, true));
        echo ");\">
  <div id=\"page\" class=\"clearfix ";
        // line 77
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page_classes"] ?? null), "html", null, true));
        echo "\">

    <header id=\"header-outer-wrapper\" class=\"outer-wrapper clearfix ";
        // line 79
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["secondary_menu"] ?? null)) ? ("with-secondary-menu") : ("without-secondary-menu"))));
        echo "\" role=\"banner\">
      <div id=\"header-layout\" class=\"";
        // line 80
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["region_classes"] ?? null), "header", array()), "html", null, true));
        echo " inner-wrapper clearfix\">
        ";
        // line 81
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "
      </div>
    </header> <!-- /.section, /#header-->
  
    <section id=\"core-outer-wrapper\" class=\"outer-wrapper clearfix\">
      <div id=\"core-layout\" class=\"";
        // line 86
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["region_classes"] ?? null), "core", array()), "html", null, true));
        echo " inner-wrapper clearfix\">
        ";
        // line 87
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 88
            echo "          ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "
        ";
        }
        // line 90
        echo "      </div>
    </section>
    
    ";
        // line 93
        if (((($this->getAttribute(($context["page"] ?? null), "preface_first", array()) || $this->getAttribute(($context["page"] ?? null), "preface_second", array())) || $this->getAttribute(($context["page"] ?? null), "preface_third", array())) || $this->getAttribute(($context["page"] ?? null), "preface_fourth", array()))) {
            // line 94
            echo "    <section id=\"preface-outer-wrapper\" class=\"outer-wrapper clearfix\">
      <div id=\"preface-layout\" class=\"";
            // line 95
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["region_classes"] ?? null), "preface", array()), "html", null, true));
            echo " inner-wrapper clearfix\">
        
        ";
            // line 97
            if ($this->getAttribute(($context["page"] ?? null), "preface_first", array())) {
                // line 98
                echo "          ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "preface_first", array()), "html", null, true));
                echo "
        ";
            }
            // line 100
            echo "        
        ";
            // line 101
            if ($this->getAttribute(($context["page"] ?? null), "preface_second", array())) {
                // line 102
                echo "          ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "preface_second", array()), "html", null, true));
                echo "
        ";
            }
            // line 104
            echo "        
        ";
            // line 105
            if ($this->getAttribute(($context["page"] ?? null), "preface_third", array())) {
                // line 106
                echo "          ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "preface_third", array()), "html", null, true));
                echo "
        ";
            }
            // line 108
            echo "        
        ";
            // line 109
            if ($this->getAttribute(($context["page"] ?? null), "preface_fourth", array())) {
                // line 110
                echo "          ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "preface_fourth", array()), "html", null, true));
                echo "
        ";
            }
            // line 112
            echo "        
      </div><!-- /#preface-layout -->
    </section> <!-- /#preface-wrapper -->
    ";
        }
        // line 116
        echo "
    <section id=\"content-outer-wrapper\" class=\"outer-wrapper clearfix\">
      <div id=\"main-layout\" class=\"";
        // line 118
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["region_classes"] ?? null), "main", array()), "html", null, true));
        echo " inner-wrapper clearfix\">
        
        ";
        // line 120
        if ($this->getAttribute(($context["page"] ?? null), "content", array())) {
            // line 121
            echo "          ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
        ";
        }
        // line 122
        echo "  
    
        ";
        // line 124
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 125
            echo "          ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
        ";
        }
        // line 127
        echo "    
        ";
        // line 128
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 129
            echo "          ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
        ";
        }
        // line 131
        echo "    
      </div><!-- /#main -->
    </section><!-- /#main-outer-wrapper -->
  
    ";
        // line 135
        if (((($this->getAttribute(($context["page"] ?? null), "postscript_first", array()) || $this->getAttribute(($context["page"] ?? null), "postscript_second", array())) || $this->getAttribute(($context["page"] ?? null), "postscript_third", array())) || $this->getAttribute(($context["page"] ?? null), "postscript_fourth", array()))) {
            // line 136
            echo "    <section id=\"postscript-outer-wrapper\" class=\"outer-wrapper clearfix\">
      <div id=\"postscript-layout\" class=\"";
            // line 137
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["region_classes"] ?? null), "postscript", array()), "html", null, true));
            echo " inner-wrapper clearfix\">
        
        ";
            // line 139
            if ($this->getAttribute(($context["page"] ?? null), "postscript_first", array())) {
                // line 140
                echo "          ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "postscript_first", array()), "html", null, true));
                echo "
        ";
            }
            // line 142
            echo "        
        ";
            // line 143
            if ($this->getAttribute(($context["page"] ?? null), "postscript_second", array())) {
                // line 144
                echo "          ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "postscript_second", array()), "html", null, true));
                echo "
        ";
            }
            // line 146
            echo "        
        ";
            // line 147
            if ($this->getAttribute(($context["page"] ?? null), "postscript_third", array())) {
                // line 148
                echo "          ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "postscript_third", array()), "html", null, true));
                echo "
        ";
            }
            // line 150
            echo "        
        ";
            // line 151
            if ($this->getAttribute(($context["page"] ?? null), "postscript_fourth", array())) {
                // line 152
                echo "          ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "postscript_fourth", array()), "html", null, true));
                echo "
        ";
            }
            // line 154
            echo "        
      </div><!-- /#postscript-layout -->
    </section> <!-- /#postscript-outer-wrapper -->
    ";
        }
        // line 158
        echo "    
    ";
        // line 159
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 160
            echo "    <footer id=\"footer-outer-wrapper\" class=\"outer-wrapper clearfix\">
      <div id=\"footer-layout\" role=\"contentinfo\" class=\"";
            // line 161
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["region_classes"] ?? null), "footer", array()), "html", null, true));
            echo " inner-wrapper clearfix\">
        ";
            // line 162
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
            echo "
      </div> <!-- /#footer -->
    </footer> <!-- /#footer-outer-wrapper -->
    ";
        }
        // line 166
        echo "</div></div> <!-- /#page, /#page-wrapper -->
";
    }

    public function getTemplateName()
    {
        return "themes/custom/agave/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 166,  258 => 162,  254 => 161,  251 => 160,  249 => 159,  246 => 158,  240 => 154,  234 => 152,  232 => 151,  229 => 150,  223 => 148,  221 => 147,  218 => 146,  212 => 144,  210 => 143,  207 => 142,  201 => 140,  199 => 139,  194 => 137,  191 => 136,  189 => 135,  183 => 131,  177 => 129,  175 => 128,  172 => 127,  166 => 125,  164 => 124,  160 => 122,  154 => 121,  152 => 120,  147 => 118,  143 => 116,  137 => 112,  131 => 110,  129 => 109,  126 => 108,  120 => 106,  118 => 105,  115 => 104,  109 => 102,  107 => 101,  104 => 100,  98 => 98,  96 => 97,  91 => 95,  88 => 94,  86 => 93,  81 => 90,  75 => 88,  73 => 87,  69 => 86,  61 => 81,  57 => 80,  53 => 79,  48 => 77,  43 => 76,);
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
 * Omega's theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template normally located in the
 * core/modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 * - logo: The url of the logo image, as defined in theme settings.
 * - site_name: The name of the site. This is empty when displaying the site
 *   name has been disabled in the theme settings.
 * - site_slogan: The slogan of the site. This is empty when displaying the site
 *   slogan has been disabled in theme settings.
 * - hide_site_name: A flag indicating if the site name has been toggled off on
 *   the theme settings page. If hidden, the \"visually-hidden\" class is added
 *   to make the site name visually hidden, but still accessible.
 * - hide_site_slogan: A flag indicating if the site slogan has been toggled off
 *   on the theme settings page. If hidden, the \"visually-hidden\" class is
 *   added to make the site slogan visually hidden, but still accessible.
 *
 * Navigation:
 * - main_menu: The Main menu links for the site, if they have been configured.
 * - secondary_menu: The Secondary menu links for the site, if they have been
 *   configured.
 * - breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title: The page title, for use in the actual content.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - messages: Status and error messages. Should be displayed prominently.
 * - tabs: Tabs linking to any sub-pages beneath the current page (e.g., the
 *   view and edit tabs when displaying a node).
 * - action_links: Actions local to the page, such as \"Add menu\" on the menu
 *   administration interface.
 * - feed_icons: All feed icons for the current page.
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 *
 * Omega utility variables
 * - region_classes.REGION_CONTAINERID - region_classes.main will render classes like with--sidebar-first on container
 * 
 * @see template_preprocess_page()
 * @see omega_preprocess_page()
 * @see html.html.twig
 *
 * @ingroup themeable
 */
#}
<div id=\"page-wrapper\" class=\"clearfix\" style=\"background-image:url({{ font_image }});\">
  <div id=\"page\" class=\"clearfix {{ page_classes }}\">

    <header id=\"header-outer-wrapper\" class=\"outer-wrapper clearfix {{ secondary_menu ? 'with-secondary-menu' : 'without-secondary-menu' }}\" role=\"banner\">
      <div id=\"header-layout\" class=\"{{ region_classes.header }} inner-wrapper clearfix\">
        {{ page.header }}
      </div>
    </header> <!-- /.section, /#header-->
  
    <section id=\"core-outer-wrapper\" class=\"outer-wrapper clearfix\">
      <div id=\"core-layout\" class=\"{{ region_classes.core }} inner-wrapper clearfix\">
        {% if page.highlighted %}
          {{ page.highlighted }}
        {% endif %}
      </div>
    </section>
    
    {% if page.preface_first or page.preface_second or page.preface_third or page.preface_fourth %}
    <section id=\"preface-outer-wrapper\" class=\"outer-wrapper clearfix\">
      <div id=\"preface-layout\" class=\"{{ region_classes.preface }} inner-wrapper clearfix\">
        
        {% if page.preface_first %}
          {{ page.preface_first }}
        {% endif %}
        
        {% if page.preface_second %}
          {{ page.preface_second }}
        {% endif %}
        
        {% if page.preface_third %}
          {{ page.preface_third }}
        {% endif %}
        
        {% if page.preface_fourth %}
          {{ page.preface_fourth }}
        {% endif %}
        
      </div><!-- /#preface-layout -->
    </section> <!-- /#preface-wrapper -->
    {% endif %}

    <section id=\"content-outer-wrapper\" class=\"outer-wrapper clearfix\">
      <div id=\"main-layout\" class=\"{{ region_classes.main }} inner-wrapper clearfix\">
        
        {% if page.content %}
          {{ page.content }}
        {% endif %}  
    
        {% if page.sidebar_first %}
          {{ page.sidebar_first }}
        {% endif %}
    
        {% if page.sidebar_second %}
          {{ page.sidebar_second }}
        {% endif %}
    
      </div><!-- /#main -->
    </section><!-- /#main-outer-wrapper -->
  
    {% if page.postscript_first or page.postscript_second or page.postscript_third or page.postscript_fourth %}
    <section id=\"postscript-outer-wrapper\" class=\"outer-wrapper clearfix\">
      <div id=\"postscript-layout\" class=\"{{ region_classes.postscript }} inner-wrapper clearfix\">
        
        {% if page.postscript_first %}
          {{ page.postscript_first }}
        {% endif %}
        
        {% if page.postscript_second %}
          {{ page.postscript_second }}
        {% endif %}
        
        {% if page.postscript_third %}
          {{ page.postscript_third }}
        {% endif %}
        
        {% if page.postscript_fourth %}
          {{ page.postscript_fourth }}
        {% endif %}
        
      </div><!-- /#postscript-layout -->
    </section> <!-- /#postscript-outer-wrapper -->
    {% endif %}
    
    {% if page.footer %}
    <footer id=\"footer-outer-wrapper\" class=\"outer-wrapper clearfix\">
      <div id=\"footer-layout\" role=\"contentinfo\" class=\"{{ region_classes.footer }} inner-wrapper clearfix\">
        {{ page.footer }}
      </div> <!-- /#footer -->
    </footer> <!-- /#footer-outer-wrapper -->
    {% endif %}
</div></div> <!-- /#page, /#page-wrapper -->
", "themes/custom/agave/templates/page.html.twig", "/var/www/morgan/themes/custom/agave/templates/page.html.twig");
    }
}
