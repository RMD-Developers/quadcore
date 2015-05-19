<?php

/* _element/_form.htm */
class __TwigTemplate_4100fd2c3b76ea636040ab5c5ead2b3332f39ce340684d3bbbd132f0ac34a9e7 extends Twig_Template
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
        // line 5
        echo "
";
        // line 10
        echo "
";
        // line 19
        echo "
";
    }

    // line 2
    public function getinput($_name = null, $_type = null, $_class = null, $_value = null, $_pholder = null, $_id = null, $_required = null, $_autofocus = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "type" => $_type,
            "class" => $_class,
            "value" => $_value,
            "pholder" => $_pholder,
            "id" => $_id,
            "required" => $_required,
            "autofocus" => $_autofocus,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 3
            echo "    <input type=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "text")) : ("text")), "html", null, true);
            echo "\"  name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, (isset($context["required"]) ? $context["required"] : null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["autofocus"]) ? $context["autofocus"] : null), "html", null, true);
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null));
            echo "\" class=\"";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
            echo "\"  id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, (isset($context["pholder"]) ? $context["pholder"] : null), "html", null, true);
            echo "\" />
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 7
    public function gettextarea($_name = null, $_value = null, $_class = null, $_pholder = null, $_id = null, $_rows = null, $_cols = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "value" => $_value,
            "class" => $_class,
            "pholder" => $_pholder,
            "id" => $_id,
            "rows" => $_rows,
            "cols" => $_cols,
        ));

        $blocks = array();

        ob_start();
        try {
            echo " 
    <textarea name=\"";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" rows=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("rows", $context)) ? (_twig_default_filter((isset($context["rows"]) ? $context["rows"] : null), 10)) : (10)), "html", null, true);
            echo "\" cols=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("cols", $context)) ? (_twig_default_filter((isset($context["cols"]) ? $context["cols"] : null), 40)) : (40)), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
            echo "\"  id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, (isset($context["pholder"]) ? $context["pholder"] : null), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null));
            echo "</textarea>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 12
    public function getselect($_name = null, $_option = null, $_class = null, $_id = null, $_size = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "option" => $_option,
            "class" => $_class,
            "id" => $_id,
            "size" => $_size,
        ));

        $blocks = array();

        ob_start();
        try {
            echo " 
    <select name=\"";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" size=\"";
            echo twig_escape_filter($this->env, (isset($context["size"]) ? $context["size"] : null), "html", null, true);
            echo "\">
\t\t";
            // line 14
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["option"]) ? $context["option"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 15
                echo "\t\t<option value=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["val"]) ? $context["val"] : null), "html", null, true);
                echo "</option>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "\t</select>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 21
    public function getlabel($_value = null, $_target = null, $_class = null, $_id = null)
    {
        $context = $this->env->mergeGlobals(array(
            "value" => $_value,
            "target" => $_target,
            "class" => $_class,
            "id" => $_id,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 22
            echo "\t<label for=\"";
            echo twig_escape_filter($this->env, (isset($context["target"]) ? $context["target"] : null), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "</label>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "_element/_form.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 22,  151 => 15,  147 => 14,  137 => 13,  95 => 8,  76 => 7,  48 => 3,  30 => 2,  25 => 19,  22 => 10,  19 => 5,  335 => 115,  330 => 85,  325 => 72,  320 => 53,  299 => 21,  296 => 20,  291 => 18,  282 => 129,  274 => 124,  264 => 116,  262 => 115,  257 => 112,  251 => 109,  248 => 108,  246 => 107,  235 => 98,  232 => 97,  227 => 96,  223 => 95,  219 => 94,  215 => 93,  209 => 92,  201 => 87,  196 => 85,  191 => 83,  186 => 81,  182 => 80,  178 => 79,  174 => 21,  170 => 77,  166 => 76,  162 => 17,  158 => 74,  155 => 73,  153 => 72,  149 => 71,  130 => 54,  128 => 53,  124 => 52,  120 => 12,  116 => 50,  112 => 49,  107 => 47,  103 => 46,  99 => 45,  94 => 43,  90 => 42,  86 => 41,  80 => 20,  70 => 15,  68 => 13,  62 => 11,  59 => 10,  53 => 8,  50 => 7,  44 => 5,  42 => 4,  37 => 1,  14 => 13,  426 => 187,  419 => 183,  414 => 181,  405 => 175,  390 => 164,  387 => 163,  338 => 153,  260 => 78,  254 => 75,  249 => 73,  241 => 72,  228 => 66,  220 => 65,  212 => 64,  198 => 86,  195 => 51,  148 => 199,  145 => 198,  143 => 162,  140 => 161,  136 => 50,  133 => 49,  127 => 45,  123 => 44,  119 => 43,  114 => 42,  111 => 41,  105 => 37,  101 => 36,  96 => 35,  93 => 34,  85 => 30,  82 => 39,  75 => 18,  71 => 23,  64 => 12,  56 => 9,  49 => 10,  47 => 6,  43 => 8,  40 => 2,  34 => 4,  29 => 2,);
    }
}
