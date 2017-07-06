<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Objetivoconvenio */

$this->title = 'Create Objetivoconvenio';
$this->params['breadcrumbs'][] = ['label' => 'Objetivoconvenios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="objetivoconvenio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
