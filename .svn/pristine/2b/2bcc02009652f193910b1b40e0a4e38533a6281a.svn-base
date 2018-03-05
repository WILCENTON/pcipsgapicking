<?php

use app\modules\varios\models\Empresas;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\DetailView;

/* @var $this View */
/* @var $model Empresas */

$this->title = $model->empresa;
$this->params['breadcrumbs'][] = ['label' => 'Empresas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="empresas-view box box-primary">
    <div class="box-header">
        <?= Html::a('Cancelar', ['index'], ['class' => 'btn btn-default']) ?>
    </div>
    <div class="box-body table-responsive no-padding">
        <?=
        DetailView::widget([
            'model' => $model,
            'attributes' => [
                'empresa',
                'nombre',
                'direccion',
                'direccion2',
                'codpo',
                'poblacion',
                'provincia',
                'pais',
                'telefono',
                'telex',
                'fax',
                'nif',
                'email:email',
                'web',
                'pop3',
                'smtp',
                'ftp',
                'registro1',
                'registro2',
                'anagrama_ftra',
                'anagrama_pantalla',
                'fichero_css',
                'smtp_user',
                'smtp_pwd',
                'web_local',
                'ruta_ayuda',
                'certificado',
                'certificado_pwd',
            ],
        ])
        ?>

    </div>
