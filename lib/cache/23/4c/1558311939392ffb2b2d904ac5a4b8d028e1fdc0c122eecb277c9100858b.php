<?php

/* _config/_global_block.htm */
class __TwigTemplate_234c1558311939392ffb2b2d904ac5a4b8d028e1fdc0c122eecb277c9100858b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'modal' => array($this, 'block_modal'),
            'side_bar' => array($this, 'block_side_bar'),
            'footer' => array($this, 'block_footer'),
            'mackfooter' => array($this, 'block_mackfooter'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->displayBlock('modal', $context, $blocks);
        // line 56
        echo "
";
        // line 58
        $this->displayBlock('side_bar', $context, $blocks);
        // line 107
        echo "
";
        // line 109
        $this->displayBlock('footer', $context, $blocks);
        // line 156
        echo "
";
        // line 157
        $this->displayBlock('mackfooter', $context, $blocks);
    }

    // line 2
    public function block_modal($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"sect-form-login modal-data\">
\t\t<form class=\"form frmLogin\" action=\"\" method=\"POST\" onsubmit=\"return \$.runLogin()\">
\t\t\t<div  class=\"form-group has-success\">
\t\t\t\t";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array(0 => "Username or email", 1 => "id_username", 2 => "control-label"), "method"), "html", null, true);
        echo "
\t\t\t\t";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "txtUsername", 1 => "text", 2 => "form-control", 3 => "", 4 => "Enter username or email", 5 => "id_username", 6 => "required"), "method"), "html", null, true);
        echo "
\t\t\t</div>
\t\t\t<div  class=\"form-group has-success\">
\t\t\t\t";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array(0 => "Password", 1 => "id_password", 2 => "control-label"), "method"), "html", null, true);
        echo "
\t\t\t\t";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "txtPassword", 1 => "password", 2 => "form-control", 3 => "", 4 => "Enter password", 5 => "id_password", 6 => "required"), "method"), "html", null, true);
        echo "
\t\t\t</div>
\t\t\t<input type=\"submit\" id=\"id_btnSubmitLogin\" style=\"display:none; position:absolute;\" />
\t\t</form>
\t</div>";
        // line 18
        echo "<div class=\"panel-user-box modal-data\">
\t\t<div class=\"inner-panel-box\">
\t\t\t<div class=\"inner-top-box\">Hi <span>";
        // line 20
        if (($this->getAttribute((isset($context["dbLoggedUser"]) ? $context["dbLoggedUser"] : null), "userlevel") == 1)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dbLoggedUser"]) ? $context["dbLoggedUser"] : null), "fname"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dbLoggedUser"]) ? $context["dbLoggedUser"] : null), "lname"), "html", null, true);
            echo "
\t\t\t\t";
        } else {
            // line 21
            echo " ADMIN ";
        }
        echo "</span></div>
\t\t\t<div class=\"inner-middle-box\" align=center>
\t\t\t\t<div class=\"apps top-apps\">
\t\t\t\t\t";
        // line 24
        if (($this->getAttribute((isset($context["dbLoggedUser"]) ? $context["dbLoggedUser"] : null), "userlevel") == 0)) {
            echo "<a href=\"\" title=\"User Settings\" target=\"user\" class=\"active\"><img src=\"";
            echo twig_escape_filter($this->env, (isset($context["IMG"]) ? $context["IMG"] : null), "html", null, true);
            echo "icons/panel/account_functions.png\" /></a>";
        }
        // line 25
        echo "\t\t\t\t\t<a href=\"\" title=\"Product Settings\" class=\"";
        if (($this->getAttribute((isset($context["dbLoggedUser"]) ? $context["dbLoggedUser"] : null), "userlevel") != 0)) {
            echo "active";
        }
        echo "\" target=\"prod\"><img src=\"";
        echo twig_escape_filter($this->env, (isset($context["IMG"]) ? $context["IMG"] : null), "html", null, true);
        echo "icons/panel/product-settings.png\" /></a>
