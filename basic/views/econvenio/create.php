<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\econvenio */

$this->title = 'Crear estado de convenio';
$this->params['breadcrumbs'][] = ['label' => 'Estado de convenio', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="econvenio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
