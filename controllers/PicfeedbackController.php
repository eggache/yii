<?php
namespace app\controllers;
use yii\web\Controller;
use app\models\PicForm;

class PicfeedbackController extends Controller
{
    public function actionUpload()
    {
        $picform = new PicForm;
        return $this->render('upload', ['model' => $picform]);
    }
}
