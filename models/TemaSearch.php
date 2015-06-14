<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tema;

/**
 * TemaSearch represents the model behind the search form about `app\models\Tema`.
 */
class TemaSearch extends Tema
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idtema'], 'integer'],
            [['temacol'], 'safe'],
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
        $query = Tema::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'idtema' => $this->idtema,
        ]);

        $query->andFilterWhere(['like', 'temacol', $this->temacol]);

        return $dataProvider;
    }
}
