<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\coninst */

$this->title = 'Create Coninst';
$this->params['breadcrumbs'][] = ['label' => 'Coninsts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="coninst-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
