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
		$primary_arr = [
			'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','1','2','3','4','5','6','7','8','9','0'
		];
		$map_arr = [
			'i','l','q','6','g','2','h','7','5','v','1','4','n','b','t','z','8','r','s','m','d','9','x','o','p','a','u','e','f','k','3','w','y','0','j','c'
		];
		// var_dump(md5('1'));exit; // c4ca4238a0b923820dcc509a6f75849b
		$t = 'c4ca4238a0b923820dcc509a6f75849b';
		$t_arr = str_split($t);
		foreach ($t_arr as $k => $v) {
			// 处理映射
			$new[] = $map_arr[array_search($v, $primary_arr)];
		}
		// var_dump($new);
		$end_time = $this->getMicrotime(2);
		var_dump($begin_time);
		var_dump($end_time);exit;
		var_dump(str_replace($primary_arr, $map_arr, 'c4ca4238a0b923820dcc509a6f75849b'));exit;
		// shuffle($map_arr);
		return $map_arr;
	}



}
























