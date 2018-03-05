<?php

use app\modules\varios\models\Usergrupos;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\DetailView;

/* @var $this View */
/* @var $model Usergrupos */

$this->title = $model->grupo;
$this->params['breadcrumbs'][] = ['label' => 'Usergrupos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usergrupos-view box box-primary">
    <div class="box-header">
        <?= Html::a('Cancelar', ['index'], ['class' => 'btn btn-default']) ?>
    </div>
    <div class="box-body table-responsive no-padding">
        <?=
        DetailView::widget([
            'model' => $model,
            'attributes' => [
                'grupo',
                'nombre',
            ],
        ])
        ?>
    </div>
