<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\SitePageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Site Pages');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-page-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Site Page'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

   
            'page_name',
            'page_title',
			// 'page_slug',
            //'page_content:ntext',
            // 'created_by',
            // 'created_at',
            // 'modified_by',
            // 'modified_at',
     
			[
				'attribute'=>'page_status',
				'filter'=>array("1"=>"Active","0"=>"Inactive"),
				'value' => function($data){

				return $data->page_status==1 ? 'Active':'Inactive';
				}	
			],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
