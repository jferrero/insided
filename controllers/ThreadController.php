<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class ThreadController extends \yii\web\Controller
{

	public function actionIndex($threadId){

        // TODO: this line should not be here, but in a centrlized location, if there is enough time, move it
		Yii::$classMap['\app\collections\ThreadCollection'] = 'collections/ThreadCollection';

		$aThread = \app\models\Thread::find()
            ->where(array('thread_id' => $threadId, 'thread_deleted_at' => null))
            ->one();

		$thePostCollection = new \app\collections\PostCollection;
		$aPostArray = $thePostCollection->getPostsFromThread($threadId);

		// TODO, if null...
		$aThread->setPosts($aPostArray);
        
        return $this->render('index.phtml', array ('aThread' => $aThread));
	}


}
