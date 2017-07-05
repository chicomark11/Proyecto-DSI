<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\econvenio */

$this->title = 'Create Econvenio';
$this->params['breadcrumbs'][] = ['label' => 'Econvenios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="econvenio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
