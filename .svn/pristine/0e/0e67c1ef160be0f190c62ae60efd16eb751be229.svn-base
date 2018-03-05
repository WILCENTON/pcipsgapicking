<?php

use yii\data\ActiveDataProvider;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\Pjax;

/* @var $this View */
/* @var $dataProvider ActiveDataProvider */

$this->title = 'Dicmenusws';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dicmenusw-index box box-primary">
    <?php Pjax::begin(); ?>
    <div class="box-header with-border">
        <?= Html::a('Alta', ['create'], ['class' => 'btn btn-success btn-flat']) ?>
        <?= Html::a('Volver', ['/'], ['class' => 'btn btn-default btn-flat']) ?>
    </div>
    <div class="box-body table-responsive no-padding">
        <?=
        GridView::widget([
            'dataProvider' => $dataProvider,
            'layout' => "{items}\n{summary}\n{pager}",
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'codigo',
                'descripcion',
                'accion',
                'padre',
                'acelerador',
                // 'icono',
                // 'orden',
                // 'tipo',
                // 'ayuda',
                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]);
        ?>
    </div>
<?php Pjax::end(); ?>
</div>
