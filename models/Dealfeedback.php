<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dealfeedback_dealid_1".
 *
 * @property string $id
 * @property integer $userid
 * @property integer $dealid
 * @property string $orderid
 * @property integer $poiid
 * @property integer $city
 * @property integer $type
 * @property integer $score
 * @property integer $subscore
 * @property integer $weight
 * @property integer $bizacctid
 * @property string $imgurls
 * @property integer $useful
 * @property integer $unuseful
 * @property integer $addtime
 * @property integer $apdaddtime
 * @property integer $replytime
 * @property integer $apdreplytime
 * @property integer $modtime
 * @property string $attributes
 * @property integer $status
 * @property string $commentid
 * @property string $replyid
 */
class Dealfeedback extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dealfeedback_dealid_1';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['userid', 'dealid', 'orderid', 'type'], 'required'],
            [['userid', 'dealid', 'orderid', 'poiid', 'city', 'type', 'score', 'subscore', 'weight', 'bizacctid', 'useful', 'unuseful', 'addtime', 'apdaddtime', 'replytime', 'apdreplytime', 'modtime', 'attributes', 'status', 'commentid', 'replyid'], 'integer'],
            [['imgurls'], 'string', 'max' => 512]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'userid' => 'Userid',
            'dealid' => 'Dealid',
            'orderid' => 'Orderid',
            'poiid' => 'Poiid',
            'city' => 'City',
            'type' => 'Type',
            'score' => 'Score',
            'subscore' => 'Subscore',
            'weight' => 'Weight',
            'bizacctid' => 'Bizacctid',
            'imgurls' => 'Imgurls',
            'useful' => 'Useful',
            'unuseful' => 'Unuseful',
            'addtime' => 'Addtime',
            'apdaddtime' => 'Apdaddtime',
            'replytime' => 'Replytime',
            'apdreplytime' => 'Apdreplytime',
            'modtime' => 'Modtime',
            'attributes' => 'Attributes',
            'status' => 'Status',
            'commentid' => 'Commentid',
            'replyid' => 'Replyid',
        ];
    }
}
