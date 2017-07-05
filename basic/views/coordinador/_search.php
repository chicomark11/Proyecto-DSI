<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CoordinadorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="coordinador-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID_COORDINADOR') ?>

    <?= $form->field($model, 'RUT_COORDINADOR') ?>

    <?= $form->field($model, 'NOMBRE_COORDINADOR') ?>

    <?= $form->field($model, 'EMAIL') ?>

    <?= $form->field($model, 'TELEFONO') ?>

    <?php // echo $form->field($model, 'DIRECCION') ?>

    <?php // echo $form->field($model, 'VIGENCIA')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
