<?php

/* user/edit.htm */
class __TwigTemplate_e6fd0f219bb295a3dfc622b7c58c19697fb5a2c9962d573a8de915f078aa586d extends Twig_Template
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
        echo "Add User";
    }

    // line 6
    public function block_add_js($context, array $blocks = array())
    {
        // line 7
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, (isset($context["JS"]) ? $context["JS"] : null), "html", null, true);
        echo "user/file_maintenance.js\"></script>
";
    }

    // line 11
    public function block_add_css($context, array $blocks = array())
    {
        // line 12
        echo "\t<link rel=\"stylesheet/less\" type=\"text/less\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["PLUGIN"]) ? $context["PLUGIN"] : null), "html", null, true);
        echo "less/system/user/file_maintenance.less\"/>
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
        $this->env->loadTemplate("user/edit.htm", "1162097174")->display($context);
    }

    public function getTemplateName()
    {
        return "user/edit.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 18,  59 => 17,  53 => 13,  48 => 12,  45 => 11,  38 => 7,  35 => 6,  29 => 3,);
    }
}


/* user/edit.htm */
class __TwigTemplate_e6fd0f219bb295a3dfc622b7c58c19697fb5a2c9962d573a8de915f078aa586d_1162097174 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lg"]) ? $context["lg"] : null), 11, array(), "array"), "html", null, true);
        echo "\">
\t\t<div class=\"sect-edit-user\">
\t\t\t<nav class=\"navbar navbar-default\" role=\"navigation\">
\t\t\t<div class=\"navbar-header\">
\t\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
\t\t\t\t  <span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t  <span class=\"icon-bar\"></span>
\t\t\t\t  <span class=\"icon-bar\"></span>
\t\t\t\t  <span class=\"icon-bar\"></span>
\t\t\t\t</button>
\t\t\t</div>
  
\t\t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t\t  <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t  <li class=\"dropdown\">
\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><label>Action</label> &nbsp;<b class=\"caret\"></b></a>
\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t  <li><a href=\"#\" class=\"select-all-btn\">Select All</a></li>
\t\t\t\t\t  <li><a href=\"JavaScript:\$.deleteUser('nav', 'confirm')\">Delete Selected</a></li>
\t\t\t\t\t</ul>
\t\t\t\t  </li>
\t\t\t\t</ul>
\t\t\t\t<form class=\"navbar-form navbar-left\" role=\"search\" method=\"get\" data-query=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('utility')->getURLvar("str"), "html", null, true);
        echo "\">
\t\t\t\t  <div class=\"form-group\" style=\"margin-right:10px;\">
\t\t\t\t\t<input type=\"text\" class=\"form-control\" style=\"margin-right:200px; \"  name=\"str\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('utility')->getURLvar("str"), "html", null, true);
        echo "\" placeholder=\"Search User\">
\t\t\t\t  </div>
\t\t\t\t  <button type=\"submit\" class=\"btn btn-default\" style=\"margin-right:10px;\">Search</button>
\t\t\t\t  ";
        // line 48
        if (($this->getAttribute((isset($context["dbLoggedUser"]) ? $context["dbLoggedUser"] : null), "userlevel") == 0)) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, (isset($context["URL"]) ? $context["URL"] : null), "html", null, true);
            echo "user/new\" type=\"submit\" class=\"btn btn-success\"><span class=\"glyphicon glyphicon-plus\"></span> Add User</a>";
        }
        // line 49
        echo "\t\t\t\t
\t\t\t\t</form>
\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t  <li class=\"dropdown\">
\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><label>Sort List</label> &nbsp;<b class=\"caret\"></b></a>
\t\t\t\t\t<ul class=\"dropdown-menu stopPropagation sort-menu\">
\t\t\t\t\t  <li><a href=\"JavaScript:void(0)\"><input type='checkbox' checked name='sort' id='sort-1' value='DESC'><label for='sort-1'><span></span></label> <label for='sort-1'>Newest</label></a></li>
\t\t\t\t\t  <li><a href=\"JavaScript:void(0)\"><input type='checkbox' name='sort' id='sort-2' value='ASC'><label for='sort-2'><span></span></label> <label for='sort-2'>Latest</label></a></li>
\t\t\t\t\t</ul>
\t\t\t\t  </li>
\t\t\t\t</ul>
\t\t\t  </div><!-- /.navbar-collapse -->
\t\t\t</nav>
\t\t</div>
\t</div>
\t
\t<div class=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lg"]) ? $context["lg"] : null), 11, array(), "array"), "html", null, true);
        echo "\">
\t<div class=\"sect-edit-user\">
\t<div class=\"bs-callout bs-callout-info\">
\t  <h3>User List</h3>
\t</div>
      <div class=\"table-responsive\">
        <table class=\"table-list table table-condensed table-hover\">
          <thead>
            <tr>
              <th style=\"width:4%\" ><center><input type=\"checkbox\" id=\"id_chk_all\" value=\"all\"><label for=\"id_chk_all\"><span></span></label></center></th>
              <th style=\"width:18%\"></th>
              <th style=\"width:3\">#</th>
              <th>Name</th>
              <th>Email</th>
              <th>Username</th>
              <th>Date added</th>
            </tr>
          </thead>
          <tbody>
            
          </tbody>
        </table>
\t </div>
     </div><!-- /.table-responsive -->
\t";
    }

    public function getTemplateName()
    {
        return "user/edit.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 65,  155 => 49,  149 => 48,  143 => 45,  138 => 43,  111 => 20,  108 => 19,  62 => 18,  59 => 17,  53 => 13,  48 => 12,  45 => 11,  38 => 7,  35 => 6,  29 => 3,);
    }
}
