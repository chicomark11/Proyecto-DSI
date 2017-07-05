<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\mconvenio */

$this->title = 'Create Mconvenio';
$this->params['breadcrumbs'][] = ['label' => 'Mconvenios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mconvenio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
