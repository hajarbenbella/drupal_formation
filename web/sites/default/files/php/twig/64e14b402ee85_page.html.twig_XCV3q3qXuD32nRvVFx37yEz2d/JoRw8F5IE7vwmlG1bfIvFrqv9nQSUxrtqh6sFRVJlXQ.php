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

/* themes/Home/Property/templates/page/page.html.twig */
class __TwigTemplate_a5b3110da786c55d8cc94ad2d45f020d extends \Twig\Template
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
        echo " <!-- SCROLL TOP BUTTON -->
    <a class=\"scrollToTop\" href=\"#\"><i class=\"fa fa-angle-double-up\"></i></a>
  <!-- END SCROLL TOP BUTTON -->
<!-- Start header section -->
<header id=\"aa-header\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"aa-header-area\">
          <div class=\"row\">
            <div class=\"col-md-6 col-sm-6 col-xs-6\">
              <div class=\"aa-header-left\">
                <div class=\"aa-telephone-no row\">
                  ";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sup_header", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
        echo " 
                </div>
              </div>
            </div>
            <div class=\"col-md-6 col-sm-6 col-xs-6\">
              <div class=\"aa-header-right\">
                <a href=\"\" class=\"aa-register\">Register</a>
                <a href=\"";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("user.login"));
        echo "\" class=\"aa-login\">Login</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- End header section -->
<!-- Start menu section -->
<section id=\"aa-menu-area\">
  <nav class=\"navbar navbar-default main-navbar\" role=\"navigation\">
    <div class=\"container\">
      <div class=\"navbar-header\">
        <!-- LOGO -->
        <!-- Text based logo -->
        <a class=\"navbar-brand aa-logo\" href=\"\"> Home <span>Property</span></a>
      </div>
      ";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
        echo "
    </div>
  </nav>
</section>
<!-- End menu section -->  

<!-- Start content section -->
 ";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hp_content", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
        echo "
  ";
        // line 48
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
        echo "

<!-- End content section -->
<!-- Footer -->
<footer id=\"aa-footer\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"aa-footer-area\">
          <div class=\"row\">
            <div class=\"col-md-3 col-sm-6 col-xs-12\">
              <div class=\"aa-footer-left\">
                ";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
        echo "
                <p>Designed by <a rel=\"nofollow\" href=\"http://www.markups.io/\">MarkUps.io</a></p>
              </div>
            </div>
            <div class=\"col-md-3 col-sm-6 col-xs-12\">
              <div class=\"aa-footer-middle\">
                <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                <a href=\"#\"><i class=\"fa fa-google-plus\"></i></a>
                <a href=\"#\"><i class=\"fa fa-youtube\"></i></a>
              </div>
            </div>
            <div class=\"col-md-6 col-sm-12 col-xs-12\">
              <div class=\"aa-footer-right\">
                ";
        // line 74
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
        echo "
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- / Footer -->
";
    }

    public function getTemplateName()
    {
        return "themes/Home/Property/templates/page/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 74,  115 => 60,  100 => 48,  96 => 47,  86 => 40,  64 => 21,  54 => 14,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/Home/Property/templates/page/page.html.twig", "C:\\xampp\\htdocs\\drupal\\web\\themes\\Home\\Property\\templates\\page\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 14);
        static $functions = array("path" => 21);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['path']
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
