<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AconvenioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Actividad de convenio';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aconvenio-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear nueva actividad de convenio', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'ID_ACTIVIDAD',
            //'ID_CONVENIO',
            'DESCRIPCION',
            'FECHA_INICIO',
            'FECHA_FIN',
            'VIGENTE:boolean',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
