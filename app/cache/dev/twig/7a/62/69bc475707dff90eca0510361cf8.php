<?php

/* ::base.html.twig */
class __TwigTemplate_7a6269bc475707dff90eca0510361cf8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = array();
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head_javascripts' => array($this, 'block_head_javascripts'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header_text' => array($this, 'block_header_text'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('head_javascripts', $context, $blocks);
        // line 9
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html");
        echo "\" />
  </head>
  <body>   
    <div class=\"wrapper\">
      <div class=\"header\">
        <h1>
          ";
        // line 18
        $this->displayBlock('header_text', $context, $blocks);
        // line 21
        echo "        </h1>
      </div>
      ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "        <div class=\"footer\">
          <a href=\"mailto:tanya@tanyarotherfield.co.uk\">Email Tanya</a>
        </div>
      ";
        // line 27
        $this->displayBlock('javascripts', $context, $blocks);
        // line 28
        echo "    </div>
  </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Tanya Rotherfield";
    }

    // line 6
    public function block_head_javascripts($context, array $blocks = array())
    {
        // line 7
        echo "          <link href='http://fonts.googleapis.com/css?family=Petrona' rel='stylesheet' type='text/css'>
        ";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "           <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/content/css/static.css"), "html");
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
    }

    // line 18
    public function block_header_text($context, array $blocks = array())
    {
        // line 19
        echo "             Tanya Rotherfield - Fine Art
          ";
    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
