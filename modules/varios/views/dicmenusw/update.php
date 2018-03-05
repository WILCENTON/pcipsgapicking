<?php

use app\modules\varios\models\Dicmenusw;
use yii\web\View;

/* @var $this View */
/* @var $model Dicmenusw */

$this->title = 'Modificar Dicmenusw: ' . $model->codigo;
$this->params['breadcrumbs'][] = ['label' => 'Dicmenusws', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->codigo, 'url' => ['view', 'id' => $model->codigo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dicmenusw-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
