<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\SiteCategory;
/* @var $this yii\web\View */
/* @var $model common\models\SiteProduct */
/* @var $form yii\widgets\ActiveForm */
$category=SiteCategory::find()->where(['category_status'=>'1','category_main_id'=>0])->all();
$listData=ArrayHelper::map($category,'category_id','category_name');
?>

<div class="site-product-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'product_category_id')->dropDownList( $listData,['prompt'=>'Select...']);?>

	<?= $form->field($model, 'product_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_description')->textarea(['rows' => 6]) ?>

	<?= $form->field($model, 'product_image')->fileInput() ?>
    
	<?= $form->field($model, 'product_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_quantity')->textInput() ?>

    <?= $form->field($model, 'product_subtitle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_specification')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'product_status')->dropDownList([ '0'=>'Inactive', '1'=>'Active', '2'=>'SoldOut'], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
