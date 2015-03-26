<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Dealfeedback */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dealfeedback-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'userid')->textInput() ?>

    <?= $form->field($model, 'dealid')->textInput() ?>

    <?= $form->field($model, 'orderid')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'poiid')->textInput() ?>

    <?= $form->field($model, 'city')->textInput() ?>

    <?= $form->field($model, 'type')->textInput() ?>

    <?= $form->field($model, 'score')->textInput() ?>

    <?= $form->field($model, 'subscore')->textInput() ?>

    <?= $form->field($model, 'weight')->textInput() ?>

    <?= $form->field($model, 'bizacctid')->textInput() ?>

    <?= $form->field($model, 'imgurls')->textInput(['maxlength' => 512]) ?>

    <?= $form->field($model, 'useful')->textInput() ?>

    <?= $form->field($model, 'unuseful')->textInput() ?>

    <?= $form->field($model, 'addtime')->textInput() ?>

    <?= $form->field($model, 'apdaddtime')->textInput() ?>

    <?= $form->field($model, 'replytime')->textInput() ?>

    <?= $form->field($model, 'apdreplytime')->textInput() ?>

    <?= $form->field($model, 'modtime')->textInput() ?>

    <?= $form->field($model, 'attributes')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'commentid')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'replyid')->textInput(['maxlength' => 20]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
