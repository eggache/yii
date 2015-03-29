<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class AddFeedbackForm extends Model
{
    public $orderid;
    public $userid;
    public $comment;
    public $picids;

    public function rules()
    {
        return [[['orderid', 'userid', 'comment'], 'required'],
            [['comment'], 'string', 'min' => 15],
            [['orderid', 'userid'], 'integer']
        ];
    }
}
