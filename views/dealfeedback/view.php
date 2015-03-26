<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Dealfeedback */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Dealfeedbacks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dealfeedback-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'userid',
            'dealid',
            'orderid',
            'poiid',
            'city',
            'type',
            'score',
            'subscore',
            'weight',
            'bizacctid',
            'imgurls:url',
            'useful',
            'unuseful',
            'addtime:datetime',
            'apdaddtime:datetime',
            'replytime:datetime',
            'apdreplytime:datetime',
            'modtime:datetime',
            'attributes',
            'status',
            'commentid',
            'replyid',
        ],
    ]) ?>

</div>
