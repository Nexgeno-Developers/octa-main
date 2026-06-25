<?php

class NewsController extends CController

{

	public $heading="News Management";

	

	public function actionIndex()

	{

		if (!Yii::app()->user->hasState("admin")){

			$this->redirect(Yii::app()->createUrl("octa/login"));

			Yii::app()->end();

		}else{

			$cri=new CDbCriteria();

			$cri->limit="20";

			$cri->order = "heading";

			$count= News::model()->count();

			$pages=new CPagination($count);

			$pages->pageSize=30;

			$pages->applyLimit($cri);

			$cms=  News::model()->findAll($cri);

            $this->render("index",array("cms"=>$cms,"pages"=>$pages));

		}



	}



	public function actionAdd()

	{

		if (!Yii::app()->user->hasState("admin")){

			$this->redirect(Yii::app()->createUrl("octa/login"));

			Yii::app()->end();

		}



		if (!empty($_POST)){

                // check for duplicate

                $heading=Yii::app()->request->getPost('content_title');

				$heading=trim($heading);

                $cri= new CDbCriteria();

                $cri->condition="heading=:heading";

                $cri->params=array(":heading"=>$heading);

                $check=News::model()->exists($cri);



                if ($check){

	                $this->redirect(Yii::app()->createUrl("octa/news/addarticle",array("msg"=>"2")));

                }



                $model= new News;

                $model->heading=$heading;

				$name = $heading;

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

					$url_name = strtolower($url_name);

                $model->url=trim($url_name);



				$model->content=trim(Yii::app()->request->getPost('description'));



				$model->title=trim(Yii::app()->request->getPost('page_title'));

                

				if(!empty($_POST['seo_desc']))

                {

                    $model->meta_desc=trim(Yii::app()->request->getPost('seo_desc'));

                }



                if(!empty($_POST['keywords']))

                {

                    $model->meta_keywords=trim(Yii::app()->request->getPost('keywords'));

                }

             

                if(!empty($_POST['status']))

                {

                    $model->status=1;

                }



                $model->date_added=date('Y-m-d');



			

				



                if($model->save())

                {



				

					$post_image = $_FILES["photo"]["name"];



					if(!empty($post_image)){



						$lastid = $model->id;

						$featureimg = News::model()->findByPk($lastid);



						$file_ext = substr($post_image, strripos($post_image, '.')); // get file name



						$newname = $lastid."".$file_ext;

						

						$featureimg->image = $newname;



						$featureimg->update();



						$newpath = Yii::app()->basePath.'/../img/photos/';

						move_uploaded_file($_FILES["photo"]["tmp_name"], $newpath.$newname);

					}

					

					$msg = "Record has been updated successfully.";

                	$this->redirect(Yii::app()->createUrl("octa/news/add",array("msg"=>"1")));



                }else{

				

					$this->redirect(Yii::app()->createUrl("octa/news/add",array("msg"=>"0")));

				}

			}else{

				$this->render("add");

			}

			//Ajax call for editing

	}

	

	public function actionEdit()

	{

		if (!Yii::app()->user->hasState("admin")){

			$this->redirect(Yii::app()->createUrl("octa/login"));

			Yii::app()->end();

		}



		if (!empty($_POST)){

			$id = Yii::app()->request->getPost('id');

			

			$model= News::model()->findByPk($id);

			$heading = Yii::app()->request->getPost('content_title');

			$heading=trim($heading);

			$model->heading=$heading;

				$url_name=str_replace(" ", "-", trim($heading));

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

				$url_name = strtolower($url_name);

			$model->url=trim($url_name);

			

			$model->content=trim(Yii::app()->request->getPost('description'));



			



			if(!empty($_POST['page_title'])){

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



			$post_image = $_FILES["photo"]["name"];

			$file_ext = substr($post_image, strripos($post_image, '.')); // get file name



			if(!empty($post_image)){

				$newname = $id."".$file_ext;

				$model->image = $newname;

			}



			

			

			if ($model->update())

			{

				if(!empty($post_image)){

					$newpath = Yii::app()->basePath.'/../img/photos/';

					move_uploaded_file($_FILES["photo"]["tmp_name"], $newpath.$newname);

				}



				$msg = "Record has been updated successfully.";

				$this->redirect(Yii::app()->createUrl("octa/news/edit",array("id"=>$id,"msg"=>$msg)));



			}else{

				$msg = $model->getErrors();

				$this->redirect(Yii::app()->createUrl("octa/news/edit",array("id"=>$id,"msg"=>$msg)));

			}

		}



        if (isset($_GET['id']))

		{



			$id= $_GET['id'];

			$model=News::model()->findByPk($id);

			$this->render("edit",array("cms"=>$model));

		}

        //Ajax call for editing

	}



	public function actionDelete()

	{

		if (!Yii::app()->user->hasState("admin")){

			$this->redirect(Yii::app()->createUrl("octa/login"));

			Yii::app()->end();

		}



		$id=Yii::app()->request->getParam('id');

		News::model()->deleteByPk($id);

		$this->redirect(Yii::app()->createUrl("octa/news"));

	}



}



?>