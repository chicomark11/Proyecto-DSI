<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\mconvenio */

$this->title = $model->DESCRIPCION;
$this->params['breadcrumbs'][] = ['label' => 'Modadlidad de convenio', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mconvenio-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->ID_MODALIDAD], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->ID_MODALIDAD], [
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
            //'ID_MODALIDAD',
            //'ID_CONVENIO',
            'DESCRIPCION',
        ],
    ]) ?>

</div>
