<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
* AnswersSearch represents the model behind the search form about `app\models\Answers`.
*/
class AnswersSearch extends Answers
{
/**
* @inheritdoc
*/
public function rules()
{
return [
[['id', 'answer_num', 'question', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['answer'], 'safe'],
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
$query = Answers::find();

$dataProvider = new ActiveDataProvider([
'query' => $query,
]);

$this->load($params);

if (!$this->validate()) {
// uncomment the following line if you do not want to any records when validation fails
// $query->where('0=1');
return $dataProvider;
}

$query->andFilterWhere([
            'id' => $this->id,
            'answer_num' => $this->answer_num,
            'question' => $this->question,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'answer', $this->answer]);

return $dataProvider;
}
}