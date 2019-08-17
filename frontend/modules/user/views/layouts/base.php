<?php
use backend\assets\BackendAsset;
use backend\modules\system\models\SystemLog;
use backend\widgets\Menu;
use common\models\TimelineEvent;
use yii\bootstrap\Alert;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\log\Logger;
use yii\widgets\Breadcrumbs;

$bundle = BackendAsset::register($this);
Yii::info(Yii::$app->components["i18n"]["translations"]['*']['class'], 'test');



$this->beginContent('@backend/views/layouts/base.php'); ?>

<div class="wrapper">
    <!-- header logo: style can be found in header.less -->
    <header class="main-header">
        <a href="<?php echo Yii::$app->urlManagerFrontend->createAbsoluteUrl('/') ?>" class="logo">
            <!-- Add the class icon to your logo image or logo icon to add the margining -->
            <?php echo Yii::$app->name ?>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only"><?php echo 'Навигация' ?></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li id="timeline-notifications" class="notifications-menu">
                        <a href="<?php echo Url::to(['/timeline-event/index']) ?>">
                            <i class="fa fa-bell"></i>
                            <span class="label label-success">
                                <?php echo TimelineEvent::find()->today()->count() ?>
                            </span>
                        </a>
                    </li>
                    <!-- Notifications: style can be found in dropdown.less -->
                    <li id="log-dropdown" class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-warning"></i>
                            <span class="label label-danger">
                                <?php echo SystemLog::find()->count() ?>
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header"><?php echo Yii::t('backend', 'У вас {num} записей в журнале', ['num' => SystemLog::find()->count()]) ?></li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <?php foreach (SystemLog::find()->orderBy(['log_time' => SORT_DESC])->limit(5)->all() as $logEntry): ?>
                                        <li>
                                            <a href="<?php echo Yii::$app->urlManager->createUrl(['/system/log/view', 'id' => $logEntry->id]) ?>">
                                                <i class="fa fa-warning <?php echo $logEntry->level === Logger::LEVEL_ERROR ? 'text-red' : 'text-yellow' ?>"></i>
                                                <?php echo $logEntry->category ?>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <li class="footer">
                                <?php echo Html::a('Смотреть всё', ['/system/log/index']) ?>
                            </li>
                        </ul>
                    </li>
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?php echo Yii::$app->user->identity->userProfile->getAvatar($this->assetManager->getAssetUrl($bundle, 'img/anonymous.jpg')) ?>"
                                 class="user-image">
                            <span><?php echo Yii::$app->user->identity->username ?> <i class="caret"></i></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header light-blue">
                                <img src="<?php echo Yii::$app->user->identity->userProfile->getAvatar($this->assetManager->getAssetUrl($bundle, 'img/anonymous.jpg')) ?>"
                                     class="img-circle" alt="User Image"/>
                                <p>
                                    <?php echo Yii::$app->user->identity->username ?>
                                    <small>
                                        <?php echo Yii::t('backend', 'Участник с {0, date, short}', Yii::$app->user->identity->created_at) ?>
                                    </small>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer"> 
                                <div class="pull-left">
                                    <?php echo Html::a('Профиль', ['/user/default/settings'], ['class' => 'btn btn-default btn-flat']) ?>
                                </div>
                                <div class="pull-left">
                                    <?php echo Html::a('Еще что-то', ['/sign-in/account'], ['class' => 'btn btn-default btn-flat']) ?>
                                </div>
                                <div class="pull-right">
                                    <?php echo Html::a('Выход', ['/user/sign-in/logout'], ['class' => 'btn btn-default btn-flat', 'data-method' => 'post']) ?>
                                </div>
                            </li>
                        </ul>
                    </li>
               
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?php echo Yii::$app->user->identity->userProfile->getAvatar($this->assetManager->getAssetUrl($bundle, 'img/anonymous.jpg')) ?>" class="img-circle" />
                </div>
                <div class="pull-left info">
                    <p><?php echo Yii::t('backend', 'Привет, {username}', ['username' => Yii::$app->user->identity->getPublicIdentity()]) ?></p>
                    <a href="<?php echo Url::to(['/sign-in/profile']) ?>">
                        <i class="fa fa-circle text-success"></i>
                        <?php echo Yii::$app->formatter->asDatetime(time()) ?>
                    </a>
                </div>
            </div>
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <?php echo Menu::widget([
                'options' => ['class' => 'sidebar-menu tree', 'data' => ['widget' => 'tree']],
                'linkTemplate' => '<a href="{url}">{icon}<span>{label}</span>{right-icon}{badge}</a>',
                'submenuTemplate' => "\n<ul class=\"treeview-menu\">\n{items}\n</ul>\n",
                'activateParents' => true,
                'items' => [
                    [
                        'label' => 'Главная',
                        'options' => ['class' => 'header'],
                    ],
                    [
                        'label' => 'Соцсети',
                        'icon' => '<i class="fa fa-instagram" aria-hidden="true"></i>',
                        'url' => ['/timeline-event/index'],
                        'badge' => TimelineEvent::find()->today()->count(),
                        'badgeBgClass' => 'label-success',
                    ],
                    [
                        'label' => 'Коины',
                        'icon' => '<i class="fa fa-diamond" aria-hidden="true"></i>',
                        'url' => ['/timeline-event/index'],
                        'badge' => TimelineEvent::find()->today()->count(),
                        'badgeBgClass' => 'label-success',
                    ],
                    [
                        'label' => 'Канал',
                        'icon' => '<i class="fa fa-television" aria-hidden="true"></i>',
                        'url' => ['/channel/default/channel'],
                        'badge' => TimelineEvent::find()->today()->count(),
                        'badgeBgClass' => 'label-success',
                    ],
                    [
                        'label' => 'Банк',
                        'url' => '#',
                        'icon' => '<i class="fa fa-university" aria-hidden="true"></i>',
                        'options' => ['class' => 'treeview'],
                        'active' => 'content' === Yii::$app->controller->module->id &&
                            ('article' === Yii::$app->controller->id || 'category' === Yii::$app->controller->id),
                        'items' => [
                            [
                                'label' => 'Блогеры',
                                'url' => ['/content/article/index'],
                                'icon' => '<i class="fa fa-id-card-o" aria-hidden="true"></i>',
                                'active' => Yii::$app->controller->id === 'article',
                            ],
                            [
                                'label' => 'Партнеры',
                                'url' => ['/content/category/index'],
                                'icon' => '<i class="fa fa-user-plus" aria-hidden="true"></i>',
                                'active' => Yii::$app->controller->id === 'category',
                            ],
                        ],
                    ],
                    [
                        'label' => 'Исследования',
                        'options' => ['class' => 'header'],
                    ],
                    [
                        'label' => 'Пройденные',
                        'icon' => '<i class="fa fa-angle-double-left" aria-hidden="true"></i>',
                        'url' => ['/timeline-event/index'],
                        'badge' => TimelineEvent::find()->today()->count(),
                        'badgeBgClass' => 'label-success',
                    ],
                    [
                        'label' => 'Мои исследования',
                        'icon' => '<i class="fa fa-bar-chart" aria-hidden="true"></i>',
                        'url' => ['/question/default/myinvestigations'],
                        'badge' => TimelineEvent::find()->today()->count(),
                        'badgeBgClass' => 'label-success',
                    ],
                    [
                        'label' => 'Настройки',
                        'options' => ['class' => 'header'],
                    ],

                    [
                        'label' => 'Избранное',
                        'url' => '#',
                        'icon' => '<i class="fa fa-star-o" aria-hidden="true"></i>',
                        'options' => ['class' => 'treeview'],
                        'active' => 'content' === Yii::$app->controller->module->id &&
                            ('article' === Yii::$app->controller->id || 'category' === Yii::$app->controller->id),
                        'items' => [
                            [
                                'label' => 'Каналы',
                                'url' => ['/site/article/index'],
                                'icon' => '<i class="fa fa-television" aria-hidden="true"></i>',
                                'active' => Yii::$app->controller->id === 'article',
                            ],
                            [
                                'label' => 'Исследования',
                                'url' => ['/content/category/index'],
                                'icon' => '<i class="fa fa-bar-chart" aria-hidden="true"></i>',
                                'active' => Yii::$app->controller->id === 'category',
                            ],
                            [
                                'label' => 'Посты',
                                'url' => ['/content/category/index'],
                                'icon' => '<i class="fa fa-pencil-square-o" aria-hidden="true"></i>',
                                'active' => Yii::$app->controller->id === 'category',
                            ],
                        ],
                    ],


                    [
                        'label' => 'Настройка аккаунта',
                        'icon' => '<i class="fa fa-cog" aria-hidden="true"></i>',
                        'url' => ['/user/default/settings'],
                        'badge' => TimelineEvent::find()->today()->count(),
                        'badgeBgClass' => 'label-success',
                    ],
                    [
                        'label' => 'Мои виджеты',
                        'url' => '#',
                        'icon' => '<i class="fa fa-files-o"></i>',
                        'options' => ['class' => 'treeview'],
                        'active' => 'content' === Yii::$app->controller->module->id &&
                            ('article' === Yii::$app->controller->id || 'category' === Yii::$app->controller->id),
                        'items' => [
                            [
                                'label' => 'Таргет',
                                'url' => ['/content/article/index'],
                                'icon' => '<i class="fa fa-rss" aria-hidden="true"></i>',
                                'active' => Yii::$app->controller->id === 'article',
                            ],
                            [
                                'label' => 'Настройка',
                                'url' => ['/content/category/index'],
                                'icon' => '<i class="fa fa-server" aria-hidden="true"></i>',
                                'active' => Yii::$app->controller->id === 'category',
                            ],
                        ],
                    ],

                ],
            ]) ?>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Right side column. Contains the navbar and content of the page -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <?php echo $this->title ?>
                <?php if (isset($this->params['subtitle'])): ?>
                    <small><?php echo $this->params['subtitle'] ?></small>
                <?php endif; ?>
            </h1>

            <?php echo Breadcrumbs::widget([
                'tag' => 'ol',
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
        </section>

        <!-- Main content -->
        <section class="content">
            <?php if (Yii::$app->session->hasFlash('alert')): ?>
                <?php echo Alert::widget([
                    'body' => ArrayHelper::getValue(Yii::$app->session->getFlash('alert'), 'body'),
                    'options' => ArrayHelper::getValue(Yii::$app->session->getFlash('alert'), 'options'),
                ]) ?>
            <?php endif; ?>
            <?php echo $content ?>
        </section><!-- /.content -->
    </div>
    <!-- /.right-side -->

<!--    <footer class="main-footer">-->
<!--        <strong>&copy; My Company --><?php //echo date('Y') ?><!--</strong>-->
<!--        <div class="pull-right">--><?php //echo Yii::powered() ?><!--</div>-->
<!--    </footer>-->
</div><!-- ./wrapper -->

<?php $this->endContent(); ?>