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

/* partials/scoreboard_table.html.twig */
class __TwigTemplate_fe3c8a23499d4923eff27bf4433d6bf925eabc3df1d75603cf3c6622705dc5f0 extends \Twig\Template
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
        if ( !(isset($context["limitToTeams"]) || array_key_exists("limitToTeams", $context))) {
            // line 2
            echo "    ";
            $context["limitToTeams"] = null;
            // line 3
            echo "    ";
            $context["limitToTeamIds"] = null;
        } else {
            // line 5
            echo "    ";
            $context["limitToTeamIds"] = [];
            // line 6
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["limitToTeams"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 7
                echo "        ";
                $context["limitToTeamIds"] = twig_array_merge(($context["limitToTeamIds"] ?? null), [0 => twig_get_attribute($this->env, $this->source, $context["team"], "teamid", [], "any", false, false, false, 7)]);
                // line 8
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 10
        if ( !(isset($context["showLegends"]) || array_key_exists("showLegends", $context))) {
            // line 11
            echo "    ";
            $context["showLegends"] = false;
        }
        // line 13
        if ( !(isset($context["static"]) || array_key_exists("static", $context))) {
            // line 14
            echo "    ";
            $context["static"] = false;
        }
        // line 16
        $context["showPoints"] = twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "showPoints", [], "any", false, false, false, 16);
        // line 17
        $context["usedCategories"] = twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "usedCategories", [0 => ($context["limitToTeamIds"] ?? null)], "method", false, false, false, 17);
        // line 18
        $context["hasDifferentCategoryColors"] = twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "categoryColors", [0 => ($context["limitToTeamIds"] ?? null)], "method", false, false, false, 18);
        // line 19
        $context["scores"] = twig_array_filter(twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "scores", [], "any", false, false, false, 19), function ($__score__) use ($context, $macros) { $context["score"] = $__score__; return ((null === ($context["limitToTeams"] ?? null)) || twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["score"] ?? null), "team", [], "any", false, false, false, 19), "teamid", [], "any", false, false, false, 19), ($context["limitToTeamIds"] ?? null))); });
        // line 20
        $context["problems"] = twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "problems", [], "any", false, false, false, 20);
        // line 21
        echo "
";
        // line 22
        if ((($context["maxWidth"] ?? null) > 0)) {
            // line 23
            echo "    <style>
        .forceWidth {
            max-width: ";
            // line 25
            echo twig_escape_filter($this->env, ($context["maxWidth"] ?? null), "html", null, true);
            echo "px;
        }
    </style>
";
        }
        // line 29
        echo "
