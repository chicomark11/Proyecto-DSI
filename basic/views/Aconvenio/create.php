<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Aconvenio */

$this->title = 'Create Aconvenio';
$this->params['breadcrumbs'][] = ['label' => 'Aconvenios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aconvenio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