\t\t\t\t\t<a href=\"\" title=\"Package Settings\" target=\"package\"><img src=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["IMG"]) ? $context["IMG"] : null), "html", null, true);
        echo "icons/panel/package-setting.png\" /></a>
\t\t\t\t\t<a href=\"\" title=\"System Settings\" target=\"setting\"><img src=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["IMG"]) ? $context["IMG"] : null), "html", null, true);
        echo "icons/panel/system-settings-icon.png\" /></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"divider\"></div>
\t\t\t\t";
        // line 30
        if (($this->getAttribute((isset($context["dbLoggedUser"]) ? $context["dbLoggedUser"] : null), "userlevel") == 0)) {
            // line 31
            echo "\t\t\t\t<div class=\"user bottom-apps apps active\">
\t\t\t\t\t<a href=\"";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["URL"]) ? $context["URL"] : null), "html", null, true);
            echo "user/new\"><img src=\"";
            echo twig_escape_filter($this->env, (isset($context["IMG"]) ? $context["IMG"] : null), "html", null, true);
            echo "icons/panel/group_add.png\" /> &nbsp;ADD USER</a>
\t\t\t\t\t<a href=\"";
            // line 33
            echo twig_escape_filter($this->env, (isset($context["URL"]) ? $context["URL"] : null), "html", null, true);
            echo "user/edit\"><img src=\"";
            echo twig_escape_filter($this->env, (isset($context["IMG"]) ? $context["IMG"] : null), "html", null, true);
            echo "icons/panel/group_edit.png\" /> EDIT USER</a>
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 36
        echo "\t\t\t\t<div class=\"prod bottom-apps apps ";
        if (($this->getAttribute((isset($context["dbLoggedUser"]) ? $context["dbLoggedUser"] : null), "userlevel") != 0)) {
            echo "active";
        }
        echo "\">
\t\t\t\t\t<a href=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["URL"]) ? $context["URL"] : null), "html", null, true);
        echo "product/new\"><img src=\"";
        echo twig_escape_filter($this->env, (isset($context["IMG"]) ? $context["IMG"] : null), "html", null, true);
        echo "icons/panel/camera_add.png\" /> ADD PRODUCT</a>
\t\t\t\t\t<a href=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["URL"]) ? $context["URL"] : null), "html", null, true);
        echo "product/edit\"><img src=\"";
        echo twig_escape_filter($this->env, (isset($context["IMG"]) ? $context["IMG"] : null), "html", null, true);
        echo "icons/panel/camera_edit.png\" /> FILE MAINTENANCE</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"package bottom-apps apps\">
\t\t\t\t\t<a href=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["URL"]) ? $context["URL"] : null), "html", null, true);
        echo "package/new\"><img src=\"";
        echo twig_escape_filter($this->env, (isset($context["IMG"]) ? $context["IMG"] : null), "html", null, true);
        echo "icons/panel/add_package.png\" /> ADD PACKAGE</a>
\t\t\t\t\t<a href=\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["URL"]) ? $context["URL"] : null), "html", null, true);
        echo "package/edit\"><img src=\"";
        echo twig_escape_filter($this->env, (isset($context["IMG"]) ? $context["IMG"] : null), "html", null, true);
        echo "icons/panel/edit_package.png\" /> FILE MAINTENANCE</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"setting bottom-apps apps\">
\t\t\t\t\t<a href=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["URL"]) ? $context["URL"] : null), "html", null, true);
        echo "manual\"><img src=\"";
        echo twig_escape_filter($this->env, (isset($context["IMG"]) ? $context["IMG"] : null), "html", null, true);
        echo "icons/panel/help.png\" /> USER MANUAL</a>
\t\t\t\t\t<a href=\"";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["URL"]) ? $context["URL"] : null), "html", null, true);
        echo "product\"><img src=\"";
        echo twig_escape_filter($this->env, (isset($context["IMG"]) ? $context["IMG"] : null), "html", null, true);
        echo "icons/panel/document_prepare.png\" /> EDIT CONTENTS</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"inner-bottom-box\">
