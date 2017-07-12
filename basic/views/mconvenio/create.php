<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\mconvenio */

$this->title = 'Crear modalidad de convenio';
$this->params['breadcrumbs'][] = ['label' => 'Modalidad de convenio', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mconvenio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'convenios' => $convenios,
    ]) ?>

</div>
