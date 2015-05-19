<?php

/* _element/_grid_1.htm */
class __TwigTemplate_7e7d0a1ab53f14c76973b8569bbb5bab8842895e1d66ff704411e93c4801d401 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'column1' => array($this, 'block_column1'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"row\">
\t<div class=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_join_filter(((array_key_exists("col1_span", $context)) ? (_twig_default_filter((isset($context["col1_span"]) ? $context["col1_span"] : null), "col-lg-12")) : ("col-lg-12")), " "), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_join_filter(((array_key_exists("col1_offset", $context)) ? (_twig_default_filter((isset($context["col1_offset"]) ? $context["col1_offset"] : null), "")) : ("")), " "), "html", null, true);
        echo "\">
\t";
        // line 3
        $this->displayBlock('column1', $context, $blocks);
        // line 4
        echo "\t</div>
</div>";
    }

    // line 3
    public function block_column1($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "_element/_grid_1.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 3,  31 => 4,  23 => 2,  20 => 1,  188 => 22,  151 => 15,  147 => 14,  137 => 13,  95 => 8,  76 => 7,  48 => 3,  30 => 2,  25 => 19,  22 => 10,  19 => 5,  335 => 115,  330 => 85,  325 => 72,  320 => 53,  299 => 21,  296 => 20,  291 => 18,  282 => 129,  274 => 124,  264 => 116,  262 => 115,  257 => 112,  251 => 109,  248 => 108,  246 => 107,  235 => 98,  232 => 97,  227 => 96,  223 => 95,  219 => 94,  215 => 93,  209 => 92,  201 => 87,  196 => 85,  191 => 83,  186 => 81,  182 => 80,  178 => 79,  174 => 21,  170 => 77,  166 => 76,  162 => 17,  158 => 74,  155 => 73,  153 => 72,  149 => 71,  130 => 54,  128 => 53,  124 => 52,  120 => 12,  116 => 50,  112 => 49,  107 => 47,  103 => 46,  99 => 45,  94 => 43,  90 => 42,  86 => 41,  80 => 20,  70 => 15,  68 => 13,  62 => 11,  59 => 10,  53 => 8,  50 => 7,  44 => 5,  42 => 4,  37 => 1,  14 => 13,  426 => 187,  419 => 183,  414 => 181,  405 => 175,  390 => 164,  387 => 163,  338 => 153,  260 => 78,  254 => 75,  249 => 73,  241 => 72,  228 => 66,  220 => 65,  212 => 64,  198 => 86,  195 => 51,  148 => 199,  145 => 198,  143 => 162,  140 => 161,  136 => 50,  133 => 49,  127 => 45,  123 => 44,  119 => 43,  114 => 42,  111 => 41,  105 => 37,  101 => 36,  96 => 35,  93 => 34,  85 => 30,  82 => 39,  75 => 18,  71 => 23,  64 => 12,  56 => 9,  49 => 10,  47 => 6,  43 => 8,  40 => 2,  34 => 4,  29 => 3,);
    }
}
