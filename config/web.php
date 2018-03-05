<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'name' => 'SGA PICKING',
    'id' => 'basic',
    'language' => 'es-ES', // Set the language here
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
    'modules' => [
        'api' => [
            'class' => 'app\modules\api\Api',
        ],
        'sgapicking' => [
            'class' => 'app\modules\sgapicking\sgapicking',
        ],
        'varios' => [
            'class' => 'app\modules\varios\varios',
        ],
    ],
    'components' => [
        'assetManager' => [
            'bundles' => [
                'dmstr\web\AdminLteAsset' => [
                    'skin' => 'skin-blue',
                ],
            ],
        ],
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@app/views' => '@app/views'
                ],
            ],
        ],
        'formatter' => [
            'class' => 'yii\i18n\Formatter',
            'nullDisplay' => '',
        ],
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '_XJDo0PTFeILJFa9AHqwsWfKvid5xXFc',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        /* 'user' => [
          'identityClass' => 'app\models\User',
          'enableAutoLogin' => true,
          ], */
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
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
        'db' => $db,
        /*
          'urlManager' => [
          'enablePrettyUrl' => true,
          'showScriptName' => false,
          'rules' => [
          ],
          ],
         */
        'urlManager' => [
            'class' => 'yii\web\UrlManager',
            'showScriptName' => false, // Disable index.php
            'enablePrettyUrl' => true, // Disable r= routes
            'enableStrictParsing' => true,
            'rules' => [
                // Here is the mater configuration of URL Management for Module
                'GET api/login/<user:\w+>/<pass:\w+>' => 'api/varios/acceso/login',
                'GET api/logout' => 'api/varios/acceso/logout',
                'GET api/renew' => 'api/varios/acceso/renew',
                'POST api/<module:\w+>/<controller:\w+>' => 'api/<module>/<controller>/create',
                'PUT,PATCH api/<module:\w+>/<controller:\w+>/<id>' => 'api/<module>/<controller>/update',
                'DELETE api/<module:\w+>/<controller:\w+>/<id>' => 'api/<module>/<controller>/delete',
                'GET,HEAD api/<module:\w+>/<controller:\w+>/<id:\d+>' => 'api/<module>/<controller>/view',
                'GET,HEAD api/<module:\w+>/<controller:\w+>/index/<page>' => 'api/<module>/<controller>/index',
                'GET,HEAD api/<module:\w+>/<controller:\w+>/index' => 'api/<module>/<controller>/index',
                'GET,HEAD api/<module:\w+>/<controller:\w+>/<action:\w+>/<id>' => 'api/<module>/<controller>/<action>',
                // url basicas aplicacion
                '/' => 'site/index', // vacio: http://localhost:8080/
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                //'<controller:\w+>/<action:\w+>/<id>' => '<controller>/<action>', // esta repe
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
                '<module:\w+>/<controller:\w+>/<id:\d+>' => '<module>/<controller>/view',
                '<module:\w+>/<controller:\w+>/<action:\w+>' => '<module>/<controller>/<action>',
                '<module:\w+>/<controller:\w+>/<action:\w+>/<id:\d+>' => '<module>/<controller>/<action>',
            ],
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            //If you don't have authKey column, set enableAutoLogin field to false
            'enableAutoLogin' => false,
            'enableSession' => true,
        ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
            // uncomment the following to add your IP if you are not connecting from localhost.
            //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
        'generators' => [//here
            'crud' => [
                'class' => 'yii\gii\generators\crud\Generator',
                'templates' => [
                    'adminlte' => '@vendor/dmstr/yii2-adminlte-asset/gii/templates/crud/simple',
                ]
            ]
        ],
    ];
}

return $config;
