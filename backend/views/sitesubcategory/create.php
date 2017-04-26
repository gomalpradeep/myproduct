<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\SitesubCategory */

$this->title = Yii::t('app', 'Create Sitesub Category');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sitesub Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sitesub-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
