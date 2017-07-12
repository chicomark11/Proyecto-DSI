<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Institucion */

$this->title = 'Crear institución';
$this->params['breadcrumbs'][] = ['label' => 'Institución', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="institucion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
