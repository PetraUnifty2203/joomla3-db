<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @particles/gallery.html.twig */
class __TwigTemplate_0b9733bfb62ad4dcbfa62aa4701c73b8973c601802501c86b62a6215c9c612a3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'particle' => [$this, 'block_particle'],
            'javascript_footer' => [$this, 'block_javascript_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["attr_extra"] = "";
        // line 4
        if ($this->getAttribute(($context["particle"] ?? null), "extra", [])) {
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "extra", []));
            foreach ($context['_seq'] as $context["_key"] => $context["attributes"]) {
                // line 6
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["attributes"]);
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 7
                    $context["attr_extra"] = (((((($context["attr_extra"] ?? null) . " ") . twig_escape_filter($this->env, $context["key"])) . "=\"") . twig_escape_filter($this->env, $context["value"], "html_attr")) . "\"");
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attributes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 12
        ob_start(function () { return ''; });
        // line 13
        echo "\t<div class=\"g-particle-intro\">
\t\t";
        // line 14
        if ($this->getAttribute(($context["particle"] ?? null), "mainheading", [])) {
            // line 15
            echo "\t\t\t<h3 class=\"g-title g-main-title\">";
            echo $this->getAttribute(($context["particle"] ?? null), "mainheading", []);
            echo "</h3>
\t\t\t<div class=\"g-title-separator ";
            // line 16
            if (($this->getAttribute(($context["particle"] ?? null), "introtext", []) == false)) {
                echo "no-intro-text";
            }
            echo "\"></div>
\t\t";
        }
        // line 17
        echo "\t
\t\t";
        // line 18
        if ($this->getAttribute(($context["particle"] ?? null), "introtext", [])) {
            echo "<p class=\"g-introtext\">";
            echo $this->getAttribute(($context["particle"] ?? null), "introtext", []);
            echo "</p>";
        }
        // line 19
        echo "\t</div>
";
        $context["particleheading"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 22
        $context["filterid"] = twig_random($this->env);
        // line 24
        ob_start(function () { return ''; });
        // line 25
        echo "\t<ul id=\"g-gallery-filter_";
        echo twig_escape_filter($this->env, ($context["filterid"] ?? null), "html", null, true);
        echo "\" class=\"g-gallery-filter uk-subnav uk-subnav-pill\">
\t\t<li class=\"uk-active\" data-uk-filter=\"all\"><a href=\"\">";
        // line 26
        echo (($this->getAttribute(($context["particle"] ?? null), "filterall", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "filterall", []), "All")) : ("All"));
        echo "</a></li>
\t\t";
        // line 27
        if ($this->getAttribute(($context["particle"] ?? null), "filter1", [])) {
            echo "<li data-uk-filter=\"filter1_";
            echo twig_escape_filter($this->env, ($context["filterid"] ?? null), "html", null, true);
            echo "\"><a href=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "filter1", []));
            echo "</a></li>";
        }
        // line 28
        echo "\t\t";
        if ($this->getAttribute(($context["particle"] ?? null), "filter2", [])) {
            echo "<li data-uk-filter=\"filter2_";
            echo twig_escape_filter($this->env, ($context["filterid"] ?? null), "html", null, true);
            echo "\"><a href=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "filter2", []));
            echo "</a></li>";
        }
        // line 29
        echo "\t\t";
        if ($this->getAttribute(($context["particle"] ?? null), "filter3", [])) {
            echo "<li data-uk-filter=\"filter3_";
            echo twig_escape_filter($this->env, ($context["filterid"] ?? null), "html", null, true);
            echo "\"><a href=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "filter3", []));
            echo "</a></li>";
        }
        // line 30
        echo "\t\t";
        if ($this->getAttribute(($context["particle"] ?? null), "filter4", [])) {
            echo "<li data-uk-filter=\"filter4_";
            echo twig_escape_filter($this->env, ($context["filterid"] ?? null), "html", null, true);
            echo "\"><a href=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "filter4", []));
            echo "</a></li>";
        }
        // line 31
        echo "\t\t";
        if ($this->getAttribute(($context["particle"] ?? null), "filter5", [])) {
            echo "<li data-uk-filter=\"filter5_";
            echo twig_escape_filter($this->env, ($context["filterid"] ?? null), "html", null, true);
            echo "\"><a href=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "filter5", []));
            echo "</a></li>";
        }
        // line 32
        echo "\t</ul>
