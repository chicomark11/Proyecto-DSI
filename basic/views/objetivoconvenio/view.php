<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Objetivoconvenio */

$this->title = $model->ID_OBJETIVO;
$this->params['breadcrumbs'][] = ['label' => 'Objetivoconvenios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="objetivoconvenio-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ID_OBJETIVO], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID_OBJETIVO], [
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
            'ID_OBJETIVO',
            'ID_CONVENIO',
            'DESCRIPCION',
        ],
    ]) ?>

</div>
