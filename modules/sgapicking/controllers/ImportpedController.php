<?php

namespace app\modules\sgapicking\controllers;

use app\modules\sgapicking\models\Importped;
use app\modules\sgapicking\models\SgaJpedidos;
use app\modules\sgapicking\models\SgaJpedidoslin;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\UploadedFile;

class ImportpedController extends Controller {

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

    public function actionIndex() {
        $model = new Importped();

        if (Yii::$app->request->isPost) {
            $model->fichero = UploadedFile::getInstance($model, 'fichero');
            if ($model->upload()) {
                // file is uploaded successfully
                $this->importarfich();
                Yii::$app->session->setFlash('Registro insertado');
                return $this->redirect(['/']);
            }
        }
        return $this->render('index', ['model' => $model]);
    }

    function importarfich() {
        $inicial = array();
        $resultado = array();
        $fila = 1;
        if (($gestor = fopen("/tmp/fichped.txt", "r")) !== FALSE) {
            /*
              while (($datos = fgetcsv($gestor, 1000, "|")) !== FALSE) {
              $numero = count($datos);
              echo "<p> $numero de campos en la línea $fila: <br /></p>\n";
              $fila++;
              for ($c = 0; $c < $numero; $c++) {
              echo $datos[$c] . "<br />\n";
              }
              }
             * 
             */
            while (($datos = fgetcsv($gestor, 1000, "|")) !== FALSE) {
                $numero = count($datos);
                if ($numero == 0) {
                    break;
                }
                // comprobar articulo
                $valor = $datos[0];
                if (is_null($valor) or empty($valor) or $valor == 'undefined') {
                    continue;
                }
                // comprobar cantidad
                $valor = $datos[3];
                if (is_null($valor) or ! is_numeric($valor)) {
                    continue;
                }
                // comprobar existencia
                $valor = $datos[4];
                if (is_null($valor) or ! is_numeric($valor)) {
                    $datos[4] = 0;
                }
                // comprobar codbarras
                $valor = $datos[6];
                if (is_null($valor) or empty($valor) or $valor == 'null') {
                    $datos[6] = $datos[0]; // que sea el artinculo
                }
                //print_r($datos);
                array_push($inicial, $datos);
                $fila++;
            }
            fclose($gestor);
            //print_r($inicial);
            $resultado = $this->array_sort($inicial, 8, SORT_ASC);
        }
        //print_r($resultado);
        $this->insertarRegistros($resultado);
    }

    function array_sort($array, $on, $order = SORT_ASC) {
        //print_r(array_sort($people, 'age', SORT_DESC)); // Sort by oldest first
        //print_r(array_sort($people, 'surname', SORT_ASC)); // Sort by surname
        $new_array = array();
        $sortable_array = array();

        if (count($array) > 0) {
            foreach ($array as $k => $v) {
                if (is_array($v)) {
                    if (is_numeric($on)) {
                        $sortable_array[$k] = $v[$on];
                    } else {
                        foreach ($v as $k2 => $v2) {
                            if ($k2 == $on) {
                                $sortable_array[$k] = $v2;
                            }
                        }
                    }
                } else {
                    $sortable_array[$k] = $v;
                }
            }

            switch ($order) {
                case SORT_ASC:
                    asort($sortable_array);
                    break;
                case SORT_DESC:
                    arsort($sortable_array);
                    break;
            }

            foreach ($sortable_array as $k => $v) {
                array_push($new_array, $array[$k]);
            }
        }
        return $new_array;
    }

    function insertarRegistros($array) {
        reset($array);
        $i = 0;
        $totreg = count($array);
        $transaction = Yii::$app->db->beginTransaction();
        try {
            if ($i < $totreg) {
                $datos = $array[$i];
            }
            while ($i < $totreg) {
                $pedido = $datos[8];
                // insertar cabecera
                //var_dump($pedido);
                $modeloped = new SgaJpedidos();
                $modeloped->loadDefaultValues();
                $modeloped->pedido = 0;
                $modeloped->fecha = date('Y-m-d H:i:s');
                $modeloped->fechaser = date('Y-m-d H:i:s');
                $modeloped->feactu = date('Y-m-d H:i:s');
                $modeloped->usernum = Yii::$app->user->id;
                $modeloped->tipoped = 'I';
                $modeloped->idpedido = $pedido;
                $fec = $datos[9];
                $modeloped->fechaped = substr($fec, 6, 4) . substr($fec, 3, 2) . substr($fec, 0, 2);
                $modeloped->save();
                while ($i < $totreg and $pedido == $datos[8]) {
                    $modellin = new SgaJpedidoslin();
                    $modellin->loadDefaultValues();
                    $modellin->pedido = $modeloped->pedido;
                    $modellin->codpedido = '0';
                    $modellin->articulo = $datos[0];
                    $modellin->nombre = $datos[1];
                    $modellin->ubicacion = $datos[2];
                    $modellin->cantidad = $datos[3];
                    $modellin->existencia = $datos[4];
                    $modellin->almapro = $datos[5];
                    $modellin->estadopedido = $datos[7];
                    $modellin->idpedido = $datos[8];
                    $fec = $datos[9];
                    $modellin->fcompra = substr($fec, 6, 4) . substr($fec, 3, 2) . substr($fec, 0, 2);
                    $modellin->tipopedido = $datos[10];
                    $modellin->codbarras = $datos[6];
                    $modellin->save(FALSE);
                    $i = $i + 1;
                    if ($i < $totreg) {
                        $datos = $array[$i];
                    }
                }
            }
            $transaction->commit();
        } catch (\Exception $e) {
            $transaction->rollBack();
            throw $e;
        }
    }

}
