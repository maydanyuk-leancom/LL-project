<?php
return [
    'language' => 'ru-RU',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'authClientCollection' => [
            'class' => 'yii\authclient\Collection',
            'clients' => [
                'facebook' => [
                    'class' => 'yii\authclient\clients\Facebook',
                    'clientId'     => '399793667309417',
                    'clientSecret' => '82b4fa3e519735b65710088c7aaabca0',
                ],
                'google' => [
                    'class'        => 'dektrium\user\clients\Google',
                    'clientId'     => 'llproject',
                    'clientSecret' => 'AIzaSyC4QTYtFODmsnloYtikdx0bKkz7zt9piNU',
                ],
                'vkontakte' => [
                    'class'        => 'dektrium\user\clients\VKontakte',
                    'clientId'     => '7055725',
                    'clientSecret' => 'IeLsSdYnDfnjxUHUJYM7'
                ],
                'yandex' => [
                    'class'        => 'dektrium\user\clients\Yandex',
                    'clientId'     => '87d0712226c34b77b7fffd946797abb1',
                    'clientSecret' => 'c31240dc1ce54e7688a78f8d720fb7ad',

                ],
            ],
        ],

    ],




];
