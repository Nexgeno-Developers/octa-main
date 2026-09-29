<?php
class DemosController extends CController
{
	public $heading="Demo Management";

	public function actionIndex()
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
		$ecri->condition="(status=1 AND type = 1)";
        	 

		$testi=  Demos::model()->findAll($ecri);
		$this->render("index",array("testis"=>$testi,"pages"=>$pages));
	}

	public function actionAdd()
	{
		if(!Yii::app()->user->hasState("admin")){
			$this->redirect(Yii::app()->createUrl("octa/login"));
			Yii::app()->end();
		}

		if(!empty($_POST)){
			$model= new Demos;
			$model->cert_id = Yii::app()->request->getPost("cert");
			$model->name = Yii::app()->request->getPost("name");
			$model->demolink = Yii::app()->request->getPost("demolink");
			$model->youtubeid = Yii::app()->request->getPost("youtubeid");
			$model->type = Yii::app()->request->getPost("type");
			$model->status = 1;
			$model->date_added=date("Y-m-d H:i:s");

			if($model->save()){
				$this->redirect(Yii::app()->createUrl("octa/demos/add",array("msg"=>"1")));
				Yii::app()->end();
			}else{
				$this->redirect(Yii::app()->createUrl("octa/demos/add",array("msg"=>"0")));
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
			$model= Demos::model()->findByPk($id);
			$model->cert_id = Yii::app()->request->getPost("exam");
			$model->name = Yii::app()->request->getPost("name");
			$model->demolink = Yii::app()->request->getPost("demolink");
			$model->youtubeid = Yii::app()->request->getPost("youtubeid");
			$model->type = Yii::app()->request->getPost("type");
			$model->status = 1;

			if($model->update()){
				$this->redirect(Yii::app()->createUrl("octa/demos/edit",array("id"=>$id,"msg"=>"1")));
				Yii::app()->end();
			}else{
				$this->redirect(Yii::app()->createUrl("octa/demos/edit",array("id"=>$id,"msg"=>"0")));
				Yii::app()->end();
			}
		}
	
		$tid = Yii::app()->request->getParam("id");
		if (isset($tid)){
			$id= Yii::app()->request->getParam("id");
			$model=  Demos::model()->findByPk($id);
			$exams=Exam::model()->findAll();
			$this->render("edit",array("testi"=>$model,"exam"=>$exams));
		}
	}

	public function actionDelete()
	{
		$id = Yii::app()->request->getParam('id');
		$del = Demos::model()->deleteByPk($id);
		$this->redirect(Yii::app()->createUrl("octa/demos"));
	}
}