";
        $context["gallery_filter"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 35
        ob_start(function () { return ''; });
        // line 36
        echo "\t";
        $context["all_items"] = 0;
        // line 37
        echo "\t";
        $context["filter1"] = 0;
        // line 38
        echo "\t";
        $context["filter2"] = 0;
        // line 39
        echo "\t";
        $context["filter3"] = 0;
        // line 40
        echo "\t";
        $context["filter4"] = 0;
        // line 41
        echo "\t";
        $context["filter5"] = 0;
        // line 42
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "items", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 43
            echo "\t\t";
            $context["all_items"] = (($context["all_items"] ?? null) + 1);
            // line 44
            echo "\t\t";
            if ($this->getAttribute($context["item"], "filter1", [])) {
                $context["filter1"] = (($context["filter1"] ?? null) + 1);
            }
            // line 45
            echo "\t\t";
            if ($this->getAttribute($context["item"], "filter2", [])) {
                $context["filter2"] = (($context["filter2"] ?? null) + 1);
            }
            // line 46
            echo "\t\t";
            if ($this->getAttribute($context["item"], "filter3", [])) {
                $context["filter3"] = (($context["filter3"] ?? null) + 1);
            }
            // line 47
            echo "\t\t";
            if ($this->getAttribute($context["item"], "filter4", [])) {
                $context["filter4"] = (($context["filter4"] ?? null) + 1);
            }
            // line 48
            echo "\t\t";
            if ($this->getAttribute($context["item"], "filter5", [])) {
                $context["filter5"] = (($context["filter5"] ?? null) + 1);
            }
            // line 49
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "\t<ul id=\"g-gallery-filter_";
        echo twig_escape_filter($this->env, ($context["filterid"] ?? null), "html", null, true);
        echo "\" class=\"g-gallery-filter uk-subnav uk-subnav-pill\">
\t\t<li class=\"uk-active\" data-uk-filter=\"all\"><a href=\"\">";
        // line 51
        echo (($this->getAttribute(($context["particle"] ?? null), "filterall", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "filterall", []), "All")) : ("All"));
        echo " (";
        echo twig_escape_filter($this->env, ($context["all_items"] ?? null), "html", null, true);
        echo ")</a></li>
\t\t";
        // line 52
        if ($this->getAttribute(($context["particle"] ?? null), "filter1", [])) {
            echo "<li data-uk-filter=\"filter1_";
            echo twig_escape_filter($this->env, ($context["filterid"] ?? null), "html", null, true);
            echo "\"><a href=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "filter1", []));
            echo " (";
            echo twig_escape_filter($this->env, ($context["filter1"] ?? null), "html", null, true);
            echo ")</a></li>";
        }
        // line 53
        echo "\t\t";
        if ($this->getAttribute(($context["particle"] ?? null), "filter2", [])) {
            echo "<li data-uk-filter=\"filter2_";
            echo twig_escape_filter($this->env, ($context["filterid"] ?? null), "html", null, true);
            echo "\"><a href=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "filter2", []));
            echo " (";
            echo twig_escape_filter($this->env, ($context["filter2"] ?? null), "html", null, true);
            echo ")</a></li>";
        }
        // line 54
        echo "\t\t";
        if ($this->getAttribute(($context["particle"] ?? null), "filter3", [])) {
            echo "<li data-uk-filter=\"filter3_";
            echo twig_escape_filter($this->env, ($context["filterid"] ?? null), "html", null, true);
            echo "\"><a href=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "filter3", []));
            echo " (";
            echo twig_escape_filter($this->env, ($context["filter3"] ?? null), "html", null, true);
            echo ")</a></li>";
        }
        // line 55
        echo "\t\t";
        if ($this->getAttribute(($context["particle"] ?? null), "filter4", [])) {
            echo "<li data-uk-filter=\"filter4_";
            echo twig_escape_filter($this->env, ($context["filterid"] ?? null), "html", null, true);
            echo "\"><a href=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "filter4", []));
            echo " (";
            echo twig_escape_filter($this->env, ($context["filter4"] ?? null), "html", null, true);
            echo ")</a></li>";
        }
        // line 56
        echo "\t\t";
        if ($this->getAttribute(($context["particle"] ?? null), "filter5", [])) {
            echo "<li data-uk-filter=\"filter5_";
            echo twig_escape_filter($this->env, ($context["filterid"] ?? null), "html", null, true);
            echo "\"><a href=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "filter5", []));
            echo " (";
            echo twig_escape_filter($this->env, ($context["filter5"] ?? null), "html", null, true);
            echo ")</a></li>";
        }
        // line 57
        echo "\t</ul>
