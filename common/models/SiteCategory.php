<?php

namespace common\models;

use Yii;
use yii\behaviors\SluggableBehavior;
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
 * @property string $modified_at
 * @property string $category_status
 */
class SiteCategory extends \yii\db\ActiveRecord
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
            [['category_main_id', 'category_name',  'category_title', 'category_description',  'category_status'], 'required'],
            [['category_main_id', 'created_by'], 'integer'],
			[['category_name'],'unique'],
            [['category_description', 'category_status'], 'string'],
            [['created_at', 'modified_at','created_by','modified_by'], 'safe'],
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
            'category_id' => Yii::t('app', 'Category ID'),
            'category_main_id' => Yii::t('app', 'Category Main ID'),
            'category_name' => Yii::t('app', 'Category Name'),
            'category_slug' => Yii::t('app', 'Category Slug'),
            'category_title' => Yii::t('app', 'Category Title'),
            'category_description' => Yii::t('app', 'Category Description'),
            'created_by' => Yii::t('app', 'Created By'),
            'created_at' => Yii::t('app', 'Created At'),
            'modified_at' => Yii::t('app', 'Modified At'),
            'category_status' => Yii::t('app', 'Category Status'),
        ];
    }
}
