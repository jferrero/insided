<?php

namespace app\collections;

use Yii;

/**
 * Domain-Handler of Forums
 */
class ForumCollection extends AbstractCollection
{
    /**
     * gets the forum and threads
     * @param type $forumId 
     * @return aForum|false
     */
    public function getForumInitialData($forumId)
    {

        // first get the selected forum information
        // ideally this should be first instanciated here and complete the information from within the object
        // since it getting the information and hydrating the object should be within the domain of the object itself
        // please refer to the sequence diagram "ShowThread" to see an alternative/improve way to handle this

        $aForum = \app\models\Forum::find()
            ->where(['forum_id' => $forumId])
            ->one();

        if ($aForum instanceof \app\models\Forum){
            // now we proceed to get the information of the thread within that forum
            $aForum->getThreads();
        }else{
            return false;
        }

        return $aForum;
    }
}