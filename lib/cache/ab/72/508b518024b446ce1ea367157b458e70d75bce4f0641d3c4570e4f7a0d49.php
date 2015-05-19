<?php

/* index.htm */
class __TwigTemplate_ab72508b518024b446ce1ea367157b458e70d75bce4f0641d3c4570e4f7a0d49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->env->loadTemplate("_config/_global_block.htm");
        // line 4
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."_config/_global_block.htm".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
";
        // line 2
        ob_start();
        // line 5
        echo "\t
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<title></title>
<meta name=\"keywords\" content=\"\" />
<meta name=\"description\" content=\"\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["PLUGIN"]) ? $context["PLUGIN"] : null), "html", null, true);
        echo "macky/main-view/main.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["PLUGIN"]) ? $context["PLUGIN"] : null), "html", null, true);
        echo "macky/main-view/styles/styles.css\" />
<script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["PLUGIN"]) ? $context["PLUGIN"] : null), "html", null, true);
        echo "macky/main-view/scripts/mootools-1.2.1-core.js\"></script>
<script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["PLUGIN"]) ? $context["PLUGIN"] : null), "html", null, true);
        echo "macky/main-view/scripts/mootools-1.2-more.js\"></script>
<script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["PLUGIN"]) ? $context["PLUGIN"] : null), "html", null, true);
        echo "macky/main-view/scripts/slideitmoo-1.1.js\"></script>
<script language=\"javascript\" type=\"text/javascript\">
\twindow.addEvents({
\t\t'domready': function(){
\t\t\t/* thumbnails example , div containers */
\t\t\tnew SlideItMoo({
\t\t\t\t\t\toverallContainer: 'SlideItMoo_outer',
\t\t\t\t\t\telementScrolled: 'SlideItMoo_inner',
\t\t\t\t\t\tthumbsContainer: 'SlideItMoo_items',
\t\t\t\t\t\titemsVisible: 5,
\t\t\t\t\t\telemsSlide: 3,
\t\t\t\t\t\tduration:300,
\t\t\t\t\t\titemsSelector: '.SlideItMoo_element',
\t\t\t\t\t\titemWidth: 158,
\t\t\t\t\t\tshowControls:1});
\t\t},

\t});

function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
<style type=\"text/css\">
.auto-style1 {
\tcolor: #000000;
}
</style>
</head>
<body>

<div id=\"templatemo_site_title_bar_wrapper\">

\t<div id=\"templatemo_site_title_bar\">

    \t<div id=\"site_title\">
            <h1>                
                <img class=\"rotate\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["PLUGIN"]) ? $context["PLUGIN"] : null), "html", null, true);
        echo "macky/main-view/images/quadlogo.png\" alt=\"Gadget Site\" height=\"66\" width=\"66\" style=\"margin-top:-16px; margin-left:-190px\" />            </h1>
        </div>

        <div id=\"search_box\">
            <form action=\"#\" method=\"get\">
                <input type=\"text\" value=\"Search Product Here ...\" name=\"q\" size=\"11\" id=\"searchfield\" title=\"searchfield\" onfocus=\"clearText(this)\" onblur=\"clearText(this)\" />
                <input type=\"submit\" name=\"Search\" value=\"\" alt=\"Search\" id=\"searchbutton\" title=\"Search\" />
            </form>
        </div>

        <div id=\"templatemo_menu\">
                <ul>
                  <li><a href=\"Index.html\" class=\"current first\">Home</a></li>
                  <li><a href=\"product.html\">Products</a></li>
                  <li><a href=\"package.html\">Packages</a></li>
                  <li><a href=\"about.html\">About</a></li>
                  <li><a href=\"contact.html\" class=\"last\"><span></span>Contact Us</a></li>
          \t\t</ul>
\t\t</div> <!-- end of menu -->

    </div>

</div>

<div id=\"templatemo_content\">

\t<div id=\"product_gallery\">

    \t<div id=\"SlideItMoo_outer\">
