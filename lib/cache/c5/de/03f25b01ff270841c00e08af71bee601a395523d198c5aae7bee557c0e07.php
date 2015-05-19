<?php

/* product/index.htm */
class __TwigTemplate_c5de03f25b01ff270841c00e08af71bee601a395523d198c5aae7bee557c0e07 extends Twig_Template
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
        echo "Products | ";
    }

    // line 7
    public function block_metadata($context, array $blocks = array())
    {
        // line 8
        $this->displayParentBlock("metadata", $context, $blocks);
        echo "
";
        // line 9
        if (((isset($context["hasActiveProduct"]) ? $context["hasActiveProduct"] : null) == true)) {
            // line 10
            echo "\t<meta name=\"keywords\" content=\"\">
\t<meta name=\"keyphrases\" content=\"\">
\t<meta name=\"description\" content=\"\">
\t<meta name=\"topic\" content=\"\">
\t<meta name=\"summary\" CONTENT=\"\">
\t<meta name=URL content=\"";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["URL"]) ? $context["URL"] : null), "html", null, true);
            echo "product/";
            echo twig_escape_filter($this->env, (isset($context["activeProductID"]) ? $context["activeProductID"] : null), "html", null, true);
            echo "\">
\t<meta name=\"identifier-URL\" content=\"\">
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
        // line 30
        echo "\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, (isset($context["JS"]) ? $context["JS"] : null), "html", null, true);
        echo "jquery.history.js\"></script>
\t<script>if ( typeof window.JSON === 'undefined' ) { document.write('<script src=\"../scripts/uncompressed/json2.js\"><\\/script>'); }</script>\t
";
    }

    // line 34
    public function block_add_js($context, array $blocks = array())
    {
        // line 35
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, (isset($context["JS"]) ? $context["JS"] : null), "html", null, true);
        echo "product/p_index.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["JS"]) ? $context["JS"] : null), "html", null, true);
        echo "jquery.loadingbar.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["JS"]) ? $context["JS"] : null), "html", null, true);
        echo "zoome-e.js\"></script>
";
    }

    // line 41
    public function block_add_css($context, array $blocks = array())
    {
        // line 42
        echo "\t<link rel=\"stylesheet/less\" type=\"text/less\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["PLUGIN"]) ? $context["PLUGIN"] : null), "html", null, true);
        echo "less/system/product/index.less\"/>
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["CSS"]) ? $context["CSS"] : null), "html", null, true);
        echo "loadingbar.css\"/>
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["CSS"]) ? $context["CSS"] : null), "html", null, true);
        echo "zoome-min.css\"/>
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["CSS"]) ? $context["CSS"] : null), "html", null, true);
        echo "form/checkbox-slider.css\"/>
";
    }

    // line 49
    public function block_main_content($context, array $blocks = array())
    {
        // line 50
        $this->env->loadTemplate("product/index.htm", "75165956")->display($context);
    }

    // line 161
    public function block_side_bar($context, array $blocks = array())
    {
        // line 162
        $this->env->loadTemplate("product/index.htm", "929498954")->display($context);
        // line 198
        echo "
";
        // line 199
        $this->displayParentBlock("side_bar", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "product/index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 199,  145 => 198,  143 => 162,  140 => 161,  136 => 50,  133 => 49,  127 => 45,  123 => 44,  119 => 43,  114 => 42,  111 => 41,  105 => 37,  101 => 36,  96 => 35,  93 => 34,  85 => 30,  82 => 29,  75 => 24,  71 => 23,  64 => 18,  56 => 15,  49 => 10,  47 => 9,  43 => 8,  40 => 7,  34 => 4,  29 => 2,);
    }
}


