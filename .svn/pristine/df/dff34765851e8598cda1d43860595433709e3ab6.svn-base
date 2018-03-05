<?php

namespace app\modules\varios\controllers;

use app\modules\varios\models\Dicdatos;
use Yii;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * DicdatosController implements the CRUD actions for Dicdatos model.
 */
class DicdatosController extends Controller {

    /**
     * @inheritdoc
     */
    public function behaviors() {
        //public $header = 'X-Api-Key';
        /*
        $behaviors['authenticator'] = [
            'class' => AccessControl::className(),
            'rules' => [
                [
                    'allow' => true,
                    'roles' => ['@'],
                ],
            ],
        ];
        $behaviors['verbs'] = [
            'class' => VerbFilter::className(),
            'actions' => [
                'delete' => ['POST'],
            ],
        ];
        return $behaviors;
         * 
         */
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
     * Lists all Dicdatos models.
     * @return mixed
     */
    public function actionIndex() {
        $dataProvider = new ActiveDataProvider([
            'query' => Dicdatos::find(),
        ]);

        return $this->render('index', [
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Dicdatos model.
     * @param string $vista
     * @param string $columna
     * @return mixed
     */
    public function actionView($vista, $columna) {
        return $this->render('view', [
                    'model' => $this->findModel($vista, $columna),
        ]);
    }

    /**
     * Creates a new Dicdatos model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Dicdatos();
        $model->loadDefaultValues();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'vista' => $model->vista, 'columna' => $model->columna]);
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Dicdatos model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $vista
     * @param string $columna
     * @return mixed
     */
    public function actionUpdate($vista, $columna) {
        $model = $this->findModel($vista, $columna);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'vista' => $model->vista, 'columna' => $model->columna]);
        } else {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Dicdatos model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $vista
     * @param string $columna
     * @return mixed
     */
    public function actionDelete($vista, $columna) {
        $this->findModel($vista, $columna)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Dicdatos model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $vista
     * @param string $columna
     * @return Dicdatos the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($vista, $columna) {
        if (($model = Dicdatos::findOne(['vista' => $vista, 'columna' => $columna])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
