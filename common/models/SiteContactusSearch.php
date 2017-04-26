<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\SiteContactus;

/**
 * SiteContactusSearch represents the model behind the search form about `common\models\SiteContactus`.
 */
class SiteContactusSearch extends SiteContactus
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['contactus_id'], 'integer'],
            [['contactus_name', 'contactus_email', 'contactus_subject', 'contactus_body', 'contactus_status'], 'safe'],
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
        $query = SiteContactus::find();

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
            'contactus_id' => $this->contactus_id,
        ]);

        $query->andFilterWhere(['like', 'contactus_name', $this->contactus_name])
            ->andFilterWhere(['like', 'contactus_email', $this->contactus_email])
            ->andFilterWhere(['like', 'contactus_subject', $this->contactus_subject])
            ->andFilterWhere(['like', 'contactus_body', $this->contactus_body])
            ->andFilterWhere(['like', 'contactus_status', $this->contactus_status]);

        return $dataProvider;
    }
}
