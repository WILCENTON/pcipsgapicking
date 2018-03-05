<?php

use app\modules\sgapicking\models\SgaOperarios;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\DetailView;

/* @var $this View */
/* @var $model SgaOperarios */

$this->title = $model->nombre;
$this->params['breadcrumbs'][] = ['label' => 'Operarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sga-operarios-view box box-primary">
    <div class="box-header">
        <?= Html::a('Cancelar', ['index'], ['class' => 'btn btn-default']) ?>
    </div>
    <div class="box-body table-responsive no-padding">
        <?=
        DetailView::widget([
            'model' => $model,
            'attributes' => [
                'operario',
                'nombre',
                'movil',
                'email:email',
                'almacen',
                [
                    'label' => $model->attributeLabels()['estado'],
                    'value' => Html::activeDropDownList($model, 'estado', [
                        'A' => 'Alta',
                        'B' => 'Baja'
                            ], ['disabled' => TRUE]),
                    'format' => 'raw'
                ],
                'codexterno',
            ],
        ])
        ?>
    </div>
</div>
