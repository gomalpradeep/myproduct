<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SiteContactus */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Site Contactus',
]) . $model->contactus_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Site Contactuses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->contactus_id, 'url' => ['view', 'id' => $model->contactus_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="site-contactus-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
