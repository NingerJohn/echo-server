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

    /**
     * passport
     * @time 2016年10月08日22:09:03
     * @param  array $base_data 基础数据
     * @param  integer $ver 版本编号
     * @return array        验证信息
     */
    public function passport($base_data, $ver=1)
    {
        // 根据版本号生成不同的验证数据
        if ( $ver == 1 ) {
            # 版本编号1，根据用户ID（eg.FID1234, RID34），Device_ID来生成唯一识别数据
            $fin_data['uuid'] = $base_data['uuid'];
            $fin_data['device_id'] = $base_data['device_id'];
            $fin_data['sign_code'] = $base_data['sign_code'];
            $fin_data['token'] = $base_data['token'];
        } else {
            # 其他版本
        }
    }

    /**
     * 伪装用户ID
     * @author NJ 2016年10月09日06:56:50
     * @param  integer $uid 用户ID
     * @return string       伪装后的用户识别编号
     */
    public function uuid($uid=0)
    {
        // 
        $str = md5( rand(1000,9999) . date('Y-m-d') . $uid . time() . rand(1000,9999) );
        $preg = '/(\w{4})(\w{6})(\w{6})(\w{6})(\w{6})(\w{4})/';
        $res = preg_replace($preg, '$1-$2-$3-$4-$5-$6', $str);
        return $res;
    }



}


















