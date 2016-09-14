<?php
namespace common\libraries;

/**
* 客户端信息公共类
* 
* @author NJ 2016年9月14日16:50:31
* 
*/
class ClientInfo
{
    

    /**
     * 获取客户端IP地址
     * 
     * @author NJ 2016年9月14日16:37:22
     * @return mixed 客户端IP地址
     * 
     */
    public function getClientIp(){ 
        if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown")) {
            $ip = getenv("HTTP_CLIENT_IP"); 
        } else if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown")) {
            $ip = getenv("HTTP_X_FORWARDED_FOR"); 
        } else if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown")) {
            $ip = getenv("REMOTE_ADDR"); 
        } else if (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown")) {
            $ip = $_SERVER['REMOTE_ADDR']; 
        } else {
            $ip = null; 
        }
        return($ip); 
    }

    /**
     * 从新浪IP数据库中获取IP地址对应的地区信息
     * 
     * @author NJ 2016年9月14日16:48:45
     * @param  string $ip ip地址
     * @return mixed     null, array
     * 
     */
    public function getLocationInfoFromSinaIpDatabase($ip=null){
        $new_ip = $ip ? $ip :  $this->getClientIp();
        if ( empty($new_ip) ) {
            // ip为空的话，直接返回空
            return null;
        }
        
        $url = 'http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=json&ip=' . $queryIP; 
        $ch = curl_init($url); // 初始化url地址 
        curl_setopt($ch, CURLOPT_ENCODING, 'utf8'); // 设置一个cURL传输选项 
        curl_setopt($ch, CURLOPT_TIMEOUT, 10); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // 获取数据返回 
        $location = curl_exec($ch); // 执行一个cURL会话 
        $location = json_decode($location);//对JSON 格式的字符串进行编码 
        curl_close($ch); //关闭一个cURL会话资源
        if ($location === FALSE) {
            return null;
        }
        return $location;
    } 




}































