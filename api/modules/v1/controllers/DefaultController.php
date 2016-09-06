<?php

namespace api\modules\v1\controllers;

use yii\web\Controller;

/**
 * Default controller for the `v1` module
 */
class DefaultController extends Controller
{
    
	public function init($value='')
	{
		# code...
	}

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $t = new \api\modules\v1\services\AuthService;
        $res = \app\modules\v1\models\User::find()->all();
        var_dump($res);
        return $this->render('index');
    }
}
