<?php
namespace app\controllers;
use Yii;
use yii\web\Controller;
use app\models\Dealfeedback;

class TofeedbackController extends Controller
{
    public function actionIndex()
    {
        $feedback = Dealfeedback::find()->one();
        var_dump($feedback->id);exit;
    }

    public function actionList()
    {
        $feedback = Dealfeedback::find()->one();
        var_dump($feedback->id);exit;
    }
}
