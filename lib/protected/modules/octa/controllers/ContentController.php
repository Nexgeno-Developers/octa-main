<?php

class ContentController extends CController
{
        public $heading="Content Management";
	public function actionIndex()
	{
            if (Yii::app()->user->hasState("admin")){
                $content= Globals::model()->findAll();
                $this->render("index",array("page"=>$content));
            }
            else {
                $this->redirect(Yii::app()->createUrl("octa/login"));
            }
	}
        
        public function actionEdit()
        {
              if (!Yii::app()->user->hasState("admin"))
            {
                 $this->redirect(Yii::app()->createUrl("octa/login"));
                 Yii::app()->end();
            }
            if(!empty($_POST))
            {
                $id=$_GET['id'];
                $content= ContentPages::model()->findByPk($id);
                
                $content->name=$_POST['name'];
                $content->page_title=$_POST['title'];
                $content->content_title=$_POST['content_title'];
                $content->page_contents=$_POST['page_content'];
                $content->meta_keywords=$_POST['keywords'];
                $content->meta_descx=$_POST['seo_desc'];
                if($content->update())
                {
                    $response=array();
                    $response['status']="ok";
                    echo CJSON::encode($response);
                    Yii::app()->end();
                }
                else
                {
                    $response=array();
                    $response['status']="error";
                    echo CJSON::encode($response);
                    Yii::app()->end();
                    
                }
                
            }
            else
            {
                $id=$_GET['id'];
                $content= ContentPages::model()->findByPk($id);
                $this->render("edit",array("content"=>$content));
            }
        }
        
        public function actionVendor_Page()
        {
              if (!Yii::app()->user->hasState("admin"))
            {
                 $this->redirect(Yii::app()->createUrl("octa/login"));
                 Yii::app()->end();
            }
            if (!empty($_POST))
            {
                $content= Globals::model()->findByPK(1);
                
                 $content->page_title=$_POST['title'];
                $content->content_title=$_POST['content_title'];
                $content->page_contents=$_POST['description'];
                $content->meta_keywords=$_POST['keywords'];
                $content->meta_descx=$_POST['seo_desc'];
                if($content->update())
                {
                    $response=array();
                    $response['status']="ok";
                    echo CJSON::encode($response);
                    Yii::app()->end();
                }
                else
                {
                    $response=array();
                    $response['status']="error";
                    echo CJSON::encode($response);
                    Yii::app()->end();
                    
                }
            }
            else{
                $content= Globals::model()->findByPK(1);
                $this->render("vendor_page",array("content"=>$content));
            }
        }
        
        
        public function actioncert_Page()
        {
              if (!Yii::app()->user->hasState("admin"))
            {
                 $this->redirect(Yii::app()->createUrl("octa/login"));
                 Yii::app()->end();
            }
            if (!empty($_POST))
            {
                $content= Globals::model()->findByPK(2);
                
                 $content->page_title=$_POST['title'];
                $content->content_title=$_POST['content_title'];
                $content->page_contents=$_POST['description'];
                $content->meta_keywords=$_POST['keywords'];
                $content->meta_descx=$_POST['seo_desc'];
                if($content->update())
                {
                    $response=array();
                    $response['status']="ok";
                    echo CJSON::encode($response);
                    Yii::app()->end();
                }
                else
                {
                    $response=array();
                    $response['status']="error";
                    echo CJSON::encode($response);
                    Yii::app()->end();
                    
                }
            }
            else{
                $content= Globals::model()->findByPK(2);
                $this->render("cert_page",array("content"=>$content));
            }
        }
        
        public function actionExam_Page()
        {
              if (!Yii::app()->user->hasState("admin"))
            {
                 $this->redirect(Yii::app()->createUrl("octa/login"));
                 Yii::app()->end();
            }
            if (!empty($_POST))
            {
                $content= Globals::model()->findByPK(3);
                
                 $content->page_title=$_POST['title'];
                $content->content_title=$_POST['content_title'];
                $content->page_contents=$_POST['description'];
                $content->meta_keywords=$_POST['keywords'];
                $content->meta_descx=$_POST['seo_desc'];
                if($content->update())
                {
                    $response=array();
                    $response['status']="ok";
                    echo CJSON::encode($response);
                    Yii::app()->end();
                }
                else
                {
                    $response=array();
                    $response['status']="error";
                    echo CJSON::encode($response);
                    Yii::app()->end();
                    
                }
            }
            else{
                $content= Globals::model()->findByPK(3);
                $this->render("exam_page",array("content"=>$content));
            }
        }
}
?>