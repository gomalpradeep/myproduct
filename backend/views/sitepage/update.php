<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SitePage */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Site Page',
]) . $model->page_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Site Pages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->page_id, 'url' => ['view', 'id' => $model->page_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="site-page-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
