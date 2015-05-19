<?php

/* product/new.htm */
class __TwigTemplate_e1b8ea665e86183ef62339f96611f6c3fef7840e0c2d7327a67638f130ec7980 extends Twig_Template
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
        if (twig_length_filter($this->env, (isset($context["dbProduct"]) ? $context["dbProduct"] : null))) {
            echo "Edit Product";
        } else {
            echo "Add Product";
        }
        echo " | ";
    }

    // line 6
    public function block_add_js($context, array $blocks = array())
    {
        // line 7
        echo "\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, (isset($context["JS"]) ? $context["JS"] : null), "html", null, true);
        echo "product/add_edit.js\"></script>
";
    }

    // line 11
    public function block_add_css($context, array $blocks = array())
    {
        // line 12
        echo "\t<link rel=\"stylesheet/less\" type=\"text/less\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["PLUGIN"]) ? $context["PLUGIN"] : null), "html", null, true);
        echo "less/system/product/add_edit.less\"/>
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
        $this->env->loadTemplate("product/new.htm", "1594022800")->display($context);
    }

    public function getTemplateName()
    {
        return "product/new.htm";
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


/* product/new.htm */
class __TwigTemplate_e1b8ea665e86183ef62339f96611f6c3fef7840e0c2d7327a67638f130ec7980_1594022800 extends Twig_Template
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
        if (twig_length_filter($this->env, (isset($context["dbProduct"]) ? $context["dbProduct"] : null))) {
            // line 23
            echo "\t\t\t<input type=\"hidden\" class=\"hidden-input-edit\" maincat=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dbProduct"]) ? $context["dbProduct"] : null), "maincat_id"), "html", null, true);
            echo "\" subcat=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dbProduct"]) ? $context["dbProduct"] : null), "subcat_id"), "html", null, true);
            echo "\" prod-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dbProduct"]) ? $context["dbProduct"] : null), "prod_id"), "html", null, true);
            echo "\" />
\t\t";
        }
        // line 25
        echo "\t\t<form class=\"form frmAddProduct form-add-edit\" action=\"\" method=\"GET\"  onsubmit=\"return \$.submitForm();\">
\t\t\t<div class=\"bs-callout bs-callout-info\">
\t\t\t  ";
        // line 27
        if ((twig_length_filter($this->env, (isset($context["dbProduct"]) ? $context["dbProduct"] : null)) < 1)) {
            // line 28
            echo "\t\t\t  <h3>Add new product</h3>
\t\t\t  <p>Adding new product. </p>
\t\t\t  ";
        } else {
            // line 31
            echo "\t\t\t  <h3>Edit product information</h3>
\t\t\t  <p>This form enables you to change the details of the product. Don't forget to click the save button before redirecting to other page.</p>
\t\t\t  ";
        }
        // line 34
        echo "\t\t\t</div>
\t\t\t
\t\t\t
\t\t\t
\t\t\t";
        // line 38
        if (twig_length_filter($this->env, (isset($context["dbProduct"]) ? $context["dbProduct"] : null))) {
            // line 39
            echo "\t\t\t<div class=\"prod_profile_img\">
\t\t\t\t<img src=\"";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["IMG"]) ? $context["IMG"] : null), "html", null, true);
            echo "profile/product/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dbProduct"]) ? $context["dbProduct"] : null), "prod_id"), "html", null, true);
            echo "\" width=\"140px\" />
\t\t\t\t<div>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "txtDescription", 1 => "checkbox", 2 => "form-control", 3 => "", 4 => "", 5 => "id_removepix"), "method"), "html", null, true);
            echo "<label for=\"id_removepix\"><span></span></label><label for=\"id_removepix\">Remove image</label></div>
\t\t\t</div>
\t\t\t";
        }
        // line 44
        echo "\t\t\t<div class=\"select-type\">
\t\t\t\t<div  class=\"form-group has-success\">
\t\t\t\t\t";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array(0 => "Select product category", 1 => "id_mainCat", 2 => "control-label"), "method"), "html", null, true);
        echo "
\t\t\t\t\t";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "select", array(0 => "cmbMainCat", 1 => "", 2 => "form-control", 3 => "id_mainCat"), "method"), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"select-type\">
\t\t\t\t<div  class=\"form-group has-success\">
\t\t\t\t\t";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array(0 => "Select sub-category", 1 => "id_subCat", 2 => "control-label"), "method"), "html", null, true);
        echo "
