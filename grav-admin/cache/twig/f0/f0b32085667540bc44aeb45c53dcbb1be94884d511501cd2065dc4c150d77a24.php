<?php

/* partials/navigation.html.twig */
class __TwigTemplate_4f17611f05b1527be610474faf6e33a37fa23cc1034d49636250337e8ef492c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- Navigation -->
<nav class=\"navbar navbar-custom navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <i class=\"fa fa-bars\"></i>
            </button>
            <a class=\"navbar-brand page-scroll\" href=\"#page-top\">
                <i class=\"fa fa-play-circle\"></i>  ";
        // line 9
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse navbar-right navbar-main-collapse\">
            <ul class=\"nav navbar-nav\">
                <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                <li class=\"hidden\">
                    <a href=\"#page-top\"></a>
                </li>
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "links", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 21
            echo "                    ";
            if ($this->env->getExtension('GravTwigExtension')->containsFilter($this->getAttribute($context["link"], "url", array()), "http")) {
                // line 22
                echo "                        ";
                $context["domain"] = "";
                // line 23
                echo "                    ";
            } elseif ($this->env->getExtension('GravTwigExtension')->containsFilter($this->getAttribute($context["link"], "url", array()), "#")) {
                // line 24
                echo "                        ";
                $context["domain"] = "";
                // line 25
                echo "                    ";
            } else {
                // line 26
                echo "                        ";
                $context["domain"] = (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
                // line 27
                echo "                    ";
            }
            // line 28
            echo "                        <li><a class=\"page-scroll\" href=\"";
            echo (isset($context["domain"]) ? $context["domain"] : null);
            echo $this->getAttribute($context["link"], "url", array());
            echo "\" ";
            if ($this->env->getExtension('GravTwigExtension')->containsFilter($this->getAttribute($context["link"], "url", array()), "http")) {
                echo "target=\"_blank\"";
            }
            echo ">";
            echo $this->getAttribute($context["link"], "title", array());
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>";
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 30,  68 => 28,  65 => 27,  62 => 26,  59 => 25,  56 => 24,  53 => 23,  50 => 22,  47 => 21,  43 => 20,  29 => 9,  19 => 1,);
    }
}
/* <!-- Navigation -->*/
/* <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">*/
/*     <div class="container">*/
/*         <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">*/
/*                 <i class="fa fa-bars"></i>*/
/*             </button>*/
/*             <a class="navbar-brand page-scroll" href="#page-top">*/
/*                 <i class="fa fa-play-circle"></i>  {{site.title}}*/
/*             </a>*/
/*         </div>*/
/* */
/*         <!-- Collect the nav links, forms, and other content for toggling -->*/
/*         <div class="collapse navbar-collapse navbar-right navbar-main-collapse">*/
/*             <ul class="nav navbar-nav">*/
/*                 <!-- Hidden li included to remove active class from about link when scrolled up past about section -->*/
/*                 <li class="hidden">*/
/*                     <a href="#page-top"></a>*/
/*                 </li>*/
/*                 {% for link in site.links %}*/
/*                     {% if link.url | contains('http') %}*/
/*                         {% set domain = '' %}*/
/*                     {% elseif link.url | contains('#') %}*/
/*                         {% set domain = '' %}*/
/*                     {% else %}*/
/*                         {% set domain = base_url_absolute %}*/
/*                     {% endif %}*/
/*                         <li><a class="page-scroll" href="{{ domain }}{{ link.url }}" {% if link.url | contains('http') %}target="_blank"{% endif %}>{{ link.title }}</a></li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/*         <!-- /.navbar-collapse -->*/
/*     </div>*/
/*     <!-- /.container -->*/
/* </nav>*/
