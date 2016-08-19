<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
		'urlManager' => [
			'enablePrettyUrl' => true,
			'showScriptName' => false,//隐藏index.php 
			//'enableStrictParsing' => false,
			//后缀，如果设置了此项，那么浏览器地址栏就必须带上.html后缀，否则会报404错误
			'suffix' => '.html',
			'rules' => [
				//'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			],
		],
        'redis' => [
            'class' => 'yii\redis\Connection',
            'hostname' => '127.0.0.1',
            'port' => 6379,
            'database' => 0,
        ],




    ],
];
