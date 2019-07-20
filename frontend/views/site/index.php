<?php

/* @var $this yii\web\View */

use yii\web\View;



$this->title = 'Главная страница';
$this->registerCssFile('/css/carousel.css');

$this->registerJsFile(Yii::$app->request->baseUrl.'/js/sliders/slider.function.js',['position'=>\yii\web\View::POS_HEAD]);
$this->registerJsFile(Yii::$app->request->baseUrl.'/js/sliders/gallery1.js',['position'=>\yii\web\View::POS_END]);
?>

<div class="site-index">


    <div id="testCarousel" class="carousel slide" data-ride="carousel">

        <!-- Слайды карусели -->
        <div class="carousel-inner">
            <!-- Слайд 1 -->
            <div class="item active">
                <img class="d-block img-fluid" src="https://images-na.ssl-images-amazon.com/images/G/01/AmazonExports/Fuji/2019/July/Hero/Fuji_Hero_Generic_July19_1X._CB442935682_.jpg" alt="Second slide">
            </div>
            <!-- Слайд 2 -->
            <div class="item">
                <img class="d-block img-fluid" src="https://images-na.ssl-images-amazon.com/images/G/01/AmazonExports/Projects/Amber/Fuji_Hero_Amber_en_US_1X._CB441989098_.jpg" alt="Second slide">
            </div>
            <!-- Слайд 3 -->
            <div class="item">
                <img class="d-block img-fluid" src="https://images-na.ssl-images-amazon.com/images/G/01/AmazonExports/Fuji/2019/April/Hero/Hero_Currency_EN_1X._CB466692681_.jpg" alt="Second slide">
            </div


            <ol class="carousel-indicators">
                <li data-target="#testCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#testCarousel" data-slide-to="1"></li>
                <li data-target="#testCarousel" data-slide-to="2"></li>
            </ol>

            <a class="left carousel-control" href="#testCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#testCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>


            <div class="row text-center" id="bstext">
                <div class="col-lg-3">
                    <div class="thumbnail">
                        <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                        <h3>Исследование</h3>
                        <p>Процесс выработки новых науч. знаний, один из видов познават. деятельности.
                            И характеризуется объективностью, воспроизводимостью, доказательностью, точностью.</p>
                        <p><a class="btn btn-default center-block" href="#step1" data-toggle="tab">Подходит</a></p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="thumbnail">
                        <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                        <h3>Фидбэк</h3>
                        <p>Анкета, мини-опросник после проведения различных образовательных мероприятий.</p>
                        <p><a class="btn btn-default center-block" href="#step1" data-toggle="tab">Подходит</a></p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="thumbnail">
                        <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                        <h3>А/В-тестировани</h3>
                        <p> Метод маркетингового исследования, суть которого заключается в том, что контрольная группа
                            элементов сравнивается с набором тестовых групп, в которых один или несколько показателей
                            были изменены, для того, чтобы выяснить, какие из изменений улучшают целевой показатель.</p>
                        <p><a class="btn btn-default center-block" href="#step1" data-toggle="tab">Подходит</a></p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="thumbnail">
                        <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                        <h3>Тесты</h3>
                        <p> Способ изучения глубинных процессов деятельности системы,
                            посредством помещения системы в разные ситуации и отслеживание
                            доступных наблюдению изменений в ней.</p>
                        <p><a class="btn btn-default center-block" href="#step1" data-toggle="tab">Подходит</a></p>
                    </div>
                </div>
            </div>
        </div>


    </div>


    <div class="body-content col-lg-12">



        <!-- Tab panes -->
        <div class="tab-content col-lg-12 text-center">
            <div class="tab-pane fade col-lg-6 col-md-offset-3 thumbnail" id="step1">
                <h4>Выберете тип голосования</h4>

                <hr>
                <!--                <section class="panel panel-info poll">-->
                <!--                    <div class="panel-heading">-->
                <!--                        <h3 class="panel-title">-->
                <!--                            Голосование-->
                <!--                        </h3>-->
                <!--                    </div>-->
                <!--                    <div class="panel-body">-->
                <!--                            <div class="question" style="padding: inherit;">-->
                <!--                                <h3 style="padding: inherit;">Какой тип голосвание желаете?</h3>-->
                <!--                                <span>Публичный опрос до 09 авг 23:00</span>-->
                <!--                            </div>-->
                <!---->
                <!--                        <hr>-->
                <!--                        <div id="vote-section">-->
                <!--                            <form id="vote" action="" method="POST">-->
                <!--                                <div class="answers">-->
                <!---->
                <!--                                    <ul class="list-group text-left">-->
                <!--                                        <li class="list-group-item">-->
                <!--                                            <span class="badge"><input type="checkbox" name="poll" value="'+(i+1)+'"></span>-->
                <!--                                            Открытое-->
                <!--                                        </li>-->
                <!--                                        <li class="list-group-item">-->
                <!--                                            <span class="badge"><input type="checkbox" name="poll" value="'+(i+1)+'"></span>-->
                <!--                                            Анонимное-->
                <!--                                        </li>-->
                <!--                                    </ul>-->
                <!--                                </div>-->
                <!--                                <button type="submit" class="btn btn-default">Голосовать</button>-->
                <!--                            </form>-->
                <!---->
                <!---->
                <!---->
                <!---->
                <!--                            <div class="progress">-->
                <!--                                <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%">-->
                <!--                                    <span class="sr-only">65%</span>-->
                <!--                                    <div style="margin-top: 6px; float: left; margin-left: 15px;">Открытое</div>-->
                <!--                                    </div>-->
                <!--                                <div style="float: right; margin-right: 15px; color: white">-->
                <!--                                <span class="text-right" style="font-size: 12px;"><b>65%</b> </span>-->
                <!--                                <div style="font-size: 12px; margin-top: -5px;">(Голосов: 5)</div>-->
                <!--                                </div>-->
                <!--                                </div>-->
                <!--                        </div>-->
                <!---->
                <!--                    </div>-->
                <!--                </section>-->

                <div class="row">
                    <div class="col-lg-6">
                        <a href="#" class="btn btn-default" role="button">Открытое</a>
                    </div>
                    <div class="col-lg-6">
                        <a href="#" class="btn btn-default" role="button">Анонимное</a>
                    </div>
                </div>
            </div>
        </div>


        <h1 class="text-center">Новое</h1>

        <div class="wrap slide-block">
            <!--            <div class="headline">Aдаптивная галерея изображений</div>-->
            <div id="gallery" class="gallery gallery1">
                <div class="slider">
                    <div class="stage">
                        <div>
                            <div class="well">
                                <div class="thumbnail">
                                    <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                                    <div class="caption">
                                        <h3>Название</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item" aria-current="page">#Теги</li>
                                </ol>
                            </div>
                        </div>
                        <div>
                            <div class="well">
                                <div class="thumbnail">
                                    <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                                    <div class="caption">
                                        <h3>Название</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item" aria-current="page">#Теги</li>
                                </ol>
                            </div>
                        </div>
                        <div>
                            <div class="well">
                                <div class="thumbnail">
                                    <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                                    <div class="caption">
                                        <h3>Название</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item" aria-current="page">#Теги</li>
                                </ol>
                            </div>
                        </div>
                        <div>
                            <div class="well">
                                <div class="thumbnail">
                                    <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                                    <div class="caption">
                                        <h3>Название</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item" aria-current="page">#Теги</li>
                                </ol>
                            </div>
                        </div>
                        <div>
                            <div class="well">
                                <div class="thumbnail">
                                    <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                                    <div class="caption">
                                        <h3>Название</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item" aria-current="page">#Теги</li>
                                </ol>
                            </div>
                        </div>
                        <div>
                            <div class="well">
                                <div class="thumbnail">
                                    <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                                    <div class="caption">
                                        <h3>Название</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item" aria-current="page">#Теги</li>
                                </ol>
                            </div>
                        </div>
                        <div>
                            <div class="well">
                                <div class="thumbnail">
                                    <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                                    <div class="caption">
                                        <h3>Название</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item" aria-current="page">#Теги</li>
                                </ol>
                            </div>
                        </div>
                        <div>
                            <div class="well">
                                <div class="thumbnail">
                                    <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                                    <div class="caption">
                                        <h3>Название</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item" aria-current="page">#Теги</li>
                                </ol>
                            </div>
                        </div>
                        <div>
                            <div class="well">
                                <div class="thumbnail">
                                    <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                                    <div class="caption">
                                        <h3>Название</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item" aria-current="page">#Теги</li>
                                </ol>
                            </div>
                        </div>
                        <div>
                            <div class="well">
                                <div class="thumbnail">
                                    <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                                    <div class="caption">
                                        <h3>Название</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item" aria-current="page">#Теги</li>
                                </ol>
                            </div>
                        </div>
                        <div>
                            <div class="well">
                                <div class="thumbnail">
                                    <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                                    <div class="caption">
                                        <h3>Название</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item" aria-current="page">#Теги</li>
                                </ol>
                            </div>
                        </div>
                        <div>
                            <div class="well">
                                <div class="thumbnail">
                                    <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                                    <div class="caption">
                                        <h3>Название</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item" aria-current="page">#Теги</li>
                                </ol>
                            </div>
                        </div>
                        <div>
                            <div class="well">
                                <div class="thumbnail">
                                    <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                                    <div class="caption">
                                        <h3>Название</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item" aria-current="page">#Теги</li>
                                </ol>
                            </div>
                        </div>
                        <div>
                            <div class="well">
                                <div class="thumbnail">
                                    <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                                    <div class="caption">
                                        <h3>Название</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item" aria-current="page">#Теги</li>
                                </ol>
                            </div>
                        </div>
                        <div>
                            <div class="well">
                                <div class="thumbnail">
                                    <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                                    <div class="caption">
                                        <h3>Название</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item" aria-current="page">#Теги</li>
                                </ol>
                            </div>
                        </div>
                        <div>
                            <div class="well">
                                <div class="thumbnail">
                                    <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                                    <div class="caption">
                                        <h3>Название</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item"><a href="#">#Теги</a></li>
                                    <li class="breadcrumb-item" aria-current="page">#Теги</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="control">
                    <div class="nav-ctrl">
                        <span class="prev" data-shift="prev">prev</span>
                        <span class="next" data-shift="next">next</span>
                    </div>
                    <ul class="dots-ctrl"></ul>
                </div>
            </div>
        </div>


        <h1 class="text-center">Блог</h1>

        <div class="row text-center">
            <div class="col-lg-6">
                <div class="thumbnail">
                    <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                    <div class="caption">
                        <h3>Название</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur.</p>
                        <p><a href="#" class="btn btn-default" role="button">Прочитать</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="thumbnail">
                    <img src="https://mirpozitiva.ru/uploads/posts/2017-04/medium/1492620921_06.jpg" alt="...">
                    <div class="caption">
                        <h3>Название</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur.</p>
                        <p><a href="#" class="btn btn-default" role="button">Прочитать</a></p>
                    </div>
                </div>
            </div>
            <p><a class="btn btn-default btn-lg" href="#"><span class="glyphicon glyphicon-chevron-down"></span> Показать еще</a></p>
        </div>

    </div>
</div>




