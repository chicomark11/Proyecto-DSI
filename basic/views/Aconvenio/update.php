<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Aconvenio */

$this->title = 'Actualizar actividad de convenio: '. $model->DESCRIPCION;
$this->params['breadcrumbs'][] = ['label' => 'Actividad de convenio', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->DESCRIPCION, 'url' => ['view', 'id' => $model->ID_ACTIVIDAD]];
	$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="aconvenio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'convenios' => $convenios,
    ]) ?>

</div>
