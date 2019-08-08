<?php

/* @var $this yii\web\View */

$this->title = 'Название канала';
$this->registerJsFile(Yii::$app->request->baseUrl.'/js/channels/channels.js',['position'=>\yii\web\View::POS_END]);
?>

<div class="site-index">

    <div class="body-content">

        <div class="channel_head">
            <div class="row ch_block">

                <div class="col-md-4">
                    <div class="text-center ch_name">
                        <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
                        <h3>Фамилия Имя</h3>
                        <h5>«Рубрика канала»‎</h5>
                    </div>
                </div>

                <div class="col-md-3 col-sm-4 col-xs-12 col-sm-offset-7 col-md-offset-0 text-center ch_status">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <h4>658</h4>
                        <h6>Подписчиков</h6>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <h4>658</h4>
                        <h6>Публикаций</h6>
                    </div>
                </div>
                    <div class="col-md-4 col-md-offset-1 col-lg-3 col-lg-offset-2 text-center">
                        <button class="btn btn-default" role="button"><span class="glyphicon glyphicon-share-alt"></span> Подписаться</button>
                        <button class="btn btn-default" role="button"  data-toggle="modal" data-target="#Modal_call"><span class="glyphicon glyphicon-envelope"></span> Связаться</button>
                        <a href="/channel/default/editchannel" class="btn btn-default" role="button"><span class="glyphicon glyphicon-cog"></span> Изменить</a>
                    </div>


            </div>

        </div>
        <div class="col-lg-12 row" >
            <div class="col-lg-4 col-md-4">
                <h4 class="font-bold">Описание:</h4>

                Lorem ipsum dolor sit amet,
                consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur.
                <hr>
                <div class="socico_channel">
                    <a href="#"><img src="/img/soc_ico/f.png"></a>
                    <a href="#"><img src="/img/soc_ico/od.png"></a>
                    <a href="#"><img src="/img/soc_ico/tw.png"></a>
                    <a href="#"><img src="/img/soc_ico/vk.png"></a>
                    <a href="#"><img src="/img/soc_ico/y.png"></a>
                </div>
            </div>

                <div class="col-md-6 col-md-offset-2 col-lg-5 col-lg-offset-3 col-sm-12 text-center">

                    <div class="col-md-3 col-sm-4 rating_ch_text">
                        <button type="button" class="btn new_btn btn-lg"><span class="glyphicon glyphicon-thumbs-down"></span> </button>
                        <hr>
                        <h4 class="font-bold">75</h4><span class="small text-gray">Отрицательных</span>
                    </div>

                    <div class="col-md-6 col-sm-4 rating_ch">
                        <h4 class="font-bold">Рейтинг</h4>
                    <div class="progress" data-value='80'>
                        <span class="progress-left">
                        <span class="progress-bar border-primary"></span>
                        </span>
                        <span class="progress-right">
                        <span class="progress-bar border-primary"></span>
                        </span>
                        <div class="text-center rating_ch_circle">
                            <h2 class="font-bold">80<sup class="small">%</sup></h2>
                        </div>
                    </div>
                    </div>

                    <div class="col-md-3 col-sm-4 rating_ch_text">
                        <button type="button" class="btn new_btn btn-lg"><span class="glyphicon glyphicon-thumbs-up"></span> </button>
                        <hr>
                        <h4 class="font-bold">25</h4><span class="small text-gray">Положительных</span>
                    </div>

                </div>

        </div>




            <div class="row text-center col-lg-12 block_ch">
                <hr>
                <div class="col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                        <div class="caption">
                            <h3>Название</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                fugiat nulla pariatur.</p>
                            <p><a href="#" class="btn new_btn" role="button">Прочитать</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                        <div class="caption">
                            <h3>Название</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                fugiat nulla pariatur.</p>
                            <p><a href="#" class="btn new_btn" role="button">Прочитать</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                        <div class="caption">
                            <h3>Название</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                fugiat nulla pariatur.</p>
                            <p><a href="#" class="btn new_btn" role="button">Прочитать</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                        <div class="caption">
                            <h3>Название</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                fugiat nulla pariatur.</p>
                            <p><a href="#" class="btn new_btn" role="button">Прочитать</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                        <div class="caption">
                            <h3>Название</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                fugiat nulla pariatur.</p>
                            <p><a href="#" class="btn new_btn" role="button">Прочитать</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                        <div class="caption">
                            <h3>Название</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                fugiat nulla pariatur.</p>
                            <p><a href="#" class="btn new_btn" role="button">Прочитать</a></p>
                        </div>
                    </div>
                </div>
            </div>


        <div class="row col-lg-12 text-center block_ch">
            <hr>
            <div class="col-lg-6 col-md-6">
                <div class="thumbnail">
                    <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                    <div class="caption">
                        <h3>Название</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur.</p>
                        <p><a href="#" class="btn new_btn" role="button">Прочитать</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="thumbnail">
                    <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                    <div class="caption">
                        <h3>Название</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur.</p>
                        <p><a href="#" class="btn new_btn" role="button">Прочитать</a></p>
                    </div>
                </div>
            </div>

        </div>



    </div>



</div>

<!-- Modal контакты -->
<div class="modal fade" id="Modal_call" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4>Контакты</h4>
            </div>
            <div class="modal-body">
                <p>
                    <label><span class="glyphicon glyphicon-earphone"></span> Тел.:</label>
                    <a href="tel:+70000000000"> +7 (000) 000-00-00</a>
                </p>
                <p>
                    <label><span class="glyphicon glyphicon-envelope"></span> E-mail:</label>
                    <a href="mailto:test_test@gmail.com"> test_test@gmail.com</a>
                </p>
                <p>
                    <label><span class="glyphicon glyphicon-print"></span> Факс:</label> 8-812-1234567
                </p>

            </div>
        </div>
    </div>
</div>