";
        $context["gallery_filter_s2"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 60
        ob_start(function () { return ''; });
        // line 61
        echo "\t";
        $context["all_items"] = 0;
        // line 62
        echo "\t";
        $context["filter1"] = 0;
        // line 63
        echo "\t";
        $context["filter2"] = 0;
        // line 64
        echo "\t";
        $context["filter3"] = 0;
        // line 65
        echo "\t";
        $context["filter4"] = 0;
        // line 66
        echo "\t";
        $context["filter5"] = 0;
        // line 67
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "items", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 68
            echo "\t\t";
            $context["all_items"] = (($context["all_items"] ?? null) + 1);
            // line 69
            echo "\t\t";
            if ($this->getAttribute($context["item"], "filter1", [])) {
                $context["filter1"] = (($context["filter1"] ?? null) + 1);
            }
            // line 70
            echo "\t\t";
            if ($this->getAttribute($context["item"], "filter2", [])) {
                $context["filter2"] = (($context["filter2"] ?? null) + 1);
            }
            // line 71
            echo "\t\t";
            if ($this->getAttribute($context["item"], "filter3", [])) {
                $context["filter3"] = (($context["filter3"] ?? null) + 1);
            }
            // line 72
            echo "\t\t";
            if ($this->getAttribute($context["item"], "filter4", [])) {
                $context["filter4"] = (($context["filter4"] ?? null) + 1);
            }
            // line 73
            echo "\t\t";
            if ($this->getAttribute($context["item"], "filter5", [])) {
                $context["filter5"] = (($context["filter5"] ?? null) + 1);
            }
            // line 74
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "\t<ul id=\"g-gallery-filter_";
        echo twig_escape_filter($this->env, ($context["filterid"] ?? null), "html", null, true);
        echo "\" class=\"g-gallery-filter uk-subnav uk-subnav-pill\">
\t\t<li class=\"uk-active\" data-uk-filter=\"all\"><a href=\"\" data-uk-tooltip=\"{cls: 'g-gallery-tooltip'}\" title=\"";
        // line 76
        echo twig_escape_filter($this->env, ($context["all_items"] ?? null), "html", null, true);
        echo "\">";
        echo (($this->getAttribute(($context["particle"] ?? null), "filterall", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "filterall", []), "All")) : ("All"));
        echo "</a></li>
