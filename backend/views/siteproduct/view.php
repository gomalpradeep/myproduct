<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\SiteProduct */

$this->title = $model->product_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Site Products'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-product-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->product_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->product_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
           // 'product_id',
            'product_name',
            'product_slug',
            'product_category_id',
            'product_description:ntext',
          
			[
            'label' => 'product_image',  
            'format' => 'raw',   
            'value' => function ($model) {
                 $images = '';

                $images = $images.Html::img(\Yii::$app->request->BaseUrl.'/uploads/'.$model->product_image,['alt'=>'','width'=>'200']);
                return ($images);

            }
            ],
            'product_price',
            'product_quantity',
            'product_subtitle',
            'product_specification:ntext',
            'created_by',
            'created_at',
            'modified_by',
            'modified_at',
            'product_viewed',
          
			[
			'attribute'=>'product_status',
			'value' => $model->product_status == 1 ? 'Active' : 'Inactive'
			//TblCategory::get_status(), 
			],
        ],
    ]) ?>

</div>
