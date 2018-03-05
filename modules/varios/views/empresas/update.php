<?php

use app\modules\varios\models\Empresas;
use yii\web\View;

/* @var $this View */
/* @var $model Empresas */

$this->title = 'Modificar Empresas: ' . $model->empresa;
$this->params['breadcrumbs'][] = ['label' => 'Empresas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->empresa, 'url' => ['view', 'id' => $model->empresa]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="empresas-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
