<?php

namespace app\collections;

use Yii;

/**
 * Domain Handler of Threads
 */
class ThreadCollection extends AbstractCollection
{

	/**
     * get a single thread by Id
     * @param type $threadId 
     * @param type|bool $searchDeleted 
     * @return Thread|null
     */
	public function getThread($threadId, $searchDeleted = false){

        $arraySearch = array('thread_id' => $threadId);

        if ($searchDeleted){
            $arraySearch['thread_deleted_at'] = null;
        }

        $aThread = \app\models\Thread::find()
            ->where($arraySearch)
            ->one();

        return $aThread;
	}

    /**
     * get a thread by ID with their posts
     * @param type $threadId 
     * @param type|bool $searchDeleted 
     * @return Thread|null
     */
    public function getThreadWithPosts($threadId, $searchDeleted = false){

        $aThread = $this->getThread($threadId, $searchDeleted);

        if ($aThread instanceof \app\models\Thread){
            $thePostCollection = new \app\collections\PostCollection;
            $aPostArray = $thePostCollection->getPostsFromThread($threadId);
            $aThread->setPosts ($aPostArray);
        }else{
            // thread not found 
            return false;
        }

        return $aThread;
    }

    /**
     * get the all threads by forumId
     * @param type $forumId 
     * @return type
     */
    public function getThreadsOfForum($forumId, $searchDeleted = false)
    {
        $arraySearch = array('forum_id' => $forumId);

        if ($searchDeleted){
            $arraySearch['thread_deleted_at'] = null;
        }

        // first get the selected threads information
        $arrayThreads = \app\models\Thread::find()
            ->where($arraySearch)
            ->orderBy('thread_Id')
            ->all();

        return $arrayThreads;
    }

}