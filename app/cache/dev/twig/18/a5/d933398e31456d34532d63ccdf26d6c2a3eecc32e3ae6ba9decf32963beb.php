<?php

/* ::base.html.twig */
class __TwigTemplate_18a5d933398e31456d34532d63ccdf26d6c2a3eecc32e3ae6ba9decf32963beb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'cabecera' => array($this, 'block_cabecera'),
            'cuerpo' => array($this, 'block_cuerpo'),
            'pie' => array($this, 'block_pie'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        
        <meta charset=\"UTF-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
     <div id=\"cabecera\">
            ";
        // line 14
        $this->displayBlock('cabecera', $context, $blocks);
        // line 17
        echo "        </div>
       
         <div id=\"cuerpo\">
            ";
        // line 20
        $this->displayBlock('cuerpo', $context, $blocks);
        // line 21
        echo "        </div>
        
         <div id=\"pie\">
            ";
        // line 24
        $this->displayBlock('pie', $context, $blocks);
        // line 27
        echo "        </div>
    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/uniproyecto/css/fuente.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
    }

    // line 14
    public function block_cabecera($context, array $blocks = array())
    {
        // line 15
        echo "                <h1><font color=\"#CBCBFD\">VideoJuegos</font></h1>
            ";
    }

    // line 20
    public function block_cuerpo($context, array $blocks = array())
    {
    }

    // line 24
    public function block_pie($context, array $blocks = array())
    {
        // line 25
        echo "                <font color=\"#CBCBFD\">By IVAN</font>
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
        return array (  100 => 25,  97 => 24,  92 => 20,  87 => 15,  84 => 14,  77 => 8,  74 => 7,  68 => 6,  61 => 27,  59 => 24,  54 => 21,  52 => 20,  47 => 17,  45 => 14,  37 => 10,  35 => 7,  31 => 6,  24 => 1,);
    }
}
