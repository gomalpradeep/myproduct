<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SiteSettingsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="site-settings-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'site_name') ?>

    <?= $form->field($model, 'site_phone_1') ?>

    <?= $form->field($model, 'site_mobile_1') ?>

    <?= $form->field($model, 'site_address') ?>

    <?php // echo $form->field($model, 'site_maintainence_mode') ?>

    <?php // echo $form->field($model, 'site_coderight') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
