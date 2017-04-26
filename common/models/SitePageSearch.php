<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\SitePage;

/**
 * SitePageSearch represents the model behind the search form about `common\models\SitePage`.
 */
class SitePageSearch extends SitePage
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['page_id', 'created_by', 'modified_by'], 'integer'],
            [['page_name', 'page_title', 'page_slug', 'page_content', 'created_at', 'modified_at', 'page_status'], 'safe'],
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
        $query = SitePage::find();

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
            'page_id' => $this->page_id,
            'created_by' => $this->created_by,
            'created_at' => $this->created_at,
            'modified_by' => $this->modified_by,
            'modified_at' => $this->modified_at,
        ]);

        $query->andFilterWhere(['like', 'page_name', $this->page_name])
            ->andFilterWhere(['like', 'page_title', $this->page_title])
            ->andFilterWhere(['like', 'page_slug', $this->page_slug])
            ->andFilterWhere(['like', 'page_content', $this->page_content])
            ->andFilterWhere(['like', 'page_status', $this->page_status]);

        return $dataProvider;
    }
}
