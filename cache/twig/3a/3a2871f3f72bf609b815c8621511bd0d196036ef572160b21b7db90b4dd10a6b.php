<?php

/* modular/home.html.twig */
class __TwigTemplate_5e8e46b6b22c4a4a34cb7602d820c7bc24595db2f9f8f67039fa858f30e312f6 extends Twig_Template
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
        echo "<section id=\"";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "redirect", array())) {
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "redirect", array());
        } else {
            echo twig_lower_filter($this->env, $this->getAttribute(($context["page"] ?? null), "menu", array()));
        }
        echo "\"
         class=\"s-home page-hero target-section\" data-parallax=\"scroll\" data-image-src=\"";
        // line 2
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "background", array()), array(), "array"), "url", array(), "method");
        echo "\"
         data-natural-width=\"3000\" data-natural-height=\"2000\" data-position-y=\"center\">

    <div class=\"overlay\" style=\"opacity:";
        // line 5
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "bannerOpacity", array());
        echo ";\"></div>
    <div class=\"shadow-overlay\"></div>

    <div class=\"home-content\">
         <video autoplay muted loop id=\"homeVideo\">
            <source src=\"user/themes/hola/images/video/dumbvid.mp4\" type=\"video/mp4\">
         </video>


        <div class=\"row home-content__main\">

            <h3>";
        // line 16
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</h3>

            <h1>
                ";
        // line 19
        echo ($context["content"] ?? null);
        echo "
            </h1>

            <div class=\"home-content__buttons\">
                ";
        // line 23
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "button1Text", array())) {
            // line 24
            echo "                    <a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "button1Link", array());
            echo "\" class=\"smoothscroll btn btn--stroke\">
                        ";
            // line 25
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "button1Text", array());
            echo "
                    </a>
                ";
        }
        // line 28
        echo "                ";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "button2Text", array())) {
            // line 29
            echo "                    <a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "button2Link", array());
            echo "\" class=\"smoothscroll btn btn--stroke\">
                        ";
            // line 30
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "button2Text", array());
            echo "
                    </a>
                ";
        }
        // line 33
        echo "            </div>

            <div class=\"home-content__scroll\">
                <a href=\"";
        // line 36
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "button3Link", array());
        echo "\" class=\"scroll-link smoothscroll\">
                    <span>";
        // line 37
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "button3Text", array());
        echo "</span>
                </a>
            </div>

        </div>

    </div> <!-- end home-content -->
    ";
        // line 44
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "social", array())) {
            // line 45
            echo "        <ul class=\"home-social\">
            ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "social", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["icon"]) {
                // line 47
                echo "                <li>
                    <a href=\"";
                // line 48
                echo $this->getAttribute($context["icon"], "socialIconLink", array());
                echo "\">
                        <i class=\"";
                // line 49
                echo $this->getAttribute($context["icon"], "socialIconClass", array());
                echo "\" aria-hidden=\"true\"></i>
                        <span>";
                // line 50
                echo $this->getAttribute($context["icon"], "socialIconText", array());
                echo "</span></a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['icon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "        </ul> <!-- end home-social -->
    ";
        }
        // line 55
        echo "
</section> <!-- end s-home -->";
    }

    public function getTemplateName()
    {
        return "modular/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 55,  136 => 53,  127 => 50,  123 => 49,  119 => 48,  116 => 47,  112 => 46,  109 => 45,  107 => 44,  97 => 37,  93 => 36,  88 => 33,  82 => 30,  77 => 29,  74 => 28,  68 => 25,  63 => 24,  61 => 23,  54 => 19,  48 => 16,  34 => 5,  28 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modular/home.html.twig", "/home/ncpmultiyr/www/user/themes/hola/templates/modular/home.html.twig");
    }
}
