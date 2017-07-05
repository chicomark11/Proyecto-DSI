<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
<<<<<<< HEAD
<<<<<<< HEAD
use yii\helpers\ArrayHelper;
=======
>>>>>>> ca42b13feed2ffa119559fcfa89110559739b049
=======
use yii\helpers\ArrayHelper;
>>>>>>> 8c03e4435ca4b34dc3a47a74a7d3e5dd7779ac70

/* @var $this yii\web\View */
/* @var $model app\models\Convenio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="convenio-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_CONVENIO')->textInput() ?>

<<<<<<< HEAD
<<<<<<< HEAD
    <?= $form->field($model, 'ID_COORDINADOR')->dropDownList(ArrayHelper::map($coordinadores, 'ID_COORDINADOR', 'NOMBRE_COORDINADOR')); ?>
=======
    <?= $form->field($model, 'ID_COORDINADOR')->dropDownList([['prompt'=>'Seleccione...',0, 1, 2, 3, 4, 5, 6, 7, 8, 9]]); ?>
>>>>>>> ca42b13feed2ffa119559fcfa89110559739b049
=======
    <?= $form->field($model, 'ID_COORDINADOR')->dropDownList(ArrayHelper::map($coordinadores, 'ID_COORDINADOR', 'NOMBRE_COORDINADOR')); ?>
>>>>>>> 8c03e4435ca4b34dc3a47a74a7d3e5dd7779ac70

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
