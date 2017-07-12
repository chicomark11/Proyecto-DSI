<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\tipoconvenio */

$this->title = 'Actualizar tipo de convenio: ' . $model->NOMBRE;
$this->params['breadcrumbs'][] = ['label' => 'Tipo de convenio', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->NOMBRE, 'url' => ['view', 'id' => $model->ID_TIPO_CONVENIO]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="tipoconvenio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
