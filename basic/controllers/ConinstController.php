<?php

namespace app\controllers;

use Yii;
use app\models\coninst;
use app\models\ConinstSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ConinstController implements the CRUD actions for coninst model.
 */
class ConinstController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all coninst models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ConinstSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single coninst model.
     * @param integer $ID_INSTITUCION
     * @param integer $ID_CONVENIO
     * @return mixed
     */
    public function actionView($ID_INSTITUCION, $ID_CONVENIO)
    {
        return $this->render('view', [
            'model' => $this->findModel($ID_INSTITUCION, $ID_CONVENIO),
        ]);
    }

    /**
     * Creates a new coninst model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new coninst();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ID_INSTITUCION' => $model->ID_INSTITUCION, 'ID_CONVENIO' => $model->ID_CONVENIO]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing coninst model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $ID_INSTITUCION
     * @param integer $ID_CONVENIO
     * @return mixed
     */
    public function actionUpdate($ID_INSTITUCION, $ID_CONVENIO)
    {
        $model = $this->findModel($ID_INSTITUCION, $ID_CONVENIO);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ID_INSTITUCION' => $model->ID_INSTITUCION, 'ID_CONVENIO' => $model->ID_CONVENIO]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing coninst model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $ID_INSTITUCION
     * @param integer $ID_CONVENIO
     * @return mixed
     */
    public function actionDelete($ID_INSTITUCION, $ID_CONVENIO)
    {
        $this->findModel($ID_INSTITUCION, $ID_CONVENIO)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the coninst model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $ID_INSTITUCION
     * @param integer $ID_CONVENIO
     * @return coninst the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($ID_INSTITUCION, $ID_CONVENIO)
    {
        if (($model = coninst::findOne(['ID_INSTITUCION' => $ID_INSTITUCION, 'ID_CONVENIO' => $ID_CONVENIO])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
