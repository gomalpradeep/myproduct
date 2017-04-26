<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\SiteEnquiry */

$this->title = Yii::t('app', 'Create Site Enquiry');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Site Enquiries'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-enquiry-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
