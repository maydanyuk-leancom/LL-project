<?php

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

/* @var $this \yii\web\View */
/* @var $content string */

$this->beginContent('@frontend/views/layouts/_clear.php')
?>
<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]); ?>
    <?php

     $menuItems=
     [
            ['label' => 'Главная', 'url' => ['/site/index']],
            ['label' => 'Блог', 'url' => ['/page/view', 'slug'=>'about']],
            ['label' => 'Исследуем', 'url' => ['/article/index']],
            ['label' => 'Каналы', 'url' => ['/site/channels']],
            ['label' => 'Рейтинг', 'url' => ['/page/view', 'slug'=>'about']],
//            ['label' => 'Каналы', 'url' => ['/page/view', 'slug'=>'about']],
//            ['label' => 'Рейтинг', 'url' => ['/page/view', 'slug'=>'about']],
//            ['label' => 'Статьи', 'url' => ['/article/index']],
//            ['label' => 'Контакты', 'url' => ['/site/contact']],

        ];

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-left'],
        'items' => $menuItems,
    ]);

    echo "<form class='navbar-form navbar-left' role='search'>
           <div class='form-group has-feedback'>
            <input id='searchbox' type='text'  placeholder='Search' class='form-control'>
            <input type=\"button\" class=\"btn btn-default\"  value='Поиск' > 
           </div>
          </form>";

    $menuLogin = [

        ['label' => 'Регистрация', 'url' => ['/user/sign-in/signup'], 'visible'=>Yii::$app->user->isGuest],
        ['label' => 'Вход', 'url' => ['/user/sign-in/login'], 'visible'=>Yii::$app->user->isGuest],
        [
            'label' => Yii::$app->user->isGuest ? '' : Yii::$app->user->identity->getPublicIdentity(),
            'visible'=>!Yii::$app->user->isGuest,
            'items'=>[
                [
                    'label' => 'Настройки профиля',
                    'url' => ['/user/default/settings']
                ],
                    [
                    'label' => 'Панель управления',
                    'url' => Yii::getAlias('@backendUrl'),
                    'visible'=>Yii::$app->user->can('manager')
                ],
                [
                    'label' => 'Выход',
                    'url' => ['/user/sign-in/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ]
            ]
        ],
//            [
//                'label'=>'Язык',
//                'items'=>array_map(function ($code) {
//                    return [
//                        'label' => Yii::$app->params['availableLocales'][$code],
//                        'url' => ['/site/set-locale', 'locale'=>$code],
//                        'active' => Yii::$app->language === $code
//                    ];
//                }, array_keys(Yii::$app->params['availableLocales']))
//            ]
    ];



    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuLogin,
    ]);




    ?>
    <?php NavBar::end(); ?>

    <?php echo $content ?>

</div>

    <footer class="footer">
        <div class="container">
            <div class="col-lg-4 col-sm-4 text-left">
                <h4><a href="#">Команда</a></h4>
                <h4><a href="/site/contact">Контакты</a></h4>
                <h4><a href="#">Миссия</a></h4>
            </div>
            <div class="col-lg-4 col-sm-4 text-center">
                <p class="tagcloud">
                    <a href="#" style="font-size: 10.485207100592pt;">#Опросы</a>
                    <a href="#">#bootstrap</a>
                    <a href="#" style="font-size: 16.284023668639pt;">#CSS</a>
                    <a href="#" style="font-size: 17.775147928994pt;">#HTML</a>
                    <a href="#" style="font-size: 16.94674556213pt;">#php</a>
                    <a href="#" style="font-size: 8pt;">#Тесты</a>
                    <a href="#" style="font-size: 12.556213017751pt;">#Блог</a>
                    <a href="#" style="font-size: 10.485207100592pt;">#Топ</a>
                    <a href="#" style="font-size: 22pt;">#тег</a>
                    <a href="#" style="font-size: 9.491124260355pt;">#НОВЫЙ_ТЕГ</a>
                </p>
            </div>
            <div class="col-lg-4 col-sm-4 text-right socico">
                <a href="#"><img src="/img/soc_ico/f.png"></a>
                <a href="#"><img src="/img/soc_ico/od.png"></a>
                <a href="#"><img src="/img/soc_ico/tw.png"></a>
                <a href="#"><img src="/img/soc_ico/vk.png"></a>
                <a href="#"><img src="/img/soc_ico/y.png"></a>
            </div>
        </div>
    </footer>
<?php $this->endContent() ?>