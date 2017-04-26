<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SiteCategory */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Site Category',
]) . $model->category_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Site Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->category_id, 'url' => ['view', 'id' => $model->category_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="site-category-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
