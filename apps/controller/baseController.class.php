<?php

Abstract Class baseController extends Controller {

	/*
	 * @registry object
	 */
	protected $registry;
	protected $var = array();
	protected $file = null;
	
	protected $xmlHttpRequest = false;
	protected $ajaxClass = null;
	protected $reqArray = array();
	
	protected  $extension = ".php";
	protected  $http_ext = ".php";

	protected $_header = 'default';
	protected $_footer = 'default';

	protected $_title = 'Quadcore Online Solutions, Inc.';
	/**
	 * Used for method($argument) for sub-class
	 * @array
	 */
	protected $_args = array();

	function __construct($registry)
	{
		$this->registry = $registry;
		self::isAjaxRequest();
		self::loadRequirement();

		/*** file required in view ex. index.htm product/index.htm ***/
		$reg = $this->registry;
		$base = $reg->base;
		self::render($base);
	}
	
	private function isAjaxRequest()
	{
		if(isset($_GET['request'])) $this->xmlHttpRequest = true;
	}
	
	protected function loadRequirement($attrb = null, $create = false)
	{
		$attrb = $attrb==null? array(): $attrb;
		
		/** if logged get user info **/
		if(isset($_SESSION['userID'])){
			require_once(MODEL_PATH . 'User/M_User.php');
			
			$_REQUEST['id'] = $_SESSION['userID'];
			$user = new M_User();
			$attrb["dbLoggedUser"] = $user->getUserDetails();
		}
// ----------------------------- <<< NOTE >>> ------------------------------------------
// Note: To update these variables 
// just place this line $this->registry->template->vars['var']['<<<varsName>>>'] = '';
// on the block you want this to override ex. indexController class  in index() method
// -------------------------------------------------------------------------------------

/* PATHS
 * ------------------------------ */
		$attrb["URL_PATH"] = SERVER_PATH;
		$attrb["ASSETS_PATH"] = ASSETS_PATH;
		$attrb["IMG_PATH"] = IMG_PATH;
		$attrb["CSS_PATH"] = CSS_PATH;
		$attrb["JS_PATH"] = JS_PATH;

		
/* ASSETS LOADED
 * ------------------------------ */
		$assetsLinks = new AssetsLinks();

		$assets = new Assets();
		$assets->setCSS($assetsLinks->getCSSLinks());
		$assets->setJS($assetsLinks->getJSLinks());

		$attrb['CSS_SRC'] = $assets->getCSS();
		$attrb['JS_SRC'] = $assets->getJS();

		// if application is used
		if($this->registry->base == 'app'){
			$assets->setCSS($assetsLinks->getAppCSSLinks(), 'replace');
			$assets->setJS($assetsLinks->getAppJSLinks(), 'replace');

			$attrb['CSS_SRC'] = $assets->getCSS();
			$attrb['JS_SRC'] = $assets->getJS();
		}

/* SETTINGS
 * ------------------------------ */
		$attrb["HEADER"] = $this->_header;
		$attrb["FOOTER"] = $this->_footer;

		$attrb["TITLE"] = $this->_title;

		// bring it on!
		$this->registry->templateAttrb = $attrb;
	}
	
	private function render($base)
	{
	
		// test if http ajax or simple url request
		$this->file = self::$_model_prefix . $base;
		
		$this->ajaxClass = self::$_model_prefix . $base;
		$this->registry->template->var = $this->registry->templateAttrb;
		$this->_var = $this->registry->template->vars['var']; // assign to a variable
	}
	
	/*
	 * @param Class for ajax
	 * @call function of called class
	 */
	protected function process($act = null)
	{
		if(file_exists(MODEL_PATH . $this->file . $this->http_ext)){
				require_once(MODEL_PATH . $this->file . $this->http_ext);
				$action = $act === null ? $_GET['request'] : $act;
				$class = new $this->ajaxClass();
				if(is_callable(array($class, $action)) === true)
						$class->$action();
				else
						echo "Request '".$_GET['request']."' not found.";
		} else {
				throw new FileNotFoundException(MODEL_PATH . $this->file . $this->http_ext, __FILE__);
		}
	}

	/* @set page header
	 */
	protected function _setHeader($header = null){
		$this->_header = $header;
	}

	/* @get the page header
	 */
	protected function _getHeader(){
		return $this->_header;
	}

	/* @set page footer
	 */
	protected function _setFooter($footer = null){
		$this->_footer = $footer;
	}

	/* @get the page footer
	 */
	protected function _getFooter(){
		return $this->_footer;
	}

	/**
	 * This must be override by 
	 * all sub class of this controller
	 *
	 * @override 
	 */
	abstract function index();
	
};