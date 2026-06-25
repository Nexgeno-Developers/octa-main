<?php
class VendorController extends CController
{
	public $pageDescription;
	public $pageKeywords;
	
	public function actionIndex()
	{
		$url= Yii::app()->request->getParam("url");
		$cri= new CDbCriteria();
		$cri->condition="url=:url";
		$cri->params=array(":url"=>$url);

		if(Vendor::model()->exists($cri)){
			$vendor= Vendor::model()->find($cri);
			
			if ($vendor->status != 0){
				// getting global contents
				
				//SEO Title
				
					$title= $vendor->meta_title;
				
				$title= str_replace("[VENDOR]", $vendor->name,$title);
				$this->pageTitle=$title;
					
				//Seo description
				
					$descx= $vendor->meta_desc;
				
				$descx = str_replace("[VENDOR]",$vendor->name,$descx);
				$this->pageDescription = $descx;
					
				//Seo Keywords
				
					$keywords = $vendor->meta_keywords;
				
				$keywords = str_replace("[VENDOR]",$vendor->name,$keywords);
				$this->pageKeywords = $keywords;
					
				//Page Title
				
					$contenttitle = $vendor->ctitle;
				
				$contenttitle = str_replace("[VENDOR]",$vendor->name,$contenttitle);
					
				//Page Content
				
					$content = $vendor->description;
				
				$content= str_replace("[VENDOR]", $vendor->name,$content);
				
				
				$this->render("index",array("vendor"=>$vendor,"content"=>$content,"contenttitle"=>$contenttitle));
                
			}else{
				header("HTTP/1.1 301 Moved Permanently"); 
				header("Location: ".Yii::app()->request->getBaseUrl(true).""); 
				exit();
			}
		}else{
			$this->redirect(Yii::app()->createUrl("main/default/error"));
		}
	}
}
