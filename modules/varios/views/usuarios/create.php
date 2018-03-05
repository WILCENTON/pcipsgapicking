<?php

use app\modules\varios\models\Usuarios;
use yii\web\View;

/* @var $this View */
/* @var $model Usuarios */

$this->title = 'Alta Usuarios';
$this->params['breadcrumbs'][] = ['label' => 'Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usuarios-create">

    <?=
    $this->render('_form', [
        'model' => $model,
    ])
    ?>

</div>
