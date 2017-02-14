<?php

namespace app\collections;

use Yii;

/**
 * Domain Handler of Posts
 */
class PostCollection extends AbstractCollection
{

    public function getPostsFromThread($threadId)
    {
        $posts = \app\models\Post::find()
            ->where(array('thread_id' => $threadId, 'post_deleted_at' => null))
            ->all();

        if (!is_array($posts)){
            $posts = array();
        }

        return $posts;
    }
}
