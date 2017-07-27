<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=127.0.0.1;dbname=echo_server',
            'username' => 'root',
            'password' => '1486',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => false,
            'transport' => [ 
                'class' => 'Swift_SmtpTransport', 
                'host' => 'smtp.163.com', 
                'username' => 'ningerjohn@163.com', 
                'password' => 'Ninger1486', 
                'port' => '25', 
                'encryption' => 'tls', 
            ], 
            'messageConfig'=>[ 
                'charset'=>'UTF-8', 
                'from'=>['ningerjohn@163.com'=>'NingerJohn'] 
            ], 
        ],
    ],
    'language'=>'zh-CN', // 设置中文
];
