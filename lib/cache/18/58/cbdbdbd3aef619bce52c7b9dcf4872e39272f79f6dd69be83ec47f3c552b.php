<?php

/* user/new.htm */
class __TwigTemplate_1858cbdbdbd3aef619bce52c7b9dcf4872e39272f79f6dd69be83ec47f3c552b extends Twig_Template
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
        echo "\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, (isset($context["JS"]) ? $context["JS"] : null), "html", null, true);
        echo "index.js\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["JS"]) ? $context["JS"] : null), "html", null, true);
        echo "user/u_add_edit.js\"></script>
";
    }

    // line 12
    public function block_add_css($context, array $blocks = array())
    {
        // line 13
        echo "\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["CSS"]) ? $context["CSS"] : null), "html", null, true);
        echo "docs.css\"/>
\t<style>
\t.bs-callout-info h6,
\t.bs-callout-info h5,
\t.bs-callout-info h4,
\t.bs-callout-info h3,
\t.bs-callout-info h2,
\t.bs-callout-info h1{ font:30px 'BebasNeueRegular'; }
\t</style>
";
    }

    // line 25
    public function block_main_content($context, array $blocks = array())
    {
        // line 26
        echo "\t<div class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lg"]) ? $context["lg"] : null), 1, array(), "array"), "html", null, true);
        echo "\"></div>
\t<div class=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lg"]) ? $context["lg"] : null), 7, array(), "array"), "html", null, true);
        echo "\">
\t\t<form class=\"form frmAddUser form-add-edit\" action=\"\" method=\"POST\" onsubmit=\"return \$.addUser()\">
\t\t\t
\t\t\t";
        // line 30
        $context["required"] = "required";
        // line 31
        echo "\t\t\t";
        if (((isset($context["hasActiveUser"]) ? $context["hasActiveUser"] : null) == true)) {
            echo " 
\t\t\t\t<div class=\"bs-callout bs-callout-info\">
\t\t\t\t  <h3>Edit Record</h3>
\t\t\t\t  <p></p>
\t\t\t\t</div>
\t\t\t\t<input type=\"hidden\" class=\"hidden-input\" user-id=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dbUser"]) ? $context["dbUser"] : null), "user_id"), "html", null, true);
            echo "\" /> 
\t\t\t\t";
            // line 37
            $context["required"] = "";
            // line 38
            echo "\t\t\t";
        } else {
            // line 39
            echo "\t\t\t\t<div class=\"bs-callout bs-callout-info\">
\t\t\t\t  <h3>Add new user</h3>
\t\t\t\t  <p>Adding new user.</p>
\t\t\t\t</div>
\t\t\t";
        }
        // line 44
        echo "\t\t\t
\t\t\t<div  class=\"form-group has-success\">
\t\t\t\t";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array(0 => "First Name", 1 => "id_fname", 2 => "control-label"), "method"), "html", null, true);
        echo "
\t\t\t\t";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "txtFName", 1 => "text", 2 => "form-control input-lg", 3 => $this->getAttribute((isset($context["dbUser"]) ? $context["dbUser"] : null), "fname"), 4 => "Enter first name", 5 => "id_fname", 6 => "required", 7 => "autofocus"), "method"), "html", null, true);
        echo "
\t\t\t</div>
\t\t\t<div  class=\"form-group has-success\">
\t\t\t\t";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array(0 => "Last Name", 1 => "id_lname", 2 => "control-label"), "method"), "html", null, true);
        echo "
\t\t\t\t";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "txtLName", 1 => "text", 2 => "form-control input-lg", 3 => $this->getAttribute((isset($context["dbUser"]) ? $context["dbUser"] : null), "lname"), 4 => "Enter last name", 5 => "id_lname", 6 => "required"), "method"), "html", null, true);
        echo "
\t\t\t</div>
\t\t\t<div  class=\"form-group has-success\">
\t\t\t\t";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array(0 => "Email Address", 1 => "id_email", 2 => "control-label label-lg"), "method"), "html", null, true);
        echo "
\t\t\t\t";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "txtEmail", 1 => "text", 2 => "form-control input-lg", 3 => $this->getAttribute((isset($context["dbUser"]) ? $context["dbUser"] : null), "email"), 4 => "Enter email address", 5 => "id_email", 6 => "required"), "method"), "html", null, true);
        echo "
\t\t\t</div>
\t\t\t<div  class=\"form-group has-success\">
\t\t\t\t";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array(0 => "Username | Must be unique and atleast 6 length", 1 => "id_user", 2 => "control-label"), "method"), "html", null, true);
        echo "
\t\t\t\t";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "txtUsername", 1 => "text", 2 => "form-control input-lg", 3 => $this->getAttribute((isset($context["dbUser"]) ? $context["dbUser"] : null), "username"), 4 => "Enter username", 5 => "id_user", 6 => "required"), "method"), "html", null, true);
        echo "
\t\t\t</div>
\t\t\t<div  class=\"form-group has-success\">
\t\t\t\t";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array(0 => "Password | Must be unique and atleast 6 length", 1 => "id_pass", 2 => "control-label"), "method"), "html", null, true);
        echo "
\t\t\t\t";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "txtPassword", 1 => "password", 2 => "form-control input-lg", 3 => "", 4 => "Enter password", 5 => "id_pass", 6 => (isset($context["required"]) ? $context["required"] : null)), "method"), "html", null, true);
        echo "
\t\t\t</div>
\t\t\t<div  class=\"form-group has-success\">
\t\t\t\t";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array(0 => "Confirm Password", 1 => "id_cpass", 2 => "control-label"), "method"), "html", null, true);
        echo "
