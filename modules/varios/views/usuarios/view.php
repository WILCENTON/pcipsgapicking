<?php

use app\modules\varios\models\Usuarios;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\DetailView;

/* @var $this View */
/* @var $model Usuarios */

$this->title = $model->usuario;
$this->params['breadcrumbs'][] = ['label' => 'Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usuarios-view box box-primary">
    <div class="box-header">
        <?= Html::a('Cancelar', ['index'], ['class' => 'btn btn-default']) ?>
    </div>
    <div class="box-body table-responsive no-padding">
        <?=
        DetailView::widget([
            'model' => $model,
            'attributes' => [
                'usuario',
                'usernum',
                [
                    'label' => $model->attributeLabels()['acceso'],
                    'value' => Html::activeDropDownList($model, 'acceso', [
                        0 => 'Mínimo',
                        1 => 'Bajo',
                        2 => 'Medio',
                        3 => 'Alto',
                            ], ['disabled' => TRUE]),
                    'format' => 'raw'
                ],
                'ejercicio',
                'authtoken',
                'fechaclave',
                'programa',
                'clave',
                [
                    'label' => $model->attributeLabels()['estado'],
                    'value' => $model->estado ?
                            '<span class="label label-success">Alta</span>' :
                            '<span class="label label-danger">Baja</span>',
                    'format' => 'raw'
                ],
                [
                    'label' => $model->attributeLabels()['grupo'],
                    'value' => $model->usergrupo->nombre,
                    'format' => 'raw'
                ],
                'email:email',
                [
                    'label' => $model->attributeLabels()['forzar'],
                    'value' => $model->forzar == 'S' ?
                            '<span class="label label-success">SI</span>' :
                            '<span class="label label-danger">NO</span>',
                    'format' => 'raw'
                ],
                'ultiacceso',
                [
                    'label' => $model->attributeLabels()['escliente'],
                    'value' => $model->escliente == 'S' ?
                            '<span class="label label-success">SI</span>' :
                            '<span class="label label-danger">NO</span>',
                    'format' => 'raw'
                ],
                [
                    'label' => $model->attributeLabels()['esvendedor'],
                    'value' => $model->esvendedor == 'S' ?
                            '<span class="label label-success">SI</span>' :
                            '<span class="label label-danger">NO</span>',
                    'format' => 'raw'
                ],
                [
                    'label' => $model->attributeLabels()['esempleado'],
                    'value' => $model->esempleado == 'S' ?
                            '<span class="label label-success">SI</span>' :
                            '<span class="label label-danger">NO</span>',
                    'format' => 'raw'
                ],
                [
                    'label' => $model->attributeLabels()['esproveedor'],
                    'value' => $model->esproveedor == 'S' ?
                            '<span class="label label-success">SI</span>' :
                            '<span class="label label-danger">NO</span>',
                    'format' => 'raw'
                ],
                [
                    'label' => $model->attributeLabels()['esninguno'],
                    'value' => $model->esninguno == 'S' ?
                            '<span class="label label-success">SI</span>' :
                            '<span class="label label-danger">NO</span>',
                    'format' => 'raw'
                ],
                [
                    'label' => $model->attributeLabels()['esadministrador'],
                    'value' => $model->esadministrador == 'S' ?
                            '<span class="label label-success">SI</span>' :
                            '<span class="label label-danger">NO</span>',
                    'format' => 'raw'
                ],
            ],
        ])
        ?>
    </div>
</div>