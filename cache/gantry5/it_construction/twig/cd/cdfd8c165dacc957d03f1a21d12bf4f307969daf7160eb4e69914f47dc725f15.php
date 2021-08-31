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

/* @particles/hero-slider.html.twig */
class __TwigTemplate_1d9862f380a9e21a0bd667a4788e4d3a64624dc62ed5fd94e578a9471d8f84dd extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $context["sliderid"] = twig_random($this->env);
        // line 44
        ob_start(function () { return ''; });
        // line 45
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "items", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 46
            echo "\t\t";
            $context["attr_extra_item"] = "";
            // line 47
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "extra", []));
            foreach ($context['_seq'] as $context["_key"] => $context["extra"]) {
                // line 48
                echo "\t\t\t";
                $context["attr_extra_item"] = (((((($context["attr_extra_item"] ?? null) . " ") . twig_escape_filter($this->env, twig_first($this->env, twig_get_array_keys_filter($context["extra"])))) . "=\"") . twig_escape_filter($this->env, twig_first($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->valuesFilter($context["extra"])), "html_attr")) . "\"");
                // line 49
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extra'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "
\t\t<li class=\"g-hero-slider-item";
            // line 51
            if ($this->getAttribute($context["item"], "class", [])) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "class", []));
            }
            echo "\" ";
            if ($this->getAttribute($context["item"], "extra", [])) {
                echo ($context["attr_extra_item"] ?? null);
            }
            echo ">
\t\t\t<div class=\"g-hero-slider-item-container\">
\t\t\t\t";
            // line 53
            if ($this->getAttribute($context["item"], "title", [])) {
                // line 54
                echo "\t\t\t\t\t<h1 class=\"g-hero-title\">";
                // line 55
                echo $this->getAttribute($context["item"], "title", []);
                // line 56
                echo "</h1>
\t\t\t\t";
            }
            // line 58
            echo "
\t\t\t\t";
            // line 59
            if ($this->getAttribute($context["item"], "description", [])) {
                // line 60
                echo "\t\t\t\t\t<div class=\"g-hero-desc\">";
                // line 61
                echo $this->getAttribute($context["item"], "description", []);
                // line 62
                echo "</div>
\t\t\t\t";
            }
            // line 64
            echo "
\t\t\t\t";
            // line 65
            if ($this->getAttribute($context["item"], "buttons", [])) {
                // line 66
                echo "\t\t\t\t\t<div class=\"g-hero-buttons\">
\t\t\t\t\t\t";
                // line 67
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "buttons", []));
                foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                    // line 68
                    echo "\t\t\t\t\t\t\t<a class=\"button ";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["button"], "buttonstyle", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "buttonstyle", []), "empty-light")) : ("empty-light")));
                    echo "\" target=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["button"], "target", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "target", []), "_parent")) : ("_parent")));
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "link", []));
                    echo "\">";
                    // line 69
                    if ($this->getAttribute($context["button"], "buttonicon", [])) {
                        echo "<span class=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "buttonicon", []));
                        echo "\"></span>";
                    }
                    echo $this->getAttribute($context["button"], "text", []);
                    // line 70
                    echo "</a>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                echo "\t
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 74
            echo "\t\t\t</div>
\t\t</li>

\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        $context["heroslideritem"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 80
        $context["effectid"] = twig_random($this->env);
        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/hero-slider.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 6
        echo "\t";
        if ($this->getAttribute(($context["particle"] ?? null), "enabled", [])) {
            // line 7
            echo "\t\t";
            $this->displayParentBlock("stylesheets", $context, $blocks);
            echo "
\t\t<style type=\"text/css\">
\t\t\t.g-hero-inline_";
            // line 9
            echo twig_escape_filter($this->env, ($context["sliderid"] ?? null), "html", null, true);
            echo " {
\t\t\t\theight: ";
            // line 10
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "height", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "height", []), "550px")) : ("550px")));
            echo ";
\t\t\t\tbackground-color: ";
            // line 11
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "bgcolor", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "bgcolor", []), "#2e373c")) : ("#2e373c")), "html", null, true);
            echo ";
\t\t\t\tcolor: ";
            // line 12
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "textcolor", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "textcolor", []), "#ffffff")) : ("#ffffff")), "html", null, true);
            echo ";
\t\t\t}

