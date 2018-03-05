<?php

use yii\helpers\Html;
use yii\web\View;

/* @var $this View */
/* @var $content string */
?>

<header class="main-header">

    <?= Html::a('<span class="logo-mini">GE</span><span class="logo-lg">' . Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Navegacion</span>
        </a>

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">

                <!-- Messages: style can be found in dropdown.less-->


                <li class="dropdown user user-menu">

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <?php echo Html::img('@web/images/usuario.png', ['class' => 'user-image', 'alt' => 'Imagen Usuario']); ?> 
                        <span class="hidden-xs"><?= is_null(Yii::$app->user->identity) ? FALSE : Html::encode(Yii::$app->user->identity->username) ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <?php echo Html::img('@web/images/usuario.png', ['class' => 'img-circle', 'alt' => 'Imagen Usuario']); ?> 
                            <p>
                                <?= is_null(Yii::$app->user->identity) ? FALSE : Html::encode(Yii::$app->user->identity->username) ?>
                            </p>
                        </li>

                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Perfil</a>
                            </div>
                            <div class="pull-right" >
                                <?=
                                is_null(Yii::$app->user->identity) ?
                                        Html::a(
                                                'Acceder', ['/site/login'], ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
                                        ) :
                                        Html::a(
                                                'Cerrar sesion', ['/site/logout'], ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
                                        )
                                ?>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
