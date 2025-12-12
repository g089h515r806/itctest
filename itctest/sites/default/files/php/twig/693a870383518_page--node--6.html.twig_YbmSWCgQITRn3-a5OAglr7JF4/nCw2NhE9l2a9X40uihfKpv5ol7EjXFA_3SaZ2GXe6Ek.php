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

/* themes/custom/mytheme/templates/page--node--6.html.twig */
class __TwigTemplate_1bbeb6a05cc21e8d2b904dee78294632 extends Template
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

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@bootstrap_barrio/layout/page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 72
        $context["sidebar_first_exists"] =  !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 72)), "<img><video><audio><drupal-render-placeholder>")));
        // line 73
        $context["sidebar_second_exists"] =  !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 73)), "<img><video><audio><drupal-render-placeholder>")));
        // line 1
        $this->parent = $this->loadTemplate("@bootstrap_barrio/layout/page.html.twig", "themes/custom/mytheme/templates/page--node--6.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "navbar_top_attributes", "container_navbar", "navbar_attributes", "sidebar_collapse", "content_attributes", "sidebar_first_attributes", "sidebar_second_attributes", "container"]);    }

    // line 75
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 76
        yield "        ";
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 76) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 76)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 76))) {
            // line 77
            yield "          <nav";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["navbar_top_attributes"] ?? null), "html", null, true);
            yield ">
          ";
            // line 78
            if (($context["container_navbar"] ?? null)) {
                // line 79
                yield "          <div class=\"container\">
          ";
            }
            // line 81
            yield "              ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 81), "html", null, true);
            yield "
              ";
            // line 82
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 82), "html", null, true);
            yield "
              ";
            // line 83
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 83)) {
                // line 84
                yield "                <div class=\"form-inline navbar-form float-right\">
                  ";
                // line 85
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 85), "html", null, true);
                yield "
                </div>
              ";
            }
            // line 88
            yield "          ";
            if (($context["container_navbar"] ?? null)) {
                // line 89
                yield "          </div>
          ";
            }
            // line 91
            yield "          </nav>
        ";
        }
        // line 93
        yield "        <nav";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["navbar_attributes"] ?? null), "html", null, true);
        yield ">
          ";
        // line 94
        if (($context["container_navbar"] ?? null)) {
            // line 95
            yield "          <div class=\"container\">
          ";
        }
        // line 97
        yield "            ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 97), "html", null, true);
        yield "
            ";
        // line 98
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 98) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 98))) {
            // line 99
            yield "              <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#CollapsingNavbar\" aria-controls=\"CollapsingNavbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
              <div class=\"collapse navbar-collapse\" id=\"CollapsingNavbar\">
                ";
            // line 101
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 101), "html", null, true);
            yield "
                ";
            // line 102
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 102)) {
                // line 103
                yield "                  <div class=\"form-inline navbar-form float-right\">
                    ";
                // line 104
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 104), "html", null, true);
                yield "
                  </div>
                ";
            }
            // line 107
            yield "\t          </div>
            ";
        }
        // line 109
        yield "            ";
        if (($context["sidebar_collapse"] ?? null)) {
            // line 110
            yield "              <button class=\"navbar-toggler navbar-toggler-left collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#CollapsingLeft\" aria-controls=\"CollapsingLeft\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"></button>
            ";
        }
        // line 112
        yield "          ";
        if (($context["container_navbar"] ?? null)) {
            // line 113
            yield "          </div>
          ";
        }
        // line 115
        yield "        </nav>
";
        yield from [];
    }

    // line 118
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 119
        yield "        <div id=\"main\" >
          ";
        // line 120
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 120), "html", null, true);
        yield "
          <div class=\"row row-offcanvas row-offcanvas-left clearfix\">
              <main";
        // line 122
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_attributes"] ?? null), "html", null, true);
        yield ">
                <section class=\"section\">
                  <a href=\"#main-content\" id=\"main-content\" tabindex=\"-1\"></a>
                  ";
        // line 125
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 125), "html", null, true);
        yield "
                </section>
              </main>
            ";
        // line 128
        if (($context["sidebar_first_exists"] ?? null)) {
            // line 129
            yield "              <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sidebar_first_attributes"] ?? null), "html", null, true);
            yield ">
                <aside class=\"section\" role=\"complementary\">
                  ";
            // line 131
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 131), "html", null, true);
            yield "
                </aside>
              </div>
            ";
        }
        // line 135
        yield "            ";
        if (($context["sidebar_second_exists"] ?? null)) {
            // line 136
            yield "              <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sidebar_second_attributes"] ?? null), "html", null, true);
            yield ">
                <aside class=\"section\" role=\"complementary\">
                  ";
            // line 138
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 138), "html", null, true);
            yield "
                </aside>
              </div>
            ";
        }
        // line 142
        yield "          </div>
        </div>
";
        yield from [];
    }

    // line 146
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 147
        yield "        <div class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true);
        yield "\">
          ";
        // line 148
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 148) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 148)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 148)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 148))) {
            // line 149
            yield "            <div class=\"site-footer__top clearfix\">
              ";
            // line 150
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 150), "html", null, true);
            yield "
              ";
            // line 151
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 151), "html", null, true);
            yield "
              ";
            // line 152
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 152), "html", null, true);
            yield "
              ";
            // line 153
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 153), "html", null, true);
            yield "
            </div>
          ";
        }
        // line 156
        yield "          ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 156)) {
            // line 157
            yield "            <div class=\"site-footer__bottom\">
              ";
            // line 158
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 158), "html", null, true);
            yield "
            </div>
          ";
        }
        // line 161
        yield "        </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/mytheme/templates/page--node--6.html.twig";
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
        return array (  286 => 161,  280 => 158,  277 => 157,  274 => 156,  268 => 153,  264 => 152,  260 => 151,  256 => 150,  253 => 149,  251 => 148,  246 => 147,  239 => 146,  232 => 142,  225 => 138,  219 => 136,  216 => 135,  209 => 131,  203 => 129,  201 => 128,  195 => 125,  189 => 122,  184 => 120,  181 => 119,  174 => 118,  168 => 115,  164 => 113,  161 => 112,  157 => 110,  154 => 109,  150 => 107,  144 => 104,  141 => 103,  139 => 102,  135 => 101,  131 => 99,  129 => 98,  124 => 97,  120 => 95,  118 => 94,  113 => 93,  109 => 91,  105 => 89,  102 => 88,  96 => 85,  93 => 84,  91 => 83,  87 => 82,  82 => 81,  78 => 79,  76 => 78,  71 => 77,  68 => 76,  61 => 75,  55 => 1,  53 => 73,  51 => 72,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/mytheme/templates/page--node--6.html.twig", "E:\\xampp\\htdocs\\itctest\\themes\\custom\\mytheme\\templates\\page--node--6.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["extends" => 1, "set" => 72, "if" => 76];
        static $filters = ["trim" => 72, "striptags" => 72, "render" => 72, "escape" => 77];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['extends', 'set', 'if'],
                ['trim', 'striptags', 'render', 'escape'],
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
