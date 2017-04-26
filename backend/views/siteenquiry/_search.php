<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SiteEnquirySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="site-enquiry-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'enquiry_id') ?>

    <?= $form->field($model, 'enquiry_name') ?>

    <?= $form->field($model, 'enquiry_email') ?>

    <?= $form->field($model, 'enquiry_phone') ?>

    <?= $form->field($model, 'enquiry_message') ?>

    <?php // echo $form->field($model, 'enquiry_product_id') ?>

    <?php // echo $form->field($model, 'enquiry_product_name') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'enquiry_status') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
