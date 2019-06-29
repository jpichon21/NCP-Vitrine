<?php

/* partials/types.html.twig */
class __TwigTemplate_3da3b488a00be2e86dc3d3e45e62d646686a56a86272cdba10b1e29a62cac933 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"gpm gpm-themes\">
    <h1>
        ";
        // line 3
        echo $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, "PLUGIN_DATA_MANAGER.DATA_TYPES"));
        echo "
    </h1>
    <div class=\"gpm gpm-themes themes card-row grid fixed-blocks pure-g\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array()), "types", array()));
        foreach ($context['_seq'] as $context["type"] => $context["count"]) {
            // line 7
            echo "            <a href=\"data-manager/";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "\" class=\"pure-u-1-3 card-item\">
                <div class=\"theme\">
                    <div class=\"gpm-name\">
                        ";
            // line 10
            echo ((twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "data-manager", array(), "array"), "types", array()), $context["type"], array(), "array"), "name", array()))) ? (twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "data-manager", array(), "array"), "types", array()), $context["type"], array(), "array"), "name", array()))) : (twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["type"]))));
            echo "
                    </div>
                    <p>";
            // line 12
            echo twig_escape_filter($this->env, $context["count"], "html", null, true);
            echo " ";
            echo $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, "PLUGIN_DATA_MANAGER.ITEMS"));
            echo "</p>
                </div>
            </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['count'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/types.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 16,  45 => 12,  40 => 10,  33 => 7,  29 => 6,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "partials/types.html.twig", "/home/ncpmultiyr/www/user/plugins/data-manager/admin/templates/partials/types.html.twig");
    }
}
