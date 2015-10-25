<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '<action:(part|results)>/<id:\d+>' => 'site/<action>',
                'more/' => 'site/more/',
                'moreresults/' => 'site/moreresults/',
//                '<controller:(posts)>/<action:(update|view|delete)>/<id:\d+>' => '<controller>/<action>',
//                '<controller:(posts)>/<action:(create|index)>' => '<controller>/<action>',
//                '<slugDate:(\d{4}-\d{2}-\d{2}-[A-Za-z0-9\-\_]+)>' => 'posts/viewbyslug',
//                '<forum:(forum)>/[\s\S]*' => 'forum/',
//                '<action:(nea)>' => 'site/<action>',
//                '<page:([A-Za-z0-9\-\_]+)>' => 'site/static',
            ]
        ]
    ],
];
