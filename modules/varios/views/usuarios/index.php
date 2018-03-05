<?php

use yii\bootstrap\Modal;
use yii\data\ActiveDataProvider;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;
use yii\widgets\Pjax;

/* @var $this View */
/* @var $dataProvider ActiveDataProvider */

$this->title = 'Usuarios';
$this->params['breadcrumbs'][] = $this->title;

Modal::begin([
    'headerOptions' => ['id' => 'modalHeader'],
    'id' => 'modal',
    'size' => 'modal-lg',
    //keeps from closing modal with esc key or by clicking out of the modal.
    // user must click cancel or X to close
    'clientOptions' => ['backdrop' => 'static', 'keyboard' => TRUE]
]);
echo "<div id='modalContent'></div>";
Modal::end();
?>
<div class="usuarios-index box box-primary">
    <?php Pjax::begin(); ?>
    <div class="box-header with-border">
        <?= Html::a('Alta', ['create'], ['class' => 'btn btn-success btn-flat']) ?>
        <?= Html::a('Volver', ['/'], ['class' => 'btn btn-default btn-flat']) ?>
    </div>
    <div class="box-body table-responsive no-padding">
        <?=
        GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'usuario',
                'usernum',
                // 'acceso',
                // 'ejercicio',
                // 'authtoken',
                // 'fechaclave',
                // 'programa',
                // 'clave',
                // 'estado',
                // 'grupo',
                'email:email',
                // 'forzar',
                // 'ultiacceso',
                // 'escliente',
                [
                    'attribute' => 'escliente',
                    'content' => function ($model, $key, $index, $column) {
                        return $model->escliente == 'S' ?
                                '<span class="label label-success">SI</span>' :
                                '<span class="label label-danger">NO</span>';
                    },
                    'format' => 'raw'
                ],
                // 'esvendedor',
                // 'esempleado',
                // 'esproveedor',
                // 'esninguno',
                // 'esadministrador',
                [
                    'attribute' => 'esadministrador',
                    'content' => function ($model, $key, $index, $column) {
                        return $model->esadministrador == 'S' ?
                                '<span class="label label-success">SI</span>' :
                                '<span class="label label-danger">NO</span>';
                    },
                    'format' => 'raw'
                ],
                // 'w',
                [
                    'attribute' => 'usergrupo.nombre',
                ],
                ['class' => 'yii\grid\ActionColumn',
                    'template' => '{view}{update}{delete}{clave}',
                    'buttons' => [
                        'clave' => function ($url, $model, $key) {
                            //Html::a('title', FALSE, ['value' => Url::to(['create/company', 'type' => 'company']), 'class' => 'loadMainContent'])
                            return Html::a('<span class="glyphicon glyphicon-user"></span>', FALSE, [
                                        'value' => Url::to(['cambiarclave', 'id' => $model->usuario]),
                                        'class' => 'showModalButton',
                                        'title' => Yii::t('app', 'Cambiar Clave'),
                            ]);
                        },
                    ],
                ],
            ],
        ]);
        ?>
    </div>
    <?php Pjax::end(); ?>
</div>
