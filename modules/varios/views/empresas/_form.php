<?php

use app\modules\varios\models\Empresas;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;

/* @var $this View */
/* @var $model Empresas */
/* @var $form ActiveForm */
?>

<div class="empresas-form box box-primary">
    <?php $form = ActiveForm::begin(); ?>
    <div class="box-header with-border">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-primary btn-flat']) ?>
        <?= Html::a('Cancelar', ['index'], ['class' => 'btn btn-default btn-flat']) ?>
    </div>
    <div class="box-body table-responsive">

        <?= $form->field($model, 'empresa')->textInput(['readonly' => true]) ?>

        <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'direccion')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'direccion2')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'codpo')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'poblacion')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'provincia')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'pais')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'telefono')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'telex')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'fax')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'nif')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'web')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'pop3')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'smtp')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'ftp')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'registro1')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'registro2')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'anagrama_ftra')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'anagrama_pantalla')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'fichero_css')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'smtp_user')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'smtp_pwd')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'web_local')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'ruta_ayuda')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'certificado')->textInput() ?>

        <?= $form->field($model, 'certificado_pwd')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="box-footer">
    </div>

    <?php ActiveForm::end(); ?>
</div>
