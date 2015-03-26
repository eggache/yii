<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DealfeedbackSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dealfeedbacks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dealfeedback-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Dealfeedback', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
