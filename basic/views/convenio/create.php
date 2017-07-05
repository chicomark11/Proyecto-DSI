<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Convenio */

$this->title = 'Crear convenio';
$this->params['breadcrumbs'][] = ['label' => 'Convenios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="convenio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
<<<<<<< HEAD
<<<<<<< HEAD
        'coordinadores' => $coordinadores,
=======
>>>>>>> ca42b13feed2ffa119559fcfa89110559739b049
=======
        'coordinadores' => $coordinadores,
>>>>>>> 8c03e4435ca4b34dc3a47a74a7d3e5dd7779ac70
    ]) ?>

</div>
