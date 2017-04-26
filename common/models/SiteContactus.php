<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%site_contactus}}".
 *
 * @property integer $contactus_id
 * @property string $contactus_name
 * @property string $contactus_email
 * @property string $contactus_subject
 * @property string $contactus_body
 * @property string $contactus_status
 */
class SiteContactus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%site_contactus}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['contactus_name', 'contactus_email', 'contactus_subject', 'contactus_body'], 'required'],
            [['contactus_body', 'contactus_status'], 'string'],
			['contactus_status','safe'],
            [['contactus_name', 'contactus_subject'], 'string', 'max' => 250],
            [['contactus_email'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'contactus_id' => Yii::t('app', 'Contactus ID'),
            'contactus_name' => Yii::t('app', 'Contactus Name'),
            'contactus_email' => Yii::t('app', 'Contactus Email'),
            'contactus_subject' => Yii::t('app', 'Contactus Subject'),
            'contactus_body' => Yii::t('app', 'Contactus Body'),
            'contactus_status' => Yii::t('app', 'Contactus Status'),
        ];
    }
}
