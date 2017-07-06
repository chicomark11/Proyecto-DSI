<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\coninst */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="coninst-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_INSTITUCION')->textInput() ?>

    <?= $form->field($model, 'ID_CONVENIO')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
