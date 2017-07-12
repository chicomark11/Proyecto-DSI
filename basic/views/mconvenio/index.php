<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\mconveniosearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Modalidad de convenio';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mconvenio-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear nueva modalidad de convenio', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'ID_MODALIDAD',
            //'ID_CONVENIO',
            'DESCRIPCION',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
