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

/* @particles/cta-button.html.twig */
class __TwigTemplate_9276fe69c2fef53be6e39d1ff4e668d65408824fc8e88e519cc237c901d9dd1a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'particle' => [$this, 'block_particle'],
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
        echo "    <div class=\"g-grid\">
        <div class=\"g-block\">
            <div class=\"g-cta-inner clearfix\">
                <div class=\"g-cta-left ";
        // line 16
        if (($this->getAttribute(($context["particle"] ?? null), "description", []) == false)) {
            echo " no-desc";
        }
        echo "\">
                    ";
        // line 17
        if ($this->getAttribute(($context["particle"] ?? null), "title", [])) {
            echo "<h3 class=\"g-cta-title\">";
            echo $this->getAttribute(($context["particle"] ?? null), "title", []);
            echo "</h3>";
        }
        // line 18
        echo "                    ";
        if ($this->getAttribute(($context["particle"] ?? null), "description", [])) {
            echo "<span class=\"g-cta-desc\">";
            echo $this->getAttribute(($context["particle"] ?? null), "description", []);
            echo "</span>";
        }
        // line 19
        echo "                </div>
                <div class=\"g-cta-right";
        // line 20
        if (($this->getAttribute(($context["particle"] ?? null), "description", []) == false)) {
            echo " no-desc";
        }
        echo "\">
                    ";
        // line 21
        if ($this->getAttribute(($context["particle"] ?? null), "link", [])) {
            // line 22
            echo "                        <a class=\"button\" target=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "target", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "target", []), "_parent")) : ("_parent")));
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "link", []));
            echo "\">";
            if ($this->getAttribute(($context["particle"] ?? null), "buttonicon", [])) {
                echo "<i class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "buttonicon", []));
                echo "\"></i>";
            }
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "buttontext", []));
            echo "</a>
                    ";
        }
        // line 24
        echo "                </div>
            </div>
        </div>
    </div>
";
        $context["ctabutton"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/cta-button.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 30
    public function block_particle($context, array $blocks = [])
    {
        // line 31
        echo "
    <div class=\"g-cta-button";
        // line 32
        if ($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "css", []), "class", [])) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["particle"] ?? null), "css", []), "class", []));
        }
        echo " ";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "style", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "style", []), "style1")) : ("style1")));
        echo "\" ";
        if ($this->getAttribute(($context["particle"] ?? null), "extra", [])) {
            echo ($context["attr_extra"] ?? null);
        }
        echo ">
        ";
        // line 33
        if (((($this->getAttribute(($context["particle"] ?? null), "style", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "style", []), "style1")) : ("style1")) == "style1")) {
            echo twig_escape_filter($this->env, ($context["ctabutton"] ?? null), "html", null, true);
        }
        // line 34
        echo "        ";
        if (((($this->getAttribute(($context["particle"] ?? null), "style", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "style", []), "style1")) : ("style1")) == "style2")) {
            echo twig_escape_filter($this->env, ($context["ctabutton"] ?? null), "html", null, true);
        }
        // line 35
        echo "    </div>

";
    }

    public function getTemplateName()
    {
        return "@particles/cta-button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 35,  145 => 34,  141 => 33,  128 => 32,  125 => 31,  122 => 30,  117 => 1,  110 => 24,  95 => 22,  93 => 21,  87 => 20,  84 => 19,  77 => 18,  71 => 17,  65 => 16,  60 => 13,  58 => 12,  47 => 7,  43 => 6,  39 => 5,  37 => 4,  35 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/cta-button.html.twig", "C:\\xampp\\htdocs\\Jommla3\\templates\\it_construction\\particles\\cta-button.html.twig");
    }
}
