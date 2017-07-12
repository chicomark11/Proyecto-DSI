<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Objetivoconvenio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="objetivoconvenio-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'DESCRIPCION')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ID_CONVENIO')->dropDownList(ArrayHelper::map($convenios, 'ID_CONVENIO', 'NOMBRE_CONVENIO')); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
