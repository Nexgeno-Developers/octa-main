<?php
class TrainerController extends CController
{
	public $heading="Trainer Management";

	public function actionIndex()
	{
		if (!Yii::app()->user->hasState("admin")){
			$this->redirect(Yii::app()->createUrl("octa/login"));
			Yii::app()->end();
		}

		$cri=new CDbCriteria();
		//Pagination
		$count = Trainer::model()->count();
		$records = Yii::app()->request->getParam("records");

		if(isset($records)){
			$rpage = $records;
		}else{
			$rpage = 25;
		}

		$pages = new CPagination($count);
		$pages->pageSize=$rpage;
		$pages->applyLimit($cri);
		$testi=  Trainer::model()->findAll();
		$this->render("index",array("testis"=>$testi,"pages"=>$pages));
	}

	public function actionAdd()
	{
		if(!Yii::app()->user->hasState("admin")){
			$this->redirect(Yii::app()->createUrl("octa/login"));
			Yii::app()->end();
		}

		if(!empty($_POST)){
			$model= new Trainer;
			$model->name = Yii::app()->request->getPost("name");
			$model->lab = Yii::app()->request->getPost("lab");
			$model->type = Yii::app()->request->getPost("type");
			$model->detail = Yii::app()->request->getPost("description");
			$model->facebook = trim(Yii::app()->request->getPost("facebook"));
			$model->linkedin = trim(Yii::app()->request->getPost("linkedin"));
			$model->is_home = trim(Yii::app()->request->getPost("is_home"));
			$model->date_added = date("Y-m-d H:i:s");
			
			function generateRandomString($length = 10) {
				$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
				$charactersLength = strlen($characters);
				$randomString = '';

				for ($i = 0; $i < $length; $i++) {
					$randomString .= $characters[rand(0, $charactersLength - 1)];
				}
				return $randomString;
			}
			$mystring = generateRandomString();

			if($model->save()){
				
				$post_image = $_FILES["photo"]["name"];
				if(!empty($post_image)){
					$lastid = $model->id;
					$featureimg = Trainer::model()->findByPk($lastid);
					$file_ext = substr($post_image, strripos($post_image, '.')); // get file name
					$newname = $lastid.$mystring."".$file_ext;
					$featureimg->image = $newname;
					$featureimg->update();
					$newpath = Yii::app()->basePath.'/../img/trainer/';
					move_uploaded_file($_FILES["photo"]["tmp_name"], $newpath.$newname);
				}
				
				$this->redirect(Yii::app()->createUrl("octa/trainer/add",array("msg"=>"1")));
				Yii::app()->end();
			}else{
				$this->redirect(Yii::app()->createUrl("octa/trainer/add",array("msg"=>"0")));
				Yii::app()->end();
			}
		}else{
			$this->render("add");
		}
	}

	public function actionEdit()
	{
		if(!Yii::app()->user->hasState("admin")){
			$this->redirect(Yii::app()->createUrl("octa/login"));
			Yii::app()->end();
		}

		if (!empty($_POST)){
			$id = Yii::app()->request->getParam("id");
			$model= Trainer::model()->findByPk($id);
			$model->name = Yii::app()->request->getPost("name");
			$model->lab = Yii::app()->request->getPost("lab");
			$model->type = Yii::app()->request->getPost("type");
			$model->detail = Yii::app()->request->getPost("description");
			$model->facebook = Yii::app()->request->getPost("facebook");
			$model->linkedin = Yii::app()->request->getPost("linkedin");
			$model->is_home = trim(Yii::app()->request->getPost("is_home"));

			if($model->update()){
				
				$post_image = $_FILES["photo"]["name"];
				/* var_dump($post_image);
				var_dump($eurl);exit; */
				if(!empty($post_image)){
					
					$featureimg = Trainer::model()->findByPk($id);
					$file_ext = substr($post_image, strripos($post_image, '.')); // get file name
					$newname = time().$id.$file_ext;
					$featureimg->image = $newname;
					$featureimg->update();						
					$newpath = Yii::app()->basePath.'/../img/trainer/';
					move_uploaded_file($_FILES["photo"]["tmp_name"], $newpath.$newname);
				}
				
				$this->redirect(Yii::app()->createUrl("octa/trainer/edit",array("id"=>$id,"msg"=>"1")));
				Yii::app()->end();
			}else{
				$this->redirect(Yii::app()->createUrl("octa/trainer/edit",array("id"=>$id,"msg"=>"0")));
				Yii::app()->end();
			}
		}
	
		$tid = Yii::app()->request->getParam("id");
		if (isset($tid)){
			$id= Yii::app()->request->getParam("id");
			$model=  Trainer::model()->findByPk($id);
			$exams=Exam::model()->findAll();
			$this->render("edit",array("testi"=>$model,"exam"=>$exams));
		}
		//Ajax call for editing
	}

	public function actionDelete()
	{
		$id = Yii::app()->request->getParam('id');
		$del = Trainer::model()->deleteByPk($id);
		$this->redirect(Yii::app()->createUrl("octa/trainer"));
	}
	
	public function actionAssignTrainer()
	{
		if(!Yii::app()->user->hasState("admin")){
			$this->redirect(Yii::app()->createUrl("octa/login"));
			Yii::app()->end();
		}

		if(!empty($_POST)){
			$model= new Assigntrainer;
			$model->trainerId = Yii::app()->request->getPost("trainerId");
			$model->examId = Yii::app()->request->getPost("examId");
			$model->created_date=date("Y-m-d H:i:s");
			
			if($model->save()){
				$this->redirect(Yii::app()->createUrl("octa/trainer/assigntrainer",array("msg"=>"1")));
				Yii::app()->end();
			}else{
				$this->redirect(Yii::app()->createUrl("octa/trainer/assigntrainer",array("msg"=>"0")));
				Yii::app()->end();
			}
		}else{
			$exam = Exam::model()->findAll();
			$trainers = Trainer::model()->findAll();
			$this->render("assigntrainer",array("exam"=>$exam,"trainers"=>$trainers));
		}
	}
	
	public function actionViewAssignTrainer()
	{
		if (!Yii::app()->user->hasState("admin")){
			$this->redirect(Yii::app()->createUrl("octa/login"));
			Yii::app()->end();
		}

		$cri=new CDbCriteria();
		//Pagination
		$count = Exam::model()->count();
		$records = Yii::app()->request->getParam("records");

		if(isset($records)){
			$rpage = $records;
		}else{
			$rpage = 25;
		}

		$pages = new CPagination($count);
		$pages->pageSize=$rpage;
		$pages->applyLimit($cri);
		$exam =  Exam::model()->findAll();
		$this->render("viewassigntrainer",array("exam"=>$exam,"pages"=>$pages));
	}

	public function actionDeleteAssign()
	{
		$id = Yii::app()->request->getParam('id');
		$del = Assigntrainer::model()->deleteByPk($id);
		$this->redirect(Yii::app()->createUrl("octa/trainer/viewassigntrainer"));
	}
}

