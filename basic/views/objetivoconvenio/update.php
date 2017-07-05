<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Objetivoconvenio */

$this->title = 'Update Objetivoconvenio: ' . $model->ID_OBJETIVO;
$this->params['breadcrumbs'][] = ['label' => 'Objetivoconvenios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_OBJETIVO, 'url' => ['view', 'id' => $model->ID_OBJETIVO]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="objetivoconvenio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
