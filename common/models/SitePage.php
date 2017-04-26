<?php

namespace common\models;

use Yii;
use yii\behaviors\SluggableBehavior;

/**
 * This is the model class for table "site_page".
 *
 * @property integer $page_id
 * @property string $page_name
 * @property string $page_title
 * @property string $page_slug
 * @property string $page_content
 * @property integer $created_by
 * @property string $created_at
 * @property integer $modified_by
 * @property string $modified_at
 * @property string $page_status
 */
class SitePage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'site_page';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['page_name', 'page_title', 'page_content', 'page_status'], 'required'],
            [['page_content', 'page_status'], 'string'],
            [['created_by', 'modified_by'], 'integer'],
            [['created_at', 'modified_at', 'created_by', 'modified_by', 'page_slug'], 'safe'],
            [['page_name', 'page_title', 'page_slug'], 'string', 'max' => 250],
        ];
    }
	public function behaviors()
	{
		return [
			[
				'class' => SluggableBehavior::className(),
				'attribute' => 'page_name',
				 'slugAttribute' => 'page_slug',
			],
		];
	}

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'page_id' => Yii::t('app', 'Page ID'),
            'page_name' => Yii::t('app', 'Page Name'),
            'page_title' => Yii::t('app', 'Page Title'),
            'page_slug' => Yii::t('app', 'Page Slug'),
            'page_content' => Yii::t('app', 'Page Content'),
            'created_by' => Yii::t('app', 'Created By'),
            'created_at' => Yii::t('app', 'Created At'),
            'modified_by' => Yii::t('app', 'Modified By'),
            'modified_at' => Yii::t('app', 'Modified At'),
            'page_status' => Yii::t('app', 'Page Status'),
        ];
    }
}
