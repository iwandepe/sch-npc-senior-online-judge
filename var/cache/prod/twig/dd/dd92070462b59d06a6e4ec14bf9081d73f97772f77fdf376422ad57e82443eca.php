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

/* base.html.twig */
class __TwigTemplate_c547491dad577351d3a0492081f41efde3ba83b5ba58be1e984dc65fb19ca404 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'extrahead' => [$this, 'block_extrahead'],
            'menu' => [$this, 'block_menu'],
            'body' => [$this, 'block_body'],
            'messages' => [$this, 'block_messages'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'extrafooter' => [$this, 'block_extrafooter'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <!-- DOMjudge version ";
        // line 4
        echo twig_escape_filter($this->env, ($context["DOMJUDGE_VERSION"] ?? null), "html", null, true);
        echo " -->
    <meta charset=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["DJ_CHARACTER_SET"] ?? null), "html", null, true);
        echo "\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/fontawesome-all.min.css"), "html", null, true);
        echo "\">
    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/domjudge.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 16
        $this->displayBlock('extrahead', $context, $blocks);
        // line 21
        echo "</head>
<body style=\"padding-top: 4.5rem;\">
";
        // line 23
        $this->displayBlock('menu', $context, $blocks);
        // line 24
        $this->displayBlock('body', $context, $blocks);
        // line 36
        echo "
<script>
    ";
        // line 38
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 38)) {
            // line 39
            echo "        var domjudge_base_url = \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 39), "getBaseURL", [], "method", false, false, false, 39), "html", null, true);
            echo "\";
    ";
        }
        // line 41
        echo "    \$(function () {
        \$('body').on('change', '.custom-file-input', function () {
            var files = this.files;
            var fileNames = [];
            for (var i = 0; i < files.length; i++) {
                fileNames.push(files.item(i).name);
            }
            \$(this).next('.custom-file-label').html(fileNames.join(\", \"));
            \$(this).next('.custom-file-label').removeClass('text-muted');
        });

        /* toggle refresh if set */
        ";
        // line 53
        if (((isset($context["refresh"]) || array_key_exists("refresh", $context)) && ($context["refresh"] ?? null))) {
            // line 54
            echo "        \$('#refresh-navitem').on('click', function () {
            toggleRefresh('";
            // line 55
            echo twig_get_attribute($this->env, $this->source, ($context["refresh"] ?? null), "url", [], "any", false, false, false, 55);
            echo "', ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["refresh"] ?? null), "after", [], "any", false, false, false, 55), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["refresh"] ?? null), "ajax", [], "any", true, true, false, 55)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["refresh"] ?? null), "ajax", [], "any", false, false, false, 55), 0)) : (0)), "html", null, true);
            echo ");
        });
        ";
        }
        // line 58
        echo "        /* Enable page refresh if set if wanted by the page, and wanted by the user */
        ";
        // line 59
        if ((((isset($context["refresh"]) || array_key_exists("refresh", $context)) && ($context["refresh"] ?? null)) && ($context["refresh_flag"] ?? null))) {
            // line 60
            echo "        enableRefresh('";
            echo twig_get_attribute($this->env, $this->source, ($context["refresh"] ?? null), "url", [], "any", false, false, false, 60);
            echo "', ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["refresh"] ?? null), "after", [], "any", false, false, false, 60), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["refresh"] ?? null), "ajax", [], "any", true, true, false, 60)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["refresh"] ?? null), "ajax", [], "any", false, false, false, 60), 0)) : (0)), "html", null, true);
            echo ");
        ";
        }
        // line 62
        echo "
        initializeAjaxModals();
    });
</script>
";
        // line 66
        $this->displayBlock('footer', $context, $blocks);
        // line 67
        $this->displayBlock('extrafooter', $context, $blocks);
        // line 68
        echo "</body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "DOMjudge";
    }

    // line 16
    public function block_extrahead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style_domjudge.css"), "html", null, true);
        echo "\">

        ";
        // line 19
        echo twig_escape_filter($this->env, (((isset($context["extrahead"]) || array_key_exists("extrahead", $context))) ? (_twig_default_filter(($context["extrahead"] ?? null), "")) : ("")), "html", null, true);
        echo "
    ";
    }

    // line 23
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 24
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-12\">
                ";
        // line 28
        $this->displayBlock('messages', $context, $blocks);
        // line 31
        echo "                ";
        $this->displayBlock('content', $context, $blocks);
        // line 32
        echo "            </div>
        </div>
    </div>
";
    }

    // line 28
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "                    ";
        $this->loadTemplate("partials/messages.html.twig", "base.html.twig", 29)->display($context);
        // line 30
        echo "                ";
    }

    // line 31
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo ($context["body"] ?? null);
    }

    // line 66
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 67
    public function block_extrafooter($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 67,  239 => 66,  232 => 31,  228 => 30,  225 => 29,  221 => 28,  214 => 32,  211 => 31,  209 => 28,  204 => 25,  200 => 24,  194 => 23,  188 => 19,  182 => 17,  178 => 16,  171 => 6,  165 => 68,  163 => 67,  161 => 66,  155 => 62,  145 => 60,  143 => 59,  140 => 58,  130 => 55,  127 => 54,  125 => 53,  111 => 41,  105 => 39,  103 => 38,  99 => 36,  97 => 24,  95 => 23,  91 => 21,  89 => 16,  85 => 15,  80 => 13,  76 => 12,  72 => 11,  68 => 10,  62 => 7,  58 => 6,  54 => 5,  50 => 4,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/opt/domjudge/domserver/webapp/templates/base.html.twig");
    }
}
