<?php

use yii\helpers\Html;

$this->title = 'Add New Feedback';
#$this->params['breadcrumbs'][] = ['label' => 'Dealfeedbacks', 'url' => ['index']];
#$this->params['breadcrumbs'][] = $this->title;
?>

<div class="dealfeedback-create">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', ['feedback' => $feedback]) ?>
</div>
