<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\SiteSettings;

/**
 * SiteSettingsSearch represents the model behind the search form about `common\models\SiteSettings`.
 */
class SiteSettingsSearch extends SiteSettings
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['site_name', 'site_phone_1', 'site_mobile_1', 'site_address', 'site_maintainence_mode', 'site_coderight'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = SiteSettings::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'site_name', $this->site_name])
            ->andFilterWhere(['like', 'site_phone_1', $this->site_phone_1])
            ->andFilterWhere(['like', 'site_mobile_1', $this->site_mobile_1])
            ->andFilterWhere(['like', 'site_address', $this->site_address])
            ->andFilterWhere(['like', 'site_maintainence_mode', $this->site_maintainence_mode])
            ->andFilterWhere(['like', 'site_coderight', $this->site_coderight]);

        return $dataProvider;
    }
}