\t\t\t\t\t";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "select", array(0 => "cmbSubCat", 1 => "", 2 => "form-control", 3 => "id_subCat"), "method"), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t";
        // line 57
        if (twig_length_filter($this->env, (isset($context["dbProduct"]) ? $context["dbProduct"] : null))) {
            // line 58
            echo "\t\t\t<script language=\"JavaScript\">
\t\t\t\t\$(document).ready( function(){ 
\t\t\t\t\tvar c = ";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dbProduct"]) ? $context["dbProduct"] : null), "best_seller"), "html", null, true);
            echo "
\t\t\t\t\tif(c) \$('input[name=chkBestSeller]').attr('checked', 'true')
\t\t\t\t})
\t\t\t</script>
\t\t\t";
        }
        // line 65
        echo "\t\t\t<div  class=\"form-group has-success\">
\t\t\t\t\t<div>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "chkBestSeller", 1 => "checkbox", 2 => "form-control", 3 => "", 4 => "", 5 => "id_bestSeller"), "method"), "html", null, true);
        echo "<label for=\"id_removepix\"><span></span></label><label for=\"id_bestSeller\">Best Seller</label></div>
\t\t\t
\t\t\t</div>
\t\t\t
\t\t\t<div  class=\"form-group has-success\">
\t\t\t\t\t";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array(0 => "Description", 1 => "id_description", 2 => "control-label"), "method"), "html", null, true);
        echo "
\t\t\t\t\t";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "txtDescription", 1 => "text", 2 => "form-control", 3 => $this->getAttribute((isset($context["dbProduct"]) ? $context["dbProduct"] : null), "prod_desc"), 4 => "Enter description", 5 => "id_description"), "method"), "html", null, true);
        echo "
\t\t\t</div>
\t\t\t<div  class=\"form-group has-success\">
\t\t\t\t\t";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array(0 => "Choose image", 1 => "id_fileIMG", 2 => "control-label"), "method"), "html", null, true);
        echo "
\t\t\t\t\t<div>
\t\t\t\t\t";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "btnImage", 1 => "button", 2 => "btn btn-success", 3 => "Choose File", 4 => "", 5 => "id_fileIMG"), "method"), "html", null, true);
        echo "
\t\t\t\t\t";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "btnFileImage", 1 => "file", 2 => "btn-profile", 3 => "Choose File", 4 => "", 5 => "id_fileIMGhidden"), "method"), "html", null, true);
        echo "
\t\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div  class=\"form-group has-success\">
\t\t\t\t\t";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array(0 => "Model", 1 => "id_model", 2 => "control-label"), "method"), "html", null, true);
        echo "
\t\t\t\t\t";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "txtModel", 1 => "text", 2 => "form-control", 3 => $this->getAttribute((isset($context["dbProduct"]) ? $context["dbProduct"] : null), "model"), 4 => "Enter model", 5 => "id_model", 6 => "required"), "method"), "html", null, true);
        echo "
\t\t\t</div>
\t\t\t<div class=\"select-form-1 select-form  ";
        // line 85
        if (($this->getAttribute((isset($context["dbProduct"]) ? $context["dbProduct"] : null), "maincat_id") == 2)) {
            echo "select-form-hidden";
        }
        echo "\">
\t\t\t\t
\t\t\t\t<div  class=\"form-group has-success\">
\t\t\t\t\t";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array(0 => "Image format", 1 => "id_imgFormat", 2 => "control-label"), "method"), "html", null, true);
        echo "
\t\t\t\t\t";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "txtImgFormat", 1 => "text", 2 => "form-control", 3 => $this->getAttribute((isset($context["dbProduct"]) ? $context["dbProduct"] : null), "image_format"), 4 => "Enter image format", 5 => "id_imgFormat"), "method"), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t\t<div  class=\"form-group has-success\">
\t\t\t\t\t";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array(0 => "Display resolution", 1 => "id_resolution", 2 => "control-label"), "method"), "html", null, true);
        echo "
\t\t\t\t\t";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "txtResolution", 1 => "text", 2 => "form-control", 3 => $this->getAttribute((isset($context["dbProduct"]) ? $context["dbProduct"] : null), "disp_res"), 4 => "Enter display resolution", 5 => "id_resolution"), "method"), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t\t<div  class=\"form-group has-success divider\" onclick=\"\$('.has-more').click()\"><!-- Divider -->
\t\t\t\t\t<div class=\"alert alert-success other-option\">OTHER INFORMATION</div>
\t\t\t\t</div>
\t\t\t\t<div  class=\"form-group has-success\">
\t\t\t\t\t";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array(0 => "Record rate", 1 => "id_recordRate", 2 => "control-label"), "method"), "html", null, true);
        echo "
