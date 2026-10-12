<?php

class LoginController extends CController
{

    public function beforeAction($action)
    {
        if ($action->id === 'login' && Yii::app()->request->isPostRequest) {
            Yii::app()->request->validateCsrfToken(new CEvent($this));
        }

        return parent::beforeAction($action);
    }

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
				$cri->condition = "username=:username";
				$cri->params = array(":username" => $username);
                
                $admin = Admin::model()->find($cri);
                $passwordInfo = $admin ? password_get_info((string) $admin->password) : array('algo' => 0);
                $isValidPassword = $admin && ($passwordInfo['algo'] ? password_verify($password, $admin->password) : hash_equals((string) $admin->password, (string) $password));
                if ($isValidPassword)
                {
                    // Upgrade a verified legacy plaintext credential to bcrypt.
                    if (!$passwordInfo['algo']) {
                        $admin->password = password_hash($password, PASSWORD_BCRYPT);
                        $admin->save(false, array('password'));
                    }
                    Yii::app()->session->regenerateID(true);
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