<?php

Class Template {
    /*
     * @the registry
     * @access private
     */

    private $registry;

    /*
     * @Variables array
     * @access private
     */
    public $vars = array();

    /**
     * @constructor
     * @access public
     * @return void
     */
    function __construct($registry) 
    {
        $this->registry = $registry;
    }

    /**
     * @set undefined vars
     * @param string $index
     * @param mixed $value
     * @return void
     */
    public function __set($index, $value) 
    {
        $this->vars[$index] = $value;
    }

    public function show($name) 
    {
        
        $path = VIEW_PATH;
        $file = $name;
		
        $ext = substr($file, strrpos($file, '.') + 1);

        if (file_exists($path . $file) == false) {
            $file = str_replace('/', '\\', $path . $file);
            throw new FileNotFoundException($file, __FILE__);
        }
         // Load variables
        foreach ($this->vars as $key => $value)
        {
            // $var['var']['data'] => 'value'
            $$key = $value;
            // @return $var['data'] => 'value'
        }
        /**
         * How to access set vars?
         * <-- ex $CSS, $JS, etc.
         */
        foreach($var as $k => $value){
            // $var['data'] => 'value'
            $$k = $value;
            // @return $data => 'value'
        }




        $path .= $file;

        // include the a view file
        include_once ($path);
        
        // if (strtolower($ext) != "php") {
        //     Twig_Autoloader::register();
        //     require(CLASS_PATH . "Utility_Twig_Extension.class.php");

        //     $loader = new Twig_Loader_Filesystem(VIEW_PATH);
        //     $twig = new Twig_Environment($loader, array(
        //         'cache' => CACHE_PATH,
        //         'auto_reload' => true
        //     ));
        //     $twig->addExtension(new Twig_Extension_Escaper());
        //     $twig->addExtension(new UtilityTwigExtension\Utility_Twig_Extension($this->registry));
        //     $template = $twig->loadTemplate($file);
        //     $template->display($this->registry->templateAttrb);
        // }
    }

};


// Load variables
//foreach ($this->vars as $key => $value) {
//	$$key = $value;
//}