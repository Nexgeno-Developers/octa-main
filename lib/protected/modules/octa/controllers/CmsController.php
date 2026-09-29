<?php

class CmsController extends CController
{
        public $heading="CMS Management";
        
        
	public function actionIndex()
	{
             if (!Yii::app()->user->hasState("admin"))
            {
                 $this->redirect(Yii::app()->createUrl("octa/login"));
                 Yii::app()->end();
            }
            else
            {
           
                $cri=new CDbCriteria();
                $cri->limit="20";
                $cri->order = "heading";
           
           
                $count= Cms::model()->count();
           
                $pages=new CPagination($count);
                $pages->pageSize=30;
           
           
                $pages->applyLimit($cri);
                $cms=  Cms::model()->findAll($cri);
            
                $this->render("index",array("cms"=>$cms,"pages"=>$pages));
            }
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

                $id=Yii::app()->request->getPost('id');
                $model= Cms::model()->findByPk($id);
                
                
                $name=Yii::app()->request->getPost('vendor_name');
                $name=trim($name);
                $model->heading=$name;
                 

                $model->content=trim(Yii::app()->request->getPost('description'));
                $post_image2 = $_FILES["photo2"]["name"];
				if(!empty($post_image2)){ 
					$newname2 = "photo_dekstop_cms-".$post_image2;
					$model->photo2 = $newname2;
						
					$newpath2 = Yii::app()->basePath.'/../img/ebackground/';
					move_uploaded_file($_FILES["photo2"]["tmp_name"], $newpath2.$newname2);
				}

				$post_image3 = $_FILES["photo_tab"]["name"];
				if(!empty($post_image3)){ 
					$newname3 = "photo_tab_cms-".$post_image3;
					$model->photo_tab = $newname3;
						
					$newpath3 = Yii::app()->basePath.'/../img/ebackground/';
					move_uploaded_file($_FILES["photo_tab"]["tmp_name"], $newpath3.$newname3);
				}

				$post_image4 = $_FILES["photo_mob"]["name"];
				if(!empty($post_image4)){ 
					$newname4 = "photo_mob_cms-".$post_image4;
					$model->photo_mob = $newname4;
						
					$newpath4 = Yii::app()->basePath.'/../img/ebackground/';
					move_uploaded_file($_FILES["photo_mob"]["tmp_name"], $newpath4.$newname4);
				}
                
                if(!empty($_POST['page_title']))
                {
                    $model->title=trim(Yii::app()->request->getPost('page_title'));
                }
                if(!empty($_POST['keywords']))
                {
                    $model->meta_keywords=trim(Yii::app()->request->getPost('keywords'));
                }
                if(!empty($_POST['seo_desc']))
                {
                    $model->meta_desc=trim(Yii::app()->request->getPost('seo_desc'));
                }
                if($model->update()){
					
					$this->redirect(Yii::app()->createUrl("octa/cms/edit",array("id"=>$id,"msg"=>"1")));
					Yii::app()->end();
				}else{
					$this->redirect(Yii::app()->createUrl("octa/cms/edit",array("id"=>$id,"msg"=>"0")));
					Yii::app()->end();
                }
                
                /*if ($model->update())
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
                }*/
            }
            if (isset($_GET['id']))
            {
                $id= $_GET['id'];
                $model=Cms::model()->findByPk($id);
                $this->render("edit",array("cms"=>$model));
            }
            
            
            //Ajax call for editing
            
            
        }
        
        public function actionDelete()
        {
             if (!Yii::app()->user->hasState("admin"))
            {
                 $this->redirect(Yii::app()->createUrl("octa/login"));
                 Yii::app()->end();
            }
            
            $id=Yii::app()->request->getParam('id');
            
            Cms::model()->deleteByPk($id);
            
            $this->redirect(Yii::app()->createUrl("octa/cms"));
        }
        
        
        
        /*
        
        public function actionGetData()
        {
             if (!Yii::app()->user->hasState("admin"))
            {
                 $this->redirect(Yii::app()->createUrl("octa/login"));
                 Yii::app()->end();
            }
             if (!empty($_POST))
             {
                 
                
                 
                 $page=$_POST['page'];
                 $offset=($page-1)*20;
                 $cri=new CDbCriteria();
                 $cri->limit="20";
                 $cri->offset=$offset;
           
                $vendors=  Vendor::model()->findAll($cri);
                
                
                $response=array();
                $response['status']='ok';
                $response['vendor']=$vendors;
                $cert_count=array();
                $exam_count=array();
                foreach ($vendors as $vendor)
                {
                    $cri2= new CDbCriteria();
                    $cri2->condition="vendor_id=$vendor->id";
                    $cert= Certification::model()->findAll($cri2); 
                    $cert_count[]=count($cert);
                    $exam= Exam::model()->findAll($cri2);
                    $exam_count[]=count($exam);
                }
                $response['cert_count']=$cert_count;
                $response['exam_count']=$exam_count;
                
                
                
                echo CJSON::encode($response);
                Yii::app()->end();
                 
             }
        }
        
        public function actionAddvendor()
        {
             if (!Yii::app()->user->hasState("admin"))
            {
                 $this->redirect(Yii::app()->createUrl("octa/login"));
                 Yii::app()->end();
            }
            if (!empty($_POST))
            {
                // check for duplicate
                $name=Yii::app()->request->getPost('vendor_name');
                $cri= new CDbCriteria();
                $cri->condition="name=:name";
                $cri->params=array(":name"=>$name);
                $check=Vendor::model()->exists($cri);
                if ($check)
                {
                $response=array();
                $response['status']='already';
                echo CJSON::encode($response);
                Yii::app()->end();
                }
                
                $model= new Vendor;
                 $name=trim($name);
                
                $model->name=$name;
               
               $url_name=str_replace(" ", "-", trim($name));
                $url_name=str_replace(":", "", $url_name);
                $url_name=str_replace("+", "", $url_name);
                $model->url=trim($url_name);
                
               $model->description=trim(Yii::app()->request->getPost('description'));
                
                
                if(!empty($_POST['page_title']))
                {
                    $model->meta_title=trim(Yii::app()->request->getPost('page_title'));
                }
                if(!empty($_POST['keywords']))
                {
                    $model->meta_keywords=trim(Yii::app()->request->getPost('keywords'));
                }
                if(!empty($_POST['seo_desc']))
                {
                    $model->meta_desc=trim(Yii::app()->request->getPost('seo_desc'));
                }
               
                if(!empty($_POST['is_hot']))
                {
                    $model->is_hot=1;
                }
                if(!empty($_POST['status']))
                {
                    $model->status=1;
                }
                
                $model->date_added=date('Y-m-d H:i:s');
                
                
                
                if($model->save())
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
            else
            {
                $this->render("addvendor");
            }
        }
        
        
        
        
        
        
        public function actionProcessHot()
        {
            if (!Yii::app()->user->hasState("admin"))
            {
                 $this->redirect(Yii::app()->createUrl("octa/login"));
                 Yii::app()->end();
            }
            
            $id= Yii::app()->request->getPost('id');
            $vendor= Vendor::model()->findByPk($id);
            if($vendor->is_hot==1)
            {
                $vendor->is_hot=0;
            }
            else
            {
                $vendor->is_hot=1;
            }
            
            $vendor->date_updated=date('Y-m-d H:i:s');
             if ($vendor->update())
                {
                    $response=array();
                    $response['status']='ok';
                    $response['url']=Yii::app()->createUrl("octa/vendor/processhot");
                    $response['date']=date("Y-m-d");
                    echo CJSON::encode($response);
                    Yii::app()->end();
                }
                else
                {
                    $response=array();
                    $response['status']=$vendor->getErrors();
                    echo CJSON::encode($response);
                    Yii::app()->end();
                }
            
                
            
            
            
        }
        
        public function actionProcessActive()
        {
             if (!Yii::app()->user->hasState("admin"))
            {
                 $this->redirect(Yii::app()->createUrl("octa/login"));
                 Yii::app()->end();
            }
            
            $id= Yii::app()->request->getPost('id');
            $vendor= Vendor::model()->findByPk($id);
            if($vendor->status==1)
            {
                $vendor->status=0;
                
                Cert::model()->updateAll(array( 'status' => 0 ), 'vendor_id='.$id );
                Exam::model()->updateAll(array( 'status' => 0 ), 'vendor_id='.$id );
                
            }
            else
            {
                $vendor->status=1;
                Cert::model()->updateAll(array( 'status' => 1 ), 'vendor_id='.$id );
                Exam::model()->updateAll(array( 'status' => 1 ), 'vendor_id='.$id );
            }
            $vendor->date_updated=date('Y-m-d H:i:s');
             if ($vendor->update())
                {
                    $response=array();
                    $response['status']='ok';
                    $response['url']=Yii::app()->createUrl("octa/vendor/processactive");
                    $response['date']=date("Y-m-d");
                    echo CJSON::encode($response);
                    Yii::app()->end();
                }
                else
                {
                    $response=array();
                    $response['status']=$vendor->getErrors();
                    echo CJSON::encode($response);
                    Yii::app()->end();
                }
        }
        
        public function actionDisableAll()
        {
              if (!Yii::app()->user->hasState("admin"))
            {
                 $this->redirect(Yii::app()->createUrl("octa/login"));
                 Yii::app()->end();
            }
                
            Exam::model()->updateAll(array( 'status' => 0 ));
            Cert::model()->updateAll(array( 'status' => 0 ));
            
            Vendor::model()->updateAll(array( 'status' => 0 ));
            
            $this->redirect(Yii::app()->createUrl("octa/vendor"));
            
        }
        
        
        public function actionEnableAll()
        {
             if (!Yii::app()->user->hasState("admin"))
            {
                 $this->redirect(Yii::app()->createUrl("octa/login"));
                 Yii::app()->end();
            }
            
            Exam::model()->updateAll(array( 'status' => 1 ));
            Cert::model()->updateAll(array( 'status' => 1 ));
            
            Vendor::model()->updateAll(array( 'status' => 1 ));
            
            $this->redirect(Yii::app()->createUrl("octa/vendor"));
        }
        
        public function actionConfigureUrl()
        {
            $vendor= Vendor::model()->findAll();
            foreach ($vendor as $vendors)
            {
                $url_name=str_replace(" ", "-", trim($vendors->name));
                $url_name=str_replace(":", "", $url_name);
                $url_name=str_replace("+", "", $url_name);
                $vendors->url=trim($url_name);
                $vendors->update();
            }
            $this->redirect(Yii::app()->createUrl("octa/vendor"));
        }
                */
        
}
?>