\t\t\t.g-hero-inline_";
            // line 15
            echo twig_escape_filter($this->env, ($context["sliderid"] ?? null), "html", null, true);
            echo " h1, .g-hero-inline_";
            echo twig_escape_filter($this->env, ($context["sliderid"] ?? null), "html", null, true);
            echo " h2, .g-hero-inline_";
            echo twig_escape_filter($this->env, ($context["sliderid"] ?? null), "html", null, true);
            echo " h3, .g-hero-inline_";
            echo twig_escape_filter($this->env, ($context["sliderid"] ?? null), "html", null, true);
            echo " h4, .g-hero-inline_";
            echo twig_escape_filter($this->env, ($context["sliderid"] ?? null), "html", null, true);
            echo " h5 {
\t\t\t\tcolor: ";
            // line 16
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "textcolor", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "textcolor", []), "#ffffff")) : ("#ffffff")), "html", null, true);
            echo " !important;
\t\t\t}

\t\t\t.g-hero-inline_";
            // line 19
            echo twig_escape_filter($this->env, ($context["sliderid"] ?? null), "html", null, true);
            echo " .uk-dotnav > * > * {
\t\t\t\tborder: 1px solid ";
            // line 20
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "textcolor", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "textcolor", []), "#ffffff")) : ("#ffffff")), "html", null, true);
            echo ";
\t\t\t}

\t\t\t.g-hero-inline_";
            // line 23
            echo twig_escape_filter($this->env, ($context["sliderid"] ?? null), "html", null, true);
            echo " .uk-dotnav > .uk-active > * {
\t\t\t\tbackground: ";
            // line 24
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "textcolor", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "textcolor", []), "#ffffff")) : ("#ffffff")), "html", null, true);
            echo ";
\t\t\t}

\t\t\t.g-hero-inline_";
            // line 27
            echo twig_escape_filter($this->env, ($context["sliderid"] ?? null), "html", null, true);
            echo " .g-hero-buttons .button.empty {
\t\t\t\tborder-color: ";
            // line 28
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "textcolor", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "textcolor", []), "#ffffff")) : ("#ffffff")), "html", null, true);
            echo ";
\t\t\t\tcolor: ";
            // line 29
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "textcolor", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "textcolor", []), "#ffffff")) : ("#ffffff")), "html", null, true);
            echo ";
\t\t\t}

\t\t\t";
            // line 32
            if ($this->getAttribute(($context["particle"] ?? null), "bgimage", [])) {
                // line 33
                echo "\t\t\t\t.g-hero-inline_";
                echo twig_escape_filter($this->env, ($context["sliderid"] ?? null), "html", null, true);
                echo " {
\t\t\t\t\tbackground-image: url(";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["particle"] ?? null), "bgimage", [])), "html", null, true);
                echo ");
\t\t\t\t\tbackground-repeat: ";
                // line 35
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "bgrepeat", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "bgrepeat", []), "no-repeat")) : ("no-repeat")));
                echo ";
\t\t\t\t\tbackground-size: ";
                // line 36
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "bgsize", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "bgsize", []), "cover")) : ("cover")));
                echo ";
\t\t\t\t\tbackground-attachment: ";
                // line 37
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "bgattachment", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "bgattachment", []), "scroll")) : ("scroll")));
                echo "; 
\t\t\t\t}
\t\t\t";
            }
            // line 40
            echo "\t\t</style>
\t";
        }
    }

    // line 82
    public function block_particle($context, array $blocks = [])
    {
        // line 83
        echo "\t";
        if (((($this->getAttribute(($context["particle"] ?? null), "behaviour", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "behaviour", []), "slideset")) : ("slideset")) == "slider")) {
            // line 84
            echo "\t\t<div ";
            if (((($this->getAttribute(($context["particle"] ?? null), "effect", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "effect", []), "effect1")) : ("effect1")) != "none")) {
                echo "id=\"particles-js_";
                echo twig_escape_filter($this->env, ($context["effectid"] ?? null), "html", null, true);
                echo "\"";
            }
            echo " class=\"g-hero-slider g-hero-inline_";
            echo twig_escape_filter($this->env, ($context["sliderid"] ?? null), "html", null, true);
            if ($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "css", []), "class", [])) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["particle"] ?? null), "css", []), "class", []));
            }
            echo "\" ";
            if ($this->getAttribute(($context["particle"] ?? null), "extra", [])) {
                echo ($context["attr_extra"] ?? null);
            }
            echo ">
