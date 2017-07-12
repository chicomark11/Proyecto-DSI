<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\coninst */

$this->title = 'Actualizar relación entre convenio e institución';
// . $model->ID_INSTITUCION;
$this->params['breadcrumbs'][] = ['label' => 'Convenio & Institución', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => 'Relación', 'url' => ['view', 'ID_INSTITUCION' => $model->ID_INSTITUCION, 'ID_CONVENIO' => $model->ID_CONVENIO]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="coninst-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'convenios' => $convenios,
        'instituciones' => $instituciones,
    ]) ?>

</div>
