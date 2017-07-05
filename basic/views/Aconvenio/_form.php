<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Aconvenio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="aconvenio-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_ACTIVIDAD')->textInput() ?>

    <?= $form->field($model, 'ID_CONVENIO')->textInput() ?>

    <?= $form->field($model, 'FECHA_INICIO')->textInput() ?>

    <?= $form->field($model, 'FECHA_FIN')->textInput() ?>

    <?= $form->field($model, 'DESCRIPCION')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'VIGENTE')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
