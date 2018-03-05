<?php

use app\modules\varios\models\Userlink;
use yii\web\View;

/* @var $this View */
/* @var $model Userlink */

$this->title = 'Modificar Userlink: ' . $model->usernum;
$this->params['breadcrumbs'][] = ['label' => 'Userlinks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->usernum, 'url' => ['view', 'usernum' => $model->usernum, 'tipo' => $model->tipo, 'codigo' => $model->codigo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="userlink-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