\t\t\t\t\t";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "txtRecordRate", 1 => "text", 2 => "form-control", 3 => $this->getAttribute((isset($context["dbProduct"]) ? $context["dbProduct"] : null), "record_rate"), 4 => "Enter record rate", 5 => "id_recordRate"), "method"), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t\t<div  class=\"form-group has-success\">
\t\t\t\t\t";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array(0 => "Record mode", 1 => "id_recordMode", 2 => "control-label"), "method"), "html", null, true);
        echo "
\t\t\t\t\t";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "txtRecordMode", 1 => "text", 2 => "form-control", 3 => $this->getAttribute((isset($context["dbProduct"]) ? $context["dbProduct"] : null), "record_mode"), 4 => "Enter record mode", 5 => "id_recordMode"), "method"), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t\t<div  class=\"form-group has-success\">
\t\t\t\t\t";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array(0 => "Storage media", 1 => "id_storage", 2 => "control-label"), "method"), "html", null, true);
        echo "
\t\t\t\t\t";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "txtStorage", 1 => "text", 2 => "form-control", 3 => $this->getAttribute((isset($context["dbProduct"]) ? $context["dbProduct"] : null), "storage_media"), 4 => "Enter storage media", 5 => "id_storage"), "method"), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t\t<div  class=\"form-group has-success\">
\t\t\t\t\t";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array(0 => "Audio input", 1 => "id_audio", 2 => "control-label"), "method"), "html", null, true);
        echo "
\t\t\t\t\t";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "txtAudioInput", 1 => "text", 2 => "form-control", 3 => $this->getAttribute((isset($context["dbProduct"]) ? $context["dbProduct"] : null), "audio_input"), 4 => "Enter audio input", 5 => "id_audio"), "method"), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t\t<div  class=\"form-group has-success\">
\t\t\t\t\t";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array(0 => "Back up", 1 => "id_backup", 2 => "control-label"), "method"), "html", null, true);
        echo "
\t\t\t\t\t";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "txtBackUp", 1 => "text", 2 => "form-control", 3 => $this->getAttribute((isset($context["dbProduct"]) ? $context["dbProduct"] : null), "back_up"), 4 => "Enter back up", 5 => "id_backup"), "method"), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t\t<div  class=\"form-group has-success\">
\t\t\t\t\t";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array(0 => "Power source", 1 => "id_power", 2 => "control-label"), "method"), "html", null, true);
        echo "
\t\t\t\t\t";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "txtPower", 1 => "text", 2 => "form-control", 3 => $this->getAttribute((isset($context["dbProduct"]) ? $context["dbProduct"] : null), "power_source"), 4 => "Enter power source", 5 => "id_power"), "method"), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Hidden tab for 2nd option -->
\t\t\t<div class=\"select-form-2 select-form   ";
        // line 124
        if ((($this->getAttribute((isset($context["dbProduct"]) ? $context["dbProduct"] : null), "maincat_id") == 1) || (twig_length_filter($this->env, (isset($context["dbProduct"]) ? $context["dbProduct"] : null)) < 1))) {
            echo "select-form-hidden";
        }
        echo "\" >
\t\t\t\t<div  class=\"form-group has-success\">
\t\t\t\t\t";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array(0 => "Enter image sensor", 1 => "id_imgSensor", 2 => "control-label"), "method"), "html", null, true);
        echo "
\t\t\t\t\t";
        // line 127
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "txtImgSensor", 1 => "text", 2 => "form-control", 3 => $this->getAttribute((isset($context["dbProduct"]) ? $context["dbProduct"] : null), "image_sensor"), 4 => "Enter back up", 5 => "id_imgSensor"), "method"), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t\t<div  class=\"form-group has-success\">
\t\t\t\t\t";
        // line 130
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array(0 => "Enter TV line", 1 => "id_tvline", 2 => "control-label"), "method"), "html", null, true);
        echo "
\t\t\t\t\t";
        // line 131
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "txtTVline", 1 => "text", 2 => "form-control", 3 => $this->getAttribute((isset($context["dbProduct"]) ? $context["dbProduct"] : null), "tv_line"), 4 => "Enter TV line", 5 => "id_tvline"), "method"), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t\t<div  class=\"form-group has-success\">
\t\t\t\t\t";
        // line 134
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array(0 => "Enter Lux", 1 => "id_lux", 2 => "control-label"), "method"), "html", null, true);
        echo "
