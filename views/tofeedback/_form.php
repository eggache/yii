<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Dealfeedback */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dealfeedback-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($feedback, 'orderid')->textInput() ?>
    <?= $form->field($feedback, 'userid')->textInput() ?>
    <?= $form->field($feedback, 'comment')->textarea() ?>
    <?= $form->field($feedback, 'picids')->radio() ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
