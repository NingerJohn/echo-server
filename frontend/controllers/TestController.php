<?php
namespace frontend\controllers;

use \PHPExcel;
use \PHPExcel\IOFactory;

/**
* 测试类
*/
class TestController extends \common\core\BaseController
{


    public $enableCsrfValidation = true;


    public function actionHtmlpdf($value='')
    {
        # code...
        $html_content = file_get_contents('https://www.baidu.com/');
        \Yii::$app->html2pdf
    ->convert($html_content)
    ->saveAs('./output.pdf'); // sh: 1: wkhtmltopdf: not found
    }

	public function actionPhpexcel($value='')
	{
		# code...

		$PHPReader = \PHPExcel_IOFactory::load('./file/red_packet.xlsx');
		$sheetData = $PHPReader->getActiveSheet()->toArray(null, true, true, true);
		echo '<pre>';
		print_r($sheetData);
	}

	public function actionIndex($value='')
	{
		# redis测试
		$redis = \Yii::$app->redis;
		// $redis->set('key','v');
		var_dump($redis->get('key'));
	}

	public function actionWebsocketTest($value='')
	{
		# code...
		$view_data['is_login'] = '1';
		return $this->render('websocket_test', $view_data);
	}

    public function beforeAction($action)
    {
        // var_dump();exit;
        // 关闭csrf
        $disableCsrf = ['file-upload'];
        if ( $this->request->isAjax && in_array($action->id, $disableCsrf) ) {
            $this->enableCsrfValidation = false;
            return true;
        }
        return true;
    }

    
    public function actionFileUpload()
    {
        # code...
            // var_dump($_FILES);exit;
        if ( $this->request->isPost ) {
            // 上传操作
            var_dump($_FILES);exit;
        } else {
            # 页面
            return $this->render('file_upload');
        }
    }

    public function actionDatePicker()
    {
        # code...

        $redis = [
            1=>['user_name'=>'xiaoming', 'ws_client_id'=>['mobile'=>[1], 'web'=>[2,3,4], 'pc-client'=>[5,6]], 'mobile'=>1234567890], // 用户id 1
            2=>['user_name'=>'zhangsan', 'ws_client_id'=>[7,8], 'mobile'=>1234567890], // 用户id 2
        ];
        var_dump(array_values($redis[1]['ws_client_id']));exit;

        return $this->render('date_picker');
    }




}




































