<?php

/* error.html.twig */
class __TwigTemplate_5929f0f7e6f469be8b7af46a1abe6e2918b90abb8af58f0ae16d72e8cdee8bea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "error.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <section class=\"small-page-header page-hero\" style=\"background-image:url(";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/error.jpg");
        echo "\">
        <div class=\"row page-header__content narrow text-center\">
            <h1 class=\"page-header__title\">
                ";
        // line 7
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "
            </h1>
        </div>
    </section>

    <section id=\"error\" class=\"s-error\">
        <div class=\"row narrow section-intro has-bottom-sep\">
            <div class=\"col-full text-center\">
                <div>
                    <h1>  ";
        // line 16
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("ERROR");
        echo "
                        ";
        // line 17
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "http_response_code", array());
        echo ":</h1>
                    <p>
                        ";
        // line 19
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
                    </p>
                </div>
            </div>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 19,  54 => 17,  50 => 16,  38 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "error.html.twig", "/home/ncpmultiyr/www/user/themes/hola/templates/error.html.twig");
    }
}
