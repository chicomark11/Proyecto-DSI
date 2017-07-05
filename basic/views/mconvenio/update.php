<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\mconvenio */

$this->title = 'Update Mconvenio: ' . $model->ID_MODALIDAD;
$this->params['breadcrumbs'][] = ['label' => 'Mconvenios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_MODALIDAD, 'url' => ['view', 'id' => $model->ID_MODALIDAD]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mconvenio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
