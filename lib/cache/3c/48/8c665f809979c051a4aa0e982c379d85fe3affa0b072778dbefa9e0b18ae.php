<?php

/* _base.htm */
class __TwigTemplate_3c488c665f809979c051a4aa0e982c379d85fe3affa0b072778dbefa9e0b18ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->env->loadTemplate("_config/_global_block.htm");
        // line 13
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."_config/_global_block.htm".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'metadata' => array($this, 'block_metadata'),
                'add_css' => array($this, 'block_add_css'),
                'top_js' => array($this, 'block_top_js'),
                'add_js' => array($this, 'block_add_js'),
                'main_content' => array($this, 'block_main_content'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo " <!-- @author/developer RMD (Denmark Jay, Ramon and Macky Joe) -->
";
        // line 2
        ob_start();
        // line 4
        echo "\t";
        // line 5
        echo "\t\t";
        $context["md"] = array(0 => "col-md-1", 1 => "col-md-2", 2 => "col-md-3", 3 => "col-md-4", 4 => "col-md-5", 5 => "col-md-6", 6 => "col-md-7", 7 => "col-md-8", 8 => "col-md-9", 9 => "col-md-10", 10 => "col-md-11", 11 => "col-md-12");
        // line 6
        echo "\t\t";
        $context["xs"] = array(0 => "col-xs-1", 1 => "col-xs-2", 2 => "col-xs-3", 3 => "col-xs-4", 4 => "col-xs-5", 5 => "col-xs-6", 6 => "col-xs-7", 7 => "col-xs-8", 8 => "col-xs-9", 9 => "col-xs-10", 10 => "col-xs-11", 11 => "col-xs-12");
        // line 7
        echo "\t\t";
        $context["sm"] = array(0 => "col-sm-1", 1 => "col-sm-2", 2 => "col-sm-3", 3 => "col-sm-4", 4 => "col-sm-5", 5 => "col-sm-6", 6 => "col-sm-7", 7 => "col-sm-8", 8 => "col-sm-9", 9 => "col-sm-10", 10 => "col-sm-11", 11 => "col-sm-12");
        // line 8
        echo "\t\t";
        $context["lg"] = array(0 => "col-lg-1", 1 => "col-lg-2", 2 => "col-lg-3", 3 => "col-lg-4", 4 => "col-lg-5", 5 => "col-lg-6", 6 => "col-lg-7", 7 => "col-lg-8", 8 => "col-lg-9", 9 => "col-lg-10", 10 => "col-lg-11", 11 => "col-lg-12");
        // line 9
        echo "\t\t";
        $context["hd"] = array("lg" => "hidden-lg", "md" => "hidden-md", "sm" => "hidden-sm", "xs" => "hidden-xs");
        // line 10
        echo "\t\t";
        $context["vb"] = array("lg" => "visible-lg", "md" => "visible-md", "sm" => "visible-sm", "xs" => "visible-xs");
        // line 11
        echo "\t";
        // line 12
        echo "\t";
        $context["form"] = $this->env->loadTemplate("_element/_form.htm");
        echo " ";
        // line 13
        echo "\t";
        // line 15
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html>
    <head>
        <title>";
        // line 18
        $this->displayBlock('title', $context, $blocks);
        echo " Quadcore Solutions, Inc.</title>
\t\t
\t\t";
        // line 20
        $this->displayBlock('metadata', $context, $blocks);
        // line 39
        echo "        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["PLUGIN"]) ? $context["PLUGIN"] : null), "html", null, true);
        echo "bootstrap-3.0.2/dist/css/bootstrap.min.css\" media=\"screen\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["PLUGIN"]) ? $context["PLUGIN"] : null), "html", null, true);
        echo "bootstrap-3.0.2/dist/css/bootstrap-theme.min.css\" media=\"screen\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["PLUGIN"]) ? $context["PLUGIN"] : null), "html", null, true);
        echo "confirm/confirm.css\" media=\"screen\"/><!-- start >Confirm</!-->
\t\t
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["CSS"]) ? $context["CSS"] : null), "html", null, true);
        echo "style.css\" media=\"screen\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["CSS"]) ? $context["CSS"] : null), "html", null, true);
        echo "style.ie7.css\" media=\"screen\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["CSS"]) ? $context["CSS"] : null), "html", null, true);
        echo "style.responsive.css\" media=\"screen\"/>
\t\t
        <link rel=\"stylesheet\" type=\"text/less\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["PLUGIN"]) ? $context["PLUGIN"] : null), "html", null, true);
        echo "less/system/style.less\" media=\"screen\"/><!-- start >Less</!-->
\t\t<link rel=\"stylesheet\" type=\"text/less\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["PLUGIN"]) ? $context["PLUGIN"] : null), "html", null, true);
        echo "less/system/widget/user-panel-box.less\" media=\"screen\"/>