\t\t\t<div class=\"uk-slidenav-position\" data-uk-slider";
            // line 85
            if (((($this->getAttribute(($context["particle"] ?? null), "autoplay", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "autoplay", []), "enable")) : ("enable")) == "enable")) {
                echo "=\"{autoplay:true, autoplayInterval: '";
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "autoplayInterval", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "autoplayInterval", []), 7000)) : (7000)));
                echo "'}\"";
            }
            echo ">
\t\t\t\t<div class=\"uk-slider-container\">
\t\t\t\t\t<ul class=\"uk-slider uk-grid uk-grid-width-medium-1-1\">
\t\t\t\t\t\t";
            // line 88
            echo twig_escape_filter($this->env, ($context["heroslideritem"] ?? null), "html", null, true);
            echo "
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t";
            // line 91
            if ((((($this->getAttribute(($context["particle"] ?? null), "navigation", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "navigation", []), "arrows")) : ("arrows")) == "arrows") || ((($this->getAttribute(($context["particle"] ?? null), "navigation", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "navigation", []), "arrows")) : ("arrows")) == "both"))) {
                // line 92
                echo "\t\t\t\t\t<a href=\"\" class=\"uk-slidenav uk-slidenav-previous\" data-uk-slider-item=\"previous\" aria-label=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transKeyFilter("Previous", "IT_ACCESS_PREVIOUS"), "html", null, true);
                echo "\"></a>
\t\t\t\t\t<a href=\"\" class=\"uk-slidenav uk-slidenav-next\" data-uk-slider-item=\"next\" aria-label=\"";
                // line 93
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transKeyFilter("Next", "IT_ACCESS_NEXT"), "html", null, true);
                echo "\"></a>
\t\t\t\t";
            }
            // line 95
            echo "\t\t\t</div>
\t\t</div>
\t";
        }
        // line 98
        echo "\t";
        if (((($this->getAttribute(($context["particle"] ?? null), "behaviour", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "behaviour", []), "slideset")) : ("slideset")) == "slideset")) {
            // line 99
            echo "\t\t<div ";
            if (((($this->getAttribute(($context["particle"] ?? null), "effect", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "effect", []), "effect1")) : ("effect1")) != "none")) {
                echo "id=\"particles-js_";
                echo twig_escape_filter($this->env, ($context["effectid"] ?? null), "html", null, true);
                echo "\"";
            }
            echo " class=\"g-hero-slider g-hero-inline_";
            echo twig_escape_filter($this->env, ($context["sliderid"] ?? null), "html", null, true);
            if ($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "css", []), "class", [])) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["particle"] ?? null), "css", []), "class", []));
            }
            echo "\" ";
            if ($this->getAttribute(($context["particle"] ?? null), "extra", [])) {
                echo ($context["attr_extra"] ?? null);
            }
            echo ">
\t\t\t<div class=\"uk-slidenav-position\" data-uk-slideset=\"{small: 1, medium: 1, large: 1, duration: ";
            // line 100
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "duration", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "duration", []), 200)) : (200)));
            echo ", ";
            if (((($this->getAttribute(($context["particle"] ?? null), "autoplay", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "autoplay", []), "enable")) : ("enable")) == "enable")) {
                echo "autoplay: 'true', autoplayInterval: '";
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "autoplayInterval", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "autoplayInterval", []), 7000)) : (7000)));
                echo "',";
            }
            echo " animation: '";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "animation", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "animation", []), "fade")) : ("fade")));
            echo "'}\">
\t\t\t\t<ul class=\"uk-slideset uk-grid\">
\t\t\t\t\t";
            // line 102
            echo twig_escape_filter($this->env, ($context["heroslideritem"] ?? null), "html", null, true);
            echo "
\t\t\t\t</ul>
\t\t\t\t";
            // line 104
            if ((((($this->getAttribute(($context["particle"] ?? null), "navigation", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "navigation", []), "arrows")) : ("arrows")) == "arrows") || ((($this->getAttribute(($context["particle"] ?? null), "navigation", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "navigation", []), "arrows")) : ("arrows")) == "both"))) {
                // line 105
                echo "\t\t\t\t\t<a href=\"\" class=\"uk-slidenav uk-slidenav-previous\" data-uk-slideset-item=\"previous\" aria-label=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transKeyFilter("Previous", "IT_ACCESS_PREVIOUS"), "html", null, true);
                echo "\"></a>
\t\t\t\t\t<a href=\"\" class=\"uk-slidenav uk-slidenav-next\" data-uk-slideset-item=\"next\" aria-label=\"";
                // line 106
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transKeyFilter("Next", "IT_ACCESS_NEXT"), "html", null, true);
                echo "\"></a>
