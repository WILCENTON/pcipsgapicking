<?php

use app\modules\varios\models\Usergrupos;
use yii\web\View;


/* @var $this View */
/* @var $model Usergrupos */

$this->title = 'Alta Usergrupos';
$this->params['breadcrumbs'][] = ['label' => 'Usergrupos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usergrupos-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
