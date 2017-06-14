<?php
/**
 * Created by PhpStorm.
 * User: naffiq
 * Date: 6/14/17
 * Time: 11:12
 */

require(__DIR__.'/../vendor/autoload.php');
require(__DIR__.'/../vendor/yiisoft/yii2/Yii.php');

$app = new \yii\console\Application([
    'id' => 'basic-tests',
    'basePath' => dirname(__DIR__),
    'language' => 'ru_RU',
    'components' => [
//        'db' => $db,
        'mailer' => [
            'useFileTransport' => true,
        ],
        'assetManager' => [
            'basePath' => __DIR__ . '/../web/assets',
        ],
        'urlManager' => [
            'showScriptName' => true,
        ],
        'request' => [
            'cookieValidationKey' => 'test',
            'enableCsrfValidation' => false,
            // but if you absolutely need it set cookie domain to localhost
            /*
            'csrfCookie' => [
                'domain' => 'localhost',
            ],
            */
        ],
    ],
    'params' => [],
]);
