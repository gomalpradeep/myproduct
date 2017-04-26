<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SiteContactusSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="site-contactus-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'contactus_id') ?>

    <?= $form->field($model, 'contactus_name') ?>

    <?= $form->field($model, 'contactus_email') ?>

    <?= $form->field($model, 'contactus_subject') ?>

    <?= $form->field($model, 'contactus_body') ?>

    <?php // echo $form->field($model, 'contactus_status') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
