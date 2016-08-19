<?php
namespace common\core;

use \PHPExcel;
use \PHPExcel\IOFactory;

/**
* 
*/
class BaseController extends \yii\web\Controller
{

	public $request = null;

	public function init()
	{
		# code...
		$this->request = \Yii::$app->request;
	}

	public function post($key=null)
	{
		# code...
		return \Yii::$app->request->post($key);
	}

	public function get($key=null)
	{
		# code...
		return \Yii::$app->request->get($key);
	}

}