\t\t<link rel=\"stylesheet/less\" type=\"text/less\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["PLUGIN"]) ? $context["PLUGIN"] : null), "html", null, true);
        echo "less/system/widget/side-bar-fader.less\"/>
        <link rel=\"shortcut icon\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["IMG"]) ? $context["IMG"] : null), "html", null, true);
        echo "favicon.ico\" type=\"image/x-icon\">
        ";
        // line 53
        $this->displayBlock('add_css', $context, $blocks);
        // line 54
        echo "\t\t
        <script type=\"text/javascript\">
            less = {
                env: \"development\", // or \"production\"
                async: false, // load imports async
                fileAsync: false, // load imports async when in a page under
                // a file protocol
                poll: 1000, // when in watch mode, time in ms between polls
                functions: {}, // user functions, keyed by name
                dumpLineNumbers: \"comments\", // or \"mediaQuery\" or \"all\"
                relativeUrls: false, // whether to adjust url's to be relative
                // if false, url's are already relative to the
                // entry less file
                rootpath: \":/a.com/\"// a path to add on to the start of every url
                        //resource
            };
        </script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["JS"]) ? $context["JS"] : null), "html", null, true);
        echo "jquery.new.js\"></script>
\t\t";
        // line 72
        $this->displayBlock('top_js', $context, $blocks);
        // line 73
        echo "\t\t<!--  Include JS Requirements  !-->
        <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["JS"]) ? $context["JS"] : null), "html", null, true);
        echo "base.js\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["PLUGIN"]) ? $context["PLUGIN"] : null), "html", null, true);
        echo "confirm/confirm.js\"></script><!-- start >Confirm</!-->
        <script type=\"text/javascript\" src=\"";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["PLUGIN"]) ? $context["PLUGIN"] : null), "html", null, true);
        echo "confirm/confirm.init.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["PLUGIN"]) ? $context["PLUGIN"] : null), "html", null, true);
        echo "confirm/confirm.script.js\"></script><!-- end >Confirm</!-->
        <script type=\"text/javascript\" src=\"";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["PLUGIN"]) ? $context["PLUGIN"] : null), "html", null, true);
        echo "bootstrap-3.0.2/dist/js/bootstrap.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["JS"]) ? $context["JS"] : null), "html", null, true);
        echo "less-1.4.2.min.js\"></script>
        <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, (isset($context["JS"]) ? $context["JS"] : null), "html", null, true);
        echo "script.js\"></script>
        <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["JS"]) ? $context["JS"] : null), "html", null, true);
        echo "script.responsive.js\"></script>
\t\t
\t\t<script type=\"text/javascript\" src=\"";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["JS"]) ? $context["JS"] : null), "html", null, true);
        echo "widget/side-bar-fader.js\"></script>
        <!--[if lt IE 9]><script src=\"https://html5shiv.googlecode.com/svn/trunk/html5.js\"></script><![endif]-->
        ";
        // line 85
        $this->displayBlock('add_js', $context, $blocks);
        // line 86
        echo "    </head>
    <body url=\"";
        // line 87
        echo twig_escape_filter($this->env, (isset($context["URL"]) ? $context["URL"] : null), "html", null, true);
        echo "\" >
        <div id=\"main_container\">
             <nav class=\"sect-nav scrolled-menu\">
                <div class=\"sect-nav-inner\">
                    <ul class=\"sect-hmenu\">
                        <li class=\"li-logo\"><a  href=\"";
        // line 92
        echo twig_escape_filter($this->env, (isset($context["URL"]) ? $context["URL"] : null), "html", null, true);
        echo "index\"><section><img src=\"";
        echo twig_escape_filter($this->env, (isset($context["IMG"]) ? $context["IMG"] : null), "html", null, true);
        echo "icon.png\" /> QSI</section></a></li>
                        <li><a href=\"";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["URL"]) ? $context["URL"] : null), "html", null, true);
        echo "product\">Products</a></li>
                        <li><a href=\"";
        // line 94
        echo twig_escape_filter($this->env, (isset($context["URL"]) ? $context["URL"] : null), "html", null, true);
        echo "package\">Packages</a></li>
                        <li><a href=\"";
        // line 95
        echo twig_escape_filter($this->env, (isset($context["URL"]) ? $context["URL"] : null), "html", null, true);
        echo "contact\">Contact Us</a></li>
                        ";
        // line 96
        if ($this->env->getExtension('utility')->isLogged()) {
            echo "<li class=\"li-right admin-link\"><a href=\"\" class=\"input-sm btn btn-success\" onclick=\"\$.runLoggedAdministrationPanel();\"><span class=\"glyphicon glyphicon-user\"></span>Account</a></li>
\t\t\t\t\t\t";
        } else {
            // line 97
            echo "<li class=\"li-right\"><a href=\"\" class=\"input-sm btn btn-success\" onclick=\"\$.loginConfirm();\"><span class=\"glyphicon glyphicon-user\"></span>Login</a></li>";
        }
        // line 98
        echo "                    </ul>
                </div>
                <!-- navbar-collapse -->
            </nav>
            <div class=\"sect-sheet clearfix\">
                <div class=\"sect-layout-wrapper\">
                    <div class=\"sect-content-layout\">
                        <div class=\"sect-content-layout-row\">
