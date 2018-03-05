<?php

use app\modules\varios\models\Dicdatos;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;

/* @var $this View */
/* @var $model Dicdatos */
/* @var $form ActiveForm */
?>

<div class="dicdatos-form box box-primary">
    <?php $form = ActiveForm::begin(); ?>
    <div class="box-header with-border">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-primary btn-flat']) ?>
        <?= Html::a('Cancelar', ['index'], ['class' => 'btn btn-default btn-flat']) ?>
    </div>
    <div class="box-body table-responsive">
        <?= $form->field($model, 'vista')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'tabla')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'columna')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'tipo')->textInput() ?>

        <?= $form->field($model, 'longitud')->textInput() ?>

        <?= $form->field($model, 'maxentrada')->textInput() ?>

        <?= $form->field($model, 'formato')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'defecto')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'etiqueta')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'etibreve')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'lista')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'valores')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'tipocontrol')->textInput() ?>

        <?= $form->field($model, 'requerido')->textInput() ?>

        <?= $form->field($model, 'acceso')->textInput() ?>

        <?= $form->field($model, 'relacion')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'rel_columna')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'rel_requerida')->textInput() ?>

        <?= $form->field($model, 'rel_descri')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'nogrid')->textInput() ?>

        <?= $form->field($model, 'ayuda')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'noquery')->textInput() ?>

        <?= $form->field($model, 'nomante')->textInput() ?>

        <?= $form->field($model, 'sololectura')->textInput() ?>

        <?= $form->field($model, 'orden')->textInput() ?>

        <?= $form->field($model, 'loncelda')->textInput() ?>

        <?= $form->field($model, 'visible')->textInput() ?>

        <?= $form->field($model, 'autonum')->textInput() ?>

        <?= $form->field($model, 'fnbuscar')->textInput() ?>

        <?php ActiveForm::end(); ?>
    </div>
    <div class="box-footer">
    </div>
</div>
