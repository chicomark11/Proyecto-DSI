<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Objetivoconvenio */

$this->title = 'Crear objetivo de convenio';
$this->params['breadcrumbs'][] = ['label' => 'Objetivo de convenio', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="objetivoconvenio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'convenios' => $convenios,
    ]) ?>

</div>
