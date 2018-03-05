<?php

use app\modules\sgapicking\models\SgaJpedidoslin;
use yii\web\View;

/* @var $this View */
/* @var $model SgaJpedidoslin */

$this->title = 'Modificar Líneas Pedidos';
?>
<div class="sga-jpedidoslin-update">

    <?=
    $this->render('_formlin1', [
        'model' => $model,
    ])
    ?>

</div>
