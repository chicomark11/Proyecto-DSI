<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Convenio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="convenio-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_CONVENIO')->textInput() ?>

    <?= $form->field($model, 'ID_COORDINADOR')->dropDownList(ArrayHelper::map($coordinadores, 'ID_COORDINADOR', 'NOMBRE_COORDINADOR')); ?>

    <?= $form->field($model, 'ID_TIPO_CONVENIO')->textInput() ?>

    <?= $form->field($model, 'ID_ESTADO_CONVENIO')->textInput() ?>

    <?= $form->field($model, 'NOMBRE_CONVENIO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FECHA_INICIO')->textInput() ?>

    <?= $form->field($model, 'FECHA_TERMINO')->textInput() ?>

    <?= $form->field($model, 'DESCRIPCION')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'VIGENCIA')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