/* product/index.htm */
class __TwigTemplate_c5de03f25b01ff270841c00e08af71bee601a395523d198c5aae7bee557c0e07_75165956 extends Twig_Template
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

    // line 51
    public function block_column1($context, array $blocks = array())
    {
        // line 52
        echo "\t\t<div class=\"nav-sort-prod\">
\t\t  <nav class=\"navbar navbar-default\" role=\"navigation\">
\t\t\t<div class=\"navbar-header\">
\t\t\t  <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-3\">
\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t  </button>
\t\t\t  <a class=\"navbar-brand\" href=\"#\">PRODUCTS</a>
\t\t\t</div>
\t\t\t<div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-3\">
\t\t\t  <a href=\"";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["URL"]) ? $context["URL"] : null), "html", null, true);
        echo "product/\" class=\"btn btn-default navbar-btn ";
        if ((((($this->env->getExtension('utility')->getURLvar("srt") == "new") || (($this->env->getExtension('utility')->getURLvar("srt") != "rate") && ($this->env->getExtension('utility')->getURLvar("srt") != "latest"))) || (null === $this->env->getExtension('utility')->getURLvar("srt"))) || ($this->env->getExtension('utility')->getURLvar("srt") == ""))) {
            echo "btn-success disabled";
        }
        echo "\" data-sort=\"new\">NEWEST PRODUCT</a>&nbsp;
\t\t\t  <a href=\"";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["URL"]) ? $context["URL"] : null), "html", null, true);
        echo "product/?srt=rate\" class=\"btn btn-default navbar-btn ";
        if (($this->env->getExtension('utility')->getURLvar("srt") == "rate")) {
            echo "btn-success disabled";
        }
        echo "\" data-sort=\"rate\">TOP RATED</a>&nbsp;
\t\t\t  <a href=\"";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["URL"]) ? $context["URL"] : null), "html", null, true);
        echo "product/?srt=latest\" class=\"btn btn-default navbar-btn ";
        if (($this->env->getExtension('utility')->getURLvar("srt") == "latest")) {
            echo "btn-success disabled";
        }
        echo "\" data-sort=\"latest\">LATEST</a>
\t\t\t</div>
\t\t  </nav>
\t\t</div>
\t\t
\t\t<div class=\"bs-example\">
\t\t\t<div class=\"row active-product-section ";
        // line 72
        if (((isset($context["hasActiveProduct"]) ? $context["hasActiveProduct"] : null) == true)) {
            echo "runProductLoader";
        }
        echo "\" data-id=\"";
        echo twig_escape_filter($this->env, (isset($context["activeProductID"]) ? $context["activeProductID"] : null), "html", null, true);
        echo "\">
