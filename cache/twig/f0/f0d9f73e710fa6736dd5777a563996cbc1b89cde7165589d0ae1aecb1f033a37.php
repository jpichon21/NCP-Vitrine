<?php

/* forms/fields/multilevel/multilevel.html.twig */
class __TwigTemplate_b7290a0c5512ab37d7b10fc13e582b5687f247645eb65446dc820a561c2418e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/multilevel/multilevel.html.twig", 1);
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
        // line 84
        $context["macro"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 86
    public function block_global_attributes($context, array $blocks = array())
    {
        // line 87
        echo "    data-grav-array-name=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", array()))), "html", null, true);
        echo "\"
    data-grav-array-keyname=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "placeholder_key", array()))), "html", null, true);
        echo "\"
    data-grav-array-valuename=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "placeholder_value", array()))), "html", null, true);
        echo "\"
    ";
        // line 90
        $this->displayParentBlock("global_attributes", $context, $blocks);
        echo "
";
    }

    // line 93
    public function block_input($context, array $blocks = array())
    {
        // line 94
        echo "    <div data-id=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->randomStringFunc(), "html", null, true);
        echo "\" data-grav-multilevel-field data-grav-array-type=\"container\" data-grav-array-mode=\"value_only\"";
        echo (((twig_length_filter($this->env, ($context["value"] ?? null)) <= 1)) ? (" class=\"one-child\"") : (""));
        echo ">
        ";
        // line 95
        if (twig_length_filter($this->env, ($context["value"] ?? null))) {
            // line 96
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["content"]) {
                // line 97
                echo "<div class=\"element-wrapper\">
                    ";
                // line 98
                echo $context["macro"]->getrenderer($context["key"], $context["content"], ($context["field"] ?? null), ($context["scope"] ?? null), 0, (("[" . $context["key"]) . "]"), true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['content'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 103
            echo "            <div class=\"element-wrapper\">
                <div class=\"form-row array-field-value_only js__multilevel-field\"
                    data-grav-array-type=\"row\">

                    <input
                        type=\"text\"
                        name=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", array()))), "html", null, true);
            echo "\"
                        placeholder=\"Enter value\"
                        value=\"\" />

                    <span class=\"fa fa-minus js__remove-item\"></span>
                    <span class=\"fa fa-plus js__add-sibling hidden\" data-level=\"0\" ></span>
                    <span class=\"fa fa-plus-circle js__add-children hidden\" data-level=\"0\"></span>
                </div>
            </div>";
        }
        // line 119
        echo "    </div>
";
    }

    // line 6
    public function getfield($__value__ = null, $__key__ = null, $__level__ = null, $__globalvars__ = null, $__disable_name__ = null, $__hidden__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "value" => $__value__,
            "key" => $__key__,
            "level" => $__level__,
            "globalvars" => $__globalvars__,
            "disable_name" => $__disable_name__,
            "hidden" => $__hidden__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 7
            echo "        ";
            $context["name"] = ((("data[" . twig_replace_filter($this->getAttribute($this->getAttribute(($context["globalvars"] ?? null), "field", array()), "name", array()), array("." => "]["))) . "]") . ($context["key"] ?? null));
            // line 8
            echo "        <div class=\"form-row array-field-value_only js__multilevel-field ";
            echo (((($context["level"] ?? null) == 0)) ? ("top") : (""));
            echo "\"
            data-grav-array-type=\"row\" ";
            // line 9
            if (((((isset($context["hidden"]) || array_key_exists("hidden", $context))) ? (_twig_default_filter(($context["hidden"] ?? null), false)) : (false)) == true)) {
                echo "style=\"display: none\"";
            }
            echo ">
            <input
                type=\"text\"
                ";
            // line 12
            if ((($context["disable_name"] ?? null) != true)) {
                echo "name=\"";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\"";
            }
            // line 13
            echo "                data-attr-name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\"
                placeholder=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "placeholder_value", array()))), "html", null, true);
            echo "\"
                style=\"margin-left: ";
            // line 15
            echo twig_escape_filter($this->env, (($context["level"] ?? null) * 50), "html", null, true);
            echo "px\"
                value=\"";
            // line 16
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" />

            <span class=\"fa fa-minus js__remove-item\"></span>
            <span class=\"fa fa-plus js__add-sibling hidden\" data-level=\"";
            // line 19
            echo twig_escape_filter($this->env, ($context["level"] ?? null), "html", null, true);
            echo "\"></span>
            <span class=\"fa fa-plus-circle js__add-children hidden\" data-level=\"";
            // line 20
            echo twig_escape_filter($this->env, ($context["level"] ?? null), "html", null, true);
            echo "\"></span>
        </div>
    ";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 3
    public function getrenderer($__key__ = null, $__content__ = null, $__field__ = null, $__scope__ = null, $__level__ = null, $__parent_key__ = null, $__up_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "key" => $__key__,
            "content" => $__content__,
            "field" => $__field__,
            "scope" => $__scope__,
            "level" => $__level__,
            "parent_key" => $__parent_key__,
            "up_level" => $__up_level__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            echo "    ";
            $context["self"] = $this;
            // line 5
            echo "
    ";
            // line 23
            echo "
    ";
            // line 24
            if ((($context["level"] ?? null) == 0)) {
                // line 25
                echo "
        ";
                // line 26
                echo $context["self"]->getfield(($context["key"] ?? null), "", ($context["level"] ?? null), $context, true, ((is_numeric(($context["key"] ?? null))) ? (true) : (false)));
                echo "

        ";
                // line 28
                if ( !twig_test_iterable(($context["content"] ?? null))) {
                    // line 29
                    echo "            ";
                    $context["level2"] = (($context["level"] ?? null) + 1);
                    // line 30
                    echo "
            <div class=\"children-wrapper\">
                <div class=\"element-wrapper\">
                    ";
                    // line 33
                    echo $context["self"]->getfield(($context["content"] ?? null), (("[" . ($context["key"] ?? null)) . "]"), ($context["level2"] ?? null), $context);
                    echo "
                </div>
            </div>
        ";
                }
                // line 37
                echo "    ";
            }
            // line 38
            echo "
    ";
            // line 39
            if (($context["up_level"] ?? null)) {
                // line 40
                echo "        ";
                $context["level"] = (($context["level"] ?? null) + 1);
                // line 41
                echo "    ";
            }
            // line 42
            echo "    <div class=\"children-wrapper\">
        ";
            // line 43
            $context["unique_child"] = (((is_array(($context["content"] ?? null)) && ($this->getAttribute(($context["content"] ?? null), "length", array()) > 1))) ? (true) : (false));
            // line 44
            echo "
        ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["content"] ?? null));
            foreach ($context['_seq'] as $context["inner_key"] => $context["inner_content"]) {
                // line 46
                echo "<div class=\"element-wrapper\">
                ";
                // line 47
                if ( !is_numeric($context["inner_key"])) {
                    // line 48
                    echo "                    ";
                    if ((twig_length_filter($this->env, ($context["content"] ?? null)) > 1)) {
                        // line 49
                        echo "                        ";
                        echo $context["self"]->getfield($context["inner_key"], ($context["parent_key"] ?? null), ($context["level"] ?? null), $context, true);
                        echo "
                    ";
                    } else {
                        // line 51
                        echo "                        ";
                        echo $context["self"]->getfield($context["inner_key"], ($context["parent_key"] ?? null), ($context["level"] ?? null), $context);
                        echo "
                    ";
                    }
                    // line 53
                    echo "                    ";
                    $context["level2"] = (($context["level"] ?? null) + 1);
                    // line 54
                    echo "                    ";
                    $context["up_level"] = true;
                    // line 55
                    echo "                ";
                } else {
                    // line 56
                    echo "                    ";
                    $context["up_level"] = false;
                    // line 57
                    echo "                    ";
                    $context["level2"] = ($context["level"] ?? null);
                    // line 58
                    echo "                ";
                }
                // line 59
                echo "
                ";
                // line 60
                if ( !twig_test_iterable($context["inner_content"])) {
                    // line 61
                    echo "
                    ";
                    // line 62
                    if ( !is_numeric($context["inner_key"])) {
                        // line 63
                        echo "                        <div class=\"children-wrapper\">
                            <div class=\"element-wrapper\">
                    ";
                    }
                    // line 66
                    echo "
                    ";
                    // line 67
                    $context["last_key"] = ((is_numeric($context["inner_key"])) ? ("") : ($context["inner_key"]));
                    // line 68
                    echo "                    ";
                    echo $context["self"]->getfield($context["inner_content"], (((($context["parent_key"] ?? null) . "[") . $context["inner_key"]) . "]"), ($context["level2"] ?? null), $context);
                    echo "

                    ";
                    // line 70
                    if ( !is_numeric($context["inner_key"])) {
                        // line 71
                        echo "                            </div>
                        </div>
                    ";
                    }
                    // line 74
                    echo "                ";
                } else {
                    // line 75
                    echo "
                    ";
                    // line 76
                    $context["inner_parent_key"] = (((($context["parent_key"] ?? null) . "[") . $context["inner_key"]) . "]");
                    // line 77
                    echo "                    ";
                    echo $context["self"]->getrenderer($context["inner_key"], $context["inner_content"], ($context["field"] ?? null), ($context["scope"] ?? null), ($context["level"] ?? null), ($context["inner_parent_key"] ?? null), ($context["up_level"] ?? null));
                    echo "
                ";
                }
                // line 79
                echo "            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['inner_key'], $context['inner_content'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "    </div>
";
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
        return "forms/fields/multilevel/multilevel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  361 => 81,  354 => 79,  348 => 77,  346 => 76,  343 => 75,  340 => 74,  335 => 71,  333 => 70,  327 => 68,  325 => 67,  322 => 66,  317 => 63,  315 => 62,  312 => 61,  310 => 60,  307 => 59,  304 => 58,  301 => 57,  298 => 56,  295 => 55,  292 => 54,  289 => 53,  283 => 51,  277 => 49,  274 => 48,  272 => 47,  269 => 46,  265 => 45,  262 => 44,  260 => 43,  257 => 42,  254 => 41,  251 => 40,  249 => 39,  246 => 38,  243 => 37,  236 => 33,  231 => 30,  228 => 29,  226 => 28,  221 => 26,  218 => 25,  216 => 24,  213 => 23,  210 => 5,  207 => 4,  189 => 3,  171 => 20,  167 => 19,  161 => 16,  157 => 15,  153 => 14,  148 => 13,  142 => 12,  134 => 9,  129 => 8,  126 => 7,  109 => 6,  104 => 119,  92 => 109,  84 => 103,  74 => 98,  71 => 97,  66 => 96,  64 => 95,  57 => 94,  54 => 93,  48 => 90,  44 => 89,  40 => 88,  35 => 87,  32 => 86,  28 => 1,  26 => 84,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "forms/fields/multilevel/multilevel.html.twig", "/home/ncpmultiyr/www/user/plugins/admin/themes/grav/templates/forms/fields/multilevel/multilevel.html.twig");
    }
}
