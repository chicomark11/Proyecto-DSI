<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CoordinadorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Coordinadores';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="coordinador-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Coordinador', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID_COORDINADOR',
            'RUT_COORDINADOR',
            'NOMBRE_COORDINADOR',
            'EMAIL:email',
            'TELEFONO',
            // 'DIRECCION',
            // 'VIGENCIA:boolean',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