\t\t\t\t<div class=\"";
        // line 73
        echo twig_escape_filter($this->env, twig_join_filter(array(0 => $this->getAttribute((isset($context["sm"]) ? $context["sm"] : null), 11, array(), "array"), 1 => $this->getAttribute((isset($context["md"]) ? $context["md"] : null), 11, array(), "array"), 2 => $this->getAttribute((isset($context["lg"]) ? $context["lg"] : null), 11, array(), "array")), " "), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"thumbnail\">
\t\t\t\t\t    <div class=\"product-profile ";
        // line 75
        echo twig_escape_filter($this->env, twig_join_filter(array(0 => $this->getAttribute((isset($context["xs"]) ? $context["xs"] : null), 11, array(), "array"), 1 => $this->getAttribute((isset($context["sm"]) ? $context["sm"] : null), 5, array(), "array"), 2 => $this->getAttribute((isset($context["md"]) ? $context["md"] : null), 4, array(), "array"), 3 => $this->getAttribute((isset($context["lg"]) ? $context["lg"] : null), 3, array(), "array")), " "), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"caption ";
        // line 78
        echo twig_escape_filter($this->env, twig_join_filter(array(0 => $this->getAttribute((isset($context["xs"]) ? $context["xs"] : null), 10, array(), "array"), 1 => $this->getAttribute((isset($context["sm"]) ? $context["sm"] : null), 5, array(), "array"), 2 => $this->getAttribute((isset($context["md"]) ? $context["md"] : null), 6, array(), "array"), 3 => $this->getAttribute((isset($context["lg"]) ? $context["lg"] : null), 7, array(), "array")), " "), "html", null, true);
        echo "\">
\t\t\t\t\t\t <h3>Thumbnail label</h3>
\t\t\t\t\t\t  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
\t\t\t\t\t\t  <div class=\"rating\" data-rating=\"2\">
\t\t\t\t\t\t\t<button class=\"btn btn-default\"> 
\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-star\"></span> 
\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-star\"></span> 
\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-star-empty\"></span> 
\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-star-empty\"></span> 
\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-star-empty\"></span> 
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"buttons\">
\t\t\t\t\t\t\t<button class=\"btn btn-default\" onclick=\"\$.runScrollerHide();\"><span class=\"glyphicon glyphicon-off\"></span> Hide Box</button>
\t\t\t\t\t\t\t<button class=\"btn btn-warning\"><span class=\"glyphicon glyphicon-edit\"></span> Edit</button>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Buttons -->
\t\t<ul id=\"buttons\">
\t\t</ul>

\t\t<!-- Our Script -->
\t\t<script>
\t\t\t(function(window,undefined){

\t\t\t\t// Check Location
\t\t\t\tif ( document.location.protocol === 'file:' ) {
\t\t\t\t\talert('The HTML5 History API (and thus History.js) do not work on files, please upload it to a server.');
\t\t\t\t}

\t\t\t\t// Establish Variables
\t\t\t\tvar
\t\t\t\t\tHistory = window.History, // Note: We are using a capital H instead of a lower h
\t\t\t\t\tState = History.getState(),
\t\t\t\t\tsyslog = \$('#log');

\t\t\t\t// Log Initial State
\t\t\t\tHistory.log('initial:', State.data, State.title, State.url);
\t\t\t\t
\t\t\t\t// Bind to State Change
\t\t\t\tHistory.Adapter.bind(window,'statechange',function(){ // Note: We are using statechange instead of popstate
\t\t\t\t\t
\t\t\t\t\t// Log the State
\t\t\t\t\tvar State = History.getState(); // Note: We are using History.getState() instead of event.state
\t\t\t\t\tHistory.log('statechange:', State.data, State.title, State.url);
\t\t\t\t\tvar path = State.url;
\t\t\t\t\tpath = path.split(\"/\"); path = path[path.length-1];
\t\t\t\t\tvar prodId = parseInt(path);
\t\t\t\t\tif(prodId>0) \$.runHistoryFinder(prodId);
\t\t\t\t\telse {
\t\t\t\t\t\t\$(\".runProductLoader\").removeClass(\"runProductLoader\")
\t\t\t\t\t\t\$.runScrollerHide();
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\tvar state=path.split('?')[1], search=null;
\t\t\t\t\tif(state !== undefined){
\t\t\t\t\t\tstate = state!==undefined?state.split(\"&\"):0;
\t\t\t\t\t\tfor(var i=0; i<state.length; i++){ 
\t\t\t\t\t\t\tif(state[i].split('=')[0] == \"page\"){var pageNum = state[i].split('=')[1];}
\t\t\t\t\t\t\tif(state[i].split('=')[0] == \"q\"){search = state[i].split('=')[1];}
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tif(search != null){ \$(\"[name=txtSearchProduct]\").val(search); }
\t\t\t\t\tstate = pageNum!==undefined?pageNum:1;
\t\t\t\t\t
\t\t\t\t\t\$.loadProduct(state);
\t\t\t\t});
\t\t\t})(window);
\t\t</script>
\t\t  <div class=\"row product-section-list\">
\t\t  </div>
\t\t  <div class=\"row product-section-pages\">
\t\t\t<div class=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lg"]) ? $context["lg"] : null), 11, array(), "array"), "html", null, true);
        echo " pages-div\"></div>
\t\t  </div>
\t\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "product/index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  338 => 153,  260 => 78,  254 => 75,  249 => 73,  241 => 72,  228 => 66,  220 => 65,  212 => 64,  198 => 52,  195 => 51,  148 => 199,  145 => 198,  143 => 162,  140 => 161,  136 => 50,  133 => 49,  127 => 45,  123 => 44,  119 => 43,  114 => 42,  111 => 41,  105 => 37,  101 => 36,  96 => 35,  93 => 34,  85 => 30,  82 => 29,  75 => 24,  71 => 23,  64 => 18,  56 => 15,  49 => 10,  47 => 9,  43 => 8,  40 => 7,  34 => 4,  29 => 2,);
    }
}


/* product/index.htm */
class __TwigTemplate_c5de03f25b01ff270841c00e08af71bee601a395523d198c5aae7bee557c0e07_929498954 extends Twig_Template
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

    // line 163
    public function block_column1($context, array $blocks = array())
    {
        // line 164
        echo "\t\t<div class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lg"]) ? $context["lg"] : null), 11, array(), "array"), "html", null, true);
        echo " search-section\">
\t\t<div class=\"panel panel-success\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\">Search Product</h3>
\t\t\t</div>\t
\t\t\t<div class=\"panel-body\">
\t\t\t<form class=\"form\" method=\"POST\" onsubmit=\"\$.runSubmitForm(); \$.runScrollerHide(); return false;\" role=\"form\">
\t\t\t\t<div class=\"select-form-1 select-form\">
\t\t\t\t\t<div  class=\"form-group\">
\t\t\t\t\t\t<label class=\"label-search-automatic\">Automatic search setting</label>&nbsp;
\t\t\t\t\t\t<label class=\"switch switch-green\"> 
\t\t\t\t\t\t\t";
        // line 175
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "chkAutoSearch", 1 => "checkbox", 2 => "switch-input", 3 => "", 4 => "id_AutoSearch"), "method"), "html", null, true);
        echo "
\t\t\t\t\t\t\t<span class=\"switch-label\" data-on=\"On\" data-off=\"Off\"></span> 
\t\t\t\t\t\t\t<span class=\"switch-handle\"></span>
\t\t\t\t\t\t </label>
\t\t\t\t\t</div>
\t\t\t\t\t<div  class=\"input-group\">
\t\t\t\t\t\t";
        // line 181
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "txtSearchProduct", 1 => "text", 2 => "form-control txtSearchProduct", 3 => "", 4 => "Search product...", 5 => "id_txtSearchProduct", 6 => "", 7 => "autofocus"), "method"), "html", null, true);
        echo "
