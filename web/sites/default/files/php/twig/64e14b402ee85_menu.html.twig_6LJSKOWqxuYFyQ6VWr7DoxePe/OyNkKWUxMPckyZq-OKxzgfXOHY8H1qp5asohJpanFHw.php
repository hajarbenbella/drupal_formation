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

/* themes/Home/Property/templates/navigation/menu.html.twig */
class __TwigTemplate_2fa41cdab8ed857b828c03565d750105 extends \Twig\Template
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
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 2, $context, $this->getSourceContext()));
        echo "
";
        // line 38
        echo "

";
    }

    // line 3
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 4
            echo "  ";
            $macros["menus"] = $this;
            // line 5
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 6
                echo "  ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 7
                    echo "         ";
                    // line 8
                    $context["main_classes"] = [0 => "nav", 1 => "navbar-nav", 2 => "navbar-right", 3 => "aa-main-nav"];
                    // line 13
                    echo "      <ul";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["main_classes"] ?? null)], "method", false, false, true, 13), 13, $this->source), "html", null, true);
                    echo ">
        ";
                } else {
                    // line 15
                    echo "        <ul class=\"dropdown-menu \">
          ";
                }
                // line 17
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 18
                    echo "            ";
                    // line 19
                    $context["classes"] = [0 => "menu-item", 1 => ((twig_get_attribute($this->env, $this->source,                     // line 21
$context["item"], "is_expanded", [], "any", false, false, true, 21)) ? ("menu-item--expanded") : ("")), 2 => ((twig_get_attribute($this->env, $this->source,                     // line 22
$context["item"], "is_collapsed", [], "any", false, false, true, 22)) ? ("menu-item--collapsed") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,                     // line 23
$context["item"], "in_active_trail", [], "any", false, false, true, 23)) ? ("menu-item--active-trail") : ("")), 4 => ((twig_get_attribute($this->env, $this->source,                     // line 24
$context["item"], "is_active", [], "any", false, false, true, 24)) ? ("active") : (""))];
                    // line 27
                    echo "            <li";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 27), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 27), 27, $this->source), "html", null, true);
                    echo ">
              ";
                    // line 28
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 28), 28, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 28), 28, $this->source)), "html", null, true);
                    echo "
              ";
                    // line 29
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 29)) {
                        // line 30
                        echo "                ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 30), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 30, $context, $this->getSourceContext()));
                        echo "
              ";
                    }
                    // line 32
                    echo "            </li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "      </ul>

  ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/Home/Property/templates/navigation/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 34,  119 => 32,  113 => 30,  111 => 29,  107 => 28,  102 => 27,  100 => 24,  99 => 23,  98 => 22,  97 => 21,  96 => 19,  94 => 18,  89 => 17,  85 => 15,  79 => 13,  77 => 8,  75 => 7,  72 => 6,  69 => 5,  66 => 4,  51 => 3,  45 => 38,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/Home/Property/templates/navigation/menu.html.twig", "C:\\xampp\\htdocs\\drupal\\web\\themes\\Home\\Property\\templates\\navigation\\menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 1, "macro" => 3, "if" => 5, "set" => 8, "for" => 17);
        static $filters = array("escape" => 13);
        static $functions = array("link" => 28);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'set', 'for'],
                ['escape'],
                ['link']
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
