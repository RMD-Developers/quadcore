<?php

/* package/index.htm */
class __TwigTemplate_c0d00c86793a5fd1e42a633c4ea8e9527e61d51687f1fd1fcd72e9e8489dc823 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'metadata' => array($this, 'block_metadata'),
            'top_js' => array($this, 'block_top_js'),
            'add_js' => array($this, 'block_add_js'),
            'add_css' => array($this, 'block_add_css'),
            'main_content' => array($this, 'block_main_content'),
            'side_bar' => array($this, 'block_side_bar'),
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
        echo "Package | ";
    }

    // line 7
    public function block_metadata($context, array $blocks = array())
    {
        // line 8
        $this->displayParentBlock("metadata", $context, $blocks);
        echo "
";
        // line 9
        if (((isset($context["hasActivePackage"]) ? $context["hasActivePackage"] : null) == true)) {
            // line 10
            echo "\t<meta name=\"keywords\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dbPackage"]) ? $context["dbPackage"] : null), "package_desc"), "html", null, true);
            echo ", SMALL BUSINESS PACKAGE, HOME PACKAGE, QUADCORE PACKAGE\">
\t<meta name=\"keyphrases\" content=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dbPackage"]) ? $context["dbPackage"] : null), "package_desc"), "html", null, true);
            echo ", SMALL BUSINESS PACKAGE, HOME PACKAGE, QUADCORE PACKAGE\">
\t<meta name=\"description\" content=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dbPackage"]) ? $context["dbPackage"] : null), "package_desc"), "html", null, true);
            echo ", SMALL BUSINESS PACKAGE, HOME PACKAGE, QUADCORE PACKAGE\">
\t<meta name=\"topic\" content=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dbPackage"]) ? $context["dbPackage"] : null), "package_desc"), "html", null, true);
            echo ", SMALL BUSINESS PACKAGE, HOME PACKAGE, QUADCORE PACKAGE\">
\t<meta name=\"summary\" CONTENT=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dbPackage"]) ? $context["dbPackage"] : null), "package_desc"), "html", null, true);
            echo ", SMALL BUSINESS PACKAGE, HOME PACKAGE, QUADCORE PACKAGE\">
\t<meta name=URL content=\"";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["URL"]) ? $context["URL"] : null), "html", null, true);
            echo "package/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dbPackage"]) ? $context["dbPackage"] : null), "package_id"), "html", null, true);
            echo ">
\t<meta name=\"identifier-URL\" content=\"";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["URL"]) ? $context["URL"] : null), "html", null, true);
            echo "\">
";
        } else {
            // line 18
            echo "\t<meta name=\"keywords\" content=\"CCTV, DVR, Quadcore Solutions Incorporated\">
\t<meta name=\"keyphrases\" content=\"CCTV, DVR, Quadcore Solutions Incorporated\">
\t<meta name=\"description\" content=\"Product list of Quadcore Solutions Incorporated.\">
\t<meta name=\"topic\" content=\"Product of Quadcore Solutions Incorporated.\">
\t<meta name=\"summary\" CONTENT=\"Contains list of products with descriptions that is supplied by Quadcore Solutions Incorporated.\">
\t<meta name=URL content=\"";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["URL"]) ? $context["URL"] : null), "html", null, true);
            echo "product\">
\t<meta name=\"identifier-URL\" content=\"";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["URL"]) ? $context["URL"] : null), "html", null, true);
            echo "\">
";
        }
    }

    // line 29
    public function block_top_js($context, array $blocks = array())
    {
    }

    // line 32
    public function block_add_js($context, array $blocks = array())
    {
        // line 33
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, (isset($context["JS"]) ? $context["JS"] : null), "html", null, true);
        echo "package/pa_index.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["JS"]) ? $context["JS"] : null), "html", null, true);
        echo "zoome-e.js\"></script>
";
    }

    // line 38
    public function block_add_css($context, array $blocks = array())
    {
        // line 39
        echo "\t<link rel=\"stylesheet/less\" type=\"text/less\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["PLUGIN"]) ? $context["PLUGIN"] : null), "html", null, true);
        echo "less/system/package/index.less\"/>
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["CSS"]) ? $context["CSS"] : null), "html", null, true);
        echo "zoome-min.css\"/>
";
    }

    // line 44
    public function block_main_content($context, array $blocks = array())
    {
        // line 45
        $this->env->loadTemplate("package/index.htm", "1663181219")->display($context);
    }

    // line 124
    public function block_side_bar($context, array $blocks = array())
    {
        // line 125
        $this->env->loadTemplate("package/index.htm", "1990962771")->display($context);
        // line 147
        echo "
";
        // line 148
        $this->displayParentBlock("side_bar", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "package/index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 148,  144 => 147,  142 => 125,  139 => 124,  135 => 45,  132 => 44,  126 => 40,  121 => 39,  118 => 38,  112 => 34,  107 => 33,  104 => 32,  99 => 29,  92 => 24,  88 => 23,  81 => 18,  76 => 16,  70 => 15,  66 => 14,  62 => 13,  58 => 12,  54 => 11,  49 => 10,  47 => 9,  43 => 8,  40 => 7,  34 => 4,  29 => 2,);
    }
}


