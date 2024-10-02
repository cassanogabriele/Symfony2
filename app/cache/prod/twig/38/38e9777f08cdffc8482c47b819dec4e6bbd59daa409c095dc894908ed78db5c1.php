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

/* BloggerBlogBundle:Blog:show.html.twig */
class __TwigTemplate_53631b6de338301eff547327b838afbd6055ae88a8301981567d72d543352c94 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "BloggerBlogBundle:Blog:show.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "title", []), "html", null, true);
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        // line 7
        echo "
<div class=\"panel panel-default\">
\t<div class=\"panel-heading\">
\t\t<p class=\"date\"><time datetime=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "created", []), "c"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "created", []), "l, F j, Y"), "html", null, true);
        echo "</time></p>
\t\t<p id=\"title-article\"><h2 id=\"title\" >";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "title", []), "html", null, true);
        echo "</h2></p>
    </div>
\t
\t<div class=\"panel-body\">
\t\t<div id=\"article\" style=\"\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "blog", []), "html", null, true);
        echo "</div>
\t</div>
\t 
\t<hr>
\t
\t<div class=\"panel-heading\">\t\t
\t\t<p id=\"title-article\"><h2 id=\"title\" >Commentaires</h2></p>
    </div>
\t
\t<div class=\"panel-body\">\t\t
\t\t<div id=\"article\" style=\"\">";
        // line 25
        $this->loadTemplate("BloggerBlogBundle:Comment:index.html.twig", "BloggerBlogBundle:Blog:show.html.twig", 25)->display(twig_array_merge($context, ["comments" => (isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments"))]));
        echo "</div>
\t</div> \t
\t
\t<div class=\"panel-heading\">\t\t
\t\t<p id=\"title-article\"><h2 id=\"title\" >Ajouter un commentaire</h2></p>
    </div>
\t
\t<div class=\"panel-body\">\t\t
\t\t<div id=\"article\" style=\"\">";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("BloggerBlogBundle:Comment:new", ["blog_id" => $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "id", [])]));
        echo "</div>
\t</div> \t
</div>  
";
    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Blog:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 33,  80 => 25,  67 => 15,  60 => 11,  54 => 10,  49 => 7,  46 => 6,  40 => 4,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# src/Blogger/BlogBundle/Resouces/views/Blog/show.html.twig #}
{% extends 'BloggerBlogBundle::layout.html.twig' %}

{% block title %}{{ blog.title }}{% endblock %}

{% block body %}

<div class=\"panel panel-default\">
\t<div class=\"panel-heading\">
\t\t<p class=\"date\"><time datetime=\"{{ blog.created|date('c') }}\">{{ blog.created|date('l, F j, Y') }}</time></p>
\t\t<p id=\"title-article\"><h2 id=\"title\" >{{ blog.title }}</h2></p>
    </div>
\t
\t<div class=\"panel-body\">
\t\t<div id=\"article\" style=\"\">{{ blog.blog }}</div>
\t</div>
\t 
\t<hr>
\t
\t<div class=\"panel-heading\">\t\t
\t\t<p id=\"title-article\"><h2 id=\"title\" >Commentaires</h2></p>
    </div>
\t
\t<div class=\"panel-body\">\t\t
\t\t<div id=\"article\" style=\"\">{% include 'BloggerBlogBundle:Comment:index.html.twig' with { 'comments': comments } %}</div>
\t</div> \t
\t
\t<div class=\"panel-heading\">\t\t
\t\t<p id=\"title-article\"><h2 id=\"title\" >Ajouter un commentaire</h2></p>
    </div>
\t
\t<div class=\"panel-body\">\t\t
\t\t<div id=\"article\" style=\"\">{{ render(controller( 'BloggerBlogBundle:Comment:new', { 'blog_id': blog.id } )) }}</div>
\t</div> \t
</div>  
{% endblock %}
", "BloggerBlogBundle:Blog:show.html.twig", "/var/www/clients/client0/web2/web/src/Blogger/BlogBundle/Resources/views/Blog/show.html.twig");
    }
}
