<?php
$params = array_merge(require (__DIR__ . '/../../common/config/params.php'), require (__DIR__ . '/params.php'));
define('TIME', time());
return [
    'id' => 'app-apiadmin',
    'defaultRoute'=>'v1/',
    'bootstrap'=>['gii'],
    'basePath' => dirname(__DIR__),
    'modules' => [ // 添加模块v1和v2，分别表示不同的版本
        'v1' => [
            'class' => 'apiadmin\modules\v1\module'
        ],
        'gii'=>[
            'class' => 'yii\gii\Module',
            'allowedIPs' => ['127.0.0.1'],
            'generators' => [ 
                'crud' => [ 
                    'class' => 'yii\gii\generators\crud\Generator', // generator class
                    'templates' => [ 
                        'vishun' => '@backend/views/gii/crud/default', // template name => path to template
                    ]
                ]
            ],
        ]
    
    ],
    'controllerNamespace' => 'apiadmin\controllers',
    'components' => [
        'request' => [
            'cookieValidationKey' => 'w3BnewAWmCrjijzkiLucYD5Ty1Ym_V9F'
        ],
        'urlManager' => [
            'enablePrettyUrl' => true, // 美化url==ture
            'rules' => [
            ]
        ],
        // 'errorHandler' => [
        //     'errorAction' =>  'v1/user/error',
        // ],
    ],
    'params' => $params
];
