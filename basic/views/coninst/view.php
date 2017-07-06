<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\coninst */

$this->title = $model->ID_INSTITUCION;
$this->params['breadcrumbs'][] = ['label' => 'Coninsts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="coninst-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'ID_INSTITUCION' => $model->ID_INSTITUCION, 'ID_CONVENIO' => $model->ID_CONVENIO], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'ID_INSTITUCION' => $model->ID_INSTITUCION, 'ID_CONVENIO' => $model->ID_CONVENIO], [
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
            'ID_CONVENIO',
        ],
    ]) ?>

</div>