\t\t\t\t\t";
        // line 135
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "txtLux", 1 => "text", 2 => "form-control", 3 => $this->getAttribute((isset($context["dbProduct"]) ? $context["dbProduct"] : null), "lux"), 4 => "Enter Lux", 5 => "id_lux"), "method"), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t\t<!-- Divider -->
\t\t\t\t<div  class=\"form-group has-success divider\" onclick=\"\$('.has-more').click()\">
\t\t\t\t\t<div class=\"alert alert-success other-option\">OTHER INFORMATION</div>
\t\t\t\t</div>
\t\t\t\t<div  class=\"form-group has-success\">
\t\t\t\t\t";
        // line 142
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array(0 => "Enter Lens", 1 => "id_lens", 2 => "control-label"), "method"), "html", null, true);
        echo "
\t\t\t\t\t";
        // line 143
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "txtLens", 1 => "text", 2 => "form-control", 3 => $this->getAttribute((isset($context["dbProduct"]) ? $context["dbProduct"] : null), "lens"), 4 => "Enter Lens", 5 => "id_lens"), "method"), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t\t<div  class=\"form-group has-success\">
\t\t\t\t\t";
        // line 146
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array(0 => "Enter power supply", 1 => "id_powersupply", 2 => "control-label"), "method"), "html", null, true);
        echo "
\t\t\t\t\t";
        // line 147
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "txtPower", 1 => "text", 2 => "form-control", 3 => $this->getAttribute((isset($context["dbProduct"]) ? $context["dbProduct"] : null), "power_supply"), 4 => "Enter power supply", 5 => "id_powersupply"), "method"), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t\t<div  class=\"form-group has-success\">
\t\t\t\t\t";
        // line 150
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array(0 => "Enter current consumption", 1 => "id_curConsumption", 2 => "control-label"), "method"), "html", null, true);
        echo "
\t\t\t\t\t";
        // line 151
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "txtCurConsumption", 1 => "text", 2 => "form-control", 3 => $this->getAttribute((isset($context["dbProduct"]) ? $context["dbProduct"] : null), "curr_consumption"), 4 => "Enter current consumption", 5 => "id_curConsumption"), "method"), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t\t<div  class=\"form-group has-success\">
\t\t\t\t\t";
        // line 154
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array(0 => "Enter IR Led", 1 => "id_irLed", 2 => "control-label"), "method"), "html", null, true);
        echo "
\t\t\t\t\t";
        // line 155
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "txtIRLed", 1 => "text", 2 => "form-control", 3 => $this->getAttribute((isset($context["dbProduct"]) ? $context["dbProduct"] : null), "ir_led"), 4 => "Enter IR Led", 5 => "id_irLed"), "method"), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t\t<div  class=\"form-group has-success\">
\t\t\t\t\t";
        // line 158
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array(0 => "Enter IR range", 1 => "id_irRange", 2 => "control-label"), "method"), "html", null, true);
        echo "
\t\t\t\t\t";
        // line 159
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "txtIrRange", 1 => "text", 2 => "form-control", 3 => $this->getAttribute((isset($context["dbProduct"]) ? $context["dbProduct"] : null), "ir_range"), 4 => "Enter IR range", 5 => "id_irRange"), "method"), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t\t<div  class=\"form-group has-success\">
\t\t\t\t\t";
        // line 162
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array(0 => "Enter remarks", 1 => "id_rem", 2 => "control-label"), "method"), "html", null, true);
        echo "
\t\t\t\t\t";
        // line 163
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "txtRemark", 1 => "text", 2 => "form-control", 3 => $this->getAttribute((isset($context["dbProduct"]) ? $context["dbProduct"] : null), "remarks"), 4 => "Enter remarks", 5 => "id_rem"), "method"), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t\t<div  class=\"form-group has-success\">
\t\t\t\t\t";
        // line 166
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array(0 => "Enter maker", 1 => "id_maker", 2 => "control-label"), "method"), "html", null, true);
        echo "
\t\t\t\t\t";
        // line 167
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "txtMaker", 1 => "text", 2 => "form-control", 3 => $this->getAttribute((isset($context["dbProduct"]) ? $context["dbProduct"] : null), "maker"), 4 => "Enter maker", 5 => "id_maker"), "method"), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- button -- ></!-->
\t\t    <div  class=\"form-group has-success has-more-div\"><!-- Divider -->
\t\t\t\t<a href=\"JavaScript:void(0)\" class=\"btn btn-md has-more\" role=\"button\">More</a>
\t\t\t</div>
\t\t\t<div class=\"btn-input\">
\t\t\t\t<div  class=\"form-group has-success ";
        // line 175
        echo twig_escape_filter($this->env, (((($this->getAttribute((isset($context["lg"]) ? $context["lg"] : null), 1, array(), "array") . " ") . $this->getAttribute((isset($context["md"]) ? $context["md"] : null), 0, array(), "array")) . " ") . $this->getAttribute((isset($context["sm"]) ? $context["sm"] : null), 0, array(), "array")), "html", null, true);
        echo "\"></div>
