<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-backend',
    'name' => 'BankSampah',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [
        'md' => [
            'class' => 'backend\modules\md\Module',
        ],
        'banksampah' => [
            'class' => 'backend\modules\Banksampah\Module',
        ],
        'user' => [
        'class' => 'dektrium\user\Module',
        'enableUnconfirmedLogin' => true,
        'confirmWithin' => 21600,
        'cost' => 12,
        'admins' => ['hilmi'],
        // following line will restrict access to profile, recovery, registration and settings controllers from backend
        'as backend' => 'dektrium\user\filters\BackendFilter',
        ],
    ],
    'homeUrl' => '/BankSampah/administrator',
    'components' => [
        'view' => [
         'theme' => [
             'pathMap' => [
                '@app/views' => '@vendor/dmstr/yii2-adminlte-asset/example-views/yiisoft/yii2-app'
             ],
         ],
    ],
        'request' => [
            'csrfParam' => '_csrf-backend',
            'baseUrl' => '/BankSampah/administrator',
        ],
        'user' => [
        'identityCookie' => [
            'name'     => '_backendIdentity',
            'path'     => '/BankSampah/administrator',
            'httpOnly' => true,
            ],
        ],
        'session' => [
        'name' => 'BACKENDSESSID',
        'cookieParams' => [
            'httpOnly' => true,
            'path'     => '/BankSampah/administrator',
            ],
        ],  
        /* 'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
        ], */
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
        
    ],
    'params' => $params,
];
