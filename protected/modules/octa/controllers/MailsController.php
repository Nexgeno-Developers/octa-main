<?php

class MailsController extends CController
{
        public $heading="Mails Management";
	public function actionIndex()
	{
              if (!Yii::app()->user->hasState("admin"))
            {
                 $this->redirect(Yii::app()->createUrl("octa/login"));
                 Yii::app()->end();
            }
             $cri=new CDbCriteria();
           //Pagination
           $count = Mailstable::model()->count();
           $pages = new CPagination($count);
           $pages->pageSize=20;
           $pages->applyLimit($cri);
           $mails=  Mailstable::model()->findAll();
           $this->render("index",array("mails"=>$mails,"pages"=>$pages));
	}
        
        
        
         public function actionEdit()
        {
               if (!Yii::app()->user->hasState("admin"))
            {
                 $this->redirect(Yii::app()->createUrl("octa/login"));
                 Yii::app()->end();
            }
            if (!empty($_POST))
            {
                $id=$_GET['id'];
                $model= Mailstable::model()->findByPk($id);
                
                $model->mailtitle=$_POST['title'];
                $model->mailcontent=$_POST['description'];
                
                if ($model->update())
                {
                    $response=array();
                    $response['status']='ok';
                    echo CJSON::encode($response);
                    Yii::app()->end();
                }
                else
                {
                    $response=array();
                    $response['status']=$model->getErrors();
                    echo CJSON::encode($response);
                    Yii::app()->end();
                }
            }
            if (isset($_GET['id']))
            {
                $id= $_GET['id'];
                $model=  Mailstable::model()->findByPk($id);
                
                $this->render("edit",array("mails"=>$model));
            }
            
            
            //Ajax call for editing
            
            
        }
        
        public function actionDelete()
        {
            
            
            $id=Yii::app()->request->getParam('id');
            $del= Testimonials::model()->deleteByPk($id);
            
            $this->redirect(Yii::app()->createUrl("octa/testimonials"));
            
           
            
        }








        
        
        
        //Exam Requests
                
        
        
}
?><?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

