<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\SiteCategory;
/* @var $this yii\web\View */
/* @var $model common\models\SitesubCategory */
/* @var $form yii\widgets\ActiveForm */

	$category=SiteCategory::find()->where(['category_status'=>'1','category_main_id'=>0])->all();
	$listData=ArrayHelper::map($category,'category_id','category_name');
?>

<div class="sitesub-category-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'category_main_id')->dropDownList( $listData,['prompt'=>'Select...']);?>

    <?= $form->field($model, 'category_name')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'category_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'category_description')->textarea(['rows' => 6]) ?>


    <?= $form->field($model, 'category_status')->dropDownList([ '0'=>'Inactive', '1'=>'Active', ], ['prompt' => 'Select Status..']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
