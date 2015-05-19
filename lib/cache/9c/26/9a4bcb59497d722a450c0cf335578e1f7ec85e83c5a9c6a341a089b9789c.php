<?php

/* package/new.htm */
class __TwigTemplate_9c269a4bcb59497d722a450c0cf335578e1f7ec85e83c5a9c6a341a089b9789c extends Twig_Template
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
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        if (twig_length_filter($this->env, (isset($context["dbPackage"]) ? $context["dbPackage"] : null))) {
            echo "Edit Record";
        } else {
            echo "Add Package";
        }
        echo " | ";
    }

    // line 6
    public function block_add_js($context, array $blocks = array())
    {
        // line 7
        echo "\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, (isset($context["JS"]) ? $context["JS"] : null), "html", null, true);
        echo "package/add_edit.js\"></script>
";
    }

    // line 11
    public function block_add_css($context, array $blocks = array())
    {
        // line 12
        echo "\t<link rel=\"stylesheet/less\" type=\"text/less\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["PLUGIN"]) ? $context["PLUGIN"] : null), "html", null, true);
        echo "less/system/package/add_edit.less\"/>
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["CSS"]) ? $context["CSS"] : null), "html", null, true);
        echo "docs.css\"/>
";
    }

    // line 17
    public function block_main_content($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        $this->env->loadTemplate("package/new.htm", "408637615")->display($context);
    }

    public function getTemplateName()
    {
        return "package/new.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 18,  64 => 17,  58 => 13,  53 => 12,  50 => 11,  43 => 7,  40 => 6,  29 => 3,);
    }
}


/* package/new.htm */
class __TwigTemplate_9c269a4bcb59497d722a450c0cf335578e1f7ec85e83c5a9c6a341a089b9789c_408637615 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_element/_grid_1.htm");

        $this->blocks = array(
            'column1' => array($this, 'block_column1'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_element/_grid_1.htm";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 19
    public function block_column1($context, array $blocks = array())
    {
        // line 20
        echo "\t<div class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lg"]) ? $context["lg"] : null), 1, array(), "array"), "html", null, true);
        echo "\"></div>
\t<div class=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lg"]) ? $context["lg"] : null), 7, array(), "array"), "html", null, true);
        echo "\">
\t\t";
        // line 22
        if (twig_length_filter($this->env, (isset($context["dbPackage"]) ? $context["dbPackage"] : null))) {
            // line 23
            echo "\t\t\t<input type=\"hidden\" class=\"hidden-input-edit\" prod-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dbPackage"]) ? $context["dbPackage"] : null), "package_id"), "html", null, true);
            echo "\" cat=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dbPackage"]) ? $context["dbPackage"] : null), "package_cat"), "html", null, true);
            echo "\"/>
\t\t";
        }
        // line 25
        echo "\t\t<form class=\"form frmAddPackage form-add-edit\" action=\"\" method=\"GET\"  onsubmit=\"return \$.submitForm();\">
\t\t\t<div class=\"bs-callout bs-callout-info\">
\t\t\t  ";
        // line 27
        if ((twig_length_filter($this->env, (isset($context["dbPackage"]) ? $context["dbPackage"] : null)) < 1)) {
            // line 28
            echo "\t\t\t  <h3>Add new package</h3>
\t\t\t  <p>Adding new package. </p>
\t\t\t  ";
        } else {
            // line 31
            echo "\t\t\t  <h3>Edit package information</h3>
\t\t\t  <p>This form enables you to change the details of the package. Don't forget to click the save button before redirecting to other page.</p>
\t\t\t  ";
        }
        // line 34
        echo "\t\t\t</div>
\t\t\t";
        // line 35
        if (twig_length_filter($this->env, (isset($context["dbPackage"]) ? $context["dbPackage"] : null))) {
            // line 36
            echo "\t\t\t<div class=\"prod_profile_img\">
\t\t\t\t<img src=\"";
            // line 37
            echo twig_escape_filter($this->env, (isset($context["IMG"]) ? $context["IMG"] : null), "html", null, true);
            echo "profile/package/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dbPackage"]) ? $context["dbPackage"] : null), "package_id"), "html", null, true);
            echo ".jpg\" width=\"140px\" />
