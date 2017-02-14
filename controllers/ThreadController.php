<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

/**
 * Controller for the Thread Controller
 */
class ThreadController extends \yii\web\Controller
{

	/**
	 * Default action of the controller, return the Thread with the corresponding posts
	 * Please refer to sequence diagram ShowThread to more Info
	 * @param type $threadId 
	 * @return aThread|false (rendered)
	 */
	public function actionIndex($threadId){

		try{

			// get the thread
			$theThreadCollection = \app\collections\ThreadCollection::getInstance();
			$aThread = $theThreadCollection->getThreadWithPosts($threadId, $searchDeleted = null);

			if ($aThread instanceof \app\models\Thread){
		        return $this->render('index.phtml', array ('aThread' => $aThread));
			}else{
				// altough not necessary an error/exception, for timing reason a exception will be triggered
				// the thread has not been found

				throw new \Exception("thread not found");
				
			}

	        
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