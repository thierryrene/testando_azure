<?php

/* partials/base.html.twig */
class __TwigTemplate_62727041b9622ba38e22d7fbe0643203b768b6776b852eb1833fdf6d8e10c2b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts_bottom' => array($this, 'block_javascripts_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
  ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 34
        echo "
</head>

<body id=\"page-top\" data-spy=\"scroll\" data-target=\".navbar-fixed-top\">

    ";
        // line 39
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 42
        echo "  
    ";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "
    ";
        // line 47
        $this->displayBlock('footer', $context, $blocks);
        // line 50
        echo "
    ";
        // line 51
        $this->displayBlock('javascripts_bottom', $context, $blocks);
        // line 68
        echo "  ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

</body>

</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 9
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 9)->display($context);
        // line 10
        echo "
    <title>";
        // line 11
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</title>

    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
  ";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 14
        echo "    <!-- Bootstrap Core CSS -->
    ";
        // line 15
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/bootstrap.min.css", 1 => 100), "method");
        // line 16
        echo "
    <!-- Custom CSS -->
    ";
        // line 18
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/grayscale.css", 1 => 100), "method");
        // line 19
        echo "
    <!-- Custom Fonts -->
    ";
        // line 21
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/font-awesome/css/font-awesome.min.css", 1 => 100), "method");
        // line 22
        echo "    <link href=\"http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"http://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\">
    ";
    }

    // line 39
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 40
        echo "        ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 40)->display($context);
        // line 41
        echo "    ";
    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        // line 44
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 45
        echo "    ";
    }

    // line 44
    public function block_content($context, array $blocks = array())
    {
    }

    // line 47
    public function block_footer($context, array $blocks = array())
    {
        // line 48
        echo "        ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 48)->display($context);
        // line 49
        echo "    ";
    }

    // line 51
    public function block_javascripts_bottom($context, array $blocks = array())
    {
        // line 52
        echo "
    <!-- jQuery -->
      ";
        // line 54
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 55
        echo "
      <!-- Bootstrap Core JavaScript -->
      ";
        // line 57
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/bootstrap.min.js", 1 => 100), "method");
        // line 58
        echo "
      <!-- Plugin JavaScript -->
      ";
        // line 60
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/jquery.easing.min.js"), "method");
        // line 61
        echo "
      <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
      <script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false\"></script>

      <!-- Custom Theme JavaScript -->
      ";
        // line 66
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/grayscale.js"), "method");
        // line 67
        echo "    ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 67,  196 => 66,  189 => 61,  187 => 60,  183 => 58,  181 => 57,  177 => 55,  175 => 54,  171 => 52,  168 => 51,  164 => 49,  161 => 48,  158 => 47,  153 => 44,  149 => 45,  146 => 44,  143 => 43,  139 => 41,  136 => 40,  133 => 39,  127 => 22,  125 => 21,  121 => 19,  119 => 18,  115 => 16,  113 => 15,  110 => 14,  107 => 13,  93 => 25,  91 => 13,  82 => 11,  79 => 10,  77 => 9,  72 => 6,  69 => 5,  58 => 68,  56 => 51,  53 => 50,  51 => 47,  48 => 46,  46 => 43,  43 => 42,  41 => 39,  34 => 34,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/* <head>*/
/*   {% block head %}*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     {% include 'partials/metadata.html.twig' %}*/
/* */
/*     <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>*/
/* */
/*     {% block stylesheets %}*/
/*     <!-- Bootstrap Core CSS -->*/
/*     {% do assets.addCss('theme://css/bootstrap.min.css',100) %}*/
/* */
/*     <!-- Custom CSS -->*/
/*     {% do assets.addCss('theme://css/grayscale.css',100) %}*/
/* */
/*     <!-- Custom Fonts -->*/
/*     {% do assets.addCss('theme://css/font-awesome/css/font-awesome.min.css',100) %}*/
/*     <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">*/
/*     <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">*/
/*     {% endblock %}*/
/*     {{ assets.css() }}*/
/* */
/*     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*         <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/*   {% endblock head%}*/
/* */
/* </head>*/
/* */
/* <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">*/
/* */
/*     {% block header_navigation %}*/
/*         {% include 'partials/navigation.html.twig' %}*/
/*     {% endblock %}*/
/*   */
/*     {% block body %}*/
/*         {% block content %}{% endblock %}*/
/*     {% endblock %}*/
/* */
/*     {% block footer %}*/
/*         {% include 'partials/footer.html.twig' %}*/
/*     {% endblock %}*/
/* */
/*     {% block javascripts_bottom %}*/
/* */
/*     <!-- jQuery -->*/
/*       {% do assets.add('jquery',101) %}*/
/* */
/*       <!-- Bootstrap Core JavaScript -->*/
/*       {% do assets.addJs('theme://js/bootstrap.min.js',100) %}*/
/* */
/*       <!-- Plugin JavaScript -->*/
/*       {% do assets.addJs('theme://js/jquery.easing.min.js') %}*/
/* */
/*       <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->*/
/*       <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>*/
/* */
/*       <!-- Custom Theme JavaScript -->*/
/*       {% do assets.addJs('theme://js/grayscale.js') %}*/
/*     {% endblock %}*/
/*   {{ assets.js() }}*/
/* */
/* </body>*/
/* */
/* </html>*/
/* */
