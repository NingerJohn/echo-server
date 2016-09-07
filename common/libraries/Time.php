<?php
namespace common\libraries;

/**
* 时间相关的函数
* 
*/
class Time
{
    
    function __construct()
    {
        // 
    }

    /**
     * 获取毫秒级时间戳
     * @author NJ 2016年09月07日21:20:27
     * @param  integer $type 1：默认microtime；2：microtime(true);3:整数+小数形式;4:10位时间戳
     * @return string        结果字串
     */
    public static function getMicrotime($type=1)
    {
        // 参数合法性判断
        if ( empty($type) || !in_array($type, [1,2,3,4]) ) {
            return null;
        }
        if ( $type == 1 ) {
            // 默认形式
            return microtime();
        } else if( $type == 2 ){
            // microtime(true)
            return microtime(true);
        }else if( $type == 3 ){
            // 微秒级
            $t = explode(' ', microtime());
            // $fin_res = bcadd($t[1], $t[0], 8); // 相加模式
            $fin_res = $t[1] . ltrim($t[0], '0'); // 字符串拼接没问题
            return $fin_res;
        }elseif( $type == 4 ){
            // 10位时间戳
            return time();
        }
    }



}


















