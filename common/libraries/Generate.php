<?php
namespace common\libraries;

/**
* 时间相关的函数
* 
*/
class Generate
{
    
    function __construct()
    {
        // 
    }

    /**
     * 生成device id的方法
     * @author NJ 2016年09月07日23:36:16
     * @param  integer $type 生成类型：1：默认常用；2：其他
     * @return mixed         生成的设备ID
     */
    public static function deviceID($type=1)
    {
        // 
        if ( $type == 1 ) {
            // 
            $device_id = md5(rand(1000,9999) . (\common\libraries\Time::getMicrotime(3)) . rand(1000,9999));
            return $device_id;
        } else {
            // 
        }
    }

}


















