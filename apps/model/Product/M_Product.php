<?php

/* 
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class M_Product extends Model{
    private $start;
	private $resPerPage;
		
	public function addProduct(){
		ini_set('meemory_limit', '96M');
		ini_set('post_max_size', '64M');
		ini_set('upload_max_filesize', '64M');
		
		$param = $_GET['param']; $paramArr = array();
		foreach($param as $p){
			array_push($paramArr, Init::clean($p));
		}
		if(isset($_GET['isEdit']) && $_GET['isEdit'] == "false"){
			if($param[0] == 1){
				Product::$conditionQry = " (prod_desc, subcat_id, model, image_format, disp_res, record_rate, record_mode,
					storage_media, audio_input, back_up, power_source, best_seller, date_added) 
					values (:0, :1, :2, :3, :4, :5, :6, :7, :8, :9, :10, :11, now())";
				$param =  array(
					":0"=>$paramArr[2], ":1"=>$paramArr[1], ":2"=>$paramArr[3], ":3"=>$paramArr[4],
					":4"=>$paramArr[5], ":5"=>$paramArr[6], ":6"=>$paramArr[7], ":7"=>$paramArr[8],
					":8"=>$paramArr[9], ":9"=>$paramArr[10], ":10"=>$paramArr[11], ":11"=>$paramArr[22]
				);
				$prod = ProductFacade::modifyProduct($param);
			}
			
			else if($param[0] == 2){
				Product::$conditionQry = " (prod_desc, subcat_id, image_sensor, tv_line, lux, lens, power_supply,
					curr_consumption, ir_led, ir_range, remarks, maker, best_seller, date_added, model) 
					values (:0, :1, :2, :3, :4, :5, :6, :7, :8, :9, :10, :11, :12, now(), :13)";
				$param =  array(
					":0"=>$paramArr[2], ":1"=>$paramArr[1], ":2"=>$paramArr[12], ":3"=>$paramArr[13],
					":4"=>$paramArr[14], ":5"=>$paramArr[15], ":6"=>$paramArr[16], ":7"=>$paramArr[17],
					":8"=>$paramArr[18], ":9"=>$paramArr[19], ":10"=>$paramArr[20], ":11"=>$paramArr[21],
					":12"=>$paramArr[22], ":13"=>$paramArr[3]
				);
				$prod = ProductFacade::modifyProduct($param);
			}
			
		}
		
		if(isset($_GET['isEdit']) && $_GET['isEdit'] == "true"){
				
			$id = isset($_GET['id'])?$_GET['id']:"";
			if($param[0] == 1){
				Product::$conditionQry = " prod_desc = :0, subcat_id = :1, model = :2, image_format = :3, disp_res = :4, 
					record_rate = :5, record_mode = :6,
					storage_media = :7, audio_input = :8, back_up = :9, power_source = :10, best_seller = :11 WHERE prod_id = :prod_id LIMIT 1";
				$param =  array(
					":0"=>$paramArr[2], ":1"=>$paramArr[1], ":2"=>$paramArr[3], ":3"=>$paramArr[4],
					":4"=>$paramArr[5], ":5"=>$paramArr[6], ":6"=>$paramArr[7], ":7"=>$paramArr[8],
					":8"=>$paramArr[9], ":9"=>$paramArr[10], ":10"=>$paramArr[11], ":prod_id"=>$id,
					":11"=>$paramArr[22]
				);
				$prod = ProductFacade::modifyProduct($param, "UPDATE");
			}
			
			else if($param[0] == 2){
				Product::$conditionQry = " prod_desc = :0, subcat_id = :1, image_sensor = :2, tv_line = :3, lux = :4, lens = :5, 
					power_supply = :6, curr_consumption = :7, ir_led = :8, ir_range = :9, 
					remarks = :10, maker = :11, best_seller = :12, model = :13 WHERE prod_id = :prod_id  LIMIT 1";
				$param =  array(
					":0"=>$paramArr[2], ":1"=>$paramArr[1], ":2"=>$paramArr[12], ":3"=>$paramArr[13],
					":4"=>$paramArr[14], ":5"=>$paramArr[15], ":6"=>$paramArr[16], ":7"=>$paramArr[17],
					":8"=>$paramArr[18], ":9"=>$paramArr[19], ":10"=>$paramArr[20], ":11"=>$paramArr[21],
					":prod_id"=>$id, ":12"=>$paramArr[22], ":13"=>$paramArr[3]
				);
				
				$prod = ProductFacade::modifyProduct($param, "UPDATE");			
			}
		
		}
		
		$imgPath = 'plugin/imgs/profile/product/';
		if((!empty($_FILES["images"])) && ($_FILES['images']['error'] == 0)){
			$lastId = 0;
			Product::$conditionQry = " ORDER BY p.prod_id DESC LIMIT 1";
			$prod = ProductFacade::findProduct("FIND_WITH_MCAT");
			foreach($prod as $prod){
				$lastId = $prod->prod_id;
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
		
		Product::$conditionQry = null;
		if(count($prod))echo "success";
	}
	
	public function loadProduct(){
		try{	
			$this->arrRes['result'] = "";
			$this->arrRes['pages'] = "";
			/** GET vars **/
			$searchStr = isset($_GET['searchText'])?$_GET['searchText']:"";
			$q = Init::clean($searchStr);
			$sort = isset($_GET['sort'])?$_GET['sort']:"p.prod_id";
			$order = isset($_GET['order'])?$_GET['order']:"DESC";
			$qQuery = " model LIKE '%$q%' ";
			$addLinkUrlSort = "srt=latest";
			
			$mainCat = isset($_GET['main_cat'])?intval($_GET['main_cat']):"all";
			$catQry = $mainCat != "all"?" AND m.maincat_id = ". $mainCat:"";
			$subCatQry = "";
			
			if(isset($_GET['sub_cat'])){
				$subCatIds = implode(",", $_GET['sub_cat']);
				$subCatQry = " AND p.subcat_id in ($subCatIds) ";
			}
			
			Product::$conditionQry = " WHERE ".$qQuery.$catQry.$subCatQry." ORDER BY ".$sort." ".$order;
			$prodTotal = ProductFacade::findProduct("FIND_WITH_MCAT");
			$countRes = 0;
			if(count($prodTotal ))foreach($prodTotal as $product): $countRes++; endforeach;
			$this->arrRes['pages'] = $this->getPagination($countRes);
			
			Product::$conditionQry = " WHERE ".$qQuery.$catQry.$subCatQry." ORDER BY ".$sort." ".$order." LIMIT ". $this->start .",". $this->resPerPage;
			$prod = ProductFacade::findProduct("FIND_WITH_MCAT");
			$i = 0;
			
			$this->arrRes['result'] .= '<div class="product-div">';
			
			if(count($prod)){
				if($q != "")$this->arrRes['result'] .= '
					<div class="'. $this->lg[11] . ' no-found-product">
						<div class="inner-no-found"><p>&nbsp;&nbsp;&nbsp;Searched for <span>"'.$searchStr.'"</span>.</p>
					</div>
					';
				foreach($prod as $product):
					$i++;
					if($product->maincat_id == 1){ $p = $product;
						$content = "
						<p>$p->subcat_desc / $p->maincat_desc</p>
						$p->prod_desc
						<p><span>Image format:</span> $p->image_format</p>
						<p><span>Display resolution:</span> $p->image_format</p>
						<p><span>Record rate:</span> $p->record_rate</p>
						<p><span>Record mode:</span> $p->record_mode</p>
						<p><span>Storage media:</span> $p->storage_media</p>
						<p><span>Audio input:</span> $p->audio_input</p>
						<p><span>Back up:</span> $p->back_up</p>
						<p><span>Power source:</span> $p->power_source</p>
						";
					}
					else if($product->maincat_id == 2){ $p = $product;
						$content = "
						<p>$p->subcat_desc / $p->maincat_desc</p>
						$p->prod_desc
						<p><span>Image sensor:</span> $p->image_sensor</p>
						<p><span>Display resolution(TVL)):</span> $p->tv_line</p>
						<p><span>Lux:</span> $p->lux</p>
						<p><span>Lens:</span> $p->lens</p>
						<p><span>Power supply:</span> $p->power_supply</p>
						<p><span>Current Consumption:</span> $p->curr_consumption</p>
						<p><span>IR LED:</span> $p->ir_led</p>
						<p><span>IR RANGE:</span> $p->ir_range</p>
						<p><span>Remarks:</span> $p->remarks</p>
						<p><span>Maker:</span> $p->maker</p>
						";
					}
					$link = null;
					if(isset($_SESSION['userID']))$link = '<a data-state="'.$p->prod_id.'?edit" class="btn btn-warning" href="'.SERVER_PATH.'product/'.$product->prod_id.'?edit" name="btnEditProduct"><span class="glyphicon glyphicon-edit"></span> Edit</a>';
					
					$imgPath = SERVER_PATH . 'plugin/imgs/profile/product/'; 
					$prod_profile = $imgPath . $p->prod_id;
					
					$strRating = $this->getRate($p->rate, $p->rate_count);
			
					$this->arrRes['result'] .= '
					<div class="'. $this->sm[5] . " " . $this->md[3]." ". $this->lg[3] .' inner-product-div">
						<div class="thumbnail" >
						  <img  src="'.$prod_profile.'" alt="' . $p->subcat_desc. '" />
							<div class="caption">
							  <div class="'. $this->hd["xs"] .' content">
								<h3><label>model:</label> '.$p->model.'</h3>
								'. $content .'
							  </div>
							  <div class="'. $this->vb["xs"] . ' '. $this->hd["sm"] . ' '. $this->hd["md"] . ' ' .$this->hd["lg"]. ' content">
								<h3><label>model:</label> '.$p->model.'</h3>
							  </div>
							  <div class="rating" align=center>
								<button class="btn btn-default btn-rating" data-id="'.$p->prod_id.'"> 
									'.$strRating.'
								</button>
							  </div>
							  <div class="buttons" align=center>
								<a href="'. SERVER_PATH . "product/" . $p->prod_id.'?'.$addLinkUrlSort.'" data-state="' .$p->prod_id. '" name="txtGoProduct" data-Product="'. $product->maincat_desc .'" data-id="'.$product->prod_id.'" class="btn btn-primary view_'.$product->prod_id.'"><span class="glyphicon glyphicon-plus"></span> View details</a>
								'. $link .'
							  </div>
							</div>
						</div>
					</div>';
				endforeach;
			} else {
				$this->arrRes['result'] .= '
					<div class="'. $this->lg[11] . ' no-found-product">
						<div class="inner-no-found"><p>&nbsp;&nbsp;&nbsp;Searched for  <span>"'.$searchStr.'"</span>.</p>
						<hr/> &nbsp;&nbsp;&nbsp;No found product(s) in our database.
						</div>
					</div>
					';
			}
			$this->arrRes['result'] .= '</div>';
			
			Product::$conditionQry = null;
			echo json_encode($this->arrRes);
		} catch (PDOException $ex) {
            Log::dbLog($ex);
        }	
	}
	
	public function viewProduct(){
		try{
			Product::$conditionQry = " WHERE prod_id = :prod_id LIMIT 1";
			$param =  array(":prod_id"=>$_GET['id']);
			$prod = ProductFacade::findProduct("FIND_WITH_MCAT", $param);
			foreach($prod as $prod):
			$p = $prod;
			if($p->maincat_id == 1)$contents = "
				$p->prod_desc
				<p><strong>Model:</strong> $p->model</p>
				<p><strong>Image format:</strong> $p->image_format</p>
				<p><strong>Display resolution:</strong> $p->image_format</p>
				<p><strong>Record rate:</strong> $p->record_rate</p>
				<p><strong>Record mode:</strong> $p->record_mode</p>
				<p><strong>Storage media:</strong> $p->storage_media</p>
				<p><strong>Audio input:</strong> $p->audio_input</p>
				<p><strong>Back up:</strong> $p->back_up</p>
				<p><strong>Power source:</strong> $p->power_source</p>
				";
			else if($p->maincat_id == 2)$contents = "
				$p->prod_desc
				<p><strong>Model:</strong> $p->model</p>
				<p><strong>Image sensor:</strong> $p->image_sensor</p>
				<p><strong>Display resolution(TVL)):</strong> $p->tv_line</p>
				<p><strong>Lux:</strong> $p->lux</p>
				<p><strong>Lens:</strong> $p->lens</p>
				<p><strong>Power supply:</strong> $p->power_supply</p>
				<p><strong>Current Consumption:</strong> $p->curr_consumption</p>
				<p><strong>IR LED:</strong> $p->ir_led</p>
				<p><strong>IR RANGE:</strong> $p->ir_range</p>
				<p><strong>Remarks:</strong> $p->remarks</p>
				<p><strong>Maker:</strong> $p->maker</p>
				";	
			$link = null;
			if(isset($_SESSION['userID']))$link = '<button href="'.SERVER_PATH.'product/'.$prod->prod_id.'?edit" class="btn btn-warning" name="btnEditProduct"><span class="glyphicon glyphicon-edit"></span> Edit</button>';
			
			$imgPath = SERVER_PATH . 'plugin/imgs/profile/product/'; 
			$prod_profile = $imgPath . $p->prod_id;
					
			$strRating = $this->getRate($p->rate, $p->rate_count);
			//for($i=0; $i++; $i<$ratings) $strRating .= '<span class="glyphicon glyphicon-star"></span>';
			
			$this->strRes = '
				<div class="'. $this->sm[11] . " " . $this->md[11]." ". $this->lg[11] .'">
					<div class="thumbnail">
					    <div class="active-product-profile '. $this->xs[11] . " " . $this->sm[5] . " " . $this->md[4]." ". $this->lg[3] .'">
							<img data-src="" class="has-profile" src="'.$prod_profile.'" alt="' . $p->subcat_desc. '">
							<div>HOVER the pix to view larger.</div>
						</div>
						<div class="caption '. $this->xs[10] . " " . $this->sm[4] . " " . $this->md[6]." ". $this->lg[7] .'">
						 <h3>'.$prod->subcat_desc." / ".$prod->maincat_desc.'</h3>
						  <div class="active-content">'. $contents .'</div>
						  <div class="rating">
							<button class="btn btn-default btn-rating" data-id="'.$p->prod_id.'"> 
								'.$strRating.'
							</button>
						  </div>
						  <div class="buttons">
							<button class="btn btn-default" onclick="$.runScrollerHide();"><span class="glyphicon glyphicon-off"></span> Hide Box</button>
							' . $link . '
							<span class="share-span"> Share:</span>
							<a href="" class="twitter"><span></span></a>
							<a href="" class="facebook"><span></span></a>
							<a href="" class="youtube"><span></span></a>
							</div>
						</div>
					</div>
				</div>
			';
			endforeach;
			
			Product::$conditionQry = null;
			echo $this->strRes;
		} catch (PDOException $ex) {
            Log::dbLog($ex);
        }	
	}
    
	public function getRate($rate, $rate_count, $baseRate = 5){
		$strRating = "";
		if($rate == 0 || $rate_count == 0){ for($i=0; $i<$baseRate; $i++)$strRating .= '<a href="" class="glyphicon glyphicon-star-empty"></a>'; }
		else{
			$totRate = $rate_count * $baseRate;
			$totRate = floor(($rate/$totRate) * $baseRate);
			for($i=0; $i<$totRate; $i++)$strRating .= '<a  href="" class="glyphicon glyphicon-star"></a>';
			for($i=0; $i<($baseRate - $totRate); $i++)$strRating .= '<a  href="" class="glyphicon glyphicon-star-empty"></a>';				
		}
		return $strRating;
	}
	
	public function generateWatermark($prod_profile, $pathOfProfile){
		header('Content-type: image/jpeg');
		$watermark = imagecreatefrompng(IMG_PATH . 'icon-watermark.png');
		$wm_height = imagesy($watermark);
		$wm_width = imagesx($watermark);
		$image = imagecreatetruecolor($wm_width, $wm_height);
		$image = imagecreatefromjpeg($prod_profile);
		$img_size = getimagesize($prod_profile);
		$x = $img_size[0] - $wm_width - 10;
		$y = $img_size[1] - $wm_height - 10;
		$src = imagecopymerge($image, $watermark, $x, $y, 0, 0, $wm_width, $wm_height, 50);
		imagejpeg($image, $pathOfProfile."watermark.jpg");
	}
	
	
	public function getPagination($totRec, $urlVars = null){
		
		/******************************************** Pagination **********************************************/
		$curPage = isset($_GET['page']) && $_GET['page'] != ""?intval($_GET['page']):1;
		$q = isset($_GET['searchText'])?urlencode($_GET['searchText']):urlencode("");
		$urlVars .= isset($_GET['url_sort'])?"srt=" . $_GET['url_sort']:"";
		
		$this->resPerPage = 6;
		$this->resPerPage = ($this->resPerPage=="all")?$totRec:$this->resPerPage;
		$totPages = ($totRec==0)?0: ceil($totRec/$this->resPerPage); // 1
		
		if($_GET['isProd'] && $_GET['url_sort'] == "new"){
			$curPage = $totPages - $curPage;
		}
		
		if($curPage==0)$curPage++;
		else if($curPage==-1)$curPage+=2;
		$file = SERVER_PATH . "product/";
		$inlinePage = 10;
		$this->start = ($curPage-1)*$this->resPerPage;
		
				
		$footer = ""; 
		$i = $inlinePage>$totPages?1:$curPage; $innerCtr = 1;
		$urlVars .= "&";
		
		if($this->start+1 > $this->resPerPage){if($curPage-1 > 1 && $totPages > $inlinePage)$footer="<a href='$file?". $urlVars ."page=1&q=$q' class='btn btn-default'>1</a>"; if($totPages > $inlinePage)$footer .= "<a  class='btn btn-default' href='$file?". $urlVars ."page=".($curPage-1)."&q=$q'>Back</a>";}
		else {$footer="";}
		if($curPage+$inlinePage <= $totPages ){
			while($totPages>=$i):
				if($curPage == $i)$footer.="<a href='#'  class='active disabled btn btn-default'>$i</a>";//
				else $footer.="<a class='btn btn-default' href='$file?". $urlVars ."page=$i&q=$q'>$i</a>";//
				if($innerCtr == $inlinePage){
					if($curPage+$inlinePage <= $totPages)$footer.="<span class='dot'>...</span><a class='btn btn-default'  href='$file?". $urlVars ."page=$totPages&q=$q'>$totPages</a>";
				}
				
				if($curPage < $totPages && $innerCtr == $inlinePage && $totPages > $inlinePage)$footer.="<a class='btn btn-default' href='$file?". $urlVars ."page=".($curPage+1)."&q=$q'>Next</a>";
				if($innerCtr == $inlinePage){ break; }
				$i++; $innerCtr++;
			endwhile;
		} else {
			$icount = 0;$i = ($totPages-$inlinePage) + 1;
			if($i<=0)$i=1;
			if($inlinePage>$totPages)$inlinePage=$totPages;
			while($inlinePage>=$icount):
				if($curPage == $i)$footer.="<a class='btn btn-default disabled active' href='#' >$i</a>";//
				else $footer.="<a class='btn btn-default' href='$file?". $urlVars ."page=$i&q=$q'>$i</a>";//
				if($innerCtr == $inlinePage){
					if($curPage+$inlinePage < $totPages)$footer.="<span class='dot'>...</span><a class='btn btn-default' href='$file?". $urlVars ."page=$totPages&q=$q'>$totPages</a>";
					break;}
				if($curPage < $totPages && $innerCtr == $inlinePage &&  $totPages > $inlinePage)$footer.="<a class='btn btn-default'   href='$file?". $urlVars ."page=".($curPage+1)."&q=$q'>Next</a>";
				
				$i++; $innerCtr++;
				$icount++;
				
			endwhile;
		}
		if($totRec<=$this->resPerPage){$footer = "";}
		
		return $footer;
	}
	
	/**** Rate product **/
	public function rateProduct(){
		$rate = $_GET['rate'];
		$p_id = $_GET['id'];
		Product::$conditionQry = " WHERE prod_id = :prod_id LIMIT 1";
		$param =  array(":prod_id"=>$p_id);
		$prod = ProductFacade::findProduct("FIND_WITH_MCAT", $param);
		foreach($prod as $prod):
			$p = $prod;
			$rate = $rate + $p->rate;
			$rate_count = $p->rate_count + 1;
			Product::$conditionQry = " rate=:rate, rate_count=:rate_count WHERE prod_id = :prod_id LIMIT 1";
			$param =  array(":prod_id"=>$p_id, ":rate"=>$rate, ":rate_count"=>$rate_count);
			$prod = ProductFacade::modifyProduct($param, "UPDATE");
			
			echo "success";
			Product::$conditionQry = null;
		endforeach;
	}
	
	/*** Get Product Info **/
	public function getProductDetails(){
		try{
			Product::$conditionQry = " WHERE prod_id = :prod_id LIMIT 1";
			$param =  array(":prod_id"=>$_REQUEST['id']);
			$prod = ProductFacade::findProduct("FIND_WITH_MCAT", $param);
			foreach($prod as $prod):
				$prod = $prod;
			endforeach;
			
			return $prod;
		} catch (PDOException $ex) {
            Log::dbLog($ex);
        }
		
		Product::$conditionQry = null;
	}
}

