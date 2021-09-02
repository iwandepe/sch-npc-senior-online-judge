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

/* partials/scoreboard_summary.html.twig */
class __TwigTemplate_6eb2e5a842db7d607175dee37f67ed152d0b38121930327e56fdcdafbfc96d53 extends \Twig\Template
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
        if ((null === ($context["limitToTeamIds"] ?? null))) {
            // line 2
            echo "    ";
            if ((($context["showTeamSubmissions"] ?? null) || ($context["jury"] ?? null))) {
                // line 3
                echo "        <tr style=\"border-top: 2px solid black;\">
            ";
                // line 4
                $context["summaryColspan"] = 3;
                // line 5
                echo "            ";
                if (($context["showAffiliationLogos"] ?? null)) {
                    // line 6
                    echo "                ";
                    $context["summaryColspan"] = (($context["summaryColspan"] ?? null) + 1);
                    // line 7
                    echo "            ";
                }
                // line 8
                echo "            <td id=\"scoresummary\" title=\"Summary\" colspan=\"";
                echo twig_escape_filter($this->env, ($context["summaryColspan"] ?? null), "html", null, true);
                echo "\">Summary</td>
            ";
                // line 9
                if (twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "showPoints", [], "any", false, false, false, 9)) {
                    // line 10
                    echo "                <td class=\"scorenc\"></td>
            ";
                } else {
                    // line 12
                    echo "                <td title=\"total solved\" class=\"scorenc\">
                    ";
                    // line 13
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "summary", [], "any", false, false, false, 13), "numberOfPoints", [0 => ($context["sortOrder"] ?? null)], "method", false, false, false, 13), "html", null, true);
                    echo "
                </td>
            ";
                }
                // line 16
                echo "            <td></td>
            ";
                // line 17
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "problems", [], "any", false, false, false, 17));
                foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                    // line 18
                    echo "                ";
                    $context["summary"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "summary", [], "any", false, false, false, 18), "problem", [0 => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 18)], "method", false, false, false, 18);
                    // line 19
                    echo "                <td style=\"text-align: left;\">
                    ";
                    // line 20
                    $context["link"] = null;
                    // line 21
                    echo "                    ";
                    if (($context["jury"] ?? null)) {
                        // line 22
                        echo "                        ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem", ["probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 22)]);
                        // line 23
                        echo "                    ";
                    }
                    // line 24
                    echo "                    <a ";
                    if (($context["link"] ?? null)) {
                        echo "href=\"";
                        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                        <i class=\"fas fa-thumbs-up fa-fw\"></i>
                        <span style=\"font-size:90%;\" title=\"number of accepted submissions\">
                                ";
                    // line 27
                    (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "numSubmissionsCorrect", [], "any", false, true, false, 27), ($context["sortOrder"] ?? null), [], "array", true, true, false, 27) &&  !(null === (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "numSubmissionsCorrect", [], "any", false, true, false, 27)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["sortOrder"] ?? null)] ?? null) : null)))) ? (print (twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "numSubmissionsCorrect", [], "any", false, true, false, 27)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["sortOrder"] ?? null)] ?? null) : null), "html", null, true))) : (print (0)));
                    echo "
                            </span>
                        <br/>

                        <i class=\"fas fa-thumbs-down fa-fw\"></i>
                        <span style=\"font-size:90%;\" title=\"number of rejected submissions\">
                                ";
                    // line 33
                    echo twig_escape_filter($this->env, ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "numSubmissions", [], "any", false, true, false, 33), ($context["sortOrder"] ?? null), [], "array", true, true, false, 33) &&  !(null === (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "numSubmissions", [], "any", false, true, false, 33)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[($context["sortOrder"] ?? null)] ?? null) : null)))) ? ((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "numSubmissions", [], "any", false, true, false, 33)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[($context["sortOrder"] ?? null)] ?? null) : null)) : (0)) - (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "numSubmissionsCorrect", [], "any", false, true, false, 33), ($context["sortOrder"] ?? null), [], "array", true, true, false, 33) &&  !(null === (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "numSubmissionsCorrect", [], "any", false, true, false, 33)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[($context["sortOrder"] ?? null)] ?? null) : null)))) ? ((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "numSubmissionsCorrect", [], "any", false, true, false, 33)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[($context["sortOrder"] ?? null)] ?? null) : null)) : (0))), "html", null, true);
                    echo "
                            </span>
                        <br/>

                        <i class=\"fas fa-question-circle fa-fw\"></i>
                        <span style=\"font-size:90%;\" title=\"number of pending submissions\">
                                ";
                    // line 39
                    (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "numSubmissionsPending", [], "any", false, true, false, 39), ($context["sortOrder"] ?? null), [], "array", true, true, false, 39) &&  !(null === (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = twig_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "numSubmissionsPending", [], "any", false, true, false, 39)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[($context["sortOrder"] ?? null)] ?? null) : null)))) ? (print (twig_escape_filter($this->env, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = twig_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "numSubmissionsPending", [], "any", false, true, false, 39)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[($context["sortOrder"] ?? null)] ?? null) : null), "html", null, true))) : (print (0)));
                    echo "
                            </span>
                        <br/>

                        <i class=\"fas fa-clock fa-fw\"></i>
                        <span style=\"font-size:90%;\" title=\"first solved\">
                            ";
                    // line 45
                    if ( !(null === twig_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "bestTimeInMinutes", [0 => ($context["sortOrder"] ?? null)], "method", false, false, false, 45))) {
                        // line 46
                        echo "                                ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "bestTimeInMinutes", [0 => ($context["sortOrder"] ?? null)], "method", false, false, false, 46), "html", null, true);
                        echo "min
                            ";
                    } else {
                        // line 48
                        echo "                                n/a
                            ";
                    }
                    // line 50
                    echo "                        </span>
                    </a>
                </td>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "        </tr>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "partials/scoreboard_summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 54,  150 => 50,  146 => 48,  140 => 46,  138 => 45,  129 => 39,  120 => 33,  111 => 27,  100 => 24,  97 => 23,  94 => 22,  91 => 21,  89 => 20,  86 => 19,  83 => 18,  79 => 17,  76 => 16,  70 => 13,  67 => 12,  63 => 10,  61 => 9,  56 => 8,  53 => 7,  50 => 6,  47 => 5,  45 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/scoreboard_summary.html.twig", "/opt/domjudge/domserver/webapp/templates/partials/scoreboard_summary.html.twig");
    }
}
