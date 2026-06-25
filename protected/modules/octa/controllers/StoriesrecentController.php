<?php
class StoriesrecentController extends CController
{
	public $heading="Recent Stories Management";

	public function actionIndex()
	{
		if (!Yii::app()->user->hasState("admin")){
			$this->redirect(Yii::app()->createUrl("octa/login"));
			Yii::app()->end();
		}

		$cri=new CDbCriteria();
		//Pagination
		$count = StoriesRecent::model()->count();
		$records = Yii::app()->request->getParam("records");

		if(isset($records)){
			$rpage = $records;
		}else{
			$rpage = 25;
		}

		$pages = new CPagination($count);
		$pages->pageSize=$rpage;
		$pages->applyLimit($cri);
		$testi=  StoriesRecent::model()->findAll();
		$this->render("index",array("testis"=>$testi,"pages"=>$pages));
	}

	public function actionAdd()
	{
		if(!Yii::app()->user->hasState("admin")){
			$this->redirect(Yii::app()->createUrl("octa/login"));
			Yii::app()->end();
		}

		if(!empty($_POST)){
			
			$name = trim(Yii::app()->request->getPost("name"));
			
			$model= new StoriesRecent;
			$model->exam_id = trim(Yii::app()->request->getPost("exam"));
			$model->name = $name;
			$model->expert = trim(Yii::app()->request->getPost("expert"));
			//$model->content = Yii::app()->request->getPost("description");
			
				
			//$model->created_date=date("Y-m-d H:i:s");
			$model->created_date= trim(Yii::app()->request->getPost("date"));
			//$model->updated_date=date("Y-m-d H:i:s");
			
			$url_name=str_replace(" ", "-", trim($name));
            $url_name=str_replace("+", "p", $url_name);
		    $url_name=str_replace(":", "", $url_name);
		        $url_name=str_replace(".", "-", $url_name);
		        $url_name=str_replace(",", "-", $url_name);
		        $url_name=str_replace("/", "-", $url_name);
				$url_name=str_replace("&", "and", $url_name);
				$url_name=str_replace("(", "", $url_name);
				$url_name=str_replace(")", "", $url_name);
				$url_name=str_replace("[", "", $url_name);
				$url_name=str_replace("]", "", $url_name);
				$url_name=str_replace("---", "-", $url_name);
				$url_name=str_replace("--", "-", $url_name);

			if($model->save()){
				
				$post_image = $_FILES["photo"]["name"];
				if(!empty($post_image)){
					$lastid = $model->id;
					$featureimg = StoriesRecent::model()->findByPk($lastid);
					$file_ext = substr($post_image, strripos($post_image, '.')); // get file name
					$newname = $url_name."_".$lastid."".$file_ext;
					$featureimg->image = $newname;
					$featureimg->update();
					$newpath = Yii::app()->basePath.'/../img/stories_recent/';
					move_uploaded_file($_FILES["photo"]["tmp_name"], $newpath.$newname);
				}
				
				$this->redirect(Yii::app()->createUrl("octa/Storiesrecent/add",array("msg"=>"1")));
				Yii::app()->end();
			}else{
				$this->redirect(Yii::app()->createUrl("octa/Storiesrecent/add",array("msg"=>"0")));
				Yii::app()->end();
			}
		}else{
			//$exam= Cert::model()->findAll();
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
			$model= StoriesRecent::model()->findByPk($id);
			$model->exam_id = trim(Yii::app()->request->getPost("exam"));
			$model->name = $name;
			$model->expert = Yii::app()->request->getPost("expert");
			//$model->content = Yii::app()->request->getPost("description");
			//$model->updated_date = date("Y-m-d H:i:s");;
			$model->created_date = trim(Yii::app()->request->getPost("date"));
			
			$url_name=str_replace(" ", "-", trim($name));
            $url_name=str_replace("+", "p", $url_name);
		    $url_name=str_replace(":", "", $url_name);
		        $url_name=str_replace(".", "-", $url_name);
		        $url_name=str_replace(",", "-", $url_name);
		        $url_name=str_replace("/", "-", $url_name);
				$url_name=str_replace("&", "and", $url_name);
				$url_name=str_replace("(", "", $url_name);
				$url_name=str_replace(")", "", $url_name);
				$url_name=str_replace("[", "", $url_name);
				$url_name=str_replace("]", "", $url_name);
				$url_name=str_replace("---", "-", $url_name);
				$url_name=str_replace("--", "-", $url_name);

			if($model->update()){
				
				$post_image = $_FILES["photo"]["name"];
				if(!empty($post_image)){
					/*$file_ext = substr($post_image, strripos($post_image, '.')); // get file name
					$newname = $url_name."_".$id."".$file_ext;
					$model->image = $newname;
						
					$newpath = Yii::app()->basePath.'/../img/stories_recent/';
					move_uploaded_file($_FILES["photo"]["tmp_name"], $newpath.$newname);*/
					$lastid = $id;
					$featureimg = StoriesRecent::model()->findByPk($lastid);
					$file_ext = substr($post_image, strripos($post_image, '.')); // get file name
					$newname = $url_name."_".$lastid."".$file_ext;
					$featureimg->image = $newname;
					$featureimg->update();
					$newpath = Yii::app()->basePath.'/../img/stories_recent/';
					move_uploaded_file($_FILES["photo"]["tmp_name"], $newpath.$newname);					
				}
				
				$this->redirect(Yii::app()->createUrl("octa/Storiesrecent/edit",array("id"=>$id,"msg"=>"1")));
				Yii::app()->end();
			}else{
				$this->redirect(Yii::app()->createUrl("octa/Storiesrecent/edit",array("id"=>$id,"msg"=>"0")));
				Yii::app()->end();
			}
		}
	
		$tid = Yii::app()->request->getParam("id");
		if (isset($tid)){
			$id= Yii::app()->request->getParam("id");
			$model=  StoriesRecent::model()->findByPk($id);
			//$exams=Exam::model()->findAll();
			$exam = Exam::model()->findAll();
			$this->render("edit",array("testi"=>$model,"exam"=>$exam));
		}
		//Ajax call for editing
	}

	public function actionDelete()
	{
		$id = Yii::app()->request->getParam('id');
		$del = StoriesRecent::model()->deleteByPk($id);
		$this->redirect(Yii::app()->createUrl("octa/Storiesrecent"));
	}
}

