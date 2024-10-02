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

/* SdzBlogBundle:Blog:index.html.twig */
class __TwigTemplate_4122138814c57edfc1c52a3e42c918dbde5644bbaf51e21e6c5a277684cbf651 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'sdzblog_body' => [$this, 'block_sdzblog_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "SdzBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("SdzBlogBundle::layout.html.twig", "SdzBlogBundle:Blog:index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        // line 4
        echo "Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_sdzblog_body($context, array $blocks = [])
    {
        // line 8
        echo "
 <h2>Liste des articles</h2>
 <ul>
 ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 12
            echo "  <li>
  <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sdzblog_voir", ["id" => $this->getAttribute($context["article"], "id", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(            // line 14
$context["article"], "titre", []), "html", null, true);
            echo "</a>
 par ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "auteur", []), "html", null, true);
            echo ",
 le ";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "date", []), "d/m/Y"), "html", null, true);
            echo "
 </li>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 19
            echo " <li>Pas (encore !) d'articles</li>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "</ul>

";
    }

    public function getTemplateName()
    {
        return "SdzBlogBundle:Blog:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 21,  85 => 19,  77 => 16,  73 => 15,  69 => 14,  66 => 13,  63 => 12,  58 => 11,  53 => 8,  50 => 7,  43 => 4,  40 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"SdzBlogBundle::layout.html.twig\" %}

{% block title %}
Accueil - {{ parent() }}
{% endblock %}

{% block sdzblog_body %}

 <h2>Liste des articles</h2>
 <ul>
 {% for article in articles %}
  <li>
  <a href=\"{{ path('sdzblog_voir', {'id': article.id}) }}\">{{
 article.titre }}</a>
 par {{ article.auteur }},
 le {{ article.date|date('d/m/Y') }}
 </li>
{% else %}
 <li>Pas (encore !) d'articles</li>
 {% endfor %}
</ul>

{% endblock %}", "SdzBlogBundle:Blog:index.html.twig", "/var/www/clients/client0/web2/web/src/Sdz/BlogBundle/Resources/views/Blog/index.html.twig");
    }
}
