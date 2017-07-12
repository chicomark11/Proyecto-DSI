<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ConinstSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Convenio & Institución';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="coninst-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear nueva relacion convenio e institución', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID_INSTITUCION',
            'ID_CONVENIO',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
