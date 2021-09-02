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

/* jury/partials/rejudge_form.html.twig */
class __TwigTemplate_9b7f4f322378fc44a6998488fa7974dc45bb09de05b18fe363e30dac09c51c70 extends \Twig\Template
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
        // line 2
        echo "
";
        // line 3
        ob_start(function () { return ''; });
        // line 4
        echo "    ";
        $context["buttonText"] = ((("Rejudge all for " . ($context["table"] ?? null)) . " ") . ($context["id"] ?? null));
        // line 5
        echo "    ";
        $context["questionText"] = (("Rejudge all submissions for this " . ($context["table"] ?? null)) . "?");
        // line 6
        echo "    ";
        $context["buttonDisabled"] = false;
        // line 7
        echo "    ";
        $context["isRestart"] = false;
        // line 8
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 9
            echo "        ";
            $context["includeAllButton"] = true;
            // line 10
            echo "    ";
        } else {
            // line 11
            echo "        ";
            $context["includeAllButton"] = false;
            // line 12
            echo "    ";
        }
        // line 13
        echo "    ";
        if ( !(isset($context["buttonClass"]) || array_key_exists("buttonClass", $context))) {
            // line 14
            echo "        ";
            $context["buttonClass"] = "btn-outline-primary btn-sm";
            // line 15
            echo "    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if ((((($context["table"] ?? null) == "submission") && (isset($context["submission"]) || array_key_exists("submission", $context))) && (isset($context["judgings"]) || array_key_exists("judgings", $context)))) {
            // line 18
            echo "        ";
            $context["buttonText"] = "Rejudge this submission";
            // line 19
            echo "        ";
            $context["questionText"] = (("Rejudge submission s" . ($context["id"] ?? null)) . "?");
            // line 20
            echo "        ";
            $context["includeAllButton"] = false;
            // line 21
            echo "        ";
            // line 22
            echo "        ";
            $context["validResult"] = false;
            // line 23
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["judgings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["judging"]) {
                // line 24
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["judging"], "valid", [], "any", false, false, false, 24)) {
                    // line 25
                    echo "                ";
                    $context["validResult"] = twig_get_attribute($this->env, $this->source, $context["judging"], "result", [], "any", false, false, false, 25);
                    // line 26
                    echo "            ";
                }
                // line 27
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['judging'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "
        ";
            // line 29
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 30
                echo "            ";
                if ( !($context["validResult"] ?? null)) {
                    // line 31
                    echo "                ";
                    $context["questionText"] = (("Restart judging of PENDING submission s" . ($context["id"] ?? null)) . ", are you sure?");
                    // line 32
                    echo "                ";
                    $context["buttonText"] = "Restart judging";
                    // line 33
                    echo "                ";
                    $context["isRestart"] = true;
                    // line 34
                    echo "            ";
                } elseif ((($context["validResult"] ?? null) == "correct")) {
                    // line 35
                    echo "                ";
                    $context["questionText"] = (("Rejudge CORRECT submission s" . ($context["id"] ?? null)) . ", are you sure?");
                    // line 36
                    echo "            ";
                }
                // line 37
                echo "        ";
            } else {
                // line 38
                echo "            ";
                if (( !($context["validResult"] ?? null) || (($context["validResult"] ?? null) == "correct"))) {
                    // line 39
                    echo "                ";
                    $context["buttonDisabled"] = true;
                    // line 40
                    echo "            ";
                }
                // line 41
                echo "        ";
            }
            // line 42
            echo "    ";
        }
        $___internal_971f63ff5c83e86348680bea32554257676754a16e1f585f114087f02f7e4de8_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 3
        echo twig_spaceless($___internal_971f63ff5c83e86348680bea32554257676754a16e1f585f114087f02f7e4de8_);
        // line 44
        echo "
<button type=\"button\" class=\"btn ";
        // line 45
        echo twig_escape_filter($this->env, ($context["buttonClass"] ?? null), "html", null, true);
        echo "\" data-toggle=\"modal\" data-target=\"#rejudge-modal\">
    <i class=\"fas fa-sync\"></i> Rejudge
