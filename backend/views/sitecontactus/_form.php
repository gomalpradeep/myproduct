<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SiteContactus */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="site-contactus-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'contactus_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contactus_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contactus_subject')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contactus_body')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'contactus_status')->dropDownList([ '0', '1', '2', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