/* package/index.htm */
class __TwigTemplate_c0d00c86793a5fd1e42a633c4ea8e9527e61d51687f1fd1fcd72e9e8489dc823_1663181219 extends Twig_Template
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

    // line 46
    public function block_column1($context, array $blocks = array())
    {
        // line 47
        echo "\t<div class=\"search-section\">
\t\t<nav class=\"navbar navbar-default\" role=\"navigation\">
\t\t<div class=\"navbar-header\">
\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
\t\t\t  <span class=\"sr-only\">Toggle navigation</span>
\t\t\t  <span class=\"icon-bar\"></span>
\t\t\t  <span class=\"icon-bar\"></span>
\t\t\t  <span class=\"icon-bar\"></span>
\t\t\t</button>
\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["URL"]) ? $context["URL"] : null), "html", null, true);
        echo "package\">PACKAGES</a>
\t\t</div>

\t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t  <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
\t\t\t<form class=\"navbar-form navbar-left\" role=\"search\" method=\"get\" action=\"";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["URL"]) ? $context["URL"] : null), "html", null, true);
        echo "package/\" data-query=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('utility')->getURLvar("str"), "html", null, true);
        echo "\">
\t\t\t  <div class=\"form-group\" style=\"margin-right:10px;\">
\t\t\t  
\t\t\t\t<input type=\"hidden\" class=\"hidden-input\"  value=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('utility')->getURLvar("view"), "html", null, true);
        echo "\" cur-page=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('utility')->getURLvar("page"), "html", null, true);
        echo "\" name=\"view\" />
\t\t\t\t<input type=\"hidden\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('utility')->getURLvar("order"), "html", null, true);
        echo "\" name=\"order\" />
\t\t\t\t
\t\t\t\t<input type=\"text\" class=\"form-control\" style=\"margin-right:200px; \"  name=\"str\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('utility')->getURLvar("str"), "html", null, true);
        echo "\" placeholder=\"Search Package\">
\t\t\t  </div>
\t\t\t  <input type=\"submit\" value=\"Search\" name=\"searchPackage\" class=\"btn btn-default\" style=\"margin-right:10px\" />
\t\t\t</form>
\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t  <li class=\"dropdown\">
\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><label>Sort List</label>&nbsp;&nbsp;&nbsp;<b class=\"caret\"></b></a>
\t\t\t\t<ul class=\"dropdown-menu stopPropagation sort-menu\">
\t\t\t\t  <li><a href=\"JavaScript:void(0)\"><input type='checkbox' ";
        // line 75
        if (((($this->env->getExtension('utility')->getURLvar("order") == "DESC") || (null === $this->env->getExtension('utility')->getURLvar("order"))) || ($this->env->getExtension('utility')->getURLvar("order") == ""))) {
            echo "checked";
        }
        echo " name='sort' id='sort-1' value='DESC'><label for='sort-1'><span></span></label> <label for='sort-1'>Newest</label></a></li>
\t\t\t\t  <li><a href=\"JavaScript:void(0)\"><input type='checkbox' ";
        // line 76
        if (($this->env->getExtension('utility')->getURLvar("order") == "ASC")) {
            echo "checked";
        }
        echo " name='sort' id='sort-2' value='ASC'><label for='sort-2'><span></span></label> <label for='sort-2'>Latest</label></a></li>
\t\t\t\t</ul>
\t\t\t  </li>
\t\t\t</ul>
\t\t  </div><!-- /.navbar-collapse -->
\t\t</nav>
\t</div>
\t
\t
\t<div class=\"package-list\">
\t\t";
        // line 86
        if ((isset($context["hasActivePackage"]) ? $context["hasActivePackage"] : null)) {
            // line 87
            echo "\t\t\t<div class=\"active-row clearfix\">
\t\t\t\t<div class=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lg"]) ? $context["lg"] : null), 11, array(), "array"), "html", null, true);
            echo "\">
\t\t\t\t\t<div class=\"profile\">
\t\t\t\t\t\t<img src=\"";
            // line 90
            echo twig_escape_filter($this->env, (isset($context["IMG"]) ? $context["IMG"] : null), "html", null, true);
            echo "profile/package/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dbPackage"]) ? $context["dbPackage"] : null), "package_id"), "html", null, true);
            echo ".jpg\" class=\"active-profile\" />
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<p class=\"price\">Price: <span>Php ";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dbPackage"]) ? $context["dbPackage"] : null), "package_price"), "html", null, true);
            echo "</span></p>
\t\t\t\t\t\t<h3>";
            // line 94
            if (($this->getAttribute((isset($context["dbPackage"]) ? $context["dbPackage"] : null), "package_cat") == "home")) {
                echo "Home Package";
            } else {
                echo "Small Business Package";
            }
            echo "</h3>
