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

/* core/modules/g2_reviews/templates/g2-product-reviews-widget-list.html.twig */
class __TwigTemplate_4cbf5d43efc6c36b11db5ef12f0455085c05757a404face3ee0b345d3857ae31 extends \Twig\Template
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
        // line 41
        echo "
";
        // line 43
        $context["classes"] = [0 => "g2-product-reviews-widget-list"];
        // line 47
        $context["block_id"] = ("g2-product-" . $this->sandbox->ensureToStringAllowed(($context["product_id"] ?? null), 47, $this->source));
        // line 48
        echo "
<div data-product_id=\"";
        // line 49
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["product_id"] ?? null), 49, $this->source), "html", null, true);
        echo "\" ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 49), "setAttribute", [0 => "id", 1 => ($context["block_id"] ?? null)], "method", false, false, true, 49), 49, $this->source), "html", null, true);
        echo ">

  ";
        // line 51
        if (($context["filters_form"] ?? null)) {
            // line 52
            echo "    <div class=\"g2-product-review-filters\">
      ";
            // line 53
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["filters_form"] ?? null), 53, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 56
        echo "
  ";
        // line 57
        if (($context["reviews"] ?? null)) {
            // line 58
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 59
                echo "      <div class=\"g2-product-review-item-list\">

        <div class=\"g2-header-part\">

          <div class=\"g2-left-sidebar\">

            <div class=\"g2-product-review-item\">
              <a href=\"";
                // line 66
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["review"], "url", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
                echo "\">\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["review"], "title", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
                echo "\"</a>
            </div>

            <div class=\"g2-product-review-item g2-star-rating\">
              <div class=\"g2-star-rating-icons\" data-rating=\"";
                // line 70
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["review"], "star_rating", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
                echo "\"></div>
              <div class=\"g2-star-rating-text\">";
                // line 71
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["review"], "star_rating_text", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
                echo "</div>
            </div>

            <div class=\"g2-product-review-item user\">
              ";
                // line 75
                if (twig_get_attribute($this->env, $this->source, $context["review"], "user", [], "any", false, false, true, 75)) {
                    // line 76
                    echo "                ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["review"], "user", [], "any", false, false, true, 76), "name", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
                    echo "
              ";
                }
                // line 78
                echo "            </div>

          </div>

          <div class=\"g2-right-sidebar\">

            <div class=\"g2-posted-on-wrapper\">
              <div class=\"g2-posted-on-label\">";
                // line 85
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Posted on:"));
                echo "</div>
              <div class=\"g2-posted-on-info\">";
                // line 86
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["review"], "published_at", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
                echo "</div>
            </div>

            <div class=\"g2-posted-company-segment-wrapper\">
              <div class=\"g2-posted-company-segment-label\">";
                // line 90
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Entertainment"));
                echo "</div>
              <div class=\"g2-posted-company-segment\">
                ";
                // line 92
                if (twig_get_attribute($this->env, $this->source, $context["review"], "user", [], "any", false, false, true, 92)) {
                    // line 93
                    echo "                  ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["review"], "user", [], "any", false, false, true, 93), "company_segment", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
                    echo "
                ";
                }
                // line 95
                echo "              </div>
            </div>

          </div>
        </div>

        ";
                // line 101
                if (twig_get_attribute($this->env, $this->source, $context["review"], "answers", [], "any", false, false, true, 101)) {
                    // line 102
                    echo "
          <div class=\"g2-product-review-item g2-content g2-hidecontent\">
            ";
                    // line 104
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["review"], "answers", [], "any", false, false, true, 104));
                    foreach ($context['_seq'] as $context["index"] => $context["answer"]) {
                        // line 105
                        echo "
              ";
                        // line 106
                        if (($context["index"] == "love")) {
                            // line 107
                            echo "                <div class=\"g2-question-wrapper no-margin\">
              ";
                        } else {
                            // line 109
                            echo "                <div class=\"g2-question-wrapper\">
              ";
                        }
                        // line 111
                        echo "
                <div class=\"g2-question\">";
                        // line 112
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["answer"], "text", [], "any", false, false, true, 112), 112, $this->source)));
                        echo "</div>
                <div class=\"g2-answer\">";
                        // line 113
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["answer"], "value", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
                        echo "</div>
              </div>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['index'], $context['answer'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 116
                    echo "          </div>
          <p class=\"g2-show-more\">";
                    // line 117
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Show more"));
                    echo "</p>

        ";
                }
                // line 120
                echo "      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            echo "
    ";
            // line 123
            if (($context["pager"] ?? null)) {
                // line 124
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 124, $this->source), "html", null, true);
                echo "
    ";
            }
            // line 126
            echo "
  ";
        } else {
            // line 128
            echo "    <div>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("No results found"));
            echo "</div>
  ";
        }
        // line 130
        echo "
  <a
    href=\"";
        // line 132
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getPath($this->sandbox->ensureToStringAllowed(($context["review_form_route"] ?? null), 132, $this->source), ["pid" => ($context["product_id"] ?? null)]), "html", null, true);
        echo "\"
    target=\"_blank\"
    class=\"button\"
  >
    ";
        // line 136
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Leave a review"));
        echo "
  </a>
</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/g2_reviews/templates/g2-product-reviews-widget-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 136,  235 => 132,  231 => 130,  225 => 128,  221 => 126,  215 => 124,  213 => 123,  210 => 122,  203 => 120,  197 => 117,  194 => 116,  185 => 113,  181 => 112,  178 => 111,  174 => 109,  170 => 107,  168 => 106,  165 => 105,  161 => 104,  157 => 102,  155 => 101,  147 => 95,  141 => 93,  139 => 92,  134 => 90,  127 => 86,  123 => 85,  114 => 78,  108 => 76,  106 => 75,  99 => 71,  95 => 70,  86 => 66,  77 => 59,  72 => 58,  70 => 57,  67 => 56,  61 => 53,  58 => 52,  56 => 51,  49 => 49,  46 => 48,  44 => 47,  42 => 43,  39 => 41,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/modules/g2_reviews/templates/g2-product-reviews-widget-list.html.twig", "/opt/lampp/htdocs/bookwormz_drupal/core/modules/g2_reviews/templates/g2-product-reviews-widget-list.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 43, "if" => 51, "for" => 58);
        static $filters = array("escape" => 49, "t" => 85);
        static $functions = array("path" => 132);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape', 't'],
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