\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t";
        // line 183
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "btnSubmitProdSarch", 1 => "submit", 2 => "btn btn-default", 3 => "Go", 4 => "id_Submit"), "method"), "html", null, true);
        echo "
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div  class=\"form-group\">
\t\t\t\t\t\t";
        // line 187
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "select", array(0 => "cmbMainCat", 1 => array("all" => "All Category"), 2 => "form-control", 3 => "id_mainCat"), "method"), "html", null, true);
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div  class=\"form-group section-form section-form-category\">
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
        return "product/index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  426 => 187,  419 => 183,  414 => 181,  405 => 175,  390 => 164,  387 => 163,  338 => 153,  260 => 78,  254 => 75,  249 => 73,  241 => 72,  228 => 66,  220 => 65,  212 => 64,  198 => 52,  195 => 51,  148 => 199,  145 => 198,  143 => 162,  140 => 161,  136 => 50,  133 => 49,  127 => 45,  123 => 44,  119 => 43,  114 => 42,  111 => 41,  105 => 37,  101 => 36,  96 => 35,  93 => 34,  85 => 30,  82 => 29,  75 => 24,  71 => 23,  64 => 18,  56 => 15,  49 => 10,  47 => 9,  43 => 8,  40 => 7,  34 => 4,  29 => 2,);
    }
}
