<?php

/* contact.htm */
class __TwigTemplate_9664379a4f3164a0127f6b02e641590bb7906ad246d3d98ae14a45d2e5b75f57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'add_js' => array($this, 'block_add_js'),
            'add_css' => array($this, 'block_add_css'),
            'main_content' => array($this, 'block_main_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate(array(0 => "_base.htm"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["set_sidebar"] = 1;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Home";
    }

    // line 7
    public function block_add_js($context, array $blocks = array())
    {
        // line 8
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, (isset($context["JS"]) ? $context["JS"] : null), "html", null, true);
        echo "index.js\"></script>
";
    }

    // line 12
    public function block_add_css($context, array $blocks = array())
    {
        // line 13
        echo "    <link rel=\"stylesheet\" type=\"text/less\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["PLUGIN"]) ? $context["PLUGIN"] : null), "html", null, true);
        echo "less/system/contact.less\" media=\"screen\"/>
";
    }

    // line 17
    public function block_main_content($context, array $blocks = array())
    {
        // line 18
        echo "\t<div class=\"inner-section\">
\t\t<div class=\"title\"><img src=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["IMG"]) ? $context["IMG"] : null), "html", null, true);
        echo "icons/panel/email.png\" width=\"35px\" height=\"40px\"/>  Contact Us </div>
\t\t<div class=\"row contact-form\">
\t\t\t<form class=\"form-group\">
\t\t\t\t<div  class=\"form-group has-success ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lg"]) ? $context["lg"] : null), 5, array(), "array"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["md"]) ? $context["md"] : null), 5, array(), "array"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sm"]) ? $context["sm"] : null), 7, array(), "array"), "html", null, true);
        echo "\">
\t\t\t\t\t";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "txtName", 1 => "text", 2 => "form-control input-lg", 3 => $this->getAttribute((isset($context["dbPackage"]) ? $context["dbPackage"] : null), "package_desc"), 4 => "Enter Name", 5 => "id_name", 6 => "required"), "method"), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t\t<div  class=\"form-group has-success ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lg"]) ? $context["lg"] : null), 5, array(), "array"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["md"]) ? $context["md"] : null), 5, array(), "array"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sm"]) ? $context["sm"] : null), 7, array(), "array"), "html", null, true);
        echo "\">
\t\t\t\t\t";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "txtEmail", 1 => "text", 2 => "form-control input-lg", 3 => $this->getAttribute((isset($context["dbPackage"]) ? $context["dbPackage"] : null), "package_desc"), 4 => "Enter Your Email", 5 => "id_email", 6 => "required"), "method"), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t<div  class=\"form-group has-success ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lg"]) ? $context["lg"] : null), 11, array(), "array"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["md"]) ? $context["md"] : null), 11, array(), "array"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sm"]) ? $context["sm"] : null), 11, array(), "array"), "html", null, true);
        echo "\">
\t\t\t\t\t";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textarea", array(0 => "txtMessage", 1 => "", 2 => "form-control input-lg", 3 => "Enter your message here...", 4 => "id_message"), "method"), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t\t<div  class=\"form-group has-success ";
        // line 32
        echo twig_escape_filter($this->env, (((($this->getAttribute((isset($context["lg"]) ? $context["lg"] : null), 3, array(), "array") . " ") . $this->getAttribute((isset($context["md"]) ? $context["md"] : null), 4, array(), "array")) . " ") . $this->getAttribute((isset($context["sm"]) ? $context["sm"] : null), 5, array(), "array")), "html", null, true);
        echo "\">
\t\t\t\t\t";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "btnSubmit", 1 => "submit", 2 => "btn btn-success form-control input-lg", 3 => "SEND FORM", 4 => "id_Submit"), "method"), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t\t
\t\t<div class=\"title\">+ MORE DETAILS</div>
\t\t<div class=\"contact-details\">
<pre>Quadcore Solutions Inc.

<b>Ph 4A, B43 L25, Tierra Monte Subd.
Brgy. Silangan San Mateo Rizal</b>

Tel. no.: <i>697-82-36</i>
Email: <i>quadcoresolutions@yahoo.com</i>
Mobile nos.: <i>0906.449.6795 | 0942.481.9698</i>
</pre>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 33,  109 => 32,  104 => 30,  96 => 29,  90 => 26,  82 => 25,  77 => 23,  69 => 22,  63 => 19,  60 => 18,  57 => 17,  50 => 13,  47 => 12,  40 => 8,  37 => 7,  31 => 4,  26 => 2,);
    }
}
