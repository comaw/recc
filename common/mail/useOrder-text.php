<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $order \frontend\models\Order */
/* @var $items \frontend\models\Item */
/* @var $item \frontend\models\CartItem */


$resetLink = \yii\helpers\Url::home(true).'/order/'.$order->id.'.html';
?>

    <?=Yii::t('app', 'Здравствуйте ')?>, <?=$order->name?> <?=$order->soname?>

    <?=Yii::t('app', 'Ваш заказ на {site}', ['site' => Yii::$app->name])?>:

    <?= Html::a(Yii::t('app', 'Посмотреть заказ'), $resetLink) ?>

    Подробно:

    Имя <?=$order->name?>

    Фамилия <?=$order->soname?>

    Email <?=$order->email?>

    Телефон <?=$order->phone?>

    Страна/регион <?=$order->country?>

    Адресс <?=$order->adress?>

    <?php foreach($items AS $item){ ?>

        <?=$item->item0->name?> | <?=$item->counts?> | <?=$item->size0->name?> | <?=$item->size0->name?> | <?=$item->element0->getImageLink()?> | <?=$item->watermark0->getImageUrl()?>

    <?php } ?>
