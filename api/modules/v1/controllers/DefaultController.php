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
        $a = new \common\libraries\Security;
        // $a->displayVar();
        $ori_str = md5('1');
        $en_str = $a->remapMd5($ori_str);
        $de_str = $a->remapMd5($en_str, 'decode');
        // echo $ori_str.'<br>';
        // echo $en_str.'<br>';
        // echo $de_str.'<br>';
        echo $a->getMicrotime(3);
        exit;



        $t = new \api\modules\v1\services\AuthService;
        $res = \app\modules\v1\models\User::find()->all();
        var_dump($res);
        return $this->render('index');
    }
}
