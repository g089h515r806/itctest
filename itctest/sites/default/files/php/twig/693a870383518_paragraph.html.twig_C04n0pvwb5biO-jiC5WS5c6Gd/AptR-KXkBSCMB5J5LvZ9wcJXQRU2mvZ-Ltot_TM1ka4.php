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

/* themes/custom/mytheme/templates/paragraph.html.twig */
class __TwigTemplate_c51e3af211ebf613f1ce9df5c674b44a extends Template
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
            'paragraph' => [$this, 'block_paragraph'],
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 42
        $context["classes"] = ["container", "paragraph", ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source,         // line 45
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 45))), ("paragraph--id--" .         // line 46
($context["id"] ?? null)), ((        // line 47
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : ("")), (( !CoreExtension::getAttribute($this->env, $this->source,         // line 48
($context["paragraph"] ?? null), "isPublished", [], "method", false, false, true, 48)) ? ("paragraph--unpublished") : (""))];
        // line 51
        yield from $this->unwrap()->yieldBlock('paragraph', $context, $blocks);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["paragraph", "id", "view_mode", "bgcolor", "attributes", "title", "content"]);        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_paragraph(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 52
        yield "  <div class=\"paragraph-wrapper\" style=\"background-color:";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["bgcolor"] ?? null), "html", null, true);
        yield "\">
\t  <div";
        // line 53
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 53), "html", null, true);
        yield ">
\t    ";
        // line 54
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 57
        yield "\t\t";
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 60
        yield "\t  </div>
  </div>
";
        yield from [];
    }

    // line 54
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 55
        yield "\t\t\t<h1> ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
        yield "</h1>
\t\t";
        yield from [];
    }

    // line 57
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "\t  
\t\t  ";
        // line 58
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(($context["content"] ?? null), "field_title"), "html", null, true);
        yield "
\t\t";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/mytheme/templates/paragraph.html.twig";
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
        return array (  110 => 58,  101 => 57,  93 => 55,  86 => 54,  79 => 60,  76 => 57,  74 => 54,  70 => 53,  65 => 52,  53 => 51,  51 => 48,  50 => 47,  49 => 46,  48 => 45,  47 => 42,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/mytheme/templates/paragraph.html.twig", "E:\\xampp\\htdocs\\itctest\\themes\\custom\\mytheme\\templates\\paragraph.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 42, "block" => 51];
        static $filters = ["clean_class" => 45, "escape" => 52, "without" => 58];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block'],
                ['clean_class', 'escape', 'without'],
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
