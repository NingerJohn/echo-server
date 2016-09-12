<?php
namespace frontend\controllers;

// use \yii\web\Controller;

/**
*
*/
class DefaultController extends \frontend\core\FrontController
{


	public function actionIndex()
	{
		# code...
		$view_data = [];
		return $this->render('index', $view_data);
	}


    public function actionRegister($value='')
    {
        # code...
        return $this->render('register', $view_data);
    }


    public function actionLogin($value='')
    {
        # code...
    }



}
