<?php
class GalleryController extends CController
{
	public $heading="Gallery Management";
	public function actionIndex()
	{
		if (!Yii::app()->user->hasState("admin"))
		{
			$this->redirect(Yii::app()->createUrl("fastlabs/login"));
			Yii::app()->end();
		}

		$cri=new CDbCriteria();
		//Pagination
		$count = Gallery::model()->count();
		$records = Yii::app()->request->getParam("records");
		if(isset($records)){$rpage = $records;}else{$rpage = 25;}

		$pages = new CPagination($count);
		$pages->pageSize=$rpage;
		$pages->applyLimit($cri);
		$testi=  Gallery::model()->findAll();
		$this->render("index",array("photogallery"=>$testi,"pages"=>$pages));
	}
	
	public function actionAddPhoto()
	{
		if (!Yii::app()->user->hasState("admin")){
			$this->redirect(Yii::app()->createUrl("octa/login"));
			Yii::app()->end();
		}

		if (!empty($_POST)){
			$model= new Gallery;
			$model->alt = Yii::app()->request->getPost("alt");
			$model->content = "gallery";
			$model->created_date=date("Y-m-d H:i:s");
			$model->updated_date=date("Y-m-d H:i:s");
			
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
					$featureimg = Gallery::model()->findByPk($lastid);
					$file_ext = substr($post_image, strripos($post_image, '.')); // get file name
					$newname = $lastid.$mystring."".$file_ext;
					$featureimg->image = $newname;
					$featureimg->update();
					$newpath = Yii::app()->basePath.'/../img/gallery/';
					move_uploaded_file($_FILES["photo"]["tmp_name"], $newpath.$newname);
				}
				$this->redirect(Yii::app()->createUrl("octa/gallery/addphoto",array("msg"=>"1")));
			}else{
				$this->redirect(Yii::app()->createUrl("octa/gallery/addphoto",array("msg"=>"0")));
			}
		}else{
			$this->render("addphoto");
		}
	}

	public function actionEdit()
	{
		if (!Yii::app()->user->hasState("admin")){
			$this->redirect(Yii::app()->createUrl("octa/login"));
			Yii::app()->end();
		}

		if (!empty($_POST)){
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
			$id=$_GET['id'];
			$model= Gallery::model()->findByPk($id);
			$model->alt=Yii::app()->request->getPost("alt");
			$model->content="";
			$date = Yii::app()->request->getPost("date");
			$date = Yii::app()->dateFormatter->format('y-MM-dd',$date);
			$model->updated_date = $date;
			$post_image = $_FILES["photo"]["name"];
			$file_ext = substr($post_image, strripos($post_image, '.')); // get file name

			if(!empty($post_image)){
				$newname = $id.$mystring."".$file_ext;
				$model->image = $newname;
			}

			if ($model->update()){
				if(!empty($post_image)){
					$newpath = Yii::app()->basePath.'/../img/gallery/';
					move_uploaded_file($_FILES["photo"]["tmp_name"], $newpath.$newname);
				}
				$this->redirect(Yii::app()->createUrl("octa/gallery/edit",array("id"=>$id,"msg"=>"1")));
			}else{
				$this->redirect(Yii::app()->createUrl("octa/gallery/edit",array("id"=>$id,"msg"=>"0")));
			}
		}
		if (isset($_GET['id'])){
			$id= $_GET['id'];
			$model=  Gallery::model()->findByPk($id);
			$this->render("edit",array("gallery"=>$model));
		}
	}

	public function actionDelete()
	{
		$id=Yii::app()->request->getParam('id');
		$del= Gallery::model()->deleteByPk($id);
		$this->redirect(Yii::app()->createUrl("octa/gallery"));
	}

















        

        

        

        //Exam Requests

                

        

        

}

?><?php



/* 

 * To change this license header, choose License Headers in Project Properties.

 * To change this template file, choose Tools | Templates

 * and open the template in the editor.

 */



