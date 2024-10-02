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

/* BloggerBlogBundle:Comment:index.html.twig */
class __TwigTemplate_7189ee407152f5dfa68ba77ab810e055c7f604cd05ab32e0d6829bdc05bb9ec2 extends \Twig\Template
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
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 4
            echo "\t<div class=\"panel-heading\">
\t\t<p><span class=\"highlight\">";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "user", []), "html", null, true);
            echo "</span> </p>
\t\t<hr>
\t\t<p id=\"title-article\"><h2 id=\"title\" >commentaire du <time datetime=\"";
            // line 7
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "created", []), "c"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Blogger\BlogBundle\Twig\Extensions\BloggerBlogExtension')->createdAgo($this->getAttribute($context["comment"], "created", [])), "html", null, true);
            echo "</time></h2></p>
\t\t<hr>
\t</div>
\t
\t<div class=\"panel-body\">
\t\t<div>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "comment", []), "html", null, true);
            echo "</div>\t\t
\t</div>
\t
\t<hr>    
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 17
            echo "    <p>Il n'y pas de commentaires pour ce post. Soyez le premier à le commenter...</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Comment:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 17,  56 => 12,  46 => 7,  41 => 5,  38 => 4,  33 => 3,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# src/Blogger/BlogBundle/Resources/public/views/Comment/index.html.twig #}

{% for comment in comments %}
\t<div class=\"panel-heading\">
\t\t<p><span class=\"highlight\">{{ comment.user }}</span> </p>
\t\t<hr>
\t\t<p id=\"title-article\"><h2 id=\"title\" >commentaire du <time datetime=\"{{ comment.created|date('c') }}\">{{ comment.created|created_ago }}</time></h2></p>
\t\t<hr>
\t</div>
\t
\t<div class=\"panel-body\">
\t\t<div>{{ comment.comment }}</div>\t\t
\t</div>
\t
\t<hr>    
{% else %}
    <p>Il n'y pas de commentaires pour ce post. Soyez le premier à le commenter...</p>
{% endfor %}", "BloggerBlogBundle:Comment:index.html.twig", "/var/www/clients/client0/web2/web/src/Blogger/BlogBundle/Resources/views/Comment/index.html.twig");
    }
}
