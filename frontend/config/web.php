<?php


$config = [
    'homeUrl' => Yii::getAlias('@frontendUrl'),
    'controllerNamespace' => 'frontend\controllers',
    'defaultRoute' => 'site/index',
    'bootstrap' => ['maintenance'],
    'modules' => [
        'user' => [
            'class' => frontend\modules\user\Module::class,
            'shouldBeActivated' => true,
            'enableLoginByPass' => false,
        ],
        'question' => [
            'class' => frontend\modules\question\QuestionModule::class,

        ],
        'channel' => [
            'class' => frontend\modules\channel\Channel::class,
        ],
        'utility' => [
            'class' => 'c006\utility\migration\Module',
        ],

    ],

    'components' => [
        'authClientCollection' => [
            'class' => yii\authclient\Collection::class,
            'clients' => [
                'google' => [
                    'class' => yii\authclient\clients\Google::class,
                    'clientId'     => '854681243858-6n85idp6t4c9rrfmbtd9vdi7giik7abc.apps.googleusercontent.com',
                    'clientSecret' => 'CKl9bym_RjGSogI3K39QJp8p',
                ],
                'facebook' => [
                    'class' => yii\authclient\clients\Facebook::class,
                    'clientId'     => '399793667309417',
                    'clientSecret' => '82b4fa3e519735b65710088c7aaabca0',
                    'scope' => 'email,public_profile',
                    'attributeNames' => [
                        'name',
                        'email',
                        'first_name',
                        'last_name',
                    ]
                ],
                'vkontakte' => [
                    'class'        => yii\authclient\clients\VKontakte::class,
                    'scope' => 'email',
                    'clientId'     => '7055725',
                    'clientSecret' => 'IeLsSdYnDfnjxUHUJYM7'
                ],
                'yandex' => [
                    'class'        => yii\authclient\clients\Yandex::class,

                    'clientId'     => '87d0712226c34b77b7fffd946797abb1',
                    'clientSecret' => 'c31240dc1ce54e7688a78f8d720fb7ad',

                ],

            ]
        ],
        'errorHandler' => [
            'errorAction' => 'site/error'
        ],
        'maintenance' => [
            'class' => common\components\maintenance\Maintenance::class,
            'enabled' => function ($app) {
                if (env('APP_MAINTENANCE') === '1') {
                    return true;
                }
                return $app->keyStorage->get('frontend.maintenance') === 'enabled';
            }
        ],
        'request' => [
            'cookieValidationKey' => env('FRONTEND_COOKIE_VALIDATION_KEY')
        ],
        'user' => [
            'class' => yii\web\User::class,
            'identityClass' => common\models\User::class,
            'loginUrl' => ['/user/sign-in/login'],
            'enableAutoLogin' => true,
            'as afterLogin' => common\behaviors\LoginTimestampBehavior::class
        ]
    ]
];

if (YII_ENV_DEV) {
    $config['modules']['gii'] = [
        'class' => yii\gii\Module::class,
        'generators' => [
            'crud' => [
                'class' => yii\gii\generators\crud\Generator::class,
                'messageCategory' => 'frontend'
            ]
        ]
    ];
}

return $config;
