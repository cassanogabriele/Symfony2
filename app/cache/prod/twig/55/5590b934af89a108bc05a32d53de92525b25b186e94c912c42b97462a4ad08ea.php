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

/* BloggerBlogBundle:Page:contact.html.twig */
class __TwigTemplate_28aacc2218eb6eda7080b3e4bb7479d245cc7fea9beda6603397810d30209710 extends \Twig\Template
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
        // line 1
        return "BloggerBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "BloggerBlogBundle:Page:contact.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        echo "Contact";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        // line 6
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\">\t\t\t
\t\t\t<p id=\"title-article\"><h2 id=\"title\" >Contact Reading Passion</h2></p>
\t\t\t<hr>
\t\t\t<p>Vous voulez contacter Reading Passion ?</p>
\t\t</div>
\t
\t<div class=\"panel-body\">
\t\t<form class=\"form-horizontal\" action=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_contact");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"blogger\">
\t\t\t";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t
\t\t\t<p>";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", []), 'label', ["label_attr" => ["class" => "foo"], "label" => "Nom"]);
        echo "</p>
\t\t\t<p>";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", []), 'widget', ["attr" => ["class" => "foo"]]);
        echo "</p>\t\t\t
\t\t\t<p>";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", []), 'label', ["label_attr" => ["class" => "foo"], "label" => "Email"]);
        echo "</p>\t
\t\t\t<p>";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", []), 'widget', ["attr" => ["class" => "foo"]]);
        echo "</p>
\t\t\t<p>";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subject", []), 'label', ["label_attr" => ["class" => "foo"], "label" => "Sujet"]);
        echo "</p>\t
\t\t\t<p>";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subject", []), 'widget', ["attr" => ["class" => "foo"]]);
        echo "</p></p>\t
\t\t\t<p>";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body", []), 'label', ["label_attr" => ["class" => "foo"], "label" => "Message"]);
        echo "</p>\t
\t\t\t<p>";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body", []), 'widget', ["attr" => ["class" => "foo"]]);
        echo "</p>
\t\t\t
\t\t\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

\t\t\t<input type=\"submit\" class=\"btn btn-warning\" value=\"Soumettre\" style=\"margin-top:25px;\" />
\t\t</form>
\t</div>
</div>  

";
    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 26,  98 => 24,  94 => 23,  90 => 22,  86 => 21,  82 => 20,  78 => 19,  74 => 18,  70 => 17,  65 => 15,  59 => 14,  49 => 6,  46 => 5,  40 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'BloggerBlogBundle::layout.html.twig' %}

{% block title %}Contact{% endblock%}

{% block body %}
\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\">\t\t\t
\t\t\t<p id=\"title-article\"><h2 id=\"title\" >Contact Reading Passion</h2></p>
\t\t\t<hr>
\t\t\t<p>Vous voulez contacter Reading Passion ?</p>
\t\t</div>
\t
\t<div class=\"panel-body\">
\t\t<form class=\"form-horizontal\" action=\"{{ path('BloggerBlogBundle_contact') }}\" method=\"post\" {{ form_enctype(form) }} class=\"blogger\">
\t\t\t{{ form_errors(form) }}
\t\t\t
\t\t\t<p>{{ form_label(form.name, 'Nom', {'label_attr': {'class': 'foo'}}) }}</p>
\t\t\t<p>{{ form_widget(form.name, {'attr': {'class': 'foo'}}) }}</p>\t\t\t
\t\t\t<p>{{ form_label(form.email, 'Email', {'label_attr': {'class': 'foo'}}) }}</p>\t
\t\t\t<p>{{ form_widget(form.email, {'attr': {'class': 'foo'}}) }}</p>
\t\t\t<p>{{ form_label(form.subject, 'Sujet', {'label_attr': {'class': 'foo'}}) }}</p>\t
\t\t\t<p>{{ form_widget(form.subject, {'attr': {'class': 'foo'}}) }}</p></p>\t
\t\t\t<p>{{ form_label(form.body, 'Message', {'label_attr': {'class': 'foo'}}) }}</p>\t
\t\t\t<p>{{ form_widget(form.body, {'attr': {'class': 'foo'}}) }}</p>
\t\t\t
\t\t\t{{ form_rest(form) }}

\t\t\t<input type=\"submit\" class=\"btn btn-warning\" value=\"Soumettre\" style=\"margin-top:25px;\" />
\t\t</form>
\t</div>
</div>  

{% endblock %}", "BloggerBlogBundle:Page:contact.html.twig", "/var/www/clients/client0/web2/web/src/Blogger/BlogBundle/Resources/views/Page/contact.html.twig");
    }
}
