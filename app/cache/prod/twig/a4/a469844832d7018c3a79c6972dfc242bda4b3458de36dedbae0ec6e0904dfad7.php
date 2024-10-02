<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* BloggerBlogBundle:Page:about.html.twig */
class __TwigTemplate_290227dfecb444a13df43d5e78b527489142f4770e3ae980d81722ae97e1f4cf extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "BloggerBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "BloggerBlogBundle:Page:about.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        echo "A propos";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        // line 7
        echo "    <header>
        <h1>A propos de Reading passion</h1>
\t\t<hr>
    </header>
    <article>
        <p>
\t\t<span style=\"color:red; font-weight:bold;\">&#9888;</span> Ce blog contient du contenu fictif, représentant des sujets et des commentaires d'utilisateurs.
\t\t</p>
    </article>
";
    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 7,  46 => 6,  40 => 4,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# src/Blogger/BlogBundle/Resources/views/Page/about.html.twig #}
{% extends 'BloggerBlogBundle::layout.html.twig' %}

{% block title %}A propos{% endblock%}

{% block body %}
    <header>
        <h1>A propos de Reading passion</h1>
\t\t<hr>
    </header>
    <article>
        <p>
\t\t<span style=\"color:red; font-weight:bold;\">&#9888;</span> Ce blog contient du contenu fictif, représentant des sujets et des commentaires d'utilisateurs.
\t\t</p>
    </article>
{% endblock %}", "BloggerBlogBundle:Page:about.html.twig", "/var/www/clients/client0/web2/web/src/Blogger/BlogBundle/Resources/views/Page/about.html.twig");
    }
}
