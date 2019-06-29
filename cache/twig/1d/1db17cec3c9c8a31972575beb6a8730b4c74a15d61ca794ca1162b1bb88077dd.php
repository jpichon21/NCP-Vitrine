<?php

/* form-messages.html.twig */
class __TwigTemplate_63b55e23d219980b8ef4b21848d334c360650d37500214a2ccca867d02f64a46 extends Twig_Template
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
        $this->loadTemplate("partials/form-messages.html.twig", "form-messages.html.twig", 1)->display($context);
        // line 2
        http_response_code($this->getAttribute(($context["form"] ?? null), "responseCode", array()));
    }

    public function getTemplateName()
    {
        return "form-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "form-messages.html.twig", "/home/ncpmultiyr/www/user/plugins/form/templates/form-messages.html.twig");
    }
}
