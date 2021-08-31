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

/* @particles/social.html.twig */
class __TwigTemplate_b9139b614de1910313c32191d3f2c2197262b00fdda2ae737d5227756b4a0c1b extends \Twig\Template
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
        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/social.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_particle($context, array $blocks = [])
    {
        // line 13
        echo "\t";
        if ($this->getAttribute(($context["particle"] ?? null), "title", [])) {
            echo "<h2 class=\"g-title\">";
            echo $this->getAttribute(($context["particle"] ?? null), "title", []);
            echo "</h2>";
        }
        // line 14
        echo "    <div class=\"g-social";
        if ($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "css", []), "class", [])) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["particle"] ?? null), "css", []), "class", []));
        }
        echo "\" ";
        if ($this->getAttribute(($context["particle"] ?? null), "extra", [])) {
            echo ($context["attr_extra"] ?? null);
        }
        echo ">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "items", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 16
            echo "            ";
            $context["attr_extra_item"] = "";
            // line 17
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "extra", []));
            foreach ($context['_seq'] as $context["_key"] => $context["extra"]) {
                // line 18
                echo "                ";
                $context["attr_extra_item"] = (((((($context["attr_extra_item"] ?? null) . " ") . twig_escape_filter($this->env, twig_first($this->env, twig_get_array_keys_filter($context["extra"])))) . "=\"") . twig_escape_filter($this->env, twig_first($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->valuesFilter($context["extra"])), "html_attr")) . "\"");
                // line 19
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extra'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "            <a target=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "target", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "target", []), "_blank")) : ("_blank")));
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", []));
            echo "\" ";
            if ($this->getAttribute($context["item"], "tooltip", [])) {
                echo "data-uk-tooltip";
                if (((($this->getAttribute(($context["particle"] ?? null), "tooltippos", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "tooltippos", []), "auto")) : ("auto")) == "bottom")) {
                    echo "=\"{pos:'bottom'}\"";
                }
                if (((($this->getAttribute(($context["particle"] ?? null), "tooltippos", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "tooltippos", []), "auto")) : ("auto")) == "top")) {
                    echo "=\"{pos:'top'}\"";
                }
                echo " title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "tooltip", []));
                echo "\"";
            }
            echo " ";
            if (($this->getAttribute($context["item"], "tooltip", []) == false)) {
                echo "title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "text", []));
                echo "\"";
            }
            echo " ";
            if ($this->getAttribute($context["item"], "class", [])) {
                echo "class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "class", []));
                echo "\"";
            }
            echo " ";
            if ($this->getAttribute($context["item"], "extra", [])) {
                echo ($context["attr_extra_item"] ?? null);
            }
            if ($this->getAttribute($context["item"], "text", [])) {
                echo " aria-label=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "text", []));
                echo "\"";
            } else {
                echo " aria-label=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "tooltip", []));
                echo "\"";
            }
            echo ">
                <span class=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", []));
            echo "\"></span>
                ";
            // line 22
            if ($this->getAttribute($context["item"], "text", [])) {
                echo "<span class=\"g-social-text\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "text", []));
                echo "</span>";
            }
            // line 23
            echo "            </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "@particles/social.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 25,  161 => 23,  155 => 22,  151 => 21,  106 => 20,  100 => 19,  97 => 18,  92 => 17,  89 => 16,  85 => 15,  73 => 14,  66 => 13,  63 => 12,  58 => 1,  47 => 7,  43 => 6,  39 => 5,  37 => 4,  35 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/social.html.twig", "C:\\xampp\\htdocs\\Jommla3\\templates\\it_construction\\particles\\social.html.twig");
    }
}
