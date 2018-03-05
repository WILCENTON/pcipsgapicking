<?php

use app\modules\varios\models\Usuarios;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;

/* @var $this View */
/* @var $form ActiveForm */
/* @var $model Usuarios */
?>

<?php
$this->title = 'Cambiar Clave Usuario';
?>
<div class="usuarios-cambiar-clave-form box box-primary">
    <div class="box-body table-responsive">
        <?php
        $form = ActiveForm::begin([
                    'options' => [
                        'id' => 'cambiar-clave-form'
                    ]
                ])
        ?>
        <div class="box-header with-border">
            <?= Html::submitButton('Guardar', ['class' => 'btn btn-primary btn-flat', 'name' => 'guardar']) ?>
            <?= Html::a('Cancelar', false, ['class' => 'btn btn-default btn-flat', 'data-dismiss' => 'modal']) ?>
        </div>
        <?= $form->field($model, 'clavenueva')->textInput(['autofocus' => true]) ?>
        <?php ActiveForm::end(); ?>
    </div>
</div>