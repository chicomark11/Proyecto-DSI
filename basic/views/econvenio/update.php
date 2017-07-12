<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\econvenio */

$this->title = 'Actualizar estado de convenio ';
// . $model->ID_ESTADO_CONVENIO;
$this->params['breadcrumbs'][] = ['label' => 'Estado convenio', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->DESCRIPCION, 'url' => ['view', 'id' => $model->ID_ESTADO_CONVENIO]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="econvenio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
