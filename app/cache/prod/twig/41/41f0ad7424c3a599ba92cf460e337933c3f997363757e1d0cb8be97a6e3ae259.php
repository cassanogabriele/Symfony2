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

/* SdzBlogBundle::layout.html.twig */
class __TwigTemplate_a092b4519184a9981dcf1b69b0b6d7360e5e9cc5937eec0d254ab85ab82f8057 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'sdzblog_body' => [$this, 'block_sdzblog_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("::layout.html.twig", "SdzBlogBundle::layout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        // line 4
        echo "Blog - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        // line 10
        echo "
<h1>Blog</h1>

\t<hr>
\t";
        // line 16
        echo "\t";
        $this->displayBlock('sdzblog_body', $context, $blocks);
    }

    public function block_sdzblog_body($context, array $blocks = [])
    {
        // line 17
        echo "\t";
    }

    public function getTemplateName()
    {
        return "SdzBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 17,  60 => 16,  54 => 10,  51 => 7,  44 => 4,  41 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"::layout.html.twig\" %}

{% block title %}
Blog - {{ parent() }}
{% endblock %}

{% block body %}
{# On définit un sous-titre commun à toutes les pages du bundle,
par exemple #}

<h1>Blog</h1>

\t<hr>
\t{# On définit un nouveau bloc, que les vues du bundle pourront
\tremplir #}
\t{% block sdzblog_body %}
\t{% endblock %}
{% endblock %}", "SdzBlogBundle::layout.html.twig", "/var/www/clients/client0/web2/web/src/Sdz/BlogBundle/Resources/views/layout.html.twig");
    }
}
