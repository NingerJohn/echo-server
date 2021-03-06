<?php
namespace common\controllers;

/**
* 全站公用Controller
*
* @author NJ 2016年09月11日20:17:00
*
*/
class BaseController extends \yii\web\Controller
{

    /**
     * 简化get获取数据
     *
     * @author NJ 2016年09月11日20:20:34
     * @param  string $name    字段名
     * @param  mixed $default 默认值
     * @return mixed          get获取的值
     *
     */
    public function get($name=null, $default=null)
    {
        # code...
        return \Yii::$app->request->get($name, $default);
    }

    /**
     * 简化post获取数据
     *
     * @author NJ 2016年09月11日20:20:34
     * @param  string $name    字段名
     * @param  mixed $default 默认值
     * @return mixed          post获取的值
     *
     */
    public function post($name=null, $default=null)
    {
        # code...
        return \Yii::$app->request->post($name, $default);
    }

    /**
     * 简化获取session方法
     * @author NJ 2016年09月14日06:18:35
     * @param  string $sess_name session名字
     * @return mixed       session值
     */
    public function getSess($sess_name=null)
    {
        # code...
        return \Yii::$app->session->get($sess_name);
    }

    public function getRequest()
    {
        # code...
        return \Yii::$app->request;
    }

}
