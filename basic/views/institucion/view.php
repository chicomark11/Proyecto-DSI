<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Institucion */

$this->title = $model->ID_INSTITUCION;
$this->params['breadcrumbs'][] = ['label' => 'Institucions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="institucion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ID_INSTITUCION], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID_INSTITUCION], [
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
            'ID_INSTITUCION',
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
