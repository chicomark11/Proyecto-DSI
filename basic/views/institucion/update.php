<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Institucion */

$this->title = 'Actualizar institución: ' . $model->NOMBRE_INSTITUCION;
$this->params['breadcrumbs'][] = ['label' => 'Institución', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->NOMBRE_INSTITUCION, 'url' => ['view', 'id' => $model->ID_INSTITUCION]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="institucion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
