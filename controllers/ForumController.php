<?php

namespace app\controllers;

use Yii;


class ForumController extends \yii\web\Controller
{
    public function actionIndex()
    {
        // Of the several theorical forums, will only show one
        $forumId = Yii::$app->params['main_forum_id'];

        // TODO: this line should not be here, but in a centrlized location, if there is enough time, move it
		Yii::$classMap['\app\collections\ForumCollection'] = 'collections/ForumCollection';

		$mainForumId = YII::$app->params['main_forum_id'];

		$theForumCollection = new \app\collections\ForumCollection;
		$aForum = $theForumCollection->getForumInitialData($mainForumId);
        
        return $this->render('index.phtml', array ('aForum' => $aForum));
    }
}