\t\t";
        // line 77
        if ($this->getAttribute(($context["particle"] ?? null), "filter1", [])) {
            echo "<li data-uk-filter=\"filter1_";
            echo twig_escape_filter($this->env, ($context["filterid"] ?? null), "html", null, true);
            echo "\"><a href=\"\" data-uk-tooltip=\"{cls: 'g-gallery-tooltip'}\" title=\"";
            echo twig_escape_filter($this->env, ($context["filter1"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "filter1", []));
            echo "</a></li>";
        }
        // line 78
        echo "\t\t";
        if ($this->getAttribute(($context["particle"] ?? null), "filter2", [])) {
            echo "<li data-uk-filter=\"filter2_";
            echo twig_escape_filter($this->env, ($context["filterid"] ?? null), "html", null, true);
            echo "\"><a href=\"\" data-uk-tooltip=\"{cls: 'g-gallery-tooltip'}\" title=\"";
            echo twig_escape_filter($this->env, ($context["filter2"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "filter2", []));
            echo "</a></li>";
        }
        // line 79
        echo "\t\t";
        if ($this->getAttribute(($context["particle"] ?? null), "filter3", [])) {
            echo "<li data-uk-filter=\"filter3_";
            echo twig_escape_filter($this->env, ($context["filterid"] ?? null), "html", null, true);
            echo "\"><a href=\"\" data-uk-tooltip=\"{cls: 'g-gallery-tooltip'}\" title=\"";
            echo twig_escape_filter($this->env, ($context["filter3"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "filter3", []));
            echo "</a></li>";
        }
        // line 80
        echo "\t\t";
        if ($this->getAttribute(($context["particle"] ?? null), "filter4", [])) {
            echo "<li data-uk-filter=\"filter4_";
            echo twig_escape_filter($this->env, ($context["filterid"] ?? null), "html", null, true);
            echo "\"><a href=\"\" data-uk-tooltip=\"{cls: 'g-gallery-tooltip'}\" title=\"";
            echo twig_escape_filter($this->env, ($context["filter4"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "filter4", []));
            echo "</a></li>";
        }
        // line 81
        echo "\t\t";
        if ($this->getAttribute(($context["particle"] ?? null), "filter5", [])) {
            echo "<li data-uk-filter=\"filter5_";
            echo twig_escape_filter($this->env, ($context["filterid"] ?? null), "html", null, true);
            echo "\"><a href=\"\" data-uk-tooltip=\"{cls: 'g-gallery-tooltip'}\" title=\"";
            echo twig_escape_filter($this->env, ($context["filter5"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "filter5", []));
            echo "</a></li>";
        }
        // line 82
        echo "\t</ul>
";
        $context["gallery_filter_s3"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 85
        ob_start(function () { return ''; });
        // line 86
        echo "\t";
        $context["galleryid"] = twig_random($this->env);
        // line 87
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute(($context["particle"] ?? null), "items", []), twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "columns", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "columns", []), "3")) : ("3")))));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 88
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 89
                echo "\t\t\t";
                $context["attr_extra_item"] = "";
                // line 90
                echo "\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "extra", []));
                foreach ($context['_seq'] as $context["_key"] => $context["extra"]) {
                    // line 91
                    echo "\t\t\t\t";
                    $context["attr_extra_item"] = (((((($context["attr_extra_item"] ?? null) . " ") . twig_escape_filter($this->env, twig_first($this->env, twig_get_array_keys_filter($context["extra"])))) . "=\"") . twig_escape_filter($this->env, twig_first($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->valuesFilter($context["extra"])), "html_attr")) . "\"");
                    // line 92
                    echo "\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extra'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 93
                echo "
\t\t\t";
                // line 94
                $context["indentifier"] = twig_random($this->env);
                // line 95
                echo "
\t\t\t";
                // line 96
                ob_start(function () { return ''; });
                // line 97
                echo "\t\t\t\t";
                if (((($this->getAttribute(($context["particle"] ?? null), "filters", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "filters", []), "disabled")) : ("disabled")) != "disabled")) {
                    // line 98
                    echo "\t\t\t\t\tdata-uk-filter=\"all";
                    if ($this->getAttribute($context["item"], "filter1", [])) {
                        echo ", filter1_";
                        echo twig_escape_filter($this->env, ($context["filterid"] ?? null), "html", null, true);
                    }
                    if ($this->getAttribute($context["item"], "filter2", [])) {
                        echo ", filter2_";
                        echo twig_escape_filter($this->env, ($context["filterid"] ?? null), "html", null, true);
                    }
                    if ($this->getAttribute($context["item"], "filter3", [])) {
                        echo ", filter3_";
                        echo twig_escape_filter($this->env, ($context["filterid"] ?? null), "html", null, true);
                    }
                    if ($this->getAttribute($context["item"], "filter4", [])) {
                        echo ", filter4_";
                        echo twig_escape_filter($this->env, ($context["filterid"] ?? null), "html", null, true);
                    }
                    if ($this->getAttribute($context["item"], "filter5", [])) {
                        echo ", filter5_";
                        echo twig_escape_filter($this->env, ($context["filterid"] ?? null), "html", null, true);
                    }
                    echo "\"
\t\t\t\t";
                }
                // line 100
                echo "\t\t\t";
                $context["filtertags"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 101
                echo "
\t\t\t";
                // line 102
                ob_start(function () { return ''; });
                // line 103
                echo "\t\t\t\t";
                if ($this->getAttribute($context["item"], "image", [])) {
                    // line 104
                    echo "\t\t\t\t\t<div class=\"g-gallery-item";
                    if ($this->getAttribute($context["item"], "class", [])) {
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "class", []));
                    }
                    echo "\" ";
                    echo twig_escape_filter($this->env, ($context["filtertags"] ?? null), "html", null, true);
                    echo " ";
                    if ($this->getAttribute($context["item"], "extra", [])) {
                        echo ($context["attr_extra_item"] ?? null);
                    }
                    echo ">
