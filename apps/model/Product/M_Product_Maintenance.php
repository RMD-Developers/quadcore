<?php

/* 
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class M_Product_Maintenance extends Model{
	
	public function loadProduct(){
		try{	
			$this->arrRes['result'] = "";
			$q = isset($_GET['str'])?Init::clean($_GET['str']):"";
			$sort = isset($_GET['sort'])?$_GET['sort']:"ASC";
			Product::$conditionQry = " WHERE model LIKE '%$q%' ORDER BY prod_id " . $sort;
			$prod = ProductFacade::findProduct("FIND_WITH_MCAT");
			
			if(count($prod)){
			
				foreach($prod as $k=>$product):
					$this->arrRes['result'] .= "
						<tr>
						  <td style='width:4%'><center><input type='checkbox' id='$product->prod_id' value=''><label for='$product->prod_id'><span></span></label></center></td>
						  <td style='width:18%'><a href='Javascript:void(0)' class='btn btn-danger btn-xs'>Delete</a>&nbsp;&nbsp;&nbsp;
							<a href='".SERVER_PATH."product/$product->prod_id?edit' class='btn btn-warning btn-xs'>Edit</a>&nbsp;&nbsp;&nbsp;
							<a href='".SERVER_PATH."product/$product->prod_id?srt=latest' class='btn btn-primary btn-xs'>Details</a></td>
						  <td style='width:3%'>".($k+1)."</td>
						  <td>$product->model</td>
						  <td>$product->maincat_desc - $product->subcat_desc</td>
						  <td>$product->prod_desc</td>
						  <td>".date_format(new DateTime($product->date_added), "F d, Y")."</td>
						</tr>
					";
				endforeach;
			} else {
				$this->arrRes['result'] .= "
					<tr><td colspan=7 style='text-align:center'>No product available.</td></tr>; ";
			}
			
			Product::$conditionQry = null;
			echo json_encode($this->arrRes);
		} catch (PDOException $ex) {
            Log::dbLog($ex);
        }	
	}
	
	public function deleteProduct(){
		$ids = $_GET['id'];
		foreach($ids as $id):
		try{	
			Product::$conditionQry = " prod_id = :prod_id LIMIT 1";
			$param =  array(":prod_id"=>$id);
			$prod = ProductFacade::modifyProduct($param, "DELETE");
			
			$imgPath = 'plugin/imgs/profile/product/';
			if(file_exists($imgPath . $id . ".jpg"))unlink($imgPath . $id . ".jpg");
			
			if(count($prod)){
				$this->strRes = "success";
			}
		} catch (PDOException $ex) {
            Log::dbLog($ex);
        }
		endforeach;
		
		Product::$conditionQry = null;
		echo $this->strRes;
	}
					
}

