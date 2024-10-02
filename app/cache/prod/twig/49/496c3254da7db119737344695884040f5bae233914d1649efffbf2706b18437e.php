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

/* ::base.html.twig */
class __TwigTemplate_656c1153b083ef51483bc84edf6ad823c0ca3936fcf5b0d7edf4a7167772684b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'blog_title' => [$this, 'block_blog_title'],
            'body' => [$this, 'block_body'],
            'sidebar' => [$this, 'block_sidebar'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
\t\t<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t<!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
\t\t";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "\t\t
\t</head>
\t
\t<body>
\t
\t<div class=\"container\">
\t\t<nav>
\t\t\t<ol class=\"breadcrumb\" style=\"float:right;\">
\t\t\t\t<li><a class=\"links\"  href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_homepage");
        echo "\">Accueil</a></li>
\t\t\t\t<li><a class=\"links\" href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_about");
        echo "\">A propos</a></li>
\t\t\t\t<li><a class=\"links\" href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_contact");
        echo "\">Contact</li>\t\t\t\t\t
\t\t\t</ol>
\t\t</nav>
\t\t
\t\t<div class=\"jumbotron\">\t
\t\t\t<h3 id=\"subtitle-blog\">LE BLOG DES PASSIONNES DE LECTURE</h3>
\t\t\t<h2 id=\"title-blog\">";
        // line 35
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>\t\t\t
\t\t\t<hr>
\t\t\t\t\t\t
\t\t</div>
\t\t
\t\t<div class=\"row\" style=\"margin-bottom:45px;\">
\t\t  <div class=\"col-sm-8\" style=\"border-right: 1px solid #ccc;\">";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        echo "</div>
\t\t  <div class=\"col-sm-4\">";
        // line 42
        $this->displayBlock('sidebar', $context, $blocks);
        echo "</div>
\t\t</div>\t\t
\t
\t
        <div id=\"footer\" >
        ";
        // line 47
        $this->displayBlock('footer', $context, $blocks);
        // line 50
        echo "        </div>\t\t
\t</div>
\t
\t";
        // line 53
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
        } else {
            // asset "3c62cfd"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3c62cfd") : $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("js/3c62cfd.js");
            // line 56
            echo "\t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
            echo "\"></script>
\t";
        }
        unset($context["asset_url"]);
        // line 60
        echo "\t</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        echo "Reading passion";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 10
        echo "\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" />
\t\t<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t\t<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("css/blog.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t\t<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("css/blog.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t\t";
        // line 14
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "51c56cc_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_51c56cc_0") : $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("css/51c56cc_part_1_blog_1.css");
            // line 17
            echo "      
\t\t";
            // asset "51c56cc_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_51c56cc_1") : $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("css/51c56cc_part_1_bootstrap_2.css");
            echo "      
\t\t";
            // asset "51c56cc_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_51c56cc_2") : $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("css/51c56cc_part_1_bootstrap.min_3.css");
            echo "      
\t\t";
            // asset "51c56cc_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_51c56cc_3") : $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("css/51c56cc_part_1_d8f44a4_4.css");
            echo "      
\t\t";
            // asset "51c56cc_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_51c56cc_4") : $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("css/51c56cc_part_1_screen_5.css");
            echo "      
\t\t";
        } else {
            // asset "51c56cc"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_51c56cc") : $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("css/51c56cc.css");
            echo "      
\t\t";
        }
        unset($context["asset_url"]);
        // line 19
        echo "\t\t";
    }

    // line 35
    public function block_blog_title($context, array $blocks = [])
    {
        echo "<a id=\"logo-blog\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_homepage");
        echo "\">READING PASSION</a>";
    }

    // line 41
    public function block_body($context, array $blocks = [])
    {
    }

    // line 42
    public function block_sidebar($context, array $blocks = [])
    {
    }

    // line 47
    public function block_footer($context, array $blocks = [])
    {
        // line 48
        echo "        <p id=\"textf\" >Tous droits réservés &copy; 2017 <a href=\"https://gabriel-cassano.be/\" id=\"footer-author\">Gabriele Cassano</a></p>
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 48,  206 => 47,  201 => 42,  196 => 41,  188 => 35,  184 => 19,  158 => 17,  154 => 14,  150 => 13,  146 => 12,  142 => 11,  137 => 10,  134 => 9,  128 => 5,  123 => 60,  117 => 58,  111 => 56,  106 => 53,  101 => 50,  99 => 47,  91 => 42,  87 => 41,  78 => 35,  69 => 29,  65 => 28,  61 => 27,  51 => 19,  49 => 9,  42 => 5,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
\t\t<title>{% block title %}Reading passion{% endblock %}</title>
\t\t<!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
\t\t{% block stylesheets %}
\t\t<link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\" type=\"text/css\" />
\t\t<link href=\"{{ asset('css/screen.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
\t\t<link href=\"{{ asset('css/blog.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
\t\t<link href=\"{{ asset('css/blog.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
\t\t{% stylesheets
\t\t\t'css/*'
\t\t%}
      
\t\t{% endstylesheets %}
\t\t{% endblock %}\t\t
\t</head>
\t
\t<body>
\t
\t<div class=\"container\">
\t\t<nav>
\t\t\t<ol class=\"breadcrumb\" style=\"float:right;\">
\t\t\t\t<li><a class=\"links\"  href=\"{{ path('BloggerBlogBundle_homepage') }}\">Accueil</a></li>
\t\t\t\t<li><a class=\"links\" href=\"{{ path('BloggerBlogBundle_about') }}\">A propos</a></li>
\t\t\t\t<li><a class=\"links\" href=\"{{ path('BloggerBlogBundle_contact') }}\">Contact</li>\t\t\t\t\t
\t\t\t</ol>
\t\t</nav>
\t\t
\t\t<div class=\"jumbotron\">\t
\t\t\t<h3 id=\"subtitle-blog\">LE BLOG DES PASSIONNES DE LECTURE</h3>
\t\t\t<h2 id=\"title-blog\">{% block blog_title %}<a id=\"logo-blog\" href=\"{{ path('BloggerBlogBundle_homepage') }}\">READING PASSION</a>{% endblock %}</h2>\t\t\t
\t\t\t<hr>
\t\t\t\t\t\t
\t\t</div>
\t\t
\t\t<div class=\"row\" style=\"margin-bottom:45px;\">
\t\t  <div class=\"col-sm-8\" style=\"border-right: 1px solid #ccc;\">{% block body %}{% endblock %}</div>
\t\t  <div class=\"col-sm-4\">{% block sidebar %}{% endblock %}</div>
\t\t</div>\t\t
\t
\t
        <div id=\"footer\" >
        {% block footer %}
        <p id=\"textf\" >Tous droits réservés &copy; 2017 <a href=\"https://gabriel-cassano.be/\" id=\"footer-author\">Gabriele Cassano</a></p>
        {% endblock %}
        </div>\t\t
\t</div>
\t
\t{% javascripts
    '@BloggerBlogBundle/Resources/public/js/*'
\t%}
\t\t<script type=\"text/javascript\" src=\"{{ asset_url }}\"></script>
\t\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"{{ asset('js/bootstrap.js')}}\"></script>
\t{% endjavascripts %}
\t</body>
</html>", "::base.html.twig", "/var/www/clients/client0/web2/web/app/Resources/views/base.html.twig");
    }
}