\t\t\t\t<div>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "txtDescription", 1 => "checkbox", 2 => "form-control", 3 => "", 4 => "", 5 => "id_removepix"), "method"), "html", null, true);
            echo "<label for=\"id_removepix\"><span></span></label><label for=\"id_removepix\">Remove image</label></div>
\t\t\t</div>
\t\t\t";
        }
        // line 41
        echo "\t\t\t<div class=\"select-type\">
\t\t\t\t<div  class=\"form-group has-success\">
\t\t\t\t\t";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array(0 => "Select product category", 1 => "category", 2 => "control-label"), "method"), "html", null, true);
        echo "
\t\t\t\t\t<select id=\"category\" name=\"cmbMainCat\" class=\"form-control\">
\t\t\t\t\t<option value=\"small\">Small Business Package</option>
\t\t\t\t\t<option value=\"home\" ";
        // line 46
        if (($this->getAttribute((isset($context["dbPackage"]) ? $context["dbPackage"] : null), "package_cat") == "home")) {
            echo "selected";
        }
        echo ">Home Package</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div  class=\"form-group has-success\">
\t\t\t\t\t";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array(0 => "Description", 1 => "id_description", 2 => "control-label"), "method"), "html", null, true);
        echo "
\t\t\t\t\t";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "txtDescription", 1 => "text", 2 => "form-control", 3 => $this->getAttribute((isset($context["dbPackage"]) ? $context["dbPackage"] : null), "package_desc"), 4 => "Enter description", 5 => "id_description"), "method"), "html", null, true);
        echo "
\t\t\t</div>
\t\t\t<div  class=\"form-group has-success\">
\t\t\t\t\t";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array(0 => "Price (Php)", 1 => "id_price", 2 => "control-label"), "method"), "html", null, true);
        echo "
\t\t\t\t\t";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "txtPrice", 1 => "text", 2 => "form-control", 3 => $this->getAttribute((isset($context["dbPackage"]) ? $context["dbPackage"] : null), "package_price"), 4 => "Enter price in Php", 5 => "id_price"), "method"), "html", null, true);
        echo "
\t\t\t</div>
\t\t\t<div  class=\"form-group has-success\">
\t\t\t\t\t";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array(0 => "Choose image", 1 => "id_fileIMG", 2 => "control-label"), "method"), "html", null, true);
        echo "
\t\t\t\t\t<div>
\t\t\t\t\t";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "btnImage", 1 => "button", 2 => "btn btn-success", 3 => "Choose File", 4 => "", 5 => "id_fileIMG"), "method"), "html", null, true);
        echo "
\t\t\t\t\t";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "btnFileImage", 1 => "file", 2 => "btn-profile", 3 => "Choose File", 4 => "", 5 => "id_fileIMGhidden"), "method"), "html", null, true);
        echo "
\t\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div  class=\"form-group has-success\">
\t\t\t\t\t";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array(0 => "Included item list", 1 => "id_includes", 2 => "control-label"), "method"), "html", null, true);
        echo "
