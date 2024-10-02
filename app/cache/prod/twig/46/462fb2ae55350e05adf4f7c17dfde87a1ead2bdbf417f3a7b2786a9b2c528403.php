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

/* BloggerBlogBundle:Page:index.html.twig */
class __TwigTemplate_6c22ddb6425e0f6bac927976197e103f6b6ed27e96366f0b561180f90758fed0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "BloggerBlogBundle:Page:index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        // line 5
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blogs"]) ? $context["blogs"] : $this->getContext($context, "blogs")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 6
            echo "        <article class=\"blog\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<p class=\"date\"><time datetime=\"";
            // line 8
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["blog"], "created", []), "c"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["blog"], "created", []), "l, F j, Y"), "html", null, true);
            echo "</time></p>
\t\t\t\t<p id=\"title-article\"><h2><a id=\"title\" href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_blog_show", ["id" => $this->getAttribute($context["blog"], "id", []), "slug" => $this->getAttribute($context["blog"], "slug", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "title", []), "html", null, true);
            echo "</a></h2></p>
\t\t\t</div>
\t\t\t\t\t
\t\t\t<div class=\"panel-body\" id=\"footer-bloc\">\t\t
\t\t\t\t<div id=\"article\">
\t\t\t\t\t<p id=\"post\">";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "blog", [0 => 500], "method"), "html", null, true);
            echo "</p>
\t\t\t\t\t<p class=\"continue\" style=\"margin-top:25px;\"><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_blog_show", ["id" => $this->getAttribute($context["blog"], "id", []), "slug" => $this->getAttribute($context["blog"], "slug", [])]), "html", null, true);
            echo "\">Lire plus...</a></p>
\t\t\t\t</div>
\t\t\t</div>

           <footer class=\"meta\" id=\"footer-bloc\">
\t\t\t\t<div class=\"panel-body\">\t\t
\t\t\t\t\t<div id=\"article\" >
\t\t\t\t\t\t<p>Commentaires : <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_blog_show", ["id" => $this->getAttribute($context["blog"], "id", []), "slug" => $this->getAttribute($context["blog"], "slug", [])]), "html", null, true);
            echo "#comments\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["blog"], "comments", [])), "html", null, true);
            echo "</a></p>
\t\t\t\t\t\t<p>Créé par <span class=\"highlight\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "author", []), "html", null, true);
            echo "</span> at ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["blog"], "created", []), "h:iA"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t<p>Tags : <span class=\"highlight\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "tags", []), "html", null, true);
            echo "</span></p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</footer>
        </article>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 30
            echo "        <p>There are no blog entries for symblog</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 30,  94 => 24,  88 => 23,  82 => 22,  72 => 15,  68 => 14,  58 => 9,  52 => 8,  48 => 6,  42 => 5,  39 => 4,  29 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# src/Blogger/BlogBundle/Resources/views/Page/index.html.twig #}
{% extends 'BloggerBlogBundle::layout.html.twig' %}

{% block body %}
    {% for blog in blogs %}
        <article class=\"blog\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<p class=\"date\"><time datetime=\"{{ blog.created|date('c') }}\">{{ blog.created|date('l, F j, Y') }}</time></p>
\t\t\t\t<p id=\"title-article\"><h2><a id=\"title\" href=\"{{ path('BloggerBlogBundle_blog_show', { 'id': blog.id, 'slug': blog.slug  }) }}\">{{ blog.title }}</a></h2></p>
\t\t\t</div>
\t\t\t\t\t
\t\t\t<div class=\"panel-body\" id=\"footer-bloc\">\t\t
\t\t\t\t<div id=\"article\">
\t\t\t\t\t<p id=\"post\">{{ blog.blog(500) }}</p>
\t\t\t\t\t<p class=\"continue\" style=\"margin-top:25px;\"><a href=\"{{ path('BloggerBlogBundle_blog_show', { 'id': blog.id ,'slug': blog.slug}) }}\">Lire plus...</a></p>
\t\t\t\t</div>
\t\t\t</div>

           <footer class=\"meta\" id=\"footer-bloc\">
\t\t\t\t<div class=\"panel-body\">\t\t
\t\t\t\t\t<div id=\"article\" >
\t\t\t\t\t\t<p>Commentaires : <a href=\"{{ path('BloggerBlogBundle_blog_show', { 'id': blog.id, 'slug': blog.slug }) }}#comments\">{{ blog.comments|length }}</a></p>
\t\t\t\t\t\t<p>Créé par <span class=\"highlight\">{{ blog.author }}</span> at {{ blog.created|date('h:iA') }}</p>
\t\t\t\t\t\t<p>Tags : <span class=\"highlight\">{{ blog.tags }}</span></p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</footer>
        </article>
    {% else %}
        <p>There are no blog entries for symblog</p>
    {% endfor %}
{% endblock %}", "BloggerBlogBundle:Page:index.html.twig", "/var/www/clients/client0/web2/web/src/Blogger/BlogBundle/Resources/views/Page/index.html.twig");
    }
}
