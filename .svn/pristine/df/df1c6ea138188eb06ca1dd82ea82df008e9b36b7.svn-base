<?php

namespace app\modules\api\modules\extinval\controllers;

use yii\rest\ActiveController;
use yii\filters\auth\HttpHeaderAuth;

class ExtintoresrestController extends ActiveController {

    public $modelClass = 'app\models\extinval\Extintores';
    
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
