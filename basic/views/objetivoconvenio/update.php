<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Objetivoconvenio */

$this->title = 'Actualizar objetivo de convenio: ' . $model->DESCRIPCION;
$this->params['breadcrumbs'][] = ['label' => 'Objetivo de convenio', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->DESCRIPCION, 'url' => ['view', 'id' => $model->ID_OBJETIVO]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="objetivoconvenio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'convenios' => $convenios,
    ]) ?>

</div>
