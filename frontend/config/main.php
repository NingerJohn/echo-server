<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'user' => [
            'identityClass' => 'frontend\models\user\UserM',
            'enableAutoLogin' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        'session'=>[
            'class'=>'yii\redis\Session',
            'redis'=>[
                'hostname'=>'localhost',
                'port' => 6379,
                // 'password'=>'',
                'database'=>1, // database #2
            ],
        ],
        'html2pdf' => [
            'class' => 'yii2tech\html2pdf\Manager',
            'viewPath' => '@app/pdf',
            'converter' =>[
                'class' => 'yii2tech\html2pdf\converters\Wkhtmltopdf',
                // 'class' => 'yii2tech\html2pdf\converters\Mpdf',
                // 'class' => 'yii2tech\html2pdf\converters\Mpdf',
                // 'class' => 'yii2tech\html2pdf\converters\Dompdf',
                'defaultOptions' => [
                    'pageSize' => 'A4'
                ],
            ] 

        ],
    ],
    'modules' => [ // 模块添加配置
        'my' => [ // 会员中心模块
            'class' => 'frontend\modules\my\myModule',
        ],
    ],
    'defaultRoute'=>'default/index', // 默认控制器方法
    'params' => $params,
];
