<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Contact2 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contact2-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= Html::activeLabel($model, 'name') ?>
    <?= $form->field($model, 'name', ['template' => "{label}*\n{input}\n{hint}\n{error}"])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'qq')->textInput() ?>

    <?= $form->field($model, 'phone')->textInput() ?>

    <?= $form->field($model, 'body')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
