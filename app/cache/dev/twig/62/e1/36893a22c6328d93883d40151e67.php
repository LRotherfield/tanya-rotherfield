<?php

/* ContentBundle:Static:index.html.twig */
class __TwigTemplate_62e136893a22c6328d93883d40151e67 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, 'name'), "html");
        echo "!
";
    }

    public function getTemplateName()
    {
        return "ContentBundle:Static:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
