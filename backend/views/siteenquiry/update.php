<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SiteEnquiry */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Site Enquiry',
]) . $model->enquiry_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Site Enquiries'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->enquiry_id, 'url' => ['view', 'id' => $model->enquiry_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="site-enquiry-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
