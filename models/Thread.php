<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "thread".
 *
 * @property integer $thread_id
 * @property integer $forum_id
 * @property string $thread_name
 * @property string $thread_comment
 * @property string $thread_created_at
 * @property integer $thread_created_by
 * @property string $thread_updated_at
 * @property integer $thread_updated_by
 * @property string $thread_deleted_at
 * @property integer $thread_deleted_by
 */
class Thread extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'thread';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['forum_id', 'thread_created_by', 'thread_updated_by', 'thread_deleted_by'], 'integer'],
            [['thread_created_at', 'thread_updated_at', 'thread_deleted_at'], 'safe'],
            [['thread_created_by', 'thread_updated_by'], 'required'],
            [['thread_name'], 'string', 'max' => 100],
            [['thread_comment'], 'string', 'max' => 300],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'thread_id' => 'Thread ID',
            'forum_id' => 'Forum ID',
            'thread_name' => 'Thread Name',
            'thread_comment' => 'Thread Comment',
            'thread_created_at' => 'Thread Created At',
            'thread_created_by' => 'Thread Created By',
            'thread_updated_at' => 'Thread Updated At',
            'thread_updated_by' => 'Thread Updated By',
            'thread_deleted_at' => 'Thread Deleted At',
            'thread_deleted_by' => 'Thread Deleted By',
        ];
    }

    /**
     * @inheritdoc
     * @return ThreadQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ThreadQuery(get_called_class());
    }

    // getters y setters

    public function getThreadName(){
        return $this->thread_name;
    }

    public function getThreadComment(){
        return $this->thread_comment;
    }
}
