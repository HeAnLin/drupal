<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Contact2 */

$this->title = 'Create Contact2';
$this->params['breadcrumbs'][] = ['label' => 'Contact2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contact2-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
