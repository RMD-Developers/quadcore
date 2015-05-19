<?php

namespace UtilityTwigExtension;

class Utility_Twig_Extension extends \Twig_Extension
{
	protected $reg = array();
	
	function __construct($reg)
	{
		$this->reg = $reg;
	}
	
	public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('price', array($this, 'priceFilter')),
        );
    }
	
	public function getFunctions() {
        return 
			array( 
				new \Twig_SimpleFunction('logged', array($this, 'isLogged')),
				new \Twig_SimpleFunction('isFTOn', array($this, 'isFeatureOn')),
				new \Twig_SimpleFunction('isExistFile', array($this, 'isExistFile')),
				new \Twig_SimpleFunction('get', array($this, 'getURLvar'))
			);
    }
	
	/******************************** {{  START FILTER }} *******************************/
    public function priceFilter($number, $decimals = 0, $decPoint = '.', $thousandsSep = ',') {
        $price = number_format($number, $decimals, $decPoint, $thousandsSep);
        $price = '$'.$price;

        return $price;
    }
	
	/******************************** {{  START FUNCTION }} *******************************/
	/** @return true if logged user **/
	public function isLogged() {
		if(isset($_SESSION['userID'])) return 1;
		else return 0;
	}
	/** @return true if feature is on **/
	public function isFeatureOn($feature, $src){
		$xmlDoc = new \DOMDocument();
		$xmlDoc->load(UTIL_PATH . "features.xml");
		$ft=$xmlDoc->getElementsByTagName('FT');
		$sr=$xmlDoc->getElementsByTagName('SR');
		$y = ""; $isFound = false; $isIo = 0;
		for ($i=0; $i<=$ft->length-1; $i++) {
		//Process only element nodes
		if ($ft->item($i)->nodeType==1) {
		  if ($ft->item($i)->childNodes->item(0)->nodeValue == $feature && $sr->item($i)->childNodes->item(0)->nodeValue == $src) {
			  $y=($ft->item($i)->parentNode);
			  $isFound = true;
			}
		  }
		}
		if($isFound):
			$data=($y->childNodes);
			for ($i=0;$i<$data->length;$i++) { 
			//Process only element nodes
			if ($data->item($i)->nodeType==1) {
			  if($data->item($i)->nodeName == "IO")
				$isIo = $data->item($i)->childNodes->item(0)->nodeValue;
			  }
			}
		endif;
		return $isIo;
	}
	/** @return GET variable **/
	public function getURLvar($var = null){
		$var = isset($_GET["$var"]) && $var !== null? $_GET["$var"] : null;
		return $var;
	}
	
	/** @return Bool value **/
	public function isExistFile($file = null){
		if($file === null)return false;
		else if(file_exists($file) == true)return true;
		else if(file_exists($file) == false)return false;
	}

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName() {
        return 'utility';
    }

}

/** Thank God It Worked! **/