\t\t\t\t\t\t<h4>";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dbPackage"]) ? $context["dbPackage"] : null), "package_desc"), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t<div class=\"inc\">
\t\t\t\t\t\t\t<p class=\"inc\">Includes: </p>
\t\t\t\t\t\t\t<ul>";
            // line 98
            $context["content"] = twig_split_filter($this->getAttribute((isset($context["dbPackage"]) ? $context["dbPackage"] : null), "prod_inc"), "<br>");
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["content"]) ? $context["content"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                echo "<li><img src=\"";
                echo twig_escape_filter($this->env, (isset($context["IMG"]) ? $context["IMG"] : null), "html", null, true);
                echo "bgs/arrow_right.png\" />";
                echo twig_escape_filter($this->env, (isset($context["val"]) ? $context["val"] : null), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 104
        echo "\t\t
\t\t<div class=\"no-result\">
\t\t\t<div class=\"inner\">No found available packages in our database.</div>
\t\t</div>
\t\t
\t\t
\t\t<div class=\"row\">
\t\t</div>
\t\t
\t\t
\t\t<div class=\"row package-section-pages\">
\t\t\t<div class=\"pages-div\"></div>
\t\t</div>
\t</div>
\t
\t";
    }

    public function getTemplateName()
    {
        return "package/index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 104,  303 => 98,  297 => 95,  289 => 94,  285 => 93,  277 => 90,  272 => 88,  269 => 87,  267 => 86,  252 => 76,  246 => 75,  235 => 67,  230 => 65,  224 => 64,  216 => 61,  208 => 56,  197 => 47,  194 => 46,  147 => 148,  144 => 147,  142 => 125,  139 => 124,  135 => 45,  132 => 44,  126 => 40,  121 => 39,  118 => 38,  112 => 34,  107 => 33,  104 => 32,  99 => 29,  92 => 24,  88 => 23,  81 => 18,  76 => 16,  70 => 15,  66 => 14,  62 => 13,  58 => 12,  54 => 11,  49 => 10,  47 => 9,  43 => 8,  40 => 7,  34 => 4,  29 => 2,);
    }
}


/* package/index.htm */
class __TwigTemplate_c0d00c86793a5fd1e42a633c4ea8e9527e61d51687f1fd1fcd72e9e8489dc823_1990962771 extends Twig_Template
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

    // line 126
    public function block_column1($context, array $blocks = array())
    {
        // line 127
        echo "\t\t<div class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lg"]) ? $context["lg"] : null), 11, array(), "array"), "html", null, true);
        echo " category-section\">
\t\t<div class=\"panel panel-success\">
\t\t\t<div class=\"panel-body\">
\t\t\t<form class=\"form\" method=\"POST\" onsubmit=\"\$.runSubmitForm(); \$.runScrollerHide(); return false;\" role=\"form\">
\t\t\t\t<div class=\"select-form\">
\t\t\t\t\t<label><center>CATEGORY</center></label>
\t\t\t\t\t<div  class=\"form-group section-form section-form-category\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<ul><li><a href=\"";
        // line 135
        echo twig_escape_filter($this->env, (isset($context["URL"]) ? $context["URL"] : null), "html", null, true);
        echo "package/\" class=\"";
        if (((null === $this->env->getExtension('utility')->getURLvar("view")) || ($this->env->getExtension('utility')->getURLvar("view") == ""))) {
            echo "active";
        }
        echo "\" > <span></span> All Packages</a></li>
\t\t\t\t\t\t\t<ul><li><a href=\"";
        // line 136
        echo twig_escape_filter($this->env, (isset($context["URL"]) ? $context["URL"] : null), "html", null, true);
        echo "package/?view=home\" class=\"";
        if (($this->env->getExtension('utility')->getURLvar("view") == "home")) {
            echo "active";
        }
        echo "\" >  <span></span> Home Packages</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 137
        echo twig_escape_filter($this->env, (isset($context["URL"]) ? $context["URL"] : null), "html", null, true);
        echo "package/?view=small\" class=\"";
        if (($this->env->getExtension('utility')->getURLvar("view") == "small")) {
            echo "active";
        }
        echo "\" > <span></span> Small Business Packages</a></li></ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "package/index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  415 => 137,  407 => 136,  399 => 135,  387 => 127,  384 => 126,  324 => 104,  303 => 98,  297 => 95,  289 => 94,  285 => 93,  277 => 90,  272 => 88,  269 => 87,  267 => 86,  252 => 76,  246 => 75,  235 => 67,  230 => 65,  224 => 64,  216 => 61,  208 => 56,  197 => 47,  194 => 46,  147 => 148,  144 => 147,  142 => 125,  139 => 124,  135 => 45,  132 => 44,  126 => 40,  121 => 39,  118 => 38,  112 => 34,  107 => 33,  104 => 32,  99 => 29,  92 => 24,  88 => 23,  81 => 18,  76 => 16,  70 => 15,  66 => 14,  62 => 13,  58 => 12,  54 => 11,  49 => 10,  47 => 9,  43 => 8,  40 => 7,  34 => 4,  29 => 2,);
    }
}
