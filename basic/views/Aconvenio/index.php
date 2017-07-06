<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AconvenioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Aconvenios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aconvenio-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Aconvenio', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID_ACTIVIDAD',
            'ID_CONVENIO',
            'FECHA_INICIO',
            'FECHA_FIN',
            'DESCRIPCION',
            // 'VIGENTE:boolean',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
