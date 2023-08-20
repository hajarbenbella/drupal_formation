<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/Home/Property/templates/views/proprety/views-view-fields--latest-properties-views.html.twig */
class __TwigTemplate_29926288e7d0378fad68ac0c50006a8d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "  <div class=\"aa-properties-item-img\">
                  ";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_image_proprietes_", [], "any", false, false, true, 2), "content", [], "any", false, false, true, 2), 2, $this->source), "html", null, true);
        echo " 
                </div>
                 <div class=\"aa-tag for-sale\">
                ";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_type_de_vente", [], "any", false, false, true, 5), "content", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo " 
                </div>
                <div class=\"aa-properties-item-content\">
                  <div class=\"aa-properties-info\">
                    <span>";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_pieces_de_maison", [], "any", false, false, true, 9), "content", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo " </span>
                   
                  </div>
                  <div class=\"aa-properties-about\">
                    <h3><a href=\"#\">";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 13), "content", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
        echo " </a></h3>
                    <p>";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "body", [], "any", false, false, true, 14), "content", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
        echo " </p>                      
                  </div>
                  <div class=\"aa-properties-detial\">
                    <span class=\"aa-price\">
                      \$";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_prix", [], "any", false, false, true, 18), "content", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        echo "
                    </span>
                    ";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "view_node", [], "any", false, false, true, 20), "content", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "
                  </div>
                </div>
             ";
    }

    public function getTemplateName()
    {
        return "themes/Home/Property/templates/views/proprety/views-view-fields--latest-properties-views.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 20,  73 => 18,  66 => 14,  62 => 13,  55 => 9,  48 => 5,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/Home/Property/templates/views/proprety/views-view-fields--latest-properties-views.html.twig", "C:\\xampp\\htdocs\\drupal\\web\\themes\\Home\\Property\\templates\\views\\proprety\\views-view-fields--latest-properties-views.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 2);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
