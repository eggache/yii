<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "feedbackcomment".
 *
 * @property string $id
 * @property string $comment
 * @property string $apdcomment
 */
class Feedbackcomment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'feedbackcomment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['comment', 'apdcomment'], 'string', 'max' => 512]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'comment' => 'Comment',
            'apdcomment' => 'Apdcomment',
        ];
    }

    public static function addComment($arr)
    {
        $comment = isset($arr->comment) ? trim($arr->comment) : '';
        if (!$comment) {
            return ;
        }
        $obj = new self;
        $obj->comment = $comment;
        $obj->save();
        return $obj->id;
    }
}
