<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $order \frontend\models\Order */
/* @var $items \frontend\models\Item */
/* @var $item \frontend\models\CartItem */


$resetLink = \yii\helpers\Url::home(true).'/order/'.$order->id.'.html';
?>
<div class="password-reset">
    <p><?=Yii::t('app', 'Здравствуйте ')?>, <?=$order->name?> <?=$order->soname?></p>

    <p><?=Yii::t('app', 'Ваш заказ на {site}', ['site' => Yii::$app->name])?>:</p>

    <p><?= Html::a(Yii::t('app', 'Посмотреть заказ'), $resetLink) ?></p>

    <p>Подробно:</p>

    <p><strong>Имя</strong> <?=$order->name?></p>

    <p><strong>Фамилия</strong> <?=$order->soname?></p>

    <p><strong>Email</strong> <?=$order->email?></p>

    <p><strong>Телефон</strong> <?=$order->phone?></p>

    <p><strong>Страна/регион</strong> <?=$order->country?></p>

    <p><strong>Адресс</strong> <?=$order->adress?></p>

    <?php foreach($items AS $item){ ?>

        <p><?=$item->item0->name?> | <?=$item->counts?> | <?=$item->size0->name?> | <?=$item->size0->name?> | <img src="<?=$item->element0->getImageLink()?>" style="max-width: 120px; max-height: 120px;"> | <img src="<?=$item->watermark0->getImageUrl()?>" style="max-width: 120px; max-height: 120px;"></p>

    <?php } ?>
</div>