<?php

use app\modules\sgapicking\models\SgaOperariosSearch;
use yii\data\ActiveDataProvider;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\Pjax;

/* @var $this View */
/* @var $searchModel SgaOperariosSearch */
/* @var $dataProvider ActiveDataProvider */

$this->title = 'Operarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sga-operarios-index box box-primary">
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]);  ?>
    <div class="box-header with-border">
        <?= Html::a('Alta', ['create'], ['class' => 'btn btn-success btn-flat']) ?>
        <?= Html::a('Volver', ['/'], ['class' => 'btn btn-default btn-flat']) ?>
    </div>
    <div class="box-body table-responsive no-padding">
        <?=
        GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'operario',
                'nombre',
                'movil',
                'email:email',
                // 'almacen',
                //'estado',
                //'codexterno',
                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]);
        ?>
    </div>
    <?php Pjax::end(); ?>
</div>
