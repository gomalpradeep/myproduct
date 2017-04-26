<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\SitePage */

$this->title = Yii::t('app', 'Create Site Page');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Site Pages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-page-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
