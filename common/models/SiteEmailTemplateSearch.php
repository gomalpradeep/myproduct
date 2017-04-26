<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\SiteEmailTemplate;

/**
 * SiteEmailTemplateSearch represents the model behind the search form about `common\models\SiteEmailTemplate`.
 */
class SiteEmailTemplateSearch extends SiteEmailTemplate
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['template_id', 'created_by', 'modified_by'], 'integer'],
            [['template_name', 'template_subject', 'template_contect', 'created_at', 'modified_at', 'template_status'], 'safe'],
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
        $query = SiteEmailTemplate::find();

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
            'template_id' => $this->template_id,
            'created_by' => $this->created_by,
            'created_at' => $this->created_at,
            'modified_by' => $this->modified_by,
            'modified_at' => $this->modified_at,
        ]);

        $query->andFilterWhere(['like', 'template_name', $this->template_name])
            ->andFilterWhere(['like', 'template_subject', $this->template_subject])
            ->andFilterWhere(['like', 'template_contect', $this->template_contect])
            ->andFilterWhere(['like', 'template_status', $this->template_status]);

        return $dataProvider;
    }
}