\t\t\t\t";
        // line 176
        if ((twig_length_filter($this->env, (isset($context["dbProduct"]) ? $context["dbProduct"] : null)) < 1)) {
            // line 177
            echo "\t\t\t\t<div  class=\"form-group has-success ";
            echo twig_escape_filter($this->env, (((($this->getAttribute((isset($context["lg"]) ? $context["lg"] : null), 3, array(), "array") . " ") . $this->getAttribute((isset($context["md"]) ? $context["md"] : null), 4, array(), "array")) . " ") . $this->getAttribute((isset($context["sm"]) ? $context["sm"] : null), 4, array(), "array")), "html", null, true);
            echo "\">
\t\t\t\t\t";
            // line 178
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "btnSubmit", 1 => "submit", 2 => "btn btn-success form-control", 3 => "Add Item", 4 => "id_Submit"), "method"), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t\t<div  class=\"form-group has-success ";
            // line 180
            echo twig_escape_filter($this->env, (((($this->getAttribute((isset($context["lg"]) ? $context["lg"] : null), 3, array(), "array") . " ") . $this->getAttribute((isset($context["md"]) ? $context["md"] : null), 4, array(), "array")) . " ") . $this->getAttribute((isset($context["sm"]) ? $context["sm"] : null), 4, array(), "array")), "html", null, true);
            echo "\">
\t\t\t\t\t";
            // line 181
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "btnReset", 1 => "reset", 2 => "btn btn-danger form-control", 3 => "Reset", 4 => ""), "method"), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t\t";
        } else {
            // line 184
            echo "\t\t\t\t<div  class=\"form-group has-success ";
            echo twig_escape_filter($this->env, (((($this->getAttribute((isset($context["lg"]) ? $context["lg"] : null), 7, array(), "array") . " ") . $this->getAttribute((isset($context["md"]) ? $context["md"] : null), 9, array(), "array")) . " ") . $this->getAttribute((isset($context["sm"]) ? $context["sm"] : null), 9, array(), "array")), "html", null, true);
            echo "\">
\t\t\t\t\t";
            // line 185
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "btnSubmit", 1 => "submit", 2 => "btn btn-success form-control", 3 => "Save Changes", 4 => "id_Submit"), "method"), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 188
        echo "\t\t\t\t<div  class=\"form-group has-success ";
        echo twig_escape_filter($this->env, (((($this->getAttribute((isset($context["lg"]) ? $context["lg"] : null), 1, array(), "array") . " ") . $this->getAttribute((isset($context["md"]) ? $context["md"] : null), 0, array(), "array")) . " ") . $this->getAttribute((isset($context["sm"]) ? $context["sm"] : null), 0, array(), "array")), "html", null, true);
        echo "\"></div>
\t\t\t</div>
\t\t</form>
\t\t</div>
\t\t<div class=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lg"]) ? $context["lg"] : null), 1, array(), "array"), "html", null, true);
        echo "\"></div>
\t";
    }

    public function getTemplateName()
    {
        return "product/new.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  516 => 192,  508 => 188,  502 => 185,  497 => 184,  491 => 181,  487 => 180,  482 => 178,  477 => 177,  475 => 176,  471 => 175,  460 => 167,  456 => 166,  450 => 163,  446 => 162,  440 => 159,  436 => 158,  430 => 155,  426 => 154,  420 => 151,  416 => 150,  410 => 147,  406 => 146,  400 => 143,  396 => 142,  386 => 135,  382 => 134,  376 => 131,  372 => 130,  366 => 127,  362 => 126,  355 => 124,  348 => 120,  344 => 119,  338 => 116,  334 => 115,  328 => 112,  324 => 111,  318 => 108,  314 => 107,  308 => 104,  304 => 103,  298 => 100,  294 => 99,  285 => 93,  281 => 92,  275 => 89,  271 => 88,  263 => 85,  258 => 83,  254 => 82,  247 => 78,  243 => 77,  238 => 75,  232 => 72,  228 => 71,  220 => 66,  217 => 65,  209 => 60,  205 => 58,  203 => 57,  196 => 53,  192 => 52,  184 => 47,  180 => 46,  176 => 44,  170 => 41,  164 => 40,  161 => 39,  159 => 38,  153 => 34,  148 => 31,  143 => 28,  141 => 27,  137 => 25,  127 => 23,  125 => 22,  121 => 21,  116 => 20,  113 => 19,  67 => 18,  64 => 17,  58 => 13,  53 => 12,  50 => 11,  43 => 7,  40 => 6,  29 => 3,);
    }
}
