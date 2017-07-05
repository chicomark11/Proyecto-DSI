<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TIPOCONVENIO */

$this->title = 'Update Tipoconvenio: ' . $model->ID_TIPO_CONVENIO;
$this->params['breadcrumbs'][] = ['label' => 'Tipoconvenios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_TIPO_CONVENIO, 'url' => ['view', 'id' => $model->ID_TIPO_CONVENIO]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tipoconvenio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
