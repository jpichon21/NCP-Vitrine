<?php

/* forms/fields/text/text.html.twig */
class __TwigTemplate_d943d59f4ab41b463643b0a2675a643dfc33ad6d2072aed8046aef3535699f66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/text/text.html.twig", 1);
        $this->blocks = array(
            'prepend' => array($this, 'block_prepend'),
            'input_attributes' => array($this, 'block_input_attributes'),
            'append' => array($this, 'block_append'),
            'input' => array($this, 'block_input'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_prepend($context, array $blocks = array())
    {
        // line 4
        if ($this->getAttribute(($context["field"] ?? null), "prepend", array())) {
            // line 5
            echo "    <div class=\"form-input-addon form-input-prepend\">
        ";
            // line 6
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array(), "any", false, true), "twig", array(), "any", false, true), "filters", array(), "any", false, true), "tu", array(), "array", true, true)) {
                // line 7
                echo call_user_func_array($this->env->getFilter('tu')->getCallable(), array($this->getAttribute(($context["field"] ?? null), "prepend", array())));
            } else {
                // line 9
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute(($context["field"] ?? null), "prepend", array()));
            }
            // line 11
            echo "    </div>
";
        }
    }

    // line 15
    public function block_input_attributes($context, array $blocks = array())
    {
        // line 16
        echo "    type=\"text\"
    ";
        // line 17
        if ($this->getAttribute(($context["field"] ?? null), "size", array())) {
            echo "size=\"";
            echo $this->getAttribute(($context["field"] ?? null), "size", array());
            echo "\"";
        }
        // line 18
        echo "    ";
        if (($this->getAttribute(($context["field"] ?? null), "minlength", array(), "any", true, true) || $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array(), "any", false, true), "min", array(), "any", true, true))) {
            echo "minlength=\"";
            echo (($this->getAttribute(($context["field"] ?? null), "minlength", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "minlength", array()), $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "min", array()))) : ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "min", array())));
            echo "\"";
        }
        // line 19
        echo "    ";
        if (($this->getAttribute(($context["field"] ?? null), "maxlength", array(), "any", true, true) || $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array(), "any", false, true), "max", array(), "any", true, true))) {
            echo "maxlength=\"";
            echo (($this->getAttribute(($context["field"] ?? null), "maxlength", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "maxlength", array()), $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "max", array()))) : ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "max", array())));
            echo "\"";
        }
        // line 20
        echo "    ";
        $this->displayParentBlock("input_attributes", $context, $blocks);
        echo "
";
    }

    // line 23
    public function block_append($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        if ($this->getAttribute(($context["field"] ?? null), "append", array())) {
            // line 25
            echo "        <div class=\"form-input-addon form-input-append\">
            ";
            // line 26
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array(), "any", false, true), "twig", array(), "any", false, true), "filters", array(), "any", false, true), "tu", array(), "array", true, true)) {
                // line 27
                echo call_user_func_array($this->env->getFilter('tu')->getCallable(), array($this->getAttribute(($context["field"] ?? null), "append", array())));
            } else {
                // line 29
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute(($context["field"] ?? null), "append", array()));
            }
            // line 31
            echo "        </div>
    ";
        }
    }

    // line 35
    public function block_input($context, array $blocks = array())
    {
        // line 36
        if (($this->getAttribute(($context["field"] ?? null), "prepend", array()) || $this->getAttribute(($context["field"] ?? null), "append", array()))) {
            // line 37
            echo "    ";
            $context["field"] = twig_array_merge(($context["field"] ?? null), array("wrapper_classes" => "form-input-addon-wrapper"));
        }
        // line 39
        $this->displayParentBlock("input", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "forms/fields/text/text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 39,  114 => 37,  112 => 36,  109 => 35,  103 => 31,  100 => 29,  97 => 27,  95 => 26,  92 => 25,  89 => 24,  86 => 23,  79 => 20,  72 => 19,  65 => 18,  59 => 17,  56 => 16,  53 => 15,  47 => 11,  44 => 9,  41 => 7,  39 => 6,  36 => 5,  34 => 4,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "forms/fields/text/text.html.twig", "/home/ncpmultiyr/www/user/plugins/form/templates/forms/fields/text/text.html.twig");
    }
}