\t\t\t\t\t\t<a class=\"uk-overlay uk-overlay-hover\" href=\"";
                    // line 105
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "image", []), false, 0), "html", null, true);
                    echo "\" ";
                    if ($this->getAttribute($context["item"], "title", [])) {
                        echo "title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", []));
                        echo "\"";
                    }
                    echo " data-uk-lightbox=\"{group:'";
                    echo twig_escape_filter($this->env, ($context["galleryid"] ?? null), "html", null, true);
                    echo "'}\">
\t\t\t\t\t\t\t<span class=\"uk-overlay-panel uk-overlay-background uk-overlay-icon uk-overlay-fade\"></span>
\t\t\t\t\t\t\t<img alt=\"";
                    // line 107
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "alt", []));
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "image", [])), "html", null, true);
                    echo "\" ";
                    echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->imageSize($this->getAttribute($context["item"], "image", []));
                    echo ">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 111
                echo "\t\t\t";
                $context["style1"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 112
                echo "
\t\t\t";
                // line 113
                ob_start(function () { return ''; });
                // line 114
                echo "\t\t\t\t";
                if ($this->getAttribute($context["item"], "image", [])) {
                    // line 115
                    echo "\t\t\t\t\t<div class=\"g-gallery-item";
                    if ($this->getAttribute($context["item"], "class", [])) {
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "class", []));
                    }
                    echo "\" ";
                    echo twig_escape_filter($this->env, ($context["filtertags"] ?? null), "html", null, true);
                    echo " ";
                    if ($this->getAttribute($context["item"], "extra", [])) {
                        echo ($context["attr_extra_item"] ?? null);
                    }
                    echo ">
\t\t\t\t\t\t<div class=\"uk-overlay uk-overlay-hover\">
\t\t\t\t\t\t\t<div class=\"uk-overlay-panel uk-overlay-background uk-overlay-fade\">
\t\t\t\t\t\t\t\t<div class=\"gallery-item-buttons\">
\t\t\t\t\t\t\t\t\t<a class=\"magnifier-button\" href=\"";
                    // line 119
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "image", []), false, 0), "html", null, true);
                    echo "\" ";
                    if ($this->getAttribute($context["item"], "title", [])) {
                        echo "title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", []));
                        echo "\"";
                    }
                    echo " data-uk-lightbox=\"{group:'";
                    echo twig_escape_filter($this->env, ($context["galleryid"] ?? null), "html", null, true);
                    echo "'}\" aria-label=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transKeyFilter("Enlarge Image", "IT_ACCESS_ENLARGEIMG"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t";
                    // line 123
                    if ($this->getAttribute($context["item"], "description", [])) {
                        // line 124
                        echo "\t\t\t\t\t\t\t\t\t\t<a class=\"info-button\" data-uk-modal=\"{target:'#gallery-modal-info-";
                        echo twig_escape_filter($this->env, ($context["indentifier"] ?? null));
                        echo "', center:true}\" aria-label=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transKeyFilter("More Details", "IT_ACCESS_MOREDETAILS"), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-info-circle\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 128
                    echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<img alt=\"";
                    // line 130
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "alt", []));
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "image", [])), "html", null, true);
                    echo "\" ";
                    echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->imageSize($this->getAttribute($context["item"], "image", []));
                    echo ">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    // line 132
                    if ($this->getAttribute($context["item"], "description", [])) {
                        // line 133
                        echo "\t\t\t\t\t\t\t<div id=\"gallery-modal-info-";
                        echo twig_escape_filter($this->env, ($context["indentifier"] ?? null));
                        echo "\" class=\"uk-modal\">
\t\t\t\t\t\t\t\t<div class=\"uk-modal-dialog\">
\t\t\t\t\t\t\t\t\t<a class=\"uk-modal-close uk-close\" aria-label=\"";
                        // line 135
                        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transKeyFilter("Close", "IT_ACCESS_CLOSE"), "html", null, true);
                        echo "\"></a>
