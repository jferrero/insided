<?php

namespace app\collections;

use Yii;


class ThreadCollection
{
    public function getThreadsOfForum($forumId)
    {

        // first get the selected threads information
        $arrayThreads = \app\models\Thread::find()
            ->where(array ('forum_id' => $forumId, 'thread_deleted_at' => NULL))
            ->orderBy('thread_Id')
            ->all();

        return $arrayThreads;
    }
}
