<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\coninst */

$this->title = 'Ver relación';
$this->params['breadcrumbs'][] = ['label' => 'Convenio & Institución', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="coninst-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'ID_INSTITUCION' => $model->ID_INSTITUCION, 'ID_CONVENIO' => $model->ID_CONVENIO], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'ID_INSTITUCION' => $model->ID_INSTITUCION, 'ID_CONVENIO' => $model->ID_CONVENIO], [
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
            'ID_INSTITUCION',
            'ID_CONVENIO',
        ],
    ]) ?>

</div>
