<?php

namespace app\modules\varios\controllers;

use app\modules\varios\models\Userlink;
use Yii;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * UserlinkController implements the CRUD actions for Userlink model.
 */
class UserlinkController extends Controller {

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
     * Lists all Userlink models.
     * @return mixed
     */
    public function actionIndex() {
        $model = new Userlink();
        $model->loadDefaultValues();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $model = new Userlink();
            $model->loadDefaultValues();
        }

        $dataProvider = new ActiveDataProvider([
            'query' => Userlink::find(),
        ]);

        if (Yii::$app->request->isAjax) {
            return $this->renderAjax('index', [
                        'dataProvider' => $dataProvider,
                        'model' => $model
            ]);
        } else {
            return $this->render('index', [
                        'dataProvider' => $dataProvider,
                        'model' => $model
            ]);
        }
    }

    /**
     * Deletes an existing Userlink model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $usernum
     * @param string $tipo
     * @param integer $codigo
     * @return mixed
     */
    public function actionDelete($usernum, $tipo, $codigo) {
        $this->findModel($usernum, $tipo, $codigo)->delete();
        $model = new Userlink();
        $model->loadDefaultValues();
        $dataProvider = new ActiveDataProvider([
            'query' => Userlink::find(),
        ]);

        if (Yii::$app->request->isAjax) {
            return $this->renderAjax('index', [
                        'dataProvider' => $dataProvider,
                        'model' => $model
            ]);
        } else {
            return $this->render('index', [
                        'dataProvider' => $dataProvider,
                        'model' => $model
            ]);
        }
    }

    /**
     * Finds the Userlink model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $usernum
     * @param string $tipo
     * @param integer $codigo
     * @return Userlink the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($usernum, $tipo, $codigo) {
        if (($model = Userlink::findOne(['usernum' => $usernum, 'tipo' => $tipo, 'codigo' => $codigo])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
