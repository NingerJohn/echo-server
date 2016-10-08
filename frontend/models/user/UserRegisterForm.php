<?php
namespace frontend\models\user;

/**
 * 注册模型
 */
class UserRegisterForm extends \common\models\FrontM
{

    public $email;
    public $email_code;
    public $pwd;
    public $cfm_pwd;

    public function attributeLabels()
    {
        // 属性标签说明
        return [
            'email'=>'你最常用的邮箱地址',
            'email_code'=>'邮箱验证码',
            'pwd'=>'密码',
            'cfm_pwd'=>'确认密码',
        ];
    }

    // 场景定义
    public function scenarios()
    {
        // 场景对应字段定义
        return [
            'register'=>['email', 'email_code', 'pwd', 'cfm_pwd'], // 用户注册
            'reset_password'=>['email'], // 找回密码
        ];
    }

    // 验证规则
    public function rules()
    {
        # code...
        return [
            [['email', 'email_code', 'pwd', 'cfm_pwd'], 'required', 'on'=>'register'], // 注册的时候，这些字段都是必须的
            ['email', 'email'], // 邮箱必须符合邮箱规则
            ['email_code', 'integer'], // 验证码必须是6位数字
            ['pwd', 'string', 'min'=>6, 'max'=>20], // 密码必须是6-20位字符串
            ['cfm_pwd', 'compare', 'operator'=>'==', 'compareAttribute'=>'pwd'], // 确认密码必须与第一次输入的密码一致
        ];
    }





}
