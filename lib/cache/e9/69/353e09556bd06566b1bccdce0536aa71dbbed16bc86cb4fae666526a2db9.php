<?php

/* admin/index.htm */
class __TwigTemplate_e969353e09556bd06566b1bccdce0536aa71dbbed16bc86cb4fae666526a2db9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'add_js' => array($this, 'block_add_js'),
            'add_css' => array($this, 'block_add_css'),
            'main_content' => array($this, 'block_main_content'),
            'modal' => array($this, 'block_modal'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate(array(0 => "_base.htm"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Home";
    }

    // line 6
    public function block_add_js($context, array $blocks = array())
    {
        // line 7
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, (isset($context["JS"]) ? $context["JS"] : null), "html", null, true);
        echo "admin.js\"></script>
\t<script>
\t\t\$(function(){ \$.loginAdmin(); })
\t</script>
";
    }

    // line 14
    public function block_add_css($context, array $blocks = array())
    {
    }

    // line 18
    public function block_main_content($context, array $blocks = array())
    {
    }

    // line 21
    public function block_modal($context, array $blocks = array())
    {
        // line 22
        echo "\t";
        $this->displayParentBlock("modal", $context, $blocks);
        echo "
\t
";
    }

    public function getTemplateName()
    {
        return "admin/index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 22,  59 => 21,  54 => 18,  49 => 14,  39 => 7,  36 => 6,  30 => 3,);
    }
}
