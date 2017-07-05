<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\econvenio */

$this->title = 'Update Econvenio: ' . $model->ID_ESTADO_CONVENIO;
$this->params['breadcrumbs'][] = ['label' => 'Econvenios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_ESTADO_CONVENIO, 'url' => ['view', 'id' => $model->ID_ESTADO_CONVENIO]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="econvenio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