<table class=\"scoreboard center ";
        // line 30
        if (($context["jury"] ?? null)) {
            echo "scoreboard_jury";
        }
        echo "\">

    ";
        // line 33
        echo "    <colgroup>
        <col id=\"scorerank\"/>
        ";
        // line 35
        if (($context["showFlags"] ?? null)) {
            // line 36
            echo "            <col id=\"scoreflags\"/>
        ";
        } else {
            // line 38
            echo "            <col/>
        ";
        }
        // line 40
        echo "        ";
        if (($context["showAffiliationLogos"] ?? null)) {
            // line 41
            echo "            <col id=\"scorelogos\"/>
        ";
        }
        // line 43
        echo "        <col id=\"scoreteamname\"/>
    </colgroup>
    <colgroup>
        <col id=\"scoresolv\"/>
        <col id=\"scoretotal\"/>
    </colgroup>
    <colgroup>
        ";
        // line 50
        if ((($context["showTeamSubmissions"] ?? null) || ($context["jury"] ?? null))) {
            // line 51
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["problems"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                // line 52
                echo "                <col class=\"scoreprob\"/>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "        ";
        }
        // line 55
        echo "    </colgroup>

    ";
        // line 57
        $context["teamColspan"] = 2;
        // line 58
        echo "    ";
        if (($context["showAffiliationLogos"] ?? null)) {
            // line 59
            echo "        ";
            $context["teamColspan"] = (($context["teamColspan"] ?? null) + 1);
            // line 60
            echo "    ";
        }
        // line 61
        echo "
    <thead>
    <tr class=\"scoreheader\">
        <th title=\"rank\" scope=\"col\">rank</th>
        <th title=\"team name\" scope=\"col\" colspan=\"";
        // line 65
        echo twig_escape_filter($this->env, ($context["teamColspan"] ?? null), "html", null, true);
        echo "\">team</th>
        <th title=\"# solved / penalty time\" colspan=\"2\" scope=\"col\">score</th>
        ";
        // line 67
        if ((($context["showTeamSubmissions"] ?? null) || ($context["jury"] ?? null))) {
            // line 68
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["problems"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                // line 69
                echo "                ";
                $context["link"] = null;
                // line 70
                echo "                ";
                $context["target"] = "_self";
                // line 71
                echo "                ";
                if ( !($context["static"] ?? null)) {
                    // line 72
                    echo "                    ";
                    if (($context["jury"] ?? null)) {
                        // line 73
                        echo "                        ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem", ["probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 73)]);
                        // line 74
                        echo "                    ";
                    } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["problem"], "problem", [], "any", false, false, false, 74), "problemtextType", [], "any", false, false, false, 74))) {
                        // line 75
                        echo "                        ";
                        if (($context["public"] ?? null)) {
                            // line 76
                            echo "                            ";
                            $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_problem_text", ["probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 76)]);
                            // line 77
                            echo "                            ";
                            $context["target"] = "_blank";
                            // line 78
                            echo "                        ";
                        } else {
                            // line 79
                            echo "                            ";
                            $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_problem_text", ["probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 79)]);
                            // line 80
                            echo "                            ";
                            $context["target"] = "_blank";
                            // line 81
                            echo "                        ";
                        }
                        // line 82
                        echo "                    ";
                    }
                    // line 83
                    echo "                ";
                }
                // line 84
                echo "                <th title=\"problem ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["problem"], "problem", [], "any", false, false, false, 84), "name", [], "any", false, false, false, 84), "html", null, true);
                echo "\" scope=\"col\">
                    <a ";
                // line 85
                if (($context["link"] ?? null)) {
                    echo "href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\"";
                }
                echo " target=\"";
                echo twig_escape_filter($this->env, ($context["target"] ?? null), "html", null, true);
                echo "\">
                        ";
                // line 86
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "shortname", [], "any", false, false, false, 86), "html", null, true);
                echo "
                        ";
                // line 87
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["problem"], "color", [], "any", false, false, false, 87))) {
                    // line 88
                    echo "                            <div class=\"circle\" style=\"background: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "color", [], "any", false, false, false, 88), "html", null, true);
                    echo ";\"></div>
                        ";
                }
                // line 90
                echo "                        ";
                if (($context["showPoints"] ?? null)) {
                    // line 91
                    echo "                            <span class='problempoints'>
                                [";
                    // line 92
                    if ((twig_get_attribute($this->env, $this->source, $context["problem"], "points", [], "any", false, false, false, 92) == 1)) {
                        echo "1 point";
                    } else {
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "points", [], "any", false, false, false, 92), "html", null, true);
                        echo " points";
                    }
                    echo "]
                            </span>
                        ";
                }
                // line 95
                echo "                    </a>
                </th>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "        ";
        }
        // line 99
        echo "    </tr>
    </thead>
    <tbody>
    ";
        // line 102
        $context["previousSortOrder"] =  -1;
        // line 103
        echo "    ";
        $context["previousTeam"] = null;
        // line 104
        echo "    ";
        $context["backgroundColors"] = ["#FFFFFF" => 1];
        // line 105
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scores"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["score"]) {
            // line 106
            echo "        ";
            $context["classes"] = [];
            // line 107
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 107), "category", [], "any", false, false, false, 107), "sortorder", [], "any", false, false, false, 107) != ($context["previousSortOrder"] ?? null))) {
                // line 108
                echo "            ";
                if ((($context["previousSortOrder"] ?? null) !=  -1)) {
                    // line 109
                    echo "                ";
                    // line 110
                    echo "                ";
                    $this->loadTemplate("partials/scoreboard_summary.html.twig", "partials/scoreboard_table.html.twig", 110)->display(twig_array_merge($context, ["sortOrder" => ($context["previousSortOrder"] ?? null)]));
                    // line 111
                    echo "            ";
                }
                // line 112
                echo "            ";
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => "sortorderswitch"]);
                // line 113
                echo "            ";
                $context["previousSortOrder"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 113), "category", [], "any", false, false, false, 113), "sortorder", [], "any", false, false, false, 113);
                // line 114
                echo "            ";
                $context["previousTeam"] = null;
                // line 115
                echo "        ";
            }
            // line 116
            echo "
        ";
            // line 118
            echo "        ";
            if (((isset($context["myTeamId"]) || array_key_exists("myTeamId", $context)) && (($context["myTeamId"] ?? null) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 118), "teamid", [], "any", false, false, false, 118)))) {
                // line 119
                echo "            ";
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => "scorethisisme"]);
                // line 120
                echo "            ";
                $context["color"] = "#FFFF99";
                // line 121
                echo "        ";
            } else {
                // line 122
                echo "            ";
                $context["color"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 122), "category", [], "any", false, false, false, 122), "color", [], "any", false, false, false, 122);
                // line 123
                echo "        ";
            }
            // line 124
            echo "        <tr class=\"";
            echo twig_escape_filter($this->env, twig_join_filter(($context["classes"] ?? null), " "), "html", null, true);
            echo "\" id=\"team:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 124), "teamid", [], "any", false, false, false, 124), "html", null, true);
            echo "\">
            <td class=\"scorepl\">
                ";
            // line 127
            echo "                ";
            if ( !($context["displayRank"] ?? null)) {
                // line 128
                echo "                    ?
                ";
            } elseif (((null ===             // line 129
($context["previousTeam"] ?? null)) || (twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "scores", [], "any", false, false, false, 129)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, ($context["previousTeam"] ?? null), "teamid", [], "any", false, false, false, 129)] ?? null) : null), "rank", [], "any", false, false, false, 129) != twig_get_attribute($this->env, $this->source, $context["score"], "rank", [], "any", false, false, false, 129)))) {
                // line 130
                echo "                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["score"], "rank", [], "any", false, false, false, 130), "html", null, true);
                echo "
                ";
            } else {
                // line 132
                echo "                ";
            }
            // line 133
            echo "                ";
            $context["previousTeam"] = twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 133);
            // line 134
            echo "            </td>
            <td class=\"scoreaf\">
                ";
            // line 136
            if (($context["showFlags"] ?? null)) {
                // line 137
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 137), "affiliation", [], "any", false, false, false, 137)) {
                    // line 138
                    echo "                        ";
                    $context["link"] = null;
                    // line 139
                    echo "                        ";
                    if (($context["jury"] ?? null)) {
                        // line 140
                        echo "                            ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_affiliation", ["affilId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 140), "affilid", [], "any", false, false, false, 140)]);
                        // line 141
                        echo "                        ";
                    }
                    // line 142
                    echo "                        <a ";
                    if (($context["link"] ?? null)) {
                        echo "href=\"";
                        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                            ";
                    // line 143
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 143), "affiliation", [], "any", false, false, false, 143), "country", [], "any", false, false, false, 143)) {
                        // line 144
                        echo "                                ";
                        $context["countryFlag"] = (("images/countries/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 144), "affiliation", [], "any", false, false, false, 144), "country", [], "any", false, false, false, 144)) . ".png");
                        // line 145
                        echo "                                ";
                        if ($this->extensions['App\Twig\TwigExtension']->assetExists(($context["countryFlag"] ?? null))) {
                            // line 146
                            echo "                                    <img loading=\"lazy\" class=\"countryflag\"
                                         src=\"";
                            // line 147
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["countryFlag"] ?? null)), "html", null, true);
                            echo "\" alt=\"";
                            echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["alpha3_countries"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 147), "affiliation", [], "any", false, false, false, 147), "country", [], "any", false, false, false, 147)] ?? null) : null), "html", null, true);
                            echo "\"
                                         title=\"";
                            // line 148
                            echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["alpha3_countries"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 148), "affiliation", [], "any", false, false, false, 148), "country", [], "any", false, false, false, 148)] ?? null) : null), "html", null, true);
                            echo "\">
                                ";
                        } else {
                            // line 150
                            echo "                                    ";
                            echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["alpha3_countries"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 150), "affiliation", [], "any", false, false, false, 150), "country", [], "any", false, false, false, 150)] ?? null) : null), "html", null, true);
                            echo "
                                ";
                        }
                        // line 152
                        echo "                            ";
                    }
                    // line 153
                    echo "                        </a>
                    ";
                }
                // line 155
                echo "                ";
            }
            // line 156
            echo "            </td>
            ";
            // line 157
            if (($context["showAffiliationLogos"] ?? null)) {
                // line 158
                echo "                <td class=\"scoreaf\">
                    ";
                // line 159
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 159), "affiliation", [], "any", false, false, false, 159)) {
                    // line 160
                    echo "                        ";
                    $context["link"] = null;
                    // line 161
                    echo "                        ";
                    if (($context["jury"] ?? null)) {
                        // line 162
                        echo "                            ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_affiliation", ["affilId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 162), "affilid", [], "any", false, false, false, 162)]);
                        // line 163
                        echo "                        ";
                    }
                    // line 164
                    echo "                        <a ";
                    if (($context["link"] ?? null)) {
                        echo "href=\"";
                        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                            ";
                    // line 165
                    $context["affiliationId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 165), "affiliation", [], "any", false, false, false, 165), "affilid", [], "any", false, false, false, 165);
                    // line 166
                    echo "                            ";
                    if ($this->extensions['App\Twig\TwigExtension']->showExternalId(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 166), "affiliation", [], "any", false, false, false, 166))) {
                        // line 167
                        echo "                                ";
                        $context["affiliationId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 167), "affiliation", [], "any", false, false, false, 167), "externalid", [], "any", false, false, false, 167);
                        // line 168
                        echo "                            ";
                    }
                    // line 169
                    echo "                            ";
                    $context["affiliationImage"] = (("images/affiliations/" . ($context["affiliationId"] ?? null)) . ".png");
                    // line 170
                    echo "                            ";
                    if ($this->extensions['App\Twig\TwigExtension']->assetExists(($context["affiliationImage"] ?? null))) {
                        // line 171
                        echo "                                <img loading=\"lazy\" class=\"affiliation-logo\"
                                     src=\"";
                        // line 172
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["affiliationImage"] ?? null)), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 172), "affiliation", [], "any", false, false, false, 172), "name", [], "any", false, false, false, 172), "html", null, true);
                        echo "\"
                                     title=\"";
                        // line 173
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 173), "affiliation", [], "any", false, false, false, 173), "name", [], "any", false, false, false, 173), "html", null, true);
                        echo "\">
                            ";
                    } else {
                        // line 175
                        echo "                                ";
                        echo twig_escape_filter($this->env, ($context["affiliationId"] ?? null), "html", null, true);
                        echo "
                            ";
                    }
                    // line 177
                    echo "                        </a>
                    ";
                }
                // line 179
                echo "                </td>
            ";
            }
            // line 181
            echo "            ";
            if ((null === ($context["color"] ?? null))) {
                // line 182
                echo "                ";
                $context["color"] = "#FFFFFF";
                // line 183
                echo "                ";
                $context["colorClass"] = "_FFFFFF";
                // line 184
                echo "            ";
            } else {
                // line 185
                echo "                ";
                $context["colorClass"] = twig_replace_filter(($context["color"] ?? null), ["#" => "_"]);
                // line 186
                echo "                ";
                $context["backgroundColors"] = twig_array_merge(($context["backgroundColors"] ?? null), [($context["color"] ?? null) => 1]);
                // line 187
                echo "            ";
            }
            // line 188
            echo "            <td class=\"scoretn cl";
            echo twig_escape_filter($this->env, ($context["colorClass"] ?? null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 188), "effectiveName", [], "any", false, false, false, 188), "html", null, true);
            echo "\">
                ";
            // line 189
            $context["link"] = null;
            // line 190
            echo "                ";
            $context["extra"] = null;
            // line 191
            echo "                ";
            if ( !($context["static"] ?? null)) {
                // line 192
                echo "                    ";
                if (($context["jury"] ?? null)) {
                    // line 193
                    echo "                        ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 193), "teamid", [], "any", false, false, false, 193)]);
                    // line 194
                    echo "                    ";
                } elseif (($context["public"] ?? null)) {
                    // line 195
                    echo "                        ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_team", ["teamId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 195), "teamid", [], "any", false, false, false, 195)]);
                    // line 196
                    echo "                        ";
                    $context["extra"] = "data-ajax-modal";
                    // line 197
                    echo "                    ";
                } else {
                    // line 198
                    echo "                        ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_team", ["teamId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 198), "teamid", [], "any", false, false, false, 198)]);
                    // line 199
                    echo "                        ";
                    $context["extra"] = "data-ajax-modal";
                    // line 200
                    echo "                    ";
                }
                // line 201
                echo "                ";
            }
            // line 202
            echo "                <a ";
            if ( !(null === ($context["extra"] ?? null))) {
                echo twig_escape_filter($this->env, ($context["extra"] ?? null), "html", null, true);
            }
            echo " ";
            if ( !(null === ($context["link"] ?? null))) {
                echo "href=\"";
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\"";
            }
            echo ">
                    <span class=\"forceWidth\">
                        ";
            // line 204
            if (((twig_length_filter($this->env, ($context["usedCategories"] ?? null)) > 1) && twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "bestInCategory", [0 => twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 204), 1 => ($context["limitToTeamIds"] ?? null)], "method", false, false, false, 204))) {
                // line 205
                echo "                            <span class=\"badge badge-warning\" style=\"margin-right: 2em; font-weight: normal;\">
                            ";
                // line 206
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 206), "category", [], "any", false, false, false, 206), "name", [], "any", false, false, false, 206), "html", null, true);
                echo "
                        </span>
                        ";
            }
            // line 209
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 209), "effectiveName", [], "any", false, false, false, 209), "html", null, true);
            echo "
                    </span>
                    ";
            // line 211
            if (($context["showAffiliations"] ?? null)) {
                // line 212
                echo "                        <span class=\"univ forceWidth\">
                            ";
                // line 213
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 213), "affiliation", [], "any", false, false, false, 213)) {
                    // line 214
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 214), "affiliation", [], "any", false, false, false, 214), "name", [], "any", false, false, false, 214), "html", null, true);
                    echo "
                            ";
                }
                // line 216
                echo "                        </span>
                    ";
            }
            // line 218
            echo "                </a>
            </td>
            ";
            // line 220
            $context["totalTime"] = twig_get_attribute($this->env, $this->source, $context["score"], "totalTime", [], "any", false, false, false, 220);
            // line 221
            echo "            ";
            if (($context["scoreInSeconds"] ?? null)) {
                // line 222
                echo "                ";
                $context["totalTime"] = $this->extensions['App\Twig\TwigExtension']->printTimeRelative(($context["totalTime"] ?? null));
                // line 223
                echo "            ";
            }
            // line 224
            echo "            ";
            $context["totalPoints"] = twig_get_attribute($this->env, $this->source, $context["score"], "numPoints", [], "any", false, false, false, 224);
            // line 225
            echo "            <td class=\"scorenc\">";
            echo twig_escape_filter($this->env, ($context["totalPoints"] ?? null), "html", null, true);
            echo "</td>
            <td class=\"scorett\">";
            // line 226
            echo twig_escape_filter($this->env, ($context["totalTime"] ?? null), "html", null, true);
            echo "</td>

            ";
            // line 228
            if ((($context["showTeamSubmissions"] ?? null) || ($context["jury"] ?? null))) {
                // line 229
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["problems"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                    // line 230
                    echo "                    ";
                    // line 231
                    echo "                    ";
                    $context["scoreCssClass"] = "score_neutral";
                    // line 232
                    echo "                    ";
                    $context["matrixItem"] = (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "matrix", [], "any", false, false, false, 232)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 232), "teamid", [], "any", false, false, false, 232)] ?? null) : null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 232)] ?? null) : null);
                    // line 233
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "isCorrect", [], "any", false, false, false, 233)) {
                        // line 234
                        echo "                        ";
                        $context["scoreCssClass"] = "score_correct";
                        // line 235
                        echo "                        ";
                        if (twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "solvedFirst", [0 => twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 235), 1 => $context["problem"]], "method", false, false, false, 235)) {
                            // line 236
                            echo "                            ";
                            $context["scoreCssClass"] = (($context["scoreCssClass"] ?? null) . " score_first");
                            // line 237
                            echo "                        ";
                        }
                        // line 238
                        echo "                    ";
                    } elseif ((($context["showPending"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "numSubmissionsPending", [], "any", false, false, false, 238) > 0))) {
                        // line 239
                        echo "                        ";
                        $context["scoreCssClass"] = "score_pending";
                        // line 240
                        echo "                    ";
                    } elseif ((twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "numSubmissions", [], "any", false, false, false, 240) > 0)) {
                        // line 241
                        echo "                        ";
                        $context["scoreCssClass"] = "score_incorrect";
                        // line 242
                        echo "                    ";
                    }
                    // line 243
                    echo "
                    ";
                    // line 244
                    $context["numSubmissions"] = twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "numSubmissions", [], "any", false, false, false, 244);
                    // line 245
                    echo "                    ";
                    if ((($context["showPending"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "numSubmissionsPending", [], "any", false, false, false, 245) > 0))) {
                        // line 246
                        echo "                        ";
                        $context["numSubmissions"] = ((($context["numSubmissions"] ?? null) . " + ") . twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "numSubmissionsPending", [], "any", false, false, false, 246));
                        // line 247
                        echo "                    ";
                    }
                    // line 248
                    echo "
                    ";
                    // line 250
                    echo "                    ";
                    $context["time"] = "&nbsp;";
                    // line 251
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "isCorrect", [], "any", false, false, false, 251)) {
                        // line 252
                        echo "                        ";
                        $context["time"] = twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "time", [], "any", false, false, false, 252);
                        // line 253
                        echo "                        ";
                        if (($context["scoreInSeconds"] ?? null)) {
                            // line 254
                            echo "                            ";
                            $context["time"] = $this->extensions['App\Twig\TwigExtension']->printTimeRelative($this->extensions['App\Twig\TwigExtension']->scoreTime(($context["time"] ?? null)));
                            // line 255
                            echo "                            ";
                            if ((twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "numSubmissions", [], "any", false, false, false, 255) > 1)) {
                                // line 256
                                echo "                                ";
                                $context["time"] = ((($context["time"] ?? null) . " + ") . $this->extensions['App\Twig\TwigExtension']->printTimeRelative($this->extensions['App\Twig\TwigExtension']->calculatePenaltyTime(true, twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "numSubmissions", [], "any", false, false, false, 256))));
                                // line 257
                                echo "                            ";
                            }
                            // line 258
                            echo "                        ";
                        } else {
                            // line 259
                            echo "                            ";
                            $context["time"] = $this->extensions['App\Twig\TwigExtension']->scoreTime(($context["time"] ?? null));
                            // line 260
                            echo "                        ";
                        }
                        // line 261
                        echo "                    ";
                    }
                    // line 262
                    echo "
                    ";
                    // line 263
                    $context["link"] = null;
                    // line 264
                    echo "                    ";
                    if (($context["jury"] ?? null)) {
                        // line 265
                        echo "                        ";
                        $context["restrict"] = ["probid" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 265)];
                        // line 266
                        echo "                        ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 266), "teamid", [], "any", false, false, false, 266), "restrict" => ($context["restrict"] ?? null)]);
                        // line 267
                        echo "                    ";
                    }
                    // line 268
                    echo "
                    <td class=\"score_cell\">
                        ";
                    // line 270
                    if ((($context["numSubmissions"] ?? null) != "0")) {
                        // line 271
                        echo "                            <a ";
                        if (($context["link"] ?? null)) {
                            echo "href=\"";
                            echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                            echo "\"";
                        }
                        echo ">
                                <div class=\"";
                        // line 272
                        echo twig_escape_filter($this->env, ($context["scoreCssClass"] ?? null), "html", null, true);
                        echo "\">
                                    ";
                        // line 273
                        echo ($context["time"] ?? null);
                        echo "
                                    <span>
                                        ";
                        // line 275
                        if ((($context["numSubmissions"] ?? null) === 1)) {
                            // line 276
                            echo "                                            1 try
                                        ";
                        } else {
                            // line 278
                            echo "                                            ";
                            echo twig_escape_filter($this->env, ($context["numSubmissions"] ?? null), "html", null, true);
                            echo " tries
                                        ";
                        }
                        // line 280
                        echo "                                    </span>
                                </div>
                            </a>
                        ";
                    }
                    // line 284
                    echo "                    </td>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 286
                echo "            ";
            }
            // line 287
            echo "        </tr>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['score'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 289
        echo "
    ";
        // line 291
        echo "    ";
        $this->loadTemplate("partials/scoreboard_summary.html.twig", "partials/scoreboard_table.html.twig", 291)->display(twig_array_merge($context, ["sortOrder" => ($context["previousSortOrder"] ?? null)]));
        // line 292
        echo "    </tbody>
