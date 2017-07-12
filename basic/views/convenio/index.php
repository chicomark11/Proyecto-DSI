<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ConvenioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Convenio';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="convenio-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear nuevo convenio', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'ID_CONVENIO',
            //'ID_COORDINADOR',
            //'ID_TIPO_CONVENIO',
            //'ID_ESTADO_CONVENIO',
            'NOMBRE_CONVENIO',
            'FECHA_INICIO',
            'FECHA_TERMINO',
            'DESCRIPCION',
            'VIGENCIA:boolean',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
