<?php

/* partials/footer.html.twig */
class __TwigTemplate_59b619fa7b3d007e6baba5b97321c8cf8386f6e2bb381b45a6c464d6639deef8 extends Twig_Template
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
        echo "<!-- Footer -->
<footer>
    <div class=\"container text-center\">
        <p>Copyright &copy; ";
        // line 4
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo " 2014 &middot; by <a href=\"http://vmcosta.net\">VC</a></p>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }
}
/* <!-- Footer -->*/
/* <footer>*/
/*     <div class="container text-center">*/
/*         <p>Copyright &copy; {{ site.title }} 2014 &middot; by <a href="http://vmcosta.net">VC</a></p>*/
/*     </div>*/
/* </footer>*/