</button>

<!-- Modal -->
<div class=\"modal fade\" id=\"rejudge-modal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">";
        // line 54
        echo twig_escape_filter($this->env, ($context["buttonText"] ?? null), "html", null, true);
        echo "</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <form action=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_create_rejudge");
        echo "\" method=\"post\">
                <div class=\"modal-body\">
                    <input type=\"hidden\" name=\"table\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, ($context["table"] ?? null), "html", null, true);
        echo "\"/>
                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\"/>";
        // line 63
        if (($context["includeAllButton"] ?? null)) {
            // line 64
            echo "
                        <div class=\"custom-control custom-checkbox form-group\">
                            <input type=\"checkbox\" class=\"custom-control-input\" id=\"include_all\" name=\"include_all\">
                            <label class=\"custom-control-label\" for=\"include_all\">Include pending/correct
                                submissions</label>
                        </div>";
        }
        // line 71
        echo "
                    ";
        // line 72
        if (($context["isRestart"] ?? null)) {
            // line 73
            echo "                        <input type=\"hidden\" id=\"auto_apply\" name=\"auto_apply\" value=\"1\">
                        <input type=\"hidden\" name=\"repeat\" id=\"repeat\" value=\"1\">
                        <input type=\"hidden\" name=\"reason\" id=\"reason\" value=\"\">
                    ";
        } else {
            // line 77
            echo "                    <div class=\"custom-control custom-checkbox form-group\">
                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"auto_apply\" name=\"auto_apply\">
                        <label class=\"custom-control-label\" for=\"auto_apply\">Automatically apply judging(s) when ready</label>
                    </div>
                    <div id=\"rejudge-repeat\" class=\"form-group\">
                        <label for=\"repeat\">Number of times to repeat this rejudging</label>
                        <input type=\"number\" class=\"form-control\" name=\"repeat\" id=\"repeat\" value=\"1\" min=\"1\" max=\"999\" step=\"1\">
                    </div>
                    <div id=\"rejudge-reason\" class=\"form-group\">
                        <label for=\"reason\">Reason</label>
                        <input type=\"text\" class=\"form-control\" name=\"reason\" id=\"reason\" maxlength=\"255\">
                    </div>
                    ";
        }
        // line 90
        echo "                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cancel</button>
                    <input type=\"submit\" value=\"";
        // line 93
        echo twig_escape_filter($this->env, ($context["buttonText"] ?? null), "html", null, true);
        echo "\" class=\"btn btn-primary\">
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    \$(function () {
        \$('#full_rejudge').on('change', function () {
            if (\$(this).is(':checked')) {
                \$('#rejudge-reason').removeClass('d-none');
            } else {
                \$('#rejudge-reason').addClass('d-none');
            }
        });
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "jury/partials/rejudge_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 93,  235 => 90,  220 => 77,  214 => 73,  212 => 72,  209 => 71,  201 => 64,  199 => 63,  196 => 62,  192 => 61,  187 => 59,  179 => 54,  167 => 45,  164 => 44,  162 => 3,  158 => 42,  155 => 41,  152 => 40,  149 => 39,  146 => 38,  143 => 37,  140 => 36,  137 => 35,  134 => 34,  131 => 33,  128 => 32,  125 => 31,  122 => 30,  120 => 29,  117 => 28,  111 => 27,  108 => 26,  105 => 25,  102 => 24,  97 => 23,  94 => 22,  92 => 21,  89 => 20,  86 => 19,  83 => 18,  81 => 17,  78 => 16,  75 => 15,  72 => 14,  69 => 13,  66 => 12,  63 => 11,  60 => 10,  57 => 9,  54 => 8,  51 => 7,  48 => 6,  45 => 5,  42 => 4,  40 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/partials/rejudge_form.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/partials/rejudge_form.html.twig");
    }
}
