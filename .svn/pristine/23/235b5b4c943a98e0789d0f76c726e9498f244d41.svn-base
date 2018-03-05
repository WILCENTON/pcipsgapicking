<?php

use app\modules\sgapicking\models\SgaJpedidos;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;

/* @var $this View */
/* @var $model SgaJpedidos */
/* @var $form ActiveForm */
?>
<div class="sga-jpedidos-form box box-primary">
    <?php $form = ActiveForm::begin(); ?>
    <div class="box-header with-border">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-primary btn-flat']) ?>
        <?= Html::a('Cancelar', ['index'], ['class' => 'btn btn-default btn-flat']) ?>
    </div>
    <div class="box-body table-responsive">

        <div class="row">
            <div class="col-md-2">
                <?= $form->field($model, 'pedido')->textInput(['readonly' => TRUE])  ?>
            </div>
            <div class="col-md-2">

                <?= $form->field($model, 'fecha')->textInput() ?>
            </div>
            <div class="col-md-2">

                <?= $form->field($model, 'fechaser')->textInput() ?>
            </div>
            <div class="col-md-2">

                <?= $form->field($model, 'horaser')->textInput() ?>
            </div>
            <div class="col-md-2">
                <?=
                $form->field($model, 'prioridad')->dropdownList([
                    '1' => 'Alta',
                    '2' => 'Media',
                    '3' => 'Baja',
                        ], ['prompt' => 'Seleccionar...'])
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <?=
                $form->field($model, 'estado')->dropdownList([
                    'A' => 'Alta',
                    'P' => 'Parcial',
                    'S' => 'Servido',
                    'B' => 'Abortado',
                        ], ['prompt' => 'Seleccionar...'])
                ?>
            </div>
            <div class="col-md-2">

                <?=
                $form->field($model, 'tipoped')->dropdownList([
                    'M' => 'Manual',
                    'I' => 'Importado'
                        ], ['prompt' => 'Seleccionar...'])
                ?>
            </div>
            <div class="col-md-2">
                <?= $form->field($model, 'idpedido')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-2">

                <?= $form->field($model, 'fechaped')->textInput() ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">

                <?= $form->field($model, 'referencia')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-6">

                <?= $form->field($model, 'obser')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
