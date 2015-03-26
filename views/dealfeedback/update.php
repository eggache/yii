<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Dealfeedback */

$this->title = 'Update Dealfeedback: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Dealfeedbacks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dealfeedback-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
