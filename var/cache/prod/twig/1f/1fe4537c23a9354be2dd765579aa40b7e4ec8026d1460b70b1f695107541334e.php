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

/* jury/tsv/accounts.tsv.twig */
class __TwigTemplate_144e21c84ed4d61d6433b17b0c359bffd323f9f50776826266c51b4ec3f866bb extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "accounts\t1
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 3
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->toTsvField(twig_get_attribute($this->env, $this->source, $context["row"], "type", [], "any", false, false, false, 3)), "html", null, true);
            echo "\t";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->toTsvField(twig_get_attribute($this->env, $this->source, $context["row"], "fullname", [], "any", false, false, false, 3)), "html", null, true);
            echo "\t";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->toTsvField(twig_get_attribute($this->env, $this->source, $context["row"], "username", [], "any", false, false, false, 3)), "html", null, true);
            echo "\t";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->toTsvField(twig_get_attribute($this->env, $this->source, $context["row"], "password", [], "any", false, false, false, 3)), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "jury/tsv/accounts.tsv.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/tsv/accounts.tsv.twig", "/opt/domjudge/domserver/webapp/templates/jury/tsv/accounts.tsv.twig");
    }
}