</table>

";
        // line 295
        if (($context["showLegends"] ?? null)) {
            // line 296
            echo "    <p><br/><br/></p>

    ";
            // line 299
            echo "    ";
            if ((((null === ($context["limitToTeamIds"] ?? null)) && (twig_length_filter($this->env, ($context["usedCategories"] ?? null)) > 1)) && ($context["hasDifferentCategoryColors"] ?? null))) {
                // line 300
                echo "        <table id=\"categ_legend\" class=\"scoreboard scorelegend ";
                if (($context["jury"] ?? null)) {
                    echo "scoreboard_jury";
                }
                echo "\">
            <thead>
            <tr>
                <th scope=\"col\">
                    ";
                // line 304
                $context["link"] = null;
                // line 305
                echo "                    ";
                if (($context["jury"] ?? null)) {
                    // line 306
                    echo "                        ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_categories");
                    // line 307
                    echo "                    ";
                }
                // line 308
                echo "                    <a ";
                if (($context["link"] ?? null)) {
                    echo "href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\"";
                }
                echo ">Categories</a>
                </th>
            </tr>
            </thead>
            <tbody>
            ";
                // line 313
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_filter(twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "categories", [], "any", false, false, false, 313), function ($__category__) use ($context, $macros) { $context["category"] = $__category__; return twig_get_attribute($this->env, $this->source, ($context["usedCategories"] ?? null), twig_get_attribute($this->env, $this->source, $context["category"], "categoryid", [], "any", false, false, false, 313), [], "array", true, true, false, 313); }));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 314
                    echo "                <tr ";
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "color", [], "any", false, false, false, 314)) {
                        echo "style=\"background: ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "color", [], "any", false, false, false, 314), "html", null, true);
                        echo ";\"";
                    }
                    echo ">
                    <td>
                        ";
                    // line 316
                    $context["link"] = null;
                    // line 317
                    echo "                        ";
                    if (($context["jury"] ?? null)) {
                        // line 318
                        echo "                            ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_category", ["categoryId" => twig_get_attribute($this->env, $this->source, $context["category"], "categoryid", [], "any", false, false, false, 318)]);
                        // line 319
                        echo "                        ";
                    }
                    // line 320
                    echo "                        <a ";
                    if (($context["link"] ?? null)) {
                        echo "href=\"";
                        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                        echo "\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 320), "html", null, true);
                    echo "</a>
                    </td>
                </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 324
                echo "            </tbody>
        </table>
    ";
            }
            // line 327
            echo "
    ";
            // line 328
            if ((($context["showTeamSubmissions"] ?? null) || ($context["jury"] ?? null))) {
                // line 329
                echo "        ";
                $context["cellColors"] = ["first" => "Solved first", "correct" => "Solved", "incorrect" => "Tried, incorrect", "pending" => "Tried, pending", "neutral" => "Untried"];
                // line 330
                echo "        <table id=\"cell_legend\" class=\"scoreboard scorelegend ";
                if (($context["jury"] ?? null)) {
                    echo "scoreboard_jury";
                }
                echo "\">
            <thead>
            <tr>
                <th scope=\"col\">Cell colours</th>
            </tr>
            </thead>
            <tbody>
            ";
                // line 337
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["cellColors"] ?? null));
                foreach ($context['_seq'] as $context["color"] => $context["description"]) {
                    // line 338
                    echo "                ";
                    if ((($context["color"] != "pending") || ($context["showPending"] ?? null))) {
                        // line 339
                        echo "                    <tr class=\"score_";
                        echo twig_escape_filter($this->env, $context["color"], "html", null, true);
                        echo "\">
                        <td>";
                        // line 340
                        echo twig_escape_filter($this->env, $context["description"], "html", null, true);
                        echo "</td>
                    </tr>
                ";
                    }
                    // line 343
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['color'], $context['description'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 344
                echo "            </tbody>
        </table>
    ";
            }
        }
        // line 348
        echo "
