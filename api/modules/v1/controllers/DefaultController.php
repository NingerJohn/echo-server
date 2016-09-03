<?php

namespace api\modules\v1\controllers;

use yii\web\Controller;

/**
 * Default controller for the `v1` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $res = \app\modules\v1\models\User::find()->all();
        var_dump($res);
        return $this->render('index');
    }
}
