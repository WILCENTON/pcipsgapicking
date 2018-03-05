<?php

use app\modules\sgapicking\models\SgaOperarios;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model SgaOperarios */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="sga-operarios-form box box-primary">
    <?php $form = ActiveForm::begin(); ?>
    <div class="box-header with-border">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-primary btn-flat']) ?>
        <?= Html::a('Cancelar', ['index'], ['class' => 'btn btn-default btn-flat']) ?>
    </div>
    <div class="box-body table-responsive">
        <div class="row">
            <div class="col-md-12">
                <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'movil')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'almacen')->textInput() ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <?=
                $form->field($model, 'estado')->dropdownList([
                    'A' => 'Alta',
                    'B' => 'Baja'
                        ], ['prompt' => 'Seleccionar...'])
                ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'codexterno')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>
