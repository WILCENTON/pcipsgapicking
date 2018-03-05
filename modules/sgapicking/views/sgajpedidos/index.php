<?php

use app\modules\sgapicking\models\SgaJpedidosSearch;
use yii\data\ActiveDataProvider;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\Pjax;
use yii\bootstrap\Modal;

/* @var $this View */
/* @var $searchModel SgaJpedidosSearch */
/* @var $dataProvider ActiveDataProvider */

$this->title = 'Pedidos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sga-jpedidos-index box box-primary">
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]);   ?>
    <div class="box-header with-border">
        <?= Html::a('Alta', ['create'], ['class' => 'btn btn-success btn-flat']) ?>
        <?= Html::a('Volver', ['/'], ['class' => 'btn btn-default btn-flat']) ?>
    </div>
    <div class="box-body table-responsive no-padding">
        <?=
        GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'pedido',
                'fecha',
                //'fechaser',
                //'horaser',
                [
                    'attribute' => 'prioridad',
                    'filter' => Html::activeDropDownList($searchModel, 'estado', [
                        '1' => 'Alta',
                        '2' => 'Media',
                        '3' => 'Baja',
                            ], ['class' => 'form-control', 'prompt' => 'Seleccionar...']),
                    'value' => function ($model, $key, $index, $column) {
                        return Html::activeDropDownList($model, 'prioridad', [
                                    '1' => 'Alta',
                                    '2' => 'Media',
                                    '3' => 'Baja',
                                        ], ['disabled' => TRUE]);
                    },
                    'format' => 'raw'
                ],
                /*
                  [
                  'attribute' => 'attribute_name',
                  'value' => 'attribute_value',
                  'filter' => Html::activeDropDownList($searchModel, 'attribute_name', ArrayHelper::map(ModelName::find()->asArray()->all(), 'ID', 'Name'),['class'=>'form-control','prompt' => 'Select Category']),
                  ],
                 * 
                 */
                [
                    'attribute' => 'estado',
                    'filter' => Html::activeDropDownList($searchModel, 'estado', [
                        'A' => 'Alta',
                        'P' => 'Parcial',
                        'S' => 'Servido',
                        'B' => 'Abortado',
                            ], ['class' => 'form-control', 'prompt' => 'Seleccionar...']),
                    'value' => function ($model, $key, $index, $column) {
                        return Html::activeDropDownList($model, 'estado', [
                                    'A' => 'Alta',
                                    'P' => 'Parcial',
                                    'S' => 'Servido',
                                    'B' => 'Abortado',
                                        ], ['disabled' => TRUE]);
                    },
                    'format' => 'raw'
                ],
                [
                    'attribute' => 'tipoped',
                    'filter' => Html::activeDropDownList($searchModel, 'tipoped', [
                        'M' => 'Manual',
                        'I' => 'Importado'
                            ], ['class' => 'form-control', 'prompt' => 'Seleccionar...']),
                    'value' => function ($model, $key, $index, $column) {
                        return Html::activeDropDownList($model, 'tipoped', [
                                    'M' => 'Manual',
                                    'I' => 'Importado'
                                        ], ['disabled' => TRUE]);
                    },
                    'format' => 'raw'
                ],
                'idpedido',
                //'fechaped',
                //'referencia',
                //'obser',
                //'usernum',
                //'feactu',
                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]);
        ?>
    </div>
    <?php Pjax::end(); ?>
</div>