\t\t\t\t\t\t <!-- side bar -->
\t\t\t\t\t\t  ";
        // line 107
        if ((isset($context["set_sidebar"]) ? $context["set_sidebar"] : null)) {
            // line 108
            echo "                           <div class=\"sect-layout-cell sect-sidebar1\"> 
                                   ";
            // line 109
            $this->displayBlock("side_bar", $context, $blocks);
            echo "
                           </div>
\t\t\t\t\t\t  ";
        }
        // line 112
        echo "                            <div class=\"sect-layout-cell sect-content\" >
                                <article class=\"sect-post sect-article\">
                                    <div style=\"padding:0px 15px;position:relative;margin:0 auto; min-height:600px\">
\t\t\t\t\t\t\t\t\t\t";
        // line 115
        $this->displayBlock('main_content', $context, $blocks);
        // line 116
        echo "                                    </div>
                                    <div class=\"sect-postcontent sect-postcontent-0 clearfix\"><p><br></p></div>
                                </article>
\t\t\t\t\t\t\t</div>
                        </div>
                    </div>
                </div>
                <footer class=\"sect-footer\">
                    ";
        // line 124
        $this->displayBlock("footer", $context, $blocks);
        echo "
                </footer>
            </div>
        </div>    
\t\t<!-- > Confirm Modals </!-->
\t\t<div id=\"sect-confirmBox-hidden\"> ";
        // line 129
        $this->displayBlock("modal", $context, $blocks);
        echo " </div>
    </body>
</html>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 18
    public function block_title($context, array $blocks = array())
    {
    }

    // line 20
    public function block_metadata($context, array $blocks = array())
    {
        // line 21
        echo "\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-2\" />
\t\t<meta name=\"author\" CONTENT=\"RMD: Denmark Jay Mago, Ramon Soldevilla, and Macky Joe Licup\">
\t\t<meta name=\"designer\" CONTENT=\"@RMD\">
\t\t<meta name=\"directory\" content=\"submission\">
\t\t<meta name=\"category\" content=\"Online Business Website\">
\t\t<meta name=\"coverage\" content=\"Worldwide\">
\t\t<meta name=\"distribution\" content=\"Global\">
\t\t<meta name=\"Classification\" content=\"CCTV, DVR, CAMERA\">
\t\t<meta name=geography content=\"Philippines\">
\t\t<meta name=Rating content=\"General\">
\t\t<meta HTTP-equiv=\"Content-Language\" content=\"en-us\">
\t\t<meta name=\"robots\" CONTENT=\"FOLLOW,INDEX\">
\t\t<meta name=\"robots\" content=\"all\">
\t\t<meta name=\"revisit-after\" CONTENT=\"7 days\">
\t\t<meta name=\"keywords\" content=\"CCTV, DVR, QUADCORE SOLUTIONS INCORPORATED\">
\t\t<meta name=\"keyphrases\" content=\"CCTV, DVR, QUADCORE, SOLUTIONS, INCORPORATED\">
\t\t<meta name=\"description\" content=\"QUADCORE SOLUTIONS INCORPORATED is a Filipino-owned Corporation that specializes in the supply, design, installation and maintenance of Structured Cabling and CCTV Surveillance System.\">
\t\t";
    }

    // line 53
    public function block_add_css($context, array $blocks = array())
    {
    }

    // line 72
    public function block_top_js($context, array $blocks = array())
    {
    }

    // line 85
    public function block_add_js($context, array $blocks = array())
    {
    }

    // line 115
    public function block_main_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "_base.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 115,  330 => 85,  325 => 72,  320 => 53,  299 => 21,  296 => 20,  291 => 18,  282 => 129,  274 => 124,  264 => 116,  262 => 115,  257 => 112,  251 => 109,  248 => 108,  246 => 107,  235 => 98,  232 => 97,  227 => 96,  223 => 95,  219 => 94,  215 => 93,  209 => 92,  201 => 87,  196 => 85,  191 => 83,  186 => 81,  182 => 80,  178 => 79,  174 => 78,  170 => 77,  166 => 76,  162 => 75,  158 => 74,  155 => 73,  153 => 72,  149 => 71,  130 => 54,  128 => 53,  124 => 52,  120 => 51,  116 => 50,  112 => 49,  107 => 47,  103 => 46,  99 => 45,  94 => 43,  90 => 42,  86 => 41,  80 => 20,  70 => 15,  68 => 13,  62 => 11,  59 => 10,  53 => 8,  50 => 7,  44 => 5,  42 => 4,  37 => 1,  14 => 13,  426 => 187,  419 => 183,  414 => 181,  405 => 175,  390 => 164,  387 => 163,  338 => 153,  260 => 78,  254 => 75,  249 => 73,  241 => 72,  228 => 66,  220 => 65,  212 => 64,  198 => 86,  195 => 51,  148 => 199,  145 => 198,  143 => 162,  140 => 161,  136 => 50,  133 => 49,  127 => 45,  123 => 44,  119 => 43,  114 => 42,  111 => 41,  105 => 37,  101 => 36,  96 => 35,  93 => 34,  85 => 30,  82 => 39,  75 => 18,  71 => 23,  64 => 12,  56 => 9,  49 => 10,  47 => 6,  43 => 8,  40 => 2,  34 => 4,  29 => 2,);
    }
}
