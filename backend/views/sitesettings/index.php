<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SiteSettingsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Site Settings');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-settings-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Site Settings'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'site_name',
            'site_phone_1',
            'site_mobile_1',
            'site_address:ntext',
            // 'site_maintainence_mode',
            // 'site_coderight',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
