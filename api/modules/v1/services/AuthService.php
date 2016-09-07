<?php 
namespace api\modules\v1\services;


/**
* 验证service
* 
*/
class AuthService extends \api\models\BaseModel
{
	
	public function init()
	{
		echo '<pre>'; //'</pre>';
		print_r($this->_remapMd5());exit;
		// session_start();
		// var_dump($_SESSION);exit;
	}

	/**
	 * md5重新对应
	 * @author NJ 2016年09月06日22:53:33
	 * @param  string $value [description]
	 * @return [type]        [description]
	 */
	private function _remapMd5($original_string=null)
	{
		// 
		$begin_time = $this->getMicrotime(2);
		// 被替换的字符
		$primary_arr = [
			'a'=>'i','b'=>'l','c'=>'q','d'=>'6','e'=>'g','f'=>'2','g'=>'h','h'=>'7','i'=>'5','j'=>'v','k'=>'1','l'=>'4',
			'm'=>'','n'=>'','o'=>'','p'=>'','q'=>'','r'=>'','s'=>'','t'=>'','u'=>'','v'=>'','w'=>'','x'=>'',
			'y'=>'','z'=>'','1'=>'','2'=>'','3'=>'','4'=>'','5'=>'','6'=>'','7'=>'','8'=>'','9'=>'','0'=>'',
		];
		// 对应替换成的字符
		$map_arr = [
			'i','l','q','6','g','2','h','7','5','v','1','4','n','b','t','z','8','r','s','m','d','9','x','o','p','a','u','e','f','k','3','w','y','0','j','c',
		];
		$t_arr = str_split($original_string); // 原字符串拆分成数组
		foreach ($t_arr as $k => $v) { // 遍历处理
			// 处理映射
			$new[] = $map_arr[array_search($v, $primary_arr)];
		}
		// var_dump($new);
		// var_dump(md5('1'));exit; // c4ca4238a0b923820dcc509a6f75849b
		$t = 'c4ca4238a0b923820dcc509a6f75849b';
		$end_time = $this->getMicrotime(2);
		var_dump($begin_time);
		var_dump($end_time);exit;
		var_dump(str_replace($primary_arr, $map_arr, 'c4ca4238a0b923820dcc509a6f75849b'));exit;
		// shuffle($map_arr);
		return $map_arr;
	}

	public function getDistance($begin_point=null, $end_point=null)
	{
		# code...
		$distance = 6371.012 *
		acos(cos(acos(-1) / 180 * $crt_latitude) *
		cos(acos(-1) / 180 * $target_latitude) *
		cos(acos(-1) / 180 * $crt_longitude - acos(-1) / 180 * $target_longitude) +
		sin(acos(-1) / 180 * $crt_latitude) *
		sin(acos(-1) / 180 * $target_latitude))*1;

        $R = 6378137; // Earth’s mean radius in meter
        $dLat = $this->rad($target_latitude - $crt_latitude);
        $dLong = $this->rad($target_longitude - $crt_longitude);
        $a = sin($dLat / 2) * sin($dLat / 2) +
        cos($this->rad($crt_latitude)) * cos($this->rad($target_latitude)) *
        sin($dLong / 2) * sin($dLong / 2);
        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
        $d = $R * $c;
        var_dump($d);exit;




	}



    public function rad($x=null)
    {
        # code...
        return $x * pi() / 180;
    }


}
























