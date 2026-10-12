<?php

class OctaModule extends CWebModule
{
	public function init()
	{
		// this method is called when the module is being created
		// you may place code here to customize the module or the application
                $this->layoutPath = Yii::getPathOfAlias('octa.views.layouts');
                $this->layout = 'admin';
		// import the module-level models and components
		$this->setImport(array(
			'octa.models.*',
			'octa.components.*',
		));
	}

	public function beforeControllerAction($controller, $action)
	{
		if (!parent::beforeControllerAction($controller, $action)) {
			return false;
		}

		// All Octa module routes are administrative, except the login endpoints.
		if ($controller->id !== 'login' && !Yii::app()->user->hasState('admin')) {
			$controller->redirect(Yii::app()->createUrl('octa/login'));
			return false;
		}

		return true;
	}
}
