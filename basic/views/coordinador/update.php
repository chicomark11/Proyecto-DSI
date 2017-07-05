<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Coordinador */

$this->title = 'Update Coordinador: ' . $model->ID_COORDINADOR;
$this->params['breadcrumbs'][] = ['label' => 'Coordinadors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_COORDINADOR, 'url' => ['view', 'id' => $model->ID_COORDINADOR]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="coordinador-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
