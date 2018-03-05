<?php

use app\modules\varios\models\Usuarios;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;

/* @var $this View */
/* @var $model Usuarios */
/* @var $form ActiveForm */
?>
<div class="usuarios-form box box-primary">
    <?php $form = ActiveForm::begin(); ?>
    <div class="box-header with-border">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-primary btn-flat']) ?>
        <?= Html::a('Cancelar', ['index'], ['class' => 'btn btn-default btn-flat']) ?>
    </div>
    <div class="box-body table-responsive">
        <div class="row">
            <div class="col-md-1">
                <?= $form->field($model, 'usernum')->textInput(['readonly' => TRUE]) ?> 
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'usuario')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-2">
                <?=
                $form->field($model, 'acceso')->radioList([
                    0 => 'Mínimo',
                    1 => 'Bajo',
                    2 => 'Medio',
                    3 => 'Alto',
                ])
                ?>
            </div>
            <div class="col-md-1">
                <?= $form->field($model, 'ejercicio')->textInput() ?>
            </div>
            <div class="col-md-2">
                <?= $form->field($model, 'fechaclave')->textInput() ?>
            </div>
            <div class="col-md-2">
                <?= $form->field($model, 'programa')->textInput(['maxlength' => true]) ?>
            </div>
        </div>

        <?php // $form->field($model, 'clave')->textInput(['maxlength' => true]) ?>

        <div class="row">
            <div class="col-md-1">
                <?=
                $form->field($model, 'estado')->radioList([
                    'A' => 'Alta',
                    'B' => 'Baja'
                ])
                ?>
            </div>
            <div class="col-md-3">
                <?=
                $form->field($model, 'grupo')->dropdownList([
                            \app\models\varios\Usergrupos::find()
                            ->select(['nombre'])
                            ->indexBy('grupo')
                            ->column()
                ])
                ?>
            </div>
            <div class="col-md-5">
                <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-1">
                <?=
                $form->field($model, 'forzar')->radioList([
                    'S' => 'SI',
                    'N' => 'NO'
                ])
                ?>
            </div>
            <div class="col-md-2">
                <?= $form->field($model, 'ultiacceso')->textInput() ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2">

                <?=
                $form->field($model, 'escliente')->radioList([
                    'S' => 'SI',
                    'N' => 'NO'
                ])
                ?>
            </div>
            <div class="col-md-2">

                <?=
                $form->field($model, 'esvendedor')->radioList([
                    'S' => 'SI',
                    'N' => 'NO'
                ])
                ?>
            </div>
            <div class="col-md-2">

                <?=
                $form->field($model, 'esempleado')->radioList([
                    'S' => 'SI',
                    'N' => 'NO'
                ])
                ?>
            </div>
            <div class="col-md-2">

                <?=
                $form->field($model, 'esproveedor')->radioList([
                    'S' => 'SI',
                    'N' => 'NO'
                ])
                ?>
            </div>
            <div class="col-md-2">

                <?=
                $form->field($model, 'esninguno')->radioList([
                    'S' => 'SI',
                    'N' => 'NO'
                ])
                ?>
            </div>
            <div class="col-md-2">

                <?=
                $form->field($model, 'esadministrador')->radioList([
                    'S' => 'SI',
                    'N' => 'NO'
                ])
                ?>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>
