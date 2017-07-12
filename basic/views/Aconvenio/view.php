<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Aconvenio */

$this->title = $model->DESCRIPCION;
$this->params['breadcrumbs'][] = ['label' => 'Actividad de convenio', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aconvenio-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->ID_ACTIVIDAD], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->ID_ACTIVIDAD], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Está seguro de eliminar este elemento?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'ID_ACTIVIDAD',
            //'ID_CONVENIO',
            'DESCRIPCION',
            'FECHA_INICIO',
            'FECHA_FIN',
            'VIGENTE:boolean',
        ],
    ]) ?>

</div>
