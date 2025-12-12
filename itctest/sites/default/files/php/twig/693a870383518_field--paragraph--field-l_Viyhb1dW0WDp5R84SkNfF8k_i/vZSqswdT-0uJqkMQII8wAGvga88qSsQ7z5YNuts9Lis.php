<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/custom/mytheme/templates/field--paragraph--field-leaders.html.twig */
class __TwigTemplate_583d2f369069c51b1b1ad14f40991b36 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 25
        $context["classes"] = ["field", ("field--name-" . \Drupal\Component\Utility\Html::getClass(        // line 27
($context["field_name"] ?? null))), ("field--type-" . \Drupal\Component\Utility\Html::getClass(        // line 28
($context["field_type"] ?? null))), ("field--label-" .         // line 29
($context["label_display"] ?? null)), "clearfix"];
        // line 34
        $context["title_classes"] = ["field__label", (((        // line 36
($context["label_display"] ?? null) == "inline")) ? ("inline") : (""))];
        // line 39
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 39), "html", null, true);
        yield ">

\t<div id=\"carouselExampleFade\" class=\"carousel slide carousel-fade\" data-bs-ride=\"carousel\">
\t  <div class=\"carousel-inner\">
\t    ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 44
            yield "\t\t<div class=\"carousel-item";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 44) == 1)) ? (" active") : ("")));
            yield "\">
\t\t   <div class=\"leader-item\">";
            // line 45
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 45), "html", null, true);
            yield "</div>
\t\t</div>
\t\t ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        yield "
\t  </div>
\t  <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleFade\" data-bs-slide=\"prev\">
\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t<span class=\"visually-hidden\">Previous</span>
\t  </button>
\t  <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleFade\" data-bs-slide=\"next\">
\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t<span class=\"visually-hidden\">Next</span>
\t  </button>
\t</div>


</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["field_name", "field_type", "label_display", "attributes", "items", "loop"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/mytheme/templates/field--paragraph--field-leaders.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  99 => 48,  82 => 45,  77 => 44,  60 => 43,  52 => 39,  50 => 36,  49 => 34,  47 => 29,  46 => 28,  45 => 27,  44 => 25,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/mytheme/templates/field--paragraph--field-leaders.html.twig", "E:\\xampp\\htdocs\\itctest\\themes\\custom\\mytheme\\templates\\field--paragraph--field-leaders.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 25, "for" => 43];
        static $filters = ["clean_class" => 27, "escape" => 39];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
                ['clean_class', 'escape'],
                [],
                $this->source
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
