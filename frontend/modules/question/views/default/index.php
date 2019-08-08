<?php


use yii\authclient\widgets\AuthChoice;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
$this->title = Yii::$app->name;

$this->registerCssFile('/assets/mobirise/css/mbr-additional.css');
$this->registerCssFile('/assets/tether/tether.min.css');
$this->registerCssFile('/assets/theme/css/style.css');
$this->registerCssFile('/css/custom.css');

$this->registerJsFile(Yii::$app->request->baseUrl.'/js/investigation/investigation.js',['position'=>\yii\web\View::POS_END]);
$this->registerJsFile(Yii::$app->request->baseUrl.'/js/add_fields.js',['position'=>\yii\web\View::POS_END]);
$this->registerJsFile(Yii::$app->request->baseUrl.'/js/ajax/save_questions.js',['position'=>\yii\web\View::POS_END]);


?>

<div class="site-investigation-create">
    <section class="mbr-section info2 cid-rvQ7Ldk6nZ1 " id="info2-6" >

        <div class="container ">
            <div class="row main justify-content-center ">
                <div class="media-container-column  title col-12 col-lg-7 col-md-6">
                    <h6 class="mbr-bold mbr-white ">1.Настройка</h6>
                    <h2 class="mbr-bold mbr-white pb-3 mbr-fonts-style display-2 ">
                        Введите вопрос
                    </h2>

                    <input class="form-control question" data-id="1" placeholder="Брюнетки или блондинки?">

                    <h3 class="mbr-section-subtitle mbr-light mbr-white mbr-fonts-style display-5">
                        Варианты ответа
                    </h3>

                    <div role="form" class="form-inline" style="max-width: 500px" >
                        <input type="hidden" name="count" value="1" />
                          <input autocomplete="off" class="form-control answers"  data-id = "1" type="text" placeholder="Type something" />
                          <input autocomplete="off" class="form-control answers"  data-id = "1" id="field1" name="prof1" type="text" placeholder="Type something" />
                        <button id="b1" class=" add-more form-control  btn-success" type="button">+</button>
                    </div>
                </div>
                <div class="media-container-column  col-12 col-lg-3 col-md-4">
                    <div class="mbr-section-btn align-right py-4">
                        <a id="btn" class="btn btn-primary display-4 ask" >
                            Добавить вопрос
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <div class="added_question"></div>




    </section>

    <br> <br>

    <div class="form-group" align="center">
         <input class="btn btn-secondary done" type="text" value="save" >
    </div>


    <section class="pricing-table1 cid-rw8oOP3r7u" id="pricing-tables1-f">


        <div class="media-container-row">

            <div class="plan col-12 mx-2 my-2 justify-content-center col-lg-3">
                <div class="plan-header text-center pt-5">
                    <h3 class="plan-title mbr-fonts-style display-5">
                        Standard
                    </h3>
                    <div class="plan-price">
                        <span class="price-value mbr-fonts-style display-5">
                            $
                        </span>
                        <span class="price-figure mbr-fonts-style display-1">
                              35</span>
                        <small class="price-term mbr-fonts-style display-7">
                            в месяц
                        </small>
                    </div>
                </div>
                <div class="plan-body pb-5">
                    <div class="plan-list align-center">
                        <ul class="list-group list-group-flush mbr-fonts-style display-7">
                            <li class="list-group-item">
                                Mobirise идеально подходит тем, кто не знаком с понятием веб-разработки
                            </li>
                            <li class="list-group-item">
                                5 Gb трафик
                            </li>
                        </ul>
                    </div>
                    <div class="mbr-section-btn text-center pt-4">
                        <a  class="btn btn-primary display-4 buy">КУПИТЬ СЕЙЧАС</a>
                    </div>
                </div>
            </div>

            <div class="plan col-12 mx-2 my-2 justify-content-center col-lg-3">
                <div class="plan-header text-center pt-5">
                    <h3 class="plan-title mbr-fonts-style display-5">
                        Бизнес
                    </h3>
                    <div class="plan-price">
                        <span class="price-value mbr-fonts-style display-5">
                            $
                        </span>
                        <span class="price-figure mbr-fonts-style display-1">
                            65</span>
                        <small class="price-term mbr-fonts-style display-7">
                            в день
                        </small>
                    </div>
                </div>
                <div class="plan-body pb-5">
                    <div class="plan-list align-center">
                        <ul class="list-group list-group-flush mbr-fonts-style display-7">
                            <li class="list-group-item">
                                Mobirise идеально подходит тем, кто не знаком с понятием веб-разработки
                            </li>
                            <li class="list-group-item">
                                10 Gb трафик
                            </li>
                        </ul>
                    </div>
                    <div class="mbr-section-btn text-center pt-4">
                        <a class="btn btn-primary display-4 buy">КУПИТЬ СЕЙЧАС</a>
                    </div>
                </div>
            </div>

            <div class="plan col-12 mx-2 my-2 justify-content-center col-lg-3">
                <div class="plan-header text-center pt-5">
                    <h3 class="plan-title mbr-fonts-style display-5">
                        Премиум
                    </h3>
                    <div class="plan-price">
                        <span class="price-value mbr-fonts-style display-5">
                            $
                        </span>
                        <span class="price-figure mbr-fonts-style display-1">
                            90</span>
                        <small class="price-term mbr-fonts-style display-7">
                            в год
                        </small>
                    </div>
                </div>
                <div class="plan-body pb-5">
                    <div class="plan-list align-center">
                        <ul class="list-group list-group-flush mbr-fonts-style display-7">
                            <li class="list-group-item">
                                Mobirise идеально подходит тем, кто не знаком с понятием веб-разработки
                            </li>
                            <li class="list-group-item">
                                15 GB трафик
                            </li>
                        </ul>
                    </div>
                    <div class="mbr-section-btn text-center pt-4">
                        <a class="btn btn-primary display-4 buy">КУПИТЬ СЕЙЧАС</a>
                    </div>
                </div>
            </div>

            <div class="plan col-12 mx-2 my-2 justify-content-center col-lg-3">
                <div class="plan-header text-center pt-5">
                    <h3 class="plan-title mbr-fonts-style display-5">
                        Максимальный
                    </h3>
                    <div class="plan-price">
                        <span class="price-value mbr-fonts-style display-5">
                            $
                        </span>
                        <span class="price-figure mbr-fonts-style display-1">
                            150</span>
                        <small class="price-term mbr-fonts-style display-7">
                            в год
                        </small>
                    </div>
                </div>
                <div class="plan-body pb-5">
                    <div class="plan-list align-center">
                        <ul class="list-group list-group-flush mbr-fonts-style display-7">
                            <li class="list-group-item">
                                Mobirise идеально подходит тем, кто не знаком с понятием веб-разработки
                            </li>
                            <li class="list-group-item">
                                20 GB трафик
                            </li>
                        </ul>
                    </div>
                    <div class="mbr-section-btn text-center pt-4">
                        <a  class="btn btn-primary display-4 buy">КУПИТЬ СЕЙЧАС</a>
                    </div>
                </div>
            </div>
        </div>






    </section>

    <br><br>

    <section class="features8 cid-rwJbJO8hWp mbr-parallax-background hidethis" id="features8-n">



        <div class="mbr-overlay" style="opacity: 0.2; background-color: rgb(35, 35, 35);">
        </div>

        <div class="container">
            <div class="media-container-row">

                <div class="card  col-12 col-md-6 col-lg-4">
                    <div class="card-img">
                        <img style="width: 200px;" src="/assets/images/emoticons.png">
                    </div>
                    <div class="card-box align-center">
                        <h4 class="card-title mbr-fonts-style display-7">
                            Простой
                        </h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                            Описание
                        </p>
                        <div class="mbr-section-btn text-center">
                            <a  class="btn btn-secondary display-4">
                                Выбрать
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card  col-12 col-md-6 col-lg-4">
                    <div class="card-img">
                        <img style="width: 260px;" src="/assets/images/deep.jpg">
                    </div>
                    <div class="card-box align-center">
                        <h4 class="card-title mbr-fonts-style display-7">
                            Глубинный
                        </h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                            Описание
                        </p>
                        <div class="mbr-section-btn text-center">
                            <a  class="btn btn-secondary display-4">
                                Выбрать
                            </a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <br><br>

    <!--    <section class="tabs3 cid-rwJc0Lwxvc" id="tabs3-p">-->
    <!---->
    <!---->
    <!---->
    <!---->
    <!---->
    <!--        <div class="container">-->
    <!--            <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">-->
    <!--                Вкладки со столбцами-->
    <!--            </h2>-->
    <!--            <h3 class="mbr-section-subtitle  display-5 align-center mbr-light mbr-fonts-style">-->
    <!--                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.-->
    <!--            </h3>-->
    <!--        </div>-->
    <!--        <div class="container-fluid">-->
    <!--            <div class="row tabcont">-->
    <!--                <ul class="nav nav-tabs pt-3 mt-5" role="tablist">-->
    <!--                    <li class="nav-item mbr-fonts-style">-->
    <!--                        <a class="nav-link active display-7" role="tab" data-toggle="tab" href="#tab1">-->
    <!--                            Отзывчивый-->
    <!--                        </a>-->
    <!--                    </li>-->
    <!--                    <li class="nav-item mbr-fonts-style">-->
    <!--                        <a class="nav-link  display-7" role="tab" data-toggle="tab" href="#tab2">-->
    <!--                            Без кодирования-->
    <!--                        </a>-->
    <!--                    </li>-->
    <!--                    <li class="nav-item mbr-fonts-style">-->
    <!--                        <a class="nav-link display-7" role="tab" data-toggle="tab" href="#tab3">-->
    <!--                            Уникальные стили-->
    <!--                        </a>-->
    <!--                    </li>-->
    <!---->
    <!---->
    <!---->
    <!--                </ul>-->
    <!--            </div>-->
    <!--        </div>-->
    <!---->
    <!--        <div class="container">-->
    <!--            <div class="row px-1">-->
    <!--                <div class="tab-content">-->
    <!--                    <div id="tab1" class="tab-pane in active mbr-table" role="tabpanel">-->
    <!--                        <div class="row tab-content-row">-->
    <!--                            <div class="col-xs-12 col-md-6 col-lg-4">-->
    <!--                                <div class="card-img ">-->
    <!--                                    <span class="mbri-responsive mbr-iconfont"></span>-->
    <!--                                </div>-->
    <!--                                <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">-->
    <!--                                    МОБИЛЬНАЯ АДАПТАЦИЯ-->
    <!--                                </h4>-->
    <!--                                <p class="mbr-section-text  align-center mbr-fonts-style display-7">-->
    <!--                                    Не требуется особых знаний, все сайты Mobirise адаптивны. Вам не нужно создавать специально мобильную версию сайта.-->
    <!--                                </p>-->
    <!--                            </div>-->
    <!---->
    <!--                            <div class="col-xs-12 col-md-6 col-lg-4">-->
    <!--                                <div class="card-img ">-->
    <!--                                    <span class="mbri-responsive mbr-iconfont"></span>-->
    <!--                                </div>-->
    <!--                                <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">-->
    <!--                                    МОБИЛЬНАЯ АДАПТАЦИЯ-->
    <!--                                </h4>-->
    <!--                                <p class="mbr-section-text  align-center mbr-fonts-style display-7">-->
    <!--                                    Не требуется особых знаний, все сайты Mobirise адаптивны. Вам не нужно создавать специально мобильную версию сайта.-->
    <!--                                </p>-->
    <!--                            </div>-->
    <!---->
    <!--                            <div class="col-xs-12 col-md-6 col-lg-4">-->
    <!--                                <div class="card-img ">-->
    <!--                                    <span class="mbri-responsive mbr-iconfont"></span>-->
    <!--                                </div>-->
    <!--                                <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">-->
    <!--                                    МОБИЛЬНАЯ АДАПТАЦИЯ-->
    <!--                                </h4>-->
    <!--                                <p class="mbr-section-text  align-center mbr-fonts-style display-7">-->
    <!--                                    Не требуется особых знаний, все сайты Mobirise адаптивны. Вам не нужно создавать специально мобильную версию сайта.-->
    <!--                                </p>-->
    <!--                            </div>-->
    <!---->
    <!---->
    <!--                        </div>-->
    <!--                    </div>-->
    <!---->
    <!--                    <div id="tab2" class="tab-pane  mbr-table" role="tabpanel">-->
    <!--                        <div class="row tab-content-row">-->
    <!--                            <div class="col-xs-12 col-md-6 col-lg-4">-->
    <!--                                <div class="card-img ">-->
    <!--                                    <span class="mbri-bootstrap mbr-iconfont"></span>-->
    <!--                                </div>-->
    <!--                                <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">-->
    <!--                                    ЛЕГКО И ПРОСТО-->
    <!--                                </h4>-->
    <!--                                <p class="mbr-section-text  align-center mbr-fonts-style display-7">-->
    <!--                                    Сократите время разработки с помощью простого перетаскивания блоков на страницу, редактируйте содержание и публикуйте - нет необходимости в технических навыках.-->
    <!--                                </p>-->
    <!--                            </div>-->
    <!---->
    <!--                            <div class="col-xs-12 col-md-6 col-lg-4">-->
    <!--                                <div class="card-img ">-->
    <!--                                    <span class="mbri-bootstrap mbr-iconfont"></span>-->
    <!--                                </div>-->
    <!--                                <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">-->
    <!--                                    ЛЕГКО И ПРОСТО-->
    <!--                                </h4>-->
    <!--                                <p class="mbr-section-text  align-center mbr-fonts-style display-7">-->
    <!--                                    Сократите время разработки с помощью простого перетаскивания блоков на страницу, редактируйте содержание и публикуйте - нет необходимости в технических навыках.-->
    <!--                                </p>-->
    <!--                            </div>-->
    <!---->
    <!--                            <div class="col-xs-12 col-md-6 col-lg-4">-->
    <!--                                <div class="card-img ">-->
    <!--                                    <span class="mbri-bootstrap mbr-iconfont"></span>-->
    <!--                                </div>-->
    <!--                                <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">-->
    <!--                                    ЛЕГКО И ПРОСТО-->
    <!--                                </h4>-->
    <!--                                <p class="mbr-section-text  align-center mbr-fonts-style display-7">-->
    <!--                                    Сократите время разработки с помощью простого перетаскивания блоков на страницу, редактируйте содержание и публикуйте - нет необходимости в технических навыках.-->
    <!--                                </p>-->
    <!--                            </div>-->
    <!---->
    <!---->
    <!--                        </div>-->
    <!--                    </div>-->
    <!---->
    <!--                    <div id="tab3" class="tab-pane  mbr-table" role="tabpanel">-->
    <!--                        <div class="row tab-content-row">-->
    <!--                            <div class="col-xs-12 col-md-6 col-lg-4">-->
    <!--                                <div class="card-img ">-->
    <!--                                    <span class="mbri-extension mbr-iconfont"></span>-->
    <!--                                </div>-->
    <!--                                <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">-->
    <!--                                    ТРЕНДОВЫЕ БЛОКИ-->
    <!--                                </h4>-->
    <!--                                <p class="mbr-section-text  align-center mbr-fonts-style display-7">-->
    <!--                                    Выберите готовые и настраиваемые шаблоны блоков - полноэкранный интро, bootstrap-карусель, слайдер, галерею изображений с параллаксом, "липким" заголовком и многое другое.-->
    <!--                                </p>-->
    <!--                            </div>-->
    <!---->
    <!--                            <div class="col-xs-12 col-md-6 col-lg-4">-->
    <!--                                <div class="card-img ">-->
    <!--                                    <span class="mbri-extension mbr-iconfont"></span>-->
    <!--                                </div>-->
    <!--                                <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">-->
    <!--                                    ТРЕНДОВЫЕ БЛОКИ-->
    <!--                                </h4>-->
    <!--                                <p class="mbr-section-text  align-center mbr-fonts-style display-7">-->
    <!--                                    Выберите готовые и настраиваемые шаблоны блоков - полноэкранный интро, bootstrap-карусель, слайдер, галерею изображений с параллаксом, "липким" заголовком и многое другое.-->
    <!--                                </p>-->
    <!--                            </div>-->
    <!---->
    <!--                            <div class="col-xs-12 col-md-6 col-lg-4">-->
    <!--                                <div class="card-img ">-->
    <!--                                    <span class="mbri-extension mbr-iconfont"></span>-->
    <!--                                </div>-->
    <!--                                <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">-->
    <!--                                    ТРЕНДОВЫЕ БЛОКИ-->
    <!--                                </h4>-->
    <!--                                <p class="mbr-section-text  align-center mbr-fonts-style display-7">-->
    <!--                                    Выберите готовые и настраиваемые шаблоны блоков - полноэкранный интро, bootstrap-карусель, слайдер, галерею изображений с параллаксом, "липким" заголовком и многое другое.-->
    <!--                                </p>-->
    <!--                            </div>-->
    <!---->
    <!---->
    <!--                        </div>-->
    <!--                    </div>-->
    <!---->
    <!--                    <div id="tab4" class="tab-pane  mbr-table" role="tabpanel">-->
    <!--                        <div class="row tab-content-row">-->
    <!--                            <div class="col-xs-12 col-md-6 col-lg-4">-->
    <!--                                <div class="card-img ">-->
    <!--                                    <span class="mbri-responsive mbr-iconfont"></span>-->
    <!--                                </div>-->
    <!--                                <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">-->
    <!--                                    МОБИЛЬНАЯ АДАПТАЦИЯ-->
    <!--                                </h4>-->
    <!--                                <p class="mbr-section-text  align-center mbr-fonts-style display-7">-->
    <!--                                    Не требуется особых знаний, все сайты Mobirise адаптивны. Вам не нужно создавать специально мобильную версию сайта.-->
    <!--                                </p>-->
    <!--                            </div>-->
    <!---->
    <!--                            <div class="col-xs-12 col-md-6 col-lg-4">-->
    <!--                                <div class="card-img ">-->
    <!--                                    <span class="mbri-responsive mbr-iconfont"></span>-->
    <!--                                </div>-->
    <!--                                <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">-->
    <!--                                    МОБИЛЬНАЯ АДАПТАЦИЯ-->
    <!--                                </h4>-->
    <!--                                <p class="mbr-section-text  align-center mbr-fonts-style display-7">-->
    <!--                                    Не требуется особых знаний, все сайты Mobirise адаптивны. Вам не нужно создавать специально мобильную версию сайта.-->
    <!--                                </p>-->
    <!--                            </div>-->
    <!---->
    <!--                            <div class="col-xs-12 col-md-6 col-lg-4">-->
    <!--                                <div class="card-img ">-->
    <!--                                    <span class="mbri-responsive mbr-iconfont"></span>-->
    <!--                                </div>-->
    <!--                                <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">-->
    <!--                                    МОБИЛЬНАЯ АДАПТАЦИЯ-->
    <!--                                </h4>-->
    <!--                                <p class="mbr-section-text  align-center mbr-fonts-style display-7">-->
    <!--                                    Не требуется особых знаний, все сайты Mobirise адаптивны. Вам не нужно создавать специально мобильную версию сайта.-->
    <!--                                </p>-->
    <!--                            </div>-->
    <!---->
    <!---->
    <!--                        </div>-->
    <!--                    </div>-->
    <!---->
    <!--                    <div id="tab5" class="tab-pane  mbr-table" role="tabpanel">-->
    <!--                        <div class="row tab-content-row">-->
    <!--                            <div class="col-xs-12 col-md-6 col-lg-4">-->
    <!--                                <div class="card-img ">-->
    <!--                                    <span class="mbri-bootstrap mbr-iconfont"></span>-->
    <!--                                </div>-->
    <!--                                <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">-->
    <!--                                    ЛЕГКО И ПРОСТО-->
    <!--                                </h4>-->
    <!--                                <p class="mbr-section-text  align-center mbr-fonts-style display-7">-->
    <!--                                    Сократите время разработки с помощью простого перетаскивания блоков на страницу, редактируйте содержание и публикуйте - нет необходимости в технических навыках.-->
    <!--                                </p>-->
    <!--                            </div>-->
    <!---->
    <!--                            <div class="col-xs-12 col-md-6 col-lg-4">-->
    <!--                                <div class="card-img ">-->
    <!--                                    <span class="mbri-bootstrap mbr-iconfont"></span>-->
    <!--                                </div>-->
    <!--                                <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">-->
    <!--                                    ЛЕГКО И ПРОСТО-->
    <!--                                </h4>-->
    <!--                                <p class="mbr-section-text  align-center mbr-fonts-style display-7">-->
    <!--                                    Сократите время разработки с помощью простого перетаскивания блоков на страницу, редактируйте содержание и публикуйте - нет необходимости в технических навыках.-->
    <!--                                </p>-->
    <!--                            </div>-->
    <!---->
    <!--                            <div class="col-xs-12 col-md-6 col-lg-4">-->
    <!--                                <div class="card-img ">-->
    <!--                                    <span class="mbri-bootstrap mbr-iconfont"></span>-->
    <!--                                </div>-->
    <!--                                <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">-->
    <!--                                    ЛЕГКО И ПРОСТО-->
    <!--                                </h4>-->
    <!--                                <p class="mbr-section-text  align-center mbr-fonts-style display-7">-->
    <!--                                    Сократите время разработки с помощью простого перетаскивания блоков на страницу, редактируйте содержание и публикуйте - нет необходимости в технических навыках.-->
    <!--                                </p>-->
    <!--                            </div>-->
    <!---->
    <!---->
    <!--                        </div>-->
    <!--                    </div>-->
    <!---->
    <!--                    <div id="tab6" class="tab-pane  mbr-table" role="tabpanel">-->
    <!--                        <div class="row tab-content-row">-->
    <!--                            <div class="col-xs-12 col-md-6 col-lg-4">-->
    <!--                                <div class="card-img ">-->
    <!--                                    <span class="mbri-extension mbr-iconfont"></span>-->
    <!--                                </div>-->
    <!--                                <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">-->
    <!--                                    ТРЕНДОВЫЕ БЛОКИ-->
    <!--                                </h4>-->
    <!--                                <p class="mbr-section-text  align-center mbr-fonts-style display-7">-->
    <!--                                    Выберите готовые и настраиваемые шаблоны блоков - полноэкранный интро, bootstrap-карусель, слайдер, галерею изображений с параллаксом, "липким" заголовком и многое другое.-->
    <!--                                </p>-->
    <!--                            </div>-->
    <!---->
    <!--                            <div class="col-xs-12 col-md-6 col-lg-4">-->
    <!--                                <div class="card-img ">-->
    <!--                                    <span class="mbri-extension mbr-iconfont"></span>-->
    <!--                                </div>-->
    <!--                                <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">-->
    <!--                                    ТРЕНДОВЫЕ БЛОКИ-->
    <!--                                </h4>-->
    <!--                                <p class="mbr-section-text  align-center mbr-fonts-style display-7">-->
    <!--                                    Выберите готовые и настраиваемые шаблоны блоков - полноэкранный интро, bootstrap-карусель, слайдер, галерею изображений с параллаксом, "липким" заголовком и многое другое.-->
    <!--                                </p>-->
    <!--                            </div>-->
    <!---->
    <!--                            <div class="col-xs-12 col-md-6 col-lg-4">-->
    <!--                                <div class="card-img ">-->
    <!--                                    <span class="mbri-extension mbr-iconfont"></span>-->
    <!--                                </div>-->
    <!--                                <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">-->
    <!--                                    ТРЕНДОВЫЕ БЛОКИ-->
    <!--                                </h4>-->
    <!--                                <p class="mbr-section-text  align-center mbr-fonts-style display-7">-->
    <!--                                    Выберите готовые и настраиваемые шаблоны блоков - полноэкранный интро, bootstrap-карусель, слайдер, галерею изображений с параллаксом, "липким" заголовком и многое другое.-->
    <!--                                </p>-->
    <!--                            </div>-->
    <!---->
    <!---->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </section>-->
    <!---->
    <!--    <br><br>-->

    <section class="features13 cid-rwJbOVusiW hidethis" id="features13-o">




        <div class="container">

            <div class="media-container-row">
                <div class="card col-12 col-md-6 align-center col-lg-4">
                    <div class="card-wrap choise">
                        <div class="card-img">
                            <img src="/assets/images/background1.jpg" alt="Mobirise" title="">
                        </div>
                        <div class="card-box p-5 ">
                            <h4 class="card-title py-2 mbr-fonts-style align-center mbr-white display-5">
                                Поделиться с миром
                            </h4>
                            <p class="mbr-text mbr-fonts-style mbr-white display-7">
                                Очень интересный текст слайдеры, галереи, блоки статей, счетчики.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card col-12 col-md-6 align-center col-lg-4">
                    <div class="card-wrap choise">
                        <div class="card-img">
                            <img src="/assets/images/background2.jpg" alt="Mobirise">
                        </div>
                        <div class="card-box p-5 ">
                            <h4 class="card-title py-2 mbr-fonts-style align-center mbr-white display-5">
                                Оставить себе
                            </h4>
                            <p class="mbr-text mbr-fonts-style mbr-white display-7">
                                Очень интересный текст слайдеры, галереи, блоки статей, счетчики.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card col-12 col-md-6 align-center col-lg-4">
                    <div class="card-wrap choise">
                        <div class="card-img">
                            <img src="/assets/images/background4.jpg" alt="Mobirise">
                        </div>
                        <div class="card-box p-5 " >
                            <h4 class="card-title py-2 mbr-fonts-style align-center mbr-white display-5">
                                Безлимитно
                            </h4>
                            <p class="mbr-text mbr-fonts-style mbr-white display-7">
                                фыаыа ыва кппплф ыпафып д ывафыа д фыпфап
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mbr-section content8 cid-rwJbFOGQzn hidethis" id="content8-m">
        <div class="container">
            <div class="media-container-row title">
                <div class="col-12 col-md-8">
                    <div class="mbr-section-btn align-center">
                        <a class="btn btn-secondary display-4" data-toggle="modal" data-target="#myModal">Создать исследование</a>
                        <a class="btn btn-black-outline display-4" href="https://mobirise.co">Сохранить</a>
                    </div>
                </div>
            </div>
        </div>
    </section>






</div>

<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content" style="height: auto">

            <div class="modal-body text-center">
                <p>Чтобы твой ответ был учтен, зарегистрируйся через</p>

                <div class="form-group">
                    <?php $authAuthChoice = yii\authclient\widgets\AuthChoice::begin([
                        'baseAuthUrl' => ['oauth']
                    ]); ?>
                    <ul class="list-unstyle list-inline">
                        <?php foreach ($authAuthChoice->getClients() as $client): ?>
                            <li><?= $authAuthChoice->clientLink($client) ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <?php yii\authclient\widgets\AuthChoice::end(); ?>
                </div>

                <a href="/user/sign-in/signup">Или через почту</a>

                <br>
                <br>

                <h5>Куда отправить результат?</h5>
                <br>
                <input type="email"  class="form-control" placeholder="email@gogle.com">
                <br>

                <h5>Оплата</h5>

                <a href="https://mobirise.co" class="btn btn-primary display-4">
                    Visa
                </a>
                <a href="https://mobirise.co" class="btn btn-primary display-4">
                    Mastercard
                </a>
                <br>


            </div>



        </div>

    </div>
</div>
