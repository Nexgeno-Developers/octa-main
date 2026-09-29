<?php

class LoginController extends CController
{

	public $heading="";
	public function actionIndex()
	{
           $this->layout="login";
           $this->render("index");
	}
        
        public function actionLogin()
        {
            if (isset($_POST['username'])&& isset($_POST['password']))
            {
                $username = Yii::app()->request->getParam("username");
                $password = Yii::app()->request->getParam("password");
                
                $cri=new CDbCriteria();
				$cri->condition="username=:username AND password=:password";
				$cri->params=array(":username"=>$username,":password"=>$password);
                
                $admin= Admin::model()->find($cri);
                if($admin)
                {
                    Yii::app()->user->setstate("admin",$username);
                    $this->redirect(Yii::app()->baseUrl."/octa/default");
                }
                else
                {
                    $this->redirect(Yii::app()->baseUrl."/octa/default");
                }
            }
        }
        
        public function actionLogout()
        {
            Yii::app()->user->clearStates();
            $this->redirect("index");
        }
}
?>