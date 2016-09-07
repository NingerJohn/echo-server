<?php
namespace common\libraries;


/**
* 地理相关的计算
* 
* @author NJ 2016年09月07日22:00:11
* 
*/
class Geography
{
    
    function __construct()
    {
        # code...
    }

    /**
     * 获取2个坐标之间的距离
     * 
     * @author NJ 2016年09月07日22:00:46
     * @param  array $begin_point 起时点经纬度数组
     * @param  array $end_point   终点经纬度数组
     * @return integer            距离，单位默认米
     * 
     */
    public function getDistance($begin_point=null, $end_point=null)
    {
        // 
        if ( empty($begin_point) || empty($end_point) ) {
            # code...
            return null;
        }
        
        $crt_longitude = $begin_point[0];
        $crt_latitude = $begin_point[1];
        $target_longitude = $end_point[0];
        $target_latitude = $end_point[1];

        $distance = 
            6371012 * // 地球半径（米）
            acos(cos(acos(-1) / 180 * $crt_latitude) * cos(acos(-1) / 180 * $target_latitude) * cos(acos(-1) / 180 * $crt_longitude - acos(-1) / 180 * $target_longitude) + sin(acos(-1) / 180 * $crt_latitude) * sin(acos(-1) / 180 * $target_latitude)) * 1;
        return $distance;

        // $R = 6378137; // Earth’s mean radius in meter
        // $dLat = $this->rad($target_latitude - $crt_latitude);
        // $dLong = $this->rad($target_longitude - $crt_longitude);
        // $a = sin($dLat / 2) * sin($dLat / 2) +
        // cos($this->rad($crt_latitude)) * cos($this->rad($target_latitude)) *
        // sin($dLong / 2) * sin($dLong / 2);
        // $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
        // $d = $R * $c;
        // var_dump($d);exit;
    }



    public function rad($x=null)
    {
        # code...
        return $x * pi() / 180;
    }




}

