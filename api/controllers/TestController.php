<?php
namespace api\controllers;

/**
* 测试类
*/
class TestController extends \yii\web\Controller
{
	
	public function init($value='')
	{
		# code...
		// echo 'init';
	}

	public function actionIndex($value='')
	{
		# redis测试
		$redis = \Yii::$app->redis;
		// $redis->set('key','v');
		var_dump($redis->get('key'));
	}



}




































