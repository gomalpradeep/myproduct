<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%site_enquiry}}".
 *
 * @property integer $enquiry_id
 * @property string $enquiry_name
 * @property string $enquiry_email
 * @property string $enquiry_phone
 * @property string $enquiry_message
 * @property string $enquiry_product_id
 * @property string $enquiry_product_name
 * @property string $created_at
 * @property string $enquiry_status
 */
class SiteEnquiry extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%site_enquiry}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['enquiry_name', 'enquiry_email', 'enquiry_phone', 'enquiry_message', 'enquiry_product_id', 'enquiry_product_name', 'enquiry_status'], 'required'],
            [['enquiry_message', 'enquiry_status'], 'string'],
            [['created_at'], 'safe'],
            [['enquiry_name', 'enquiry_email', 'enquiry_product_name'], 'string', 'max' => 250],
            [['enquiry_phone'], 'string', 'max' => 15],
            [['enquiry_product_id'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'enquiry_id' => Yii::t('app', 'Enquiry ID'),
            'enquiry_name' => Yii::t('app', 'Enquiry Name'),
            'enquiry_email' => Yii::t('app', 'Enquiry Email'),
            'enquiry_phone' => Yii::t('app', 'Enquiry Phone'),
            'enquiry_message' => Yii::t('app', 'Enquiry Message'),
            'enquiry_product_id' => Yii::t('app', 'Enquiry Product ID'),
            'enquiry_product_name' => Yii::t('app', 'Enquiry Product Name'),
            'created_at' => Yii::t('app', 'Created At'),
            'enquiry_status' => Yii::t('app', 'Enquiry Status'),
        ];
    }
}
