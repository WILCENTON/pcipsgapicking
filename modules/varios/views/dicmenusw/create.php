<?php

use app\modules\varios\models\Dicmenusw;
use yii\web\View;

/* @var $this View */
/* @var $model Dicmenusw */

$this->title = 'Alta Dicmenusw';
$this->params['breadcrumbs'][] = ['label' => 'Dicmenusws', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dicmenusw-create">

    <?=
    $this->render('_form', [
        'model' => $model,
    ])
    ?>

</div>
