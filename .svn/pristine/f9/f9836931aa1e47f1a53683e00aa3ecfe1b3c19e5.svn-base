<?php

use app\modules\varios\models\Usergrupos;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;

/* @var $this View */
/* @var $model Usergrupos */
/* @var $form ActiveForm */
?>
<div class="usergrupos-form box box-primary">
    <?php $form = ActiveForm::begin(); ?>
    <div class="box-header with-border">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-primary btn-flat']) ?>
        <?= Html::a('Cancelar', ['index'], ['class' => 'btn btn-default btn-flat']) ?>
    </div>
    <div class="box-body table-responsive">

        <div class="row">
            <div class="col-md-2">
                <?= $form->field($model, 'grupo')->textInput(['readonly' => TRUE]) ?>
            </div>
            <div class="col-md-6">

                <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
    </div>
    <div class="box-footer">
    </div>
    <?php ActiveForm::end(); ?>

</div>