<style>
    ";
        // line 350
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["backgroundColors"] ?? null));
        foreach ($context['_seq'] as $context["color"] => $context["i"]) {
            // line 351
            echo "        ";
            $context["colorClass"] = twig_replace_filter($context["color"], ["#" => "_"]);
            // line 352
            echo "
        .cl";
            // line 353
            echo twig_escape_filter($this->env, ($context["colorClass"] ?? null), "html", null, true);
            echo " {
            background-color: ";
            // line 354
            echo twig_escape_filter($this->env, $context["color"], "html", null, true);
            echo ";
        }

        ";
            // line 357
            $context["cMin"] = $this->extensions['App\Twig\TwigExtension']->hexColorToRGBA($context["color"], 0);
            // line 358
            echo "        ";
            $context["cMax"] = $this->extensions['App\Twig\TwigExtension']->hexColorToRGBA($context["color"], 1);
            // line 359
            echo "
        .cl";
            // line 360
            echo twig_escape_filter($this->env, ($context["colorClass"] ?? null), "html", null, true);
            echo " .forceWidth.toolong:after {
            background: linear-gradient(to right,
                ";
            // line 362
            echo twig_escape_filter($this->env, ($context["cMin"] ?? null), "html", null, true);
            echo " 0%,
                ";
            // line 363
            echo twig_escape_filter($this->env, ($context["cMax"] ?? null), "html", null, true);
            echo " 96%);
        }
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['color'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 366
        echo "</style>
<script>
    document.querySelectorAll(\".forceWidth:not(.toolong)\").forEach(el => {
        if (el instanceof Element && el.scrollWidth > el.offsetWidth) {
            el.classList.add(\"toolong\");
        }
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "partials/scoreboard_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1071 => 366,  1062 => 363,  1058 => 362,  1053 => 360,  1050 => 359,  1047 => 358,  1045 => 357,  1039 => 354,  1035 => 353,  1032 => 352,  1029 => 351,  1025 => 350,  1021 => 348,  1015 => 344,  1009 => 343,  1003 => 340,  998 => 339,  995 => 338,  991 => 337,  978 => 330,  975 => 329,  973 => 328,  970 => 327,  965 => 324,  948 => 320,  945 => 319,  942 => 318,  939 => 317,  937 => 316,  927 => 314,  923 => 313,  910 => 308,  907 => 307,  904 => 306,  901 => 305,  899 => 304,  889 => 300,  886 => 299,  882 => 296,  880 => 295,  875 => 292,  872 => 291,  869 => 289,  854 => 287,  851 => 286,  844 => 284,  838 => 280,  832 => 278,  828 => 276,  826 => 275,  821 => 273,  817 => 272,  808 => 271,  806 => 270,  802 => 268,  799 => 267,  796 => 266,  793 => 265,  790 => 264,  788 => 263,  785 => 262,  782 => 261,  779 => 260,  776 => 259,  773 => 258,  770 => 257,  767 => 256,  764 => 255,  761 => 254,  758 => 253,  755 => 252,  752 => 251,  749 => 250,  746 => 248,  743 => 247,  740 => 246,  737 => 245,  735 => 244,  732 => 243,  729 => 242,  726 => 241,  723 => 240,  720 => 239,  717 => 238,  714 => 237,  711 => 236,  708 => 235,  705 => 234,  702 => 233,  699 => 232,  696 => 231,  694 => 230,  689 => 229,  687 => 228,  682 => 226,  677 => 225,  674 => 224,  671 => 223,  668 => 222,  665 => 221,  663 => 220,  659 => 218,  655 => 216,  649 => 214,  647 => 213,  644 => 212,  642 => 211,  636 => 209,  630 => 206,  627 => 205,  625 => 204,  611 => 202,  608 => 201,  605 => 200,  602 => 199,  599 => 198,  596 => 197,  593 => 196,  590 => 195,  587 => 194,  584 => 193,  581 => 192,  578 => 191,  575 => 190,  573 => 189,  566 => 188,  563 => 187,  560 => 186,  557 => 185,  554 => 184,  551 => 183,  548 => 182,  545 => 181,  541 => 179,  537 => 177,  531 => 175,  526 => 173,  520 => 172,  517 => 171,  514 => 170,  511 => 169,  508 => 168,  505 => 167,  502 => 166,  500 => 165,  491 => 164,  488 => 163,  485 => 162,  482 => 161,  479 => 160,  477 => 159,  474 => 158,  472 => 157,  469 => 156,  466 => 155,  462 => 153,  459 => 152,  453 => 150,  448 => 148,  442 => 147,  439 => 146,  436 => 145,  433 => 144,  431 => 143,  422 => 142,  419 => 141,  416 => 140,  413 => 139,  410 => 138,  407 => 137,  405 => 136,  401 => 134,  398 => 133,  395 => 132,  389 => 130,  387 => 129,  384 => 128,  381 => 127,  373 => 124,  370 => 123,  367 => 122,  364 => 121,  361 => 120,  358 => 119,  355 => 118,  352 => 116,  349 => 115,  346 => 114,  343 => 113,  340 => 112,  337 => 111,  334 => 110,  332 => 109,  329 => 108,  326 => 107,  323 => 106,  305 => 105,  302 => 104,  299 => 103,  297 => 102,  292 => 99,  289 => 98,  281 => 95,  270 => 92,  267 => 91,  264 => 90,  258 => 88,  256 => 87,  252 => 86,  242 => 85,  237 => 84,  234 => 83,  231 => 82,  228 => 81,  225 => 80,  222 => 79,  219 => 78,  216 => 77,  213 => 76,  210 => 75,  207 => 74,  204 => 73,  201 => 72,  198 => 71,  195 => 70,  192 => 69,  187 => 68,  185 => 67,  180 => 65,  174 => 61,  171 => 60,  168 => 59,  165 => 58,  163 => 57,  159 => 55,  156 => 54,  149 => 52,  144 => 51,  142 => 50,  133 => 43,  129 => 41,  126 => 40,  122 => 38,  118 => 36,  116 => 35,  112 => 33,  105 => 30,  102 => 29,  95 => 25,  91 => 23,  89 => 22,  86 => 21,  84 => 20,  82 => 19,  80 => 18,  78 => 17,  76 => 16,  72 => 14,  70 => 13,  66 => 11,  64 => 10,  57 => 8,  54 => 7,  49 => 6,  46 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/scoreboard_table.html.twig", "/opt/domjudge/domserver/webapp/templates/partials/scoreboard_table.html.twig");
    }
}