\t\t\t\t";
            }
            // line 108
            echo "\t\t\t\t";
            if ((((($this->getAttribute(($context["particle"] ?? null), "navigation", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "navigation", []), "arrows")) : ("arrows")) == "dots") || ((($this->getAttribute(($context["particle"] ?? null), "navigation", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "navigation", []), "arrows")) : ("arrows")) == "both"))) {
                // line 109
                echo "\t\t\t\t\t<ul class=\"uk-slideset-nav uk-dotnav uk-flex-center\">
\t    \t\t\t";
                // line 110
                $context["counter"] = 0;
                // line 111
                echo "\t    \t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "items", []));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 112
                    echo "\t    \t\t\t\t<li data-uk-slideset-item=\"";
                    echo twig_escape_filter($this->env, ($context["counter"] ?? null), "html", null, true);
                    echo "\"><a href=\"\" aria-label=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transKeyFilter("Item", "IT_ACCESS_ITEM"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, ($context["counter"] ?? null), "html", null, true);
                    echo "\"></a></li>
\t    \t\t\t\t";
                    // line 113
                    $context["counter"] = (($context["counter"] ?? null) + 1);
                    // line 114
                    echo "\t    \t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 115
                echo "\t\t\t\t\t</ul>
\t\t\t\t";
            }
            // line 117
            echo "\t\t\t</div>
\t\t</div>
\t";
        }
    }

    // line 122
    public function block_javascript_footer($context, array $blocks = [])
    {
        // line 123
        echo "\t";
        $this->displayParentBlock("javascript_footer", $context, $blocks);
        echo "
\t";
        // line 124
        if (((($this->getAttribute(($context["particle"] ?? null), "effect", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "effect", []), "effect1")) : ("effect1")) != "none")) {
            // line 125
            echo "\t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/particles.min.js"), "html", null, true);
            echo "\"></script>
\t";
        }
        // line 127
        echo "
\t";
        // line 128
        if (((($this->getAttribute(($context["particle"] ?? null), "effect", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "effect", []), "effect1")) : ("effect1")) == "effect1")) {
            // line 129
            echo "\t\t<script type=\"text/javascript\">
\t\t\tparticlesJS('particles-js_";
            // line 130
            echo twig_escape_filter($this->env, ($context["effectid"] ?? null), "html", null, true);
            echo "',
\t\t\t  
\t\t\t  {
\t\t\t    \"particles\": {
\t\t\t      \"number\": {
\t\t\t        \"value\": 100,
\t\t\t        \"density\": {
\t\t\t          \"enable\": true,
\t\t\t          \"value_area\": 800
\t\t\t        }
\t\t\t      },
\t\t\t      \"color\": {
\t\t\t        \"value\": \"#ffffff\"
\t\t\t      },
\t\t\t      \"shape\": {
\t\t\t        \"type\": \"circle\"
\t\t\t      },
\t\t\t      \"opacity\": {
\t\t\t        \"value\": 0.5,
\t\t\t        \"random\": false,
\t\t\t        \"anim\": {
\t\t\t          \"enable\": false,
\t\t\t          \"speed\": 1,
\t\t\t          \"opacity_min\": 0.1,
\t\t\t          \"sync\": false
\t\t\t        }
\t\t\t      },
\t\t\t      \"size\": {
\t\t\t        \"value\": 3,
\t\t\t        \"random\": true,
\t\t\t        \"anim\": {
\t\t\t          \"enable\": false,
\t\t\t          \"speed\": 40,
\t\t\t          \"size_min\": 0.1,
\t\t\t          \"sync\": false
\t\t\t        }
\t\t\t      },
\t\t\t      \"line_linked\": {
\t\t\t        \"enable\": true,
\t\t\t        \"distance\": 150,
\t\t\t        \"color\": \"#ffffff\",
\t\t\t        \"opacity\": 0.4,
\t\t\t        \"width\": 1
\t\t\t      },
\t\t\t      \"move\": {
\t\t\t        \"enable\": true,
\t\t\t        \"speed\": 3,
\t\t\t        \"direction\": \"none\",
\t\t\t        \"random\": false,
\t\t\t        \"straight\": false,
\t\t\t        \"out_mode\": \"out\",
\t\t\t        \"attract\": {
\t\t\t          \"enable\": false,
\t\t\t          \"rotateX\": 600,
\t\t\t          \"rotateY\": 1200
\t\t\t        }
\t\t\t      }
\t\t\t    },
\t\t\t    \"interactivity\": {
\t\t\t      \"detect_on\": \"canvas\",
\t\t\t      \"events\": {
\t\t\t        \"resize\": true
\t\t\t      },
\t\t\t    },
\t\t\t    \"retina_detect\": true
\t\t\t  }
\t\t\t);
\t\t</script>
\t";
        }
        // line 199
        echo "
