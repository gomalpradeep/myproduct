<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SitesubCategory */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Sitesub Category',
]) . $model->category_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sitesub Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->category_id, 'url' => ['view', 'id' => $model->category_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="sitesub-category-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
