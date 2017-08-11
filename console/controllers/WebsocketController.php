<?php
namespace console\controllers;

use \yii\console\Controller;
use \console\models\User;

/**
 *  Websocket Server in Yii Console
 * 
 * @author NJ <ningerjohn@163.com>
 * @ctime 2016-06-26
 * 
 */
class WebsocketController extends Controller
{
    /**
     * Websocket Server : default method
     * @return null empty value
     */
    public function actionIndex()
    {
        # 创建websocket对象；create a server object
        $WS = new \swoole_websocket_server("127.0.0.1", 9501);
        // 当新用户建立成功连接的时候，会触发下面的方法；trigger the following while new client connected
	$WS->set(array(
		'daemonize' => true,
	));
        $WS->on('Open', function($server, $req) {
            // var_dump($server);
            // print just connected client id
            // echo "connection open: ".$req->fd."\n";


            // 向所有在线的用户发送消息；broadcast new client connected to every clients
            foreach ($server->connections as $key => $fd) {
                $server->push($fd, json_encode(['new client'=>$req->fd]));
            }
            
            // $UserM = new User;
            // var_dump($server->connections);
            // foreach ($server->connections as $key => $fd) {
                # deal with all the connected client id
                // var_dump($fd) . '\n';
                // var_dump($fd) . '\n';
                // $UserM->user_name = "$fd";
                // $UserM->password = md5($fd);
                // $res = $UserM->save();
                // var_dump($UserM->getErrors());
                // var_dump($res);
            // }
        });
        
        // 服务器收到客户端发过来的消息时的处理
        $WS->on('Message', function($server, $frame) {
            echo "message: ".$frame->data;
            $server->push($frame->fd, json_encode(["hello", "world"]));
        });

        // 任何客户端断开连接的时候，触发下面的处理； any client close will trigger following codeblock
        $WS->on('Close', function($server, $fd) {
            echo "connection close: ".$fd."\n"; // 终端里输出打印
        });

        // 开启websocket服务器； start websocket server
        $WS->start();
    }

    public function verifyToken($user_id=null, $token=null)
    {
        # 参数判断
        if ( empty( $user_id ) || empty( $token ) ) {
            return false;
        } else {
            $RDS = \Yii::$app->redis;
            
        }
        
    }

    /**
     * Record information we need stored it in file
     * 
     * @author NJ
     * @ctime 2016-06-26
     * @param  mixed $info      information need recorded
     * @param  string $file_name filename we put into
     * @return null            null
     * 
     */
    public function log($info, $file_name)
    {
        # code...
        $dir =  dirname(__FILE__);
        $line_seperator = "\n\n\n################ new line ###############\n\n";
        $fp = fopen($dir . '/../runtime/logs/' . $file_name, 'a');
        if ( is_array($info) || is_object($info) ) {
            # if $info is array or object
            $content_str = var_export($info, true);
        } elseif( is_string($info) ) {
            # if $info is string
            $content = $info;
        }
        fwrite($fp, $content . $line_seperator);
        fclose($fp);
    }

}


?>
