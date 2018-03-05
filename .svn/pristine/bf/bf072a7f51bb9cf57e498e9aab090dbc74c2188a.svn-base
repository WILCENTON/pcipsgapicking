<?php

use app\modules\sgapicking\models\SgaJpedidoslin;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;

/* @var $this View */
/* @var $model SgaJpedidoslin */
/* @var $form ActiveForm */
?>
<div class="sga-jpedidoslin-form box box-primary">
    <?php $form = ActiveForm::begin(['options' => ['data-pjax' => true]]); ?>
    <div class="box-header with-border">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-primary btn-flat']) ?>
        <?= Html::a('Cancelar', false, ['class' => 'btn btn-default btn-flat', 'data-dismiss' => 'modal']) ?>
    </div>
    <div class="box-body table-responsive">

        <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'codpedido')->textInput(['readonly' => TRUE]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'pedido')->textInput(['readonly' => TRUE]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'linea')->textInput(['readonly' => TRUE]) ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'articulo')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-8">
                <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'codbarras')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'ubicacion')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'cantidad')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'servido')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-4">
                <?=
                $form->field($model, 'estado')->dropdownList([
                    'P' => 'Parcial',
                    'S' => 'Servido'
                        ], ['prompt' => 'Seleccionar...'])
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'existencia')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'almapro')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'estadopedido')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'idpedido')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'fcompra')->textInput() ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'tipopedido')->textInput(['maxlength' => true]) ?>
            </div>
        </div>

    </div>

    <?php ActiveForm::end(); ?>
</div>
