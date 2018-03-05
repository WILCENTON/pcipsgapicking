<?php

use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;

/* @var $this View */
?>
<?php
$this->title = 'Importar Fichero Pedidos';
?>
<div class="importar-pedidos-form box box-primary">
    <div class="box-body table-responsive">
        <?php
        $form = ActiveForm::begin([
                    'options' => [
                        'id' => 'importar-pedidos-form',
                        'enctype' => 'multipart/form-data'
                    ]
                ])
        ?>
        <div class="box-header with-border">
            <?= Html::submitButton('Importar', ['class' => 'btn btn-primary btn-flat', 'name' => 'importar']) ?>
            <?= Html::a('Volver', ['/'], ['class' => 'btn btn-default btn-flat']) ?>
        </div>
        <?= $form->field($model, 'fichero')->fileInput() ?>
        <?php ActiveForm::end(); ?>
    </div>
</div>