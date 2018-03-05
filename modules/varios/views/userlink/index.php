<?php

use app\modules\varios\models\Usuarios;
use yii\data\ActiveDataProvider;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;

/* @var $this View */
/* @var $dataProvider ActiveDataProvider */

$this->title = 'Enlace Usuarios';
$this->params['breadcrumbs'][] = $this->title;
?>

<?php
$this->registerJs(
        '$("document").ready(function(){ 
        $("#data_form").on("pjax:end", function() {
            $.pjax.reload({container:"#data_grid"});  //Reload GridView
        });
    });'
);
?>

<div class="userlink-index box box-primary">
    <?php Pjax::begin(['id' => 'data_form']); ?>
    <?php $form = ActiveForm::begin(['options' => ['data-pjax' => true]]); ?>
    <div class="box-header with-border">
        <?= Html::submitButton($model->isNewRecord ? 'Alta' : 'Modificar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::a('Volver', ['/'], ['class' => 'btn btn-default btn-flat']) ?>
    </div>
    <div class="box-body table-responsive">
        <div class="row">
            <div class="col-md-3">
                <?=
                $form->field($model, 'usernum')->dropdownList([
                            Usuarios::find()
                            ->select(['usuario'])
                            ->orderBy('usuario')
                            ->indexBy('usernum')
                            ->column()
                ])
                ?>
            </div>
            <div class="col-md-3">
                <?=
                $form->field($model, 'tipo')->dropdownList([
                    'CLIE' => 'Cliente',
                    'VEND' => 'Vendedor',
                    'EMPL' => 'Empleado',
                    'INCI' => 'Incidencias',
                ])
                ?>
            </div>
            <div class="col-md-6">
                <?=
                $form->field($model, 'codigo')
                ?>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
    <?php Pjax::end(); ?>
</div>

<div class="userlink-index box box-primary">
    <?php Pjax::begin(['id' => 'data_grid']); ?>
    <div class="box-body table-responsive no-padding">
        <?=
        GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'usernum',
                'nomusuario',
                'tipo',
                'codigo',
                'nomcodigo',
                ['class' => 'yii\grid\ActionColumn',
                    'template' => '{delete}',
                    'buttons' => [
                    ],
                ],
            ],
        ]);
        ?>
    </div>
    <?php Pjax::end(); ?>
</div>

