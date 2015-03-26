<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class TofeedbackForm extends Model
{
    public $score;
    public $orderid;
    public $dealUrl;
    public $dealid;
    public $coverImgUrl;
    public $couponTitle;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['score', 'orderid', 'dealUrl', 'dealid', 'coverImgUrl', 'couponTitle'], 'required'],
        ];
    }

}
