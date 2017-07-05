<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ConvenioSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="convenio-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID_CONVENIO') ?>

    <?= $form->field($model, 'ID_COORDINADOR') ?>

    <?= $form->field($model, 'ID_TIPO_CONVENIO') ?>

    <?= $form->field($model, 'ID_ESTADO_CONVENIO') ?>

    <?= $form->field($model, 'NOMBRE_CONVENIO') ?>

    <?php // echo $form->field($model, 'FECHA_INICIO') ?>

    <?php // echo $form->field($model, 'FECHA_TERMINO') ?>

    <?php // echo $form->field($model, 'DESCRIPCION') ?>

    <?php // echo $form->field($model, 'VIGENCIA')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
