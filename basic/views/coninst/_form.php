<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\coninst */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="coninst-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_CONVENIO')->dropDownList(ArrayHelper::map($convenios, 'ID_CONVENIO', 'NOMBRE_CONVENIO')); ?>

    <?= $form->field($model, 'ID_INSTITUCION')->dropDownList(ArrayHelper::map($instituciones, 'ID_INSTITUCION', 'NOMBRE_INSTITUCION')); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
