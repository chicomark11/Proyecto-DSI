<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Coordinador */

$this->title = $model->NOMBRE_COORDINADOR;
$this->params['breadcrumbs'][] = ['label' => 'Coordinador', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="coordinador-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->ID_COORDINADOR], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->ID_COORDINADOR], [
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
            'NOMBRE_COORDINADOR',
            'RUT_COORDINADOR',
            'EMAIL:email',
            'TELEFONO',
            'DIRECCION',
            'VIGENCIA:boolean',
        ],
    ]) ?>

</div>
