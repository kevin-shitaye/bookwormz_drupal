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

/* core/themes/tara/templates/content/comment.html.twig */
class __TwigTemplate_7cf00f5b31734de566d05c5445259084e9453edf9031f72d2235eb9b6166b114 extends \Twig\Template
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
        // line 67
        echo "
<article";
        // line 68
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "js-comment single-comment"], "method", false, false, true, 68), 68, $this->source), "html", null, true);
        echo ">
  ";
        // line 74
        echo "  ";
        if (($context["comment_user_pic"] ?? null)) {
            // line 75
            echo "  ";
            if (($context["user_picture"] ?? null)) {
                // line 76
                echo "    <header class=\"comment-user-picture\">
      ";
                // line 77
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_picture"] ?? null), 77, $this->source), "html", null, true);
                echo "
      <mark class=\"hidden\" data-comment-timestamp=\"";
                // line 78
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["new_indicator_timestamp"] ?? null), 78, $this->source), "html", null, true);
                echo "\"></mark>
    </header>
  ";
            }
            // line 81
            echo "  ";
        }
        // line 82
        echo "
  <div class=\"single-comment-content-body\">
    ";
        // line 84
        if (($context["title"] ?? null)) {
            // line 85
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 85, $this->source), "html", null, true);
            echo "
      <h3";
            // line 86
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "single-comment-title"], "method", false, false, true, 86), 86, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 86, $this->source), "html", null, true);
            echo "</h3>
      ";
            // line 87
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 87, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 89
        echo "
    <div class=\"single-comment-meta\">
      <span>";
        // line 91
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author"] ?? null), 91, $this->source), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["created"] ?? null), 91, $this->source), "html", null, true);
        echo "</span>
      ";
        // line 92
        if (($context["parent"] ?? null)) {
            // line 93
            echo "        <p class=\"visually-hidden\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["parent"] ?? null), 93, $this->source), "html", null, true);
            echo "</p>
      ";
        }
        // line 95
        echo "    </div> <!-- /.single-comment-meta -->

    <div";
        // line 97
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "single-comment-content"], "method", false, false, true, 97), 97, $this->source), "html", null, true);
        echo ">
      ";
        // line 98
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 98, $this->source), "html", null, true);
        echo "
    </div>
  </div> <!-- /.single-comment-content -->
</article>
";
    }

    public function getTemplateName()
    {
        return "core/themes/tara/templates/content/comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 98,  112 => 97,  108 => 95,  102 => 93,  100 => 92,  94 => 91,  90 => 89,  85 => 87,  79 => 86,  74 => 85,  72 => 84,  68 => 82,  65 => 81,  59 => 78,  55 => 77,  52 => 76,  49 => 75,  46 => 74,  42 => 68,  39 => 67,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/tara/templates/content/comment.html.twig", "/opt/lampp/htdocs/bookwormz_drupal/core/themes/tara/templates/content/comment.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 74);
        static $filters = array("escape" => 68);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
