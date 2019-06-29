<?php

/* partials/tools-direct-install.html.twig */
class __TwigTemplate_66ee8ca3cea8927ab00087e10b762b1ae7bd5a0f1b112210e8ad31d4f891ece4 extends Twig_Template
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
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.TOOLS_DIRECT_INSTALL_TITLE"), "html", null, true);
        echo "</h1>

<div class=\"direct-install-content\">

\t<h2>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.TOOLS_DIRECT_INSTALL_UPLOAD_TITLE"), "html", null, true);
        echo "</h2>
\t<p>";
        // line 6
        echo $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.TOOLS_DIRECT_INSTALL_UPLOAD_DESC");
        echo "</p>

\t<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
        echo "/tools/task:directInstall\" method=\"post\" enctype=\"multipart/form-data\">
\t    <input type=\"file\" name=\"uploaded_file\" id=\"uploaded_file\" required accept=\"application/zip, application/octet-stream\">
\t    <input type=\"submit\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.TOOLS_DIRECT_INSTALL_UPLOAD_BUTTON"), "html", null, true);
        echo "\" name=\"submit\" class=\"button\">
\t    <input type=\"hidden\" name=\"task\" value=\"directInstall\" />

\t\t";
        // line 13
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->nonceFieldFunc("admin-form", "admin-nonce");
        echo "
\t</form>


\t<h2>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.TOOLS_DIRECT_INSTALL_URL_TITLE"), "html", null, true);
        echo "</h2>
\t<p>";
        // line 18
        echo $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.TOOLS_DIRECT_INSTALL_URL_DESC");
        echo "</p>

\t<form action=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
        echo "/tools/task:directInstall\" method=\"post\">
\t\t<input type=\"text\" name=\"file_path\" class=\"large\" required />
\t    <input type=\"submit\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.INSTALL"), "html", null, true);
        echo "\" name=\"submit\" class=\"button\">
        <input type=\"hidden\" name=\"task\" value=\"directInstall\" />

\t    ";
        // line 25
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->nonceFieldFunc("admin-form", "admin-nonce");
        echo "
\t</form>


</div>

";
    }

    public function getTemplateName()
    {
        return "partials/tools-direct-install.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 25,  68 => 22,  63 => 20,  58 => 18,  54 => 17,  47 => 13,  41 => 10,  36 => 8,  31 => 6,  27 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "partials/tools-direct-install.html.twig", "/home/ncpmultiyr/www/user/plugins/admin/themes/grav/templates/partials/tools-direct-install.html.twig");
    }
}
