<?php

/* forms/default/data.html.twig */
class __TwigTemplate_efcd19495c7b7ccbfd8b06bdb78e5981497ed06ee011da67b64df349e28abd14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'field_label' => array($this, 'block_field_label'),
            'field_value' => array($this, 'block_field_value'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 42
        echo "
";
        // line 43
        echo $this->getAttribute($this, "render_field", array(0 => ($context["form"] ?? null), 1 => $this->getAttribute(($context["form"] ?? null), "fields", array()), 2 => ""), "method");
        echo "

";
    }

    // line 8
    public function block_field($context, array $blocks = array())
    {
        // line 9
        echo "                    <div>
                        ";
        // line 10
        $this->displayBlock('field_label', $context, $blocks);
        // line 13
        echo "
                        ";
        // line 14
        $this->displayBlock('field_value', $context, $blocks);
        // line 31
        echo "                    </div>
                ";
    }

    // line 10
    public function block_field_label($context, array $blocks = array())
    {
        // line 11
        echo "                            <strong>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute(($context["field"] ?? null), "label", array())));
        echo "</strong>:
                        ";
    }

    // line 14
    public function block_field_value($context, array $blocks = array())
    {
        // line 15
        echo "                            ";
        if (($this->getAttribute(($context["field"] ?? null), "type", array()) == "checkboxes")) {
            // line 16
            echo "                                <ul>
                                    ";
            // line 17
            $context["use_keys"] = ($this->getAttribute(($context["field"] ?? null), "use", array(), "any", true, true) && ($this->getAttribute(($context["field"] ?? null), "use", array()) == "keys"));
            // line 18
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "value", array(0 => (($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", array()))), "method"));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 19
                echo "                                        ";
                $context["index"] = ((($context["use_keys"] ?? null)) ? ($context["key"]) : ($context["value"]));
                // line 20
                echo "                                        <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "options", array()), ($context["index"] ?? null), array(), "array"));
                echo "</li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "                                </ul>
                            ";
        } elseif (($this->getAttribute(        // line 23
($context["field"] ?? null), "type", array()) == "checkbox")) {
            // line 24
            echo "                                ";
            echo ((($this->getAttribute(($context["form"] ?? null), "value", array(0 => (($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", array()))), "method") == 1)) ? (twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_FORM.YES"))) : (twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_FORM.NO"))));
            echo "
                            ";
        } elseif (($this->getAttribute(        // line 25
($context["field"] ?? null), "type", array()) == "select")) {
            // line 26
            echo "                                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "options", array()), $this->getAttribute(($context["form"] ?? null), "value", array(0 => (($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", array()))), "method"), array(), "array"));
            echo "
                            ";
        } else {
            // line 28
            echo "                                ";
            echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->stringFunc($this->getAttribute(($context["form"] ?? null), "value", array(0 => (($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", array()))), "method")), "html", null, true));
            echo "
                            ";
        }
        // line 30
        echo "                        ";
    }

    // line 1
    public function getrender_field($__form__ = null, $__fields__ = null, $__scope__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "fields" => $__fields__,
            "scope" => $__scope__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["index"] => $context["field"]) {
                // line 3
                echo "        ";
                $context["input"] = $this->getAttribute($context["field"], "input@");
                // line 4
                echo "
        ";
                // line 5
                if (((null === ($context["input"] ?? null)) || (($context["input"] ?? null) == true))) {
                    // line 6
                    echo "
            ";
                    // line 7
                    if ($this->getAttribute(($context["form"] ?? null), "value", array(0 => (($context["scope"] ?? null) . $this->getAttribute($context["field"], "name", array()))), "method")) {
                        // line 8
                        echo "                ";
                        $this->displayBlock('field', $context, $blocks);
                        // line 33
                        echo "            ";
                    }
                    // line 34
                    echo "        ";
                } else {
                    // line 35
                    echo "            ";
                    if ($this->getAttribute($context["field"], "fields", array())) {
                        // line 36
                        echo "                ";
                        $context["new_scope"] = (($this->getAttribute($context["field"], "nest_id", array())) ? (((($context["scope"] ?? null) . $this->getAttribute($context["field"], "name", array())) . ".")) : (($context["scope"] ?? null)));
                        // line 37
                        echo "                ";
                        echo $this->getAttribute($this, "render_field", array(0 => ($context["form"] ?? null), 1 => $this->getAttribute($context["field"], "fields", array()), 2 => ($context["new_scope"] ?? null)), "method");
                        echo "
            ";
                    }
                    // line 39
                    echo "        ";
                }
                // line 40
                echo "    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['field'], $context['_parent'], $context['loop']);
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
        return "forms/default/data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 40,  182 => 39,  176 => 37,  173 => 36,  170 => 35,  167 => 34,  164 => 33,  161 => 8,  159 => 7,  156 => 6,  154 => 5,  151 => 4,  148 => 3,  130 => 2,  116 => 1,  112 => 30,  106 => 28,  100 => 26,  98 => 25,  93 => 24,  91 => 23,  88 => 22,  79 => 20,  76 => 19,  71 => 18,  69 => 17,  66 => 16,  63 => 15,  60 => 14,  53 => 11,  50 => 10,  45 => 31,  43 => 14,  40 => 13,  38 => 10,  35 => 9,  32 => 8,  25 => 43,  22 => 42,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "forms/default/data.html.twig", "/home/ncpmultiyr/www/user/plugins/form/templates/forms/default/data.html.twig");
    }
}
