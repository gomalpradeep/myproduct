<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\SiteProduct */

$this->title = Yii::t('app', 'Create Site Product');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Site Products'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-product-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
