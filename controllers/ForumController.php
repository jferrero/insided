<?php

namespace app\controllers;

use Yii;

/**
 * Controller for Forums
 */
class ForumController extends \yii\web\Controller
{

    /**
     * default action of controller
     * shows a Forum with the corresponding threads
     * @return type
     */
    public function actionIndex()
    {
        try{
        
            // Of the several theorical forums, will only show one
            $forumId = Yii::$app->params['main_forum_id'];

    		$mainForumId = YII::$app->params['main_forum_id'];
            
    		$theForumCollection = \app\collections\ForumCollection::getInstance();
    		$aForum = $theForumCollection->getForumInitialData($mainForumId);

            return $this->render('index.phtml', array ('aForum' => $aForum));

        }catch(\Exception $e){
            // Here's a nice pace to put a message and a redirect to the main page specifyng the error
            // if you want to treat the back as an API then a tipifed meesage should be wrapped and sent back with the proper http status
            $message = $e->getMessage();
            $name = "Error";

            // different actions could be performed here, like logging the error on a file
            $this->render("/site/error", array('name' => $name , 'message' => $message)); // more sofisticated error handling will be welcome idd
        }
    }
}