\t\t\t\t\t";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textarea", array(0 => "txtProducts", 1 => twig_join_filter(twig_split_filter($this->getAttribute((isset($context["dbPackage"]) ? $context["dbPackage"] : null), "prod_inc"), "<br>"), "
"), 2 => "form-control", 3 => "Enter included product", 4 => "id_includes"), "method"), "html", null, true);
        echo "
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"btn-input\">
\t\t\t\t<div  class=\"form-group has-success ";
        // line 71
        echo twig_escape_filter($this->env, (((($this->getAttribute((isset($context["lg"]) ? $context["lg"] : null), 1, array(), "array") . " ") . $this->getAttribute((isset($context["md"]) ? $context["md"] : null), 0, array(), "array")) . " ") . $this->getAttribute((isset($context["sm"]) ? $context["sm"] : null), 0, array(), "array")), "html", null, true);
        echo "\"></div>
\t\t\t\t";
        // line 72
        if ((twig_length_filter($this->env, (isset($context["dbPackage"]) ? $context["dbPackage"] : null)) < 1)) {
            // line 73
            echo "\t\t\t\t<div  class=\"form-group has-success ";
            echo twig_escape_filter($this->env, (((($this->getAttribute((isset($context["lg"]) ? $context["lg"] : null), 3, array(), "array") . " ") . $this->getAttribute((isset($context["md"]) ? $context["md"] : null), 4, array(), "array")) . " ") . $this->getAttribute((isset($context["sm"]) ? $context["sm"] : null), 4, array(), "array")), "html", null, true);
            echo "\">
\t\t\t\t\t";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "btnSubmit", 1 => "submit", 2 => "btn btn-success form-control", 3 => "Add Package", 4 => "id_Submit"), "method"), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t\t<div  class=\"form-group has-success ";
            // line 76
            echo twig_escape_filter($this->env, (((($this->getAttribute((isset($context["lg"]) ? $context["lg"] : null), 3, array(), "array") . " ") . $this->getAttribute((isset($context["md"]) ? $context["md"] : null), 4, array(), "array")) . " ") . $this->getAttribute((isset($context["sm"]) ? $context["sm"] : null), 4, array(), "array")), "html", null, true);
            echo "\">
\t\t\t\t\t";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "btnReset", 1 => "reset", 2 => "btn btn-danger form-control", 3 => "Reset", 4 => ""), "method"), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t\t";
        } else {
            // line 80
            echo "\t\t\t\t<div  class=\"form-group has-success ";
            echo twig_escape_filter($this->env, (((($this->getAttribute((isset($context["lg"]) ? $context["lg"] : null), 7, array(), "array") . " ") . $this->getAttribute((isset($context["md"]) ? $context["md"] : null), 9, array(), "array")) . " ") . $this->getAttribute((isset($context["sm"]) ? $context["sm"] : null), 9, array(), "array")), "html", null, true);
            echo "\">
\t\t\t\t\t";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "btnSubmit", 1 => "submit", 2 => "btn btn-success form-control", 3 => "Save Changes", 4 => "id_Submit"), "method"), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 84
        echo "\t\t\t\t<div  class=\"form-group has-success ";
        echo twig_escape_filter($this->env, (((($this->getAttribute((isset($context["lg"]) ? $context["lg"] : null), 1, array(), "array") . " ") . $this->getAttribute((isset($context["md"]) ? $context["md"] : null), 0, array(), "array")) . " ") . $this->getAttribute((isset($context["sm"]) ? $context["sm"] : null), 0, array(), "array")), "html", null, true);
        echo "\"></div>
\t\t\t</div>
\t\t</form>
\t\t</div>
\t\t<div class=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lg"]) ? $context["lg"] : null), 1, array(), "array"), "html", null, true);
        echo "\"></div>
\t";
    }

    public function getTemplateName()
    {
        return "package/new.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 88,  276 => 84,  270 => 81,  265 => 80,  259 => 77,  255 => 76,  250 => 74,  245 => 73,  243 => 72,  239 => 71,  231 => 67,  227 => 66,  220 => 62,  216 => 61,  211 => 59,  205 => 56,  201 => 55,  195 => 52,  191 => 51,  181 => 46,  175 => 43,  171 => 41,  165 => 38,  159 => 37,  156 => 36,  154 => 35,  151 => 34,  146 => 31,  141 => 28,  139 => 27,  135 => 25,  127 => 23,  125 => 22,  121 => 21,  116 => 20,  113 => 19,  67 => 18,  64 => 17,  58 => 13,  53 => 12,  50 => 11,  43 => 7,  40 => 6,  29 => 3,);
    }
}
