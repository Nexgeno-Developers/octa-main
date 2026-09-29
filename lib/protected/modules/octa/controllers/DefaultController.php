<?php

class DefaultController extends CController
{
    public $heading="DashBoard";
	public function actionIndex()
	{
		 if (Yii::app()->user->hasState("admin")){

                $this->render("index");
            }
            else {
                $this->redirect(Yii::app()->createUrl("octa/login"));
            }

	}


	public function actionViewForms()
	{
		if (Yii::app()->user->hasState("admin")){
			$cri1 = new CDbCriteria();
			$cri1->order = "id desc";
			$forms = Forms::model()->findAll($cri1);
			$this->render("viewforms",array("forms"=>$forms));
		}else{
			$this->redirect(Yii::app()->createUrl("octa/login"));
		}
	}
		public function actionViewForms_search()
	{
			if (!Yii::app()->user->hasState("admin")){          
					$this->redirect(Yii::app()->createUrl("octa/login"));
					Yii::app()->end();
			}
			if (!empty($_POST)){
					$query=trim(Yii::app()->request->getPost('search'));
					$cri=new CDbCriteria();
					$cri->condition="type Like :query";
					$cri->params= array(":query"=> "%$query%");
					$Forms= Forms::model()->findAll($cri);
					if ($Forms)
					{
							$this->render("viewforms_search",array("forms"=>$Forms));
					}
					else
					{
							$sorry="Your search did not return any result. Please check your query";
							$this->render("viewforms_search",array("sorry"=>$sorry));
					}
			}else{
					$this->redirect(Yii::app()->createUrl("octa/default/viewforms"));
			}
	}

	public function actionDeleteForm()
	{
		if (Yii::app()->user->hasState("admin")){
			$id=Yii::app()->request->getParam('id');
			Forms::model()->deleteByPk($id);
			$this->redirect(Yii::app()->createUrl("octa/default/viewforms"));
		}else{
			$this->redirect(Yii::app()->createUrl("octa/login"));
		}
	}





	public function actionHome_Sliders()
	{
		if (Yii::app()->user->hasState("admin")){

			
			$cri = new CDbCriteria();
			$cri->order="orders asc";
			$slider = SliderPost::model()->findAll($cri); 
			
			$this->render("home_sliders",array("slider"=>$slider));
		}else{
			$this->redirect(Yii::app()->createUrl("octa/login"));
		}
	}



public function actionBannerProcess()
        {
             if (!Yii::app()->user->hasState("admin"))
            {
                 $this->redirect(Yii::app()->createUrl("octa/login"));
                 Yii::app()->end();
            }
            
            $id= Yii::app()->request->getParam('id');
            $sliderr = SliderPost::model()->findByPk($id);
            
            
            if($sliderr->status==1)
            {
                $sliderr->status=0;
            }
            else
            {
                $sliderr->status=1;
            }

             	if ($sliderr->update())
                {
                    
                  	$this->redirect(Yii::app()->createUrl("octa/default/home_sliders"));
                    Yii::app()->end();
                }
                else
                {
                 	$this->redirect(Yii::app()->createUrl("octa/default/home_sliders"));
                    Yii::app()->end();
                }
        }
        
        public function actionDeleteSlider()
        {
             if (Yii::app()->user->hasState("admin")){
                
                $id=Yii::app()->request->getParam('id');
                SliderPost::model()->deleteByPk($id);
                 $this->redirect(Yii::app()->createUrl("octa/default/home_sliders"));
                
            }
            else
            {
                $this->redirect(Yii::app()->createUrl("octa/login"));
            }
        }
        
	public function actionEditSlider()
	{
		if (Yii::app()->user->hasState("admin")){
			if (!empty($_POST)){
				$id=Yii::app()->request->getPost("id");
				$post_image = $_FILES["photo"]["name"];
				$post_image_mobile = $_FILES["photoMobile"]["name"];

				$slider= SliderPost::model()->findByPk($id);

				$slider->orders = Yii::app()->request->getPost("orders");
				$slider->alt = Yii::app()->request->getPost("alt");
				$slider->link = Yii::app()->request->getPost("link");
				$slider->type = Yii::app()->request->getPost("type");

				if(!empty($post_image)){
					$slider->image = CUploadedFile::getInstanceByName('photo');
					$slider->image->saveAs(Yii::app()->basePath.'/../img/slider_images/'.$slider->image);
				}
				if(!empty($post_image_mobile)){
					$slider->image_mobile = CUploadedFile::getInstanceByName('photoMobile');
					$slider->image_mobile->saveAs(Yii::app()->basePath.'/../img/slider_images/'.$slider->image_mobile);
				}
                    
				if ($slider->update()){
					$this->redirect(array('/octa/default/home_sliders'));
				}else{
					print_r($model->errors);
				}
			}else{
				$id=Yii::app()->request->getParam('id');
				$slider= SliderPost::model()->findByPk($id);
				$this->render("editslider",array("slider"=>$slider));
			}
		}else{
			$this->redirect(Yii::app()->createUrl("octa/login"));
		}
	}
        
