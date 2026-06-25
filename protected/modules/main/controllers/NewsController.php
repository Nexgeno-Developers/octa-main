<?php
require_once Yii::getPathOfAlias('webroot').'/customfiles/mailfunctions.php';

class NewsController extends CController
{
	public $pageDescription;
	public $pageKeywords;
	
	public function actionIndex()
	{
		$url= Yii::app()->request->getParam("url");
		$cri= new CDbCriteria();
		$cri->condition="url=:url";
		$cri->params=array(":url"=>$url);

		if(News::model()->exists($cri)){
			$vendor = News::model()->find($cri);
			
			if ($vendor->status != 0){
				
				//SEO Title
				$title= $vendor->title;
				$this->pageTitle=$title;
					
				//Seo description
				$descx= $vendor->meta_desc;
				$this->pageDescription = $descx;
					
				//Seo Keywords
				$keywords = $vendor->meta_keywords;
				$this->pageKeywords = $keywords;
					
					
				//Page Title
				$contenttitle = $vendor->heading;
					
				//Page Content
				$content = $vendor->content;
				
				
								
				$this->render("index",array("mnews"=>$vendor, "content"=>$content,"contenttitle"=>$contenttitle));
                
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
