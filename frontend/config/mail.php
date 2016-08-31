<?php
/**
 * powered by php-shaman
 * mail.php 10.06.2016
 * NewFutbolca
 */


return [
    'class' => 'yii\swiftmailer\Mailer',
    'viewPath' => '@common/mail',
    'transport' => [
        'class' => 'Swift_SmtpTransport',
        'host' => 'smtp.yandex.ru',
        'username' => 'php-shaman@yandex.ru',
        'password' => '12microsoft12',
        'port' => '465',
        'encryption' => 'ssl',
    ],
];