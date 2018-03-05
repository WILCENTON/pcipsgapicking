<?php

namespace app\modules\api\modules\varios\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\rest\Controller;
use yii\filters\VerbFilter;
use yii\filters\auth\HttpHeaderAuth;
use app\models\UserLogin;

class AccesoController extends Controller {

    public function behaviors() {
        $behaviors = parent::behaviors();
        // remove authentication filter
        // $auth = $behaviors['authenticator'];
        // unset($behaviors['authenticator']);
        // add CORS filter
        $behaviors['corsFilter'] = [
            'class' => \yii\filters\Cors::className(),
        ];

        // re-add authentication filter
        //$behaviors['authenticator'] = $auth;
        //public $header = 'X-Api-Key';
        $behaviors['authenticator'] = [
            'class' => HttpHeaderAuth::className(),
            'only' => ['logout', 'renew'],
        ];
        // avoid authentication on CORS-pre-flight requests (HTTP OPTIONS method)
        $behaviors['authenticator']['except'] = ['options'];
        $behaviors['verbs'] = [
            'class' => VerbFilter::className(),
            'actions' => [
                'login' => ['get'],
                'logout' => ['get'],
                'renew' => ['get'],
            ],
        ];
        return $behaviors;
    }

    public function actionLogin($user, $pass) {
        $identity = UserLogin::checkUsuario($user, $pass);
        $ok = true;
        if (!is_null($identity)) {
            $ok = Yii::$app->user->login($identity);
        }
        if (!$ok) {
            $this->getHeader(401);
            echo json_encode(['status' => 0, 'error_code' => 401, 'message' => 'Unauthorized'], JSON_PRETTY_PRINT);
            return;
        }
        $this->getHeader(200);
        echo json_encode(['authtoken' => $identity->getAuthKey()], JSON_PRETTY_PRINT);
    }

    public function actionLogout() {
        $authHeader = Yii::$app->getRequest()->getHeaders()->get('X-Api-Key');
        UserLogin::logoutToken($authHeader);
        $this->getHeader(200);
        echo json_encode(['status' => 'OK'], JSON_PRETTY_PRINT);
    }

    public function actionRenew() {
        $authHeader = Yii::$app->getRequest()->getHeaders()->get('X-Api-Key');
        $token = UserLogin::renew($authHeader);
        if (is_null($token)) {
            $this->getHeader(400);
            echo json_encode(['status' => 0, 'error_code' => 400, 'message' => 'Error renew'], JSON_PRETTY_PRINT);
            return;
        }
        $this->getHeader(200);
        echo json_encode(['authtoken' => $token], JSON_PRETTY_PRINT);
    }

    private function getHeader($status) {
        $status_header = 'HTTP/1.1 ' . $status . ' ' . $this->getStatusCodeMessage($status);
        $content_type = "application/json; charset=utf-8";
        header($status_header);
        header('Content-type: ' . $content_type);
    }

    private function getStatusCodeMessage($status) {
        // these could be stored in a .ini file and loaded
        // via parse_ini_file()... however, this will suffice
        // for an example
        $codes = [
            200 => 'OK',
            400 => 'Bad Request',
            401 => 'Unauthorized',
            402 => 'Payment Required',
            403 => 'Forbidden',
            404 => 'Not Found',
            500 => 'Internal Server Error',
            501 => 'Not Implemented',
        ];
        return (isset($codes[$status])) ? $codes[$status] : '';
    }

}
