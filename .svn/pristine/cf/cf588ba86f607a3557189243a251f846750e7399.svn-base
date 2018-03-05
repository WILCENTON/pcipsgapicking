<?php

use dmstr\widgets\Menu;
use yii\helpers\Html;
use yii\web\View;

/* @var $this View */
/* @var $content string */
?>

<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <?php echo Html::img('@web/images/usuario.png', ['class' => 'img-circle', 'alt' => 'Imagen Usuario']); ?> 

            </div>
            <div class="pull-left info">
                <p><span class="hidden-xs"><?= is_null(Yii::$app->user->identity) ? FALSE : Html::encode(Yii::$app->user->identity->username) ?></span></p>

            </div>
        </div>


        <?=
        Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu tree', 'data-widget' => 'tree'],
                    'items' => [
                        ['label' => 'Menú', 'options' => ['class' => 'header']],
                        /* ['label' => 'Inicio',                         
                          'icon' => 'home',
                          'url' => ['/site/index']], */
                        Yii::$app->user->isGuest ? (
                                ['label' => 'Inciar',
                                    'icon' => 'user',
                                    'url' => ['/site/login']
                                ]
                                ) : (
                                ['label' => 'Inicio',
                                    'icon' => 'home',
                                    'url' => ['/site/index']]
                                )
                        ,
                        ['label' => 'Picking',
                            'icon' => 'archive',
                            'items' => [
                                ['label' => 'Importar Fichero',
                                    'icon' => 'folder-open',
                                    'url' => ['/sgapicking/importped'],
                                ],
                                ['label' => 'Preparar Picking',
                                    'icon' => 'folder-open',
                                    'url' => ['/sgapicking/prepicking'],
                                ],
                                ['label' => 'Iniciar Picking',
                                    'icon' => 'folder-open',
                                    'url' => ['/sgapicking/inipicking'],
                                ],
                                ['label' => 'Abortar Picking',
                                    'icon' => 'folder-open',
                                    'url' => ['/sgapicking/abortpicking'],
                                ],
                                ['label' => 'Finalizar Picking',
                                    'icon' => 'folder-open',
                                    'url' => ['/sgapicking/finpicking'],
                                ],
                            ],
                            'visible' => !Yii::$app->user->isGuest
                        ],
                        ['label' => 'Controles',
                            'icon' => 'archive',
                            'items' => [
                                ['label' => 'Pedidos Servidos',
                                    'icon' => 'folder-open',
                                    'url' => ['/sgapicking/controlpedidos'],
                                ],
                                ['label' => 'Existencias',
                                    'icon' => 'folder-open',
                                    'items' => [
                                        ['label' => 'Importar Existencias',
                                            'icon' => 'folder-open',
                                            'url' => ['/sgapicking/exisimport']],
                                        ['label' => 'Iniciar',
                                            'icon' => 'folder-open',
                                            'url' => ['/sgapicking/exisiniciar']],
                                        ['label' => 'Resultado',
                                            'icon' => 'folder-open',
                                            'url' => ['/sgapicking/exisresultado']],
                                    ]],
                            ],
                            'visible' => !Yii::$app->user->isGuest
                        ],
                        ['label' => 'Datos',
                            'icon' => 'archive',
                            'items' => [
                                ['label' => 'Operarios',
                                    'icon' => 'folder-open',
                                    'url' => ['/sgapicking/sgaoperarios'],
                                ],
                                ['label' => 'Pedidos',
                                    'icon' => 'folder-open',
                                    'url' => ['/sgapicking/sgajpedidos'],
                                ],
                                ['label' => 'Picking',
                                    'icon' => 'folder-open',
                                    'url' => ['/sgapicking/sgapicking'],
                                ],
                                ['label' => 'Eliminar Pedidos',
                                    'icon' => 'folder-open',
                                    'url' => ['/sgapicking/eliminarped'],
                                ]
                            ],
                            'visible' => !Yii::$app->user->isGuest
                        ],
                        ['label' => 'Sistema',
                            'icon' => 'cog',
                            'items' => [
                                ['label' => 'Empresa',
                                    'icon' => 'th',
                                    'url' => ['/varios/empresas']],
                                ['label' => 'Grupos Usuarios',
                                    'icon' => 'link',
                                    'url' => ['/varios/usergrupos']],
                                ['label' => 'Usuarios',
                                    'icon' => 'user',
                                    'url' => ['/varios/usuarios']],
                                ['label' => 'Enlace Usuarios',
                                    'icon' => 'user',
                                    'url' => ['/varios/userlink?id="uno"']],
                                ['label' => 'Diccionario Datos',
                                    'icon' => 'list-alt',
                                    'url' => ['/varios/dicdatos']],
                                ['label' => 'Menús Web',
                                    'icon' => 'cutlery',
                                    'url' => ['/varios/dicmenusw']],
                            ],
                            'visible' => is_null(Yii::$app->user->identity) ? FALSE : Yii::$app->user->identity->esadministrador == 'S'
                        ],
                        ['label' => 'Acerca de...',
                            'icon' => 'asterisk',
                            'url' => ['/site/about']],
                        ['label' => 'Login',
                            'url' => ['site/login'],
                            'visible' => Yii::$app->user->isGuest],
                    /*
                      ['label' => 'Contactar',
                      'icon' => 'phone',
                      'url' => ['/site/contact']],
                     * 
                     */
                    /*
                      ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
                      ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
                      ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                      [
                      'label' => 'Some tools',
                      'icon' => 'share',
                      'url' => '#',
                      'items' => [
                      ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
                      ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
                      [
                      'label' => 'Level One',
                      'icon' => 'circle-o',
                      'url' => '#',
                      'items' => [
                      ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
                      [
                      'label' => 'Level Two',
                      'icon' => 'circle-o',
                      'url' => '#',
                      'items' => [
                      ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                      ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                      ],
                      ],
                      ],
                      ],
                      ],
                      ], */
                    ],
                ]
        )
        ?>

    </section>

</aside>
