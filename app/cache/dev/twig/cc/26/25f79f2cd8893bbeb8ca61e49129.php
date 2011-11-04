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
            'body' => array($this, 'block_body'),
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
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "     ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 15));
        foreach ($context['_seq'] as $context['_key'] => $context['i']) {
            // line 7
            echo "        ";
            if ((!($this->getContext($context, 'i') % 4))) {
                // line 8
                echo "          <div class=\"row ";
                if ((!($this->getContext($context, 'i') % 8))) {
                    echo "odd";
                } else {
                    echo "even";
                }
                echo "\">
        ";
            }
            // line 10
            echo "              <div class=\"image ";
            if ((!($this->getContext($context, 'i') % 2))) {
                echo "odd";
            } else {
                echo "even";
            }
            echo "\">
                <img src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/content/images/bug-in-glass.png"), "html");
            echo "\" />
              </div>
        ";
            // line 13
            if ((($this->getContext($context, 'i') % 4) == 3)) {
                // line 14
                echo "              <div class=\"cb\"></div>
          </div>
        ";
            }
            // line 17
            echo "     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 18
        echo " ";
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