\t\t\t\t\t\t\t\t\t\t";
                        // line 136
                        echo $this->getAttribute($context["item"], "description", []);
                        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    // line 140
                    echo "\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 142
                echo "\t\t\t";
                $context["style2"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 143
                echo "
\t\t\t";
                // line 144
                if (((($this->getAttribute(($context["particle"] ?? null), "style", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "style", []), "style1")) : ("style1")) == "style1")) {
                    echo twig_escape_filter($this->env, ($context["style1"] ?? null), "html", null, true);
                }
                // line 145
                echo "\t\t\t";
                if (((($this->getAttribute(($context["particle"] ?? null), "style", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "style", []), "style1")) : ("style1")) == "style2")) {
                    echo twig_escape_filter($this->env, ($context["style2"] ?? null), "html", null, true);
                }
                // line 146
                echo "
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        $context["gallery_items"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/gallery.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 151
    public function block_particle($context, array $blocks = [])
    {
        // line 152
        echo "
\t<div class=\"g-gallery";
        // line 153
        if ($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "css", []), "class", [])) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["particle"] ?? null), "css", []), "class", []));
        }
        echo " ";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "style", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "style", []), "style1")) : ("style1")));
        if (((($this->getAttribute(($context["particle"] ?? null), "filters", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "filters", []), "disabled")) : ("disabled")) != "disabled")) {
            echo " filters-enabled";
        } else {
            echo " filters-disabled";
        }
        if (((($this->getAttribute(($context["particle"] ?? null), "gutter", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "gutter", []), "enabled")) : ("enabled")) == "enabled")) {
            echo " gutter-enabled";
        } else {
            echo " gutter-disabled";
        }
        echo "\" ";
        if ($this->getAttribute(($context["particle"] ?? null), "extra", [])) {
            echo ($context["attr_extra"] ?? null);
        }
        echo ">
\t\t";
        // line 154
        if (($this->getAttribute(($context["particle"] ?? null), "mainheading", []) || $this->getAttribute(($context["particle"] ?? null), "introtext", []))) {
            // line 155
            echo "\t\t\t";
            echo twig_escape_filter($this->env, ($context["particleheading"] ?? null), "html", null, true);
            echo "
\t\t";
        }
        // line 157
        echo "
\t\t";
        // line 158
        if (((($this->getAttribute(($context["particle"] ?? null), "filters", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "filters", []), "disabled")) : ("disabled")) == "enabled")) {
            echo twig_escape_filter($this->env, ($context["gallery_filter"] ?? null), "html", null, true);
        }
        // line 159
        echo "\t\t";
        if (((($this->getAttribute(($context["particle"] ?? null), "filters", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "filters", []), "disabled")) : ("disabled")) == "enabled2")) {
            echo twig_escape_filter($this->env, ($context["gallery_filter_s2"] ?? null), "html", null, true);
        }
        // line 160
        echo "\t\t";
        if (((($this->getAttribute(($context["particle"] ?? null), "filters", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "filters", []), "disabled")) : ("disabled")) == "enabled3")) {
            echo twig_escape_filter($this->env, ($context["gallery_filter_s3"] ?? null), "html", null, true);
        }
        // line 161
        echo "