\t\t\t\t";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "txtConfirmPass", 1 => "password", 2 => "form-control input-lg", 3 => "", 4 => "Enter confirm password", 5 => "id_cpass", 6 => (isset($context["required"]) ? $context["required"] : null)), "method"), "html", null, true);
        echo "
\t\t\t</div>
\t\t\t";
        // line 70
        echo "\t\t\t";
        if (((isset($context["hasActiveUser"]) ? $context["hasActiveUser"] : null) == true)) {
            // line 71
            echo "\t\t\t<div  class=\"form-group has-success\">
\t\t\t\t";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array(0 => "Confirm old Password", 1 => "id_oldcpass", 2 => "control-label"), "method"), "html", null, true);
            echo "
\t\t\t\t";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "txtOldConfirmPass", 1 => "password", 2 => "form-control input-lg", 3 => $this->getAttribute((isset($context["dbLoggedUser"]) ? $context["dbLoggedUser"] : null), "password"), 4 => "Confirm old password", 5 => "id_oldcpass", 6 => "required"), "method"), "html", null, true);
            echo "
\t\t\t</div>
\t\t\t";
        }
        // line 76
        echo "\t\t\t<div class=\"btn-input\">
\t\t\t\t<div  class=\"form-group has-success ";
        // line 77
        echo twig_escape_filter($this->env, (((($this->getAttribute((isset($context["lg"]) ? $context["lg"] : null), 1, array(), "array") . " ") . $this->getAttribute((isset($context["md"]) ? $context["md"] : null), 0, array(), "array")) . " ") . $this->getAttribute((isset($context["sm"]) ? $context["sm"] : null), 0, array(), "array")), "html", null, true);
        echo "\"></div>
\t\t\t\t";
        // line 78
        if ((null === (isset($context["hasActiveUser"]) ? $context["hasActiveUser"] : null))) {
            // line 79
            echo "\t\t\t\t<div  class=\"form-group has-success ";
            echo twig_escape_filter($this->env, (((($this->getAttribute((isset($context["lg"]) ? $context["lg"] : null), 3, array(), "array") . " ") . $this->getAttribute((isset($context["md"]) ? $context["md"] : null), 4, array(), "array")) . " ") . $this->getAttribute((isset($context["sm"]) ? $context["sm"] : null), 4, array(), "array")), "html", null, true);
            echo "\">
\t\t\t\t\t";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "btnSubmit", 1 => "submit", 2 => "btn btn-success form-control  input-lg", 3 => "Add User", 4 => "id_Submit"), "method"), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t\t<div  class=\"form-group has-success ";
            // line 82
            echo twig_escape_filter($this->env, (((($this->getAttribute((isset($context["lg"]) ? $context["lg"] : null), 3, array(), "array") . " ") . $this->getAttribute((isset($context["md"]) ? $context["md"] : null), 4, array(), "array")) . " ") . $this->getAttribute((isset($context["sm"]) ? $context["sm"] : null), 4, array(), "array")), "html", null, true);
            echo "\">
\t\t\t\t\t";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "btnReset", 1 => "reset", 2 => "btn btn-danger form-control  input-lg", 3 => "Reset", 4 => ""), "method"), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t\t";
        } else {
            // line 86
            echo "\t\t\t\t<div  class=\"form-group has-success ";
            echo twig_escape_filter($this->env, (((($this->getAttribute((isset($context["lg"]) ? $context["lg"] : null), 7, array(), "array") . " ") . $this->getAttribute((isset($context["md"]) ? $context["md"] : null), 8, array(), "array")) . " ") . $this->getAttribute((isset($context["sm"]) ? $context["sm"] : null), 8, array(), "array")), "html", null, true);
            echo "\">
\t\t\t\t\t";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "btnSubmit", 1 => "submit", 2 => "btn btn-success form-control  input-lg", 3 => "Save Changes", 4 => "id_Submit"), "method"), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 90
        echo "\t\t\t\t<div  class=\"form-group has-success ";
        echo twig_escape_filter($this->env, (((($this->getAttribute((isset($context["lg"]) ? $context["lg"] : null), 1, array(), "array") . " ") . $this->getAttribute((isset($context["md"]) ? $context["md"] : null), 0, array(), "array")) . " ") . $this->getAttribute((isset($context["sm"]) ? $context["sm"] : null), 0, array(), "array")), "html", null, true);
        echo "\"></div>
\t\t\t</div>
\t\t</form>
\t</div>
\t<div class=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lg"]) ? $context["lg"] : null), 1, array(), "array"), "html", null, true);
        echo "\"></div>
";
    }

    // line 97
    public function block_modal($context, array $blocks = array())
    {
        // line 98
        echo "\t";
        $this->displayParentBlock("modal", $context, $blocks);
        echo "
\t
";
    }

    public function getTemplateName()
    {
        return "user/new.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 98,  242 => 97,  236 => 94,  228 => 90,  222 => 87,  217 => 86,  211 => 83,  207 => 82,  202 => 80,  197 => 79,  195 => 78,  191 => 77,  188 => 76,  182 => 73,  178 => 72,  175 => 71,  172 => 70,  167 => 67,  163 => 66,  157 => 63,  153 => 62,  147 => 59,  143 => 58,  137 => 55,  133 => 54,  127 => 51,  123 => 50,  117 => 47,  113 => 46,  109 => 44,  102 => 39,  99 => 38,  97 => 37,  93 => 36,  84 => 31,  82 => 30,  76 => 27,  71 => 26,  68 => 25,  53 => 13,  50 => 12,  44 => 8,  39 => 7,  36 => 6,  30 => 3,);
    }
}
