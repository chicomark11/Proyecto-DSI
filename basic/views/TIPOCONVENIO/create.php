<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TIPOCONVENIO */

$this->title = 'Create Tipoconvenio';
$this->params['breadcrumbs'][] = ['label' => 'Tipoconvenios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipoconvenio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
