<?php

namespace api\models;

use Yii;

/**
 * Base Model For API Application
 */
class BaseModel extends \yii\db\ActiveRecord
{

	public $time_stamp;

	public function getMicrotime($type=1)
	{
		// 根据type返回不同类型时间
		if ( $type == 1 ) {
			// 毫秒级
			return microtime(true);
		} elseif( $type == 2 ) {
			// 微秒级
			$t = explode(' ', microtime());
			// var_dump(microtime());
			var_dump(floatval($t[0]));
			var_dump(floatval($t[1]));
			var_dump(floatval($t[1]) + floatval($t[0]));
			exit;
			// var_dump($t);exit;
			$time = floatval($t[1]) + floatval($t[0]);
			return $time;
		}
	}

}
