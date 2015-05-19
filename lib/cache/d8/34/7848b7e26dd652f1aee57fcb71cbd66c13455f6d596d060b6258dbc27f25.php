<?php

/* _element/_grid_1.htm */
class __TwigTemplate_d8347848b7e26dd652f1aee57fcb71cbd66c13455f6d596d060b6258dbc27f25 extends Twig_Template
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
        return array (  31 => 4,  23 => 2,  20 => 1,  188 => 22,  151 => 15,  147 => 14,  137 => 13,  95 => 8,  76 => 7,  30 => 2,  25 => 19,  19 => 5,  313 => 129,  288 => 110,  277 => 102,  271 => 98,  268 => 97,  237 => 78,  224 => 70,  218 => 69,  206 => 67,  194 => 59,  180 => 51,  164 => 45,  156 => 42,  150 => 41,  142 => 38,  129 => 36,  121 => 33,  115 => 32,  110 => 30,  104 => 27,  100 => 26,  91 => 25,  78 => 21,  69 => 20,  65 => 18,  58 => 12,  54 => 11,  48 => 3,  39 => 4,  36 => 3,  32 => 97,  27 => 58,  24 => 56,  22 => 10,  335 => 115,  330 => 85,  325 => 72,  320 => 53,  299 => 21,  296 => 115,  291 => 18,  282 => 129,  274 => 124,  264 => 116,  262 => 115,  257 => 112,  251 => 109,  248 => 86,  246 => 107,  235 => 98,  232 => 97,  227 => 96,  223 => 95,  219 => 94,  215 => 93,  209 => 92,  201 => 87,  196 => 85,  191 => 58,  186 => 81,  182 => 80,  178 => 79,  174 => 21,  170 => 46,  166 => 76,  162 => 17,  158 => 74,  155 => 73,  153 => 72,  149 => 71,  130 => 54,  128 => 53,  124 => 52,  120 => 12,  116 => 50,  112 => 31,  107 => 47,  103 => 46,  99 => 45,  94 => 43,  90 => 42,  86 => 41,  80 => 20,  70 => 15,  68 => 13,  62 => 11,  59 => 10,  53 => 8,  50 => 7,  44 => 7,  42 => 4,  37 => 1,  14 => 13,  426 => 187,  419 => 183,  414 => 181,  405 => 175,  390 => 164,  387 => 163,  338 => 153,  260 => 78,  254 => 87,  249 => 73,  241 => 72,  228 => 66,  220 => 65,  212 => 68,  198 => 86,  195 => 51,  148 => 199,  145 => 198,  143 => 162,  140 => 161,  136 => 37,  133 => 49,  127 => 45,  123 => 44,  119 => 43,  114 => 42,  111 => 41,  105 => 37,  101 => 36,  96 => 35,  93 => 34,  85 => 24,  82 => 39,  75 => 18,  71 => 23,  64 => 12,  56 => 9,  49 => 10,  47 => 6,  43 => 8,  40 => 2,  34 => 4,  29 => 3,);
    }
}
