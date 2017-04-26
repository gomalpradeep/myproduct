<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SiteEmailTemplate */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Site Email Template',
]) . $model->template_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Site Email Templates'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->template_id, 'url' => ['view', 'id' => $model->template_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="site-email-template-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
