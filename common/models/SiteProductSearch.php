<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\SiteProduct;

/**
 * SiteProductSearch represents the model behind the search form about `common\models\SiteProduct`.
 */
class SiteProductSearch extends SiteProduct
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id', 'product_category_id', 'product_quantity', 'created_by', 'modified_by', 'product_viewed'], 'integer'],
            [['product_name', 'product_slug', 'product_description', 'product_image', 'product_price', 'product_subtitle', 'product_specification', 'created_at', 'modified_at', 'product_status'], 'safe'],
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
        $query = SiteProduct::find();

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
            'product_id' => $this->product_id,
            'product_category_id' => $this->product_category_id,
            'product_quantity' => $this->product_quantity,
            'created_by' => $this->created_by,
            'created_at' => $this->created_at,
            'modified_by' => $this->modified_by,
            'modified_at' => $this->modified_at,
            'product_viewed' => $this->product_viewed,
        ]);

        $query->andFilterWhere(['like', 'product_name', $this->product_name])
            ->andFilterWhere(['like', 'product_slug', $this->product_slug])
            ->andFilterWhere(['like', 'product_description', $this->product_description])
            ->andFilterWhere(['like', 'product_image', $this->product_image])
            ->andFilterWhere(['like', 'product_price', $this->product_price])
            ->andFilterWhere(['like', 'product_subtitle', $this->product_subtitle])
            ->andFilterWhere(['like', 'product_specification', $this->product_specification])
            ->andFilterWhere(['like', 'product_status', $this->product_status]);

        return $dataProvider;
    }
}
