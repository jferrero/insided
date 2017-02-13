<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Post;

/**
 * PostQuery represents the model behind the search form about `\app\models\Post`.
 */
class PostQuery extends Post
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['post_id', 'thread_id', 'post_created_by', 'post_updated_by', 'post_deleted_by'], 'integer'],
            [['post_title', 'post_comment', 'post_image_link', 'post_created_at', 'post_updated_at', 'post_deleted_at'], 'safe'],
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
        $query = Post::find();

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
            'post_id' => $this->post_id,
            'thread_id' => $this->thread_id,
            'post_created_at' => $this->post_created_at,
            'post_created_by' => $this->post_created_by,
            'post_updated_at' => $this->post_updated_at,
            'post_updated_by' => $this->post_updated_by,
            'post_deleted_at' => $this->post_deleted_at,
            'post_deleted_by' => $this->post_deleted_by,
        ]);

        $query->andFilterWhere(['like', 'post_title', $this->post_title])
            ->andFilterWhere(['like', 'post_comment', $this->post_comment])
            ->andFilterWhere(['like', 'post_image_link', $this->post_image_link]);

        return $dataProvider;
    }
}