\t\t\t\t<a href=\"JavaScript:\$.logoutConfirm()\">Log out</a>
\t\t\t\t<a href=\"";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["URL"]) ? $context["URL"] : null), "html", null, true);
        echo "user/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dbLoggedUser"]) ? $context["dbLoggedUser"] : null), "user_id"), "html", null, true);
        echo "?edit\">Edit Account</a>
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    // line 58
    public function block_side_bar($context, array $blocks = array())
    {
        // line 59
        echo "<div class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lg"]) ? $context["lg"] : null), 11, array(), "array"), "html", null, true);
        echo " sidebar-new-section\">
\t\t<div class=\"panel panel-success\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\">What's <font color=\"red\">NEW</font></h3>
\t\t\t</div>\t
\t\t\t<div class=\"panel-body\">
\t\t\t\t<div class=\"slider-section\">
\t\t\t\t\t<div class=\"contents\">
\t\t\t\t\t\t<p><a href=\"";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["URL"]) ? $context["URL"] : null), "html", null, true);
        echo "package/?view=home\"><img src=\"";
        echo twig_escape_filter($this->env, (isset($context["IMG"]) ? $context["IMG"] : null), "html", null, true);
        echo "profile/slider-package/home.jpg\" /></a></p>
\t\t\t\t\t\t<p><a href=\"";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["URL"]) ? $context["URL"] : null), "html", null, true);
        echo "package/?view=small\"><img src=\"";
        echo twig_escape_filter($this->env, (isset($context["IMG"]) ? $context["IMG"] : null), "html", null, true);
        echo "profile/slider-package/small.jpg\" /></a></p>
\t\t\t\t\t\t<p><a href=\"";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["URL"]) ? $context["URL"] : null), "html", null, true);
        echo "package/?view=home\"><img src=\"";
        echo twig_escape_filter($this->env, (isset($context["IMG"]) ? $context["IMG"] : null), "html", null, true);
        echo "profile/slider-package/home.jpg\" /></a></p>
\t\t\t\t\t\t<p><a href=\"";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["URL"]) ? $context["URL"] : null), "html", null, true);
        echo "package/?view=small\"><img src=\"";
        echo twig_escape_filter($this->env, (isset($context["IMG"]) ? $context["IMG"] : null), "html", null, true);
        echo "profile/slider-package/small.jpg\" /></a></p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"page\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
</div>
<div class=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lg"]) ? $context["lg"] : null), 11, array(), "array"), "html", null, true);
        echo "  sidebar-packages-section\">
\t\t<div class=\"panel panel-success\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\">Our Packages</h3>
\t\t\t</div>\t
\t\t\t<div class=\"panel-body\">
\t\t\t\t<div class=\"slider-section\">
\t\t\t\t\t<div class=\"contents\">
\t\t\t\t\t\t<p><a href=\"";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["URL"]) ? $context["URL"] : null), "html", null, true);
        echo "package/?view=home\"><img src=\"";
        echo twig_escape_filter($this->env, (isset($context["IMG"]) ? $context["IMG"] : null), "html", null, true);
        echo "profile/slider-package/home.jpg\" /></a></p>
\t\t\t\t\t\t<p><a href=\"";
        // line 87
        echo twig_escape_filter($this->env, (isset($context["URL"]) ? $context["URL"] : null), "html", null, true);
        echo "package/?view=small\"><img src=\"";
        echo twig_escape_filter($this->env, (isset($context["IMG"]) ? $context["IMG"] : null), "html", null, true);
        echo "profile/slider-package/small.jpg\" /></a></p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"page\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
</div>
<div class=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lg"]) ? $context["lg"] : null), 11, array(), "array"), "html", null, true);
        echo "  sidebar-ads-section\">
