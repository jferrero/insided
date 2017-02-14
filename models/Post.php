<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property integer $post_id
 * @property integer $thread_id
 * @property string $post_title
 * @property string $post_comment
 * @property string $post_image_link
 * @property string $post_created_at
 * @property integer $post_created_by
 * @property string $post_updated_at
 * @property integer $post_updated_by
 * @property string $post_deleted_at
 * @property integer $post_deleted_by
 */

class Post extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['thread_id', 'post_created_by', 'post_updated_by', 'post_deleted_by'], 'integer'],
            [['post_created_at', 'post_updated_at', 'post_deleted_at'], 'safe'],
            [['post_title'], 'required'],
            [['post_title'], 'string', 'max' => 200],
            [['post_comment'], 'string', 'max' => 1000],
            [['post_image_link'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'post_id' => 'Post ID',
            'thread_id' => 'Thread ID',
            'post_title' => 'Title',
            'post_comment' => 'Comment',
            'post_image_link' => 'Image Link',
            'post_created_at' => 'creation date',
            'post_created_by' => 'who created it',
            'post_updated_at' => 'last time was updated',
            'post_updated_by' => 'who updated it the last',
            'post_deleted_at' => 'Post Deleted At',
            'post_deleted_by' => 'Post Deleted By',
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

    /**
     * Basic Overriding of the save function to add some created_at functionality
     * @param type|bool $runValidation 
     * @param type|null $attributeNames 
     * @return type
     */
    public function save($runValidation = true, $attributeNames = NULL){

        $this->post_created_at = date('Y-m-d h:i:s');
        return parent::save($runValidation, $attributeNames);
    }

// getters y setters
    public function getPostId(){
        return $this->post_id;
    }

    public function getPostTitle(){
        return $this->post_title;
    }

    public function getPostComment(){
        return $this->post_comment;
    }

    public function getPostImageLink(){
        return $this->post_image_link;
    }
}