\t\t<div class=\"uk-grid-width-small-1-2 uk-grid-width-medium-1-3 uk-grid-width-large-1-";
        // line 162
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "columns", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "columns", []), "3")) : ("3")));
        echo "\" data-uk-grid=\"{ ";
        if (((($this->getAttribute(($context["particle"] ?? null), "gutter", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "gutter", []), "enabled")) : ("enabled")) == "enabled")) {
            echo "gutter: 30,";
        }
        if (((($this->getAttribute(($context["particle"] ?? null), "filters", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "filters", []), "disabled")) : ("disabled")) != "disabled")) {
            echo "controls: '#g-gallery-filter_";
            echo twig_escape_filter($this->env, ($context["filterid"] ?? null), "html", null, true);
            echo "'";
        }
        echo " }\">
\t\t\t";
        // line 163
        echo twig_escape_filter($this->env, ($context["gallery_items"] ?? null), "html", null, true);
        echo "
\t\t</div>
\t</div>
";
    }

    // line 168
    public function block_javascript_footer($context, array $blocks = [])
    {
        // line 169
        echo "\t";
        $this->displayParentBlock("javascript_footer", $context, $blocks);
        echo "
\t<script type=\"text/javascript\">
\t\t(function(\$) {
\t\t\t\$(document).ready(function() { 
\t\t\t\t\$(\"[data-uk-filter]\").on(\"click\", function() {
\t\t\t\t\tfunction gridAfterFilter() {
\t\t\t\t\t\t\$('[data-uk-grid]').trigger('display.uk.check');
\t\t\t\t\t}
\t\t\t\t\tsetTimeout(gridAfterFilter, 450);
\t\t\t\t})
\t\t\t});
\t\t})(jQuery);
\t</script>
";
    }

    public function getTemplateName()
    {
        return "@particles/gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  735 => 169,  732 => 168,  724 => 163,  711 => 162,  708 => 161,  703 => 160,  698 => 159,  694 => 158,  691 => 157,  685 => 155,  683 => 154,  660 => 153,  657 => 152,  654 => 151,  649 => 1,  642 => 148,  635 => 146,  630 => 145,  626 => 144,  623 => 143,  620 => 142,  616 => 140,  609 => 136,  605 => 135,  599 => 133,  597 => 132,  588 => 130,  584 => 128,  574 => 124,  572 => 123,  555 => 119,  538 => 115,  535 => 114,  533 => 113,  530 => 112,  527 => 111,  516 => 107,  503 => 105,  489 => 104,  486 => 103,  484 => 102,  481 => 101,  478 => 100,  453 => 98,  450 => 97,  448 => 96,  445 => 95,  443 => 94,  440 => 93,  434 => 92,  431 => 91,  426 => 90,  423 => 89,  418 => 88,  413 => 87,  410 => 86,  408 => 85,  404 => 82,  393 => 81,  382 => 80,  371 => 79,  360 => 78,  350 => 77,  344 => 76,  339 => 75,  333 => 74,  328 => 73,  323 => 72,  318 => 71,  313 => 70,  308 => 69,  305 => 68,  300 => 67,  297 => 66,  294 => 65,  291 => 64,  288 => 63,  285 => 62,  282 => 61,  280 => 60,  276 => 57,  265 => 56,  254 => 55,  243 => 54,  232 => 53,  222 => 52,  216 => 51,  211 => 50,  205 => 49,  200 => 48,  195 => 47,  190 => 46,  185 => 45,  180 => 44,  177 => 43,  172 => 42,  169 => 41,  166 => 40,  163 => 39,  160 => 38,  157 => 37,  154 => 36,  152 => 35,  148 => 32,  139 => 31,  130 => 30,  121 => 29,  112 => 28,  104 => 27,  100 => 26,  95 => 25,  93 => 24,  91 => 22,  87 => 19,  81 => 18,  78 => 17,  71 => 16,  66 => 15,  64 => 14,  61 => 13,  59 => 12,  48 => 7,  44 => 6,  40 => 5,  38 => 4,  36 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/gallery.html.twig", "C:\\xampp\\htdocs\\Jommla3\\templates\\it_construction\\particles\\gallery.html.twig");
    }
}
