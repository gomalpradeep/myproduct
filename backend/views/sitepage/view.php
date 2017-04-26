<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\SitePage */

$this->title = $model->page_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Site Pages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-page-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->page_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->page_id], [
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
            'page_id',
            'page_name',
            'page_title',
            'page_slug',
            'page_content:ntext',
            'created_by',
            'created_at',
            'modified_by',
            'modified_at',
          
			[
			'attribute'=>'page_status',
			'value' => $model->page_status == 1 ? 'Active' : 'Inactive'
			//TblCategory::get_status(), 
			],
        ],
    ]) ?>

</div>