\t\t<div id=\"SlideItMoo_inner\">
\t\t\t<div id=\"SlideItMoo_items\">
\t\t\t\t";
        // line 86
        if (twig_length_filter($this->env, (isset($context["dbProduct"]) ? $context["dbProduct"] : null))) {
            // line 87
            echo "\t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dbProduct"]) ? $context["dbProduct"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 88
                echo "\t\t\t\t\t <div class=\"SlideItMoo_element\">
\t\t\t\t\t\t<strong>";
                // line 89
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dbProduct"]) ? $context["dbProduct"] : null), (isset($context["key"]) ? $context["key"] : null), array(), "array"), "model"), "html", null, true);
                echo "</strong>
                    \t<a href=\"";
                // line 90
                echo twig_escape_filter($this->env, (isset($context["URL"]) ? $context["URL"] : null), "html", null, true);
                echo "product/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dbProduct"]) ? $context["dbProduct"] : null), (isset($context["key"]) ? $context["key"] : null), array(), "array"), "prod_id"), "html", null, true);
                echo "?srt=latest\">
\t\t\t\t\t\t\t<img src=\"";
                // line 91
                echo twig_escape_filter($this->env, (isset($context["IMG"]) ? $context["IMG"] : null), "html", null, true);
                echo "profile/product/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dbProduct"]) ? $context["dbProduct"] : null), (isset($context["key"]) ? $context["key"] : null), array(), "array"), "prod_id"), "html", null, true);
                echo ".jpg\" alt=\"details\" height=\"98\" width=\"150\" />
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "\t\t\t\t";
        }
        // line 96
        echo "\t\t\t</div>
\t\t</div>
\t</div>

    </div> <!-- end of product gallery -->

    <div class=\"section_w940\"></div>

    <div class=\"cleaner_h30\"></div>

    <div class=\"section_w940\">

        <div class=\"section_w440 margin_r_20\">
        \t<div class=\"rounded_top\"><span></span></div>

<div class=\"sub_content\">

                <h2>New Package</h2>

                <p>Nullam ultrices tempor nisi, ac egestas diam aliquam a. Ut eleifend semper turpis, id feugiat arcu dignissim eu.</p>

                <ul class=\"service_list\">
                \t<li><a href=\"#\">Cras elementum dignissim rhoncus</a></li>
                  <li><a href=\"#\">Nullam sem nisi, ullamcorper non ultrices sed</a></li>
                  <li><a href=\"#\">Fusce mi augue, lobortis eu faucibus sit ame</a>t</li>
                  <li><a href=\"#\">In eros erat, sodales congue luctus non</a></li>
                  <li><a href=\"#\">Curabitur laoreet, lacus vitae iaculis varius</a></li>
        </ul>

            </div>

           <div class=\"rounded_bottom\"><span></span></div>
      </div>

        <div class=\"section_w210 margin_r_20\">
        \t<div class=\"rounded_top\"><span></span></div>

<div class=\"sub_content\">

                <h2>New Item</h2>

                <center>
                <a class=\"gadget_photo\" href=\"#\" title=\"\"  target=\"_blank\">
\t\t\t\t<img src=\"images/product_1.jpg\" alt=\"title\" height=\"163\" width=\"180\"  /></a>
                </center>

                <p>Maecenas nec nisl at metus fermentum varius nec faucibus tortor.</p>

                <div class=\"button button_01\"><a href=\"#\">View</a></div>

            </div>

           <div class=\"rounded_bottom\"><span></span></div>
      </div>

        <div class=\"section_w210\">
        \t<div class=\"rounded_top\"><span></span></div>

<div class=\"sub_content\">

                <h2>Packages</h2>

                <h3>Vivamus sit amet</h3>
                <p>Aenean scelerisque, enim sit amet hendrerit egestas, augue felis fringilla odio, quis commodo nisl tortor sed orci.</p>

                <div class=\"button button_01\"><a href=\"#\">View</a></div>


            </div>

           <div class=\"rounded_bottom\"><span></span></div>
      </div>

    </div> <!-- end of a section_w940 -->

    <div class=\"cleaner\"></div>

</div>

<div id=\"templatemo_footer_wrapper\">

\t<div id=\"templatemo_footer\">
\t\t";
        // line 178
        $this->displayBlock("mackfooter", $context, $blocks);
        echo "
    \t
    </div>
\t<div class=\"cleaner\"></div>
</div>
<!-- <script type='text/javascript' src='js/jquery.min.js'></script>  -->
<script type='text/javascript' src='js/logging.js'></script>
</body>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 187
        echo "</html>";
    }

    public function getTemplateName()
    {
        return "index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 187,  256 => 178,  172 => 96,  169 => 95,  157 => 91,  151 => 90,  147 => 89,  144 => 88,  139 => 87,  137 => 86,  103 => 55,  61 => 16,  57 => 15,  53 => 14,  49 => 13,  45 => 12,  36 => 5,  34 => 2,  31 => 1,  14 => 4,);
    }
}
