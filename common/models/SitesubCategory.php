<?php

namespace common\models;

use Yii;
use yii\behaviors\SluggableBehavior;
use common\models;
/**
 * This is the model class for table "site_category".
 *
 * @property integer $category_id
 * @property integer $category_main_id
 * @property string $category_name
 * @property string $category_slug
 * @property string $category_title
 * @property string $category_description
 * @property integer $created_by
 * @property string $created_at
 * @property integer $modified_by
 * @property string $modified_at
 * @property string $category_status
 */
class SitesubCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'site_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_main_id', 'category_name', 'category_title', 'category_description', 'category_status'], 'required'],
            [['category_main_id', 'created_by', 'modified_by'], 'integer'],
            [['category_description', 'category_status'], 'string'],
			['category_name','unique'],
            [[ 'created_by', 'modified_by', 'modified_at','created_at', 'modified_at', 'category_slug'], 'safe'],
            [['category_name', 'category_slug', 'category_title'], 'string', 'max' => 250],
        ];
    }
	public function behaviors()
	{
		return [
			[
				'class' => SluggableBehavior::className(),
				'attribute' => 'category_name',
				 'slugAttribute' => 'category_slug',
			],
		];
	}
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'category_id' => Yii::t('app', 'Sub Category ID'),
            'category_main_id' => Yii::t('app', 'Category Main ID'),
            'category_name' => Yii::t('app', 'SubCategory Name'),
            'category_slug' => Yii::t('app', 'SubCategory Slug'),
            'category_title' => Yii::t('app', 'SubCategory Title'),
            'category_description' => Yii::t('app', 'SubCategory Description'),
            'created_by' => Yii::t('app', 'Created By'),
            'created_at' => Yii::t('app', 'Created At'),
            'modified_by' => Yii::t('app', 'Modified By'),
            'modified_at' => Yii::t('app', 'Modified At'),
            'category_status' => Yii::t('app', 'SubCategory Status'),
        ];
    }
	
	public function getCategory()
	{
			return $this->hasOne(self::classname(), ['category_id' => 'category_main_id']);
	}
}
