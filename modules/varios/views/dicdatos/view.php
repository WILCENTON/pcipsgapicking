<?php

use app\modules\varios\models\Dicdatos;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\DetailView;

/* @var $this View */
/* @var $model Dicdatos */

$this->title = $model->vista;
$this->params['breadcrumbs'][] = ['label' => 'Dicdatos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dicdatos-view box box-primary">
    <div class="box-header">
        <?= Html::a('Cancelar', ['index'], ['class' => 'btn btn-default']) ?>
    </div>
    <div class="box-body table-responsive no-padding">
        <?=
        DetailView::widget([
            'model' => $model,
            'attributes' => [
                'vista',
                'tabla',
                'columna',
                'tipo',
                'longitud',
                'maxentrada',
                'formato',
                'defecto',
                'etiqueta',
                'etibreve',
                'lista',
                'valores',
                'tipocontrol',
                'requerido',
                'acceso',
                'relacion',
                'rel_columna',
                'rel_requerida',
                'rel_descri',
                'nogrid',
                'ayuda',
                'noquery',
                'nomante',
                'sololectura',
                'orden',
                'loncelda',
                'visible',
                'autonum',
                'fnbuscar',
            ],
        ])
        ?>
    </div>
