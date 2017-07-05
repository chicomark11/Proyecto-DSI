<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Convenio */

$this->title = 'Actualizar convenio: ' . $model->ID_CONVENIO;
$this->params['breadcrumbs'][] = ['label' => 'Convenios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_CONVENIO, 'url' => ['view', 'id' => $model->ID_CONVENIO]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="convenio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
