<?php

use app\modules\sgapicking\models\SgaOperarios;
use yii\web\View;

/* @var $this View */
/* @var $model SgaOperarios */

$this->title = 'Alta Operarios';
$this->params['breadcrumbs'][] = ['label' => 'Operarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sga-operarios-create">

    <?=
    $this->render('_form', [
        'model' => $model,
    ])
    ?>

</div>
