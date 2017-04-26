<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SiteCategory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="site-category-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php $form->field($model, 'category_main_id')->hiddenInput(['value'=>0]) ?>

    <?= $form->field($model, 'category_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'category_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'category_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'category_status')->dropDownList([ '0'=>'Inactive', '1'=>'Active', ], ['prompt' => 'Select Status']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
