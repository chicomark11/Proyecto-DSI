<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\coninst */

$this->title = 'Crear relacion convenio institución';
$this->params['breadcrumbs'][] = ['label' => 'Convennio & Institución', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="coninst-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'convenios' => $convenios,
		'instituciones' => $instituciones,
    ]) ?>

</div>
