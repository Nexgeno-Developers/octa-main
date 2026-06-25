<?php
class StudentreviewController extends CController
{
	public $heading="Student Review Management";

	public function actionIndex()
	{
		if (!Yii::app()->user->hasState("admin")){
			$this->redirect(Yii::app()->createUrl("octa/login"));
			Yii::app()->end();
		}

		$cri=new CDbCriteria();
		//Pagination
		$count = Studentreview::model()->count();
		$records = Yii::app()->request->getParam("records");

		if(isset($records)){
			$rpage = $records;
		}else{
			$rpage = 25;
		}

		//$pages = new CPagination($count);
		//$pages->pageSize=$rpage;
		//$pages->applyLimit($cri);
		$testi=  Studentreview::model()->findAll();
		$this->render("index",array("testis"=>$testi)); //,"pages"=>$pages
	}




	public function actionVideoSpeaks()
	{
		
		if (!Yii::app()->user->hasState("admin")){
			$this->redirect(Yii::app()->createUrl("octa/login"));
			Yii::app()->end();
		}

		$cri=new CDbCriteria();
		//Pagination
		$count = Demos::model()->count();
		$records = Yii::app()->request->getParam("records");
		$eid = Yii::app()->request->getParam("id");

		if(isset($records)){
			$rpage = $records;
		}else{
			$rpage = 25;
		}

		$pages = new CPagination($count);
		$pages->pageSize=$rpage;
		$pages->applyLimit($cri);
		
		$ecri= new CDbCriteria();
		$ecri->condition="status=1 and type=2";
		
		$testi=  Demos::model()->findAll($ecri);
		$this->render("videospeaks",array("testis"=>$testi,"pages"=>$pages));

	}



	public function actionAddstudentreview()
	{
		if(!Yii::app()->user->hasState("admin")){
			$this->redirect(Yii::app()->createUrl("octa/login"));
			Yii::app()->end();
		}

		if(!empty($_POST)){
			$model= new Studentreview;
			$model->content = Yii::app()->request->getPost("description");
			$model->name = trim(Yii::app()->request->getPost("name"));
			$model->rating = trim(Yii::app()->request->getPost("rating"));
			$model->platform = trim(Yii::app()->request->getPost("platform"));
			$model->type = ($model->platform == 'youtube') ? 'oral' : 'written';
			$model->vlink = trim(Yii::app()->request->getPost("vlink"));
			$model->vdesc = trim(Yii::app()->request->getPost("vdesc"));
			$date = Yii::app()->request->getPost("date");
			$date = date('y-m-d', strtotime($date));
// 			$date = Yii::app()->dateFormatter->format('y-MM-dd',strtotime($date));
			$model->created_date=date("Y-m-d H:i:s");
			$model->updated_date=$date;
			
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
					$featureimg = Studentreview::model()->findByPk($lastid);
					$file_ext = substr($post_image, strripos($post_image, '.')); // get file name
					$newname = $lastid.$mystring."".$file_ext;
					$featureimg->image = $newname;
					$featureimg->update();
					$newpath = Yii::app()->basePath.'/../img/studentreview/';
					move_uploaded_file($_FILES["photo"]["tmp_name"], $newpath.$newname);
				}
				
				$this->redirect(Yii::app()->createUrl("octa/Studentreview/Addstudentreview",array("msg"=>"1")));
				Yii::app()->end();
			}else{
				$this->redirect(Yii::app()->createUrl("octa/Studentreview/Addstudentreview",array("msg"=>"0")));
				Yii::app()->end();
			}
		}else{
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
			$id = Yii::app()->request->getParam("id");
			$model= Studentreview::model()->findByPk($id);
			$model->content = Yii::app()->request->getPost("description");
			$model->name = Yii::app()->request->getPost("name");
			$model->rating = trim(Yii::app()->request->getPost("rating"));
			$model->platform = trim(Yii::app()->request->getPost("platform"));
			$model->type = ($model->platform == 'youtube') ? 'oral' : 'written';
			$model->vlink = trim(Yii::app()->request->getPost("vlink"));
			$model->vdesc = trim(Yii::app()->request->getPost("vdesc"));			
			$date = Yii::app()->request->getPost("date");
			$date = date('y-m-d', strtotime($date));
     	  //  $date = Yii::app()->dateFormatter->format('y-MM-dd',strtotime($date));
			$model->updated_date = $date;

			if($model->update()){
				
				$post_image = $_FILES["photo"]["name"];
				if(!empty($post_image)){
					$lastid = $id;
					$featureimg = Studentreview::model()->findByPk($lastid);
					$file_ext = substr($post_image, strripos($post_image, '.')); // get file name
					$newname = $lastid.time()."".$file_ext;
					$featureimg->image = $newname;
					$featureimg->update();
					$newpath = Yii::app()->basePath.'/../img/studentreview/';
					move_uploaded_file($_FILES["photo"]["tmp_name"], $newpath.$newname);
				}
				
				$this->redirect(Yii::app()->createUrl("octa/studentreview/edit",array("id"=>$id,"msg"=>"1")));
				Yii::app()->end();
			}else{
				$this->redirect(Yii::app()->createUrl("octa/studentreview/edit",array("id"=>$id,"msg"=>"0")));
				Yii::app()->end();
			}
		}
	
		$tid = Yii::app()->request->getParam("id");
		if (isset($tid)){
			$id= Yii::app()->request->getParam("id");
			$model=  Studentreview::model()->findByPk($id);
			$exams=Exam::model()->findAll();
			$this->render("edit",array("testi"=>$model,"exam"=>$exams));
		}
		//Ajax call for editing
	}

	public function actionDelete()
	{
		$id = Yii::app()->request->getParam('id');
		$del = Studentreview::model()->deleteByPk($id);
		$this->redirect(Yii::app()->createUrl("octa/Studentreview/index"));
	}
}

