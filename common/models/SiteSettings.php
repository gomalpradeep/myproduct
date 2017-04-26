<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "site_settings".
 *
 * @property integer $id
 * @property string $site_name
 * @property string $site_phone_1
 * @property string $site_mobile_1
 * @property string $site_address
 * @property string $site_maintainence_mode
 * @property string $site_coderight
 */
class SiteSettings extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'site_settings';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['site_name', 'site_phone_1', 'site_mobile_1', 'site_address', 'site_maintainence_mode', 'site_coderight'], 'required'],
            [['site_address', 'site_maintainence_mode'], 'string'],
            [['site_name'], 'string', 'max' => 250],
            [['site_phone_1'], 'string', 'max' => 20],
            [['site_mobile_1'], 'string', 'max' => 13],
            [['site_coderight'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'site_name' => Yii::t('app', 'Site Name'),
            'site_phone_1' => Yii::t('app', 'Site Phone 1'),
            'site_mobile_1' => Yii::t('app', 'Site Mobile 1'),
            'site_address' => Yii::t('app', 'Site Address'),
            'site_maintainence_mode' => Yii::t('app', 'Site Maintainence Mode'),
            'site_coderight' => Yii::t('app', 'Site Coderight'),
        ];
    }
}
