<?php

use app\modules\varios\models\Userlink;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\DetailView;

/* @var $this View */
/* @var $model Userlink */

$this->title = $model->usernum;
$this->params['breadcrumbs'][] = ['label' => 'Userlinks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="userlink-view box box-primary">
    <div class="box-header">
        <?= Html::a('Cancelar', ['index'], ['class' => 'btn btn-default']) ?>
    </div>
    <div class="box-body table-responsive no-padding">
        <?=
        DetailView::widget([
            'model' => $model,
            'attributes' => [
                'usernum',
                'tipo',
                'codigo',
            ],
        ])
        ?>
    </div>
