<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/blog/templates/page.html.twig */
class __TwigTemplate_753734ce36ecc52f715fd78e9334c19b738f53455614067c42de0bd2430db724 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 10];
        $filters = ["t" => 2, "escape" => 5];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div id=\"page\">
<header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"";
        // line 2
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Site header"));
        echo "\">

    <div class=\"section layout-container clearfix\">
    ";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
    ";
        // line 6
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
        echo "
    </div>

</header>
";
        // line 10
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 11
            echo "    <div class=\"highlighted\">
    <aside class=\"layout-container section clearfix\" role=\"complementary\">
        ";
            // line 13
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
    </aside>
    </div>
";
        }
        // line 17
        echo "<div id=\"main-wrapper\" class=\"layout-main-wrapper layout-container clearfix\">
    <div id=\"main\" class=\"layout-main clearfix\">
    <main id=\"content\" class=\"column main-content\" role=\"main\">
    ";
        // line 20
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 21
            echo "        <div id=\"sidebar-first\" class=\"column sidebar\">
        <aside class=\"section\" role=\"complementary\">
            ";
            // line 23
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
        </aside>
        </div>
    ";
        }
        // line 27
        echo "        <section class=\"section\">
        <a id=\"main-content\" tabindex=\"-1\"></a>
        ";
        // line 29
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
        </section>
    
    ";
        // line 32
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 33
            echo "        <div id=\"sidebar-second\" class=\"column sidebar\">
        <aside class=\"section\" role=\"complementary\">
            ";
            // line 35
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
        </aside>
        </div>
    ";
        }
        // line 39
        echo "    </div>
    </main>
</div>
<footer class=\"site-footer\">
    <div class=\"layout-container\">
    ";
        // line 44
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 45
            echo "        <div class=\"site-footer__top clearfix\">
        ";
            // line 46
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 49
        echo "    </div>
</footer>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/blog/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 49,  141 => 46,  138 => 45,  136 => 44,  129 => 39,  122 => 35,  118 => 33,  116 => 32,  110 => 29,  106 => 27,  99 => 23,  95 => 21,  93 => 20,  88 => 17,  81 => 13,  77 => 11,  75 => 10,  68 => 6,  64 => 5,  58 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/blog/templates/page.html.twig", "/home/wamont2-14/sites/Drupal/blogVoix/themes/blog/templates/page.html.twig");
    }
}
