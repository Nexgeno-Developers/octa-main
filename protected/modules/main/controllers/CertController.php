<?php
require_once Yii::getPathOfAlias('webroot').'/customfiles/myfunctions.php';
require_once Yii::getPathOfAlias('webroot').'/customfiles/mailfunctions.php';

class CertController extends CController
{
	public $pageDescription;
	public $pageKeywords;
	public function actionIndex()
	{
		$url = Yii::app()->request->getParam("url");

		$cri= new CDbCriteria();
		$cri->condition="url=:url";
		$cri->params=array(":url"=>$url);

		if(Cert::model()->exists($cri)){
			$cert= Cert::model()->find($cri);

			if($cert->vendor->status != 0){
				if($cert->status != 0){
					///Extra Certification
					$certIid = $cert->id;

					
					$title= $cert->meta_title;
					$title= str_replace("[VENDOR]", $cert->vendor->name,$title);
					$title= str_replace("[CERT]", $cert->name,$title);
					$this->pageTitle=$title;

					$descx = $cert->meta_desc;
					$descx = str_replace("[VENDOR]", $cert->vendor->name,$descx);
					$descx= str_replace("[CERT]", $cert->name,$descx);
					$this->pageDescription = $descx;

					$keywords = $cert->meta_keywords;
					$keywords = str_replace("[VENDOR]", $cert->vendor->name,$keywords);
					$keywords = str_replace("[CERT]", $cert->name,$keywords);
					$this->pageKeywords = $keywords;

					$contenttitle = $cert->ctitle;
					$contenttitle = $title= str_replace("[VENDOR]", $cert->vendor->name,$contenttitle);
					$contenttitle = $title= str_replace("[CERT]", $cert->name,$contenttitle);

					$content = $cert->description;
					$content= str_replace("[VENDOR]", $cert->vendor->name,$content);
					$content= str_replace("[CERT]", $cert->name,$content);

                    $this->render("index",array("cert"=>$cert,"content"=>$content,"certIid"=>$certIid,"contenttitle"=>$contenttitle));
				}else{
					$this->redirect(Yii::app()->createUrl("main/default/error"));
				}
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
