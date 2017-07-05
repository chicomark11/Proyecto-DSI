<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Coordinador */

$this->title = $model->ID_COORDINADOR;
$this->params['breadcrumbs'][] = ['label' => 'Coordinadores', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="coordinador-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ID_COORDINADOR], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID_COORDINADOR], [
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
            'ID_COORDINADOR',
            'RUT_COORDINADOR',
            'NOMBRE_COORDINADOR',
            'EMAIL:email',
            'TELEFONO',
            'DIRECCION',
            'VIGENCIA:boolean',
        ],
    ]) ?>

</div>
