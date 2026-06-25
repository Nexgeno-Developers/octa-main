<?php

function getPrice($id, $type, $dur){  
        
        if($type == 4 || $type == 5 || $type == 6 || $type == 7 || $type == 8 || $type == 9 || $type == 10 || $type == 11 || $type == 12 || $type == 13 || $type == 14 || $type == 15){
            
            $myresp = getGlobalinfo($type,$dur);
            $price = $myresp["price"];

		}else if($type == 28 || $type == 29 || $type == 30 || $type == 31){
            
			$myresp = getGlobalinfo($type,$dur);
            $price = $myresp["price"];
            
        }else if($type == 1 || $type == 2 || $type == 3){
            
            $exam =  Exam::model()->findByPk($id); 
            $vidd = $exam["vendor_id"];
			
			$vendor = Vendor::model()->findByPk($vidd); 
			
            if($type==1){ //pdf
                if ($exam->price>0){
                    $price=$exam->price;
                }else{
					
					if($vendor["price"] != "" || $vendor["price"] != 0){
						$price = $vendor["price"];
					}else{
					
                    	$myresp = getGlobalinfo($type,$dur);
                    	$price = $myresp["price"];
					}
                }
            }else if ($type==2){ //engine
                if ($exam->engine_price>0){
                    $price=$exam->engine_price;
                }else{
					
					if($vendor["engine_price"] != "" || $vendor["engine_price"] != 0){
						$price = $vendor["engine_price"];
					}else{
					
                    $myresp = getGlobalinfo($type,$dur);
                    $price = $myresp["price"];
					}
                }
            }else if ($type==3){ //both
				$questions = $exam->questions;

				if($questions == 0){
					
					$vid = $exam->vendor_id;
					$cri=new CDbCriteria();
                	$cri->condition="ven_id=$vid";

					if ($exam->both_price>0){
	                    $price=$exam->both_price;
	                }else{

						if(PreorderPrices::model()->exists($cri)){
							$prePrice = PreorderPrices::model()->find($cri);	
							$price = $prePrice->both_price;
						}else{
							$prePrice = PreorderPrices::model()->findByPk(1);	
							$price = $prePrice->both_price;
						}
					}


				}else{

	                if ($exam->both_price>0){
	                    $price=$exam->both_price;
	                }else{
	
						if($vendor["both_price"] != "" || $vendor["both_price"] != 0){
							$price = $vendor["both_price"];
						}else{
	                    $myresp = getGlobalinfo($type,$dur);
	                    $price = $myresp["price"];
	
						}
	                }
				}



            }
            
            
        }
        
        return $price;
    }
	
function getSwreg($id, $type, $dur){  
        
        if($type == 4 || $type == 5 || $type == 6 || $type == 7 || $type == 8 || $type == 9 || $type == 10 || $type == 11 || $type == 12 || $type == 13 || $type == 14 || $type == 15){
            
            $myresp = getGlobalinfo($type,$dur);
            
            $swreg = $myresp["swreg"];

		}else if($type == 28 || $type == 29 || $type == 30 || $type == 31){
            
			$myresp = getGlobalinfo($type,$dur);
            
            $swreg = $myresp["swreg"];
            
        }else if($type == 1 || $type == 2 || $type == 3){
            
            $exam =  Exam::model()->findByPk($id); 
            $vidd = $exam["vendor_id"];
			
			$vendor = Vendor::model()->findByPk($vidd); 
			
            if($type==1){ //pdf
                if ($exam->swreg>0){
                    $swreg=$exam->swreg;
                }else{
					
					if($vendor["swreg"] != ""){
						$swreg = $vendor["swreg"];
					}else{
                    	$myresp = getGlobalinfo($type,$dur);
                    	$swreg = $myresp["swreg"];
					}
                }
            }else if ($type==2){ //engine
                if ($exam->engine_swreg>0){
                    $swreg=$exam->engine_swreg;
                }else{
					
					if($vendor["engine_swreg"] != ""){
						$swreg = $vendor["engine_swreg"];
					}else{
                    $myresp = getGlobalinfo($type,$dur);
                    $swreg = $myresp["swreg"];
					}
                }
            }else if ($type==3){ //both
				$questions = $exam->questions;
				if($questions == 0){
					$vid = $exam->vendor_id;
					$cri=new CDbCriteria();
                	$cri->condition="ven_id=$vid";

					if ($exam->both_swreg>0){
	                    $swreg=$exam->both_swreg;
	                }else{

						if(PreorderPrices::model()->exists($cri)){
							$prePrice = PreorderPrices::model()->find($cri);	
							$swreg = $prePrice->both_swreg;
						}else{
							$prePrice = PreorderPrices::model()->findByPk(1);
							$swreg = $prePrice->both_swreg;	
						}
					}
				}else{

	                if ($exam->both_swreg>0){
	                    $swreg=$exam->both_swreg;
	                }else{
	
						if($vendor["both_swreg"] != ""){
							$swreg = $vendor["both_swreg"];
						}else{
						
	                    $myresp = getGlobalinfo($type,$dur);
	                    $swreg = $myresp["swreg"];
	
						}
	                }
				}









            }
            
            
        }
        
        return $swreg;
    }
    
    
  function getGlobalinfo($type,$dur){
        
       $cri= new CDbCriteria();
       $cri->condition="pri_id=:pri_id";
       $cri->params=array(":pri_id"=>$type);
        
       if(ProductPrices::model()->exists($cri)){
           
           $globalD = ProductPrices::model()->findByPk($type);
           
           $response =array();
           $response['price']=$globalD->pri_value;
           $response['swreg']=$globalD->pri_swreg;
           
       }else{
           $response =array();
           $response['price']=0;
           $response['swreg']=0;
          //$this->redirect(Yii::app()->request->getBaseUrl(true));
       }
       
       return $response;
       
    }
    
   
?>