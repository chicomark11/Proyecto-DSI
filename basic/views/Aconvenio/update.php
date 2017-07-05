<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Aconvenio */

$this->title = 'Update Aconvenio: ' . $model->ID_ACTIVIDAD;
$this->params['breadcrumbs'][] = ['label' => 'Aconvenios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_ACTIVIDAD, 'url' => ['view', 'id' => $model->ID_ACTIVIDAD]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="aconvenio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
