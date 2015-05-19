<?php

class Router {
    /*
     * @the registry
     */

    private $registry;
    /*
     * @the controller path
     */
    private $path;
    public $args = array();
    public $file;
    public $controller;
    public $action;

    function __construct($registry) 
    {
        $this->registry = $registry;
    }

    /**
     * @set controller directory path
     * @param string $path
     * @return void
     */
    function setPath() 
    {
        $path = CONTROLLER_PATH;
        /*         * * check if path is a directory ** */
        if (is_dir($path) == false) {
            throw new Exception('Invalid controller path: `' . $path . '`');
        }
        /*         * * set the path ** */
        $this->path = $path;
    }

    /**
     * @load the controller
     * @access public
     * @return void
     */
    public function loader($isFile = true) 
    {
        self::setPath();
        // check the route
        $this->getController();
        // if the file is not there diaf
        if (is_readable($this->file) == false && !file_exists($this->file)) {
			$file = null;
			throw new FileNotFoundException($this->file);
        }
        // include the controller file
        require_once $this->file;
		
		// search the data if exist in table
		if(!isset($_GET['request']) && $isFile !== null){
			require_once CONTROLLER_PATH . "productController.php";
			$prod = new productController($this->registry);
			if($prod->isProduct() > 0)$this->registry->inner = "index";
		}

        // a new controller class instance
        $class = $this->controller . 'Controller';
        $controller = new $class($this->registry);

        // check if the action is callable
        if (! is_callable(array($controller, $this->action)) == true) {
            throw new ClassMethodNotFoundException($this->action, $class);
        } else {
            $action = $this->action;
            $controller->$action($this->args);
        }
        
    }

    /**
     * @get the controller
     * @access private
     * @return void
     */
    private function getController($base=null, $inner=null) 
    {
       /*** get the route from the url */
        $route = (empty($_GET['path'])) ? '' : $_GET['path'];
		$isProd = 0;
        if (empty($route)) {
            $route = 'index';
            $base = "index";
        } else {
            /*** get the parts of the route ** */
            $parts = explode('/', $route);
            $this->controller = $parts[0];
            // if example.com/$1 ex. admin
            if (count($parts) == 1) {
                // if view/admin/ folder
                $this->action = "index"; //index()
                $base = $parts[0]; // admin

            } else {
                $base = $parts[0];
                if (empty($parts[1])) {
                    $this->action = "index";
                    $base = $parts[0];
                } else {
                    foreach ($parts as $k => $p) {
                        if ($k == 1){
                            // get the method runner
                            $this->action .= $p;
                        }
                        else if ($k > 0 && $k <= count($parts) - 1){
                            // get the extra args
                            array_push($this->args, $p);
                        }
                    }                 
                }
            }
        }
		
		$this->registry->base = $base;		
		
        if (empty($this->controller)) {
            $this->controller = 'index';
        }
        /*         * * Get action ** */
        if (empty($this->action)) {
            $this->action = 'index';
        }
        /*         * * set the file path ** */
        $this->file = $this->path . $this->controller . 'Controller.php';
        
    }
	

};

// method({$a, $b})
