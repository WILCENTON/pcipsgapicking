<?php

use app\modules\varios\models\Userlink;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;

/* @var $this View */
/* @var $model Userlink */
/* @var $form ActiveForm */
?>
<div class="userlink-form box box-primary">
    <?php $form = ActiveForm::begin(); ?>
    <div class="box-header with-border">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success btn-flat' : 'btn btn-primary btn-flat']) ?>
    </div>
    <div class="box-body table-responsive">
        <?= $form->field($model, 'usernum')->textInput() ?>

        <?= $form->field($model, 'tipo')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'codigo')->textInput() ?>
    </div>
    <div class="box-footer">
    </div>
    <?php ActiveForm::end(); ?>
</div>
