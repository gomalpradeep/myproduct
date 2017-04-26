<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "site_email_template".
 *
 * @property integer $template_id
 * @property string $template_name
 * @property string $template_subject
 * @property string $template_contect
 * @property integer $created_by
 * @property string $created_at
 * @property integer $modified_by
 * @property string $modified_at
 * @property string $template_status
 */
class SiteEmailTemplate extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'site_email_template';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['template_name', 'template_subject', 'template_contect', 'created_by', 'modified_by', 'modified_at', 'template_status'], 'required'],
            [['template_contect', 'template_status'], 'string'],
            [['created_by', 'modified_by'], 'integer'],
            [['created_at', 'modified_at'], 'safe'],
            [['template_name', 'template_subject'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'template_id' => Yii::t('app', 'Template ID'),
            'template_name' => Yii::t('app', 'Template Name'),
            'template_subject' => Yii::t('app', 'Template Subject'),
            'template_contect' => Yii::t('app', 'Template Contect'),
            'created_by' => Yii::t('app', 'Created By'),
            'created_at' => Yii::t('app', 'Created At'),
            'modified_by' => Yii::t('app', 'Modified By'),
            'modified_at' => Yii::t('app', 'Modified At'),
            'template_status' => Yii::t('app', 'Template Status'),
        ];
    }
}
