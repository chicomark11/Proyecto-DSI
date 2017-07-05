<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Institucion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="institucion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_INSTITUCION')->textInput() ?>

    <?= $form->field($model, 'NOMBRE_INSTITUCION')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TIPO_INSTITUCION')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PAIS')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DIRECCION')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TELEFONO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'EMAIL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LINK')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'VIGENCIA')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
