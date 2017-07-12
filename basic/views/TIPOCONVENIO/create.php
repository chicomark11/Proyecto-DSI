<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\tipoconvenio */

$this->title = 'Crear tipo de convenio';
$this->params['breadcrumbs'][] = ['label' => 'Tipo de convenio', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipoconvenio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
