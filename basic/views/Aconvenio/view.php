<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Aconvenio */

$this->title = $model->ID_ACTIVIDAD;
$this->params['breadcrumbs'][] = ['label' => 'Aconvenios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aconvenio-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ID_ACTIVIDAD], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID_ACTIVIDAD], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID_ACTIVIDAD',
            'ID_CONVENIO',
            'FECHA_INICIO',
            'FECHA_FIN',
            'DESCRIPCION',
            'VIGENTE:boolean',
        ],
    ]) ?>

</div>
