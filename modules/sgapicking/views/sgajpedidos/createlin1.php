<?php

use app\modules\sgapicking\models\SgaJpedidoslin;
use yii\web\View;

/* @var $this View */
/* @var $model SgaJpedidoslin */

$this->title = 'Alta Líneas Pedidos';
?>
<div class="sga-jpedidoslin-create">

    <?=
    $this->render('_formlin1', [
        'model' => $model,
    ])
    ?>

</div>
