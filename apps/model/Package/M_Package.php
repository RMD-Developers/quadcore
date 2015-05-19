<?php

/* 
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class M_Package extends Model{
		
	public function addEditPackage(){
		ini_set('meemory_limit', '96M');
		ini_set('post_max_size', '64M');
		ini_set('upload_max_filesize', '64M');
		
		$param = $_GET['param']; $paramArr = array();
		
		foreach($param as $p){
			array_push($paramArr, Init::clean($p));
		}
		if(isset($_GET['isEdit']) && $_GET['isEdit'] == "false"){
			Package::$conditionQry = " (package_cat, package_desc, package_price, prod_inc, date_added) 
				values (:0, :1, :2, :3, now())";
			$param =  array(
				":0"=>$paramArr[0], ":1"=>$paramArr[1], ":2"=>$paramArr[2], ":3"=>$paramArr[3]
			);
			$package = PackageFacade::modifyPackage($param);
		}
		
		if(isset($_GET['isEdit']) && $_GET['isEdit'] == "true"){
				
			$id = isset($_GET['id'])?$_GET['id']:"";
			Package::$conditionQry = " package_cat = :0, package_desc = :1, package_price = :2, prod_inc = :3 WHERE package_id = :package_id LIMIT 1";
			$param =  array(
				":0"=>$paramArr[0], ":1"=>$paramArr[1], ":2"=>$paramArr[2], ":3"=>$paramArr[3], ":package_id"=>$id
			);
			$package = PackageFacade::modifyPackage($param, "UPDATE");
		}
		
		$imgPath = 'plugin/imgs/profile/package/';
		if((!empty($_FILES["images"])) && ($_FILES['images']['error'] == 0)){
			$lastId = 0;
			Package::$conditionQry = " ORDER BY pa.package_id DESC LIMIT 1";
			$package = PackageFacade::findPackage("FIND_ALL");
			foreach($package as $package){
				$lastId = $package->package_id;
			}
			if(isset($_GET['isEdit']) && $_GET['isEdit'] == "true")$lastId = $id;
			
			$filename = ($lastId) . ".jpg";
			$old = umask(0); chmod($_FILES['images']['tmp_name'], 0777); umask($old);
			try{
				if(move_uploaded_file($_FILES['images']['tmp_name'], $imgPath . $filename)){
					$old = umask(0); chmod($imgPath . $filename, 0777); umask($old);
				} else {
					throw new Exception("File cannot be uploaded.");
				}
			} catch (Exception $err){
				die($err->getMessage());
			}
		}
		
		if(isset($_GET['removeCurImg']) && $_GET['removeCurImg'] == "true"){
			if(file_exists($imgPath . $id . ".jpg"))unlink($imgPath . $id . ".jpg");
		}
		Package::$conditionQry = null;
		if(count($package))echo "success";
	}
	
	/*** Get Package Info **/
	public function getPackageDetails(){
		try{
			Package::$conditionQry = " WHERE package_id = :package_id LIMIT 1";
			$param =  array(":package_id"=>$_REQUEST['id']);
			$package = PackageFacade::findPackage("FIND_ALL", $param);
			foreach($package as $package):
				$package = $package;
			endforeach;
			
			Package::$conditionQry = null;
			return $package;
		} catch (PDOException $ex) {
            Log::dbLog($ex);
        }
	}
	
	public function loadPackage(){
		try{	
			$this->arrRes['result'] = "";
			$this->arrRes['pages'] = "";
			/** GET vars **/
			$searchStr = isset($_GET['str'])?$_GET['str']:"";
			$q = Init::clean($searchStr);
			$order = isset($_GET['order'])?$_GET['order']:"DESC";
			$qQuery = " package_desc LIKE '%$q%' ";
			$addLinkUrlSort = "view=latest";
			
			$mainCat = isset($_GET['view'])?$_GET['view']:"";
			$mainCat = in_array($mainCat, array("small","home")) == false?"":$mainCat;
			$catQry = $mainCat != ""?" AND package_cat = '$mainCat'":"";
			
			Package::$conditionQry = " WHERE ".$qQuery.$catQry." ORDER BY package_id ".$order;
			$packageTotal = PackageFacade::findPackage("FIND_ALL");
			$countRes = 0;
			if(count($packageTotal ))foreach($packageTotal as $package): $countRes++; endforeach;
			
			$this->arrRes['pages'] = $this->getPagination($countRes);
			
			Package::$conditionQry = " WHERE ".$qQuery.$catQry." ORDER BY  package_id ".$order. " LIMIT ". $this->start .",". $this->resPerPage;
			$package = PackageFacade::findPackage("FIND_ALL");
			$i = 0;
			
			if(count($package)){
				
				foreach($package as $package){
					
					$imgPath = SERVER_PATH . 'plugin/imgs/profile/package/'; 
					$prod_profile = $imgPath . $package->package_id . ".jpg";
					$link = "";
					
					if(isset($_SESSION['userID']))$link .= '<a href="'.SERVER_PATH.'package/'.$package->package_id.'?edit" class="btn btn-success" role="button"><span class="glyphicon glyphicon-edit"></span> Edit</a>';
					$this->arrRes['result'] .= '
						<div class="'.$this->xs[5].' '.$this->sm[3].' '.$this->md[3].' '.$this->lg[3].'">
							<div class="thumbnail">
							  <img src="'.$prod_profile.'">
							  <div class="caption">
								<div class="content">
									<h5>'.$package->package_desc.'</h5>
									<h6>'.(($package->package_cat=="home")?"Home Package":"Small Business Package").'</h6>
								</div>
								<div class="buttons" align=center>
									<a href="'.SERVER_PATH.'package/'.$package->package_id.'?view='.$mainCat.'" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-plus"></span> Details</a> 
									'.$link.'
								</div>
							</div>
						</div>
					</div>
					';
				}
			}
			
			Package::$conditionQry = null;
			echo json_encode($this->arrRes);
			
		} catch (PDOException $ex) {
            Log::dbLog($ex);
        }	
	}
	
	
	public function getPagination($totRec, $urlVars = null){
		
		/******************************************** Pagination **********************************************/
		$curPage = isset($_GET['page']) && $_GET['page'] != ""?intval($_GET['page']):1;
		$q = isset($_GET['str'])?urlencode($_GET['str']):urlencode("");
		$urlVars .= isset($_GET['view'])?"view=" . $_GET['view']."&":"";
		$urlVars .= isset($_GET['order'])?"order=" .$_GET['order']:"order=DESC";
		
		$this->resPerPage = 6;
		$this->resPerPage = ($this->resPerPage=="all")?$totRec:$this->resPerPage;
		$totPages = ($totRec==0)?0: ceil($totRec/$this->resPerPage); // 
				
		if($curPage==0)$curPage++;
		else if($curPage==-1)$curPage+=2;
		$file = SERVER_PATH . "package/";
		$inlinePage = 10;
		$this->start = ($curPage-1)*$this->resPerPage;
		
				
		$footer = ""; 
		$i = $inlinePage>$totPages?1:$curPage; $innerCtr = 1;
		$urlVars .= "&";
		
		if($this->start+1 > $this->resPerPage){if($curPage-1 > 1 && $totPages > $inlinePage)$footer="<a href='$file?". $urlVars ."page=1&str=$q' class='btn btn-default'>1</a>"; if($totPages > $inlinePage)$footer .= "<a  class='btn btn-default' href='$file?". $urlVars ."page=".($curPage-1)."&str=$q'>Back</a>";}
		else {$footer="";}
		if($curPage+$inlinePage <= $totPages ){
			while($totPages>=$i):
				if($curPage == $i)$footer.="<a href='#'  class='active disabled btn btn-default'>$i</a>";//
				else $footer.="<a class='btn btn-default' href='$file?". $urlVars ."page=$i&str=$q'>$i</a>";//
				if($innerCtr == $inlinePage){
					if($curPage+$inlinePage <= $totPages)$footer.="<span class='dot'>...</span><a class='btn btn-default'  href='$file?". $urlVars ."page=$totPages&str=$q'>$totPages</a>";
				}
				if($curPage < $totPages && $innerCtr == $inlinePage && $totPages > $inlinePage)$footer.="<a class='btn btn-default' href='$file?". $urlVars ."page=".($curPage+1)."&str=$q'>Next</a>";
				if($innerCtr == $inlinePage){ break; }
				$i++; $innerCtr++;
			endwhile;
		} else {
			$icount = 0;$i = ($totPages-$inlinePage) + 1;
			if($i<=0)$i=1;
			if($inlinePage>$totPages)$inlinePage=$totPages;
			while($inlinePage>=$icount):
				if($curPage == $i)$footer.="<a class='btn btn-default disabled active' href='#' >$i</a>";//
				else $footer.="<a class='btn btn-default' href='$file?". $urlVars ."page=$i&str=$q'>$i</a>";//
				if($innerCtr == $inlinePage){
					if($curPage+$inlinePage < $totPages)$footer.="<span class='dot'>...</span><a class='btn btn-default' href='$file?". $urlVars ."page=$totPages&str=$q'>$totPages</a>";
					break;}
				if($curPage < $totPages && $innerCtr == $inlinePage &&  $totPages > $inlinePage)$footer.="<a class='btn btn-default'   href='$file?". $urlVars ."page=".($curPage+1)."&str=$q'>Next</a>";
				if($innerCtr == $inlinePage){ break; }
				$i++; $innerCtr++;
				$icount++;
			endwhile;
		}
		if($totRec<=$this->resPerPage){$footer = "";}
		
		return $footer;
	}
}

