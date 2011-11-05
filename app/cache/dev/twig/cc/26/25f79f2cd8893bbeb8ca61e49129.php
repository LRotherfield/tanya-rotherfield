<?php

/* ContentBundle:Static:gallery.html.twig */
class __TwigTemplate_cc2625f79f2cd8893bbeb8ca61e49129 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = array();
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head_javascripts' => array($this, 'block_head_javascripts'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    public function getParent(array $context)
    {
        $parent = "::base.html.twig";
        if ($parent instanceof Twig_Template) {
            $name = $parent->getTemplateName();
            $this->parent[$name] = $parent;
            $parent = $name;
        } elseif (!isset($this->parent[$parent])) {
            $this->parent[$parent] = $this->env->loadTemplate($parent);
        }

        return $this->parent[$parent];
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "  ";
        echo $this->renderParentBlock("title", $context, $blocks);
        echo " - Gallery
";
    }

    // line 5
    public function block_head_javascripts($context, array $blocks = array())
    {
        // line 6
        echo "  ";
        echo $this->renderParentBlock("head_javascripts", $context, $blocks);
        echo "
  <script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/content/js/jquery.fancybox.js"), "html");
        echo "\" ></script>
 ";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "   ";
        echo $this->renderParentBlock("stylesheets", $context, $blocks);
        echo "
   <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/content/css/jquery.fancybox.css"), "html");
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
 ";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "      ";
        $context['i'] = 0;
        // line 15
        echo "     ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'images'));
        foreach ($context['_seq'] as $context['_key'] => $context['image']) {
            // line 16
            echo "        ";
            if ((!($this->getContext($context, 'i') % 4))) {
                // line 17
                echo "          <div class=\"row ";
                if ((!($this->getContext($context, 'i') % 8))) {
                    echo "odd";
                } else {
                    echo "even";
                }
                echo "\">
        ";
            }
            // line 19
            echo "              <div class=\"image ";
            if ((!($this->getContext($context, 'i') % 2))) {
                echo "odd";
            } else {
                echo "even";
            }
            echo "\">
                <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/content/images/" . $this->getContext($context, 'image')) . "-LARGE.png")), "html");
            echo "\" class=\"image\" title=\"";
            echo twig_escape_filter($this->env, twig_strtr($this->getContext($context, 'image'), array("-" => " ")), "html");
            echo "\">
                  <img src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/content/images/" . $this->getContext($context, 'image')) . "-THUMB.png")), "html");
            echo "\" />
                </a>
              </div>
        ";
            // line 24
            if ((($this->getContext($context, 'i') % 4) == 3)) {
                // line 25
                echo "              <div class=\"cb\"></div>
          </div>
        ";
            }
            // line 28
            echo "        ";
            $context['i'] = (1 + $this->getContext($context, 'i'));
            // line 29
            echo "     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 30
        echo " ";
    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        // line 32
        echo "  ";
        echo $this->renderParentBlock("javascripts", $context, $blocks);
        echo "
   <script type=\"text/javascript\">
     \$(document).ready(function() {
      \$(\"a.image\").fancybox({
        titleShow : true
    });
     });  
   </script>
";
    }

    public function getTemplateName()
    {
        return "ContentBundle:Static:gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
