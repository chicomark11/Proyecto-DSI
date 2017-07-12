<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Institucion */

$this->title = $model->NOMBRE_INSTITUCION;
$this->params['breadcrumbs'][] = ['label' => 'Institución', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="institucion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->ID_INSTITUCION], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->ID_INSTITUCION], [
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
            'NOMBRE_INSTITUCION',
            'TIPO_INSTITUCION',
            'PAIS',
            'DIRECCION',
            'TELEFONO',
            'EMAIL:email',
            'LINK',
            'VIGENCIA:boolean',
        ],
    ]) ?>

</div>
