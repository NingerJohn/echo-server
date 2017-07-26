<?php
namespace frontend\controllers;

// use \yii\web\Controller;

/**
* 网站默认控制器，包括注册和登陆
*
* @author NJ 2016年09月14日05:47:44
*
*/
class DefaultController extends \frontend\core\FrontController
{
    /**
     * site index page
     * @return string   page string
     */
	public function actionIndex()
	{
        $this->view->title = 'eCho - 面向Ubuntu使用者的即时聊天软件';
		$view_data = [];
		return $this->render('index', $view_data);
	}

    /**
     * 注册页面
     * @author NJ 2016年09月14日06:03:23
     * @param  string $value 默认参数
     * @return string        页面
     */
    public function actionRegister($value='')
    {
        # code...
        $this->view->title = '注册页面';
        // var_dump( (new \common\libraries\Generate)->uuid(1) );
        $view_data = [];
        return $this->render('register', $view_data);
    }

    /**
     * 注册提交方法
     *
     * @author 2016年09月30日16:15:12
     * @return json json结果
     */
    public function actionRegSubmit()
    {
    	//
    	// \common\libraries\Generate::passwordSalt();
    	
    	var_dump( $this->post() );
    }



	public function actionTest()
	{
		# code...
		$model = new \frontend\models\user\UserRegisterForm(['scenario'=>'register']);
		if ( $model->load($this->post()) && $model->validate() ) {
			# code...
			var_dump($this->post());exit;
		}else{

		}

		return $this->render('register_page', ['model'=>$model]);
	}

    public function actionLogin()
    {
        # code...
    }



}
