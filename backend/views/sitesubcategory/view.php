<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\SitesubCategory */

$this->title = $model->category_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sitesub Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sitesub-category-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->category_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->category_id], [
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
            'category_main_id',
            'category_name',
            'category_slug',
            'category_title',
            'category_description:ntext',
            'created_by',
            'created_at',
            'modified_by',
            'modified_at',
                   [
	'attribute'=>'status',
	'value' => $model->category_status == 1 ? 'Active' : 'Inactive'
	//TblCategory::get_status(), 
],
        ],
    ]) ?>

</div>
