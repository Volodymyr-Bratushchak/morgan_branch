<?php

/* themes/custom/agave/templates/page--front.html.twig */
class __TwigTemplate_cbef59cf6a37bcfa43358e2afe167d0262a610429800fcd3928b9b3091fc8ae2 extends Twig_Template
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
        $tags = array("if" => 89);
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
        echo "

<div id=\"page-wrapper\" class=\"clearfix\">
  <div id=\"page\" class=\"clearfix ";
        // line 79
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page_classes"] ?? null), "html", null, true));
        echo "\">

    <header id=\"header-outer-wrapper\" class=\"outer-wrapper clearfix ";
        // line 81
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["secondary_menu"] ?? null)) ? ("with-secondary-menu") : ("without-secondary-menu"))));
        echo "\" role=\"banner\">
      <div id=\"header-layout\" class=\"";
        // line 82
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["region_classes"] ?? null), "header", array()), "html", null, true));
        echo " inner-wrapper clearfix\">
        ";
        // line 83
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "
      </div>
    </header> <!-- /.section, /#header-->
  
    <section id=\"core-outer-wrapper\" class=\"outer-wrapper clearfix\">
      <div id=\"core-layout\" class=\"";
        // line 88
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["region_classes"] ?? null), "core", array()), "html", null, true));
        echo " inner-wrapper clearfix\">
        ";
        // line 89
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 90
            echo "          ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "
        ";
        }
        // line 92
        echo "      </div>
    </section>
    
    ";
        // line 95
        if (((($this->getAttribute(($context["page"] ?? null), "preface_first", array()) || $this->getAttribute(($context["page"] ?? null), "preface_second", array())) || $this->getAttribute(($context["page"] ?? null), "preface_third", array())) || $this->getAttribute(($context["page"] ?? null), "preface_fourth", array()))) {
            // line 96
            echo "    <section id=\"preface-outer-wrapper\" class=\"outer-wrapper clearfix\">
      <div id=\"preface-layout\" class=\"";
            // line 97
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["region_classes"] ?? null), "preface", array()), "html", null, true));
            echo " inner-wrapper clearfix\">
        
        ";
            // line 99
            if ($this->getAttribute(($context["page"] ?? null), "preface_first", array())) {
                // line 100
                echo "          ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "preface_first", array()), "html", null, true));
                echo "
        ";
            }
            // line 102
            echo "        
        ";
            // line 103
            if ($this->getAttribute(($context["page"] ?? null), "preface_second", array())) {
                // line 104
                echo "          ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "preface_second", array()), "html", null, true));
                echo "
        ";
            }
            // line 106
            echo "        
        ";
            // line 107
            if ($this->getAttribute(($context["page"] ?? null), "preface_third", array())) {
                // line 108
                echo "          ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "preface_third", array()), "html", null, true));
                echo "
        ";
            }
            // line 110
            echo "        
        ";
            // line 111
            if ($this->getAttribute(($context["page"] ?? null), "preface_fourth", array())) {
                // line 112
                echo "          ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "preface_fourth", array()), "html", null, true));
                echo "
        ";
            }
            // line 114
            echo "        
      </div><!-- /#preface-layout -->
    </section> <!-- /#preface-wrapper -->
    ";
        }
        // line 118
        echo "
    <section id=\"content-outer-wrapper\" class=\"outer-wrapper clearfix\">
      <div id=\"main-layout\" class=\"";
        // line 120
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["region_classes"] ?? null), "main", array()), "html", null, true));
        echo " inner-wrapper clearfix\">
        
        ";
        // line 122
        if ($this->getAttribute(($context["page"] ?? null), "content", array())) {
            // line 123
            echo "          ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
        ";
        }
        // line 124
        echo "  
    
        ";
        // line 126
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 127
            echo "          ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
        ";
        }
        // line 129
        echo "    
        ";
        // line 130
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 131
            echo "          ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
        ";
        }
        // line 133
        echo "    
      </div><!-- /#main -->
    </section><!-- /#main-outer-wrapper -->
  
    ";
        // line 137
        if (((($this->getAttribute(($context["page"] ?? null), "postscript_first", array()) || $this->getAttribute(($context["page"] ?? null), "postscript_second", array())) || $this->getAttribute(($context["page"] ?? null), "postscript_third", array())) || $this->getAttribute(($context["page"] ?? null), "postscript_fourth", array()))) {
            // line 138
            echo "    <section id=\"postscript-outer-wrapper\" class=\"outer-wrapper clearfix\">
      <div id=\"postscript-layout\" class=\"";
            // line 139
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["region_classes"] ?? null), "postscript", array()), "html", null, true));
            echo " inner-wrapper clearfix\">
        
        ";
            // line 141
            if ($this->getAttribute(($context["page"] ?? null), "postscript_first", array())) {
                // line 142
                echo "          ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "postscript_first", array()), "html", null, true));
                echo "
        ";
            }
            // line 144
            echo "        
        ";
            // line 145
            if ($this->getAttribute(($context["page"] ?? null), "postscript_second", array())) {
                // line 146
                echo "          ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "postscript_second", array()), "html", null, true));
                echo "
        ";
            }
            // line 148
            echo "        
        ";
            // line 149
            if ($this->getAttribute(($context["page"] ?? null), "postscript_third", array())) {
                // line 150
                echo "          ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "postscript_third", array()), "html", null, true));
                echo "
        ";
            }
            // line 152
            echo "        
        ";
            // line 153
            if ($this->getAttribute(($context["page"] ?? null), "postscript_fourth", array())) {
                // line 154
                echo "          ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "postscript_fourth", array()), "html", null, true));
                echo "
        ";
            }
            // line 156
            echo "        
      </div><!-- /#postscript-layout -->
    </section> <!-- /#postscript-outer-wrapper -->
    ";
        }
        // line 160
        echo "    
    ";
        // line 161
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 162
            echo "    <footer id=\"footer-outer-wrapper\" class=\"outer-wrapper clearfix\">
      <div id=\"footer-layout\" role=\"contentinfo\" class=\"";
            // line 163
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["region_classes"] ?? null), "footer", array()), "html", null, true));
            echo " inner-wrapper clearfix\">
        ";
            // line 164
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
            echo "
      </div> <!-- /#footer -->
    </footer> <!-- /#footer-outer-wrapper -->
    ";
        }
        // line 168
        echo "</div></div> <!-- /#page, /#page-wrapper -->
";
    }

    public function getTemplateName()
    {
        return "themes/custom/agave/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 168,  258 => 164,  254 => 163,  251 => 162,  249 => 161,  246 => 160,  240 => 156,  234 => 154,  232 => 153,  229 => 152,  223 => 150,  221 => 149,  218 => 148,  212 => 146,  210 => 145,  207 => 144,  201 => 142,  199 => 141,  194 => 139,  191 => 138,  189 => 137,  183 => 133,  177 => 131,  175 => 130,  172 => 129,  166 => 127,  164 => 126,  160 => 124,  154 => 123,  152 => 122,  147 => 120,  143 => 118,  137 => 114,  131 => 112,  129 => 111,  126 => 110,  120 => 108,  118 => 107,  115 => 106,  109 => 104,  107 => 103,  104 => 102,  98 => 100,  96 => 99,  91 => 97,  88 => 96,  86 => 95,  81 => 92,  75 => 90,  73 => 89,  69 => 88,  61 => 83,  57 => 82,  53 => 81,  48 => 79,  43 => 76,);
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


<div id=\"page-wrapper\" class=\"clearfix\">
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
", "themes/custom/agave/templates/page--front.html.twig", "/var/www/morgan/themes/custom/agave/templates/page--front.html.twig");
    }
}
