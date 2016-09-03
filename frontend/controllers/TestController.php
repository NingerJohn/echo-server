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


    public function actionOne($value='')
    {
        # code...
        $this->layout = 'new_main';
        $view = \Yii::$app->getView();
        $view->params['one'] = 'oneeeee';
        $data['one'] = 'oneeeee';
        return $this->render('one', $data);
    }

    public function apiTokenRedis($value='')
    {
        # code...
        $redis = [
            // 用户id跟token绑定，key为用户id
            '1'=>[
                'token'=>'afaskafjslf88a8a7er', // token值
            ],
            // 不需要登陆的场景，key为token值
            'afaskafjslf88a8a7er'=>[
                'token'=>'afaskafjslf88a8a7er', // token值
                'device_id'=>'as897araw7a9sd7f9a7sf9auf9e', // 服务器随机生成
                'token_generate_time'=>14158400, // token生成时间
                'ip'=>'143.18.93.100', // ip地址
                'is_login'=>0, // 不需要登陆场景
                'client_type'=>'pc_web', // 客户端类型
                'longitude'=>'118.12323123', // 经度（如果有的话）
                'latitude'=>'92.1123123', // 维度（如果有的话）
                'fd'=>'afadfasfasf' // websocket客户端id
            ],


            // 服务器最初生成的数据
            'original_temp_user_183'=>[
                'token'=>'afaskafjslf88a8a7er', // token值
                'device_id'=>'as897araw7a9sd7f9a7sf9auf9e', // 服务器随机生成
                'token_generate_time'=>14158400, // token生成时间
                'ip'=>'143.18.93.100', // ip地址
                'client_type'=>'pc_web', // 客户端类型
            ],
            // 客户端存的数据
            'temp_user_183'=>[
                'token'=>'afaskafjslf88a8a7er', // token值
                'device_id'=>'as897araw7a9sd7f9a7sf9auf9e', // 服务器随机生成
                'token_generate_time'=>14158400, // token生成时间
                'ip'=>'143.18.93.100', // ip地址
                'client_type'=>'pc_web', // 客户端类型
            ],            


        ];
    }


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
        echo '<pre>';
        var_dump(getallheaders());exit;
		$redis = \Yii::$app->redis;
		// $redis->set('key','v');
		var_dump($redis->get('key'));
        echo '<br>';
        for ($i=0; $i < 100; $i++) { 
            # code...
            $arr = explode(' ', microtime());
            // echo strval($arr[0]).'<br>';
            // echo( $arr[1] . strval($arr[0]) ).'<br><br>';//exit;
        }
        $arr = explode(',', '1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1');
        foreach ($arr as $key => $value) {
            # code...
            $arr = explode(' ', microtime());
            echo( $arr[1] . strval($arr[0]) ).'<br><br>';//exit;

        }

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




































