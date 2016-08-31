<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $order \frontend\models\Order */
/* @var $items \frontend\models\Item */


$resetLink = \yii\helpers\Url::home(true).'/admin/order/view/?id='.$order->id;
?>

    <?=Yii::t('app', 'Здравствуйте админ')?>,

    <?=Yii::t('app', 'Новый заказ на {site}', ['site' => Yii::$app->name])?>:

    <?= Html::a(Yii::t('app', 'Перейти в админку к заказу'), $resetLink) ?>

    Подробно:

    Имя <?=$order->name?>

    Email <?=$order->email?>

    Телефон <?=$order->phone?>

    Товар <?=$order->item0->name?>

    Количество <?=$order->count?>
