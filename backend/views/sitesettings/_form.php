<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SiteSettings */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="site-settings-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'site_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'site_phone_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'site_mobile_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'site_address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'site_maintainence_mode')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'site_coderight')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
