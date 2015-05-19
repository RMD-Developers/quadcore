<?php

/* manual.htm */
class __TwigTemplate_fcede1295582cf63fadb3d4ea21e97109bd07e2bd5bec118d9dd2e0e3d8e04a2 extends Twig_Template
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
        echo "manual.js\"></script>
";
    }

    // line 12
    public function block_add_css($context, array $blocks = array())
    {
        // line 13
        echo "    <link rel=\"stylesheet\" type=\"text/less\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["PLUGIN"]) ? $context["PLUGIN"] : null), "html", null, true);
        echo "less/system/manual.less\" media=\"screen\"/>
";
    }

    // line 17
    public function block_main_content($context, array $blocks = array())
    {
        // line 18
        echo "\t";
        $this->env->loadTemplate("manual.htm", "1505467100")->display($context);
    }

    public function getTemplateName()
    {
        return "manual.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 18,  57 => 17,  50 => 13,  47 => 12,  40 => 8,  37 => 7,  31 => 4,  26 => 2,);
    }
}


/* manual.htm */
class __TwigTemplate_fcede1295582cf63fadb3d4ea21e97109bd07e2bd5bec118d9dd2e0e3d8e04a2_1505467100 extends Twig_Template
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
        echo "\t";
        ob_start();
        echo "<img src=\"";
        echo twig_escape_filter($this->env, (isset($context["IMG"]) ? $context["IMG"] : null), "html", null, true);
        echo "bgs/arrow_right.png\" />";
        $context["imgArrow"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 21
        echo "\t<div class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lg"]) ? $context["lg"] : null), 11, array(), "array"), "html", null, true);
        echo "\">
\t\t<div class=\"sect-edit-manual\">
\t\t\t<div class=\"main-title\">User Manual</div>
\t\t\t
\t\t\t<div class=\"inner-manual\" data-target=\"inner-target-manual\">
\t\t\t\t<ol>
\t\t\t\t\t<li><a href=\"JavaScript:void(0)\">How to add product</a></li>
\t\t\t\t\t<li><a href=\"JavaScript:void(0)\">How to edit product</a></li>
\t\t\t\t\t<li><a href=\"JavaScript:void(0)\">How to delete product(s)</a></li>
\t\t\t\t\t<li><a href=\"JavaScript:void(0)\">How to add package</a></li>
\t\t\t\t\t<li><a href=\"JavaScript:void(0)\">How to edit package</a></li>
\t\t\t\t\t<li><a href=\"JavaScript:void(0)\">How to delete package(s)</a></li>
\t\t\t\t</ol>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"inner-target-manual\">
\t\t\t\t<div class=\"content\">
\t\t\t\t\t<div class=\"title\">";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["imgArrow"]) ? $context["imgArrow"] : null), "html", null, true);
        echo " How to add product/s</div>
\t\t\t\t\t<div class=\"data\">
\t\t\t\t\t\t<p><span>STEP 1:</span> Click the Account Button on the menu bar</p>
\t\t\t\t\t\t<p><span>STEP 2:</span> Click the Product Settings Button</p>
\t\t\t\t\t\t<p><img src=\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["IMG"]) ? $context["IMG"] : null), "html", null, true);
        echo "profile/manual/prod_1.jpg\" /></p>
\t\t\t\t\t\t<p><span>STEP 3:</span> Click the Add Product Button</p>
\t\t\t\t\t\t<p><img src=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["IMG"]) ? $context["IMG"] : null), "html", null, true);
        echo "profile/manual/prod_2.jpg\" /></p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"content\">
\t\t\t\t\t<div class=\"title\">";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["imgArrow"]) ? $context["imgArrow"] : null), "html", null, true);
        echo " How to edit product/s</div>
\t\t\t\t\t<div class=\"data\">
\t\t\t\t\t\t<p><span>STEP 1:</span> Click the Account Button on the menu bar</p>
\t\t\t\t\t\t<p><span>STEP 2:</span> Click the Product Settings Button</p>
\t\t\t\t\t\t<p><img src=\"";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["IMG"]) ? $context["IMG"] : null), "html", null, true);
        echo "profile/manual/prod_1.jpg\" /></p>
