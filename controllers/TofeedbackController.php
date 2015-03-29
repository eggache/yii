<?php
namespace app\controllers;
use Yii;
use yii\web\Controller;
use app\models\Dealfeedback;
use app\models\AddFeedbackForm;

class TofeedbackController extends Controller
{
    public function actionIndex()
    {
        $feedback = Dealfeedback::find()->one();
        Yii::$app->redis->set('user','aaa');
        Yii::$app->redis->set('user2','bbb');
        Yii::$app->redis->set('user3','ccc');
        Yii::$app->redis->set('user4','ddd');
        $out = Yii::$app->redis->get('user');//此时可以输出aaa
        Yii::$app->redis->flushall();//删除redis中的所有数据
        var_dump($out);
        var_dump($feedback->id);exit;
    }

    public function actionList()
    {
        $feedback = Dealfeedback::find()->one();
        Yii::$app->redis->set('user','aaa');
        Yii::$app->redis->set('user2','bbb');
        Yii::$app->redis->set('user3','ccc');
        Yii::$app->redis->set('user4','ddd');
        $out = Yii::$app->redis->get('user');//此时可以输出aaa
        var_dump($out);
        Yii::$app->redis->flushall();//删除redis中的所有数据
        return $this->render('list');
    }

    public function actionFeedback()
    {
        $feedback = new AddFeedbackForm;

        if( $feedback->load(Yii::$app->request->post()) && $feedback->validate())
        {
            DealfeedbackController::addFeedback($feedback);
        } else {
            return $this->render('feedback', ['feedback' => $feedback]);
        }
    }

    public function actionUploadimage()
    {
        var_dump(111);exit;
    }
}
