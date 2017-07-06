<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AconvenioSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="aconvenio-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID_ACTIVIDAD') ?>

    <?= $form->field($model, 'ID_CONVENIO') ?>

    <?= $form->field($model, 'FECHA_INICIO') ?>

    <?= $form->field($model, 'FECHA_FIN') ?>

    <?= $form->field($model, 'DESCRIPCION') ?>

    <?php // echo $form->field($model, 'VIGENTE')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