\t\t<div class=\"panel panel-success\">
\t\t\t<div class=\"panel-body\">
\t\t\t\t<div class=\"slider-section\">
\t\t\t\t\t<div class=\"contents\">
\t\t\t\t\t\tPost your Ads Here...
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"page\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
</div>
";
    }

    // line 109
    public function block_footer($context, array $blocks = array())
    {
        // line 110
        echo "<div class=\"sect-content-layout\">
\t<div class=\"sect-content-layout-row\">
\t\t<div class=\"sect-layout-cell layout-item-0\" width=\"100%\">
\t\t\t<div class=\"row footer-contents clearfix\">
\t\t\t\t<div class=\"";
        // line 114
        echo twig_escape_filter($this->env, (((((($this->getAttribute((isset($context["lg"]) ? $context["lg"] : null), 3, array(), "array") . " ") . $this->getAttribute((isset($context["md"]) ? $context["md"] : null), 3, array(), "array")) . " ") . $this->getAttribute((isset($context["sm"]) ? $context["sm"] : null), 5, array(), "array")) . " ") . $this->getAttribute((isset($context["xs"]) ? $context["xs"] : null), 11, array(), "array")), "html", null, true);
        echo " column\">
\t\t\t\t\t<div class=\"title\">OVERVIEW</div>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"\">Company</a></li>
\t\t\t\t\t\t<li><a href=\"\">About</a></li>
\t\t\t\t\t\t<li><a href=\"\">Mission and Vision</a></li>
\t\t\t\t\t\t<li><a href=\"\">Packages</a></li>
\t\t\t\t\t\t<li><a href=\"\">Product and Services</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"";
        // line 124
        echo twig_escape_filter($this->env, (((((($this->getAttribute((isset($context["lg"]) ? $context["lg"] : null), 3, array(), "array") . " ") . $this->getAttribute((isset($context["md"]) ? $context["md"] : null), 3, array(), "array")) . " ") . $this->getAttribute((isset($context["sm"]) ? $context["sm"] : null), 5, array(), "array")) . " ") . $this->getAttribute((isset($context["xs"]) ? $context["xs"] : null), 11, array(), "array")), "html", null, true);
        echo " column\">
\t\t\t\t\t<div class=\"title\">Keep in touch.</div>
\t\t\t\t\t<div class=\"social\">
\t\t\t\t\t<a href=\"\">FACEBOOK</a>
\t\t\t\t\t<a href=\"\">TWITTER</a>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"";
        // line 132
        echo twig_escape_filter($this->env, (((((($this->getAttribute((isset($context["lg"]) ? $context["lg"] : null), 3, array(), "array") . " ") . $this->getAttribute((isset($context["md"]) ? $context["md"] : null), 3, array(), "array")) . " ") . $this->getAttribute((isset($context["sm"]) ? $context["sm"] : null), 5, array(), "array")) . " ") . $this->getAttribute((isset($context["xs"]) ? $context["xs"] : null), 11, array(), "array")), "html", null, true);
        echo " column\">
\t\t\t\t\t<div class=\"title\">Contact Us</div>
\t\t\t\t\t<p>Quadcore Solutions Inc.</p>
\t\t\t\t\t<p><b>Ph 4A, B43 L25, Tierra Monte Subd.
\t\t\t\t\tBrgy. Silangan San Mateo Rizal</b></p>

\t\t\t\t\t<p>Tel. no.: <i>697-82-36</i></p>
\t\t\t\t\t<p>Email: <i>quadcoresolutions@yahoo.com</i></p>
\t\t\t\t\t<p>Mobile nos.: <i>0906.449.6795 | 0942.481.9698</i></p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"auto-style1\">
\t\t\t\t<div class=\"copy-right\">
\t\t\t\t\tCopyright &copy; 2014 <a href=\"\"><img src=\"";
        // line 146
        echo twig_escape_filter($this->env, (isset($context["IMG"]) ? $context["IMG"] : null), "html", null, true);
        echo "icons/nav/home.png\" alt=\"\" title=\"\" height=\"16px\" width=\"16px\" /></a>&nbsp;All rights reserved.
\t\t\t\t</div>
\t\t\t\t<div class=\"auto-style3\" >
\t\t\t\t\t<span class=\"auto-style5\">Designed and Developed by</span>
\t\t\t\t\t<span class=\"auto-style4\"><strong> RMD</strong></span></div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
    }

    // line 157
    public function block_mackfooter($context, array $blocks = array())
    {
        // line 158
        echo "<div class=\"section_w210 margin_r_20\">

            <div class=\"h3_01\"><h3>Partners</h3></div>

            <div class=\"sub_content\">

                <ul class=\"footer_list\">
                    <li><a href=\"#\" rel=\"nofollow\" target=\"_parent\">Company Inc.</a></li>
                    <li><a href=\"#\" target=\"_parent\">RMD Inc.</a></li>
                    <li><a href=\"#\" target=\"_blank\">Denmark Corp.</a></li>
                    <li><a href=\"#\" target=\"_blank\">MONsters Inc.</a></li>
                </ul>

            </div>

        </div>

        <div class=\"section_w210 margin_r_20\">

            <div class=\"h3_02\">
              <h3>About Us</h3>
            </div>

            <div class=\"sub_content\">

                <ul class=\"footer_list\">
                \t<li><a href=\"#\">Lorem ipsum dolor</a></li>
                    <li><a href=\"#\">Cum sociis</a></li>
                    <li><a href=\"#\">Donec quam</a></li>
                    <li><a href=\"#\">Nulla consequat</a></li>
                    <li><a href=\"#\">In enim justo</a></li>
                </ul>

            </div>

        </div>

        <div class=\"section_w210 margin_r_20\">

            <div class=\"h3_03\"><h3>Customer Care</h3></div>

            <div class=\"sub_content\">

            \t<ul class=\"footer_list\">

                    <li><a href=\"#\">Aenean vulputate</a></li>
                    <li><a href=\"#\">Etiam ultricies</a></li>
                    <li><a href=\"#\">Nullam quis</a></li>
                    <li><a href=\"#\">Sed consequat</a></li>
                    <li><a href=\"#\">Cras dapibus</a></li>
        \t\t</ul>
            </div>

        </div>

        <div class=\"section_w210\">

            <div class=\"h3_04\"><h3>Privacy Policy</h3></div>

            <div class=\"sub_content\">
            \t<p>Nullam ultrices tempor nisi, ac egestas diam aliquam a. Ut eleifend semper turpis, id feugiat arcu dignissim eu. Donec mattis adipiscing imperdiet.</p>
            </div>

        </div>

        <div class=\"cleaner_h40\"></div>

        <center>
        \tCopyright © 2014 <a href=\"#\">Q<span class=\"auto-style1\">uadcore 
\t\t\tSolutions Incorporated</span></a>.</center>

";
    }

    public function getTemplateName()
    {
        return "_config/_global_block.htm";
    }

    public function getDebugInfo()
    {
        return array (  356 => 158,  353 => 157,  339 => 146,  322 => 132,  311 => 124,  298 => 114,  292 => 110,  289 => 109,  272 => 94,  260 => 87,  254 => 86,  243 => 78,  230 => 70,  224 => 69,  218 => 68,  212 => 67,  200 => 59,  197 => 58,  186 => 51,  176 => 46,  170 => 45,  162 => 42,  156 => 41,  148 => 38,  142 => 37,  135 => 36,  127 => 33,  121 => 32,  118 => 31,  116 => 30,  110 => 27,  106 => 26,  97 => 25,  91 => 24,  84 => 21,  75 => 20,  71 => 18,  64 => 12,  60 => 11,  50 => 7,  38 => 157,  35 => 156,  33 => 109,  30 => 107,  28 => 58,  25 => 56,  23 => 2,  288 => 198,  276 => 189,  190 => 105,  187 => 104,  175 => 100,  169 => 99,  165 => 97,  160 => 96,  158 => 95,  124 => 64,  82 => 25,  78 => 24,  74 => 23,  70 => 22,  66 => 21,  57 => 14,  54 => 8,  51 => 10,  48 => 9,  45 => 4,  42 => 2,  39 => 6,  36 => 5,  34 => 2,  31 => 1,  14 => 13,);
    }
}