	public function actionAddSlider()
	{
		if (Yii::app()->user->hasState("admin")){
			if (!empty($_FILES)){
				$model = new SliderPost();
				$model->image = CUploadedFile::getInstanceByName('photo');
				$model->alt = Yii::app()->request->getPost("alt");
				$model->link = Yii::app()->request->getPost("link");
				$model->type = Yii::app()->request->getPost("type");
				$model->status = 1;

				if ($model->save()){
					$model->image->saveAs(Yii::app()->basePath.'/../img/slider_images/'.$model->image);
					$this->redirect(array('/octa/default/home_sliders'));
				}else{
					print_r($model->errors);
				}
			}else{
				$this->render("addslider");
			}
		}else{
			$this->redirect(Yii::app()->createUrl("octa/login"));
		}
	}


	public function actionChangePassword()
	{
		if (Yii::app()->user->hasState("admin")){
			$success=0;
			$message="";
			
			if (empty($_POST))
			{
				
				$this->render("changepassword",array("success"=>$success,"message"=>$message));
			}
			else
			{
				$current= Yii::app()->request->getPost("current");
				
				$cri= new CDbCriteria();
				$cri->condition="password=:pass";
				$cri->params=array(":pass"=>$current);
				
				if (!Admin::model()->exists($cri))
				{
					$success=-1;
					$message="You Current Password is wrong";
					$this->render("changepassword",array("success"=>$success,"message"=>$message));
					Yii::app()->end();
				}
				else
				{
					$new= Yii::app()->request->getPost("new");
					$confirm_new= Yii::app()->request->getPost("confirmnew");

					if ($new==$confirm_new)
					{
						$admin= Admin::model()->findByPk(1);
						$admin->password=$new;
						$admin->update();
						$success=1;
						$message="Your password is changed. You will be logged out in 3 seconds";
						
						$this->render("changepassword",array("success"=>$success,"message"=>$message));
						Yii::app()->end();
					}
					else
					{
						$success=-1;
					$message="New password didnt match";
					$this->render("changepassword",array("success"=>$success,"message"=>$message));
					Yii::app()->end();
					}
				}
				
				$this->render("changepassword",array("success"=>$success,"message"=>$message));
			}
		}
			else
		{
			$this->redirect(Yii::app()->createUrl("octa/login"));
		}
	}


	public function actionEnquiries()
	{
			if (Yii::app()->user->hasState("admin")){

					$cri = new CDbCriteria();

					$cri->order="id desc";

					$query = Enquiry::model(); /* ->findAll($cri) */

					$count = $query->count();
		
					$pagination = new CPagination($count);

					$pagination->pageSize=2;

   			 	$pagination->applyLimit($cri);
					
					$enquiries = $query->findAll($cri);
					
					$this->render("enquiries",array("enquiries"=>$enquiries,"pagination"=>$pagination));
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
						$this->redirect(Yii::app()->createUrl("octa/default/enquiries",array("msg"=>"1")));
				}else{
						$this->redirect(Yii::app()->createUrl("octa/default/enquiries",array("msg"=>"0")));
				}
			}else{
					$this->redirect(Yii::app()->createUrl("octa/login"));
			}
	}

	public function actionEnquiryPagination() {
		
		$query = Enquiry::find();
		
		$count = $query->count();
		
		$pagination = new Pagination(['totalCount' => $count, 'defaultPageSize' => 2]);
		
		$models = $query->offset($pagination->offset)->limit($pagination->limit)->all();
		
 }
	
	public function actionEnquiry_Delete()
	{
		$id = Yii::app()->request->getParam('id');
		$del = Enquiry::model()->deleteByPk($id);
		$this->redirect(Yii::app()->createUrl("octa/default/enquiries"));
	}

}