\t";
        // line 200
        if (((($this->getAttribute(($context["particle"] ?? null), "effect", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "effect", []), "effect1")) : ("effect1")) == "effect2")) {
            // line 201
            echo "\t\t<script type=\"text/javascript\">
\t\t\tparticlesJS('particles-js_";
            // line 202
            echo twig_escape_filter($this->env, ($context["effectid"] ?? null), "html", null, true);
            echo "',
\t\t\t  
\t\t\t  {
\t\t\t    \"particles\": {
\t\t\t      \"number\": {
\t\t\t        \"value\": 10,
\t\t\t        \"density\": {
\t\t\t          \"enable\": true,
\t\t\t          \"value_area\": 800
\t\t\t        }
\t\t\t      },
\t\t\t      \"color\": {
\t\t\t        \"value\": \"";
            // line 214
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "textcolor", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "textcolor", []), "#ffffff")) : ("#ffffff")), "html", null, true);
            echo "\"
\t\t\t      },
\t\t\t      \"shape\": {
\t\t\t        \"type\": \"polygon\",
\t\t\t        \"polygon\": {\"nb_sides\":6}
\t\t\t      },
\t\t\t      \"opacity\": {
\t\t\t        \"value\": 0.03,
\t\t\t        \"random\": true,
\t\t\t        \"anim\": {
\t\t\t          \"enable\": false,
\t\t\t          \"speed\": 1,
\t\t\t          \"opacity_min\": 0.1,
\t\t\t          \"sync\": false
\t\t\t        }
\t\t\t      },
\t\t\t      \"size\": {
\t\t\t        \"value\": 160,
\t\t\t        \"random\": true,
\t\t\t        \"anim\": {
\t\t\t          \"enable\": false,
\t\t\t          \"speed\": 10,
\t\t\t          \"size_min\": 40,
\t\t\t          \"sync\": false
\t\t\t        }
\t\t\t      },
\t\t\t      \"line_linked\": {
\t\t\t        \"enable\": false,
\t\t\t        \"distance\": 200,
\t\t\t        \"color\": \"#ffffff\",
\t\t\t        \"opacity\": 0.4,
\t\t\t        \"width\": 1
\t\t\t      },
\t\t\t      \"move\": {
\t\t\t        \"enable\": true,
\t\t\t        \"speed\": 8,
\t\t\t        \"direction\": \"none\",
\t\t\t        \"random\": false,
\t\t\t        \"straight\": false,
\t\t\t        \"out_mode\": \"out\",
\t\t\t        \"attract\": {
\t\t\t          \"enable\": false,
\t\t\t          \"rotateX\": 600,
\t\t\t          \"rotateY\": 1200
\t\t\t        }
\t\t\t      }
\t\t\t    },
\t\t\t    \"interactivity\": {
\t\t\t      \"detect_on\": \"canvas\",
\t\t\t      \"events\": {
\t\t\t        \"resize\": true
\t\t\t      },
\t\t\t    },
\t\t\t    \"retina_detect\": true
\t\t\t  }
\t\t\t);
\t\t</script>
\t";
        }
        // line 272
        echo "