\t\t\t\t\t\t<p><span>STEP 3:</span> Click the File Maintenance Button</p>
\t\t\t\t\t\t<p><img src=\"";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["IMG"]) ? $context["IMG"] : null), "html", null, true);
        echo "profile/manual/prod_3.jpg\" /></p>
\t\t\t\t\t\t<p><span>STEP 4:</span> You are you on the File Maintenance Page. In order to edit a product, click the edit button on the selected product</p>\t\t\t\t\t\t
\t\t\t\t\t\t<p><img src=\"";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["IMG"]) ? $context["IMG"] : null), "html", null, true);
        echo "profile/manual/prod_4.jpg\" /></p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"content\">
\t\t\t\t\t<div class=\"title\">";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["imgArrow"]) ? $context["imgArrow"] : null), "html", null, true);
        echo " How to delete product/s</div>
\t\t\t\t\t<div class=\"data\">
\t\t\t\t\t\t<p><span>STEP 1:</span> Click the Account Button on the menu bar</p>
\t\t\t\t\t\t<p><span>STEP 2:</span> Click the Product Settings Button</p>
\t\t\t\t\t\t<p><img src=\"";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["IMG"]) ? $context["IMG"] : null), "html", null, true);
        echo "profile/manual/prod_1.jpg\" /></p>
\t\t\t\t\t\t<p><span>STEP 3:</span> Click the File Maintenance Button</p>
\t\t\t\t\t\t<p><img src=\"";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["IMG"]) ? $context["IMG"] : null), "html", null, true);
        echo "profile/manual/prod_3.jpg\" /></p>
\t\t\t\t\t\t<p><span>STEP 4:</span> You are you on the File Maintenance Page. In order to delete a product, click the delete button on the selected product</p>\t\t\t\t\t\t
\t\t\t\t\t\t<p><img src=\"";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["IMG"]) ? $context["IMG"] : null), "html", null, true);
        echo "profile/manual/prod_5.jpg\" /></p>
\t\t\t\t\t\t<p>You may use the search box to minimize or find specific product(s) that you want to delete. If you want to delete multiple items, click the green circle on the left side of the product that you want to delete. You can also select all products by clicking thecircle on the label area or click the button and select \"Select All\".</p>
\t\t\t\t\t\t<p><img src=\"";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["IMG"]) ? $context["IMG"] : null), "html", null, true);
        echo "profile/manual/prod_6.jpg\" /></p>
\t\t\t\t\t\t<p>After selecting the product(s) that you want to delete, click the action button and select \"Delete Selected\".</p>
\t\t\t\t\t\t<p><img src=\"";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["IMG"]) ? $context["IMG"] : null), "html", null, true);
        echo "profile/manual/prod_7.jpg\" /></p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"content\">
\t\t\t\t\t<div class=\"title\">";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["imgArrow"]) ? $context["imgArrow"] : null), "html", null, true);
        echo " How to add package/s</div>
\t\t\t\t\t<div class=\"data\">
\t\t\t\t\t\t<p><span>STEP 1:</span> Click the Account Button on the menu bar</p>
\t\t\t\t\t\t<p><span>STEP 2:</span> Click the Package Settings Button</p>
\t\t\t\t\t\t<p><img src=\"";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["IMG"]) ? $context["IMG"] : null), "html", null, true);
        echo "profile/manual/package_1.jpg\" /></p>
\t\t\t\t\t\t<p><span>STEP 3:</span> Click the Add Package Button</p>
\t\t\t\t\t\t<p><img src=\"";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["IMG"]) ? $context["IMG"] : null), "html", null, true);
        echo "profile/manual/package_2.jpg\" /></p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"content\">
\t\t\t\t\t<div class=\"title\">";
        // line 90
        echo twig_escape_filter($this->env, (isset($context["imgArrow"]) ? $context["imgArrow"] : null), "html", null, true);
        echo " How to edit package/s</div>
