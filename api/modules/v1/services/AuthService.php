<?php 
namespace api\modules\v1\services;


/**
* 验证service
* 
*/
class AuthService extends \api\models\BaseModel
{
	
    const SITE_DOMAIN = 'echo-server.cn';

	public function init()
	{
		echo '<pre>'; //'</pre>';
		print_r($this->_remapMd5());exit;
		// session_start();
		// var_dump($_SESSION);exit;
	}

    /**
     * 生成验证数据
     * 
     * @author NJ 2016年09月07日22:59:53
     * @param  array $user_data 用户数据
     * @return array            生成的数据
     * 
     */
    public static function generateAuthData($user_data)
    {
        // 根据客户端数据来生成验证数据
        // request_time, client_type, device_id, ip_address
        $fin_res['request_time'] = $user_data['request_time'];
        $fin_res['client_type'] = $user_data['client_type'];
        $fin_res['device_id'] = $user_data['device_id'];
        $fin_res['ip_address'] = $user_data['ip_address'];
        $fin_res['token'] = md5( slef::SITE_DOMAIN . $user_data['request_time'] . $user_data['client_type'] . $user_data['device_id'] . $user_data['ip_address']);
        return $fin_res;
    }

    private function _paramsCheck($params=null, $rules=null)
    {
        # code...
        $rules = [
            // 字段， 是否必须， 验证函数
            'request_time', 'client_type', ''
        ];
        foreach ($params as $p_k => $p_v) {
            
        }
    }

}
























