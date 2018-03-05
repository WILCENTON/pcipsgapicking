<?php

use app\modules\varios\models\Dicmenusw;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\DetailView;

/* @var $this View */
/* @var $model Dicmenusw */

$this->title = $model->codigo;
$this->params['breadcrumbs'][] = ['label' => 'Dicmenusws', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dicmenusw-view box box-primary">
    <div class="box-header">
        <?= Html::a('Cancelar', ['index'], ['class' => 'btn btn-default']) ?>
    </div>
    <div class="box-body table-responsive no-padding">
        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'codigo',
                'descripcion',
                'accion',
                'padre',
                'acelerador',
                'icono',
                'orden',
                'tipo',
                'ayuda',
            ],
        ]) ?>
    </div>
</div>
