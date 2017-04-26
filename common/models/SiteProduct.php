<?php

namespace common\models;

use Yii;
use yii\behaviors\SluggableBehavior;
use yii\web\UploadedFile;
/**
 * This is the model class for table "site_product".
 *
 * @property integer $product_id
 * @property string $product_name
 * @property string $product_slug
 * @property integer $product_category_id
 * @property string $product_description
 * @property string $product_image
 * @property string $product_price
 * @property integer $product_quantity
 * @property string $product_subtitle
 * @property string $product_specification
 * @property integer $created_by
 * @property string $created_at
 * @property integer $modified_by
 * @property string $modified_at
 * @property integer $product_viewed
 * @property string $product_status
 */
class SiteProduct extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
	public $file;
    
	public static function tableName()
    {
        return 'site_product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_name',  'product_category_id', 'product_description', 'product_price',
			'product_quantity', 'product_subtitle', 'product_specification', 'product_status'], 'required'],
            [['product_category_id', 'product_quantity', 'created_by', 'modified_by', 'product_viewed'], 'integer'],
            [['product_description', 'product_specification', 'product_status'], 'string'],
            [['product_image'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg ,jpeg, gif', 'maxFiles' => 4,'maxSize'=>1024 * 1024 * 2],
            [['created_at', 'modified_at','product_image','product_slug', 'created_by', 'product_viewed','created_at', 'modified_by', 'modified_at'], 'safe'],
            [['product_name', 'product_slug', 'product_subtitle'], 'string', 'max' => 500],
            [['product_price'], 'string', 'max' => 20],
        ];
    }


	public function behaviors()
	{
		return [
			[
				'class' => SluggableBehavior::className(),
				'attribute' => 'product_name',
				 'slugAttribute' => 'product_slug',
			],
		];
	}
	
	public function getImageurl()
	{
	return \Yii::$app->request->BaseUrl.'/uploads/'.$this->product_image;
	}
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'product_id' => Yii::t('app', 'Product ID'),
            'product_name' => Yii::t('app', 'Product Name'),
            'product_slug' => Yii::t('app', 'Product Slug'),
            'product_category_id' => Yii::t('app', 'Product Category ID'),
            'product_description' => Yii::t('app', 'Product Description'),
            'product_image' => Yii::t('app', 'Product Image'),
            'product_price' => Yii::t('app', 'Product Price'),
            'product_quantity' => Yii::t('app', 'Product Quantity'),
            'product_subtitle' => Yii::t('app', 'Product Subtitle'),
            'product_specification' => Yii::t('app', 'Product Specification'),
            'created_by' => Yii::t('app', 'Created By'),
            'created_at' => Yii::t('app', 'Created At'),
            'modified_by' => Yii::t('app', 'Modified By'),
            'modified_at' => Yii::t('app', 'Modified At'),
            'product_viewed' => Yii::t('app', 'Product Viewed'),
            'product_status' => Yii::t('app', 'Product Status'),
        ];
    }
}
