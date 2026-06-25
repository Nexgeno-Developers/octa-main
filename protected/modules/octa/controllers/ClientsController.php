<?php
class ClientsController extends CController
{
	public $heading="Clients Management";
	public function actionIndex()
	{
		if (!Yii::app()->user->hasState("admin"))
		{
			$this->redirect(Yii::app()->createUrl("fastlabs/login"));
			Yii::app()->end();
		}

		$cri=new CDbCriteria();
		//Pagination
		$count = Clients::model()->count();
		$records = Yii::app()->request->getParam("records");
		if(isset($records)){$rpage = $records;}else{$rpage = 25;}

		$pages = new CPagination($count);
		$pages->pageSize=$rpage;
		$pages->applyLimit($cri);
		$testi=  Clients::model()->findAll();
		$this->render("index",array("photogallery"=>$testi,"pages"=>$pages));
	}
	
	public function actionAddPhoto()
	{
		if (!Yii::app()->user->hasState("admin")){
			$this->redirect(Yii::app()->createUrl("octa/login"));
			Yii::app()->end();
		}

		if (!empty($_POST)){
			
			$name = Yii::app()->request->getPost("alt");
			
			$model = new Clients;
			$model->alt = $name;
			$model->content = "clients";
			$model->created_date=date("Y-m-d H:i:s");
			$model->updated_date=date("Y-m-d H:i:s");
			
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
			$url_name=strtolower($url_name);
			

			if($model->save()){
				$post_image = $_FILES["photo"]["name"];
				if(!empty($post_image)){
					$lastid = $model->id;
					$featureimg = Clients::model()->findByPk($lastid);
					$file_ext = substr($post_image, strripos($post_image, '.')); // get file name
					$newname = $url_name."_".$lastid."".$file_ext;
					$featureimg->image = $newname;
					$featureimg->update();
					$newpath = Yii::app()->basePath.'/../img/clients/';
					move_uploaded_file($_FILES["photo"]["tmp_name"], $newpath.$newname);
				}
				$this->redirect(Yii::app()->createUrl("octa/clients/addphoto",array("msg"=>"1")));
			}else{
				print_r($model->errors);
				//$this->redirect(Yii::app()->createUrl("octa/clients/addphoto",array("msg"=>"0")));
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

			$name = Yii::app()->request->getPost("alt");

			$mystring = generateRandomString();
			$id=$_GET['id'];
			$model= Clients::model()->findByPk($id);
			$model->alt = $name;
			$model->content = "clients";
			$date = Yii::app()->request->getPost("date");
			$date = Yii::app()->dateFormatter->format('y-MM-dd',$date);
			$model->updated_date = $date;
			
			
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
			$url_name=strtolower($url_name);
			
			
			$post_image = $_FILES["photo"]["name"];
			$file_ext = substr($post_image, strripos($post_image, '.')); // get file name

			if(!empty($post_image)){
				$newname = $url_name."_".$id."".$file_ext;
				$model->image = $newname;
			}

			if ($model->update()){
				if(!empty($post_image)){
					$newpath = Yii::app()->basePath.'/../img/clients/';
					move_uploaded_file($_FILES["photo"]["tmp_name"], $newpath.$newname);
				}
				$this->redirect(Yii::app()->createUrl("octa/clients/edit",array("id"=>$id,"msg"=>"1")));
			}else{
				$this->redirect(Yii::app()->createUrl("octa/clients/edit",array("id"=>$id,"msg"=>"0")));
			}
		}
		if (isset($_GET['id'])){
			$id= $_GET['id'];
			$model=  Clients::model()->findByPk($id);
			$this->render("edit",array("gallery"=>$model));
		}
	}

	public function actionDelete()
	{
		$id=Yii::app()->request->getParam('id');
		$del= Clients::model()->deleteByPk($id);
		$this->redirect(Yii::app()->createUrl("octa/gallery"));
	}

}

?>