\t\t\t\t\t<div class=\"data\">
\t\t\t\t\t\t<p><span>STEP 1:</span> Click the Account Button on the menu bar</p>
\t\t\t\t\t\t<p><span>STEP 2:</span> Click the Package Settings Button</p>
\t\t\t\t\t\t<p><img src=\"";
        // line 94
        echo twig_escape_filter($this->env, (isset($context["IMG"]) ? $context["IMG"] : null), "html", null, true);
        echo "profile/manual/package_1.jpg\" /></p>
\t\t\t\t\t\t<p><span>STEP 3:</span> Click the File Maintenance Button</p>
\t\t\t\t\t\t<p><img src=\"";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["IMG"]) ? $context["IMG"] : null), "html", null, true);
        echo "profile/manual/package_3.jpg\" /></p>
\t\t\t\t\t\t<p><span>STEP 4:</span> You are you on the File Maintenance Page. In order to edit a package, click the edit button on the selected package</p>
\t\t\t\t\t\t<p><img src=\"";
        // line 98
        echo twig_escape_filter($this->env, (isset($context["IMG"]) ? $context["IMG"] : null), "html", null, true);
        echo "profile/manual/package_4.jpg\" /></p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"content\">
\t\t\t\t\t<div class=\"title\">";
        // line 103
        echo twig_escape_filter($this->env, (isset($context["imgArrow"]) ? $context["imgArrow"] : null), "html", null, true);
        echo " How to delete package/s</div>
\t\t\t\t\t<div class=\"data\">
\t\t\t\t\t\t<p><span>STEP 1:</span> Click the Account Button on the menu bar</p>
\t\t\t\t\t\t<p><span>STEP 2:</span> Click the Package Settings Button</p>
\t\t\t\t\t\t<p><img src=\"";
        // line 107
        echo twig_escape_filter($this->env, (isset($context["IMG"]) ? $context["IMG"] : null), "html", null, true);
        echo "profile/manual/package_1.jpg\" /></p>
\t\t\t\t\t\t<p><span>STEP 3:</span> Click the File Maintenance Button</p>
\t\t\t\t\t\t<p><img src=\"";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["IMG"]) ? $context["IMG"] : null), "html", null, true);
        echo "profile/manual/package_3.jpg\" /></p>
\t\t\t\t\t\t<p><span>STEP 4:</span> You are you on the File Maintenance Page. In order to edit a product, click the delete button on the selected product</p>
\t\t\t\t\t\t<p><img src=\"";
        // line 111
        echo twig_escape_filter($this->env, (isset($context["IMG"]) ? $context["IMG"] : null), "html", null, true);
        echo "profile/manual/package_5.jpg\" /></p>
\t\t\t\t\t\t<p>You may use the search box to minimize or find specific package(s) that you want to delete. If you want to delete multiple items, click the green circle on the left side of the package that you want to delete. You can also select all packages by clicking the circle on the label area or click the button and select \"Select All\".</p>
\t\t\t\t\t\t<p><img src=\"";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["IMG"]) ? $context["IMG"] : null), "html", null, true);
        echo "profile/manual/package_6.jpg\" /></p>
\t\t\t\t\t\t<p>After selecting the package(s) that you want to delete, click the action button and select \"Delete Selected\".</p>
\t\t\t\t\t\t<p><img src=\"";
        // line 115
        echo twig_escape_filter($this->env, (isset($context["IMG"]) ? $context["IMG"] : null), "html", null, true);
        echo "profile/manual/package_7.jpg\" /></p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"scroller\"><a href=\"JavaScript:void(0)\"></a></div>
\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "manual.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 115,  284 => 113,  279 => 111,  274 => 109,  269 => 107,  262 => 103,  254 => 98,  249 => 96,  244 => 94,  237 => 90,  229 => 85,  224 => 83,  217 => 79,  209 => 74,  204 => 72,  199 => 70,  194 => 68,  189 => 66,  182 => 62,  174 => 57,  169 => 55,  164 => 53,  157 => 49,  149 => 44,  144 => 42,  137 => 38,  116 => 21,  109 => 20,  106 => 19,  60 => 18,  57 => 17,  50 => 13,  47 => 12,  40 => 8,  37 => 7,  31 => 4,  26 => 2,);
    }
}
