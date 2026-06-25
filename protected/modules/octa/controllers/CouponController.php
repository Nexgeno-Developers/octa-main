<?php
class CouponController extends CController
{
	public $heading="Coupons Management";

	public function actionIndex()
	{
		if (Yii::app()->user->hasState("admin")){
			$cri= new CDbCriteria();
			$cri->order="id DESC";
			$coupons= Coupon::model()->findAll($cri);
			$this->render("index",array("coupon"=>$coupons));
		}else{
			$this->redirect(Yii::app()->createUrl("octa/login"));
		}
	}

	public function actionAddCoupon()
	{
		if(Yii::app()->user->hasState("admin")){
			if(!empty($_POST)){
				$code=  Yii::app()->request->getPost("code");
				$cri = new CDbCriteria();
				$cri->condition="code='$code'";
				$check=  Coupon::model()->find($cri);
				
				if ($check){
					$response=array();
					$response['status']="already";
					echo CJSON::encode($response);
					Yii::app()->end();
				}else{
					$model= new Coupon();
					$model->title=  Yii::app()->request->getPost('title');
					$model->code=$code;
					$model->value=Yii::app()->request->getPost('discount');
					
					if(!empty($_POST['is_active'])){
						$model->status=1;
					}else{
						$model->status=0;
					}

					if(!empty($_POST['is_prices'])){
						Coupon::model()->updateAll(array("prices"=>0));
						$model->prices=1;
					}else{
						$model->prices=0;
					}
                             
					$model->number_of_uses=Yii::app()->request->getPost("uses");
					$start_date = Yii::app()->request->getPost('start_date');
					$end_date = Yii::app()->request->getPost('end_date');
					$model->start_date = Yii::app()->dateFormatter->format('y-MM-d',strtotime($start_date));
					$model->end_date = Yii::app()->dateFormatter->format('y-MM-d',strtotime($end_date));
					$model->type = Yii::app()->request->getPost('dtype');
					
					if($model->save()){
						$response=array();
						$response['status']="ok";
						echo CJSON::encode($response);
						Yii::app()->end();
					}else{
						$response=array();
						$response['status']=$model->errors;
						echo CJSON::encode($response);
						Yii::app()->end();
					}
				}
			}else{
				$this->render("addcoupon");
			}
		}else{
			$this->redirect(Yii::app()->createUrl("octa/login")); 
		}
	}
        
	public function actionEditCoupon()
	{
		if (Yii::app()->user->hasState("admin")){
			$id = Yii::app()->request->getParam("id");

			if (!empty($_POST)){
				$id = Yii::app()->request->getParam("editId");
				$is_actives = Yii::app()->request->getPost("is_active");
				$is_prices = Yii::app()->request->getPost("is_prices");
				
				$model= Coupon::model()->findByPk($id);
                $model->title =  Yii::app()->request->getPost('title');
                $model->code = Yii::app()->request->getPost('code');
                $model->value = Yii::app()->request->getPost('discount');

				if(!empty($is_actives)){$model->status=1;}else{$model->status=0;}
				if(!empty($is_prices)){Coupon::model()->updateAll(array("prices"=>0)); $model->prices=1; }else{$model->prices=0;}

				$model->number_of_uses=Yii::app()->request->getPost("uses");
				$start_date = Yii::app()->request->getPost('start_date');
				$end_date = Yii::app()->request->getPost('end_date');
				$model->start_date = Yii::app()->dateFormatter->format('y-MM-d',strtotime($start_date));
				$model->end_date = Yii::app()->dateFormatter->format('y-MM-d',strtotime($end_date));
				$model->type = Yii::app()->request->getPost('dtype');

				if ($model->update()){
					$response=array();
					$response['status']="ok";
					echo CJSON::encode($response);
					Yii::app()->end();
				}else{
					$response=array();
					$response['status']=$model->errors;
					echo CJSON::encode($response);
					Yii::app()->end();
				}
			}else{
				$coupon= Coupon::model()->findByPk($id);
				$this->render("editcoupon",array("coupon"=>$coupon));
			}
		}else{
			$this->redirect(Yii::app()->createUrl("octa/login"));   
		}
	}

	public function actionSearch()
	{
		if(!Yii::app()->user->hasState("admin")){
			$this->redirect(Yii::app()->createUrl("octa/login"));
			Yii::app()->end();
		}

		$query=trim(Yii::app()->request->getParam('query'));
		//$vendor_name=  strtolower($vendor_name);
		$cri=new CDbCriteria();
		$cri->condition="code Like :query";
		$cri->params=array(":query"=>"%$query%");
		$coupon= Coupon::model()->findAll($cri);
		$this->render("index",array("coupon"=>$coupon));
	}

	public function actionDelete()
	{
		if(!Yii::app()->user->hasState("admin")){
			$this->redirect(Yii::app()->createUrl("octa/login"));
			Yii::app()->end();
		}

		$id=Yii::app()->request->getParam('id');
		Coupon::model()->deleteByPk($id);
		$this->redirect(Yii::app()->createUrl("octa/coupon"));
	}

	public function actionProcessActive()
	{
		if(!Yii::app()->user->hasState("admin")){
			$this->redirect(Yii::app()->createUrl("octa/login"));
			Yii::app()->end();
		}

		$id= Yii::app()->request->getPost('id');
		$coupon= Coupon::model()->findByPk($id);
		if($coupon->status==1){
			$coupon->status=0;
		}else{
			$coupon->status=1;
		}
		if ($coupon->update()){
			$response=array();
			$response['status']='ok';
			$response['url']=Yii::app()->createUrl("octa/coupon/processactive");
			$response['date']=date("Y-m-d");
			echo CJSON::encode($response);
			Yii::app()->end();
		}else{
			$response=array();
			$response['status']=$coupon->getErrors();
			echo CJSON::encode($response);
			Yii::app()->end();
		}
	}
	
	public function actionDprices()
	{
		if(!Yii::app()->user->hasState("admin")){
			$this->redirect(Yii::app()->createUrl("octa/login"));
			Yii::app()->end();
		}

		$id= Yii::app()->request->getParam('id');
		$status = Yii::app()->request->getParam('status');
		
		Coupon::model()->updateAll(array("prices"=>0));
		
		$coupon = Coupon::model()->findByPk($id);
		if($coupon->prices==1){
			$coupon->prices=0;
		}else{
			$coupon->prices=1;
		}
		if ($coupon->update()){
			$this->redirect(Yii::app()->createUrl("octa/coupon",array("coupon"=>"success")));
			Yii::app()->end();
		}else{
			$this->redirect(Yii::app()->createUrl("octa/coupon",array("coupon"=>"unsuccess")));
			Yii::app()->end();
		}
	}
}
