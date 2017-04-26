<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\SiteContactus */

$this->title = Yii::t('app', 'Create Site Contactus');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Site Contactuses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contactus-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
