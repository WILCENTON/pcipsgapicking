<?php

namespace app\modules\sgapicking\controllers;

use app\modules\sgapicking\models\SgaJpedidos;
use app\modules\sgapicking\models\SgaJpedidoslin;
use app\modules\sgapicking\models\SgaJpedidoslinSearch;
use app\modules\sgapicking\models\SgaJpedidosSearch;
use Yii;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * SgaJpedidosController implements the CRUD actions for SgaJpedidos model.
 */
class SgajpedidosController extends Controller {

    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
            'access' => [
                'class' => AccessControl::className(),
                //'only' => ['index','create','update','view'],
                'rules' => [
                    // allow authenticated users
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                // everything else is denied
                ],
            ],
        ];
    }

    /**
     * Lists all SgaJpedidos models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new SgaJpedidosSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SgaJpedidos model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id) {
        $model = $this->findModel($id);

        // sacar las lineas
        $searchModelLin = new SgaJpedidoslinSearch();
        $query = SgaJpedidoslin::find();
        $dataProviderLin = new ActiveDataProvider([
            'query' => $query,
        ]);
        $query->andFilterWhere([
            'pedido' => $id,
        ]);

        return $this->render('view', [
                    'model' => $model,
                    'searchModelLin' => $searchModelLin,
                    'dataProviderLin' => $dataProviderLin,
        ]);
    }

    /**
     * Creates a new SgaJpedidos model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new SgaJpedidos();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('Registro insertado');
            return $this->redirect(['view', 'id' => $model->pedido]);
        }
        $model->loadDefaultValues();
        $model->pedido = 0;
        $model->fecha = date('Y-m-d H:i:s');
        $model->fechaser = date('Y-m-d H:i:s');
        $model->feactu = date('Y-m-d H:i:s');
        $model->usernum = Yii::$app->user->id;

        return $this->render('create', [
                    'model' => $model,
        ]);
    }

    /**
     * Updates an existing SgaJpedidos model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->pedido]);
        }

        return $this->render('update', [
                    'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SgaJpedidos model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id) {
        // borrar las tablas relacionadas

        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SgaJpedidos model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return SgaJpedidos the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = SgaJpedidos::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    /*     * ****************************************** */
    /*     * ******** MANEJO LINEAS1******************* */
    /*     * ****************************************** */

    /**
     * Displays a single SgaJpedidoslin model.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionViewlin1($id, $pedido) {
        return $this->renderAjax('viewlin1', [
                    'model' => $this->findModellin1($id),
        ]);
    }

    /**
     * Creates a new SgaJpedidoslin model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreatelin1($pedido) {
        $model = new SgaJpedidoslin();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $pedido]);
        }

        $model->loadDefaultValues();
        $model->pedido = $pedido;
        $model->codpedido = $pedido;
        return $this->renderAjax('createlin1', [
                    'model' => $model,
        ]);
    }

    /**
     * Updates an existing SgaJpedidoslin model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdatelin1($id, $pedido) {
        $model = $this->findModellin1($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $pedido]);
        } elseif (Yii::$app->request->isAjax) {
            return $this->renderAjax('updatelin1', [
                        'model' => $model
            ]);
        } else {
            return $this->render('updatelin1', [
                        'model' => $model
            ]);
        }
    }

    /**
     * Deletes an existing SgaJpedidoslin model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDeletelin1($id, $pedido) {
        $this->findModellin1($id)->delete();
        
        return $this->redirect(['view', 'id' => $pedido]);
    }

    /**
     * Finds the SgaJpedidoslin model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return SgaJpedidoslin the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModellin1($id) {
        if (($model = SgaJpedidoslin::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
