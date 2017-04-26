<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SiteEnquiry */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="site-enquiry-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'enquiry_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'enquiry_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'enquiry_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'enquiry_message')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'enquiry_product_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'enquiry_product_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'enquiry_status')->dropDownList([ '0', '1', '2', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
