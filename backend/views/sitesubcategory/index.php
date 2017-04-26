<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\SitesubcategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Sitesub Categories');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sitesub-category-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Sitesub Category'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

			   [
                                'label' => 'Main Category Name',
                                'attribute' => 'category_main_id',
                                'value' => 'category_main_id.category_name',

                        ],

            'category_name',
            'category_slug',
            'category_title',
            // 'category_description:ntext',
            // 'created_by',
            // 'created_at',
            // 'modified_by',
            // 'modified_at',
			[
				'attribute'=>'status',
				'filter'=>array("1"=>"Active","0"=>"Inactive"),
				'value' => function($data){

				return $data->category_status==1 ? 'Active':'Inactive';
				}	
			],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
