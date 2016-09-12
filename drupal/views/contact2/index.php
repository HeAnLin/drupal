<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Contact2s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contact2-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Contact2', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'tableOptions' => ['class' => 'table table-striped table-bordered table-hover '],
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'email:email',
            'qq',
            'phone',
            // 'body',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
