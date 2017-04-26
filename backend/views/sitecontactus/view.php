<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\SiteContactus */

$this->title = $model->contactus_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Site Contactuses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contactus-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->contactus_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->contactus_id], [
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
            'contactus_id',
            'contactus_name',
            'contactus_email:email',
            'contactus_subject',
            'contactus_body:ntext',
            'contactus_status',
        ],
    ]) ?>

</div>
