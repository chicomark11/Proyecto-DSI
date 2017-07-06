<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\coninst */

$this->title = 'Update Coninst: ' . $model->ID_INSTITUCION;
$this->params['breadcrumbs'][] = ['label' => 'Coninsts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_INSTITUCION, 'url' => ['view', 'ID_INSTITUCION' => $model->ID_INSTITUCION, 'ID_CONVENIO' => $model->ID_CONVENIO]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="coninst-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
