<?php
require_once Yii::getPathOfAlias('webroot').'/customfiles/mailfunctions.php';

class TrainingController extends CController
{
	public $pageDescription;
	public $pageKeywords;
	
	public function actionIndex()
	{
		$cri1 = new CDbCriteria();
		$cri1->order="date_added desc";
		$trainers = Trainer::model()->findAll($cri1);
		
		$content= Cms::model()->findByPk(22);
		$this->pageTitle=$content->title;
		$this->pageDescription = $content->meta_desc;
		$this->pageKeywords = $content->meta_keywords;
		$this->render("index",array("content"=>$content,"trainers"=>$trainers));
	}
	
	public function actionCTraning()
	{
		$cri1 = new CDbCriteria();
		$cri1->condition = "type='CCIE Trainers'";
		$cri1->order="date_added desc";
		$ccie = Trainer::model()->findAll($cri1);

		$cri1->condition = "type='CCNA/CCNP Trainers'";
		$ccnaccnp = Trainer::model()->findAll($cri1);
		
		$cri1->condition = "type='VMware Trainers'";
		$vmwaret = Trainer::model()->findAll($cri1);



		$content= Cms::model()->findByPk(10);
		$this->pageTitle=$content->title;
		$this->pageDescription = $content->meta_desc;
		$this->pageKeywords = $content->meta_keywords;
		$this->render("ctraning",array("content"=>$content,"ccie"=>$ccie,"ccnaccnp"=>$ccnaccnp,"vmwaret"=>$vmwaret));
	}
	
	public function actionFlyTrainer()
	{
		$cri1 = new CDbCriteria();
		$cri1->condition = "type='CCIE Trainers' or type='CCNA/CCNP Trainers' or type='VMware Trainers'";
		$cri1->order="date_added desc";
		$trainers = Trainer::model()->findAll($cri1);

		$cri2 = new CDbCriteria();
		$cri2->order="created_date desc";
		$clients = Clients::model()->findAll($cri2);
		
		$content= Cms::model()->findByPk(11);
		$this->pageTitle=$content->title;
		$this->pageDescription = $content->meta_desc;
		$this->pageKeywords = $content->meta_keywords;
		$this->render("flytrainer",array("content"=>$content,"trainers"=>$trainers,"clients"=>$clients));
	}
	
	public function actionOneTraining()
	{
		$cri1 = new CDbCriteria();
		$cri1->condition = "type='CCIE Trainers'";
		$cri1->order="date_added desc";
		$ccie = Trainer::model()->findAll($cri1);

		$cri1->condition = "type='CCNA/CCNP Trainers'";
		$ccnaccnp = Trainer::model()->findAll($cri1);
		
		$cri1->condition = "type='VMware Trainers'";
		$vmwaret = Trainer::model()->findAll($cri1);
		
		$content= Cms::model()->findByPk(12);
		$this->pageTitle=$content->title;
		$this->pageDescription = $content->meta_desc;
		$this->pageKeywords = $content->meta_keywords;
		$this->render("onetraining",array("content"=>$content,"ccie"=>$ccie,"ccnaccnp"=>$ccnaccnp,"vmwaret"=>$vmwaret));
	}
	
	public function actionInstructorLed()
	{
		$cri1 = new CDbCriteria();
		$cri1->condition = "type='CCIE Trainers'";
		$cri1->order="date_added desc";
		$ccie = Trainer::model()->findAll($cri1);

		$cri1->condition = "type='CCNA/CCNP Trainers'";
		$ccnaccnp = Trainer::model()->findAll($cri1);
		
		$cri1->condition = "type='VMware Trainers'";
		$vmwaret = Trainer::model()->findAll($cri1);
		
		$content= Cms::model()->findByPk(13);
		$this->pageTitle=$content->title;
		$this->pageDescription = $content->meta_desc;
		$this->pageKeywords = $content->meta_keywords;
		$this->render("instructorled",array("content"=>$content,"ccie"=>$ccie,"ccnaccnp"=>$ccnaccnp,"vmwaret"=>$vmwaret));
	}
	
	public function actionCorporateTraining()
	{
		$cri1 = new CDbCriteria();
		$cri1->order="created_date desc";
		$clients = Clients::model()->findAll($cri1);
		
		$content= Cms::model()->findByPk(14);
		$this->pageTitle=$content->title;
		$this->pageDescription = $content->meta_desc;
		$this->pageKeywords = $content->meta_keywords;
		$this->render("corporatetraining",array("content"=>$content,"trainers"=>$clients));
	}

	public function actionError()
	{
		$this->render("error");
	}
}
