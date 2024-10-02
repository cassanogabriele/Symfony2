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

/* BloggerBlogBundle:Comment:form.html.twig */
class __TwigTemplate_227343ddadf6d313d9e4eca2f092111480366d5a4af0c3c2675c40775b9adabd extends \Twig\Template
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
<form action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_comment_create", ["blog_id" => $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "blog", []), "id", [])]), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"blogger\">
\t<p>";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", []), 'label', ["label_attr" => ["class" => "foo"], "label" => "Utilisateur"]);
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", []), 'widget', ["attr" => ["class" => "foo"]]);
        echo "</p>
\t<p>";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comment", []), 'label', ["label_attr" => ["class" => "foo"], "label" => "Commentaire"]);
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comment", []), 'widget', ["attr" => ["class" => "foo"]]);
        echo "</p>
\t
    <p style=\"margin-top:20px;\">
        <input type=\"submit\" value=\"Soumettre\">
    </p>
</form>";
    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Comment:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 5,  39 => 4,  33 => 3,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# src/Blogger/BlogBundle/Resources/public/views/Comment/form.html.twig #}

<form action=\"{{ path('BloggerBlogBundle_comment_create', { 'blog_id' : comment.blog.id } ) }}\" method=\"post\" {{ form_enctype(form) }} class=\"blogger\">
\t<p>{{ form_label(form.user, 'Utilisateur', {'label_attr': {'class': 'foo'}}) }}{{ form_widget(form.user, {'attr': {'class': 'foo'}}) }}</p>
\t<p>{{ form_label(form.comment, 'Commentaire', {'label_attr': {'class': 'foo'}}) }}{{ form_widget(form.comment, {'attr': {'class': 'foo'}}) }}</p>
\t
    <p style=\"margin-top:20px;\">
        <input type=\"submit\" value=\"Soumettre\">
    </p>
</form>", "BloggerBlogBundle:Comment:form.html.twig", "/var/www/clients/client0/web2/web/src/Blogger/BlogBundle/Resources/views/Comment/form.html.twig");
    }
}
