<?php

class EnquiryController extends CController
{
    public $heading="Enquiry";
	public function actionIndex()
	{
			if (Yii::app()->user->hasState("admin")){

					$cri = new CDbCriteria();

					$cri->order="id desc";

					$query = Enquiry::model();

					$count = $query->count();
		
					$pagination = new CPagination($count);

					$pagination->pageSize=10;

   			 	$pagination->applyLimit($cri);
					
					$enquiries = $query->findAll($cri);
					
					$this->render("index",array("enquiries"=>$enquiries,"pagination"=>$pagination));
			}else{
					$this->redirect(Yii::app()->createUrl("octa/login"));
			}

	}

	public function actionEnquiry_View()
	{
			if (Yii::app()->user->hasState("admin")){
					$id = Yii::app()->request->getParam("id");
					$model =  Enquiry::model()->findByPk($id);
				if($model->is_read == 0){
						$model->is_read = 1;
				}else{
						$model->is_read = 0;
				}
				if($model->update()){
						$this->redirect(Yii::app()->createUrl("octa/enquiry",array("msg"=>"1")));
				}else{
						$this->redirect(Yii::app()->createUrl("octa/enquiry",array("msg"=>"0")));
				}
			}else{
					$this->redirect(Yii::app()->createUrl("octa/login"));
			}
	}
	
	public function actionSearch()
	{
			if (!Yii::app()->user->hasState("admin")){          
					$this->redirect(Yii::app()->createUrl("octa/login"));
					Yii::app()->end();
			}
			if (!empty($_POST)){
					$query=trim(Yii::app()->request->getPost('search'));
					$cri=new CDbCriteria();
					$cri->condition="name Like :query";
					$cri->params= array(":query"=> "%$query%");
					$enquiry= Enquiry::model()->findAll($cri);
					if ($enquiry)
					{
							$this->render("search",array("enquiries"=>$enquiry));
					}
					else
					{
							$sorry="Your search did not return any result. Please check your query";
							$this->render("search",array("sorry"=>$sorry));
					}
			}else{
					$this->redirect("index");
			}
	}
	
	public function actionReply() {
			if(!empty($_POST) && $_POST['type'] == 'enq_reply'){
					$enq_id        = trim(Yii::app()->request->getPost('enq_id'));
					$model              = new Enquiryreply();
					$model->enq_id        = $enq_id;
					$model->message      = trim(Yii::app()->request->getPost('reply_message'));
					$model->created_at     = date('Y-m-d H:i:s');
					$insert = $model->save();
					if($insert){
							$this->redirect(Yii::app()->createUrl("octa/enquiry"));
							$model_enq =  Enquiry::model()->findByPk($enq_ids);
							$model_enq->is_read = 1;
							$model_enq->update();
					}else{
							echo "failed";
					}
			}
			
	}
	
	public function actionEnquiry_Delete()
	{
		$id = Yii::app()->request->getParam('id');
		$del = Enquiry::model()->deleteByPk($id);
		$this->redirect(Yii::app()->createUrl("octa/enquiry"));
	}

}
