<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Блог', 'url' => ['/site/blog']],
        ['label' => 'Исследуем', 'url' => ['/site/investigate']],
        ['label' => 'Исследователи', 'url' => ['/site/researchers']],

    ];

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-left'],
        'items' => $menuItems,
    ]);

    echo "<form class='navbar-form navbar-left' role='search'>
       <div class='form-group has-feedback'>
            <input id='searchbox' type='text'  placeholder='Search' class='form-control'>
            <span id='searchicon' class='fa fa-search form-control-feedback'></span>
            <button type=\"submit\" class=\"btn btn-default\">Поиск</button>
        </div>
  </form>";

    $menuLogin = [];

    if (Yii::$app->user->isGuest) {
        array_push($menuLogin,['label' => 'Войти', 'url' => ['/user/login']],['label' => 'Регистрация', 'url' => ['/user/register']]);
    } else {
        array_push($menuLogin,['label' => 'Выйти (' . Yii::$app->user->identity->username . ')',
                'url' => ['/site/logout'],
                'linkOptions' => ['data-method' => 'post']]
        );
    }


    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuLogin,
    ]);

    echo Nav::widget([
        'options' => ['class' => ''],
        'items' => ['
        <div class="tab-content col-lg-12">
            <div class="tab-pane fade" id="menu_blog">
            <ol class="breadcrumb">
                <li><a href="#">#Блог_Теги</a></li>
                <li><a href="#">#Блог_Теги</a></li>
                <li><a href="#">#Блог_Теги</a></li>
                <li><a href="#">#Блог_Теги</a></li>
                <li><a href="#">#Блог_Теги</a></li>
                <li><a href="#">#Блог_Теги</a></li>
                <li><a href="#">#Блог_Теги</a></li>
                <li><a href="#">#Блог_Теги</a></li>
                <li><a href="#">#Блог_Теги</a></li>
                <li><a href="#">#Блог_Теги</a></li>
                <li><a href="#">#Блог_Теги</a></li>
                <li><a href="#">#Блог_Теги</a></li>
                <li><a href="#">#Блог_Теги</a></li>
            </ol>
            </div>
            <div class="tab-pane fade" id="menu_investigate">
            <ol class="breadcrumb">
            <li><a href="#">#Исследуем_Теги</a></li>
            <li><a href="#">#Исследуем_Теги</a></li>
            <li><a href="#">#Исследуем_Теги</a></li>
            <li><a href="#">#Исследуем_Теги</a></li>
            <li><a href="#">#Исследуем_Теги</a></li>
            <li><a href="#">#Исследуем_Теги</a></li>
            <li><a href="#">#Исследуем_Теги</a></li>
            <li><a href="#">#Исследуем_Теги</a></li>
            <li><a href="#">#Исследуем_Теги</a></li>                                               
            </ol>
            </div>
            <div class="tab-pane fade" id="menu_researchers">
            <ol class="breadcrumb">
            <li><a href="#">#Исследователи_Теги</a></li>
            <li><a href="#">#Исследователи_Теги</a></li>
            <li><a href="#">#Исследователи_Теги</a></li>
            <li><a href="#">#Исследователи_Теги</a></li>
            <li><a href="#">#Исследователи_Теги</a></li>
            <li><a href="#">#Исследователи_Теги</a></li>
            <li><a href="#">#Исследователи_Теги</a></li>
            <li><a href="#">#Исследователи_Теги</a></li>
            <li><a href="#">#Исследователи_Теги</a></li>
            <li><a href="#">#Исследователи_Теги</a></li>
            <li><a href="#">#Исследователи_Теги</a></li>                                              
            </ol>
            </div>
        <div>
        ']
    ]);
    NavBar::end();

    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>



<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

        <p class="pull-right">Работает на энтузиазме</p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
