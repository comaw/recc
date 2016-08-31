<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $order \frontend\models\Order */
/* @var $items \frontend\models\Item */



$resetLink = \yii\helpers\Url::home(true).'/admin/order/view/?id='.$order->id;
?>
<div class="password-reset">
    <p><?=Yii::t('app', 'Здравствуйте админ')?>,</p>

    <p><?=Yii::t('app', 'Новый заказ на {site}', ['site' => Yii::$app->name])?>:</p>

    <p><?= Html::a(Yii::t('app', 'Перейти в админку к заказу'), $resetLink) ?></p>

    <p>Подробно:</p>

    <p><strong>Имя</strong> <?=$order->name?></p>

    <p><strong>Email</strong> <?=$order->email?></p>

    <p><strong>Телефон</strong> <?=$order->phone?></p>

    <p><strong>Товар</strong> <?=$order->item0->name?></p>

    <p><strong>Количество</strong> <?=$order->count?></p>

</div>