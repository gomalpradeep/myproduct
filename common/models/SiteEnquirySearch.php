<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\SiteEnquiry;

/**
 * SiteEnquirySearch represents the model behind the search form about `common\models\SiteEnquiry`.
 */
class SiteEnquirySearch extends SiteEnquiry
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['enquiry_id'], 'integer'],
            [['enquiry_name', 'enquiry_email', 'enquiry_phone', 'enquiry_message', 'enquiry_product_id', 'enquiry_product_name', 'created_at', 'enquiry_status'], 'safe'],
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
        $query = SiteEnquiry::find();

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
            'enquiry_id' => $this->enquiry_id,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'enquiry_name', $this->enquiry_name])
            ->andFilterWhere(['like', 'enquiry_email', $this->enquiry_email])
            ->andFilterWhere(['like', 'enquiry_phone', $this->enquiry_phone])
            ->andFilterWhere(['like', 'enquiry_message', $this->enquiry_message])
            ->andFilterWhere(['like', 'enquiry_product_id', $this->enquiry_product_id])
            ->andFilterWhere(['like', 'enquiry_product_name', $this->enquiry_product_name])
            ->andFilterWhere(['like', 'enquiry_status', $this->enquiry_status]);

        return $dataProvider;
    }
}
