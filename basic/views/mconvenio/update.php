<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\mconvenio */

$this->title = 'Actualizar modalidad de convenio: ' . $model->DESCRIPCION;
$this->params['breadcrumbs'][] = ['label' => 'Modalidad de convenio', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->DESCRIPCION, 'url' => ['view', 'id' => $model->ID_MODALIDAD]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="mconvenio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'convenios' => $convenios,
    ]) ?>

</div>
