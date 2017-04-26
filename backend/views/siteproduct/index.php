<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\SiteProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Site Products');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-product-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Site Product'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'product_id',
            'product_name',
           // 'product_slug',
            'product_category_id',
			//'product_description:ntext',
			[
			'attribute'=>'product_image',
			'format' => 'raw',
		
			'value' => function($data){
				return ($data->product_image) ? Html::img(\Yii::$app->request->BaseUrl."/uploads/" . $data->product_image,
				['alt'=>$data->product_image,'width'=>'100']) : false;
			
				}	
			],
             'product_price',
             'product_quantity',
            // 'product_subtitle',
            // 'product_specification:ntext',
            // 'created_by',
            // 'created_at',
            // 'modified_by',
            // 'modified_at',
            // 'product_viewed',
        
			[
				'attribute'=>'product_status',
				'filter'=>array("1"=>"Active","0"=>"Inactive"),
				'value' => function($data){

				return $data->product_status==1 ? 'Active':'Inactive';
				}	
			],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
