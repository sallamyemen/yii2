<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    //'layout' => 'basic',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'AKeVuS6DWORbN493EPQaBLv4MO5rolnZ',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
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
        
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                // '<action>' => 'site/<action>',
                // 'index/<id:>' => 'site/index',

                // 'training/<alias:[\w_\/-]+>/<slug:[\w_\/-]+>' => 'training/event',
                // 'training/<alias:[\w_\/-]+>' => 'training/category',
                // 'training' => 'training',

                // 'allspecialists/<slug:[\w_\/-]+>/<alias:[\w_\/-]+>' => 'customer/detail',
                // 'allspecialists/<slug:[\w_\/-]+>' => 'customer/category',
                // 'allspecialists' => 'allspecialists',

                // 'login' => 'login/login',
                // 'logout' => 'login/logout',
                // 'join' => 'join/index',
                // 'join/<action>' => 'join/<action>',
                // 'feedback' => 'feedback/index',

                // 'order' => 'cart/order',
                // 'order-new' => 'cart/order-new',
                // 'entry/register' => 'entry/register',
                // 'entry/update' => 'entry/update',
                // 'entry/delete' => 'entry/delete',
                // 'reserv/add' => 'reserv/add',

                // 'personal/<action>' => 'personal/<action>',
                // [
                //     'pattern'=>'sitemap',
                //     'route' => 'sitemap/index',
                //     'suffix' => '.xml',
                // ],

                // [
                //     'pattern'=>'personal/files/<name:[\w_\/_\/.]+>',
                //     'route' => 'site/image',
                //     'suffix' => '',
                // ],

                // [
                //     'pattern'=>'personal/profile/<name:[\w_\/_\/.]+>',
                //     'route' => 'site/ppic',
                //     'suffix' => '',
                // ],
                
                // [
                //     'pattern'=>'selector',
                //     'route' => 'catalogue/selector',
                //     'suffix' => '',
                // ],
                
                // [
                //     'pattern'=>'cart',
                //     'route' => 'cart/cart',
                //     'suffix' => '',
                // ],
                
                // [
                //     'pattern'=>'add',
                //     'route' => 'cart/add',
                //     'suffix' => '',
                // ],

                // [
                //     'pattern'=>'clear',
                //     'route' => 'cart/clear',
                //     'suffix' => '',
                // ],
                
                // [
                //     'pattern'=>'delete',
                //     'route' => 'cart/delete',
                //     'suffix' => '',
                // ],


                // 'serial' => 'site/serial',
                // 'event-pin' => 'event-pin/index',
                // 'packages' => 'event-pin/packages',
                // 'event-pin/select-events' => 'event-pin/select-events',
                // 'event-pin/send-events' => 'event-pin/send-events',
                // 'serial-check' => 'site/serial-check',
                // 'search' => 'site/search',
                // 'filial' => 'site/filial',
                // 'cities' => 'site/cities',
                // 'verify' => 'site/verify-email',

                // 'filials' => 'filials/index',

                // 'accii' => 'accii/index',
                // 'accii/<action>' => 'accii/<action>',

                // 'konkurs' => 'konkurs/index',
                //'konkurs/<action>' => 'konkurs/<action>',

                // 'site/<action>' => 'site/<action>',

                // [
                //     'pattern'=>'',
                //     'route' => 'site/index',
                //     'suffix' => '',
                // ],

                // '' => 'site/index',                

                // '<slug:[\w_\/-]+>/filter/<filter:[\w_\/_\/\:\,\-]+>' => 'route/index',
                // '<slug:[\w_\/-]+>/p-<product:[\w_\/_\/\:\,\-]+>' => 'route/index',
                // '<slug:[\w_\/-]+>/page-<page:\d+>/' => 'route/index',
                // '<slug:[\w_\/-]+>' => 'route/index',
            ],
        ],
        
    ],
    // 'as access' => [
//         'class' => 'mdm\admin\components\AccessControl',
//         'allowActions' => [
            
// //            'rbac/*',
// //            'gii/*',
//             'debug/*',

//             'event-pin/*',

//             'site/*',
//             'cart/*',

//             'accii/*',

//             'konkurs/*',

//             'filials/*',

//             'route/*',
//             'catalogue/*',
            
//             'training/*',
//             'entry/register',
//             'entry/update',
//             'entry/delete',
//             'customer/*',
//             'feedback/*',
            
//             'login/login',
//             'join/*',

//             'post/*',
//             'content/*',
//             'sitemap/*',
//             'reserv/*'
    //     ],
    // ],
    
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
    ];
}

return $config;
