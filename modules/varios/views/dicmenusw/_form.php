<?php

use app\modules\varios\models\Dicmenusw;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;

/* @var $this View */
/* @var $model Dicmenusw */
/* @var $form ActiveForm */
?>

<div class="dicmenusw-form box box-primary">
    <?php $form = ActiveForm::begin(); ?>
    <div class="box-header with-border">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-primary btn-flat']) ?>
        <?= Html::a('Cancelar', ['index'], ['class' => 'btn btn-default btn-flat']) ?>
    </div>
    <div class="box-body table-responsive">

        <?= $form->field($model, 'codigo')->textInput() ?>

        <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'accion')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'padre')->textInput() ?>

        <?= $form->field($model, 'acelerador')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'icono')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'orden')->textInput() ?>

        <?= $form->field($model, 'tipo')->textInput() ?>

        <?= $form->field($model, 'ayuda')->textInput(['maxlength' => true]) ?>

    </div>
    <div class="box-footer">
    </div>
    <?php ActiveForm::end(); ?>
</div>
