<?php

use app\modules\sgapicking\models\SgaJpedidoslin;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\DetailView;

/* @var $this View */
/* @var $model SgaJpedidoslin */

$this->title = $model->codpedido;
?>
<div class="sga-jpedidoslin-view box box-primary">
    <div class="box-header">
        <?= Html::a('Cancelar', false, ['class' => 'btn btn-default btn-flat', 'data-dismiss' => 'modal']) ?>
    </div>
    <div class="box-body table-responsive no-padding">
        <?=
        DetailView::widget([
            'model' => $model,
            'attributes' => [
                'codpedido',
                'pedido',
                'linea',
                'articulo',
                'nombre',
                'ubicacion',
                'cantidad',
                'servido',
                [
                    'label' => $model->attributeLabels()['estado'],
                    'value' => Html::activeDropDownList($model, 'estado', [
                        'P' => 'Parcial',
                        'S' => 'Servido',
                            ], ['disabled' => TRUE]),
                    'format' => 'raw'
                ],
                'existencia',
                'almapro',
                'estadopedido',
                'idpedido',
                'fcompra',
                'tipopedido',
                'codbarras',
            ],
        ])
        ?>
    </div>
</div>
