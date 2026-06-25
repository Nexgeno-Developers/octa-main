<?php
class ScrollstoriesController extends CController
{
	public $heading="Scroll Stories Management";

	public function actionIndex()
	{
		if (!Yii::app()->user->hasState("admin")){
			$this->redirect(Yii::app()->createUrl("octa/login"));
			Yii::app()->end();
		}

		$cri=new CDbCriteria();
		//Pagination
		$count = Scrollstories::model()->count();
		$records = Yii::app()->request->getParam("records");

		if(isset($records)){
			$rpage = $records;
		}else{
			$rpage = 25;
		}

		$pages = new CPagination($count);
		$pages->pageSize=$rpage;
		$pages->applyLimit($cri);
		$testi=  Scrollstories::model()->findAll();
		$this->render("index",array("testis"=>$testi,"pages"=>$pages));
	}

	public function actionAdd()
	{
		if(!Yii::app()->user->hasState("admin")){
			$this->redirect(Yii::app()->createUrl("octa/login"));
			Yii::app()->end();
		}

		if(!empty($_POST)){
			$model= new Scrollstories;
			$model->cert_id = Yii::app()->request->getPost("exam");
			$model->stories = Yii::app()->request->getPost("description");
			$model->date_added=date("Y-m-d H:i:s");
			
			$url_name= Yii::app()->request->getPost("exam");

			if($model->save()){
				
				$post_image = $_FILES["photo"]["name"];
				if(!empty($post_image)){
					$lastid = $model->id;
					$featureimg = Scrollstories::model()->findByPk($lastid);
					$file_ext = substr($post_image, strripos($post_image, '.')); // get file name
					$newname = $url_name."_".$lastid."".$file_ext;
					$featureimg->image = $newname;
					$featureimg->update();
					$newpath = Yii::app()->basePath.'/../img/scrollstories/';
					move_uploaded_file($_FILES["photo"]["tmp_name"], $newpath.$newname);
				}
				
				$this->redirect(Yii::app()->createUrl("octa/scrollstories/add",array("msg"=>"1")));
				Yii::app()->end();
			}else{
				$this->redirect(Yii::app()->createUrl("octa/scrollstories/add",array("msg"=>"0")));
				Yii::app()->end();
			}
		}else{
			/* $exam= Cert::model()->findAll(); */
			$exam= Exam::model()->findAll();
			$this->render("add",array("exam"=>$exam));
		}
	}

	public function actionEdit()
	{
		if(!Yii::app()->user->hasState("admin")){
			$this->redirect(Yii::app()->createUrl("octa/login"));
			Yii::app()->end();
		}

		if (!empty($_POST)){
			
			$name = Yii::app()->request->getPost("name");
			
			$id = Yii::app()->request->getParam("id");
			$model= Scrollstories::model()->findByPk($id);
			$model->cert_id = Yii::app()->request->getPost("exam");
			$model->stories = Yii::app()->request->getPost("description");
			
			$url_name = Yii::app()->request->getPost("exam");

			if($model->update()){
				
				$post_image = $_FILES["photo"]["name"];
				if(!empty($post_image)){
					$file_ext = substr($post_image, strripos($post_image, '.')); // get file name
					$newname = $url_name."_".$id."".$file_ext;
					$model->image = $newname;
						
					$newpath = Yii::app()->basePath.'/../img/scrollstories/';
					move_uploaded_file($_FILES["photo"]["tmp_name"], $newpath.$newname);
				}
				
				$this->redirect(Yii::app()->createUrl("octa/scrollstories/edit",array("id"=>$id,"msg"=>"1")));
				Yii::app()->end();
			}else{
				$this->redirect(Yii::app()->createUrl("octa/scrollstories/edit",array("id"=>$id,"msg"=>"0")));
				Yii::app()->end();
			}
		}
	
		$tid = Yii::app()->request->getParam("id");
		if (isset($tid)){
			$id= Yii::app()->request->getParam("id");
			$model=  Scrollstories::model()->findByPk($id);
			$exams=Exam::model()->findAll();
			$this->render("edit",array("testi"=>$model,"exam"=>$exams));
		}
		//Ajax call for editing
	}

	public function actionDelete()
	{
		$id = Yii::app()->request->getParam('id');
		$del = Scrollstories::model()->deleteByPk($id);
		$this->redirect(Yii::app()->createUrl("octa/scrollstories"));
	}
}

