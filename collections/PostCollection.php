<?php

namespace app\collections;

use Yii;


class PostCollection
{

    public function getPostsFromThread($threadId)
    {
        $posts = \app\models\Post::find()
            ->where(array('thread_id' => $threadId, 'post_deleted_at' => null))
            ->all();


        return $posts;
    }
}
