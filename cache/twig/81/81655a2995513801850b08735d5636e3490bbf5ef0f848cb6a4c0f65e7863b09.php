<?php

/* forms/fields/pages/pages.html.twig */
class __TwigTemplate_49a23bf9c3a48db3a31ecc32c4e31bcb1cde884782694e96789ee4f73e36c216 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/pages/pages.html.twig", 1);
        $this->blocks = array(
            'global_attributes' => array($this, 'block_global_attributes'),
            'input' => array($this, 'block_input'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 17
        $context["macro"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 19
    public function block_global_attributes($context, array $blocks = array())
    {
        // line 20
        echo "    data-grav-selectize=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter((($this->getAttribute(($context["field"] ?? null), "selectize", array(), "any", true, true)) ? ($this->getAttribute(($context["field"] ?? null), "selectize", array())) : (array()))), "html_attr");
        echo "\"
    data-grav-field=\"select\"
    data-grav-disabled=\"";
        // line 22
        echo (((null === ($context["originalValue"] ?? null))) ? ("true") : ("false"));
        echo "\"
    data-grav-default=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["field"] ?? null), "default", array())), "html_attr");
        echo "\"
";
    }

    // line 26
    public function block_input($context, array $blocks = array())
    {
        // line 27
        echo "
    ";
        // line 28
        $context["start_page"] = (($this->getAttribute(($context["field"] ?? null), "start_route", array())) ? ($this->getAttribute(($context["pages"] ?? null), "find", array(0 => $this->getAttribute(($context["field"] ?? null), "start_route", array())), "method")) : (null));
        // line 29
        echo "    ";
        $context["show_all"] = ((($this->getAttribute(($context["field"] ?? null), "show_all", array()) === false)) ? (false) : (true));
        // line 30
        echo "    ";
        $context["show_fullpath"] = ((($this->getAttribute(($context["field"] ?? null), "show_fullpath", array()) === true)) ? (true) : (false));
        // line 31
        echo "    ";
        $context["show_slug"] = ((($this->getAttribute(($context["field"] ?? null), "show_slug", array()) === true)) ? (true) : (false));
        // line 32
        echo "    ";
        $context["show_modular"] = ((($this->getAttribute(($context["field"] ?? null), "show_modular", array()) === true)) ? (true) : (false));
        // line 33
        echo "    ";
        $context["limit_levels"] = (($this->getAttribute(($context["field"] ?? null), "limit_levels", array())) ? ($this->getAttribute(($context["field"] ?? null), "limit_levels", array())) : (false));
        // line 34
        echo "
    ";
        // line 35
        $context["page_list"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "pages", array()), "getList", array(0 => ($context["start_page"] ?? null), 1 => 0, 2 => true, 3 => ($context["show_all"] ?? null), 4 => ($context["show_fullpath"] ?? null), 5 => ($context["show_slug"] ?? null), 6 => ($context["show_modular"] ?? null), 7 => ($context["limit_levels"] ?? null)), "method");
        // line 36
        echo "
    <div class=\"form-select-wrapper ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", array()), "html", null, true);
        echo "\">
        <select class=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", array()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", array()))) . (($this->getAttribute(($context["field"] ?? null), "multiple", array())) ? ("[]") : (""))), "html", null, true);
        echo "\"
                ";
        // line 39
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autofocus", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "autofocus=\"autofocus\"";
        }
        // line 40
        echo "                ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "novalidate", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "novalidate=\"novalidate\"";
        }
        // line 41
        echo "                ";
        if (twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "required=\"required\"";
        }
        // line 42
        echo "                ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "multiple", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "multiple=\"multiple\"";
        }
        // line 43
        echo "                ";
        if (($this->getAttribute(($context["field"] ?? null), "disabled", array()) || ($context["isDisabledToggleable"] ?? null))) {
            echo "disabled=\"disabled\"";
        }
        // line 44
        echo "                >
        ";
        // line 45
        if ($this->getAttribute(($context["field"] ?? null), "show_root", array())) {
            // line 46
            echo "            <option value=\"/\">/ (root)</option>
        ";
        }
        // line 48
        echo "        ";
        echo $context["macro"]->getpage_options($context, ($context["page_list"] ?? null));
        echo "
        </select>
    </div>
";
    }

    // line 3
    public function getpage_options($__globals__ = null, $__pages_list__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "globals" => $__globals__,
            "pages_list" => $__pages_list__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            echo "    ";
            $context["field"] = $this->getAttribute(($context["globals"] ?? null), "field", array());
            // line 5
            echo "    ";
            $context["value"] = $this->getAttribute(($context["globals"] ?? null), "value", array());
            // line 6
            echo "    ";
            if (($this->getAttribute(($context["field"] ?? null), "options", array()) && (($context["depth"] ?? null) == 0))) {
                // line 7
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "options", array()));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 8
                    echo "            <option value=\"";
                    echo twig_escape_filter($this->env, $context["key"], "html_attr");
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($context["value"]), "html", null, true);
                    echo "</option>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 10
                echo "    ";
            }
            // line 11
            echo "
    ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pages_list"] ?? null));
            foreach ($context['_seq'] as $context["page_route"] => $context["option"]) {
                // line 13
                echo "        <option ";
                if ((($context["page_route"] == ($context["value"] ?? null)) || ($this->getAttribute(($context["field"] ?? null), "multiple", array()) && twig_in_filter($context["page_route"], ($context["value"] ?? null))))) {
                    echo "selected=\"selected\"";
                }
                echo " value=\"";
                echo twig_escape_filter($this->env, $context["page_route"], "html", null, true);
                echo "\">";
                echo $context["option"];
                echo "</option>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['page_route'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "forms/fields/pages/pages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 13,  178 => 12,  175 => 11,  172 => 10,  161 => 8,  156 => 7,  153 => 6,  150 => 5,  147 => 4,  134 => 3,  125 => 48,  121 => 46,  119 => 45,  116 => 44,  111 => 43,  106 => 42,  101 => 41,  96 => 40,  92 => 39,  86 => 38,  82 => 37,  79 => 36,  77 => 35,  74 => 34,  71 => 33,  68 => 32,  65 => 31,  62 => 30,  59 => 29,  57 => 28,  54 => 27,  51 => 26,  45 => 23,  41 => 22,  35 => 20,  32 => 19,  28 => 1,  26 => 17,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "forms/fields/pages/pages.html.twig", "/home/ncpmultiyr/www/user/plugins/admin/themes/grav/templates/forms/fields/pages/pages.html.twig");
    }
}
