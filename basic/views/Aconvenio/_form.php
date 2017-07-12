<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Aconvenio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="aconvenio-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'DESCRIPCION')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ID_CONVENIO')->dropDownList(ArrayHelper::map($convenios, 'ID_CONVENIO', 'NOMBRE_CONVENIO')); ?>

    <?= $form->field($model, 'FECHA_INICIO')->textInput(['placeholder' => "AA/MM/DD"]) ?>

    <?= $form->field($model, 'FECHA_FIN')->textInput(['placeholder' => "AA/MM/DD"]) ?>

    <?= $form->field($model, 'VIGENTE')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
