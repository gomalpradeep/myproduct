<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\SiteCategory;

/**
 * SiteCategorySearch represents the model behind the search form about `common\models\SiteCategory`.
 */
class SiteCategorySearch extends SiteCategory
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'category_main_id', 'created_by'], 'integer'],
            [['category_name', 'category_slug', 'category_title', 'category_description', 'created_at', 'modified_at', 'category_status'], 'safe'],
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
        $query = SiteCategory::find();

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
            'category_id' => $this->category_id,
            'category_main_id' => $this->category_main_id,
            'created_by' => $this->created_by,
            'created_at' => $this->created_at,
            'modified_at' => $this->modified_at,
        ]);

        $query->andFilterWhere(['like', 'category_name', $this->category_name])
            ->andFilterWhere(['like', 'category_slug', $this->category_slug])
            ->andFilterWhere(['like', 'category_title', $this->category_title])
            ->andFilterWhere(['like', 'category_description', $this->category_description])
            ->andFilterWhere(['like', 'category_status', $this->category_status]);

        return $dataProvider;
    }
}
