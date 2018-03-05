<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\sgapicking\models\SgaOperariosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sga-operarios-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'operario') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'movil') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'almacen') ?>

    <?php // echo $form->field($model, 'estado') ?>

    <?php // echo $form->field($model, 'codexterno') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
