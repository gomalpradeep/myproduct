<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\SiteEmailTemplate */

$this->title = Yii::t('app', 'Create Site Email Template');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Site Email Templates'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-email-template-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
