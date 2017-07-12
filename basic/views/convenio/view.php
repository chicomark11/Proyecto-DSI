<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Convenio */

$this->title = $model->NOMBRE_CONVENIO;
$this->params['breadcrumbs'][] = ['label' => 'Convenios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;


?>


<div class="convenio-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->ID_CONVENIO], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->ID_CONVENIO], [
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
            //'ID_COORDINADOR',
            //'ID_TIPO_CONVENIO',
            //'ID_ESTADO_CONVENIO',
            'NOMBRE_CONVENIO',
            'FECHA_INICIO',
            'FECHA_TERMINO',
            'DESCRIPCION',
            'VIGENCIA:boolean',
        ],
    ]) ?>



</div>
