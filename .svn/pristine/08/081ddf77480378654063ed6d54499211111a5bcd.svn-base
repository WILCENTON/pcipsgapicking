<?php

use app\modules\sgapicking\models\SgaJpedidos;
use yii\bootstrap\Modal;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;
use yii\widgets\DetailView;

/* @var $this View */
/* @var $model SgaJpedidos */

$this->title = 'Pedido: ' . $model->pedido;
$this->params['breadcrumbs'][] = ['label' => 'Sga Jpedidos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

Modal::begin([
    'header' => 'hola',
    //'toggleButton' => ['label' => 'click me'],
    'headerOptions' => ['id' => 'modalHeader'],
    'id' => 'modal',
    'size' => 'modal-lg',
        //keeps from closing modal with esc key or by clicking out of the modal.
        // user must click cancel or X to close
        //'clientOptions' => ['backdrop' => 'static', 'keyboard' => TRUE]
]);
echo "<div id='modalContent'></div>";
Modal::end();
?>
<div class="sga-jpedidos-view box box-primary">
    <div class="box-header">
        <?= Html::a('Cancelar', ['index'], ['class' => 'btn btn-default']) ?>
    </div>
    <div class="box-body table-responsive">
        <?=
        DetailView::widget([
            'model' => $model,
            'attributes' => [
                'pedido',
                [
                    'label' => $model->attributeLabels()['fecha'],
                    'value' => Yii::$app->formatter->asDate($model->fecha, 'dd-MM-yyyy HH:mm'),
                ],
                [
                    'label' => $model->attributeLabels()['fechaser'],
                    'value' => Yii::$app->formatter->asDate($model->fechaser, 'dd-MM-yyyy'),
                ],
                'horaser:time',
                [
                    'label' => $model->attributeLabels()['prioridad'],
                    'value' => Html::activeDropDownList($model, 'prioridad', [
                        '1' => 'Alta',
                        '2' => 'Media',
                        '3' => 'Baja',
                            ], ['disabled' => TRUE]),
                    'format' => 'raw'
                ],
                [
                    'label' => $model->attributeLabels()['estado'],
                    'value' => Html::activeDropDownList($model, 'estado', [
                        'A' => 'Alta',
                        'P' => 'Parcial',
                        'S' => 'Servido',
                        'B' => 'Abortado',
                            ], ['disabled' => TRUE]),
                    'format' => 'raw'
                ],
                [
                    'label' => $model->attributeLabels()['tipoped'],
                    'value' => Html::activeDropDownList($model, 'tipoped', [
                        'M' => 'Manual',
                        'I' => 'Importado'
                            ], ['disabled' => TRUE]),
                    'format' => 'raw'
                ],
                'idpedido',
                'fechaped:date',
                'referencia',
                'obser',
            ],
        ])
        ?>
        <br />
        <div class="box-body table-responsive no-padding">
            <div class="box-header with-border">
                <?=
                Html::a('Alta Línea', false, [
                    'value' => Url::to(['createlin1', 'pedido' => $model->pedido]),
                    'class' => 'showModalButton btn btn-success btn-flat',
                    'title' => Yii::t('app', 'Alta Línea Pedido'),
                ])
                ?>
            </div>
            <?=
            GridView::widget([
                'dataProvider' => $dataProviderLin,
                'filterModel' => $searchModelLin,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    'codpedido',
                    //'pedido',
                    //'linea',
                    'articulo',
                    'nombre',
                    'ubicacion',
                    'cantidad',
                    'servido',
                    [
                        'attribute' => 'estado',
                        'filter' => Html::activeDropDownList($searchModelLin, 'estado', [
                            'P' => 'Parcial',
                            'S' => 'Servido',
                                ], ['class' => 'form-control', 'prompt' => 'Seleccionar...']),
                        'value' => function ($model, $key, $index, $column) {
                            return Html::activeDropDownList($model, 'estado', [
                                        'P' => 'Parcial',
                                        'S' => 'Servido',
                                            ], ['disabled' => TRUE]);
                        },
                        'format' => 'raw'
                    ],
                    //'existencia',
                    //'almapro',
                    //'estadopedido',
                    //'idpedido',
                    //'fcompra',
                    //'tipopedido',
                    //'codbarras',
                    ['class' => 'yii\grid\ActionColumn',
                        'template' => '{view}{update}{delete}',
                        'buttons' => [
                            'view' => function ($url, $model1, $key) {
                                //Html::a('title', FALSE, ['value' => Url::to(['create/company', 'type' => 'company']), 'class' => 'loadMainContent'])
                                return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', FALSE, [
                                            //'data-pjax' => true,
                                            'value' => Url::to(['viewlin1', 'id' => $model1->codpedido, 'pedido' => $model1->pedido]),
                                            'class' => 'showModalButton',
                                            'title' => Yii::t('app', 'Ver Línea Pedido'),
                                ]);
                            },
                            'update' => function ($url, $model1, $key) {
                                //Html::a('title', FALSE, ['value' => Url::to(['create/company', 'type' => 'company']), 'class' => 'loadMainContent'])
                                return Html::a('<span class="glyphicon glyphicon-pencil"></span>', FALSE, [
                                            //'data-pjax' => true,
                                            'value' => Url::to(['updatelin1', 'id' => $model1->codpedido, 'pedido' => $model1->pedido]),
                                            'class' => 'showModalButton',
                                            'title' => Yii::t('app', 'Modificar Línea Pedido'),
                                ]);
                            },
                            'delete' => function ($url, $model1, $key) {
                                //Html::a('title', FALSE, ['value' => Url::to(['create/company', 'type' => 'company']), 'class' => 'loadMainContent'])
                                return Html::a('<span class="glyphicon glyphicon-trash"></span>', Url::to(['deletelin1', 'id' => $model1->codpedido, 'pedido' => $model1->pedido]), [
                                            'data-confirm' => "¿Está seguro de eliminar este elemento?",
                                            'data-method' => "post",
                                            //'data-pjax' => true,
                                            //'value' => Url::to(['updatelin1', 'id' => $model1->codpedido, 'pedido' => $model1->pedido]),
                                            //'class' => 'showModalButton',
                                            'title' => Yii::t('app', 'Eliminar Línea Pedido'),
                                ]);
                            },
                        ],
                    ],
                ],
            ]);
            ?>
        </div>
    </div>
</div>
