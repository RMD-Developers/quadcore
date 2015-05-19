<?php

/* 
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class M_Product_Slider extends Model{
    public function loadSlider(){
		Product::$conditionQry = " ORDER BY RAND() LIMIT 5";
		$prod = ProductFacade::findProduct("FIND_WITH_MCAT");
		$i = 0;
		
		$this->arrRes['result'] = '';
		
		if(count($prod)){
			$i = 1;
			
			foreach($prod as $p){
			$prod_profile = IMG_PATH .'profile/product/'.$i.'.jpg';
			$i++;
			$this->arrRes['result'] .= '<div class="inner-slider '. $this->lg[11] .'">
				<div class="slide image"><img src="'.$prod_profile.'" /></div>
					<div class="slide desc">
						<p class="link"><a href="'.SERVER_PATH.'product/'.$p->prod_id.'?srt=latest" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span>&nbsp;Details</a></p>
						
					</div>
				</div>';
			}
			$this->arrRes['result'] .= 
				'<div class="slider-pages">
					
				</div>';
		}
		
		Product::$conditionQry = null;
		echo json_encode($this->arrRes);
	}
}

