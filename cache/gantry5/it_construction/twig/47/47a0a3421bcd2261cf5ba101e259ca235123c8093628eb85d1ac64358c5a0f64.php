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

/* @particles/totop.html.twig */
class __TwigTemplate_af09276eda8b86b3786c19811bd23c2d554fb41cc5ff6fe2e282e713493ae753 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/totop.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = [])
    {
        // line 4
        $assetFunction = $this->env->getFunction('parse_assets')->getCallable();
        $assetVariables = ["priority" => 10];
        if ($assetVariables && !is_array($assetVariables)) {
            throw new UnexpectedValueException('{% scripts with x %}: x is not an array');
        }
        $location = "footer";
        if ($location && !is_string($location)) {
            throw new UnexpectedValueException('{% scripts in x %}: x is not a string');
        }
        $priority = isset($assetVariables['priority']) ? $assetVariables['priority'] : 0;
        ob_start();
        // line 5
        echo "\t<script type=\"text/javascript\">
\t\t(function(\$) {
\t\t\t\$(document).ready(function() {
\t\t\t\t\$(window).scroll(function() {
\t\t\t\t\tif (\$(document).scrollTop() < ";
        // line 9
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "offset", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "offset", []), 500)) : (500)));
        echo " || \$(window).width() < 767) {
\t\t\t\t        \$('#g-totop-button').removeClass('totopfixed');

\t\t\t\t    } else {
\t\t\t\t        \$('#g-totop-button').addClass('totopfixed');

\t\t\t\t    }
\t\t\t\t});
\t\t\t});
\t\t})(jQuery);
\t</script>
";
        $content = ob_get_clean();
        $assetFunction($content, $location, $priority);
        // line 21
        echo "<div class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["particle"] ?? null), "css", []), "class", []));
        echo " g-particle\">
    <div class=\"g-totop ";
        // line 22
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "style", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "style", []), "style1")) : ("style1")));
        echo "\">
        <a href=\"#\" id=\"g-totop-button\" rel=\"nofollow\" data-uk-smooth-scroll aria-label=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transKeyFilter("Back To Top", "IT_ACCESS_TOTOP"), "html", null, true);
        echo "\">
            ";
        // line 24
        if ((($this->getAttribute(($context["particle"] ?? null), "icon", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "icon", []), "fa fa-angle-up")) : ("fa fa-angle-up"))) {
            echo "<i class=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "icon", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "icon", []), "fa fa-angle-up")) : ("fa fa-angle-up")));
            echo "\"></i>";
        }
        // line 25
        echo "            ";
        if ($this->getAttribute(($context["particle"] ?? null), "content", [])) {
            echo $this->getAttribute(($context["particle"] ?? null), "content", []);
        }
        // line 26
        echo "        </a>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@particles/totop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 26,  95 => 25,  89 => 24,  85 => 23,  81 => 22,  76 => 21,  60 => 9,  54 => 5,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/totop.html.twig", "C:\\xampp\\htdocs\\Jommla3\\templates\\it_construction\\particles\\totop.html.twig");
    }
}
