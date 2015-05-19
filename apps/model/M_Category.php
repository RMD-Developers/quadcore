<?php

/* 
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class M_Category extends Model{
    
	/*
	 *@return list of main category in the table
	 */
    public function getMainCategoryList(){
		try{
			Category::$conditionQry = null;
			
			$this->arrRes["id"] = array();
			$this->arrRes["val"] = array();
			$cat = CategoryFacade::findCategory("FIND_MAIN");
			foreach($cat as $category){
				array_push($this->arrRes["id"], $category->maincat_id);
				array_push($this->arrRes["val"], $category->maincat_desc);
			}
			echo json_encode($this->arrRes);
		} catch (PDOException $ex) {
            Log::dbLog($ex);
        }
    }
	
	/*
	 *@return list of main category in the table
	 */
    public function getSubCategoryList(){
		try{
			Category::$conditionQry = null;
			
			$this->arrRes["id"] = array();
			$this->arrRes["val"] = array();
			$param = isset($_GET["param"])? $_GET["param"]:null;
			$id = isset($param) && isset($param["id"])?$param["id"]:1;
			$id = isset($_GET['mcat'])&&$_GET['mcat']!=null?$_GET['mcat']:$id;
			Category::$conditionQry = " WHERE maincat_id = :maincat_id";
			
			$cat = CategoryFacade::findCategory("FIND_SUB", array(":maincat_id"=>$id));
			foreach($cat as $category){
				array_push($this->arrRes["id"], $category->subcat_id);
				array_push($this->arrRes["val"], $category->subcat_desc);
			}
			echo json_encode($this->arrRes);
		} catch (PDOException $ex) {
            Log::dbLog($ex);
        }
    }
}

