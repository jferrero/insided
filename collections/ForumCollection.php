<?php

namespace app\collections;

use Yii;


class ForumCollection
{
    public function getForumInitialData($forumId)
    {

        // first get the selected forum information
        // ideally this should be first instanciated here and complete the information from within the object
        // since it getting the information and hydrating the object should be within the domain of the object itself
        $aForum = \app\models\Forum::find()
            ->where(['forum_id' => $forumId])
            ->one();


        // now we proceed to get the information of the thread within that forum
        $aForum->getThreads();

        return $aForum;
    }
}
