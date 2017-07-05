<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Coordinador */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="coordinador-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_COORDINADOR')->textInput() ?>

    <?= $form->field($model, 'RUT_COORDINADOR')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NOMBRE_COORDINADOR')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'EMAIL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TELEFONO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DIRECCION')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'VIGENCIA')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
