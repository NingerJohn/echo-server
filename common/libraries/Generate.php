<?php
namespace common\libraries;

/**
* 生成随机相关的方法
* @author NJ 2016年10月07日12:41:57
* 
*/
class Generate
{
    
    function __construct()
    {
        // 
        
    }

    /**
     * 生成密码盐值
     * 随机字母和数字拼接微秒级时间戳
     * @author NJ 2016年10月07日12:17:39
     * @param  string $value [description]
     * @return [type]        [description]
     */
    public function passwordSalt($value='')
    {
        // 基础字符串
        $alphabet_number = '?.,`~=+abcdefghijklmnopqrstuvwxyz-ABCDEFGHIJKLMNOPQRSTUVWXYZ_0123456789';
        $alphabet_number_arr = str_split($alphabet_number); // 拆分成数组
        shuffle($alphabet_number_arr); // 数组随机打乱
        $fin_res = md5( implode('', $alphabet_number_arr) . microtime() ); // 组成字符串并拼接上当前微秒级时间
        return $fin_res;
        // var_dump($fin_res);
    }

    /**
     * 生成device id的方法
     * @author NJ 2016年09月07日23:36:16
     * @param  integer $type 生成类型：1：默认常用；2：其他
     * @return mixed         生成的设备ID
     */
    public static function deviceID($type='default')
    {
        // 默认生成16位随机数字，基于微秒级，很难重复
        if ( $type == 'default' ) {
            // 
            $device_id = md5(rand(1000,9999) . (\common\libraries\Time::getMicrotime(3)) . rand(1000,9999));
            return $device_id;
        } else {
            // 
        }
    }

    public function token($value='')
    {
        # code...
    }




}


















