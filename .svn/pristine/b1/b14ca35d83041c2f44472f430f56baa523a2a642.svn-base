<?php

use yii\data\ActiveDataProvider;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\Pjax;

/* @var $this View */
/* @var $dataProvider ActiveDataProvider */

$this->title = 'Empresas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="empresas-index box box-primary">
    <?php Pjax::begin(); ?>
    <div class="box-header with-border">
        <?= Html::a('Volver', ['/'], ['class' => 'btn btn-default btn-flat']) ?>
    </div>
    <div class="box-body table-responsive no-padding">
        <?=
        GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'empresa',
                'nombre',
                //'direccion',
                //'direccion2',
                //'codpo',
                // 'poblacion',
                // 'provincia',
                // 'pais',
                // 'telefono',
                // 'telex',
                // 'fax',
                'nif',
                // 'email:email',
                // 'web',
                // 'pop3',
                // 'smtp',
                // 'ftp',
                // 'registro1',
                // 'registro2',
                // 'anagrama_ftra',
                // 'anagrama_pantalla',
                // 'fichero_css',
                // 'smtp_user',
                // 'smtp_pwd',
                // 'web_local',
                // 'ruta_ayuda',
                // 'certificado',
                // 'certificado_pwd',
                ['class' => 'yii\grid\ActionColumn',
                    'template' => '{update}',
                    'buttons' => [
                    ],
                ],
            ],
        ]);
        ?>
    </div>
    <?php Pjax::end(); ?>
</div>
