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

/* BloggerBlogBundle:Page:sidebar.html.twig */
class __TwigTemplate_cd30a934b85ff4d148dfc33abc218c5727d0b5ea75d611a2365ef46e66d3feaf extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        echo "
<section class=\"section\">
    <header class=\"section\">       
\t\t<div class=\"date\"><h2 id=\"title-tags\">Tags</h2></div>
    </header>
\t
\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : $this->getContext($context, "tags")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["tag"] => $context["weight"]) {
            // line 9
            echo "\t\t<ul>
\t\t\t<li><span id=\"comments-sidebar\">";
            // line 10
            echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
            echo "</span></li>
\t\t</ul>
     ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 13
            echo "         <p>Il n'y a pas de tags.</p>
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['tag'], $context['weight'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </p>
</section>

<section class=\"section\">
    <header class=\"section\">
\t\t<div class=\"date\"><h2 id=\"title-tags\">Derniers commentaires</h2></div>
    </header>
\t
    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["latestComments"]) ? $context["latestComments"] : $this->getContext($context, "latestComments")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 24
            echo "        <article class=\"comment\">
            <header>
                <p ><span class=\"highlight\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "user", []), "html", null, true);
            echo "</span> a commenté
                    <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_blog_show", ["id" => $this->getAttribute($this->getAttribute($context["comment"], "blog", []), "id", []), "slug" => $this->getAttribute($this->getAttribute($context["comment"], "blog", []), "slug", [])]), "html", null, true);
            echo "#comment-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", []), "html", null, true);
            echo "\">
                        ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "blog", []), "title", []), "html", null, true);
            echo "
                    </a>
                    [<em><time datetime=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "created", []), "c"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Blogger\BlogBundle\Twig\Extensions\BloggerBlogExtension')->createdAgo($this->getAttribute($context["comment"], "created", [])), "html", null, true);
            echo "</time></em>]
                </p>
            </header>
            <p id=\"comments-sidebar\">";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "comment", []), "html", null, true);
            echo "</p>
            </p>
        </article>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 37
            echo "        <p>There are no recent comments</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "</section>";
    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 39,  112 => 37,  103 => 33,  95 => 30,  90 => 28,  84 => 27,  80 => 26,  76 => 24,  71 => 23,  61 => 15,  54 => 13,  46 => 10,  43 => 9,  38 => 8,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# src/Blogger/BlogBundle/Resources/views/Page/sidebar.html.twig #}

<section class=\"section\">
    <header class=\"section\">       
\t\t<div class=\"date\"><h2 id=\"title-tags\">Tags</h2></div>
    </header>
\t
\t{% for tag, weight in tags %}
\t\t<ul>
\t\t\t<li><span id=\"comments-sidebar\">{{ tag }}</span></li>
\t\t</ul>
     {% else %}
         <p>Il n'y a pas de tags.</p>
     {% endfor %}
    </p>
</section>

<section class=\"section\">
    <header class=\"section\">
\t\t<div class=\"date\"><h2 id=\"title-tags\">Derniers commentaires</h2></div>
    </header>
\t
    {% for comment in latestComments %}
        <article class=\"comment\">
            <header>
                <p ><span class=\"highlight\">{{ comment.user }}</span> a commenté
                    <a href=\"{{ path('BloggerBlogBundle_blog_show', { 'id': comment.blog.id, 'slug': comment.blog.slug }) }}#comment-{{ comment.id }}\">
                        {{ comment.blog.title }}
                    </a>
                    [<em><time datetime=\"{{ comment.created|date('c') }}\">{{ comment.created|created_ago }}</time></em>]
                </p>
            </header>
            <p id=\"comments-sidebar\">{{ comment.comment }}</p>
            </p>
        </article>
    {% else %}
        <p>There are no recent comments</p>
    {% endfor %}
</section>", "BloggerBlogBundle:Page:sidebar.html.twig", "/var/www/clients/client0/web2/web/src/Blogger/BlogBundle/Resources/views/Page/sidebar.html.twig");
    }
}
