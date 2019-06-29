<?php

/* data-manager.html.twig */
class __TwigTemplate_8ab536316a3a4704850bd64c695230fa4d5924c147f3f5c1aa58c3c564140d04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "data-manager.html.twig", 1);
        $this->blocks = array(
            'titlebar' => array($this, 'block_titlebar'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["mode"] = "types";
        // line 4
        if ((($this->getAttribute($this->getAttribute(($context["uri"] ?? null), "paths", array()), 1, array(), "array") == "data-manager") && $this->getAttribute($this->getAttribute(($context["uri"] ?? null), "paths", array()), 2, array(), "array"))) {
            // line 5
            $context["mode"] = "items";
            // line 6
            $context["type"] = $this->getAttribute($this->getAttribute(($context["uri"] ?? null), "paths", array()), 2, array(), "array");
            // line 8
            if ($this->getAttribute($this->getAttribute(($context["uri"] ?? null), "paths", array()), 3, array(), "array")) {
                // line 9
                $context["mode"] = "item";
                // line 10
                $context["item"] = $this->getAttribute($this->getAttribute(($context["uri"] ?? null), "paths", array()), 3, array(), "array");
            }
        }
        // line 15
        if ($this->getAttribute(($context["admin"] ?? null), "route", array())) {
            // line 16
            $context["context"] = $this->getAttribute(($context["admin"] ?? null), "page", array(0 => true), "method");
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 19
    public function block_titlebar($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        if ((($context["mode"] ?? null) == "types")) {
            // line 21
            echo "        <div class=\"button-bar\">
            <a class=\"button\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "\"><i class=\"fa fa-reply\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
            echo "</a>
        </div>
        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> ";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_DATA_MANAGER.DATA_TYPES"), "html", null, true);
            echo "</h1>
    ";
        } elseif ((        // line 25
($context["mode"] ?? null) == "items")) {
            // line 26
            echo "        <div class=\"button-bar\">
            <a class=\"button\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/data-manager\"><i class=\"fa fa-reply\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
            echo "</a>
        </div>
        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> ";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_DATA_MANAGER.ITEMS_LIST"), "html", null, true);
            echo "</h1>
    ";
        } elseif ((        // line 30
($context["mode"] ?? null) == "item")) {
            // line 31
            echo "        <div class=\"button-bar\">
            <a class=\"button\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/data-manager/";
            echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
            echo "\"><i class=\"fa fa-reply\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
            echo "</a>
        </div>
        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> ";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_DATA_MANAGER.ITEM_DETAILS"), "html", null, true);
            echo "</h1>
    ";
        }
    }

    // line 38
    public function block_content($context, array $blocks = array())
    {
        // line 39
        echo "
    <div class=\"page-data\">
        ";
        // line 41
        if ((($context["mode"] ?? null) == "types")) {
            // line 42
            echo "            ";
            $this->loadTemplate("partials/types.html.twig", "data-manager.html.twig", 42)->display($context);
            // line 43
            echo "        ";
        }
        // line 44
        echo "
        ";
        // line 45
        if ((($context["mode"] ?? null) == "items")) {
            // line 46
            echo "            ";
            $this->loadTemplate(array(0 => (("partials/data-manager/" . ($context["type"] ?? null)) . "/items.html.twig"), 1 => "partials/items.html.twig"), "data-manager.html.twig", 46)->display($context);
            // line 47
            echo "        ";
        }
        // line 48
        echo "
        ";
        // line 49
        if ((($context["mode"] ?? null) == "item")) {
            // line 50
            echo "            ";
            $this->loadTemplate(array(0 => (("partials/data-manager/" . ($context["type"] ?? null)) . "/item.html.twig"), 1 => "partials/item.html.twig"), "data-manager.html.twig", 50)->display($context);
            // line 51
            echo "        ";
        }
        // line 52
        echo "    </div>

";
    }

    public function getTemplateName()
    {
        return "data-manager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 52,  142 => 51,  139 => 50,  137 => 49,  134 => 48,  131 => 47,  128 => 46,  126 => 45,  123 => 44,  120 => 43,  117 => 42,  115 => 41,  111 => 39,  108 => 38,  101 => 34,  92 => 32,  89 => 31,  87 => 30,  83 => 29,  76 => 27,  73 => 26,  71 => 25,  67 => 24,  60 => 22,  57 => 21,  54 => 20,  51 => 19,  47 => 1,  44 => 16,  42 => 15,  38 => 10,  36 => 9,  34 => 8,  32 => 6,  30 => 5,  28 => 4,  26 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "data-manager.html.twig", "/home/ncpmultiyr/www/user/plugins/data-manager/admin/templates/data-manager.html.twig");
    }
}
