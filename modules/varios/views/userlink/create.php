<?php

use app\modules\varios\models\Userlink;
use yii\web\View;


/* @var $this View */
/* @var $model Userlink */

$this->title = 'Alta Userlink';
$this->params['breadcrumbs'][] = ['label' => 'Userlinks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="userlink-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