\t";
        // line 273
        if (((($this->getAttribute(($context["particle"] ?? null), "effect", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "effect", []), "effect1")) : ("effect1")) == "effect3")) {
            // line 274
            echo "\t\t<script type=\"text/javascript\">
\t\t\tparticlesJS('particles-js_";
            // line 275
            echo twig_escape_filter($this->env, ($context["effectid"] ?? null), "html", null, true);
            echo "',
\t\t\t  
\t\t\t  {
\t\t\t    \"particles\": {
\t\t\t      \"number\": {
\t\t\t        \"value\": 300,
\t\t\t        \"density\": {
\t\t\t          \"enable\": true,
\t\t\t          \"value_area\": 800
\t\t\t        }
\t\t\t      },
\t\t\t      \"color\": {
\t\t\t        \"value\": \"#ffffff\"
\t\t\t      },
\t\t\t      \"shape\": {
\t\t\t        \"type\": \"circle\",
\t\t\t      },
\t\t\t      \"opacity\": {
\t\t\t        \"value\": 0.4,
\t\t\t        \"random\": true,
\t\t\t        \"anim\": {
\t\t\t          \"enable\": false,
\t\t\t          \"speed\": 1,
\t\t\t          \"opacity_min\": 0.1,
\t\t\t          \"sync\": false
\t\t\t        }
\t\t\t      },
\t\t\t      \"size\": {
\t\t\t        \"value\": 10,
\t\t\t        \"random\": true,
\t\t\t        \"anim\": {
\t\t\t          \"enable\": false,
\t\t\t          \"speed\": 40,
\t\t\t          \"size_min\": 0.1,
\t\t\t          \"sync\": false
\t\t\t        }
\t\t\t      },
\t\t\t      \"line_linked\": {
\t\t\t        \"enable\": false,
\t\t\t        \"distance\": 500,
\t\t\t        \"color\": \"#ffffff\",
\t\t\t        \"opacity\": 0.4,
\t\t\t        \"width\": 2
\t\t\t      },
\t\t\t      \"move\": {
\t\t\t        \"enable\": true,
\t\t\t        \"speed\": 1,
\t\t\t        \"direction\": \"bottom\",
\t\t\t        \"random\": false,
\t\t\t        \"straight\": false,
\t\t\t        \"out_mode\": \"out\",
\t\t\t        \"attract\": {
\t\t\t          \"enable\": false,
\t\t\t          \"rotateX\": 600,
\t\t\t          \"rotateY\": 1200
\t\t\t        }
\t\t\t      }
\t\t\t    },
\t\t\t    \"interactivity\": {
\t\t\t      \"detect_on\": \"canvas\",
\t\t\t      \"events\": {
\t\t\t        \"resize\": true
\t\t\t      },
\t\t\t    },
\t\t\t    \"retina_detect\": true
\t\t\t  }
\t\t\t);
\t\t</script>
\t";
        }
    }

    public function getTemplateName()
    {
        return "@particles/hero-slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  609 => 275,  606 => 274,  604 => 273,  601 => 272,  540 => 214,  525 => 202,  522 => 201,  520 => 200,  517 => 199,  445 => 130,  442 => 129,  440 => 128,  437 => 127,  431 => 125,  429 => 124,  424 => 123,  421 => 122,  414 => 117,  410 => 115,  404 => 114,  402 => 113,  393 => 112,  388 => 111,  386 => 110,  383 => 109,  380 => 108,  375 => 106,  370 => 105,  368 => 104,  363 => 102,  350 => 100,  331 => 99,  328 => 98,  323 => 95,  318 => 93,  313 => 92,  311 => 91,  305 => 88,  295 => 85,  276 => 84,  273 => 83,  270 => 82,  264 => 40,  258 => 37,  254 => 36,  250 => 35,  246 => 34,  241 => 33,  239 => 32,  233 => 29,  229 => 28,  225 => 27,  219 => 24,  215 => 23,  209 => 20,  205 => 19,  199 => 16,  187 => 15,  181 => 12,  177 => 11,  173 => 10,  169 => 9,  163 => 7,  160 => 6,  157 => 5,  152 => 1,  150 => 80,  140 => 74,  135 => 71,  128 => 70,  121 => 69,  113 => 68,  109 => 67,  106 => 66,  104 => 65,  101 => 64,  97 => 62,  95 => 61,  93 => 60,  91 => 59,  88 => 58,  84 => 56,  82 => 55,  80 => 54,  78 => 53,  66 => 51,  63 => 50,  57 => 49,  54 => 48,  49 => 47,  46 => 46,  41 => 45,  39 => 44,  37 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/hero-slider.html.twig", "C:\\xampp\\htdocs\\Jommla3\\templates\\it_construction\\particles\\hero-slider.html.twig");
    }
}
