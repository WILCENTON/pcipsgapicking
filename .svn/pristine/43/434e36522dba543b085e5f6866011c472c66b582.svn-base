<?php

namespace app\modules\api\modules\varios\controllers;

use yii\rest\ActiveController;
use yii\filters\auth\HttpHeaderAuth;

class DicdatosrestController extends ActiveController {

// http://localhost:8080/api/varios/dicdatosrest/view?id=usuarios,usernum
// http://localhost:8080/index.php?r=api/varios/dicdatosrest/view&id=usuarios,usernum&access-token=abc
// http://localhost:8080/api/varios/usuariosrest/index?fields=usuario&expand=usergrupo
    
    public $modelClass = 'app\models\varios\Dicdatos';

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
        ];
        // avoid authentication on CORS-pre-flight requests (HTTP OPTIONS method)
        $behaviors['authenticator']['except'] = ['options'];

        return $behaviors;
    }

}
