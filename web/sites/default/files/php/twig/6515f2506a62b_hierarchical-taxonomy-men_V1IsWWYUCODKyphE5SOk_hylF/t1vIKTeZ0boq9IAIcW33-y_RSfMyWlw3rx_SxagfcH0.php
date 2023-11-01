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

/* modules/contrib/hierarchical_taxonomy_menu/templates/hierarchical-taxonomy-menu.html.twig */
class __TwigTemplate_8617302f7073b19d4d28f74ad5a1bb51 extends Template
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
        // line 30
        echo "
";
        // line 31
        $macros["macros"] = $this->macros["macros"] = $this;
        // line 32
        echo "<ul class=\"menu hierarchical-taxonomy-menu block-taxonomymenu__menu\">
  ";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["macros"], "macro_menu_links", [($context["menu_tree"] ?? null), ($context["route_tid"] ?? null), 0, ($context["max_depth"] ?? null), ($context["collapsible"] ?? null)], 33, $context, $this->getSourceContext()));
        echo "
</ul>
";
    }

    // line 1
    public function macro_menu_links($__menu_tree__ = null, $__route_tid__ = null, $__current_depth__ = null, $__max_depth__ = null, $__collapsible__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "menu_tree" => $__menu_tree__,
            "route_tid" => $__route_tid__,
            "current_depth" => $__current_depth__,
            "max_depth" => $__max_depth__,
            "collapsible" => $__collapsible__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 2
            echo "  ";
            $macros["macros"] = $this;
            // line 3
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["menu_tree"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 4
                echo "    ";
                // line 5
                $context["liClass"] = [0 => (((twig_get_attribute($this->env, $this->source,                 // line 6
$context["item"], "subitem", [], "any", false, false, true, 6) && (($context["current_depth"] ?? null) < ($context["max_depth"] ?? null)))) ? ("menu-item menu-item--expanded block-taxonomymenu__menu-item block-taxonomymenu__menu-item--expanded") : ("menu-item block-taxonomymenu__menu-item")), 1 => (((                // line 7
($context["route_tid"] ?? null) == twig_get_attribute($this->env, $this->source, $context["item"], "tid", [], "any", false, false, true, 7))) ? ("menu-item--active block-taxonomymenu__menu-item--active") : (""))];
                // line 10
                echo "    <li class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(($context["liClass"] ?? null), 10, $this->source), " "), "html", null, true);
                echo "\">
      ";
                // line 11
                if (twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, true, 11)) {
                    // line 12
                    echo "        <img class=\"menu-item-image block-taxonomymenu__image\" src=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
                    echo "\" alt=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, $context["item"], "use_image_style", [], "any", false, false, true, 12) == false)) {
                        echo "height=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "height", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
                        echo "\" width=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "width", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
                        echo "\"";
                    }
                    echo " />
      ";
                }
                // line 14
                echo "        <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
                echo "\" class=\"block-taxonomymenu__link ";
                if ((($context["route_tid"] ?? null) == twig_get_attribute($this->env, $this->source, $context["item"], "tid", [], "any", false, false, true, 14))) {
                    echo "active block-taxonomymenu__link--active";
                }
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "show_count", [], "any", false, false, true, 14) == true)) {
                    echo " [";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "entities", [], "any", false, false, true, 14), 14, $this->source)), "html", null, true);
                    echo "]";
                }
                echo "</a>
      ";
                // line 15
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "subitem", [], "any", false, false, true, 15) && (($context["current_depth"] ?? null) < ($context["max_depth"] ?? null)))) {
                    // line 16
                    echo "        ";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "interactive_parent", [], "any", false, false, true, 16)) {
                        // line 17
                        echo "          <i class=\"arrow-right parent-toggle\" aria-hidden=\"true\"></i><span class=\"visually-hidden\">Expand Secondary Navigation Menu</span>
        ";
                    }
                    // line 19
                    echo "        ";
                    if ((($context["collapsible"] ?? null) == true)) {
                        // line 20
                        echo "          <ul class=\"menu block-taxonomymenu__submenu collapsed-submenu\">
        ";
                    } else {
                        // line 22
                        echo "          <ul class=\"menu block-taxonomymenu__submenu\">
        ";
                    }
                    // line 24
                    echo "          ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["macros"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "subitem", [], "any", false, false, true, 24), ($context["route_tid"] ?? null), (($context["current_depth"] ?? null) + 1), ($context["max_depth"] ?? null), ($context["collapsible"] ?? null)], 24, $context, $this->getSourceContext()));
                    echo "
        </ul>
      ";
                }
                // line 27
                echo "    </li>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "modules/contrib/hierarchical_taxonomy_menu/templates/hierarchical-taxonomy-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 27,  144 => 24,  140 => 22,  136 => 20,  133 => 19,  129 => 17,  126 => 16,  124 => 15,  108 => 14,  92 => 12,  90 => 11,  85 => 10,  83 => 7,  82 => 6,  81 => 5,  79 => 4,  74 => 3,  71 => 2,  54 => 1,  47 => 33,  44 => 32,  42 => 31,  39 => 30,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/hierarchical_taxonomy_menu/templates/hierarchical-taxonomy-menu.html.twig", "/home/arnicole/home/arnicole/public_html/sb/sb1/web/modules/contrib/hierarchical_taxonomy_menu/templates/hierarchical-taxonomy-menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 31, "macro" => 1, "for" => 3, "set" => 5, "if" => 11);
        static $filters = array("escape" => 10, "join" => 10, "length" => 14);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'for', 'set', 'if'],
                ['escape', 'join', 'length'],
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
