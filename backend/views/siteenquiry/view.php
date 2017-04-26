<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\SiteEnquiry */

$this->title = $model->enquiry_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Site Enquiries'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-enquiry-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->enquiry_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->enquiry_id], [
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
            'enquiry_id',
            'enquiry_name',
            'enquiry_email:email',
            'enquiry_phone',
            'enquiry_message:ntext',
            'enquiry_product_id',
            'enquiry_product_name',
            'created_at',
            'enquiry_status',
        ],
    ]) ?>

</div>
