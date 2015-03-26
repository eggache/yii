<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DealfeedbackSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dealfeedback-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'userid') ?>

    <?= $form->field($model, 'dealid') ?>

    <?= $form->field($model, 'orderid') ?>

    <?= $form->field($model, 'poiid') ?>

    <?php // echo $form->field($model, 'city') ?>

    <?php // echo $form->field($model, 'type') ?>

    <?php // echo $form->field($model, 'score') ?>

    <?php // echo $form->field($model, 'subscore') ?>

    <?php // echo $form->field($model, 'weight') ?>

    <?php // echo $form->field($model, 'bizacctid') ?>

    <?php // echo $form->field($model, 'imgurls') ?>

    <?php // echo $form->field($model, 'useful') ?>

    <?php // echo $form->field($model, 'unuseful') ?>

    <?php // echo $form->field($model, 'addtime') ?>

    <?php // echo $form->field($model, 'apdaddtime') ?>

    <?php // echo $form->field($model, 'replytime') ?>

    <?php // echo $form->field($model, 'apdreplytime') ?>

    <?php // echo $form->field($model, 'modtime') ?>

    <?php // echo $form->field($model, 'attributes') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'commentid') ?>

    <?php // echo $form->field($model, 'replyid') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
