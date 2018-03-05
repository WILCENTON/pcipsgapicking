<?php

use yii\data\ActiveDataProvider;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\Pjax;

/* @var $this View */
/* @var $dataProvider ActiveDataProvider */

$this->title = 'Dicdatos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dicdatos-index box box-primary">
    <?php Pjax::begin(); ?>
    <div class="box-header with-border">
        <?= Html::a('Alta', ['create'], ['class' => 'btn btn-success btn-flat']) ?>
        <?= Html::a('Volver', ['/'], ['class' => 'btn btn-default btn-flat']) ?>
    </div>
    <div class="box-body table-responsive no-padding">
        <?=
        GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'vista',
                'tabla',
                'columna',
                'tipo',
                'longitud',
                // 'maxentrada',
                // 'formato',
                // 'defecto',
                // 'etiqueta',
                // 'etibreve',
                // 'lista',
                // 'valores',
                // 'tipocontrol',
                // 'requerido',
                // 'acceso',
                // 'relacion',
                // 'rel_columna',
                // 'rel_requerida',
                // 'rel_descri',
                // 'nogrid',
                // 'ayuda',
                // 'noquery',
                // 'nomante',
                // 'sololectura',
                // 'orden',
                // 'loncelda',
                // 'visible',
                // 'autonum',
                // 'fnbuscar',
                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]);
        ?>
    </div>
<?php Pjax::end(); ?>
</div>
