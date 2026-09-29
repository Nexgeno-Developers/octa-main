<?php
class FaqsController extends CController
{
	public $heading="Faqs Management";

	public function actionIndex()
	{
		if (!Yii::app()->user->hasState("admin")){
			$this->redirect(Yii::app()->createUrl("octa/login"));
			Yii::app()->end();
		}
		
		$eid = Yii::app()->request->getParam("id");

		$cri=new CDbCriteria();
		//Pagination
		$count = Faqs::model()->count();
		$records = Yii::app()->request->getParam("records");

		if(isset($records)){
			$rpage = $records;
		}else{
			$rpage = 25;
		}

		$pages = new CPagination($count);
		$pages->pageSize=$rpage;
		$pages->applyLimit($cri);
		
		$ecri= new CDbCriteria();
		if(!empty($eid)){
        	$ecri->condition="status=1 AND (exam_id = :query)";
        	$ecri->params=array(":query"=>$eid); 
		}
		
		$testi=  Faqs::model()->findAll($ecri);
		$this->render("index",array("faqs"=>$testi,"pages"=>$pages));
	}

	public function actionAdd()
	{
		if(!Yii::app()->user->hasState("admin")){
			$this->redirect(Yii::app()->createUrl("octa/login"));
			Yii::app()->end();
		}

		if(!empty($_POST)){
			$model= new Faqs;
			$model->exam_id = Yii::app()->request->getPost("exam");
			$model->question = trim(Yii::app()->request->getPost("question"));
			$model->answer = trim(Yii::app()->request->getPost("answer"));
			$model->status=1;
			$model->date_added=date("Y-m-d H:i:s");

			

			if($model->save()){
				$this->redirect(Yii::app()->createUrl("octa/faqs/add",array("msg"=>"1")));
				Yii::app()->end();
			}else{
				$this->redirect(Yii::app()->createUrl("octa/faqs/add",array("msg"=>"0")));
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
			$model= Faqs::model()->findByPk($id);
			$model->exam_id = Yii::app()->request->getPost("exam");
			$model->question = Yii::app()->request->getPost("question");
			$model->answer = Yii::app()->request->getPost("answer");

			if($model->update()){
				
				$this->redirect(Yii::app()->createUrl("octa/faqs/edit",array("id"=>$id,"msg"=>"1")));
				Yii::app()->end();
			}else{
				$this->redirect(Yii::app()->createUrl("octa/faqs/edit",array("id"=>$id,"msg"=>"0")));
				Yii::app()->end();
			}
		}
	
		$tid = Yii::app()->request->getParam("id");
		if (isset($tid)){
			$id= Yii::app()->request->getParam("id");
			$model=  Faqs::model()->findByPk($id);
			$exams=Exam::model()->findAll();
			$this->render("edit",array("testi"=>$model,"exam"=>$exams));
		}
		//Ajax call for editing
	}

	public function actionDelete()
	{
		$id = Yii::app()->request->getParam('id');
		$del = Faqs::model()->deleteByPk($id);
		$this->redirect(Yii::app()->createUrl("octa/topics"));
	}
}

