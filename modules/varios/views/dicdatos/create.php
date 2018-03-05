<?php

use app\modules\varios\models\Dicdatos;
use yii\web\View;


/* @var $this View */
/* @var $model Dicdatos */

$this->title = 'Alta Dicdatos';
$this->params['breadcrumbs'][] = ['label' => 'Dicdatos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dicdatos-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
