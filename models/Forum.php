<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "forum".
 *
 * @property integer $forum_id
 * @property string $forum_name
 * @property string $forum_description
 * @property string $forum_created_at
 * @property integer $forum_created_by
 * @property string $forum_updated_at
 * @property integer $forum_updated_by
 *
 * custom non-persistant attributes
 * @property array $forum_threads
 */

class Forum extends \yii\db\ActiveRecord
{
    /**
     * @var array
     */
    protected $forum_threads = array();

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'forum';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['forum_created_at', 'forum_updated_at'], 'safe'],
            [['forum_created_by', 'forum_updated_by'], 'required'],
            [['forum_created_by', 'forum_updated_by'], 'integer'],
            [['forum_name'], 'string', 'max' => 200],
            [['forum_description'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'forum_id' => 'Forum ID',
            'forum_name' => 'main title',
            'forum_description' => 'main description of the forum',
            'forum_created_at' => 'creation date',
            'forum_created_by' => 'who created it',
            'forum_updated_at' => 'last time was updated',
            'forum_updated_by' => 'who update it the last',
        ];
    }

    /**
     * @inheritdoc
     * @return ForumQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ForumQuery(get_called_class());
    }

    /**
     * return the corresponding threads for the Forum
     * @return type
     */
    public function getThreads(){

        $aThreadCollection = new \app\collections\ThreadCollection;
        $arrayThreads = $aThreadCollection->getThreadsOfForum($this->forum_id);

        $this->setForumThreads ($arrayThreads);

        return $arrayThreads;
    }


    // geters and setters
    public function getForumId(){
        return $this->forum_id;
    }

    public function setForumId($value){
        $this->forum_id = $value;
        return $this;
    }

    public function getForumName(){
        return $this->forum_name;
    }

    public function setForumName($value){
        $this->forum_name = $value;
        return $this;
    }

    public function getForumDescription(){
        return $this->forum_description;
    }

    public function setForumDescription($value){
        $this->forum_description = $value;
        return $this;
    }

    public function getForumThreads(){
        return $this->forum_threads;
    }

    public function setForumThreads (array $values){
        $this->forum_threads = $values;
    }

}