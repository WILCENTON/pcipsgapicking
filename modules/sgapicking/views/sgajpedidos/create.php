<?php

use app\modules\sgapicking\models\SgaJpedidos;
use yii\web\View;

/* @var $this View */
/* @var $model SgaJpedidos */

$this->title = 'Alta Pedidos';
$this->params['breadcrumbs'][] = ['label' => 'Pedidos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sga-jpedidos-create">

    <?=
    $this->render('_form', [
        'model' => $model,
    ])
    ?>

</div>
