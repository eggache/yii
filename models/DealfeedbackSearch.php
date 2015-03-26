<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Dealfeedback;

/**
 * DealfeedbackSearch represents the model behind the search form about `app\models\Dealfeedback`.
 */
class DealfeedbackSearch extends Dealfeedback
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'userid', 'dealid', 'orderid', 'poiid', 'city', 'type', 'score', 'subscore', 'weight', 'bizacctid', 'useful', 'unuseful', 'addtime', 'apdaddtime', 'replytime', 'apdreplytime', 'modtime', 'attributes', 'status', 'commentid', 'replyid'], 'integer'],
            [['imgurls'], 'safe'],
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
        $query = Dealfeedback::find();

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
            'userid' => $this->userid,
            'dealid' => $this->dealid,
            'orderid' => $this->orderid,
            'poiid' => $this->poiid,
            'city' => $this->city,
            'type' => $this->type,
            'score' => $this->score,
            'subscore' => $this->subscore,
            'weight' => $this->weight,
            'bizacctid' => $this->bizacctid,
            'useful' => $this->useful,
            'unuseful' => $this->unuseful,
            'addtime' => $this->addtime,
            'apdaddtime' => $this->apdaddtime,
            'replytime' => $this->replytime,
            'apdreplytime' => $this->apdreplytime,
            'modtime' => $this->modtime,
            'attributes' => $this->attributes,
            'status' => $this->status,
            'commentid' => $this->commentid,
            'replyid' => $this->replyid,
        ]);

        $query->andFilterWhere(['like', 'imgurls', $this->imgurls]);

        return $dataProvider;
    }
}
