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

/* @particles/page-title.html.twig */
class __TwigTemplate_393304311dedabfbd433d38a0c91075de9c1d067d3575cbd8481ce0b106a6b4a extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/page-title.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_particle($context, array $blocks = [])
    {
        // line 13
        echo "    <div class=\"g-page-title";
        if ($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "css", []), "class", [])) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["particle"] ?? null), "css", []), "class", []));
        }
        echo "\" ";
        if ($this->getAttribute(($context["particle"] ?? null), "extra", [])) {
            echo ($context["attr_extra"] ?? null);
        }
        echo ">
        <div class=\"g-grid\">
            <div class=\"g-block\">
                <div class=\"g-page-title-inner\">
                    ";
        // line 17
        if (($this->getAttribute(($context["particle"] ?? null), "title", []) || $this->getAttribute(($context["particle"] ?? null), "icon", []))) {
            // line 18
            echo "                        <h3>";
            // line 19
            if ($this->getAttribute(($context["particle"] ?? null), "icon", [])) {
                // line 20
                echo "<i class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "icon", []));
                echo "\"></i>";
            }
            // line 22
            if ($this->getAttribute(($context["particle"] ?? null), "title", [])) {
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "title", []));
            }
            // line 25
            echo "</h3>
                    ";
        }
        // line 27
        echo "
                    ";
        // line 28
        if ($this->getAttribute(($context["particle"] ?? null), "description", [])) {
            // line 29
            echo "                        <span>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "description", []));
            echo "</span>
                    ";
        }
        // line 31
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@particles/page-title.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 31,  106 => 29,  104 => 28,  101 => 27,  97 => 25,  94 => 23,  92 => 22,  87 => 20,  85 => 19,  83 => 18,  81 => 17,  66 => 13,  63 => 12,  58 => 1,  47 => 7,  43 => 6,  39 => 5,  37 => 4,  35 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/page-title.html.twig", "C:\\xampp\\htdocs\\Jommla3\\templates\\it_construction\\particles\\page-title.html.twig");
    }
}
