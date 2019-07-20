<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
//$this->params['breadcrumbs'][] = $this->title;
$this->registerCssFile('/assets/web/assets/mobirise-icons/mobirise-icons.css');
$this->registerCssFile('/assets/tether/tether.min.css');
$this->registerCssFile('/assets/theme/css/style.css');
$this->registerCssFile('/assets/mobirise/css/mbr-additional.css');
$this->registerJsFile(Yii::$app->request->baseUrl.'/js/add_fields.js',['depends' => [\yii\web\JqueryAsset::className()]])




?>
<br><br><br>
<div class="site-about">
    <section class="mbr-section info2 cid-rvQ7Ldk6nZ question" id="info2-6" >

        <div class="container ">
            <div class="row main justify-content-center ">
                <div class="media-container-column  title col-12 col-lg-7 col-md-6">
                    <h6 class="mbr-bold mbr-white ">1.Настройка</h6>
                    <h2 class="mbr-bold mbr-white pb-3 mbr-fonts-style display-2">
                        Введите вопрос
                    </h2>

                    <input class="form-control" placeholder="Брюнетки или блондинки?">

                    <h3 class="mbr-section-subtitle mbr-light mbr-white mbr-fonts-style display-5">
                        Варианты ответа
                    </h3>

                    <div role="form" class="form-inline " >

                        <input type="hidden" name="count" value="1" />

                        <input autocomplete="off" class="form-control input" id="field1" name="prof1" type="text" placeholder="Type something" data-items="8"/>
                        <button id="b1" class=" add-more form-control  btn-success" type="button">+</button>

                    </div>
                </div>
                <div class="media-container-column  col-12 col-lg-3 col-md-4">
                    <div class="mbr-section-btn align-right py-4">
                        <a class="btn btn-primary display-4 ask" >
                            Добавить вопрос
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </section>
    <div class="added_question"><br></div>

    <section class="mbr-section info1 cid-rvQ8OLLVfi" id="info1-7">




        <div class="container">
            <div class="row justify-content-center content-row">
                <div class="media-container-column title ">
                    <h6 class="mbr-bold">2.Прохождение опроса</h6>
                    <p><i class="light-red lighter bigger-120"></i>2.1</p>
                    <div class="row">

                        <div class="col-md-12">

                            <div class="row">
                                <div class="col-sm-6 col-md-offset-3">
                                    <div class="thumbnail">
                                        <div class="caption text-center" onclick="location.href='https://flow.microsoft.com/en-us/connectors/shared_slack/slack/'">
<!--                                            <div class="position-relative">-->
<!--                                                <img src="https://az818438.vo.msecnd.net/icons/slack.png" style="width:72px;height:72px;" />-->
<!--                                            </div>-->
                                            <h4 id="thumbnail-label"><p>Россия или США?</p></h4>

                                            <div class="thumbnail-description smaller">США усиливают противостояние с Россией. Агентство по международному развитию представило концепцию по борьбе со «злонамеренным влиянием Кремля» в Европе, Евразии и других регионах. Особое внимание Вашингтон традиционно уделяет странам на постсоветском пространстве.</div>
                                        </div>
                                        <div class="caption card-footer text-center">
                                            <ul class="list-inline">
                                                <li>
                                                    <div class="mbr-section-btn align-left py-4">
                                                        <a class="btn btn-primary display-4 answer" >

                                                            Россия
                                                        </a>
                                                    </div>
                                                </li>
                                                <li></li>
                                                <li>
                                                    <div class="mbr-section-btn align-left py-4">
                                                        <a class="btn btn-primary display-4 answer">

                                                            США
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">&nbsp;</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="mbr-section info2 cid-rvQ8Qkdpbf" id="info2-8">





        <div class="container">
            <div class="row main justify-content-center">
<!--                <div class="media-container-column col-12 col-lg-3 col-md-4">-->
<!--                    <div class="mbr-section-btn align-left py-4">-->
<!--                        <a class="btn btn-primary display-4" href="https://mobirise.co">-->
<!--                            <span class="mbri-preview mbr-iconfont"></span>-->
<!--                            СМОТРЕТЬ ЕЩЕ-->
<!--                        </a>-->
<!--                    </div>-->
<!--                </div>-->
                <div >
                    <h2 class="align-left mbr-bold mbr-white pb-3 mbr-fonts-style display-2">
                        Выберите пол: <button class="buttonm button5">Муж</button> <button class="buttonw button5">Жен</button>
                    </h2>

                    <div class="form-inline">
                        <h2 class="align-left mbr-bold mbr-white pb-3 mbr-fonts-style display-2">Ваш возраст:&nbsp;&nbsp;</h2>
                        <h2 class="align-left mbr-bold mbr-white pb-3 mbr-fonts-style display-2" id="demo"> </h2>
                        <input type="range" min="18" max="100" value="18" class="slider" id="myRange">
                    </div>

                    <h2 class="align-left mbr-bold mbr-white pb-3 mbr-fonts-style display-2">
                        Кем ты хотел быть в детстве?
                        <select class="form-control" id="sel1">
                            <option></option>
                            <option>Космонавт</option>
                            <option>Биолог</option>
                            <option>Спасатель</option>
                            <option>Врач</option>
                        </select>
                    </h2>

                    <h2 class="align-left mbr-bold mbr-white pb-3 mbr-fonts-style display-2">
                        Кем работаешь сейчас?
                        <select class="form-control" id="sel1">
                            <option></option>
                            <option>Космонавт</option>
                            <option>Биолог</option>
                            <option>Спасатель</option>
                            <option>Врач</option>
                        </select>
                    </h2>
                </div>
            </div>
        </div>
    </section>


</div>

<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content" style="height:200px">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">
                    Спасибо что исследуешь вмесет с нами!
                </h4>
            </div>
            <div class="modal-body text-center">
                <p>Чтобы твой ответ был учтен, зарегистрируйся через</p>

                            <a class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>

                            <a class="btn btn-social-icon btn-google-plus"><i class="fa fa-google-plus"></i></a>
<!--                            <a class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>-->
                            <a class="btn btn-social-icon btn-vk"><i class="fa fa-vk"></i></a>

                            <a href="/user/registration/register">Или через почту</a>

            </div>

        </div>

    </div>
</div>
